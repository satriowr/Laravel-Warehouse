<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use DB;


class kib_B_Controller extends Controller
{
    public function index()
    {
        $kib_b = DB::table('kib_bs')->get();
        return view('kib-b.kib_B', compact('kib_b'));
    }

    public function insert(Request $request){
        return view('kib-b.kib_B_insert');
    }

    public function store(Request $request){ 

        //ddd($request);

        DB::table('kib_bs')->insert([
            'nama_aset' => $request->nama_aset,
            'kode_aset' => $request->kode_aset,
            'bahan' => $request->bahan,
            'lokasi' => $request->lokasi,
            'warna' => $request->warna,
            'merk' => $request->merk,
            'tipe' => $request->tipe,
            'tahun' => $request->tahun,
            'jumlah' => $request->jumlah,
            'hps' => $request->hps,
            'no_inventaris_lama' => $request->nomor_inventaris_lama,
            'keterangan' => $request->keterangan,
            'gambar' => $request->file('gambar')->store('post-gambar'),
        ]);

        //Post::create($validateData);

        return redirect('/kib-b');
    }

    public function delete($id){
        DB::table('kib_bs')->where('id', $id)->delete();
        return redirect('/kib-b');
    }

    public function more($id){
        $kib_b = DB::table('kib_bs')->where('id', $id)->get();
        return view('kib-b.kib_B_more', compact('kib_b'));
    }
    
    public function edit($id){
        $kib_b = DB::table('kib_bs')->where('id', $id)->get();
        return view('kib-b.kib_B_edit', compact('kib_b'));
    }

    public function update(Request $request, $id){
        
        if ($request->file('gambar') == null) {
            DB::table('kib_bs')->where('id', $id)->update([
                'nama_aset' => $request->nama_aset,
                'kode_aset' => $request->kode_aset,
                'bahan' => $request->bahan,
                'lokasi' => $request->lokasi,
                'warna' => $request->warna,
                'merk' => $request->merk,
                'tipe' => $request->tipe,
                'tahun' => $request->tahun,
                'jumlah' => $request->jumlah,
                'hps' => $request->hps,
                'no_inventaris_lama' => $request->nomor_inventaris_lama,
                'keterangan' => $request->keterangan,
            ]); 
        }else{
            DB::table('kib_bs')->where('id', $id)->update([
                'nama_aset' => $request->nama_aset,
                'kode_aset' => $request->kode_aset,
                'bahan' => $request->bahan,
                'lokasi' => $request->lokasi,
                'warna' => $request->warna,
                'merk' => $request->merk,
                'tipe' => $request->tipe,
                'tahun' => $request->tahun,
                'jumlah' => $request->jumlah,
                'hps' => $request->hps,
                'no_inventaris_lama' => $request->nomor_inventaris_lama,
                'keterangan' => $request->keterangan,
                'gambar' => $request->file('gambar')->store('post-gambar'),
            ]); 
        }
    
        return redirect('/kib-b/more/'.$id);
        
    }  

    public function search(Request $request){
        $kib_b = DB::table('kib_bs')->where('nama_aset', 'like', '%'.$request->search.'%') ->orWhere('kode_aset', 'like', '%'.$request->search.'%')->get();
        return view('kib-b.kib_B', compact('kib_b'));
    }

    

}
