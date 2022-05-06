<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class kib_C_Controller extends Controller
{
    public function index()
    {
        $kib_c = DB::table('kib_cs')->get();
        return view('kib-c.kib_C', compact('kib_c'));
    }
}
