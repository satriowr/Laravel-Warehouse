<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class dashboard_Controller extends Controller
{
    public function index()
    {
        $kib_a = DB::table('kib_as')->get();
        $totala = $kib_a->count();

        $kib_b = DB::table('kib_bs')->get();
        $totalb = $kib_b->count();

        $kib_c = DB::table('kib_cs')->get();
        $totalc = $kib_c->count();

        $kib_e = DB::table('kib_es')->get();
        $totale = $kib_e->count();

        $todo = DB::table('todos')->get();
        $totaltodo = $todo->count();

        return view('dashboard', compact('totala', 'totalb', 'totalc', 'totale', 'todo', 'totaltodo'));
    }

    public function todoInsert(Request $request){
        DB::table('todos')->insert([
            'title' => $request->title,
            'description' => $request->description,
            'deadline' => $request->deadline,
        ]);

        return redirect('/dashboard');
    }

    public function todoDelete($id){
        DB::table('todos')->where('id', $id)->delete();
        return redirect('/dashboard');
    }
}
