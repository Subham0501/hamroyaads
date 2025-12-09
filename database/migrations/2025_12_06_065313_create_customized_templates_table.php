<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('customized_templates', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('template')->index();
            $table->string('slug')->unique(); 
            $table->enum('status', ['draft', 'published', 'archived'])->default('draft');
            
            // Basic Content Fields
            $table->string('heading')->nullable();
            $table->string('subheading')->nullable();
            $table->text('message')->nullable();
            $table->string('from')->nullable();
            
            // Section 1
            $table->string('section1_title')->nullable();
            $table->text('section1_content')->nullable();
            
            // Section 2
            $table->string('section2_title')->nullable();
            $table->text('section2_content')->nullable();
            
            // Section 3
            $table->string('section3_title')->nullable();
            $table->text('section3_content')->nullable();
            
            // Section 4
            $table->string('section4_title')->nullable();
            $table->text('section4_content')->nullable();
            
            // Section 5
            $table->string('section5_title')->nullable();
            $table->text('section5_content')->nullable();
            
            // Theme Settings
            $table->string('theme_color')->default('#ff6b6b'); // Hex color code
            $table->string('bg_color')->nullable(); // Background color hex code
            $table->string('bg_style')->default('gradient'); // gradient, solid, image
            
            // Images stored as JSON
            // Structure: {
            //   "hero": "path/to/hero.jpg",
            //   "section2": "path/to/section2.jpg",
            //   "section3": {
            //     "image1": "path/to/img1.jpg",
            //     "image2": "path/to/img2.jpg",
            //     "image3": "path/to/img3.jpg"
            //   },
            //   "memories": ["path/to/memory1.jpg", "path/to/memory2.jpg", ...]
            // }
            $table->json('images')->nullable();
            
            // Additional dynamic fields stored as JSON (for future extensibility)
            $table->json('custom_fields')->nullable();
            
            $table->timestamps();
            
            // Indexes for better query performance
            $table->index(['user_id', 'status']);
            $table->index(['template', 'status']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customized_templates');
    }
};
