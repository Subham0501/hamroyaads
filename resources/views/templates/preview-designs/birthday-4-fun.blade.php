{{-- Birthday 4: Fun Celebration - Playful Layout --}}
<div class="min-h-screen bg-white dark:bg-[#0f172a]">
    <div class="min-h-screen flex items-center px-12 py-32">
        <div class="max-w-7xl mx-auto w-full">
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <div class="space-y-10">
                    <div class="text-7xl mb-6">🎈</div>
                    <h1 class="text-6xl md:text-8xl font-black leading-[0.9] mb-8" style="color: {{ $templateData['color'] }};">
                        {{ $templateData['defaults']['heading'] }}
                    </h1>
                    <p class="text-2xl md:text-3xl text-gray-800 dark:text-white font-bold mb-6">
                        {{ $templateData['defaults']['subheading'] }}
                    </p>
                    <p class="text-xl md:text-2xl text-gray-700 dark:text-[#cbd5e1] leading-relaxed">
                        {{ Str::limit($templateData['defaults']['message'], 80) }}
                    </p>
                </div>
                <div class="relative">
                    <div class="relative rounded-[2rem] overflow-hidden shadow-[0_20px_50px_rgba(0,0,0,0.2)] transform rotate-[-5deg] border-6 border-white">
                        <img src="{{ $categoryImages['hero'] }}" alt="Hero" class="w-full h-[600px] object-cover">
                    </div>
                    <div class="absolute -bottom-6 -right-6 w-24 h-24 rounded-full shadow-xl border-4 border-white" style="background-color: {{ $templateData['color'] }};"></div>
                </div>
            </div>
        </div>
    </div>
</div>
