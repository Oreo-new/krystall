@section('title', 'Hjem' )

<x-app-layout>
<div class="w-full md:p-2 md:m-2 md:flex md:flex-wrap lg:flex-nowrap lg:flex-col lg:m-0 lg:p-0 md:space-x-4 lg:space-x-0 md:justify-between">

    @foreach (range(1, 2) as $item)
        <div class="flex flex-col-reverse w-full py-5 border-t-2 justify-between md:w-2/5 lg:w-full  lg:px-0 lg:flex-row lg:justify-between">
            <div class="w-full lg:w-1/2">
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
            <div class="w-full lg:w-1/2">
                <a href="" class="block h-80 md:h-44 bg-contain sm:bg-cover lg:h-48 xl:h-64 bg-center bg-no-repeat" style="background-image: url('{{ asset('images/6ddb2450462828abf9aabc88d6bfb7fe_L.jpg') }}')"></a><!-- <img class="h-1/2" src="{{ asset('images/6ddb2450462828abf9aabc88d6bfb7fe_L.jpg') }}" alt=""> -->
            </div>
        </div>  
    @endforeach

        <div class="w-full h-full py-5 border-t-2">
            <a href="">
                <img src="{{ asset('images/68497d6cb194485d2759fde9466457b7_XL.jpg') }}" alt="">
            </a>
        </div>
        <div class="flex flex-col-reverse w-full py-5 md:px-2 border-t-2 justify-between md:justify-end items-start group md:w-1/2 lg:px-0 lg:flex-row lg:w-full lg:justify-between">
            <div class="w-full  lg:w-1/2 xl:w-96">
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
            <div class="w-full  lg:w-1/2">
                <a href="" class="block h-80 bg-contain md:h-44 sm:bg-cover md:bg-contain lg:bg-contain lg:h-48 xl:bg-cover xl:h-64 bg-center bg-no-repeat" style="background-image: url('{{ asset('images/6cdb4ac6ccf86fc9922b1b1ecf5faa0d_M.jpg') }}')"></a><!-- <img class="" src="{{ asset('images/6cdb4ac6ccf86fc9922b1b1ecf5faa0d_M.jpg') }}" alt=""> -->
            </div>
        </div>
        <div class="flex flex-col-reverse w-full py-5 md:px-2 border-t-2 justify-between md:justify-end items-start group md:w-1/2 lg:px-0 lg:flex-row lg:w-full lg:justify-between">
            <div class="w-full  lg:w-1/2 xl:w-96">
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
            <div class="w-full  lg:w-1/2">
                <a href="" class="block h-80 bg-contain md:h-44 sm:bg-cover md:bg-contain lg:bg-contain lg:h-48 xl:bg-cover xl:h-64 bg-center bg-no-repeat" style="background-image: url('{{ asset('images/78a1f76203c562c3d7c318765865da44_L.jpg') }}')"></a><!-- <img class="" src="{{ asset('images/78a1f76203c562c3d7c318765865da44_L.jpg') }}" alt=""> -->
            </div>
        </div>
    </div>
</x-app-layout>