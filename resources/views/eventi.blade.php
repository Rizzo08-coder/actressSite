@extends('layout.master')

@section('title', 'Calendario')

@section('eventi-nv', 'is-active text-white')
@section('eventi-nv-sm', 'text-olive-light')

@section('body')

    <section class="bg-cocoa py-20">
        <div class="mx-auto max-w-screen-xl px-6 lg:px-8">

            <div class="mx-auto max-w-3xl text-center" data-aos="fade-up">
                <h1 class="font-neutrafacebold text-5xl uppercase leading-tight text-olive-light sm:text-6xl">Calendario</h1>
                <p class="mt-6 text-lg leading-relaxed text-cream/80">
                    Esplora l'elenco completo degli spettacoli e degli eventi in programma.
                    Scopri le date, gli orari e le location per non perderti nessuna occasione!
                </p>
            </div>

            <div class="mx-auto mt-10 h-1 w-24 rounded-full bg-olive" data-aos="fade-up"></div>

            <div class="mt-10 space-y-5" data-aos="fade-up">
                @forelse($event_list as $event)
                    @php
                        \Carbon\Carbon::setLocale('it');
                        $d = \Carbon\Carbon::parse($event->data);
                    @endphp
                    @include('partials.event-ticket', ['event' => $event, 'd' => $d, 'punch' => '#6C6053'])
                @empty
                    <p class="rounded-2xl bg-white/5 p-10 text-center text-xl text-cream/70">
                        Non ci sono eventi futuri al momento.
                    </p>
                @endforelse
            </div>

        </div>
    </section>

@endsection
