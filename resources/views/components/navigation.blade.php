<div class="container mx-auto">
  <div id="btn-nav" class="group cursor-pointer w-10" onclick="openNav()">
    <span class="group-hover:text-green-400 duration-100">Meny</span>
    <span class="bg-black block m-1 h-1 w-8 group-hover:bg-green-400 duration-100"></span>
    <span class="bg-black block m-1 h-1 w-8 group-hover:bg-green-400 duration-100"></span>
    <span class="bg-black block m-1 h-1 w-8 group-hover:bg-green-400 duration-100"></span>
    <span class="bg-black block m-1 h-1 w-8 group-hover:bg-green-400 duration-100"></span>
  </div>
  <div class="">
    <ul id="mySidenav" class="bg-blue-600 fixed top-0 right-0 h-full w-0">
      <a href="javascript:void(0)" class="" onclick="closeNav()">x</a>
      <li><a href="">Hjem</a></li>
      <li><a href="">Veildere alfabetisk</a></li>
      <li><a href="">Medium magasin</a></li>
      <li><a href="">Dagshoroskop</a></li>
      <li><a href="">Artikkelarkiv</a></li>
      <li><a href="">Ordbok</a></li>
      <li><a href="">Prisopplysning</a></li>
    </ul>
  </div>
</div>

@once
    @push('scripts')
        <script>

          function openNav(){ 
            document.getElementById("mySidenav").style.display = "block";
            document.getElementById("body").style.marginRight = "200px";

          }

          function closeNav(){
            document.getElementById("mySidenav").style.width = "0px";
            document.getElementById("body").style.marginRight = "0px";
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