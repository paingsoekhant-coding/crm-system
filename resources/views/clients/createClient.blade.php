<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Client Page') }}
        </h2>
    </x-slot>

    <div class="py-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="">
                <a href="{{ route('client.index') }}">
                    <button class="bg-teal-500 my-2 rounded-md p-2 text-white">Client Lists</button>
                </a>
            </div>
            <form action="" method="">
                <div class="space-y-12">
                    <div class="border-b border-gray-900/10 pb-12">

                        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                            <div class="sm:col-span-4">
                                <label for="username" class="block text-sm/6 font-medium text-gray-900">Client
                                    Name</label>
                                <div class="mt-2">
                                    <div class="flex items-center rounded-md bg-white ">
                                        <input type="text" name="clientName"
                                            class="block rounded-md min-w-0 grow py-1.5 pl-1 pr-3 text-base text-gray-900 placeholder:text-gray-400 focus:outline focus:outline-0 sm:text-sm/6"
                                            placeholder="Enter CLient Name ... ">
                                    </div>
                                </div>
                            </div>

                            <div class="sm:col-span-4">
                                <label for="username" class="block text-sm/6 font-medium text-gray-900">Company
                                    Name</label>
                                <div class="mt-2">
                                    <div class="flex items-center rounded-md bg-white ">
                                        <input type="text" name="companyName"
                                            class="block rounded-md min-w-0 grow py-1.5 pl-1 pr-3 text-base text-gray-900 placeholder:text-gray-400 focus:outline focus:outline-0 sm:text-sm/6"
                                            placeholder="Enter Company Name ... ">
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
                <div class="mt-6 flex items-center justify-end gap-x-6">
                    {{-- <button type="button" class="text-sm/6 font-semibold text-gray-900">Cancel</button> --}}
                    <button type="submit"
                        class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Create</button>
                </div>
            </form>
        </div>



    </div>

    {{-- <input type="text" name="username" id="username"
        class="block min-w-0 grow py-1.5 pl-1 pr-3 text-base text-gray-900 placeholder:text-gray-400  sm:text-sm/6"
        placeholder="janesmith"> --}}

</x-app-layout>
