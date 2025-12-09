{{-- Premium Template Design Renderer - Full Page Designs with 6-7 Sections --}}
@php
$design = $templateData['design'] ?? 'classic';
$color = $templateData['color'];
$bg = $templateData['bg'];
$category = $templateData['category'] ?? 'marriage';

// Helper function to get icon based on category
function getCategoryIcon($category) {
    if($category == 'marriage' || $category == 'valentine' || $category == 'mothersday') {
        return '<svg class="w-full h-full text-white" fill="currentColor" viewBox="0 0 24 24"><path d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/></svg>';
    } elseif($category == 'fathersday') {
        return '<svg class="w-full h-full text-white" fill="currentColor" viewBox="0 0 24 24"><path d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/></svg>';
    } else {
        return '<svg class="w-full h-full text-white" fill="currentColor" viewBox="0 0 24 24"><path d="M12 8v13m0-13V6a2 2 0 112 2h-2zm0 0V5.5A2.5 2.5 0 109.5 8H12zm-7 4h14M5 12a2 2 0 110-4h14a2 2 0 110 4M5 12v7a2 2 0 002 2h10a2 2 0 002-2v-7"/></svg>';
    }
}
@endphp

@if($design == 'elegant' || $design == 'luxury' || $design == 'premium' || $design == 'romantic' || $design == 'sweet' || $design == 'passionate')
    {{-- Design 1: Premium Luxury - 7 Sections with Elegant Animations --}}
    <div class="min-h-screen bg-gradient-to-br {{ $bg }}" data-theme-color="{{ $color }}" style="--theme-color: {{ $color }};">
        <!-- Section 1: Hero -->
        <section class="relative min-h-screen flex items-center justify-center px-8 py-32 overflow-hidden">
            <div class="absolute inset-0 opacity-10">
                <div class="absolute top-20 left-20 w-4 h-4 rounded-full animate-float" style="background-color: {{ $color }}; animation-delay: 0s;"></div>
                <div class="absolute top-40 right-32 w-5 h-5 rounded-full animate-float" style="background-color: {{ $color }}; animation-delay: 0.5s;"></div>
                <div class="absolute bottom-32 left-1/4 w-3 h-3 rounded-full animate-float" style="background-color: {{ $color }}; animation-delay: 1s;"></div>
            </div>
            <div class="relative z-10 text-center space-y-8 max-w-6xl mx-auto">
                <div class="inline-block px-8 py-4 rounded-full backdrop-blur-xl border-2 border-white/40 shadow-lg animate-fade-in" style="background-color: {{ $color }}30;">
                    <p id="preview-subheading" class="text-xl font-bold uppercase tracking-widest text-white">{{ $templateData['defaults']['subheading'] ?? 'Special Moment' }}</p>
                </div>
                <h1 id="preview-heading" class="text-7xl md:text-9xl font-black text-white leading-tight drop-shadow-2xl animate-slide-up">{{ $templateData['defaults']['heading'] ?? 'To My Beloved' }}</h1>
                <div class="flex justify-center my-16 animate-scale-in">
                    <div class="w-48 h-48 rounded-full flex items-center justify-center shadow-2xl border-4 border-white/50 transform hover:scale-110 transition-all duration-500 cursor-pointer" style="background-color: {{ $color }};">
                        {!! getCategoryIcon($category) !!}
                    </div>
                </div>
            </div>
        </section>

        <!-- Section 2: Message -->
        <section class="bg-white/90 dark:bg-[#0f172a]/90 backdrop-blur-xl py-32 px-8">
            <div class="max-w-5xl mx-auto text-center">
                <div class="relative">
                    <div class="absolute -left-8 top-0 text-7xl font-black text-gray-100 dark:text-gray-800 opacity-30">"</div>
                    <p id="preview-message" class="text-3xl md:text-4xl text-gray-800 dark:text-[#e2e8f0] leading-relaxed italic relative z-10 pl-8">
                        {{ $templateData['defaults']['message'] ?? 'Your heartfelt message here' }}
                    </p>
                    <div class="absolute -right-8 bottom-0 text-7xl font-black text-gray-100 dark:text-gray-800 opacity-30">"</div>
                </div>
                <div class="mt-16 pt-16 border-t-4" style="border-color: {{ $color }};">
                    <p id="preview-from" class="text-4xl md:text-5xl font-black" style="color: {{ $color }};">{{ $templateData['defaults']['from'] ?? 'Your Name' }}</p>
                </div>
            </div>
        </section>

        <!-- Section 3: Section 1 -->
        <section class="bg-gradient-to-br {{ $bg }} py-32 px-8 relative overflow-hidden">
            <div class="absolute inset-0 opacity-10">
                <div class="absolute top-0 right-0 w-96 h-96 rounded-full blur-3xl animate-pulse" style="background-color: {{ $color }};"></div>
            </div>
            <div class="max-w-6xl mx-auto text-center relative z-10">
                <div class="inline-flex items-center gap-4 mb-8">
                    <div class="w-16 h-0.5" style="background-color: {{ $color }};"></div>
                    <span class="text-sm font-semibold uppercase tracking-widest text-white/80">Chapter One</span>
                    <div class="w-16 h-0.5" style="background-color: {{ $color }};"></div>
                </div>
                <h2 id="section1-title" class="text-5xl md:text-6xl lg:text-7xl font-black mb-12 text-white leading-tight">{{ $templateData['defaults']['section1_title'] ?? 'Our Love' }}</h2>
                <p id="section1-content" class="text-xl md:text-2xl lg:text-3xl text-white/90 leading-relaxed font-light max-w-4xl mx-auto">
                    {{ $templateData['defaults']['section1_content'] ?? 'Every moment with you feels like a dream. Your love fills my heart with joy and happiness.' }}
                </p>
            </div>
        </section>

        <!-- Section 4: Section 2 -->
        <section class="bg-white dark:bg-[#0f172a] py-32 px-8">
            <div class="max-w-7xl mx-auto">
                <div class="grid md:grid-cols-2 gap-16 items-center">
                    <div>
                        <div class="inline-flex items-center gap-3 mb-6">
                            <div class="w-12 h-0.5" style="background-color: {{ $color }};"></div>
                            <span class="text-sm font-semibold uppercase tracking-widest" style="color: {{ $color }};">Chapter Two</span>
                            <div class="w-12 h-0.5" style="background-color: {{ $color }};"></div>
                        </div>
                        <h2 id="section2-title" class="text-4xl md:text-5xl lg:text-6xl font-black mb-8 text-gray-900 dark:text-white leading-tight" style="color: {{ $color }};">{{ $templateData['defaults']['section2_title'] ?? 'Our First Day' }}</h2>
                        <p id="section2-content" class="text-lg md:text-xl lg:text-2xl text-gray-700 dark:text-[#cbd5e1] leading-relaxed font-light">
                            {{ $templateData['defaults']['section2_content'] ?? 'The day we met changed everything. I knew from that moment that you were special.' }}
                        </p>
                    </div>
                    <div class="relative">
                        <div class="aspect-square rounded-3xl overflow-hidden shadow-2xl relative group">
                            <div id="section2-placeholder" class="w-full h-full bg-gradient-to-br from-gray-200 to-gray-300 dark:from-gray-700 dark:to-gray-800 flex items-center justify-center">
                                <svg class="w-24 h-24 text-gray-400 dark:text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section 5: Section 3 -->
        <section class="bg-gradient-to-br {{ $bg }} py-32 px-8 relative overflow-hidden">
            <div class="absolute inset-0 opacity-5">
                <div class="absolute inset-0" style="background-image: radial-gradient(circle, white 1px, transparent 1px); background-size: 50px 50px;"></div>
            </div>
            <div class="max-w-7xl mx-auto text-center relative z-10">
                <div class="inline-flex items-center gap-4 mb-8">
                    <div class="w-16 h-0.5 bg-white/50"></div>
                    <span class="text-sm font-semibold uppercase tracking-widest text-white/80">Chapter Three</span>
                    <div class="w-16 h-0.5 bg-white/50"></div>
        </div>
                <h2 id="section3-title" class="text-5xl md:text-6xl lg:text-7xl font-black mb-12 text-white leading-tight">{{ $templateData['defaults']['section3_title'] ?? 'Our Journey' }}</h2>
                <p id="section3-content" class="text-xl md:text-2xl lg:text-3xl text-white/90 leading-relaxed font-light max-w-4xl mx-auto mb-16">
                    {{ $templateData['defaults']['section3_content'] ?? 'Together we\'ve created countless beautiful memories. Each day with you is a new adventure.' }}
                </p>
                <div id="section3-images-container" class="grid md:grid-cols-3 gap-8">
                    @for($i = 1; $i <= 3; $i++)
                    <div class="aspect-square rounded-2xl overflow-hidden shadow-2xl relative group">
                        <div id="section3-placeholder{{ $i }}" class="w-full h-full bg-gradient-to-br from-white/20 to-white/10 flex items-center justify-center border-2 border-white/20">
                            <svg class="w-16 h-16 text-white/50" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                </svg>
                        </div>
                    </div>
                    @endfor
                </div>
            </div>
        </section>

        <!-- Section 6: Section 4 -->
        <section class="bg-white dark:bg-[#0f172a] py-32 px-8">
            <div class="max-w-6xl mx-auto text-center">
                <div class="inline-flex items-center gap-4 mb-8">
                    <div class="w-16 h-0.5" style="background-color: {{ $color }};"></div>
                    <span class="text-sm font-semibold uppercase tracking-widest" style="color: {{ $color }};">Chapter Four</span>
                    <div class="w-16 h-0.5" style="background-color: {{ $color }};"></div>
                </div>
                <h2 id="section4-title" class="text-5xl md:text-6xl lg:text-7xl font-black mb-12 text-gray-900 dark:text-white leading-tight" style="color: {{ $color }};">{{ $templateData['defaults']['section4_title'] ?? 'Our Promise' }}</h2>
                <p id="section4-content" class="text-xl md:text-2xl lg:text-3xl text-gray-700 dark:text-[#cbd5e1] leading-relaxed font-light max-w-4xl mx-auto">
                    {{ $templateData['defaults']['section4_content'] ?? 'I promise to stand by you, support you, and love you through all of life\'s adventures.' }}
                </p>
            </div>
        </section>

        <!-- Section 7: Section 5 -->
        <section class="bg-gradient-to-br {{ $bg }} py-32 px-8 relative overflow-hidden">
            <div class="absolute inset-0 opacity-10">
                <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-96 h-96 rounded-full blur-3xl animate-pulse" style="background-color: {{ $color }};"></div>
            </div>
            <div class="max-w-6xl mx-auto text-center relative z-10">
                <div class="inline-flex items-center gap-4 mb-8">
                    <div class="w-16 h-0.5 bg-white/50"></div>
                    <span class="text-sm font-semibold uppercase tracking-widest text-white/80">Chapter Five</span>
                    <div class="w-16 h-0.5 bg-white/50"></div>
                </div>
                <h2 id="section5-title" class="text-5xl md:text-6xl lg:text-7xl font-black mb-12 text-white leading-tight">{{ $templateData['defaults']['section5_title'] ?? 'Forever' }}</h2>
                <p id="section5-content" class="text-xl md:text-2xl lg:text-3xl text-white/90 leading-relaxed font-light max-w-4xl mx-auto">
                    {{ $templateData['defaults']['section5_content'] ?? 'Today, tomorrow, and forever - I choose you. You are my everything.' }}
                </p>
            </div>
        </section>
    </div>

