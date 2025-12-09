{{-- Marriage 2: Classic Romance - Split Layout with Image --}}
<div class="min-h-screen bg-white dark:bg-[#0f172a]">
    <header class="relative border-b-8 overflow-hidden" style="border-color: {{ $templateData['color'] }};">
        <div class="absolute inset-0 z-0">
            <img src="{{ $categoryImages['hero'] }}" alt="Hero" class="w-full h-[85vh] object-cover">
            <div class="absolute inset-0 bg-gradient-to-r from-black/80 via-black/50 to-black/30"></div>
        </div>
        <div class="relative z-10 max-w-7xl mx-auto px-12 py-32">
            <div class="max-w-4xl">
                <h1 class="text-7xl md:text-9xl lg:text-[11rem] font-black text-white leading-[0.85] mb-8">
                    {{ $templateData['defaults']['heading'] }}
                </h1>
            </div>
        </div>
    </header>
    <main class="py-24 px-12">
        <div class="max-w-7xl mx-auto">
            <div class="grid lg:grid-cols-3 gap-16">
                <div class="lg:col-span-1">
                    <div class="w-full aspect-square rounded-3xl flex items-center justify-center shadow-2xl transform rotate-3 border-8 border-white" style="background-color: {{ $templateData['color'] }};">
                        <svg class="w-40 h-40 text-white" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                        </svg>
                    </div>
                </div>
                <div class="lg:col-span-2">
                    <p class="text-3xl md:text-4xl text-gray-800 dark:text-[#e2e8f0] leading-relaxed font-light">
                        {{ Str::limit($templateData['defaults']['message'], 100) }}
                    </p>
                </div>
            </div>
        </div>
    </main>
</div>
