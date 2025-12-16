@php
$templateData = $templates[$tmpl['id']] ?? null;
$color = $templateData['color'] ?? '#3b82f6';
$iconMap = [
    'heart' => '<svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/></svg>',
    'gift' => '<svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M20 6h-2.18c.11-.31.18-.65.18-1a2.996 2.996 0 00-5.5-1.65l-.5.67-.5-.68C10.96 2.54 10 2 9 2 7.34 2 6 3.34 6 5c0 .35.07.69.18 1H4c-1.11 0-1.99.89-1.99 2L2 19c0 1.11.89 2 2 2h16c1.11 0 2-.89 2-2V8c0-1.11-.89-2-2-2zm-5-2c.55 0 1 .45 1 1s-.45 1-1 1-1-.45-1-1 .45-1 1-1zM9 4c.55 0 1 .45 1 1s-.45 1-1 1-1-.45-1-1 .45-1 1-1zm11 15H4v-2h16v2zm0-5H4V8h5.08L7 10.83 8.62 12 11 8.76l1-1.36 1 1.36L15.38 12 17 10.83 14.92 8H20v6z"/></svg>',
    'person' => '<svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/></svg>',
];
$iconSvg = $iconMap[$tmpl['icon']] ?? $iconMap['heart'];
@endphp

<div class="group relative bg-white dark:bg-[#1e293b] rounded-2xl shadow-xl overflow-hidden border-2 border-gray-100 dark:border-[#334155] hover:border-opacity-50 transition-all duration-300 transform hover:-translate-y-2 hover:shadow-2xl">
    <!-- Card Header with Gradient -->
    <div class="relative h-48 overflow-hidden" style="background: linear-gradient(135deg, {{ $color }} 0%, {{ $color }}dd 100%);">
        <div class="absolute inset-0 bg-black/10"></div>
        <div class="absolute inset-0 flex items-center justify-center">
            <div class="text-white/90 transform group-hover:scale-110 transition-transform duration-300">
                {!! $iconSvg !!}
            </div>
        </div>
        <!-- Decorative Pattern -->
        <div class="absolute inset-0 opacity-10">
            <div class="absolute top-4 left-4 w-20 h-20 border-2 border-white rounded-full"></div>
            <div class="absolute bottom-4 right-4 w-16 h-16 border-2 border-white rounded-full"></div>
        </div>
    </div>
    
    <!-- Card Content -->
    <div class="p-6">
        <h3 class="text-xl font-black text-gray-900 dark:text-white mb-2">{{ $tmpl['name'] }}</h3>
        <p class="text-sm text-gray-600 dark:text-[#cbd5e1] mb-4">{{ $tmpl['desc'] }}</p>
        
        <!-- Action Button -->
        <div class="flex">
            <a href="{{ route('template.customize', ['template' => $tmpl['id']]) }}" 
               class="w-full text-center px-4 py-2.5 rounded-xl font-semibold text-white transition-all duration-300 transform hover:scale-105 hover:shadow-lg" 
               style="background-color: {{ $color }};">
                Customize Template
            </a>
        </div>
    </div>
    
    <!-- Hover Effect Border -->
    <div class="absolute inset-0 border-2 rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-300 pointer-events-none" style="border-color: {{ $color }};"></div>
</div>

