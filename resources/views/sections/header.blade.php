<header
    x-data="{ open: false, scrolled: false }"
    @scroll.window="scrolled = window.scrollY > 10"
    :class="scrolled ? 'shadow-sm' : ''"
    class="fixed top-0 inset-x-0 z-50 bg-white transition-shadow duration-300"
>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16 lg:h-20">

            {{-- Logo --}}
            <a href="#inicio" class="flex items-center gap-3 shrink-0">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 40" width="36" height="36" aria-hidden="true" focusable="false">
                    <circle cx="20" cy="20" r="20" fill="#1A6FA8"/>
                    <rect x="17" y="9" width="6" height="22" rx="2" fill="white"/>
                    <rect x="9" y="17" width="22" height="6" rx="2" fill="white"/>
                </svg>
                <span class="text-blue-med font-bold text-lg leading-tight tracking-tight">
                    Clínica Vida Plena
                </span>
            </a>

            {{-- Desktop Navigation --}}
            <nav class="hidden lg:flex items-center gap-8" aria-label="Navegación principal">
                <a href="#inicio"       class="text-sm font-medium text-dark-blue hover:text-blue-med transition-colors duration-200">Inicio</a>
                <a href="#servicios"    class="text-sm font-medium text-dark-blue hover:text-blue-med transition-colors duration-200">Servicios</a>
                <a href="#equipo"       class="text-sm font-medium text-dark-blue hover:text-blue-med transition-colors duration-200">Equipo</a>
                <a href="#testimonios"  class="text-sm font-medium text-dark-blue hover:text-blue-med transition-colors duration-200">Testimonios</a>
                <a href="#contacto"     class="text-sm font-medium text-dark-blue hover:text-blue-med transition-colors duration-200">Contacto</a>
            </nav>

            {{-- CTA + Hamburger --}}
            <div class="flex items-center gap-3">

                {{-- CTA Desktop/Tablet --}}
                <a
                    href="#contacto"
                    class="hidden sm:inline-flex items-center px-5 py-2.5 bg-blue-med hover:bg-[#155d8f] text-white text-sm font-semibold rounded-full transition-colors duration-200"
                >
                    Reservar cita
                </a>

                {{-- Hamburger button --}}
                <button
                    @click="open = !open"
                    :aria-expanded="open.toString()"
                    aria-label="Abrir menú de navegación"
                    class="lg:hidden flex items-center justify-center w-10 h-10 rounded-lg text-dark-blue hover:bg-blue-ice transition-colors duration-200"
                >
                    {{-- Hamburger icon --}}
                    <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                    {{-- Close icon --}}
                    <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>

            </div>
        </div>
    </div>

    {{-- Mobile Menu --}}
    <div
        x-show="open"
        x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="opacity-0 -translate-y-1"
        x-transition:enter-end="opacity-100 translate-y-0"
        x-transition:leave="transition ease-in duration-150"
        x-transition:leave-start="opacity-100 translate-y-0"
        x-transition:leave-end="opacity-0 -translate-y-1"
        class="lg:hidden bg-white border-t border-gray-100"
    >
        <nav class="max-w-7xl mx-auto px-4 py-3 flex flex-col gap-1" aria-label="Navegación móvil">
            <a href="#inicio"      @click="open = false" class="px-4 py-3 text-sm font-medium text-dark-blue hover:text-blue-med hover:bg-blue-ice rounded-xl transition-colors duration-200">Inicio</a>
            <a href="#servicios"   @click="open = false" class="px-4 py-3 text-sm font-medium text-dark-blue hover:text-blue-med hover:bg-blue-ice rounded-xl transition-colors duration-200">Servicios</a>
            <a href="#equipo"      @click="open = false" class="px-4 py-3 text-sm font-medium text-dark-blue hover:text-blue-med hover:bg-blue-ice rounded-xl transition-colors duration-200">Equipo</a>
            <a href="#testimonios" @click="open = false" class="px-4 py-3 text-sm font-medium text-dark-blue hover:text-blue-med hover:bg-blue-ice rounded-xl transition-colors duration-200">Testimonios</a>
            <a href="#contacto"    @click="open = false" class="px-4 py-3 text-sm font-medium text-dark-blue hover:text-blue-med hover:bg-blue-ice rounded-xl transition-colors duration-200">Contacto</a>

            {{-- CTA mobile --}}
            <div class="pt-2 pb-2">
                <a
                    href="#contacto"
                    @click="open = false"
                    class="flex items-center justify-center px-5 py-3 bg-blue-med hover:bg-[#155d8f] text-white text-sm font-semibold rounded-full transition-colors duration-200"
                >
                    Reservar cita
                </a>
            </div>
        </nav>
    </div>
</header>

{{-- Spacer para compensar el header fixed --}}
<div class="h-16 lg:h-20"></div>
