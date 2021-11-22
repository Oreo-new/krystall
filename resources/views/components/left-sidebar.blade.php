<div class="left-sidebar flex-auto w-full md:w-1/6 lg:w-wleft xl:w-lgleft {{ Request::path() ==  '/' ? 'lg:-mt-96' : 'md:mt-4 order-2 md:order-1'  }}">
    <div class="m-2 p-2">
        <div class="hidden md:flex flex flex-col items-center pb-7">
            <a href="">
                <img class="block" src="{{ asset('images/call-icon.png') }}" alt="small icon">
            </a>
            <a href="">
                <p class="text-center text-xl leading-5 font-bold text-green-400 hover:text-black duration-300">Komplett<br>veilederliste</p>
            </a>
        </div>
        <div class="w-full md:hidden">
            <div class="grid grid-cols-2 gap-6 py-3">
                <span class="bg-green-500 text-center rounded my-4 text-xl w-full py-1"><a href="">Horoskop</a></span>
                <span class="bg-green-500 text-center rounded my-4 text-xl w-full py-1"><a href="">Veiledere</a></span>
            </div>
            <div class="w-full mb-4">
                <span class="block text-center font-bold text-2xl">Utvalgte veiledere</span>
            </div>
        </div>
        <div class="grid grid-cols-2 md:grid-cols-1 gap-6 md:gap-0">
            @foreach (range(1,10) as $item)
                <div class="mb-2 md:m-0 md:mt-7 border-2 w-full">
                    <a href="">
                        <img src="{{ asset('images/profil-95009-vibeke.jpg')}}" alt="">
                    </a>
                    <div class="text-center text-green-500 text-lg font-semibold leading-5 p-3">
                        <a href="" class="hover:text-black duration-300">829 95 009</a>
                        <br>
                        <a href="" class="hover:text-black duration-300">21 05 86 19</a>
                    </div>
                </div>   
            @endforeach
            
        </div>
        <div class="w-full">
            @foreach (range(1,2) as $item)
                <div class="my-6 border-2 w-full">
                    <a href="" class="hover:text-black duration-300">
                        <img src="{{ asset('images/0b1ad7a7b79268a1f4558db78e092446_S.jpg')}}" alt="" class="object-cover w-full">
                    </a>
                    <div class="text-center text-green-500 text-lg font-semibold leading-5 p-3">
                        <a href="" class="hover:text-black duration-300">Bestill Medium</a>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="grid grid-cols-2 md:grid-cols-1 gap-6 md:gap-0">
            @foreach (range(1,4) as $item)
                <div class="mb-2 md:m-0 md:mt-7 w-full">
                    <a href="">
                        <img src="{{ asset('images/profil-95009-vibeke.jpg')}}" alt="">
                    </a>
                </div>   
            @endforeach
        </div>
    </div>
</div>