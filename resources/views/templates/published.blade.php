@extends('layouts.app')

@section('content')
<!-- Theme Toggle Button -->
<button id="theme-toggle" type="button" class="fixed top-6 right-6 z-[100] p-3 rounded-xl bg-white/90 dark:bg-[#1e293b]/90 backdrop-blur-lg text-gray-700 dark:text-[#cbd5e1] hover:bg-white dark:hover:bg-[#1e293b] border border-gray-200/50 dark:border-[#334155]/50 shadow-lg hover:shadow-xl transition-all duration-300 hover:scale-110 group cursor-pointer" aria-label="Toggle dark mode">
    <svg id="moon-icon" class="w-6 h-6 dark:hidden transition-transform group-hover:rotate-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"></path>
    </svg>
    <svg id="sun-icon" class="w-6 h-6 hidden dark:block transition-transform group-hover:rotate-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"></path>
    </svg>
</button>

<div id="template-container" data-theme-color="{{ $customizedTemplate->theme_color }}">
    @include('templates._website-designs')
</div>

<script>
// Apply customized images and theme
document.addEventListener('DOMContentLoaded', function() {
    const customizedTemplate = @json($customizedTemplate);
    const images = customizedTemplate.images || {};
    
    console.log('Customized Template:', customizedTemplate);
    console.log('Images:', images);
    
    // Apply theme color
    if (customizedTemplate.theme_color) {
        document.documentElement.style.setProperty('--theme-color', customizedTemplate.theme_color);
        const container = document.getElementById('template-container');
        if (container) {
            container.style.setProperty('--theme-color', customizedTemplate.theme_color);
        }
    }
    
    // Helper function to ensure image URL is absolute
    function getImageUrl(url) {
        if (!url) return null;
        // If it's already a full URL, return as is
        if (url.startsWith('http://') || url.startsWith('https://')) {
            return url;
        }
        // If it starts with /storage, it's already correct
        if (url.startsWith('/storage/')) {
            return url;
        }
        // If it's a relative path, prepend /storage
        if (url.startsWith('storage/')) {
            return '/' + url;
        }
        // Otherwise, assume it's a storage path
        return url.startsWith('/') ? url : '/' + url;
    }
    
    // Apply hero image
    if (images.hero) {
        const heroUrl = getImageUrl(images.hero);
        const heroImg = document.querySelector('[data-image="hero"]') || 
                       document.querySelector('#hero-image-display') ||
                       document.querySelector('img[alt="Hero"]');
        if (heroImg) {
            heroImg.src = heroUrl;
            heroImg.style.display = 'block';
            heroImg.onerror = function() {
                console.error('Failed to load hero image:', heroUrl);
            };
            console.log('Applied hero image:', heroUrl);
        } else {
            console.warn('Hero image element not found');
        }
    }
    
    // Apply section 2 image
    if (images.section2) {
        const section2Url = getImageUrl(images.section2);
        const section2Img = document.querySelector('#section2-image-display');
        const section2Placeholder = document.querySelector('#section2-placeholder');
        if (section2Img) {
            section2Img.src = section2Url;
            section2Img.style.display = 'block';
            section2Img.onerror = function() {
                console.error('Failed to load section2 image:', section2Url);
            };
            if (section2Placeholder) {
                section2Placeholder.style.display = 'none';
            }
            console.log('Applied section2 image:', section2Url);
        }
    }
    
    // Apply section 3 images
    if (images.section3 && typeof images.section3 === 'object') {
        ['image1', 'image2', 'image3'].forEach((key, index) => {
            const num = index + 1;
            if (images.section3[key]) {
                const imgUrl = getImageUrl(images.section3[key]);
                const img = document.querySelector(`#section3-image${num}-display`);
                const placeholder = document.querySelector(`#section3-placeholder${num}`);
                if (img) {
                    img.src = imgUrl;
                    img.style.display = 'block';
                    img.onerror = function() {
                        console.error(`Failed to load section3 image${num}:`, imgUrl);
                    };
                    if (placeholder) {
                        placeholder.style.display = 'none';
                    }
                    console.log(`Applied section3 image${num}:`, imgUrl);
                }
            }
        });
    }
    
    // Apply memories
    if (images.memories && Array.isArray(images.memories) && images.memories.length > 0) {
        const memoriesSection = document.querySelector('#memories-section');
        if (memoriesSection) {
            memoriesSection.innerHTML = '';
            images.memories.forEach((memory, index) => {
                const memoryUrl = getImageUrl(memory);
                const div = document.createElement('div');
                div.className = 'aspect-square relative overflow-hidden rounded-2xl shadow-lg';
                const img = document.createElement('img');
                img.src = memoryUrl;
                img.alt = `Memory ${index + 1}`;
                img.className = 'w-full h-full object-cover';
                img.onerror = function() {
                    console.error(`Failed to load memory ${index + 1}:`, memoryUrl);
                };
                div.appendChild(img);
                memoriesSection.appendChild(div);
            });
            console.log('Applied memories:', images.memories.length);
        }
    }
    
    // Theme Toggle Functionality
    function initThemeToggle() {
        const html = document.documentElement;
        const savedTheme = localStorage.getItem('theme') || 'light';
        
        // Initialize theme
        if (savedTheme === 'dark') {
            html.classList.add('dark');
        } else {
            html.classList.remove('dark');
        }
        
        // Theme toggle function
        function toggleTheme(e) {
            if (e) {
                e.preventDefault();
                e.stopPropagation();
            }
            
            if (html.classList.contains('dark')) {
                html.classList.remove('dark');
                localStorage.setItem('theme', 'light');
            } else {
                html.classList.add('dark');
                localStorage.setItem('theme', 'dark');
            }
        }
        
        // Set up toggle buttons (both fixed and nav)
        function setupThemeToggle() {
            const themeToggle = document.getElementById('theme-toggle');
            const themeToggleNavs = document.querySelectorAll('#theme-toggle-nav');
            
            // Setup fixed toggle button
            if (themeToggle) {
                const newToggle = themeToggle.cloneNode(true);
                themeToggle.parentNode.replaceChild(newToggle, themeToggle);
                newToggle.addEventListener('click', toggleTheme, false);
                newToggle.addEventListener('mousedown', function(e) {
                    e.preventDefault();
                    toggleTheme(e);
                }, false);
            }
            
            // Setup all nav toggle buttons (in case there are multiple templates)
            themeToggleNavs.forEach(function(themeToggleNav) {
                const newToggleNav = themeToggleNav.cloneNode(true);
                themeToggleNav.parentNode.replaceChild(newToggleNav, themeToggleNav);
                newToggleNav.addEventListener('click', toggleTheme, false);
                newToggleNav.addEventListener('mousedown', function(e) {
                    e.preventDefault();
                    toggleTheme(e);
                }, false);
            });
            
            if (!themeToggle && themeToggleNavs.length === 0) {
                setTimeout(setupThemeToggle, 100);
                return;
            }
        }
        
        // Initialize toggle buttons
        if (document.readyState === 'loading') {
            document.addEventListener('DOMContentLoaded', setupThemeToggle);
        } else {
            setupThemeToggle();
        }
        
        // Also try after a short delay as backup
        setTimeout(setupThemeToggle, 500);
    }
    
    // Initialize theme toggle
    initThemeToggle();
});
</script>
@endsection

