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

    <div class=" mt-12 flex justify-center text-sm text-yellow-500 hover:text-black hover:scale-110 transition duration-500">
        <a href="{{route('show')}}" class="flex items-center justify-center underline-link">
            <div class="inline-flex justify-center">
                <div>
                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5H1m0 0 4 4M1 5l4-4"/>
                    </svg>
                </div>
                <div class="ml-2 text-sm flex place-self-center font-cabritobold">
                    TORNA AGLI SPETTACOLI
                </div>
            </div>
        </a>
    </div>

    <style>
        .underline-link {
            position: relative;
            display: inline-flex;
            align-items: center;
        }

        .underline-link::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: -2px; /* Adjust as needed */
            width: 100%;
            height: 1px; /* Adjust as needed */
            background-color: currentColor;
        }
    </style>

    <div class="relative mx-72 max-sm:mx-12 max-md:mx-24 max-lg:mx-48  mt-12 mb-8  text-center  max-sm:text-md text-5xl text-[#ea000e] font-neutrafacebold">
        {{strtoupper($show->title)}}
    </div>
    <div class="max-w-5xl mx-auto bg-white shadow rounded-lg overflow-hidden mb-32">
        <!-- Immagine dello spettacolo -->
        <img src="{{$show->img_url}}" alt="Spettacolo" class="w-full h-120 object-cover">


        <div class="relative mx-12   mt-12 mb-6  text-xl  max-sm:text-lg">
            <div class="text-center text-4xl max-md:text-2xl text-yellow-500 font-neutrafacebold mb-6">
                TRAMA
            </div>
            <p class="text-gray-600 leading-relaxed">
                {{$show->description}}
            </p>
        </div>

        <div class="relative mx-12   mt-12 mb-6  text-center text-xl  max-sm:text-lg">

    <div class="mb-6">
        <h2 class="text-xl text-gray-800 mb-2">Diretto da</h2>
        <p class="text-gray-600">{{$show->directed_by}}</p>
    </div>
    <div class="mb-6">
        <h2 class="text-xl text-gray-800 mb-2">Collaboratore</h2>
        <p class="text-gray-600">{{$show->collaboration}}</p>
    </div>
        </div>
    </div>



@endsection
