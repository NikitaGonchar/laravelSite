<?php

namespace App\Http\Controllers;

use App\Http\Requests\Movie\CreateMovie;
use App\Http\Requests\Movie\EditMovie;
<<<<<<< HEAD
=======
use App\Models\Actor;
use App\Models\Genre;
>>>>>>> newhw21
use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function createForm()
    {
<<<<<<< HEAD
        return view('movies.movie_create');
=======
        $genres = Genre::all();
        $actors = Actor::all();
        return view('movies.movie_create', compact('genres', 'actors'));
>>>>>>> newhw21
    }

    public function editForm(Movie $movie)
    {
<<<<<<< HEAD
        return view('movies.movie_edit', compact('movie'));
=======
        $genres = Genre::all();
        $actors = Actor::all();
        return view('movies.movie_edit', compact('movie', 'genres', 'actors'));
>>>>>>> newhw21
    }

    public function create(CreateMovie $request)
    {
        $data = $request->validated();
        $movie = new Movie($data);
<<<<<<< HEAD
        $movie->save();

=======
        $user = $request->user();
        $movie->user()->associate($user);

        $movie->save();

        $movie->genres()->attach($data['genres']);
        $movie->actors()->attach($data['actors']);

>>>>>>> newhw21
        session()->flash('success', trans('messages.movie.success'));
        return redirect()->back();
    }

    public function edit(Movie $movie, EditMovie $request)
    {
        $data = $request->validated();
        $movie->fill($data);
<<<<<<< HEAD
=======
        $movie->genres()->sync($data['genres']);
        $movie->actors()->sync($data['actors']);
>>>>>>> newhw21
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
<<<<<<< HEAD
        return view('movies.movie_show', compact('movie'));
=======
        $genres = Genre::all();
        $actors = Actor::all();
        return view('movies.movie_show', compact('movie', 'genres', 'actors'));
>>>>>>> newhw21
    }

    public function delete(Movie $movie)
    {
        $movie->delete();

        session()->flash('success', 'Successfully delete!');
        return redirect()->back();
    }
}
