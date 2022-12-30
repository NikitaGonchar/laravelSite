<?php

namespace App\Http\Controllers;

use App\Events\UserRegistered;
use App\Http\Requests\User\SignUpRequest;
use App\Mail\EmailConfirm;
use App\Models\User;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;


class SignUpController extends Controller
{
    public function signForm()
    {
        return view('sign-up');
    }

    public function sign(SignUpRequest $request)
    {
        $data = $request->validated();
        $user = new User($data);
        $user->save();
        $event = new UserRegistered($user);
        event($event);
        // Mail::to($user->email)->send(new EmailConfirm($user));
        session()->flash('success', 'User added');
        return redirect()->back();
    }

    public function verifyEmail(string $id, string $hash, Request $request)
    {
        if (!$request->hasValidSignature()) {
            abort(403);
        }

        $user = User::query()->findOrFail($id);

        if (!hash_equals($hash, sha1($user->email))) {
            abort(403);
        }

        $user->email_verified_at = new DateTime();
        $user->save();

        session()->flash('success', 'Success!');

        return redirect()->route('main');
    }
}
