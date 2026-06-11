@extends('layout.master')

@section('title', 'Video')

@section('video-nv', 'is-active text-white')
@section('video-nv-sm', 'text-olive-light')

@section('body')

    <section class="bg-cocoa py-20">
        <div class="mx-auto max-w-screen-xl px-6 lg:px-8">

            <div class="mx-auto max-w-3xl text-center" data-aos="fade-up">
                <h1 class="font-neutrafacebold text-5xl uppercase leading-tight text-olive-light sm:text-6xl">I nostri video</h1>
            </div>

            <div class="mx-auto mt-10 h-1 w-24 rounded-full bg-olive" data-aos="fade-up"></div>

            @if(count($video_list) > 0)
                <div class="mt-12 grid grid-cols-1 gap-8 lg:grid-cols-2">
                    @foreach($video_list as $videoId)
                        <div class="overflow-hidden rounded-3xl bg-cocoa-deep shadow-ticket ring-1 ring-white/10" data-aos="fade-up">
                            <div class="relative aspect-video">
                                <iframe
                                    class="absolute inset-0 h-full w-full"
                                    src="https://www.youtube.com/embed/{{ $videoId }}"
                                    title="Video della Signora Maria"
                                    loading="lazy"
                                    frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    allowfullscreen>
                                </iframe>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <p class="mt-12 rounded-3xl bg-white/5 p-12 text-center text-cream/70">
                    Nessun video disponibile al momento.
                </p>
            @endif

        </div>
    </section>

@endsection
