<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <script>
        function validate(evt) {
            var theEvent = evt || window.event;

            // Handle paste
            if (theEvent.type === 'paste') {
                key = event.clipboardData.getData('text/plain');
            } else {
                // Handle key press
                var key = theEvent.keyCode || theEvent.which;
                key = String.fromCharCode(key);
            }
            var regex = /[0-9]|\./;
            if (!regex.test(key)) {
                theEvent.returnValue = false;
                if (theEvent.preventDefault) theEvent.preventDefault();
            }
        }
    </script>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 lg:p-8 bg-white border-b border-gray-200">
                    <form action="{{ Route('dashboard.update-setting', $setting->id) }}" method="POST">
                        @csrf
                        <x-application-logo class="block h-12 w-auto" />

                        <h1 class="mt-8 text-2xl font-medium text-gray-900">
                            Manage Website Information
                        </h1>

                        <input type="email" name="email" value="{{ $setting->email }}"
                            class="border border-gray-300 mb-4 mt-5 relative outline-none rounded py-2 px-4 w-full bg-white  text-base text-gray-700 placeholder-gray-400 focus:outline-none focus:shadow-outline"
                            required placeholder="Email" />

                        <input type="text" onkeypress='validate(event)' name="whatsapp" minlength="10" maxlength="13"
                            value="{{ $setting->whatsapp }}"
                            class="border border-gray-300 mb-2 relative outline-none rounded py-2 px-4 w-full bg-white  text-base text-gray-700 placeholder-gray-400 focus:outline-none focus:shadow-outline"
                            required placeholder="Whatsapp" />

                        <div class="flex justify-end">
                            <button
                                class="bg-[#f15b39] w-fit py-2 px-4  text-white font-medium text-xs rounded-md mt-4">
                                Update
                            </button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
