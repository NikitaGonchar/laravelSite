@extends('layout')

@section('title', 'Movie List')

@section('content')
    <table class="table">
        <thead>
        <tr>
            <th scope="col">User Id</th>
            <th scope="col">Date</th>
            <th scope="col">Ip</th>
        </tr>
        </thead>
        <tbody>
        @foreach($logins as $login)
            <tr>
                <th scope="row">{{$login->user_id}}</th>
                <td>{{ $login->created_at}}</td>
                <td>{{$login->ip}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection
