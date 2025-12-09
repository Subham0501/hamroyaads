{{-- Birthday 1: Celebration Joy - Party Style with Confetti --}}
<div class="min-h-screen bg-gradient-to-br {{ $templateData['bg'] }} relative overflow-hidden">
    <div class="absolute inset-0 opacity-20">
        <div class="absolute top-10 left-10 w-4 h-4 rounded-full" style="background-color: {{ $templateData['color'] }};"></div>
        <div class="absolute top-20 right-20 w-6 h-6 rounded-full" style="background-color: {{ $templateData['color'] }};"></div>
        <div class="absolute bottom-20 left-1/4 w-5 h-5 rounded-full" style="background-color: {{ $templateData['color'] }};"></div>
        <div class="absolute bottom-10 right-1/3 w-4 h-4 rounded-full" style="background-color: {{ $templateData['color'] }};"></div>
    </div>
    <div class="min-h-screen flex items-center justify-center px-12 py-32 relative z-10">
        <div class="max-w-6xl mx-auto text-center space-y-16">
            <div class="relative">
                <div class="absolute -top-8 left-1/2 transform -translate-x-1/2 text-9xl opacity-20" style="color: {{ $templateData['color'] }};">🎉</div>
                <h1 class="text-8xl md:text-[10rem] lg:text-[12rem] font-black leading-[0.85] mb-8" style="color: {{ $templateData['color'] }};">
                    {{ $templateData['defaults']['heading'] }}
                </h1>
            </div>
            <div class="space-y-8">
                <p class="text-3xl md:text-4xl text-gray-800 dark:text-white font-bold uppercase tracking-wide">
                    {{ $templateData['defaults']['subheading'] }}
                </p>
                <p class="text-2xl md:text-3xl text-gray-700 dark:text-[#cbd5e1] max-w-3xl mx-auto">
                    {{ Str::limit($templateData['defaults']['message'], 80) }}
                </p>
            </div>
            <div class="flex justify-center">
                <div class="w-32 h-32 rounded-full flex items-center justify-center shadow-2xl border-8 border-white/60" style="background-color: {{ $templateData['color'] }};">
                    <svg class="w-16 h-16 text-white" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 8v13m0-13V6a2 2 0 112 2h-2zm0 0V5.5A2.5 2.5 0 109.5 8H12zm-7 4h14M5 12a2 2 0 110-4h14a2 2 0 110 4M5 12v7a2 2 0 002 2h10a2 2 0 002-2v-7"/>
                    </svg>
                </div>
            </div>
        </div>
    </div>
</div>
