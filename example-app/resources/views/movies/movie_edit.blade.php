@extends('layout')

@section('title', 'Edit Movie')

@section('content')
    <div class="row">
        <form action="{{ route('movie.edit', ['movie' => $movie->id]) }}" method="post">
            @csrf
            <div class="form-group">
                <label for="title">{{ __('validation.attributes.name') }}</label>

                @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="date">{{ __('validation.attributes.date') }}</label>

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

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection

