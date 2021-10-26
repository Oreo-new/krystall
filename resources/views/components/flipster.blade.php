<div class="m-3 p-3">
    <div id="carousel" class="my-flipster mb-10">
        <!-- This is flipster -->
        <ul>
            <li> 
                <a href="">
                    <div class="w-64 h-80 bg-no-repeat bg-contain" style="background-image: url('{{ asset('images/95602-1-E-karusell-lara.jpg') }}')">
                    <!-- <img class="h-96" src="{{ asset('images/95602-1-E-karusell-lara.jpg') }}" alt=""> -->
                    </div>
                </a> 
            </li>
            <li> 
                <a href="">
                    <div class="w-64 h-80 bg-no-repeat bg-contain" style="background-image: url('{{ asset('images/95090-1-E-karusell-1.jpg') }}')">
                    <!-- <img class="h-96" src="{{ asset('images/95602-1-E-karusell-lara.jpg') }}" alt=""> -->
                </a> 
            </li>
            <li> 
                <a href="">
                    <div class="w-64 h-80 bg-no-repeat bg-contain" style="background-image: url('{{ asset('images/95089-1-E-karusell.jpg') }}')">
                    <!-- <img class="h-96" src="{{ asset('images/95602-1-E-karusell-lara.jpg') }}" alt=""> -->
                </a> 
            </li>
            <li> 
                <a href="">
                    <div class="w-64 h-80 bg-no-repeat bg-contain" style="background-image: url('{{ asset('images/95759-1-E-karusell.jpg') }}')">
                    <!-- <img class="h-96" src="{{ asset('images/95602-1-E-karusell-lara.jpg') }}" alt=""> -->
                </a> 
            </li>
            <li> 
                <a href="">
                    <div class="w-64 h-80 bg-no-repeat bg-contain" style="background-image: url('{{ asset('images/95270-1-E-karusell-elisabeth-ny.jpg') }}')">
                    <!-- <img class="h-96" src="{{ asset('images/95602-1-E-karusell-lara.jpg') }}" alt=""> -->
                </a> 
            </li>
            <li> 
                <a href="">
                    <div class="w-64 h-80 bg-no-repeat bg-contain" style="background-image: url('{{ asset('images/95122-1-E-karusell.jpg') }}')">
                    <!-- <img class="h-96" src="{{ asset('images/95602-1-E-karusell-lara.jpg') }}" alt=""> -->
                </a> 
            </li>
            <li> 
                <a href="">
                    <div class="w-64 h-80 bg-no-repeat bg-contain" style="background-image: url('{{ asset('images/95423-1-E-karusell.jpg') }}')">
                    <!-- <img class="h-96" src="{{ asset('images/95602-1-E-karusell-lara.jpg') }}" alt=""> -->
                </a> 
            </li>
            <li> 
                <a href="">
                    <div class="w-64 h-80 bg-no-repeat bg-contain" style="background-image: url('{{ asset('images/95242-1-E-karusell-runa.jpg') }}')">
                    <!-- <img class="h-96" src="{{ asset('images/95602-1-E-karusell-lara.jpg') }}" alt=""> -->
                </a> 
            </li>
            <li> 
                <a href="">
                    <div class="w-64 h-80 bg-no-repeat bg-contain" style="background-image: url('{{ asset('images/95015-1-E-karusell.jpg') }}')">
                    <!-- <img class="h-96" src="{{ asset('images/95602-1-E-karusell-lara.jpg') }}" alt=""> -->
                </a> 
            </li>
        </ul>
    </div>
    <div class="">
        <div class="border-t-2">
            <div class="flex w-full py-5 justify-between items-start group">
                <div class="">
                    <div>
                        <p class="text-2xl font-bold group-hover:text-green-500 duration-300">
                            <a href="">Veilederen Tina bruker kun sine synske evner.</a>
                        </p>
                    </div>
                    <div>
                        <p>Tina er av sigøyner-/taterslekt. Hun har skjønt at hennes nedarvede blodslinjer forsterker hennes synske evner. Den dagen hun begynte å…</p> 
                    </div>
                    <div class="">
                        <a href="" class="text-green-500 hover:text-black duration-300">Les mer...</a>
                    </div>
                </div>
                <div class="">
                    <img class="" src="{{ asset('images/6ddb2450462828abf9aabc88d6bfb7fe_L.jpg') }}" alt="">
                </div>
            </div>
        </div>
        <div class="border-t-2">
            <div class="flex w-full py-5 justify-between items-start group">
                <div class="">
                    <div>
                        <p class="text-2xl font-bold group-hover:text-green-500 duration-300">
                            <a href="">Klarsynte Nora er ekspert i temaene kjærlighet og arbeid!</a>
                        </p>
                    </div>
                    <div>
                        <p>Nora er en meget dyktig spådame, som er klarsynt fra barnsben. Hun er populær og har mange faste kunder. Du…</p> 
                    </div>
                    <div class="">
                        <a href="" class="text-green-500 hover:text-black duration-300">Les mer...</a>
                    </div>
                </div>
                <div class="">
                    <img class="" src="{{ asset('images/4246b121d2dc949b8f082c5f57840a3b_M.jpg') }}" alt="">
                </div>
            </div>
        </div>
    </div>
</div>


@once
    @push('scripts')
        <script>

            $("#carousel").flipster({
                style: 'carousel',
                spacing: -0.4,
                nav: false,
                buttons: false,
                start: '0',
                fadeIn: 400,
                loop: true,
                autoplay: 5000,
                pauseOnHover: true,
            });

        </script>
    @endpush
@endonce