@section('title', 'artikkelarkiv' )


<x-app-layout>

<div class="mt-4">
    <div class="w-full mb-8">
        <p class="text-2xl text-center">Alle artikler:</p>
    </div>
    @foreach (range(1,4) as $item)
        <div class="my-3">
            <a class="text-green-500 font-medium text-lg md:text-2xl" href="">Veilederen Tina bruker kun sine synske evner.</a>
        </div>
    @endforeach
</div>
  
</x-app-layout>
