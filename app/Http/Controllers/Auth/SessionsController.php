<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; 
use Illuminate\Validation\Rules\Password as PasswordRule;

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
        $attributes = $request->validate([
            'email'    => ['required', 'email', 'string', 'max:255'],
            'password' => ['required', 'string',PasswordRule::default()], 
        ]);

        if (Auth::attempt($attributes)){
            $request->session()->regenerate();


            return redirect('/ideas');
        } 
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records',
        ]);
    }
    /**
     * Log the user out (destroying the session).
     */
    public function destroy() 
    {
        Auth::logout();
        
        return redirect('/ideas');
    }
}