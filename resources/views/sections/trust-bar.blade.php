<section
    class="bg-blue-med py-14 lg:py-16"
    x-data="{
        started: false,
        v0: 0,
        v1: 0,
        v2: 0,
        init() {
            const io = new IntersectionObserver(([entry]) => {
                if (entry.isIntersecting && !this.started) {
                    this.started = true;
                    this.countUp('v0', 2000, 2000);
                    this.countUp('v1', 15,   1500);
                    this.countUp('v2', 8,    1000);
                    io.disconnect();
                }
            }, { threshold: 0.4 });
            io.observe(this.$el);
        },
        countUp(prop, target, duration) {
            const steps = 50;
            let step = 0;
            const timer = setInterval(() => {
                step++;
                this[prop] = Math.round(target * (1 - Math.pow(1 - step / steps, 3)));
                if (step >= steps) { this[prop] = target; clearInterval(timer); }
            }, Math.floor(duration / steps));
        }
    }"
>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-y-10 gap-x-6 lg:gap-0 lg:divide-x lg:divide-white/20">

            {{-- 1 · Pacientes atendidos --}}
            <div class="flex flex-col items-center text-center lg:px-8">
                {{-- Ícono --}}
                <div class="mb-3 text-white/60">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v1h8v-1zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-1a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v1h-3zM4.75 12.094A5.973 5.973 0 004 15v1H1v-1a3 3 0 013.75-2.906z"/>
                    </svg>
                </div>
                {{-- Número --}}
                <p class="text-[32px] font-bold text-white leading-none tracking-tight">
                    +<span x-text="v0.toLocaleString('es-ES')">0</span>
                </p>
                {{-- Etiqueta --}}
                <p class="mt-2 text-sm font-normal text-white/80 leading-snug">Pacientes atendidos</p>
            </div>

            {{-- 2 · Años de experiencia --}}
            <div class="flex flex-col items-center text-center lg:px-8">
                <div class="mb-3 text-white/60">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"/>
                    </svg>
                </div>
                <p class="text-[32px] font-bold text-white leading-none tracking-tight">
                    <span x-text="v1">0</span>
                </p>
                <p class="mt-2 text-sm font-normal text-white/80 leading-snug">Años de experiencia</p>
            </div>

            {{-- 3 · Especialidades médicas --}}
            <div class="flex flex-col items-center text-center lg:px-8">
                <div class="mb-3 text-white/60">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd"/>
                    </svg>
                </div>
                <p class="text-[32px] font-bold text-white leading-none tracking-tight">
                    <span x-text="v2">0</span>
                </p>
                <p class="mt-2 text-sm font-normal text-white/80 leading-snug">Especialidades médicas</p>
            </div>

            {{-- 4 · Horario (estático — no es un número) --}}
            <div class="flex flex-col items-center text-center lg:px-8">
                <div class="mb-3 text-white/60">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"/>
                    </svg>
                </div>
                <p class="text-[28px] font-bold text-white leading-none tracking-tight">
                    Lun – Sáb
                </p>
                <p class="mt-2 text-sm font-normal text-white/80 leading-snug">7:00am – 7:00pm</p>
            </div>

        </div>
    </div>
</section>
