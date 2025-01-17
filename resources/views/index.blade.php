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

    <div class="relative mx-72 max-sm:mx-12 max-md:mx-24 max-lg:mx-48  mt-12 mb-6  text-center  text-xl max-sm:text-md">
        Paola Rizzi interpreta la <span class="font-neutrafacebold">Signora Maria</span>, un personaggio comico che ha riscosso un incredibile successo.
        Il pubblico ha apprezzato le battute fulminanti, il ritmo comico e la magistrale interpretazione dell’attrice.
    </div>


    <div class="flex justify-center">
        <div class="scroll imgBox" style="--time:50s">
            <div>
                <img src="{{url('/')}}/img/spettacolo7.png" class="rounded-lg w-72 h-72 object-cover">
                <img src="{{url('/')}}/img/spettacolo1.png" class="rounded-lg w-72 h-72 object-cover">
                <img src="{{url('/')}}/img/spettacolo3.png" class="rounded-lg w-72 h-72 object-cover">
                <img src="{{url('/')}}/img/spettacolo1.png" class="rounded-lg w-72 h-72 object-cover">
                <img src="{{url('/')}}/img/spettacolo5.png" class="rounded-lg w-72 h-72 object-cover">
                <img src="{{url('/')}}/img/spettacolo2.jpg" class="rounded-lg w-72 h-72 object-cover">
            </div>
            <div>
                <img src="{{url('/')}}/img/spettacolo7.png" class="rounded-lg w-72 h-72 object-cover">
                <img src="{{url('/')}}/img/spettacolo1.png" class="rounded-lg w-72 h-72 object-cover">
                <img src="{{url('/')}}/img/spettacolo3.png" class="rounded-lg w-72 h-72 object-cover">
                <img src="{{url('/')}}/img/spettacolo1.png" class="rounded-lg w-72 h-72 object-cover">
                <img src="{{url('/')}}/img/spettacolo5.png" class="rounded-lg w-72 h-72 object-cover">
                <img src="{{url('/')}}/img/spettacolo2.jpg" class="rounded-lg w-72 h-72 object-cover">
            </div>
        </div>
    </div>
    <div class="flex justify-center">
        <div class="scroll imgBox" style="--time:50s">
            <div>
                <img src="{{url('/')}}/img/spettacolo1.png" class="rounded-lg w-72 h-72 object-cover">
                <img src="{{url('/')}}/img/spettacolo2.jpg" class="rounded-lg w-72 h-72 object-cover">
                <img src="{{url('/')}}/img/spettacolo3.png" class="rounded-lg w-72 h-72 object-cover">
                <img src="{{url('/')}}/img/spettacolo5.png" class="rounded-lg w-72 h-72 object-cover">
            </div>
            <div>
                <img src="{{url('/')}}/img/spettacolo1.png" class="rounded-lg w-72 h-72 object-cover">
                <img src="{{url('/')}}/img/spettacolo2.jpg" class="rounded-lg w-72 h-72 object-cover">
                <img src="{{url('/')}}/img/spettacolo3.png" class="rounded-lg w-72 h-72 object-cover">
                <img src="{{url('/')}}/img/spettacolo5.png" class="rounded-lg w-72 h-72 object-cover">
            </div>
        </div>


    </div>



    <div class="bg-white py-12 my-6">
        <div class="container mx-auto text-center">
            <h2 class="text-3xl  text-gray-800 mb-6 font-neutrafacebold">SCOPRI GLI SPETTACOLI</h2>
            <p class="text-gray-600 mb-8">
                Esplora i nostri spettacoli e lasciati coinvolgere dall'incredibile interpretazione di Paola Rizzi.
                Cambiare scritta
            </p>
            <a href="{{route('show')}}" class="bg-red-600 text-white px-6 py-3 hover:bg-red-700 transition">
                Scopri di più
            </a>
        </div>
    </div>





    <div class="hidden lg:block max-w-screen-xl max-xl:max-w-screen-lg mx-auto p-8 mb-32">
        <h2 class="text-4xl font-neutrafacebold mb-4">Prossime date</h2>
        <div class="w-full h-0.5 bg-yellow-500 mb-12"></div>

        <div class="grid grid-cols-3 gap-6">
            @foreach($event_list as $event)
                <div class="bg-white rounded-lg shadow-md overflow-hidden mx-8 p-6">
                    <h3 class="text-xl font-bold text-gray-800">{{strtoupper($event->show->title)}}</h3>

                    <!-- Data e ora -->
                    <div class="mt-4 flex items-center">
                        <div class="text-yellow-500 font-semibold text-xl">
                            📅 {{\Carbon\Carbon::parse($event->data)->format('d/m/Y')}}
                        </div>
                        <div class="ml-6 text-gray-700 font-medium text-xl">
                            ⏰ {{\Carbon\Carbon::parse($event->hour)->format('H:i')}}
                        </div>
                    </div>

                    <!-- Posizione -->
                    <div class="mt-4 text-gray-700">
                        <p class="font-bold">📍 Posizione:</p>
                        <p class="mt-1 text-gray-600 text-xl">{{$event->place}}</p>
                    </div>
                </div>

            @endforeach

        </div>

        <div class="mt-12 flex justify-center">
            <a href="{{route('event')}}" class="border border-yellow-500 text-yellow-500 px-6 py-2 hover:bg-yellow-500 hover:text-white transition">
                Scopri più date
            </a>
        </div>
    </div>


    <!-- Mobile Layout -->
    <div class="lg:hidden max-w-screen-sm mx-auto p-4 mb-32">
        <h2 class="text-4xl font-neutrafacebold mb-4">Prossime date</h2>
        <div class="w-full h-0.5 bg-yellow-500 mb-12"></div>
        <div class="space-y-6">
            @foreach($event_list as $event)
                <div class="bg-white rounded-lg shadow-md overflow-hidden mx-8 p-6">
                    <h3 class="text-xl font-bold text-gray-800">{{strtoupper($event->show->title)}}</h3>

                    <!-- Data e ora -->
                    <div class="mt-4 flex items-center">
                        <div class="text-yellow-500 font-semibold text-lg">
                            📅 {{\Carbon\Carbon::parse($event->data)->format('d/m/Y')}}
                        </div>
                        <div class="ml-6 text-gray-700 font-medium text-lg">
                            ⏰ {{\Carbon\Carbon::parse($event->hour)->format('H:i')}}
                        </div>
                    </div>

                    <!-- Posizione -->
                    <div class="mt-4 text-gray-700">
                        <p class="font-bold">📍 Posizione:</p>
                        <p class="mt-1 text-gray-600">{{$event->place}}</p>
                    </div>

                </div>

            @endforeach

        </div>

        <div class="mt-12 flex justify-center">
            <a href="{{route('event')}}" class="border border-yellow-500 text-yellow-500 px-6 py-2 hover:bg-yellow-500 hover:text-white transition">
                Scopri più date
            </a>
        </div>
    </div>




@endsection
