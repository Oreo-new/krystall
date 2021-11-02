@section('title', 'Hjem' )

<x-app-layout>
<div class="w-full p-3 m-3 md:p-2 md:m-2 md:flex md:flex-wrap">
        <div class="flex flex-col-reverse w-full py-5 md:px-2 border-t-2 justify-between md:justify-end items-start group md:w-1/2">
            <div class="w-full">
                <div>
                    <p class="text-2xl md:text-xl font-bold group-hover:text-green-500 duration-300">
                        <a href="">Veilederen Tina bruker kun sine synske evner.</a>
                    </p>
                </div>
                <div>
                    <p class="text-sm">Tina er av sigøyner-/taterslekt. Hun har skjønt at hennes nedarvede blodslinjer forsterker hennes synske evner. Den dagen hun begynte å…</p> 
                </div>
                <div class="">
                    <a href="" class="text-green-500 hover:text-black duration-300">Les mer...</a>
                </div>
            </div>
            <div class="sm:hidden mx-auto text-center text-green-500 text-lg font-semibold leading-5 p-3">
                <a href="" class="hover:text-black duration-300">82995009</a>
                <br>
                <a href="" class="hover:text-black duration-300">21058619</a>
            </div>
            <div class="w-full h-80 md:h-44 bg-cover md:bg-contain bg-center bg-no-repeat" style="background-image: url('{{ asset('images/6ddb2450462828abf9aabc88d6bfb7fe_L.jpg') }}')">
                <!-- <img class="h-1/2" src="{{ asset('images/6ddb2450462828abf9aabc88d6bfb7fe_L.jpg') }}" alt=""> -->
            </div>
        </div>  
        <div class="flex flex-col-reverse w-full py-5 md:px-2 border-t-2 justify-between md:justify-end items-start group md:w-1/2">
            <div class="w-full">
                <div>
                    <p class="text-2xl md:text-xl font-bold group-hover:text-green-500 duration-300">
                        <a href="">Klarsynte Nora er ekspert i temaene kjærlighet og arbeid!</a>
                    </p>
                </div>
                <div>
                    <p class="text-sm">Nora er en meget dyktig spådame, som er klarsynt fra barnsben. Hun er populær og har mange faste kunder. Du…</p> 
                </div>
                <div class="">
                    <a href="" class="text-green-500 hover:text-black duration-300">Les mer...</a>
                </div>
            </div>
            <div class="sm:hidden mx-auto text-center text-green-500 text-lg font-semibold leading-5 p-3">
                <a href="" class="hover:text-black duration-300">82995009</a>
                <br>
                <a href="" class="hover:text-black duration-300">21058619</a>
            </div>
            <div class="w-full h-80 md:h-44 bg-cover md:bg-contain bg-center bg-no-repeat" style="background-image: url('{{ asset('images/4246b121d2dc949b8f082c5f57840a3b_M.jpg') }}')">
                <!-- <img class="" src="{{ asset('images/4246b121d2dc949b8f082c5f57840a3b_M.jpg') }}" alt=""> -->
            </div>
        </div>
        <div class="w-full h-full py-5 border-t-2">
            <a href="">
                <img src="{{ asset('images/68497d6cb194485d2759fde9466457b7_XL.jpg') }}" alt="">
            </a>
        </div>
        <div class="flex flex-col-reverse w-full py-5 md:px-2 border-t-2 justify-between md:justify-end items-start group md:w-1/2">
            <div class="w-full">
                <div>
                    <p class="text-2xl md:text-xl font-bold group-hover:text-green-500 duration-300">
                        <a href="">Synske Amanda June gir deg svar!</a>
                    </p>
                </div>
                <div>
                    <p class="text-sm">Godt voksen dame med mange års erfaring på teletorget.Amanda June er i en egen klasse, når det gjelder bra tilbakemeldinger… </p> 
                </div>
                <div class="">
                    <a href="" class="text-green-500 hover:text-black duration-300">Les mer...</a>
                </div>
            </div>
            <div class="sm:hidden mx-auto text-center text-green-500 text-lg font-semibold leading-5 p-3">
                <a href="" class="hover:text-black duration-300">82995009</a>
                <br>
                <a href="" class="hover:text-black duration-300">21058619</a>
            </div>
            <div class="w-full h-80 md:h-44 bg-cover md:bg-contain bg-center bg-no-repeat" style="background-image: url('{{ asset('images/6cdb4ac6ccf86fc9922b1b1ecf5faa0d_M.jpg') }}')">
                <!-- <img class="" src="{{ asset('images/6cdb4ac6ccf86fc9922b1b1ecf5faa0d_M.jpg') }}" alt=""> -->
            </div>
        </div>
        <div class="flex flex-col-reverse w-full py-5 md:px-2 border-t-2 justify-between md:justify-end items-start group md:w-1/2">
            <div class="w-full">
                <div>
                    <p class="text-2xl md:text-xl font-bold group-hover:text-green-500 duration-300">
                        <a href="">Siri er diskré, ærlig og hjelper deg uten fordommer.</a>
                    </p>
                </div>
                <div>
                    <p class="text-sm">Siri begynte på teletorget i januar 2020 etter å ha jobbet mange år som medium i utlandet, og ble raskt…</p> 
                </div>
                <div class="">
                    <a href="" class="text-green-500 hover:text-black duration-300">Les mer...</a>
                </div>
            </div>
            <div class="sm:hidden mx-auto text-center text-green-500 text-lg font-semibold leading-5 p-3">
                <a href="" class="hover:text-black duration-300">82995009</a>
                <br>
                <a href="" class="hover:text-black duration-300">21058619</a>
            </div>
            <div class="w-full h-80 md:h-44 bg-cover md:bg-contain bg-center bg-no-repeat" style="background-image: url('{{ asset('images/78a1f76203c562c3d7c318765865da44_L.jpg') }}')">
                <!-- <img class="" src="{{ asset('images/78a1f76203c562c3d7c318765865da44_L.jpg') }}" alt=""> -->
            </div>
        </div>
    </div>
</x-app-layout>