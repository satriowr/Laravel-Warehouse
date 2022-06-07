<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class kir_Bizpark_Controller extends Controller
{
    public function index()
    {
        $bizpark = DB::table('bizparks')->get();
        return view('kir.Bizpark.index', compact('bizpark'));
    }

    public function insert()
    {
        return view('kir.Bizpark.insert');
    }

    public function store(Request $request){
        DB::table('bizparks')->insert([
            'nama_aset' => $request->nama_aset,
            'kode_aset' => $request->kode_aset,
            'merk' => $request->merk,
            'ukuran' => $request->ukuran,
            'bahan' => $request->bahan,
            'tahun_pembelian' => $request->tahun_pembelian,
            'harga' => $request->harga,
            'kondisi' => $request->kondisi,
        ]);

        return redirect('/kir/bizpark');
    }

    public function delete($id){
        DB::table('bizparks')->where('id', $id)->delete();
        return redirect('/kir/bizpark');
    }

    public function search(Request $request){
        $bizpark = DB::table('bizparks')->where('nama_aset', 'like', '%'.$request->search.'%') ->orWhere('kode_aset', 'like', '%'.$request->search.'%')->get();
        return view('kir.Bizpark.index', compact('bizpark'));
    }

    public function more($id){
        $bizpark = DB::table('bizparks')->where('id', $id)->get();
        return view('kir.Bizpark.more', compact('bizpark'));
    }
}
