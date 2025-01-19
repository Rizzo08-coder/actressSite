<!DOCTYPE html  PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta charset="utf-8" name="csrf-token" content="{{ csrf_token() }}"/>
    <title>@yield('title')</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
    @yield('meta-description')

    <script src="http://code.jquery.com/jquery.js"></script>

    <link rel="stylesheet" href="{{url('/')}}/css/slideshow.css">


    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
    />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</head>

<body class="bg-[#5d5e5d] text-white font-neutrafaceregular ">




<nav class="shadow-2xl border-gray-200 bg-[#BAB700]  fixed w-full top-0 z-50">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="{{route('home')}}" class="flex items-center space-x-3 rtl:space-x-reverse">
                <span class="self-center text-4xl text-white font-semibold whitespace-nowrap dark:text-white font-neutrafacebold">SIGNORA MARIA</span>
        </a>
        <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar" type="button" class="md:hidden inline-flex items-center p-2 text-sm text-gray-500 rounded-lg focus:outline-none ml-auto">
            <span class="sr-only">Open sidebar</span>
            <svg class="w-6 h-6" aria-hidden="true" fill="white" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z" stroke="white" stroke-width="0.5"></path>
            </svg>
        </button>

        <div class="hidden w-full md:block md:w-auto" id="navbar-solid-bg">
            <ul class="flex flex-col font-medium mt-4 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-transparent dark:bg-gray-800 md:dark:bg-transparent dark:border-gray-700">
                <li>
                    <a href="{{route('home')}}" class="@yield('home-nv') block py-2 px-3 md:p-0 text-gray-900 bg-blue-700 rounded md:bg-transparent md:hover:text-white" aria-current="page">Home</a>
                </li>
                <li>
                    <a href="{{route('show')}}" class="@yield('spettacoli-nv') block py-2 px-3 md:p-0 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-white">Spettacoli</a>
                </li>
                <li>
                    <a href="{{route('event')}}" class="@yield('eventi-nv') block py-2 px-3 md:p-0 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-white">Calendario</a>
                </li>
                <li>
                    <a href="#" class="@yield('video-nv') block py-2 px-3 md:p-0 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-white">Video</a>
                </li>
                <li>
                    <a href="{{route('contact')}}" class="@yield('contatti-nv') block py-2 px-3 md:p-0 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-white">Contatti</a>
                </li>
            </ul>
        </div>
    </div>
</nav>



    <aside id="logo-sidebar" class="bg-[#5d5e5d] w-full fixed font-cabritobold text-center top-0 right-0 z-50 w-screen h-screen pt-20 transition-transform translate-x-full all-screens:translate-x-0 text-lg duration-500" aria-label="Sidebar">

    <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar" type="button" class=" absolute top-0 left-0 p-3 m-4 text-sm text-gray-500 rounded-lg hover:bg-[#353535] focus:outline-none focus:ring-2 focus:ring-[#353535]">
            <span class="sr-only">Open sidebar</span>
            <svg viewBox="0 0 10 10" class="w-3.5 h-3.5 overflow-visible"><path d="M0 0L10 10M10 0L0 10" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"></path></svg>
        </button>


        <div class="h-full px-3 pb-4 overflow-y-auto ">
            <ul class="space-y-2 text-sm">
                <li class="flex justify-center mb-6">
                    <a href="{{route('home')}}" class="flex items-center ">
                            <span class="self-center text-4xl text-[#BAB700] font-neutrafacebold font-semibold whitespace-nowrap ">SIGNORA MARIA</span>
                    </a>
                </li>
                <li class="mt-6 ">
                    <div class="border border-[#BAB700]"></div>
                    <a href="{{route('home')}}" class="@yield('home-nv-sm') flex items-center p-2 pt-4 pb-3 text-white hover:text-[#BAB700] ">
                        <span class="flex-1 whitespace-nowrap"> Home </span>
                    </a>
                    <div class="border border-[#BAB700]"></div>
                </li>
                <li >
                    <a href="{{route('show')}}" class="@yield('spettacoli-nv-sm') flex items-center p-2 pb-3 text-white  hover:text-[#BAB700] ">
                        <span class="flex-1 whitespace-nowrap"> Spettacoli </span>
                    </a>
                    <div class="border border-[#BAB700]"></div>
                </li>

                <li >
                    <a href="{{route('event')}}" class="@yield('eventi-nv-sm') flex items-center p-2 pb-3 text-white  hover:text-[#BAB700] ">
                        <span class="flex-1 whitespace-nowrap "> Calendario </span>
                    </a>
                    <div class="border border-[#BAB700]"></div>
                </li>

                <li >
                    <a href="#" class="@yield('video-nv-sm')  hover:text-[#BAB700] pb-3 flex items-center p-2 text-white">
                        <span class="flex-1 whitespace-nowrap">Video</span>
                    </a>
                    <div class="border border-[#BAB700] "></div>
                </li>

                <li >
                    <a href="{{route('contact')}}" class="@yield('contatti-nv-sm')  hover:text-[#BAB700] pb-3 flex items-center p-2 text-white">
                        <span class="flex-1 whitespace-nowrap">Contatti</span>
                    </a>
                    <div class="border border-[#BAB700]"></div>
                </li>
            </ul>
        </div>
    </aside>


<div class="pt-20">
</div>

    @yield('body')






<footer class="bg-[#353535]">
    <div class="mx-auto w-full max-w-screen-xl p-4 py-6 lg:py-8">
        <div class="md:flex md:justify-between">
            <div class="mb-6 md:mb-0">
                <a href="{{route('home')}}" class="flex items-center">
                    <span class="self-center text-4xl text-[#BAB700] font-semibold whitespace-nowrap font-neutrafacebold">SIGNORA MARIA</span>
                </a>
            </div>
            <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3">
                <div>
                    <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white"></h2>
                    <ul class="text-gray-500 dark:text-gray-400 font-medium">
                    </ul>
                </div>
                <div>
                    <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white"></h2>
                    <ul class="text-gray-500 dark:text-gray-400 font-medium">
                    </ul>
                </div>
                <div>
                    <h2 class="mb-6 text-sm font-semibold text-white uppercase ">Legal</h2>
                    <ul class=" font-medium">
                        <li class="mb-4">
                            <a href="#" class="text-gray-300 hover:underline">Privacy Policy</a>
                        </li>
                        <li>
                            <a href="#" class="text-gray-300 hover:underline">Terms &amp; Conditions</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <hr class="my-6 border-[#BAB700] sm:mx-auto lg:my-8" />
        <div class="sm:flex sm:items-center sm:justify-between">
          <span class="text-sm text-gray-300 ">© 2025. All Rights Reserved.
          </span>
        </div>
    </div>
</footer>

</body>
