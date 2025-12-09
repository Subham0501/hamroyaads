{{-- Valentine 1: Romantic Love - Heart-Centered Design --}}
<div class="min-h-screen bg-gradient-to-br {{ $templateData['bg'] }}">
    <div class="relative min-h-screen flex items-center justify-center px-12 py-32 overflow-hidden">
        <div class="absolute inset-0 z-0">
            <img src="{{ $categoryImages['hero'] }}" alt="Hero" class="w-full h-full object-cover opacity-40">
            <div class="absolute inset-0 bg-gradient-to-b from-black/50 via-black/30 to-transparent"></div>
        </div>
        <div class="relative z-10 text-center space-y-12 max-w-6xl mx-auto">
            <div class="flex justify-center mb-8">
                <div class="w-56 h-56 rounded-full flex items-center justify-center shadow-2xl backdrop-blur-sm border-8 border-white/40" style="background-color: {{ $templateData['color'] }};">
                    <svg class="w-32 h-32 text-white" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                    </svg>
                </div>
            </div>
            <div class="space-y-8">
                <div class="inline-block px-6 py-3 rounded-full mb-6 backdrop-blur-md border-2 border-white/30" style="background-color: {{ $templateData['color'] }}40;">
                    <p class="text-lg font-bold uppercase tracking-widest text-white">{{ $templateData['defaults']['subheading'] }}</p>
                </div>
                <h1 class="text-7xl md:text-9xl lg:text-[11rem] font-black text-white leading-none drop-shadow-2xl mb-8">
                    {{ $templateData['defaults']['heading'] }}
                </h1>
                <p class="text-2xl md:text-3xl text-white/90 max-w-3xl mx-auto">
                    {{ Str::limit($templateData['defaults']['message'], 75) }}
                </p>
            </div>
        </div>
    </div>
</div>