@elseif($design == 'classic' || $design == 'minimalist' || $design == 'grateful' || $design == 'angel')
    {{-- Design 2: Modern Minimalist - 6 Sections with Clean Design --}}
    <div class="min-h-screen bg-white dark:bg-[#0f172a]" data-theme-color="{{ $color }}" style="--theme-color: {{ $color }};">
        <!-- Section 1: Hero -->
        <section class="relative min-h-screen flex items-center justify-center px-8 py-32 border-b-[16px]" style="border-color: {{ $color }};">
            <div class="absolute inset-0 opacity-5">
                <div class="absolute top-0 right-0 w-96 h-96 rounded-full blur-3xl" style="background-color: {{ $color }};"></div>
            </div>
            <div class="relative z-10 text-center space-y-8 max-w-5xl mx-auto">
                <div class="inline-block px-6 py-3 rounded-lg backdrop-blur-md border border-white/20 shadow-lg animate-fade-in" style="background-color: {{ $color }}30;">
                    <p id="preview-subheading" class="text-xl md:text-2xl font-bold uppercase tracking-widest text-white">{{ $templateData['defaults']['subheading'] ?? 'Special Moment' }}</p>
                </div>
                <h1 id="preview-heading" class="text-6xl md:text-8xl lg:text-[10rem] font-black text-white leading-[0.85] mb-8 animate-slide-up" style="text-shadow: 0 0 100px rgba(0,0,0,0.8), 0 10px 40px rgba(0,0,0,0.6);">
                    {{ $templateData['defaults']['heading'] ?? 'To My Beloved' }}
                </h1>
            </div>
        </section>

        <!-- Section 2: Message & From -->
        <section class="bg-gradient-to-b from-white to-gray-50 dark:from-[#0f172a] dark:to-[#1e293b] py-40 px-8">
            <div class="max-w-6xl mx-auto">
                <div class="grid lg:grid-cols-3 gap-20">
                    <div class="lg:col-span-1">
                        <div class="sticky top-28">
                            <div class="w-full aspect-square rounded-3xl flex items-center justify-center shadow-2xl transform rotate-3 border-8 border-white theme-bg group" style="background-color: {{ $color }};">
                                <div class="w-40 h-40 transform group-hover:scale-110 transition-transform duration-500">
                                    {!! getCategoryIcon($category) !!}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="lg:col-span-2 space-y-12">
                        <div class="relative">
                            <div class="absolute -left-6 top-0 text-7xl font-black text-gray-100 dark:text-gray-800 opacity-30">"</div>
                            <p id="preview-message" class="text-3xl md:text-4xl text-gray-800 dark:text-[#e2e8f0] leading-relaxed mb-12 font-light italic relative z-10 pl-8">
                                {{ $templateData['defaults']['message'] ?? 'Your heartfelt message here' }}
                            </p>
                            <div class="absolute -right-6 bottom-0 text-7xl font-black text-gray-100 dark:text-gray-800 opacity-30">"</div>
                        </div>
                        <div class="relative pt-16">
                            <div class="absolute top-0 left-0 w-24 h-1.5 rounded-full" style="background-color: {{ $color }};"></div>
                            <p id="preview-from" class="text-4xl md:text-5xl font-black relative inline-block" style="color: {{ $color }};">
                                <span class="relative z-10">{{ $templateData['defaults']['from'] ?? 'Your Name' }}</span>
                                <span class="absolute bottom-2 left-0 right-0 h-4 opacity-20 -z-0 transform -skew-x-12" style="background-color: {{ $color }};"></span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section 3: Section 1 -->
        <section class="bg-gradient-to-br {{ $bg }} py-40 px-12 relative overflow-hidden">
            <div class="absolute inset-0 opacity-10">
                <div class="absolute top-0 right-0 w-96 h-96 rounded-full blur-3xl animate-pulse" style="background-color: {{ $color }};"></div>
            </div>
            <div class="max-w-6xl mx-auto text-center relative z-10">
                <h2 id="section1-title" class="text-6xl md:text-7xl font-black mb-12 text-white leading-tight" style="color: {{ $color }};">{{ $templateData['defaults']['section1_title'] ?? 'Our Love' }}</h2>
                <p id="section1-content" class="text-3xl md:text-4xl text-white/95 leading-relaxed font-light max-w-4xl mx-auto">
                    {{ $templateData['defaults']['section1_content'] ?? 'Every moment with you feels like a dream. Your love fills my heart with joy and happiness.' }}
                </p>
            </div>
        </section>

        <!-- Section 4: Section 2 -->
        <section class="bg-white dark:bg-[#0f172a] py-40 px-12">
            <div class="max-w-7xl mx-auto">
                <div class="grid md:grid-cols-2 gap-20 items-center">
                    <div class="space-y-8">
                        <h2 id="section2-title" class="text-6xl md:text-7xl font-black mb-12 text-gray-900 dark:text-white leading-tight" style="color: {{ $color }};">{{ $templateData['defaults']['section2_title'] ?? 'Our First Day' }}</h2>
                        <p id="section2-content" class="text-3xl md:text-4xl text-gray-700 dark:text-[#cbd5e1] leading-relaxed font-light">
                            {{ $templateData['defaults']['section2_content'] ?? 'The day we met changed everything. I knew from that moment that you were special.' }}
                        </p>
                    </div>
                    <div class="relative">
                        <div class="aspect-square rounded-[2.5rem] overflow-hidden shadow-2xl relative group">
                            <div id="section2-placeholder" class="w-full h-full bg-gradient-to-br from-gray-200 via-gray-100 to-gray-200 dark:from-gray-700 dark:via-gray-800 dark:to-gray-700 flex items-center justify-center">
                                <svg class="w-28 h-28 text-gray-400 dark:text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section 5: Section 3 -->
        <section class="bg-gradient-to-br {{ $bg }} py-40 px-12 relative overflow-hidden">
            <div class="absolute inset-0 opacity-5">
                <div class="absolute inset-0" style="background-image: radial-gradient(circle, white 1px, transparent 1px); background-size: 50px 50px;"></div>
            </div>
            <div class="max-w-7xl mx-auto text-center relative z-10">
                <h2 id="section3-title" class="text-6xl md:text-7xl font-black mb-12 text-white leading-tight">{{ $templateData['defaults']['section3_title'] ?? 'Our Journey' }}</h2>
                <p id="section3-content" class="text-3xl md:text-4xl text-white/95 leading-relaxed font-light max-w-4xl mx-auto mb-20">
                    {{ $templateData['defaults']['section3_content'] ?? 'Together we\'ve created countless beautiful memories. Each day with you is a new adventure.' }}
                </p>
                <div id="section3-images-container" class="grid md:grid-cols-3 gap-8 lg:gap-10">
                    @for($i = 1; $i <= 3; $i++)
                    <div class="aspect-square rounded-3xl overflow-hidden shadow-2xl relative group">
                        <div id="section3-placeholder{{ $i }}" class="w-full h-full bg-gradient-to-br from-white/20 via-white/10 to-white/5 flex items-center justify-center border-2 border-white/20">
                            <svg class="w-20 h-20 text-white/50" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                </svg>
                        </div>
                    </div>
                    @endfor
                </div>
            </div>
        </section>

        <!-- Section 6: Section 4 & 5 Combined -->
        <section class="bg-white dark:bg-[#0f172a] py-40 px-12">
            <div class="max-w-6xl mx-auto space-y-32">
                <div class="text-center">
                    <h2 id="section4-title" class="text-6xl md:text-7xl font-black mb-12 text-gray-900 dark:text-white leading-tight" style="color: {{ $color }};">{{ $templateData['defaults']['section4_title'] ?? 'Our Promise' }}</h2>
                    <p id="section4-content" class="text-3xl md:text-4xl text-gray-700 dark:text-[#cbd5e1] leading-relaxed font-light max-w-4xl mx-auto">
                        {{ $templateData['defaults']['section4_content'] ?? 'I promise to stand by you, support you, and love you through all of life\'s adventures.' }}
                    </p>
        </div>
                <div class="text-center">
                    <h2 id="section5-title" class="text-6xl md:text-7xl font-black mb-12 text-gray-900 dark:text-white leading-tight" style="color: {{ $color }};">{{ $templateData['defaults']['section5_title'] ?? 'Forever' }}</h2>
                    <p id="section5-content" class="text-3xl md:text-4xl text-gray-700 dark:text-[#cbd5e1] leading-relaxed font-light max-w-4xl mx-auto">
                        {{ $templateData['defaults']['section5_content'] ?? 'Today, tomorrow, and forever - I choose you. You are my everything.' }}
                    </p>
                </div>
            </div>
        </section>
    </div>

