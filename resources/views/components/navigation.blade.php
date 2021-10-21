<div class="container mx-auto">
  <div id="btn-nav" class="group cursor-pointer w-10" onclick="openNav()">
    <span class="group-hover:text-green-400 duration-100">Meny</span>
    <span class="bg-black block m-1 h-1 w-8 group-hover:bg-green-400 duration-100"></span>
    <span class="bg-black block m-1 h-1 w-8 group-hover:bg-green-400 duration-100"></span>
    <span class="bg-black block m-1 h-1 w-8 group-hover:bg-green-400 duration-100"></span>
    <span class="bg-black block m-1 h-1 w-8 group-hover:bg-green-400 duration-100"></span>
  </div>
  <div class="relative">
    <ul id="mySidenav" class="bg-green-700 p-12 pt-24 top-0 h-full block w-60 fixed -right-60" style="transition: right ease-in-out .3s;">
      <a href="javascript:void(0)" class="text-white text-2xl font-bold leading-8 absolute p-5 top-0 right-0" onclick="closeNav()">x</a>
      <li><a href="" class="text-white text-xl leading-8 ">Hjem</a></li>
      <li><a href="" class="text-white text-xl leading-8 ">Veildere alfabetisk</a></li>
      <li><a href="" class="text-white text-xl leading-8 ">Medium magasin</a></li>
      <li><a href="" class="text-white text-xl leading-8 ">Dagshoroskop</a></li>
      <li><a href="" class="text-white text-xl leading-8 ">Artikkelarkiv</a></li>
      <li><a href="" class="text-white text-xl leading-8 ">Ordbok</a></li>
      <li><a href="" class="text-white text-xl leading-8 ">Prisopplysning</a></li>
    </ul>
  </div>
</div>

@once
    @push('scripts')
        <script>

          function openNav(){ 
            // let nav = document.getElementById("mySidenav").style.width = "200px";
            let body = document.getElementById("body");
            
            let mySidenav = document.getElementById('mySidenav');

            if (mySidenav.classList.contains('-right-60')) {

              mySidenav.classList.remove("-right-60");
              mySidenav.classList.add("right-0");
              body.style.marginRight = "250px";
                body.style.transition = "right";
                  body.style.transition = "ease-in-out";
                    body.style.transition = ".3s";

            } else {
              closeNav();
            }


          }

          function closeNav(){
            mySidenav.classList.remove("right-0");
            mySidenav.classList.add("-right-60");
            body.style.marginRight = "0px";
              body.style.transition = "left";
                body.style.transition = "ease-in-out";
                  body.style.transition = ".3s";
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