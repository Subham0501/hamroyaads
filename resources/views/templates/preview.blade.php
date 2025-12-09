@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-gray-50 dark:bg-[#0f172a] py-8">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header -->
        <div class="mb-8 text-center">
            <a href="/" class="inline-flex items-center text-gray-600 dark:text-[#cbd5e1] hover:text-gray-900 dark:hover:text-white mb-4">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                </svg>
                Back to Home
            </a>
            <h1 class="text-4xl font-black text-gray-900 dark:text-white mb-2">Template Preview</h1>
        </div>

        <!-- Template Preview -->
        <div class="bg-white dark:bg-[#1e293b] rounded-xl shadow-2xl overflow-hidden">
            <div id="template-display" class="min-h-screen">
                @include('templates._website-designs')
            </div>
        </div>

        <!-- Actions -->
        <div class="mt-8 flex gap-4 justify-center">
            <a href="/template/{{ $template }}/customize" class="bg-gray-200 dark:bg-[#334155] text-gray-900 dark:text-white px-8 py-3 rounded-lg font-semibold hover:bg-gray-300 dark:hover:bg-[#475569] transition-colors">
                Edit Template
            </a>
            <button onclick="generateQR()" class="text-white px-8 py-3 rounded-lg font-semibold transition-colors" style="background-color: {{ $templateData['color'] }}">
                Generate QR Code
            </button>
        </div>
    </div>
</div>

<script>
    // Load customized data from localStorage
    document.addEventListener('DOMContentLoaded', function() {
        const savedData = localStorage.getItem('template_data');
        if (savedData) {
            try {
                const data = JSON.parse(savedData);
                const templateDisplay = document.getElementById('template-display');
                
                if (templateDisplay && data.template === '{{ $template }}') {
                    // Update heading
                    const heading = templateDisplay.querySelector('#preview-heading');
                    if (heading && data.heading) {
                        heading.textContent = data.heading;
                    }
                    
                    // Update subheading
                    const subheading = templateDisplay.querySelector('#preview-subheading');
                    if (subheading && data.subheading) {
                        subheading.textContent = data.subheading;
                    }
                    
                    // Update message
                    const message = templateDisplay.querySelector('#preview-message');
                    if (message && data.message) {
                        message.textContent = data.message;
                    }
                    
                    // Update from
                    const from = templateDisplay.querySelector('#preview-from');
                    if (from && data.from) {
                        from.textContent = data.from;
                    }
                    
                    // Update sections
                    if (data.sections) {
                        for (let i = 1; i <= 5; i++) {
                            const sectionTitle = templateDisplay.querySelector(`#section${i}-title`);
                            const sectionContent = templateDisplay.querySelector(`#section${i}-content`);
                            
                            if (data.sections[`section${i}`]) {
                                if (sectionTitle) {
                                    sectionTitle.textContent = data.sections[`section${i}`].title;
                                }
                                if (sectionContent) {
                                    sectionContent.textContent = data.sections[`section${i}`].content;
                                }
                            }
                        }
                    }
                    
                    // Update images
                    if (data.images) {
                        // Hero image
                        if (data.images.hero) {
                            const heroImg = templateDisplay.querySelector('#hero-image-display');
                            if (heroImg) {
                                heroImg.src = data.images.hero;
                                heroImg.style.display = 'block';
                            }
                        }
                        
                        // Section 2 image
                        if (data.images.section2) {
                            const section2Img = templateDisplay.querySelector('#section2-image-display');
                            const section2Placeholder = templateDisplay.querySelector('#section2-placeholder');
                            if (section2Img && section2Placeholder) {
                                section2Img.src = data.images.section2;
                                section2Img.classList.remove('hidden');
                                section2Img.style.display = 'block';
                                section2Placeholder.style.display = 'none';
                            }
                        }
                        
                        // Section 3 images
                        if (data.images.section3) {
                            const section3Images = templateDisplay.querySelectorAll('#section3-images-container .aspect-square');
                            for (let i = 0; i < 3; i++) {
                                const imageKey = `image${i + 1}`;
                                if (data.images.section3[imageKey] && section3Images[i]) {
                                    const img = section3Images[i].querySelector('img') || document.createElement('img');
                                    img.src = data.images.section3[imageKey];
                                    img.className = 'w-full h-full object-cover';
                                    img.alt = `Section 3 Image ${i + 1}`;
                                    if (!section3Images[i].querySelector('img')) {
                                        section3Images[i].innerHTML = '';
                                        section3Images[i].appendChild(img);
                                    }
                                }
                            }
                        }
                        
                        // Memories
                        if (data.images.memories && data.images.memories.length > 0) {
                            const memoriesSection = templateDisplay.querySelector('#memories-section');
                            if (memoriesSection) {
                                memoriesSection.innerHTML = '';
                                data.images.memories.forEach((memory, index) => {
                                    const div = document.createElement('div');
                                    div.className = 'aspect-square relative overflow-hidden rounded-3xl shadow-lg group hover:scale-105 transition-transform duration-300';
                                    const img = document.createElement('img');
                                    img.src = memory;
                                    img.alt = `Memory ${index + 1}`;
                                    img.className = 'w-full h-full object-cover';
                                    div.appendChild(img);
                                    memoriesSection.appendChild(div);
                                });
                            }
                        }
                    }
                    
                    // Update theme color
                    if (data.themeColor) {
                        const container = templateDisplay.querySelector('#template-container');
                        if (container) {
                            container.style.setProperty('--theme-color', data.themeColor);
                        }
                    }
                }
            } catch(e) {
                console.log('Error loading saved data:', e);
            }
        }
    });
    
    function generateQR() {
        alert('QR Code generation feature coming soon!');
        // Implement QR code generation here
    }
</script>
@endsection
