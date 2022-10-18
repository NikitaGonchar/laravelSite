@extends('layout')

@section('title', 'Show movie')

@section('content')

    <h3>{{ $movie->name }}</h3>
    <h3>{{ $movie->user->name }}</h3>
    @foreach($movie->genres as $genre)
    <h3>{{ $genre->name}}</h3>
    @endforeach
    @foreach($movie->actors as $actor)
        <h3>{{ $actor->name}}</h3>
        @endforeach
    <h4>{{ $movie->created_at?->format('Y/m/d') }}</h4>
    <p>{!! nl2br(strip_tags($movie->text)) !!}</p>
@endsection
