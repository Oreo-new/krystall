<div class="m-3 p-3">
    <div id="carousel" class="my-flipster mb-10">
        <!-- This is flipster -->
        <ul class="">
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