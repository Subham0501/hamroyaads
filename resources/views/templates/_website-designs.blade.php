{{-- Premium Full Website Template Designs - Dynamic Include System --}}
@php
$design = $templateData['design'] ?? 'classic';
$color = $templateData['color'];
$bg = $templateData['bg'];
$category = $templateData['category'] ?? 'marriage';

// Extract template ID from design name (e.g., 'marriage-1-elegant' -> 'marriage-1')
$templateId = null;
if (preg_match('/^(marriage|fathersday|birthday|valentine|mothersday)-\d+/', $design, $matches)) {
    $templateId = $matches[0]; // e.g., 'marriage-1'
} elseif (isset($template)) {
    // Template ID is passed as $template variable (e.g., 'marriage-1')
    $templateId = $template;
} elseif (isset($templateData['id'])) {
    $templateId = $templateData['id'];
}

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

$categoryImages = $defaultImages[$category] ?? $defaultImages['marriage'];

// Determine design file path
$designFile = null;
if ($templateId) {
    $designFile = 'templates.designs.' . $category . '.' . $templateId;
} else {
    // Fallback to old system
    $designFile = null;
}
@endphp

@if($designFile && view()->exists($designFile))
    {{-- Include unique design file for this template --}}
    @include($designFile, [
        'templateData' => $templateData,
        'color' => $color,
        'bg' => $bg,
        'category' => $category,
        'categoryImages' => $categoryImages
    ])
