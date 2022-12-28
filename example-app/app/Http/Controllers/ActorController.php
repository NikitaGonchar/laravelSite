<?php

namespace App\Http\Controllers;

use App\Http\Requests\Actror\CreateActor;
use App\Http\Requests\Actror\EditActor;
use App\Http\Requests\Genre\CreateGenre;
use App\Http\Requests\Genre\EditGenre;
use App\Models\Actor;
use App\Models\Genre;
use Illuminate\Http\Request;

class ActorController extends Controller
{
    public function createForm()
    {
        return view('actors.create');
    }

    public function editForm(Actor $actor)
    {
        return view('actors.edit', compact('actor'));
    }

    public function create(CreateActor $request)
    {
        $data = $request->validated();
        $actor = new Actor($data);
        $actor->save();
        session()->flash('success', 'Actor added');
        return redirect()->back();
    }

    public function edit(Actor $actor, EditActor $request)
    {
        $data = $request->validated();
        $actor->fill($data);
        $actor->save();
        session()->flash('success', 'Actor edited');
        return redirect()->route('actor.show', ['actor' => $actor->id]);
    }

    public function list()
    {
        $actors = Actor::all();
        return view('actors.list', ['actors' => $actors]);
    }

    public function show(Actor $actor)
    {
        return view('actors.show', compact('actor'));
    }

    public function delete(Actor $actor)
    {
        $actor->delete();

        session()->flash('success', 'Successfully delete!');
        return redirect()->back();
    }
}
