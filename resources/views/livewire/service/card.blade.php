<div>

  <div class="m-4 flex items-center justify-center">
    <form class="w-1/2" wire:submit.prevent="">   
      <label class="sr-only">Search</label>
      <div class="relative w-full">
          <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
              <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
          </div>
          <input type="text" aria-label="search" wire:model="search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search" required>
      </div>
    </form>
  </div>

{{-- grid card 4 kolom --}}
<div class="grid lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-1 gap-4 m-4">
  {{-- card --}}
  {{-- {{ dd($services) }} --}}
  @foreach ($services as $service)
  <div class="p-6 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
    <div class="flex justify-between items-center mb-5 text-gray-500">
        {{-- TAG SERVIS BLOM BERGUNA --}}
        {{-- <div class="flex gap-1">
          <span class="bg-blue-500 rounded-full text-white text-xs font-medium inline-flex items-center px-2.5 py-0.5 dark:bg-primary-200 dark:text-white">
            <svg class="mr-1 w-3 h-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2 6a2 2 0 012-2h6a2 2 0 012 2v8a2 2 0 01-2 2H4a2 2 0 01-2-2V6zM14.553 7.106A1 1 0 0014 8v4a1 1 0 00.553.894l2 1A1 1 0 0018 13V7a1 1 0 00-1.447-.894l-2 1z"></path></svg>
            TAG
            TAG
          </span>
        </div> --}}
        @if(Cache::has('user-is-online-' . $service->id))
            <span class="text-gray-500 text-sm inline-block relative">
              <i class="fa-solid fa-circle text-emerald-500"></i> 
            ONLINE</span>
        @else
              <span class="text-gray-500">
               <i class="fa-solid fa-circle text-red-600"></i> 
           {{ Carbon\Carbon::parse($service->last_seen)->diffForHumans() }}</span>
        @endif
    </div>
    @if($service->detailService->image != null)
    <img class="object-cover w-full max-h-24 mb-5 rounded-xl" src="{{ asset('./storage/livewire-tmp/'.$service->detailService->image) }}" alt="Image">
    @else
    <img class="object-cover w-full max-h-24 mb-5 rounded-xl" src="https://via.placeholder.com/150/000000/FFFFFF/?text={{ $service->detailService->nama }}" alt="Image">
    @endif
    <h3 class="mb-2 text-lg font-bold tracking-tight text-gray-900 dark:text-white"><a href="#">{{ Str::limit($service->detailService->nama, 20, '...') }}</a></h3>

    <div class="mb-5 font-light text-gray-500 dark:text-gray-400">
      {{ Str::limit($service->detailService->description, 20) }}
    </div>
    <div class="flex justify-between items-center">
        <div class="flex items-center space-x-4">
            <img class="w-7 h-7 rounded-full" src="assets/images/sadboi.png" alt="Avatar">
            <span class="font-medium dark:text-white">
              {{ Str::limit($service->name, 8, '...') }}
            </span>
        </div>
        <a href="{{ route('detailService',$service->detailService->slug) }}" class="inline-flex items-center font-medium text-primary-600 dark:text-white hover:underline">
            <span>More About Us</span>
            <svg class="ml-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
        </a>
    </div>
  </div>
  @endforeach
  {{-- end card --}}
  {{-- paginator --}}
  {{ $services->links() }}
 
</div>

</div>