@elseif($design == 'elegant' || $design == 'marriage-1-elegant' || $design == 'birthday-3-elegant' || $design == 'valentine-1-romantic' || $design == 'mothersday-1-grateful' || $design == 'marriage-4-timeless' || $design == 'fathersday-2-hero' || $design == 'birthday-1-celebration' || $design == 'valentine-3-passionate' || $design == 'mothersday-2-angel' || str_contains($design, 'elegant') || str_contains($design, 'romantic') || str_contains($design, 'grateful') || str_contains($design, 'hero') || str_contains($design, 'celebration') || str_contains($design, 'passionate') || str_contains($design, 'angel') || str_contains($design, 'timeless'))
    {{-- Template 1: Elegant Full-Screen Hero with Floating Elements --}}
    <div class="min-h-screen bg-gradient-to-br {{ $bg }}" data-theme-color="{{ $color }}" id="template-container">
        <!-- Professional Navigation Header -->
        <nav class="fixed top-0 left-0 right-0 z-50 bg-white/90 dark:bg-[#1e293b]/90 backdrop-blur-xl border-b border-gray-200/60 dark:border-[#334155]/60 transition-all duration-500 shadow-sm" id="main-nav">
            <div class="max-w-7xl mx-auto px-6 lg:px-8">
                <div class="flex items-center justify-between h-20">
                    <div class="flex items-center space-x-3 group cursor-pointer">
                        <div class="w-12 h-12 rounded-xl theme-bg flex items-center justify-center shadow-lg transform group-hover:scale-110 transition-all duration-300 group-hover:rotate-6">
                            <svg class="w-7 h-7 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                            </svg>
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
                        <!-- Theme Toggle Button in Navigation -->
                        <button id="theme-toggle-nav" type="button" onclick="if(window.toggleTheme) window.toggleTheme(event);" class="ml-3 p-2.5 rounded-lg bg-gray-100 dark:bg-[#334155] text-gray-700 dark:text-[#cbd5e1] hover:bg-gray-200 dark:hover:bg-[#475569] transition-all duration-300 hover:scale-110 group" aria-label="Toggle dark mode">
                            <svg id="moon-icon-nav" class="w-5 h-5 dark:hidden transition-transform group-hover:rotate-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"></path>
                            </svg>
                            <svg id="sun-icon-nav" class="w-5 h-5 hidden dark:block transition-transform group-hover:rotate-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </nav>

        <!-- Hero Section -->
        <section id="home" class="relative min-h-screen flex items-center justify-center px-8 py-32 overflow-hidden pt-20">
            <!-- Animated Background -->
            <div class="absolute inset-0 z-0">
                <img id="hero-image-display" data-image="hero" src="{{ $categoryImages['hero'] }}" alt="Hero" class="w-full h-full object-cover transition-all duration-1000 scale-110">
                <div class="absolute inset-0 bg-gradient-to-br from-black/80 via-black/50 to-black/30"></div>
                <!-- Enhanced floating particles effect -->
                <div class="absolute inset-0 opacity-40">
                    <div class="absolute top-20 left-20 w-4 h-4 rounded-full theme-bg animate-float" style="animation-delay: 0s; box-shadow: 0 0 20px var(--theme-color);"></div>
                    <div class="absolute top-40 right-32 w-5 h-5 rounded-full theme-bg animate-float" style="animation-delay: 0.5s; box-shadow: 0 0 25px var(--theme-color);"></div>
                    <div class="absolute bottom-32 left-1/4 w-3 h-3 rounded-full theme-bg animate-float" style="animation-delay: 1s; box-shadow: 0 0 15px var(--theme-color);"></div>
                    <div class="absolute top-1/2 right-1/4 w-4 h-4 rounded-full theme-bg animate-float" style="animation-delay: 1.5s; box-shadow: 0 0 20px var(--theme-color);"></div>
                    <div class="absolute bottom-20 right-20 w-3 h-3 rounded-full theme-bg animate-float" style="animation-delay: 2s; box-shadow: 0 0 15px var(--theme-color);"></div>
                </div>
                <!-- Animated gradient overlay -->
                <div class="absolute inset-0 bg-gradient-to-r from-theme-color/20 via-transparent to-theme-color/20 animate-gradient-shift"></div>
            </div>
            
            <div class="relative z-10 text-center space-y-12 max-w-7xl mx-auto animate-fade-in">
                <div class="inline-block px-10 py-5 rounded-full mb-8 backdrop-blur-2xl border-2 border-white/50 theme-bg-opacity shadow-2xl transform hover:scale-105 transition-all duration-300" data-theme-element="badge">
                    <p id="preview-subheading" class="text-xl md:text-2xl font-bold uppercase tracking-[0.3em] text-white drop-shadow-lg" data-theme-element="text">{{ $templateData['defaults']['subheading'] }}</p>
                </div>
                <h1 id="preview-heading" class="text-7xl md:text-9xl lg:text-[12rem] font-black text-white leading-[0.9] mb-12 tracking-tight animate-slide-up" style="text-shadow: 0 0 100px rgba(0,0,0,0.8), 0 10px 50px rgba(0,0,0,0.6), 0 0 200px var(--theme-color); filter: drop-shadow(0 0 30px rgba(255,255,255,0.3));">
                    {{ $templateData['defaults']['heading'] }}
                </h1>
                <div class="flex justify-center my-20 animate-scale-in">
                    <div class="relative w-52 h-52 md:w-64 md:h-64 rounded-full flex items-center justify-center shadow-[0_30px_80px_rgba(0,0,0,0.5)] backdrop-blur-md border-4 border-white/60 theme-bg transform hover:scale-110 hover:rotate-12 transition-all duration-700 cursor-pointer group" data-theme-element="icon">
                        <div class="absolute inset-0 rounded-full bg-white/20 blur-xl group-hover:blur-2xl transition-all duration-700"></div>
                        @if($category == 'marriage' || $category == 'valentine' || $category == 'mothersday')
                        <svg class="w-32 h-32 md:w-40 md:h-40 text-white relative z-10 transform group-hover:scale-110 transition-transform duration-500" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                        </svg>
                        @elseif($category == 'fathersday')
                        <svg class="w-32 h-32 md:w-40 md:h-40 text-white relative z-10 transform group-hover:scale-110 transition-transform duration-500" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                        </svg>
                        @else
                        <svg class="w-32 h-32 md:w-40 md:h-40 text-white relative z-10 transform group-hover:scale-110 transition-transform duration-500" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 8v13m0-13V6a2 2 0 112 2h-2zm0 0V5.5A2.5 2.5 0 109.5 8H12zm-7 4h14M5 12a2 2 0 110-4h14a2 2 0 110 4M5 12v7a2 2 0 002 2h10a2 2 0 002-2v-7"/>
                        </svg>
                        @endif
                    </div>
                </div>
                <!-- Enhanced Scroll Indicator -->
                <div class="absolute bottom-12 left-1/2 transform -translate-x-1/2 animate-bounce">
                    <div class="w-10 h-16 rounded-full border-2 border-white/50 flex items-start justify-center p-2 backdrop-blur-sm">
                        <div class="w-2 h-4 rounded-full bg-white/70 animate-scroll-indicator"></div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Content Section with Decorative Elements -->
        <section id="story" class="relative bg-gradient-to-b from-white to-gray-50 dark:from-[#0f172a] dark:to-[#1e293b] py-40 px-8 overflow-hidden">
            <!-- Decorative background elements -->
            <div class="absolute inset-0 opacity-5">
                <div class="absolute top-0 left-0 w-96 h-96 rounded-full theme-bg blur-3xl"></div>
                <div class="absolute bottom-0 right-0 w-96 h-96 rounded-full theme-bg blur-3xl"></div>
            </div>
            <div class="max-w-6xl mx-auto text-center relative z-10">
                <!-- Enhanced decorative line -->
                <div class="absolute top-0 left-1/2 transform -translate-x-1/2 w-40 h-1.5 rounded-full theme-bg shadow-lg" data-theme-element="line"></div>
                
                <div class="space-y-16 mt-20">
                    <div class="relative">
                        <div class="absolute -left-8 top-0 text-8xl font-black text-gray-100 dark:text-gray-800 opacity-50 select-none">"</div>
                        <p id="preview-message" class="text-3xl md:text-4xl lg:text-5xl text-gray-800 dark:text-[#e2e8f0] leading-relaxed font-light italic max-w-5xl mx-auto relative z-10">
                        {{ $templateData['defaults']['message'] ?? 'Your heartfelt message here' }}
                    </p>
                        <div class="absolute -right-8 bottom-0 text-8xl font-black text-gray-100 dark:text-gray-800 opacity-50 select-none">"</div>
                    </div>
                    <div class="relative pt-20">
                        <div class="absolute top-0 left-1/2 transform -translate-x-1/2 w-24 h-1 rounded-full theme-bg" data-theme-element="border"></div>
                        <p id="preview-from" class="text-4xl md:text-5xl lg:text-6xl font-black theme-text relative inline-block" data-theme-element="text">
                            <span class="relative z-10">{{ $templateData['defaults']['from'] ?? 'Your Name' }}</span>
                            <span class="absolute bottom-0 left-0 right-0 h-3 theme-bg opacity-20 -z-0 transform -skew-x-12"></span>
                        </p>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Section 1: Our Love -->
        <section class="bg-gradient-to-br {{ $bg }} py-32 px-8 relative overflow-hidden">
            <div class="absolute inset-0 opacity-10">
                <div class="absolute top-0 right-0 w-96 h-96 rounded-full theme-bg blur-3xl"></div>
                <div class="absolute bottom-0 left-0 w-80 h-80 rounded-full theme-bg blur-3xl"></div>
            </div>
            <div class="max-w-6xl mx-auto text-center relative z-10">
                <div class="inline-block mb-8">
                    <span class="text-sm font-semibold uppercase tracking-widest text-white/80">Chapter One</span>
                </div>
                <h2 id="section1-title" class="text-5xl md:text-6xl lg:text-7xl font-black mb-12 text-white leading-tight" data-theme-element="text">{{ $templateData['defaults']['section1_title'] ?? 'Our Love' }}</h2>
                <p id="section1-content" class="text-xl md:text-2xl lg:text-3xl text-white/90 leading-relaxed font-light max-w-4xl mx-auto">
                    {{ $templateData['defaults']['section1_content'] ?? 'Every moment with you feels like a dream. Your love fills my heart with joy and happiness.' }}
                </p>
            </div>
        </section>
        
        <!-- Section 2: Our First Day -->
        <section class="bg-white dark:bg-[#0f172a] py-40 px-8 relative">
            <div class="max-w-7xl mx-auto">
                <div class="grid md:grid-cols-2 gap-16 lg:gap-24 items-center">
                    <div class="order-2 md:order-1 space-y-8">
                        <div class="inline-flex items-center gap-3 mb-6">
                            <div class="w-12 h-0.5 theme-bg"></div>
                            <span class="text-sm font-semibold uppercase tracking-widest theme-text opacity-70">Chapter Two</span>
                            <div class="w-12 h-0.5 theme-bg"></div>
                        </div>
                        <h2 id="section2-title" class="text-4xl md:text-5xl lg:text-6xl font-black mb-8 text-gray-900 dark:text-white leading-tight" data-theme-element="text">{{ $templateData['defaults']['section2_title'] ?? 'Our First Day' }}</h2>
                        <p id="section2-content" class="text-lg md:text-xl lg:text-2xl text-gray-700 dark:text-[#cbd5e1] leading-relaxed font-light">
                            {{ $templateData['defaults']['section2_content'] ?? 'The day we met changed everything. I knew from that moment that you were special.' }}
                        </p>
                    </div>
                    <div class="relative order-1 md:order-2" id="section2-image-container">
                        <div class="aspect-square rounded-3xl overflow-hidden shadow-2xl relative group">
                            <div class="absolute inset-0 bg-gradient-to-br from-theme-color/20 to-transparent z-10 group-hover:opacity-0 transition-opacity duration-500"></div>
                            <img id="section2-image-display" src="" alt="Section 2" class="w-full h-full object-cover absolute inset-0 hidden transition-transform duration-700 group-hover:scale-110">
                            <div id="section2-placeholder" class="w-full h-full bg-gradient-to-br from-gray-200 via-gray-100 to-gray-200 dark:from-gray-700 dark:via-gray-800 dark:to-gray-700 flex items-center justify-center relative">
                                <div class="absolute inset-0 bg-gradient-to-br from-theme-color/10 to-transparent"></div>
                                <svg class="w-24 h-24 text-gray-400 dark:text-gray-600 relative z-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                        </div>
                        <!-- Enhanced decorative elements -->
                        <div class="absolute -bottom-8 -right-8 w-40 h-40 rounded-3xl theme-bg opacity-20 transform rotate-12 -z-10 blur-xl"></div>
                        <div class="absolute -top-4 -left-4 w-24 h-24 rounded-2xl theme-bg opacity-10 transform -rotate-12 -z-10"></div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Section 3: Our Journey -->
        <section class="bg-gradient-to-br {{ $bg }} py-32 px-8 relative overflow-hidden">
            <div class="absolute inset-0 opacity-5">
                <div class="absolute inset-0" style="background-image: radial-gradient(circle, white 1px, transparent 1px); background-size: 50px 50px;"></div>
            </div>
            <div class="max-w-7xl mx-auto text-center relative z-10">
                <div class="inline-block mb-8">
                    <span class="text-sm font-semibold uppercase tracking-widest text-white/80">Chapter Three</span>
                </div>
                <h2 id="section3-title" class="text-5xl md:text-6xl lg:text-7xl font-black mb-12 text-white leading-tight" data-theme-element="text">{{ $templateData['defaults']['section3_title'] ?? 'Our Journey' }}</h2>
                <p id="section3-content" class="text-xl md:text-2xl lg:text-3xl text-white/90 leading-relaxed font-light max-w-4xl mx-auto mb-16">
                    {{ $templateData['defaults']['section3_content'] ?? 'Together we\'ve created countless beautiful memories. Each day with you is a new adventure.' }}
                </p>
                <div id="section3-images-container" class="grid md:grid-cols-3 gap-6 lg:gap-8">
                    <div class="aspect-square rounded-2xl overflow-hidden shadow-2xl relative group">
                        <img id="section3-image1-display" src="" alt="Section 3 Image 1" class="w-full h-full object-cover absolute inset-0 hidden transition-transform duration-700 group-hover:scale-110">
                        <div id="section3-placeholder1" class="w-full h-full bg-gradient-to-br from-white/20 to-white/10 flex items-center justify-center">
                            <svg class="w-16 h-16 text-white/50" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="aspect-square rounded-2xl overflow-hidden shadow-2xl relative group">
                        <img id="section3-image2-display" src="" alt="Section 3 Image 2" class="w-full h-full object-cover absolute inset-0 hidden transition-transform duration-700 group-hover:scale-110">
                        <div id="section3-placeholder2" class="w-full h-full bg-gradient-to-br from-white/20 to-white/10 flex items-center justify-center">
                            <svg class="w-16 h-16 text-white/50" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="aspect-square rounded-2xl overflow-hidden shadow-2xl relative group">
                        <img id="section3-image3-display" src="" alt="Section 3 Image 3" class="w-full h-full object-cover absolute inset-0 hidden transition-transform duration-700 group-hover:scale-110">
                        <div id="section3-placeholder3" class="w-full h-full bg-gradient-to-br from-white/20 to-white/10 flex items-center justify-center">
                            <svg class="w-16 h-16 text-white/50" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Section 4: Our Promise -->
        <section class="bg-white dark:bg-[#0f172a] py-32 px-8">
            <div class="max-w-6xl mx-auto text-center">
                <div class="inline-block mb-8">
                    <span class="text-sm font-semibold uppercase tracking-widest theme-text opacity-70">Chapter Four</span>
                </div>
                <h2 id="section4-title" class="text-5xl md:text-6xl lg:text-7xl font-black mb-12 text-gray-900 dark:text-white leading-tight" data-theme-element="text">{{ $templateData['defaults']['section4_title'] ?? 'Our Promise' }}</h2>
                <p id="section4-content" class="text-xl md:text-2xl lg:text-3xl text-gray-700 dark:text-[#cbd5e1] leading-relaxed font-light max-w-4xl mx-auto">
                    {{ $templateData['defaults']['section4_content'] ?? 'I promise to stand by you, support you, and love you through all of life\'s adventures.' }}
                </p>
            </div>
        </section>
        
        <!-- Section 5: Forever -->
        <section class="bg-gradient-to-br {{ $bg }} py-32 px-8 relative overflow-hidden">
            <div class="absolute inset-0 opacity-10">
                <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-96 h-96 rounded-full theme-bg blur-3xl"></div>
            </div>
            <div class="max-w-6xl mx-auto text-center relative z-10">
                <div class="inline-block mb-8">
                    <span class="text-sm font-semibold uppercase tracking-widest text-white/80">Chapter Five</span>
                </div>
                <h2 id="section5-title" class="text-5xl md:text-6xl lg:text-7xl font-black mb-12 text-white leading-tight" data-theme-element="text">{{ $templateData['defaults']['section5_title'] ?? 'Forever' }}</h2>
                <p id="section5-content" class="text-xl md:text-2xl lg:text-3xl text-white/90 leading-relaxed font-light max-w-4xl mx-auto">
                    {{ $templateData['defaults']['section5_content'] ?? 'Today, tomorrow, and forever - I choose you. You are my everything.' }}
                </p>
            </div>
        </section>
        
        <!-- Memories Gallery with Masonry Style -->
        <section id="memories" class="bg-gradient-to-b from-white to-gray-50 dark:from-[#0f172a] dark:to-[#1e293b] py-40 px-8 relative overflow-hidden">
            <!-- Background decoration -->
            <div class="absolute inset-0 opacity-5">
                <div class="absolute top-0 right-0 w-96 h-96 rounded-full theme-bg blur-3xl"></div>
                <div class="absolute bottom-0 left-0 w-96 h-96 rounded-full theme-bg blur-3xl"></div>
            </div>
            <div class="max-w-7xl mx-auto relative z-10">
                <div class="text-center mb-20">
                    <div class="inline-flex items-center gap-3 mb-6">
                        <div class="w-16 h-0.5 theme-bg"></div>
                        <span class="text-sm font-semibold uppercase tracking-widest theme-text opacity-70">Gallery</span>
                        <div class="w-16 h-0.5 theme-bg"></div>
                    </div>
                    <h2 class="text-5xl md:text-6xl lg:text-7xl font-black mb-6 text-gray-900 dark:text-white" data-theme-element="text">Our Memories</h2>
                    <p class="text-lg text-gray-600 dark:text-gray-400 max-w-2xl mx-auto">A collection of moments that tell our story</p>
                </div>
                <div id="memories-section" class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 lg:gap-6">
                    <div class="aspect-square bg-gradient-to-br from-gray-100 to-gray-200 dark:from-[#334155] dark:to-[#475569] rounded-2xl flex items-center justify-center border-2 border-dashed border-gray-300 dark:border-[#475569] hover:border-theme-color transition-all duration-300 hover:shadow-lg group">
                        <div class="text-center px-4">
                            <svg class="w-12 h-12 mx-auto text-gray-400 dark:text-[#64748b] mb-3 group-hover:text-theme-color transition-colors duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                            </svg>
                            <p class="text-sm text-gray-400 dark:text-[#64748b] group-hover:text-theme-color transition-colors duration-300">Add memories in the editor</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Professional Footer -->
        <footer class="bg-gray-900 dark:bg-[#0a0f1a] text-white py-16 px-8">
            <div class="max-w-7xl mx-auto">
                <div class="grid md:grid-cols-3 gap-12 mb-12">
                    <div>
                        <div class="flex items-center space-x-2 mb-6">
                            <div class="w-10 h-10 rounded-lg theme-bg flex items-center justify-center">
                                <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                                </svg>
                            </div>
                            <span class="text-xl font-bold">Hamro Yaad</span>
                        </div>
                        <p class="text-gray-400 text-sm leading-relaxed">Creating beautiful memories that last forever.</p>
                    </div>
                    <div>
                        <h3 class="font-semibold mb-4">Quick Links</h3>
                        <ul class="space-y-2 text-gray-400 text-sm">
                            <li><a href="#home" class="hover:text-white transition-colors">Home</a></li>
                            <li><a href="#story" class="hover:text-white transition-colors">Our Story</a></li>
                            <li><a href="#memories" class="hover:text-white transition-colors">Memories</a></li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="font-semibold mb-4">Created With</h3>
                        <p class="text-gray-400 text-sm">Made with ❤️ using Hamro Yaad</p>
                        <p class="text-gray-500 text-xs mt-2">© {{ date('Y') }} All rights reserved</p>
                    </div>
                </div>
                <div class="border-t border-gray-800 pt-8 text-center text-gray-500 text-sm">
                    <p>This website was created with love and care</p>
                </div>
            </div>
        </footer>
    </div>

