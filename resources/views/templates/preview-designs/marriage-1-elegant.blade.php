{{-- Marriage 1: Romantic Elegance - Elegant Full-Screen Hero --}}
<div class="min-h-screen bg-gradient-to-br {{ $templateData['bg'] }}">
    <div class="relative min-h-screen flex items-center justify-center px-8 py-32 overflow-hidden">
        <div class="absolute inset-0 z-0">
            <img src="{{ $categoryImages['hero'] }}" alt="Hero" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-b from-black/50 via-black/30 to-transparent"></div>
        </div>
        <div class="relative z-10 text-center space-y-10 max-w-6xl mx-auto">
            <div class="inline-block px-6 py-3 rounded-full mb-6 backdrop-blur-md border-2 border-white/30" style="background-color: {{ $templateData['color'] }}40;">
                <p class="text-lg font-bold uppercase tracking-widest text-white">{{ $templateData['defaults']['subheading'] }}</p>
            </div>
            <h1 class="text-7xl md:text-9xl lg:text-[12rem] font-black text-white leading-none drop-shadow-2xl mb-8">
                {{ $templateData['defaults']['heading'] }}
            </h1>
            <div class="flex justify-center my-16">
                <div class="w-48 h-48 rounded-full flex items-center justify-center shadow-2xl backdrop-blur-sm border-4 border-white/40" style="background-color: {{ $templateData['color'] }};">
                    <svg class="w-24 h-24 text-white" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                    </svg>
                </div>
            </div>
        </div>
    </div>
</div>
