{{-- Birthday Template 1: Celebration Joy - Party Style Layout with Dates --}}
@php
$color = $color ?? $templateData['color'];
$bg = $bg ?? $templateData['bg'];
$category = $category ?? $templateData['category'] ?? 'birthday';
$categoryImages = $categoryImages ?? [];
$currentDate = date('F j, Y');
@endphp

<div class="min-h-screen bg-gradient-to-br {{ $bg }} relative overflow-hidden" data-theme-color="{{ $color }}" id="template-container" style="--theme-color: {{ $color }};">
    <!-- Confetti Animation Background -->
    <div class="absolute inset-0 opacity-20 z-0">
        <div class="absolute top-10 left-10 w-4 h-4 rounded-full animate-float" style="background-color: {{ $color }}; animation-delay: 0s;"></div>
        <div class="absolute top-20 right-20 w-6 h-6 rounded-full animate-float" style="background-color: {{ $color }}; animation-delay: 0.5s;"></div>
        <div class="absolute bottom-20 left-1/4 w-5 h-5 rounded-full animate-float" style="background-color: {{ $color }}; animation-delay: 1s;"></div>
        <div class="absolute bottom-10 right-1/3 w-4 h-4 rounded-full animate-float" style="background-color: {{ $color }}; animation-delay: 1.5s;"></div>
        <div class="absolute top-1/3 left-1/3 w-5 h-5 rounded-full animate-float" style="background-color: {{ $color }}; animation-delay: 2s;"></div>
    </div>

    <!-- Navigation -->
    <nav class="fixed top-0 left-0 right-0 z-50 bg-white/95 dark:bg-[#0f172a]/95 backdrop-blur-xl border-b-4 transition-all duration-500" style="border-color: {{ $color }};">
            <div class="max-w-7xl mx-auto px-6 lg:px-8">
                <div class="flex items-center justify-between h-20">
                <div class="flex items-center space-x-3">
                    <div class="w-12 h-12 rounded-full flex items-center justify-center shadow-lg animate-pulse" style="background-color: {{ $color }};">
                            <svg class="w-7 h-7 text-white" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 8v13m0-13V6a2 2 0 112 2h-2zm0 0V5.5A2.5 2.5 0 109.5 8H12zm-7 4h14M5 12a2 2 0 110-4h14a2 2 0 110 4M5 12v7a2 2 0 002 2h10a2 2 0 002-2v-7"/>
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
        
    <!-- Hero Section - Party Style -->
    <section id="home" class="relative min-h-screen flex items-center justify-center px-12 py-32 overflow-hidden pt-20 z-10">
        <div class="max-w-6xl mx-auto text-center space-y-16 relative z-10">
            <div class="relative animate-fade-in">
                <div class="absolute -top-8 left-1/2 transform -translate-x-1/2 text-9xl opacity-20 animate-float">🎉</div>
                <h1 id="preview-heading" class="text-8xl md:text-[10rem] lg:text-[12rem] font-black leading-[0.85] mb-8" style="color: {{ $color }};">
                    {{ $templateData['defaults']['heading'] ?? 'Happy Birthday!' }}
                </h1>
            </div>
            <div class="space-y-8 animate-slide-up">
                <div class="mb-6">
                    <span class="text-sm font-semibold" style="color: {{ $color }}80;">{{ $currentDate }}</span>
                </div>
                <p class="text-3xl md:text-4xl font-bold uppercase tracking-wide" style="color: {{ $color }};">
                    {{ $templateData['defaults']['subheading'] ?? 'Celebrating You' }}
                </p>
                <p id="preview-message" class="text-2xl md:text-3xl max-w-3xl mx-auto" style="color: {{ $color }}90;">
                    {{ Str::limit($templateData['defaults']['message'] ?? 'Your heartfelt message here', 80) }}
                </p>
                <p id="preview-from" class="text-xl font-bold" style="color: {{ $color }};">{{ $templateData['defaults']['from'] ?? 'Your Name' }}</p>
            </div>
            <div class="flex justify-center my-12 animate-scale-in">
                <div class="w-32 h-32 rounded-full flex items-center justify-center shadow-2xl border-8 border-white/60" style="background-color: {{ $color }};">
                    <svg class="w-16 h-16 text-white" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 8v13m0-13V6a2 2 0 112 2h-2zm0 0V5.5A2.5 2.5 0 109.5 8H12zm-7 4h14M5 12a2 2 0 110-4h14a2 2 0 110 4M5 12v7a2 2 0 002 2h10a2 2 0 002-2v-7"/>
                    </svg>
                </div>
            </div>
            </div>
        </section>
        
    <!-- Message Section - Confetti Cards -->
    <section id="story" class="bg-white dark:bg-[#0f172a] py-32 px-8 relative overflow-hidden">
        <div class="max-w-6xl mx-auto">
            <div class="grid md:grid-cols-3 gap-8">
                <div class="md:col-span-2 bg-gradient-to-br {{ $bg }} rounded-3xl p-10 shadow-xl border-4 animate-fade-in" style="border-color: {{ $color }};">
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
                    <div class="text-8xl animate-float">🎂</div>
                    </div>
                </div>
            </div>
        </section>
        
    <!-- Section 1 - Cards Layout -->
        <section class="bg-gradient-to-br {{ $bg }} py-32 px-8 relative overflow-hidden">
        <div class="max-w-6xl mx-auto">
            <div class="grid md:grid-cols-2 gap-8">
                <div class="bg-white dark:bg-[#1e293b] rounded-3xl p-10 shadow-xl border-4 animate-fade-in" style="border-color: {{ $color }};">
                    <div class="text-center space-y-6">
                        <div class="inline-block px-4 py-2 rounded-full" style="background-color: {{ $color }}20;">
                            <span class="text-xs font-bold uppercase tracking-wider" style="color: {{ $color }};">Chapter One</span>
                        </div>
                        <h2 id="section1-title" class="text-4xl md:text-5xl font-black mb-4" style="color: {{ $color }};">{{ $templateData['defaults']['section1_title'] ?? 'Our Love' }}</h2>
                        <p class="text-sm font-semibold mb-4" style="color: {{ $color }}80;">{{ $currentDate }}</p>
                        <p id="section1-content" class="text-lg md:text-xl leading-relaxed text-gray-700 dark:text-[#cbd5e1]">
                            {{ $templateData['defaults']['section1_content'] ?? 'Every moment with you feels like a dream.' }}
                        </p>
                    </div>
                        </div>
                <div class="bg-white dark:bg-[#1e293b] rounded-3xl p-10 shadow-xl border-4 animate-scale-in" style="border-color: {{ $color }}; animation-delay: 0.2s;">
                    <div class="aspect-square rounded-2xl overflow-hidden border-2" style="border-color: {{ $color }}40;">
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
        
    <!-- Section 2 - Gallery Style -->
        <section class="bg-white dark:bg-[#0f172a] py-32 px-8">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-16 animate-fade-in">
                <h2 id="section2-title" class="text-5xl md:text-6xl font-black mb-4" style="color: {{ $color }};">{{ $templateData['defaults']['section2_title'] ?? 'Our First Day' }}</h2>
                <p class="text-sm font-semibold mb-4" style="color: {{ $color }}80;">{{ $currentDate }}</p>
            </div>
            <div class="grid md:grid-cols-4 gap-4">
                @for($i = 1; $i <= 4; $i++)
                <div class="aspect-square rounded-xl overflow-hidden shadow-xl border-2 animate-scale-in" style="border-color: {{ $color }}40; animation-delay: {{ $i * 0.1 }}s;">
                    <div class="w-full h-full bg-gradient-to-br flex items-center justify-center" style="background: linear-gradient(135deg, {{ $color }}30, {{ $color }}10);">
                        <svg class="w-12 h-12" style="color: {{ $color }}50;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
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
        
    <!-- Section 4 - Celebration Style -->
    <section class="bg-white dark:bg-[#0f172a] py-32 px-8">
        <div class="max-w-6xl mx-auto">
            <div class="bg-gradient-to-r {{ $bg }} rounded-3xl p-12 shadow-2xl border-4 animate-fade-in" style="border-color: {{ $color }};">
                <div class="text-center space-y-6">
                    <div class="text-6xl mb-6 animate-float">🎈</div>
                    <div class="mb-4">
                        <span class="text-xs font-bold uppercase tracking-wider" style="color: {{ $color }};">Chapter Four</span>
                    </div>
                    <h2 id="section4-title" class="text-4xl md:text-5xl font-black mb-4" style="color: {{ $color }};">{{ $templateData['defaults']['section4_title'] ?? 'Our Promise' }}</h2>
                    <p class="text-sm font-semibold mb-4" style="color: {{ $color }}80;">{{ $currentDate }}</p>
                    <p id="section4-content" class="text-xl md:text-2xl leading-relaxed text-gray-700 dark:text-[#cbd5e1]">
                        {{ $templateData['defaults']['section4_content'] ?? 'I promise to stand by you, support you, and love you.' }}
                    </p>
                </div>
                        </div>
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
@keyframes float {
    0%, 100% { transform: translateY(0px); }
    50% { transform: translateY(-20px); }
}
.animate-fade-in { animation: fadeIn 0.8s ease-out forwards; }
.animate-slide-up { animation: slideUp 1s ease-out forwards; }
.animate-scale-in { animation: scaleIn 0.8s ease-out forwards; }
.animate-float { animation: float 6s ease-in-out infinite; }
</style>