@elseif($design == 'classic' || $design == 'marriage-2-classic' || $design == 'fathersday-1-classic' || $design == 'fathersday-3-heartfelt' || $design == 'birthday-4-fun' || $design == 'mothersday-3-heartfelt' || $design == 'mothersday-4-bond' || str_contains($design, 'classic') || str_contains($design, 'heartfelt') || str_contains($design, 'fun') || str_contains($design, 'bond'))
    {{-- Template 2: Classic Magazine Style with Sidebar Layout - Enhanced --}}
    <div class="min-h-screen bg-gradient-to-b from-white via-gray-50 to-white dark:from-[#0f172a] dark:via-[#1e293b] dark:to-[#0f172a]" data-theme-color="{{ $color }}" id="template-container">
        <!-- Professional Navigation -->
        <nav class="fixed top-0 left-0 right-0 z-50 bg-white/95 dark:bg-[#0f172a]/95 backdrop-blur-xl border-b border-gray-200/60 dark:border-[#1e293b]/60 shadow-sm transition-all duration-500" id="main-nav-classic">
            <div class="max-w-7xl mx-auto px-6 lg:px-8">
                <div class="flex items-center justify-between h-20">
                    <div class="flex items-center space-x-3 group cursor-pointer">
                        <div class="w-12 h-12 rounded-xl theme-bg flex items-center justify-center shadow-lg transform group-hover:scale-110 group-hover:rotate-6 transition-all duration-300">
                            <svg class="w-7 h-7 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                            </svg>
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
                        <!-- Theme Toggle Button in Navigation -->
                        <button id="theme-toggle-nav" type="button" onclick="if(window.toggleTheme) window.toggleTheme(event);" class="ml-3 p-2.5 rounded-lg bg-gray-100 dark:bg-[#334155] text-gray-700 dark:text-[#cbd5e1] hover:bg-gray-200 dark:hover:bg-[#475569] transition-all duration-300 hover:scale-110 group" aria-label="Toggle dark mode">
                            <svg id="moon-icon-nav" class="w-5 h-5 dark:hidden transition-transform group-hover:rotate-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"></path>
                            </svg>
                            <svg id="sun-icon-nav" class="w-5 h-5 hidden dark:block transition-transform group-hover:rotate-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"></path>
                            </svg>
                        </button>
                    </div>
                    <!-- Mobile Menu Button -->
                    <button id="mobile-menu-toggle" type="button" onclick="toggleMobileMenu(this)" class="md:hidden p-2 rounded-lg text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-[#334155] transition-colors" aria-label="Toggle mobile menu">
                        <svg id="menu-icon" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                        <svg id="close-icon" class="w-6 h-6 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>
            </div>
            <!-- Mobile Menu -->
            <div id="mobile-menu" class="hidden md:hidden fixed top-20 left-0 right-0 bg-white/95 dark:bg-[#0f172a]/95 backdrop-blur-xl border-b border-gray-200/60 dark:border-[#1e293b]/60 shadow-lg z-40">
                <div class="px-6 py-4 space-y-3">
                    <a href="#home" class="block px-4 py-3 rounded-lg text-gray-700 dark:text-gray-300 hover:text-white dark:hover:text-white font-medium transition-all duration-300 hover:bg-gradient-to-r hover:from-theme-color hover:to-theme-color-dark" onclick="toggleMobileMenu()">Home</a>
                    <a href="#story" class="block px-4 py-3 rounded-lg text-gray-700 dark:text-gray-300 hover:text-white dark:hover:text-white font-medium transition-all duration-300 hover:bg-gradient-to-r hover:from-theme-color hover:to-theme-color-dark" onclick="toggleMobileMenu()">Our Story</a>
                    <a href="#memories" class="block px-4 py-3 rounded-lg text-gray-700 dark:text-gray-300 hover:text-white dark:hover:text-white font-medium transition-all duration-300 hover:bg-gradient-to-r hover:from-theme-color hover:to-theme-color-dark" onclick="toggleMobileMenu()">Memories</a>
                    <button id="theme-toggle-mobile" type="button" onclick="if(window.toggleTheme) window.toggleTheme(event);" class="w-full text-left px-4 py-3 rounded-lg bg-gray-100 dark:bg-[#334155] text-gray-700 dark:text-[#cbd5e1] hover:bg-gray-200 dark:hover:bg-[#475569] transition-all duration-300 flex items-center gap-3">
                        <svg id="moon-icon-mobile" class="w-5 h-5 dark:hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"></path>
                        </svg>
                        <svg id="sun-icon-mobile" class="w-5 h-5 hidden dark:block" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"></path>
                        </svg>
                        <span>Toggle Theme</span>
                    </button>
                </div>
            </div>
        </nav>

        <!-- Header with Large Hero - Enhanced -->
        <header id="home" class="relative border-b-[16px] overflow-hidden pt-20" data-theme-element="border">
            <div class="absolute inset-0 z-0">
                <img id="hero-image-display" data-image="hero" src="{{ $categoryImages['hero'] }}" alt="Hero" class="w-full h-[90vh] object-cover transition-transform duration-1000 scale-110">
                <div class="absolute inset-0 bg-gradient-to-r from-black/85 via-black/60 to-black/40"></div>
                <!-- Animated overlay pattern -->
                <div class="absolute inset-0 opacity-10" style="background-image: repeating-linear-gradient(45deg, transparent, transparent 10px, rgba(255,255,255,0.05) 10px, rgba(255,255,255,0.05) 20px);"></div>
            </div>
            <div class="relative z-10 max-w-7xl mx-auto px-8 lg:px-12 py-40 min-h-[90vh] flex items-center">
                <div class="max-w-5xl space-y-8">
                    <div class="inline-flex items-center gap-4 px-8 py-4 rounded-full mb-8 backdrop-blur-2xl border-2 border-white/30 theme-bg-opacity shadow-2xl transform hover:scale-105 transition-all duration-300" data-theme-element="badge">
                        <div class="w-2 h-2 rounded-full bg-white animate-pulse"></div>
                        <p id="preview-subheading" class="text-xl md:text-2xl font-bold uppercase tracking-[0.3em] text-white drop-shadow-lg" data-theme-element="text">{{ $templateData['defaults']['subheading'] }}</p>
                        <div class="w-2 h-2 rounded-full bg-white animate-pulse" style="animation-delay: 0.5s;"></div>
                    </div>
                    <h1 id="preview-heading" class="text-6xl md:text-8xl lg:text-[11rem] font-black text-white leading-[0.85] mb-8 animate-slide-up" style="text-shadow: 0 0 120px rgba(0,0,0,0.9), 0 15px 50px rgba(0,0,0,0.7), 0 0 200px var(--theme-color); filter: drop-shadow(0 0 40px rgba(255,255,255,0.2));">
                        {{ $templateData['defaults']['heading'] }}
                    </h1>
                    <!-- Decorative line -->
                    <div class="w-32 h-1.5 rounded-full theme-bg shadow-lg"></div>
                </div>
            </div>
        </header>
        
        <!-- Main Content with Sidebar Style - Enhanced -->
        <main class="py-32 px-12 relative overflow-hidden">
            <!-- Background decoration -->
            <div class="absolute inset-0 opacity-5">
                <div class="absolute top-0 right-0 w-96 h-96 rounded-full theme-bg blur-3xl"></div>
                <div class="absolute bottom-0 left-0 w-96 h-96 rounded-full theme-bg blur-3xl"></div>
            </div>
            <div class="max-w-7xl mx-auto relative z-10">
                <div class="grid lg:grid-cols-3 gap-20 mb-32">
                    <!-- Sidebar - Enhanced -->
                    <div class="lg:col-span-1">
                        <div class="sticky top-28">
                            <div class="relative w-full aspect-square rounded-[2.5rem] flex items-center justify-center shadow-[0_30px_80px_rgba(0,0,0,0.3)] transform rotate-3 hover:rotate-6 transition-all duration-700 border-8 border-white dark:border-gray-800 theme-bg group" data-theme-element="icon">
                                <div class="absolute inset-0 rounded-[2.5rem] bg-white/20 blur-xl group-hover:blur-2xl transition-all duration-700"></div>
                                @if($category == 'marriage' || $category == 'valentine' || $category == 'mothersday')
                                <svg class="w-44 h-44 text-white relative z-10 transform group-hover:scale-110 transition-transform duration-500" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                                </svg>
                                @elseif($category == 'fathersday')
                                <svg class="w-44 h-44 text-white relative z-10 transform group-hover:scale-110 transition-transform duration-500" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                                </svg>
                                @else
                                <svg class="w-44 h-44 text-white relative z-10 transform group-hover:scale-110 transition-transform duration-500" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 8v13m0-13V6a2 2 0 112 2h-2zm0 0V5.5A2.5 2.5 0 109.5 8H12zm-7 4h14M5 12a2 2 0 110-4h14a2 2 0 110 4M5 12v7a2 2 0 002 2h10a2 2 0 002-2v-7"/>
                                </svg>
                                @endif
                            </div>
                        </div>
                    </div>
                    <!-- Main Content - Enhanced -->
                    <div class="lg:col-span-2 space-y-12">
                        <div class="relative">
                            <div class="absolute -left-6 top-0 text-7xl font-black text-gray-100 dark:text-gray-800 opacity-30 select-none">"</div>
                            <p id="preview-message" class="text-3xl md:text-4xl lg:text-5xl text-gray-800 dark:text-[#e2e8f0] leading-relaxed mb-12 font-light italic relative z-10 pl-8">
                            {{ $templateData['defaults']['message'] ?? 'Your heartfelt message here' }}
                        </p>
                            <div class="absolute -right-6 bottom-0 text-7xl font-black text-gray-100 dark:text-gray-800 opacity-30 select-none">"</div>
                        </div>
                        <div class="relative pt-16">
                            <div class="absolute top-0 left-0 w-24 h-1.5 rounded-full theme-bg" data-theme-element="border"></div>
                            <p id="preview-from" class="text-4xl md:text-5xl lg:text-6xl font-black theme-text relative inline-block" data-theme-element="text">
                                <span class="relative z-10">{{ $templateData['defaults']['from'] ?? 'Your Name' }}</span>
                                <span class="absolute bottom-2 left-0 right-0 h-4 theme-bg opacity-20 -z-0 transform -skew-x-12"></span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        
        <!-- Section 1: Our Love - Enhanced -->
        <section class="bg-gradient-to-br {{ $bg }} py-40 px-12 relative overflow-hidden">
            <div class="absolute inset-0 opacity-10">
                <div class="absolute top-0 right-0 w-96 h-96 rounded-full theme-bg blur-3xl animate-pulse"></div>
                <div class="absolute bottom-0 left-0 w-80 h-80 rounded-full theme-bg blur-3xl animate-pulse" style="animation-delay: 1s;"></div>
            </div>
            <div class="max-w-6xl mx-auto text-center relative z-10">
                <div class="inline-flex items-center gap-4 mb-8">
                    <div class="w-16 h-0.5 theme-bg"></div>
                    <span class="text-sm font-semibold uppercase tracking-widest text-white/80">Chapter One</span>
                    <div class="w-16 h-0.5 theme-bg"></div>
                </div>
                <h2 id="section1-title" class="text-6xl md:text-7xl lg:text-8xl font-black mb-12 text-white leading-tight drop-shadow-2xl" data-theme-element="text">{{ $templateData['defaults']['section1_title'] ?? 'Our Love' }}</h2>
                <p id="section1-content" class="text-3xl md:text-4xl lg:text-5xl text-white/95 leading-relaxed font-light max-w-4xl mx-auto">
                    {{ $templateData['defaults']['section1_content'] ?? 'Every moment with you feels like a dream.' }}
                </p>
            </div>
        </section>
        
        <!-- Section 2: Our First Day - Enhanced -->
        <section class="bg-gradient-to-b from-white to-gray-50 dark:from-[#0f172a] dark:to-[#1e293b] py-40 px-12 relative">
            <div class="max-w-7xl mx-auto">
                <div class="grid md:grid-cols-2 gap-20 items-center">
                    <div class="space-y-8">
                        <div class="inline-flex items-center gap-3">
                            <div class="w-12 h-0.5 theme-bg"></div>
                            <span class="text-sm font-semibold uppercase tracking-widest theme-text opacity-70">Chapter Two</span>
                            <div class="w-12 h-0.5 theme-bg"></div>
                        </div>
                        <h2 id="section2-title" class="text-6xl md:text-7xl lg:text-8xl font-black mb-12 text-gray-900 dark:text-white leading-tight" data-theme-element="text">{{ $templateData['defaults']['section2_title'] ?? 'Our First Day' }}</h2>
                        <p id="section2-content" class="text-3xl md:text-4xl text-gray-700 dark:text-[#cbd5e1] leading-relaxed font-light">
                            {{ $templateData['defaults']['section2_content'] ?? 'The day we met changed everything.' }}
                        </p>
                    </div>
                    <div class="relative" id="section2-image-container">
                        <div class="aspect-square rounded-[2.5rem] overflow-hidden shadow-2xl relative group">
                            <div class="absolute inset-0 bg-gradient-to-br from-theme-color/20 to-transparent z-10 group-hover:opacity-0 transition-opacity duration-500"></div>
                            <img id="section2-image-display" src="" alt="Section 2" class="w-full h-full object-cover absolute inset-0 hidden transition-transform duration-700 group-hover:scale-110">
                            <div id="section2-placeholder" class="w-full h-full bg-gradient-to-br from-gray-200 via-gray-100 to-gray-200 dark:from-gray-700 dark:via-gray-800 dark:to-gray-700 flex items-center justify-center relative">
                                <div class="absolute inset-0 bg-gradient-to-br from-theme-color/10 to-transparent"></div>
                                <svg class="w-28 h-28 text-gray-400 dark:text-gray-600 relative z-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                </svg>
                        </div>
                        </div>
                        <div class="absolute -bottom-8 -right-8 w-40 h-40 rounded-3xl theme-bg opacity-20 transform rotate-12 -z-10 blur-xl"></div>
                        <div class="absolute -top-4 -left-4 w-24 h-24 rounded-2xl theme-bg opacity-10 transform -rotate-12 -z-10"></div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Section 3: Our Journey - Enhanced -->
        <section class="bg-gradient-to-br {{ $bg }} py-40 px-12 relative overflow-hidden">
            <div class="absolute inset-0 opacity-5">
                <div class="absolute inset-0" style="background-image: radial-gradient(circle, white 1px, transparent 1px); background-size: 50px 50px;"></div>
            </div>
            <div class="max-w-7xl mx-auto text-center relative z-10">
                <div class="inline-flex items-center gap-4 mb-8">
                    <div class="w-16 h-0.5 bg-white/50"></div>
                    <span class="text-sm font-semibold uppercase tracking-widest text-white/80">Chapter Three</span>
                    <div class="w-16 h-0.5 bg-white/50"></div>
                </div>
                <h2 id="section3-title" class="text-6xl md:text-7xl lg:text-8xl font-black mb-12 text-white leading-tight drop-shadow-2xl" data-theme-element="text">{{ $templateData['defaults']['section3_title'] ?? 'Our Journey' }}</h2>
                <p id="section3-content" class="text-3xl md:text-4xl lg:text-5xl text-white/95 leading-relaxed font-light max-w-4xl mx-auto mb-20">
                    {{ $templateData['defaults']['section3_content'] ?? 'Together we\'ve created countless beautiful memories.' }}
                </p>
                <div id="section3-images-container" class="grid md:grid-cols-3 gap-8 lg:gap-10">
                    <div class="aspect-square rounded-3xl overflow-hidden shadow-2xl relative group">
                        <img id="section3-image1-display" src="" alt="Section 3 Image 1" class="w-full h-full object-cover absolute inset-0 hidden transition-transform duration-700 group-hover:scale-110">
                        <div id="section3-placeholder1" class="w-full h-full bg-gradient-to-br from-white/20 via-white/10 to-white/5 flex items-center justify-center border-2 border-white/20">
                            <svg class="w-20 h-20 text-white/50" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                            </svg>
                    </div>
                    </div>
                    <div class="aspect-square rounded-3xl overflow-hidden shadow-2xl relative group">
                        <img id="section3-image2-display" src="" alt="Section 3 Image 2" class="w-full h-full object-cover absolute inset-0 hidden transition-transform duration-700 group-hover:scale-110">
                        <div id="section3-placeholder2" class="w-full h-full bg-gradient-to-br from-white/20 via-white/10 to-white/5 flex items-center justify-center border-2 border-white/20">
                            <svg class="w-20 h-20 text-white/50" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="aspect-square rounded-3xl overflow-hidden shadow-2xl relative group">
                        <img id="section3-image3-display" src="" alt="Section 3 Image 3" class="w-full h-full object-cover absolute inset-0 hidden transition-transform duration-700 group-hover:scale-110">
                        <div id="section3-placeholder3" class="w-full h-full bg-gradient-to-br from-white/20 via-white/10 to-white/5 flex items-center justify-center border-2 border-white/20">
                            <svg class="w-20 h-20 text-white/50" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Section 4: Our Promise - Enhanced -->
        <section class="bg-gradient-to-b from-white to-gray-50 dark:from-[#0f172a] dark:to-[#1e293b] py-40 px-12">
            <div class="max-w-6xl mx-auto text-center">
                <div class="inline-flex items-center gap-4 mb-8">
                    <div class="w-16 h-0.5 theme-bg"></div>
                    <span class="text-sm font-semibold uppercase tracking-widest theme-text opacity-70">Chapter Four</span>
                    <div class="w-16 h-0.5 theme-bg"></div>
                </div>
                <h2 id="section4-title" class="text-6xl md:text-7xl lg:text-8xl font-black mb-12 text-gray-900 dark:text-white leading-tight" data-theme-element="text">{{ $templateData['defaults']['section4_title'] ?? 'Our Promise' }}</h2>
                <p id="section4-content" class="text-3xl md:text-4xl lg:text-5xl text-gray-700 dark:text-[#cbd5e1] leading-relaxed font-light max-w-4xl mx-auto">
                    {{ $templateData['defaults']['section4_content'] ?? 'I promise to stand by you through all of life\'s adventures.' }}
                </p>
            </div>
        </section>
        
        <!-- Section 5: Forever - Enhanced -->
        <section class="bg-gradient-to-br {{ $bg }} py-40 px-12 relative overflow-hidden">
            <div class="absolute inset-0 opacity-10">
                <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-96 h-96 rounded-full theme-bg blur-3xl animate-pulse"></div>
            </div>
            <div class="max-w-6xl mx-auto text-center relative z-10">
                <div class="inline-flex items-center gap-4 mb-8">
                    <div class="w-16 h-0.5 bg-white/50"></div>
                    <span class="text-sm font-semibold uppercase tracking-widest text-white/80">Chapter Five</span>
                    <div class="w-16 h-0.5 bg-white/50"></div>
                </div>
                <h2 id="section5-title" class="text-6xl md:text-7xl lg:text-8xl font-black mb-12 text-white leading-tight drop-shadow-2xl" data-theme-element="text">{{ $templateData['defaults']['section5_title'] ?? 'Forever' }}</h2>
                <p id="section5-content" class="text-3xl md:text-4xl lg:text-5xl text-white/95 leading-relaxed font-light max-w-4xl mx-auto">
                    {{ $templateData['defaults']['section5_content'] ?? 'Today, tomorrow, and forever - I choose you.' }}
                </p>
            </div>
        </section>
        
        <!-- Memories Gallery - Enhanced -->
        <section id="memories" class="bg-gradient-to-b from-white to-gray-50 dark:from-[#0f172a] dark:to-[#1e293b] py-40 px-8 lg:px-12 relative overflow-hidden">
            <div class="absolute inset-0 opacity-5">
                <div class="absolute top-0 right-0 w-96 h-96 rounded-full theme-bg blur-3xl"></div>
                <div class="absolute bottom-0 left-0 w-96 h-96 rounded-full theme-bg blur-3xl"></div>
            </div>
            <div class="max-w-7xl mx-auto relative z-10">
                <div class="text-center mb-20">
                    <div class="inline-flex items-center gap-4 mb-6">
                        <div class="w-16 h-0.5 theme-bg"></div>
                        <span class="text-sm font-semibold uppercase tracking-widest theme-text opacity-70">Gallery</span>
                        <div class="w-16 h-0.5 theme-bg"></div>
                    </div>
                    <h2 class="text-5xl md:text-6xl lg:text-7xl font-black mb-8 text-gray-900 dark:text-white" data-theme-element="text">Our Memories</h2>
                    <p class="text-lg text-gray-600 dark:text-gray-400 max-w-2xl mx-auto">A collection of moments that tell our story</p>
                </div>
                <div id="memories-section" class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 lg:gap-6">
                    <div class="aspect-square bg-gradient-to-br from-gray-100 to-gray-200 dark:from-[#334155] dark:to-[#475569] rounded-2xl flex items-center justify-center border-2 border-dashed border-gray-300 dark:border-[#475569] hover:border-theme-color transition-all duration-300 hover:shadow-lg group">
                        <div class="text-center px-4">
                            <svg class="w-12 h-12 mx-auto text-gray-400 dark:text-[#64748b] mb-3 group-hover:text-theme-color transition-colors duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                            </svg>
                            <p class="text-sm text-gray-400 dark:text-[#64748b] group-hover:text-theme-color transition-colors duration-300">Add memories in the editor</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Professional Footer -->
        <footer class="bg-gradient-to-b from-gray-900 to-black dark:from-[#0a0f1a] dark:to-[#05070a] text-white py-20 px-8 relative overflow-hidden">
            <!-- Decorative background -->
            <div class="absolute inset-0 opacity-10">
                <div class="absolute top-0 left-0 w-96 h-96 rounded-full theme-bg blur-3xl"></div>
                <div class="absolute bottom-0 right-0 w-96 h-96 rounded-full theme-bg blur-3xl"></div>
            </div>
            <div class="max-w-7xl mx-auto relative z-10">
                <div class="grid md:grid-cols-3 gap-12 mb-16">
                    <div>
                        <div class="flex items-center space-x-3 mb-6 group cursor-pointer">
                            <div class="w-12 h-12 rounded-xl theme-bg flex items-center justify-center shadow-lg transform group-hover:scale-110 group-hover:rotate-6 transition-all duration-300">
                                <svg class="w-7 h-7 text-white" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                                </svg>
                            </div>
                            <span class="text-2xl font-bold bg-gradient-to-r from-white to-gray-300 bg-clip-text text-transparent">Hamro Yaad</span>
                        </div>
                        <p class="text-gray-400 text-sm leading-relaxed">Creating beautiful memories that last forever.</p>
                    </div>
                    <div>
                        <h3 class="font-semibold mb-6 text-lg">Quick Links</h3>
                        <ul class="space-y-3 text-gray-400 text-sm">
                            <li><a href="#home" class="hover:text-white hover:translate-x-1 inline-block transition-all duration-300 flex items-center gap-2"><span class="w-1 h-1 rounded-full theme-bg opacity-0 group-hover:opacity-100 transition-opacity"></span>Home</a></li>
                            <li><a href="#story" class="hover:text-white hover:translate-x-1 inline-block transition-all duration-300 flex items-center gap-2"><span class="w-1 h-1 rounded-full theme-bg opacity-0 group-hover:opacity-100 transition-opacity"></span>Our Story</a></li>
                            <li><a href="#memories" class="hover:text-white hover:translate-x-1 inline-block transition-all duration-300 flex items-center gap-2"><span class="w-1 h-1 rounded-full theme-bg opacity-0 group-hover:opacity-100 transition-opacity"></span>Memories</a></li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="font-semibold mb-6 text-lg">Created With</h3>
                        <p class="text-gray-400 text-sm mb-4">Made with <span class="text-red-500 animate-pulse">❤️</span> using Hamro Yaad</p>
                        <p class="text-gray-500 text-xs">© {{ date('Y') }} All rights reserved</p>
                    </div>
                </div>
                <div class="border-t border-gray-800 pt-8 text-center">
                    <p class="text-gray-500 text-sm">This website was created with love and care</p>
                </div>
            </div>
        </footer>
    </div>

