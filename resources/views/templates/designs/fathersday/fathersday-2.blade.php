{{-- Father's Day Template 2: Hero Tribute - Hero Banner Layout with Dates --}}
@php
$color = $color ?? $templateData['color'];
$bg = $bg ?? $templateData['bg'];
$category = $category ?? $templateData['category'] ?? 'fathersday';
$categoryImages = $categoryImages ?? [];
$currentDate = date('F j, Y');
@endphp

<div class="min-h-screen bg-white dark:bg-[#0f172a]" data-theme-color="{{ $color }}" id="template-container" style="--theme-color: {{ $color }};">
    <!-- Navigation -->
    <nav class="fixed top-0 left-0 right-0 z-50 bg-white/95 dark:bg-[#0f172a]/95 backdrop-blur-xl border-b-2 transition-all duration-500" style="border-color: {{ $color }};">
            <div class="max-w-7xl mx-auto px-6 lg:px-8">
                <div class="flex items-center justify-between h-20">
                <div class="flex items-center space-x-3">
                    <div class="w-12 h-12 rounded-lg flex items-center justify-center shadow-lg" style="background-color: {{ $color }};">
                            <svg class="w-7 h-7 text-white" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                            </svg>
                    </div>
                    <span class="text-2xl font-bold" style="color: {{ $color }};">Hamro Yaad</span>
                </div>
                <div class="hidden md:flex items-center space-x-6">
                    <a href="#home" class="font-semibold hover:underline transition-all" style="color: {{ $color }};">Home</a>
                    <a href="#story" class="font-semibold hover:underline transition-all" style="color: {{ $color }};">Story</a>
                    <a href="#memories" class="font-semibold hover:underline transition-all" style="color: {{ $color }};">Memories</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section - Full Banner -->
    <section id="home" class="relative min-h-screen overflow-hidden pt-20">
        <div class="absolute inset-0 z-0">
            <img id="hero-image-display" data-image="hero" src="{{ $categoryImages['hero'] ?? 'https://images.unsplash.com/photo-1511988617509-a57c8a288659?w=1600&q=80' }}" alt="Hero" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-b" style="background: linear-gradient(to bottom, {{ $color }}90, {{ $color }}70, transparent);"></div>
                </div>
        <div class="relative z-10 min-h-screen flex items-center justify-center px-12 py-32">
            <div class="max-w-6xl mx-auto text-center space-y-12">
                <div class="flex justify-center mb-8 animate-scale-in">
                    <div class="w-40 h-40 rounded-full flex items-center justify-center shadow-2xl border-8 border-white/50 bg-white/20 backdrop-blur-md">
                        <svg class="w-24 h-24 text-white" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                        </svg>
                    </div>
                </div>
                <div class="mb-6 animate-fade-in">
                    <span class="text-sm font-semibold text-white/90">{{ $currentDate }}</span>
                </div>
                <h1 id="preview-heading" class="text-7xl md:text-9xl lg:text-[11rem] font-black text-white leading-[0.85] mb-6 drop-shadow-2xl animate-slide-up">
                    {{ $templateData['defaults']['heading'] ?? 'My Hero, My Dad' }}
                </h1>
                <div class="inline-block px-6 py-3 rounded-full mb-6 backdrop-blur-md border-2 border-white/30 animate-fade-in" style="background-color: {{ $color }}40;">
                    <p id="preview-subheading" class="text-lg font-bold uppercase tracking-wider text-white">{{ $templateData['defaults']['subheading'] ?? 'Thank You For Everything' }}</p>
                    </div>
                </div>
            </div>
        </section>
        
    <!-- Message Section - Timeline Style -->
    <section id="story" class="bg-white dark:bg-[#0f172a] py-32 px-8 relative overflow-hidden">
        <div class="max-w-6xl mx-auto">
            <div class="relative">
                <div class="absolute left-8 md:left-1/2 top-0 bottom-0 w-1 transform md:-translate-x-1/2" style="background: linear-gradient(to bottom, {{ $color }}, {{ $color }}80);"></div>
                <div class="relative pl-20 md:pl-0 md:ml-[50%] mb-16 animate-fade-in">
                    <div class="absolute left-4 md:left-[-20px] top-6 w-8 h-8 rounded-full border-4 border-white dark:border-[#0f172a]" style="background-color: {{ $color }};"></div>
                    <div class="bg-gradient-to-br {{ $bg }} rounded-2xl p-8 shadow-xl border-l-4" style="border-color: {{ $color }};">
                        <div class="mb-4">
                            <span class="text-xs font-semibold uppercase tracking-wider" style="color: {{ $color }};">{{ $currentDate }}</span>
            </div>
                        <p id="preview-message" class="text-2xl md:text-3xl leading-relaxed mb-6" style="color: {{ $color }};">
                            {{ $templateData['defaults']['message'] ?? 'Your heartfelt message here' }}
                        </p>
                        <p id="preview-from" class="text-xl font-bold" style="color: {{ $color }};">{{ $templateData['defaults']['from'] ?? 'Your Name' }}</p>
                    </div>
                </div>
            </div>
            </div>
        </section>
        
    <!-- Section 1 - Split Layout -->
    <section class="bg-gradient-to-br {{ $bg }} py-32 px-8 relative overflow-hidden">
            <div class="max-w-7xl mx-auto">
            <div class="grid md:grid-cols-2 gap-16 items-center">
                <div class="space-y-6 animate-slide-up">
                    <div class="inline-flex items-center gap-3 mb-4">
                        <div class="w-12 h-1 rounded-full" style="background-color: {{ $color }};"></div>
                        <span class="text-sm font-bold uppercase tracking-wider" style="color: {{ $color }};">Chapter One</span>
                    </div>
                    <h2 id="section1-title" class="text-5xl md:text-6xl font-black mb-4" style="color: {{ $color }};">{{ $templateData['defaults']['section1_title'] ?? 'Our Love' }}</h2>
                    <p class="text-sm font-semibold mb-4" style="color: {{ $color }}80;">{{ $currentDate }}</p>
                    <p id="section1-content" class="text-xl md:text-2xl leading-relaxed" style="color: {{ $color }}90;">
                        {{ $templateData['defaults']['section1_content'] ?? 'Every moment with you feels like a dream.' }}
                    </p>
                </div>
                <div class="relative animate-scale-in">
                    <div class="aspect-square rounded-3xl overflow-hidden shadow-2xl border-4 border-white/50" style="border-color: {{ $color }}40;">
                        <div class="w-full h-full bg-gradient-to-br flex items-center justify-center" style="background: linear-gradient(135deg, {{ $color }}30, {{ $color }}10);">
                            <svg class="w-24 h-24" style="color: {{ $color }}60;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                            </svg>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
    <!-- Section 2 - Grid Layout -->
        <section class="bg-white dark:bg-[#0f172a] py-32 px-8">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-16 animate-fade-in">
                <h2 id="section2-title" class="text-5xl md:text-6xl font-black mb-4" style="color: {{ $color }};">{{ $templateData['defaults']['section2_title'] ?? 'Our First Day' }}</h2>
                <p class="text-sm font-semibold mb-4" style="color: {{ $color }}80;">{{ $currentDate }}</p>
            </div>
            <div class="grid md:grid-cols-3 gap-6">
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
            <div class="mt-12 text-center">
                <p id="section2-content" class="text-xl md:text-2xl leading-relaxed max-w-3xl mx-auto text-gray-700 dark:text-[#cbd5e1]">
                    {{ $templateData['defaults']['section2_content'] ?? 'The day we met changed everything.' }}
                </p>
            </div>
            </div>
        </section>
        
    <!-- Section 3 - Quote Style -->
        <section class="bg-gradient-to-br {{ $bg }} py-32 px-8 relative overflow-hidden">
        <div class="max-w-5xl mx-auto">
            <div class="relative p-12 md:p-16 border-l-8 rounded-r-2xl shadow-xl animate-fade-in" style="border-color: {{ $color }}; background: linear-gradient(to right, {{ $color }}10, transparent);">
                <div class="absolute top-4 left-4 text-6xl font-black opacity-20" style="color: {{ $color }};">"</div>
                <div class="relative z-10 space-y-6">
                    <div class="mb-4">
                        <span class="text-xs font-bold uppercase tracking-wider" style="color: {{ $color }};">Chapter Three</span>
            </div>
                    <h2 id="section3-title" class="text-4xl md:text-5xl font-black mb-4" style="color: {{ $color }};">{{ $templateData['defaults']['section3_title'] ?? 'Our Journey' }}</h2>
                    <p class="text-sm font-semibold mb-4" style="color: {{ $color }}80;">{{ $currentDate }}</p>
                    <p id="section3-content" class="text-xl md:text-2xl leading-relaxed text-gray-700 dark:text-[#cbd5e1] italic">
                        {{ $templateData['defaults']['section3_content'] ?? 'Together we\'ve created countless beautiful memories.' }}
                    </p>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Section 4 - Full Width -->
    <section class="bg-white dark:bg-[#0f172a] py-32 px-8">
        <div class="max-w-6xl mx-auto text-center animate-fade-in">
            <div class="mb-6">
                <span class="text-xs font-bold uppercase tracking-wider" style="color: {{ $color }};">Chapter Four</span>
            </div>
            <h2 id="section4-title" class="text-5xl md:text-7xl font-black mb-6" style="color: {{ $color }};">{{ $templateData['defaults']['section4_title'] ?? 'Our Promise' }}</h2>
            <p class="text-sm font-semibold mb-6" style="color: {{ $color }}80;">{{ $currentDate }}</p>
            <p id="section4-content" class="text-xl md:text-2xl leading-relaxed max-w-3xl mx-auto text-gray-700 dark:text-[#cbd5e1]">
                {{ $templateData['defaults']['section4_content'] ?? 'I promise to stand by you, support you, and love you.' }}
                </p>
            </div>
        </section>
        
    <!-- Section 5 - Banner Style -->
    <section class="bg-gradient-to-r {{ $bg }} py-32 px-8 relative overflow-hidden">
        <div class="absolute inset-0 opacity-10">
            <div class="absolute top-0 right-0 w-96 h-96 rounded-full blur-3xl animate-pulse" style="background-color: {{ $color }};"></div>
        </div>
        <div class="max-w-5xl mx-auto text-center relative z-10 animate-fade-in">
            <div class="mb-6">
                <span class="text-xs font-bold uppercase tracking-wider" style="color: {{ $color }};">Chapter Five</span>
            </div>
            <h2 id="section5-title" class="text-5xl md:text-7xl font-black mb-6" style="color: {{ $color }};">{{ $templateData['defaults']['section5_title'] ?? 'Forever' }}</h2>
            <p class="text-sm font-semibold mb-6" style="color: {{ $color }}80;">{{ $currentDate }}</p>
            <p id="section5-content" class="text-xl md:text-2xl leading-relaxed max-w-3xl mx-auto" style="color: {{ $color }}90;">
                {{ $templateData['defaults']['section5_content'] ?? 'Today, tomorrow, and forever - I choose you.' }}
            </p>
                    </div>
    </section>
    
    <!-- Memories Gallery -->
    <section id="memories" class="bg-white dark:bg-[#0f172a] py-32 px-8">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-16">
                <h2 class="text-5xl md:text-6xl font-black mb-4" style="color: {{ $color }};">Our Memories</h2>
                <p class="text-sm font-semibold mb-8" style="color: {{ $color }}80;">{{ $currentDate }}</p>
                </div>
            <div id="memories-section" class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <div class="aspect-square bg-gradient-to-br rounded-xl flex items-center justify-center border-2 border-dashed hover:scale-105 transition-all duration-300" style="border-color: {{ $color }}40;">
                    <div class="text-center">
                        <svg class="w-12 h-12 mx-auto mb-2" style="color: {{ $color }}60;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                            </svg>
                        <p class="text-xs" style="color: {{ $color }}60;">Add memories</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    <!-- Footer -->
        <footer class="bg-gray-900 dark:bg-[#0a0f1a] text-white py-16 px-8">
        <div class="max-w-7xl mx-auto text-center">
            <p class="text-gray-400 text-sm">Made with <span style="color: {{ $color }};">❤️</span> using Hamro Yaad</p>
                        <p class="text-gray-500 text-xs mt-2">© {{ date('Y') }} All rights reserved</p>
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
