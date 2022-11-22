<div class="antialiased mx-auto max-w-screen-xl h-screen mt-5">  
    {{-- Chat --}}
    <div class="space-y-4 overflow-auto max-h-[65vh] scrollbar" id="messages">
        {{-- item per chat --}}
          @foreach ($messages as $m)
            @if (Auth::user()->id == $m->user_id)
              <div class="flex">
                <div class="flex-1 border rounded-lg px-4 py-2 sm:px-6 sm:py-4 leading-relaxed bg-cyan-400">
                  <strong>{{ $m->user->name }}</strong><span class="text-xs text-gray-400"> Posted At : {{Carbon\Carbon::parse($m->created_at)->diffForHumans()  }}</span>
                  <p class="text-sm">
                    {!! $m->message !!}
                  </p>
                </div>
                <div class="flex-shrink-0 ml-3">
                  <img class="mt-2 rounded-full w-8 h-8 sm:w-10 sm:h-10"  src="assets/images/sadboi.png" alt="PHOTO">
                </div>
              </div>
            @else
              <div class="flex ">
                <div class="flex-shrink-0 mr-3">
                  <img class="mt-2 rounded-full w-8 h-8 sm:w-10 sm:h-10"  src="assets/images/sadboi.png" alt="PHOTO">
                </div>
                <div class="flex-1 border rounded-lg px-4 py-2 sm:px-6 sm:py-4 leading-relaxed">
                  <strong>{{ $m->user->name }}</strong><span class="text-xs text-gray-400"> Posted At : {{Carbon\Carbon::parse($m->created_at)->diffForHumans()  }}</span>
                  <p class="text-sm">
                    {!! $m->message !!}
                  </p>
                </div>
              </div>
            @endif
          @endforeach
      {{-- end item per chat --}}
    </div>
    {{-- inputan chat gaes --}}
    <div class="h-screen flex items-end p-8">
      <div class="sticky bottom-4 rounded-lg w-full h-fit">
        <form id="message_form">
          <input
          id="message_input"
          class="w-full rounded-xl border-2 border-gray-200 outline-none focus:border-indigo-500"
          type="text"
          placeholder="Please Be Responsible :)"
          required
          />
          </form>
      </div>
    </div>
</div>