@elseif($design == 'modern' || $design == 'marriage-3-modern' || $design == 'fathersday-4-modern' || $design == 'birthday-2-party' || $design == 'valentine-2-sweet' || str_contains($design, 'modern') || str_contains($design, 'party') || str_contains($design, 'sweet'))
    {{-- Template 3: Modern Split Screen with Geometric Shapes - Enhanced --}}
    <div class="min-h-screen bg-gradient-to-br {{ $bg }}" data-theme-color="{{ $color }}" id="template-container">
        <!-- Professional Navigation - Enhanced -->
        <nav class="fixed top-0 left-0 right-0 z-50 bg-white/90 dark:bg-[#1e293b]/90 backdrop-blur-xl border-b border-gray-200/60 dark:border-[#334155]/60 shadow-sm transition-all duration-500" id="main-nav-modern">
            <div class="max-w-7xl mx-auto px-6 lg:px-8">
                <div class="flex items-center justify-between h-20">
                    <div class="flex items-center space-x-3 group cursor-pointer">
                        <div class="w-12 h-12 rounded-xl theme-bg flex items-center justify-center shadow-lg transform group-hover:scale-110 group-hover:rotate-6 transition-all duration-300">
                            <svg class="w-7 h-7 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                            </svg>
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
                        <!-- Theme Toggle Button in Navigation -->
                        <button id="theme-toggle-nav" type="button" onclick="if(window.toggleTheme) window.toggleTheme(event);" class="ml-3 p-2.5 rounded-lg bg-gray-100 dark:bg-[#334155] text-gray-700 dark:text-[#cbd5e1] hover:bg-gray-200 dark:hover:bg-[#475569] transition-all duration-300 hover:scale-110 group" aria-label="Toggle dark mode">
                            <svg id="moon-icon-nav" class="w-5 h-5 dark:hidden transition-transform group-hover:rotate-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"></path>
                            </svg>
                            <svg id="sun-icon-nav" class="w-5 h-5 hidden dark:block transition-transform group-hover:rotate-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"></path>
                            </svg>
                        </button>
                    </div>
                    <!-- Mobile Menu Button -->
                    <button id="mobile-menu-toggle" type="button" onclick="toggleMobileMenu(this)" class="md:hidden p-2 rounded-lg text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-[#334155] transition-colors" aria-label="Toggle mobile menu">
                        <svg id="menu-icon" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                        <svg id="close-icon" class="w-6 h-6 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>
            </div>
            <!-- Mobile Menu -->
            <div id="mobile-menu" class="hidden md:hidden fixed top-20 left-0 right-0 bg-white/90 dark:bg-[#1e293b]/90 backdrop-blur-xl border-b border-gray-200/60 dark:border-[#334155]/60 shadow-lg z-40">
                <div class="px-6 py-4 space-y-3">
                    <a href="#home" class="block px-4 py-3 rounded-lg text-gray-700 dark:text-gray-300 hover:text-white dark:hover:text-white font-medium transition-all duration-300 hover:bg-gradient-to-r hover:from-theme-color hover:to-theme-color-dark" onclick="toggleMobileMenu()">Home</a>
                    <a href="#story" class="block px-4 py-3 rounded-lg text-gray-700 dark:text-gray-300 hover:text-white dark:hover:text-white font-medium transition-all duration-300 hover:bg-gradient-to-r hover:from-theme-color hover:to-theme-color-dark" onclick="toggleMobileMenu()">Our Story</a>
                    <a href="#memories" class="block px-4 py-3 rounded-lg text-gray-700 dark:text-gray-300 hover:text-white dark:hover:text-white font-medium transition-all duration-300 hover:bg-gradient-to-r hover:from-theme-color hover:to-theme-color-dark" onclick="toggleMobileMenu()">Memories</a>
                    <button id="theme-toggle-mobile" type="button" onclick="if(window.toggleTheme) window.toggleTheme(event);" class="w-full text-left px-4 py-3 rounded-lg bg-gray-100 dark:bg-[#334155] text-gray-700 dark:text-[#cbd5e1] hover:bg-gray-200 dark:hover:bg-[#475569] transition-all duration-300 flex items-center gap-3">
                        <svg id="moon-icon-mobile" class="w-5 h-5 dark:hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"></path>
                        </svg>
                        <svg id="sun-icon-mobile" class="w-5 h-5 hidden dark:block" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"></path>
                        </svg>
                        <span>Toggle Theme</span>
                    </button>
                </div>
            </div>
        </nav>

        <!-- Split Hero Section - Enhanced -->
        <section id="home" class="min-h-screen flex items-center px-8 lg:px-12 py-32 relative overflow-hidden pt-20">
            <!-- Enhanced Geometric Background Elements -->
            <div class="absolute inset-0 opacity-15">
                <div class="absolute top-0 right-0 w-96 h-96 rounded-full theme-bg blur-3xl animate-pulse"></div>
                <div class="absolute bottom-0 left-0 w-80 h-80 rounded-full theme-bg blur-3xl animate-pulse" style="animation-delay: 1s;"></div>
            </div>
            <!-- Animated grid pattern -->
            <div class="absolute inset-0 opacity-5" style="background-image: linear-gradient(var(--theme-color) 1px, transparent 1px), linear-gradient(90deg, var(--theme-color) 1px, transparent 1px); background-size: 50px 50px;"></div>
            
            <div class="max-w-7xl mx-auto w-full relative z-10">
                <div class="grid lg:grid-cols-2 gap-16 lg:gap-24 items-center">
                    <!-- Left: Text Content - Enhanced -->
                    <div class="space-y-10 lg:space-y-12">
                        <div class="inline-flex items-center gap-3 px-8 lg:px-10 py-4 lg:py-5 rounded-2xl mb-8 lg:mb-10 backdrop-blur-2xl border-2 border-white/40 dark:border-white/30 theme-bg-opacity shadow-2xl transform hover:scale-105 transition-all duration-300" data-theme-element="badge">
                            <div class="w-2 h-2 rounded-full bg-white animate-pulse"></div>
                            <p id="preview-subheading" class="text-lg md:text-xl lg:text-2xl font-bold uppercase tracking-[0.3em] text-white drop-shadow-lg" data-theme-element="text">{{ $templateData['defaults']['subheading'] }}</p>
                            <div class="w-2 h-2 rounded-full bg-white animate-pulse" style="animation-delay: 0.5s;"></div>
                        </div>
                        <h1 id="preview-heading" class="text-5xl md:text-7xl lg:text-8xl xl:text-9xl font-black text-gray-900 dark:text-white leading-[0.9] mb-8 lg:mb-12 animate-slide-up" style="filter: drop-shadow(0 0 30px rgba(0,0,0,0.1));">
                            {{ $templateData['defaults']['heading'] }}
                        </h1>
                        <p id="preview-message" class="text-xl md:text-2xl lg:text-3xl text-gray-700 dark:text-[#cbd5e1] leading-relaxed mb-8 lg:mb-12 font-light">
                            {{ $templateData['defaults']['message'] }}
                        </p>
                        <div class="flex items-center gap-6 lg:gap-8 group">
                            <div class="w-24 lg:w-32 h-2.5 rounded-full theme-bg shadow-lg transform group-hover:scale-x-110 transition-transform duration-500" data-theme-element="line"></div>
                            <p id="preview-from" class="text-2xl md:text-3xl lg:text-4xl font-black theme-text transform group-hover:translate-x-2 transition-transform duration-300" data-theme-element="text">{{ $templateData['defaults']['from'] }}</p>
                        </div>
                    </div>
                    <!-- Right: Image with Frame - Enhanced -->
                    <div class="relative animate-scale-in">
                        <div class="relative rounded-[2.5rem] lg:rounded-[3.5rem] overflow-hidden shadow-[0_40px_100px_rgba(0,0,0,0.4)] transform -rotate-3 lg:-rotate-6 border-4 lg:border-8 border-white/70 dark:border-white/50 group hover:rotate-0 transition-all duration-700">
                            <img id="hero-image-display" data-image="hero" src="{{ $categoryImages['hero'] }}" alt="Hero" class="w-full h-[500px] lg:h-[700px] object-cover transition-transform duration-700 group-hover:scale-110">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/50 via-black/20 to-transparent group-hover:from-black/40 transition-all duration-500"></div>
                        </div>
                        <!-- Enhanced decorative corners -->
                        <div class="absolute -top-8 -right-8 lg:-top-10 lg:-right-10 w-28 h-28 lg:w-36 lg:h-36 rounded-3xl theme-bg opacity-25 transform rotate-45 -z-10 blur-xl animate-pulse" data-theme-element="decoration"></div>
                        <div class="absolute -bottom-6 -left-6 lg:-bottom-8 lg:-left-8 w-20 h-20 lg:w-28 lg:h-28 rounded-2xl theme-bg opacity-15 transform -rotate-12 -z-10"></div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Section 1: Our Love - Enhanced -->
        <section class="bg-white/95 dark:bg-[#1e293b]/95 backdrop-blur-2xl py-40 px-12 relative overflow-hidden">
            <div class="absolute inset-0 opacity-5">
                <div class="absolute top-0 left-0 w-96 h-96 rounded-full theme-bg blur-3xl"></div>
                <div class="absolute bottom-0 right-0 w-96 h-96 rounded-full theme-bg blur-3xl"></div>
            </div>
            <div class="max-w-6xl mx-auto text-center relative z-10">
                <div class="inline-flex items-center gap-4 mb-8">
                    <div class="w-16 h-0.5 theme-bg"></div>
                    <span class="text-sm font-semibold uppercase tracking-widest theme-text opacity-70">Chapter One</span>
                    <div class="w-16 h-0.5 theme-bg"></div>
                </div>
                <h2 id="section1-title" class="text-6xl md:text-7xl lg:text-8xl font-black mb-12 theme-text drop-shadow-lg" data-theme-element="text">{{ $templateData['defaults']['section1_title'] ?? 'Our Love' }}</h2>
                <p id="section1-content" class="text-3xl md:text-4xl lg:text-5xl text-gray-800 dark:text-[#e2e8f0] leading-relaxed font-light max-w-4xl mx-auto">
                    {{ $templateData['defaults']['section1_content'] ?? 'Every moment with you feels like a dream.' }}
                </p>
            </div>
        </section>
        
        <!-- Section 2: Our First Day - Enhanced -->
        <section class="bg-gradient-to-br {{ $bg }} py-40 px-12 relative overflow-hidden">
            <div class="absolute inset-0 opacity-10">
                <div class="absolute top-0 right-0 w-96 h-96 rounded-full theme-bg blur-3xl animate-pulse"></div>
                <div class="absolute bottom-0 left-0 w-80 h-80 rounded-full theme-bg blur-3xl animate-pulse" style="animation-delay: 1s;"></div>
                        </div>
            <div class="max-w-7xl mx-auto relative z-10">
                <div class="grid md:grid-cols-2 gap-20 items-center">
                    <div class="relative order-2 md:order-1" id="section2-image-container">
                        <div class="aspect-square rounded-[2.5rem] overflow-hidden shadow-2xl relative group">
                            <div class="absolute inset-0 bg-gradient-to-br from-white/20 to-transparent z-10 group-hover:opacity-0 transition-opacity duration-500"></div>
                            <img id="section2-image-display" src="" alt="Section 2" class="w-full h-full object-cover absolute inset-0 hidden transition-transform duration-700 group-hover:scale-110">
                            <div id="section2-placeholder" class="w-full h-full bg-gradient-to-br from-white/30 via-white/20 to-white/10 flex items-center justify-center border-2 border-white/30">
                                <svg class="w-28 h-28 text-white/60" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                </svg>
                    </div>
                        </div>
                        <div class="absolute -bottom-8 -left-8 w-40 h-40 rounded-3xl bg-white/10 blur-xl -z-10"></div>
                    </div>
                    <div class="order-1 md:order-2 space-y-8">
                        <div class="inline-flex items-center gap-3">
                            <div class="w-12 h-0.5 bg-white/50"></div>
                            <span class="text-sm font-semibold uppercase tracking-widest text-white/80">Chapter Two</span>
                            <div class="w-12 h-0.5 bg-white/50"></div>
                        </div>
                        <h2 id="section2-title" class="text-6xl md:text-7xl lg:text-8xl font-black mb-12 text-white leading-tight drop-shadow-2xl" data-theme-element="text">{{ $templateData['defaults']['section2_title'] ?? 'Our First Day' }}</h2>
                        <p id="section2-content" class="text-3xl md:text-4xl text-white/95 leading-relaxed font-light">
                            {{ $templateData['defaults']['section2_content'] ?? 'The day we met changed everything.' }}
                        </p>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Section 3: Our Journey - Enhanced -->
        <section class="bg-white/95 dark:bg-[#1e293b]/95 backdrop-blur-2xl py-40 px-12 relative overflow-hidden">
            <div class="absolute inset-0 opacity-5">
                <div class="absolute top-0 right-0 w-96 h-96 rounded-full theme-bg blur-3xl"></div>
            </div>
            <div class="max-w-7xl mx-auto text-center relative z-10">
                <div class="inline-flex items-center gap-4 mb-8">
                    <div class="w-16 h-0.5 theme-bg"></div>
                    <span class="text-sm font-semibold uppercase tracking-widest theme-text opacity-70">Chapter Three</span>
                    <div class="w-16 h-0.5 theme-bg"></div>
                </div>
                <h2 id="section3-title" class="text-6xl md:text-7xl lg:text-8xl font-black mb-12 theme-text drop-shadow-lg" data-theme-element="text">{{ $templateData['defaults']['section3_title'] ?? 'Our Journey' }}</h2>
                <p id="section3-content" class="text-3xl md:text-4xl lg:text-5xl text-gray-800 dark:text-[#e2e8f0] leading-relaxed font-light max-w-4xl mx-auto mb-20">
                    {{ $templateData['defaults']['section3_content'] ?? 'Together we\'ve created countless beautiful memories.' }}
                </p>
                <div id="section3-images-container" class="grid md:grid-cols-3 gap-8 lg:gap-10">
                    <div class="aspect-square rounded-3xl overflow-hidden shadow-2xl relative group">
                        <img id="section3-image1-display" src="" alt="Section 3 Image 1" class="w-full h-full object-cover absolute inset-0 hidden transition-transform duration-700 group-hover:scale-110">
                        <div id="section3-placeholder1" class="w-full h-full bg-gradient-to-br from-gray-200 via-gray-100 to-gray-200 dark:from-gray-700 dark:via-gray-800 dark:to-gray-700 flex items-center justify-center border-2 border-gray-200 dark:border-gray-700">
                            <svg class="w-20 h-20 text-gray-400 dark:text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                            </svg>
                    </div>
                    </div>
                    <div class="aspect-square rounded-3xl overflow-hidden shadow-2xl relative group">
                        <img id="section3-image2-display" src="" alt="Section 3 Image 2" class="w-full h-full object-cover absolute inset-0 hidden transition-transform duration-700 group-hover:scale-110">
                        <div id="section3-placeholder2" class="w-full h-full bg-gradient-to-br from-gray-200 via-gray-100 to-gray-200 dark:from-gray-700 dark:via-gray-800 dark:to-gray-700 flex items-center justify-center border-2 border-gray-200 dark:border-gray-700">
                            <svg class="w-20 h-20 text-gray-400 dark:text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="aspect-square rounded-3xl overflow-hidden shadow-2xl relative group">
                        <img id="section3-image3-display" src="" alt="Section 3 Image 3" class="w-full h-full object-cover absolute inset-0 hidden transition-transform duration-700 group-hover:scale-110">
                        <div id="section3-placeholder3" class="w-full h-full bg-gradient-to-br from-gray-200 via-gray-100 to-gray-200 dark:from-gray-700 dark:via-gray-800 dark:to-gray-700 flex items-center justify-center border-2 border-gray-200 dark:border-gray-700">
                            <svg class="w-20 h-20 text-gray-400 dark:text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Section 4: Our Promise - Enhanced -->
        <section class="bg-gradient-to-br {{ $bg }} py-40 px-12 relative overflow-hidden">
            <div class="absolute inset-0 opacity-10">
                <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-96 h-96 rounded-full theme-bg blur-3xl animate-pulse"></div>
            </div>
            <div class="max-w-6xl mx-auto text-center relative z-10">
                <div class="inline-flex items-center gap-4 mb-8">
                    <div class="w-16 h-0.5 bg-white/50"></div>
                    <span class="text-sm font-semibold uppercase tracking-widest text-white/80">Chapter Four</span>
                    <div class="w-16 h-0.5 bg-white/50"></div>
                </div>
                <h2 id="section4-title" class="text-6xl md:text-7xl lg:text-8xl font-black mb-12 text-white leading-tight drop-shadow-2xl" data-theme-element="text">{{ $templateData['defaults']['section4_title'] ?? 'Our Promise' }}</h2>
                <p id="section4-content" class="text-3xl md:text-4xl lg:text-5xl text-white/95 leading-relaxed font-light max-w-4xl mx-auto">
                    {{ $templateData['defaults']['section4_content'] ?? 'I promise to stand by you through all of life\'s adventures.' }}
                </p>
            </div>
        </section>
        
        <!-- Section 5: Forever - Enhanced -->
        <section class="bg-white/95 dark:bg-[#1e293b]/95 backdrop-blur-2xl py-40 px-12 relative overflow-hidden">
            <div class="absolute inset-0 opacity-5">
                <div class="absolute top-0 right-0 w-96 h-96 rounded-full theme-bg blur-3xl"></div>
            </div>
            <div class="max-w-6xl mx-auto text-center relative z-10">
                <div class="inline-flex items-center gap-4 mb-8">
                    <div class="w-16 h-0.5 theme-bg"></div>
                    <span class="text-sm font-semibold uppercase tracking-widest theme-text opacity-70">Chapter Five</span>
                    <div class="w-16 h-0.5 theme-bg"></div>
                </div>
                <h2 id="section5-title" class="text-6xl md:text-7xl lg:text-8xl font-black mb-12 theme-text drop-shadow-lg" data-theme-element="text">{{ $templateData['defaults']['section5_title'] ?? 'Forever' }}</h2>
                <p id="section5-content" class="text-3xl md:text-4xl lg:text-5xl text-gray-800 dark:text-[#e2e8f0] leading-relaxed font-light max-w-4xl mx-auto">
                    {{ $templateData['defaults']['section5_content'] ?? 'Today, tomorrow, and forever - I choose you.' }}
                </p>
            </div>
        </section>
        
        <!-- Memories Gallery - Enhanced -->
        <section id="memories" class="bg-gradient-to-br {{ $bg }} py-40 px-12 relative overflow-hidden">
            <div class="absolute inset-0 opacity-10">
                <div class="absolute top-0 right-0 w-96 h-96 rounded-full theme-bg blur-3xl"></div>
                <div class="absolute bottom-0 left-0 w-96 h-96 rounded-full theme-bg blur-3xl"></div>
            </div>
            <div class="max-w-7xl mx-auto relative z-10">
                <div class="text-center mb-20">
                    <div class="inline-flex items-center gap-4 mb-6">
                        <div class="w-16 h-0.5 bg-white/50"></div>
                        <span class="text-sm font-semibold uppercase tracking-widest text-white/80">Gallery</span>
                        <div class="w-16 h-0.5 bg-white/50"></div>
                    </div>
                    <h2 class="text-6xl md:text-7xl lg:text-8xl font-black text-center mb-8 text-white drop-shadow-2xl" data-theme-element="text">Memories</h2>
                    <p class="text-lg text-white/80 max-w-2xl mx-auto">A collection of moments that tell our story</p>
                </div>
                <div id="memories-section" class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                    <div class="aspect-square bg-white/20 backdrop-blur-sm rounded-3xl flex items-center justify-center border-2 border-dashed border-white/30 hover:border-white/60 transition-all duration-300 hover:shadow-xl group">
                        <p class="text-white/70 group-hover:text-white text-sm text-center px-4 transition-colors duration-300">Add memories in the editor</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Professional Footer -->
        <footer class="bg-gray-900 dark:bg-[#0a0f1a] text-white py-16 px-8">
            <div class="max-w-7xl mx-auto">
                <div class="grid md:grid-cols-3 gap-12 mb-12">
                    <div>
                        <div class="flex items-center space-x-2 mb-6">
                            <div class="w-10 h-10 rounded-lg theme-bg flex items-center justify-center">
                                <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                                </svg>
                            </div>
                            <span class="text-xl font-bold">Hamro Yaad</span>
                        </div>
                        <p class="text-gray-400 text-sm leading-relaxed">Creating beautiful memories that last forever.</p>
                    </div>
                    <div>
                        <h3 class="font-semibold mb-4">Quick Links</h3>
                        <ul class="space-y-2 text-gray-400 text-sm">
                            <li><a href="#home" class="hover:text-white transition-colors">Home</a></li>
                            <li><a href="#story" class="hover:text-white transition-colors">Our Story</a></li>
                            <li><a href="#memories" class="hover:text-white transition-colors">Memories</a></li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="font-semibold mb-4">Created With</h3>
                        <p class="text-gray-400 text-sm">Made with ❤️ using Hamro Yaad</p>
                        <p class="text-gray-500 text-xs mt-2">© {{ date('Y') }} All rights reserved</p>
                    </div>
                </div>
                <div class="border-t border-gray-800 pt-8 text-center text-gray-500 text-sm">
                    <p>This website was created with love and care</p>
                </div>
            </div>
        </footer>
    </div>

