<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class todoController extends Controller
{
    public function index()
    {
        return view('todo');
    }
}
