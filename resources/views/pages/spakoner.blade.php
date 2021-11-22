@section('title', 'Spakoner' )

<x-app-layout>

<div class="mt-16 md:mt-6">
  <div class="md:flex flex-row-reverse justify-center items-center">
    <p class="uppercase font-bold text-base text-white text-center bg-red-500 md:ml-1">avlogget</p>
    <p class="text-3xl font-medium text-center md:mr-1">Afrodite</p>
  </div>
  <div class="flex flex-col my-10 md:flex-row md:flex-wrap md:w-full md:my-0">
    <div class="w-full md:w-1/4 md:order-2">
      <img class="mx-1 mx-auto" src="{{ asset('images/profil-95152-afrodite-prepaid.jpg') }}" alt="">
    </div>
    <div class="text-center my-10 md:w-full md:order-1">
      <span class="font-bold text-lg">
        <a class="text-lg font-bold text-green-500 md:text-base" href="">829 95 152</a>(kr.29,90 pr min) 
      </span>
      <p class="text-xl md:text-base">Betaling via mobileregning og faktura</p>
      <span class="font-bold text-lg">
        <a class="text-lg font-bold text-green-500 md:text-base" href="">21 05 87 51</a>(kr.29,90 pr min)
      </span>
      <p class="text-xl md:text-base">Kortbetaling via <span><a class="text-green-500" href="">veildertjenesten.no</a></span></p>
    </div>
    <div class="text-base md:w-1/2 md:order-3 md:pl-8 md:w-3/4 lg:pl-12">
      <p class="my-8">Afrodite veilder og hjelper deg med relasjoner.</p>
      <p class="">hun har lang erfaring og er meget treffsikker. Afrodite spar deg om kjaerlighet, joob og okonomi, men svarer pa alle sporsmal</p>
      <p class="my-8">hun bruker bordkort i tillegg til andre hjelpemidler.</p>
      <p class="">Les mer <a class="text-green-500" href="">spaakort.no</a> </p>
    </div>
  </div>
</div>

</x-app-layout>