@else
    {{-- Template 4: Timeless Centered with Elegant Typography - Enhanced --}}
    <div class="min-h-screen bg-gradient-to-br {{ $bg }}" data-theme-color="{{ $color }}" id="template-container">
        <!-- Full Screen Centered Layout - Enhanced -->
        <div class="min-h-screen flex items-center justify-center px-12 py-32 relative overflow-hidden">
            <!-- Enhanced Background Pattern -->
            <div class="absolute inset-0 opacity-8">
                <div class="absolute inset-0" style="background-image: radial-gradient(circle, var(--theme-color) 1px, transparent 1px); background-size: 50px 50px;"></div>
            </div>
            <!-- Animated gradient orbs -->
            <div class="absolute inset-0 opacity-15">
                <div class="absolute top-0 right-0 w-96 h-96 rounded-full theme-bg blur-3xl animate-pulse"></div>
                <div class="absolute bottom-0 left-0 w-96 h-96 rounded-full theme-bg blur-3xl animate-pulse" style="animation-delay: 1.5s;"></div>
            </div>
            
            <div class="max-w-6xl mx-auto text-center relative z-10 space-y-24">
                <!-- Hero Image with Enhanced Elegant Frame -->
                <div class="mb-20 rounded-[4rem] overflow-hidden shadow-[0_50px_120px_rgba(0,0,0,0.4)] border-[16px] border-white/90 dark:border-white/70 transform hover:scale-[1.02] transition-transform duration-700 group">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent z-10 group-hover:opacity-0 transition-opacity duration-500"></div>
                    <img id="hero-image-display" data-image="hero" src="{{ $categoryImages['hero'] }}" alt="Hero" class="w-full h-[75vh] object-cover transition-transform duration-700 group-hover:scale-110">
                </div>
                
                <div class="space-y-20">
                    <div>
                        <h1 id="preview-heading" class="text-8xl md:text-[10rem] lg:text-[13rem] font-black text-gray-900 dark:text-white mb-10 leading-[0.85] tracking-tight drop-shadow-2xl" style="font-variation-settings: 'wght' 900; text-shadow: 0 0 100px rgba(0,0,0,0.1);">
                            {{ $templateData['defaults']['heading'] }}
                        </h1>
                        <div class="inline-flex items-center gap-4 px-8 py-4 rounded-full backdrop-blur-xl border-2 border-gray-200/50 dark:border-gray-700/50 theme-bg-opacity shadow-lg mb-16">
                            <p id="preview-subheading" class="text-3xl md:text-4xl text-gray-700 dark:text-[#cbd5e1] font-light italic">
                            {{ $templateData['defaults']['subheading'] }}
                        </p>
                        </div>
                    </div>
                    
                    <!-- Icon with Enhanced Ornamental Design -->
                    <div class="my-24 flex justify-center">
                        <div class="relative">
                            <div class="w-72 h-72 rounded-full flex items-center justify-center shadow-[0_30px_90px_rgba(0,0,0,0.4)] border-[12px] border-white/70 dark:border-white/50 theme-bg transform hover:scale-110 hover:rotate-12 transition-all duration-700 group cursor-pointer" data-theme-element="icon">
                                <div class="absolute inset-0 rounded-full bg-white/20 blur-xl group-hover:blur-2xl transition-all duration-700"></div>
                                @if($category == 'marriage' || $category == 'valentine' || $category == 'mothersday')
                                <svg class="w-40 h-40 text-white relative z-10 transform group-hover:scale-110 transition-transform duration-500" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                                </svg>
                                @elseif($category == 'fathersday')
                                <svg class="w-40 h-40 text-white relative z-10 transform group-hover:scale-110 transition-transform duration-500" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                                </svg>
                                @else
                                <svg class="w-40 h-40 text-white relative z-10 transform group-hover:scale-110 transition-transform duration-500" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 8v13m0-13V6a2 2 0 112 2h-2zm0 0V5.5A2.5 2.5 0 109.5 8H12zm-7 4h14M5 12a2 2 0 110-4h14a2 2 0 110 4M5 12v7a2 2 0 002 2h10a2 2 0 002-2v-7"/>
                                </svg>
                                @endif
                            </div>
                            <!-- Enhanced decorative rings -->
                            <div class="absolute inset-0 rounded-full border-4 border-white/30 dark:border-white/20 animate-pulse"></div>
                            <div class="absolute -inset-4 rounded-full border-2 border-theme-color/20 animate-pulse" style="animation-delay: 0.5s;"></div>
                        </div>
                    </div>
                    
                    <!-- Message in Enhanced Elegant Card -->
                    <div class="bg-white/95 dark:bg-[#1e293b]/95 backdrop-blur-2xl rounded-[3.5rem] p-24 shadow-[0_40px_100px_rgba(0,0,0,0.3)] border-4 border-white/50 dark:border-white/30 transform hover:scale-[1.02] transition-transform duration-500">
                        <div class="relative">
                            <div class="absolute -left-8 top-0 text-7xl font-black text-gray-100 dark:text-gray-800 opacity-30 select-none">"</div>
                            <p id="preview-message" class="text-3xl md:text-4xl lg:text-5xl text-gray-800 dark:text-[#e2e8f0] leading-relaxed mb-16 font-light italic relative z-10 pl-8">
                            {{ $templateData['defaults']['message'] ?? 'Your heartfelt message here' }}
                        </p>
                            <div class="absolute -right-8 bottom-0 text-7xl font-black text-gray-100 dark:text-gray-800 opacity-30 select-none">"</div>
                        </div>
                        <div class="pt-16 border-t-[8px] theme-border" data-theme-element="border">
                            <p id="preview-from" class="text-5xl md:text-6xl lg:text-7xl font-black theme-text relative inline-block" data-theme-element="text">
                                <span class="relative z-10">{{ $templateData['defaults']['from'] ?? 'Your Name' }}</span>
                                <span class="absolute bottom-2 left-0 right-0 h-4 theme-bg opacity-20 -z-0 transform -skew-x-12"></span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Section 1: Our Love - Enhanced -->
        <section class="bg-white/80 dark:bg-[#1e293b]/80 backdrop-blur-xl py-40 px-12 relative overflow-hidden">
            <div class="absolute inset-0 opacity-5">
                <div class="absolute top-0 right-0 w-96 h-96 rounded-full theme-bg blur-3xl"></div>
            </div>
            <div class="max-w-6xl mx-auto text-center relative z-10">
                <div class="inline-flex items-center gap-4 mb-8">
                    <div class="w-16 h-0.5 theme-bg"></div>
                    <span class="text-sm font-semibold uppercase tracking-widest theme-text opacity-70">Chapter One</span>
                    <div class="w-16 h-0.5 theme-bg"></div>
                </div>
                <h2 id="section1-title" class="text-6xl md:text-7xl lg:text-8xl font-black mb-12 theme-text drop-shadow-lg" data-theme-element="text">{{ $templateData['defaults']['section1_title'] ?? 'Our Love' }}</h2>
                <p id="section1-content" class="text-3xl md:text-4xl lg:text-5xl text-gray-800 dark:text-[#e2e8f0] leading-relaxed font-light max-w-4xl mx-auto">
                    {{ $templateData['defaults']['section1_content'] ?? 'Every moment with you feels like a dream.' }}
                </p>
            </div>
        </section>
        
        <!-- Section 2: Our First Day - Enhanced -->
        <section class="bg-gradient-to-br {{ $bg }} py-40 px-12 relative overflow-hidden">
            <div class="absolute inset-0 opacity-10">
                <div class="absolute top-0 right-0 w-96 h-96 rounded-full theme-bg blur-3xl animate-pulse"></div>
                <div class="absolute bottom-0 left-0 w-80 h-80 rounded-full theme-bg blur-3xl animate-pulse" style="animation-delay: 1s;"></div>
            </div>
            <div class="max-w-7xl mx-auto relative z-10">
                <div class="grid md:grid-cols-2 gap-20 items-center">
                    <div class="space-y-8">
                        <div class="inline-flex items-center gap-3">
                            <div class="w-12 h-0.5 bg-white/50"></div>
                            <span class="text-sm font-semibold uppercase tracking-widest text-white/80">Chapter Two</span>
                            <div class="w-12 h-0.5 bg-white/50"></div>
                        </div>
                        <h2 id="section2-title" class="text-6xl md:text-7xl lg:text-8xl font-black mb-12 text-white leading-tight drop-shadow-2xl" data-theme-element="text">{{ $templateData['defaults']['section2_title'] ?? 'Our First Day' }}</h2>
                        <p id="section2-content" class="text-3xl md:text-4xl text-white/95 leading-relaxed font-light">
                            {{ $templateData['defaults']['section2_content'] ?? 'The day we met changed everything.' }}
                        </p>
                    </div>
                    <div class="relative" id="section2-image-container">
                        <div class="aspect-square rounded-[2.5rem] overflow-hidden shadow-2xl relative group">
                            <div class="absolute inset-0 bg-gradient-to-br from-white/20 to-transparent z-10 group-hover:opacity-0 transition-opacity duration-500"></div>
                            <img id="section2-image-display" src="" alt="Section 2" class="w-full h-full object-cover absolute inset-0 hidden transition-transform duration-700 group-hover:scale-110">
                            <div id="section2-placeholder" class="w-full h-full bg-gradient-to-br from-white/30 via-white/20 to-white/10 flex items-center justify-center border-2 border-white/30">
                                <svg class="w-28 h-28 text-white/60" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                </svg>
                        </div>
                        </div>
                        <div class="absolute -bottom-8 -right-8 w-40 h-40 rounded-3xl bg-white/10 blur-xl -z-10"></div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Section 3: Our Journey - Enhanced -->
        <section class="bg-white/80 dark:bg-[#1e293b]/80 backdrop-blur-xl py-40 px-12 relative overflow-hidden">
            <div class="absolute inset-0 opacity-5">
                <div class="absolute top-0 right-0 w-96 h-96 rounded-full theme-bg blur-3xl"></div>
            </div>
            <div class="max-w-7xl mx-auto text-center relative z-10">
                <div class="inline-flex items-center gap-4 mb-8">
                    <div class="w-16 h-0.5 theme-bg"></div>
                    <span class="text-sm font-semibold uppercase tracking-widest theme-text opacity-70">Chapter Three</span>
                    <div class="w-16 h-0.5 theme-bg"></div>
                </div>
                <h2 id="section3-title" class="text-6xl md:text-7xl lg:text-8xl font-black mb-12 theme-text drop-shadow-lg" data-theme-element="text">{{ $templateData['defaults']['section3_title'] ?? 'Our Journey' }}</h2>
                <p id="section3-content" class="text-3xl md:text-4xl lg:text-5xl text-gray-800 dark:text-[#e2e8f0] leading-relaxed font-light max-w-4xl mx-auto mb-20">
                    {{ $templateData['defaults']['section3_content'] ?? 'Together we\'ve created countless beautiful memories.' }}
                </p>
                <div id="section3-images-container" class="grid md:grid-cols-3 gap-8 lg:gap-10">
                    <div class="aspect-square rounded-3xl overflow-hidden shadow-2xl relative group">
                        <img id="section3-image1-display" src="" alt="Section 3 Image 1" class="w-full h-full object-cover absolute inset-0 hidden transition-transform duration-700 group-hover:scale-110">
                        <div id="section3-placeholder1" class="w-full h-full bg-gradient-to-br from-gray-200 via-gray-100 to-gray-200 dark:from-gray-700 dark:via-gray-800 dark:to-gray-700 flex items-center justify-center border-2 border-gray-200 dark:border-gray-700">
                            <svg class="w-20 h-20 text-gray-400 dark:text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                            </svg>
                    </div>
                    </div>
                    <div class="aspect-square rounded-3xl overflow-hidden shadow-2xl relative group">
                        <img id="section3-image2-display" src="" alt="Section 3 Image 2" class="w-full h-full object-cover absolute inset-0 hidden transition-transform duration-700 group-hover:scale-110">
                        <div id="section3-placeholder2" class="w-full h-full bg-gradient-to-br from-gray-200 via-gray-100 to-gray-200 dark:from-gray-700 dark:via-gray-800 dark:to-gray-700 flex items-center justify-center border-2 border-gray-200 dark:border-gray-700">
                            <svg class="w-20 h-20 text-gray-400 dark:text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="aspect-square rounded-3xl overflow-hidden shadow-2xl relative group">
                        <img id="section3-image3-display" src="" alt="Section 3 Image 3" class="w-full h-full object-cover absolute inset-0 hidden transition-transform duration-700 group-hover:scale-110">
                        <div id="section3-placeholder3" class="w-full h-full bg-gradient-to-br from-gray-200 via-gray-100 to-gray-200 dark:from-gray-700 dark:via-gray-800 dark:to-gray-700 flex items-center justify-center border-2 border-gray-200 dark:border-gray-700">
                            <svg class="w-20 h-20 text-gray-400 dark:text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Section 4: Our Promise - Enhanced -->
        <section class="bg-gradient-to-br {{ $bg }} py-40 px-12 relative overflow-hidden">
            <div class="absolute inset-0 opacity-10">
                <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-96 h-96 rounded-full theme-bg blur-3xl animate-pulse"></div>
            </div>
            <div class="max-w-6xl mx-auto text-center relative z-10">
                <div class="inline-flex items-center gap-4 mb-8">
                    <div class="w-16 h-0.5 bg-white/50"></div>
                    <span class="text-sm font-semibold uppercase tracking-widest text-white/80">Chapter Four</span>
                    <div class="w-16 h-0.5 bg-white/50"></div>
                </div>
                <h2 id="section4-title" class="text-6xl md:text-7xl lg:text-8xl font-black mb-12 text-white leading-tight drop-shadow-2xl" data-theme-element="text">{{ $templateData['defaults']['section4_title'] ?? 'Our Promise' }}</h2>
                <p id="section4-content" class="text-3xl md:text-4xl lg:text-5xl text-white/95 leading-relaxed font-light max-w-4xl mx-auto">
                    {{ $templateData['defaults']['section4_content'] ?? 'I promise to stand by you through all of life\'s adventures.' }}
                </p>
            </div>
        </section>
        
        <!-- Section 5: Forever - Enhanced -->
        <section class="bg-white/80 dark:bg-[#1e293b]/80 backdrop-blur-xl py-40 px-12 relative overflow-hidden">
            <div class="absolute inset-0 opacity-5">
                <div class="absolute top-0 right-0 w-96 h-96 rounded-full theme-bg blur-3xl"></div>
            </div>
            <div class="max-w-6xl mx-auto text-center relative z-10">
                <div class="inline-flex items-center gap-4 mb-8">
                    <div class="w-16 h-0.5 theme-bg"></div>
                    <span class="text-sm font-semibold uppercase tracking-widest theme-text opacity-70">Chapter Five</span>
                    <div class="w-16 h-0.5 theme-bg"></div>
                </div>
                <h2 id="section5-title" class="text-6xl md:text-7xl lg:text-8xl font-black mb-12 theme-text drop-shadow-lg" data-theme-element="text">{{ $templateData['defaults']['section5_title'] ?? 'Forever' }}</h2>
                <p id="section5-content" class="text-3xl md:text-4xl lg:text-5xl text-gray-800 dark:text-[#e2e8f0] leading-relaxed font-light max-w-4xl mx-auto">
                    {{ $templateData['defaults']['section5_content'] ?? 'Today, tomorrow, and forever - I choose you.' }}
                </p>
            </div>
        </section>
        
        <!-- Memories Gallery - Enhanced -->
        <section id="memories" class="bg-gradient-to-br {{ $bg }} py-40 px-12 relative overflow-hidden">
            <div class="absolute inset-0 opacity-10">
                <div class="absolute top-0 right-0 w-96 h-96 rounded-full theme-bg blur-3xl"></div>
                <div class="absolute bottom-0 left-0 w-96 h-96 rounded-full theme-bg blur-3xl"></div>
            </div>
            <div class="max-w-7xl mx-auto relative z-10">
                <div class="text-center mb-20">
                    <div class="inline-flex items-center gap-4 mb-6">
                        <div class="w-16 h-0.5 bg-white/50"></div>
                        <span class="text-sm font-semibold uppercase tracking-widest text-white/80">Gallery</span>
                        <div class="w-16 h-0.5 bg-white/50"></div>
                    </div>
                    <h2 class="text-6xl md:text-7xl lg:text-8xl font-black text-center mb-8 text-white drop-shadow-2xl" data-theme-element="text">Memories</h2>
                    <p class="text-lg text-white/80 max-w-2xl mx-auto">A collection of moments that tell our story</p>
                </div>
                <div id="memories-section" class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                    <div class="aspect-square bg-white/20 backdrop-blur-sm rounded-3xl flex items-center justify-center border-2 border-dashed border-white/30 hover:border-white/60 transition-all duration-300 hover:shadow-xl group">
                        <p class="text-white/70 group-hover:text-white text-sm text-center px-4 transition-colors duration-300">Add memories in the editor</p>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endif

