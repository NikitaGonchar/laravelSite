<?php

namespace App\Http\Controllers;

use App\Models\LoginHistory;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function show(Request $request)
    {
        $logins = LoginHistory::all();
        return view('login-history', compact('logins'));
    }
}
