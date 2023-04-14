@extends('layouts.app')

@section('content')
    <h1>Events</h1>
    @foreach ($events as $event)
        <x-card>
            <p>Title : {{ $event->title }}</p>
            <p>Description : {{ $event->description }}</p>
            <p>Location : {{ $event->location }}</p>
            <p>Begin date :{{ $event->start_date }}</p>
            <p>End date : {{ $event->end_date }}</p>
            <p>
                <a href="{{ route('events.show', $event) }}">View</a>
            </p>
        </x-card>
    @endforeach
@endsection
