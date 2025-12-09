{{-- Birthday 2: Party Time - Energetic Layout --}}
<div class="min-h-screen bg-white dark:bg-[#0f172a]">
    <div class="relative min-h-screen overflow-hidden">
        <div class="absolute inset-0 z-0">
            <img src="{{ $categoryImages['hero'] }}" alt="Hero" class="w-full h-full object-cover opacity-60">
            <div class="absolute inset-0 bg-gradient-to-br" style="background: linear-gradient(135deg, {{ $templateData['color'] }}80, transparent);"></div>
        </div>
        <div class="relative z-10 min-h-screen flex items-center px-12 py-32">
            <div class="max-w-6xl mx-auto w-full">
                <div class="bg-white/95 dark:bg-[#0f172a]/95 backdrop-blur-xl rounded-[2rem] shadow-2xl p-16 border-4" style="border-color: {{ $templateData['color'] }};">
                    <div class="text-center space-y-10">
                        <div class="text-8xl mb-6">🎂</div>
                        <h1 class="text-7xl md:text-9xl font-black leading-[0.9] mb-6" style="color: {{ $templateData['color'] }};">
                            {{ $templateData['defaults']['heading'] }}
                        </h1>
                        <p class="text-2xl md:text-3xl text-gray-800 dark:text-white font-bold uppercase tracking-wide mb-8">
                            {{ $templateData['defaults']['subheading'] }}
                        </p>
                        <p class="text-xl md:text-2xl text-gray-700 dark:text-[#cbd5e1] leading-relaxed">
                            {{ Str::limit($templateData['defaults']['message'], 85) }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
