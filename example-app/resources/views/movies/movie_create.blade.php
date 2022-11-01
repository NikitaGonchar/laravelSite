@extends('layout')

@section('title', 'Create Movie')

@section('content')
    <div class="row">
        <form action="{{ route('movie.created') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="title">{{ __('validation.attributes.name') }}</label>
                <input value="{{ old('name') }}" name="name" type="text" class="form-control @error('name') is-invalid @enderror">
                @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="date">{{ __('validation.attributes.date') }}</label>
                <input value="{{ old('date') }}" name="date" type="number" class="form-control @error('date') is-invalid @enderror">
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
