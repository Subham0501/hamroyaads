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
                            <label class="block text-base font-semibold text-gray-700 dark:text-[#cbd5e1] mb-3">Section 2 Images (4 images)</label>
                            <div class="grid grid-cols-4 gap-3">
                                <!-- Image 1 -->
                                <div>
                                    <div id="section2-upload1" class="border-2 border-dashed border-gray-300 dark:border-[#334155] rounded-lg p-3 text-center hover:border-blue-500 transition-colors cursor-pointer" onclick="highlightUploadArea('section2-upload1'); document.getElementById('section2-image1')?.click()">
                                        <input type="file" id="section2-image1" accept="image/jpeg,image/jpg,image/png,image/gif,image/webp" class="hidden" data-image-type="section2-1">
                                        <label for="section2-image1" class="cursor-pointer block">
                                            <svg class="w-6 h-6 mx-auto text-gray-400 dark:text-[#475569] mb-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                                            </svg>
                                            <p class="text-xs text-gray-600 dark:text-[#cbd5e1]">Image 1</p>
                                        </label>
                                    </div>
                                    <div id="section2-preview1" class="hidden">
                                        <img id="section2-preview-img1" src="" alt="Section 2 Image 1" class="w-full h-24 object-cover rounded-lg mb-1">
                                        <button onclick="removeSectionImage('section2-1')" class="w-full bg-red-500 text-white py-1 rounded text-xs hover:bg-red-600">Remove</button>
                                    </div>
                                </div>
                                <!-- Image 2 -->
                                <div>
                                    <div id="section2-upload2" class="border-2 border-dashed border-gray-300 dark:border-[#334155] rounded-lg p-3 text-center hover:border-blue-500 transition-colors cursor-pointer" onclick="highlightUploadArea('section2-upload2'); document.getElementById('section2-image2')?.click()">
                                        <input type="file" id="section2-image2" accept="image/jpeg,image/jpg,image/png,image/gif,image/webp" class="hidden" data-image-type="section2-2">
                                        <label for="section2-image2" class="cursor-pointer block">
                                            <svg class="w-6 h-6 mx-auto text-gray-400 dark:text-[#475569] mb-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                                            </svg>
                                            <p class="text-xs text-gray-600 dark:text-[#cbd5e1]">Image 2</p>
                                        </label>
                                    </div>
                                    <div id="section2-preview2" class="hidden">
                                        <img id="section2-preview-img2" src="" alt="Section 2 Image 2" class="w-full h-24 object-cover rounded-lg mb-1">
                                        <button onclick="removeSectionImage('section2-2')" class="w-full bg-red-500 text-white py-1 rounded text-xs hover:bg-red-600">Remove</button>
                                    </div>
                                </div>
                                <!-- Image 3 -->
                                <div>
                                    <div id="section2-upload3" class="border-2 border-dashed border-gray-300 dark:border-[#334155] rounded-lg p-3 text-center hover:border-blue-500 transition-colors cursor-pointer" onclick="highlightUploadArea('section2-upload3'); document.getElementById('section2-image3')?.click()">
                                        <input type="file" id="section2-image3" accept="image/jpeg,image/jpg,image/png,image/gif,image/webp" class="hidden" data-image-type="section2-3">
                                        <label for="section2-image3" class="cursor-pointer block">
                                            <svg class="w-6 h-6 mx-auto text-gray-400 dark:text-[#475569] mb-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                                            </svg>
                                            <p class="text-xs text-gray-600 dark:text-[#cbd5e1]">Image 3</p>
                                        </label>
                                    </div>
                                    <div id="section2-preview3" class="hidden">
                                        <img id="section2-preview-img3" src="" alt="Section 2 Image 3" class="w-full h-24 object-cover rounded-lg mb-1">
                                        <button onclick="removeSectionImage('section2-3')" class="w-full bg-red-500 text-white py-1 rounded text-xs hover:bg-red-600">Remove</button>
                                    </div>
                                </div>
                                <!-- Image 4 -->
                                <div>
                                    <div id="section2-upload4" class="border-2 border-dashed border-gray-300 dark:border-[#334155] rounded-lg p-3 text-center hover:border-blue-500 transition-colors cursor-pointer" onclick="highlightUploadArea('section2-upload4'); document.getElementById('section2-image4')?.click()">
                                        <input type="file" id="section2-image4" accept="image/jpeg,image/jpg,image/png,image/gif,image/webp" class="hidden" data-image-type="section2-4">
                                        <label for="section2-image4" class="cursor-pointer block">
                                            <svg class="w-6 h-6 mx-auto text-gray-400 dark:text-[#475569] mb-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                                            </svg>
                                            <p class="text-xs text-gray-600 dark:text-[#cbd5e1]">Image 4</p>
                                        </label>
                                    </div>
                                    <div id="section2-preview4" class="hidden">
                                        <img id="section2-preview-img4" src="" alt="Section 2 Image 4" class="w-full h-24 object-cover rounded-lg mb-1">
                                        <button onclick="removeSectionImage('section2-4')" class="w-full bg-red-500 text-white py-1 rounded text-xs hover:bg-red-600">Remove</button>
                                    </div>
                                </div>
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
                                <!-- Image 1 -->
                                <div>
                                    <div id="section3-upload1" class="border-2 border-dashed border-gray-300 dark:border-[#334155] rounded-lg p-3 text-center hover:border-blue-500 transition-colors cursor-pointer" onclick="highlightUploadArea('section3-upload1'); document.getElementById('section3-image1')?.click()">
                                        <input type="file" id="section3-image1" accept="image/jpeg,image/jpg,image/png,image/gif,image/webp" class="hidden" data-image-type="section3-1">
                                        <label for="section3-image1" class="cursor-pointer block">
                                            <svg class="w-6 h-6 mx-auto text-gray-400 dark:text-[#475569] mb-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                                            </svg>
                                            <p class="text-xs text-gray-600 dark:text-[#cbd5e1]">Image 1</p>
                                        </label>
                                    </div>
                                    <div id="section3-preview1" class="hidden">
                                        <img id="section3-preview-img1" src="" alt="Section 3 Image 1" class="w-full h-24 object-cover rounded-lg mb-1">
                                        <button onclick="removeSectionImage('section3-1')" class="w-full bg-red-500 text-white py-1 rounded text-xs hover:bg-red-600">Remove</button>
                                    </div>
                                </div>
                                
                                <!-- Image 2 -->
                                <div>
                                    <div id="section3-upload2" class="border-2 border-dashed border-gray-300 dark:border-[#334155] rounded-lg p-3 text-center hover:border-blue-500 transition-colors cursor-pointer" onclick="highlightUploadArea('section3-upload2'); document.getElementById('section3-image2')?.click()">
                                        <input type="file" id="section3-image2" accept="image/jpeg,image/jpg,image/png,image/gif,image/webp" class="hidden" data-image-type="section3-2">
                                        <label for="section3-image2" class="cursor-pointer block">
                                            <svg class="w-6 h-6 mx-auto text-gray-400 dark:text-[#475569] mb-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                                            </svg>
                                            <p class="text-xs text-gray-600 dark:text-[#cbd5e1]">Image 2</p>
                                        </label>
                                    </div>
                                    <div id="section3-preview2" class="hidden">
                                        <img id="section3-preview-img2" src="" alt="Section 3 Image 2" class="w-full h-24 object-cover rounded-lg mb-1">
                                        <button onclick="removeSectionImage('section3-2')" class="w-full bg-red-500 text-white py-1 rounded text-xs hover:bg-red-600">Remove</button>
                                    </div>
                                </div>
                                
                                <!-- Image 3 -->
                                <div>
                                    <div id="section3-upload3" class="border-2 border-dashed border-gray-300 dark:border-[#334155] rounded-lg p-3 text-center hover:border-blue-500 transition-colors cursor-pointer" onclick="highlightUploadArea('section3-upload3'); document.getElementById('section3-image3')?.click()">
                                        <input type="file" id="section3-image3" accept="image/jpeg,image/jpg,image/png,image/gif,image/webp" class="hidden" data-image-type="section3-3">
                                        <label for="section3-image3" class="cursor-pointer block">
                                            <svg class="w-6 h-6 mx-auto text-gray-400 dark:text-[#475569] mb-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                                            </svg>
                                            <p class="text-xs text-gray-600 dark:text-[#cbd5e1]">Image 3</p>
                                        </label>
                                    </div>
                                    <div id="section3-preview3" class="hidden">
                                        <img id="section3-preview-img3" src="" alt="Section 3 Image 3" class="w-full h-24 object-cover rounded-lg mb-1">
                                        <button onclick="removeSectionImage('section3-3')" class="w-full bg-red-500 text-white py-1 rounded text-xs hover:bg-red-600">Remove</button>
                                    </div>
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
                        <div id="hero-upload-area" class="border-2 border-dashed border-gray-300 dark:border-[#334155] rounded-xl p-6 text-center hover:border-blue-500 transition-colors cursor-pointer" onclick="highlightUploadArea('hero-upload-area'); document.getElementById('hero-image')?.click()">
                            <input type="file" id="hero-image" accept="image/jpeg,image/jpg,image/png,image/gif,image/webp" class="hidden" data-image-type="hero">
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
                        <div id="memory-upload-area" class="border-2 border-dashed border-gray-300 dark:border-[#334155] rounded-xl p-6 text-center hover:border-blue-500 transition-colors cursor-pointer" onclick="highlightUploadArea('memory-upload-area'); document.getElementById('memory-upload').click()">
                            <input type="file" id="memory-upload" accept="image/jpeg,image/jpg,image/png,image/gif,image/webp" multiple class="hidden">
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
    // memories: [],
    section2: {
        image1: null,
        image2: null,
        image3: null,
        image4: null
    },
    section3: null,};

