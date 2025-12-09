<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Hamro Yaad - Custom Gifting Made Easy')</title>
    <meta name="description" content="Create beautiful custom gift websites for any occasion. Personalize templates, add QR codes, and share your love with the world.">
    
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        'theme-color': 'var(--theme-color, #4ecdc4)',
                    }
                }
            }
        }
    </script>
    
    <style>
        /* Custom styles */
        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
        }
        
        /* Theme color variable */
        :root {
            --theme-color: #4ecdc4;
        }
        
        .theme-bg {
            background: var(--theme-color);
        }
        
        .theme-bg-opacity {
            background: rgba(78, 205, 196, 0.9);
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
<body class="bg-[#0a0a0a] text-white antialiased" style="scroll-behavior: smooth;">
    @yield('content')
    
    <!-- Theme Toggle Script - At end of body for better reliability -->
    <script>
        (function() {
            'use strict';
            
            const html = document.documentElement;
            
            // Theme toggle function
            function toggleTheme(e) {
                if (e) {
                    e.preventDefault();
                    e.stopPropagation();
                    e.stopImmediatePropagation();
                }
                
                const isDark = html.classList.contains('dark');
                
                if (isDark) {
                    html.classList.remove('dark');
                    localStorage.setItem('theme', 'light');
                    console.log('Theme changed to: light');
                } else {
                    html.classList.add('dark');
                    localStorage.setItem('theme', 'dark');
                    console.log('Theme changed to: dark');
                }
                
                return false;
            }
            
            // Make it globally accessible
            window.toggleTheme = toggleTheme;
            
            // Set up all toggle buttons
            function setupThemeToggles() {
                const buttons = document.querySelectorAll('#theme-toggle, #theme-toggle-nav');
                
                buttons.forEach(function(button) {
                    // Remove old listeners by cloning
                    if (!button.dataset.setup) {
                        const newButton = button.cloneNode(true);
                        newButton.dataset.setup = 'true';
                        button.parentNode.replaceChild(newButton, button);
                        
                        // Add event listeners
                        newButton.addEventListener('click', toggleTheme, false);
                        newButton.addEventListener('mousedown', function(e) {
                            e.preventDefault();
                            toggleTheme(e);
                        }, false);
                        
                        console.log('Theme toggle button set up:', newButton.id);
                    }
                });
            }
            
            // Run setup when DOM is ready
            if (document.readyState === 'loading') {
                document.addEventListener('DOMContentLoaded', function() {
                    setupThemeToggles();
                    // Retry after a delay to catch any dynamically added buttons
                    setTimeout(setupThemeToggles, 300);
                });
            } else {
                setupThemeToggles();
                setTimeout(setupThemeToggles, 300);
            }
            
            // Watch for new buttons added dynamically
            if (typeof MutationObserver !== 'undefined' && document.body) {
                const observer = new MutationObserver(function() {
                    setupThemeToggles();
                });
                
                observer.observe(document.body, {
                    childList: true,
                    subtree: true
                });
            }
        })();
    </script>
</body>
</html>
