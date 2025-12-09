@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-white via-gray-50 to-blue-50 dark:from-[#0f172a] dark:via-[#1a1f2e] dark:to-[#181d29] flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8 relative">
    <!-- Theme Toggle Button -->
    <button id="theme-toggle" type="button" class="fixed top-6 right-6 z-50 p-3 rounded-xl bg-white/80 dark:bg-[#1e293b]/80 backdrop-blur-lg text-gray-700 dark:text-[#cbd5e1] hover:bg-white dark:hover:bg-[#1e293b] border border-gray-200/50 dark:border-[#334155]/50 shadow-lg hover:shadow-xl transition-all duration-300 hover:scale-110 group cursor-pointer" aria-label="Toggle dark mode">
        <svg id="moon-icon" class="w-6 h-6 dark:hidden transition-transform group-hover:rotate-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"></path>
        </svg>
        <svg id="sun-icon" class="w-6 h-6 hidden dark:block transition-transform group-hover:rotate-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"></path>
        </svg>
    </button>
    <div class="max-w-md w-full space-y-8">
        <!-- Header -->
        <div class="text-center">
            <a href="/" class="inline-block mb-6">
                <span class="text-3xl font-extrabold tracking-tight">
                    <span class="text-[#ff6b6b]">Hamro</span>
                    <span class="text-[#4ecdc4]">Yaad</span>
                </span>
            </a>
            <h2 class="text-4xl font-black text-gray-900 dark:text-white mb-2">Welcome Back</h2>
            <p class="text-gray-600 dark:text-[#cbd5e1]">Sign in to continue creating your custom gift websites</p>
        </div>

        <!-- Login Form -->
        <div class="bg-white/90 dark:bg-[#1e293b]/90 backdrop-blur-lg rounded-3xl shadow-2xl p-8 border border-gray-200/50 dark:border-[#334155]/50">
            @if(session('success'))
                <div class="mb-6 p-4 bg-green-50 dark:bg-green-500/10 border-2 border-green-200 dark:border-green-500/30 rounded-xl text-green-700 dark:text-green-400 text-sm font-semibold">
                    <div class="flex items-center gap-2">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        <span>{{ session('success') }}</span>
                    </div>
                </div>
            @endif

            @if($errors->any())
                <div class="mb-6 p-4 bg-red-50 dark:bg-red-500/10 border-2 border-red-200 dark:border-red-500/30 rounded-xl text-red-700 dark:text-red-400 text-sm font-semibold">
                    <div class="flex items-center gap-2">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        <span>{{ $errors->first() }}</span>
                    </div>
                </div>
            @endif

            <form method="POST" action="{{ route('login') }}" class="space-y-6">
                @csrf

                <!-- Email -->
                <div>
                    <label for="email" class="block text-base font-semibold text-gray-700 dark:text-[#cbd5e1] mb-3">Email</label>
                    <input type="email" id="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus
                           class="w-full px-5 py-4 rounded-xl border-2 border-gray-200 dark:border-[#334155] bg-white dark:bg-[#0f172a] text-gray-900 dark:text-white focus:ring-2 focus:ring-[#4ecdc4] focus:border-[#4ecdc4] text-lg transition-all @error('email') border-red-500 @enderror"
                           placeholder="Enter your email">
                    @error('email')
                        <p class="mt-2 text-sm text-red-500">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Password -->
                <div>
                    <label for="password" class="block text-base font-semibold text-gray-700 dark:text-[#cbd5e1] mb-3">Password</label>
                    <input type="password" id="password" name="password" required autocomplete="current-password"
                           class="w-full px-5 py-4 rounded-xl border-2 border-gray-200 dark:border-[#334155] bg-white dark:bg-[#0f172a] text-gray-900 dark:text-white focus:ring-2 focus:ring-[#4ecdc4] focus:border-[#4ecdc4] text-lg transition-all @error('password') border-red-500 @enderror"
                           placeholder="Enter your password">
                    @error('password')
                        <p class="mt-2 text-sm text-red-500">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Remember Me -->
                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <input id="remember" name="remember" type="checkbox" class="h-4 w-4 text-[#4ecdc4] focus:ring-[#4ecdc4] border-gray-300 dark:border-[#334155] rounded cursor-pointer">
                        <label for="remember" class="ml-2 block text-sm text-gray-700 dark:text-[#cbd5e1] cursor-pointer">
                            Remember me
                        </label>
                    </div>
                </div>

                <!-- Submit Button -->
                <div>
                    <button type="submit" class="w-full bg-gradient-to-r from-[#4ecdc4] to-[#45b8b0] text-white px-8 py-4 rounded-xl font-bold text-lg tracking-wide hover:shadow-lg hover:shadow-[#4ecdc4]/30 transition-all hover:-translate-y-0.5">
                        Sign In
                    </button>
                </div>
            </form>

            <!-- Register Link -->
            <div class="mt-6 text-center">
                <p class="text-gray-600 dark:text-[#cbd5e1]">
                    Don't have an account?
                    <a href="{{ route('register') }}" class="text-[#4ecdc4] font-bold hover:text-[#45b8b0] transition-colors hover:underline">
                        Create account
                    </a>
                </p>
            </div>
        </div>
    </div>
</div>

<!-- Theme Toggle Script -->
<script>
(function() {
    // Theme toggle is handled globally in layouts/app.blade.php
})();
</script>
@endsection

