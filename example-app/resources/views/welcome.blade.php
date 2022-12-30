@extends('layout')

@section('title', 'Main')

@section('content')
    <div class="row mt-4">
        <div class="col-md-8">
            @if($movies->isEmpty())
                <h2>Movie not found</h2>
            @endif
            @foreach($movies as $movie)
                <article class="mb-3">
                    <h2 class="mb-1">{{ $movie->name }}</h2>
                    <p>Дата выхода:</p>
                    <p class="mb-1">{{ $movie->data}}
                    <p class="mb-1">
                    <p>Жанры:</p>
                    @foreach($movie->genres as $genre)
                        <span>{{ $genre->name }}</span>
                    @endforeach
                    <p>Актеры:</p>
                    @foreach($movie->actors as $actor)
                        <span>{{ $actor->name }}</span>
                        @endforeach
                </article>
            @endforeach
            <div class="d-flex justify-content-center">
                {!! $movies->links() !!}
            </div>
        </div>
        <div class="col-md-4">
            <ul class="list-unstyled">
                <form action="{{ route('main') }}">
                    <div class="input-group">
                        <input class="form-control" type="text" placeholder="Name" name="name"
                               value="{{ request()->get('name') }}">
                    </div>
                    <div class="input-group">
                        <input class="form-control" type="number" placeholder="Date" name="data"
                               value="{{ request()->get('data') }}">
                    </div>
                    <p>Жанры:</p>
                    @foreach($genres as $genre)
                        <div class="form-check">

                            <input type="checkbox"
                                   name="genres[]"
                                   value="{{ $genre->id }}"
                                   @if(in_array($genre->id, request()->get('genres', [])))
                                   checked
                                @endif
                            > {{ $genre->name }}
                        </div>
                    @endforeach
                    <p>Актеры:</p>
                    @foreach($actors as $actor)
                        <div class="form-check">

                            <input type="checkbox"
                                   name="actors[]"
                                   value="{{ $actor->id }}"
                                   @if(in_array($actor->id, request()->get('actors', [])))
                                   checked
                                @endif
                            > {{ $actor->name }}
                        </div>
                    @endforeach
                    <button class="btn btn-primary">Search</button>
                </form>
            </ul>
        </div>
    </div>
    <h1>Hello world</h1>
@endsection
