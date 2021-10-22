<div class="p-5 bg-center bg-cover bg-auto bg-no-repeat" style="background-image: url('{{ asset('images/Bakgrunnsbilde.jpg') }}'); background-size: 100% 100%">
  <div class="container mx-auto px-4 flex align-center justify-center relative">
    <div>
      <img src="{{ asset('images/logo_white.png') }}" alt="logo">
    </div>
    <div id="btn-nav" class="absolute right-4 group cursor-pointer" onclick="openNav()">
      <span class="text-white group-hover:text-green-400 duration-100 text-sm">Meny</span>
      <span class="bg-white block m-1 h-1 w-8 group-hover:bg-green-400 duration-100"></span>
      <span class="bg-white block m-1 h-1 w-8 group-hover:bg-green-400 duration-100"></span>
      <span class="bg-white block m-1 h-1 w-8 group-hover:bg-green-400 duration-100"></span>
      <span class="bg-white block m-1 h-1 w-8 group-hover:bg-green-400 duration-100"></span>
    </div>
    <div class="relative">
      <ul id="mySidenav" class="bg-green-700 p-10 py-24 top-0 h-full block w-72 fixed -right-72" style="transition: right ease .3s; box-shadow: -2px 0 4px -1px rgba(0, 0, 0, 0.5);">
        <a href="javascript:void(0)" class="text-white text-2xl font-bold leading-8 absolute p-5 top-0 right-0" onclick="closeNav()">x</a>
        <li><a href="" class="text-blue-400 font-med text-xl leading-10 hover:text-blue-400 transition duration-150 ">Hjem</a></li>
        <li><a href="" class="text-white font-med text-xl leading-10 hover:text-blue-400 transition duration-150 ">Veildere alfabetisk</a></li>
        <li><a href="" class="text-white font-med text-xl leading-10 hover:text-blue-400 transition duration-150 ">Medium magasin</a></li>
        <li><a href="" class="text-white font-med text-xl leading-10 hover:text-blue-400 transition duration-150 ">Dagshoroskop</a></li>
        <li><a href="" class="text-white font-med text-xl leading-10 hover:text-blue-400 transition duration-150 ">Artikkelarkiv</a></li>
        <li><a href="" class="text-white font-med text-xl leading-10 hover:text-blue-400 transition duration-150 ">Ordbok</a></li>
        <li><a href="" class="text-white font-med text-xl leading-10 hover:text-blue-400 transition duration-150 ">Prisopplysning</a></li>
      </ul>
    </div>
  </div>
</div>

@once
    @push('scripts')
        <script>

          function openNav(){ 
            // let nav = document.getElementById("mySidenav").style.width = "200px";
            let body = document.getElementById("body");
            
            let mySidenav = document.getElementById('mySidenav');

            if (mySidenav.classList.contains('-right-72')) {

              mySidenav.classList.remove("-right-72");
              mySidenav.classList.add("right-0");
              body.style.marginRight = "280px";
              body.style.marginLeft = "-280px";
                body.style.transition = "right";
                  body.style.transition = "ease";
                    body.style.transition = ".3s";

            } else {
              closeNav();
            }


          }

          function closeNav(){
            mySidenav.classList.remove("right-0");
            mySidenav.classList.add("-right-72");
            body.style.marginRight = "0px";
            body.style.marginLeft = "0px";
          }
          
          // var nav;
          // function openNav(){
          //   if ( nav == 1) {
          //     document.getElementById("mySidenav").style.display = "block";
          //     return nav = 0;
          //   } else {
          //     document.getElementById("mySidenav").style.display = "none";
          //     return nav = 1;
          //   }
          // }

        </script>
    @endpush
@endonce