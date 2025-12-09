@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-gray-50 dark:bg-[#0f172a] py-8">
    <div class="max-w-[1800px] mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header -->
        <div class="mb-8">
            <a href="/" class="inline-flex items-center text-gray-600 dark:text-[#cbd5e1] hover:text-gray-900 dark:hover:text-white mb-4">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                </svg>
                Back to Home
            </a>
            <div class="flex items-center justify-between">
                <div>
                    <h1 class="text-5xl font-black text-gray-900 dark:text-white mb-2">Build Your Premium Gift Website</h1>
                    <p class="text-lg text-gray-600 dark:text-[#cbd5e1]">Create a stunning personalized website - No coding required!</p>
                </div>
                <div class="flex gap-3">
                    <button onclick="previewTemplate()" class="bg-gray-200 dark:bg-[#334155] text-gray-900 dark:text-white px-8 py-4 rounded-xl font-semibold hover:bg-gray-300 dark:hover:bg-[#475569] transition-colors text-lg">
                        Preview
                    </button>
                    <button onclick="showPublishModal()" class="text-white px-8 py-4 rounded-xl font-semibold transition-colors text-lg shadow-lg hover:shadow-xl transform hover:-translate-y-0.5" style="background-color: {{ $templateData['color'] }}">
                        Save & Publish
                    </button>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- Left Sidebar - Controls -->
            <div class="lg:col-span-1 space-y-6">
                <!-- Content Tab -->
                <div class="bg-white dark:bg-[#1e293b] rounded-2xl shadow-xl p-8 border border-gray-100 dark:border-[#334155]">
                    <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-6 flex items-center">
                        <svg class="w-6 h-6 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                        </svg>
                        Content
                    </h2>
                    
                    <div class="space-y-6">
                        <!-- Main Heading -->
                        <div>
                            <label class="block text-base font-semibold text-gray-700 dark:text-[#cbd5e1] mb-3">Main Heading</label>
                            <input type="text" id="heading" value="{{ $templateData['defaults']['heading'] }}" 
                                   class="w-full px-5 py-4 rounded-xl border-2 border-gray-300 dark:border-[#334155] bg-white dark:bg-[#0f172a] text-gray-900 dark:text-white focus:ring-2 focus:ring-blue-500 focus:border-transparent text-lg">
                            <p class="text-sm text-gray-500 dark:text-[#64748b] mt-2">The main title of your website</p>
                        </div>

                        <!-- Subheading -->
                        <div>
                            <label class="block text-base font-semibold text-gray-700 dark:text-[#cbd5e1] mb-3">Subheading</label>
                            <input type="text" id="subheading" value="{{ $templateData['defaults']['subheading'] }}" 
                                   class="w-full px-5 py-4 rounded-xl border-2 border-gray-300 dark:border-[#334155] bg-white dark:bg-[#0f172a] text-gray-900 dark:text-white focus:ring-2 focus:ring-blue-500 focus:border-transparent text-lg">
                            <p class="text-sm text-gray-500 dark:text-[#64748b] mt-2">A short description or tagline</p>
                        </div>

                        <!-- Message -->
                        <div>
                            <label class="block text-base font-semibold text-gray-700 dark:text-[#cbd5e1] mb-3">Your Message</label>
                            <textarea id="message" rows="6" 
                                      class="w-full px-5 py-4 rounded-xl border-2 border-gray-300 dark:border-[#334155] bg-white dark:bg-[#0f172a] text-gray-900 dark:text-white focus:ring-2 focus:ring-blue-500 focus:border-transparent resize-none text-lg">{{ $templateData['defaults']['message'] }}</textarea>
                            <p class="text-sm text-gray-500 dark:text-[#64748b] mt-2">Your heartfelt message</p>
                        </div>

                        <!-- From Name -->
                        <div>
                            <label class="block text-base font-semibold text-gray-700 dark:text-[#cbd5e1] mb-3">From</label>
                            <input type="text" id="from" value="{{ $templateData['defaults']['from'] ?? 'Your Name' }}" 
                                   class="w-full px-5 py-4 rounded-xl border-2 border-gray-300 dark:border-[#334155] bg-white dark:bg-[#0f172a] text-gray-900 dark:text-white focus:ring-2 focus:ring-blue-500 focus:border-transparent text-lg">
                            <p class="text-sm text-gray-500 dark:text-[#64748b] mt-2">Your name or signature</p>
                        </div>
                    </div>
                </div>

                <!-- Sections Tab -->
                <div class="bg-white dark:bg-[#1e293b] rounded-2xl shadow-xl p-8 border border-gray-100 dark:border-[#334155]">
                    <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-6 flex items-center">
                        <svg class="w-6 h-6 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                        Sections
                    </h2>
                    
                    <div class="space-y-6">
                        <!-- Section 1 -->
                        <div class="border-2 border-gray-200 dark:border-[#334155] rounded-xl p-6">
                            <label class="block text-base font-semibold text-gray-700 dark:text-[#cbd5e1] mb-3">Section 1 Title</label>
                            <input type="text" id="section1-title" value="{{ $templateData['defaults']['section1_title'] ?? 'Our Love' }}" 
                                   class="w-full px-4 py-3 rounded-lg border border-gray-300 dark:border-[#334155] bg-white dark:bg-[#0f172a] text-gray-900 dark:text-white text-lg mb-3">
                            <label class="block text-base font-semibold text-gray-700 dark:text-[#cbd5e1] mb-3">Section 1 Content</label>
                            <textarea id="section1-content" rows="3" 
                                      class="w-full px-4 py-3 rounded-lg border border-gray-300 dark:border-[#334155] bg-white dark:bg-[#0f172a] text-gray-900 dark:text-white text-lg">{{ $templateData['defaults']['section1_content'] ?? 'Every moment with you feels like a dream.' }}</textarea>
                        </div>

                        <!-- Section 2 -->
                        <div class="border-2 border-gray-200 dark:border-[#334155] rounded-xl p-6">
                            <label class="block text-base font-semibold text-gray-700 dark:text-[#cbd5e1] mb-3">Section 2 Title</label>
                            <input type="text" id="section2-title" value="{{ $templateData['defaults']['section2_title'] ?? 'Our First Day' }}" 
                                   class="w-full px-4 py-3 rounded-lg border border-gray-300 dark:border-[#334155] bg-white dark:bg-[#0f172a] text-gray-900 dark:text-white text-lg mb-3">
                            <label class="block text-base font-semibold text-gray-700 dark:text-[#cbd5e1] mb-3">Section 2 Content</label>
                            <textarea id="section2-content" rows="3" 
                                      class="w-full px-4 py-3 rounded-lg border border-gray-300 dark:border-[#334155] bg-white dark:bg-[#0f172a] text-gray-900 dark:text-white text-lg mb-3">{{ $templateData['defaults']['section2_content'] ?? 'The day we met changed everything.' }}</textarea>
                            <label class="block text-base font-semibold text-gray-700 dark:text-[#cbd5e1] mb-3">Section 2 Image</label>
                            <div class="border-2 border-dashed border-gray-300 dark:border-[#334155] rounded-lg p-4 text-center hover:border-blue-500 transition-colors cursor-pointer">
                                <input type="file" id="section2-image" accept="image/*" class="hidden" data-image-type="section2">
                                <label for="section2-image" class="cursor-pointer block">
                                    <svg class="w-8 h-8 mx-auto text-gray-400 dark:text-[#475569] mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                                    </svg>
                                    <p class="text-sm text-gray-600 dark:text-[#cbd5e1]">Upload Image</p>
                                </label>
                            </div>
                            <div id="section2-preview" class="mt-3 hidden">
                                <img id="section2-preview-img" src="" alt="Section 2" class="w-full h-32 object-cover rounded-lg">
                                <button onclick="removeSectionImage('section2')" class="mt-2 w-full bg-red-500 text-white py-2 rounded-lg text-sm font-semibold hover:bg-red-600">Remove Image</button>
                            </div>
                        </div>

                        <!-- Section 3 -->
                        <div class="border-2 border-gray-200 dark:border-[#334155] rounded-xl p-6">
                            <label class="block text-base font-semibold text-gray-700 dark:text-[#cbd5e1] mb-3">Section 3 Title</label>
                            <input type="text" id="section3-title" value="{{ $templateData['defaults']['section3_title'] ?? 'Our Journey' }}" 
                                   class="w-full px-4 py-3 rounded-lg border border-gray-300 dark:border-[#334155] bg-white dark:bg-[#0f172a] text-gray-900 dark:text-white text-lg mb-3">
                            <label class="block text-base font-semibold text-gray-700 dark:text-[#cbd5e1] mb-3">Section 3 Content</label>
                            <textarea id="section3-content" rows="3" 
                                      class="w-full px-4 py-3 rounded-lg border border-gray-300 dark:border-[#334155] bg-white dark:bg-[#0f172a] text-gray-900 dark:text-white text-lg mb-3">{{ $templateData['defaults']['section3_content'] ?? 'Together we\'ve created countless beautiful memories.' }}</textarea>
                            <label class="block text-base font-semibold text-gray-700 dark:text-[#cbd5e1] mb-3">Section 3 Images (3 images)</label>
                            <div class="grid grid-cols-3 gap-3">
                                <div class="border-2 border-dashed border-gray-300 dark:border-[#334155] rounded-lg p-3 text-center hover:border-blue-500 transition-colors cursor-pointer">
                                    <input type="file" id="section3-image1" accept="image/*" class="hidden" data-image-type="section3-1">
                                    <label for="section3-image1" class="cursor-pointer block">
                                        <svg class="w-6 h-6 mx-auto text-gray-400 dark:text-[#475569] mb-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                                        </svg>
                                        <p class="text-xs text-gray-600 dark:text-[#cbd5e1]">Image 1</p>
                                    </label>
                                </div>
                                <div class="border-2 border-dashed border-gray-300 dark:border-[#334155] rounded-lg p-3 text-center hover:border-blue-500 transition-colors cursor-pointer">
                                    <input type="file" id="section3-image2" accept="image/*" class="hidden" data-image-type="section3-2">
                                    <label for="section3-image2" class="cursor-pointer block">
                                        <svg class="w-6 h-6 mx-auto text-gray-400 dark:text-[#475569] mb-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                                        </svg>
                                        <p class="text-xs text-gray-600 dark:text-[#cbd5e1]">Image 2</p>
                                    </label>
                                </div>
                                <div class="border-2 border-dashed border-gray-300 dark:border-[#334155] rounded-lg p-3 text-center hover:border-blue-500 transition-colors cursor-pointer">
                                    <input type="file" id="section3-image3" accept="image/*" class="hidden" data-image-type="section3-3">
                                    <label for="section3-image3" class="cursor-pointer block">
                                        <svg class="w-6 h-6 mx-auto text-gray-400 dark:text-[#475569] mb-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                                        </svg>
                                        <p class="text-xs text-gray-600 dark:text-[#cbd5e1]">Image 3</p>
                                    </label>
                                </div>
                            </div>
                            <div id="section3-previews" class="mt-3 grid grid-cols-3 gap-3">
                                <div id="section3-preview1" class="hidden">
                                    <img id="section3-preview-img1" src="" alt="Section 3 Image 1" class="w-full h-24 object-cover rounded-lg mb-1">
                                    <button onclick="removeSectionImage('section3-1')" class="w-full bg-red-500 text-white py-1 rounded text-xs">Remove</button>
                                </div>
                                <div id="section3-preview2" class="hidden">
                                    <img id="section3-preview-img2" src="" alt="Section 3 Image 2" class="w-full h-24 object-cover rounded-lg mb-1">
                                    <button onclick="removeSectionImage('section3-2')" class="w-full bg-red-500 text-white py-1 rounded text-xs">Remove</button>
                                </div>
                                <div id="section3-preview3" class="hidden">
                                    <img id="section3-preview-img3" src="" alt="Section 3 Image 3" class="w-full h-24 object-cover rounded-lg mb-1">
                                    <button onclick="removeSectionImage('section3-3')" class="w-full bg-red-500 text-white py-1 rounded text-xs">Remove</button>
                                </div>
                            </div>
                        </div>

                        <!-- Section 4 -->
                        <div class="border-2 border-gray-200 dark:border-[#334155] rounded-xl p-6">
                            <label class="block text-base font-semibold text-gray-700 dark:text-[#cbd5e1] mb-3">Section 4 Title</label>
                            <input type="text" id="section4-title" value="{{ $templateData['defaults']['section4_title'] ?? 'Our Promise' }}" 
                                   class="w-full px-4 py-3 rounded-lg border border-gray-300 dark:border-[#334155] bg-white dark:bg-[#0f172a] text-gray-900 dark:text-white text-lg mb-3">
                            <label class="block text-base font-semibold text-gray-700 dark:text-[#cbd5e1] mb-3">Section 4 Content</label>
                            <textarea id="section4-content" rows="3" 
                                      class="w-full px-4 py-3 rounded-lg border border-gray-300 dark:border-[#334155] bg-white dark:bg-[#0f172a] text-gray-900 dark:text-white text-lg">{{ $templateData['defaults']['section4_content'] ?? 'I promise to stand by you through all of life\'s adventures.' }}</textarea>
                        </div>

                        <!-- Section 5 -->
                        <div class="border-2 border-gray-200 dark:border-[#334155] rounded-xl p-6">
                            <label class="block text-base font-semibold text-gray-700 dark:text-[#cbd5e1] mb-3">Section 5 Title</label>
                            <input type="text" id="section5-title" value="{{ $templateData['defaults']['section5_title'] ?? 'Forever' }}" 
                                   class="w-full px-4 py-3 rounded-lg border border-gray-300 dark:border-[#334155] bg-white dark:bg-[#0f172a] text-gray-900 dark:text-white text-lg mb-3">
                            <label class="block text-base font-semibold text-gray-700 dark:text-[#cbd5e1] mb-3">Section 5 Content</label>
                            <textarea id="section5-content" rows="3" 
                                      class="w-full px-4 py-3 rounded-lg border border-gray-300 dark:border-[#334155] bg-white dark:bg-[#0f172a] text-gray-900 dark:text-white text-lg">{{ $templateData['defaults']['section5_content'] ?? 'Today, tomorrow, and forever - I choose you.' }}</textarea>
                        </div>
                    </div>
                </div>

                <!-- Color Theme Tab -->
                <div class="bg-white dark:bg-[#1e293b] rounded-2xl shadow-xl p-8 border border-gray-100 dark:border-[#334155]">
                    <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-6 flex items-center">
                        <svg class="w-6 h-6 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01"></path>
                        </svg>
                        Color Theme
                    </h2>
                    
                    <div class="space-y-6">
                        <!-- Theme Presets -->
                        <div>
                            <label class="block text-base font-semibold text-gray-700 dark:text-[#cbd5e1] mb-3">Choose Theme</label>
                            <div class="grid grid-cols-3 gap-3">
                                <button onclick="setThemeColor('#ff6b6b')" class="h-16 rounded-xl bg-gradient-to-br from-pink-500 to-rose-600 hover:scale-105 transition-transform shadow-lg" title="Romantic Pink"></button>
                                <button onclick="setThemeColor('#4ecdc4')" class="h-16 rounded-xl bg-gradient-to-br from-cyan-500 to-blue-600 hover:scale-105 transition-transform shadow-lg" title="Ocean Blue"></button>
                                <button onclick="setThemeColor('#ffd93d')" class="h-16 rounded-xl bg-gradient-to-br from-yellow-400 to-orange-500 hover:scale-105 transition-transform shadow-lg" title="Sunset Gold"></button>
                                <button onclick="setThemeColor('#95e1d3')" class="h-16 rounded-xl bg-gradient-to-br from-emerald-400 to-teal-500 hover:scale-105 transition-transform shadow-lg" title="Mint Green"></button>
                                <button onclick="setThemeColor('#f38181')" class="h-16 rounded-xl bg-gradient-to-br from-rose-400 to-pink-500 hover:scale-105 transition-transform shadow-lg" title="Coral"></button>
                                <button onclick="setThemeColor('#aa96da')" class="h-16 rounded-xl bg-gradient-to-br from-purple-400 to-indigo-500 hover:scale-105 transition-transform shadow-lg" title="Lavender"></button>
                            </div>
                        </div>
                        
                        <!-- Custom Color Picker -->
                        <div>
                            <label class="block text-base font-semibold text-gray-700 dark:text-[#cbd5e1] mb-3">Custom Color</label>
                            <div class="flex items-center gap-4">
                                <input type="color" id="theme-color" value="{{ $templateData['color'] }}" 
                                       class="w-20 h-20 rounded-xl border-2 border-gray-300 dark:border-[#334155] cursor-pointer shadow-lg">
                                <div class="flex-1">
                                    <input type="text" id="theme-color-hex" value="{{ $templateData['color'] }}" 
                                           class="w-full px-4 py-3 rounded-xl border-2 border-gray-300 dark:border-[#334155] bg-white dark:bg-[#0f172a] text-gray-900 dark:text-white text-lg font-mono">
                                    <p class="text-xs text-gray-500 dark:text-[#64748b] mt-1">Enter hex code (e.g., #ff6b6b)</p>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Background Color -->
                        <div>
                            <label class="block text-base font-semibold text-gray-700 dark:text-[#cbd5e1] mb-3">Background Color</label>
                            <div class="flex items-center gap-4">
                                <input type="color" id="bg-color" value="#ffffff" 
                                       class="w-20 h-20 rounded-xl border-2 border-gray-300 dark:border-[#334155] cursor-pointer shadow-lg">
                                <div class="flex-1">
                                    <input type="text" id="bg-color-hex" value="#ffffff" 
                                           class="w-full px-4 py-3 rounded-xl border-2 border-gray-300 dark:border-[#334155] bg-white dark:bg-[#0f172a] text-gray-900 dark:text-white text-lg font-mono">
                                    <p class="text-xs text-gray-500 dark:text-[#64748b] mt-1">Choose background color for better text visibility</p>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Background Style -->
                        <div>
                            <label class="block text-base font-semibold text-gray-700 dark:text-[#cbd5e1] mb-3">Background Style</label>
                            <select id="bg-style" class="w-full px-5 py-4 rounded-xl border-2 border-gray-300 dark:border-[#334155] bg-white dark:bg-[#0f172a] text-gray-900 dark:text-white text-lg">
                                <option value="gradient" selected>Gradient</option>
                                <option value="solid">Solid Color</option>
                                <option value="image">Image Background</option>
                            </select>
                        </div>
                    </div>
                </div>

                <!-- Hero Image -->
                <div class="bg-white dark:bg-[#1e293b] rounded-2xl shadow-xl p-8 border border-gray-100 dark:border-[#334155]">
                    <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-6 flex items-center">
                        <svg class="w-6 h-6 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                        </svg>
                        Hero Image
                    </h2>
                    
                    <div>
                        <label class="block text-base font-semibold text-gray-700 dark:text-[#cbd5e1] mb-3">Main Hero Image</label>
                        <div class="border-2 border-dashed border-gray-300 dark:border-[#334155] rounded-xl p-6 text-center hover:border-blue-500 transition-colors cursor-pointer">
                            <input type="file" id="hero-image" accept="image/*" class="hidden" data-image-type="hero">
                            <label for="hero-image" class="cursor-pointer block">
                                <svg class="w-12 h-12 mx-auto text-gray-400 dark:text-[#475569] mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                                </svg>
                                <p class="text-base text-gray-600 dark:text-[#cbd5e1] font-semibold">Click to upload</p>
                                <p class="text-sm text-gray-500 dark:text-[#64748b] mt-1">JPG, PNG up to 10MB</p>
                            </label>
                        </div>
                        <div id="hero-preview" class="mt-4 hidden">
                            <div class="relative group">
                                <img id="hero-preview-img" src="" alt="Hero Preview" class="w-full h-48 object-cover rounded-xl shadow-lg">
                                <div class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition-opacity rounded-xl flex items-center justify-center">
                                    <button onclick="removeImage('hero')" class="bg-red-500 text-white px-4 py-2 rounded-lg text-sm font-semibold hover:bg-red-600">Remove</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Memories Section -->
                <div class="bg-white dark:bg-[#1e293b] rounded-2xl shadow-xl p-8 border border-gray-100 dark:border-[#334155]">
                    <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-6 flex items-center">
                        <svg class="w-6 h-6 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                        </svg>
                        Memories Gallery
                    </h2>
                    
                    <div class="space-y-4">
                        <p class="text-sm text-gray-600 dark:text-[#cbd5e1] mb-4">Add multiple photos to create a beautiful memories section</p>
                        
                        <!-- Add Memory Button -->
                        <div class="border-2 border-dashed border-gray-300 dark:border-[#334155] rounded-xl p-6 text-center hover:border-blue-500 transition-colors cursor-pointer">
                            <input type="file" id="memory-upload" accept="image/*" multiple class="hidden">
                            <label for="memory-upload" class="cursor-pointer block">
                                <svg class="w-12 h-12 mx-auto text-gray-400 dark:text-[#475569] mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                                </svg>
                                <p class="text-base text-gray-600 dark:text-[#cbd5e1] font-semibold">Add Memories</p>
                                <p class="text-sm text-gray-500 dark:text-[#64748b] mt-1">Select multiple images</p>
                            </label>
                        </div>
                        
                        <!-- Memories Grid -->
                        <div id="memories-grid" class="grid grid-cols-2 gap-3 mt-4">
                            <!-- Memories will be added here dynamically -->
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Side - Live Preview -->
            <div class="lg:col-span-2">
                <div class="bg-white dark:bg-[#1e293b] rounded-2xl shadow-xl p-8 border border-gray-100 dark:border-[#334155] sticky top-8">
                    <div class="flex items-center justify-between mb-6">
                        <h2 class="text-3xl font-bold text-gray-900 dark:text-white">Live Preview</h2>
                        <div class="flex items-center gap-2 text-base text-gray-600 dark:text-[#cbd5e1]">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                            </svg>
                            <span>Live updates as you type</span>
                        </div>
                    </div>
                    <div class="border-2 border-gray-200 dark:border-[#334155] rounded-xl overflow-hidden bg-white dark:bg-[#0f172a] shadow-2xl">
                        <div class="bg-gray-100 dark:bg-[#0f172a] px-6 py-3 flex items-center gap-3 border-b border-gray-200 dark:border-[#334155]">
                            <div class="w-4 h-4 rounded-full bg-red-500"></div>
                            <div class="w-4 h-4 rounded-full bg-yellow-500"></div>
                            <div class="w-4 h-4 rounded-full bg-green-500"></div>
                            <div class="ml-6 text-sm text-gray-500 dark:text-[#64748b] font-mono">hamroyaad.com/yourname</div>
                        </div>
                        <div id="template-preview" class="min-h-[900px] max-h-[1000px] overflow-y-auto">
                            @include('templates._website-designs')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- SweetAlert2 CDN -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
// Store uploaded images and memories
const uploadedImages = {
    hero: null,
    memories: [],
    section2: null,
    section3: {
        image1: null,
        image2: null,
        image3: null
    }
};

let currentThemeColor = '{{ $templateData['color'] }}';
let currentBgColor = '#ffffff';

// Update preview in real-time
document.addEventListener('DOMContentLoaded', function() {
    // Load saved data if exists
    const savedData = localStorage.getItem('template_data');
    if (savedData) {
        try {
            const data = JSON.parse(savedData);
            if (data.template === '{{ $template }}') {
                // Load saved values into inputs
                if (data.heading && document.getElementById('heading')) {
                    document.getElementById('heading').value = data.heading;
                }
                if (data.subheading && document.getElementById('subheading')) {
                    document.getElementById('subheading').value = data.subheading;
                }
                if (data.message && document.getElementById('message')) {
                    document.getElementById('message').value = data.message;
                }
                if (data.from && document.getElementById('from')) {
                    document.getElementById('from').value = data.from;
                }
                
                // Load sections
                if (data.sections) {
                    for (let i = 1; i <= 5; i++) {
                        if (data.sections[`section${i}`]) {
                            const titleInput = document.getElementById(`section${i}-title`);
                            const contentInput = document.getElementById(`section${i}-content`);
                            if (titleInput) titleInput.value = data.sections[`section${i}`].title;
                            if (contentInput) contentInput.value = data.sections[`section${i}`].content;
                        }
                    }
                }
                
                // Load images
                if (data.images) {
                    uploadedImages.hero = data.images.hero || null;
                    uploadedImages.section2 = data.images.section2 || null;
                    uploadedImages.section3 = data.images.section3 || { image1: null, image2: null, image3: null };
                    if (data.images.section3) {
                        uploadedImages.section3 = { ...uploadedImages.section3, ...data.images.section3 };
                    }
                    uploadedImages.memories = data.images.memories || [];
                    
                    // Display loaded images
                    if (data.images.hero) {
                        const heroPreview = document.getElementById('hero-preview');
                        const heroPreviewImg = document.getElementById('hero-preview-img');
                        if (heroPreview && heroPreviewImg) {
                            heroPreviewImg.src = data.images.hero;
                            heroPreview.classList.remove('hidden');
                        }
                        updatePreviewImage('hero', data.images.hero);
                    }
                    
                    if (data.images.section2) {
                        uploadedImages.section2 = data.images.section2;
                        const section2Preview = document.getElementById('section2-preview');
                        const section2PreviewImg = document.getElementById('section2-preview-img');
                        if (section2Preview && section2PreviewImg) {
                            section2PreviewImg.src = data.images.section2;
                            section2Preview.classList.remove('hidden');
                        }
                        updatePreviewImage('section2', data.images.section2);
                    }
                    
                    // Section 3 images
                    for (let i = 1; i <= 3; i++) {
                        if (data.images.section3 && data.images.section3[`image${i}`]) {
                            const preview = document.getElementById(`section3-preview${i}`);
                            const previewImg = document.getElementById(`section3-preview-img${i}`);
                            if (preview && previewImg) {
                                previewImg.src = data.images.section3[`image${i}`];
                                preview.classList.remove('hidden');
                            }
                            updatePreviewImage(`section3-${i}`, data.images.section3[`image${i}`]);
                        }
                    }
                    
                    // Memories
                    if (data.images.memories && data.images.memories.length > 0) {
                        data.images.memories.forEach(memory => {
                            addMemoryToGrid(memory);
                        });
                        updateMemoriesInPreview();
                    }
                }
                
                // Load theme color
                if (data.themeColor) {
                    currentThemeColor = data.themeColor;
                    const themeColor = document.getElementById('theme-color');
                    const themeColorHex = document.getElementById('theme-color-hex');
                    if (themeColor) themeColor.value = data.themeColor;
                    if (themeColorHex) themeColorHex.value = data.themeColor;
                    updateThemeColor(data.themeColor);
                }
            }
        } catch(e) {
            console.log('Error loading saved data:', e);
        }
    }
    
    // Text inputs
    const headingInput = document.getElementById('heading');
    const subheadingInput = document.getElementById('subheading');
    const messageInput = document.getElementById('message');
    const fromInput = document.getElementById('from');
    
    const previewHeading = document.getElementById('preview-heading');
    const previewSubheading = document.getElementById('preview-subheading');
    const previewMessage = document.getElementById('preview-message');
    const previewFrom = document.getElementById('preview-from');
    
    // Real-time text updates
    if (headingInput && previewHeading) {
        headingInput.addEventListener('input', function(e) {
            previewHeading.textContent = e.target.value || '{{ $templateData['defaults']['heading'] }}';
        });
    }
    
    if (subheadingInput && previewSubheading) {
        subheadingInput.addEventListener('input', function(e) {
            previewSubheading.textContent = e.target.value || '{{ $templateData['defaults']['subheading'] }}';
        });
    }
    
    if (messageInput && previewMessage) {
        messageInput.addEventListener('input', function(e) {
            previewMessage.textContent = e.target.value || '{{ $templateData['defaults']['message'] }}';
        });
    }
    
    if (fromInput && previewFrom) {
        fromInput.addEventListener('input', function(e) {
            previewFrom.textContent = e.target.value || '{{ $templateData['defaults']['from'] ?? 'Your Name' }}';
        });
    }
    
    // Section inputs - update preview in real-time
    const previewContainer = document.getElementById('template-preview');
    
    for (let i = 1; i <= 5; i++) {
        const titleInput = document.getElementById(`section${i}-title`);
        const contentInput = document.getElementById(`section${i}-content`);
        
        if (titleInput && previewContainer) {
            titleInput.addEventListener('input', function(e) {
                // Find preview element inside the preview container
                const previewTitle = previewContainer.querySelector(`#section${i}-title`);
                if (previewTitle) {
                    previewTitle.textContent = e.target.value || `Section ${i} Title`;
                }
            });
        }
        
        if (contentInput && previewContainer) {
            contentInput.addEventListener('input', function(e) {
                // Find preview element inside the preview container
                const previewContent = previewContainer.querySelector(`#section${i}-content`);
                if (previewContent) {
                    previewContent.textContent = e.target.value || `Section ${i} content`;
                }
            });
        }
    }
    
    // Hero image upload
    setupImageUpload('hero-image', 'hero', 'hero-preview', 'hero-preview-img');
    
    // Section 2 image upload
    setupImageUpload('section2-image', 'section2', 'section2-preview', 'section2-preview-img');
    
    // Section 3 images upload
    setupImageUpload('section3-image1', 'section3-1', 'section3-preview1', 'section3-preview-img1');
    setupImageUpload('section3-image2', 'section3-2', 'section3-preview2', 'section3-preview-img2');
    setupImageUpload('section3-image3', 'section3-3', 'section3-preview3', 'section3-preview-img3');
    
    // Memories upload
    const memoryUpload = document.getElementById('memory-upload');
    if (memoryUpload) {
        memoryUpload.addEventListener('change', function(e) {
            const files = Array.from(e.target.files);
            files.forEach(file => {
                if (file.size > 10 * 1024 * 1024) {
                    Swal.fire({
                        icon: 'error',
                        title: 'File Too Large',
                        text: 'Image size must be less than 10MB',
                        confirmButtonColor: '#ff6b6b',
                        confirmButtonText: 'OK'
                    });
                    return;
                }
                
                const reader = new FileReader();
                reader.onload = function(e) {
                    uploadedImages.memories.push(e.target.result);
                    addMemoryToGrid(e.target.result);
                    updateMemoriesInPreview();
                };
                reader.readAsDataURL(file);
            });
        });
    }
    
    // Theme color picker
    const themeColor = document.getElementById('theme-color');
    const themeColorHex = document.getElementById('theme-color-hex');
    
    if (themeColor) {
        themeColor.addEventListener('input', function(e) {
            currentThemeColor = e.target.value;
            if (themeColorHex) themeColorHex.value = e.target.value;
            updateThemeColor(e.target.value);
        });
        themeColor.addEventListener('change', function(e) {
            currentThemeColor = e.target.value;
            if (themeColorHex) themeColorHex.value = e.target.value;
            updateThemeColor(e.target.value);
        });
    }
    
    if (themeColorHex) {
        themeColorHex.addEventListener('input', function(e) {
            const hex = e.target.value;
            if (/^#[0-9A-F]{6}$/i.test(hex)) {
                currentThemeColor = hex;
                if (themeColor) themeColor.value = hex;
                updateThemeColor(hex);
            }
        });
    }
    
    // Background color picker
    const bgColor = document.getElementById('bg-color');
    const bgColorHex = document.getElementById('bg-color-hex');
    
    if (bgColor) {
        bgColor.addEventListener('input', function(e) {
            currentBgColor = e.target.value;
            if (bgColorHex) bgColorHex.value = e.target.value;
            updateBackgroundColor(e.target.value);
        });
        bgColor.addEventListener('change', function(e) {
            currentBgColor = e.target.value;
            if (bgColorHex) bgColorHex.value = e.target.value;
            updateBackgroundColor(e.target.value);
        });
    }
    
    if (bgColorHex) {
        bgColorHex.addEventListener('input', function(e) {
            const hex = e.target.value;
            if (/^#[0-9A-F]{6}$/i.test(hex)) {
                currentBgColor = hex;
                if (bgColor) bgColor.value = hex;
                updateBackgroundColor(hex);
            }
        });
    }
});

function setThemeColor(color) {
    currentThemeColor = color;
    const themeColor = document.getElementById('theme-color');
    const themeColorHex = document.getElementById('theme-color-hex');
    if (themeColor) {
        themeColor.value = color;
        // Trigger input event to ensure update
        themeColor.dispatchEvent(new Event('input'));
    }
    if (themeColorHex) themeColorHex.value = color;
    updateThemeColor(color);
}

function setupImageUpload(inputId, imageType, previewId, previewImgId) {
    const input = document.getElementById(inputId);
    const preview = document.getElementById(previewId);
    const previewImg = document.getElementById(previewImgId);
    
    if (input) {
        input.addEventListener('change', function(e) {
            const file = e.target.files[0];
            if (file) {
                if (file.size > 10 * 1024 * 1024) {
                    Swal.fire({
                        icon: 'error',
                        title: 'File Too Large',
                        text: 'Image size must be less than 10MB',
                        confirmButtonColor: '#ff6b6b',
                        confirmButtonText: 'OK'
                    });
                    return;
                }
                
                const reader = new FileReader();
                reader.onload = function(e) {
                    const imageSrc = e.target.result;
                    if (previewImg) previewImg.src = imageSrc;
                    if (preview) preview.classList.remove('hidden');
                    
                    // Store image based on type
                    if (imageType === 'section2') {
                        uploadedImages.section2 = imageSrc;
                    } else if (imageType.startsWith('section3-')) {
                        const num = imageType.split('-')[1];
                        uploadedImages.section3[`image${num}`] = imageSrc;
                    } else {
                        uploadedImages[imageType] = imageSrc;
                    }
                    
                    // Update preview immediately
                    setTimeout(() => {
                        updatePreviewImage(imageType, imageSrc);
                    }, 100);
                };
                reader.readAsDataURL(file);
            }
        });
    }
}

function removeSectionImage(imageType) {
    if (imageType === 'section2') {
        uploadedImages.section2 = null;
        const preview = document.getElementById('section2-preview');
        if (preview) preview.classList.add('hidden');
        const input = document.getElementById('section2-image');
        if (input) input.value = '';
        updatePreviewImage('section2', null);
    } else if (imageType.startsWith('section3-')) {
        const num = imageType.split('-')[1];
        uploadedImages.section3[`image${num}`] = null;
        const preview = document.getElementById(`section3-preview${num}`);
        if (preview) preview.classList.add('hidden');
        const input = document.getElementById(`section3-image${num}`);
        if (input) input.value = '';
        updatePreviewImage(imageType, null);
    }
}

function addMemoryToGrid(imageSrc) {
    const grid = document.getElementById('memories-grid');
    if (!grid) return;
    
    const memoryDiv = document.createElement('div');
    memoryDiv.className = 'relative group';
    memoryDiv.innerHTML = `
        <img src="${imageSrc}" alt="Memory" class="w-full h-32 object-cover rounded-xl shadow-lg">
        <button onclick="removeMemory(this)" class="absolute top-2 right-2 bg-red-500 text-white p-2 rounded-lg opacity-0 group-hover:opacity-100 transition-opacity">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>
    `;
    grid.appendChild(memoryDiv);
}

function removeMemory(button) {
    const memoryDiv = button.closest('.relative');
    const img = memoryDiv.querySelector('img');
    const index = Array.from(memoryDiv.parentElement.children).indexOf(memoryDiv);
    
    uploadedImages.memories.splice(index, 1);
    memoryDiv.remove();
    updateMemoriesInPreview();
}

function updateMemoriesInPreview() {
    const previewContainer = document.getElementById('template-preview');
    if (!previewContainer) return;
    
    const memoriesSection = previewContainer.querySelector('#memories-section');
    if (memoriesSection) {
        // Clear placeholder if exists
        const placeholder = memoriesSection.querySelector('.bg-gray-200, .bg-\\[\\#334155\\]');
        if (placeholder) placeholder.remove();
        
        // Clear existing memories
        memoriesSection.innerHTML = '';
        
        // Add all memories
        uploadedImages.memories.forEach((memory, index) => {
            const div = document.createElement('div');
            div.className = 'aspect-square relative overflow-hidden rounded-2xl shadow-lg group';
            const img = document.createElement('img');
            img.src = memory;
            img.alt = `Memory ${index + 1}`;
            img.className = 'w-full h-full object-cover';
            div.appendChild(img);
            memoriesSection.appendChild(div);
        });
        
        // If no memories, show placeholder
        if (uploadedImages.memories.length === 0) {
            const placeholder = document.createElement('div');
            placeholder.className = 'aspect-square bg-gray-200 dark:bg-[#334155] rounded-2xl flex items-center justify-center col-span-full';
            placeholder.innerHTML = '<p class="text-gray-400 dark:text-[#64748b] text-sm text-center px-4">Add memories in the editor</p>';
            memoriesSection.appendChild(placeholder);
        }
    }
}

function removeImage(imageType) {
    uploadedImages[imageType] = null;
    const preview = document.getElementById(imageType + '-preview');
    if (preview) {
        preview.classList.add('hidden');
    }
    const input = document.getElementById(imageType === 'hero' ? 'hero-image' : `image-${imageType.replace('image', '')}`);
    if (input) {
        input.value = '';
    }
    updatePreviewImage(imageType, null);
}

function updatePreviewImage(imageType, imageSrc) {
    const previewContainer = document.getElementById('template-preview');
    if (!previewContainer) return;
    
    if (imageType === 'hero') {
        const img = previewContainer.querySelector('#hero-image-display') || previewContainer.querySelector('[data-image="hero"]');
        if (img) {
            if (imageSrc) {
                img.src = imageSrc;
                img.style.display = 'block';
                img.style.opacity = '1';
            }
        }
    } else if (imageType === 'section2') {
        // Find section 2 image container
        const img = previewContainer.querySelector('#section2-image-display');
        const placeholder = previewContainer.querySelector('#section2-placeholder');
        
        if (img && placeholder) {
            if (imageSrc) {
                img.src = imageSrc;
                img.classList.remove('hidden');
                img.style.display = 'block';
                img.style.zIndex = '10';
                img.style.position = 'absolute';
                placeholder.style.display = 'none';
            } else {
                img.classList.add('hidden');
                img.style.display = 'none';
                placeholder.style.display = 'block';
            }
        } else {
            console.log('Section 2 image elements not found:', { img: !!img, placeholder: !!placeholder });
        }
    } else if (imageType.startsWith('section3-')) {
        const num = imageType.split('-')[1];
        const img = previewContainer.querySelector(`#section3-image${num}-display`);
        const placeholder = previewContainer.querySelector(`#section3-placeholder${num}`);
        
        if (img && placeholder) {
            if (imageSrc) {
                img.src = imageSrc;
                img.classList.remove('hidden');
                img.style.display = 'block';
                placeholder.style.display = 'none';
            } else {
                img.classList.add('hidden');
                img.style.display = 'none';
                placeholder.style.display = 'block';
            }
        }
    }
}

function updateThemeColor(color) {
    const previewContainer = document.getElementById('template-preview');
    if (!previewContainer) return;
    
    // Update CSS custom property on template container
    const templateContainer = previewContainer.querySelector('#template-container');
    if (templateContainer) {
        templateContainer.style.setProperty('--theme-color', color);
    }
    
    // Also update on preview container as fallback
    previewContainer.style.setProperty('--theme-color', color);
    
    // Force reflow to ensure styles update
    previewContainer.offsetHeight;
}

function updateBackgroundColor(bgColor) {
    const previewContainer = document.getElementById('template-preview');
    if (!previewContainer) return;
    
    // Calculate if background is light or dark
    const rgb = hexToRgb(bgColor);
    const brightness = (rgb.r * 299 + rgb.g * 587 + rgb.b * 114) / 1000;
    const textColor = brightness > 128 ? '#000000' : '#ffffff';
    
    // Update CSS custom properties
    const templateContainer = previewContainer.querySelector('#template-container');
    if (templateContainer) {
        templateContainer.style.setProperty('--bg-color', bgColor);
        templateContainer.style.setProperty('--text-color', textColor);
        
        // Update all sections with background color
        const sections = templateContainer.querySelectorAll('section');
        sections.forEach(section => {
            if (section.classList.contains('bg-gradient-to-br') || section.classList.contains('bg-gradient-to-r')) {
                section.style.backgroundColor = bgColor;
            }
        });
        
        // Update text colors based on background brightness
        const textElements = templateContainer.querySelectorAll('[style*="color"]');
        textElements.forEach(el => {
            const currentStyle = el.getAttribute('style') || '';
            if (currentStyle.includes('color:') && !currentStyle.includes('--theme-color')) {
                el.style.color = textColor;
            }
        });
    }
}

function hexToRgb(hex) {
    const result = /^#?([a-f\d]{2})([a-f\d]{2})([a-f\d]{2})$/i.exec(hex);
    return result ? {
        r: parseInt(result[1], 16),
        g: parseInt(result[2], 16),
        b: parseInt(result[3], 16)
    } : { r: 255, g: 255, b: 255 };
}

function previewTemplate() {
    // Save all data before navigating to preview
    const data = {
        template: '{{ $template }}',
        heading: document.getElementById('heading').value,
        subheading: document.getElementById('subheading').value,
        message: document.getElementById('message').value,
        from: document.getElementById('from').value,
        images: uploadedImages,
        themeColor: currentThemeColor,
        bgColor: currentBgColor,
        bgStyle: document.getElementById('bg-style').value,
        sections: {}
    };
    
    // Save all section data
    for (let i = 1; i <= 5; i++) {
        const titleInput = document.getElementById(`section${i}-title`);
        const contentInput = document.getElementById(`section${i}-content`);
        if (titleInput && contentInput) {
            data.sections[`section${i}`] = {
                title: titleInput.value,
                content: contentInput.value
            };
        }
    }
    
    localStorage.setItem('template_data', JSON.stringify(data));
    const template = '{{ $template }}';
    window.location.href = `/template/${template}/preview`;
}

// Modal functions
function showPublishModal() {
    console.log('showPublishModal called');
    const modal = document.getElementById('publishModal');
    if (modal) {
        console.log('Modal found, showing...');
        modal.classList.remove('hidden');
        const recipientNameInput = document.getElementById('recipient-name');
        if (recipientNameInput) {
            recipientNameInput.focus();
        }
        
        // Ensure form handler is attached when modal opens
        // Use setTimeout to ensure DOM is ready
        setTimeout(() => {
            console.log('Attaching form handler after modal open...');
        attachPublishFormHandler();
        }, 100);
    } else {
        console.error('Modal not found!');
    }
}

// Flag to prevent multiple simultaneous submissions
let isSubmitting = false;

// Handle form submission function - moved to global scope
function handlePublishSubmit(e) {
    console.log('=== handlePublishSubmit CALLED ===');
    console.log('Event:', e);
    console.log('Event type:', e?.type);
    
    // Always prevent default form submission FIRST
    if (e) {
            e.preventDefault();
            e.stopPropagation();
        e.stopImmediatePropagation();
        console.log('Default prevented');
    }
    
    // Check if button is already disabled (another submission in progress)
    const submitBtn = document.getElementById('publish-submit-btn') || document.querySelector('#publishForm button[type="submit"]');
    console.log('Submit button found:', !!submitBtn);
    console.log('Submit button disabled:', submitBtn?.disabled);
    
    if (submitBtn && submitBtn.disabled) {
        console.log('Button already disabled, ignoring duplicate submission');
        return false;
}

    // Prevent multiple simultaneous submissions
    console.log('isSubmitting flag:', isSubmitting);
    if (isSubmitting) {
        console.log('Already submitting, ignoring duplicate submission');
        return false;
    }
    
    console.log('=== PROCESSING FORM SUBMISSION ===');
        console.log('Publish form submitted');
        
        const recipientName = document.getElementById('recipient-name')?.value.trim();
        const pin = document.getElementById('pin')?.value.trim();
        
        console.log('Recipient Name:', recipientName);
        console.log('PIN:', pin);
        
        if (!recipientName) {
        Swal.fire({
            icon: 'warning',
            title: 'Recipient Name Required',
            text: 'Please enter recipient name',
            confirmButtonColor: '#ff6b6b',
            confirmButtonText: 'OK'
        });
            document.getElementById('recipient-name')?.focus();
            return false;
        }
        
        if (!pin || pin.length !== 5) {
        Swal.fire({
            icon: 'warning',
            title: 'PIN Required',
            text: 'Please enter a 5-digit PIN',
            confirmButtonColor: '#ff6b6b',
            confirmButtonText: 'OK'
        });
            document.getElementById('pin')?.focus();
            return false;
        }
        
        // Validate PIN is numeric
        if (!/^\d{5}$/.test(pin)) {
        Swal.fire({
            icon: 'error',
            title: 'Invalid PIN',
            text: 'PIN must contain only numbers',
            confirmButtonColor: '#ff6b6b',
            confirmButtonText: 'OK'
        });
            document.getElementById('pin')?.focus();
            return false;
        }
    
    // Set submitting flag IMMEDIATELY
    isSubmitting = true;
        
        // Disable submit button to prevent double submission
    const originalText = submitBtn ? submitBtn.textContent : 'Publish';
        if (submitBtn) {
            submitBtn.disabled = true;
            submitBtn.textContent = 'Publishing...';
        }
        
        // Call saveTemplate with name and PIN
        saveTemplate(recipientName, pin).then(() => {
        console.log('saveTemplate completed successfully');
        isSubmitting = false;
            if (submitBtn) {
                submitBtn.disabled = false;
            submitBtn.textContent = originalText;
            }
        }).catch((error) => {
        console.error('saveTemplate error:', error);
        isSubmitting = false;
            if (submitBtn) {
                submitBtn.disabled = false;
            submitBtn.textContent = originalText;
            }
            // Error is already handled in saveTemplate
    }).finally(() => {
        // Safety: Reset flag after 5 seconds regardless
        setTimeout(() => {
            isSubmitting = false;
        }, 5000);
        });
        
        return false;
}

// Store the handler function reference to allow removal if needed
let publishFormHandler = null;

function attachPublishFormHandler() {
    const publishForm = document.getElementById('publishForm');
    if (!publishForm) {
        console.log('Publish form not found');
        return;
    }
    
    // Remove existing handler if any (safety measure)
    if (publishFormHandler) {
        publishForm.removeEventListener('submit', publishFormHandler);
    }
    
    // Attach form submit handler
    if (!publishForm.dataset.handlerAttached) {
        publishFormHandler = handlePublishSubmit;
        publishForm.addEventListener('submit', publishFormHandler);
        publishForm.dataset.handlerAttached = 'true';
        console.log('Publish form submit handler attached');
    }
    
    // Also attach direct click handler on button as backup
    const submitBtn = document.getElementById('publish-submit-btn');
    if (submitBtn && !submitBtn.dataset.clickHandlerAttached) {
        submitBtn.addEventListener('click', function(e) {
            e.preventDefault();
            e.stopPropagation();
            console.log('Publish button clicked directly (backup handler)');
            handlePublishSubmit(e);
        });
        submitBtn.dataset.clickHandlerAttached = 'true';
        console.log('Publish button click handler attached');
    }
}

function closePublishModal() {
    document.getElementById('publishModal').classList.add('hidden');
    document.getElementById('publishForm').reset();
}

// Handle PIN input - only numbers, max 5 digits
document.addEventListener('DOMContentLoaded', function() {
    const pinInput = document.getElementById('pin');
    if (pinInput) {
        pinInput.addEventListener('input', function(e) {
            e.target.value = e.target.value.replace(/[^0-9]/g, '').slice(0, 5);
        });
    }
    
    // Try to attach handlers on DOMContentLoaded
    attachPublishFormHandler();
});

async function saveTemplate(recipientName, pin) {
    console.log('=== saveTemplate START ===');
    console.log('saveTemplate called with:', { recipientName, pin });
    
    try {
        console.log('Building data object...');
    const data = {
        template: '{{ $template }}',
            heading: document.getElementById('heading')?.value || '',
            subheading: document.getElementById('subheading')?.value || '',
            message: document.getElementById('message')?.value || '',
            from: document.getElementById('from')?.value || '',
            images: uploadedImages || {},
            theme_color: currentThemeColor || '{{ $templateData['color'] }}',
            bg_color: currentBgColor || '#ffffff',
            bg_style: document.getElementById('bg-style')?.value || 'gradient',
        status: 'published',
        recipient_name: recipientName,
        pin: pin,
        section1_title: document.getElementById('section1-title')?.value || '',
        section1_content: document.getElementById('section1-content')?.value || '',
        section2_title: document.getElementById('section2-title')?.value || '',
        section2_content: document.getElementById('section2-content')?.value || '',
        section3_title: document.getElementById('section3-title')?.value || '',
        section3_content: document.getElementById('section3-content')?.value || '',
        section4_title: document.getElementById('section4-title')?.value || '',
        section4_content: document.getElementById('section4-content')?.value || '',
        section5_title: document.getElementById('section5-title')?.value || '',
        section5_content: document.getElementById('section5-content')?.value || '',
    };
    
        // Get CSRF token
        const csrfToken = document.querySelector('meta[name="csrf-token"]')?.getAttribute('content');
        
        if (!csrfToken) {
            throw new Error('CSRF token not found. Please refresh the page.');
        }
        
        console.log('Data object built successfully');
        console.log('Sending data to API:', data);
        console.log('CSRF Token:', csrfToken ? 'Found' : 'Missing');
        console.log('Making API request to /api/templates...');
        
        // Validate data before sending
        const dataString = JSON.stringify(data);
        console.log('Data size:', dataString.length, 'bytes');
        
        if (dataString.length > 10000000) { // 10MB limit
            throw new Error('Data too large. Please reduce image sizes.');
        }
        
        let response;
        try {
            console.log('=== FETCH STARTING ===');
            console.log('URL: /api/templates');
            console.log('Method: POST');
            const fetchPromise = fetch('/api/templates', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': csrfToken,
                'Accept': 'application/json',
                'X-Requested-With': 'XMLHttpRequest'
            },
            credentials: 'same-origin',
            body: JSON.stringify(data)
        });
            
            // Add timeout
            const timeoutPromise = new Promise((_, reject) => 
                setTimeout(() => reject(new Error('Request timeout after 30 seconds')), 30000)
            );
            
            response = await Promise.race([fetchPromise, timeoutPromise]);
            
            console.log('=== FETCH COMPLETED ===');
            console.log('Response received, status:', response.status);
            console.log('Response headers:', Object.fromEntries(response.headers.entries()));
        } catch (networkError) {
            console.error('=== FETCH ERROR ===');
            console.error('Network/Fetch error:', networkError);
            console.error('Error name:', networkError.name);
            console.error('Error message:', networkError.message);
            console.error('Error stack:', networkError.stack);
            throw new Error('Network error: Unable to connect to server. ' + (networkError.message || 'Please check your internet connection and try again.'));
        }
        
        console.log('Response status:', response.status);
        
        // Check if response is ok
        if (!response.ok) {
            const errorText = await response.text();
            let errorData;
            try {
                errorData = JSON.parse(errorText);
            } catch (e) {
                errorData = { message: errorText || 'Server error occurred' };
            }
            
            // Handle validation errors
            if (response.status === 422 && errorData.errors) {
                const validationErrors = Object.values(errorData.errors).flat().join(', ');
                throw new Error('Validation error: ' + validationErrors);
            }
            
            // Handle authentication errors
            if (response.status === 401) {
                throw new Error('401 Unauthorized - Please log in to publish templates');
            }
            
            throw new Error(errorData.message || `HTTP error! status: ${response.status}`);
        }
        
        let result;
        try {
            result = await response.json();
        } catch (e) {
            throw new Error('Invalid JSON response from server');
        }
        
        console.log('=== RESPONSE PROCESSING ===');
        console.log('Result:', result);
        
        if (result.success) {
            console.log('=== SUCCESS ===');
            console.log('Template published successfully!');
            console.log('Slug:', result.slug);
            
            // Close modal
            closePublishModal();
            
            // Save to localStorage as backup
            localStorage.setItem('template_data', JSON.stringify(data));
            
            // Show success message - template submitted for review
            Swal.fire({
                icon: 'success',
                title: 'Template Submitted Successfully!',
                html: `
                    <div class="text-left space-y-3">
                        <p class="text-gray-700 dark:text-gray-300">Your template has been submitted for admin review.</p>
                        <div class="bg-blue-50 dark:bg-blue-900/20 border border-blue-200 dark:border-blue-800 p-4 rounded-lg">
                            <p class="text-sm font-semibold text-blue-800 dark:text-blue-300 mb-2">📋 What happens next?</p>
                            <ul class="text-sm text-blue-700 dark:text-blue-400 space-y-1 list-disc list-inside">
                                <li>Admin will review your template</li>
                                <li>Once approved, your template will be published</li>
                                <li>You'll receive the URL and PIN after approval</li>
                            </ul>
                        </div>
                        <div class="bg-gray-100 dark:bg-gray-800 p-3 rounded-lg">
                            <p class="text-sm font-semibold text-gray-600 dark:text-gray-400 mb-1">PIN (save this):</p>
                            <p class="text-gray-900 dark:text-white font-mono text-lg font-bold">${pin}</p>
                        </div>
                        <p class="text-sm text-gray-600 dark:text-gray-400">Please keep your PIN safe. You'll need it to access your template once it's published.</p>
                    </div>
                `,
                confirmButtonColor: currentThemeColor || '#ff6b6b',
                confirmButtonText: 'Got it!',
                width: '500px',
                customClass: {
                    popup: 'dark:bg-[#1e293b] dark:text-white',
                    title: 'dark:text-white',
                    htmlContainer: 'dark:text-gray-300'
                }
            });
        } else {
            console.error('=== SERVER ERROR ===');
            console.error('Server returned success:false');
            console.error('Message:', result.message);
            Swal.fire({
                icon: 'error',
                title: 'Error Saving Template',
                text: result.message || 'Unknown error occurred',
                confirmButtonColor: '#ff6b6b',
                confirmButtonText: 'OK'
            });
        }
    } catch (error) {
        console.error('=== ERROR IN saveTemplate ===');
        console.error('Error:', error);
        console.error('Error details:', error.message, error.stack);
        console.error('Data being sent:', data);
        
        let errorMessage = 'Error saving template. ';
        let errorTitle = 'Error';
        let errorIcon = 'error';
        
        if (error.message.includes('401') || error.message.includes('Unauthorized')) {
            errorTitle = 'Authentication Required';
            errorMessage = 'Please make sure you are logged in to publish templates.';
            errorIcon = 'warning';
        } else if (error.message.includes('422') || error.message.includes('validation')) {
            errorTitle = 'Validation Error';
            errorMessage = 'Please check all required fields are filled correctly.';
        } else if (error.message.includes('Network error') || error.message.includes('timeout')) {
            errorTitle = 'Connection Error';
            errorMessage = error.message || 'Unable to connect to server. Please check your internet connection.';
            errorIcon = 'warning';
        } else {
            errorMessage += error.message || 'Please check console for details.';
        }
        
        Swal.fire({
            icon: errorIcon,
            title: errorTitle,
            text: errorMessage,
            confirmButtonColor: '#ff6b6b',
            confirmButtonText: 'OK'
        });
        throw error; // Re-throw to ensure the promise is rejected
    }
}
</script>

