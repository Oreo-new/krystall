<div class="right-sidebar flex-auto hidden lg:w-wright xl:w-lgright md:-mt-96 lg:block ">
    <div class="m-2 p-2">
        <div class="py-4 bg-green-500 rounded text-center">
            <a href="" class="font-bold text-white text-lg duration-300 hover:text-black">Horoskop</a>
         </div>
         <div>
            @foreach (range(1,15) as $item)
            <div class="mt-4">
               <a href="">
                  <img class="w-full" src="{{ asset('images/krys1.jpg') }}" alt="tag">
               </a>
            </div>
            @endforeach
         </div>
    </div>
</div>