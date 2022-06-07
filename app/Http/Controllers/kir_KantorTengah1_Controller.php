<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class kir_KantorTengah1_Controller extends Controller
{
    public function index()
    {
        $kantortengah1 = DB::table('kantortengsatus')->get();
        return view('kir.kantorsatu.index', compact('kantortengah1'));
    }

    public function insert()
    {
        return view('kir.kantorsatu.insert');
    }

    public function store(Request $request){
        DB::table('kantortengsatus')->insert([
            'nama_aset' => $request->nama_aset,
            'kode_aset' => $request->kode_aset,
            'merk' => $request->merk,
            'ukuran' => $request->ukuran,
            'bahan' => $request->bahan,
            'tahun_pembelian' => $request->tahun_pembelian,
            'harga' => $request->harga,
            'kondisi' => $request->kondisi,
        ]);

        return redirect('/kir/kantortengah1');
    }

    public function delete($id){
        DB::table('kantortengsatus')->where('id', $id)->delete();
        return redirect('/kir/kantortengah1');
    }

    public function search(Request $request){
        $kantortengah1 = DB::table('kantortengsatus')->where('nama_aset', 'like', '%'.$request->search.'%') ->orWhere('kode_aset', 'like', '%'.$request->search.'%')->get();
        return view('kir.kantorsatu.index', compact('kantortengah1'));
    }

    public function more($id){
        $kantortengah1 = DB::table('kantortengsatus')->where('id', $id)->get();
        return view('kir.kantorsatu.more', compact('kantortengah1'));
    }
}
