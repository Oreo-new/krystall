@section('title', 'horoskops' )

<x-app-layout>
    
    <div class="mt-4">
        <div class="w-40 mx-auto mb-8 py-4 bg-green-500 rounded text-center">
            <a href="" class="font-bold text-white text-lg duration-300 hover:text-black">Finn din veileder</a>
        </div>
        <div class="grid grid-cols-3 gap-4 py-4 md:grid-cols-4">

            @foreach (range(1,12) as $item)
                <div class="group">
                    <a href="">
                        <img src="{{ asset("/images/e31ace2a15a7c70645ad83df9ecd43b0_XS.jpg") }}" alt="">
                        <p class="text-center text-green-500 font-bold text-sm duration-300 md:text-lg group-hover:text-black">Vannmannen</p>
                    </a>
                </div>
            @endforeach
    
        </div>
    </div>

</x-app-layout>