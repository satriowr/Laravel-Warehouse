<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class kir_Paseh_Controller extends Controller
{
    public function index()
    {
        $paseh = DB::table('pasehs')->get();
        return view('kir.Paseh.index', compact('paseh'));
    }

    public function insert()
    {
        return view('kir.Paseh.insert');
    }

    public function store(Request $request){
        DB::table('pasehs')->insert([
            'nama_aset' => $request->nama_aset,
            'kode_aset' => $request->kode_aset,
            'merk' => $request->merk,
            'ukuran' => $request->ukuran,
            'bahan' => $request->bahan,
            'tahun_pembelian' => $request->tahun_pembelian,
            'harga' => $request->harga,
            'kondisi' => $request->kondisi,
        ]);

        return redirect('/kir/paseh');
    }

    public function delete($id){
        DB::table('pasehs')->where('id', $id)->delete();
        return redirect('/kir/paseh');
    }

    public function search(Request $request){
        $paseh = DB::table('pasehs')->where('nama_aset', 'like', '%'.$request->search.'%') ->orWhere('kode_aset', 'like', '%'.$request->search.'%')->get();
        return view('kir.Paseh.index', compact('paseh'));
    }

    public function more($id){
        $paseh = DB::table('pasehs')->where('id', $id)->get();
        return view('kir.Paseh.more', compact('paseh'));
    }
}
