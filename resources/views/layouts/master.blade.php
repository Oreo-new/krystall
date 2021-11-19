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

			<main>
				<div class="container mx-auto flex flex-wrap flex-col md:flex-row">
					@if(Request::path() == '/')
						<div class="w-full md:flex md:justify-end lg:justify-center">
							<div class="w-full lg:w-2/3 xl:w-full">
								<x-flipster></x-flipster>
							</div>
						</div>
					@endif
					<x-left-sidebar></x-left-sidebar>
					<div class="main-content flex-auto w-full md:w-2/3 lg:w-wmid xl:w-lgmid">
						<div class="m-2 p-2">
							{{ $slot }}
						</div>
					</div>
					<x-right-sidebar></x-right-sidebar>
				</div>
				
			</main>

			<x-footer></x-footer>	

		</div>

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
