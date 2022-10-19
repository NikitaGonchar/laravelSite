@extends('layout')

@section('title', 'Edit Genre')

@section('content')
    <div class="row">
        <form action="{{ route('genre.edit', ['genre' => $genre->id]) }}" method="post">
            @csrf
            <div class="form-group">
                <label for="title">{{ __('validation.attributes.name') }}</label>
                <input value="{{ old('name', $genre->name) }}" name="name" type="text"
                       class="form-control @error('name') is-invalid @enderror">
                @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection

