<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-10">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    Hello {{ Auth::user()->name }} , {{ __('Welcome From CRM System!') }}
                </div>
            </div>
            <div class="flex justify-center  mt-5">
                <div class="card mx-8 w-48  bg-orange-400 rounded-md text-white">
                    <div class="ms-2 p-4 ">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-8 ">
                            <path fill-rule="evenodd"
                                d="M7.5 6a4.5 4.5 0 1 1 9 0 4.5 4.5 0 0 1-9 0ZM3.751 20.105a8.25 8.25 0 0 1 16.498 0 .75.75 0 0 1-.437.695A18.683 18.683 0 0 1 12 22.5c-2.786 0-5.433-.608-7.812-1.7a.75.75 0 0 1-.437-.695Z"
                                clip-rule="evenodd" />
                        </svg>
                        <div class="flex ">
                            <p class="font-bold">Total Users - </p>
                            <h3 class="font-bold ms-4">20</h3>
                        </div>
                    </div>
                </div>
                <div class="card mx-8 w-48  bg-orange-600 rounded-md text-white">
                    <div class="ms-2 p-4">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-8">
                            <path
                                d="M4.5 6.375a4.125 4.125 0 1 1 8.25 0 4.125 4.125 0 0 1-8.25 0ZM14.25 8.625a3.375 3.375 0 1 1 6.75 0 3.375 3.375 0 0 1-6.75 0ZM1.5 19.125a7.125 7.125 0 0 1 14.25 0v.003l-.001.119a.75.75 0 0 1-.363.63 13.067 13.067 0 0 1-6.761 1.873c-2.472 0-4.786-.684-6.76-1.873a.75.75 0 0 1-.364-.63l-.001-.122ZM17.25 19.128l-.001.144a2.25 2.25 0 0 1-.233.96 10.088 10.088 0 0 0 5.06-1.01.75.75 0 0 0 .42-.643 4.875 4.875 0 0 0-6.957-4.611 8.586 8.586 0 0 1 1.71 5.157v.003Z" />
                        </svg>
                        <div class="flex ">
                            <p class="font-bold">Total Clients - </p>
                            <h3 class="font-bold ms-4">20</h3>
                        </div>
                    </div>
                </div>
                <div class="card mx-8 w-48  bg-teal-700 rounded-md text-white">
                    <div class="ms-2 p-4">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-8">
                            <path fill-rule="evenodd"
                                d="M5.625 1.5H9a3.75 3.75 0 0 1 3.75 3.75v1.875c0 1.036.84 1.875 1.875 1.875H16.5a3.75 3.75 0 0 1 3.75 3.75v7.875c0 1.035-.84 1.875-1.875 1.875H5.625a1.875 1.875 0 0 1-1.875-1.875V3.375c0-1.036.84-1.875 1.875-1.875ZM9.75 17.25a.75.75 0 0 0-1.5 0V18a.75.75 0 0 0 1.5 0v-.75Zm2.25-3a.75.75 0 0 1 .75.75v3a.75.75 0 0 1-1.5 0v-3a.75.75 0 0 1 .75-.75Zm3.75-1.5a.75.75 0 0 0-1.5 0V18a.75.75 0 0 0 1.5 0v-5.25Z"
                                clip-rule="evenodd" />
                            <path
                                d="M14.25 5.25a5.23 5.23 0 0 0-1.279-3.434 9.768 9.768 0 0 1 6.963 6.963A5.23 5.23 0 0 0 16.5 7.5h-1.875a.375.375 0 0 1-.375-.375V5.25Z" />
                        </svg>

                        <div class="flex ">
                            <p class="font-bold">Total Projects - </p>
                            <h3 class="font-bold ms-4">20</h3>
                        </div>
                    </div>
                </div>
                <div class="card mx-8 w-48  bg-blue-700 rounded-md text-white">
                    <div class="ms-2 p-4">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-8">
                            <path
                                d="M19.5 21a3 3 0 0 0 3-3v-4.5a3 3 0 0 0-3-3h-15a3 3 0 0 0-3 3V18a3 3 0 0 0 3 3h15ZM1.5 10.146V6a3 3 0 0 1 3-3h5.379a2.25 2.25 0 0 1 1.59.659l2.122 2.121c.14.141.331.22.53.22H19.5a3 3 0 0 1 3 3v1.146A4.483 4.483 0 0 0 19.5 9h-15a4.483 4.483 0 0 0-3 1.146Z" />
                        </svg>

                        <div class="flex ">
                            <p class="font-bold">Total Tasks - </p>
                            <h3 class="font-bold ms-4">20</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
</x-app-layout>
