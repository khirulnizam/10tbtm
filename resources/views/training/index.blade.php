<x-app-layout>
    <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Listing & Search') }}</h2>
            <form action="{{ route('training.index') }}" method="get">

            <div class="flex">
                <div class="h-screen">
                <!-- Training Search -->
                    <x-text-input id="title" type="text" name="title" class="ml-3 h-20px"/>
                </div>
                <div class="h-screen">
                    <x-primary-button class="ml-3 h-20px">
                        Search
                    </x-primary-button>
                </div>
            </div>

            </form>
        
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    Listing will be here <br>
                    <table class="min-w-full text-left text-sm font-light">
                        <thead
                            class="border-b bg-white font-medium dark:border-neutral-500 dark:bg-neutral-600">
                            <tr>
                            <th scope="col" class="px-6 py-4">#</th>
                            <th scope="col" class="px-6 py-4">Training</th>
                            <th scope="col" class="px-6 py-4">Description</th>
                            <th scope="col" class="px-6 py-4">Trainer</th>
                            <th scope="col" class="px-6 py-4">Show</th>
                            <th scope="col" class="px-6 py-4">Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($trainings as $row)
                            <tr
                            class="border-b bg-neutral-100 dark:border-neutral-500 dark:bg-neutral-700">
                            <td class="whitespace-nowrap px-6 py-4 font-medium">{{ $row->id }}</td>
                            <td class="whitespace-nowrap px-6 py-4">{{ $row->title }}</td>
                            <td class="whitespace-nowrap px-6 py-4">{{ $row->description }}</td>
                            <td class="whitespace-nowrap px-6 py-4">{{ $row->trainer }}</td>
                            <td class="whitespace-nowrap px-6 py-4">
                            <x-primary-button class="ml-3">
                                Show
                            </x-primary-button>
                            </td>
                            <td class="whitespace-nowrap px-6 py-4">
                            <x-primary-button class="ml-3">
                                Edit
                            </x-primary-button>
                            </td>
                            </tr>
                        @endforeach
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
