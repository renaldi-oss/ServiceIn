<div data-aos="fade-up" data-aos-anchor-placement="bottom-bottom">
    {{-- The Master doesn't talk, he acts. --}}
    <section class="text-gray-600 body-font">
        <div class="container px-5 py-24 mx-auto flex flex-col">
          <div class="mx-auto">
            <div class="rounded-lg h-64 overflow-hidden">
              @if($service->image != null)
              <img alt="content" class="object-cover object-center h-full w-full" src="{{ asset('./storage/livewire-tmp/'.$service->image) }}">
              @else
              <img alt="content" class="object-cover object-center h-full w-full" src="https://dummyimage.com/1250x600">
              @endif
            </div>
            <div class="flex items-center text-center justify-center">
              <h2 class="font-medium title-font mt-4 text-gray-900 text-xl">{{ $service->nama }}</h2>
            </div>
            <div class="flex flex-col sm:flex-row mt-10">
              <div class="sm:w-1/3 text-center sm:pr-8 sm:py-8">
                <div class="w-20 h-20 rounded-full inline-flex items-center justify-center bg-gray-200 text-gray-400">
                  <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10" viewBox="0 0 24 24">
                    <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
                    <circle cx="12" cy="7" r="4"></circle>
                  </svg>
                </div>
                <div class="flex flex-col items-center text-center justify-center">
                  <h2 class="font-medium title-font mt-4 text-gray-900 text-lg">{{ $owner->name }}</h2>
                  <div class="w-12 h-1 bg-indigo-500 rounded mt-2 mb-4"></div>
                  <p class="text-base">{{ $service->alamat }}</p>
                  <div class="w-12 h-1 bg-indigo-500 rounded mt-2 mb-4"></div>
                  <p class="text-base">{{ $service->no_hp }}</p>
                </div>
              </div>
              <div class="sm:w-2/3 sm:pl-8 sm:py-8 sm:border-l border-gray-200 sm:border-t-0 border-t mt-4 pt-4 sm:mt-0 text-center sm:text-left">
                <p class="leading-relaxed text-lg mb-4">{{ $service->description }}</p>
                <a class="text-indigo-500 inline-flex items-center">Chat
                  <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                    <path d="M5 12h14M12 5l7 7-7 7"></path>
                  </svg>
                </a>
              </div>
            </div>
          </div>
        </div>
      </section>
</div>
