<?php

namespace App\Http\Controllers;

use App\Http\Requests\User\SignInRequest;
use App\Listeners\UserLoggedIn;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class SignInController extends Controller
{
    public function signInForm()
    {
        return view('sign-in');
    }

    public function signIn(SignInRequest $request)
    {
        $credentials = $request->validated();

//        $check = function ($user) {
//            return $user->email_verified_at !== null;
//        };
        if (Auth::attempt($credentials)) {
            $user = auth()->user();
            $event = new \App\Events\UserLoggedIn($user, $request);
            event($event);
            session()->flash('success', 'Signed In');
            return redirect(route('main'));
        }
        session()->flash('error', 'The provided credentials are incorrect');

        return redirect()->route('signin.form');
    }

    public function logout()
    {
        Auth::logout();
        return redirect(route('signin'));
    }
}
