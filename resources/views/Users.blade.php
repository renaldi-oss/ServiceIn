@extends('layouts.app')

@section('content')
<x-navbar />

<div class="w-full min-h-screen mt-[75px] flex">
    <x-sidebar />
    
    <div class="w-full flex flex-col m-2">
      {{-- header content --}}
      <div class="text-center">
        <h1 class="sm:text-3xl text-2xl font-medium title-font">{{ $title }}</h1>
        <p class="text-base leading-relaxed xl:w-2/4 lg:w-3/4 mx-auto">{{ $description }}</p>
        {{-- garis --}}
        <div class="flex mt-6 justify-center">
          <div class="w-3/4 h-1 rounded-full bg-blue-500 inline-flex"></div>
        </div>
      </div>
      
      {{-- Main Content --}}
      <div class="w-full h-full">
            <livewire:users.index>
      </div>

    </div>
</div>

<x-footer />
@endsection