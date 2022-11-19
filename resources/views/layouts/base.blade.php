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
        <script src="https://unpkg.com/feather-icons"></script>
        <!-- Fonts -->
        <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
        <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.3/dist/flowbite.min.css" />
        <!-- Styles -->
        <link rel="stylesheet" href="{{ url(asset('assets/css/scrollbar.css')) }}">
        <link rel="stylesheet" href="{{ url(asset('assets/css/background.css')) }}">
        <!-- first include tsParticles engine -->
        <script src="https://cdn.jsdelivr.net/npm/tsparticles-engine"></script>

        <!-- then include any tsParticles plugin needed -->
        <script src="https://cdn.jsdelivr.net/npm/tsparticles/tsparticles.bundle.min.js"></script>

        {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/tsparticles/2.5.3/tsparticles.bundle.js" integrity="sha512-pqvJCmGNZBjcNM0xh43IBvHdnXpeSiYm+N2ghJNlfAOvyxrvoT8v0T5B3Ta8Ls+IdHpNXiJwkm2tLePfUN78Uw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> --}}
        <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
        @livewireStyles
        @livewireScripts
            
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
    </head>

    <body>
        @yield('body')
        {{-- js --}}
        <script src="{{ url(asset('assets/js/hamburger.js')) }}"></script>
        <script src="{{ url(asset('assets/js/tsparticle.js')) }}"></script>
        <script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>
       <script>
          var typed = new Typed("#typed", {
                stringsElement: '#typed-strings',
                typeSpeed: 50,
                backSpeed: 50,
                backDelay: 1000,
                startDelay: 2000,
                loop: true,
            });
       </script>
    </body>
</html>
