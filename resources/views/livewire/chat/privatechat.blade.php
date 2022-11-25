<div class="container mx-auto shadow-lg rounded-lg">
<!-- Chatting -->
@if (session()->has('success'))
  
@endif
<div class="flex flex-row justify-between bg-white mt-5">
  <!-- chat list -->
    <div class="flex flex-col w-2/5 border-r-2">
        <!-- CARI USER -->
        <div class="border-b-2 px-2">
            <form wire:submit.prevent="cariUser">
                <input wire:model="cariNama" type="text" class="w-full border-2 border-gray-300 p-2 rounded-xl" placeholder="tambahkan ke kontak">
                <button type="button" class="display:none"></button>
            </form>
        </div>
        <!-- end search compt -->
        <!-- user list -->
        <div class="max-h-[80vh] overflow-y-auto scrollbar">
          @foreach ($conversations as $c)
            <?php
            if ($c->user_one != Auth::user()->id){
              $user = App\Models\User::find($c->user_one);
            }else{
              $user = App\Models\User::find($c->user_two);
            }
            ?>
            <div class="flex flex-row py-4 px-2 justify-center items-center border-b-2" >
                <div class="w-1/4">
                    <img
                    src="assets/images/sadboi.png"
                    class="object-cover h-12 w-12 rounded-full"
                    alt="image user"
                    />
                </div>
                <div class="w-full ml-2">
                    <div class="text-lg font-semibold">{{ $user->name }}</div>
                    @if(Cache::has('user-is-online-' . $user->id))
                    <span class="text-gray-500">
                      <i class="fa-solid fa-circle text-emerald-500"></i> 
                    ONLINE</span>
                    @else
                    <span class="text-gray-500">
                      <i class="fa-solid fa-circle text-red-600"></i> 
                      {{ Carbon\Carbon::parse($user->last_seen)->diffForHumans() }}</span>
                    @endif
                </div>
            </div>
          @endforeach
        </div>
        <!-- end user list -->
    </div>
  <!-- end chat list -->
  <!-- message -->
  <?php
    $show = true;
  ?>
  <div class="w-full h-full px-5 flex flex-col justify-between">
    {{-- container jika ada pesan --}}
    @if ($show)
      <div class="flex flex-col mt-5 min-h-[70vh] max-h-[80vh] overflow-auto scrollbar">
        {{-- current user --}}
        <div class="flex justify-end mb-4">
          <div
            class="mr-2 py-3 px-4 bg-blue-400 rounded-bl-3xl rounded-tl-3xl rounded-tr-xl text-white"
          >
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum ullam delectus deleniti natus unde recusandae voluptatibus nesciunt laudantium autem nihil!
          </div>
          <img
          src="assets/images/sadboi.png"
            class="object-cover h-8 w-8 rounded-full"
            alt=""
          />
        </div>
        
        {{-- else --}}
        <div class="flex justify-start mb-4">
          <img
            src="assets/images/sadboi.png"
            class="object-cover h-8 w-8 rounded-full"
            alt=""
          />
          <div
            class="ml-2 py-3 px-4 bg-gray-400 rounded-br-3xl rounded-tr-3xl rounded-tl-xl text-white"
          >
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Exercitationem, earum?
          </div>
        </div>
  
      </div>

    @else
      {{-- container pesan kosong --}}
      <div class="flex flex-col justify-center mt-5 min-h-[70vh] max-h-[80vh] overflow-auto scrollbar">
        <div class="flex flex-col items-center">
          <svg class="w-20 h-20 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"></path></svg>
          <p class="text-xl ">Start Chat With Us</p>
        </div>
      </div>
    @endif

    {{-- input message --}}
    <div class="py-5">
        <form>
            <input
            class="w-full py-5 px-6 rounded-xl border-2 border-gray-200 outline-none focus:border-indigo-500"
            type="text"
            placeholder="Please Be Responsiple :)"
            />
            <button 
            type="button" 
            class="display:none"
            autofocus></button>
        </form>
    </div>
  </div>
  <!-- end message -->
</div>
</div>