<?php

namespace App\Http\Controllers;

use App\Models\CustomizedTemplate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class CustomizedTemplateController extends Controller
{
    /**
     * Store a newly created customized template.
     */
    public function store(Request $request)
    {
        \Log::info('Template store request received', [
            'user_id' => Auth::id(),
            'has_template' => $request->has('template'),
            'has_recipient_name' => $request->has('recipient_name'),
            'has_pin' => $request->has('pin'),
        ]);
        
        try {
            $validated = $request->validate([
                'template' => 'required|string',
                'heading' => 'nullable|string|max:255',
                'subheading' => 'nullable|string|max:255',
                'message' => 'nullable|string',
                'from' => 'nullable|string|max:255',
                'section1_title' => 'nullable|string|max:255',
                'section1_content' => 'nullable|string',
                'section2_title' => 'nullable|string|max:255',
                'section2_content' => 'nullable|string',
                'section3_title' => 'nullable|string|max:255',
                'section3_content' => 'nullable|string',
                'section4_title' => 'nullable|string|max:255',
                'section4_content' => 'nullable|string',
                'section5_title' => 'nullable|string|max:255',
                'section5_content' => 'nullable|string',
                'theme_color' => 'nullable|string|max:7',
                'bg_color' => 'nullable|string|max:7',
                'bg_style' => 'nullable|string|in:gradient,solid,image',
                'images' => 'nullable|array',
                'status' => 'nullable|string|in:draft,published,archived',
                'slug' => 'nullable|string|max:255',
                'recipient_name' => 'required|string|max:255',
                'pin' => 'required|string|size:5|regex:/^[0-9]{5}$/',
            ]);
            
            \Log::info('Validation passed', ['recipient_name' => $validated['recipient_name'] ?? 'N/A']);
        } catch (\Illuminate\Validation\ValidationException $e) {
            \Log::error('Validation failed', [
                'errors' => $e->errors(),
                'request_data' => $request->all()
            ]);
            throw $e;
        } catch (\Exception $e) {
            \Log::error('Store method error: ' . $e->getMessage(), [
                'trace' => $e->getTraceAsString()
            ]);
            throw $e;
        }

        // Don't generate slug - admin will approve and generate slug later
        // Slug will be null for draft templates
        
        // Handle image uploads if provided
        if ($request->has('images') && is_array($request->images) && !empty($request->images)) {
            try {
                $validated['images'] = $this->handleImageUploads($request->images, Auth::id());
            } catch (\Exception $e) {
                \Log::error('Image upload error: ' . $e->getMessage());
             
                $validated['images'] = [];
            }
        } else {
            $validated['images'] = [];
        }

        $validated['user_id'] = Auth::id();
        // Always save as draft - admin will approve later
        $validated['status'] = 'draft';
        // Don't set slug - will be generated when admin approves
        unset($validated['slug']);

        \Log::info('Creating customized template', [
            'user_id' => $validated['user_id'],
            'recipient_name' => $validated['recipient_name'] ?? 'N/A',
            'status' => $validated['status'],
        ]);

        $customizedTemplate = CustomizedTemplate::create($validated);

        \Log::info('Template created successfully', [
            'template_id' => $customizedTemplate->id,
            'slug' => $customizedTemplate->slug,
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Template submitted successfully! It will be reviewed by admin before publishing.',
            'data' => $customizedTemplate,
        ]);
    }

    /**
     * Update an existing customized template.
     */
    public function update(Request $request, $id)
    {
        $customizedTemplate = CustomizedTemplate::where('id', $id)
            ->where('user_id', Auth::id())
            ->firstOrFail();

        $validated = $request->validate([
            'heading' => 'nullable|string|max:255',
            'subheading' => 'nullable|string|max:255',
            'message' => 'nullable|string',
            'from' => 'nullable|string|max:255',
            'section1_title' => 'nullable|string|max:255',
            'section1_content' => 'nullable|string',
            'section2_title' => 'nullable|string|max:255',
            'section2_content' => 'nullable|string',
            'section3_title' => 'nullable|string|max:255',
            'section3_content' => 'nullable|string',
            'section4_title' => 'nullable|string|max:255',
            'section4_content' => 'nullable|string',
            'section5_title' => 'nullable|string|max:255',
            'section5_content' => 'nullable|string',
            'theme_color' => 'nullable|string|max:7',
            'bg_color' => 'nullable|string|max:7',
            'bg_style' => 'nullable|string|in:gradient,solid,image',
            'images' => 'nullable|array',
            'status' => 'nullable|string|in:draft,published,archived',
        ]);

        // Handle image uploads if provided
        if ($request->has('images') && is_array($request->images)) {
            $validated['images'] = $this->handleImageUploads($request->images, Auth::id(), $customizedTemplate->images);
        }

        $customizedTemplate->update($validated);

        return response()->json([
            'success' => true,
            'message' => 'Template updated successfully!',
            'data' => $customizedTemplate,
        ]);
    }

    /**
     * Get a customized template by slug and display as website.
     */
    public function show(Request $request, $slug, $templates = null)
    {
        $customizedTemplate = CustomizedTemplate::where('slug', $slug)
            ->where('status', 'published')
            ->with('user')
            ->firstOrFail();

        // Check if PIN is verified in session
        $pinVerified = $request->session()->get("template_pin_verified_{$slug}", false);
        
        if (!$pinVerified) {
            // Show PIN entry page
            return view('templates.pin-verification', [
                'slug' => $slug,
                'recipient_name' => $customizedTemplate->recipient_name,
            ]);
        }

        // Get template configurations
        if ($templates === null) {
            $templates = $this->getTemplateConfigs();
        }
        
        $templateData = $templates[$customizedTemplate->template] ?? null;
        
        if (!$templateData) {
            abort(404, 'Template configuration not found');
        }

        // Ensure section defaults
        $templateData = $this->ensureSectionDefaults($templateData);

        // Override with customized data
        $templateData['defaults'] = array_merge($templateData['defaults'] ?? [], [
            'heading' => $customizedTemplate->heading,
            'subheading' => $customizedTemplate->subheading,
            'message' => $customizedTemplate->message,
            'from' => $customizedTemplate->from,
            'section1_title' => $customizedTemplate->section1_title,
            'section1_content' => $customizedTemplate->section1_content,
            'section2_title' => $customizedTemplate->section2_title,
            'section2_content' => $customizedTemplate->section2_content,
            'section3_title' => $customizedTemplate->section3_title,
            'section3_content' => $customizedTemplate->section3_content,
            'section4_title' => $customizedTemplate->section4_title,
            'section4_content' => $customizedTemplate->section4_content,
            'section5_title' => $customizedTemplate->section5_title,
            'section5_content' => $customizedTemplate->section5_content,
        ]);

        // Override theme color
        $templateData['color'] = $customizedTemplate->theme_color;

        return view('templates.published', [
            'customizedTemplate' => $customizedTemplate,
            'templateData' => $templateData,
            'template' => $customizedTemplate->template,
        ]);
    }

    /**
     * Verify PIN and allow access to template.
     */
    public function verifyPin(Request $request, $slug)
    {
        $request->validate([
            'pin' => 'required|string|size:5|regex:/^[0-9]{5}$/',
        ]);

        $customizedTemplate = CustomizedTemplate::where('slug', $slug)
            ->where('status', 'published')
            ->firstOrFail();

        if ($customizedTemplate->pin === $request->pin) {
            // Store PIN verification in session
            $request->session()->put("template_pin_verified_{$slug}", true);
            
            // Redirect to the template view
            return redirect()->route('templates.show', $slug);
        }

        return back()->with('error', 'Invalid PIN. Please try again.');
    }

    /**
     * Ensure section defaults exist.
     */
    private function ensureSectionDefaults($templateData)
    {
        $defaultSections = [
            'section1_title' => 'Our Love',
            'section1_content' => 'Every moment with you feels like a dream. Your love fills my heart with joy and happiness.',
            'section2_title' => 'Our First Day',
            'section2_content' => 'The day we met changed everything. I knew from that moment that you were special.',
            'section3_title' => 'Our Journey',
            'section3_content' => 'Together we\'ve created countless beautiful memories. Each day with you is a new adventure.',
            'section4_title' => 'Our Promise',
            'section4_content' => 'I promise to stand by you, support you, and love you through all of life\'s adventures.',
            'section5_title' => 'Forever',
            'section5_content' => 'Today, tomorrow, and forever - I choose you. You are my everything.'
        ];
        
        if (!isset($templateData['defaults'])) {
            $templateData['defaults'] = [];
        }
        
        $templateData['defaults'] = array_merge($defaultSections, $templateData['defaults']);
        return $templateData;
    }

    /**
     * Get template configurations.
     * This should match the templates array from routes/web.php
     */
    private function getTemplateConfigs()
    {
        // Extract templates from routes file
        // In production, consider moving this to config/templates.php
        $routesFile = base_path('routes/web.php');
        $content = file_get_contents($routesFile);
        
        // Extract the templates array using regex
        if (preg_match('/\$templates\s*=\s*\[(.*?)\];/s', $content, $matches)) {
            // This is complex - for now return empty and let route pass it
            return [];
        }
        
        return [];
    }

    /**
     * Get all customized templates for the authenticated user.
     */
    public function index()
    {
        $templates = CustomizedTemplate::where('user_id', Auth::id())
            ->orderBy('created_at', 'desc')
            ->get();

        return response()->json([
            'success' => true,
            'data' => $templates,
        ]);
    }

    /**
     * Delete a customized template.
     */
    public function destroy($id)
    {
        $customizedTemplate = CustomizedTemplate::where('id', $id)
            ->where('user_id', Auth::id())
            ->firstOrFail();

        // Delete associated images
        if ($customizedTemplate->images) {
            $this->deleteImages($customizedTemplate->images);
        }

        $customizedTemplate->delete();

        return response()->json([
            'success' => true,
            'message' => 'Template deleted successfully!',
        ]);
    }

    /**
     * Handle image uploads and return paths.
     */
    private function handleImageUploads(array $images, int $userId, ?array $existingImages = null): array
    {
        $uploadedImages = $existingImages ?? [];

        // Handle hero image
        if (isset($images['hero']) && is_string($images['hero']) && Str::startsWith($images['hero'], 'data:image')) {
            $uploadedImages['hero'] = $this->saveBase64Image($images['hero'], $userId, 'hero');
        } elseif (isset($images['hero']) && is_string($images['hero'])) {
            $uploadedImages['hero'] = $images['hero']; // Already a path
        }

        // Handle section2 image
        if (isset($images['section2']) && is_string($images['section2']) && Str::startsWith($images['section2'], 'data:image')) {
            $uploadedImages['section2'] = $this->saveBase64Image($images['section2'], $userId, 'section2');
        } elseif (isset($images['section2']) && is_string($images['section2'])) {
            $uploadedImages['section2'] = $images['section2'];
        }

        // Handle section3 images
        if (isset($images['section3']) && is_array($images['section3'])) {
            $uploadedImages['section3'] = $uploadedImages['section3'] ?? [];
            foreach (['image1', 'image2', 'image3'] as $key) {
                if (isset($images['section3'][$key])) {
                    if (is_string($images['section3'][$key]) && Str::startsWith($images['section3'][$key], 'data:image')) {
                        $uploadedImages['section3'][$key] = $this->saveBase64Image($images['section3'][$key], $userId, "section3-{$key}");
                    } elseif (is_string($images['section3'][$key])) {
                        $uploadedImages['section3'][$key] = $images['section3'][$key];
                    }
                }
            }
        }

        // Handle memories array
        if (isset($images['memories']) && is_array($images['memories'])) {
            $uploadedImages['memories'] = [];
            foreach ($images['memories'] as $index => $memory) {
                if (is_string($memory) && Str::startsWith($memory, 'data:image')) {
                    $uploadedImages['memories'][] = $this->saveBase64Image($memory, $userId, "memory-{$index}");
                } elseif (is_string($memory)) {
                    $uploadedImages['memories'][] = $memory;
                }
            }
        }

        return $uploadedImages;
    }

    /**
     * Save a base64 encoded image to storage.
     */
    private function saveBase64Image(string $base64Image, int $userId, string $prefix): string
    {
        // Extract image data
        if (preg_match('/^data:image\/(\w+);base64,/', $base64Image, $matches)) {
            $extension = $matches[1];
            $imageData = base64_decode(substr($base64Image, strpos($base64Image, ',') + 1));
            
            if ($imageData === false) {
                \Log::error('Failed to decode base64 image');
                return '';
            }
            
            $filename = $prefix . '_' . time() . '_' . Str::random(10) . '.' . $extension;
            $path = "templates/{$userId}/{$filename}";
            
            // Ensure directory exists
            $directory = "templates/{$userId}";
            if (!Storage::disk('public')->exists($directory)) {
                Storage::disk('public')->makeDirectory($directory);
            }
            
            // Save the image
            $saved = Storage::disk('public')->put($path, $imageData);
            
            if ($saved) {
                $url = Storage::url($path);
                \Log::info('Image saved successfully', ['path' => $path, 'url' => $url]);
                return $url;
            } else {
                \Log::error('Failed to save image', ['path' => $path]);
                return '';
            }
        }

        \Log::warning('Invalid base64 image format');
        return $base64Image; // Return as-is if not valid base64
    }

    /**
     * Delete images from storage.
     */
    private function deleteImages(array $images): void
    {
        foreach ($images as $key => $value) {
            if (is_string($value)) {
                $this->deleteImageFile($value);
            } elseif (is_array($value)) {
                foreach ($value as $item) {
                    if (is_string($item)) {
                        $this->deleteImageFile($item);
                    }
                }
            }
        }
    }

    /**
     * Delete a single image file.
     */
    private function deleteImageFile(string $path): void
    {
        if (Str::startsWith($path, '/storage/')) {
            $relativePath = Str::after($path, '/storage/');
            Storage::disk('public')->delete($relativePath);
        }
    }

    /**
     * Admin: Show all draft templates pending approval.
     */
    public function adminIndex()
    {
        // Check if user is admin
        if (!Auth::check() || !Auth::user()->is_admin) {
            abort(403, 'Unauthorized access');
        }

        $draftTemplates = CustomizedTemplate::where('status', 'draft')
            ->with('user')
            ->orderBy('created_at', 'desc')
            ->get();

        return view('admin.templates.index', [
            'templates' => $draftTemplates,
        ]);
    }

    /**
     * Admin: Show single draft template for review.
     */
    public function adminShow($id)
    {
        // Check if user is admin
        if (!Auth::check() || !Auth::user()->is_admin) {
            abort(403, 'Unauthorized access');
        }

        $template = CustomizedTemplate::with('user')->findOrFail($id);

        return view('admin.templates.show', [
            'template' => $template,
        ]);
    }

    /**
     * Admin: Approve and publish a draft template.
     */
    public function adminApprove(Request $request, $id)
    {
        // Check if user is admin
        if (!Auth::check() || !Auth::user()->is_admin) {
            return response()->json([
                'success' => false,
                'message' => 'Unauthorized access',
            ], 403);
        }

        $template = CustomizedTemplate::findOrFail($id);

        if ($template->status !== 'draft') {
            return response()->json([
                'success' => false,
                'message' => 'Template is not in draft status',
            ], 400);
        }

        // Generate slug from recipient_name-user_id format
        if (!empty($template->recipient_name)) {
            $slugBase = Str::slug($template->recipient_name) . '-' . $template->user_id;
            $slug = $slugBase;
            $counter = 1;
            
            // Ensure uniqueness
            while (CustomizedTemplate::where('slug', $slug)->where('id', '!=', $template->id)->exists()) {
                $slug = $slugBase . '-' . $counter;
                $counter++;
            }
            
            $template->slug = $slug;
        } else {
            $template->slug = 'template-' . $template->user_id . '-' . time();
        }

        // Update status to published
        $template->status = 'published';
        $template->save();

        \Log::info('Template approved by admin', [
            'template_id' => $template->id,
            'slug' => $template->slug,
            'admin_id' => Auth::id(),
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Template approved and published successfully!',
            'data' => $template,
            'slug' => $template->slug,
        ]);
    }

    /**
     * Admin: Reject a draft template.
     */
    public function adminReject(Request $request, $id)
    {
        // Check if user is admin
        if (!Auth::check() || !Auth::user()->is_admin) {
            return response()->json([
                'success' => false,
                'message' => 'Unauthorized access',
            ], 403);
        }

        $template = CustomizedTemplate::findOrFail($id);

        if ($template->status !== 'draft') {
            return response()->json([
                'success' => false,
                'message' => 'Template is not in draft status',
            ], 400);
        }

        // Update status to archived (rejected)
        $template->status = 'archived';
        $template->save();

        \Log::info('Template rejected by admin', [
            'template_id' => $template->id,
            'admin_id' => Auth::id(),
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Template rejected successfully!',
        ]);
    }
}
