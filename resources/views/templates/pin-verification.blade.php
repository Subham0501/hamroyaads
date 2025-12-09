@extends('layouts.app')

@section('content')
<style>
    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
        }
        to {
            opacity: 1;
        }
    }

    @keyframes shake {
        0%, 100% { transform: translateX(0); }
        25% { transform: translateX(-10px); }
        75% { transform: translateX(10px); }
    }

    @keyframes pulse {
        0%, 100% { transform: scale(1); }
        50% { transform: scale(1.05); }
    }

    @keyframes slideIn {
        from {
            opacity: 0;
            transform: translateX(-20px);
        }
        to {
            opacity: 1;
            transform: translateX(0);
        }
    }

    .animate-fade-in-up {
        animation: fadeInUp 0.6s ease-out;
    }

    .animate-fade-in {
        animation: fadeIn 0.8s ease-out;
    }

    .animate-shake {
        animation: shake 0.5s ease-in-out;
    }

    .pin-box {
        transition: all 0.3s ease;
    }

    .pin-box:focus {
        transform: scale(1.1);
        box-shadow: 0 0 20px rgba(78, 205, 196, 0.5);
    }

    .pin-box.filled {
        background: linear-gradient(135deg, #4ecdc4 0%, #45b8b0 100%);
        color: white;
        border-color: #4ecdc4;
    }

    .error-message {
        animation: slideIn 0.3s ease-out;
    }

    .submit-button {
        position: relative;
        overflow: hidden;
    }

    .submit-button::before {
        content: '';
        position: absolute;
        top: 50%;
        left: 50%;
        width: 0;
        height: 0;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.3);
        transform: translate(-50%, -50%);
        transition: width 0.6s, height 0.6s;
    }

    .submit-button:active::before {
        width: 300px;
        height: 300px;
    }

    .brand-animation {
        animation: fadeIn 1s ease-out;
    }

    .brand-animation span:first-child {
        animation: fadeIn 0.8s ease-out 0.2s both;
    }

    .brand-animation span:last-child {
        animation: fadeIn 0.8s ease-out 0.4s both;
    }

    /* Ensure button is clickable */
    #theme-toggle {
        pointer-events: auto !important;
        cursor: pointer !important;
    }
</style>

<!-- Theme toggle is handled globally in layouts/app.blade.php -->

