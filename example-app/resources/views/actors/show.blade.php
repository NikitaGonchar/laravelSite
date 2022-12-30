@extends('layout')

@section('title', 'Show actor')

@section('content')

    <h3>{{ $actor->name }}</h3>
    <h3>{{ $actor->surname }}</h3>
    <h3>{{ $actor->patronymic}}</h3>
    <p>{{ $actor->data}}</p>
    <p>{{ $actor->height }}</p>
@endsection
