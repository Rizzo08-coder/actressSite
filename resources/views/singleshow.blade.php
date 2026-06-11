@extends('layout.master')

@section('title', $show->title)

@section('spettacoli-nv', 'is-active text-white')
@section('spettacoli-nv-sm', 'text-olive-light')

@section('body')

    <section class="bg-cream py-14 text-ink lg:py-20">
        <div class="mx-auto max-w-5xl px-6 lg:px-8">

            {{-- Torna indietro --}}
            <a href="{{ route('show') }}" class="inline-flex items-center gap-2 font-neutrafacebold text-sm uppercase tracking-wider text-cocoa transition hover:gap-3 hover:text-carrot">
                <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M19 12H5M11 6l-6 6 6 6"/></svg>
                Torna agli spettacoli
            </a>

            {{-- Titolo --}}
            <h1 class="mt-6 font-neutrafacebold text-4xl uppercase leading-tight text-carrot sm:text-5xl" data-aos="fade-up">
                {{ strtoupper($show->title) }}
            </h1>
            <div class="mt-4 h-1 w-24 rounded-full bg-olive" data-aos="fade-up"></div>

            {{-- Foto: proporzione naturale, su fondo chiaro, incorniciata --}}
            <figure class="mt-9" data-aos="fade-up">
                <img src="{{ $show->img_url }}" alt="Spettacolo {{ $show->title }}"
                     fetchpriority="high" decoding="async"
                     class="mx-auto block h-auto max-h-[68vh] w-auto max-w-full rounded-3xl shadow-ticket ring-1 ring-cocoa/10">
            </figure>

            {{-- Descrizione + scheda crediti --}}
            <div class="mt-12 grid gap-8 lg:grid-cols-3 lg:gap-12">
                <div class="lg:col-span-2" data-aos="fade-up">
                    <p class="text-lg leading-relaxed text-cocoa">{{ $show->description }}</p>
                </div>

                <aside class="lg:col-span-1" data-aos="fade-up" data-aos-delay="100">
                    <div class="rounded-3xl bg-white p-7 shadow-soft ring-1 ring-cocoa/5">
                        <h2 class="font-neutrafacebold text-xs uppercase tracking-[0.25em] text-olive-dark">Crediti</h2>
                        <div class="mt-5 space-y-5">
                            @if($show->directed_by)
                                <div>
                                    <p class="text-xs uppercase tracking-wide text-cocoa/60">Scritto e diretto da</p>
                                    <p class="mt-1 font-neutrafacebold text-lg text-ink">{{ $show->directed_by }}</p>
                                </div>
                            @endif
                            @if($show->collaboration)
                                <div>
                                    <p class="text-xs uppercase tracking-wide text-cocoa/60">Collaborazione di</p>
                                    <p class="mt-1 font-neutrafacebold text-lg text-ink">{{ $show->collaboration }}</p>
                                </div>
                            @endif
                        </div>
                    </div>
                </aside>
            </div>

            {{-- Prossime date di questo spettacolo --}}
            <div class="mt-16" data-aos="fade-up">
                <div class="flex items-end justify-between gap-4">
                    <h2 class="font-neutrafacebold text-2xl uppercase text-ink sm:text-3xl">Prossime date</h2>
                    <a href="{{ route('event') }}" class="hidden font-neutrafacebold text-sm uppercase tracking-wider text-carrot transition hover:text-carrot-dark sm:inline-flex sm:items-center sm:gap-2">
                        Calendario
                        <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14M13 6l6 6-6 6"/></svg>
                    </a>
                </div>
                <div class="mt-3 h-1 w-16 rounded-full bg-olive"></div>

                @if($events->isNotEmpty())
                    <div class="mt-7 grid gap-4 sm:grid-cols-2">
                        @foreach($events as $ev)
                            @php
                                \Carbon\Carbon::setLocale('it');
                                $d = \Carbon\Carbon::parse($ev->data);
                            @endphp
                            <div class="flex min-w-0 items-center gap-4 rounded-2xl bg-white p-4 shadow-soft ring-1 ring-cocoa/5">
                                <div class="flex h-16 w-16 flex-shrink-0 flex-col items-center justify-center rounded-xl bg-cream text-center">
                                    <span class="font-neutrafacebold text-2xl leading-none text-carrot">{{ $d->day }}</span>
                                    <span class="mt-0.5 text-[10px] font-neutrafacebold uppercase tracking-[0.15em] text-cocoa/70">{{ strtoupper($d->translatedFormat('M')) }}</span>
                                </div>
                                <div class="min-w-0 flex-1">
                                    <p class="line-clamp-2 font-neutrafacebold leading-snug text-ink [overflow-wrap:anywhere]">{{ $ev->place }}</p>
                                    <p class="mt-0.5 text-sm text-cocoa">{{ ucfirst($d->dayName) }} · ore {{ \Carbon\Carbon::parse($ev->hour)->format('H:i') }}</p>
                                </div>
                                <a href="{{ route('event.calendar', $ev) }}" title="Aggiungi al calendario" aria-label="Aggiungi al calendario"
                                   class="inline-flex h-10 w-10 flex-shrink-0 items-center justify-center rounded-full border border-cocoa/15 text-cocoa/70 transition hover:border-carrot/40 hover:bg-carrot/10 hover:text-carrot-dark">
                                    <svg class="h-[18px] w-[18px]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M8 2v3M16 2v3M3.5 9h17M5 5h14a1 1 0 011 1v13a1 1 0 01-1 1H5a1 1 0 01-1-1V6a1 1 0 011-1z"/>
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 13v4M10 15h4"/>
                                    </svg>
                                </a>
                            </div>
                        @endforeach
                    </div>
                @else
                    <div class="mt-7 flex flex-col items-start gap-4 rounded-2xl bg-white p-6 shadow-soft ring-1 ring-cocoa/5 sm:flex-row sm:items-center sm:justify-between">
                        <p class="text-cocoa">Nessuna data in programma per questo spettacolo al momento.</p>
                        <a href="{{ route('event') }}" class="btn-olive">Vedi tutte le date</a>
                    </div>
                @endif
            </div>

        </div>
    </section>

@endsection