<div class="min-h-screen bg-gradient-to-br from-gray-50 via-blue-50 to-cyan-50 dark:from-[#0f172a] dark:via-[#1a1f2e] dark:to-[#181d29] flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8 relative">
    <!-- Theme Toggle Button -->
    <button id="theme-toggle" type="button" onclick="if(window.toggleTheme) window.toggleTheme(event);" class="fixed top-6 right-6 z-50 p-3 rounded-xl bg-white/80 dark:bg-[#1e293b]/80 backdrop-blur-lg text-gray-700 dark:text-[#cbd5e1] hover:bg-white dark:hover:bg-[#1e293b] border border-gray-200/50 dark:border-[#334155]/50 shadow-lg hover:shadow-xl transition-all duration-300 hover:scale-110 group animate-fade-in cursor-pointer" style="animation-delay: 0.1s;" aria-label="Toggle dark mode">
        <svg id="moon-icon" class="w-6 h-6 dark:hidden transition-transform group-hover:rotate-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"></path>
        </svg>
        <svg id="sun-icon" class="w-6 h-6 hidden dark:block transition-transform group-hover:rotate-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"></path>
        </svg>
    </button>
    
    <div class="max-w-md w-full space-y-8">
        <!-- Header with Animation -->
        <div class="text-center animate-fade-in">
            <a href="/" class="inline-block mb-6 brand-animation">
                <span class="text-4xl font-extrabold tracking-tight">
                    <span class="text-[#ff6b6b]">Hamro</span>
                    <span class="text-[#4ecdc4]">Yaad</span>
                </span>
            </a>
            <h2 class="text-5xl font-black text-gray-900 dark:text-white mb-3 animate-fade-in-up" style="animation-delay: 0.2s;">
                Enter PIN
            </h2>
            <p class="text-lg text-gray-600 dark:text-[#cbd5e1] mb-2 animate-fade-in-up" style="animation-delay: 0.3s;">
                This template is protected. Please enter the PIN to view.
            </p>
            @if(isset($recipient_name))
            <div class="inline-flex items-center gap-2 px-4 py-2 bg-gradient-to-r from-[#4ecdc4]/10 to-[#45b8b0]/10 dark:from-[#4ecdc4]/20 dark:to-[#45b8b0]/20 rounded-full border border-[#4ecdc4]/30 dark:border-[#4ecdc4]/50 animate-fade-in-up" style="animation-delay: 0.4s;">
                <svg class="w-4 h-4 text-[#4ecdc4]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                </svg>
                <span class="text-sm font-semibold text-gray-700 dark:text-[#cbd5e1]">For: {{ $recipient_name }}</span>
            </div>
            @endif
        </div>

        <!-- PIN Form with Animation -->
        <div class="bg-white/80 dark:bg-[#1e293b]/90 backdrop-blur-lg rounded-3xl shadow-2xl p-8 border border-gray-200/50 dark:border-[#334155]/50 animate-fade-in-up" style="animation-delay: 0.5s;">
            <form method="POST" action="{{ route('templates.verify-pin', $slug) }}" id="pinForm" class="space-y-8">
                @csrf
                
                @if(session('error'))
                    <div class="mb-6 p-4 bg-red-500/10 border-2 border-red-500/30 rounded-xl text-red-500 text-sm font-semibold error-message animate-shake">
                        <div class="flex items-center gap-2">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <span>{{ session('error') }}</span>
                        </div>
                    </div>
                @endif

                <!-- PIN Input Boxes -->
                <div>
                    <label for="pin" class="block text-base font-semibold text-gray-700 dark:text-[#cbd5e1] mb-4 text-center">
                        Enter 5-Digit PIN
                    </label>
                    
                    <!-- Individual PIN Boxes -->
                    <div class="flex justify-center gap-3 mb-4" id="pinBoxes">
                        @for($i = 0; $i < 5; $i++)
                        <div class="pin-box w-16 h-16 rounded-xl border-2 border-gray-300 dark:border-[#334155] bg-white dark:bg-[#0f172a] flex items-center justify-center text-2xl font-bold text-gray-900 dark:text-white transition-all duration-300" 
                             style="animation-delay: {{ $i * 0.1 }}s;">
                            <span class="pin-digit-{{ $i }}"></span>
                        </div>
                        @endfor
                    </div>

                    <!-- Hidden Input -->
                    <input type="text" id="pin" name="pin" required maxlength="5" pattern="[0-9]{5}" autofocus
                           class="absolute opacity-0 pointer-events-none"
                           placeholder="00000">
                    @error('pin')
                        <p class="mt-2 text-sm text-red-500 text-center animate-shake">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Submit Button -->
                <div>
                    <button type="submit" id="submitBtn" class="submit-button w-full bg-gradient-to-r from-[#4ecdc4] to-[#45b8b0] text-white px-8 py-4 rounded-xl font-bold text-lg tracking-wide hover:shadow-2xl hover:shadow-[#4ecdc4]/40 transition-all hover:-translate-y-1 active:scale-95 relative overflow-hidden group">
                        <span class="relative z-10 flex items-center justify-center gap-2">
                            <svg class="w-5 h-5 group-hover:rotate-12 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <span>Verify & View</span>
                        </span>
                    </button>
                </div>
            </form>
        </div>

        <!-- Back Link -->
        <div class="text-center animate-fade-in-up" style="animation-delay: 0.6s;">
            <a href="/" class="inline-flex items-center gap-2 text-gray-600 dark:text-[#cbd5e1] hover:text-gray-900 dark:hover:text-white transition-colors">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                </svg>
                <span>Back to Home</span>
            </a>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const pinInput = document.getElementById('pin');
    const pinBoxes = document.querySelectorAll('.pin-box');
    const pinDigits = document.querySelectorAll('[class*="pin-digit"]');
    const form = document.getElementById('pinForm');
    const submitBtn = document.getElementById('submitBtn');
    
    // Focus the hidden input
    pinInput.focus();
    
    // Update PIN boxes when input changes
        pinInput.addEventListener('input', function(e) {
        const value = e.target.value.replace(/[^0-9]/g, '').slice(0, 5);
        e.target.value = value;
        
        // Update visual boxes
        pinBoxes.forEach((box, index) => {
            const digit = value[index] || '';
            const digitSpan = box.querySelector('span');
            
            if (digit) {
                digitSpan.textContent = '•';
                box.classList.add('filled');
                box.style.borderColor = '#4ecdc4';
            } else {
                digitSpan.textContent = '';
                box.classList.remove('filled');
                box.style.borderColor = '';
            }
        });
        
        // Auto-submit when 5 digits are entered
        if (value.length === 5) {
            setTimeout(() => {
                submitBtn.classList.add('opacity-75', 'cursor-not-allowed');
                submitBtn.disabled = true;
                submitBtn.querySelector('span').innerHTML = `
                    <svg class="animate-spin h-5 w-5" fill="none" viewBox="0 0 24 24">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                    </svg>
                    <span>Verifying...</span>
                `;
                form.submit();
            }, 300);
        } else {
            submitBtn.classList.remove('opacity-75', 'cursor-not-allowed');
            submitBtn.disabled = false;
        }
    });
    
    // Handle keyboard input
    pinInput.addEventListener('keydown', function(e) {
        // Allow backspace, delete, tab, escape, enter
        if ([8, 9, 27, 13, 46].indexOf(e.keyCode) !== -1 ||
            // Allow Ctrl+A, Ctrl+C, Ctrl+V, Ctrl+X
            (e.keyCode === 65 && e.ctrlKey === true) ||
            (e.keyCode === 67 && e.ctrlKey === true) ||
            (e.keyCode === 86 && e.ctrlKey === true) ||
            (e.keyCode === 88 && e.ctrlKey === true) ||
            // Allow home, end, left, right
            (e.keyCode >= 35 && e.keyCode <= 39)) {
            return;
        }
        // Ensure that it is a number and stop the keypress
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
            e.preventDefault();
        }
    });
    
    // Add click handler to focus input when clicking boxes
    pinBoxes.forEach((box, index) => {
        box.addEventListener('click', () => {
            pinInput.focus();
        });
    });
    
    // Add animation to boxes on load
    pinBoxes.forEach((box, index) => {
        setTimeout(() => {
            box.style.animation = `fadeInUp 0.4s ease-out ${index * 0.1}s both`;
        }, 100);
    });
    
    // Handle form submission
    form.addEventListener('submit', function(e) {
        if (pinInput.value.length !== 5) {
            e.preventDefault();
            // Shake animation
            pinBoxes.forEach(box => {
                box.style.animation = 'shake 0.5s ease-in-out';
                setTimeout(() => {
                    box.style.animation = '';
                }, 500);
            });
            return false;
        }
        
        // Show loading state
        submitBtn.disabled = true;
        submitBtn.classList.add('opacity-75', 'cursor-not-allowed');
    });
    
    // Focus management
    pinInput.addEventListener('focus', function() {
        pinBoxes.forEach(box => {
            box.style.borderColor = '#4ecdc4';
            box.style.boxShadow = '0 0 0 3px rgba(78, 205, 196, 0.1)';
        });
        });
    
    pinInput.addEventListener('blur', function() {
        pinBoxes.forEach(box => {
            if (!box.classList.contains('filled')) {
                box.style.borderColor = '';
                box.style.boxShadow = '';
            }
        });
    });
    
    // Theme toggle is already initialized in the inline script above
    // This ensures it works even if DOMContentLoaded hasn't fired yet
});
</script>
@endsection