<style>
/* Theme color CSS variables */
#template-container {
    --theme-color: {{ $color }};
    scroll-behavior: smooth;
}

.theme-bg {
    background-color: var(--theme-color) !important;
    background: linear-gradient(135deg, var(--theme-color), color-mix(in srgb, var(--theme-color) 80%, black)) !important;
}

.theme-bg-opacity {
    background-color: color-mix(in srgb, var(--theme-color) 30%, transparent) !important;
    background: linear-gradient(135deg, color-mix(in srgb, var(--theme-color) 40%, transparent), color-mix(in srgb, var(--theme-color) 20%, transparent)) !important;
}

.theme-color-dark {
    background-color: color-mix(in srgb, var(--theme-color) 80%, black) !important;
}

.theme-text {
    color: var(--theme-color) !important;
}

.theme-border {
    border-color: var(--theme-color) !important;
}

[data-theme-element="badge"] {
    background-color: color-mix(in srgb, var(--theme-color) 30%, transparent) !important;
}

[data-theme-element="text"] {
    color: var(--theme-color) !important;
}

[data-theme-element="border"] {
    border-color: var(--theme-color) !important;
}

[data-theme-element="icon"] {
    background-color: var(--theme-color) !important;
}

[data-theme-element="line"] {
    background-color: var(--theme-color) !important;
}

