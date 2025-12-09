{{-- Marriage 3: Modern Love - Side-by-Side Layout --}}
<div class="min-h-screen bg-gradient-to-br {{ $templateData['bg'] }}">
    <div class="min-h-screen flex items-center px-12 py-32">
        <div class="max-w-7xl mx-auto w-full">
            <div class="grid lg:grid-cols-2 gap-20 items-center">
                <div class="space-y-10">
                    <div class="inline-block px-8 py-4 rounded-2xl mb-10 backdrop-blur-xl border-2 border-white/20" style="background-color: {{ $templateData['color'] }}30;">
                        <p class="text-2xl font-bold uppercase tracking-[0.3em]" style="color: {{ $templateData['color'] }};">{{ $templateData['defaults']['subheading'] }}</p>
                    </div>
                    <h1 class="text-7xl md:text-8xl lg:text-9xl font-black text-gray-900 dark:text-white leading-[0.9] mb-12">
                        {{ $templateData['defaults']['heading'] }}
                    </h1>
                    <div class="flex items-center gap-8">
                        <div class="w-32 h-2 rounded-full" style="background-color: {{ $templateData['color'] }};"></div>
                        <p class="text-3xl md:text-4xl font-black" style="color: {{ $templateData['color'] }};">{{ $templateData['defaults']['from'] }}</p>
                    </div>
                </div>
                <div class="relative">
                    <div class="relative rounded-[3rem] overflow-hidden shadow-[0_30px_80px_rgba(0,0,0,0.3)] transform -rotate-6 border-8 border-white/60">
                        <img src="{{ $categoryImages['hero'] }}" alt="Hero" class="w-full h-[700px] object-cover">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
