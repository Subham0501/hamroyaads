{{-- Valentine 3: Passionate Heart - Bold Red Layout --}}
<div class="min-h-screen bg-white dark:bg-[#0f172a]">
    <div class="relative min-h-screen overflow-hidden">
        <div class="absolute inset-0 z-0">
            <img src="{{ $categoryImages['hero'] }}" alt="Hero" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-b from-black/70 via-black/50 to-black/30"></div>
        </div>
        <div class="relative z-10 min-h-screen flex items-center justify-center px-12 py-32">
            <div class="max-w-6xl mx-auto text-center space-y-12">
                <div class="flex justify-center mb-8">
                    <div class="w-48 h-48 rounded-full flex items-center justify-center shadow-2xl border-8 border-white/50 bg-white/10 backdrop-blur-md">
                        <svg class="w-28 h-28 text-white" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                        </svg>
                    </div>
                </div>
                <h1 class="text-7xl md:text-9xl lg:text-[11rem] font-black text-white leading-[0.85] mb-6 drop-shadow-2xl">
                    {{ $templateData['defaults']['heading'] }}
                </h1>
                <p class="text-2xl md:text-3xl text-white/90 font-light max-w-3xl mx-auto">
                    {{ Str::limit($templateData['defaults']['message'], 80) }}
                </p>
            </div>
        </div>
    </div>
</div>
