{{-- Birthday 3: Elegant Wishes - Sophisticated Layout --}}
<div class="min-h-screen bg-gradient-to-br {{ $templateData['bg'] }}">
    <div class="min-h-screen flex items-center justify-center px-12 py-32">
        <div class="max-w-5xl mx-auto">
            <div class="text-center space-y-16">
                <div class="relative inline-block">
                    <div class="absolute inset-0 rounded-full blur-3xl opacity-50" style="background-color: {{ $templateData['color'] }};"></div>
                    <div class="relative w-48 h-48 rounded-full flex items-center justify-center shadow-2xl border-8 border-white/60" style="background-color: {{ $templateData['color'] }};">
                        <svg class="w-24 h-24 text-white" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 8v13m0-13V6a2 2 0 112 2h-2zm0 0V5.5A2.5 2.5 0 109.5 8H12zm-7 4h14M5 12a2 2 0 110-4h14a2 2 0 110 4M5 12v7a2 2 0 002 2h10a2 2 0 002-2v-7"/>
                        </svg>
                    </div>
                </div>
                <div class="space-y-8">
                    <div class="inline-block px-8 py-4 rounded-full backdrop-blur-md border-2 border-white/30" style="background-color: {{ $templateData['color'] }}40;">
                        <p class="text-xl font-semibold uppercase tracking-wider text-white">{{ $templateData['defaults']['subheading'] }}</p>
                    </div>
                    <h1 class="text-7xl md:text-9xl font-black leading-[0.9]" style="color: {{ $templateData['color'] }};">
                        {{ $templateData['defaults']['heading'] }}
                    </h1>
                    <p class="text-2xl md:text-3xl text-gray-700 dark:text-[#cbd5e1] font-light leading-relaxed max-w-3xl mx-auto">
                        {{ Str::limit($templateData['defaults']['message'], 90) }}
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
