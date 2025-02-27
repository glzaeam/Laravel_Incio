<x-app-layout>
    <x-slot name="header">
        <h2 class="fw-semibold text-xl text-dark leading-tight">
            {{ __('Edit Event') }}
        </h2>
    </x-slot>

    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <form method="POST" action="{{ route('events.update', $event) }}">
                            @csrf
                            @method('PUT')

                            <div class="mb-3">
                                <label for="title" class="form-label">{{ __('Title') }}</label>
                                <input id="title" class="form-control" type="text" name="title" value="{{ old('title', $event->title) }}" required autofocus>
                            </div>

                            <div class="mb-3">
                                <label for="description" class="form-label">{{ __('Description') }}</label>
                                <textarea id="description" name="description" class="form-control" rows="4">{{ old('description', $event->description) }}</textarea>
                            </div>

                            <div class="mb-3">
                                <label for="date" class="form-label">{{ __('Start Date') }}</label>
                                <input id="date" class="form-control" type="datetime-local" name="date" value="{{ old('date', $event->date->format('Y-m-d\TH:i')) }}" required>
                            </div>

                            <div class="mb-3">
                                <label for="end_date" class="form-label">{{ __('End Date') }}</label>
                                <input id="end_date" class="form-control" type="datetime-local" name="end_date" value="{{ old('end_date', $event->end_date ? $event->end_date->format('Y-m-d\TH:i') : '') }}">
                            </div>

                            <div class="mb-3">
                                <label for="location" class="form-label">{{ __('Location') }}</label>
                                <input id="location" class="form-control" type="text" name="location" value="{{ old('location', $event->location) }}" required>
                            </div>

                            <div class="d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary">{{ __('Update Event') }}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
