@extends('layout')

@section('content')

<div class="card">
    <h2>{{ $destination['name'] }}</h2>
    <p><strong>Location:</strong> {{ $destination['location'] }}</p>
    <p>{{ $destination['description'] }}</p>

    <a href="{{ route('home') }}">⬅ Back</a>
</div>

@endsection
