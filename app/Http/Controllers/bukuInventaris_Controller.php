<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class bukuInventaris_Controller extends Controller
{
    public function index(){
        $buku_inventaris = DB::table('buku_inventaris')->get();
        $total = $buku_inventaris->count();
        return view('buku-inventaris.buku_inventaris', compact('buku_inventaris' , 'total'));
    }

    public function search(Request $request){
        $buku_inventaris = DB::table('buku_inventaris')->where('nama_aset', 'like', '%'.$request->search.'%') ->orWhere('kode_aset', 'like', '%'.$request->search.'%')->get();
        $total = $buku_inventaris->count();
        return view('buku-inventaris.buku_inventaris', compact('buku_inventaris', 'total'));
    }

    public function delete($id){
        DB::table('buku_inventaris')->where('id', $id)->delete();
        return redirect('/bukuinventaris');
    }
}
