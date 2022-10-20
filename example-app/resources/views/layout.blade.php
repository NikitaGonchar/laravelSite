<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>App - @yield('title')</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('main') }}">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{route('about')}}">About us</a>
            </li>
            @if(!auth()->check())
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route('signup.create.form')}}">SignUp</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route('signin.form')}}">SignIn</a>
                </li>
            @endif
            @if(auth()->check())
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route('contacts')}}">Contacts</a>
                </li>
                @can('create', \App\Models\Movie::class)
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{route('movie.create')}}">Add movie</a>
                    </li>
                @endcan
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route('movie.list')}}">Movies</a>
                </li>
                @can('create', \App\Models\Genre::class)
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{route('genre.create')}}">Add Genre</a>
                    </li>
                @endcan
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route('genre.list')}}">Genres</a>
                </li>
                @can('create', \App\Models\Actor::class)
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route('actor.create')}}">Add Actor</a>
                </li>
                @endcan
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route('actor.list')}}">Actors</a>
                </li>
            @endif

        </ul>
        @if (auth()->check())
            <form action="{{ route('logout') }}" method="post" class="form-inline">
                @csrf
                <button class="btn btn-danger">Logout</button>
            </form>
        @endif
    </div>
</nav>
<div class="container">
    @include('flash-messages')
    @yield('content')
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
        crossorigin="anonymous"></script>
</body>
</html>
