<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class kir_KantorPantry_Controller extends Controller
{
    public function index()
    {
        $kantorpantry = DB::table('kantorpantries')->get();
        return view('kir.kantorpantry.index', compact('kantorpantry'));
    }

    public function insert()
    {
        return view('kir.kantorpantry.insert');
    }

    public function store(Request $request){
        DB::table('kantorpantries')->insert([
            'nama_aset' => $request->nama_aset,
            'kode_aset' => $request->kode_aset,
            'merk' => $request->merk,
            'ukuran' => $request->ukuran,
            'bahan' => $request->bahan,
            'tahun_pembelian' => $request->tahun_pembelian,
            'harga' => $request->harga,
            'kondisi' => $request->kondisi,
        ]);

        return redirect('/kir/kantorpantry');
    }

    public function delete($id){
        DB::table('kantorpantries')->where('id', $id)->delete();
        return redirect('/kir/kantorpantry');
    }

    public function search(Request $request){
        $kantorpantry = DB::table('kantorpantries')->where('nama_aset', 'like', '%'.$request->search.'%') ->orWhere('kode_aset', 'like', '%'.$request->search.'%')->get();
        return view('kir.kantorpantry.index', compact('kantorpantry'));
    }

    public function more($id){
        $kantorpantry = DB::table('kantorpantries')->where('id', $id)->get();
        return view('kir.kantorpantry.more', compact('kantorpantry'));
    }
}
