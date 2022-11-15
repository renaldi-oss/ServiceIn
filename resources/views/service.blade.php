@extends('layouts.app')

@section('content')
<x-navbar />

<div class="w-full min-h-screen mt-[75px] flex">
    <x-sidebar />
    
    <div class="w-full flex flex-col m-2">
      {{-- header content --}}
      <div class="text-center">
        <h1 class="sm:text-3xl text-2xl font-medium title-font text-gray-900 mb-4">TITLE</h1>
        <p class="text-base leading-relaxed xl:w-2/4 lg:w-3/4 mx-auto text-gray-500s">Description</p>
        {{-- garis --}}
        <div class="flex mt-6 justify-center">
          <div class="w-3/4 h-1 rounded-full bg-blue-500 inline-flex"></div>
        </div>
      </div>
      {{-- SearchBar --}}
      <form class="m-4 flex justify-center">
        <div class="flex w-3/4">
            <select class="w-40 flex-shrink-0 z-10 inline-flex items-start py-2.5 px-4 text-sm font-medium text-start text-gray-900 bg-gray-100 border border-gray-300 rounded-l-lg hover:bg-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:ring-gray-700 dark:text-white dark:border-gray-600">
                <option value="smartphone" selected>Semua Kategori</option>
                <option value="smartphone">Smartphone</option>
                <option value="laptop">Laptop</option>
            </select>
            <div class="relative w-full">
                <input type="search" id="search-dropdown" class="block p-2.5 w-full z-20 text-sm text-gray-900 bg-gray-50 rounded-r-lg border-l-gray-50 border-l-2 border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-l-gray-700  dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:border-blue-500" placeholder="Cari Toko">
                <button type="submit" class="absolute top-0 right-0 p-2.5 text-sm font-medium text-white bg-blue-500 rounded-r-lg border border-blue-500 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    <svg aria-hidden="true" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                    <span class="sr-only">Cari</span>
                </button>
            </div>
        </div>
      </form>
      {{-- Main Content --}}
        <div class="grid grid-cols-4 gap-4 m-4">
          {{--  --}}
          <div class="p-6 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
            <div class="flex justify-between items-center mb-5 text-gray-500">
                
                <div class="flex gap-1">
                  <span class="bg-blue-500 rounded-full text-white text-xs font-medium inline-flex items-center px-2.5 py-0.5 dark:bg-primary-200 dark:text-white">
                    {{-- <svg class="mr-1 w-3 h-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2 6a2 2 0 012-2h6a2 2 0 012 2v8a2 2 0 01-2 2H4a2 2 0 01-2-2V6zM14.553 7.106A1 1 0 0014 8v4a1 1 0 00.553.894l2 1A1 1 0 0018 13V7a1 1 0 00-1.447-.894l-2 1z"></path></svg>
                    TAG --}}
                    TAG
                  </span>
                  <span class="bg-blue-500 rounded-full text-white text-xs font-medium inline-flex items-center px-2.5 py-0.5 dark:bg-primary-200 dark:text-white">
                    {{-- <svg class="mr-1 w-3 h-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2 6a2 2 0 012-2h6a2 2 0 012 2v8a2 2 0 01-2 2H4a2 2 0 01-2-2V6zM14.553 7.106A1 1 0 0014 8v4a1 1 0 00.553.894l2 1A1 1 0 0018 13V7a1 1 0 00-1.447-.894l-2 1z"></path></svg>
                    TAG --}}
                    more tag
                  </span>
                </div>
                <span class="text-sm">DATE</span>
            </div>
            <img class="object-cover w-full h-64 p-2 rounded-xl" src="https://via.placeholder.com/150/000000/FFFFFF/?text=PLACE_HOLDER_TOK" alt="Image">
            <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"><a href="#">Toko Name</a></h2>
      
            <div class="mb-5 font-light text-gray-500 dark:text-gray-400">
                Description
            </div>
            <div class="flex justify-between items-center">
                <div class="flex items-center space-x-4">
                    <img class="w-7 h-7 rounded-full" src="assets/images/sadboi.png" alt="Avatar">
                    <span class="font-medium dark:text-white">
                        Name
                    </span>
                </div>
                <a href="#" class="inline-flex items-center font-medium text-primary-600 dark:text-white hover:underline">
                    Contact us
                    <svg class="ml-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </a>
            </div>
          </div>
        </div>
    </div>
</div>
<x-footer />
@endsection