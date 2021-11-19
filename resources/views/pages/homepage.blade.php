@section('title', 'Hjem' )

<x-app-layout>
<div class="w-full md:p-2 md:m-2 md:flex md:flex-wrap lg:flex-nowrap lg:flex-col lg:m-0 lg:p-0 lg:space-x-0 ">

    @foreach (range(1, 2) as $item)
        <div class="flex flex-col-reverse w-full py-5 border-t border-black justify-between md:w-2/4 lg:w-full  lg:px-0 lg:flex-row lg:justify-between">
            <div class="w-full lg:w-2/4">
                <div>
                    <p class="text-xl font-bold group-hover:text-green-500 duration-300 py-2">
                        <a href="">Veilederen Tina bruker kun sine synske evner.</a>
                    </p>
                </div>
                <div>
                    <p class="text-base">Tina er av sigøyner-/taterslekt. Hun har skjønt at hennes nedarvede blodslinjer forsterker hennes synske evner. Den dagen hun begynte å…</p> 
                </div>
                <div class="">
                    <a href="" class="text-base py-2 text-green-500 hover:text-black duration-300">Les mer...</a>
                </div>
            </div>
            <div class="w-full lg:w-2/4">
                <a href="" class="block h-64 md:h-44 bg-cover  lg:h-48 xl:h-64 bg-center bg-no-repeat" style="background-image: url('{{ asset('images/6ddb2450462828abf9aabc88d6bfb7fe_L.jpg') }}')"></a><!-- <img class="h-1/2" src="{{ asset('images/6ddb2450462828abf9aabc88d6bfb7fe_L.jpg') }}" alt=""> -->
            </div>
        </div>  
    @endforeach

        <div class="w-full h-full py-5 border-t-2">
            <a href="">
                <img src="{{ asset('images/68497d6cb194485d2759fde9466457b7_XL.jpg') }}" alt="">
            </a>
        </div>
        @foreach (range(1, 2) as $item)
            <div class="flex flex-col-reverse w-full py-5 md:px-2 border-t border-black justify-between md:justify-end items-start group md:w-1/2 lg:px-0 lg:flex-row lg:w-full lg:justify-between">
                <div class="w-full  lg:w-2/4">
                    <div>
                        <p class="text-xl py-2 font-bold group-hover:text-green-500 duration-300">
                            <a href="">Synske Amanda June gir deg svar!</a>
                        </p>
                    </div>
                    <div>
                        <p class="text-base">Godt voksen dame med mange års erfaring på teletorget.Amanda June er i en egen klasse, når det gjelder bra tilbakemeldinger… </p> 
                    </div>
                    <div class="">
                        <a href="" class="text-base py-2 text-green-500 hover:text-black duration-300">Les mer...</a>
                    </div>
                </div>
                <div class="w-full  lg:w-2/4">
                    <a href="" class="block h-64 bg-cover  md:h-44 lg:h-48  xl:h-64 bg-center bg-no-repeat" style="background-image: url('{{ asset('images/6cdb4ac6ccf86fc9922b1b1ecf5faa0d_M.jpg') }}')"></a><!-- <img class="" src="{{ asset('images/6cdb4ac6ccf86fc9922b1b1ecf5faa0d_M.jpg') }}" alt=""> -->
                </div>
            </div>
        @endforeach
    </div>
</x-app-layout>