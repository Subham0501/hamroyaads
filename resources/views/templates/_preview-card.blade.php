{{-- Template Preview Card Component --}}
@php
$templateId = $tmpl['id'];
$templateData = $templates[$templateId] ?? null;
if (!$templateData) return;

// Default images based on category
$defaultImages = [
    'fathersday' => [
        'hero' => 'https://images.unsplash.com/photo-1511988617509-a57c8a288659?w=1600&q=80',
    ],
    'marriage' => [
        'hero' => 'https://images.unsplash.com/photo-1519741497674-611481863552?w=1600&q=80',
    ],
    'birthday' => [
        'hero' => 'https://images.unsplash.com/photo-1530103862676-de8c9debad1d?w=1600&q=80',
    ],
    'valentine' => [
        'hero' => 'https://images.unsplash.com/photo-1518199266791-5375a83190b7?w=1600&q=80',
    ],
    'mothersday' => [
        'hero' => 'https://images.unsplash.com/photo-1511988617509-a57c8a288659?w=1600&q=80',
    ]
];

$category = $templateData['category'] ?? 'marriage';
$categoryImages = $defaultImages[$category] ?? $defaultImages['marriage'];
$design = $templateData['design'] ?? 'elegant';
@endphp

<div class="group relative overflow-hidden rounded-2xl bg-white dark:bg-[#1e293b] border-2 border-gray-200 dark:border-[#334155] hover:border-[{{ $templateData['color'] }}]/50 transition-all duration-300 hover:-translate-y-2 shadow-lg hover:shadow-2xl">
    <!-- Browser Frame -->
    <div class="bg-gray-100 dark:bg-[#0f172a] px-3 py-2 flex items-center gap-2 border-b border-gray-200 dark:border-[#334155]">
        <div class="flex gap-1.5">
            <div class="w-2.5 h-2.5 rounded-full bg-red-500"></div>
            <div class="w-2.5 h-2.5 rounded-full bg-yellow-500"></div>
            <div class="w-2.5 h-2.5 rounded-full bg-green-500"></div>
        </div>
        <div class="flex-1 bg-white dark:bg-[#1e293b] rounded px-2 py-0.5 text-[8px] text-gray-500 dark:text-[#64748b] text-center font-mono">
            hamroyaad.com
        </div>
    </div>
    
    <!-- Template Preview -->
    <div class="relative aspect-[4/5] overflow-hidden bg-gradient-to-br {{ $templateData['bg'] }}">
        <div class="absolute inset-0 scale-[0.15] origin-top-left w-[667%] h-[667%] pointer-events-none">
            @include('templates.preview-designs.' . $design, [
                'templateData' => $templateData,
                'categoryImages' => $categoryImages,
                'category' => $category
            ])
        </div>
    </div>
    
    <!-- Card Footer -->
    <div class="p-5 bg-white dark:bg-[#1e293b] border-t border-gray-200 dark:border-[#334155]">
        <h4 class="font-bold text-lg text-gray-900 dark:text-white mb-2">{{ $tmpl['name'] }}</h4>
        <p class="text-sm text-gray-600 dark:text-[#cbd5e1] mb-4">{{ $tmpl['desc'] }}</p>
        <div class="flex gap-3">
            <a href="/template/{{ $tmpl['id'] }}/preview" class="flex-1 bg-gray-100 dark:bg-[#334155] text-gray-700 dark:text-white py-3 rounded-xl text-sm font-semibold hover:bg-gray-200 dark:hover:bg-[#475569] transition-colors text-center">
                Preview
            </a>
            <a href="/template/{{ $tmpl['id'] }}/customize" class="flex-1 text-white py-3 rounded-xl text-sm font-semibold hover:opacity-90 transition-colors text-center shadow-lg" style="background-color: {{ $templateData['color'] }}">
                Customize
            </a>
        </div>
    </div>
</div>
