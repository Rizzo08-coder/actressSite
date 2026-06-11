@extends('layout.master')

@section('title', 'Spettacoli')

@section('spettacoli-nv', 'is-active text-white')
@section('spettacoli-nv-sm', 'text-olive-light')

@section('body')

    <section class="bg-cream py-20 text-ink">
        <div class="mx-auto max-w-screen-xl px-6 lg:px-8">

            {{-- Intestazione --}}
            <div class="mx-auto max-w-3xl text-center" data-aos="fade-up">
                <h1 class="font-neutrafacebold text-5xl uppercase leading-tight text-carrot sm:text-6xl">I nostri spettacoli</h1>
                <p class="mt-6 text-lg leading-relaxed text-cocoa">
                    Scopri i monologhi in dialetto bresciano, scritti e diretti da
                    <span class="font-neutrafacebold text-olive-dark">John Comini</span>, con la regia di
                    <span class="font-neutrafacebold text-olive-dark">Peppino Coscarelli</span> e la collaborazione
                    tecnica di <span class="font-neutrafacebold text-olive-dark">Luca Lombardi</span>.
                </p>
            </div>

            {{-- Spettacolo in apertura (grande) — scelto da resources/views/show/featured.json --}}
            @if($featured)
                <a href="{{ route('singleshow.show', ['name' => $featured->title]) }}"
                   class="group mt-14 grid overflow-hidden rounded-[2rem] bg-white shadow-ticket md:grid-cols-2"
                   data-aos="fade-up">
                    <div class="relative h-72 overflow-hidden md:h-auto">
                        <img src="{{ $featured->img_url }}" alt="Locandina dello spettacolo {{ $featured->title }}"
                             fetchpriority="high" decoding="async"
                             class="h-full w-full object-cover transition-transform duration-700 group-hover:scale-105">
                        <div class="absolute left-0 top-0 h-2 w-full bg-carrot md:h-full md:w-2"></div>
                    </div>
                    <div class="flex flex-col justify-center p-8 sm:p-12">
                        <h2 class="font-neutrafacebold text-4xl uppercase leading-tight text-ink transition-colors group-hover:text-carrot">{{ strtoupper($featured->title) }}</h2>
                        @if($featured->short_description || $featured->description)
                            <p class="mt-5 leading-relaxed text-cocoa">
                                {{ \Illuminate\Support\Str::limit($featured->short_description ?: $featured->description, 300) }}
                            </p>
                        @endif
                        @if($featured->directed_by)
                            <p class="mt-6 text-sm text-cocoa/70">
                                Scritto e diretto da {{ $featured->directed_by }}@if($featured->collaboration), con la collaborazione di {{ $featured->collaboration }}@endif
                            </p>
                        @endif
                        <span class="mt-7 inline-flex items-center gap-2 font-neutrafacebold uppercase tracking-wider text-carrot transition-all group-hover:gap-3">
                            Scopri di più
                            <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14M13 6l6 6-6 6"/></svg>
                        </span>
                    </div>
                </a>
            @endif

            {{-- Gli altri spettacoli — locandine --}}
            @if($others->isNotEmpty())
                <div class="mt-10 grid grid-cols-2 gap-5 sm:gap-7 lg:grid-cols-3">
                    @foreach($others as $show)
                        <a href="{{ route('singleshow.show', ['name' => $show->title]) }}"
                           class="group relative block aspect-[3/4] overflow-hidden rounded-3xl bg-cocoa-deep shadow-soft transition-all duration-300 hover:-translate-y-2 hover:shadow-ticket"
                           data-aos="fade-up" data-aos-delay="{{ ($loop->index % 3) * 120 }}">
                            <img src="{{ $show->img_url }}" alt="Locandina dello spettacolo {{ $show->title }}"
                                 loading="lazy" decoding="async"
                                 class="absolute inset-0 h-full w-full object-cover transition-transform duration-700 group-hover:scale-110">
                            <div class="absolute inset-0 bg-gradient-to-t from-cocoa-deep via-cocoa-deep/30 to-transparent"></div>

                            <span class="absolute right-4 top-4 flex h-10 w-10 translate-y-1 items-center justify-center rounded-full bg-carrot text-white opacity-0 transition-all duration-300 group-hover:translate-y-0 group-hover:opacity-100">
                                <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14M13 6l6 6-6 6"/></svg>
                            </span>

                            <div class="absolute inset-x-0 bottom-0 p-5 sm:p-6">
                                <span class="block h-1 w-10 rounded-full bg-olive-light transition-all duration-300 group-hover:w-16"></span>
                                <h3 class="mt-3 font-neutrafacebold text-xl uppercase leading-tight text-white sm:text-2xl">{{ strtoupper($show->title) }}</h3>
                            </div>
                        </a>
                    @endforeach
                </div>
            @endif

        </div>
    </section>

@endsection
