@extends('layouts.app')

@section('content')
    <div class="flex flex-col">
        <x-navbar />
        {{-- <div class="flex items-center justify-center">
            <div class="flex flex-col justify-around">
                <div class="space-y-6">
                    <a href="{{ route('home') }}">
                        <x-logo class="w-auto h-16 mx-auto text-indigo-600" />
                    </a>

                    <h1 class="text-5xl font-extrabold tracking-wider text-center text-gray-600">
                        {{ config('app.name') }}
                    </h1>
                    <p class="mt-2 text-sm text-center text-gray-600 leading-5 max-w">
                        Technology
                        <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500 focus:outline-none focus:underline transition ease-in-out duration-150">
                            
                        </a>
                    </p>
                    <ul class="list-reset">
                        <li class="inline px-4">
                            <a href="https://tailwindcss.com" class="font-medium text-indigo-600 hover:text-indigo-500 focus:outline-none focus:underline transition ease-in-out duration-150">Tailwind CSS</a>
                        </li>
                        <li class="inline px-4">
                            <a href="https://github.com/alpinejs/alpine" class="font-medium text-indigo-600 hover:text-indigo-500 focus:outline-none focus:underline transition ease-in-out duration-150">Alpine.js</a>
                        </li>
                        <li class="inline px-4">
                            <a href="https://laravel.com" class="font-medium text-indigo-600 hover:text-indigo-500 focus:outline-none focus:underline transition ease-in-out duration-150">Laravel</a>
                        </li>
                        <li class="inline px-4">
                            <a href="https://laravel-livewire.com" class="font-medium text-indigo-600 hover:text-indigo-500 focus:outline-none focus:underline transition ease-in-out duration-150">Livewire</a>
                        </li>
                    </ul>
                    <p class="mt-2 text-sm text-center text-gray-600 leading-5 max-w">
                        Tools
                        <a href="https://filamentphp.com/" class="font-medium text-indigo-600 hover:text-indigo-500 focus:outline-none focus:underline transition ease-in-out duration-150">
                            Filament
                        </a>
                    </p>
                </div>
            </div>
        </div> --}}
        <section class="background-radial-gradient overflow-hidden w-screen h-screen">
                <div class="mt-10 px-6 pt-32 text-center">
                    <div class="container mx-auto xl:px-32 text-gray-800" id="tsparticles">
                        <div class="grid gap-12 items-center">
                            <div class="mt-32" style="z-index: 10;">
                                <h1 class="text-5xl md:text-6xl xl:text-7xl font-bold tracking-tight mb-12" style="color: hsl(218, 81%, 95%);"><span style="color: hsl(218, 81%, 75%);">ServiceIn</span></h1>
                                <div class="type-wrap">
                                    <div id="typed-strings" class="text-base">
                                      <span>Your Satisfaction is our <strong> #1 Priority</strong></span>
                                      <p><strong>ServiceIn</strong> Solusi perangkat anda</p>
                                      <p>We will Give Our Best <strong>Effort</strong></p>
                                      <p >Try it out! now</p>
                                    </div>
                                    <span id="typed" style="white-space:pre;" class="text-cyan-600 text-xl"></span>
                                  </div>
                            </div>
                            <div class="mb-12 lg:mb-0 relative">
                                <div id="radius-shape-1" class="absolute rounded-full shadow-lg"></div>
                                <div id="radius-shape-2" class="absolute shadow-lg"></div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
    </div>
    
    <x-footer />
@endsection
