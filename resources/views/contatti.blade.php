@extends('layout.master')

@section('title')
    Contatti
@endsection

@section('contatti-nv')
    text-white
@endsection

@section('contatti-nv-sm')
    text-[#bab700]
@endsection

@section('body')

    <div class="md:h-screen">
    <div class="relative mx-72 max-sm:mx-12 max-md:mx-24 max-lg:mx-48  mt-24 mb-6  text-center  max-sm:text-md text-5xl text-[#BAB700] font-neutrafacebold">
        I NOSTRI CONTATTI
    </div>

        <div class="mx-32 max-sm:mx-12 max-md:mx-24 max-lg:mx-48 mt-20">
            <div class="w-full h-0.5 bg-[#BAB700]"></div>
        </div>

        <div class="mx-32 pt-6 pb-20  flex justify-center">
            <div class="mt-8  max-md:grid-cols-1 grid grid-cols-3  flex items-center justify-center justify-items-center gap-20 mx-6" >
                <div class="text-center text-3xl mt-2  non-italic font-bold font-cabritoextrabold">
                    <div class="font-cabritoregular mt-4 flex flex-row text-center">
                        <div>
                            <a href="mailto:peppocosca@gmail.com">
                                <svg width="32px" height="32px" viewBox="0 -2.5 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000">

                                    <g id="SVGRepo_bgCarrier" stroke-width="0"/>

                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"/>

                                    <g id="SVGRepo_iconCarrier"> <title>email [#1572]</title> <desc>Created with Sketch.</desc> <defs> </defs> <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g id="Dribbble-Light-Preview" transform="translate(-340.000000, -922.000000)" fill="#ffffff"> <g id="icons" transform="translate(56.000000, 160.000000)"> <path d="M294,774.474 L284,765.649 L284,777 L304,777 L304,765.649 L294,774.474 Z M294.001,771.812 L284,762.981 L284,762 L304,762 L304,762.981 L294.001,771.812 Z" id="email-[#1572]"> </path> </g> </g> </g> </g>

                                </svg>
                            </a>
                        </div>
                        <div class="ml-2 hover:underline"><a href="mailto:peppocosca@gmail.com" class="hover:underline">Email</a></div>
                    </div>
                </div>
                <div class="text-center text-3xl mt-2  non-italic font-bold  font-cabritoextrabold">
                    <div class="text-center text-[#F77F00]"> TEATRO GAVARDO </div>
                    <div class="font-cabritoregular mt-4 flex flex-row text-center justify-center">
                        <div>
                            <a href="tel:+393395936407">
                                <svg width="32px" height="32px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">

                                    <g id="SVGRepo_bgCarrier" stroke-width="0"/>

                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"/>

                                    <g id="SVGRepo_iconCarrier"> <path d="M16.5562 12.9062L16.1007 13.359C16.1007 13.359 15.0181 14.4355 12.0631 11.4972C9.10812 8.55901 10.1907 7.48257 10.1907 7.48257L10.4775 7.19738C11.1841 6.49484 11.2507 5.36691 10.6342 4.54348L9.37326 2.85908C8.61028 1.83992 7.13596 1.70529 6.26145 2.57483L4.69185 4.13552C4.25823 4.56668 3.96765 5.12559 4.00289 5.74561C4.09304 7.33182 4.81071 10.7447 8.81536 14.7266C13.0621 18.9492 17.0468 19.117 18.6763 18.9651C19.1917 18.9171 19.6399 18.6546 20.0011 18.2954L21.4217 16.883C22.3806 15.9295 22.1102 14.2949 20.8833 13.628L18.9728 12.5894C18.1672 12.1515 17.1858 12.2801 16.5562 12.9062Z" fill="#ffffff"/> </g>

                                </svg>
                            </a>
                        </div>
                        <div class="ml-2 hover:underline"><a href="tel:+393395936407" class="hover:underline">Telefono</a></div>
                    </div>







                </div>
                <div class="text-center text-xl mt-2  non-italic font-bold  font-cabritoextrabold">
                    <div class="text-center text-xl mt-2 ">
                        <div>Il teatro Gavardo è associato alla <p class="font-neutrafacebold">BACCHIGLIONE BEAT</p></div>
                        <div>che dispone di propri impianti scenografici e di illuminazione</div>
                        <div>Via San Francesco, 145 - 35121 - Padova (PD)</div>
                        <div>mauro.vialardi@tiscali.it</div>
                        <div>Cod. fiscale: 04351520285   Tel. 348 472 6313 </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="mx-32 max-sm:mx-12 max-md:mx-24 max-lg:mx-48 mb-32">
            <div class="w-full h-0.5 bg-[#BAB700]"></div>
        </div>
    </div>
@endsection
