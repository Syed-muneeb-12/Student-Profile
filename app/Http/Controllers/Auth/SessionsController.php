<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; //  FIXED: Imported the correct Auth Facade

class SessionsController extends Controller
{
    /**
     * Show the form for logging in (creating a session).
     */
    public function create()
    {
        return view('auth.login');
    }

    /**
     * Handle the incoming login request (storing a session).
     */
    public function store(Request $request)
    {
        // Validate the incoming email and password
        $attributes = $request->validate([
            'email'    => ['required', 'email'],
            'password' => ['required'],
        ]);

        // Attempt to log the user in
        if (Auth::attempt($attributes)) {
            // Regenerate the session to prevent security exploits (session fixation)
            $request->session()->regenerate();

            return redirect('/ideas');
        }

        // If login fails, send them back with an error message
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    /**
     * Log the user out (destroying the session).
     */
    public function destroy() //  FIXED: Removed the 'string $id' requirement
    {
        Auth::logout();
        
        return redirect('/ideas');
    }
}