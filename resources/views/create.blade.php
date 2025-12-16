<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Create - Hamro Yaad</title>
    
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
        }
    </script>
    
    <!-- Elegant Floating Particles Animation Styles -->
    <style>
        /* Premium Gallery Styles */
        .gallery-grid-small {
            grid-template-columns: repeat(6, minmax(0, 1fr));
        }
        
        .gallery-grid-medium {
            grid-template-columns: repeat(4, minmax(0, 1fr));
        }
        
        .gallery-grid-large {
            grid-template-columns: repeat(3, minmax(0, 1fr));
        }
        
        @media (max-width: 1024px) {
            .gallery-grid-small {
                grid-template-columns: repeat(4, minmax(0, 1fr));
            }
            .gallery-grid-medium {
                grid-template-columns: repeat(3, minmax(0, 1fr));
            }
            .gallery-grid-large {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }
        }
        
        @media (max-width: 640px) {
            .gallery-grid-small,
            .gallery-grid-medium,
            .gallery-grid-large {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }
        }
        
        @keyframes floatUp {
            0% {
                transform: translateY(100vh) translateX(0) rotate(0deg);
                opacity: 0;
            }
            10% {
                opacity: 1;
            }
            90% {
                opacity: 1;
            }
            100% {
                transform: translateY(-100vh) translateX(var(--drift, 100px)) rotate(360deg);
                opacity: 0;
            }
        }
        
        @keyframes sparkle {
            0%, 100% {
                opacity: 0;
                transform: scale(0);
            }
            50% {
                opacity: 1;
                transform: scale(1);
            }
        }
        
        @keyframes gentleFloat {
            0%, 100% {
                transform: translateY(0) translateX(0);
            }
            50% {
                transform: translateY(-20px) translateX(10px);
            }
        }
        
        .floating-particle {
            position: absolute;
            pointer-events: none;
            z-index: 1000;
            animation: floatUp linear forwards;
            user-select: none;
            font-size: 1.5rem;
        }
        
        .particle-heart {
            color: #ff6b9d;
            text-shadow: 0 0 10px rgba(255, 107, 157, 0.5);
        }
        
        .particle-star {
            color: #ffd93d;
            text-shadow: 0 0 10px rgba(255, 217, 61, 0.5);
        }
        
        .particle-sparkle {
            color: #ff6b6b;
            text-shadow: 0 0 8px rgba(78, 205, 196, 0.5);
            font-size: 1rem;
        }
        
        .particle-circle {
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background: radial-gradient(circle, rgba(255,255,255,0.8) 0%, rgba(255,255,255,0) 100%);
            box-shadow: 0 0 6px rgba(255,255,255,0.6);
        }
        
        .particle-container {
            position: relative;
            overflow: hidden;
            width: 100%;
            height: 100%;
        }
        
        /* Different animation durations for variety */
        .particle-fast {
            animation-duration: 8s;
        }
        
        .particle-medium {
            animation-duration: 12s;
        }
        
        .particle-slow {
            animation-duration: 16s;
        }
        
        /* Sparkle effect */
        .sparkle {
            position: absolute;
            width: 4px;
            height: 4px;
            background: white;
            border-radius: 50%;
            box-shadow: 0 0 6px rgba(255,255,255,0.8);
            animation: sparkle 2s infinite;
        }
        
        @keyframes gradientShift {
            0%, 100% {
                background-position: 0% 50%;
            }
            50% {
                background-position: 100% 50%;
            }
        }
        nav a span {
            background-size: 200% 200%;
            animation: gradientShift 3s ease infinite;
        }
    </style>
    
    <!-- Initialize theme immediately in head -->
    <script>
        (function() {
            const html = document.documentElement;
            const savedTheme = localStorage.getItem('theme') || 'light';
            if (savedTheme === 'dark') {
                html.classList.add('dark');
            } else {
                html.classList.remove('dark');
            }
        })();
    </script>
