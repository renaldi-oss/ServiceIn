<div class="antialiased mx-auto max-w-screen-xl h-screen mt-5">  
    {{-- Chat --}}
    <div class="space-y-4 overflow-auto max-h-[65vh] scrollbar">
        {{-- item per chat --}}
      <div class="flex bg-blue-300">
        <div class="flex-shrink-0 mr-3">
          <img class="mt-2 rounded-full w-8 h-8 sm:w-10 sm:h-10" src="https://images.unsplash.com/photo-1604426633861-11b2faead63c?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=200&h=200&q=80" alt="">
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
      <div class="sticky bottom-4 rounded-lg bg-blue-700 w-full h-fit">
        <form action="">
          <input
          class="w-full rounded-xl border-2 border-gray-200 outline-none focus:border-indigo-500"
          type="text"
          placeholder="Please Be Responsiple :)"
          />
          <button type="button" class="display:none" autofocus></button>
          </form>
      </div>
    </div>
  </div>
