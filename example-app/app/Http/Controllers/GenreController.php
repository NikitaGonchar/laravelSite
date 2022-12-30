<?php

namespace App\Http\Controllers;

use App\Http\Requests\Genre\CreateGenre;
use App\Http\Requests\Genre\EditGenre;
use App\Models\Genre;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    public function createForm()
    {
        return view('genres.create');
    }

    public function editForm(Genre $genre)
    {
        return view('genres.edit', compact('genre'));
    }

    public function create(CreateGenre $request)
    {
        $data = $request->validated();
        $genre = new Genre($data);
        $genre->save();
        session()->flash('success', 'Genre added');
        return redirect()->back();
    }

    public function edit(Genre $genre, EditGenre $request)
    {
        $data = $request->validated();
        $genre->fill($data);
        $genre->save();
        session()->flash('success', 'Genre edited');
        return redirect()->route('genre.show', ['genre' => $genre->id]);
    }

    public function list()
    {
        $genre = Genre::all();
        return view('genres.list', ['genres' => $genre]);
    }

    public function show(Genre $genre)
    {
        return view('genres.show', compact('genre'));
    }

    public function delete(Genre $genre)
    {
        $genre->delete();

        session()->flash('success', 'Successfully delete!');
        return redirect()->back();
    }
}
