<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @hasSection('title')

            <title>@yield('title') - {{ config('app.name') }}</title>
        @else
            <title>{{ config('app.name') }}</title>
        @endif
        {{-- flowbite --}}
        {{-- <script src="../path/to/flowbite/dist/flowbite.js"></script>  --}}
        <!-- Favicon -->
		<link rel="shortcut icon" href="{{ url(asset('/assets/images/logo.png')) }}">
        {{-- icons --}}
        <script src="https://kit.fontawesome.com/07bf307b71.js" crossorigin="anonymous"></script>
        <!-- Fonts -->
        <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
        <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.3/dist/flowbite.min.css" />
        <!-- Styles -->
        <link rel="stylesheet" href="{{ url(asset('assets/css/scrollbar.css')) }}">
        <link rel="stylesheet" href="{{ url(asset('assets/css/background.css')) }}">
        <link rel="stylesheet" href="{{ url(asset('assets/css/style.css')) }}">
        <!-- tsParticles engine -->
        <script src="https://cdn.jsdelivr.net/npm/tsparticles-engine"></script>
        <script src="https://cdn.jsdelivr.net/npm/tsparticles/tsparticles.bundle.min.js"></script>
        
        <!-- GSAP -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/gsap.min.js"></script>

        {{-- Aos --}}
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">


        {{-- rekam id user --}}
        <script>
            const receiver_id = {!! auth()->check() ? auth()->user()->id : null !!};
        </script>
        <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
        @vite('resources/css/app.css')
        @livewireStyles
        <!-- CSRF Token --> 
        <meta name="csrf-token" content="{{ csrf_token() }}">

    </head>

    <body>
        @yield('body')
        {{-- js --}}
        <script src="{{ url(asset('assets/js/hamburger.js')) }}"></script>
        <script src="{{ url(asset('assets/js/tsparticle.js')) }}"></script>
        <script src="{{ url(asset('assets/js/gsap.js')) }}"></script>
        <script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>
        <script>
            if(document.getElementById('typed') != null){
                var typed = new Typed("#typed", {
                    stringsElement: '#typed-strings',
                    typeSpeed: 50,
                    backSpeed: 50,
                    backDelay: 1000,
                    startDelay: 2000,
                    loop: true,
                });
            }
        </script>
        <!-- AOS -->
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>
        AOS.init();
        </script>
        <script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="{{ config('midtrans.client_key') }}"></script>
        @vite('resources/js/app.js')
        @livewireScripts
    </body>
    
</html>
