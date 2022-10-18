<?php

namespace App\Http\Controllers;

use App\Http\Requests\Movie\CreateMovie;
use App\Http\Requests\Movie\EditMovie;
use App\Models\Actor;
use App\Models\Genre;
use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function createForm()
    {
        $genres = Genre::all();
        $actors = Actor::all();
        return view('movies.movie_create', compact('genres', 'actors'));
    }

    public function editForm(Movie $movie)
    {
        $genres = Genre::all();
        $actors = Actor::all();
        return view('movies.movie_edit', compact('movie', 'genres', 'actors'));
    }

    public function create(CreateMovie $request)
    {
        $data = $request->validated();
        $movie = new Movie($data);
        $user = $request->user();
        $movie->user()->associate($user);

        $movie->save();

        $movie->genres()->attach($data['genres']);
        $movie->actors()->attach($data['actors']);

        session()->flash('success', trans('messages.movie.success'));
        return redirect()->back();
    }

    public function edit(Movie $movie, EditMovie $request)
    {
        $data = $request->validated();
        $movie->fill($data);
        $movie->genres()->sync($data['genres']);
        $movie->actors()->sync($data['actors']);
        $movie->save();
        session()->flash('success', 'Movie edited');
        return redirect()->route('movie.show', ['movie' => $movie->id]);
    }

    public function list()
    {
        $movies = Movie::all();
        return view('movies.movie_list', ['movies' => $movies]);
    }

    public function show(Movie $movie)
    {
        $genres = Genre::all();
        $actors = Actor::all();
        return view('movies.movie_show', compact('movie', 'genres', 'actors'));
    }

    public function delete(Movie $movie)
    {
        $movie->delete();

        session()->flash('success', 'Successfully delete!');
        return redirect()->back();
    }
}