<!-- Publish Modal -->
<div id="publishModal" class="fixed inset-0 bg-black/50 backdrop-blur-sm z-50 hidden flex items-center justify-center p-4">
    <div class="bg-white dark:bg-[#1e293b] rounded-2xl shadow-2xl p-8 max-w-md w-full border border-gray-100 dark:border-[#334155]">
        <h2 class="text-3xl font-black text-gray-900 dark:text-white mb-6">Publish Your Template</h2>
        
        <form id="publishForm" class="space-y-6">
            <div>
                <label class="block text-base font-semibold text-gray-700 dark:text-[#cbd5e1] mb-3">Recipient Name</label>
                <input type="text" id="recipient-name" required
                       class="w-full px-5 py-4 rounded-xl border-2 border-gray-300 dark:border-[#334155] bg-white dark:bg-[#0f172a] text-gray-900 dark:text-white focus:ring-2 focus:ring-[#ff6b6b] focus:border-transparent text-lg"
                       placeholder="Enter the name of the person">
                <p class="text-sm text-gray-500 dark:text-[#64748b] mt-2">This will be used in the URL</p>
            </div>
            
            <div>
                <label class="block text-base font-semibold text-gray-700 dark:text-[#cbd5e1] mb-3">PIN (5 digits)</label>
                <input type="text" id="pin" required maxlength="5" pattern="[0-9]{5}"
                       class="w-full px-5 py-4 rounded-xl border-2 border-gray-300 dark:border-[#334155] bg-white dark:bg-[#0f172a] text-gray-900 dark:text-white focus:ring-2 focus:ring-[#ff6b6b] focus:border-transparent text-lg text-center font-mono text-2xl tracking-widest"
                       placeholder="00000">
                <p class="text-sm text-gray-500 dark:text-[#64748b] mt-2">Enter a 5-digit PIN to protect your template</p>
            </div>
            
            <div class="flex gap-3">
                <button type="button" onclick="closePublishModal()" class="flex-1 bg-gray-200 dark:bg-[#334155] text-gray-900 dark:text-white px-6 py-3 rounded-xl font-semibold hover:bg-gray-300 dark:hover:bg-[#475569] transition-colors">
                    Cancel
                </button>
                <button type="submit" id="publish-submit-btn" class="flex-1 text-white px-6 py-3 rounded-xl font-semibold transition-colors shadow-lg hover:shadow-xl" style="background-color: {{ $templateData['color'] }}">
                    Publish
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
