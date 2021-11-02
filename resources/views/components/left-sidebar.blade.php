<div class="left-sidebar flex-auto w-full md:w-wleft lg:-mt-96 lg:m-3 lg:p-3">
    <div class="hidden md:flex flex-col items-center px-8 pb-7">
        <a href="">
            <img class="md:hidden" src="{{ asset('images/call-icon.png') }}" alt="small icon">
        </a>
        <a href="">
            <p class="text-center text-xl leading-5 font-bold text-green-400 md:mt-10 hover:text-black duration-300">Komplett<br>veilederliste</p>
        </a>
    </div>
    <div class="w-full md:hidden">
        <div class="mx-auto flex justify-center px-2 py-3 m-2">
            <span class="bg-green-500 text-center rounded m-4 text-xl w-2/5"><a href="">Horoskop</a></span>
            <span class="bg-green-500 text-center rounded m-4 text-xl w-2/5"><a href="">Veiledere</a></span>
        </div>
        <div class="w-full mt-3">
            <span class="block text-center font-bold text-2xl">Utvalgte veiledere</span>
        </div>
    </div>
    <div class="px-2 py-3 m-2 md:m-0 md:p-0 flex flex-wrap md:flex-nowrap md:flex-col justify-center">
        @foreach (range(1,20) as $item)
        <div class="m-4 md:m-0 md:mt-7 border-2 w-2/5 md:w-full">
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
        <div class="mt-7 border-2">
            <a href="" class="hover:text-black duration-300">
                <img src="{{ asset('images/0b1ad7a7b79268a1f4558db78e092446_S.jpg')}}" alt="">
            </a>
            <div class="text-center text-green-500 text-lg font-semibold leading-5 p-3">
                <a href="" class="hover:text-black duration-300">Bestill Medium</a>
            </div>
        </div>
    </div>
</div>