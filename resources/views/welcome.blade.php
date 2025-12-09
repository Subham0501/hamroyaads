@extends('layouts.app')

@section('content')
    <!-- Navigation -->
    <nav class="fixed top-0 w-full bg-white/95 dark:bg-[#0f172a]/95 backdrop-blur-xl z-50 border-b border-gray-200 dark:border-[#334155] shadow-sm dark:shadow-[#1e293b]/50">
        <div class="w-full px-5 sm:px-6 lg:px-8 xl:px-12">
            <div class="flex justify-between items-center h-20">
                <!-- Logo - Left Aligned -->
                <div class="flex items-center flex-shrink-0">
                    <a href="/" class="text-2xl md:text-3xl font-extrabold tracking-tight hover:opacity-80 transition-opacity">
                        <span class="text-[#ff6b6b]">Hamro</span>
                        <span class="text-[#4ecdc4]">Yaad</span>
                    </a>
                </div>
                
                <!-- Navigation Links - Right Aligned -->
                <div class="hidden md:flex items-center space-x-6 lg:space-x-8">
                    <a href="#categories" class="text-gray-600 dark:text-[#cbd5e1] hover:text-gray-900 dark:hover:text-white transition-colors text-[15px] font-medium tracking-wide relative group py-2">
                        Categories
                        <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-[#ff6b6b] group-hover:w-full transition-all duration-300"></span>
                    </a>
                    <a href="#shopping" class="text-gray-600 dark:text-[#cbd5e1] hover:text-gray-900 dark:hover:text-white transition-colors text-[15px] font-medium tracking-wide relative group py-2">
                        Shop
                        <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-[#ff6b6b] group-hover:w-full transition-all duration-300"></span>
                    </a>
                    <a href="#how-to-use" class="text-gray-600 dark:text-[#cbd5e1] hover:text-gray-900 dark:hover:text-white transition-colors text-[15px] font-medium tracking-wide relative group py-2">
                        How It Works
                        <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-[#ff6b6b] group-hover:w-full transition-all duration-300"></span>
                    </a>
                    <a href="#gallery" class="text-gray-600 dark:text-[#cbd5e1] hover:text-gray-900 dark:hover:text-white transition-colors text-[15px] font-medium tracking-wide relative group py-2">
                        Gallery
                        <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-[#ff6b6b] group-hover:w-full transition-all duration-300"></span>
                    </a>
                    <button id="theme-toggle" class="p-2 rounded-lg bg-gray-100 dark:bg-[#1e293b] text-gray-700 dark:text-[#cbd5e1] hover:bg-gray-200 dark:hover:bg-[#334155] transition-all ml-2">
                        <svg class="w-5 h-5 dark:hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"></path>
                        </svg>
                        <svg class="w-5 h-5 hidden dark:block" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"></path>
                        </svg>
                    </button>
                    <a href="{{ route('register') }}" class="bg-gradient-to-r from-[#ff6b6b] to-[#ff5252] text-white px-6 py-2.5 rounded-lg hover:shadow-lg hover:shadow-[#ff6b6b]/30 transition-all text-[15px] font-semibold tracking-wide ml-2">
                        Get Started
                    </a>
                </div>
                
                <!-- Mobile Menu Button -->
                <button class="md:hidden text-gray-600 dark:text-[#cbd5e1] p-2">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="relative min-h-screen flex items-center justify-center overflow-hidden pt-20 bg-gradient-to-b from-white to-gray-50 dark:from-[#0f172a] dark:to-[#1e293b]">
        <!-- Background Image with Light Blur -->
        <div class="absolute inset-0">
            <div class="absolute inset-0 bg-[url('https://images.unsplash.com/photo-1511795409834-ef04bbd61622?w=1920&q=80')] bg-cover bg-center opacity-40 dark:opacity-25"></div>
            <div class="absolute inset-0 backdrop-blur-[2px] bg-white/30 dark:bg-[#0f172a]/30"></div>
        </div>
        
        <!-- Gradient Overlay -->
        <div class="absolute inset-0" style="background-image: radial-gradient(circle at 20% 50%, rgba(255, 107, 107, 0.08) 0%, transparent 50%), radial-gradient(circle at 80% 80%, rgba(78, 205, 196, 0.08) 0%, transparent 50%);"></div>
        
        <div class="relative z-10 max-w-7xl mx-auto px-5 sm:px-8 lg:px-12">
            <div class="text-center space-y-10">
                <div class="inline-block mb-4">
                    <span class="px-4 py-1.5 bg-[#ff6b6b]/10 dark:bg-[#ff6b6b]/20 border border-[#ff6b6b]/30 dark:border-[#ff6b6b]/40 rounded-full text-[#ff6b6b] text-sm font-semibold tracking-wide backdrop-blur-sm">
                        ✨ Create & Share Your Love
                    </span>
                </div>
                <h1 class="text-6xl md:text-8xl lg:text-9xl font-black leading-[1.1] tracking-tight">
                    <span class="block text-gray-900 dark:text-white mb-2">Custom Gift</span>
                    <span class="block">
                        <span class="text-[#ff6b6b]">Websites</span>
                        <span class="text-gray-900 dark:text-white"> That</span>
                    </span>
                    <span class="block text-[#4ecdc4]">Touch Hearts</span>
                </h1>
                <p class="text-xl md:text-2xl text-gray-600 dark:text-[#cbd5e1] max-w-2xl mx-auto leading-relaxed font-light">
                    Personalize stunning templates for any occasion. Add your story, images, and share with a custom domain. Print QR codes on hoodies, photos, or gift items.
                </p>
                <div class="flex flex-col sm:flex-row gap-5 justify-center items-center pt-4">
                    <a href="#categories" class="group bg-gradient-to-r from-[#ff6b6b] to-[#ff5252] text-white px-10 py-4 rounded-xl text-lg font-bold tracking-wide hover:shadow-2xl hover:shadow-[#ff6b6b]/40 transition-all hover:-translate-y-0.5">
                        Explore Templates
                        <span class="inline-block ml-2 group-hover:translate-x-1 transition-transform">→</span>
                    </a>
                    <a href="#how-to-use" class="bg-white/80 dark:bg-[#1e293b]/80 backdrop-blur-sm border-2 border-gray-300 dark:border-[#334155] text-gray-900 dark:text-white px-10 py-4 rounded-xl text-lg font-bold tracking-wide hover:border-gray-400 dark:hover:border-[#475569] hover:bg-white dark:hover:bg-[#1e293b] transition-all">
                        Learn How
                    </a>
                </div>
            </div>
        </div>

        <!-- Decorative elements -->
        <div class="absolute top-32 left-16 w-2 h-2 bg-[#ff6b6b] rounded-full opacity-60 animate-pulse"></div>
        <div class="absolute bottom-40 right-24 w-3 h-3 bg-[#4ecdc4] rounded-full opacity-60 animate-pulse" style="animation-delay: 1s;"></div>
        <div class="absolute top-1/2 right-20 w-1 h-1 bg-[#ff6b6b] rounded-full opacity-40"></div>
    </section>

    <!-- Categories Section -->
    <section id="categories" class="py-32 bg-white dark:bg-[#0f172a]">
        <div class="max-w-7xl mx-auto px-5 sm:px-8 lg:px-12">
            <div class="text-center mb-20">
                <div class="inline-block mb-5">
                    <span class="text-[#ff6b6b] text-sm font-bold tracking-widest uppercase">Categories</span>
                </div>
                <h2 class="text-5xl md:text-7xl font-black mb-6 tracking-tight">
                    <span class="text-gray-900 dark:text-white">Choose Your</span>
                    <span class="block text-[#4ecdc4]">Occasion</span>
                </h2>
                <p class="text-gray-600 dark:text-[#cbd5e1] text-lg max-w-xl mx-auto">Select a category and craft your perfect gift website</p>
            </div>

            <!-- Category Cards -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-16">
                <!-- Marriage -->
                <div class="group relative overflow-hidden rounded-2xl bg-white dark:bg-[#1e293b] border border-gray-200 dark:border-[#334155] hover:border-[#ff6b6b]/50 transition-all duration-500 cursor-pointer hover:-translate-y-1 shadow-sm hover:shadow-xl">
                    <div class="absolute inset-0 bg-gradient-to-br from-[#ff6b6b]/5 to-transparent opacity-0 group-hover:opacity-100 transition-opacity"></div>
                    <div class="relative p-6">
                        <div class="w-14 h-14 bg-[#ff6b6b]/10 dark:bg-[#ff6b6b]/20 rounded-xl flex items-center justify-center mb-4 group-hover:bg-[#ff6b6b]/20 dark:group-hover:bg-[#ff6b6b]/30 transition-colors">
                            <svg class="w-7 h-7 text-[#ff6b6b]" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-black mb-2 text-gray-900 dark:text-white tracking-tight">Marriage</h3>
                        <p class="text-gray-600 dark:text-[#cbd5e1] mb-4 text-sm leading-relaxed">Beautiful wedding gift templates</p>
                        <a href="#marriage-templates" class="text-[#ff6b6b] font-bold hover:text-[#ff5252] flex items-center text-sm tracking-wide group-hover:gap-2 transition-all">
                            View Templates
                            <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Birthday -->
                <div class="group relative overflow-hidden rounded-2xl bg-white dark:bg-[#1e293b] border border-gray-200 dark:border-[#334155] hover:border-[#ffd93d]/50 transition-all duration-500 cursor-pointer hover:-translate-y-1 shadow-sm hover:shadow-xl">
                    <div class="absolute inset-0 bg-gradient-to-br from-[#ffd93d]/5 to-transparent opacity-0 group-hover:opacity-100 transition-opacity"></div>
                    <div class="relative p-6">
                        <div class="w-14 h-14 bg-[#ffd93d]/10 dark:bg-[#ffd93d]/20 rounded-xl flex items-center justify-center mb-4 group-hover:bg-[#ffd93d]/20 dark:group-hover:bg-[#ffd93d]/30 transition-colors">
                            <svg class="w-7 h-7 text-[#ffd93d]" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v13m0-13V6a2 2 0 112 2h-2zm0 0V5.5A2.5 2.5 0 109.5 8H12zm-7 4h14M5 12a2 2 0 110-4h14a2 2 0 110 4M5 12v7a2 2 0 002 2h10a2 2 0 002-2v-7"></path>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-black mb-2 text-gray-900 dark:text-white tracking-tight">Birthday</h3>
                        <p class="text-gray-600 dark:text-[#cbd5e1] mb-4 text-sm leading-relaxed">Make birthdays unforgettable</p>
                        <a href="#birthday-templates" class="text-[#ffd93d] font-bold hover:text-[#ffd700] flex items-center text-sm tracking-wide group-hover:gap-2 transition-all">
                            View Templates
                            <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Father's Day -->
                <div class="group relative overflow-hidden rounded-2xl bg-white dark:bg-[#1e293b] border border-gray-200 dark:border-[#334155] hover:border-[#4ecdc4]/50 transition-all duration-500 cursor-pointer hover:-translate-y-1 shadow-sm hover:shadow-xl">
                    <div class="absolute inset-0 bg-gradient-to-br from-[#4ecdc4]/5 to-transparent opacity-0 group-hover:opacity-100 transition-opacity"></div>
                    <div class="relative p-6">
                        <div class="w-14 h-14 bg-[#4ecdc4]/10 dark:bg-[#4ecdc4]/20 rounded-xl flex items-center justify-center mb-4 group-hover:bg-[#4ecdc4]/20 dark:group-hover:bg-[#4ecdc4]/30 transition-colors">
                            <svg class="w-7 h-7 text-[#4ecdc4]" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-black mb-2 text-gray-900 dark:text-white tracking-tight">Father's Day</h3>
                        <p class="text-gray-600 dark:text-[#cbd5e1] mb-4 text-sm leading-relaxed">Show dad how much you care</p>
                        <a href="#fathersday-templates" class="text-[#4ecdc4] font-bold hover:text-[#45b8b0] flex items-center text-sm tracking-wide group-hover:gap-2 transition-all">
                            View Templates
                            <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Mother's Day -->
                <div class="group relative overflow-hidden rounded-2xl bg-white dark:bg-[#1e293b] border border-gray-200 dark:border-[#334155] hover:border-[#ff8fab]/50 transition-all duration-500 cursor-pointer hover:-translate-y-1 shadow-sm hover:shadow-xl">
                    <div class="absolute inset-0 bg-gradient-to-br from-[#ff8fab]/5 to-transparent opacity-0 group-hover:opacity-100 transition-opacity"></div>
                    <div class="relative p-6">
                        <div class="w-14 h-14 bg-[#ff8fab]/10 dark:bg-[#ff8fab]/20 rounded-xl flex items-center justify-center mb-4 group-hover:bg-[#ff8fab]/20 dark:group-hover:bg-[#ff8fab]/30 transition-colors">
                            <svg class="w-7 h-7 text-[#ff8fab]" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-black mb-2 text-gray-900 dark:text-white tracking-tight">Mother's Day</h3>
                        <p class="text-gray-600 dark:text-[#cbd5e1] mb-4 text-sm leading-relaxed">Express your love for mom</p>
                        <a href="#mothersday-templates" class="text-[#ff8fab] font-bold hover:text-[#ff7a9b] flex items-center text-sm tracking-wide group-hover:gap-2 transition-all">
                            View Templates
                            <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Valentine's Day -->
                <div class="group relative overflow-hidden rounded-2xl bg-white dark:bg-[#1e293b] border border-gray-200 dark:border-[#334155] hover:border-[#ff6b6b]/50 transition-all duration-500 cursor-pointer hover:-translate-y-1 shadow-sm hover:shadow-xl">
                    <div class="absolute inset-0 bg-gradient-to-br from-[#ff6b6b]/5 to-transparent opacity-0 group-hover:opacity-100 transition-opacity"></div>
                    <div class="relative p-6">
                        <div class="w-14 h-14 bg-[#ff6b6b]/10 dark:bg-[#ff6b6b]/20 rounded-xl flex items-center justify-center mb-4 group-hover:bg-[#ff6b6b]/20 dark:group-hover:bg-[#ff6b6b]/30 transition-colors">
                            <svg class="w-7 h-7 text-[#ff6b6b]" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-black mb-2 text-gray-900 dark:text-white tracking-tight">Valentine's Day</h3>
                        <p class="text-gray-600 dark:text-[#cbd5e1] mb-4 text-sm leading-relaxed">Create the perfect romantic gift</p>
                        <a href="#valentine-templates" class="text-[#ff6b6b] font-bold hover:text-[#ff5252] flex items-center text-sm tracking-wide group-hover:gap-2 transition-all">
                            View Templates
                            <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Custom Occasion -->
                <div class="group relative overflow-hidden rounded-2xl bg-white dark:bg-[#1e293b] border border-gray-200 dark:border-[#334155] hover:border-[#a78bfa]/50 transition-all duration-500 cursor-pointer hover:-translate-y-1 shadow-sm hover:shadow-xl">
                    <div class="absolute inset-0 bg-gradient-to-br from-[#a78bfa]/5 to-transparent opacity-0 group-hover:opacity-100 transition-opacity"></div>
                    <div class="relative p-6">
                        <div class="w-14 h-14 bg-[#a78bfa]/10 dark:bg-[#a78bfa]/20 rounded-xl flex items-center justify-center mb-4 group-hover:bg-[#a78bfa]/20 dark:group-hover:bg-[#a78bfa]/30 transition-colors">
                            <svg class="w-7 h-7 text-[#a78bfa]" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-black mb-2 text-gray-900 dark:text-white tracking-tight">Custom Occasion</h3>
                        <p class="text-gray-600 dark:text-[#cbd5e1] mb-4 text-sm leading-relaxed">Create a unique gift website</p>
                        <a href="#custom-templates" class="text-[#a78bfa] font-bold hover:text-[#8b5cf6] flex items-center text-sm tracking-wide group-hover:gap-2 transition-all">
                            View Templates
                            <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Marriage Templates -->
            <div id="marriage-templates" class="mt-20 scroll-mt-20">
                <h3 class="text-3xl font-black mb-8 text-gray-900 dark:text-white">Marriage Templates</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                    @php
                    $marriageTemplates = [
                        ['id' => 'marriage-1', 'name' => 'Romantic Elegance', 'desc' => 'Elegant design for your special day', 'icon' => 'heart'],
                        ['id' => 'marriage-2', 'name' => 'Classic Romance', 'desc' => 'Timeless romantic design', 'icon' => 'heart'],
                        ['id' => 'marriage-3', 'name' => 'Modern Love', 'desc' => 'Contemporary wedding style', 'icon' => 'heart'],
                        ['id' => 'marriage-4', 'name' => 'Timeless Bond', 'desc' => 'Classic and elegant', 'icon' => 'heart'],
                    ];
                    @endphp
                    @foreach($marriageTemplates as $tmpl)
                        @include('templates._preview-card', ['tmpl' => $tmpl, 'templates' => $templates])
                    @endforeach
                </div>
            </div>

            <!-- Father's Day Templates -->
            <div id="fathersday-templates" class="mt-20 scroll-mt-20">
                <h3 class="text-3xl font-black mb-8 text-gray-900 dark:text-white">Father's Day Templates</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                    @php
                    $fathersdayTemplates = [
                        ['id' => 'fathersday-1', 'name' => 'Classic Appreciation', 'desc' => 'Show dad your gratitude', 'icon' => 'person'],
                        ['id' => 'fathersday-2', 'name' => 'Hero Tribute', 'desc' => 'Celebrate your hero', 'icon' => 'person'],
                        ['id' => 'fathersday-3', 'name' => 'Heartfelt Thanks', 'desc' => 'Express your love', 'icon' => 'person'],
                        ['id' => 'fathersday-4', 'name' => 'Modern Tribute', 'desc' => 'Contemporary design', 'icon' => 'person'],
                    ];
                    @endphp
                    @foreach($fathersdayTemplates as $tmpl)
                        @include('templates._preview-card', ['tmpl' => $tmpl, 'templates' => $templates])
                    @endforeach
                </div>
            </div>

            <!-- Birthday Templates -->
            <div id="birthday-templates" class="mt-20 scroll-mt-20">
                <h3 class="text-3xl font-black mb-8 text-gray-900 dark:text-white">Birthday Templates</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                    @php
                    $birthdayTemplates = [
                        ['id' => 'birthday-1', 'name' => 'Celebration Joy', 'desc' => 'Make it special', 'icon' => 'gift'],
                        ['id' => 'birthday-2', 'name' => 'Party Time', 'desc' => 'Fun and festive', 'icon' => 'gift'],
                        ['id' => 'birthday-3', 'name' => 'Elegant Wishes', 'desc' => 'Sophisticated design', 'icon' => 'gift'],
                        ['id' => 'birthday-4', 'name' => 'Fun Celebration', 'desc' => 'Joyful and bright', 'icon' => 'gift'],
                    ];
                    @endphp
                    @foreach($birthdayTemplates as $tmpl)
                        @include('templates._preview-card', ['tmpl' => $tmpl, 'templates' => $templates])
                    @endforeach
                </div>
            </div>

            <!-- Valentine's Day Templates -->
            <div id="valentine-templates" class="mt-20 scroll-mt-20">
                <h3 class="text-3xl font-black mb-8 text-gray-900 dark:text-white">Valentine's Day Templates</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                    @php
                    $valentineTemplates = [
                        ['id' => 'valentine-1', 'name' => 'Romantic Love', 'desc' => 'Express your feelings', 'icon' => 'heart'],
                        ['id' => 'valentine-2', 'name' => 'Sweet Affection', 'desc' => 'Sweet and tender', 'icon' => 'heart'],
                        ['id' => 'valentine-3', 'name' => 'Passionate Heart', 'desc' => 'Deep and passionate', 'icon' => 'heart'],
                        ['id' => 'valentine-4', 'name' => 'Timeless Romance', 'desc' => 'Classic romantic', 'icon' => 'heart'],
                    ];
                    @endphp
                    @foreach($valentineTemplates as $tmpl)
                        @include('templates._preview-card', ['tmpl' => $tmpl, 'templates' => $templates])
                    @endforeach
                </div>
            </div>

            <!-- Mother's Day Templates -->
            <div id="mothersday-templates" class="mt-20 scroll-mt-20">
                <h3 class="text-3xl font-black mb-8 text-gray-900 dark:text-white">Mother's Day Templates</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                    @php
                    $mothersdayTemplates = [
                        ['id' => 'mothersday-1', 'name' => 'Grateful Heart', 'desc' => 'Show your appreciation', 'icon' => 'heart'],
                        ['id' => 'mothersday-2', 'name' => 'Angel Tribute', 'desc' => 'Celebrate your angel', 'icon' => 'heart'],
                        ['id' => 'mothersday-3', 'name' => 'Heartfelt Thanks', 'desc' => 'Express your gratitude', 'icon' => 'heart'],
                        ['id' => 'mothersday-4', 'name' => 'Beautiful Bond', 'desc' => 'Honor your bond', 'icon' => 'heart'],
                    ];
                    @endphp
                    @foreach($mothersdayTemplates as $tmpl)
                        @include('templates._preview-card', ['tmpl' => $tmpl, 'templates' => $templates])
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <!-- Shopping Section -->
    <section id="shopping" class="py-32 bg-gray-50 dark:bg-[#1e293b]">
        <div class="max-w-7xl mx-auto px-5 sm:px-8 lg:px-12">
            <div class="text-center mb-20">
                <div class="inline-block mb-5">
                    <span class="text-[#4ecdc4] text-sm font-bold tracking-widest uppercase">Shop</span>
                </div>
                <h2 class="text-5xl md:text-7xl font-black mb-6 tracking-tight">
                    <span class="text-gray-900 dark:text-white">Physical</span>
                    <span class="block text-[#ff6b6b]">Products</span>
                </h2>
                <p class="text-gray-600 dark:text-[#cbd5e1] text-lg max-w-xl mx-auto">Get your QR code printed on premium products</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Hoodies -->
                <div class="group relative overflow-hidden rounded-2xl bg-white dark:bg-[#1e293b] border border-gray-200 dark:border-[#334155] hover:border-[#ff6b6b]/50 transition-all duration-500 hover:-translate-y-1 shadow-sm hover:shadow-xl">
                    <div class="aspect-square relative overflow-hidden bg-gradient-to-br from-gray-100 to-gray-200 dark:from-gray-800 dark:to-gray-900">
                        <img src="https://images.unsplash.com/photo-1556821840-3a63f95609a7?w=600&q=80" alt="Hoodie" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent"></div>
                    </div>
                    <div class="p-7">
                        <h3 class="text-2xl font-black mb-3 text-gray-900 dark:text-white tracking-tight">Hoodies</h3>
                        <p class="text-gray-600 dark:text-[#cbd5e1] mb-6 leading-relaxed">Premium quality hoodies with your custom QR code</p>
                        <div class="flex items-center justify-between">
                            <span class="text-3xl font-black text-[#ff6b6b]">$49.99</span>
                            <button class="bg-[#ff6b6b] text-white px-6 py-2.5 rounded-lg hover:bg-[#ff5252] transition-all font-bold text-sm tracking-wide shadow-lg shadow-[#ff6b6b]/20">
                                Shop Now
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Photos -->
                <div class="group relative overflow-hidden rounded-2xl bg-white dark:bg-[#1e293b] border border-gray-200 dark:border-[#334155] hover:border-[#4ecdc4]/50 transition-all duration-500 hover:-translate-y-1 shadow-sm hover:shadow-xl">
                    <div class="aspect-square relative overflow-hidden bg-gradient-to-br from-blue-100 to-cyan-200 dark:from-blue-900/30 dark:to-cyan-900/30">
                        <img src="https://images.unsplash.com/photo-1513475382585-d06e58bcb0e0?w=600&q=80" alt="Photo Prints" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent"></div>
                    </div>
                    <div class="p-7">
                        <h3 class="text-2xl font-black mb-3 text-gray-900 dark:text-white tracking-tight">Photo Prints</h3>
                        <p class="text-gray-600 dark:text-[#cbd5e1] mb-6 leading-relaxed">High-quality photo prints with embedded QR codes</p>
                        <div class="flex items-center justify-between">
                            <span class="text-3xl font-black text-[#4ecdc4]">$19.99</span>
                            <button class="bg-[#4ecdc4] text-white px-6 py-2.5 rounded-lg hover:bg-[#45b8b0] transition-all font-bold text-sm tracking-wide shadow-lg shadow-[#4ecdc4]/20">
                                Shop Now
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Gift Items -->
                <div class="group relative overflow-hidden rounded-2xl bg-white dark:bg-[#1e293b] border border-gray-200 dark:border-[#334155] hover:border-[#ffd93d]/50 transition-all duration-500 hover:-translate-y-1 shadow-sm hover:shadow-xl">
                    <div class="aspect-square relative overflow-hidden bg-gradient-to-br from-yellow-100 to-orange-200 dark:from-yellow-900/30 dark:to-orange-900/30">
                        <img src="https://images.unsplash.com/photo-1607082349566-187342175e2f?w=600&q=80" alt="Gift Box" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent"></div>
                    </div>
                    <div class="p-7">
                        <h3 class="text-2xl font-black mb-3 text-gray-900 dark:text-white tracking-tight">Gift Items</h3>
                        <p class="text-gray-600 dark:text-[#cbd5e1] mb-6 leading-relaxed">Curated gift boxes with QR code accessories</p>
                        <div class="flex items-center justify-between">
                            <span class="text-3xl font-black text-[#ffd93d]">$39.99</span>
                            <button class="bg-[#ffd93d] text-gray-900 dark:text-[#0f172a] px-6 py-2.5 rounded-lg hover:bg-[#ffd700] transition-all font-bold text-sm tracking-wide shadow-lg shadow-[#ffd93d]/20">
                                Shop Now
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- How to Use Section -->
    <section id="how-to-use" class="py-32 bg-white dark:bg-[#0f172a]">
        <div class="max-w-7xl mx-auto px-5 sm:px-8 lg:px-12">
            <div class="text-center mb-20">
                <div class="inline-block mb-5">
                    <span class="text-[#ff6b6b] text-sm font-bold tracking-widest uppercase">Process</span>
                </div>
                <h2 class="text-5xl md:text-7xl font-black mb-6 tracking-tight">
                    <span class="text-gray-900 dark:text-white">How It</span>
                    <span class="block text-[#4ecdc4]">Works</span>
                </h2>
                <p class="text-gray-600 dark:text-[#cbd5e1] text-lg max-w-xl mx-auto">Create and share your gift website in just a few simple steps</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mb-16">
                <!-- Step 1 -->
                <div class="text-center group">
                    <div class="w-24 h-24 bg-[#ff6b6b]/10 dark:bg-[#ff6b6b]/20 rounded-2xl flex items-center justify-center mx-auto mb-6 text-4xl font-black text-[#ff6b6b] group-hover:bg-[#ff6b6b]/20 dark:group-hover:bg-[#ff6b6b]/30 transition-colors border-2 border-[#ff6b6b]/20 dark:border-[#ff6b6b]/30">
                        1
                    </div>
                    <h3 class="text-xl font-black mb-3 text-gray-900 dark:text-white tracking-tight">Choose Template</h3>
                    <p class="text-gray-600 dark:text-[#cbd5e1] leading-relaxed">Browse our collection and select a template that matches your occasion</p>
                </div>

                <!-- Step 2 -->
                <div class="text-center group">
                    <div class="w-24 h-24 bg-[#4ecdc4]/10 dark:bg-[#4ecdc4]/20 rounded-2xl flex items-center justify-center mx-auto mb-6 text-4xl font-black text-[#4ecdc4] group-hover:bg-[#4ecdc4]/20 dark:group-hover:bg-[#4ecdc4]/30 transition-colors border-2 border-[#4ecdc4]/20 dark:border-[#4ecdc4]/30">
                        2
                    </div>
                    <h3 class="text-xl font-black mb-3 text-gray-900 dark:text-white tracking-tight">Customize</h3>
                    <p class="text-gray-600 dark:text-[#cbd5e1] leading-relaxed">Add your text, upload images, and personalize every detail</p>
                </div>

                <!-- Step 3 -->
                <div class="text-center group">
                    <div class="w-24 h-24 bg-[#ffd93d]/10 dark:bg-[#ffd93d]/20 rounded-2xl flex items-center justify-center mx-auto mb-6 text-4xl font-black text-[#ffd93d] group-hover:bg-[#ffd93d]/20 dark:group-hover:bg-[#ffd93d]/30 transition-colors border-2 border-[#ffd93d]/20 dark:border-[#ffd93d]/30">
                        3
                    </div>
                    <h3 class="text-xl font-black mb-3 text-gray-900 dark:text-white tracking-tight">Get Your URL</h3>
                    <p class="text-gray-600 dark:text-[#cbd5e1] leading-relaxed">Receive your custom domain like hamroyaad.com/username</p>
                </div>

                <!-- Step 4 -->
                <div class="text-center group">
                    <div class="w-24 h-24 bg-[#ff8fab]/10 dark:bg-[#ff8fab]/20 rounded-2xl flex items-center justify-center mx-auto mb-6 text-4xl font-black text-[#ff8fab] group-hover:bg-[#ff8fab]/20 dark:group-hover:bg-[#ff8fab]/30 transition-colors border-2 border-[#ff8fab]/20 dark:border-[#ff8fab]/30">
                        4
                    </div>
                    <h3 class="text-xl font-black mb-3 text-gray-900 dark:text-white tracking-tight">Share & Print</h3>
                    <p class="text-gray-600 dark:text-[#cbd5e1] leading-relaxed">Generate QR code and print on hoodies, t-shirts, or gift items</p>
                </div>
            </div>

            <div class="text-center">
                <a href="{{ route('register') }}" class="inline-block bg-[#ff6b6b] text-white px-10 py-4 rounded-xl text-lg font-black tracking-wide hover:bg-[#ff5252] transition-all shadow-2xl shadow-[#ff6b6b]/30 hover:shadow-[#ff6b6b]/40 hover:-translate-y-0.5">
                    Start Creating Now
                </a>
            </div>
        </div>
    </section>

    <!-- Instagram/TikTok Shots Section -->
    <section id="gallery" class="py-32 bg-gray-50 dark:bg-[#1e293b]">
        <div class="max-w-7xl mx-auto px-5 sm:px-8 lg:px-12">
            <div class="text-center mb-20">
                <div class="inline-block mb-5">
                    <span class="text-[#4ecdc4] text-sm font-bold tracking-widest uppercase">Gallery</span>
                </div>
                <h2 class="text-5xl md:text-7xl font-black mb-6 tracking-tight">
                    <span class="text-gray-900 dark:text-white">See It In</span>
                    <span class="block text-[#ff6b6b]">Action</span>
                </h2>
                <p class="text-gray-600 dark:text-[#cbd5e1] text-lg max-w-xl mx-auto">Check out how our users are sharing their love</p>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-3">
                <!-- Placeholder for Instagram/TikTok shots -->
                @for($i = 1; $i <= 8; $i++)
                <div class="group relative aspect-square overflow-hidden rounded-xl bg-white dark:bg-[#1e293b] border border-gray-200 dark:border-[#334155] hover:border-[#ff6b6b]/50 transition-all cursor-pointer hover:-translate-y-1 shadow-sm hover:shadow-lg">
                    <div class="absolute inset-0 bg-gradient-to-br from-pink-200/50 to-purple-200/50 dark:from-pink-900/20 dark:to-purple-900/20 flex items-center justify-center">
                        <div class="text-center">
                            <svg class="w-10 h-10 mx-auto text-gray-400 dark:text-gray-600 group-hover:text-[#ff6b6b] transition-colors mb-2" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"></path>
                            </svg>
                            <p class="text-xs text-gray-500 dark:text-gray-400 group-hover:text-gray-700 dark:group-hover:text-gray-300">Instagram</p>
                        </div>
                    </div>
                </div>
                @endfor
            </div>

            <div class="mt-16 text-center">
                <a href="#" class="inline-flex items-center text-[#4ecdc4] hover:text-[#45b8b0] font-bold text-sm tracking-wide">
                    Follow us on Instagram
                    <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"></path>
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-white dark:bg-[#0f172a] border-t border-gray-200 dark:border-[#334155] py-16">
        <div class="w-full px-5 sm:px-6 lg:px-8 xl:px-12">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 lg:gap-12">
                <!-- Brand Section - First Column -->
                <div class="lg:col-span-1">
                    <h3 class="text-2xl md:text-3xl font-black mb-4">
                        <span class="text-[#ff6b6b]">Hamro</span>
                        <span class="text-[#4ecdc4]">Yaad</span>
                    </h3>
                    <p class="text-gray-600 dark:text-[#cbd5e1] text-sm leading-relaxed max-w-xs">Create beautiful custom gift websites and share your love with the world.</p>
                </div>
                
                <!-- Product Links -->
                <div>
                    <h4 class="font-black mb-4 text-gray-900 dark:text-white text-sm tracking-widest uppercase">Product</h4>
                    <ul class="space-y-2.5 text-gray-600 dark:text-[#cbd5e1] text-sm">
                        <li><a href="#categories" class="hover:text-gray-900 dark:hover:text-white transition-colors inline-block">Templates</a></li>
                        <li><a href="#shopping" class="hover:text-gray-900 dark:hover:text-white transition-colors inline-block">Shop</a></li>
                        <li><a href="#how-to-use" class="hover:text-gray-900 dark:hover:text-white transition-colors inline-block">How It Works</a></li>
                    </ul>
                </div>
                
                <!-- Company Links -->
                <div>
                    <h4 class="font-black mb-4 text-gray-900 dark:text-white text-sm tracking-widest uppercase">Company</h4>
                    <ul class="space-y-2.5 text-gray-600 dark:text-[#cbd5e1] text-sm">
                        <li><a href="#" class="hover:text-gray-900 dark:hover:text-white transition-colors inline-block">About</a></li>
                        <li><a href="#" class="hover:text-gray-900 dark:hover:text-white transition-colors inline-block">Contact</a></li>
                        <li><a href="#" class="hover:text-gray-900 dark:hover:text-white transition-colors inline-block">Privacy</a></li>
                    </ul>
                </div>
                
                <!-- Social Links -->
                <div>
                    <h4 class="font-black mb-4 text-gray-900 dark:text-white text-sm tracking-widest uppercase">Connect</h4>
                    <ul class="space-y-2.5 text-gray-600 dark:text-[#cbd5e1] text-sm">
                        <li><a href="#" class="hover:text-gray-900 dark:hover:text-white transition-colors inline-block">Instagram</a></li>
                        <li><a href="#" class="hover:text-gray-900 dark:hover:text-white transition-colors inline-block">TikTok</a></li>
                        <li><a href="#" class="hover:text-gray-900 dark:hover:text-white transition-colors inline-block">Twitter</a></li>
                    </ul>
                </div>
            </div>
            
            <!-- Footer Bottom -->
            <div class="mt-12 pt-8 border-t border-gray-200 dark:border-[#334155]">
                <p class="text-center text-gray-500 dark:text-gray-400 text-sm">&copy; {{ date('Y') }} Hamro Yaad. All rights reserved.</p>
            </div>
        </div>
    </footer>
@endsection
