<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class kir_HighTower_Controller extends Controller
{
    public function index()
    {
        $highTower = DB::table('high_towers')->get();
        return view('kir.HighTower.index', compact('highTower'));
    }

    public function insert()
    {
        return view('kir.HighTower.insert');
    }

    public function store(Request $request){
        DB::table('high_towers')->insert([
            'nama_aset' => $request->nama_aset,
            'kode_aset' => $request->kode_aset,
            'merk' => $request->merk,
            'ukuran' => $request->ukuran,
            'bahan' => $request->bahan,
            'tahun_pembelian' => $request->tahun_pembelian,
            'harga' => $request->harga,
            'kondisi' => $request->kondisi,
        ]);

        return redirect('/kir/hightower');
    }

    public function delete($id){
        DB::table('high_towers')->where('id', $id)->delete();
        return redirect('/kir/hightower');
    }

    public function search(Request $request){
        $highTower = DB::table('high_towers')->where('nama_aset', 'like', '%'.$request->search.'%') ->orWhere('kode_aset', 'like', '%'.$request->search.'%')->get();
        return view('kir.HighTower.index', compact('highTower'));
    }

    public function more($id){
        $highTower = DB::table('high_towers')->where('id', $id)->get();
        return view('kir.HighTower.more', compact('highTower'));
    }
}
