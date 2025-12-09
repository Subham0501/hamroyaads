{{-- Mother's Day 3: Heartfelt Thanks - Card Style Layout --}}
<div class="min-h-screen bg-gradient-to-br {{ $templateData['bg'] }}">
    <div class="min-h-screen flex items-center justify-center px-12 py-32">
        <div class="max-w-5xl mx-auto">
            <div class="bg-white/90 dark:bg-[#0f172a]/90 backdrop-blur-xl rounded-[3rem] shadow-2xl p-16 border-8" style="border-color: {{ $templateData['color'] }};">
                <div class="text-center space-y-12">
                    <div class="flex justify-center">
                        <div class="w-36 h-36 rounded-full flex items-center justify-center shadow-xl" style="background-color: {{ $templateData['color'] }};">
                            <svg class="w-20 h-20 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                            </svg>
                        </div>
                    </div>
                    <div>
                        <h1 class="text-6xl md:text-8xl font-black mb-6" style="color: {{ $templateData['color'] }};">
                            {{ $templateData['defaults']['heading'] }}
                        </h1>
                        <p class="text-2xl md:text-3xl text-gray-700 dark:text-[#cbd5e1] font-light mb-8">
                            {{ $templateData['defaults']['subheading'] }}
                        </p>
                        <p class="text-xl md:text-2xl text-gray-600 dark:text-[#94a3b8] leading-relaxed">
                            {{ Str::limit($templateData['defaults']['message'], 90) }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
