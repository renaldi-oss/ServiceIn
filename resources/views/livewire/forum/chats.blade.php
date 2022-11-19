<div class="antialiased mx-auto max-w-screen-xl h-screen mt-5">  
    {{-- Chat --}}
    <div class="space-y-4 overflow-auto max-h-[65vh] scrollbar">
        {{-- item per chat --}}
      <div class="flex bg-blue-300">
        <div class="flex-shrink-0 mr-3">
          <img class="mt-2 rounded-full w-8 h-8 sm:w-10 sm:h-10"  src="assets/images/sadboi.png" alt="PHOTO">
        </div>
        <div class="flex-1 border rounded-lg px-4 py-2 sm:px-6 sm:py-4 leading-relaxed">
          <strong>Name</strong> <span class="text-xs text-gray-400">Posted At</span>
          <p class="text-sm">
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatem, omnis.
          </p>
        </div>
      </div>
      {{-- end item per chat --}}
    </div>
    {{-- inputan chat gaes --}}
    <div class="h-screen flex items-end p-8 bg-blue-400">
      <div class="sticky bottom-4 rounded-lg w-full h-fit">
        <form action="">
          <input
          class="w-full rounded-xl border-2 border-gray-200 outline-none focus:border-indigo-500"
          type="text"
          placeholder="Please Be Responsible :)"
          />
          <button type="button" class="display:none" autofocus></button>
          </form>
      </div>
    </div>
  </div>
