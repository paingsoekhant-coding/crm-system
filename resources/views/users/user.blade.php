<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('User List Page') }}
        </h2>
    </x-slot>

    <div class="py-10">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div
                class="relative flex flex-col w-full h-full overflow-scroll text-white shadow-md rounded-xl bg-clip-border">
                <table class="w-full text-left table-auto min-w-max bg-indigo-800">
                    <thead>
                        <tr>
                            <th class="p-4 border-b border-blue-gray-100 bg-blue-gray-50">
                                <p
                                    class="block font-sans text-sm antialiased font-bold leading-none text-blue-gray-900 opacity-70">
                                    id
                                </p>
                            </th>
                            <th class="p-4 border-b border-blue-gray-100 bg-blue-gray-50">
                                <p
                                    class="block font-sans text-sm antialiased font-bold leading-none text-blue-gray-900 opacity-70">
                                    Name
                                </p>
                            </th>
                            <th class="p-4 border-b border-blue-gray-100 bg-blue-gray-50">
                                <p
                                    class="block font-sans text-sm antialiased font-bold leading-none text-blue-gray-900 opacity-70">
                                    Email
                                </p>
                            </th>
                            <th class="p-4 border-b border-blue-gray-100 bg-blue-gray-50">
                                <p
                                    class="block font-sans text-sm antialiased font-bold leading-none text-blue-gray-900 opacity-70">
                                    Created Date
                                </p>
                            </th>
                            <th class="p-4 border-b border-blue-gray-100 bg-blue-gray-50">
                                <p
                                    class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">
                                </p>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td class="p-4 border-b border-blue-gray-50">
                                    <p
                                        class="block font-sans text-sm antialiased font-normal leading-normal text-blue-gray-900">
                                        {{ $user->id }}
                                    </p>
                                </td>
                                <td class="p-4 border-b border-blue-gray-50">
                                    <p
                                        class="block font-sans text-sm antialiased font-normal leading-normal text-blue-gray-900">
                                        {{ $user->name }}
                                    </p>
                                </td>
                                <td class="p-4 border-b border-blue-gray-50">
                                    <p
                                        class="block font-sans text-sm antialiased font-normal leading-normal text-blue-gray-900">
                                        {{ $user->email }}
                                    </p>
                                </td>
                                <td class="p-4 border-b border-blue-gray-50">
                                    <p
                                        class="block font-sans text-sm antialiased font-normal leading-normal text-blue-gray-900">
                                        {{ $user->created_at->format('m/d/Y') }}
                                    </p>
                                </td>
                                <td class="p-4 border-b border-blue-gray-50 flex">
                                    <a href="#"
                                        class="block p-2 me-2 font-sans text-sm antialiased hover:bg-cyan-500 font-medium leading-normal text-blue-gray-900 bg-cyan-700 rounded-md">
                                        Edit
                                    </a>
                                    {{-- <a href="#"
                                        class="block p-2 font-sans text-sm antialiased font-medium leading-normal text-blue-gray-900 bg-orange-700 rounded-md">
                                        Delete
                                    </a> --}}
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>


    </div>
</x-app-layout>
