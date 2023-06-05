<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PegawaiController extends Controller
{
    public function index()
    {
        $pegawai = DB::table('pegawai')->get();
    	return view('Pegawai/pegawai',['pegawai' => $pegawai]);
    }

    public function pegawai_store (Request $request)
    {
        DB::table('pegawai')-> insert ([
            'id_pegawai'=>$request->id_pegawai,
            'nama_pegawai'=>$request->nama_pegawai,
            'alamat'=>$request->alamat,
            'pendidikan'=>$request->pendidikan,
            'no_telp'=>$request->no_telp,
            'jabatan'=>$request->jabatan,
        ]);
        return redirect('/pegawai');
    }

    public function pegawai_tambah()
    {
        return view('Pegawai/pegawai_tambah');
    }

    public function pegawai_edit($id_pegawai)
    {
        $pegawai = DB::table('pegawai')->where('id_pegawai','=',$id_pegawai)->get();
        return view('Pegawai/pegawai_edit',['pegawai' => $pegawai]);
    }

    public function pegawai_update(Request $request)
    {
        DB::table('pegawai')->where('id_pegawai',$request->id_pegawai)->update([
            'id_pegawai'=>$request->id_pegawai,
            'nama_pegawai'=>$request->nama_pegawai,
            'alamat'=>$request->alamat,
            'pendidikan'=>$request->pendidikan,
            'no_telp'=>$request->no_telp,
            'jabatan'=>$request->jabatan,
        ]);
        return redirect ('/pegawai');
    }

    public function pegawai_hapus($id_pegawai)
    {
        DB::table('pegawai')->where('id_pegawai',$id_pegawai)->delete();
        return redirect('/pegawai');
    }

    public function pegawai_Cetak()
    {
        $pegawai = DB::table('pegawai')->get();
    	return view('Pegawai/pegawai_cetak',['pegawai' => $pegawai]);
    }
}
