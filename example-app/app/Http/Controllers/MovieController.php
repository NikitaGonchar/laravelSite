<?php

namespace App\Http\Controllers;

use App\Http\Requests\Movie\CreateMovie;
use App\Http\Requests\Movie\EditMovie;
use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function createForm()
    {
        return view('movies.movie_create');
    }

    public function editForm(Movie $movie)
    {
        return view('movies.movie_edit', compact('movie'));
    }

    public function create(CreateMovie $request)
    {
        $data = $request->validated();
        $movie = new Movie($data);
        $movie->save();

        session()->flash('success', trans('messages.movie.success'));
        return redirect()->back();
    }

    public function edit(Movie $movie, EditMovie $request)
    {
        $data = $request->validated();
        $movie->fill($data);
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
        return view('movies.movie_show', compact('movie'));
    }

    public function delete(Movie $movie)
    {
        $movie->delete();

        session()->flash('success', 'Successfully delete!');
        return redirect()->back();
    }
}
