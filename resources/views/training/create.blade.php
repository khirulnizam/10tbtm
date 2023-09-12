<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Create Training Record') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    
                <form method="POST" action="{{ route('training.store') }}">
                    @csrf

                    <!-- Training Title -->
                    <div>
                        <x-input-label for="title" :value="__('Title')" />
                        <x-text-input id="title" class="block mt-1 w-full" type="text" name="title" required />
                    </div>

                    <!-- Training Description -->
                    <div>
                        <x-input-label for="description" :value="__('Description')" />
                        <x-text-input id="description" class="block mt-1 w-full" type="text" name="description" required />
                    </div>

                    <!-- Trainer -->
                    <div>
                        <x-input-label for="trainer" :value="__('Trainer')" />
                        <x-text-input id="trainer" class="block mt-1 w-full" type="text" name="trainer" required />
                    </div>

                    <!-- Button -->
                    <div class="flex items-center justify-end mt-4">
                        <x-primary-button class="ml-3">
                            {{ __('Insert Training Record') }}
                        </x-primary-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
