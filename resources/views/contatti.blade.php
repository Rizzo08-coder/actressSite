@extends('layout.master')

@section('title', 'Contatti')

@section('contatti-nv', 'ring-2 ring-white/60')
@section('contatti-nv-sm', 'bg-carrot-dark')

@section('body')

    <section class="bg-cream py-20 text-ink">
        <div class="mx-auto max-w-screen-xl px-6 lg:px-8">

            <div class="mx-auto max-w-3xl text-center" data-aos="fade-up">
                <h1 class="font-neutrafacebold text-5xl uppercase leading-tight text-carrot sm:text-6xl">I nostri contatti</h1>
            </div>

            <div class="mx-auto mt-10 h-1 w-24 rounded-full bg-olive" data-aos="fade-up"></div>

            <div class="mt-14 grid gap-6 md:grid-cols-2 lg:grid-cols-3">

                {{-- Email --}}
                <a href="mailto:peppocosca@gmail.com" class="group flex flex-col rounded-3xl bg-white p-8 shadow-soft transition-all duration-300 hover:-translate-y-2 hover:shadow-ticket" data-aos="fade-up">
                    <span class="flex h-14 w-14 items-center justify-center rounded-2xl bg-carrot text-white transition-transform group-hover:scale-110">
                        <svg class="h-7 w-7" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                            <rect x="3" y="5" width="18" height="14" rx="2.5"/>
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.5 6.5l8.5 6 8.5-6"/>
                        </svg>
                    </span>
                    <h2 class="mt-6 font-neutrafacebold text-2xl uppercase text-ink">Email</h2>
                    <p class="mt-2 break-all text-cocoa transition group-hover:text-carrot">peppocosca@gmail.com</p>
                </a>

                {{-- Telefono --}}
                <a href="tel:+393395936407" class="group flex flex-col rounded-3xl bg-white p-8 shadow-soft transition-all duration-300 hover:-translate-y-2 hover:shadow-ticket" data-aos="fade-up" data-aos-delay="100">
                    <span class="flex h-14 w-14 items-center justify-center rounded-2xl bg-olive text-white transition-transform group-hover:scale-110">
                        <svg class="h-7 w-7" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M16.56 12.91l-.46.45s-1.08 1.08-4.04-1.86c-2.95-2.94-1.87-4.02-1.87-4.02l.29-.29c.7-.7.77-1.83.15-2.65L9.37 2.86c-.76-1.02-2.24-1.16-3.11-.29l-1.57 1.56c-.43.44-.72 1-.69 1.62.09 1.59.81 5 4.81 8.98 4.25 4.22 8.23 4.39 9.86 4.24.52-.05.97-.31 1.33-.67l1.42-1.42c.96-.95.69-2.59-.54-3.25l-1.91-1.04c-.8-.44-1.79-.31-2.42.31z"/>
                        </svg>
                    </span>
                    <h2 class="mt-6 font-neutrafacebold text-2xl uppercase text-ink">Teatro Gavardo</h2>
                    <p class="mt-2 text-cocoa transition group-hover:text-olive-dark">+39 339 593 6407</p>
                </a>

                {{-- Bacchiglione Beat --}}
                <div class="flex flex-col rounded-3xl bg-cocoa-deep p-8 text-cream shadow-soft md:col-span-2 lg:col-span-1" data-aos="fade-up" data-aos-delay="200">
                    <span class="flex h-14 w-14 items-center justify-center rounded-2xl bg-white/10 text-olive-light">
                        <svg class="h-7 w-7" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 21s-7-5.686-7-11a7 7 0 1114 0c0 5.314-7 11-7 11z"/>
                            <circle cx="12" cy="10" r="2.5"/>
                        </svg>
                    </span>
                    <h2 class="mt-6 font-neutrafacebold text-2xl uppercase text-olive-light">Bacchiglione Beat</h2>
                    <p class="mt-3 text-sm leading-relaxed text-cream/75">
                        Il teatro Gavardo è associato alla Bacchiglione Beat che dispone di propri
                        impianti scenografici e di illuminazione.
                    </p>
                    <div class="mt-4 space-y-1 text-sm text-cream/75">
                        <p>Via San Francesco, 145 - 35121 - Padova (PD)</p>
                        <p><a href="mailto:mauro.vialardi@tiscali.it" class="transition hover:text-carrot">mauro.vialardi@tiscali.it</a></p>
                        <p>Cod. fiscale: 04351520285 · Tel. <a href="tel:+393484726313" class="transition hover:text-carrot">348 472 6313</a></p>
                    </div>
                </div>
            </div>

        </div>
    </section>

@endsection
