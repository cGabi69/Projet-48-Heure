@extends('layouts.app')

@section('content')
    <h1>Create new event</h1>
    <form method="POST" action="{{ route('events.store') }}">
        @csrf
        <div>
            <label for="title">Title</label>
            <input type="text" name="title" id="title" value="{{ old('title') }}">
            @error('title')
                <div>{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="description">Description</label>
            <textarea name="description" id="description">{{ old('description') }}</textarea>
            @error('description')
                <div>{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="location">Location</label>
            <input type="text" name="location" id="location" value="{{ old('location') }}">
            @error('location')
                <div>{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="start_date">Start date</label>
            <input type="datetime-local" name="start_date" id="start_date" value="{{ old('start_date') }}">
            @error('start_date')
                <div>{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="end_date">End date</label>
            <input type="datetime-local" name="end_date" id="end_date" value="{{ old('end_date') }}">
            @error('end_date')
                <div>{{ $message }}</div>
            @enderror
        </div>
        <button type="submit">Create</button>
    </form>
@endsection
