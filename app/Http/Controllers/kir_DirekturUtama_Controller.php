<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class kir_DirekturUtama_Controller extends Controller
{
    public function index()
    {
        $direkturutama = DB::table('direkturutamas')->get();
        return view('kir.direkturutama.index', compact('direkturutama'));
    }

    public function insert()
    {
        return view('kir.direkturutama.insert');
    }

    public function store(Request $request){
        DB::table('direkturutamas')->insert([
            'nama_aset' => $request->nama_aset,
            'kode_aset' => $request->kode_aset,
            'merk' => $request->merk,
            'ukuran' => $request->ukuran,
            'bahan' => $request->bahan,
            'tahun_pembelian' => $request->tahun_pembelian,
            'harga' => $request->harga,
            'kondisi' => $request->kondisi,
        ]);

        return redirect('/kir/direkturutama');
    }

    public function delete($id){
        DB::table('direkturutamas')->where('id', $id)->delete();
        return redirect('/kir/direkturutama');
    }

    public function search(Request $request){
        $direkturutama = DB::table('direkturutamas')->where('nama_aset', 'like', '%'.$request->search.'%') ->orWhere('kode_aset', 'like', '%'.$request->search.'%')->get();
        return view('kir.direkturutama.index', compact('direkturutama'));
    }

    public function more($id){
        $direkturutama = DB::table('direkturutamas')->where('id', $id)->get();
        return view('kir.direkturutama.more', compact('direkturutama'));
    }
}