@elseif($design == 'modern' || $design == 'artistic' || $design == 'heartfelt' || $design == 'bond')
    {{-- Design 3: Artistic Creative - 7 Sections with Bold Design --}}
    <div class="min-h-screen bg-gradient-to-br {{ $bg }}" data-theme-color="{{ $color }}" style="--theme-color: {{ $color }};">
        <!-- Section 1: Hero Split Screen -->
        <section class="min-h-screen flex items-center px-8 lg:px-12 py-32 relative overflow-hidden pt-20">
            <div class="absolute inset-0 opacity-15">
                <div class="absolute top-0 right-0 w-96 h-96 rounded-full blur-3xl animate-pulse" style="background-color: {{ $color }};"></div>
                <div class="absolute bottom-0 left-0 w-80 h-80 rounded-full blur-3xl animate-pulse" style="background-color: {{ $color }}; animation-delay: 1s;"></div>
            </div>
            <div class="max-w-7xl mx-auto w-full relative z-10">
                <div class="grid lg:grid-cols-2 gap-16 lg:gap-24 items-center">
                    <div class="space-y-10">
                        <div class="inline-flex items-center gap-3 px-8 py-4 rounded-2xl backdrop-blur-2xl border-2 border-white/40 shadow-2xl animate-fade-in" style="background-color: {{ $color }}40;">
                            <div class="w-2 h-2 rounded-full bg-white animate-pulse"></div>
                            <p id="preview-subheading" class="text-lg md:text-xl lg:text-2xl font-bold uppercase tracking-[0.3em] text-white">{{ $templateData['defaults']['subheading'] ?? 'Special Moment' }}</p>
                            <div class="w-2 h-2 rounded-full bg-white animate-pulse" style="animation-delay: 0.5s;"></div>
                        </div>
                        <h1 id="preview-heading" class="text-5xl md:text-7xl lg:text-8xl xl:text-9xl font-black text-gray-900 dark:text-white leading-[0.9] mb-8 animate-slide-up">
                            {{ $templateData['defaults']['heading'] ?? 'To My Beloved' }}
                        </h1>
                        <p id="preview-message" class="text-xl md:text-2xl lg:text-3xl text-gray-700 dark:text-[#cbd5e1] leading-relaxed mb-8 font-light">
                            {{ $templateData['defaults']['message'] ?? 'Your heartfelt message here' }}
                        </p>
                        <div class="flex items-center gap-6 group">
                            <div class="w-24 h-2.5 rounded-full transform group-hover:scale-x-110 transition-transform duration-500" style="background-color: {{ $color }};"></div>
                            <p id="preview-from" class="text-2xl md:text-3xl lg:text-4xl font-black transform group-hover:translate-x-2 transition-transform duration-300" style="color: {{ $color }};">{{ $templateData['defaults']['from'] ?? 'Your Name' }}</p>
                        </div>
        </div>
                    <div class="relative animate-scale-in">
                        <div class="relative rounded-[2.5rem] overflow-hidden shadow-[0_40px_100px_rgba(0,0,0,0.4)] transform -rotate-3 border-4 border-white/70 group hover:rotate-0 transition-all duration-700">
                            <div class="w-full h-[500px] lg:h-[700px] bg-gradient-to-br from-gray-200 to-gray-300 dark:from-gray-700 dark:to-gray-800 flex items-center justify-center">
                                <svg class="w-32 h-32 text-gray-400 dark:text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                </svg>
                            </div>
                        </div>
                        <div class="absolute -top-8 -right-8 w-28 h-28 rounded-3xl opacity-25 transform rotate-45 -z-10 blur-xl animate-pulse" style="background-color: {{ $color }};"></div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section 2: Section 1 -->
        <section class="bg-white/95 dark:bg-[#1e293b]/95 backdrop-blur-2xl py-40 px-12 relative overflow-hidden">
            <div class="absolute inset-0 opacity-5">
                <div class="absolute top-0 left-0 w-96 h-96 rounded-full blur-3xl" style="background-color: {{ $color }};"></div>
            </div>
            <div class="max-w-6xl mx-auto text-center relative z-10">
                <div class="inline-flex items-center gap-4 mb-8">
                    <div class="w-16 h-0.5" style="background-color: {{ $color }};"></div>
                    <span class="text-sm font-semibold uppercase tracking-widest" style="color: {{ $color }};">Chapter One</span>
                    <div class="w-16 h-0.5" style="background-color: {{ $color }};"></div>
                </div>
                <h2 id="section1-title" class="text-6xl md:text-7xl lg:text-8xl font-black mb-12 text-gray-900 dark:text-white leading-tight" style="color: {{ $color }};">{{ $templateData['defaults']['section1_title'] ?? 'Our Love' }}</h2>
                <p id="section1-content" class="text-3xl md:text-4xl lg:text-5xl text-gray-800 dark:text-[#e2e8f0] leading-relaxed font-light max-w-4xl mx-auto">
                    {{ $templateData['defaults']['section1_content'] ?? 'Every moment with you feels like a dream. Your love fills my heart with joy and happiness.' }}
                </p>
            </div>
        </section>

        <!-- Section 3: Section 2 -->
        <section class="bg-gradient-to-br {{ $bg }} py-40 px-12 relative overflow-hidden">
            <div class="absolute inset-0 opacity-10">
                <div class="absolute top-0 right-0 w-96 h-96 rounded-full blur-3xl animate-pulse" style="background-color: {{ $color }};"></div>
            </div>
            <div class="max-w-7xl mx-auto relative z-10">
                <div class="grid md:grid-cols-2 gap-20 items-center">
                    <div class="relative order-2 md:order-1">
                        <div class="aspect-square rounded-[2.5rem] overflow-hidden shadow-2xl relative group">
                            <div id="section2-placeholder" class="w-full h-full bg-gradient-to-br from-white/30 via-white/20 to-white/10 flex items-center justify-center border-2 border-white/30">
                                <svg class="w-28 h-28 text-white/60" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="order-1 md:order-2 space-y-8">
                        <div class="inline-flex items-center gap-3">
                            <div class="w-12 h-0.5 bg-white/50"></div>
                            <span class="text-sm font-semibold uppercase tracking-widest text-white/80">Chapter Two</span>
                            <div class="w-12 h-0.5 bg-white/50"></div>
                        </div>
                        <h2 id="section2-title" class="text-6xl md:text-7xl lg:text-8xl font-black mb-12 text-white leading-tight drop-shadow-2xl">{{ $templateData['defaults']['section2_title'] ?? 'Our First Day' }}</h2>
                        <p id="section2-content" class="text-3xl md:text-4xl text-white/95 leading-relaxed font-light">
                            {{ $templateData['defaults']['section2_content'] ?? 'The day we met changed everything. I knew from that moment that you were special.' }}
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section 4: Section 3 -->
        <section class="bg-white/95 dark:bg-[#1e293b]/95 backdrop-blur-2xl py-40 px-12 relative overflow-hidden">
            <div class="absolute inset-0 opacity-5">
                <div class="absolute top-0 right-0 w-96 h-96 rounded-full blur-3xl" style="background-color: {{ $color }};"></div>
            </div>
            <div class="max-w-7xl mx-auto text-center relative z-10">
                <div class="inline-flex items-center gap-4 mb-8">
                    <div class="w-16 h-0.5" style="background-color: {{ $color }};"></div>
                    <span class="text-sm font-semibold uppercase tracking-widest" style="color: {{ $color }};">Chapter Three</span>
                    <div class="w-16 h-0.5" style="background-color: {{ $color }};"></div>
                </div>
                <h2 id="section3-title" class="text-6xl md:text-7xl lg:text-8xl font-black mb-12 text-gray-900 dark:text-white leading-tight" style="color: {{ $color }};">{{ $templateData['defaults']['section3_title'] ?? 'Our Journey' }}</h2>
                <p id="section3-content" class="text-3xl md:text-4xl lg:text-5xl text-gray-800 dark:text-[#e2e8f0] leading-relaxed font-light max-w-4xl mx-auto mb-20">
                    {{ $templateData['defaults']['section3_content'] ?? 'Together we\'ve created countless beautiful memories. Each day with you is a new adventure.' }}
                </p>
                <div id="section3-images-container" class="grid md:grid-cols-3 gap-8 lg:gap-10">
                    @for($i = 1; $i <= 3; $i++)
                    <div class="aspect-square rounded-3xl overflow-hidden shadow-2xl relative group">
                        <div id="section3-placeholder{{ $i }}" class="w-full h-full bg-gradient-to-br from-gray-200 via-gray-100 to-gray-200 dark:from-gray-700 dark:via-gray-800 dark:to-gray-700 flex items-center justify-center border-2 border-gray-200 dark:border-gray-700">
                            <svg class="w-20 h-20 text-gray-400 dark:text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                </svg>
                        </div>
                    </div>
                    @endfor
                </div>
            </div>
        </section>

        <!-- Section 5: Section 4 -->
        <section class="bg-gradient-to-br {{ $bg }} py-40 px-12 relative overflow-hidden">
            <div class="absolute inset-0 opacity-10">
                <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-96 h-96 rounded-full blur-3xl animate-pulse" style="background-color: {{ $color }};"></div>
            </div>
            <div class="max-w-6xl mx-auto text-center relative z-10">
                <div class="inline-flex items-center gap-4 mb-8">
                    <div class="w-16 h-0.5 bg-white/50"></div>
                    <span class="text-sm font-semibold uppercase tracking-widest text-white/80">Chapter Four</span>
                    <div class="w-16 h-0.5 bg-white/50"></div>
                </div>
                <h2 id="section4-title" class="text-6xl md:text-7xl lg:text-8xl font-black mb-12 text-white leading-tight drop-shadow-2xl">{{ $templateData['defaults']['section4_title'] ?? 'Our Promise' }}</h2>
                <p id="section4-content" class="text-3xl md:text-4xl lg:text-5xl text-white/95 leading-relaxed font-light max-w-4xl mx-auto">
                    {{ $templateData['defaults']['section4_content'] ?? 'I promise to stand by you, support you, and love you through all of life\'s adventures.' }}
                </p>
            </div>
        </section>

        <!-- Section 6: Section 5 -->
        <section class="bg-white/95 dark:bg-[#1e293b]/95 backdrop-blur-2xl py-40 px-12 relative overflow-hidden">
            <div class="absolute inset-0 opacity-5">
                <div class="absolute top-0 right-0 w-96 h-96 rounded-full blur-3xl" style="background-color: {{ $color }};"></div>
            </div>
            <div class="max-w-6xl mx-auto text-center relative z-10">
                <div class="inline-flex items-center gap-4 mb-8">
                    <div class="w-16 h-0.5" style="background-color: {{ $color }};"></div>
                    <span class="text-sm font-semibold uppercase tracking-widest" style="color: {{ $color }};">Chapter Five</span>
                    <div class="w-16 h-0.5" style="background-color: {{ $color }};"></div>
        </div>
                <h2 id="section5-title" class="text-6xl md:text-7xl lg:text-8xl font-black mb-12 text-gray-900 dark:text-white leading-tight" style="color: {{ $color }};">{{ $templateData['defaults']['section5_title'] ?? 'Forever' }}</h2>
                <p id="section5-content" class="text-3xl md:text-4xl lg:text-5xl text-gray-800 dark:text-[#e2e8f0] leading-relaxed font-light max-w-4xl mx-auto">
                    {{ $templateData['defaults']['section5_content'] ?? 'Today, tomorrow, and forever - I choose you. You are my everything.' }}
        </p>
            </div>
        </section>

        <!-- Section 7: Memories Gallery -->
        <section class="bg-gradient-to-br {{ $bg }} py-40 px-12 relative overflow-hidden">
            <div class="absolute inset-0 opacity-10">
                <div class="absolute top-0 right-0 w-96 h-96 rounded-full blur-3xl" style="background-color: {{ $color }};"></div>
                <div class="absolute bottom-0 left-0 w-96 h-96 rounded-full blur-3xl" style="background-color: {{ $color }};"></div>
            </div>
            <div class="max-w-7xl mx-auto relative z-10">
                <div class="text-center mb-20">
                    <div class="inline-flex items-center gap-4 mb-6">
                        <div class="w-16 h-0.5 bg-white/50"></div>
                        <span class="text-sm font-semibold uppercase tracking-widest text-white/80">Gallery</span>
                        <div class="w-16 h-0.5 bg-white/50"></div>
                    </div>
                    <h2 class="text-6xl md:text-7xl lg:text-8xl font-black text-center mb-8 text-white drop-shadow-2xl">Memories</h2>
                </div>
                <div id="memories-section" class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                    <div class="aspect-square bg-white/20 backdrop-blur-sm rounded-3xl flex items-center justify-center border-2 border-dashed border-white/30 hover:border-white/60 transition-all duration-300 hover:shadow-xl group">
                        <p class="text-white/70 group-hover:text-white text-sm text-center px-4 transition-colors duration-300">Add memories</p>
                    </div>
                </div>
        </div>
        </section>
    </div>

