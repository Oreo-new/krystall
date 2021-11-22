@section('title', 'Alfabetisk' )

<x-app-layout>

  <div class="mt-20 md:mt-32">
    <div>
      <p class="text-3xl text-center mb-12">Veiledere</p>
    </div>
    <div class="grid grid-cols-2 md:grid-cols-3 gap-4">

      @foreach (range(1, 15) as $item)
      <div>
        <div>
          <p class="text-3xl text-xl text-green-500">A</p>
        </div>
        <ul>
          <li class="list-none"><a href="">Afrodite</a></li>
          <li class="list-none"><a href="">Afrodite</a></li>
          <li class="list-none"><a href="">Afrodite</a></li>
        </ul>
      </div>
      @endforeach

    </div>
    
  </div>
</x-app-layout>