@section('title', 'Hjem' )
@push('body-class', 'home')
<x-app-layout>
<div class="top-items w-full lg:p-2 lg:m-2 md:flex md:flex-wrap lg:flex-nowrap lg:flex-col lg:m-0 lg:p-0 md:justify-between">

    @foreach (range(1, 2) as $item)
    
        @if($loop->iteration % 2 == 0)
            <div class="flex flex-col-reverse w-full py-5 justify-between border-t-2 md:w-1/2 lg:w-full lg:px-0 lg:flex-row lg:justify-between even">
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
        @else
            <div class="flex flex-col-reverse w-full py-5 justify-between border-t-2 md:w-1/2 lg:w-full lg:px-0 lg:flex-row lg:justify-between odd">
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
        @endif

    @endforeach

        <div class="w-full h-full py-5 border-t-2">
            <a href="">
                <img src="{{ asset('images/68497d6cb194485d2759fde9466457b7_XL.jpg') }}" alt="">
            </a>
        </div>
    
    @foreach (range(1, 6) as $item)

        @if($loop->iteration % 2 == 0)
            <div class="flex flex-col-reverse w-full py-5 justify-between border-t-2 md:w-1/2 lg:w-full lg:px-0 lg:flex-row lg:justify-between even">
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
        @else
            <div class="flex flex-col-reverse w-full py-5 justify-between border-t-2 md:w-1/2 lg:w-full lg:px-0 lg:flex-row lg:justify-between odd">
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
        @endif

    @endforeach

    </div>
</x-app-layout>