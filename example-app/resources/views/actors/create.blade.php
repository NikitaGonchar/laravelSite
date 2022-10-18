@extends('layout')

@section('title', 'Create Actor')

@section('content')
    <div class="row">
        <form action="{{ route('actor.created') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="title">{{ __('validation.attributes.name') }}</label>
                <input value="{{ old('name') }}" name="name" type="text" class="form-control @error('name') is-invalid @enderror">
                @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
             <div class="form-group">
                            <label for="title">{{ __('validation.attributes.surname') }}</label>
                            <input value="{{ old('surname') }}" name="surname" type="text" class="form-control @error('surname') is-invalid @enderror">
                            @error('surname')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
              <div class="form-group">
                             <label for="title">{{ __('validation.attributes.patronymic') }}</label>
                             <input value="{{ old('patronymic') }}" name="patronymic" type="text" class="form-control @error('patronymic') is-invalid @enderror">
                             @error('patronymic')
                             <div class="invalid-feedback">{{ $message }}</div>
                             @enderror
                         </div>
               <div class="form-group">
                             <label for="title">{{ __('validation.attributes.data') }}</label>
                             <input value="{{ old('data') }}" name="data" type="number" class="form-control @error('data') is-invalid @enderror">
                             @error('data')
                             <div class="invalid-feedback">{{ $message }}</div>
                             @enderror
                         </div>
                           <div class="form-group">
                                         <label for="title">{{ __('validation.attributes.height') }}</label>
                                         <input value="{{ old('height') }}" name="height" type="number" class="form-control @error('height') is-invalid @enderror">
                                         @error('height')
                                         <div class="invalid-feedback">{{ $message }}</div>
                                         @enderror
                                     </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
