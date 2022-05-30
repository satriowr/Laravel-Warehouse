<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class rbi_Controller extends Controller
{
    public function index()
    {
        $rbi = DB::table('rbis')->get();
        return view('rbi.rbi', compact('rbi'));
    }

    public function insert()
    {
        return view('rbi.rbi_insert');  
    }

    public function store(Request $request)
    {
        //dd($request);
        $rbi = DB::table('rbis')->insert([
            'golongan' => $request->golongan,
            'kode_bidang_barang' => $request->kode_bidang_barang,
            'nama_bidang_barang' => $request->nama_bidang_barang,
            'jumlah' => $request->jumlah,
            'harga' => $request->harga,
            'keterangan' => $request->keterangan
        ]);
        return redirect('/rbi');
    }

    public function more($id)
    {
        $rbi = DB::table('rbis')->where('id', $id)->get();
        return view('rbi.rbi_more', compact('rbi'));
    }

    public function edit($id)
    {
        $rbi = DB::table('rbis')->where('id', $id)->get();
        return view('rbi.rbi_edit', compact('rbi'));
    }

    public function update(Request $request, $id)
    {

        DB::table('rbis')->where('id', $id)->update([
            'golongan' => $request->golongan,
            'kode_bidang_barang' => $request->kode_bidang_barang,
            'nama_bidang_barang' => $request->nama_bidang_barang,
            'jumlah' => $request->jumlah,
            'harga' => $request->harga,
            'keterangan' => $request->keterangan
        ]);
        
        return redirect('/rbi/more/'.$id);
    }

    public function delete($id)
    {
        DB::table('rbis')->where('id', $id)->delete();
        return redirect('/rbi');
    }

    public function search(Request $request)
    {
        $rbi = DB::table('rbis')->where('nama_bidang_barang', 'like', '%'.$request->search.'%')->orWhere('kode_aset', 'like', '%'.$request->search.'%')->get();
        return view('rbi.rbi', compact('rbi'));
    }

}
