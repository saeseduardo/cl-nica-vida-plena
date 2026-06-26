<section id="servicios" class="bg-blue-ice py-16 lg:py-24">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        {{-- Encabezado centrado --}}
        <div class="text-center mb-12 lg:mb-16 animate-fade-up anim-d1">
            <p class="text-green-health text-xs font-semibold uppercase tracking-widest mb-3">
                Nuestras especialidades
            </p>
            <h2 class="text-3xl sm:text-4xl lg:text-[42px] font-bold text-dark-blue leading-tight tracking-tight">
                Atención médica integral<br class="hidden sm:block"> para toda tu familia
            </h2>
            <p class="mt-4 text-gray-500 text-base max-w-xl mx-auto leading-relaxed">
                Contamos con especialistas dedicados a brindarte el mejor cuidado en cada etapa de tu vida.
            </p>
        </div>

        {{-- Grid de 6 tarjetas --}}
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">

            {{-- 1. Medicina General --}}
            <article class="animate-fade-up anim-d2 group bg-white border border-gray-100 rounded-xl p-6 transition-all duration-200 hover:border-blue-med hover:shadow-sm">
                <div class="w-12 h-12 bg-blue-ice rounded-full flex items-center justify-center mb-5 shrink-0">
                    {{-- Stethoscope (custom SVG) --}}
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-blue-med" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 17V13"/>
                        <path stroke-linecap="round" d="M12 13C10 13 8.5 11.5 8.5 9.5"/>
                        <path stroke-linecap="round" d="M12 13C14 13 15.5 11.5 15.5 9.5"/>
                        <path stroke-linecap="round" d="M8.5 9.5V6"/>
                        <path stroke-linecap="round" d="M15.5 9.5V6"/>
                        <circle cx="8.5" cy="5" r="1" fill="currentColor" stroke="none"/>
                        <circle cx="15.5" cy="5" r="1" fill="currentColor" stroke="none"/>
                        <circle cx="12" cy="19.5" r="2.25"/>
                    </svg>
                </div>
                <h3 class="text-dark-blue font-semibold text-[17px] mb-2">Medicina General</h3>
                <p class="text-gray-500 text-sm leading-relaxed">
                    Consultas, diagnósticos y seguimiento de salud para toda la familia.
                </p>
            </article>

            {{-- 2. Pediatría --}}
            <article class="animate-fade-up anim-d3 group bg-white border border-gray-100 rounded-xl p-6 transition-all duration-200 hover:border-blue-med hover:shadow-sm">
                <div class="w-12 h-12 bg-blue-ice rounded-full flex items-center justify-center mb-5 shrink-0">
                    {{-- FaceSmile (Heroicons v2 outline) --}}
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-blue-med" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.182 15.182a4.5 4.5 0 01-6.364 0M21 12a9 9 0 11-18 0 9 9 0 0118 0zM9.75 9.75c0 .414-.168.75-.375.75S9 10.164 9 9.75 9.168 9 9.375 9s.375.336.375.75zm-.375 0h.008v.015h-.008V9.75zm5.625 0c0 .414-.168.75-.375.75s-.375-.336-.375-.75.168-.75.375-.75.375.336.375.75zm-.375 0h.008v.015h-.008V9.75z"/>
                    </svg>
                </div>
                <h3 class="text-dark-blue font-semibold text-[17px] mb-2">Pediatría</h3>
                <p class="text-gray-500 text-sm leading-relaxed">
                    Atención especializada para niños desde el nacimiento hasta la adolescencia.
                </p>
            </article>

            {{-- 3. Cardiología --}}
            <article class="animate-fade-up anim-d4 group bg-white border border-gray-100 rounded-xl p-6 transition-all duration-200 hover:border-blue-med hover:shadow-sm">
                <div class="w-12 h-12 bg-blue-ice rounded-full flex items-center justify-center mb-5 shrink-0">
                    {{-- Heart (Heroicons v2 outline) --}}
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-blue-med" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z"/>
                    </svg>
                </div>
                <h3 class="text-dark-blue font-semibold text-[17px] mb-2">Cardiología</h3>
                <p class="text-gray-500 text-sm leading-relaxed">
                    Evaluación y seguimiento de la salud cardiovascular con tecnología de punta.
                </p>
            </article>

            {{-- 4. Nutrición --}}
            <article class="animate-fade-up anim-d2 group bg-white border border-gray-100 rounded-xl p-6 transition-all duration-200 hover:border-blue-med hover:shadow-sm">
                <div class="w-12 h-12 bg-blue-ice rounded-full flex items-center justify-center mb-5 shrink-0">
                    {{-- Leaf (custom SVG) --}}
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-blue-med" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 3C12 3 5 7 5 13.5C5 17.642 8.134 21 12 21C15.866 21 19 17.642 19 13.5C19 7 12 3 12 3Z"/>
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 21V12"/>
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 15C12 15 14.5 13 16.5 12.5"/>
                        <path stroke-linecap="round" d="M12 3V1.5"/>
                    </svg>
                </div>
                <h3 class="text-dark-blue font-semibold text-[17px] mb-2">Nutrición</h3>
                <p class="text-gray-500 text-sm leading-relaxed">
                    Planes alimenticios personalizados para alcanzar tus metas de salud y bienestar.
                </p>
            </article>

            {{-- 5. Psicología --}}
            <article class="animate-fade-up anim-d3 group bg-white border border-gray-100 rounded-xl p-6 transition-all duration-200 hover:border-blue-med hover:shadow-sm">
                <div class="w-12 h-12 bg-blue-ice rounded-full flex items-center justify-center mb-5 shrink-0">
                    {{-- ChatBubbleOvalLeftEllipsis (Heroicons v2 outline) --}}
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-blue-med" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.625 9.75a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H8.25m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H12m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0h-.375m-13.5 3.01c0 1.6 1.123 2.994 2.707 3.227 1.087.16 2.185.283 3.293.369V21l4.184-4.183a1.14 1.14 0 01.778-.332 48.294 48.294 0 005.83-.498c1.585-.233 2.708-1.626 2.708-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0012 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018z"/>
                    </svg>
                </div>
                <h3 class="text-dark-blue font-semibold text-[17px] mb-2">Psicología</h3>
                <p class="text-gray-500 text-sm leading-relaxed">
                    Apoyo emocional y atención de salud mental para adultos y jóvenes.
                </p>
            </article>

            {{-- 6. Odontología --}}
            <article class="animate-fade-up anim-d4 group bg-white border border-gray-100 rounded-xl p-6 transition-all duration-200 hover:border-blue-med hover:shadow-sm">
                <div class="w-12 h-12 bg-blue-ice rounded-full flex items-center justify-center mb-5 shrink-0">
                    {{-- Tooth (custom SVG) --}}
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-blue-med" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8 5.5C7 5.5 5.5 6.5 5.5 8.5C5.5 11 7 12.5 7.5 14.5C8 17 8.5 20 10 20.5C11.5 21 12 18.5 12 16.5C12 18.5 12.5 21 14 20.5C15.5 20 16 17 16.5 14.5C17 12.5 18.5 11 18.5 8.5C18.5 6.5 17 5.5 16 5.5C15 5.5 14 6 12 6C10 6 9 5.5 8 5.5Z"/>
                    </svg>
                </div>
                <h3 class="text-dark-blue font-semibold text-[17px] mb-2">Odontología</h3>
                <p class="text-gray-500 text-sm leading-relaxed">
                    Atención dental preventiva y estética para una sonrisa saludable y brillante.
                </p>
            </article>

        </div>
    </div>
</section>
