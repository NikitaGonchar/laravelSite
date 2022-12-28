@extends('layout')

@section('title', 'Create Movie')

@section('content')
    <div class="row">
        <form action="{{ route('movie.created') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="title">{{ __('validation.attributes.name') }}</label>
<<<<<<< HEAD
                <input value="{{ old('name') }}" name="name" type="text" class="form-control @error('name') is-invalid @enderror">
=======
                <input value="{{ old('name') }}" name="name" type="text"
                       class="form-control @error('name') is-invalid @enderror">
>>>>>>> newhw21
                @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="date">{{ __('validation.attributes.date') }}</label>
<<<<<<< HEAD
                <input value="{{ old('date') }}" name="date" type="number" class="form-control @error('date') is-invalid @enderror">
=======
                <input value="{{ old('date') }}" name="date" type="number"
                       class="form-control @error('date') is-invalid @enderror">
>>>>>>> newhw21
                @error('date')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="text">{{ __('validation.attributes.text') }}</label>
                <textarea name="text" rows="3"
                          class="form-control @error('text') is-invalid @enderror"
                >{{ old('text') }}</textarea>
                @error('text')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
<<<<<<< HEAD
=======
            <div class="form-group">
                <label for="">Genres</label>
                @error('genres')
                <div>{{ $message }}</div>
                @enderror
                @foreach($genres as $genre)
                    <div class="form-check">
                        <input type="checkbox" name="genres[]" value="{{ $genre->id }}"
                               class="form-check-input"> {{ $genre->name }}
                    </div>
            </div>
            @endforeach
            <div class="form-group">
                <label for="">Actors</label>
                @error('actors')
                <div>{{ $message }}</div>
                @enderror
                @foreach($actors as $actor)
                    <div class="form-check">
                        <input type="checkbox" name="actors[]" value="{{ $actor->id }}"
                               class="form-check-input"> {{ $actor->name }}
                    </div>
            </div>
            @endforeach
>>>>>>> newhw21
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
