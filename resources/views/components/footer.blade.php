<footer class="bg-green-500">
    <div class="container mx-auto">
      <div class="flex flex-wrap flex-col justify-between py-6 sm:flex-row md:mx-2">
        <div class="w-full m-2 p-2 text-white md:w-56 md:m-0 md:p-0 lg:w-1/3">
          <p class="w-4/5 mx-auto md:m-0 md:w-full lg:w-4/5">
            <a href="">
              <img src="{{ asset('images/logo_white.png') }}" alt="">
            </a>
          </p>
          <p class="w-3/5 mx-auto text-center mt-5 text-sm font-medium md:w-full md:text-left md:mt-28 lg:mx-0 xl:w-2/3">
            Copyright © 2017 SanaVia AS. All rights reserved. Info: 22004600
          </p>
        </div>
        <div class="w-fulll h-full m-2 p-2 text-white font-medium flex flex-wrap flex-col items-center gap-x-3 sm:items-start sm:w-72 sm:h-36 md:gap-x-4 md:w-48 md:m-0 md:p-0 md:leading-8 lg:w-1/3">
          <a href="" class="underline hover:no-underline"> <span>Hjem</span> </a>					
          <a href="" class="underline hover:no-underline md:leading-normal lg:leading-8"> <span>Veiledere<br class="hidden sm:block lg:hidden"> alfabetisk</span> </a>
          <a href="" class="underline hover:no-underline"> <span>Medium magasin</span> </a>
          <a href="" class="underline hover:no-underline"> <span>Dagshoroskop</span> </a>
          <a href="" class="underline hover:no-underline"> <span>Artikkelarkiv</span> </a>
          <a href="" class="underline hover:no-underline"> <span>Ordbok</span> </a>
          <a href="" class="underline hover:no-underline"> <span>Prisopplysning</span> </a>
          <a href="" class="underline hover:no-underline"> <span>Personvernerklæring</span> </a>
        </div>
        <div class="w-full text-center m-2 p-2 text-white sm:text-left sm:w-1/4 sm:h-1/2 md:w-1/4 md:text-right md:w-32 md:m-0 md:p-0 md:leading-9">
          <li class="list-none underline hover:no-underline" onclick="topFunction()"><a id="top" href="">Til toppen</a></li>
          <li class="list-none underline hover:no-underline"><a href="">Besok oss pa Facebook</a></li>
        </div>
      </div>
    </div>
</footer>
@once
  @push('scripts')
    <script>
      var Till_toppen = document.getElementById("top");

      function topFunction() {
      document.body.scrollTop = 0;
      document.documentElement.scrollTop = 0;
      }
    </script>
  @endpush
@endonce