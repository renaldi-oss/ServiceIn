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
        <script src="../path/to/flowbite/dist/flowbite.js"></script> 
        <!-- Favicon -->
		<link rel="shortcut icon" href="{{ url(asset('/assets/images/logo.png')) }}">
        {{-- icons --}}
        <script src="https://unpkg.com/feather-icons"></script>
        <!-- Fonts -->
        <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
        <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.3/dist/flowbite.min.css" />
        <!-- Styles -->
        <link rel="stylesheet" href="{{ url(asset('assets/css/scrollbar.css')) }}">
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
        @livewireStyles
        @livewireScripts
            
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
    </head>

    <body>
        @yield('body')
        <script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>
    </body>
</html>
