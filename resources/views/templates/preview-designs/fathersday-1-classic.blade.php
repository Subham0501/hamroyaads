{{-- Father's Day 1: Classic Appreciation - Bold Typography with Dad Icon --}}
<div class="min-h-screen bg-gradient-to-br {{ $templateData['bg'] }}">
    <div class="min-h-screen flex items-center justify-center px-12 py-32">
        <div class="max-w-6xl mx-auto text-center space-y-16">
            <div class="mb-12">
                <div class="inline-flex items-center justify-center w-48 h-48 rounded-full shadow-2xl mb-12 border-8 border-white/50" style="background-color: {{ $templateData['color'] }};">
                    <svg class="w-28 h-28 text-white" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                    </svg>
                </div>
            </div>
            <div class="space-y-8">
                <div class="inline-block px-8 py-4 rounded-2xl backdrop-blur-md border-2 border-white/30" style="background-color: {{ $templateData['color'] }}40;">
                    <p class="text-2xl font-bold uppercase tracking-wider text-white">{{ $templateData['defaults']['subheading'] }}</p>
                </div>
                <h1 class="text-8xl md:text-[10rem] lg:text-[12rem] font-black leading-[0.9]" style="color: {{ $templateData['color'] }};">
                    {{ $templateData['defaults']['heading'] }}
                </h1>
                <p class="text-4xl md:text-5xl text-gray-700 dark:text-[#cbd5e1] font-medium max-w-4xl mx-auto">
                    {{ Str::limit($templateData['defaults']['message'], 80) }}
                </p>
            </div>
        </div>
    </div>
</div>
