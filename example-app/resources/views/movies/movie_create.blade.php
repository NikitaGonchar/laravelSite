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
                <label for="data">{{ __('validation.attributes.data') }}</label>
                <input value="{{ old('data') }}" name="data" type="number" class="form-control @error('data') is-invalid @enderror">
                @error('data')
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
