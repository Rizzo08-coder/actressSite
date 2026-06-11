@php
    /** @var \Carbon\Carbon $d */
    $punch = $punch ?? '#6C6053';

    // Link diretto al file .ics: al click apre l'app calendario predefinita.
    $icsUrl = route('event.calendar', $event);
@endphp
<div class="ticket flex flex-col items-stretch gap-4 p-5 shadow-ticket transition-transform duration-300 hover:-translate-y-1 sm:flex-row sm:items-center sm:gap-7 sm:p-6"
     style="--punch:{{ $punch }}">

    {{-- Data --}}
    <div class="flex w-24 flex-shrink-0 flex-col items-center justify-center text-center">
        <span class="font-neutrafacebold text-5xl leading-none text-carrot">{{ $d->day }}</span>
        <span class="mt-1 font-neutrafacebold text-xs uppercase tracking-[0.2em] text-cocoa/70">
            {{ strtoupper($d->translatedFormat('M')) }} {{ $d->year }}
        </span>
    </div>

    <div class="ticket-perf hidden self-stretch sm:block"></div>

    {{-- Spettacolo + luogo --}}
    <div class="min-w-0 flex-1">
        <h3 class="font-neutrafacebold text-xl uppercase leading-tight text-ink sm:text-2xl">
            {{ $event->show->title }}
        </h3>
        <p class="mt-1.5 flex items-center gap-2 text-cocoa">
            <svg class="h-4 w-4 flex-shrink-0 text-olive-dark" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 21s-7-5.686-7-11a7 7 0 1114 0c0 5.314-7 11-7 11z"/>
                <circle cx="12" cy="10" r="2.5"/>
            </svg>
            {{ $event->place }}
        </p>
    </div>

    {{-- Giorno · ora + Aggiungi al calendario --}}
    <div class="flex flex-shrink-0 flex-col items-start gap-3 sm:items-end">
        <span class="font-neutrafacebold text-lg uppercase tracking-wide text-carrot">
            {{ strtoupper(substr($d->dayName, 0, 3)) }} · {{ \Carbon\Carbon::parse($event->hour)->format('H:i') }}
        </span>

        <a href="{{ $icsUrl }}"
           class="inline-flex items-center gap-2 rounded-full bg-cocoa/5 px-4 py-2 font-neutrafacebold text-xs uppercase tracking-wide text-cocoa transition hover:bg-cocoa/10">
            <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M8 2v4M16 2v4M3 9h18M5 5h14a1 1 0 011 1v13a1 1 0 01-1 1H5a1 1 0 01-1-1V6a1 1 0 011-1z"/>
            </svg>
            Aggiungi al calendario
        </a>
    </div>
</div>
