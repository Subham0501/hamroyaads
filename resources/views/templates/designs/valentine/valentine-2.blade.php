{{-- valentine Template 2: Unique Design --}}
@php
$color = $color ?? $templateData['color'];
$bg = $bg ?? $templateData['bg'];
$category = $category ?? $templateData['category'] ?? 'valentine';
$categoryImages = $categoryImages ?? [];
@endphp

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