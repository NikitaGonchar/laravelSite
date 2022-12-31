<?php

namespace App\Observers;

use App\Jobs\UpdatedMovie;
use App\Mail\UpdateMovie;
use App\Models\Movie;
use App\Models\User;
use Illuminate\Support\Facades\Mail;

class MovieObserver
{
    public function updated(Movie $movie){
        $ifDateChanged = $movie->data !== $movie->getOriginal('data');
        if ($ifDateChanged){
//           $users = User::all()->except($movie->user_id);
//            foreach ($users as $user){
//                Mail::to($user->email)->send(new UpdateMovie());
            UpdatedMovie::dispatch($movie);
        }
    }
}
