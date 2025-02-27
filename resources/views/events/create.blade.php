<x-app-layout>
    <x-slot name="header">
        <h2 class="fw-semibold text-xl text-dark leading-tight">
            {{ __('Create Event') }}
        </h2>
    </x-slot>

    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <form method="POST" action="{{ route('events.store') }}">
                            @csrf

                            <div class="mb-3">
                                <label for="title" class="form-label">{{ __('Title') }}</label>
                                <input id="title" type="text" name="title" class="form-control" required autofocus>
                            </div>

                            <div class="mb-3">
                                <label for="description" class="form-label">{{ __('Description') }}</label>
                                <textarea id="description" name="description" class="form-control" rows="4"></textarea>
                            </div>

                            <div class="mb-3">
                                <label for="date" class="form-label">{{ __('Start Date') }}</label>
                                <input id="date" type="datetime-local" name="date" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label for="end_date" class="form-label">{{ __('End Date') }}</label>
                                <input id="end_date" type="datetime-local" name="end_date" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label for="location" class="form-label">{{ __('Location') }}</label>
                                <input id="location" type="text" name="location" class="form-control" required>
                            </div>

                            <div class="d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary">{{ __('Create Event') }}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>