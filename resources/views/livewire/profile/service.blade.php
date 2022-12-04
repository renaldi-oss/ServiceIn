<div class="my-10 flex justify-center">
    {{-- Success is as dangerous as failure. --}}
    <div class="w-full max-w-xl p-4 bg-white border border-gray-200 rounded-lg shadow-md sm:p-6 md:p-8 dark:bg-gray-800 dark:border-gray-700">
        <form wire:submit.prevent="updateService" enctype="multipart/form-data">
            {{ $this->form }}
            <div class="flex flex-row-reverse mt-3">
                <button type="submit" class="relative inline-flex items-center justify-center p-0.5 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-cyan-500 to-blue-500 group-hover:from-cyan-500 group-hover:to-blue-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-cyan-200 dark:focus:ring-cyan-800">
                    <span class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                        Update
                    </span>
                </button>
            </div>
        </form>
    </div>
</div>
