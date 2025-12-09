{{-- Marriage Template 1: Romantic Elegance - Unique Card-Based Layout with Dates --}}
@php
$color = $color ?? $templateData['color'];
$bg = $bg ?? $templateData['bg'];
$category = $category ?? $templateData['category'] ?? 'marriage';
$categoryImages = $categoryImages ?? [];
$currentDate = date('F j, Y');
@endphp

<div class="min-h-screen bg-gradient-to-br {{ $bg }}" data-theme-color="{{ $color }}" id="template-container" style="--theme-color: {{ $color }};">
    <!-- Navigation -->
    <nav class="fixed top-0 left-0 right-0 z-50 bg-white/90 dark:bg-[#1e293b]/90 backdrop-blur-xl border-b border-gray-200/60 dark:border-[#334155]/60 transition-all duration-500 shadow-sm" id="main-nav">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="flex items-center justify-between h-20">
                <div class="flex items-center space-x-3 group cursor-pointer">
                    <div class="w-12 h-12 rounded-xl theme-bg flex items-center justify-center shadow-lg transform group-hover:scale-110 transition-all duration-300 group-hover:rotate-6">
                        <svg class="w-7 h-7 text-white" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                        </svg>
                    </div>
                    <span class="text-2xl font-bold" style="color: {{ $color }};">Hamro Yaad</span>
                </div>
                <div class="hidden md:flex items-center space-x-1">
                    <a href="#home" class="px-5 py-2.5 rounded-lg font-medium transition-all duration-300 hover:scale-105" style="color: {{ $color }};">Home</a>
                    <a href="#story" class="px-5 py-2.5 rounded-lg font-medium transition-all duration-300 hover:scale-105" style="color: {{ $color }};">Our Story</a>
                    <a href="#memories" class="px-5 py-2.5 rounded-lg font-medium transition-all duration-300 hover:scale-105" style="color: {{ $color }};">Memories</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section - Card Style Layout -->
    <section id="home" class="relative min-h-screen flex items-center justify-center px-6 md:px-8 py-24 md:py-32 overflow-hidden pt-20">
        <div class="absolute inset-0 z-0">
            <img id="hero-image-display" data-image="hero" src="{{ $categoryImages['hero'] ?? 'https://images.unsplash.com/photo-1519741497674-611481863552?w=1600&q=80' }}" alt="Hero" class="w-full h-full object-cover transition-all duration-1000">
            <div class="absolute inset-0 bg-gradient-to-br from-black/70 via-black/40 to-black/60"></div>
        </div>
        <div class="relative z-10 max-w-5xl mx-auto w-full animate-fade-in">
            <div class="bg-white/95 dark:bg-[#0f172a]/95 backdrop-blur-2xl rounded-[3rem] shadow-2xl p-8 md:p-12 lg:p-16 border-4" style="border-color: {{ $color }}; background-color: var(--bg-color, rgba(255,255,255,0.95));">
                <div class="text-center space-y-6 md:space-y-8">
                    <div class="inline-block px-6 py-3 rounded-full mb-4 animate-slide-up" style="background-color: {{ $color }}20;">
                        <p id="preview-subheading" class="text-lg font-bold uppercase tracking-wider" style="color: {{ $color }};">{{ $templateData['defaults']['subheading'] ?? 'On Our Special Day' }}</p>
                    </div>
                    <div class="mb-6 animate-fade-in" style="animation-delay: 0.2s;">
                        <p class="text-sm font-semibold mb-2" style="color: {{ $color }};">{{ $currentDate }}</p>
                    </div>
                    <h1 id="preview-heading" class="text-5xl md:text-6xl lg:text-8xl font-black mb-6 md:mb-8 animate-slide-up" style="color: {{ $color }}; animation-delay: 0.3s;">
                        {{ $templateData['defaults']['heading'] ?? 'To My Beloved' }}
                    </h1>
                    <div class="flex justify-center my-8 md:my-12 animate-scale-in">
                        <div class="w-32 h-32 md:w-40 md:h-40 rounded-full flex items-center justify-center shadow-xl border-4" style="background-color: {{ $color }}; border-color: {{ $color }}80;">
                            <svg class="w-16 h-16 md:w-20 md:h-20 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Message Section - Timeline Style -->
    <section id="story" class="relative bg-white dark:bg-[#0f172a] py-24 md:py-32 px-6 md:px-8 overflow-hidden">
        <div class="max-w-6xl mx-auto">
            <div class="relative">
                <!-- Timeline Line -->
                <div class="absolute left-8 md:left-1/2 top-0 bottom-0 w-1 transform md:-translate-x-1/2" style="background: linear-gradient(to bottom, {{ $color }}, {{ $color }}80);"></div>
                
                <!-- Message Card -->
                <div class="relative pl-20 md:pl-0 md:ml-[50%] mb-12 md:mb-16 animate-fade-in">
                    <div class="absolute left-4 md:left-[-20px] top-6 w-8 h-8 rounded-full border-4 border-white dark:border-[#0f172a]" style="background-color: {{ $color }};"></div>
                    <div class="bg-gradient-to-br {{ $bg }} rounded-2xl p-6 md:p-8 shadow-xl border-l-4" style="border-color: {{ $color }}; background-color: var(--bg-color, transparent);">
                        <div class="mb-4">
                            <span class="text-xs font-semibold uppercase tracking-wider" style="color: {{ $color }};">{{ $currentDate }}</span>
                        </div>
                    <p id="preview-message" class="text-xl md:text-2xl lg:text-3xl leading-relaxed mb-6" style="color: var(--text-color, {{ $color }});">
                        {{ $templateData['defaults']['message'] ?? 'Your heartfelt message here' }}
                    </p>
                    <p id="preview-from" class="text-lg md:text-xl font-bold" style="color: var(--text-color, {{ $color }});">{{ $templateData['defaults']['from'] ?? 'Your Name' }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Section 1 - Split Layout with Image -->
    <section class="bg-gradient-to-br {{ $bg }} py-24 md:py-32 px-6 md:px-8 relative overflow-hidden" style="background-color: var(--bg-color, transparent);">
        <div class="absolute inset-0 opacity-10">
            <div class="absolute top-0 right-0 w-96 h-96 rounded-full blur-3xl animate-pulse" style="background-color: {{ $color }};"></div>
        </div>
        <div class="max-w-7xl mx-auto relative z-10">
            <div class="grid md:grid-cols-2 gap-8 md:gap-12 items-center">
                <div class="space-y-4 md:space-y-6 animate-slide-up">
                    <div class="inline-flex items-center gap-3 mb-4">
                        <div class="w-12 h-1 rounded-full" style="background-color: {{ $color }};"></div>
                        <span class="text-sm font-bold uppercase tracking-widest" style="color: {{ $color }};">Chapter One</span>
                    </div>
                    <h2 id="section1-title" class="text-4xl md:text-5xl lg:text-6xl font-black mb-4 md:mb-6" style="color: var(--text-color, {{ $color }});">{{ $templateData['defaults']['section1_title'] ?? 'Our Love' }}</h2>
                    <div class="mb-4">
                        <span class="text-sm font-semibold" style="color: var(--text-color, {{ $color }});">{{ $currentDate }}</span>
                    </div>
                    <p id="section1-content" class="text-lg md:text-xl lg:text-2xl leading-relaxed" style="color: var(--text-color, {{ $color }});">
                        {{ $templateData['defaults']['section1_content'] ?? 'Every moment with you feels like a dream.' }}
                    </p>
                </div>
                <div class="relative animate-scale-in">
                    <div class="aspect-square rounded-3xl overflow-hidden shadow-2xl border-4 border-white/50" style="border-color: {{ $color }}40;">
                        <div id="section1-placeholder" class="w-full h-full bg-gradient-to-br flex items-center justify-center" style="background: linear-gradient(135deg, {{ $color }}40, {{ $color }}20);">
                            <svg class="w-24 h-24" style="color: {{ $color }}60;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Section 2 - Centered Card Layout -->
    <section class="bg-white dark:bg-[#0f172a] py-24 md:py-32 px-6 md:px-8">
        <div class="max-w-4xl mx-auto">
            <div class="bg-white dark:bg-[#1e293b] rounded-3xl shadow-2xl p-8 md:p-12 border-2 animate-fade-in" style="border-color: {{ $color }}; background-color: var(--bg-color, white);">
                <div class="text-center space-y-4 md:space-y-6">
                    <div class="inline-block px-4 py-2 rounded-full mb-4" style="background-color: {{ $color }}20;">
                        <span class="text-xs font-bold uppercase tracking-wider" style="color: {{ $color }};">Chapter Two</span>
                    </div>
                    <h2 id="section2-title" class="text-3xl md:text-4xl lg:text-5xl font-black mb-4" style="color: var(--text-color, {{ $color }});">{{ $templateData['defaults']['section2_title'] ?? 'Our First Day' }}</h2>
                    <p class="text-sm font-semibold mb-4 md:mb-6" style="color: var(--text-color, {{ $color }});">{{ $currentDate }}</p>
                    <p id="section2-content" class="text-base md:text-lg lg:text-xl leading-relaxed" style="color: var(--text-color, {{ $color }});">
                        {{ $templateData['defaults']['section2_content'] ?? 'The day we met changed everything.' }}
                    </p>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Section 3 - Grid Layout -->
    <section class="bg-gradient-to-br {{ $bg }} py-24 md:py-32 px-6 md:px-8 relative overflow-hidden" style="background-color: var(--bg-color, transparent);">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-12 md:mb-16 animate-fade-in">
                <div class="inline-flex items-center gap-3 mb-4 md:mb-6">
                    <div class="w-16 h-1 rounded-full" style="background-color: {{ $color }};"></div>
                    <span class="text-sm font-bold uppercase tracking-widest" style="color: {{ $color }};">Chapter Three</span>
                    <div class="w-16 h-1 rounded-full" style="background-color: {{ $color }};"></div>
                </div>
                <h2 id="section3-title" class="text-4xl md:text-5xl lg:text-6xl font-black mb-4" style="color: var(--text-color, {{ $color }});">{{ $templateData['defaults']['section3_title'] ?? 'Our Journey' }}</h2>
                <p class="text-sm font-semibold mb-6 md:mb-8" style="color: var(--text-color, {{ $color }});">{{ $currentDate }}</p>
            </div>
            <div id="section3-images-container" class="grid md:grid-cols-3 gap-4 md:gap-6">
                @for($i = 1; $i <= 3; $i++)
                <div class="aspect-square rounded-2xl overflow-hidden shadow-xl border-2 animate-scale-in" style="border-color: {{ $color }}40; animation-delay: {{ $i * 0.1 }}s;">
                    <div class="w-full h-full bg-gradient-to-br flex items-center justify-center" style="background: linear-gradient(135deg, {{ $color }}30, {{ $color }}10);">
                        <svg class="w-16 h-16" style="color: {{ $color }}50;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                </div>
                @endfor
            </div>
            <div class="mt-8 md:mt-12 text-center">
                <p id="section3-content" class="text-lg md:text-xl lg:text-2xl leading-relaxed max-w-3xl mx-auto" style="color: var(--text-color, {{ $color }});">
                    {{ $templateData['defaults']['section3_content'] ?? 'Together we\'ve created countless beautiful memories.' }}
                </p>
            </div>
        </div>
    </section>
    
    <!-- Section 4 - Sidebar Layout -->
    <section class="bg-white dark:bg-[#0f172a] py-24 md:py-32 px-6 md:px-8">
        <div class="max-w-7xl mx-auto">
            <div class="grid md:grid-cols-3 gap-8 md:gap-12">
                <div class="md:col-span-1">
                    <div class="sticky top-28 text-center md:text-left">
                        <div class="inline-block md:block mb-6">
                            <span class="text-xs font-bold uppercase tracking-wider" style="color: {{ $color }};">Chapter Four</span>
                        </div>
                        <div class="w-24 h-24 rounded-full flex items-center justify-center mx-auto md:mx-0 mb-6 shadow-xl animate-pulse" style="background-color: {{ $color }};">
                            <svg class="w-12 h-12 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                            </svg>
                        </div>
                        <p class="text-sm font-semibold" style="color: {{ $color }};">{{ $currentDate }}</p>
                    </div>
                </div>
                <div class="md:col-span-2 space-y-4 md:space-y-6 animate-slide-up">
                    <h2 id="section4-title" class="text-3xl md:text-4xl lg:text-5xl font-black" style="color: var(--text-color, {{ $color }});">{{ $templateData['defaults']['section4_title'] ?? 'Our Promise' }}</h2>
                    <p id="section4-content" class="text-base md:text-lg lg:text-xl leading-relaxed" style="color: var(--text-color, {{ $color }});">
                        {{ $templateData['defaults']['section4_content'] ?? 'I promise to stand by you, support you, and love you.' }}
                    </p>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Section 5 - Full Width Banner -->
    <section class="bg-gradient-to-r {{ $bg }} py-24 md:py-32 px-6 md:px-8 relative overflow-hidden" style="background-color: var(--bg-color, transparent);">
        <div class="absolute inset-0 opacity-20">
            <div class="absolute inset-0" style="background-image: repeating-linear-gradient(45deg, transparent, transparent 10px, rgba(255,255,255,0.05) 10px, rgba(255,255,255,0.05) 20px);"></div>
        </div>
        <div class="max-w-6xl mx-auto text-center relative z-10 animate-fade-in">
            <div class="mb-4 md:mb-6">
                    <span class="text-xs font-bold uppercase tracking-wider" style="color: {{ $color }};">Chapter Five</span>
                </div>
                <h2 id="section5-title" class="text-4xl md:text-5xl lg:text-7xl font-black mb-6 md:mb-8" style="color: var(--text-color, {{ $color }});">{{ $templateData['defaults']['section5_title'] ?? 'Forever' }}</h2>
            <p class="text-sm font-semibold mb-4 md:mb-6" style="color: var(--text-color, {{ $color }});">{{ $currentDate }}</p>
                <p id="section5-content" class="text-lg md:text-xl lg:text-2xl leading-relaxed max-w-3xl mx-auto" style="color: var(--text-color, {{ $color }});">
                    {{ $templateData['defaults']['section5_content'] ?? 'Today, tomorrow, and forever - I choose you.' }}
                </p>
            </div>
        </div>
    </section>
    
    <!-- Memories Gallery -->
    <section id="memories" class="bg-white dark:bg-[#0f172a] py-24 md:py-32 px-6 md:px-8">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-12 md:mb-16">
                <h2 class="text-4xl md:text-5xl lg:text-6xl font-black mb-4" style="color: var(--text-color, {{ $color }});">Our Memories</h2>
                <p class="text-sm font-semibold mb-6 md:mb-8" style="color: var(--text-color, {{ $color }});">{{ $currentDate }}</p>
            </div>
            <div id="memories-section" class="grid grid-cols-2 md:grid-cols-4 gap-3 md:gap-4">
                <div class="aspect-square bg-gradient-to-br rounded-xl flex items-center justify-center border-2 border-dashed hover:scale-105 transition-all duration-300" style="border-color: {{ $color }}40;">
                    <div class="text-center">
                        <svg class="w-12 h-12 mx-auto mb-2" style="color: {{ $color }}60;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                        </svg>
                        <p class="text-xs" style="color: {{ $color }};">Add memories</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 dark:bg-[#0a0f1a] text-white py-12 md:py-16 px-6 md:px-8">
        <div class="max-w-7xl mx-auto text-center">
            <p class="text-sm" style="color: var(--text-color, {{ $color }});">Made with <span style="color: {{ $color }};">❤️</span> using Hamro Yaad</p>
            <p class="text-xs mt-2" style="color: var(--text-color, {{ $color }});">© {{ date('Y') }} All rights reserved</p>
        </div>
    </footer>
</div>


<style>
@keyframes fadeIn {
    from { opacity: 0; transform: translateY(20px); }
    to { opacity: 1; transform: translateY(0); }
}
@keyframes slideUp {
    from { opacity: 0; transform: translateY(40px); }
    to { opacity: 1; transform: translateY(0); }
}
@keyframes scaleIn {
    from { opacity: 0; transform: scale(0.9); }
    to { opacity: 1; transform: scale(1); }
}
.animate-fade-in { animation: fadeIn 0.8s ease-out forwards; }
.animate-slide-up { animation: slideUp 1s ease-out forwards; }
.animate-scale-in { animation: scaleIn 0.8s ease-out forwards; }
</style>
