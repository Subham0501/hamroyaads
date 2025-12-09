{{-- Base Template Structure - All templates extend from this --}}
<div class="min-h-screen bg-gradient-to-br {{ $bg }}" data-theme-color="{{ $color }}" id="template-container" style="--theme-color: {{ $color }};">
    @php
    $heroStyle = $heroStyle ?? 'centered-with-icon';
    $sectionsLayout = $sectionsLayout ?? 'centered-text';
    @endphp

    <!-- Navigation -->
    <nav class="fixed top-0 left-0 right-0 z-50 bg-white/90 dark:bg-[#1e293b]/90 backdrop-blur-xl border-b border-gray-200/60 dark:border-[#334155]/60 transition-all duration-500 shadow-sm" id="main-nav">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="flex items-center justify-between h-20">
                <div class="flex items-center space-x-3 group cursor-pointer">
                    <div class="w-12 h-12 rounded-xl theme-bg flex items-center justify-center shadow-lg transform group-hover:scale-110 transition-all duration-300 group-hover:rotate-6">
                        @if($category == 'marriage' || $category == 'valentine' || $category == 'mothersday')
                        <svg class="w-7 h-7 text-white" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                        </svg>
                        @elseif($category == 'fathersday')
                        <svg class="w-7 h-7 text-white" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                        </svg>
                        @else
                        <svg class="w-7 h-7 text-white" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 8v13m0-13V6a2 2 0 112 2h-2zm0 0V5.5A2.5 2.5 0 109.5 8H12zm-7 4h14M5 12a2 2 0 110-4h14a2 2 0 110 4M5 12v7a2 2 0 002 2h10a2 2 0 002-2v-7"/>
                        </svg>
                        @endif
                    </div>
                    <span class="text-2xl font-bold bg-gradient-to-r from-gray-900 to-gray-700 dark:from-white dark:to-gray-300 bg-clip-text text-transparent">Hamro Yaad</span>
                </div>
                <div class="hidden md:flex items-center space-x-1">
                    <a href="#home" class="px-5 py-2.5 rounded-lg text-gray-700 dark:text-gray-300 hover:text-white dark:hover:text-white font-medium transition-all duration-300 hover:bg-gradient-to-r hover:from-theme-color hover:to-theme-color-dark relative group">
                        <span class="relative z-10">Home</span>
                        <span class="absolute inset-0 rounded-lg bg-gradient-to-r from-theme-color to-theme-color-dark opacity-0 group-hover:opacity-100 transition-opacity duration-300"></span>
                    </a>
                    <a href="#story" class="px-5 py-2.5 rounded-lg text-gray-700 dark:text-gray-300 hover:text-white dark:hover:text-white font-medium transition-all duration-300 hover:bg-gradient-to-r hover:from-theme-color hover:to-theme-color-dark relative group">
                        <span class="relative z-10">Our Story</span>
                        <span class="absolute inset-0 rounded-lg bg-gradient-to-r from-theme-color to-theme-color-dark opacity-0 group-hover:opacity-100 transition-opacity duration-300"></span>
                    </a>
                    <a href="#memories" class="px-5 py-2.5 rounded-lg text-gray-700 dark:text-gray-300 hover:text-white dark:hover:text-white font-medium transition-all duration-300 hover:bg-gradient-to-r hover:from-theme-color hover:to-theme-color-dark relative group">
                        <span class="relative z-10">Memories</span>
                        <span class="absolute inset-0 rounded-lg bg-gradient-to-r from-theme-color to-theme-color-dark opacity-0 group-hover:opacity-100 transition-opacity duration-300"></span>
                    </a>
                </div>
            </div>
        </div>
    </nav>

    @include('templates.designs.layouts.hero-' . $heroStyle)
    @include('templates.designs.layouts.message-section')
    @include('templates.designs.layouts.sections-' . $sectionsLayout)
    @include('templates.designs.layouts.memories-gallery')
    @include('templates.designs.layouts.footer')
</div>

@include('templates.designs.styles.common-styles')
