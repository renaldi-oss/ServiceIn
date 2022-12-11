@extends('layouts.app')

@section('content')
<x-navbar />

<div class="w-full min-h-screen mt-[75px] flex">
    <x-sidebar />
    
    <div class="w-full flex flex-col m-2">
      {{-- header content --}}
      <div class="text-center">
        <h1 class="sm:text-3xl text-2xl font-medium title-font text-gray-900 mb-4" data-aos="zoom-in-left" data-aos-duration="1000">{{ $title }}</h1>
        @role('service')
        <p class="text-base leading-relaxed xl:w-2/4 lg:w-3/4 mx-auto text-gray-500s" data-aos="zoom-in-right" data-aos-duration="1000">Service</p>
        @else
        <p class="text-base leading-relaxed xl:w-2/4 lg:w-3/4 mx-auto text-gray-500s" data-aos="zoom-in-right" data-aos-duration="1000">Costumer</p>
        @endrole
        {{-- garis --}}
        <div class="flex mt-6 justify-center" data-aos="fade-right" data-aos-duration="1000">
          <div class="w-3/4 h-1 rounded-full bg-blue-500 inline-flex"></div>
        </div>
      </div>
      
      {{-- Main Content --}}
      <div class="w-full h-full">
            @role('service')
                <livewire:profile.service />
            @else
                <livewire:profile.costumer />
            @endrole    
      </div>
    </div>
</div>
<x-footer />
@endsection