<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }
    
    public function auth(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|string|email:dns',
            'password' => 'required|string',
        ]);

        if(Auth::attempt($credentials)) {
            $request->session()->regenerate();
            //dd("Successfully logged in!");
            return redirect()->intended('/kib-a');
        }

        return back()->with('loginError', 'Login Failed');
    }

    public function logout(Request $request) {
        Auth::logout();
        return redirect('/');
    }
}
