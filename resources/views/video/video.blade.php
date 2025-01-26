@extends('layout.master')

@section('title')
    Video
@endsection

@section('video-nv')
    text-white
@endsection

@section('video-nv-sm')
    text-brandYellow
@endsection

@section('body')
    <div
        class="relative mx-72 max-sm:mx-12 max-md:mx-24 max-lg:mx-48  mt-12 mb-6  text-center  max-sm:text-md text-5xl text-[#BAB700] font-neutrafacebold">
        I NOSTRI VIDEO
    </div>

    <div class="mt-12 grid grid-cols-2 max-lg:grid-cols-1 gap-24 mb-24 mx-32 max-lg:mx-12">

        @foreach ($video_list as $videoId)

            <div class="bg-white rounded-xl shadow-md overflow-hidden">
                <iframe
                    class="w-full h-96"
                    src="https://www.youtube.com/embed/{{ $videoId }}"
                    title="YouTube video player"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen>
                </iframe>
            </div>
        @endforeach
    </div>

@endsection

