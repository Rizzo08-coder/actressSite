@extends('layout.master')

@section('title')
    Spettacoli
@endsection

@section('spettacoli-nv')
    text-white
@endsection

@section('spettacoli-nv-sm')
    text-[#bab700]
@endsection

@section('body')
    <div class="relative mx-72 max-sm:mx-12 max-md:mx-24 max-lg:mx-48  mt-12 mb-6  text-center  max-sm:text-md text-5xl text-[#BAB700] font-neutrafacebold">
        I NOSTRI SPETTACOLI
    </div>

    <p class="relative mx-72 max-sm:mx-12 max-md:mx-24 max-lg:mx-48  mt-12 mb-6  text-center text-2xl  max-sm:text-xl">
        Esplora il mondo della <span class="font-neutrafacebold">Signora Maria</span>, la bresciana che con i suoi monologhi in dialetto conquista il cuore del pubblico,
        regalando risate, emozioni e uno spaccato autentico della vita di tutti i giorni.
    </p>

    <div class="mx-32 max-lg:mx-24 max-md:mx-12 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 mt-12 mb-32">
        @foreach($show_list as $show)
        <a href="{{route('singleshow.show',['name' => $show->title])}}" class="shadow shadow-2xl transition-transform transform hover:scale-110 duration-500 bg-white shadow-md rounded-lg overflow-hidden">
            <img src="{{$show->img_url}}" class="w-full h-48 object-cover object-center">
            <div class="p-6 pb-2">
                <h2 class="text-3xl font-bold text-[#F77F00] mb-4 text-center font-neutrafacebold ">{{strtoupper($show->title)}}</h2>
            </div>
        </a>
        @endforeach
    </div>

@endsection
