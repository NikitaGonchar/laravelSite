@extends('layout')

@section('title', 'Show movie')

@section('content')

    <h3>{{ $movie->name }}</h3>

    <h4>{{ $movie->created_at?->format('Y/m/d') }}</h4>
    <p>{!! nl2br(strip_tags($movie->text)) !!}</p>
@endsection
