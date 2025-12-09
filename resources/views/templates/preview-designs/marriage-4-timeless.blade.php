{{-- Marriage 4: Timeless Bond - Centered Image Layout --}}
<div class="min-h-screen bg-gradient-to-br {{ $templateData['bg'] }}">
    <div class="min-h-screen flex items-center justify-center px-12 py-32">
        <div class="max-w-6xl mx-auto text-center space-y-20">
            <div class="mb-20 rounded-[4rem] overflow-hidden shadow-[0_40px_100px_rgba(0,0,0,0.3)] border-[12px] border-white/80">
                <img src="{{ $categoryImages['hero'] }}" alt="Hero" class="w-full h-[75vh] object-cover">
            </div>
            <div>
                <h1 class="text-8xl md:text-[10rem] lg:text-[13rem] font-black text-gray-900 dark:text-white mb-10 leading-[0.85]">
                    {{ $templateData['defaults']['heading'] }}
                </h1>
                <p class="text-3xl md:text-4xl text-gray-700 dark:text-[#cbd5e1] mb-16 font-light italic">
                    {{ $templateData['defaults']['subheading'] }}
                </p>
            </div>
            <div class="my-24 flex justify-center">
                <div class="w-64 h-64 rounded-full flex items-center justify-center shadow-[0_25px_70px_rgba(0,0,0,0.3)] border-[10px] border-white/60" style="background-color: {{ $templateData['color'] }};">
                    <svg class="w-36 h-36 text-white" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                    </svg>
                </div>
            </div>
        </div>
    </div>
</div>
