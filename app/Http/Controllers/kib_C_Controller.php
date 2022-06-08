<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class kib_C_Controller extends Controller
{
    public function index()
    {
        $kib_c = DB::table('kib_cs')->get();
        $total = $kib_c->count();
        return view('kib-c.kib_C', compact('kib_c', 'total'));
    }

    public function insert()
    {
        return view('kib-c.kib_C_insert');
    }

    public function store(Request $request)
    {
        DB::table('kib_cs')->insert([
            'nama_aset' => $request->nama_aset,
            'kode_aset' => $request->kode_aset,
            'kondisi' => $request->kondisi,
            'konstruksi_bertingkat' => $request->konstruksi_bertingkat,
            'konstruksi_beton' => $request->konstruksi_beton,
            'jumlah_lantai' => $request->jumlah_lantai,
            'lokasi' => $request->lokasi,
            'tanggal_dokumen' => $request->tanggal_dokumen,
            'nomor_dokumen' => $request->nomor_dokumen,
            'luas_tanah' => $request->luas_tanah,
            'luas_bangunan' => $request->luas_bangunan,
            'status_tanah' => $request->status_tanah,
            'kode_tanah' => $request->kode_tanah,
            'asal_usul' => $request->asal_usul,
            'harga' => $request->harga,
            'keterangan' => $request->keterangan,

        ]);

        return redirect('/kib-c');
    }

    public function delete($id)
    {
        DB::table('kib_cs')->where('id', $id)->delete();
        return redirect('/kib-c');
    }
    
    public function more($id)
    {
        $kib_c = DB::table('kib_cs')->where('id', $id)->get();
        return view('kib-c.kib_C_more', compact('kib_c'));
    }

    public function edit($id)
    {
        $kib_c = DB::table('kib_cs')->where('id', $id)->get();
        return view('kib-c.kib_C_edit', compact('kib_c'));
    }

    public function update(Request $request, $id)
    {
        DB::table('kib_cs')->where('id', $id)->update([
            'nama_aset' => $request->nama_aset,
            'kode_aset' => $request->kode_aset,
            'kondisi' => $request->kondisi,
            'konstruksi_bertingkat' => $request->konstruksi_bertingkat,
            'konstruksi_beton' => $request->konstruksi_beton,
            'jumlah_lantai' => $request->jumlah_lantai,
            'lokasi' => $request->lokasi,
            'tanggal_dokumen' => $request->tanggal_dokumen,
            'nomor_dokumen' => $request->nomor_dokumen,
            'luas_tanah' => $request->luas_tanah,
            'luas_bangunan' => $request->luas_bangunan,
            'status_tanah' => $request->status_tanah,
            'kode_tanah' => $request->kode_tanah,
            'asal_usul' => $request->asal_usul,
            'harga' => $request->harga,
            'keterangan' => $request->keterangan,
        ]);

        return redirect('/kib-c/more/'.$id);
    }

    public function search(Request $request)
    {
        $kib_c = DB::table('kib_cs')->where('nama_aset', 'like', '%'.$request->search.'%') ->orWhere('kode_aset', 'like', '%'.$request->search.'%')->get();
        $total = $kib_c->count();
        return view('kib-c.kib_C', compact('kib_c', 'total'));
    }

    
}
