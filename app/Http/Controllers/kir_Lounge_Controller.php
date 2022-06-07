<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class kir_Lounge_Controller extends Controller
{
    public function index()
    {
        $lounge = DB::table('lounges')->get();
        return view('kir.lounge.index', compact('lounge'));
    }

    public function insert()
    {
        return view('kir.lounge.insert');
    }

    public function store(Request $request){
        DB::table('lounges')->insert([
            'nama_aset' => $request->nama_aset,
            'kode_aset' => $request->kode_aset,
            'merk' => $request->merk,
            'ukuran' => $request->ukuran,
            'bahan' => $request->bahan,
            'tahun_pembelian' => $request->tahun_pembelian,
            'harga' => $request->harga,
            'kondisi' => $request->kondisi,
        ]);

        return redirect('/kir/lounge');
    }

    public function delete($id){
        DB::table('lounges')->where('id', $id)->delete();
        return redirect('/kir/lounge');
    }

    public function search(Request $request){
        $lounge = DB::table('lounges')->where('nama_aset', 'like', '%'.$request->search.'%') ->orWhere('kode_aset', 'like', '%'.$request->search.'%')->get();
        return view('kir.lounge.index', compact('kantorpantry'));
    }

    public function more($id){
        $lounge = DB::table('lounges')->where('id', $id)->get();
        return view('kir.lounge.more', compact('lounge'));
    }
}
