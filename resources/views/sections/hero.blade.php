<section id="inicio" class="relative overflow-hidden">

    {{-- Fondo: gradiente suave blanco → blue-ice --}}
    <div class="absolute inset-0 bg-gradient-to-b from-white via-white to-blue-ice pointer-events-none" aria-hidden="true"></div>

    {{-- Forma decorativa — círculo grande (arriba derecha) --}}
    <div class="absolute -top-40 -right-40 w-[560px] h-[560px] rounded-full bg-blue-ice opacity-80 pointer-events-none" aria-hidden="true"></div>

    {{-- Forma decorativa — círculo pequeño (abajo izquierda) --}}
    <div class="absolute -bottom-20 -left-20 w-[320px] h-[320px] rounded-full bg-green-health/5 pointer-events-none" aria-hidden="true"></div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 lg:py-24 xl:py-28">
        <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-center">

            {{-- ═══════════════════════════════════════
                 COLUMNA IZQUIERDA — Texto
            ════════════════════════════════════════ --}}
            <div class="flex flex-col gap-6 order-2 lg:order-1">

                {{-- Badge --}}
                <div class="animate-fade-up anim-d1">
                    <span class="inline-flex items-center gap-2 px-4 py-1.5 bg-green-health/10 border border-green-health/20 text-green-health text-sm font-semibold rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 shrink-0" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                        </svg>
                        Atención médica de calidad en Venezuela
                    </span>
                </div>

                {{-- H1 --}}
                <h1 class="animate-fade-up anim-d2 text-[40px] sm:text-5xl lg:text-[60px] xl:text-[64px] font-bold text-dark-blue leading-[1.1] tracking-tight">
                    Tu salud, en<br>
                    manos <span class="text-blue-med">expertas</span>
                </h1>

                {{-- Subtítulo --}}
                <p class="animate-fade-up anim-d3 text-lg text-gray-500 leading-relaxed max-w-lg">
                    Más de 15 años cuidando familias venezolanas con medicina de calidad, tecnología moderna y un equipo comprometido con tu bienestar.
                </p>

                {{-- CTAs --}}
                <div class="animate-fade-up anim-d4 flex flex-wrap gap-4">

                    {{-- Primario --}}
                    <a
                        href="#contacto"
                        class="inline-flex items-center gap-2 px-6 py-3.5 bg-blue-med hover:bg-[#155d8f] text-white text-base font-semibold rounded-full transition-colors duration-200 shadow-sm"
                    >
                        Reservar mi cita
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"/>
                        </svg>
                    </a>

                    {{-- Secundario (outline) --}}
                    <a
                        href="#servicios"
                        class="inline-flex items-center gap-2 px-6 py-3.5 border-2 border-blue-med text-blue-med hover:bg-blue-med hover:text-white text-base font-semibold rounded-full transition-colors duration-200"
                    >
                        Ver nuestros servicios
                    </a>
                </div>

                {{-- Íconos de confianza --}}
                <div class="animate-fade-up anim-d5 flex flex-wrap gap-x-6 gap-y-3 pt-1">
                    @foreach (['Médicos certificados', 'Atención personalizada', 'Tecnología moderna'] as $item)
                        <div class="flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-green-health shrink-0" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-sm font-medium text-dark-blue">{{ $item }}</span>
                        </div>
                    @endforeach
                </div>

            </div>

            {{-- ═══════════════════════════════════════
                 COLUMNA DERECHA — Imagen
            ════════════════════════════════════════ --}}
            <div class="animate-fade-right anim-d6 relative order-1 lg:order-2">

                {{-- Contenedor imagen con fondo blue-ice y border-radius grande --}}
                <div class="relative rounded-3xl overflow-hidden bg-blue-ice aspect-[4/5] lg:aspect-auto lg:h-[580px] shadow-sm">
                    <img
                        src="https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?w=800&auto=format&fit=crop&q=80"
                        alt="Doctor en consulta médica moderna"
                        class="w-full h-full object-cover object-center"
                        width="800"
                        height="1000"
                    />
                    {{-- Overlay sutil para profundidad --}}
                    <div class="absolute inset-0 bg-gradient-to-t from-dark-blue/15 via-transparent to-transparent pointer-events-none"></div>
                </div>

                {{-- Badge flotante — +2000 pacientes (esquina inferior izquierda) --}}
                <div class="absolute -bottom-5 left-6 bg-white rounded-2xl shadow-lg border border-gray-100 px-4 py-3 flex items-center gap-3">
                    <div class="w-10 h-10 bg-blue-med rounded-xl flex items-center justify-center shrink-0">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-white" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v1h8v-1zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-1a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v1h-3zM4.75 12.094A5.973 5.973 0 004 15v1H1v-1a3 3 0 013.75-2.906z"/>
                        </svg>
                    </div>
                    <div>
                        <p class="text-xl font-bold text-dark-blue leading-none">+2,000</p>
                        <p class="text-xs text-gray-500 mt-0.5">Pacientes atendidos</p>
                    </div>
                </div>

                {{-- Acento decorativo (esquina superior derecha) --}}
                <div class="absolute -top-4 -right-4 w-20 h-20 bg-blue-med/10 rounded-full pointer-events-none" aria-hidden="true"></div>

            </div>
        </div>
    </div>
</section>
