@extends('layouts.app')

@section('content')
    <h1>Events</h1>
    <a href="{{ route('events.create') }}">Create new event</a>
    <table>
        <thead>
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th>Location</th>
                <th>Start date</th>
                <th>End date</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($events as $event)
                <tr>
                    <td>{{ $event->title }}</td>
                    <td>{{ $event->description }}</td>
                    <td>{{ $event->location }}</td>
                    <td>{{ $event->start_date }}</td>
                    <td>{{ $event->end_date }}</td>
                    <td>
                        <a href="{{ route('events.show', $event) }}">View</a>
                        <a href="{{ route('events.edit', $event) }}">Edit</a>
                        <form method="POST" action="{{ route('events.destroy', $event) }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
