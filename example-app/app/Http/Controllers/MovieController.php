<?php

namespace App\Http\Controllers;

use App\Http\Requests\Movie\CreateMovie;
use App\Http\Requests\Movie\EditMovie;
use App\Models\Actor;
use App\Models\Genre;
use App\Models\Movie;
use App\Models\User;
use App\Services\MovieService;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function __construct(private MovieService $movieService)
    {
    }
    public function createForm(){
        $genres = Genre::all();
        $actors = Actor::all();
        return view('movies.movie_create', compact('genres', 'actors'));
    }
    public function editForm(Movie $movie){
        $genres = Genre::all();
        $actors = Actor::all();
        return view('movies.movie_edit', compact('movie', 'genres', 'actors'));
    }
    public function create( CreateMovie $request){
        $this->movieService->create($request->validated(), $request->user());

        session()->flash('success', trans('messages.movie.success'));
        return redirect()->back();
    }
    public function edit(Movie $movie, EditMovie $request){
        $this->movieService->edit($movie, $request->validated());
        session()->flash('success', 'Movie edited');
        return redirect()->route('movie.show', ['movie' => $movie->id]);
    }
    public function list(){
        $movies = Movie::all();
        return view('movies.movie_list', ['movies' => $movies]);
    }
    public function show(Movie $movie){
        $genres = Genre::all();
        $actors = Actor::all();
        return view('movies.movie_show', compact('movie', 'genres', 'actors'));
    }
    public function delete(Movie $movie){
        $this->movieService->delete($movie);
        session()->flash('success', 'Successfully delete!');
        return redirect()->back();
    }
}
