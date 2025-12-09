{{-- Valentine 4: Timeless Romance - Classic Elegant Layout --}}
<div class="min-h-screen bg-gradient-to-br {{ $templateData['bg'] }}">
    <div class="min-h-screen flex items-center justify-center px-12 py-32">
        <div class="max-w-6xl mx-auto">
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <div class="relative">
                    <div class="rounded-[2rem] overflow-hidden shadow-[0_25px_60px_rgba(0,0,0,0.3)] border-8 border-white/80">
                        <img src="{{ $categoryImages['hero'] }}" alt="Hero" class="w-full h-[600px] object-cover">
                    </div>
                </div>
                <div class="space-y-10">
                    <div class="inline-flex items-center gap-4 px-6 py-3 rounded-full backdrop-blur-md border-2 border-white/30" style="background-color: {{ $templateData['color'] }}40;">
                        <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                        </svg>
                        <p class="text-xl font-bold uppercase tracking-wide text-white">{{ $templateData['defaults']['subheading'] }}</p>
                    </div>
                    <h1 class="text-6xl md:text-8xl font-black leading-[0.9]" style="color: {{ $templateData['color'] }};">
                        {{ $templateData['defaults']['heading'] }}
                    </h1>
                    <p class="text-2xl md:text-3xl text-gray-700 dark:text-[#cbd5e1] leading-relaxed">
                        {{ Str::limit($templateData['defaults']['message'], 85) }}
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