@elseif($design == 'timeless' || $design == 'elegant-classic' || $design == 'celebration')
    {{-- Design 4: Elegant Classic - 6 Sections with Timeless Design --}}
    <div class="min-h-screen bg-gradient-to-br {{ $bg }}" data-theme-color="{{ $color }}" style="--theme-color: {{ $color }};">
        <!-- Section 1: Centered Hero -->
        <section class="min-h-screen flex items-center justify-center px-12 py-32 relative overflow-hidden">
            <div class="absolute inset-0 opacity-5">
                <div class="absolute inset-0" style="background-image: radial-gradient(circle, var(--theme-color) 1px, transparent 1px); background-size: 50px 50px;"></div>
            </div>
            <div class="absolute inset-0 opacity-15">
                <div class="absolute top-0 right-0 w-96 h-96 rounded-full blur-3xl animate-pulse" style="background-color: {{ $color }};"></div>
                <div class="absolute bottom-0 left-0 w-96 h-96 rounded-full blur-3xl animate-pulse" style="background-color: {{ $color }}; animation-delay: 1.5s;"></div>
            </div>
            <div class="max-w-6xl mx-auto text-center relative z-10 space-y-20">
                <div class="mb-20 rounded-[4rem] overflow-hidden shadow-[0_50px_120px_rgba(0,0,0,0.4)] border-[16px] border-white/90 transform hover:scale-[1.02] transition-transform duration-700 group">
                    <div class="w-full h-[75vh] bg-gradient-to-br from-gray-200 to-gray-300 dark:from-gray-700 dark:to-gray-800 flex items-center justify-center">
                        <svg class="w-32 h-32 text-gray-400 dark:text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                </div>
                <div class="space-y-16">
                    <div>
                        <h1 id="preview-heading" class="text-8xl md:text-[10rem] lg:text-[13rem] font-black text-gray-900 dark:text-white mb-10 leading-[0.85] tracking-tight drop-shadow-2xl">
                            {{ $templateData['defaults']['heading'] ?? 'To My Beloved' }}
                        </h1>
                        <div class="inline-flex items-center gap-4 px-8 py-4 rounded-full backdrop-blur-xl border-2 border-gray-200/50 dark:border-gray-700/50 shadow-lg mb-16" style="background-color: {{ $color }}30;">
                            <p id="preview-subheading" class="text-3xl md:text-4xl text-gray-700 dark:text-[#cbd5e1] font-light italic">
                                {{ $templateData['defaults']['subheading'] ?? 'Special Moment' }}
                            </p>
                        </div>
                    </div>
                    <div class="my-24 flex justify-center">
                        <div class="relative">
                            <div class="w-72 h-72 rounded-full flex items-center justify-center shadow-[0_30px_90px_rgba(0,0,0,0.4)] border-[12px] border-white/70 theme-bg transform hover:scale-110 hover:rotate-12 transition-all duration-700 group cursor-pointer" style="background-color: {{ $color }};">
                                <div class="absolute inset-0 rounded-full bg-white/20 blur-xl group-hover:blur-2xl transition-all duration-700"></div>
                                <div class="w-40 h-40 relative z-10 transform group-hover:scale-110 transition-transform duration-500">
                                    {!! getCategoryIcon($category) !!}
                                </div>
                            </div>
                            <div class="absolute inset-0 rounded-full border-4 border-white/30 dark:border-white/20 animate-pulse"></div>
                            <div class="absolute -inset-4 rounded-full border-2 opacity-20 animate-pulse" style="border-color: {{ $color }}; animation-delay: 0.5s;"></div>
                        </div>
                    </div>
                    <div class="bg-white/95 dark:bg-[#1e293b]/95 backdrop-blur-2xl rounded-[3.5rem] p-24 shadow-[0_40px_100px_rgba(0,0,0,0.3)] border-4 border-white/50 dark:border-white/30 transform hover:scale-[1.02] transition-transform duration-500">
                        <div class="relative">
                            <div class="absolute -left-8 top-0 text-7xl font-black text-gray-100 dark:text-gray-800 opacity-30">"</div>
                            <p id="preview-message" class="text-3xl md:text-4xl lg:text-5xl text-gray-800 dark:text-[#e2e8f0] leading-relaxed mb-16 font-light italic relative z-10 pl-8">
                                {{ $templateData['defaults']['message'] ?? 'Your heartfelt message here' }}
                            </p>
                            <div class="absolute -right-8 bottom-0 text-7xl font-black text-gray-100 dark:text-gray-800 opacity-30">"</div>
                        </div>
                        <div class="pt-16 border-t-[8px] theme-border" style="border-color: {{ $color }};">
                            <p id="preview-from" class="text-5xl md:text-6xl lg:text-7xl font-black relative inline-block" style="color: {{ $color }};">
                                <span class="relative z-10">{{ $templateData['defaults']['from'] ?? 'Your Name' }}</span>
                                <span class="absolute bottom-2 left-0 right-0 h-4 opacity-20 -z-0 transform -skew-x-12" style="background-color: {{ $color }};"></span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section 2: Section 1 -->
        <section class="bg-white/80 dark:bg-[#1e293b]/80 backdrop-blur-xl py-40 px-12 relative overflow-hidden">
            <div class="absolute inset-0 opacity-5">
                <div class="absolute top-0 right-0 w-96 h-96 rounded-full blur-3xl" style="background-color: {{ $color }};"></div>
            </div>
            <div class="max-w-6xl mx-auto text-center relative z-10">
                <div class="inline-flex items-center gap-4 mb-8">
                    <div class="w-16 h-0.5" style="background-color: {{ $color }};"></div>
                    <span class="text-sm font-semibold uppercase tracking-widest" style="color: {{ $color }};">Chapter One</span>
                    <div class="w-16 h-0.5" style="background-color: {{ $color }};"></div>
                </div>
                <h2 id="section1-title" class="text-6xl md:text-7xl lg:text-8xl font-black mb-12 text-gray-900 dark:text-white leading-tight" style="color: {{ $color }};">{{ $templateData['defaults']['section1_title'] ?? 'Our Love' }}</h2>
                <p id="section1-content" class="text-3xl md:text-4xl lg:text-5xl text-gray-800 dark:text-[#e2e8f0] leading-relaxed font-light max-w-4xl mx-auto">
                    {{ $templateData['defaults']['section1_content'] ?? 'Every moment with you feels like a dream. Your love fills my heart with joy and happiness.' }}
                </p>
            </div>
        </section>

        <!-- Section 3: Section 2 -->
        <section class="bg-gradient-to-br {{ $bg }} py-40 px-12 relative overflow-hidden">
            <div class="absolute inset-0 opacity-10">
                <div class="absolute top-0 right-0 w-96 h-96 rounded-full blur-3xl animate-pulse" style="background-color: {{ $color }};"></div>
            </div>
            <div class="max-w-7xl mx-auto relative z-10">
                <div class="grid md:grid-cols-2 gap-20 items-center">
                    <div class="space-y-8">
                        <div class="inline-flex items-center gap-3">
                            <div class="w-12 h-0.5 bg-white/50"></div>
                            <span class="text-sm font-semibold uppercase tracking-widest text-white/80">Chapter Two</span>
                            <div class="w-12 h-0.5 bg-white/50"></div>
                        </div>
                        <h2 id="section2-title" class="text-6xl md:text-7xl lg:text-8xl font-black mb-12 text-white leading-tight drop-shadow-2xl">{{ $templateData['defaults']['section2_title'] ?? 'Our First Day' }}</h2>
                        <p id="section2-content" class="text-3xl md:text-4xl text-white/95 leading-relaxed font-light">
                            {{ $templateData['defaults']['section2_content'] ?? 'The day we met changed everything. I knew from that moment that you were special.' }}
                        </p>
                    </div>
                    <div class="relative">
                        <div class="aspect-square rounded-[2.5rem] overflow-hidden shadow-2xl relative group">
                            <div id="section2-placeholder" class="w-full h-full bg-gradient-to-br from-white/30 via-white/20 to-white/10 flex items-center justify-center border-2 border-white/30">
                                <svg class="w-28 h-28 text-white/60" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section 4: Section 3 -->
        <section class="bg-white/80 dark:bg-[#1e293b]/80 backdrop-blur-xl py-40 px-12 relative overflow-hidden">
            <div class="absolute inset-0 opacity-5">
                <div class="absolute top-0 right-0 w-96 h-96 rounded-full blur-3xl" style="background-color: {{ $color }};"></div>
            </div>
            <div class="max-w-7xl mx-auto text-center relative z-10">
                <div class="inline-flex items-center gap-4 mb-8">
                    <div class="w-16 h-0.5" style="background-color: {{ $color }};"></div>
                    <span class="text-sm font-semibold uppercase tracking-widest" style="color: {{ $color }};">Chapter Three</span>
                    <div class="w-16 h-0.5" style="background-color: {{ $color }};"></div>
        </div>
                <h2 id="section3-title" class="text-6xl md:text-7xl lg:text-8xl font-black mb-12 text-gray-900 dark:text-white leading-tight" style="color: {{ $color }};">{{ $templateData['defaults']['section3_title'] ?? 'Our Journey' }}</h2>
                <p id="section3-content" class="text-3xl md:text-4xl lg:text-5xl text-gray-800 dark:text-[#e2e8f0] leading-relaxed font-light max-w-4xl mx-auto mb-20">
                    {{ $templateData['defaults']['section3_content'] ?? 'Together we\'ve created countless beautiful memories. Each day with you is a new adventure.' }}
                </p>
                <div id="section3-images-container" class="grid md:grid-cols-3 gap-8 lg:gap-10">
                    @for($i = 1; $i <= 3; $i++)
                    <div class="aspect-square rounded-3xl overflow-hidden shadow-2xl relative group">
                        <div id="section3-placeholder{{ $i }}" class="w-full h-full bg-gradient-to-br from-gray-200 via-gray-100 to-gray-200 dark:from-gray-700 dark:via-gray-800 dark:to-gray-700 flex items-center justify-center border-2 border-gray-200 dark:border-gray-700">
                            <svg class="w-20 h-20 text-gray-400 dark:text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                </svg>
                        </div>
                    </div>
                    @endfor
                </div>
            </div>
        </section>

        <!-- Section 5: Section 4 -->
        <section class="bg-gradient-to-br {{ $bg }} py-40 px-12 relative overflow-hidden">
            <div class="absolute inset-0 opacity-10">
                <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-96 h-96 rounded-full blur-3xl animate-pulse" style="background-color: {{ $color }};"></div>
            </div>
            <div class="max-w-6xl mx-auto text-center relative z-10">
                <div class="inline-flex items-center gap-4 mb-8">
                    <div class="w-16 h-0.5 bg-white/50"></div>
                    <span class="text-sm font-semibold uppercase tracking-widest text-white/80">Chapter Four</span>
                    <div class="w-16 h-0.5 bg-white/50"></div>
                </div>
                <h2 id="section4-title" class="text-6xl md:text-7xl lg:text-8xl font-black mb-12 text-white leading-tight drop-shadow-2xl">{{ $templateData['defaults']['section4_title'] ?? 'Our Promise' }}</h2>
                <p id="section4-content" class="text-3xl md:text-4xl lg:text-5xl text-white/95 leading-relaxed font-light max-w-4xl mx-auto">
                    {{ $templateData['defaults']['section4_content'] ?? 'I promise to stand by you, support you, and love you through all of life\'s adventures.' }}
                </p>
            </div>
        </section>

        <!-- Section 6: Section 5 -->
        <section class="bg-white/80 dark:bg-[#1e293b]/80 backdrop-blur-xl py-40 px-12 relative overflow-hidden">
            <div class="absolute inset-0 opacity-5">
                <div class="absolute top-0 right-0 w-96 h-96 rounded-full blur-3xl" style="background-color: {{ $color }};"></div>
            </div>
            <div class="max-w-6xl mx-auto text-center relative z-10">
                <div class="inline-flex items-center gap-4 mb-8">
                    <div class="w-16 h-0.5" style="background-color: {{ $color }};"></div>
                    <span class="text-sm font-semibold uppercase tracking-widest" style="color: {{ $color }};">Chapter Five</span>
                    <div class="w-16 h-0.5" style="background-color: {{ $color }};"></div>
                </div>
                <h2 id="section5-title" class="text-6xl md:text-7xl lg:text-8xl font-black mb-12 text-gray-900 dark:text-white leading-tight" style="color: {{ $color }};">{{ $templateData['defaults']['section5_title'] ?? 'Forever' }}</h2>
                <p id="section5-content" class="text-3xl md:text-4xl lg:text-5xl text-gray-800 dark:text-[#e2e8f0] leading-relaxed font-light max-w-4xl mx-auto">
                    {{ $templateData['defaults']['section5_content'] ?? 'Today, tomorrow, and forever - I choose you. You are my everything.' }}
                </p>
            </div>
        </section>
    </div>

