{{-- Father's Day 2: Hero Tribute - Hero Banner Style --}}
<div class="min-h-screen bg-white dark:bg-[#0f172a]">
    <div class="relative min-h-screen overflow-hidden">
        <div class="absolute inset-0 z-0">
            <img src="{{ $categoryImages['hero'] }}" alt="Hero" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-b from-{{ $templateData['color'] }}/90 via-{{ $templateData['color'] }}/70 to-transparent"></div>
        </div>
        <div class="relative z-10 min-h-screen flex items-center justify-center px-12 py-32">
            <div class="max-w-6xl mx-auto text-center space-y-12">
                <div class="flex justify-center mb-8">
                    <div class="w-40 h-40 rounded-full flex items-center justify-center shadow-2xl border-8 border-white/50 bg-white/20 backdrop-blur-md">
                        <svg class="w-24 h-24 text-white" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                        </svg>
                    </div>
                </div>
                <h1 class="text-7xl md:text-9xl lg:text-[11rem] font-black text-white leading-[0.85] mb-6 drop-shadow-2xl">
                    {{ $templateData['defaults']['heading'] }}
                </h1>
                <p class="text-3xl md:text-4xl text-white/90 font-light max-w-3xl mx-auto">
                    {{ Str::limit($templateData['defaults']['message'], 70) }}
                </p>
            </div>
        </div>
    </div>
</div>
