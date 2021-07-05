<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }

    //when you submit a form you need request object which contains lots of info about the request
    public function store(Request $request)
    {
        // dd(auth()->user());

        // dd($request->get('email')); //same with dd($request->email)
        //3.sign the user in
        //4.redirect
        //1.VALIDATION:validation method
        $this->validate($request, [ //here comes validation rules
            'name' => 'required|max:255',
            'username' => 'required|max:255',
            'email' => 'required|email|max:255',
            'password' => 'required|confirmed'
        ]);

        //2.Store in DB 'this  CREATE method below exists in laravel it will create them in DB' & user comes from models 
        User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password)

        ]);
        //3.sign the user in
        //dd(auth()->user());  this is to check if the user is signed in!
        // auth()->attempt($request->only('email', 'password')); its another method for signing in 
        Auth::attempt([
            'email' => $request->email,
            'password' => $request->password

        ]);

        //4.redirect after user is signed in
        return redirect()->route('dashboard');
    }
}
//