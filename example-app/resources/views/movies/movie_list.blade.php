@extends('layout')

@section('title', 'Movie List')

@section('content')
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Created At</th>
            <th scope="col">Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($movies as $movie)
            <tr>
<<<<<<< HEAD
                <th scope="row">{{ $movie->user->id }}</th>
=======
<<<<<<< HEAD
                <th scope="row">{{ $movie->id }}</th>
=======
                <th scope="row">{{ $movie->user->id }}</th>
>>>>>>> newhw21
>>>>>>> master
                <td>{{ $movie->name }}</td>
                <td>{{ $movie->created_at?->format('Y/m/d') }}</td>
                <td>
                    <a href="{{route('movie.show', ['movie' => $movie->id])}}">Show</a>
                    <br>
<<<<<<< HEAD
                     @can('edit', $movie)
                    <a href="{{ route('movie.edit.form', ['movie' => $movie->id]) }}">Edit</a>
                    @endcan
                    @can('delete', $movie)
                    <form action="{{ route('movie.delete', ['movie' => $movie->id]) }}" method="post">
                    @csrf
                   <button type="submit" class="btn btn-outline-danger">
                    Delete
                    </button>
                    </form>
                    @endcan
=======
                    <a href="{{route('movie.edit.form', ['movie' => $movie->id])}}">Edit</a>
                    <br>
                    <form action="{{route('movie.delete', ['movie' => $movie->id])}}" method="post">
                        @csrf
                        <button type="submit" class="btn btn-outline-danger">
                            Delete
                        </button>
>>>>>>> master
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
<<<<<<< HEAD
{{--    <div class="d-flex justify-content-center"></div>--}}
{{--    {!! $movies->links() !!}--}}
=======
<<<<<<< HEAD
{{--    <div class="d-flex justify-content-center"></div>--}}
{{--    {!! $movies->links() !!}--}}
=======
    {{--    <div class="d-flex justify-content-center"></div>--}}
    {{--    {!! $movies->links() !!}--}}
>>>>>>> newhw21
>>>>>>> master
@endsection
