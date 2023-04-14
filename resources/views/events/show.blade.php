@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $event->title }}</h1>
        <p><strong>Description:</strong> {{ $event->description }}</p>
        <p><strong>Start Date:</strong> {{ $event->start_date }}</p>
        <p><strong>End Date:</strong> {{ $event->end_date }}</p>
        <p><strong>Location:</strong> {{ $event->location }}</p>
        <div class="mt-3">
            <a href="{{ route('events.index') }}" class="btn btn-secondary">Back</a>
            @if(Auth::user()->role!='user')
            <a href="{{ route('events.edit', $event->id) }}" class="btn btn-primary">Edit</a>
            <form action="{{ route('events.destroy', $event->id) }}" method="POST" style="display: inline-block;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this event?')">Delete</button>
            </form>
            @endif
        </div>
    </div>
@endsection
