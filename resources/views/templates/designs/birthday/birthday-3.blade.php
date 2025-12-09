{{-- Birthday Template 3: Elegant Wishes - Sophisticated Layout with Dates --}}
@php
$color = $color ?? $templateData['color'];
$bg = $bg ?? $templateData['bg'];
$category = $category ?? $templateData['category'] ?? 'birthday';
$categoryImages = $categoryImages ?? [];
$currentDate = date('F j, Y');
@endphp

<div class="min-h-screen bg-gradient-to-br {{ $bg }}" data-theme-color="{{ $color }}" id="template-container" style="--theme-color: {{ $color }};">
    <!-- Navigation -->
    <nav class="fixed top-0 left-0 right-0 z-50 bg-white/90 dark:bg-[#1e293b]/90 backdrop-blur-xl border-b-2 transition-all duration-500" style="border-color: {{ $color }}40;">
            <div class="max-w-7xl mx-auto px-6 lg:px-8">
                <div class="flex items-center justify-between h-20">
                <div class="flex items-center space-x-3">
                    <div class="w-12 h-12 rounded-full flex items-center justify-center shadow-lg" style="background-color: {{ $color }};">
                            <svg class="w-7 h-7 text-white" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 8v13m0-13V6a2 2 0 112 2h-2zm0 0V5.5A2.5 2.5 0 109.5 8H12zm-7 4h14M5 12a2 2 0 110-4h14a2 2 0 110 4M5 12v7a2 2 0 002 2h10a2 2 0 002-2v-7"/>
                        </svg>
                    </div>
                    <span class="text-2xl font-bold" style="color: {{ $color }};">Hamro Yaad</span>
                </div>
                <div class="hidden md:flex items-center space-x-6">
                    <a href="#home" class="font-medium hover:underline transition-all" style="color: {{ $color }};">Home</a>
                    <a href="#story" class="font-medium hover:underline transition-all" style="color: {{ $color }};">Story</a>
                    <a href="#memories" class="font-medium hover:underline transition-all" style="color: {{ $color }};">Memories</a>
                </div>
            </div>
        </div>
    </nav>
        
    <!-- Hero Section - Elegant Card -->
    <section id="home" class="relative min-h-screen flex items-center justify-center px-12 py-32 overflow-hidden pt-20">
        <div class="absolute inset-0 z-0">
            <div class="absolute inset-0 bg-gradient-to-br" style="background: linear-gradient(135deg, {{ $color }}30, {{ $color }}10);"></div>
        </div>
        <div class="max-w-5xl mx-auto w-full relative z-10">
            <div class="relative inline-block">
                <div class="absolute inset-0 rounded-full blur-3xl opacity-50" style="background-color: {{ $color }};"></div>
                <div class="relative bg-white/95 dark:bg-[#0f172a]/95 backdrop-blur-xl rounded-[3rem] shadow-2xl p-16 border-4 animate-fade-in" style="border-color: {{ $color }};">
                    <div class="text-center space-y-12">
                        <div class="relative inline-block">
                            <div class="absolute inset-0 rounded-full blur-2xl opacity-40" style="background-color: {{ $color }};"></div>
                            <div class="relative w-48 h-48 rounded-full flex items-center justify-center shadow-xl border-4 border-white/60 animate-scale-in" style="background-color: {{ $color }};">
                                <svg class="w-24 h-24 text-white" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 8v13m0-13V6a2 2 0 112 2h-2zm0 0V5.5A2.5 2.5 0 109.5 8H12zm-7 4h14M5 12a2 2 0 110-4h14a2 2 0 110 4M5 12v7a2 2 0 002 2h10a2 2 0 002-2v-7"/>
                                </svg>
                            </div>
                        </div>
                        <div class="space-y-8">
                            <div class="mb-6">
                                <span class="text-sm font-semibold" style="color: {{ $color }}80;">{{ $currentDate }}</span>
                            </div>
                            <div class="inline-block px-8 py-4 rounded-full backdrop-blur-md border-2 border-white/30" style="background-color: {{ $color }}40;">
                                <p id="preview-subheading" class="text-xl font-semibold uppercase tracking-wider text-white">{{ $templateData['defaults']['subheading'] ?? 'Another Blessing' }}</p>
            </div>
                            <h1 id="preview-heading" class="text-7xl md:text-9xl font-black leading-[0.9]" style="color: {{ $color }};">
                                {{ $templateData['defaults']['heading'] ?? 'Another Year' }}
                            </h1>
                            <p id="preview-message" class="text-2xl md:text-3xl leading-relaxed max-w-3xl mx-auto" style="color: {{ $color }}90;">
                                {{ Str::limit($templateData['defaults']['message'] ?? 'Your heartfelt message here', 90) }}
                        </p>
                            <p id="preview-from" class="text-xl font-bold" style="color: {{ $color }};">{{ $templateData['defaults']['from'] ?? 'Your Name' }}</p>
                    </div>
                    </div>
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
        
    <!-- Section 3 - Centered Banner -->
        <section class="bg-gradient-to-br {{ $bg }} py-32 px-8 relative overflow-hidden">
        <div class="max-w-5xl mx-auto text-center animate-fade-in">
            <div class="mb-6">
                <span class="text-xs font-bold uppercase tracking-wider" style="color: {{ $color }};">Chapter Three</span>
            </div>
            <h2 id="section3-title" class="text-5xl md:text-7xl font-black mb-6" style="color: {{ $color }};">{{ $templateData['defaults']['section3_title'] ?? 'Our Journey' }}</h2>
            <p class="text-sm font-semibold mb-6" style="color: {{ $color }}80;">{{ $currentDate }}</p>
            <p id="section3-content" class="text-xl md:text-2xl leading-relaxed max-w-3xl mx-auto" style="color: {{ $color }}90;">
                {{ $templateData['defaults']['section3_content'] ?? 'Together we\'ve created countless beautiful memories.' }}
                </p>
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
