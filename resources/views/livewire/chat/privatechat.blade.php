<!-- This is an example component -->
<div class="container mx-auto shadow-lg rounded-lg">

<!-- Chatting -->
<div class="flex flex-row justify-between bg-white mt-5">
  <!-- chat list -->
    <div class="flex flex-col w-2/5 border-r-2">
        <!-- CARI USER -->
        <div class="border-b-2 px-2">
            <form action="">
                <input type="text" class="w-full border-2 border-gray-300 p-2 rounded-xl" placeholder="Cari User">
                <button type="button" class="display:none"></button>
            </form>
        </div>
        <!-- end search compt -->
        <!-- user list -->
        <div class="max-h-[80vh] overflow-y-auto scrollbar">
            <div class="flex flex-row py-4 px-2 justify-center items-center border-b-2">
                <div class="w-1/4">
                    <img
                    src="assets/images/sadboi.png"
                    class="object-cover h-12 w-12 rounded-full"
                    alt=""
                    />
                </div>
                <div class="w-full">
                    <div class="text-lg font-semibold">TARGETED ID</div>
                    <span class="text-gray-500">ONLINE/NOT ONLINE</span>
                </div>
            </div>
            <div class="flex flex-row py-4 px-2 justify-center items-center border-b-2">
                <div class="w-1/4">
                    <img
                    src="assets/images/sadboi.png"
                    class="object-cover h-12 w-12 rounded-full"
                    alt=""
                    />
                </div>
                <div class="w-full">
                    <div class="text-lg font-semibold">TARGETED ID</div>
                    <span class="text-gray-500">ONLINE/NOT ONLINE</span>
                </div>
            </div>
            <div class="flex flex-row py-4 px-2 justify-center items-center border-b-2">
                <div class="w-1/4">
                    <img
                    src="assets/images/sadboi.png"
                    class="object-cover h-12 w-12 rounded-full"
                    alt=""
                    />
                </div>
                <div class="w-full">
                    <div class="text-lg font-semibold">TARGETED ID</div>
                    <span class="text-gray-500">ONLINE/NOT ONLINE</span>
                </div>
            </div>
            <div class="flex flex-row py-4 px-2 justify-center items-center border-b-2">
                <div class="w-1/4">
                    <img
                    src="assets/images/sadboi.png"
                    class="object-cover h-12 w-12 rounded-full"
                    alt=""
                    />
                </div>
                <div class="w-full">
                    <div class="text-lg font-semibold">TARGETED ID</div>
                    <span class="text-gray-500">ONLINE/NOT ONLINE</span>
                </div>
            </div>
            <div class="flex flex-row py-4 px-2 justify-center items-center border-b-2">
                <div class="w-1/4">
                    <img
                    src="assets/images/sadboi.png"
                    class="object-cover h-12 w-12 rounded-full"
                    alt=""
                    />
                </div>
                <div class="w-full">
                    <div class="text-lg font-semibold">TARGETED ID</div>
                    <span class="text-gray-500">ONLINE/NOT ONLINE</span>
                </div>
            </div>
            <div class="flex flex-row py-4 px-2 justify-center items-center border-b-2">
                <div class="w-1/4">
                    <img
                    src="assets/images/sadboi.png"
                    class="object-cover h-12 w-12 rounded-full"
                    alt=""
                    />
                </div>
                <div class="w-full">
                    <div class="text-lg font-semibold">TARGETED ID</div>
                    <span class="text-gray-500">ONLINE/NOT ONLINE</span>
                </div>
            </div>
            <div class="flex flex-row py-4 px-2 justify-center items-center border-b-2">
                <div class="w-1/4">
                    <img
                    src="assets/images/sadboi.png"
                    class="object-cover h-12 w-12 rounded-full"
                    alt=""
                    />
                </div>
                <div class="w-full">
                    <div class="text-lg font-semibold">TARGETED ID</div>
                    <span class="text-gray-500">ONLINE/NOT ONLINE</span>
                </div>
            </div>
            <div class="flex flex-row py-4 px-2 justify-center items-center border-b-2">
                <div class="w-1/4">
                    <img
                    src="assets/images/sadboi.png"
                    class="object-cover h-12 w-12 rounded-full"
                    alt=""
                    />
                </div>
                <div class="w-full">
                    <div class="text-lg font-semibold">TARGETED ID</div>
                    <span class="text-gray-500">ONLINE/NOT ONLINE</span>
                </div>
            </div>
            <div class="flex flex-row py-4 px-2 justify-center items-center border-b-2">
                <div class="w-1/4">
                    <img
                    src="assets/images/sadboi.png"
                    class="object-cover h-12 w-12 rounded-full"
                    alt=""
                    />
                </div>
                <div class="w-full">
                    <div class="text-lg font-semibold">TARGETED ID</div>
                    <span class="text-gray-500">ONLINE/NOT ONLINE</span>
                </div>
            </div>
            <div class="flex flex-row py-4 px-2 justify-center items-center border-b-2">
                <div class="w-1/4">
                    <img
                    src="assets/images/sadboi.png"
                    class="object-cover h-12 w-12 rounded-full"
                    alt=""
                    />
                </div>
                <div class="w-full">
                    <div class="text-lg font-semibold">TARGETED ID</div>
                    <span class="text-gray-500">ONLINE/NOT ONLINE</span>
                </div>
            </div>
        </div>
        <!-- end user list -->
    </div>
  <!-- end chat list -->
  <!-- message -->
  <div class="w-full px-5 flex flex-col justify-between">
    {{-- message --}}
    <div class="flex flex-col mt-5 min-h-[70vh] max-h-[80vh] overflow-auto scrollbar">
        {{-- pengirim --}}
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
        {{-- penerima --}}
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
        {{-- penerima --}}
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
        {{-- penerima --}}
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
        {{-- penerima --}}
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
        {{-- penerima --}}
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
        {{-- penerima --}}
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
        {{-- penerima --}}
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
        {{-- penerima --}}
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
    {{-- end message --}}
    {{-- empty message --}}
    {{-- <div class="flex justify-center bg-slate-500 flex-col mt-5 min-h-[70vh] max-h-[80vh] overflow-auto scrollbar">
       <p>start chat now</p>
    </div> --}}

    {{-- input message --}}
    <div class="py-5">
        <form action="">
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