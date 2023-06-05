<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SuplierController extends Controller
{
    public function index3()
    {
        $suplier = DB::table('suplier')->get();
    	return view('Suplier/suplier',['suplier' => $suplier]);
    }

    public function suplier_store (Request $request)
    {
        DB::table('suplier')-> insert ([
            'id_suplier'=>$request->id_suplier,
            'nama_suplier'=>$request->nama_suplier,
            'no_telp'=>$request->no_telp,
            'perusahaan'=>$request->perusahaan,
            'alamat'=>$request->alamat,
        ]);
        return redirect('/suplier');
    }

    public function suplier_tambah()
    {
        return view('Suplier/suplier_tambah');
    }

    public function suplier_edit($id_suplier)
    {
        $suplier = DB::table('suplier')->where('id_suplier','=',$id_suplier)->get();
        return view('Suplier/suplier_edit',['suplier' => $suplier]);
    }

    public function suplier_update(Request $request)
    {
        DB::table('suplier')->where('id_suplier',$request->id_suplier)->update([
            'id_suplier'=>$request->id_suplier,
            'nama_suplier'=>$request->nama_suplier,
            'no_telp'=>$request->no_telp,
            'perusahaan'=>$request->perusahaan,
            'alamat'=>$request->alamat,
        ]);
        return redirect ('/suplier');
    }

    public function suplier_hapus($id_suplier)
    {
        DB::table('suplier')->where('id_suplier',$id_suplier)->delete();
        return redirect('/suplier');
    }

    public function suplier_Cetak()
    {
        $suplier = DB::table('suplier')->get();
    	return view('Suplier/suplier_cetak',['suplier' => $suplier]);
    }
}
