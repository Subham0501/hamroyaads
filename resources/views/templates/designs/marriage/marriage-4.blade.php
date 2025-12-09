{{-- Marriage Template 4: Timeless Bond - Minimal Elegant Layout with Dates --}}
@php
$color = $color ?? $templateData['color'];
$bg = $bg ?? $templateData['bg'];
$category = $category ?? $templateData['category'] ?? 'marriage';
$categoryImages = $categoryImages ?? [];
$currentDate = date('F j, Y');
@endphp

<div class="min-h-screen bg-gradient-to-br {{ $bg }}" data-theme-color="{{ $color }}" id="template-container" style="--theme-color: {{ $color }};">
    <!-- Navigation -->
    <nav class="fixed top-0 left-0 right-0 z-50 bg-white/95 dark:bg-[#0f172a]/95 backdrop-blur-xl border-b transition-all duration-500" style="border-color: {{ $color }}40;">
            <div class="max-w-7xl mx-auto px-6 lg:px-8">
                <div class="flex items-center justify-between h-20">
                <div class="flex items-center space-x-3">
                    <div class="w-12 h-12 rounded-full flex items-center justify-center shadow-lg" style="background-color: {{ $color }};">
                            <svg class="w-7 h-7 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                            </svg>
                    </div>
                    <span class="text-2xl font-bold" style="color: {{ $color }};">Hamro Yaad</span>
                </div>
                <div class="hidden md:flex items-center space-x-8">
                    <a href="#home" class="font-medium hover:underline transition-all" style="color: {{ $color }};">Home</a>
                    <a href="#story" class="font-medium hover:underline transition-all" style="color: {{ $color }};">Story</a>
                    <a href="#memories" class="font-medium hover:underline transition-all" style="color: {{ $color }};">Memories</a>
                    </div>
                </div>
            </div>
        </nav>

    <!-- Hero Section - Minimal Centered -->
    <section id="home" class="relative min-h-screen flex items-center justify-center px-12 py-32 overflow-hidden pt-20">
            <div class="absolute inset-0 z-0">
            <img id="hero-image-display" data-image="hero" src="{{ $categoryImages['hero'] ?? 'https://images.unsplash.com/photo-1519741497674-611481863552?w=1600&q=80' }}" alt="Hero" class="w-full h-full object-cover opacity-30">
            <div class="absolute inset-0 bg-gradient-to-b from-white/80 via-white/60 to-white/80 dark:from-[#0f172a]/80 dark:via-[#0f172a]/60 dark:to-[#0f172a]/80"></div>
                </div>
        <div class="max-w-6xl mx-auto text-center space-y-20 relative z-10">
            <div class="mb-20 rounded-[4rem] overflow-hidden shadow-2xl border-[12px] border-white/80 animate-scale-in">
                <img id="hero-image-display-2" data-image="hero" src="{{ $categoryImages['hero'] ?? 'https://images.unsplash.com/photo-1519741497674-611481863552?w=1600&q=80' }}" alt="Hero" class="w-full h-[75vh] object-cover">
            </div>
            <div class="space-y-8 animate-fade-in">
                <div class="mb-4">
                    <span class="text-sm font-semibold" style="color: {{ $color }}80;">{{ $currentDate }}</span>
                </div>
                <h1 id="preview-heading" class="text-8xl md:text-[10rem] lg:text-[13rem] font-black mb-10 leading-[0.85]" style="color: {{ $color }};">
                    {{ $templateData['defaults']['heading'] ?? 'My Dearest' }}
                </h1>
                <p id="preview-subheading" class="text-3xl md:text-4xl mb-16 font-light italic" style="color: {{ $color }}80;">
                    {{ $templateData['defaults']['subheading'] ?? 'A Promise of Forever' }}
                </p>
            </div>
            <div class="my-24 flex justify-center animate-scale-in">
                <div class="w-64 h-64 rounded-full flex items-center justify-center shadow-2xl border-[10px] border-white/60" style="background-color: {{ $color }};">
                    <svg class="w-36 h-36 text-white" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                        </svg>
                </div>
                </div>
            </div>
        </section>
        
    <!-- Message Section - Cards Layout -->
    <section id="story" class="bg-white dark:bg-[#0f172a] py-32 px-8">
        <div class="max-w-6xl mx-auto">
            <div class="grid md:grid-cols-2 gap-8">
                <div class="bg-gradient-to-br {{ $bg }} rounded-3xl p-10 shadow-xl border-2 animate-fade-in" style="border-color: {{ $color }};">
                    <div class="mb-4">
                        <span class="text-xs font-bold uppercase tracking-wider" style="color: {{ $color }};">Date</span>
                    </div>
                    <p class="text-sm font-semibold mb-6" style="color: {{ $color }}80;">{{ $currentDate }}</p>
                    <p id="preview-message" class="text-xl md:text-2xl leading-relaxed mb-6" style="color: {{ $color }};">
                        {{ $templateData['defaults']['message'] ?? 'Your heartfelt message here' }}
                    </p>
                    <p id="preview-from" class="text-lg font-bold" style="color: {{ $color }};">{{ $templateData['defaults']['from'] ?? 'Your Name' }}</p>
                </div>
                <div class="flex items-center justify-center animate-scale-in">
                    <div class="w-48 h-48 rounded-full flex items-center justify-center shadow-xl" style="background-color: {{ $color }}20;">
                        <svg class="w-24 h-24" style="color: {{ $color }};" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                        </svg>
                    </div>
                </div>
            </div>
            </div>
        </section>
        
    <!-- Section 1 - Timeline Style -->
    <section class="bg-gradient-to-br {{ $bg }} py-32 px-8 relative overflow-hidden">
        <div class="max-w-6xl mx-auto">
            <div class="relative">
                <div class="absolute left-8 top-0 bottom-0 w-1" style="background: linear-gradient(to bottom, {{ $color }}, {{ $color }}80);"></div>
                <div class="pl-20 space-y-12">
                    <div class="relative animate-slide-up">
                        <div class="absolute left-[-28px] top-6 w-8 h-8 rounded-full border-4 border-white dark:border-[#0f172a]" style="background-color: {{ $color }};"></div>
                        <div class="bg-white dark:bg-[#1e293b] rounded-2xl p-8 shadow-xl border-l-4" style="border-color: {{ $color }};">
                            <div class="mb-4">
                                <span class="text-xs font-bold uppercase tracking-wider" style="color: {{ $color }};">Chapter One</span>
                            </div>
                            <h2 id="section1-title" class="text-4xl md:text-5xl font-black mb-4" style="color: {{ $color }};">{{ $templateData['defaults']['section1_title'] ?? 'Our Love' }}</h2>
                            <p class="text-sm font-semibold mb-4" style="color: {{ $color }}80;">{{ $currentDate }}</p>
                            <p id="section1-content" class="text-lg md:text-xl leading-relaxed text-gray-700 dark:text-[#cbd5e1]">
                                {{ $templateData['defaults']['section1_content'] ?? 'Every moment with you feels like a dream.' }}
                            </p>
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
    
    <!-- Section 3 - Sidebar Layout -->
    <section class="bg-gradient-to-br {{ $bg }} py-32 px-8">
        <div class="max-w-7xl mx-auto">
            <div class="grid md:grid-cols-3 gap-12">
                <div class="md:col-span-1">
                    <div class="sticky top-28 text-center md:text-left">
                        <div class="mb-6">
                            <span class="text-xs font-bold uppercase tracking-wider" style="color: {{ $color }};">Chapter Three</span>
                        </div>
                        <div class="w-24 h-24 rounded-full flex items-center justify-center mx-auto md:mx-0 mb-6 shadow-xl animate-pulse" style="background-color: {{ $color }};">
                            <svg class="w-12 h-12 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                            </svg>
                        </div>
                        <p class="text-sm font-semibold" style="color: {{ $color }}80;">{{ $currentDate }}</p>
                    </div>
                </div>
                <div class="md:col-span-2 space-y-6 animate-slide-up">
                    <h2 id="section3-title" class="text-4xl md:text-5xl font-black" style="color: {{ $color }};">{{ $templateData['defaults']['section3_title'] ?? 'Our Journey' }}</h2>
                    <p id="section3-content" class="text-lg md:text-xl leading-relaxed text-gray-700 dark:text-[#cbd5e1]">
                        {{ $templateData['defaults']['section3_content'] ?? 'Together we\'ve created countless beautiful memories.' }}
                    </p>
                    </div>
                </div>
            </div>
        </section>
        
    <!-- Section 4 - Centered Banner -->
        <section class="bg-white dark:bg-[#0f172a] py-32 px-8">
        <div class="max-w-5xl mx-auto text-center animate-fade-in">
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
        
    <!-- Section 5 - Full Width -->
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