@elseif($design == 'hero' || $design == 'bold' || $design == 'contemporary' || $design == 'party' || $design == 'fun')
    {{-- Design 5: Bold Contemporary - 7 Sections with Dynamic Design --}}
    <div class="min-h-screen bg-gradient-to-br {{ $bg }}" data-theme-color="{{ $color }}" style="--theme-color: {{ $color }};">
        <!-- Section 1: Hero with Split Layout -->
        <section class="min-h-screen flex items-center px-8 lg:px-12 py-32 relative overflow-hidden pt-20">
            <div class="absolute inset-0 opacity-15">
                <div class="absolute top-0 right-0 w-96 h-96 rounded-full blur-3xl animate-pulse" style="background-color: {{ $color }};"></div>
                <div class="absolute bottom-0 left-0 w-80 h-80 rounded-full blur-3xl animate-pulse" style="background-color: {{ $color }}; animation-delay: 1s;"></div>
            </div>
            <div class="absolute inset-0 opacity-5" style="background-image: linear-gradient(var(--theme-color) 1px, transparent 1px), linear-gradient(90deg, var(--theme-color) 1px, transparent 1px); background-size: 50px 50px;"></div>
            <div class="max-w-7xl mx-auto w-full relative z-10">
                <div class="grid lg:grid-cols-2 gap-16 lg:gap-24 items-center">
                    <div class="space-y-10">
                        <div class="inline-flex items-center gap-3 px-8 py-4 rounded-2xl backdrop-blur-2xl border-2 border-white/40 shadow-2xl animate-fade-in" style="background-color: {{ $color }}40;">
                            <div class="w-2 h-2 rounded-full bg-white animate-pulse"></div>
                            <p id="preview-subheading" class="text-lg md:text-xl lg:text-2xl font-bold uppercase tracking-[0.3em] text-white">{{ $templateData['defaults']['subheading'] ?? 'Special Moment' }}</p>
                            <div class="w-2 h-2 rounded-full bg-white animate-pulse" style="animation-delay: 0.5s;"></div>
                        </div>
                        <h1 id="preview-heading" class="text-5xl md:text-7xl lg:text-8xl xl:text-9xl font-black text-gray-900 dark:text-white leading-[0.9] mb-8 animate-slide-up">
                            {{ $templateData['defaults']['heading'] ?? 'To My Beloved' }}
                        </h1>
                        <p id="preview-message" class="text-xl md:text-2xl lg:text-3xl text-gray-700 dark:text-[#cbd5e1] leading-relaxed mb-8 font-light">
                            {{ $templateData['defaults']['message'] ?? 'Your heartfelt message here' }}
                        </p>
                        <div class="flex items-center gap-6 group">
                            <div class="w-24 h-2.5 rounded-full transform group-hover:scale-x-110 transition-transform duration-500" style="background-color: {{ $color }};"></div>
                            <p id="preview-from" class="text-2xl md:text-3xl lg:text-4xl font-black transform group-hover:translate-x-2 transition-transform duration-300" style="color: {{ $color }};">{{ $templateData['defaults']['from'] ?? 'Your Name' }}</p>
                        </div>
                    </div>
                    <div class="relative animate-scale-in">
                        <div class="relative rounded-[2.5rem] overflow-hidden shadow-[0_40px_100px_rgba(0,0,0,0.4)] transform -rotate-3 border-4 border-white/70 group hover:rotate-0 transition-all duration-700">
                            <div class="w-full h-[500px] lg:h-[700px] bg-gradient-to-br from-gray-200 to-gray-300 dark:from-gray-700 dark:to-gray-800 flex items-center justify-center">
                                <div class="w-48 h-48 rounded-full flex items-center justify-center shadow-2xl transform group-hover:scale-110 transition-all duration-500" style="background-color: {{ $color }};">
                                    {!! getCategoryIcon($category) !!}
                                </div>
                            </div>
                        </div>
                        <div class="absolute -top-8 -right-8 w-28 h-28 rounded-3xl opacity-25 transform rotate-45 -z-10 blur-xl animate-pulse" style="background-color: {{ $color }};"></div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section 2: Section 1 -->
        <section class="bg-white/95 dark:bg-[#1e293b]/95 backdrop-blur-2xl py-40 px-12 relative overflow-hidden">
            <div class="absolute inset-0 opacity-5">
                <div class="absolute top-0 left-0 w-96 h-96 rounded-full blur-3xl" style="background-color: {{ $color }};"></div>
            </div>
            <div class="max-w-6xl mx-auto text-center relative z-10">
                <div class="inline-flex items-center gap-4 mb-8">
                    <div class="w-16 h-0.5" style="background-color: {{ $color }};"></div>
                    <span class="text-sm font-semibold uppercase tracking-widest" style="color: {{ $color }};">Chapter One</span>
                    <div class="w-16 h-0.5" style="background-color: {{ $color }};"></div>
                </div>
                <h2 id="section1-title" class="text-6xl md:text-7xl lg:text-8xl font-black mb-12 text-gray-900 dark:text-white leading-tight" style="color: {{ $color }};">{{ $templateData['defaults']['section1_title'] ?? 'Our Love' }}</h2>
                <p id="section1-content" class="text-3xl md:text-4xl lg:text-5xl text-gray-800 dark:text-[#e2e8f0] leading-relaxed font-light max-w-4xl mx-auto">
                    {{ $templateData['defaults']['section1_content'] ?? 'Every moment with you feels like a dream. Your love fills my heart with joy and happiness.' }}
                </p>
            </div>
        </section>

        <!-- Section 3: Section 2 -->
        <section class="bg-gradient-to-br {{ $bg }} py-40 px-12 relative overflow-hidden">
            <div class="absolute inset-0 opacity-10">
                <div class="absolute top-0 right-0 w-96 h-96 rounded-full blur-3xl animate-pulse" style="background-color: {{ $color }};"></div>
            </div>
            <div class="max-w-7xl mx-auto relative z-10">
                <div class="grid md:grid-cols-2 gap-20 items-center">
                    <div class="relative order-2 md:order-1">
                        <div class="aspect-square rounded-[2.5rem] overflow-hidden shadow-2xl relative group">
                            <div id="section2-placeholder" class="w-full h-full bg-gradient-to-br from-white/30 via-white/20 to-white/10 flex items-center justify-center border-2 border-white/30">
                                <svg class="w-28 h-28 text-white/60" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="order-1 md:order-2 space-y-8">
                        <div class="inline-flex items-center gap-3">
                            <div class="w-12 h-0.5 bg-white/50"></div>
                            <span class="text-sm font-semibold uppercase tracking-widest text-white/80">Chapter Two</span>
                            <div class="w-12 h-0.5 bg-white/50"></div>
                        </div>
                        <h2 id="section2-title" class="text-6xl md:text-7xl lg:text-8xl font-black mb-12 text-white leading-tight drop-shadow-2xl">{{ $templateData['defaults']['section2_title'] ?? 'Our First Day' }}</h2>
                        <p id="section2-content" class="text-3xl md:text-4xl text-white/95 leading-relaxed font-light">
                            {{ $templateData['defaults']['section2_content'] ?? 'The day we met changed everything. I knew from that moment that you were special.' }}
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section 4: Section 3 -->
        <section class="bg-white/95 dark:bg-[#1e293b]/95 backdrop-blur-2xl py-40 px-12 relative overflow-hidden">
            <div class="absolute inset-0 opacity-5">
                <div class="absolute top-0 right-0 w-96 h-96 rounded-full blur-3xl" style="background-color: {{ $color }};"></div>
            </div>
            <div class="max-w-7xl mx-auto text-center relative z-10">
                <div class="inline-flex items-center gap-4 mb-8">
                    <div class="w-16 h-0.5" style="background-color: {{ $color }};"></div>
                    <span class="text-sm font-semibold uppercase tracking-widest" style="color: {{ $color }};">Chapter Three</span>
                    <div class="w-16 h-0.5" style="background-color: {{ $color }};"></div>
                </div>
                <h2 id="section3-title" class="text-6xl md:text-7xl lg:text-8xl font-black mb-12 text-gray-900 dark:text-white leading-tight" style="color: {{ $color }};">{{ $templateData['defaults']['section3_title'] ?? 'Our Journey' }}</h2>
                <p id="section3-content" class="text-3xl md:text-4xl lg:text-5xl text-gray-800 dark:text-[#e2e8f0] leading-relaxed font-light max-w-4xl mx-auto mb-20">
                    {{ $templateData['defaults']['section3_content'] ?? 'Together we\'ve created countless beautiful memories. Each day with you is a new adventure.' }}
                </p>
                <div id="section3-images-container" class="grid md:grid-cols-3 gap-8 lg:gap-10">
                    @for($i = 1; $i <= 3; $i++)
                    <div class="aspect-square rounded-3xl overflow-hidden shadow-2xl relative group">
                        <div id="section3-placeholder{{ $i }}" class="w-full h-full bg-gradient-to-br from-gray-200 via-gray-100 to-gray-200 dark:from-gray-700 dark:via-gray-800 dark:to-gray-700 flex items-center justify-center border-2 border-gray-200 dark:border-gray-700">
                            <svg class="w-20 h-20 text-gray-400 dark:text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                </svg>
                        </div>
                    </div>
                    @endfor
                </div>
            </div>
        </section>

        <!-- Section 5: Section 4 -->
        <section class="bg-gradient-to-br {{ $bg }} py-40 px-12 relative overflow-hidden">
            <div class="absolute inset-0 opacity-10">
                <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-96 h-96 rounded-full blur-3xl animate-pulse" style="background-color: {{ $color }};"></div>
            </div>
            <div class="max-w-6xl mx-auto text-center relative z-10">
                <div class="inline-flex items-center gap-4 mb-8">
                    <div class="w-16 h-0.5 bg-white/50"></div>
                    <span class="text-sm font-semibold uppercase tracking-widest text-white/80">Chapter Four</span>
                    <div class="w-16 h-0.5 bg-white/50"></div>
                </div>
                <h2 id="section4-title" class="text-6xl md:text-7xl lg:text-8xl font-black mb-12 text-white leading-tight drop-shadow-2xl">{{ $templateData['defaults']['section4_title'] ?? 'Our Promise' }}</h2>
                <p id="section4-content" class="text-3xl md:text-4xl lg:text-5xl text-white/95 leading-relaxed font-light max-w-4xl mx-auto">
                    {{ $templateData['defaults']['section4_content'] ?? 'I promise to stand by you, support you, and love you through all of life\'s adventures.' }}
                </p>
            </div>
        </section>

        <!-- Section 6: Section 5 -->
        <section class="bg-white/95 dark:bg-[#1e293b]/95 backdrop-blur-2xl py-40 px-12 relative overflow-hidden">
            <div class="absolute inset-0 opacity-5">
                <div class="absolute top-0 right-0 w-96 h-96 rounded-full blur-3xl" style="background-color: {{ $color }};"></div>
            </div>
            <div class="max-w-6xl mx-auto text-center relative z-10">
                <div class="inline-flex items-center gap-4 mb-8">
                    <div class="w-16 h-0.5" style="background-color: {{ $color }};"></div>
                    <span class="text-sm font-semibold uppercase tracking-widest" style="color: {{ $color }};">Chapter Five</span>
                    <div class="w-16 h-0.5" style="background-color: {{ $color }};"></div>
        </div>
                <h2 id="section5-title" class="text-6xl md:text-7xl lg:text-8xl font-black mb-12 text-gray-900 dark:text-white leading-tight" style="color: {{ $color }};">{{ $templateData['defaults']['section5_title'] ?? 'Forever' }}</h2>
                <p id="section5-content" class="text-3xl md:text-4xl lg:text-5xl text-gray-800 dark:text-[#e2e8f0] leading-relaxed font-light max-w-4xl mx-auto">
                    {{ $templateData['defaults']['section5_content'] ?? 'Today, tomorrow, and forever - I choose you. You are my everything.' }}
        </p>
            </div>
        </section>

        <!-- Section 7: Memories Gallery -->
        <section class="bg-gradient-to-br {{ $bg }} py-40 px-12 relative overflow-hidden">
            <div class="absolute inset-0 opacity-10">
                <div class="absolute top-0 right-0 w-96 h-96 rounded-full blur-3xl" style="background-color: {{ $color }};"></div>
                <div class="absolute bottom-0 left-0 w-96 h-96 rounded-full blur-3xl" style="background-color: {{ $color }};"></div>
            </div>
            <div class="max-w-7xl mx-auto relative z-10">
                <div class="text-center mb-20">
                    <div class="inline-flex items-center gap-4 mb-6">
                        <div class="w-16 h-0.5 bg-white/50"></div>
                        <span class="text-sm font-semibold uppercase tracking-widest text-white/80">Gallery</span>
                        <div class="w-16 h-0.5 bg-white/50"></div>
                    </div>
                    <h2 class="text-6xl md:text-7xl lg:text-8xl font-black text-center mb-8 text-white drop-shadow-2xl">Memories</h2>
                    <p class="text-lg text-white/80 max-w-2xl mx-auto">A collection of moments that tell our story</p>
                </div>
                <div id="memories-section" class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                    <div class="aspect-square bg-white/20 backdrop-blur-sm rounded-3xl flex items-center justify-center border-2 border-dashed border-white/30 hover:border-white/60 transition-all duration-300 hover:shadow-xl group">
                        <p class="text-white/70 group-hover:text-white text-sm text-center px-4 transition-colors duration-300">Add memories</p>
                    </div>
                </div>
            </div>
        </section>
    </div>