let currentThemeColor = '{{ $templateData['color'] }}';
let currentBgColor = '#ffffff';

// Highlight upload area when clicked - MUST be defined before DOMContentLoaded
function highlightUploadArea(areaId) {
    console.log('highlightUploadArea called with:', areaId);
    
    // Remove highlight from all upload areas
    document.querySelectorAll('[id$="-upload-area"], [id^="section2-upload"], [id^="section3-upload"], [id^="hero-upload"], [id^="memory-upload"]').forEach(el => {
        el.classList.remove('ring-4', 'ring-blue-500', 'ring-opacity-50', 'border-blue-500');
        el.style.boxShadow = '';
    });
    
    // Highlight the clicked area
    const area = document.getElementById(areaId);
    console.log('Area found:', !!area, areaId);
    
    if (area) {
        area.classList.add('ring-4', 'ring-blue-500', 'ring-opacity-50', 'border-blue-500');
        area.style.boxShadow = '0 0 0 4px rgba(59, 130, 246, 0.3)';
        area.style.transition = 'all 0.3s ease';
        area.style.borderColor = '#3b82f6';
        
        // Scroll into view if needed
        area.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
        
        // Remove highlight after 2 seconds
        setTimeout(() => {
            area.classList.remove('ring-4', 'ring-blue-500', 'ring-opacity-50', 'border-blue-500');
            area.style.boxShadow = '';
            area.style.borderColor = '';
        }, 2000);
    } else {
        console.error('Upload area not found:', areaId);
    }
}

