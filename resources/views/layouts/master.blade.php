<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="csrf-token" content="{{ csrf_token() }}">

		<title>Minkrystallkulen</title>

        <!-- Fonts -->
        <style>
             @import url(https://db.onlinewebfonts.com/c/a64ff11d2c24584c767f6257e880dc65?family=Helvetica);

        </style>
       
        <!-- Styles -->
        
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
				<link href="{{ asset('css/flipster.min.css') }}" rel="stylesheet">

		

		{{-- @livewireStyles --}}

		<!-- Scripts -->
		@stack('header-scripts')
		{{-- <link rel="stylesheet" type="text/css" href="https://unpkg.com/aos@next/dist/aos.css" /> --}}
		<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
	
		
	</head>
	<body class="font-sans antialiased" id="body">
		<div class="">
      <x-top-boxes></x-top-boxes>
			<header >
				<x-navigation></x-navigation>
			</header>

			<!-- Page Content -->
			{{-- <div class="sm:hidden">
				<x-flipster></x-flipster>
			</div> --}}
			<main>
				<div class="container px-6 sm:px-4 mx-auto flex flex-wrap flex-col md:flex-row">
					<div class="w-full md:flex md:justify-end lg:justify-center">
						<div class="w-full lg:w-2/3 xl:w-full">
							<x-flipster></x-flipster>
						</div>
					</div>
					<x-left-sidebar></x-left-sidebar>
					<div class="main-content flex-auto w-full md:w-2/3 lg:w-wmid xl:w-lgmid">
						<div class="m-2 p-2">
							{{ $slot }}
						</div>
					</div>
					<x-right-sidebar></x-right-sidebar>
				</div>
				
			</main>

			<footer class="bg-green-500">
				{{-- <x-footer></x-footer> --}}
				<div class="container mx-auto px-6">
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

		</div>
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

		{{-- @livewireScripts --}}

		{{-- <script type="text/javascript" src="https://unpkg.com/aos@next/dist/aos.js"></script> --}}
		<script src="{{ asset('js/app.js') }}"></script>
		<script src="{{ asset('js/flipster.min.js') }}"></script>
		<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.3.5/dist/alpine.min.js" defer></script>
		{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> --}}
		{{-- <script defer>
			AOS.init({
				disable: 'mobile',
				duration: 1300,
				offset: 126,
				once: true, 
			});
		</script> --}}

		@stack('scripts')
	</body>
</html>
