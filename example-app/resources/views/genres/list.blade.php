@extends('layout')

@section('title', 'Genre List')

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
        @foreach($genres as $genre)
            <tr>
                <th scope="row">{{ $genre->id }}</th>
                <td>{{ $genre->name }}</td>
                <td>{{ $genre->created_at?->format('Y/m/d') }}</td>
                <td>
<<<<<<< HEAD

                    <a href="{{route('genre.show', ['genre' => $genre->id])}}">Show</a>
                    <br>
                    @can('edit', $genre)
                    <a href="{{route('genre.edit.form', ['genre' => $genre->id])}}">Edit</a>
                    @endcan
                    <br>
                    @can('delete', $genre)
=======
                    <a href="{{route('genre.show', ['genre' => $genre->id])}}">Show</a>
                    <br>
                    <a href="{{route('genre.edit.form', ['genre' => $genre->id])}}">Edit</a>
                    <br>
>>>>>>> master
                    <form action="{{route('genre.delete', ['genre' => $genre->id])}}" method="post">
                        @csrf
                        <button type="submit" class="btn btn-outline-danger">
                            Delete
                        </button>
                    </form>
<<<<<<< HEAD
                    @endcan
=======
>>>>>>> master
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{--    <div class="d-flex justify-content-center"></div>--}}
    {{--    {!! $movies->links() !!}--}}
@endsection

