<?php

namespace App\Http\Controllers;

use App\Http\Requests\User\SignInRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use function Termwind\render;

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