@else
    {{-- Default Design: Simple Fallback --}}
    <div class="space-y-6">
        <div class="text-center">
            <h2 id="preview-heading" class="text-4xl font-black text-gray-900 dark:text-white mb-3">{{ $templateData['defaults']['heading'] ?? 'To My Beloved' }}</h2>
            <p id="preview-subheading" class="text-xl text-gray-700 dark:text-[#cbd5e1] mb-6">{{ $templateData['defaults']['subheading'] ?? 'Special Moment' }}</p>
        </div>
        <div class="my-8 flex justify-center">
            <div class="w-24 h-24 rounded-full mx-auto flex items-center justify-center shadow-lg" style="background-color: {{ $color }};">
                {!! getCategoryIcon($category) !!}
            </div>
        </div>
        <p id="preview-message" class="text-lg text-gray-700 dark:text-[#cbd5e1] leading-relaxed max-w-md mx-auto text-center">
            {{ $templateData['defaults']['message'] ?? 'Your heartfelt message here' }}
        </p>
        <p id="preview-from" class="text-base font-semibold text-gray-900 dark:text-white mt-6 text-center">{{ $templateData['defaults']['from'] ?? 'Your Name' }}</p>
    </div>
@endif

<style>
/* Premium Animations */
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

.animate-float {
    animation: float 6s ease-in-out infinite;
}

/* Smooth transitions */
section {
    transition: all 0.3s ease;
}

img {
    transition: opacity 0.5s ease, transform 0.8s cubic-bezier(0.4, 0, 0.2, 1);
}

.group:hover img {
    transform: scale(1.1);
}

/* Better typography */
h1, h2, h3 {
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    letter-spacing: -0.02em;
}
</style>
