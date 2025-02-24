<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Event Details') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="space-y-4">
                        <div>
                            <h3 class="text-lg font-medium">{{ $event->title }}</h3>
                            <p class="text-sm text-gray-500">Start: {{ $event->date->format('M d, Y H:i') }}</p>
                            <p class="text-sm text-gray-500">End: {{ $event->end_date ? $event->end_date->format('M d, Y H:i') : 'N/A' }}</p>
                        </div>

                        <div>
                            <p class="text-gray-700">{{ $event->description }}</p>

                        </div>

                        <div>
                            <p class="text-sm text-gray-600">Location: {{ $event->location }}</p>
                        </div>

                        <div class="flex space-x-4 mt-6">
                            <x-primary-button>
                                <a href="{{ route('events.edit', $event) }}">Edit</a>
                            </x-primary-button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
