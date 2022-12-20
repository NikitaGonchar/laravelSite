@extends('layout')

@section('title', 'Contacts')

@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">Error!</div>
    @endif
    <div class="row">
        <form action="{{ route('contact.report') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="email">{{ __('validation.attributes.email') }}</label>
                <input value="{{ old('email') }}" name="email" type="email" class="form-control @error('email') is-invalid @enderror">
                @error('email')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="text">{{ __('validation.attributes.name') }}</label>
                <input value="{{ old('name') }}" name="name" type="text" class="form-control @error('name') is-invalid @enderror">
                @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="number">{{ __('validation.attributes.phone') }}</label>
                <input value="{{ old('phone') }}" name="phone" type="text" class="form-control @error('phone') is-invalid @enderror">
                @error('phone')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
