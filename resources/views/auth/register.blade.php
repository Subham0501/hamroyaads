@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-gray-50 dark:bg-[#0f172a] flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-md w-full space-y-8">
        <!-- Header -->
        <div class="text-center">
            <a href="/" class="inline-block mb-6">
                <span class="text-3xl font-extrabold tracking-tight">
                    <span class="text-[#ff6b6b]">Hamro</span>
                    <span class="text-[#4ecdc4]">Yaad</span>
                </span>
            </a>
            <h2 class="text-4xl font-black text-gray-900 dark:text-white mb-2">Create Account</h2>
            <p class="text-gray-600 dark:text-[#cbd5e1]">Sign up to start creating your custom gift websites</p>
        </div>

        <!-- Register Form -->
        <div class="bg-white dark:bg-[#1e293b] rounded-2xl shadow-xl p-8 border border-gray-100 dark:border-[#334155]">
            <form method="POST" action="{{ route('register') }}" class="space-y-6">
                @csrf

                <!-- Name -->
                <div>
                    <label for="name" class="block text-base font-semibold text-gray-700 dark:text-[#cbd5e1] mb-3">Name</label>
                    <input type="text" id="name" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus
                           class="w-full px-5 py-4 rounded-xl border-2 border-gray-300 dark:border-[#334155] bg-white dark:bg-[#0f172a] text-gray-900 dark:text-white focus:ring-2 focus:ring-[#ff6b6b] focus:border-transparent text-lg @error('name') border-red-500 @enderror"
                           placeholder="Enter your name">
                    @error('name')
                        <p class="mt-2 text-sm text-red-500">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Email -->
                <div>
                    <label for="email" class="block text-base font-semibold text-gray-700 dark:text-[#cbd5e1] mb-3">Email</label>
                    <input type="email" id="email" name="email" value="{{ old('email') }}" required autocomplete="email"
                           class="w-full px-5 py-4 rounded-xl border-2 border-gray-300 dark:border-[#334155] bg-white dark:bg-[#0f172a] text-gray-900 dark:text-white focus:ring-2 focus:ring-[#ff6b6b] focus:border-transparent text-lg @error('email') border-red-500 @enderror"
                           placeholder="Enter your email">
                    @error('email')
                        <p class="mt-2 text-sm text-red-500">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Password -->
                <div>
                    <label for="password" class="block text-base font-semibold text-gray-700 dark:text-[#cbd5e1] mb-3">Password</label>
                    <input type="password" id="password" name="password" required autocomplete="new-password"
                           class="w-full px-5 py-4 rounded-xl border-2 border-gray-300 dark:border-[#334155] bg-white dark:bg-[#0f172a] text-gray-900 dark:text-white focus:ring-2 focus:ring-[#ff6b6b] focus:border-transparent text-lg @error('password') border-red-500 @enderror"
                           placeholder="Enter your password">
                    @error('password')
                        <p class="mt-2 text-sm text-red-500">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Password Confirmation -->
                <div>
                    <label for="password_confirmation" class="block text-base font-semibold text-gray-700 dark:text-[#cbd5e1] mb-3">Confirm Password</label>
                    <input type="password" id="password_confirmation" name="password_confirmation" required autocomplete="new-password"
                           class="w-full px-5 py-4 rounded-xl border-2 border-gray-300 dark:border-[#334155] bg-white dark:bg-[#0f172a] text-gray-900 dark:text-white focus:ring-2 focus:ring-[#ff6b6b] focus:border-transparent text-lg"
                           placeholder="Confirm your password">
                </div>

                <!-- Submit Button -->
                <div>
                    <button type="submit" class="w-full bg-gradient-to-r from-[#ff6b6b] to-[#ff5252] text-white px-8 py-4 rounded-xl font-bold text-lg tracking-wide hover:shadow-lg hover:shadow-[#ff6b6b]/30 transition-all hover:-translate-y-0.5">
                        Create Account
                    </button>
                </div>
            </form>

            <!-- Login Link -->
            <div class="mt-6 text-center">
                <p class="text-gray-600 dark:text-[#cbd5e1]">
                    Already have an account?
                    <a href="{{ route('login') }}" class="text-[#ff6b6b] font-bold hover:text-[#ff5252] transition-colors">
                        Sign in
                    </a>
                </p>
            </div>
        </div>
    </div>
</div>
@endsection

