@extends('layout')

@section('title', 'Show genre')

@section('content')

    <h3>{{ $genre->name }}</h3>
    <h4>{{ $genre->created_at?->format('Y/m/d') }}</h4>
@endsection
