<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function login()
    {
        // Validate the user
        $credentials = request()->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        // Attempt to log the user in
        if (!auth()->attempt($credentials)) {
            return back()->withErrors([
                'message' => 'Bad credentials. Please try again'
            ]);
        }

        // Redirect the user to the home page
        return redirect()->route('home')->with('message', 'You are now logged in');

    }

    public function logout()
    {
        auth()->logout();

        return redirect()->route('home');
    }
}
