@extends('layout.master')

@section('title')
    Home
@endsection

@section('home-nv')
    text-white
@endsection

@section('home-nv-sm')
    text-red-700
@endsection

@section('body')

    <div class="relative mx-72 max-sm:mx-12 max-md:mx-24 max-lg:mx-48  mt-16 mb-10  text-center  text-3xl max-sm:text-xl">
        Paola Rizzi interpreta la <span class=" text-[#F77F00]">SIGNORA MARIA</span>, un personaggio comico che ha riscosso un incredibile successo.
        Il pubblico ha apprezzato le battute fulminanti, il ritmo comico e la magistrale interpretazione dell’attrice.
    </div>


    <div class="flex justify-center">
        <div class="scroll imgBox" style="--time:50s">
            <div>
                <img src="{{url('/')}}/img/spettacolo7.png" class="rounded-lg w-[500px] h-72 object-cover shadow-2xl">
                <img src="{{url('/')}}/img/spettacolo1.png" class="rounded-lg w-[500px] h-72 object-cover shadow-2xl">
                <img src="{{url('/')}}/img/spettacolo3.png" class="rounded-lg w-[500px] h-72 object-cover shadow-2xl">
                <img src="{{url('/')}}/img/spettacolo1.png" class="rounded-lg w-[500px] h-72 object-cover shadow-2xl">
                <img src="{{url('/')}}/img/spettacolo5.png" class="rounded-lg w-[500px] h-72 object-cover shadow-2xl">
                <img src="{{url('/')}}/img/spettacolo2.jpg" class="rounded-lg w-[500px] h-72 object-cover shadow-2xl">
            </div>
            <div>
                <img src="{{url('/')}}/img/spettacolo7.png" class="rounded-lg w-[500px] h-72 object-cover shadow-2xl">
                <img src="{{url('/')}}/img/spettacolo1.png" class="rounded-lg w-[500px] h-72 object-cover shadow-2xl">
                <img src="{{url('/')}}/img/spettacolo3.png" class="rounded-lg w-[500px] h-72 object-cover shadow-2xl">
                <img src="{{url('/')}}/img/spettacolo1.png" class="rounded-lg w-[500px] h-72 object-cover shadow-2xl">
                <img src="{{url('/')}}/img/spettacolo5.png" class="rounded-lg w-[500px] h-72 object-cover shadow-2xl">
                <img src="{{url('/')}}/img/spettacolo2.jpg" class="rounded-lg w-[500px] h-72 object-cover shadow-2xl">
            </div>
        </div>
    </div>
    <div class="flex justify-center">
        <div class="scroll imgBox" style="--time:50s">
            <div>
                <img src="{{url('/')}}/img/spettacolo7.png" class="rounded-lg w-72 h-72 object-cover shadow-2xl">
                <img src="{{url('/')}}/img/spettacolo1.png" class="rounded-lg w-72 h-72 object-cover shadow-2xl">
                <img src="{{url('/')}}/img/spettacolo3.png" class="rounded-lg w-72 h-72 object-cover shadow-2xl">
                <img src="{{url('/')}}/img/spettacolo1.png" class="rounded-lg w-72 h-72 object-cover shadow-2xl">
            </div>
            <div>
                <img src="{{url('/')}}/img/spettacolo7.png" class="rounded-lg w-72 h-72 object-cover shadow-2xl">
                <img src="{{url('/')}}/img/spettacolo1.png" class="rounded-lg w-72 h-72 object-cover shadow-2xl">
                <img src="{{url('/')}}/img/spettacolo3.png" class="rounded-lg w-72 h-72 object-cover shadow-2xl">
                <img src="{{url('/')}}/img/spettacolo1.png" class="rounded-lg w-72 h-72 object-cover shadow-2xl">
            </div>
        </div>


    </div>



    <div class="p-4 px-72 max-sm:px-8 max-md:px-24 max-lg:px-48">
        <div class="bg-white rounded rounded-md">
    <div class=" py-12 my-6 ">
        <div class="container mx-auto text-center">
            <h2 class="text-3xl  text-[#F77F00] mb-6 font-neutrafacebold">SCOPRI GLI SPETTACOLI</h2>
            <p class="text-gray-600 mb-8 text-2xl mx-6 md:mx-12">
                Esplora i nostri spettacoli e lasciati coinvolgere dall'incredibile interpretazione di Paola Rizzi.
                Cambiare scritta
            </p>
            <a href="{{route('show')}}" class="bg-[#F77F00] rounded rounded-md text-white px-6 py-3 hover:bg-[#d5730c] transition">
                Scopri di più
            </a>
        </div>
    </div>
        </div>
    </div>





    <div class="max-w-screen-xl max-xl:max-w-screen-lg mx-auto p-8 mb-32">
        <h2 class="text-4xl font-neutrafacebold mb-4">Prossime date</h2>
        <div class="w-full h-0.5 bg-[#BAB700] mb-12"></div>

            @foreach($event_list as $event)
            @php
                \Carbon\Carbon::setLocale('it');
                $eventDate = \Carbon\Carbon::parse($event->data);
            @endphp

            <div class="mb-8 flex items-center justify-between p-4 border rounded-lg shadow-md bg-white">
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
                <div class="text-right">
                    <h2 class="text-xl font-bold text-gray-800">{{$event->show->title}}</h2>
                    <span class="block text-xl text-gray-500">{{$event->place}}</span>
                </div>
            </div>

            @endforeach


        <div class="mt-12 flex justify-center">
            <a href="{{route('event')}}" class="bg-[#BAB700] rounded rounded-md text-white px-6 py-3 hover:bg-[#96940e] transition">
                Scopri più date
            </a>
        </div>
    </div>





@endsection