[data-theme-element="decoration"] {
    background-color: var(--theme-color) !important;
}

/* Smooth Animations */
@keyframes fadeIn {
    from {
        opacity: 0;
        transform: translateY(20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

@keyframes slideUp {
    from {
        opacity: 0;
        transform: translateY(40px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

@keyframes scaleIn {
    from {
        opacity: 0;
        transform: scale(0.8);
    }
    to {
        opacity: 1;
        transform: scale(1);
    }
}

@keyframes float {
    0%, 100% {
        transform: translateY(0px) translateX(0px);
        opacity: 0.4;
    }
    33% {
        transform: translateY(-20px) translateX(10px);
        opacity: 0.6;
    }
    66% {
        transform: translateY(10px) translateX(-10px);
        opacity: 0.5;
    }
}

@keyframes gradient-shift {
    0%, 100% {
        background-position: 0% 50%;
    }
    50% {
        background-position: 100% 50%;
    }
}

@keyframes scroll-indicator {
    0% {
        transform: translateY(0);
        opacity: 0.7;
    }
    50% {
        transform: translateY(12px);
        opacity: 1;
    }
    100% {
        transform: translateY(0);
        opacity: 0.7;
    }
}

.animate-float {
    animation: float 6s ease-in-out infinite;
}

.animate-gradient-shift {
    background-size: 200% 200%;
    animation: gradient-shift 8s ease infinite;
}

.animate-scroll-indicator {
    animation: scroll-indicator 2s ease-in-out infinite;
}

.animate-fade-in {
    animation: fadeIn 1s ease-out;
}

.animate-slide-up {
    animation: slideUp 1s ease-out;
}

.animate-scale-in {
    animation: scaleIn 1s ease-out;
    animation-delay: 0.3s;
    animation-fill-mode: both;
}

/* Navigation scroll effect */
#main-nav {
    transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
}

#main-nav.scrolled {
    background-color: rgba(255, 255, 255, 0.98);
    box-shadow: 0 10px 30px -10px rgba(0, 0, 0, 0.15);
    backdrop-filter: blur(20px);
}

#main-nav.scrolled.dark {
    background-color: rgba(30, 41, 59, 0.98);
}

/* Smooth hover effects */
.group:hover img {
    transform: scale(1.1);
}

/* Image loading states */
img {
    transition: opacity 0.3s ease, transform 0.7s ease;
}

/* Section spacing improvements */
section {
    position: relative;
}

/* Better typography */
h1, h2, h3 {
    letter-spacing: -0.02em;
}

/* Memory grid hover effects */
#memories-section > div {
    transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    cursor: pointer;
}

#memories-section > div:hover {
    transform: translateY(-8px) scale(1.02);
    box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
}

#memories-section > div img {
    transition: transform 0.6s cubic-bezier(0.4, 0, 0.2, 1);
}

