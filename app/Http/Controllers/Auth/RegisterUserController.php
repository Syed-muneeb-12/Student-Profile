<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;                          // 👈 ADD THIS: Imports the User model
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;         // 👈 ADD THIS: Imports the Auth helper facade
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class RegisterUserController extends Controller
{
    // ... rest of your code remains exactly the same!
    public function create()
    {
        return view('auth.register');
    }
    public function store(Request $request)
    {
        //validate the request
        $request->validate([
            'name'=>['required','string','max:255'],
             'email'=>['required','string','max:255','email','unique:users'],
             'password'=>['required','min:8', Password::default()]
        ]);
        //create the user in the db
         $user= User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password),
        ]);

        //log them in
        Auth::login($user);
        return redirect('/ideas');
        //redirect back to the home
    }
}