// Make sure function is globally accessible
window.highlightUploadArea = highlightUploadArea;

// Update preview in real-time
document.addEventListener('DOMContentLoaded', function() {
    // Get input elements first
    const headingInput = document.getElementById('heading');
    const subheadingInput = document.getElementById('subheading');
    const messageInput = document.getElementById('message');
    const fromInput = document.getElementById('from');
    const previewContainer = document.getElementById('template-preview');
    
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
                            if (titleInput) {
                                titleInput.value = data.sections[`section${i}`].title;
                                // Trigger input event to update preview
                                titleInput.dispatchEvent(new Event('input'));
                            }
                            if (contentInput) {
                                contentInput.value = data.sections[`section${i}`].content;
                                // Trigger input event to update preview
                                contentInput.dispatchEvent(new Event('input'));
                            }
                        }
                    }
                }
                
                // Trigger input events to update preview with loaded values
                if (headingInput && data.heading) {
                    headingInput.dispatchEvent(new Event('input'));
                }
                if (subheadingInput && data.subheading) {
                    subheadingInput.dispatchEvent(new Event('input'));
                }
                if (messageInput && data.message) {
                    messageInput.dispatchEvent(new Event('input'));
                }
                if (fromInput && data.from) {
                    fromInput.dispatchEvent(new Event('input'));
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
                        // Hide upload area for hero
                        const uploadArea = document.getElementById('hero-upload-area');
                        if (uploadArea) {
                            uploadArea.style.display = 'none';
                            // Remove highlight
                            uploadArea.classList.remove('ring-4', 'ring-blue-500', 'ring-opacity-50', 'border-blue-500');
                            uploadArea.style.boxShadow = '';
                        }
                        updatePreviewImage('hero', data.images.hero);
                    } else {
                        // Show upload area if no hero image
                        const uploadArea = document.querySelector('#hero-image').closest('.border-dashed');
                        if (uploadArea) uploadArea.style.display = 'block';
                    }
                    
                    if (data.images.section2) {
                        uploadedImages.section2 = data.images.section2;
                        const section2Preview = document.getElementById('section2-preview');
                        const section2PreviewImg = document.getElementById('section2-preview-img');
                        if (section2Preview && section2PreviewImg) {
                            section2PreviewImg.src = data.images.section2;
                            section2Preview.classList.remove('hidden');
                        }
                        // Hide upload area for section2
                        const uploadArea = document.getElementById('section2-upload-area');
                        if (uploadArea) {
                            uploadArea.style.display = 'none';
                            // Remove highlight
                            uploadArea.classList.remove('ring-4', 'ring-blue-500', 'ring-opacity-50', 'border-blue-500');
                            uploadArea.style.boxShadow = '';
                        }
                        updatePreviewImage('section2', data.images.section2);
                    } else {
                        // Show upload area if no section2 image
                        const uploadArea = document.querySelector('#section2-image').closest('.border-dashed');
                        if (uploadArea) uploadArea.style.display = 'block';
                    }
                    
                    // Section 3 images
                    for (let i = 1; i <= 3; i++) {
                        if (data.images.section3 && data.images.section3[`image${i}`]) {
                            const preview = document.getElementById(`section3-preview${i}`);
                            const previewImg = document.getElementById(`section3-preview-img${i}`);
                            const upload = document.getElementById(`section3-upload${i}`);
                            if (preview && previewImg) {
                                previewImg.src = data.images.section3[`image${i}`];
                                preview.classList.remove('hidden');
                            }
                            if (upload) {
                                upload.classList.add('hidden');
                            }
                            updatePreviewImage(`section3-${i}`, data.images.section3[`image${i}`]);
                        } else {
                            // Ensure upload box is visible if no image
                            const upload = document.getElementById(`section3-upload${i}`);
                            const preview = document.getElementById(`section3-preview${i}`);
                            if (upload) upload.classList.remove('hidden');
                            if (preview) preview.classList.add('hidden');
                        }
                    }
                    
                    // Memories
                    if (data.images.memories && data.images.memories.length > 0) {
                        uploadedImages.memories = data.images.memories;
                        updateMemoriesInPreview();
                    } else {
                        // Clear memories if none exist
                        uploadedImages.memories = [];
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
    
    // Real-time text updates - update all instances in preview
    if (headingInput) {
        headingInput.addEventListener('input', function(e) {
            const value = e.target.value || '{{ $templateData['defaults']['heading'] }}';
            // Update all preview headings
            const previewHeadings = previewContainer.querySelectorAll('#preview-heading');
            previewHeadings.forEach(heading => {
                heading.textContent = value;
            });
            console.log('Heading updated:', value);
        });
    }
    
    if (subheadingInput) {
        subheadingInput.addEventListener('input', function(e) {
            const value = e.target.value || '{{ $templateData['defaults']['subheading'] }}';
            // Update all preview subheadings
            const previewSubheadings = previewContainer.querySelectorAll('#preview-subheading');
            previewSubheadings.forEach(subheading => {
                subheading.textContent = value;
            });
            console.log('Subheading updated:', value);
        });
    }
    
    if (messageInput) {
        messageInput.addEventListener('input', function(e) {
            const value = e.target.value || '{{ $templateData['defaults']['message'] }}';
            // Update all preview messages
            const previewMessages = previewContainer.querySelectorAll('#preview-message');
            previewMessages.forEach(message => {
                message.textContent = value;
            });
            console.log('Message updated:', value);
        });
    }
    
    if (fromInput) {
        fromInput.addEventListener('input', function(e) {
            const value = e.target.value || '{{ $templateData['defaults']['from'] ?? 'Your Name' }}';
            // Update all preview from fields
            const previewFroms = previewContainer.querySelectorAll('#preview-from');
            previewFroms.forEach(fromEl => {
                // Handle nested span elements
                const span = fromEl.querySelector('span');
                if (span) {
                    span.textContent = value;
                } else {
                    fromEl.textContent = value;
                }
            });
            console.log('From updated:', value);
        });
    }
    
    // Section inputs - update preview in real-time
    for (let i = 1; i <= 5; i++) {
        const titleInput = document.getElementById(`section${i}-title`);
        const contentInput = document.getElementById(`section${i}-content`);
        
        if (titleInput && previewContainer) {
            titleInput.addEventListener('input', function(e) {
                const value = e.target.value || `Section ${i} Title`;
                // Update all instances of this section title
                const previewTitles = previewContainer.querySelectorAll(`#section${i}-title`);
                previewTitles.forEach(title => {
                    title.textContent = value;
                });
                console.log(`Section ${i} title updated:`, value);
            });
        }
        
        if (contentInput && previewContainer) {
            contentInput.addEventListener('input', function(e) {
                const value = e.target.value || `Section ${i} content`;
                // Update all instances of this section content
                const previewContents = previewContainer.querySelectorAll(`#section${i}-content`);
                previewContents.forEach(content => {
                    content.textContent = value;
                });
                console.log(`Section ${i} content updated:`, value);
            });
        }
    }
    
    // Initialize preview with current input values
    function initializePreview() {
        if (!previewContainer) {
            console.warn('Preview container not found');
            return;
        }
        
        // Update heading
        if (headingInput) {
            const value = headingInput.value || '{{ $templateData['defaults']['heading'] }}';
            const previewHeadings = previewContainer.querySelectorAll('#preview-heading');
            previewHeadings.forEach(heading => {
                heading.textContent = value;
            });
        }
        
        // Update subheading
        if (subheadingInput) {
            const value = subheadingInput.value || '{{ $templateData['defaults']['subheading'] }}';
            const previewSubheadings = previewContainer.querySelectorAll('#preview-subheading');
            previewSubheadings.forEach(subheading => {
                subheading.textContent = value;
            });
        }
        
        // Update message
        if (messageInput) {
            const value = messageInput.value || '{{ $templateData['defaults']['message'] }}';
            const previewMessages = previewContainer.querySelectorAll('#preview-message');
            previewMessages.forEach(message => {
                message.textContent = value;
            });
        }
        
        // Update from
        if (fromInput) {
            const value = fromInput.value || '{{ $templateData['defaults']['from'] ?? 'Your Name' }}';
            const previewFroms = previewContainer.querySelectorAll('#preview-from');
            previewFroms.forEach(fromEl => {
                const span = fromEl.querySelector('span');
                if (span) {
                    span.textContent = value;
                } else {
                    fromEl.textContent = value;
                }
            });
        }
        
        // Update sections
        for (let i = 1; i <= 5; i++) {
            const titleInput = document.getElementById(`section${i}-title`);
            const contentInput = document.getElementById(`section${i}-content`);
            
            if (titleInput) {
                const value = titleInput.value || `Section ${i} Title`;
                const previewTitles = previewContainer.querySelectorAll(`#section${i}-title`);
                previewTitles.forEach(title => {
                    title.textContent = value;
                });
            }
            
            if (contentInput) {
                const value = contentInput.value || `Section ${i} content`;
                const previewContents = previewContainer.querySelectorAll(`#section${i}-content`);
                previewContents.forEach(content => {
                    content.textContent = value;
                });
            }
        }
    }
    
    // Hero image upload
        
    // Section 2 image upload
        
    // Section 3 images upload
                
    // Image upload setup
    setupImageUpload('section2-image1', 'section2-1', 'section2-preview1', 'section2-preview-img1');
    setupImageUpload('section2-image2', 'section2-2', 'section2-preview2', 'section2-preview-img2');
    setupImageUpload('section2-image3', 'section2-3', 'section2-preview3', 'section2-preview-img3');
    setupImageUpload('section2-image4', 'section2-4', 'section2-preview4', 'section2-preview-img4');

    // Initialize preview after all event listeners are set up
    setTimeout(initializePreview, 200);    
    // Initialize memories preview - clear any default images immediately
    updateMemoriesInPreview();
    
    // Also ensure all section images are hidden by default
    setTimeout(() => {
        // Hide all section2 images by default
        const section2Imgs = previewContainer.querySelectorAll('#section2-image-display');
        const section2Placeholders = previewContainer.querySelectorAll('#section2-placeholder');
        section2Imgs.forEach(img => {
            if (!uploadedImages.section2) {
                img.classList.add('hidden');
                img.style.display = 'none';
            }
        });
        section2Placeholders.forEach(placeholder => {
            if (!uploadedImages.section2) {
                placeholder.style.display = 'block';
                placeholder.classList.remove('hidden');
            }
        });
        
        // Hide all section3 images by default
        for (let i = 1; i <= 3; i++) {
            const imgs = previewContainer.querySelectorAll(`#section3-image${i}-display`);
            const placeholders = previewContainer.querySelectorAll(`#section3-placeholder${i}`);
            imgs.forEach(img => {
                if (!uploadedImages.section3 || !uploadedImages.section3[`image${i}`]) {
                    img.classList.add('hidden');
                    img.style.display = 'none';
                }
            });
            placeholders.forEach(placeholder => {
                if (!uploadedImages.section3 || !uploadedImages.section3[`image${i}`]) {
                    placeholder.style.display = 'block';
                    placeholder.classList.remove('hidden');
                }
            });
        }
        
        // Hide hero images by default
        const heroImgs = previewContainer.querySelectorAll('#hero-image-display, [data-image="hero"]');
        heroImgs.forEach(img => {
            if (!uploadedImages.hero) {
                img.style.display = 'none';
                img.style.opacity = '0';
                img.style.visibility = 'hidden';
            }
        });
        
        // Update memories again to ensure it's cleared
        updateMemoriesInPreview();
    }, 100);
    
    // Memories upload
    const memoryUpload = document.getElementById('memory-upload');
    if (memoryUpload) {
        memoryUpload.addEventListener('change', function(e) {
            const files = Array.from(e.target.files);
            const memoryUploadArea = document.getElementById('memory-upload-area');
            
            // Show loading state
            if (memoryUploadArea) {
                memoryUploadArea.style.opacity = '0.6';
                memoryUploadArea.style.pointerEvents = 'none';
            }
            
            files.forEach(file => {
                if (file.size > 10 * 1024 * 1024) {
                    Swal.fire({
                        icon: 'error',
                        title: 'File Too Large',
                        text: 'Image size must be less than 10MB',
                        confirmButtonColor: '#ff6b6b',
                        confirmButtonText: 'OK'
                    });
                    // Restore upload area
                    if (memoryUploadArea) {
                        memoryUploadArea.style.opacity = '1';
                        memoryUploadArea.style.pointerEvents = 'auto';
                    }
                    return;
                }
                
                const reader = new FileReader();
                reader.onload = function(e) {
                    uploadedImages.memories.push(e.target.result);
                    updateMemoriesInPreview();
                    // Restore upload area
                    if (memoryUploadArea) {
                        memoryUploadArea.style.opacity = '1';
                        memoryUploadArea.style.pointerEvents = 'auto';
                    }
                };
                reader.onerror = function() {
                    // Restore upload area on error
                    if (memoryUploadArea) {
                        memoryUploadArea.style.opacity = '1';
                        memoryUploadArea.style.pointerEvents = 'auto';
                    }
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
    
    console.log('Setting up image upload:', { inputId, imageType, previewId, previewImgId, inputFound: !!input });
    
    if (input) {
        // Remove any existing listeners by cloning the input
        const newInput = input.cloneNode(true);
        
        // Ensure accept attribute is preserved (should be preserved by cloneNode, but being explicit)
        const acceptValue = input.getAttribute('accept') || input.accept || 'image/jpeg,image/jpg,image/png,image/gif,image/webp';
        newInput.setAttribute('accept', acceptValue);
        newInput.accept = acceptValue;
        
        // Ensure the input is properly configured
        newInput.type = 'file';
        newInput.className = input.className;
        newInput.id = inputId; // Ensure ID is preserved
        
        // Preserve other important attributes
        if (input.hasAttribute('multiple')) {
            newInput.setAttribute('multiple', 'multiple');
        }
        if (input.hasAttribute('data-image-type')) {
            newInput.setAttribute('data-image-type', input.getAttribute('data-image-type'));
        }
        
        // Debug: Log the accept attribute to verify it's set
        console.log('Input cloned:', { inputId, accept: newInput.accept, acceptAttr: newInput.getAttribute('accept') });
        
        input.parentNode.replaceChild(newInput, input);
        
        // Update the onclick handler to use the new input (for section2, section3, and hero)
        if (inputId.includes('section2-image') || inputId.includes('section3-image') || inputId === 'hero-image') {
            let uploadDiv;
            let areaId = '';
            
            if (inputId === 'hero-image') {
                uploadDiv = document.getElementById('hero-upload-area');
                areaId = 'hero-upload-area';
            } else if (inputId.includes('section2-image')) {
                const num = inputId.replace('section2-image', '');
                uploadDiv = document.getElementById(`section2-upload${num}`);
                areaId = `section2-upload${num}`;
            } else if (inputId.includes('section3-image')) {
                const num = inputId.replace('section3-image', '');
                uploadDiv = document.getElementById(`section3-upload${num}`);
                areaId = `section3-upload${num}`;
            }
            
            if (uploadDiv && areaId) {
                uploadDiv.setAttribute('onclick', `highlightUploadArea('${areaId}'); document.getElementById('${inputId}')?.click()`);
            }
        }
        
        newInput.addEventListener('change', function(e) {
            console.log('File input changed:', { imageType, files: e.target.files, inputId });
            const file = e.target.files[0];
            const inputElement = e.target; // Store reference to the input
            
            if (file) {
                console.log('File selected:', { name: file.name, size: file.size, type: file.type });
                
                                // Show loading state on upload area
                let uploadAreaId = '';
                if (imageType.startsWith('section2-')) {
                    const num = imageType.split('-')[1];
                    uploadAreaId = `section2-upload${num}`;
                } else if (imageType.startsWith('section2-')) {
                    const num = imageType.split('-')[1];
                    uploadAreaId = `section2-upload${num}`;
                } else if (imageType === 'section2') {
                    uploadAreaId = 'section2-upload-area';
                } else if (imageType === 'hero') {
                    uploadAreaId = 'hero-upload-area';
                } else if (imageType.startsWith('section3-')) {
                    const num = imageType.split('-')[1];
                    uploadAreaId = `section3-upload${num}`;
                }
                
                if (uploadAreaId) {
                    const uploadArea = document.getElementById(uploadAreaId);
                    if (uploadArea) {
                        uploadArea.style.opacity = '0.6';
                        uploadArea.style.pointerEvents = 'none';
                    }
                }
                
                // Validate file type
                if (!file.type.startsWith('image/')) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Invalid File Type',
                        text: 'Please select an image file (JPG, PNG, etc.)',
                        confirmButtonColor: '#ff6b6b',
                        confirmButtonText: 'OK'
                    });
                    inputElement.value = ''; // Reset input to allow reselection
                    // Restore upload area
                    if (uploadAreaId) {
                        const uploadArea = document.getElementById(uploadAreaId);
                        if (uploadArea) {
                            uploadArea.style.opacity = '1';
                            uploadArea.style.pointerEvents = 'auto';
                        }
                    }
                    return;
                }
                
                if (file.size > 10 * 1024 * 1024) {
                    Swal.fire({
                        icon: 'error',
                        title: 'File Too Large',
                        text: 'Image size must be less than 10MB',
                        confirmButtonColor: '#ff6b6b',
                        confirmButtonText: 'OK'
                    });
                    inputElement.value = ''; // Reset input to allow reselection
                    // Restore upload area
                    if (uploadAreaId) {
                        const uploadArea = document.getElementById(uploadAreaId);
                        if (uploadArea) {
                            uploadArea.style.opacity = '1';
                            uploadArea.style.pointerEvents = 'auto';
                        }
                    }
                    return;
                }
                
                const reader = new FileReader();
                reader.onload = function(e) {
                    const imageSrc = e.target.result;
                    console.log('Image loaded as base64:', { imageType, length: imageSrc.length });
                    
                                        // Store image based on type
                    if (imageType.startsWith('section2-')) {
                        const num = imageType.split('-')[1];
                        uploadedImages.section2[`image${num}`] = imageSrc;
                        // Show preview and hide upload for this specific image
                        const previewDiv = document.getElementById(`section2-preview${num}`);
                        const uploadDiv = document.getElementById(`section2-upload${num}`);
                        const previewImgEl = document.getElementById(`section2-preview-img${num}`);
                        
                        if (previewDiv && previewImgEl) {
                            previewImgEl.src = imageSrc;
                            previewDiv.classList.remove('hidden');
                        }
                        if (uploadDiv) {
                            uploadDiv.classList.add('hidden');
                            uploadDiv.classList.remove('ring-4', 'ring-blue-500', 'ring-opacity-50', 'border-blue-500');
                            uploadDiv.style.boxShadow = '';
                        }
                    } else if (imageType === 'section2') {
                        uploadedImages.section2 = imageSrc;
                        if (previewImg) previewImg.src = imageSrc;
                        if (preview) preview.classList.remove('hidden');
                        // Hide upload area for section2
                        const uploadArea = document.getElementById('section2-upload-area');
                        if (uploadArea) {
                            uploadArea.style.display = 'none';
                            // Remove highlight
                            uploadArea.classList.remove('ring-4', 'ring-blue-500', 'ring-opacity-50', 'border-blue-500');
                            uploadArea.style.boxShadow = '';
                        }
                    } else if (imageType.startsWith('section3-')) {
                        const num = imageType.split('-')[1];
                        uploadedImages.section3[`image${num}`] = imageSrc;
                        // Show preview and hide upload for this specific image
                        const previewDiv = document.getElementById(`section3-preview${num}`);
                        const uploadDiv = document.getElementById(`section3-upload${num}`);
                        const previewImgEl = document.getElementById(`section3-preview-img${num}`);
                        
                        if (previewDiv && previewImgEl) {
                            previewImgEl.src = imageSrc;
                            previewDiv.classList.remove('hidden');
                        }
                        if (uploadDiv) {
                            uploadDiv.classList.add('hidden');
                            // Remove highlight
                            uploadDiv.classList.remove('ring-4', 'ring-blue-500', 'ring-opacity-50', 'border-blue-500');
                            uploadDiv.style.boxShadow = '';
                        }
                    } else if (imageType === 'hero') {
                        uploadedImages.hero = imageSrc;
                        if (previewImg) previewImg.src = imageSrc;
                        if (preview) preview.classList.remove('hidden');
                        // Hide upload area for hero
                        const uploadArea = document.getElementById('hero-upload-area');
                        if (uploadArea) {
                            uploadArea.style.display = 'none';
                            // Remove highlight
                            uploadArea.classList.remove('ring-4', 'ring-blue-500', 'ring-opacity-50', 'border-blue-500');
                            uploadArea.style.boxShadow = '';
                        }
                    } else {
                        uploadedImages[imageType] = imageSrc;
                        if (previewImg) previewImg.src = imageSrc;
                        if (preview) preview.classList.remove('hidden');
                    }
                    
                    console.log('Image stored:', { imageType, uploadedImages });
                    
                    // Restore upload area opacity
                    if (uploadAreaId) {
                        const uploadArea = document.getElementById(uploadAreaId);
                        if (uploadArea) {
                            uploadArea.style.opacity = '1';
                            uploadArea.style.pointerEvents = 'auto';
                        }
                    }
                    
                    // Update preview immediately - call multiple times to ensure it works
                    console.log('Calling updatePreviewImage with:', { imageType, hasImageSrc: !!imageSrc });
                    updatePreviewImage(imageType, imageSrc);
                    setTimeout(() => {
                        console.log('Retrying updatePreviewImage (100ms delay)');
                        updatePreviewImage(imageType, imageSrc);
                    }, 100);
                    setTimeout(() => {
                        console.log('Retrying updatePreviewImage (300ms delay)');
                        updatePreviewImage(imageType, imageSrc);
                    }, 300);
                    setTimeout(() => {
                        console.log('Final retry updatePreviewImage (1000ms delay)');
                        updatePreviewImage(imageType, imageSrc);
                    }, 1000);
                };
                reader.onerror = function(error) {
                    console.error('FileReader error:', error);
                    Swal.fire({
                        icon: 'error',
                        title: 'Error Reading File',
                        text: 'Failed to read the image file. Please try again.',
                        confirmButtonColor: '#ff6b6b',
                        confirmButtonText: 'OK'
                    });
                    inputElement.value = ''; // Reset input to allow reselection
                    // Restore upload area
                    if (uploadAreaId) {
                        const uploadArea = document.getElementById(uploadAreaId);
                        if (uploadArea) {
                            uploadArea.style.opacity = '1';
                            uploadArea.style.pointerEvents = 'auto';
                        }
                    }
                };
                reader.readAsDataURL(file);
            } else {
                console.warn('No file selected');
            }
        });
        
        // Store reference for potential future use
        window[`${inputId}_input`] = newInput;
    } else {
        console.error('Input element not found:', inputId);
    }
}

function removeSectionImage(imageType) {
    if (imageType.startsWith('section2-')) {
        const num = imageType.split('-')[1];
        uploadedImages.section2[`image${num}`] = null;
        const preview = document.getElementById(`section2-preview${num}`);
        const upload = document.getElementById(`section2-upload${num}`);
        if (preview) preview.classList.add('hidden');
        if (upload) upload.classList.remove('hidden');
        const input = document.getElementById(`section2-image${num}`);
        if (input) input.value = '';
        updatePreviewImage(imageType, null);
    } else if (imageType === 'section2') {
        uploadedImages.section2 = null;
        const preview = document.getElementById('section2-preview');
        if (preview) preview.classList.add('hidden');
        const input = document.getElementById('section2-image');
        if (input) input.value = '';
        // Show upload area again
        const uploadArea = document.querySelector('#section2-image').closest('.border-dashed');
        if (uploadArea) uploadArea.style.display = 'block';
        updatePreviewImage('section2', null);
    } else if (imageType.startsWith('section3-')) {
        const num = imageType.split('-')[1];
        uploadedImages.section3[`image${num}`] = null;
        const preview = document.getElementById(`section3-preview${num}`);
        const upload = document.getElementById(`section3-upload${num}`);
        if (preview) preview.classList.add('hidden');
        if (upload) upload.classList.remove('hidden');
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
    
    // Also update preview
    updateMemoriesInPreview();
}

function removeMemory(button) {
    const memoryDiv = button.closest('.relative, .aspect-square');
    const img = memoryDiv.querySelector('img');
    if (!img || !img.src) return;
    
    // Find the index of this memory in the array
    const imageSrc = img.src;
    const index = uploadedImages.memories.indexOf(imageSrc);
    
    if (index > -1) {
        uploadedImages.memories.splice(index, 1);
    }
    
    // Update the preview completely
    updateMemoriesInPreview();
}

function updateMemoriesInPreview() {
    const previewContainer = document.getElementById('template-preview');
    if (!previewContainer) return;
    
    const memoriesSection = previewContainer.querySelector('#memories-section');
    if (memoriesSection) {
        // Clear ALL existing content including placeholders
        memoriesSection.innerHTML = '';
        
        // Only add memories if there are any uploaded
        if (uploadedImages.memories && uploadedImages.memories.length > 0) {
            uploadedImages.memories.forEach((memory, index) => {
                const div = document.createElement('div');
                div.className = 'aspect-square relative overflow-hidden rounded-xl shadow-xl border-2';
                const img = document.createElement('img');
                img.src = memory;
                img.alt = `Memory ${index + 1}`;
                img.className = 'w-full h-full object-cover';
                div.appendChild(img);
                memoriesSection.appendChild(div);
            });
        } else {
            // Show placeholder only when no memories
            const placeholder = document.createElement('div');
            placeholder.className = 'aspect-square bg-gradient-to-br rounded-xl flex items-center justify-center border-2 border-dashed col-span-full';
            placeholder.style.borderColor = 'rgba(0, 0, 0, 0.1)';
            placeholder.innerHTML = `
                <div class="text-center">
                    <svg class="w-12 h-12 mx-auto mb-2 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                    </svg>
                    <p class="text-xs text-gray-400">Add memories</p>
                </div>
            `;
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
    
    // Show upload area again
    if (imageType === 'hero') {
        const uploadArea = document.querySelector('#hero-image').closest('.border-dashed');
        if (uploadArea) uploadArea.style.display = 'block';
        const input = document.getElementById('hero-image');
        if (input) input.value = '';
    } else {
        const input = document.getElementById(imageType === 'hero' ? 'hero-image' : `image-${imageType.replace('image', '')}`);
        if (input) {
            input.value = '';
        }
    }
    updatePreviewImage(imageType, null);
}

function updatePreviewImage(imageType, imageSrc) {
    const previewContainer = document.getElementById('template-preview');
    if (!previewContainer) {
        console.error('Preview container not found!');
        return;
    }
    
    console.log('updatePreviewImage called:', { imageType, hasImageSrc: !!imageSrc, previewContainer: !!previewContainer });
    
    if (imageType === 'hero') {
        // Find all hero image instances (multiple templates in preview)
        const imgs = previewContainer.querySelectorAll('#hero-image-display, [data-image="hero"], img[data-image="hero"]');
        console.log('Updating hero image:', { imageType, imgCount: imgs.length, imageSrc: !!imageSrc });
        
        if (imgs.length > 0) {
            imgs.forEach((img, index) => {
                if (imageSrc) {
                    img.src = imageSrc;
                    img.style.display = 'block';
                    img.style.opacity = '1';
                    img.style.visibility = 'visible';
                    img.classList.remove('hidden');
                    console.log(`Hero image displayed in template ${index + 1}`, img);
                } else {
                    img.style.display = 'none';
                    img.style.opacity = '0';
                }
            });
        } else {
            console.warn('Hero image elements not found in preview. Searching for:', '#hero-image-display, [data-image="hero"]');
            // Try to find any img with hero-related classes or IDs
            const allImgs = previewContainer.querySelectorAll('img');
            console.log('All images in preview:', allImgs.length);
        }
    } else if (imageType.startsWith('section2-')) {
        const num = imageType.split('-')[1];
        let imgs = previewContainer.querySelectorAll(`#section2-image${num}-display`);
        let placeholders = previewContainer.querySelectorAll(`#section2-placeholder${num}`);
        
        if (imgs.length === 0) {
            imgs = previewContainer.querySelectorAll(`[id*="section2-image${num}"][id*="display"]`);
        }
        if (placeholders.length === 0) {
            placeholders = previewContainer.querySelectorAll(`[id*="section2-placeholder${num}"]`);
        }
        
        console.log('Updating section2 image:', { imageType, num, imgCount: imgs.length, placeholderCount: placeholders.length, imageSrc: !!imageSrc });
        
        if (imgs.length > 0) {
            imgs.forEach((img, index) => {
                if (imageSrc) {
                    img.src = imageSrc;
                    img.classList.remove('hidden');
                    img.style.display = 'block';
                    img.style.opacity = '1';
                    img.style.visibility = 'visible';
                    img.style.zIndex = '10';
                    img.style.position = 'absolute';
                    console.log(`Section2 image ${num} displayed in template ${index + 1}`, img);
                } else {
                    img.classList.add('hidden');
                    img.style.display = 'none';
                }
            });
        }
        
        if (placeholders.length > 0) {
            placeholders.forEach((placeholder, index) => {
                if (imageSrc) {
                    placeholder.style.display = 'none';
                    placeholder.classList.add('hidden');
                } else {
                    placeholder.style.display = 'block';
                    placeholder.classList.remove('hidden');
                    console.log(`Section2 placeholder ${num} shown in template ${index + 1}`);
                }
            });
        }
    } else if (imageType.startsWith('section3-'))) {
        const num = imageType.split('-')[1];
        // Find all instances (since multiple templates exist in the preview)
        const imgs = previewContainer.querySelectorAll(`#section3-image${num}-display`);
        const placeholders = previewContainer.querySelectorAll(`#section3-placeholder${num}`);
        
        console.log('Updating section3 image:', { imageType, num, imgCount: imgs.length, placeholderCount: placeholders.length, imageSrc: !!imageSrc });
        
        if (imgs.length > 0 && placeholders.length > 0) {
            // Update all instances
            imgs.forEach((img, index) => {
                if (imageSrc) {
                    img.src = imageSrc;
                    img.classList.remove('hidden');
                    img.style.display = 'block';
                    img.style.opacity = '1';
                    img.style.zIndex = '10';
                    img.style.position = 'absolute';
                    console.log(`Section3 image ${num} displayed in template ${index + 1}`);
                } else {
                    img.classList.add('hidden');
                    img.style.display = 'none';
                }
            });
            
            placeholders.forEach((placeholder, index) => {
                if (imageSrc) {
                    placeholder.style.display = 'none';
                    placeholder.classList.add('hidden');
                } else {
                    placeholder.style.display = 'block';
                    placeholder.classList.remove('hidden');
                    console.log(`Section3 placeholder ${num} shown in template ${index + 1}`);
                }
            });
        } else {
            console.warn('Section3 image elements not found:', { num, imgCount: imgs.length, placeholderCount: placeholders.length });
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
