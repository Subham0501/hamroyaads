{{-- Father's Day 4: Modern Tribute - Asymmetric Layout --}}
<div class="min-h-screen bg-white dark:bg-[#0f172a]">
    <div class="min-h-screen flex items-center px-12 py-32">
        <div class="max-w-7xl mx-auto w-full">
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <div class="relative order-2 lg:order-1">
                    <div class="relative rounded-[2rem] overflow-hidden shadow-[0_25px_60px_rgba(0,0,0,0.2)] transform rotate-3 border-6 border-white">
                        <img src="{{ $categoryImages['hero'] }}" alt="Hero" class="w-full h-[600px] object-cover">
                    </div>
                </div>
                <div class="space-y-10 order-1 lg:order-2">
                    <div class="inline-flex items-center gap-4 px-6 py-3 rounded-full backdrop-blur-md border-2" style="background-color: {{ $templateData['color'] }}30; border-color: {{ $templateData['color'] }};">
                        <svg class="w-8 h-8" style="color: {{ $templateData['color'] }};" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                        </svg>
                        <p class="text-xl font-bold uppercase tracking-wide" style="color: {{ $templateData['color'] }};">{{ $templateData['defaults']['subheading'] }}</p>
                    </div>
                    <h1 class="text-6xl md:text-8xl font-black leading-[0.9]" style="color: {{ $templateData['color'] }};">
                        {{ $templateData['defaults']['heading'] }}
                    </h1>
                    <p class="text-2xl md:text-3xl text-gray-700 dark:text-[#cbd5e1] leading-relaxed">
                        {{ Str::limit($templateData['defaults']['message'], 75) }}
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
