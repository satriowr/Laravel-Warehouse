<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class registController extends Controller
{
    public function index()
    {
        return view('regist.regist');
    }

    public function store(Request $request){
        $validateData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        $validateData['password'] = bcrypt($request->password);

        $user = User::create($validateData);

        return redirect('/');
    }

    public function password(){
        return view('regist.password');
    }
}
