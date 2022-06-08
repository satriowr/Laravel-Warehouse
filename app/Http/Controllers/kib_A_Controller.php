<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class kib_A_Controller extends Controller
{
    public function index()
    {
        $kib_a = DB::table('kib_as')->get();
        $total = $kib_a->count();
        return view('kib-a.kib_A', compact('kib_a', 'total'));

       
    }

    public function more($id){
        $kib_a = DB::table('kib_as')->where('id', $id)->get();
        return view('kib-a.kib_A_more', compact('kib_a'));
    }

    public function delete($id){
        DB::table('kib_as')->where('id', $id)->delete();
        return redirect('/kib-a');
    }

    public function insert(){
        return view('kib-a.kib_A_insert');
    }

    public function store(Request $request){
        DB::table('kib_as')->insert([
            'nama_aset' => $request->nama_aset,
            'kode_aset' => $request->kode_aset,
            'luas_tanah' => $request->luas_tanah,
            'tahun_pengadaan' => $request->tahun_pengadaan,
            'alamat' => $request->alamat,
            'hak' => $request->hak,
            'tanggal_sertifikat' => $request->tanggal_sertifikat,
            'nomor_sertifikat' => $request->nomor_sertifikat,
            'penggunaan' => $request->penggunaan,
            'asal_usul' => $request->asal_usul,
            'harga' => $request->harga,
            'keterangan' => $request->keterangan,
        ]);

        return redirect('/kib-a');
    }

    public function edit($id){
        $kib_a = DB::table('kib_as')->where('id', $id)->get();
        return view('kib-a.kib_A_edit', compact('kib_a'));
    }

    public function update(Request $request, $id){
        DB::table('kib_as')->where('id', $id)->update([
            'nama_aset' => $request->nama_aset,
            'kode_aset' => $request->kode_aset,
            'luas_tanah' => $request->luas_tanah,
            'tahun_pengadaan' => $request->tahun_pengadaan,
            'alamat' => $request->alamat,
            'hak' => $request->hak,
            'tanggal_sertifikat' => $request->tanggal_sertifikat,
            'nomor_sertifikat' => $request->nomor_sertifikat,
            'penggunaan' => $request->penggunaan,
            'asal_usul' => $request->asal_usul,
            'harga' => $request->harga,
            'keterangan' => $request->keterangan,
        ]);

        return redirect('/kib-a/more/'.$id);
    }

    public function search(Request $request){
        $kib_a = DB::table('kib_as')->where('nama_aset', 'like', '%'.$request->search.'%') ->orWhere('kode_aset', 'like', '%'.$request->search.'%')->get();
        $total = $kib_a->count();
        return view('kib-a.kib_A', compact('kib_a', 'total'));
    }
}
