@extends('layouts.app')

@section('content')
    <div class="flex flex-col justify-center min-h-screen py-12 bg-gray-50 sm:px-6 lg:px-8">
        <x-navbar />
        
        
          <section class="text-gray-600 body-font">
            <div class="container px-5 py-24 mx-auto">
              <div class="text-center mb-20">
                <h1 class="sm:text-3xl text-2xl font-medium title-font text-gray-900 mb-4">Fitur</h1>
                <p class="text-base leading-relaxed xl:w-2/4 lg:w-3/4 mx-auto text-gray-500s">Core layanan yang tersedia di web kami</p>
                <div class="flex mt-6 justify-center">
                  <div class="w-1/2 h-1 rounded-full bg-indigo-500 inline-flex"></div>
                </div>
              </div>
              <div class="flex flex-wrap justify-center sm:-m-4 -mx-4 -mb-10 -mt-4 md:space-y-0 space-y-6">
                <div class="p-4 md:w-1/3 flex flex-col text-center items-center">
                  <div class="w-20 h-20 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-5 flex-shrink-0">
                    <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                    </svg>
                  </div>
                  <div class="flex-grow">
                    <h2 class="text-gray-900 text-lg title-font font-medium mb-3">Chat</h2>
                    <p class="leading-relaxed text-base">Mengunakan Websocket Pusher</p>
                    <a class="mt-3 text-indigo-500 inline-flex items-center">Learn More
                      <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                        <path d="M5 12h14M12 5l7 7-7 7"></path>
                      </svg>
                    </a>
                  </div>
                </div>
                <div class="p-4 md:w-1/3 flex flex-col text-center items-center">
                  <div class="w-20 h-20 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-5 flex-shrink-0">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"></path>
                    </svg>
                  </div>
                  <div class="flex-grow">
                    <h2 class="text-gray-900 text-lg title-font font-medium mb-3">Payment</h2>
                    <p class="leading-relaxed text-base">Mengunakan 3rd party Midtrans/tripay </p>
                    <a class="mt-3 text-indigo-500 inline-flex items-center">Learn More
                      <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                        <path d="M5 12h14M12 5l7 7-7 7"></path>
                      </svg>
                    </a>
                  </div>
                </div>
              </div>
              <button class="flex mx-auto mt-16 border-0 py-2 px-8 focus:outline-none">
                <a class="flex mx-auto mt-16 items-center" href="{{ route("forum") }}">Not Sure What That's mean? Chat With Us Now
                  <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                    <path d="M5 12h14M12 5l7 7-7 7"></path>
                  </svg>
                </a>
              </button>
            </div>
          </section>
          {{-- core developer gan --}}
          <section class="text-gray-600 body-font">
            <div class="container px-5 py-20 mx-auto">
              <div class="flex flex-col text-center w-full mb-10">
                <h1 class="text-2xl font-medium title-font mb-4 text-gray-900">About ServiceIn</h1>
                <p class="lg:w-2/3 mx-auto leading-relaxed text-base">ServiceIn Were Created because we realize that somepoint in the future e-waste will become a problem for future generation</p>
              </div>
              <div class="flex justify-center m-4">
                <div class="w-5/6 h-1 rounded-full bg-indigo-500 inline-flex"></div>
              </div>

              <div class="flex flex-wrap justify-center -m-4">
                <div class="p-4 lg:w-1/4 md:w-1/2">
                  <div class="h-full flex flex-col items-center text-center">
                    <img alt="team" class="flex-shrink-0 rounded-full w-full h-56 object-cover object-center mb-4" src="https://dummyimage.com/200x200">
                    <div class="w-full">
                      <h2 class="title-font font-medium text-lg text-gray-900">Clara Adriana Sidauruk</h2>
                      <h3 class="text-gray-500 mb-3">Project Manager</h3>
                      <p class="mb-4">IDK DESC ???</p>
                      <span class="inline-flex">
                        <a class="text-gray-500">
                          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                            <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                          </svg>
                        </a>
                        <a class="ml-2 text-gray-500">
                          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                            <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
                          </svg>
                        </a>
                        <a class="ml-2 text-gray-500">
                          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                            <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                          </svg>
                        </a>
                      </span>
                    </div>
                  </div>
                </div>
                <div class="p-4 lg:w-1/4 md:w-1/2">
                  <div class="h-full flex flex-col items-center text-center">
                    <img alt="team" class="flex-shrink-0 rounded-lg w-full h-56 object-cover object-center mb-4" src="https://dummyimage.com/200x200">
                    <div class="w-full">
                      <h2 class="title-font font-medium text-lg text-gray-900">Reynaldi Fakhri Pratama</h2>
                      <h3 class="text-gray-500 mb-3">Programmer</h3>
                      <p class="mb-4">Life is Meaningless i want to die</p>
                      <span class="inline-flex">
                        <a class="text-gray-500">
                          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                            <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                          </svg>
                        </a>
                        <a class="ml-2 text-gray-500">
                          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                            <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
                          </svg>
                        </a>
                        <a class="ml-2 text-gray-500">
                          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                            <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                          </svg>
                        </a>
                      </span>
                    </div>
                  </div>
                </div>
                <div class="p-4 lg:w-1/4 md:w-1/2">
                  <div class="h-full flex flex-col items-center text-center">
                    <img alt="team" class="flex-shrink-0 rounded-lg w-full h-56 object-cover object-center mb-4" src="https://dummyimage.com/200x200">
                    <div class="w-full">
                      <h2 class="title-font font-medium text-lg text-gray-900">Haarisah Yustika Putri Al-Jufri</h2>
                      <h3 class="text-gray-500 mb-3">System Designer - UI\UX Developer</h3>
                      <p class="mb-4">IDK What Are these ??</p>
                      <span class="inline-flex">
                        <a class="text-gray-500">
                          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                            <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                          </svg>
                        </a>
                        <a class="ml-2 text-gray-500">
                          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                            <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
                          </svg>
                        </a>
                        <a class="ml-2 text-gray-500">
                          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                            <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                          </svg>
                        </a>
                      </span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <div class="flex flex-col text-center w-full mb-10 mt-10">
            <h1 class="text-2xl font-medium title-font mb-4 text-gray-900">More About Us</h1>
            <p class="lg:w-2/3 mx-auto leading-relaxed text-base">We are all students of the State Polytechnic of Malang</p>
            <p class="lg:w-2/3 mx-auto leading-relaxed text-base">When this website was created we were in the fifth semester in the department of information technology</p>
          </div>
          <div class="flex mt-2 mb-4 justify-center">
            <div class="w-1/2 h-1 rounded-full bg-indigo-500 inline-flex"></div>
          </div>
          <section class="text-gray-600 body-font relative">
            <div class="absolute inset-0 bg-gray-300">
              <iframe width="100%" height="100%" frameborder="0" marginheight="0" marginwidth="0" title="map" scrolling="no" src="https://maps.google.com/maps?width=100%&height=600&hl=en&q=PoliteknikNegeriMalang&ie=UTF8&t=&z=14&iwloc=B&output=embed" style="opacity(0.4);"></iframe>
            </div>
            <div class="container px-5 py-24 mx-auto flex">
              <div class="lg:w-1/3 md:w-1/2 bg-white rounded-lg p-8 flex flex-col md:ml-auto w-full mt-10 md:mt-0 relative z-10 shadow-md">
                <h2 class="text-gray-900 text-lg mb-1 font-medium title-font">Feedback</h2>
                <p class="leading-relaxed mb-5 text-gray-600">Currently in development so its not working</p>
                <div class="relative mb-4">
                  <label for="email" class="leading-7 text-sm text-gray-600">Email</label>
                  <input type="email" id="email" name="email" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                </div>
                <div class="relative mb-4">
                  <label for="message" class="leading-7 text-sm text-gray-600">Message</label>
                  <textarea id="message" name="message" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
                </div>
                <button class="text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">Button</button>
                <p class="text-xs text-gray-500 mt-3">Any feedback is apreciated :)</p>
              </div>
            </div>
          </section>
    </div>

    <x-footer />
@endsection
