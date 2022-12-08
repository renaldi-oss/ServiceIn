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
        {{-- <section class="background-radial-gradient overflow-hidden w-screen h-screen"> --}}
        <section class="bg-gradient-to-tl from-stone-900 via-sky-300 to-cyan-400 overflow-hidden w-screen h-screen">
                <div class="mt-10 px-6 pt-32 text-center">
                    <div class="container mx-auto xl:px-32">
                        <div class="grid gap-12 items-center">
                            <div class="mt-32" style="z-index: 10;">
                                <h1 class="text-5xl md:text-6xl xl:text-7xl font-bold mb-12"><span class="text-teal-900" data-aos="fade-down" data-aos-duration="1000" >ServiceIn</span></h1>
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

        <!-- section about serviceIn -->
    <section id="about" class="bg-gradient-to-bl from-stone-900 via-sky-300 to-emerald-400 w-full flex justify-center py-20">
        <div class="container px-3 md:pl-10 md:pr-5 lg:pl-28 lg:pr-16">
          <h2 class="text-3xl font-medium text-teal-500 text-center" data-aos="fade-down" data-aos-duration="1000">About</h2>
          <p class="text-teal-900 font-medium mb-5 text-center" data-aos="fade-down" data-aos-duration="1000">🤔🤔 ServiceIn ??</p>
          <div class="p-3 w-full flex flex-wrap items-center justify-between">
            <div class="about-profile w-full md:w-1/2" id="div_img_about">
              <img src="{{ asset('assets/images/logo.png') }}" id="about_img" alt="" width="300" class="animate-spin mx-auto lg:mx-0 lg:mr-auto">
            </div>
            <div class="about-main mb-16 mt-5 md:w-1/2">
              <h2 class="text-2xl text-teal-500" data-aos="fade-up">Servis</h2>
              <p class="text-slate-700 mt-3" data-aos="fade-up" data-aos-delay="100">deskripsi</p>
              <div id="skill" class="mt-5 mb-3 justify-center">
                <!-- html -->
                <a data-aos="fade-left" data-aos-delay="150" class="border-2 inline-block border-teal-900 rounded-full my-auto p-5 cursor-pointer mx-2 opacity-80 hover:text-red-600 hover:border-red-600 hover:opacity-100 transition duration-200 ease-in-out ">
                  <svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" width="35" class="fill-current">
                    <title>HTML5</title>
                    <path d="M1.5 0h21l-1.91 21.563L11.977 24l-8.564-2.438L1.5 0zm7.031 9.75l-.232-2.718 10.059.003.23-2.622L5.412 4.41l.698 8.01h9.126l-.326 3.426-2.91.804-2.955-.81-.188-2.11H6.248l.33 4.171L12 19.351l5.379-1.443.744-8.157H8.531z"/>
                  </svg>
                </a>
                
                <!-- css -->
                <a data-aos="fade-left" data-aos-delay="200" class="border-2 inline-block border-teal-900 rounded-full my-auto p-5 cursor-pointer mx-2 opacity-80  hover:text-blue-600 hover:border-blue-600 hover:opacity-100 transition duration-200 ease-in-out">
                  <svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"  width="35" class="fill-current">
                    <title>CSS3</title>
                    <path d="M1.5 0h21l-1.91 21.563L11.977 24l-8.565-2.438L1.5 0zm17.09 4.413L5.41 4.41l.213 2.622 10.125.002-.255 2.716h-6.64l.24 2.573h6.182l-.366 3.523-2.91.804-2.956-.81-.188-2.11h-2.61l.29 3.855L12 19.288l5.373-1.53L18.59 4.414z"/>
                  </svg>
                </a>
  
                <!-- js -->
                <a data-aos="fade-left" data-aos-delay="250" class="border-2 inline-block border-teal-900 rounded-full my-auto p-5 cursor-pointer mx-2 opacity-80  hover:text-yellow-600 hover:border-yellow-600 hover:opacity-100 transition duration-200 ease-in-out">
                  <svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" width="35" class="fill-current">
                    <title>JSS</title>
                    <path d="M0 2.5v19h19.2v-1.95c.506.263 1.124.42 1.857.42 1.687 0 2.943-.877 2.943-2.475 0-1.483-.852-2.143-2.36-2.79l-.444-.19c-.762-.33-1.092-.546-1.092-1.078 0-.431.33-.761.85-.761.51 0 .838.215 1.142.76l1.383-.887c-.585-1.029-1.396-1.422-2.525-1.422-.715 0-1.312.207-1.754.555V2.5zm.36.359h18.48v9.182a2.266 2.266 0 00-.487 1.432c0 .654.176 1.152.486 1.552v2.537l-1.018.592c.232.456.57.864 1.018 1.177v1.81H.361zm14.188 8.268c-1.586 0-2.6 1.014-2.6 2.346 0 1.445.85 2.13 2.132 2.675l.443.19c.81.355 1.293.57 1.293 1.18 0 .508-.47.875-1.205.875-.876 0-1.371-.457-1.752-1.078l-1.443.839c.521 1.03 1.587 1.816 3.236 1.816 1.687 0 2.943-.876 2.943-2.475 0-1.483-.852-2.143-2.361-2.79l-.444-.19c-.762-.33-1.092-.546-1.092-1.078 0-.431.33-.761.85-.761.51 0 .838.215 1.143.76l1.382-.887c-.584-1.029-1.396-1.422-2.525-1.422zm-5.868.101v6.038c0 .888-.368 1.116-.951 1.116-.61 0-.864-.418-1.143-.913l-1.446.875c.419.886 1.242 1.622 2.664 1.622 1.574 0 2.652-.837 2.652-2.676v-6.062zm10.52 4.173c.345.295.781.532 1.286.747l.443.19c.81.355 1.293.57 1.293 1.18 0 .508-.47.875-1.206.875-.876 0-1.37-.457-1.752-1.078l-.064.037z"/>
                  </svg>
                </a>
  
                <!-- boostrap -->
                <a data-aos="fade-left" data-aos-delay="300" class="border-2 inline-block border-teal-900 rounded-full my-auto p-5 cursor-pointer mx-2 opacity-80  hover:text-violet-600 hover:border-violet-600 hover:opacity-100 transition duration-200 ease-in-out">
                  <svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" width="35" class="fill-current">
                    <title>Bootstrap</title>
                    <path d="M11.77 11.24H9.956V8.202h2.152c1.17 0 1.834.522 1.834 1.466 0 1.008-.773 1.572-2.174 1.572zm.324 1.206H9.957v3.348h2.231c1.459 0 2.232-.585 2.232-1.685s-.795-1.663-2.326-1.663zM24 11.39v1.218c-1.128.108-1.817.944-2.226 2.268-.407 1.319-.463 2.937-.42 4.186.045 1.3-.968 2.5-2.337 2.5H4.985c-1.37 0-2.383-1.2-2.337-2.5.043-1.249-.013-2.867-.42-4.186-.41-1.324-1.1-2.16-2.228-2.268V11.39c1.128-.108 1.819-.944 2.227-2.268.408-1.319.464-2.937.42-4.186-.045-1.3.968-2.5 2.338-2.5h14.032c1.37 0 2.382 1.2 2.337 2.5-.043 1.249.013 2.867.42 4.186.409 1.324 1.098 2.16 2.226 2.268zm-7.927 2.817c0-1.354-.953-2.333-2.368-2.488v-.057c1.04-.169 1.856-1.135 1.856-2.213 0-1.537-1.213-2.538-3.062-2.538h-4.16v10.172h4.181c2.218 0 3.553-1.086 3.553-2.876z"/>
                  </svg>
                </a>
  
                <!-- tailwind -->
                <a data-aos="fade-left" data-aos-delay="350" class="border-2 inline-block border-teal-900 rounded-full my-auto p-5 cursor-pointer mx-2 opacity-80  hover:text-teal-500 hover:border-teal-500 hover:opacity-100 transition duration-200 ease-in-out">
                  <svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" width="35" class="fill-current">
                    <title>Tailwind CSS</title>
                    <path d="M12.001,4.8c-3.2,0-5.2,1.6-6,4.8c1.2-1.6,2.6-2.2,4.2-1.8c0.913,0.228,1.565,0.89,2.288,1.624 C13.666,10.618,15.027,12,18.001,12c3.2,0,5.2-1.6,6-4.8c-1.2,1.6-2.6,2.2-4.2,1.8c-0.913-0.228-1.565-0.89-2.288-1.624 C16.337,6.182,14.976,4.8,12.001,4.8z M6.001,12c-3.2,0-5.2,1.6-6,4.8c1.2-1.6,2.6-2.2,4.2-1.8c0.913,0.228,1.565,0.89,2.288,1.624 c1.177,1.194,2.538,2.576,5.512,2.576c3.2,0,5.2-1.6,6-4.8c-1.2,1.6-2.6,2.2-4.2,1.8c-0.913-0.228-1.565-0.89-2.288-1.624 C10.337,13.382,8.976,12,6.001,12z"/>
                  </svg>
                </a>
              </div>
              <div id="social-media" class="justify-center" >
                <h2 class="text-2xl text-teal-900 opacity-90 mt-5 mb-3" data-aos="fade-left" data-aos-delay="400">Social Media</h2>
  
                <!-- facebook -->
                <a href="#" target="_blank" data-aos="fade-left" data-aos-delay="500" class="border-2 inline-block border-teal-900 rounded-full my-auto p-3 cursor-pointer mx-2 opacity-80 hover:text-blue-500 hover:border-blue-500 hover:opacity-100 transition duration-200 ease-in-out ">
                  <svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" width="20" class="fill-current">
                    <title>Facebook</title>
                    <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                  </svg>
                </a>
  
                <!-- youtube -->
                <a href="#" target="_blank" data-aos="fade-left" data-aos-delay="550" class="border-2 inline-block border-teal-900 rounded-full my-auto p-3 cursor-pointer mx-2 opacity-80 hover:text-red-500 hover:border-red-500 hover:opacity-100 transition duration-200 ease-in-out ">
                  <svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" width="20" class="fill-current">
                    <title>YouTube</title>
                    <path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/>
                  </svg>
                </a>
  
                <!-- instagram -->
                <a href="#" target="_blank" data-aos="fade-left" data-aos-delay="600" class="border-2 inline-block border-teal-900 rounded-full my-auto p-3 cursor-pointer mx-2 opacity-80 hover:text-violet-500 hover:border-violet-500 hover:opacity-100 transition duration-200 ease-in-out ">
                  <svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" width="20" class="fill-current">
                    <title>Instagram</title>
                    <path d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z"/>
                  </svg>
                </a>
                
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    
    <x-footer />
@endsection
