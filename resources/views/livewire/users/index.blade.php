<div class="md:container md:mx-auto">
    {{-- Care about people's approval and you will be their prisoner. --}}
    <div class="m-3">
        <div class="px-5">
            <button onclick="addService()" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add Service</button>
        </div>
        <script>
            async function addService() {
                const { value: formValues } = await Swal.fire({
                    title: 'Tambah Penguna Service',
                    html:
                        '<input id="email" class="swal2-input" placeholder="Email">' +
                        '<input id="name" class="swal2-input" placeholder="Name">' +
                        '<input id="password" class="swal2-input" placeholder="Password">',
                    focusConfirm: false,
                    showCancelButton: true,
                    preConfirm: () => {
                        return [
                            document.getElementById('email').value,
                            document.getElementById('name').value,
                            document.getElementById('password').value
                        ]
                    }
                })
                if (formValues) {
                    livewire.emit('addService', formValues[0], formValues[1], formValues[2])
                }
            }

        </script>
        <div data-aos="fade-up" data-aos-duration="1000">
            {{ $this->table }}

        </div>
    </div>
</div>
