@extends('layout')

@section('content')

<h2>Top Destinations</h2>

@foreach($destinations as $place)
    <div class="card">
        <h3>{{ $place['name'] }}</h3>
        <p><strong>Location:</strong> {{ $place['location'] }}</p>
        <a href="{{ route('destination.show', $place['id']) }}">View Details</a>
    </div>
@endforeach

@endsection
