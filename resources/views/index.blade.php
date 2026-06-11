@extends('layout.master')

@section('title', 'Home')

@section('home-nv', 'is-active text-white')
@section('home-nv-sm', 'text-olive-light')

@section('body')

    {{-- ============================ HERO ============================ --}}
    <section class="relative overflow-hidden bg-cocoa">
        <div class="pointer-events-none absolute -top-24 -right-24 h-96 w-96 rounded-full bg-olive/20 blur-3xl"></div>
        <div class="pointer-events-none absolute bottom-0 -left-24 h-80 w-80 rounded-full bg-carrot/10 blur-3xl"></div>

        <div class="relative mx-auto grid max-w-screen-xl items-center gap-12 px-6 py-16 lg:grid-cols-12 lg:gap-8 lg:px-8 lg:py-24">
            <div class="lg:col-span-7" data-aos="fade-up">
                <h1 class="font-neutrafacebold text-5xl uppercase leading-[0.95] text-white sm:text-6xl xl:text-7xl">
                    Paola Rizzi<br>interpreta la<br><span class="text-carrot">Signora Maria</span>
                </h1>
                <p class="mt-7 max-w-xl text-lg leading-relaxed text-cream/80">
                    Un personaggio comico che ha riscosso un incredibile successo.
                    Il pubblico ha apprezzato le battute fulminanti, il ritmo comico
                    e la magistrale interpretazione dell'attrice.
                </p>
            </div>

            {{-- Biglietto "prossimo spettacolo" --}}
            <div class="lg:col-span-5" data-aos="fade-up" data-aos-delay="150">
                @if($event_list->isNotEmpty())
                    @php
                        \Carbon\Carbon::setLocale('it');
                        $next = $event_list->first();
                        $nextDate = \Carbon\Carbon::parse($next->data);
                    @endphp
                    <div class="ticket overflow-hidden shadow-ticket" style="--punch:#6C6053">
                        <div class="h-2 w-full bg-olive"></div>
                        <div class="p-7">
                            <p class="eyebrow text-carrot text-xs">Prossimo spettacolo</p>
                            <h2 class="mt-2 font-neutrafacebold text-2xl uppercase leading-tight text-ink">
                                {{ strtoupper($next->show->title) }}
                            </h2>
                            <div class="mt-4 space-y-1 text-cocoa">
                                <p>
                                    <span class="font-neutrafacebold text-ink">{{ ucfirst($nextDate->dayName) }} {{ $nextDate->day }} {{ $nextDate->translatedFormat('F') }} {{ $nextDate->year }}</span>
                                    · ore {{ \Carbon\Carbon::parse($next->hour)->format('H:i') }}
                                </p>
                                <p class="flex items-center gap-2 text-cocoa">
                                    <svg class="h-4 w-4 text-carrot" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 21s-7-5.686-7-11a7 7 0 1114 0c0 5.314-7 11-7 11z"/>
                                        <circle cx="12" cy="10" r="2.5"/>
                                    </svg>
                                    {{ $next->place }}
                                </p>
                            </div>
                            <div class="mt-5 flex items-center justify-between gap-3">
                                <a href="{{ route('singleshow.show', ['name' => $next->show->title]) }}" class="group/cta inline-flex items-center gap-2 font-neutrafacebold text-sm uppercase tracking-wider text-carrot transition hover:text-carrot-dark">
                                    Scopri lo spettacolo
                                    <svg class="h-4 w-4 transition-transform group-hover/cta:translate-x-1" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14M13 6l6 6-6 6"/></svg>
                                </a>
                                <a href="{{ route('event.calendar', $next) }}" title="Aggiungi al calendario" aria-label="Aggiungi al calendario"
                                   class="inline-flex h-9 w-9 flex-shrink-0 items-center justify-center rounded-full border border-cocoa/15 text-cocoa/70 transition hover:border-carrot/40 hover:bg-carrot/10 hover:text-carrot-dark">
                                    <svg class="h-[18px] w-[18px]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M8 2v3M16 2v3M3.5 9h17M5 5h14a1 1 0 011 1v13a1 1 0 01-1 1H5a1 1 0 01-1-1V6a1 1 0 011-1z"/>
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 13v4M10 15h4"/>
                                    </svg>
                                    <span class="sr-only">Aggiungi al calendario</span>
                                </a>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </section>

    {{-- ============================ MARQUEE FOTO ============================ --}}
    <section class="border-y-4 border-olive bg-cocoa-deep py-10">
        @php
            $heroImgs = [
                'spettacolo1.jpg', 'spettacolo2.jpg', 'spettacolo3.webp', 'spettacolo4.jpg', 'spettacolo5.webp',
                'spettacolo6.jpg', 'spettacolo7.jpg', 'spettacolo8.webp', 'spettacolo9.jpg', 'spettacolo10.jpg',
            ];
        @endphp
        <div class="marquee" style="--time:55s">
            @for($i = 0; $i < 2; $i++)
                <div class="marquee__track" aria-hidden="{{ $i === 1 ? 'true' : 'false' }}">
                    @foreach($heroImgs as $file)
                        <img src="{{ url('/') }}/img/{{ $file }}" alt="Paola Rizzi nei panni della Signora Maria"
                             loading="lazy" decoding="async" width="320" height="208"
                             class="h-52 w-80 flex-shrink-0 rounded-2xl border border-white/10 object-cover shadow-soft">
                    @endforeach
                </div>
            @endfor
        </div>
    </section>

    {{-- ============================ SCOPRI GLI SPETTACOLI ============================ --}}
    <section class="bg-cream py-20 text-ink">
        <div class="mx-auto max-w-screen-xl px-6 lg:px-8">
            <div class="mx-auto max-w-2xl text-center" data-aos="fade-up">
                <h2 class="font-neutrafacebold text-4xl uppercase text-carrot sm:text-5xl">Scopri gli spettacoli</h2>
                <p class="mt-5 text-lg leading-relaxed text-cocoa">
                    Esplora i nostri spettacoli e lasciati coinvolgere dall'incredibile
                    interpretazione di Paola Rizzi.
                </p>
            </div>

            @if($home_shows->isNotEmpty())
                <div class="mt-12 grid grid-cols-2 gap-5 sm:gap-6 lg:grid-cols-4">
                    @foreach($home_shows as $show)
                        <a href="{{ route('singleshow.show', ['name' => $show->title]) }}"
                           class="group relative block aspect-[3/4] overflow-hidden rounded-3xl bg-cocoa-deep shadow-soft transition-all duration-300 hover:-translate-y-2 hover:shadow-ticket"
                           data-aos="fade-up" data-aos-delay="{{ ($loop->index % 4) * 100 }}">
                            <img src="{{ $show->img_url }}" alt="Locandina dello spettacolo {{ $show->title }}"
                                 loading="lazy" decoding="async"
                                 class="absolute inset-0 h-full w-full object-cover transition-transform duration-700 group-hover:scale-110">
                            <div class="absolute inset-0 bg-gradient-to-t from-cocoa-deep via-cocoa-deep/30 to-transparent"></div>
                            <span class="absolute right-3 top-3 flex h-9 w-9 translate-y-1 items-center justify-center rounded-full bg-carrot text-white opacity-0 transition-all duration-300 group-hover:translate-y-0 group-hover:opacity-100">
                                <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14M13 6l6 6-6 6"/></svg>
                            </span>
                            <div class="absolute inset-x-0 bottom-0 p-4 sm:p-5">
                                <span class="block h-1 w-8 rounded-full bg-olive-light transition-all duration-300 group-hover:w-14"></span>
                                <h3 class="mt-2 font-neutrafacebold text-lg uppercase leading-tight text-white">{{ strtoupper($show->title) }}</h3>
                            </div>
                        </a>
                    @endforeach
                </div>
            @endif

            <div class="mt-12 flex justify-center">
                <a href="{{ route('show') }}" class="btn-primary">Scopri di più</a>
            </div>
        </div>
    </section>

    {{-- ============================ PROSSIME DATE ============================ --}}
    <section class="bg-cocoa py-20">
        <div class="mx-auto max-w-screen-xl px-6 lg:px-8">
            <h2 class="font-neutrafacebold text-4xl uppercase text-white sm:text-5xl" data-aos="fade-up">Prossime date</h2>
            <div class="mt-4 h-1 w-24 rounded-full bg-olive" data-aos="fade-up"></div>

            <div class="mt-10 space-y-5">
                @forelse($event_list as $event)
                    @php
                        \Carbon\Carbon::setLocale('it');
                        $d = \Carbon\Carbon::parse($event->data);
                    @endphp
                    @include('partials.event-ticket', ['event' => $event, 'd' => $d])
                @empty
                    <p class="rounded-2xl bg-white/5 p-8 text-center text-cream/70">
                        Non ci sono eventi futuri al momento.
                    </p>
                @endforelse
            </div>

            <div class="mt-12 flex justify-center">
                <a href="{{ route('event') }}" class="btn-olive">Scopri più date</a>
            </div>
        </div>
    </section>

@endsection
