@extends('layouts.app')

@section('content')
<x-navbar />

<div class="w-full min-h-screen mt-[75px] flex">
    <x-sidebar />
    
    <div class="w-full flex flex-col m-2">
      {{-- header content --}}
      <div class="text-center">
        <h1 class="sm:text-3xl text-2xl font-medium title-font text-gray-400 mb-4">TITLE</h1>
        <p class="text-base leading-relaxed xl:w-2/4 lg:w-3/4 mx-auto text-gray-400">Description</p>
        {{-- garis --}}
        <div class="flex mt-6 justify-center">
          <div class="w-3/4 h-1 rounded-full bg-blue-500 inline-flex"></div>
        </div>
      </div>
      {{-- SearchBar --}}
      {{-- <livewire:service.searchbar/> --}}
      {{-- Main Content card 4 item per row --}}
      {{-- komponent livewire penampil service dalam bentuk card and kawan2 --}}
      <livewire:service.card>
        
    </div>
</div>
<x-footer />
@endsection