</head>
<body class="bg-[#1a1a1a] dark:bg-[#0a0a0a] text-white antialiased">
    <!-- Navigation -->
    <nav class="fixed top-0 w-full bg-white/95 dark:bg-[#0f172a]/95 backdrop-blur-xl z-50 border-b border-gray-200 dark:border-[#334155] shadow-sm dark:shadow-[#1e293b]/50">
        <div class="w-full px-5 sm:px-6 lg:px-8 xl:px-12">
            <div class="flex justify-between items-center h-20">
                <!-- Logo - Left Aligned -->
                <div class="flex items-center flex-shrink-0">
                    <a href="/" class="hover:opacity-80 transition-opacity flex items-center gap-3">
                        <img src="{{ asset('assets/logo.png') }}" alt="Hamro Yaad" class="h-16 md:h-20 w-auto">
                        <span class="text-2xl md:text-3xl font-bold bg-gradient-to-r from-[#ff6b6b] to-[#ff5252] bg-clip-text text-transparent">Hamro Yaad</span>
                    </a>
                </div>
                
                <!-- Navigation Links - Right Aligned -->
                <div class="hidden md:flex items-center space-x-6 lg:space-x-8">
                    <a href="#how-to-use" class="text-gray-600 dark:text-[#cbd5e1] hover:text-gray-900 dark:hover:text-white transition-colors text-[15px] font-medium tracking-wide relative group py-2">
                        How It Works
                        <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-[#ff6b6b] group-hover:w-full transition-all duration-300"></span>
                    </a>
                    <a href="#faq" class="text-gray-600 dark:text-[#cbd5e1] hover:text-gray-900 dark:hover:text-white transition-colors text-[15px] font-medium tracking-wide relative group py-2">
                        FAQ
                        <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-[#ff6b6b] group-hover:w-full transition-all duration-300"></span>
                    </a>
                    <button id="theme-toggle" type="button" class="p-2 rounded-lg bg-gray-100 dark:bg-[#1e293b] text-gray-700 dark:text-[#cbd5e1] hover:bg-gray-200 dark:hover:bg-[#334155] transition-all ml-2 cursor-pointer" aria-label="Toggle dark mode">
                        <svg class="w-5 h-5 dark:hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"></path>
                        </svg>
                        <svg class="w-5 h-5 hidden dark:block" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"></path>
                        </svg>
                    </button>
                    @auth
                        <form action="{{ route('logout') }}" method="POST" class="inline">
                            @csrf
                            <button type="submit" class="text-gray-600 dark:text-[#cbd5e1] hover:text-gray-900 dark:hover:text-white transition-colors text-[15px] font-medium tracking-wide px-4 py-2 rounded-lg hover:bg-gray-100 dark:hover:bg-[#1e293b] transition-all ml-2">
                                Logout
                            </button>
                        </form>
                    @endauth
                    <a href="{{ route('create') }}" class="bg-gradient-to-r from-[#ff6b6b] to-[#ff5252] text-white px-6 py-2.5 rounded-lg hover:shadow-lg hover:shadow-[#ff6b6b]/30 transition-all text-[15px] font-semibold tracking-wide ml-2">
                        Get Started
                    </a>
                </div>
                
                <!-- Mobile Menu Button -->
                <button id="mobile-menu-toggle" type="button" onclick="toggleMobileMenu()" class="md:hidden text-gray-600 dark:text-[#cbd5e1] p-2 rounded-lg hover:bg-gray-100 dark:hover:bg-[#1e293b] transition-colors" aria-label="Toggle mobile menu">
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
        <div id="mobile-menu" class="hidden md:hidden fixed top-20 left-0 right-0 bg-white/95 dark:bg-[#0f172a]/95 backdrop-blur-xl border-b border-gray-200 dark:border-[#334155] shadow-lg z-40">
            <div class="px-5 sm:px-6 lg:px-8 xl:px-12 py-4 space-y-3">
                <a href="#how-to-use" class="block text-gray-600 dark:text-[#cbd5e1] hover:text-gray-900 dark:hover:text-white transition-colors text-[15px] font-medium tracking-wide py-2" onclick="toggleMobileMenu()">How It Works</a>
                <a href="#faq" class="block text-gray-600 dark:text-[#cbd5e1] hover:text-gray-900 dark:hover:text-white transition-colors text-[15px] font-medium tracking-wide py-2" onclick="toggleMobileMenu()">FAQ</a>
                <button id="theme-toggle-mobile" type="button" onclick="if(window.toggleTheme) window.toggleTheme(event);" class="w-full text-left p-2 rounded-lg bg-gray-100 dark:bg-[#1e293b] text-gray-700 dark:text-[#cbd5e1] hover:bg-gray-200 dark:hover:bg-[#334155] transition-all flex items-center gap-3">
                    <svg id="moon-icon-mobile" class="w-5 h-5 dark:hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"></path>
                    </svg>
                    <svg id="sun-icon-mobile" class="w-5 h-5 hidden dark:block" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"></path>
                    </svg>
                    <span class="text-[15px] font-medium">Toggle Theme</span>
                </button>
                @auth
                    <form action="{{ route('logout') }}" method="POST" class="w-full">
                        @csrf
                        <button type="submit" onclick="toggleMobileMenu()" class="w-full text-left p-2 rounded-lg text-gray-600 dark:text-[#cbd5e1] hover:text-gray-900 dark:hover:text-white hover:bg-gray-100 dark:hover:bg-[#1e293b] transition-all text-[15px] font-medium tracking-wide">
                            Logout
                        </button>
                    </form>
                @endauth
                <a href="{{ route('create') }}" class="block bg-gradient-to-r from-[#ff6b6b] to-[#ff5252] text-white px-6 py-2.5 rounded-lg hover:shadow-lg hover:shadow-[#ff6b6b]/30 transition-all text-[15px] font-semibold tracking-wide text-center" onclick="toggleMobileMenu()">
                    Get Started
                </a>
            </div>
        </div>
    </nav>

    <!-- Main Content - Two Column Layout -->
    <main class="min-h-[calc(100vh-4rem)] pt-20">
        <div class="max-w-[1800px] mx-auto px-6 py-8">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                <!-- Left Column - Form (2/3 width) -->
                <div class="lg:col-span-2 space-y-6">
                    <!-- Progress Indicator -->
                    <div class="flex items-center gap-2 mb-8">
                        @php
                        $steps = [
                            1 => 'Page Name',
                            2 => 'Content',
                            3 => 'Images & Date',
                            4 => 'Colors',
                            5 => 'Recipient',
                            6 => 'PIN',
                            7 => 'Review'
                        ];
                        $currentStep = request('step', 1);
                        @endphp
                        
                        @foreach($steps as $stepNum => $stepName)
                            <div class="flex items-center">
                                <div class="flex flex-col items-center">
                                    <div class="w-10 h-10 rounded-full flex items-center justify-center text-sm font-semibold transition-all
                                        {{ $stepNum == $currentStep ? 'bg-[#ff6b6b] text-white' : 'bg-gray-700 text-gray-400' }}">
                                        {{ $stepNum }}
                                    </div>
                                    <span class="text-xs mt-2 text-gray-500 {{ $stepNum == $currentStep ? 'text-[#ff6b6b]' : '' }}">
                                        {{ $stepName }}
                                    </span>
                                </div>
                                @if($stepNum < count($steps))
                                    <div class="w-12 h-0.5 mx-2 {{ $stepNum < $currentStep ? 'bg-[#ff6b6b]' : 'bg-gray-700' }}"></div>
                                @endif
                            </div>
                        @endforeach
                    </div>

                    <!-- Step 1: Page Name -->
                    @if($currentStep == 1)
                    <div>
                        <h1 class="text-4xl font-bold mb-4 text-white">Page Name</h1>
                        <p class="text-gray-400 mb-6 text-lg">
                            Write the name of your memory — something unique, special, full of meaning, or simply a name that makes sense to you. This name will be used in your memory page URL (e.g., hamroyaad.com/your-memory-name).
                        </p>
                        
                        <div class="space-y-4">
                            <div class="relative">
                                <input type="text" id="page-name" placeholder="Ex: Gabriel and Clara or Happy Birthday" 
                                       class="w-full px-5 py-4 bg-gray-800 dark:bg-gray-900 border-2 border-gray-700 rounded-xl text-white placeholder-gray-500 text-lg focus:outline-none focus:border-[#ff6b6b] transition-colors">
                            </div>
                            
                            <div class="flex items-start gap-2 text-gray-400 text-sm">
                                <svg class="w-5 h-5 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                <span>Accents and special characters are not allowed. Use only letters, numbers, and spaces.</span>
                            </div>
                        </div>
                    </div>
                    @endif

                    <!-- Step 2: Content -->
                    @if($currentStep == 2)
                    <div>
                        <h1 class="text-4xl font-bold mb-4 text-white">Content</h1>
                        <p class="text-gray-400 mb-6 text-lg">
                            Add your personalized content to make this memory special.
                        </p>
                        
                        <div class="space-y-6">
                            <div>
                                <label class="block text-white font-semibold mb-3">Main Heading</label>
                                <input type="text" id="heading" placeholder="Enter main heading" 
                                       class="w-full px-5 py-4 bg-gray-800 dark:bg-gray-900 border-2 border-gray-700 rounded-xl text-white placeholder-gray-500 text-lg focus:outline-none focus:border-[#ff6b6b] transition-colors">
                            </div>
                            
                            <div>
                                <label class="block text-white font-semibold mb-3">Subheading</label>
                                <input type="text" id="subheading" placeholder="Enter subheading" 
                                       class="w-full px-5 py-4 bg-gray-800 dark:bg-gray-900 border-2 border-gray-700 rounded-xl text-white placeholder-gray-500 text-lg focus:outline-none focus:border-[#ff6b6b] transition-colors">
                            </div>
                            
                            <div>
                                <label class="block text-white font-semibold mb-3">Your Message</label>
                                <textarea id="message" rows="6" placeholder="Write your heartfelt message here..." 
                                          class="w-full px-5 py-4 bg-gray-800 dark:bg-gray-900 border-2 border-gray-700 rounded-xl text-white placeholder-gray-500 text-lg focus:outline-none focus:border-[#ff6b6b] transition-colors resize-none"></textarea>
                            </div>
                            
                            <div>
                                <label class="block text-white font-semibold mb-3">From</label>
                                <input type="text" id="from" placeholder="Your name" 
                                       class="w-full px-5 py-4 bg-gray-800 dark:bg-gray-900 border-2 border-gray-700 rounded-xl text-white placeholder-gray-500 text-lg focus:outline-none focus:border-[#ff6b6b] transition-colors">
                            </div>
                            
                            <!-- YouTube URL Field -->
                            <div>
                                <label class="block text-white font-semibold mb-3">YouTube Audio URL (Optional)</label>
                                <p class="text-gray-400 text-sm mb-2">Add a YouTube URL to play audio automatically</p>
                                <input type="url" id="youtube-url" placeholder="https://www.youtube.com/watch?v=..." 
                                       class="w-full px-5 py-4 bg-gray-800 dark:bg-gray-900 border-2 border-gray-700 rounded-xl text-white placeholder-gray-500 text-lg focus:outline-none focus:border-[#ff6b6b] transition-colors">
                                <p class="text-gray-500 text-xs mt-2">Paste a YouTube video URL. Audio will auto-play on the memory page.</p>
                            </div>
                        </div>
                    </div>
                    @endif

                    <!-- Step 3: Images -->
                    @if($currentStep == 3)
                    <div>
                        <h1 class="text-4xl font-bold mb-4 text-white">Images & Gallery</h1>
                        <p class="text-gray-400 mb-6 text-lg">
                            Create your premium memory gallery. Upload up to 50 images to make your memory truly special.
                        </p>
                        
                        <div class="space-y-6">
                            <!-- Premium Gallery Section -->
                            <div class="bg-gradient-to-br from-gray-800/50 to-gray-900/50 dark:from-gray-900/50 dark:to-gray-800/50 rounded-3xl p-6 border border-gray-700/50">
                                <div class="flex items-center justify-between mb-4">
                                    <div>
                                        <label class="block text-white font-bold text-lg mb-1">Hamro Yaad Gallery</label>
                                        <p class="text-gray-400 text-sm">Add up to 50 images to your memory gallery</p>
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <span id="image-count" class="px-3 py-1 bg-gradient-to-r from-[#ff6b6b] to-[#ff5252] text-white rounded-full text-sm font-bold">0 / 50</span>
                                    </div>
                                </div>
                                
                                <!-- Upload Area -->
                                <div class="border-2 border-dashed border-gray-700 rounded-2xl p-8 text-center hover:border-[#ff6b6b] transition-all duration-300 cursor-pointer group bg-gray-800/30 dark:bg-gray-900/30" id="heading-images-upload">
                                    <div class="flex flex-col items-center">
                                        <div class="w-16 h-16 bg-gradient-to-br from-[#ff6b6b] to-[#ff5252] rounded-2xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform shadow-lg shadow-[#ff6b6b]/30">
                                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                            </svg>
                                        </div>
                                        <p class="text-white font-semibold mb-1">Click to upload images</p>
                                        <p class="text-gray-400 text-sm mb-2">or drag and drop multiple images here</p>
                                        <p class="text-gray-500 text-xs">PNG, JPG, WEBP up to 10MB each</p>
                                        <p class="text-[#ff6b6b] text-xs font-semibold mt-2">Maximum 50 images</p>
                                    </div>
                                    <input type="file" id="heading-images" accept="image/*" multiple class="hidden">
                                </div>
                                
                                <!-- View Toggle -->
                                <div class="flex items-center justify-between mt-4 mb-3">
                                    <p class="text-gray-400 text-sm">Gallery View:</p>
                                    <div class="flex gap-2">
                                        <button onclick="changeGridView('small')" class="view-toggle active px-3 py-1.5 bg-[#ff6b6b] text-white rounded-lg text-xs font-semibold transition-all" data-view="small">
                                            Small
                                        </button>
                                        <button onclick="changeGridView('medium')" class="view-toggle px-3 py-1.5 bg-gray-700 text-gray-300 rounded-lg text-xs font-semibold hover:bg-gray-600 transition-all" data-view="medium">
                                            Medium
                                        </button>
                                        <button onclick="changeGridView('large')" class="view-toggle px-3 py-1.5 bg-gray-700 text-gray-300 rounded-lg text-xs font-semibold hover:bg-gray-600 transition-all" data-view="large">
                                            Large
                                        </button>
                                    </div>
                                </div>
                                
                                <!-- Premium Gallery Grid -->
                                <div id="heading-images-preview" class="mt-4 grid grid-cols-6 gap-2 gallery-grid-small">
                                    <!-- Images will be added here -->
                                </div>
                                
                                <!-- Empty State -->
                                <div id="gallery-empty-state" class="text-center py-12">
                                    <svg class="w-20 h-20 mx-auto text-gray-600 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                    </svg>
                                    <p class="text-gray-500 text-sm">No images yet. Start building your gallery!</p>
                                </div>
                            </div>
                            
                            <!-- Date Field -->
                            <div>
                                <label class="block text-white font-semibold mb-3">Memory Date</label>
                                <input type="date" id="memory-date" 
                                       class="w-full px-5 py-4 bg-gray-800 dark:bg-gray-900 border-2 border-gray-700 rounded-xl text-white text-lg focus:outline-none focus:border-[#ff6b6b] transition-colors">
                                <p class="text-gray-400 text-sm mt-2">Select the date for this memory</p>
                            </div>
                            
                            <!-- Colors Section -->
                            <div>
                                <label class="block text-white font-semibold mb-3">Colors</label>
                                <p class="text-gray-400 text-sm mb-4">Customize the theme colors for your memory</p>
                                
                                <div class="space-y-4">
                                    <!-- Theme Color -->
                                    <div>
                                        <label class="block text-white text-sm mb-2">Theme Color</label>
                                        <div class="flex items-center gap-3">
                                            <input type="color" id="theme-color" value="#ff6b6b" 
                                                   class="w-16 h-16 rounded-lg cursor-pointer border-2 border-gray-700">
                                            <input type="text" id="theme-color-hex" value="#ff6b6b" 
                                                   class="flex-1 px-4 py-3 bg-gray-800 dark:bg-gray-900 border-2 border-gray-700 rounded-xl text-white text-sm focus:outline-none focus:border-[#ff6b6b] transition-colors" 
                                                   placeholder="#ff6b6b" pattern="^#[0-9A-Fa-f]{6}$">
                                        </div>
                                    </div>
                                    
                                    <!-- Background Color -->
                                    <div>
                                        <label class="block text-white text-sm mb-2">Background Color</label>
                                        <div class="flex items-center gap-3">
                                            <input type="color" id="bg-color" value="#0f172a" 
                                                   class="w-16 h-16 rounded-lg cursor-pointer border-2 border-gray-700">
                                            <input type="text" id="bg-color-hex" value="#0f172a" 
                                                   class="flex-1 px-4 py-3 bg-gray-800 dark:bg-gray-900 border-2 border-gray-700 rounded-xl text-white text-sm focus:outline-none focus:border-[#ff6b6b] transition-colors" 
                                                   placeholder="#ffffff" pattern="^#[0-9A-Fa-f]{6}$">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif

                    <!-- Step 4: Recipient -->
                    @if($currentStep == 4)
                    <div>
                        <h1 class="text-4xl font-bold mb-4 text-white">Recipient</h1>
                        <p class="text-gray-400 mb-6 text-lg">
                            Who is this memory for? Enter the recipient's name.
                        </p>
                        
                        <div class="space-y-4">
                            <div>
                                <label class="block text-white font-semibold mb-3">Recipient Name</label>
                                <input type="text" id="recipient-name" placeholder="Enter recipient's name" 
                                       class="w-full px-5 py-4 bg-gray-800 dark:bg-gray-900 border-2 border-gray-700 rounded-xl text-white placeholder-gray-500 text-lg focus:outline-none focus:border-[#ff6b6b] transition-colors">
                            </div>
                        </div>
                    </div>
                    @endif

                    <!-- Step 5: PIN -->
                    @if($currentStep == 5)
                    <div>
                        <h1 class="text-4xl font-bold mb-4 text-white">PIN</h1>
                        <p class="text-gray-400 mb-6 text-lg">
                            Create a 5-digit PIN to protect your memory. This PIN will be required to access the memory.
                        </p>
                        
                        <div class="space-y-4">
                            <div>
                                <label class="block text-white font-semibold mb-3">PIN (5 digits)</label>
                                <input type="text" id="pin" placeholder="12345" maxlength="5" 
                                       class="w-full px-5 py-4 bg-gray-800 dark:bg-gray-900 border-2 border-gray-700 rounded-xl text-white placeholder-gray-500 text-lg focus:outline-none focus:border-[#ff6b6b] transition-colors text-center text-2xl tracking-widest">
                                <p class="text-gray-400 text-sm mt-2">Enter a 5-digit PIN (numbers only)</p>
                            </div>
                            
                            <div>
                                <label class="block text-white font-semibold mb-3">Confirm PIN</label>
                                <input type="text" id="pin-confirm" placeholder="12345" maxlength="5" 
                                       class="w-full px-5 py-4 bg-gray-800 dark:bg-gray-900 border-2 border-gray-700 rounded-xl text-white placeholder-gray-500 text-lg focus:outline-none focus:border-[#ff6b6b] transition-colors text-center text-2xl tracking-widest">
                            </div>
                        </div>
                    </div>
                    @endif

                    <!-- Step 6: Review -->
                    @if($currentStep == 6)
                    <div>
                        <h1 class="text-4xl font-bold mb-4 text-white">Review</h1>
                        <p class="text-gray-400 mb-6 text-lg">
                            Review all your information before creating your memory.
                        </p>
                        
                        <div class="space-y-6 bg-gray-800 dark:bg-gray-900 rounded-xl p-6">
                            <div>
                                <h3 class="text-gray-400 text-sm mb-1">Page Name</h3>
                                <p class="text-white text-lg" id="review-page-name">-</p>
                            </div>
                            
                            <div>
                                <h3 class="text-gray-400 text-sm mb-1">Template</h3>
                                <p class="text-white text-lg" id="review-template">-</p>
                            </div>
                            
                            <div>
                                <h3 class="text-gray-400 text-sm mb-1">Recipient</h3>
                                <p class="text-white text-lg" id="review-recipient">-</p>
                            </div>
                            
                            <div class="pt-4 border-t border-gray-700">
                                <p class="text-gray-400 text-sm mb-4">Please review all information carefully before proceeding.</p>
                                <button id="create-memory-btn" class="w-full px-6 py-4 bg-gradient-to-r from-[#ff6b6b] to-[#ff5252] text-white rounded-xl hover:shadow-lg transition-all font-semibold text-lg">
                                    Create Memory
                                </button>
                            </div>
                        </div>
                    </div>
                    @endif

                    <!-- Navigation Buttons -->
                    @if($currentStep != 6)
                    <div class="flex items-center justify-between pt-8 border-t border-gray-800">
                        <button id="prev-btn" class="flex items-center gap-2 px-6 py-3 bg-gray-800 dark:bg-gray-900 text-gray-300 rounded-xl hover:bg-gray-700 transition-colors {{ $currentStep == 1 ? 'opacity-50 cursor-not-allowed' : '' }}" 
                                {{ $currentStep == 1 ? 'disabled' : '' }}>
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                            </svg>
                            Previous
                        </button>
                        <button id="next-btn" class="flex items-center gap-2 px-6 py-3 bg-gradient-to-r from-[#ff6b6b] to-[#ff5252] text-white rounded-xl hover:shadow-lg transition-all">
                            Next
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </button>
                    </div>
                    @endif
                </div>

                <!-- Right Column - Preview (Larger) -->
                <div class="lg:col-span-1">
                    <div class="sticky top-8">
                        <div class="mb-4">
                            <button class="flex items-center gap-2 text-sm text-gray-400 hover:text-[#ff6b6b] transition-colors">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                </svg>
                                <span>Live Preview</span>
                            </button>
                        </div>
                        
                        <!-- Browser Preview Frame - Larger -->
                        <div class="bg-gray-800 dark:bg-gray-900 rounded-xl border-2 border-[#ff6b6b] p-2 shadow-2xl">
                            <!-- Browser Controls -->
                            <div class="flex items-center gap-2 mb-2">
                                <div class="flex gap-1.5">
                                    <div class="w-3 h-3 rounded-full bg-red-500"></div>
                                    <div class="w-3 h-3 rounded-full bg-yellow-500"></div>
                                    <div class="w-3 h-3 rounded-full bg-green-500"></div>
                                </div>
                                <div class="flex-1 bg-gray-700 rounded px-3 py-1.5 text-xs text-gray-400" id="preview-url">
                                    hamroyaad.com/memory/
                                </div>
                            </div>
                            
                            <!-- Preview Content - Much Larger -->
                            <div class="bg-gray-900 rounded-lg min-h-[900px] max-h-[1200px] overflow-y-auto p-4 overflow-x-hidden relative" id="preview-content" style="background-color: #0f172a;">
                                <!-- Preview will be dynamically updated here -->
                                <div id="preview-placeholder" class="text-center text-gray-500 py-20 relative z-0">
                                    <p class="text-sm">Preview will appear here</p>
                                </div>
                                
                                <!-- Actual preview content wrapper -->
                                <div id="preview-wrapper" class="relative z-20"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Scripts -->
    <script>
        (function() {
            'use strict';
            
            const html = document.documentElement;
            let currentStep = {{ $currentStep }};
            const totalSteps = 6;
            
            // Theme toggle
            function toggleTheme(e) {
                if (e) {
                    e.preventDefault();
                    e.stopPropagation();
                }
                const isDark = html.classList.contains('dark');
                if (isDark) {
                    html.classList.remove('dark');
                    localStorage.setItem('theme', 'light');
                } else {
                    html.classList.add('dark');
                    localStorage.setItem('theme', 'dark');
                }
                return false;
            }
            
            // Save all form data to localStorage
            // Auto-save draft to backend
            let autoSaveTimeout;
            // Initialize draft ID from localStorage if available
            let currentDraftId = localStorage.getItem('draftId') ? parseInt(localStorage.getItem('draftId')) : null;
            if (currentDraftId) {
                console.log('📋 Restored draft ID from localStorage:', currentDraftId);
            }
            
            // Track base64 images that have already been sent to prevent duplicate uploads
            let uploadedBase64Images = new Set();
            // Map base64 images to their uploaded URLs (to prevent re-uploading)
            let base64ToUrlMap = new Map();
            // Flag to prevent concurrent saves
            let isSavingDraft = false;
            // Cache for draft images from backend
            let cachedDraftImages = {
                heading_images: [],
                images: []
            };
            
            // Delete image from Cloudflare R2 or local storage
            async function deleteImageFromStorage(imageUrl) {
                // Skip if it's a base64 image (not yet uploaded)
                if (imageUrl.startsWith('data:image')) {
                    console.log('Skipping deletion - image is base64 (not yet uploaded)');
                    return;
                }
                
                try {
                    const response = await fetch('{{ route("templates.delete-image") }}', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')?.getAttribute('content') || '',
                        },
                        body: JSON.stringify({
                            image_url: imageUrl
                        })
                    });
                    
                    const result = await response.json();
                    if (result.success) {
                        console.log('✅ Image deleted from storage:', imageUrl.substring(0, 50) + '...');
                    } else {
                        console.warn('⚠️ Failed to delete image:', result.message);
                    }
                } catch (error) {
                    console.error('❌ Error deleting image from storage:', error);
                    throw error;
                }
            }
            
            // Save images to localStorage
            function saveImagesToLocalStorage() {
                const headingImagesPreview = document.getElementById('heading-images-preview');
                const imagesPreview = document.getElementById('images-preview');
                
                const headingImages = [];
                if (headingImagesPreview && headingImagesPreview.children.length > 0) {
                    Array.from(headingImagesPreview.children).forEach(container => {
                        const img = container.querySelector('img');
                        if (img && img.src) {
                            headingImages.push(img.src);
                        }
                    });
                }
                
                const additionalImages = [];
                if (imagesPreview && imagesPreview.children.length > 0) {
                    Array.from(imagesPreview.children).forEach(container => {
                        const img = container.querySelector('img');
                        if (img && img.src) {
                            additionalImages.push(img.src);
                        }
                    });
                }
                
                // Get existing localStorage data
                const existingData = localStorage.getItem('memoryFormData');
                let formData = {};
                if (existingData) {
                    try {
                        formData = JSON.parse(existingData);
                    } catch (e) {
                        formData = {};
                    }
                }
                
                // Save images to localStorage
                formData.headingImages = headingImages;
                formData.additionalImages = additionalImages;
                
                localStorage.setItem('memoryFormData', JSON.stringify(formData));
                console.log('Images saved to localStorage:', { headingImages: headingImages.length, additionalImages: additionalImages.length });
            }
            
            async function saveDraftToBackend() {
                // Prevent concurrent saves
                if (isSavingDraft) {
                    console.log('⏸️ Save already in progress, skipping...');
                    return;
                }
                
                isSavingDraft = true;
                
                const savedData = localStorage.getItem('memoryFormData');
                const formData = savedData ? JSON.parse(savedData) : {};
                
                // Get heading images - prefer cached URLs, fallback to DOM
                const headingImagesPreview = document.getElementById('heading-images-preview');
                let headingImages = [];
                const seenHeadingImages = new Set(); // Track to prevent duplicates
                
                // First, use cached URLs if available (from previous save)
                if (cachedDraftImages.heading_images && cachedDraftImages.heading_images.length > 0) {
                    cachedDraftImages.heading_images.forEach(url => {
                        if (url && !seenHeadingImages.has(url)) {
                            headingImages.push(url);
                            seenHeadingImages.add(url);
                        }
                    });
                    console.log('📸 Using cached heading images:', headingImages.length);
                }
                
                // Then, check DOM for any new images or updates
                if (headingImagesPreview && headingImagesPreview.children.length > 0) {
                    Array.from(headingImagesPreview.children).forEach(container => {
                        const img = container.querySelector('img');
                        if (img && img.src && !seenHeadingImages.has(img.src)) {
                            const imgSrc = img.src;
                            
                            // If it's a base64 that we've already uploaded, use the cached URL instead
                            if (imgSrc.startsWith('data:image') && base64ToUrlMap.has(imgSrc)) {
                                const cachedUrl = base64ToUrlMap.get(imgSrc);
                                if (!seenHeadingImages.has(cachedUrl)) {
                                    headingImages.push(cachedUrl);
                                    seenHeadingImages.add(cachedUrl);
                                    console.log('🔄 Using cached URL for base64 image');
                                }
                                return;
                            }
                            
                            // Skip base64 images that have already been uploaded (but not yet mapped to URL)
                            if (imgSrc.startsWith('data:image') && uploadedBase64Images.has(imgSrc)) {
                                console.log('⏭️ Skipping already-uploaded base64 heading image (waiting for URL)');
                                return;
                            }
                            
                            // Include new base64 images or URLs
                            headingImages.push(imgSrc);
                            seenHeadingImages.add(imgSrc);
                        }
                    });
                    console.log('📸 Added images from DOM, total heading images:', headingImages.length);
                }
                
                // If still no images and we have a draft ID, try loading from database first
                if (headingImages.length === 0 && currentDraftId) {
                    console.log('⚠️ No heading images found, but draft ID exists. Images may be in database.');
                    // Don't send empty array - let backend preserve existing images
                }
                
                // Get additional images - prefer cached URLs, fallback to DOM
                const imagesPreview = document.getElementById('images-preview');
                let additionalImages = [];
                const seenAdditionalImages = new Set(); // Track to prevent duplicates
                
                // First, use cached URLs if available
                if (cachedDraftImages.images && cachedDraftImages.images.length > 0) {
                    cachedDraftImages.images.forEach(url => {
                        if (url && !seenAdditionalImages.has(url)) {
                            additionalImages.push(url);
                            seenAdditionalImages.add(url);
                        }
                    });
                    console.log('📸 Using cached additional images:', additionalImages.length);
                }
                
                // Then, check DOM for any new images or updates
                if (imagesPreview && imagesPreview.children.length > 0) {
                    Array.from(imagesPreview.children).forEach(container => {
                        const img = container.querySelector('img');
                        if (img && img.src && !seenAdditionalImages.has(img.src)) {
                            const imgSrc = img.src;
                            
                            // If it's a base64 that we've already uploaded, use the cached URL instead
                            if (imgSrc.startsWith('data:image') && base64ToUrlMap.has(imgSrc)) {
                                const cachedUrl = base64ToUrlMap.get(imgSrc);
                                if (!seenAdditionalImages.has(cachedUrl)) {
                                    additionalImages.push(cachedUrl);
                                    seenAdditionalImages.add(cachedUrl);
                                    console.log('🔄 Using cached URL for base64 image');
                                }
                                return;
                            }
                            
                            // Skip base64 images that have already been uploaded (but not yet mapped to URL)
                            if (imgSrc.startsWith('data:image') && uploadedBase64Images.has(imgSrc)) {
                                console.log('⏭️ Skipping already-uploaded base64 additional image (waiting for URL)');
                                return;
                            }
                            
                            // Include new base64 images or URLs
                            additionalImages.push(imgSrc);
                            seenAdditionalImages.add(imgSrc);
                        }
                    });
                    console.log('📸 Added images from DOM, total additional images:', additionalImages.length);
                }
                
                // If still no images and we have a draft ID, try loading from database first
                if (additionalImages.length === 0 && currentDraftId) {
                    console.log('⚠️ No additional images found, but draft ID exists. Images may be in database.');
                    // Don't send empty array - let backend preserve existing images
                }
                
                // Log if duplicates were found
                if (headingImagesPreview && headingImagesPreview.children.length > headingImages.length) {
                    console.log('⚠️ Removed', headingImagesPreview.children.length - headingImages.length, 'duplicate heading images');
                }
                if (imagesPreview && imagesPreview.children.length > additionalImages.length) {
                    console.log('⚠️ Removed', imagesPreview.children.length - additionalImages.length, 'duplicate additional images');
                }
                
                // Count how many base64 images we're actually sending
                const base64HeadingCount = headingImages.filter(img => img.startsWith('data:image')).length;
                const base64AdditionalCount = additionalImages.filter(img => img.startsWith('data:image')).length;
                if (base64HeadingCount > 0 || base64AdditionalCount > 0) {
                    console.log('📤 Sending base64 images to upload:', {
                        heading: base64HeadingCount,
                        additional: base64AdditionalCount
                    });
                    // Track these base64 images so we don't send them again
                    headingImages.forEach(img => {
                        if (img.startsWith('data:image')) {
                            uploadedBase64Images.add(img);
                        }
                    });
                    additionalImages.forEach(img => {
                        if (img.startsWith('data:image')) {
                            uploadedBase64Images.add(img);
                        }
                    });
                }
                
                // Get page_name, but don't require it for saving images
                const pageName = document.getElementById('page-name')?.value || formData.pageName || '';
                
                // Always save if we have images, even without page_name
                const hasImages = headingImages.length > 0 || additionalImages.length > 0;
                if (!pageName && !hasImages) {
                    // If we have a draft ID but no images in current state, don't send empty arrays
                    // This allows backend to preserve existing images
                    if (currentDraftId) {
                        console.log('⚠️ No images in current state, but draft exists. Not sending image fields to preserve existing.');
                        // Continue with save but don't include image fields
                    } else {
                        // No draft ID and no images - don't save
                        console.log('⚠️ No draft ID and no images, skipping save');
                        isSavingDraft = false;
                        return;
                    }
                }
                
                // If no page_name but we have images, use a temporary name
                const finalPageName = pageName || (hasImages ? `draft-${Date.now()}` : '');
                
                const draftData = {
                    draft_id: currentDraftId,
                    template: 'default',
                    page_name: finalPageName,
                    heading: document.getElementById('heading')?.value || formData.heading || '',
                    subheading: document.getElementById('subheading')?.value || formData.subheading || '',
                    message: document.getElementById('message')?.value || formData.message || '',
                    from: document.getElementById('from')?.value || formData.from || '',
                    youtube_url: document.getElementById('youtube-url')?.value || formData.youtubeUrl || '',
                    memory_date: document.getElementById('memory-date')?.value || formData.memoryDate || null,
                    theme_color: document.getElementById('theme-color')?.value || formData.themeColor || '#ff6b6b',
                    bg_color: document.getElementById('bg-color')?.value || formData.bgColor || '#0f172a',
                };
                
                // Only include image fields if we have images to send
                // This allows backend to preserve existing images when frontend doesn't have them loaded yet
                if (headingImages.length > 0) {
                    draftData.heading_images = headingImages;
                }
                if (additionalImages.length > 0) {
                    draftData.images = additionalImages;
                }
                
                console.log('📤 Saving draft with:', {
                    draft_id: currentDraftId,
                    heading_images_count: headingImages.length,
                    additional_images_count: additionalImages.length,
                    has_page_name: !!finalPageName
                });
                
                try {
                    const response = await fetch('{{ route("templates.save-draft") }}', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')?.getAttribute('content') || '',
                        },
                        body: JSON.stringify(draftData)
                    });
                    
                    const result = await response.json();
                    if (result.success && result.draft_id) {
                        currentDraftId = result.draft_id;
                        localStorage.setItem('draftId', result.draft_id);
                        console.log('✅ Draft saved to DATABASE, ID:', result.draft_id);
                        
                        // Update cached images
                        if (result.data) {
                            const previousHeadingImages = cachedDraftImages.heading_images || [];
                            const previousAdditionalImages = cachedDraftImages.images || [];
                            
                            cachedDraftImages.heading_images = result.data.heading_images || [];
                            cachedDraftImages.images = (result.data.images && result.data.images.memories) ? result.data.images.memories : [];
                            
                            // Map base64 images to their uploaded URLs
                            // This allows us to replace base64 with URLs in future saves
                            if (result.data.heading_images && result.data.heading_images.length > 0) {
                                // Find which base64 images were converted to URLs
                                headingImages.forEach((imgSrc, index) => {
                                    if (imgSrc.startsWith('data:image') && result.data.heading_images[index]) {
                                        base64ToUrlMap.set(imgSrc, result.data.heading_images[index]);
                                        console.log('🗺️ Mapped base64 to URL for heading image', index);
                                    }
                                });
                            }
                            
                            if (result.data.images && result.data.images.memories && result.data.images.memories.length > 0) {
                                additionalImages.forEach((imgSrc, index) => {
                                    if (imgSrc.startsWith('data:image') && result.data.images.memories[index]) {
                                        base64ToUrlMap.set(imgSrc, result.data.images.memories[index]);
                                        console.log('🗺️ Mapped base64 to URL for additional image', index);
                                    }
                                });
                            }
                            
                            console.log('📸 Cached images updated after save:', {
                                heading_count: cachedDraftImages.heading_images.length,
                                heading_images: cachedDraftImages.heading_images,
                                additional_count: cachedDraftImages.images.length
                            });
                            
                            // Force preview update immediately after saving
                            setTimeout(() => {
                                console.log('🔄 Forcing preview update after save...');
                                updatePreview();
                            }, 200);
                        }
                        
                        // Update image srcs in DOM with saved file paths (Cloudflare R2 URLs)
                        if (result.data && result.data.heading_images) {
                            const headingImagesPreview = document.getElementById('heading-images-preview');
                            if (headingImagesPreview) {
                                // If container has images, update their srcs
                                if (headingImagesPreview.children.length > 0) {
                                    Array.from(headingImagesPreview.children).forEach((container, index) => {
                                        const img = container.querySelector('img');
                                        if (img && result.data.heading_images[index]) {
                                            const oldSrc = img.src;
                                            // Update with Cloudflare R2 URL from database
                                            img.src = result.data.heading_images[index];
                                            // Remove old base64 from tracking since it's now a URL
                                            if (oldSrc.startsWith('data:image')) {
                                                uploadedBase64Images.delete(oldSrc);
                                            }
                                            console.log('🔄 Updated image', index + 1, 'with database URL:', result.data.heading_images[index]);
                                        }
                                    });
                                } else {
                                    // If container is empty but we have images in database, restore them
                                    console.log('⚠️ Container is empty but database has', result.data.heading_images.length, 'images. Restoring...');
                                    // Trigger loadDraftImages to restore images
                                    setTimeout(() => {
                                        loadDraftImages();
                                    }, 100);
                                }
                            }
                        }
                        
                        if (result.data && result.data.images && result.data.images.memories) {
                            const imagesPreview = document.getElementById('images-preview');
                            if (imagesPreview && imagesPreview.children.length > 0) {
                                Array.from(imagesPreview.children).forEach((container, index) => {
                                    const img = container.querySelector('img');
                                    if (img && result.data.images.memories[index]) {
                                        const oldSrc = img.src;
                                        img.src = result.data.images.memories[index];
                                        // Remove old base64 from tracking since it's now a URL
                                        if (oldSrc.startsWith('data:image')) {
                                            uploadedBase64Images.delete(oldSrc);
                                        }
                                    }
                                });
                            }
                        }
                        
                        // Update preview after images are updated
                        setTimeout(updatePreview, 300);
                    } else {
                        console.error('❌ Failed to save draft:', result);
                    }
                } catch (error) {
                    console.error('❌ Error saving draft to DATABASE:', error);
                } finally {
                    isSavingDraft = false;
                }
            }
            
            function saveFormData() {
                // Get existing data first to preserve it
                const existingData = localStorage.getItem('memoryFormData');
                let formData = {};
                
                if (existingData) {
                    try {
                        formData = JSON.parse(existingData);
                    } catch (e) {
                        formData = {};
                    }
                }
                
                // Update with current values (only if fields exist)
                const pageNameField = document.getElementById('page-name');
                if (pageNameField) formData.pageName = pageNameField.value || '';
                
                const headingField = document.getElementById('heading');
                if (headingField) formData.heading = headingField.value || '';
                
                const subheadingField = document.getElementById('subheading');
                if (subheadingField) formData.subheading = subheadingField.value || '';
                
                const messageField = document.getElementById('message');
                if (messageField) formData.message = messageField.value || '';
                
                const fromField = document.getElementById('from');
                if (fromField) formData.from = fromField.value || '';
                
                const youtubeUrlField = document.getElementById('youtube-url');
                if (youtubeUrlField) formData.youtubeUrl = youtubeUrlField.value || '';
                
                const themeColorField = document.getElementById('theme-color');
                if (themeColorField) formData.themeColor = themeColorField.value || '#ff6b6b';
                
                const bgColorField = document.getElementById('bg-color');
                if (bgColorField) formData.bgColor = bgColorField.value || '#0f172a';
                
                const recipientField = document.getElementById('recipient-name');
                if (recipientField) formData.recipientName = recipientField.value || '';
                
                const memoryDateField = document.getElementById('memory-date');
                if (memoryDateField) formData.memoryDate = memoryDateField.value || '';
                
                const pinField = document.getElementById('pin');
                if (pinField) formData.pin = pinField.value || '';
                
                const pinConfirmField = document.getElementById('pin-confirm');
                if (pinConfirmField) formData.pinConfirm = pinConfirmField.value || '';
                
                // Template selection removed - no longer needed
                
                localStorage.setItem('memoryFormData', JSON.stringify(formData));
            }
            
            // Restore form data from localStorage
            // Restore draft_id from localStorage
            currentDraftId = localStorage.getItem('draftId');
            
            function restoreFormData() {
                const savedData = localStorage.getItem('memoryFormData');
                if (!savedData) return;
                
                try {
                    const formData = JSON.parse(savedData);
                    
                    // Restore text inputs (restore even if empty, but only if field exists)
                    const pageNameField = document.getElementById('page-name');
                    if (pageNameField && formData.pageName !== undefined) {
                        pageNameField.value = formData.pageName || '';
                    }
                    
                    const headingField = document.getElementById('heading');
                    if (headingField && formData.heading !== undefined) {
                        headingField.value = formData.heading || '';
                    }
                    
                    const subheadingField = document.getElementById('subheading');
                    if (subheadingField && formData.subheading !== undefined) {
                        subheadingField.value = formData.subheading || '';
                    }
                    
                    const messageField = document.getElementById('message');
                    if (messageField && formData.message !== undefined) {
                        messageField.value = formData.message || '';
                    }
                    
                    const fromField = document.getElementById('from');
                    if (fromField && formData.from !== undefined) {
                        fromField.value = formData.from || '';
                    }
                    
                    const youtubeUrlField = document.getElementById('youtube-url');
                    if (youtubeUrlField && formData.youtubeUrl !== undefined) {
                        youtubeUrlField.value = formData.youtubeUrl || '';
                    }
                    
                    const recipientField = document.getElementById('recipient-name');
                    if (recipientField && formData.recipientName !== undefined) {
                        recipientField.value = formData.recipientName || '';
                    }
                    
                    const pinField = document.getElementById('pin');
                    if (pinField && formData.pin !== undefined) {
                        pinField.value = formData.pin || '';
                    }
                    
                    const pinConfirmField = document.getElementById('pin-confirm');
                    if (pinConfirmField && formData.pinConfirm !== undefined) {
                        pinConfirmField.value = formData.pinConfirm || '';
                    }
                    
                    const memoryDateField = document.getElementById('memory-date');
                    if (memoryDateField && formData.memoryDate !== undefined) {
                        memoryDateField.value = formData.memoryDate || '';
                    }
                    
                    // Restore colors
                    if (formData.themeColor !== undefined) {
                        const themeColorField = document.getElementById('theme-color');
                        const themeColorHexField = document.getElementById('theme-color-hex');
                        if (themeColorField) themeColorField.value = formData.themeColor || '#ff6b6b';
                        if (themeColorHexField) themeColorHexField.value = formData.themeColor || '#ff6b6b';
                    }
                    
                    if (formData.bgColor !== undefined) {
                        const bgColorField = document.getElementById('bg-color');
                        const bgColorHexField = document.getElementById('bg-color-hex');
                        if (bgColorField) bgColorField.value = formData.bgColor || '#0f172a';
                        if (bgColorHexField) bgColorHexField.value = formData.bgColor || '#0f172a';
                    }
                    
                    // Restore template selection
                    if (formData.selectedTemplate) {
                        setTimeout(() => {
                            const templateCard = document.querySelector(`.template-card[data-template="${formData.selectedTemplate}"]`);
                            if (templateCard) {
                                document.querySelectorAll('.template-card').forEach(c => {
                                    c.classList.remove('border-[#ff6b6b]');
                                    c.style.borderColor = '';
                                    c.classList.add('border-gray-700');
                                    c.dataset.selected = 'false';
                                });
                                templateCard.classList.remove('border-gray-700');
                                templateCard.classList.add('border-[#ff6b6b]');
                                templateCard.style.borderColor = '#ff6b6b';
                                templateCard.dataset.selected = 'true';
                            }
                        }, 100);
                    }
                    
                    // Update preview after restoring data
                    setTimeout(updatePreview, 200);
                } catch (e) {
                    console.error('Error restoring form data:', e);
                }
            }
            
            // Save data on input change
            function setupAutoSave() {
                const fieldsToSave = ['page-name', 'heading', 'subheading', 'message', 'from', 'recipient-name', 'memory-date', 'pin', 'pin-confirm', 'theme-color', 'bg-color', 'theme-color-hex', 'bg-color-hex'];
                fieldsToSave.forEach(fieldId => {
                    const field = document.getElementById(fieldId);
                    if (field) {
                        field.addEventListener('input', saveFormData);
                        field.addEventListener('change', saveFormData);
                    }
                });
            }
            
            // Navigation with data saving
            document.getElementById('next-btn')?.addEventListener('click', async function() {
                saveFormData(); // Save before navigating
                // Ensure images are saved before navigating forward
                try {
                    await saveDraftToBackend();
                } catch (error) {
                    console.error('Error saving draft before navigation:', error);
                }
                if (currentStep < totalSteps) {
                    window.location.href = '{{ route("create") }}?step=' + (currentStep + 1);
                }
            });
            
            document.getElementById('prev-btn')?.addEventListener('click', async function() {
                saveFormData(); // Save before navigating
                // Ensure images are loaded and saved before navigating back
                try {
                    // First, try to load images from database if we have a draft ID
                    if (currentDraftId) {
                        await loadDraftImages();
                        // Wait a bit for images to be processed
                        await new Promise(resolve => setTimeout(resolve, 300));
                    }
                    // Then save the draft
                    await saveDraftToBackend();
                } catch (error) {
                    console.error('Error saving draft before navigation:', error);
                }
                if (currentStep > 1) {
                    window.location.href = '{{ route("create") }}?step=' + (currentStep - 1);
                }
            });
            
            // Update preview when step changes - ensure images are loaded first
            const urlParams = new URLSearchParams(window.location.search);
            const step = parseInt(urlParams.get('step') || '1');
            if (step !== currentStep) {
                // Load images first, then update preview
                loadDraftImages().then(() => {
                    setTimeout(updatePreview, 200);
                }).catch(() => {
                    // If load fails, still try to update preview
                    setTimeout(updatePreview, 200);
                });
            }
            

            // Elegant floating particles animation
            const particles = [
                { type: 'heart', symbol: '❤️', class: 'particle-heart' },
                { type: 'star', symbol: '⭐', class: 'particle-star' },
                { type: 'sparkle', symbol: '✨', class: 'particle-sparkle' }
            ];
            let particleInterval = null;
            let sparkleInterval = null;
            
            function startFloatingParticles() {
                const particleContainer = document.getElementById('particle-container');
                if (!particleContainer) return;
                
                // Clear existing intervals
                if (particleInterval) {
                    clearInterval(particleInterval);
                }
                if (sparkleInterval) {
                    clearInterval(sparkleInterval);
                }
                
                // Create floating particles at intervals
                particleInterval = setInterval(() => {
                    createFloatingParticle();
                }, 800); // Create a new particle every 800ms
                
                // Create sparkles at intervals
                sparkleInterval = setInterval(() => {
                    createSparkle();
                }, 300); // Create sparkles more frequently
            }
            
            function stopFloatingParticles() {
                if (particleInterval) {
                    clearInterval(particleInterval);
                    particleInterval = null;
                }
                if (sparkleInterval) {
                    clearInterval(sparkleInterval);
                    sparkleInterval = null;
                }
            }
            
            function createFloatingParticle() {
                const particleContainer = document.getElementById('particle-container');
                if (!particleContainer) return;
                
                // Random particle type
                const particle = particles[Math.floor(Math.random() * particles.length)];
                
                // Create particle element
                const particleEl = document.createElement('div');
                particleEl.className = `floating-particle ${particle.class}`;
                particleEl.textContent = particle.symbol;
                
                // Random horizontal position
                const leftPosition = Math.random() * 100;
                particleEl.style.left = leftPosition + '%';
                
                // Random speed
                const speeds = ['particle-fast', 'particle-medium', 'particle-slow'];
                particleEl.classList.add(speeds[Math.floor(Math.random() * speeds.length)]);
                
                // Random starting delay
                particleEl.style.animationDelay = Math.random() * 2 + 's';
                
                // Random size variation
                const size = 1.2 + Math.random() * 0.8; // Between 1.2rem and 2rem
                particleEl.style.fontSize = size + 'rem';
                
                // Random horizontal drift
                const drift = (Math.random() - 0.5) * 200; // -100px to 100px
                particleEl.style.setProperty('--drift', drift + 'px');
                
                // Add to container
                particleContainer.appendChild(particleEl);
                
                // Remove after animation completes
                setTimeout(() => {
                    if (particleEl.parentNode) {
                        particleEl.remove();
                    }
                }, 18000); // Remove after max animation time
            }
            
            function createSparkle() {
                const particleContainer = document.getElementById('particle-container');
                if (!particleContainer) return;
                
                // Create sparkle element
                const sparkleEl = document.createElement('div');
                sparkleEl.className = 'sparkle';
                
                // Random position
                sparkleEl.style.left = Math.random() * 100 + '%';
                sparkleEl.style.top = Math.random() * 100 + '%';
                
                // Random delay
                sparkleEl.style.animationDelay = Math.random() * 2 + 's';
                
                // Random size
                const size = 3 + Math.random() * 3;
                sparkleEl.style.width = size + 'px';
                sparkleEl.style.height = size + 'px';
                
                // Add to container
                particleContainer.appendChild(sparkleEl);
                
                // Remove after animation completes
                setTimeout(() => {
                    if (sparkleEl.parentNode) {
                        sparkleEl.remove();
                    }
                }, 3000);
            }
            
            // Store previous values to detect changes
            let previousPreviewState = {
                heading: '',
                subheading: '',
                message: '',
                from: '',
                youtubeUrl: '',
                themeColor: '#ff6b6b',
                bgColor: '#0f172a',
                imageCount: 0
            };
            
            // Logo URL for preview
            const logoUrl = "{{ asset('assets/logo.png') }}";
            
            async function updatePreview() {
                // Always ensure images are loaded from database first (source of truth)
                const draftId = currentDraftId || localStorage.getItem('draftId');
                if (draftId && (!cachedDraftImages.heading_images || cachedDraftImages.heading_images.length === 0)) {
                    console.log('📥 Cache empty in updatePreview, fetching from DATABASE...');
                    await loadDraftImages();
                }
                
                const previewContent = document.getElementById('preview-content');
                const previewPlaceholder = document.getElementById('preview-placeholder');
                const previewWrapper = document.getElementById('preview-wrapper');
                const previewUrl = document.getElementById('preview-url');
                
                if (!previewContent) {
                    console.warn('Preview content element not found');
                    return;
                }
                
                if (!previewWrapper) {
                    console.warn('Preview wrapper element not found');
                    return;
                }
                
                // Get all form values from localStorage or current fields
                const savedData = localStorage.getItem('memoryFormData');
                let formData = {};
                if (savedData) {
                    try {
                        formData = JSON.parse(savedData);
                    } catch(e) {}
                }
                
                const pageName = document.getElementById('page-name')?.value || formData.pageName || '';
                const heading = document.getElementById('heading')?.value || formData.heading || '';
                const subheading = document.getElementById('subheading')?.value || formData.subheading || '';
                const message = document.getElementById('message')?.value || formData.message || '';
                const from = document.getElementById('from')?.value || formData.from || '';
                const youtubeUrl = document.getElementById('youtube-url')?.value || formData.youtubeUrl || '';
                const themeColor = document.getElementById('theme-color')?.value || formData.themeColor || '#ff6b6b';
                const bgColor = document.getElementById('bg-color')?.value || formData.bgColor || '#0f172a';
                
                // Update URL
                if (previewUrl) {
                    if (pageName) {
                        const urlSlug = pageName.toLowerCase().replace(/\s+/g, '-');
                        previewUrl.textContent = `hamroyaad.com/${urlSlug}`;
                    } else {
                        previewUrl.textContent = 'hamroyaad.com/memory/';
                    }
                }
                
                // Update background color with validation
                const validBgColor = /^#[0-9A-Fa-f]{6}$/.test(bgColor) ? bgColor : '#0f172a';
                previewContent.style.backgroundColor = validBgColor;
                previewContent.style.transition = 'background-color 0.5s ease';
                
                // Get all images directly from database cache (source of truth)
                let headingImages = [];
                if (cachedDraftImages.heading_images && cachedDraftImages.heading_images.length > 0) {
                    headingImages = cachedDraftImages.heading_images.map(path => {
                        // Keep Cloudflare R2 URLs as-is (full URLs)
                        if (path && (path.startsWith('http://') || path.startsWith('https://'))) {
                            return path;
                        }
                        // Handle local storage paths
                        if (path && path.startsWith('/storage')) {
                            return path;
                        }
                        // Relative paths
                        if (path) {
                            return `/storage/${path}`;
                        }
                        return null;
                    }).filter(Boolean);
                    console.log('📸 Heading images from DATABASE:', headingImages);
                }
                
                let additionalImages = [];
                if (cachedDraftImages.images && cachedDraftImages.images.length > 0) {
                    additionalImages = cachedDraftImages.images.map(path => {
                        // Keep Cloudflare R2 URLs as-is (full URLs)
                        if (path && (path.startsWith('http://') || path.startsWith('https://'))) {
                            return path;
                        }
                        // Handle local storage paths
                        if (path && path.startsWith('/storage')) {
                            return path;
                        }
                        // Relative paths
                        if (path) {
                            return `/storage/${path}`;
                        }
                        return null;
                    }).filter(Boolean);
                    console.log('📸 Additional images from DATABASE:', additionalImages);
                }
                
                console.log('📸 All images for preview:', { heading: headingImages.length, additional: additionalImages.length, total: headingImages.length + additionalImages.length });
                
                // Combine all images
                const allImages = [...headingImages, ...additionalImages];
                
                console.log('📸 Final allImages array:', allImages);
                console.log('📸 Image URLs:', allImages.map((url, idx) => `${idx + 1}: ${url}`));
                
                // Check if images changed - if not, preserve existing gallery
                const imagesChanged = allImages.length !== previousPreviewState.imageCount || 
                    JSON.stringify(allImages) !== JSON.stringify(previousPreviewState.lastImageList || []);
                
                // Check if we need full rebuild (images changed or first render)
                const existingContainer = previewWrapper.querySelector('.preview-gallery-container');
                const needsFullRebuild = !existingContainer || imagesChanged;
                
                // If only text/colors changed and gallery exists, update selectively
                if (!needsFullRebuild && existingContainer) {
                    // Update header title
                    const titleEl = existingContainer.querySelector('.preview-title');
                    if (titleEl) {
                        if (titleEl.textContent !== (heading || 'Hamro Yaad')) {
                            titleEl.textContent = heading || 'Hamro Yaad';
                        }
                        // Always update theme color in gradient to ensure it's current
                        titleEl.style.background = `linear-gradient(135deg, ${themeColor} 0%, #ff5252 100%)`;
                        titleEl.style.webkitBackgroundClip = 'text';
                        titleEl.style.webkitTextFillColor = 'transparent';
                        titleEl.style.backgroundClip = 'text';
                    }
                    
                    // Update subtitle
                    const subtitleEl = existingContainer.querySelector('.preview-subtitle');
                    const subtitleWrapper = existingContainer.querySelector('.preview-title-wrapper');
                    if (subtitleWrapper) {
                        if (subheading) {
                            if (!subtitleEl) {
                                const newSubtitle = document.createElement('p');
                                newSubtitle.className = 'preview-subtitle';
                                newSubtitle.style.fontSize = '0.75rem';
                                newSubtitle.style.color = '#cbd5e1';
                                newSubtitle.style.fontWeight = '300';
                                newSubtitle.style.letterSpacing = '2px';
                                newSubtitle.style.textTransform = 'uppercase';
                                newSubtitle.textContent = subheading;
                                subtitleWrapper.appendChild(newSubtitle);
                            } else {
                                subtitleEl.textContent = subheading;
                                subtitleEl.style.display = 'block';
                            }
                        } else if (subtitleEl) {
                            subtitleEl.style.display = 'none';
                        }
                    }
                    
                    // Update custom message section (heading/subheading display)
                    const customMessageSection = existingContainer.querySelector('.preview-message-section');
                    const customMessageTitle = customMessageSection?.querySelector('.preview-message-title');
                    const customMessageSubtitle = customMessageSection?.querySelector('.preview-message-subtitle');
                    
                    if (heading || subheading) {
                        if (!customMessageSection) {
                            // Create custom message section
                            const newSection = document.createElement('div');
                            newSection.className = 'preview-message-section';
                            newSection.style.textAlign = 'center';
                            newSection.style.marginBottom = '2rem';
                            newSection.style.padding = '1.5rem';
                            newSection.style.background = 'linear-gradient(135deg, rgba(255, 107, 107, 0.1) 0%, rgba(255, 82, 82, 0.1) 100%)';
                            newSection.style.borderRadius = '20px';
                            newSection.style.border = '2px solid rgba(255, 107, 107, 0.2)';
                            newSection.style.position = 'relative';
                            newSection.style.overflow = 'hidden';
                            
                            const title = document.createElement('h2');
                            title.className = 'preview-message-title';
                            title.textContent = heading || 'Hamro Yaad';
                            title.style.fontSize = '1.5rem';
                            title.style.fontWeight = '700';
                            title.style.background = `linear-gradient(135deg, ${themeColor} 0%, #ff5252 100%)`;
                            title.style.webkitBackgroundClip = 'text';
                            title.style.webkitTextFillColor = 'transparent';
                            title.style.backgroundClip = 'text';
                            title.style.marginBottom = '0.5rem';
                            title.style.position = 'relative';
                            title.style.zIndex = '1';
                            newSection.appendChild(title);
                            
                            if (subheading) {
                                const subtitle = document.createElement('p');
                                subtitle.className = 'preview-message-subtitle';
                                subtitle.textContent = subheading;
                                subtitle.style.fontSize = '0.875rem';
                                subtitle.style.color = '#cbd5e1';
                                subtitle.style.fontWeight = '300';
                                subtitle.style.letterSpacing = '1px';
                                subtitle.style.position = 'relative';
                                subtitle.style.zIndex = '1';
                                newSection.appendChild(subtitle);
                            }
                            
                            // Insert after header
                            const header = existingContainer.querySelector('.preview-header');
                            if (header && header.nextSibling) {
                                existingContainer.insertBefore(newSection, header.nextSibling);
                            } else if (header) {
                                header.insertAdjacentElement('afterend', newSection);
                            }
                        } else {
                            // Update existing custom message section
                            if (customMessageTitle) {
                                customMessageTitle.textContent = heading || 'Hamro Yaad';
                                // Always update gradient to ensure it matches current theme color
                                customMessageTitle.style.background = `linear-gradient(135deg, ${themeColor} 0%, #ff5252 100%)`;
                                customMessageTitle.style.webkitBackgroundClip = 'text';
                                customMessageTitle.style.webkitTextFillColor = 'transparent';
                                customMessageTitle.style.backgroundClip = 'text';
                            }
                            
                            if (subheading) {
                                if (!customMessageSubtitle) {
                                    const subtitle = document.createElement('p');
                                    subtitle.className = 'preview-message-subtitle';
                                    subtitle.textContent = subheading;
                                    subtitle.style.fontSize = '0.875rem';
                                    subtitle.style.color = '#cbd5e1';
                                    subtitle.style.fontWeight = '300';
                                    subtitle.style.letterSpacing = '1px';
                                    subtitle.style.position = 'relative';
                                    subtitle.style.zIndex = '1';
                                    customMessageSection.appendChild(subtitle);
                                } else {
                                    customMessageSubtitle.textContent = subheading;
                                    customMessageSubtitle.style.display = 'block';
                                }
                            } else if (customMessageSubtitle) {
                                customMessageSubtitle.style.display = 'none';
                            }
                            
                            customMessageSection.style.display = 'block';
                        }
                    } else if (customMessageSection) {
                        customMessageSection.style.display = 'none';
                    }
                    
                    // Handle message and from section
                    let messageSection = existingContainer.querySelector('.preview-message-content');
                    const galleryWrapper = existingContainer.querySelector('.preview-gallery-wrapper');
                    const youtubePlayer = existingContainer.querySelector('[style*="position: fixed"]');
                    
                    // Create message section if it doesn't exist and we have content
                    if ((message || from) && !messageSection) {
                        messageSection = document.createElement('section');
                        messageSection.className = 'preview-message-content';
                        messageSection.style.marginTop = youtubeUrl ? '3rem' : '2rem';
                        messageSection.style.margin = '2rem auto';
                        messageSection.style.maxWidth = '100%';
                        messageSection.style.padding = '0';
                        messageSection.style.textAlign = 'center';
                        
                        // Insert after gallery or before end of container
                        if (galleryWrapper && galleryWrapper.nextSibling) {
                            existingContainer.insertBefore(messageSection, galleryWrapper.nextSibling);
                        } else if (galleryWrapper) {
                            galleryWrapper.insertAdjacentElement('afterend', messageSection);
                        } else {
                            existingContainer.appendChild(messageSection);
                        }
                    }
                    
                    if (messageSection) {
                        if (message || from) {
                            // Update or create message text
                            let messageEl = messageSection.querySelector('.preview-message-text');
                            if (message) {
                                if (!messageEl) {
                                    messageEl = document.createElement('div');
                                    messageEl.className = 'preview-message-text';
                                    messageEl.style.fontSize = '1rem';
                                    messageEl.style.lineHeight = '2';
                                    messageEl.style.color = '#f1f5f9';
                                    messageEl.style.margin = '0 0 2rem 0';
                                    messageEl.style.whiteSpace = 'pre-wrap';
                                    messageEl.style.wordWrap = 'break-word';
                                    messageEl.style.fontWeight = '300';
                                    messageEl.style.letterSpacing = '0.5px';
                                    messageSection.appendChild(messageEl);
                                }
                                messageEl.textContent = message;
                                messageEl.style.display = 'block';
                            } else if (messageEl) {
                                messageEl.style.display = 'none';
                            }
                            
                            // Update or create from section
                            let fromSection = messageSection.querySelector('.preview-from-section');
                            let fromEl = fromSection?.querySelector('.preview-from-text');
                            
                            if (from) {
                                if (!fromSection) {
                                    fromSection = document.createElement('div');
                                    fromSection.className = 'preview-from-section';
                                    fromSection.style.marginTop = '3rem';
                                    fromSection.style.textAlign = 'right';
                                    fromSection.style.paddingTop = '2rem';
                                    fromSection.style.borderTop = '1px solid rgba(255, 107, 107, 0.2)';
                                    messageSection.appendChild(fromSection);
                                }
                                
                                if (!fromEl) {
                                    fromEl = document.createElement('p');
                                    fromEl.className = 'preview-from-text';
                                    fromEl.style.fontSize = '1.2rem';
                                    fromEl.style.fontWeight = '500';
                                    fromEl.style.color = themeColor;
                                    fromEl.style.fontStyle = 'italic';
                                    fromEl.style.letterSpacing = '1px';
                                    fromSection.appendChild(fromEl);
                                }
                                fromEl.textContent = `— ${from}`;
                                // Always update theme color for from text
                                fromEl.style.color = themeColor;
                                fromSection.style.display = 'block';
                            } else if (fromSection) {
                                fromSection.style.display = 'none';
                            }
                            
                            messageSection.style.display = 'block';
                        } else {
                            messageSection.style.display = 'none';
                        }
                    }
                    
                    // Update YouTube player
                    let youtubePlayerEl = existingContainer.querySelector('[style*="position: fixed"], [id*="youtube"], [class*="youtube"]');
                    // Also check for the fixed position div that contains the player
                    if (!youtubePlayerEl) {
                        const allFixed = existingContainer.querySelectorAll('[style*="position"]');
                        allFixed.forEach(el => {
                            if (el.style.position === 'fixed' && el.textContent.includes('Background Music')) {
                                youtubePlayerEl = el;
                            }
                        });
                    }
                    
                    if (youtubeUrl && !youtubePlayerEl) {
                        // Create YouTube player
                        youtubePlayerEl = document.createElement('div');
                        youtubePlayerEl.setAttribute('data-youtube-player', 'true');
                        youtubePlayerEl.style.position = 'sticky';
                        youtubePlayerEl.style.top = '0';
                        youtubePlayerEl.style.left = '0';
                        youtubePlayerEl.style.right = '0';
                        youtubePlayerEl.style.zIndex = '9999';
                        youtubePlayerEl.style.background = `linear-gradient(135deg, ${themeColor} 0%, #ff5252 100%)`;
                        youtubePlayerEl.style.padding = '0.75rem 1rem';
                        youtubePlayerEl.style.display = 'flex';
                        youtubePlayerEl.style.alignItems = 'center';
                        youtubePlayerEl.style.gap = '0.75rem';
                        youtubePlayerEl.style.fontSize = '0.75rem';
                        youtubePlayerEl.style.color = 'white';
                        youtubePlayerEl.style.borderBottom = '2px solid rgba(255,255,255,0.1)';
                        youtubePlayerEl.style.boxShadow = '0 4px 20px rgba(0,0,0,0.3)';
                        youtubePlayerEl.style.marginBottom = '1rem';
                        
                        const playBtn = document.createElement('button');
                        playBtn.style.width = '40px';
                        playBtn.style.height = '40px';
                        playBtn.style.borderRadius = '50%';
                        playBtn.style.background = 'rgba(255,255,255,0.2)';
                        playBtn.style.border = '2px solid rgba(255,255,255,0.3)';
                        playBtn.style.display = 'flex';
                        playBtn.style.alignItems = 'center';
                        playBtn.style.justifyContent = 'center';
                        playBtn.style.cursor = 'pointer';
                        playBtn.style.fontSize = '0.9rem';
                        playBtn.style.color = 'white';
                        playBtn.style.transition = 'all 0.3s ease';
                        playBtn.innerHTML = '<span>▶</span>';
                        youtubePlayerEl.appendChild(playBtn);
                        
                        const infoDiv = document.createElement('div');
                        infoDiv.style.flex = '1';
                        const titleDiv = document.createElement('div');
                        titleDiv.style.fontWeight = '600';
                        titleDiv.style.fontSize = '0.85rem';
                        titleDiv.style.marginBottom = '0.1rem';
                        titleDiv.textContent = 'Background Music';
                        const subtitleDiv = document.createElement('div');
                        subtitleDiv.style.fontSize = '0.7rem';
                        subtitleDiv.style.opacity = '0.9';
                        subtitleDiv.textContent = 'YouTube Audio';
                        infoDiv.appendChild(titleDiv);
                        infoDiv.appendChild(subtitleDiv);
                        youtubePlayerEl.appendChild(infoDiv);
                        
                        // Insert at the beginning of container (but fixed position will work relative to viewport)
                        existingContainer.insertBefore(youtubePlayerEl, existingContainer.firstChild);
                        
                        // Also update message section margin if it exists
                        const msgSection = existingContainer.querySelector('.preview-message-content');
                        if (msgSection) {
                            msgSection.style.marginTop = '3rem';
                        }
                    } else if (!youtubeUrl && youtubePlayerEl) {
                        youtubePlayerEl.remove();
                        // Update message section margin when player is removed
                        const msgSection = existingContainer.querySelector('.preview-message-content');
                        if (msgSection) {
                            msgSection.style.marginTop = '2rem';
                        }
                    } else if (youtubeUrl && youtubePlayerEl) {
                        // Update theme color in YouTube player if changed
                        if (themeColor !== previousPreviewState.themeColor) {
                            youtubePlayerEl.style.background = `linear-gradient(135deg, ${themeColor} 0%, #ff5252 100%)`;
                        }
                    }
                    
                    // Update theme color in all gradient elements
                    if (themeColor !== previousPreviewState.themeColor) {
                        const gradientElements = existingContainer.querySelectorAll('[style*="linear-gradient"], .preview-view-btn.active, .preview-gallery-item-badge');
                        gradientElements.forEach(el => {
                            if (el.style.background && el.style.background.includes('linear-gradient')) {
                                el.style.background = el.style.background.replace(
                                    /linear-gradient\(135deg, #[0-9A-Fa-f]{6}/g,
                                    `linear-gradient(135deg, ${themeColor}`
                                );
                            }
                        });
                        
                        // Update from text color
                        const fromTextEl = existingContainer.querySelector('.preview-from-text');
                        if (fromTextEl) {
                            fromTextEl.style.color = themeColor;
                        }
                    }
                    
                    // Update background color
                    const validBgColor = /^#[0-9A-Fa-f]{6}$/.test(bgColor) ? bgColor : '#0f172a';
                    if (validBgColor !== previousPreviewState.bgColor) {
                        existingContainer.style.background = validBgColor;
                    }
                    
                    // Update message section margin if YouTube player state changed
                    if (messageSection && (youtubeUrl !== previousPreviewState.youtubeUrl)) {
                        messageSection.style.marginTop = youtubeUrl ? '3rem' : '2rem';
                    }
                    
                    // Update state
                    previousPreviewState = {
                        heading,
                        subheading,
                        message,
                        from,
                        youtubeUrl,
                        themeColor,
                        bgColor,
                        imageCount: allImages.length,
                        lastImageList: [...allImages]
                    };
                    
                    return; // Exit early - no need to rebuild
                }
                
                // Build premium gallery layout preview with view options (full rebuild)
                let previewHTML = `
                    <style>
                        .preview-gallery-container { max-width: 100%; margin: 0 auto; padding: 1rem; font-family: 'Poppins', sans-serif; background: ${validBgColor}; min-height: 100%; transition: background-color 0.5s ease; }
                        .preview-header { margin-bottom: 2rem; display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 1rem; padding-top: 3rem; }
                        .preview-header-logo { display: flex; align-items: center; gap: 0.75rem; }
                        .preview-header-logo img { height: 3rem; width: auto; object-fit: contain; }
                        .preview-header-logo-text { font-size: 1.5rem; font-weight: 700; background: linear-gradient(135deg, ${themeColor} 0%, #ff5252 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; animation: gradientShift 3s ease infinite; background-size: 200% 200%; letter-spacing: 0.5px; }
                        @media (min-width: 768px) {
                            .preview-header-logo img { height: 4rem; }
                            .preview-header-logo-text { font-size: 1.75rem; }
                        }
                        .preview-title-wrapper { display: flex; flex-direction: column; gap: 0.5rem; }
                        .preview-title { font-size: 1.75rem; font-weight: 700; background: linear-gradient(135deg, ${themeColor} 0%, #ff5252 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; animation: gradientShift 3s ease infinite; background-size: 200% 200%; }
                        @keyframes gradientShift { 0%, 100% { background-position: 0% 50%; } 50% { background-position: 100% 50%; } }
                        .preview-subtitle { font-size: 0.75rem; color: #cbd5e1; font-weight: 300; letter-spacing: 2px; text-transform: uppercase; }
                        .preview-view-controls { display: flex; gap: 0.4rem; background: rgba(255, 255, 255, 0.1); backdrop-filter: blur(20px) saturate(180%); -webkit-backdrop-filter: blur(20px) saturate(180%); padding: 0.4rem; border-radius: 10px; box-shadow: 0 4px 15px rgba(0,0,0,0.2), inset 0 1px 0 rgba(255, 255, 255, 0.2); border: 1px solid rgba(255, 255, 255, 0.15); }
                        .preview-view-btn { background: transparent; border: none; color: #cbd5e1; padding: 0.5rem 0.75rem; border-radius: 6px; cursor: pointer; transition: all 0.3s ease; display: flex; align-items: center; justify-content: center; font-size: 0.75rem; }
                        .preview-view-btn:hover { background: rgba(255, 107, 107, 0.2); color: ${themeColor}; transform: translateY(-2px); }
                        .preview-view-btn.active { background: transparent; color: ${themeColor}; }
                        .preview-view-btn.active svg { filter: drop-shadow(0 0 4px ${themeColor}); }
                        .preview-message-section { text-align: center; margin-bottom: 2rem; padding: 1.5rem; background: linear-gradient(135deg, rgba(255, 107, 107, 0.1) 0%, rgba(255, 82, 82, 0.1) 100%); border-radius: 20px; border: 2px solid rgba(255, 107, 107, 0.2); position: relative; overflow: hidden; }
                        .preview-message-section::before { content: ''; position: absolute; top: -50%; left: -50%; width: 200%; height: 200%; background: radial-gradient(circle, rgba(255, 107, 107, 0.1) 0%, transparent 70%); animation: messageRotate 15s linear infinite; }
                        @keyframes messageRotate { from { transform: rotate(0deg); } to { transform: rotate(360deg); } }
                        .preview-message-title { font-size: 1.5rem; font-weight: 700; background: linear-gradient(135deg, ${themeColor} 0%, #ff5252 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; margin-bottom: 0.5rem; position: relative; z-index: 1; }
                        .preview-message-subtitle { font-size: 0.875rem; color: #cbd5e1; font-weight: 300; letter-spacing: 1px; position: relative; z-index: 1; }
                        .preview-gallery-wrapper { position: relative; min-height: 200px; margin-bottom: 2rem; }
                        .preview-gallery-grid { display: grid; grid-template-columns: repeat(auto-fill, minmax(100px, 1fr)); gap: 0.75rem; transition: all 0.5s ease; }
                        .preview-gallery-grid.masonry-view { column-count: 3; column-gap: 0.75rem; display: block; }
                        .preview-gallery-grid.masonry-view .preview-gallery-item { break-inside: avoid; margin-bottom: 0.75rem; display: inline-block; width: 100%; }
                        .preview-gallery-grid.carousel-view { display: flex; overflow-x: auto; scroll-snap-type: x mandatory; gap: 0.75rem; padding-bottom: 0.5rem; }
                        .preview-gallery-grid.carousel-view .preview-gallery-item { flex: 0 0 200px; scroll-snap-align: start; height: 200px; }
                        .preview-gallery-item { position: relative; overflow: hidden; border-radius: 12px; aspect-ratio: 1; cursor: pointer; transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1); background: #1e293b; box-shadow: 0 4px 15px rgba(0,0,0,0.3); opacity: 0; animation: fadeInScale 0.6s ease forwards; }
                        @keyframes fadeInScale { from { opacity: 0; transform: scale(0.9); } to { opacity: 1; transform: scale(1); } }
                        .preview-gallery-item:hover { transform: translateY(-6px) scale(1.05); box-shadow: 0 12px 30px rgba(255, 107, 107, 0.4); z-index: 10; }
                        .preview-gallery-item img { width: 100%; height: 100%; object-fit: cover; transition: transform 0.6s cubic-bezier(0.4, 0, 0.2, 1); }
                        .preview-gallery-item:hover img { transform: scale(1.15); }
                        .preview-gallery-item-overlay { position: absolute; inset: 0; background: linear-gradient(to top, rgba(0,0,0,0.8) 0%, transparent 50%); opacity: 0; transition: opacity 0.3s ease; display: flex; align-items: flex-end; padding: 0.75rem; pointer-events: none; }
                        .preview-gallery-item:hover .preview-gallery-item-overlay { opacity: 1; }
                        .preview-gallery-item-badge { background: linear-gradient(135deg, ${themeColor} 0%, #ff5252 100%); color: white; padding: 0.25rem 0.5rem; border-radius: 12px; font-size: 0.65rem; font-weight: 600; text-transform: uppercase; letter-spacing: 0.5px; }
                        .preview-message-content { margin: 2rem auto; max-width: 100%; padding: 0; text-align: center; }
                        .preview-message-text { font-size: 1rem; line-height: 2; color: #f1f5f9; margin: 0 0 2rem 0; white-space: pre-wrap; word-wrap: break-word; font-weight: 300; letter-spacing: 0.5px; }
                        .preview-from-section { margin-top: 3rem; text-align: right; padding-top: 2rem; border-top: 1px solid rgba(255, 107, 107, 0.2); }
                        .preview-from-text { font-size: 1.2rem; font-weight: 500; color: ${themeColor}; font-style: italic; letter-spacing: 1px; }
                    </style>
                    <div class="preview-gallery-container" style="color: #f1f5f9;">
                        <!-- Header -->
                        <header class="preview-header">
                            <div class="preview-header-logo">
                                <img src="${logoUrl}" alt="Hamro Yaad" style="height: 3rem; width: auto; object-fit: contain;">
                                <span class="preview-header-logo-text">Hamro Yaad</span>
                            </div>
                            ${allImages.length > 0 ? `
                                <div class="preview-view-controls">
                                    <button class="preview-view-btn active" data-view="grid" title="Grid">
                                        <svg width="14" height="14" viewBox="0 0 20 20" fill="none"><rect x="2" y="2" width="6" height="6" rx="1" stroke="currentColor" stroke-width="2" fill="none"/><rect x="12" y="2" width="6" height="6" rx="1" stroke="currentColor" stroke-width="2" fill="none"/><rect x="2" y="12" width="6" height="6" rx="1" stroke="currentColor" stroke-width="2" fill="none"/><rect x="12" y="12" width="6" height="6" rx="1" stroke="currentColor" stroke-width="2" fill="none"/></svg>
                                    </button>
                                    <button class="preview-view-btn" data-view="masonry" title="Masonry">
                                        <svg width="14" height="14" viewBox="0 0 20 20" fill="none"><rect x="2" y="2" width="7" height="7" rx="1" stroke="currentColor" stroke-width="2" fill="none"/><rect x="11" y="2" width="7" height="4" rx="1" stroke="currentColor" stroke-width="2" fill="none"/><rect x="11" y="8" width="7" height="7" rx="1" stroke="currentColor" stroke-width="2" fill="none"/></svg>
                                    </button>
                                    <button class="preview-view-btn" data-view="carousel" title="Carousel">
                                        <svg width="14" height="14" viewBox="0 0 20 20" fill="none"><rect x="2" y="4" width="16" height="12" rx="2" stroke="currentColor" stroke-width="2" fill="none"/><circle cx="6" cy="10" r="1.5" fill="currentColor"/><circle cx="10" cy="10" r="1.5" fill="currentColor"/><circle cx="14" cy="10" r="1.5" fill="currentColor"/></svg>
                                    </button>
                                </div>
                            ` : ''}
                        </header>
                        
                        <!-- Custom Message Section -->
                        ${heading || subheading ? `
                            <div class="preview-message-section">
                                <h2 class="preview-message-title">${heading || 'Hamro Yaad'}</h2>
                                ${subheading ? `<p class="preview-message-subtitle">${subheading}</p>` : ''}
                            </div>
                        ` : ''}
                        
                        <!-- Gallery Grid -->
                        ${allImages.length > 0 ? `
                            <div class="preview-gallery-wrapper">
                                <div class="preview-gallery-grid grid-view" id="previewGalleryGrid">
                                    ${allImages.map((imgSrc, index) => {
                                        // Ensure image URL is valid - handle Cloudflare R2 URLs, local paths, and base64
                                        let finalImgSrc = imgSrc;
                                        if (!imgSrc) {
                                            console.warn('Empty image src at index', index);
                                            return '';
                                        }
                                        
                                        // Handle base64 data URLs - use as-is
                                        if (imgSrc.startsWith('data:image')) {
                                            finalImgSrc = imgSrc;
                                        }
                                        // If it's already a full URL (Cloudflare R2), use as-is
                                        else if (imgSrc.startsWith('http://') || imgSrc.startsWith('https://')) {
                                            finalImgSrc = imgSrc;
                                        } 
                                        // Absolute path starting with /
                                        else if (imgSrc.startsWith('/')) {
                                            // Local storage path or absolute path - make it full URL
                                            finalImgSrc = window.location.origin + imgSrc;
                                        } 
                                        // Relative path - add /storage/
                                        else {
                                            finalImgSrc = window.location.origin + '/storage/' + imgSrc;
                                        }
                                        
                                        console.log('🎨 Rendering image', index + 1, ':', finalImgSrc.substring(0, 100) + (finalImgSrc.length > 100 ? '...' : ''));
                                        
                                        // Escape quotes in URL for use in HTML attribute
                                        const escapedSrc = finalImgSrc.replace(/'/g, "\\'").replace(/"/g, '&quot;');
                                        
                                        // Don't add crossorigin for Cloudflare R2 URLs - they're public and don't need it
                                        // Only add crossorigin for same-origin images that need it for canvas operations
                                        // Cloudflare R2 public buckets don't require CORS for simple image loading
                                        const crossoriginAttr = '';
                                        
                                        // For Cloudflare R2 URLs, ensure they're properly encoded
                                        // R2 URLs might have special characters that need encoding
                                        let imageUrl = finalImgSrc;
                                        if (finalImgSrc.startsWith('https://') || finalImgSrc.startsWith('http://')) {
                                            // For external URLs, try to encode only the path if needed
                                            try {
                                                const urlObj = new URL(finalImgSrc);
                                                // Reconstruct URL with properly encoded path
                                                imageUrl = urlObj.origin + urlObj.pathname + (urlObj.search || '');
                                            } catch (e) {
                                                // If URL parsing fails, use as-is
                                                console.warn('Could not parse URL:', finalImgSrc);
                                            }
                                        }
                                        
                                        // Escape the final URL for HTML
                                        const finalEscapedSrc = imageUrl.replace(/'/g, "\\'").replace(/"/g, '&quot;');
                                        
                                        return `
                                        <div class="preview-gallery-item" data-index="${index}" style="animation-delay: ${index * 0.05}s; background: #1e293b; position: relative; overflow: hidden; min-height: 100px;">
                                            <img src="${finalEscapedSrc}" 
                                                 alt="Memory ${index + 1}" 
                                                 loading="eager" 
                                                 style="width:100%;height:100%;object-fit:cover;display:block;position:absolute;top:0;left:0;z-index:1;background:#1e293b;"
                                                 ${crossoriginAttr}
                                                 onload="console.log('✅ Image ${index + 1} loaded successfully:', '${finalEscapedSrc.substring(0, 80)}...'); this.style.opacity='1'; const overlay = this.parentElement.querySelector('.preview-gallery-item-overlay'); if(overlay) overlay.style.display='flex';"
                                                 onerror="console.error('❌ Image ${index + 1} FAILED to load. URL:', '${finalEscapedSrc}'); console.error('Error details:', {url: '${finalEscapedSrc}', index: ${index}}); const parent = this.parentElement; parent.style.background='#1e293b'; parent.style.display='flex'; parent.style.alignItems='center'; parent.style.justifyContent='center'; parent.innerHTML='<span style=\\'color:#ef4444;font-size:0.75rem\\'>Error loading</span>';">
                                            <div class="preview-gallery-item-overlay" style="display:none;">
                                                <div class="preview-gallery-item-badge">Memory ${index + 1}</div>
                                            </div>
                                        </div>
                                    `;
                                    }).join('')}
                                </div>
                            </div>
                        ` : ''}
                        
                        <!-- YouTube Audio Player Preview -->
                        ${youtubeUrl ? `
                            <div style="position: fixed; top: 0; left: 0; right: 0; z-index: 9999; background: linear-gradient(135deg, ${themeColor} 0%, #ff5252 100%); padding: 0.75rem 1rem; display: flex; align-items: center; gap: 0.75rem; font-size: 0.75rem; color: white; border-bottom: 2px solid rgba(255,255,255,0.1); box-shadow: 0 4px 20px rgba(0,0,0,0.3);">
                                <button style="width: 40px; height: 40px; border-radius: 50%; background: rgba(255,255,255,0.2); border: 2px solid rgba(255,255,255,0.3); display: flex; align-items: center; justify-content: center; cursor: pointer; font-size: 0.9rem; color: white; transition: all 0.3s ease;" onmouseover="this.style.background='rgba(255,255,255,0.3)'; this.style.transform='scale(1.1)'" onmouseout="this.style.background='rgba(255,255,255,0.2)'; this.style.transform='scale(1)'">
                                    <span id="previewPlayIcon">▶</span>
                                </button>
                                <div style="flex: 1;">
                                    <div style="font-weight: 600; font-size: 0.85rem; margin-bottom: 0.1rem;">Background Music</div>
                                    <div style="font-size: 0.7rem; opacity: 0.9;">YouTube Audio</div>
                                </div>
                            </div>
                        ` : ''}
                        
                        <!-- Message Section - Premium (Not in Box) -->
                        ${message || from ? `
                            <section class="preview-message-content" style="margin-top: ${youtubeUrl ? '3rem' : '2rem'};">
                                ${message ? `
                                    <div class="preview-message-text">${message}</div>
                                ` : ''}
                                ${from ? `
                                    <div class="preview-from-section">
                                        <p class="preview-from-text">— ${from}</p>
                                    </div>
                                ` : ''}
                            </section>
                        ` : ''}
                    </div>
                `;
                
                // Show placeholder if no content
                if (!heading && !subheading && !message && !from && allImages.length === 0 && !pageName) {
                    if (previewPlaceholder) {
                        previewPlaceholder.style.display = 'block';
                    }
                    if (previewWrapper) {
                        previewWrapper.innerHTML = '';
                    }
                } else {
                    if (previewPlaceholder) {
                        previewPlaceholder.style.display = 'none';
                    }
                    if (previewWrapper) {
                        try {
                            previewWrapper.innerHTML = previewHTML;
                            
                            // Initialize view buttons after HTML is inserted
                            setTimeout(() => {
                                initPreviewViewButtons();
                            }, 200);
                            
                            // Update state after rebuild
                            previousPreviewState = {
                                heading,
                                subheading,
                                message,
                                from,
                                youtubeUrl,
                                themeColor,
                                bgColor,
                                imageCount: allImages.length,
                                lastImageList: [...allImages]
                            };
                        } catch (error) {
                            console.error('Error updating preview:', error);
                        }
                    }
                }
                
                // Force a reflow to ensure preview is visible
                if (previewContent) {
                    previewContent.style.display = 'block';
                }
            }
            
            // Initialize preview view buttons handler
            function initPreviewViewButtons() {
                const previewWrapper = document.getElementById('preview-wrapper');
                if (!previewWrapper) return;
                
                const galleryGrid = previewWrapper.querySelector('#previewGalleryGrid');
                const viewButtons = previewWrapper.querySelectorAll('.preview-view-btn');
                
                if (galleryGrid && viewButtons.length > 0) {
                    viewButtons.forEach(btn => {
                        // Remove existing listeners to prevent duplicates
                        const newBtn = btn.cloneNode(true);
                        btn.parentNode.replaceChild(newBtn, btn);
                        
                        newBtn.addEventListener('click', function(e) {
                            e.preventDefault();
                            e.stopPropagation();
                            const view = this.dataset.view;
                            
                            // Only allow grid, masonry, and carousel views
                            if (!['grid', 'masonry', 'carousel'].includes(view)) {
                                return;
                            }
                            
                            viewButtons.forEach(b => {
                                if (b !== newBtn) b.classList.remove('active');
                            });
                            newBtn.classList.add('active');
                            
                            galleryGrid.className = 'preview-gallery-grid ' + view + '-view';
                            galleryGrid.style.opacity = '0';
                            setTimeout(() => {
                                galleryGrid.style.opacity = '1';
                            }, 300);
                        });
                    });
                }
            }
            
            // Debug function
            window.debugPreview = function() {
                console.log('Current Step:', currentStep);
                console.log('Page Name:', document.getElementById('page-name')?.value);
                console.log('Heading:', document.getElementById('heading')?.value);
                console.log('Preview Content:', document.getElementById('preview-content'));
                updatePreview();
            };
            
            // Page name validation and preview update
            const pageNameInput = document.getElementById('page-name');
            if (pageNameInput) {
                pageNameInput.addEventListener('input', function(e) {
                    // Remove accents and special characters, keep only letters, numbers, and spaces
                    this.value = this.value.replace(/[^a-zA-Z0-9\s]/g, '');
                    updatePreview();
                });
            }
            
            // Content fields - update preview on input
            ['heading', 'subheading', 'message', 'from', 'youtube-url', 'recipient-name'].forEach(fieldId => {
                const field = document.getElementById(fieldId);
                if (field) {
                    field.addEventListener('input', updatePreview);
                    field.addEventListener('change', updatePreview);
                }
            });
            
            // Color fields - update preview on change
            const themeColorInput = document.getElementById('theme-color');
            const themeColorHexInput = document.getElementById('theme-color-hex');
            const bgColorInput = document.getElementById('bg-color');
            const bgColorHexInput = document.getElementById('bg-color-hex');
            
            if (themeColorInput) {
                themeColorInput.addEventListener('input', updatePreview);
            }
            if (themeColorHexInput) {
                themeColorHexInput.addEventListener('input', updatePreview);
            }
            if (bgColorInput) {
                bgColorInput.addEventListener('input', updatePreview);
            }
            if (bgColorHexInput) {
                bgColorHexInput.addEventListener('input', updatePreview);
            }
            
            // Grid view state
            let currentGridView = 'small';
            
            // Change grid view function
            window.changeGridView = function(view) {
                currentGridView = view;
                const preview = document.getElementById('heading-images-preview');
                const buttons = document.querySelectorAll('.view-toggle');
                
                if (preview) {
                    preview.className = 'mt-4 grid gap-2 gallery-grid-' + view;
                    
                    // Update grid columns based on view
                    if (view === 'small') {
                        preview.classList.add('grid-cols-6');
                    } else if (view === 'medium') {
                        preview.classList.add('grid-cols-4');
                    } else if (view === 'large') {
                        preview.classList.add('grid-cols-3');
                    }
                    
                    // Update image sizes
                    const images = preview.querySelectorAll('img');
                    images.forEach(img => {
                        if (view === 'small') {
                            img.className = 'w-full h-16 object-cover rounded-lg';
                        } else if (view === 'medium') {
                            img.className = 'w-full h-32 object-cover rounded-lg';
                        } else if (view === 'large') {
                            img.className = 'w-full h-48 object-cover rounded-lg';
                        }
                    });
                }
                
                // Update button states
                buttons.forEach(btn => {
                    if (btn.dataset.view === view) {
                        btn.className = 'view-toggle active px-3 py-1.5 bg-[#ff6b6b] text-white rounded-lg text-xs font-semibold transition-all';
                    } else {
                        btn.className = 'view-toggle px-3 py-1.5 bg-gray-700 text-gray-300 rounded-lg text-xs font-semibold hover:bg-gray-600 transition-all';
                    }
                });
            };
            
            // Update image count
            function updateImageCount() {
                const preview = document.getElementById('heading-images-preview');
                const countElement = document.getElementById('image-count');
                const emptyState = document.getElementById('gallery-empty-state');
                
                if (preview && countElement) {
                    const count = preview.children.length;
                    countElement.textContent = `${count} / 50`;
                    
                    // Show/hide empty state
                    if (emptyState) {
                        emptyState.style.display = count === 0 ? 'block' : 'none';
                    }
                    
                    // Update count badge color if limit reached
                    if (count >= 50) {
                        countElement.classList.add('bg-red-600');
                        countElement.classList.remove('bg-gradient-to-r', 'from-[#ff6b6b]', 'to-[#ff5252]');
                    } else {
                        countElement.classList.remove('bg-red-600');
                        countElement.classList.add('bg-gradient-to-r', 'from-[#ff6b6b]', 'to-[#ff5252]');
                    }
                }
            }
            
            // Heading images upload handler
            const headingImagesUpload = document.getElementById('heading-images-upload');
            const headingImagesInput = document.getElementById('heading-images');
            const headingImagesPreview = document.getElementById('heading-images-preview');
            
            if (headingImagesUpload && headingImagesInput && headingImagesPreview) {
                headingImagesUpload.addEventListener('click', () => headingImagesInput.click());
                
                // Drag and drop
                headingImagesUpload.addEventListener('dragover', (e) => {
                    e.preventDefault();
                    headingImagesUpload.classList.add('border-[#ff6b6b]');
                });
                
                headingImagesUpload.addEventListener('dragleave', () => {
                    headingImagesUpload.classList.remove('border-[#ff6b6b]');
                });
                
                headingImagesUpload.addEventListener('drop', (e) => {
                    e.preventDefault();
                    headingImagesUpload.classList.remove('border-[#ff6b6b]');
                    const files = Array.from(e.dataTransfer.files).filter(file => file.type.startsWith('image/'));
                    const currentCount = headingImagesPreview.children.length;
                    const remainingSlots = 50 - currentCount;
                    
                    if (files.length > remainingSlots) {
                        alert(`You can only add ${remainingSlots} more images. Maximum 50 images allowed.`);
                        files.splice(remainingSlots);
                    }
                    
                    files.forEach(file => {
                        handleHeadingImageUpload(file);
                    });
                });
                
                headingImagesInput.addEventListener('change', function(e) {
                    const files = Array.from(e.target.files);
                    const currentCount = headingImagesPreview.children.length;
                    const remainingSlots = 50 - currentCount;
                    
                    if (files.length > remainingSlots) {
                        alert(`You can only add ${remainingSlots} more images. Maximum 50 images allowed.`);
                        files.splice(remainingSlots);
                    }
                    
                    files.forEach(file => {
                        handleHeadingImageUpload(file);
                    });
                    // Reset input to allow selecting same file again
                    this.value = '';
                });
                
                function handleHeadingImageUpload(file) {
                    // Check current count
                    const currentCount = headingImagesPreview.children.length;
                    if (currentCount >= 50) {
                        alert('Maximum 50 images allowed. Please remove some images first.');
                        return;
                    }
                    
                    if (file.size > 10 * 1024 * 1024) {
                        alert('Image size must be less than 10MB');
                        return;
                    }
                    
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        const imgContainer = document.createElement('div');
                        imgContainer.className = 'relative group overflow-hidden rounded-lg shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105';
                        
                        const img = document.createElement('img');
                        img.src = e.target.result;
                        
                        // Set image size based on current grid view
                        if (currentGridView === 'small') {
                            img.className = 'w-full h-16 object-cover rounded-lg';
                        } else if (currentGridView === 'medium') {
                            img.className = 'w-full h-32 object-cover rounded-lg';
                        } else {
                            img.className = 'w-full h-48 object-cover rounded-lg';
                        }
                        
                        // Overlay on hover
                        const overlay = document.createElement('div');
                        overlay.className = 'absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity rounded-lg';
                        
                        // Remove button
                        const removeBtn = document.createElement('button');
                        removeBtn.type = 'button';
                        removeBtn.className = 'absolute top-2 right-2 bg-gradient-to-r from-red-600 to-red-700 text-white rounded-full p-1.5 opacity-0 group-hover:opacity-100 transition-all shadow-lg hover:scale-110';
                        removeBtn.innerHTML = '<svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>';
                        removeBtn.addEventListener('click', async function(e) {
                            e.stopPropagation();
                            const imageUrl = img.src;
                            
                            // Delete from Cloudflare if it's already uploaded (not base64)
                            if (imageUrl && !imageUrl.startsWith('data:image') && (imageUrl.startsWith('http') || imageUrl.startsWith('/storage'))) {
                                try {
                                    await deleteImageFromStorage(imageUrl);
                                } catch (error) {
                                    console.error('Failed to delete image from storage:', error);
                                    // Continue with removal even if deletion fails
                                }
                            }
                            
                            imgContainer.remove();
                            updateImageCount();
                            updateImageNumbers();
                            saveFormData();
                            saveImagesToLocalStorage();
                            updatePreview();
                            setTimeout(() => {
                                saveDraftToBackend();
                            }, 100);
                        });
                        
                        // Image number badge
                        const numberBadge = document.createElement('div');
                        numberBadge.className = 'absolute top-2 left-2 bg-gradient-to-r from-[#ff6b6b] to-[#ff5252] text-white rounded-full w-6 h-6 flex items-center justify-center text-xs font-bold shadow-lg';
                        numberBadge.textContent = currentCount + 1;
                        
                        imgContainer.appendChild(img);
                        imgContainer.appendChild(overlay);
                        imgContainer.appendChild(removeBtn);
                        imgContainer.appendChild(numberBadge);
                        headingImagesPreview.appendChild(imgContainer);
                        
                        // Update all number badges
                        updateImageNumbers();
                        updateImageCount();
                        saveFormData();
                        
                        // Save images to localStorage immediately
                        saveImagesToLocalStorage();
                        
                        // Save draft immediately to DATABASE when image is uploaded (with delay to ensure image is in DOM)
                        setTimeout(() => {
                            saveDraftToBackend().then(() => {
                                console.log('✅ Images saved to DATABASE successfully');
                                // Update image count after save
                                updateImageCount();
                            }).catch(err => {
                                console.error('❌ Error saving images to DATABASE:', err);
                            });
                        }, 300);
                        
                        // Force preview update immediately
                        setTimeout(() => {
                            updatePreview();
                        // Gallery preview updated
                        }, 200);
                    };
                    reader.readAsDataURL(file);
                }
                
                // Update image numbers
                function updateImageNumbers() {
                    const images = headingImagesPreview.querySelectorAll('.relative.group');
                    images.forEach((container, index) => {
                        const badge = container.querySelector('.absolute.top-2.left-2');
                        if (badge) {
                            badge.textContent = index + 1;
                        }
                    });
                }
                
                // Initialize image count
                updateImageCount();
            }
            
            // Watch for heading images changes
            if (headingImagesPreview) {
                const observer = new MutationObserver(() => {
                    updatePreview();
                    // Gallery preview updated
                });
                observer.observe(headingImagesPreview, { childList: true });
            }
            
            // Hero image handlers removed - using heading images carousel instead
            
            // Load draft images from backend DATABASE
            async function loadDraftImages() {
                let draftId = currentDraftId || localStorage.getItem('draftId');
                
                // If no draft ID, try to get the latest draft from database
                if (!draftId) {
                    console.log('⚠️ No draft ID in localStorage, fetching latest draft from DATABASE...');
                    try {
                        const response = await fetch('/api/templates', {
                            headers: {
                                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')?.getAttribute('content') || '',
                            }
                        });
                        if (response.ok) {
                            const result = await response.json();
                            if (result.success && result.data && result.data.length > 0) {
                                // Get the latest draft (first one, as they're ordered by created_at desc)
                                const latestDraft = result.data[0];
                                draftId = latestDraft.id;
                                currentDraftId = draftId;
                                localStorage.setItem('draftId', draftId);
                                console.log('✅ Found latest draft in DATABASE, ID:', draftId);
                            }
                        }
                    } catch (error) {
                        console.error('Error fetching latest draft:', error);
                    }
                }
                
                if (!draftId) {
                    console.log('⚠️ No draft ID found, cannot load from database');
                    return Promise.resolve(); // Return resolved promise so await doesn't hang
                }
                
                console.log('📥 Loading images from DATABASE, draft ID:', draftId);
                
                try {
                    const response = await fetch(`/api/templates/${draftId}`, {
                        headers: {
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')?.getAttribute('content') || '',
                        }
                    });
                    
                    if (response.ok) {
                        const result = await response.json();
                        console.log('📥 API Response:', result);
                        if (result.success && result.data) {
                            const draft = result.data;
                            
                            // Ensure heading_images is an array (handle JSON string case)
                            let headingImages = draft.heading_images || [];
                            if (typeof headingImages === 'string') {
                                try {
                                    headingImages = JSON.parse(headingImages);
                                } catch (e) {
                                    console.error('Failed to parse heading_images JSON:', e);
                                    headingImages = [];
                                }
                            }
                            if (!Array.isArray(headingImages)) {
                                headingImages = [];
                            }
                            
                            // Ensure images.memories is an array
                            let imagesMemories = [];
                            if (draft.images) {
                                if (typeof draft.images === 'string') {
                                    try {
                                        const parsed = JSON.parse(draft.images);
                                        imagesMemories = parsed.memories || [];
                                    } catch (e) {
                                        console.error('Failed to parse images JSON:', e);
                                        imagesMemories = [];
                                    }
                                } else if (Array.isArray(draft.images.memories)) {
                                    imagesMemories = draft.images.memories;
                                }
                            }
                            
                            console.log('📥 Draft data received:', {
                                id: draft.id,
                                heading_images_count: headingImages.length,
                                heading_images: headingImages,
                                images_count: imagesMemories.length
                            });
                            
                            // Cache images for preview access
                            cachedDraftImages.heading_images = headingImages;
                            cachedDraftImages.images = imagesMemories;
                            
                            // Restore heading images to DOM (always, even if container is hidden)
                            if (headingImages && Array.isArray(headingImages) && headingImages.length > 0) {
                                console.log('📥 Attempting to restore', headingImages.length, 'images to DOM');
                                const headingImagesPreview = document.getElementById('heading-images-preview');
                                console.log('📥 Container found:', !!headingImagesPreview, 'Images to restore:', headingImages.length);
                                if (headingImagesPreview) {
                                    console.log('📥 Container exists, proceeding with restoration...');
                                    // Always restore images, even if section is hidden
                                    const existingImages = Array.from(headingImagesPreview.querySelectorAll('img')).map(img => img.src);
                                    
                                    // Normalize image paths - handle both Cloudflare R2 URLs and local storage paths
                                    const draftImagePaths = headingImages.map(path => {
                                        // If it's already a full URL (Cloudflare R2), use it as-is
                                        if (path && (path.startsWith('http://') || path.startsWith('https://'))) {
                                            return path;
                                        }
                                        // If it's a local storage path starting with /storage, make it full URL
                                        if (path && path.startsWith('/storage')) {
                                            return window.location.origin + path;
                                        }
                                        // Otherwise, assume it's a relative path and add /storage/
                                        if (path) {
                                            return window.location.origin + '/storage/' + path;
                                        }
                                        return null;
                                    }).filter(Boolean);
                                    
                                    // Check if images match (more lenient comparison)
                                    const isEmpty = headingImagesPreview.children.length === 0;
                                    let imagesMatch = false;
                                    
                                    if (!isEmpty && existingImages.length === draftImagePaths.length && draftImagePaths.length > 0) {
                                        // Check if all URLs match (allowing for slight differences)
                                        imagesMatch = existingImages.every((src, idx) => {
                                            if (!draftImagePaths[idx]) return false;
                                            const draftPath = draftImagePaths[idx];
                                            // Direct match
                                            if (src === draftPath) return true;
                                            // Check if URLs contain the same path (handles origin differences)
                                            const srcPath = src.split('?')[0]; // Remove query params
                                            const draftPathClean = draftPath.split('?')[0];
                                            if (srcPath === draftPathClean) return true;
                                            // Check if one contains the other (handles encoding differences)
                                            if (src.includes(draftPath) || draftPath.includes(src)) return true;
                                            // Extract just the filename/path part for comparison
                                            const srcFileName = srcPath.split('/').pop();
                                            const draftFileName = draftPathClean.split('/').pop();
                                            return srcFileName === draftFileName;
                                        });
                                    }
                                    
                                    // Always restore images from database (source of truth)
                                    // Don't skip restoration - always use database values
                                    console.log('🔄 Restoring', draftImagePaths.length, 'images from DATABASE:', { 
                                        isEmpty, 
                                        imagesMatch, 
                                        existingCount: existingImages.length, 
                                        draftCount: draftImagePaths.length,
                                        forceRestore: true
                                    });
                                    
                                    // Clear existing
                                    headingImagesPreview.innerHTML = '';
                                    
                                    // Add images from draft with premium gallery format
                                    headingImages.forEach((imagePath, index) => {
                                        if (!imagePath) {
                                            console.warn('⚠️ Skipping null/undefined image at index', index);
                                            return; // Skip null/undefined paths
                                        }
                                        console.log('🔄 Adding image', index + 1, 'to DOM:', imagePath.substring(0, 80) + '...');
                                        const imgContainer = document.createElement('div');
                                        imgContainer.className = 'relative group overflow-hidden rounded-lg shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105';
                                        
                                        const img = document.createElement('img');
                                        // Handle both Cloudflare R2 URLs and local storage paths
                                        if (imagePath.startsWith('http://') || imagePath.startsWith('https://')) {
                                            // Cloudflare R2 URL - use as-is
                                            img.src = imagePath;
                                        } else if (imagePath.startsWith('/storage')) {
                                            // Local storage path - make it full URL
                                            img.src = window.location.origin + imagePath;
                                        } else {
                                            // Relative path - add /storage/
                                            img.src = window.location.origin + '/storage/' + imagePath;
                                        }
                                        
                                        // Set image size based on current grid view (default to small if not set)
                                        const gridView = typeof currentGridView !== 'undefined' ? currentGridView : 'small';
                                        if (gridView === 'small') {
                                            img.className = 'w-full h-16 object-cover rounded-lg';
                                        } else if (gridView === 'medium') {
                                            img.className = 'w-full h-32 object-cover rounded-lg';
                                        } else {
                                            img.className = 'w-full h-48 object-cover rounded-lg';
                                        }
                                        
                                        // Overlay on hover
                                        const overlay = document.createElement('div');
                                        overlay.className = 'absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity rounded-lg';
                                        
                                        // Remove button
                                        const removeBtn = document.createElement('button');
                                        removeBtn.type = 'button';
                                        removeBtn.className = 'absolute top-2 right-2 bg-gradient-to-r from-red-600 to-red-700 text-white rounded-full p-1.5 opacity-0 group-hover:opacity-100 transition-all shadow-lg hover:scale-110';
                                        removeBtn.innerHTML = '<svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>';
                                        removeBtn.addEventListener('click', async function(e) {
                                            e.stopPropagation();
                                            const imageUrl = img.src;
                                            
                                            // Delete from Cloudflare if it's already uploaded (not base64)
                                            if (imageUrl && !imageUrl.startsWith('data:image') && (imageUrl.startsWith('http') || imageUrl.startsWith('/storage'))) {
                                                try {
                                                    await deleteImageFromStorage(imageUrl);
                                                } catch (error) {
                                                    console.error('Failed to delete image from storage:', error);
                                                    // Continue with removal even if deletion fails
                                                }
                                            }
                                            
                                            imgContainer.remove();
                                            updateImageCount();
                                            saveFormData();
                                            saveDraftToBackend();
                                            updatePreview();
                                        });
                                        
                                        // Image number badge
                                        const numberBadge = document.createElement('div');
                                        numberBadge.className = 'absolute top-2 left-2 bg-gradient-to-r from-[#ff6b6b] to-[#ff5252] text-white rounded-full w-6 h-6 flex items-center justify-center text-xs font-bold shadow-lg';
                                        numberBadge.textContent = index + 1;
                                        
                                        imgContainer.appendChild(img);
                                        imgContainer.appendChild(overlay);
                                        imgContainer.appendChild(removeBtn);
                                        imgContainer.appendChild(numberBadge);
                                        headingImagesPreview.appendChild(imgContainer);
                                        console.log('✅ Image', index + 1, 'added to DOM');
                                    });
                                        
                                    console.log('✅ All', headingImages.length, 'images restored to DOM');
                                    
                                    // Update image count after restoration
                                    if (typeof updateImageCount === 'function') {
                                        updateImageCount();
                                    } else {
                                        console.warn('⚠️ updateImageCount function not found');
                                    }
                                    
                                    // Force preview update
                                    setTimeout(() => {
                                        updatePreview();
                                    }, 100);
                                } else {
                                    console.error('❌ heading-images-preview container not found in DOM!');
                                }
                            } else {
                                console.warn('⚠️ No heading images to restore or invalid format:', {
                                    headingImages,
                                    isArray: Array.isArray(headingImages),
                                    length: headingImages?.length
                                });
                            }
                            
                            // Restore additional images
                            if (imagesMemories && Array.isArray(imagesMemories) && imagesMemories.length > 0) {
                                const imagesPreview = document.getElementById('images-preview');
                                if (imagesPreview) {
                                    console.log('📥 Restoring', imagesMemories.length, 'additional images to DOM');
                                    // Clear existing
                                    imagesPreview.innerHTML = '';
                                    
                                    // Add images from draft
                                    imagesMemories.forEach((imagePath, index) => {
                                        if (!imagePath) return; // Skip null/undefined paths
                                        // Handle both Cloudflare R2 URLs and local storage paths
                                        const imgSrc = (imagePath.startsWith('http://') || imagePath.startsWith('https://')) 
                                            ? imagePath 
                                            : (imagePath.startsWith('/storage') 
                                                ? window.location.origin + imagePath 
                                                : window.location.origin + '/storage/' + imagePath);
                                        const imgContainer = document.createElement('div');
                                        imgContainer.className = 'relative group';
                                        const img = document.createElement('img');
                                        img.src = imgSrc;
                                        img.className = 'w-full h-24 object-cover rounded-lg';
                                        
                                        const removeBtn = document.createElement('button');
                                        removeBtn.type = 'button';
                                        removeBtn.className = 'absolute top-1 right-1 bg-red-500 text-white rounded-full p-1 opacity-0 group-hover:opacity-100 transition-opacity';
                                        removeBtn.innerHTML = '<svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>';
                                        removeBtn.addEventListener('click', async function() {
                                            const imageUrl = img.src;
                                            
                                            // Delete from Cloudflare if it's already uploaded (not base64)
                                            if (imageUrl && !imageUrl.startsWith('data:image') && (imageUrl.startsWith('http') || imageUrl.startsWith('/storage'))) {
                                                try {
                                                    await deleteImageFromStorage(imageUrl);
                                                } catch (error) {
                                                    console.error('Failed to delete image from storage:', error);
                                                    // Continue with removal even if deletion fails
                                                }
                                            }
                                            
                                            imgContainer.remove();
                                            saveFormData();
                                            saveDraftToBackend();
                                            updatePreview();
                                        });
                                        
                                        imgContainer.appendChild(img);
                                        imgContainer.appendChild(removeBtn);
                                        imagesPreview.appendChild(imgContainer);
                                    });
                                    console.log('✅ All', imagesMemories.length, 'additional images restored to DOM');
                                } else {
                                    console.warn('⚠️ images-preview container not found');
                                }
                            } else {
                                console.log('⚠️ No additional images to restore or invalid format:', imagesMemories);
                            }
                            
                            // Update preview after images are loaded
                            setTimeout(() => {
                                updatePreview();
                            }, 500);
                            
                            // Also update preview after a longer delay to ensure it's visible
                            setTimeout(() => {
                                updatePreview();
                            }, 1000);
                        }
                    }
                } catch (error) {
                    console.error('Error loading draft images:', error);
                    // Return resolved promise even on error so await doesn't hang
                    return Promise.resolve();
                }
            }
            
            // Restore form data and setup auto-save on page load
            async function initializePage() {
                // Wait a bit for DOM to be fully ready
                setTimeout(async () => {
                    restoreFormData();
                    setupAutoSave();
                    // Always load images from database first (source of truth)
                    try {
                        console.log('🔄 Initializing page, loading images from DATABASE...');
                        await loadDraftImages();
                        console.log('✅ Images loaded from DATABASE:', {
                            heading_count: cachedDraftImages.heading_images?.length || 0,
                            additional_count: cachedDraftImages.images?.length || 0
                        });
                        
                        // Force restore images to DOM if they exist in cache
                        if (cachedDraftImages.heading_images && cachedDraftImages.heading_images.length > 0) {
                            console.log('📥 Checking if images need to be restored to DOM...');
                            const headingImagesPreview = document.getElementById('heading-images-preview');
                            console.log('📥 Container exists:', !!headingImagesPreview, 'Children count:', headingImagesPreview?.children.length || 0);
                            if (headingImagesPreview && headingImagesPreview.children.length === 0) {
                                console.log('🔄 Images in cache but not in DOM, restoring...');
                                // Trigger restoration by calling loadDraftImages again (it will restore to DOM)
                                await loadDraftImages();
                            } else if (!headingImagesPreview) {
                                console.error('❌ heading-images-preview container not found!');
                            }
                        } else {
                            console.log('⚠️ No images in cache to restore');
                        }
                        
                        // Update preview after images are loaded from database
                        setTimeout(() => {
                            updatePreview();
                        }, 300);
                    } catch (error) {
                        console.error('❌ Error loading images from database:', error);
                        // Still try to update preview even if load fails
                        setTimeout(() => {
                            updatePreview();
                        }, 200);
                    }
                }, 150);
            }
            
            // Run on DOMContentLoaded
            if (document.readyState === 'loading') {
                document.addEventListener('DOMContentLoaded', initializePage);
            } else {
                initializePage();
            }
            
            // Start floating particles after initial preview load
            setTimeout(() => {
                const previewWrapper = document.getElementById('preview-wrapper');
                // Preview updated with new gallery layout
            }, 1500);
            
            // Watch for step changes via URL
            let lastStep = currentStep;
            setInterval(() => {
                const urlParams = new URLSearchParams(window.location.search);
                const currentUrlStep = parseInt(urlParams.get('step') || '1');
                if (currentUrlStep !== lastStep) {
                    lastStep = currentUrlStep;
                    currentStep = currentUrlStep;
                    // Reload images from database when step changes
                    setTimeout(async () => {
                        restoreFormData();
                        // Always fetch images from database (source of truth)
                        try {
                            console.log('🔄 Step changed to', currentUrlStep, ', loading images from DATABASE...');
                            await loadDraftImages();
                            console.log('✅ Images loaded from DATABASE after step change');
                            setTimeout(() => {
                                updatePreview();
                            }, 300);
                        } catch (error) {
                            console.error('❌ Error loading images from database on step change:', error);
                            setTimeout(() => {
                                updatePreview();
                            }, 300);
                        }
                    }, 200);
                }
            }, 100);
            
            // Also listen for popstate (back/forward navigation)
            window.addEventListener('popstate', function() {
                setTimeout(async () => {
                    restoreFormData();
                    // Always fetch images from database
                    try {
                        await loadDraftImages();
                        updatePreview();
                    } catch (error) {
                        console.error('Error loading images from database on popstate:', error);
                        updatePreview();
                    }
                }, 300);
            });
            
            const imagesUpload = document.getElementById('images-upload');
            const imagesInput = document.getElementById('images');
            const imagesPreview = document.getElementById('images-preview');
            
            if (imagesUpload && imagesInput) {
                imagesUpload.addEventListener('click', () => imagesInput.click());
                
                // Drag and drop for multiple images
                imagesUpload.addEventListener('dragover', (e) => {
                    e.preventDefault();
                    imagesUpload.classList.add('border-[#ff6b6b]');
                });
                
                imagesUpload.addEventListener('dragleave', () => {
                    imagesUpload.classList.remove('border-[#ff6b6b]');
                });
                
                imagesUpload.addEventListener('drop', (e) => {
                    e.preventDefault();
                    imagesUpload.classList.remove('border-[#ff6b6b]');
                    Array.from(e.dataTransfer.files).forEach(file => {
                        if (file.type.startsWith('image/')) {
                            handleImageUpload(file);
                        }
                    });
                });
                
                imagesInput.addEventListener('change', function(e) {
                    Array.from(e.target.files).forEach(file => {
                        handleImageUpload(file);
                    });
                });
                
                function handleImageUpload(file) {
                    if (file.size > 10 * 1024 * 1024) {
                        alert('Image size must be less than 10MB');
                        return;
                    }
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        const imgContainer = document.createElement('div');
                        imgContainer.className = 'relative group';
                        const img = document.createElement('img');
                        img.src = e.target.result;
                        img.className = 'w-full h-24 object-cover rounded-lg';
                        
                        const removeBtn = document.createElement('button');
                        removeBtn.type = 'button';
                        removeBtn.className = 'absolute top-1 right-1 bg-red-500 text-white rounded-full p-1 opacity-0 group-hover:opacity-100 transition-opacity';
                        removeBtn.innerHTML = '<svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>';
                        removeBtn.addEventListener('click', function() {
                            imgContainer.remove();
                            saveFormData();
                            updatePreview();
                        });
                        
                        imgContainer.appendChild(img);
                        imgContainer.appendChild(removeBtn);
                        imagesPreview.appendChild(imgContainer);
                        
                        saveFormData();
                        // Save draft immediately when image is uploaded
                        saveDraftToBackend();
                        setTimeout(updatePreview, 100);
                    };
                    reader.readAsDataURL(file);
                }
            }
            
            // Color picker sync
            const themeColor = document.getElementById('theme-color');
            const themeColorHex = document.getElementById('theme-color-hex');
            if (themeColor && themeColorHex) {
                themeColor.addEventListener('input', function() {
                    themeColorHex.value = this.value;
                    saveFormData();
                });
                themeColorHex.addEventListener('input', function() {
                    if (/^#[0-9A-F]{6}$/i.test(this.value)) {
                        themeColor.value = this.value;
                        saveFormData();
                    }
                });
            }
            
            const bgColor = document.getElementById('bg-color');
            const bgColorHex = document.getElementById('bg-color-hex');
            if (bgColor && bgColorHex) {
                bgColor.addEventListener('input', function() {
                    bgColorHex.value = this.value;
                    saveFormData();
                });
                bgColorHex.addEventListener('input', function() {
                    if (/^#[0-9A-F]{6}$/i.test(this.value)) {
                        bgColor.value = this.value;
                        saveFormData();
                    }
                });
            }
            
            // PIN validation (numbers only)
            const pinInput = document.getElementById('pin');
            const pinConfirm = document.getElementById('pin-confirm');
            if (pinInput) {
                pinInput.addEventListener('input', function() {
                    this.value = this.value.replace(/[^0-9]/g, '');
                });
            }
            if (pinConfirm) {
                pinConfirm.addEventListener('input', function() {
                    this.value = this.value.replace(/[^0-9]/g, '');
                });
            }
            
            // Review step - populate review data
            function updateReviewStep() {
                if (currentStep == 6) {
                    const reviewPageName = document.getElementById('review-page-name');
                    const reviewRecipient = document.getElementById('review-recipient');
                    
                    // Get values from localStorage
                    const savedData = localStorage.getItem('memoryFormData');
                    if (savedData) {
                        try {
                            const formData = JSON.parse(savedData);
                            
                            if (reviewPageName) reviewPageName.textContent = formData.pageName || '-';
                            if (reviewRecipient) reviewRecipient.textContent = formData.recipientName || '-';
                        } catch (e) {
                            console.error('Error parsing review data:', e);
                        }
                    }
                }
            }
            
            // Update review step when on step 6
            if (currentStep == 6) {
                setTimeout(updateReviewStep, 300);
            }
            
            // Create memory button - Save to database
            document.getElementById('create-memory-btn')?.addEventListener('click', async function() {
                const btn = this;
                const originalText = btn.textContent;
                btn.disabled = true;
                btn.textContent = 'Creating...';
                
                try {
                    // Get all form data
                    const savedData = localStorage.getItem('memoryFormData');
                    const formData = savedData ? JSON.parse(savedData) : {};
                    
                    // Get heading images (base64)
                    const headingImagesPreview = document.getElementById('heading-images-preview');
                    const headingImages = [];
                    if (headingImagesPreview && headingImagesPreview.children.length > 0) {
                        Array.from(headingImagesPreview.children).forEach(container => {
                            const img = container.querySelector('img');
                            if (img && img.src && img.src.startsWith('data:')) {
                                headingImages.push(img.src);
                            }
                        });
                    }
                    
                    // Get additional images (base64)
                    const imagesPreview = document.getElementById('images-preview');
                    const additionalImages = [];
                    if (imagesPreview && imagesPreview.children.length > 0) {
                        Array.from(imagesPreview.children).forEach(container => {
                            const img = container.querySelector('img');
                            if (img && img.src && img.src.startsWith('data:')) {
                                additionalImages.push(img.src);
                            }
                        });
                    }
                    
                    // Prepare data for API
                    const apiData = {
                        draft_id: currentDraftId || localStorage.getItem('draftId'),
                        template: 'default',
                        page_name: formData.pageName || document.getElementById('page-name')?.value || '',
                        heading: formData.heading || document.getElementById('heading')?.value || '',
                        subheading: formData.subheading || document.getElementById('subheading')?.value || '',
                        message: formData.message || document.getElementById('message')?.value || '',
                        from: formData.from || document.getElementById('from')?.value || '',
                        memory_date: formData.memoryDate || document.getElementById('memory-date')?.value || null,
                        heading_images: headingImages,
                        theme_color: formData.themeColor || document.getElementById('theme-color')?.value || '#ff6b6b',
                        bg_color: formData.bgColor || document.getElementById('bg-color')?.value || '#ffffff',
                        recipient_name: formData.recipientName || document.getElementById('recipient-name')?.value || '',
                        pin: formData.pin || document.getElementById('pin')?.value || '',
                        images: additionalImages,
                    };
                    
                    // Validate required fields
                    if (!apiData.page_name || !apiData.recipient_name || !apiData.pin || apiData.pin.length !== 5) {
                        alert('Please fill in all required fields: Page Name, Recipient Name, and PIN (5 digits)');
                        btn.disabled = false;
                        btn.textContent = originalText;
                        return;
                    }
                    
                    // Send to API
                    const response = await fetch('{{ route("templates.store") }}', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')?.getAttribute('content') || '',
                        },
                        body: JSON.stringify(apiData)
                    });
                    
                    const result = await response.json();
                    
                    if (result.success) {
                        // Show success message with WhatsApp contact only (no URL)
                        const whatsappNumber = '9779845004365';
                        const whatsappMessage = encodeURIComponent('Hello! I have created a memory page and would like to purchase it. Please help me proceed.');
                        const whatsappUrl = `https://wa.me/${whatsappNumber}?text=${whatsappMessage}`;
                        
                        // Replace review content with success message
                        const reviewContent = document.querySelector('.space-y-6.bg-gray-800');
                        if (reviewContent) {
                            reviewContent.innerHTML = `
                                <div class="text-center py-8">
                                    <div class="mb-6">
                                        <svg class="w-20 h-20 mx-auto text-green-500 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        <h2 class="text-3xl font-bold text-white mb-2">Memory Created Successfully! 🎉</h2>
                                        <p class="text-gray-400 mb-6">Your memory page has been created and saved.</p>
                                    </div>
                                    
                                    <div class="bg-gradient-to-r from-green-500/20 to-[#ff6b6b]/20 rounded-xl p-8 border border-green-500/30 max-w-md mx-auto">
                                        <p class="text-white font-semibold text-lg mb-4">To purchase and publish your memory page:</p>
                                        <p class="text-gray-300 mb-6">Please contact us via WhatsApp. Our team will help you complete the purchase and make your memory page live.</p>
                                        <a href="${whatsappUrl}" target="_blank" 
                                           class="inline-flex items-center gap-3 px-8 py-4 bg-green-500 text-white rounded-lg hover:bg-green-600 transition-colors font-semibold text-lg shadow-lg hover:shadow-xl">
                                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/>
                                            </svg>
                                            Contact Us on WhatsApp
                                        </a>
                                    </div>
                                </div>
                            `;
                        }
                        
                        // Clear localStorage after successful save
                        localStorage.removeItem('memoryFormData');
                    } else {
                        alert('Error: ' + (result.message || 'Failed to create memory. Please try again.'));
                        btn.disabled = false;
                        btn.textContent = originalText;
                    }
                } catch (error) {
                    console.error('Error creating memory:', error);
                    alert('An error occurred while creating your memory. Please try again.');
                    btn.disabled = false;
                    btn.textContent = originalText;
                }
            });
        })();
        
        // Mobile menu toggle function
        function toggleMobileMenu() {
            const menu = document.getElementById('mobile-menu');
            const menuIcon = document.getElementById('menu-icon');
            const closeIcon = document.getElementById('close-icon');
            
            if (menu && menuIcon && closeIcon) {
                const isHidden = menu.classList.contains('hidden');
                
                if (isHidden) {
                    menu.classList.remove('hidden');
                    menuIcon.classList.add('hidden');
                    closeIcon.classList.remove('hidden');
                } else {
                    menu.classList.add('hidden');
                    menuIcon.classList.remove('hidden');
                    closeIcon.classList.add('hidden');
                }
            }
        }
        
        // Make toggleTheme globally accessible if not already
        if (typeof window.toggleTheme === 'undefined') {
            window.toggleTheme = function(e) {
                if (e) {
                    e.preventDefault();
                    e.stopPropagation();
                }
                
                const html = document.documentElement;
                const isDark = html.classList.contains('dark');
                
                if (isDark) {
                    html.classList.remove('dark');
                    localStorage.setItem('theme', 'light');
                } else {
                    html.classList.add('dark');
                    localStorage.setItem('theme', 'dark');
                }
                
                return false;
            };
        }
    </script>
</body>
</html>
