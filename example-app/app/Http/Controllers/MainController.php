<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
use App\Models\Actor;
use App\Models\Genre;
use App\Models\Movie;
=======
>>>>>>> master
use Illuminate\Http\Request;

class MainController extends Controller
{
<<<<<<< HEAD
    public function index(Request $request)
    {
        $query = Movie::query()
            ->with(['user', 'genres', 'actors'])
            ->latest();
        if ($request->has('genres')) {
            $query->whereHas('genres', function ($q) use ($request) {
                $q->whereIn('genres.id', $request->get('genres'));
            });
        }
        if ($request->has('actors')) {
            $query->whereHas('actors', function ($q) use ($request) {
                $q->whereIn('actors.id', $request->get('actors'));
            });
        }
        if ($request->has('name')) {
            $search = '%' . $request->get('name') . '%';
            $query->where(function ($q) use ($search) {
                $q->where('name', 'like', $search);
            });
        }
        if ($request->has('date')) {
            $search = '%' . $request->get('date') . '%';
            $query->where(function ($q) use ($search) {
                $q->where('date', 'like', $search);
            });
        }
        $movies = $query
            ->paginate(1)
            ->appends($request->query());
        $genres = Genre::all();
        $actors = Actor::all();
        return view('welcome', compact('movies', 'genres', 'actors'));
=======
    public function index()
    {
        return view('welcome');
>>>>>>> master
    }

}

