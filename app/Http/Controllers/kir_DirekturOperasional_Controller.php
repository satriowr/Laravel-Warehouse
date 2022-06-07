<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class kir_DirekturOperasional_Controller extends Controller
{
    public function index()
    {
        $direkturoperasional = DB::table('direkturoperasionals')->get();
        return view('kir.direkturoperasional.index', compact('direkturoperasional'));
    }

    public function insert()
    {
        return view('kir.direkturoperasional.insert');
    }

    public function store(Request $request){
        DB::table('direkturoperasionals')->insert([
            'nama_aset' => $request->nama_aset,
            'kode_aset' => $request->kode_aset,
            'merk' => $request->merk,
            'ukuran' => $request->ukuran,
            'bahan' => $request->bahan,
            'tahun_pembelian' => $request->tahun_pembelian,
            'harga' => $request->harga,
            'kondisi' => $request->kondisi,
        ]);

        return redirect('/kir/direkturoperasional');
    }

    public function delete($id){
        DB::table('direkturoperasionals')->where('id', $id)->delete();
        return redirect('/kir/direkturoperasional');
    }

    public function search(Request $request){
        $direkturoperasional = DB::table('direkturoperasionals')->where('nama_aset', 'like', '%'.$request->search.'%') ->orWhere('kode_aset', 'like', '%'.$request->search.'%')->get();
        return view('kir.direkturoperasional.index', compact('direkturoperasional'));
    }

    public function more($id){
        $direkturoperasional = DB::table('direkturoperasionals')->where('id', $id)->get();
        return view('kir.direkturoperasional.more', compact('direkturoperasional'));
    }
}
