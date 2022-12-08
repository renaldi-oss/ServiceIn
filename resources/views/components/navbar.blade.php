{{-- <nav id="navbar" class="bg-white px-2 sm:px-4 py-2.5 dark:bg-gray-900 fixed w-full z-20 top-0 left-0 border-b border-gray-200 dark:border-gray-600">
    <div class="container flex flex-wrap justify-between items-center mx-auto">
      <div class="flex gap-2">
   
        <div x-data="{ hamburger: false }">
          <button x-data class="text-gray-500 w-10 h-10 relative focus:outline-none bg-white" @click="hamburger = !hamburger; $dispatch('hide')">
              <div class="block w-5 absolute left-1/2 top-1/2   transform  -translate-x-1/2 -translate-y-1/2">
                  <span aria-hidden="true" class="block absolute h-0.5 w-5 bg-current transform transition duration-500 ease-in-out" :class="{'rotate-45': hamburger,' -translate-y-1.5': !hamburger }"></span>
                  <span aria-hidden="true" class="block absolute  h-0.5 w-5 bg-current   transform transition duration-500 ease-in-out" :class="{'opacity-0': hamburger } "></span>
                  <span aria-hidden="true" class="block absolute  h-0.5 w-5 bg-current transform  transition duration-500 ease-in-out" :class="{'-rotate-45': hamburger, ' translate-y-1.5': !hamburger}"></span>
              </div>
          </button>
        </div> 
      
        <a href="/" class="flex items-center">
          <img src="assets/images/logo.png" class="mr-3 h-6 sm:h-9" alt="Logo">
          <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">{{ config('app.name') }}</span>
        </a>

      </div>
      @if (!Auth::check())
      <div class="flex md:order-2">
        <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-3 md:mr-0 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
          <a href="{{ route('login') }}">login</a>
        </button>
      </div>
      @endif
      @auth
        <div class="hidden justify-between items-center w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
          <ul class="flex flex-col p-4 mt-4 bg-gray-50 rounded-lg border border-gray-100 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
            
            <li>
              <a href="{{ route('service') }}" class="block py-2 pr-4 pl-3 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Services</a>
            </li>
            <li>
              <a href="{{ route('forum') }}" class="block py-2 pr-4 pl-3 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Forum</a>
            </li>
            <li>
              <a href="{{ route('about') }}" class="block py-2 pr-4 pl-3 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">About</a>
            </li>
          </ul>
        </div>
      @endauth   
    </div>
</nav>--}}

<nav class="w-full fixed top-0 left-0 z-10 flex justify-center items-center bg-transparent" id="nav">
  <div class="container px-3 md:pl-10 md:pr-5 lg:pl-28 lg:pr-16">
    <div class="relative flex items-center justify-between">
      <div class="px-4 flex">
        <div x-data="{ hamburger: false }">
          <button x-data class="text-gray-500 w-10 h-10 relative focus:outline-none" @click="hamburger = !hamburger; $dispatch('hide')">
              <div class="block w-5 absolute left-1/2 top-1/2   transform  -translate-x-1/2 -translate-y-1/2">
                  <span aria-hidden="true" class="block absolute h-0.5 w-5 bg-current transform transition duration-500 ease-in-out" :class="{'rotate-45': hamburger,' -translate-y-1.5': !hamburger }"></span>
                  <span aria-hidden="true" class="block absolute  h-0.5 w-5 bg-current   transform transition duration-500 ease-in-out" :class="{'opacity-0': hamburger } "></span>
                  <span aria-hidden="true" class="block absolute  h-0.5 w-5 bg-current transform  transition duration-500 ease-in-out" :class="{'-rotate-45': hamburger, ' translate-y-1.5': !hamburger}"></span>
              </div>
          </button>
        </div> 
      
        <a href="/" class="flex items-center">
          <img src="assets/images/logo.png" class="mr-3 h-6 sm:h-9" alt="Logo">
          <span class="text-teal-500 self-center text-xl font-semibold whitespace-nowrap dark:text-white">{{ config('app.name') }}</span>
        </a>
      </div>
      <div class="flex items-center px-4 mr-10">
        <button id="hamburger" name="hamburger" type="button" class="absolute right-4 block lg:hidden">
          <span class="hamburger-line origin-top-left transition duration-300 ease-in-out"></span>
          <span class="hamburger-line transition duration-300 ease-in-out"></span>
          <span class="hamburger-line origin-bottom-left transition duration-300 ease-in-out"></span>
        </button>

        <nav
          id="nav-menu"
          class="absolute right-4 top-full hidden w-full max-w-[250px] rounded-lg bg-white py-5 shadow-lg lg:static lg:block lg:max-w-full lg:rounded-none lg:bg-transparent lg:shadow-none "
        >
          <ul class="block lg:flex">
            <li class="group">
              <a href="{{ route('service') }}" class="mx-5 flex py-2 text-base text-teal-800 group-hover:text-teal-500 ">Service</a>
            </li>
            <li class="group">
              <a href="{{ route('forum') }}" class="mx-5 flex py-2 text-base text-teal-800 group-hover:text-teal-500 ">Forum</a>
            </li>
            <li class="group">
              <a href="{{ route('about') }}" class="mx-5 flex py-2 text-base text-teal-800 group-hover:text-teal-500 ">About</a>
            </li>
            @if (!Auth::check())
            <li class="group">
              <a href="{{ route('login') }}" class="mx-5 flex py-2 text-base text-teal-800 group-hover:text-teal-500 ">Login</a>
            </li>
            @else
            <li class="group">
              <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="mx-5 flex py-2 text-base text-teal-800 group-hover:text-teal-500 ">Logout</a>
            </li>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
            </form>
            @endif
          </ul>
        </nav>
      </div>
    </div>
  </div>
</nav>
