<x-app-layout>
    <x-slot name="header">
        <h2 class="fw-semibold text-xl text-dark leading-tight">
            {{ __('Event Details') }}
        </h2>
    </x-slot>

    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h3 class="fw-bold">{{ $event->title }}</h3>
                        <p class="text-muted">Start: {{ $event->date->format('M d, Y H:i') }}</p>
                        <p class="text-muted">End: {{ $event->end_date ? $event->end_date->format('M d, Y H:i') : 'N/A' }}</p>

                        <p class="mt-3">{{ $event->description }}</p>

                        <p class="text-muted"><strong>Location:</strong> {{ $event->location }}</p>

                        <div class="d-flex mt-4">
                            <a href="{{ route('events.edit', $event) }}" class="btn btn-primary">Edit</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
