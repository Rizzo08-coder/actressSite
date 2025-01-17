@extends('layout.master')

@section('title')
    Eventi
@endsection

@section('eventi-nv')
    text-white
@endsection

@section('eventi-nv-sm')
    text-red-700
@endsection

@section('body')
    @if(count($event_list) == 0)
    <div class="h-screen">
    @endif
    <div class="relative mx-72 max-sm:mx-12 max-md:mx-24 max-lg:mx-48  mt-12 mb-6  text-center  max-sm:text-md text-5xl text-[#ea000e] font-neutrafacebold">
        TUTTI GLI EVENTI
    </div>

    <p class="relative mx-72 max-sm:mx-12 max-md:mx-24 max-lg:mx-48  mt-12 mb-6  text-center text-xl  max-sm:text-lg">
        Esplora l'elenco completo degli spettacoli e degli eventi in programma.
        Scopri le date, gli orari e le location per non perderti nessuna occasione!


    </p>

    <div class="mx-72 max-sm:mx-12 max-md:mx-24 max-lg:mx-48  mt-12 mb-32space-y-8 mb-32">
        <div class="w-full h-0.5 bg-yellow-500 mb-12"></div>
        @if(count($event_list) == 0)

            <p class="text-center text-gray-500 text-xl">
                Non ci sono eventi futuri al momento.
            </p>
        @else
        @foreach($event_list as $event)
            <div class="bg-white shadow-md rounded-lg overflow-hidden p-6 mb-8">
                <!-- Titolo -->
                <h2 class="text-2xl font-bold text-gray-800 mb-4">{{strtoupper($event->show->title)}}</h2>

                <!-- Dettagli evento -->
                <div class="flex items-center justify-between text-lg">
                    <!-- Posizione -->
                    <div class="flex items-center">
                        <span class="font-bold text-gray-700">📍</span>
                        <span class="ml-2 text-gray-600">{{$event->place}}</span>
                    </div>

                    <!-- Data -->
                    <div class="flex items-center mr-3">
                        <span class="font-bold text-yellow-500">📅</span>
                        <span class="ml-2 text-xl text-gray-600">
                            {{\Carbon\Carbon::parse($event->data)->format('d/m/Y')}}
                        </span>
                    </div>

                    <!-- Ora -->
                    <div class="flex items-center">
                        <span class="font-bold text-gray-700">⏰</span>
                        <span class="ml-2 text-2xl text-gray-600">
                            {{\Carbon\Carbon::parse($event->hour)->format('H:i')}}
                        </span>
                    </div>
                </div>
            </div>
        @endforeach
        @endif
    </div>

    @if(count($event_list) == 0)
    </div>
    @endif




@endsection

