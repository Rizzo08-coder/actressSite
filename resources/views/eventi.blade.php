@extends('layout.master')

@section('title')
    Eventi
@endsection

@section('eventi-nv')
    text-white
@endsection

@section('eventi-nv-sm')
    text-[#bab700]
@endsection

@section('body')
    @if(count($event_list) < 4)
    <div class="h-screen mb-12">
    @endif
    <div class="relative mx-72 max-sm:mx-12 max-md:mx-24 max-lg:mx-48  mt-12 mb-6  text-center  max-sm:text-md text-5xl text-[#BAB700] font-neutrafacebold">
        TUTTI GLI EVENTI
    </div>

    <p class="relative mx-72 max-sm:mx-12 max-md:mx-24 max-lg:mx-48  mt-12 mb-6  text-center text-2xl  max-sm:text-xl">
        Esplora l'elenco completo degli spettacoli e degli eventi in programma.
        Scopri le date, gli orari e le location per non perderti nessuna occasione!
    </p>

    <div class="mx-72 max-sm:mx-12 max-md:mx-24 max-lg:mx-48  mt-12 mb-32 space-y-8 mb-32">
        <div class="w-full h-0.5 bg-[#BAB700] mb-12"></div>
        @if(count($event_list) == 0)

            <p class="text-center text-gray-500 text-xl">
                Non ci sono eventi futuri al momento.
            </p>
        @else
        @foreach($event_list as $event)
                @php
                    \Carbon\Carbon::setLocale('it');
                    $eventDate = \Carbon\Carbon::parse($event->data);
                @endphp

                <div class="shadow-2xl flex flex-col lg:flex-row items-center justify-between p-4 border rounded-lg shadow-md bg-white space-y-4 lg:space-y-0">
                    <!-- Sezione Sinistra: Data e Ora -->
                    <div class="flex items-center space-x-4">
                        <!-- Data -->
                        <div class="text-center">
                            <span class="block text-5xl font-bold text-[#F77F00]">{{$eventDate->day}}</span>
                            <span class="block text-xl text-gray-500">{{$eventDate->translatedFormat('F')}} {{$eventDate->year}}</span>
                        </div>

                        <!-- Linea di separazione -->
                        <div class="h-12 w-px bg-gray-300"></div>

                        <!-- Ora -->
                        <div class="text-center">
                            <span class="block text-2xl font-bold text-gray-800">{{$eventDate->dayName}}</span>
                            <span class="block text-3xl font-semibold text-gray-900">{{\Carbon\Carbon::parse($event->hour)->format('H:i')}}</span>
                        </div>
                    </div>

                    <!-- Sezione Destra: Spettacolo e Luogo -->

                    <div class=" text-right flex flex-col max-lg:items-center">
                        <h2 class="max-lg:text-center text-xl font-bold text-gray-800">{{$event->show->title}}</h2>
                        <h2 class="max-lg:text-center text-xl text-gray-500">{{$event->place}}</h2>
                    </div>

                </div>




            @endforeach
        @endif
    </div>

    @if(count($event_list) < 4)
    </div>
    @endif




@endsection

