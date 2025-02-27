<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight text-center">
            {{ __('Events') }}
        </h2>
    </x-slot>

    <div class="container py-5">
        <div class="card shadow-sm p-4">
            <div class="d-flex justify-content-end mb-3">
                <a href="{{ route('events.create') }}" class="btn btn-primary">Create New Event</a>
            </div>
            
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead class="table-dark">
                        <tr>
                            <th>Title</th>
                            <th>Start Date</th>
                            <th>End Date</th>
                            <th>Location</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($events as $event)
                        <tr>
                            <td>{{ $event->title }}</td>
                            <td>{{ $event->date->format('M d, Y H:i') }}</td>
                            <td>{{ $event->end_date ? $event->end_date->format('M d, Y H:i') : 'N/A' }}</td>
                            <td>{{ $event->location }}</td>
                            <td class="text-center">
                                <a href="{{ route('events.show', $event) }}" class="btn btn-sm btn-info">View</a>
                                <a href="{{ route('events.edit', $event) }}" class="btn btn-sm btn-warning">Edit</a>
                                <form method="POST" action="{{ route('events.destroy', $event) }}" class="d-inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
