<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class kir_Kantor2_Controller extends Controller
{
    public function index()
    {
        $kantorDua = DB::table('kantorduas')->get();
        return view('kir.kantordua.index', compact('kantorDua'));
    }

    public function insert()
    {
        return view('kir.kantordua.insert');
    }

    public function store(Request $request){
        DB::table('kantorduas')->insert([
            'nama_aset' => $request->nama_aset,
            'kode_aset' => $request->kode_aset,
            'merk' => $request->merk,
            'ukuran' => $request->ukuran,
            'bahan' => $request->bahan,
            'tahun_pembelian' => $request->tahun_pembelian,
            'harga' => $request->harga,
            'kondisi' => $request->kondisi,
        ]);

        return redirect('/kir/kantor2');
    }

    public function delete($id){
        DB::table('kantorduas')->where('id', $id)->delete();
        return redirect('/kir/kantor2');
    }

    public function search(Request $request){
        $kantorDua = DB::table('kantorduas')->where('nama_aset', 'like', '%'.$request->search.'%') ->orWhere('kode_aset', 'like', '%'.$request->search.'%')->get();
        return view('kir.kantordua.index', compact('kantorDua'));
    }

    public function more($id){
        $kantorDua = DB::table('kantorduas')->where('id', $id)->get();
        return view('kir.kantordua.more', compact('kantorDua'));
    }
}
