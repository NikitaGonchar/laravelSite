@extends('layout')

@section('title', 'Actor List')

@section('content')
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Surname</th>
            <th scope="col">Patronymic</th>
            <th scope="col">Height</th>
        </tr>
        </thead>
        <tbody>
        @foreach($actors as $actor)
            <tr>
                <th scope="row">{{ $actor->id }}</th>
                <td>{{ $actor->name }}</td>
                <td>{{ $actor->surname}}</td>
                <td>{{ $actor->patronymic}}</td>
                <td>{{ $actor->Height}}</td>
                <td>
                    <a href="{{route('actor.show', ['actor' => $actor->id])}}">Show</a>
                    <br>
                    <a href="{{route('actor.edit.form', ['actor' => $actor->id])}}">Edit</a>
                    <br>
                    <form action="{{route('actor.delete', ['actor' => $actor->id])}}" method="post">
                        @csrf
                        <button type="submit" class="btn btn-outline-danger">
                            Delete
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{--    <div class="d-flex justify-content-center"></div>--}}
    {{--    {!! $movies->links() !!}--}}
@endsection
