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
        <section class="bg-gradient-to-tl from-cyan-900 via-sky-300 to-cyan-400 overflow-hidden w-screen h-screen">
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
        <section id="about" class="bg-gradient-to-bl from-cyan-900 via-sky-300 to-emerald-400 w-full flex justify-center py-20">
            <div class="container px-3 md:pl-10 md:pr-5 lg:pl-28 lg:pr-16">
            <h2 class="text-3xl font-medium text-teal-500 text-center" data-aos="fade-down" data-aos-duration="1000">About</h2>
            <p class="text-teal-900 font-medium mb-5 text-center" data-aos="fade-down" data-aos-duration="1000">🤔🤔 ServiceIn ??</p>
            <div class="p-3 w-full flex flex-wrap items-center justify-between">
                <div class="w-full md:w-1/2" id="div_img_about">
                <img src="{{ asset('assets/images/lp/h-cup.png') }}" data-aos="fade-up" data-aos-delay="100" alt="GAMBAR LP" width="1000" class="mx-auto lg:mx-0 lg:mr-auto border-b-2 border-teal-500">
                </div>
                <div class="about-main mb-16 mt-5 md:w-1/2">
                <h2 class="text-2xl text-teal-500" data-aos="fade-up">Teknologi</h2>
                <p class="text-slate-700 mt-3" data-aos="fade-up" data-aos-delay="100">TALL Stack</p>
                <div id="skill" class="mt-5 mb-3 justify-center">
                    <!-- tailwind -->
                    <a data-aos="fade-left" data-aos-delay="350" class="border-2 inline-block border-teal-900 rounded-full my-auto p-5 cursor-pointer mx-2 opacity-80  hover:text-teal-500 hover:border-teal-500 hover:opacity-100 transition duration-200 ease-in-out">
                        <svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" width="35" class="fill-current">
                        <title>Tailwind CSS</title>
                        <path d="M12.001,4.8c-3.2,0-5.2,1.6-6,4.8c1.2-1.6,2.6-2.2,4.2-1.8c0.913,0.228,1.565,0.89,2.288,1.624 C13.666,10.618,15.027,12,18.001,12c3.2,0,5.2-1.6,6-4.8c-1.2,1.6-2.6,2.2-4.2,1.8c-0.913-0.228-1.565-0.89-2.288-1.624 C16.337,6.182,14.976,4.8,12.001,4.8z M6.001,12c-3.2,0-5.2,1.6-6,4.8c1.2-1.6,2.6-2.2,4.2-1.8c0.913,0.228,1.565,0.89,2.288,1.624 c1.177,1.194,2.538,2.576,5.512,2.576c3.2,0,5.2-1.6,6-4.8c-1.2,1.6-2.6,2.2-4.2,1.8c-0.913-0.228-1.565-0.89-2.288-1.624 C10.337,13.382,8.976,12,6.001,12z"/>
                        </svg>
                    </a>
                    
                    <!-- css -->
                    <a data-aos="fade-left" data-aos-delay="200" class="border-2 inline-block border-teal-900 rounded-full my-auto p-5 cursor-pointer mx-2 opacity-80  hover:text-blue-600 hover:border-blue-600 hover:opacity-100 transition duration-200 ease-in-out">
                    <svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"  width="35" class="fill-current">
                        <title>Alpine JS</title>
                        <path d="M0 2.5v19h19.2v-1.95c.506.263 1.124.42 1.857.42 1.687 0 2.943-.877 2.943-2.475 0-1.483-.852-2.143-2.36-2.79l-.444-.19c-.762-.33-1.092-.546-1.092-1.078 0-.431.33-.761.85-.761.51 0 .838.215 1.142.76l1.383-.887c-.585-1.029-1.396-1.422-2.525-1.422-.715 0-1.312.207-1.754.555V2.5zm.36.359h18.48v9.182a2.266 2.266 0 00-.487 1.432c0 .654.176 1.152.486 1.552v2.537l-1.018.592c.232.456.57.864 1.018 1.177v1.81H.361zm14.188 8.268c-1.586 0-2.6 1.014-2.6 2.346 0 1.445.85 2.13 2.132 2.675l.443.19c.81.355 1.293.57 1.293 1.18 0 .508-.47.875-1.205.875-.876 0-1.371-.457-1.752-1.078l-1.443.839c.521 1.03 1.587 1.816 3.236 1.816 1.687 0 2.943-.876 2.943-2.475 0-1.483-.852-2.143-2.361-2.79l-.444-.19c-.762-.33-1.092-.546-1.092-1.078 0-.431.33-.761.85-.761.51 0 .838.215 1.143.76l1.382-.887c-.584-1.029-1.396-1.422-2.525-1.422zm-5.868.101v6.038c0 .888-.368 1.116-.951 1.116-.61 0-.864-.418-1.143-.913l-1.446.875c.419.886 1.242 1.622 2.664 1.622 1.574 0 2.652-.837 2.652-2.676v-6.062zm10.52 4.173c.345.295.781.532 1.286.747l.443.19c.81.355 1.293.57 1.293 1.18 0 .508-.47.875-1.206.875-.876 0-1.37-.457-1.752-1.078l-.064.037z"/>
                    </svg>
                    </a>
                    
                    <!-- laravel -->
                    <a data-aos="fade-left" data-aos-delay="250" class="border-2 inline-block border-teal-900 rounded-full my-auto p-5 cursor-pointer mx-2 opacity-80  hover:text-red-600 hover:border-red-600 hover:opacity-100 transition duration-200 ease-in-out">
                    <svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" width="35" class="fill-current">
                        <title>Laravel</title>
                        <path d="M23.642 5.43a.364.364 0 0 1 .014.1v5.149c0 .135-.073.26-.189.326l-4.323 2.49v4.934a.378.378 0 0 1-.188.326L9.93 23.949a.316.316 0 0 1-.066.027c-.008.002-.016.008-.024.01a.348.348 0 0 1-.192 0c-.011-.002-.02-.008-.03-.012-.02-.008-.042-.014-.062-.025L.533 18.755a.376.376 0 0 1-.189-.326V2.974c0-.033.005-.066.014-.098.003-.012.01-.02.014-.032a.369.369 0 0 1 .023-.058c.004-.013.015-.022.023-.033l.033-.045c.012-.01.025-.018.037-.027.014-.012.027-.024.041-.034H.53L5.043.05a.375.375 0 0 1 .375 0L9.93 2.647h.002c.015.01.027.021.04.033l.038.027c.013.014.02.03.033.045.008.011.02.021.025.033.01.02.017.038.024.058.003.011.01.021.013.032.01.031.014.064.014.098v9.652l3.76-2.164V5.527c0-.033.004-.066.013-.098.003-.01.01-.02.013-.032a.487.487 0 0 1 .024-.059c.007-.012.018-.02.025-.033.012-.015.021-.03.033-.043.012-.012.025-.02.037-.028.014-.01.026-.023.041-.032h.001l4.513-2.598a.375.375 0 0 1 .375 0l4.513 2.598c.016.01.027.021.042.031.012.01.025.018.036.028.013.014.022.03.034.044.008.012.019.021.024.033a.3.3 0 0 1 .024.06c.006.01.012.021.015.032zm-.74 5.032V6.179l-1.578.908-2.182 1.256v4.283zm-4.51 7.75v-4.287l-2.147 1.225-6.126 3.498v4.325zM1.093 3.624v14.588l8.273 4.761v-4.325l-4.322-2.445-.002-.003H5.04c-.014-.01-.025-.021-.04-.031-.011-.01-.024-.018-.035-.027l-.001-.002c-.013-.012-.021-.025-.031-.04-.01-.011-.021-.022-.028-.036h-.002c-.008-.014-.013-.031-.02-.047-.006-.016-.014-.027-.018-.043a.49.49 0 0 1-.008-.057c-.002-.014-.006-.027-.006-.041V5.789l-2.18-1.257zM5.23.81 1.47 2.974l3.76 2.164 3.758-2.164zm1.956 13.505 2.182-1.256V3.624l-1.58.91-2.182 1.255v9.435zm11.581-10.95-3.76 2.163 3.76 2.163 3.759-2.164zm-.376 4.978L16.21 7.087l-1.58-.907v4.283l2.182 1.256 1.58.908zm-8.65 9.654 5.514-3.148 2.756-1.572-3.757-2.163-4.323 2.489-3.941 2.27z"/>
                    </svg>
                    </a>

                    <!-- livewire -->
                    <a data-aos="fade-left" data-aos-delay="300" class="border-2 inline-block border-teal-900 rounded-full my-auto p-5 cursor-pointer mx-2 opacity-80  hover:text-blue-500 hover:border-blue-500 hover:opacity-100 transition duration-200 ease-in-out">
                    <svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" width="35" class="fill-current">
                        <title>Livewire</title>
                        <path d="M12.001 0C6.1735 0 1.4482 4.9569 1.4482 11.0723c0 2.0888.5518 4.0417 1.5098 5.709.2492.2796.544.4843.9649.4843 1.3388 0 1.2678-2.0644 2.6074-2.0644 1.3395 0 1.4111 2.0644 2.75 2.0644 1.3388 0 1.2659-2.0644 2.6054-2.0644.5845 0 .9278.3967 1.2403.8398-.2213-.2055-.4794-.3476-.8203-.3476-1.1956 0-1.3063 1.6771-2.2012 2.1406v4.5097c0 .9145.7418 1.6563 1.6562 1.6563.9145 0 1.6563-.7418 1.6563-1.6563v-5.8925c.308.4332.647.8144 1.2207.8144 1.3388 0 1.266-2.0644 2.6055-2.0644.465 0 .7734.2552 1.039.58-.1294-.0533-.2695-.0878-.4297-.0878-1.1582 0-1.296 1.574-2.1171 2.0937v2.4356c0 .823.6672 1.4902 1.4902 1.4902s1.4902-.6672 1.4902-1.4902V16.371c.3234.4657.6684.8945 1.2774.8945.7955 0 1.093-.7287 1.4843-1.3203.6878-1.4704 1.0743-3.1245 1.0743-4.873C22.5518 4.9569 17.8284 0 12.001 0zm-.5664 2.877c2.8797 0 5.2148 2.7836 5.2148 5.8066 0 3.023-1.5455 5.1504-5.2148 5.1504-3.6693 0-5.2149-2.1274-5.2149-5.1504S8.5548 2.877 11.4346 2.877zM10.0322 4.537a1.9554 2.1583 0 00-1.955 2.1582 1.9554 2.1583 0 001.955 2.1582 1.9554 2.1583 0 001.9551-2.1582 1.9554 2.1583 0 00-1.955-2.1582zm-.3261.664a.9777.9961 0 01.9785.9962.9777.9961 0 01-.9785.996.9777.9961 0 01-.9766-.996.9777.9961 0 01.9766-.9961zM6.7568 15.6935c-1.0746 0-1.2724 1.3542-1.9511 1.9648v1.7813c0 .823.6672 1.4902 1.4902 1.4902s1.4902-.6672 1.4902-1.4902v-3.1817c-.2643-.3237-.5767-.5644-1.0293-.5644Z"/>
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

        <!-- section services start -->
        <section id="services" class="bg-gradient-to-br from-emerald-400 via-sky-300 to-blue-800 w-full py-20 flex justify-center">
            <div class="container px-3 md:pl-10 md:pr-5 lg:pl-28 lg:pr-16">
            <h2 class="text-3xl font-medium text-teal-500 text-center" data-aos="fade-up" data-aos-delay="50">Fitur</h2>
            <p class="text-teal-900 font-medium mb-5 text-center" data-aos="fade-up" data-aos-delay="100">🤔Apa Saja🤔?</p>
            <div class="p-3 w-full flex flex-wrap items-center justify-center">
    
                <div id="content-services" data-aos="fade-up" data-aos-delay="150" class="hover:scale-95 transition duration-300 ease-in-out w-full h-max my-1 p-2 md:w-72">
                    <div class="border-2 p-5 md:h-72 border-teal-900 rounded-2xl h-max">
                        <span>
                        <svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" width="60" class="mx-auto">
                            <title>Chat</title>
                            <path d="M11.986 23.972C5.411 23.972 0 18.561 0 11.986 0 5.411 5.411 0 11.986 0c6.575 0 11.986 5.411 11.986 11.986a11.9 11.9 0 0 1-2.492 7.281l2.062 2.062c.293.293.458.691.458 1.106 0 .859-.706 1.565-1.565 1.565-.415 0-.813-.165-1.106-.458l-2.062-2.062a11.9 11.9 0 0 1-7.281 2.492Zm6.664-6.001a8.936 8.936 0 0 0 2.31-5.985c0-4.923-4.051-8.974-8.974-8.974-2.702 0-5.141 1.22-6.792 3.135h5.255v2.458H3.681a8.851 8.851 0 0 0-.536 1.844H9.22v2.459H3.06c.087.845.297 1.673.621 2.459h4.31v2.458H5.194c1.651 1.915 4.09 3.135 6.792 3.135 2.29 0 4.392-.877 5.985-2.31a1.59 1.59 0 0 1 .679-.679Zm-9.43-.146h7.376v-2.458H9.22v2.458Zm6.147-4.917h4.917v-2.459h-4.917v2.459Zm-4.918 0h3.074v-2.459h-3.074v2.459Zm1.844-4.303h4.918V6.147h-4.918v2.458Z"/>
                        </svg>
                        </span>
                        <h2 class="text-center mt-10 text-teal-900 font-semibold">Chat</h2>
                        <p class="text-center text-teal-900">Chat Melalui websocket Pusher</p>
                    </div>
                </div>
    
                <div id="content-services" data-aos="fade-up" data-aos-delay="250" class="hover:scale-95 transition duration-300 ease-in-out h-max my-1 p-2 md:w-72">
                    <div class="border-2 p-5 md:h-72 border-teal-900 rounded-2xl w-full h-max ">
                        <span>
                        <svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" width="60" class="mx-auto">
                            <title>Payment</title>
                            <path d="M11.986 23.972C5.411 23.972 0 18.561 0 11.986 0 5.411 5.411 0 11.986 0c6.575 0 11.986 5.411 11.986 11.986a11.9 11.9 0 0 1-2.492 7.281l2.062 2.062c.293.293.458.691.458 1.106 0 .859-.706 1.565-1.565 1.565-.415 0-.813-.165-1.106-.458l-2.062-2.062a11.9 11.9 0 0 1-7.281 2.492Zm6.664-6.001a8.936 8.936 0 0 0 2.31-5.985c0-4.923-4.051-8.974-8.974-8.974-2.702 0-5.141 1.22-6.792 3.135h5.255v2.458H3.681a8.851 8.851 0 0 0-.536 1.844H9.22v2.459H3.06c.087.845.297 1.673.621 2.459h4.31v2.458H5.194c1.651 1.915 4.09 3.135 6.792 3.135 2.29 0 4.392-.877 5.985-2.31a1.59 1.59 0 0 1 .679-.679Zm-9.43-.146h7.376v-2.458H9.22v2.458Zm6.147-4.917h4.917v-2.459h-4.917v2.459Zm-4.918 0h3.074v-2.459h-3.074v2.459Zm1.844-4.303h4.918V6.147h-4.918v2.458Z"/>
                        </svg>
                        </span>
                        <h2 class="text-center mt-10 text-teal-900 font-semibold">Payment</h2>
                        <p class="text-center text-teal-900" >Pembayaran Melalui payment gateway midtrans</p>  
                    </div>
                </div>
    
            </div>
            </div>
        </section>
        <!-- section services end -->

        <section class="bg-gradient-to-bl from-blue-800 via-sky-300 to-sky-100 py-36 w-full flex justify-center bg-center">
            <div class="container px-3 md:pl-10 md:pr-5 lg:pl-28 lg:pr-16">
              <div class="p-3 w-full flex flex-wrap items-center justify-between">
                <div data-aos="flip-left"data-aos-easing="ease-out-cubic"data-aos-duration="2000" class="w-full md:w-1/2 text-teal-900">
                  <h2 class="text-2xl font-medium text-teal-500" id="sayHello">Not Convinced ?</h2>
                  <h1 class="text-3xl font-semibold" id="name">About us</h1>
                  <p class="text-xl mb-10" id="note">well......</p>
                  <a href="{{ route('forum') }}" id="buttonHeader" class="inline-block rounded-full px-4 font-semibold py-2 text-slate-800 bg-teal-500 hover:opacity-80 hover:shadow-lg transition duration-200 ease-in-out"> how about start chat with us 🤔</a>
                </div>
                <div class="w-full mt-5 md:w-1/2 aos-init aos-animate" id="div_img_hero">
                  <img data-aos="fade-up" data-aos-duration="3000" src="{{ asset('assets/images/lp/h-thumbsUp.png') }}" id="img"  alt="" width="600" class="mx-auto border-b-2 md border-teal-500 lg:mx-0 lg:ml-auto">
                </div>
              </div>
            </div>
          </section>


    </div>
    
    <x-footer />
@endsection
