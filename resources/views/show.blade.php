@extends('layout.master')

@section('title')
    Spettacoli
@endsection

@section('spettacoli-nv')
    text-white
@endsection

@section('spettacoli-nv-sm')
    text-red-700
@endsection

@section('body')
    <div class="relative mx-72 max-sm:mx-12 max-md:mx-24 max-lg:mx-48  mt-12 mb-6  text-center  max-sm:text-md text-5xl text-[#ea000e] font-neutrafacebold">
        I NOSTRI SPETTACOLI
    </div>

    <p class="relative mx-72 max-sm:mx-12 max-md:mx-24 max-lg:mx-48  mt-12 mb-6  text-center text-xl  max-sm:text-lg">
        Esplora il mondo della <span class="font-neutrafacebold">Signora Maria</span>, la bresciana che con i suoi monologhi in dialetto conquista il cuore del pubblico,
        regalando risate, emozioni e uno spaccato autentico della vita di tutti i giorni.
    </p>

    <div class="mx-32 max-lg:mx-24 max-md:mx-12 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 mt-12 mb-32">
        @foreach($show_list as $show)
        <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <img src="{{$show->img_url}}" class="w-full h-48 object-cover object-center">
            <div class="p-6">
                <h2 class="text-xl font-bold text-gray-800">{{strtoupper($show->title)}}</h2>
                <p class="text-gray-600 mt-2">
                    {{$show->short_description}}
                </p>
                <a href="{{route('singleshow.show',['name' => $show->title])}}" class="mt-4 inline-block border border-yellow-500 text-yellow-500 px-6 py-2 hover:bg-yellow-500 hover:text-white transition">
                    Scopri di più
                </a>
            </div>
        </div>
        @endforeach
    </div>

@endsection
