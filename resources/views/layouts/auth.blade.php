@extends('layouts.base')

@section('body')
    <div class="flex flex-col justify-center min-h-screen py-12 sm:px-6 lg:px-8 background-radial-gradient">
        @yield('content')

        @isset($slot)
            {{ $slot }}
        @endisset
    </div>
@endsection