#memories-section > div:hover img {
    transform: scale(1.1);
}

/* Enhanced section transitions */
section {
    position: relative;
    transition: all 0.3s ease;
}

/* Better image loading */
img {
    transition: opacity 0.5s ease, transform 0.8s cubic-bezier(0.4, 0, 0.2, 1);
    will-change: transform;
}

/* Smooth text rendering */
h1, h2, h3, p {
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}

/* Responsive improvements */
@media (max-width: 768px) {
    .animate-slide-up {
        animation-duration: 0.8s;
    }
}
</style>

<script>
// Update images when uploaded
document.addEventListener('DOMContentLoaded', function() {
    const savedData = localStorage.getItem('template_data');
    if (savedData) {
        try {
            const data = JSON.parse(savedData);
            if (data.images && data.images.hero) {
                const img = document.getElementById('hero-image-display');
                if (img) img.src = data.images.hero;
            }
            if (data.images && data.images.memories && data.images.memories.length > 0) {
                const memoriesSection = document.getElementById('memories-section');
                if (memoriesSection) {
                    memoriesSection.innerHTML = '';
                    data.images.memories.forEach(memory => {
                        const div = document.createElement('div');
                        div.className = 'aspect-square relative overflow-hidden rounded-2xl shadow-lg group hover:scale-105 transition-all duration-300 cursor-pointer';
                        const img = document.createElement('img');
                        img.src = memory;
                        img.alt = 'Memory';
                        img.className = 'w-full h-full object-cover';
                        div.appendChild(img);
                        memoriesSection.appendChild(div);
                    });
                }
            }
            if (data.themeColor) {
                updateThemeColor(data.themeColor);
            }
        } catch(e) {
            console.log('No saved data');
        }
    }

    // Navigation scroll effect
    const nav = document.getElementById('main-nav');
    if (nav) {
        window.addEventListener('scroll', function() {
            if (window.scrollY > 50) {
                nav.classList.add('scrolled');
            } else {
                nav.classList.remove('scrolled');
            }
        });
    }

    // Smooth scrolling for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                const navHeight = document.getElementById('main-nav')?.offsetHeight || 0;
                const targetPosition = target.offsetTop - navHeight;
                window.scrollTo({
                    top: targetPosition,
                    behavior: 'smooth'
                });
            }
        });
    });

    // Intersection Observer for fade-in animations
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
            }
        });
    }, observerOptions);

    // Observe all sections
    document.querySelectorAll('section').forEach(section => {
        section.style.opacity = '0';
        section.style.transform = 'translateY(30px)';
        section.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
        observer.observe(section);
    });
});

function updateThemeColor(color) {
    const container = document.getElementById('template-container');
    if (container) {
        container.style.setProperty('--theme-color', color);
    }
}
</script>
