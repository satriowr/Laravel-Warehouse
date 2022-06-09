<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class kib_E_Controller extends Controller
{
    public function index()
    {
        $kib_e = DB::table('kib_es')->get();
        $total = $kib_e->count();
        return view('kib-e.kib_E', compact('kib_e' , 'total'));
    }

    public function insert()
    {
        return view('kib-e.kib_E_insert');
    }

    public function store(Request $request){
        //ddd($request);
        DB::table('kib_es')->insert([
            'nama_aset' => $request->nama_aset,
            'kode_aset' => $request->kode_aset,
            'pengarang_buku' => $request->pengarang_buku,
            'penerbit_buku' => $request->penerbit_buku,
            'jumlah' => $request->jumlah,
            'tahun_terbit' => $request->tahun_terbit,
            'asal_usul' => $request->asal_usul,
            'harga' => $request->harga,
            'keterangan' => $request->keterangan,
            'gambar' => $request->file('gambar')->store('post-gambar'),
        ]);

        DB::table('buku_inventaris')->insert([
            'nama_aset' => $request->nama_aset,
            'kode_aset' => $request->kode_aset,
            'pengarang_buku' => $request->pengarang_buku,
            'penerbit_buku' => $request->penerbit_buku,
            'jumlah' => $request->jumlah,
            'tahun_terbit' => $request->tahun_terbit,
            'asal_usul' => $request->asal_usul,
            'harga' => $request->harga,
            'keterangan' => $request->keterangan,
            'gambar' => $request->file('gambar')->store('post-gambar'),
        ]);

        return redirect('/kib-e');
    }

    public function more($id)
    {
        $kib_e = DB::table('kib_es')->where('id', $id)->get();
        return view('kib-e.kib_E_more', compact('kib_e'));
    }

    public function edit($id)
    {
        $kib_e = DB::table('kib_es')->where('id', $id)->get();
        return view('kib-e.kib_E_edit', compact('kib_e'));
    }
    
    public function update(Request $request, $id)
    {
        if ($request->file('gambar') == null) {
            DB::table('kib_es')->where('id', $id)->update([
                'nama_aset' => $request->nama_aset,
                'kode_aset' => $request->kode_aset,
                'pengarang_buku' => $request->pengarang_buku,
                'penerbit_buku' => $request->penerbit_buku,
                'jumlah' => $request->jumlah,
                'tahun_terbit' => $request->tahun_terbit,
                'asal_usul' => $request->asal_usul,
                'harga' => $request->harga,
                'keterangan' => $request->keterangan,
            ]); 
        }else{
            DB::table('kib_es')->where('id', $id)->update([
                'nama_aset' => $request->nama_aset,
                'kode_aset' => $request->kode_aset,
                'pengarang_buku' => $request->pengarang_buku,
                'penerbit_buku' => $request->penerbit_buku,
                'jumlah' => $request->jumlah,
                'tahun_terbit' => $request->tahun_terbit,
                'asal_usul' => $request->asal_usul,
                'harga' => $request->harga,
                'keterangan' => $request->keterangan,
                'gambar' => $request->file('gambar')->store('post-gambar'),
            ]);
        }

        return redirect('/kib-e/more/'.$id);
    }

    public function delete($id)
    {
        DB::table('kib_es')->where('id', $id)->delete();
        return redirect('/kib-e');
    }

    public function search(Request $request)
    {
        $kib_e = DB::table('kib_es')->where('nama_aset', 'like', '%'.$request->search.'%') ->orWhere('kode_aset', 'like', '%'.$request->search.'%')->get();
        $total = $kib_e->count();
        return view('kib-e.kib_E', compact('kib_e' , 'total'));
    }
    
 
}
