<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware(['guest']);
    }
    public function index()
    {
        return view('auth.login');
    }
    public function store(Request $request)
    {

        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required'
        ]);
        Auth::attempt([
            'email' => $request->email,
            'password' => $request->password

        ]);
        if (!Auth::attempt([
            'email' => $request->email,
            'password' => $request->password
        ], $request->remember)) {
            return back()->with('status', 'Invalid Login Details');
        } else
            return redirect()->route('dashboard');
    }
}
