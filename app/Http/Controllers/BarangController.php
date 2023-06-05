<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Dompdf\Dompdf;

class BarangController extends Controller
{
    public function index6()
    {
        $barang = DB::table('barang')->get();
    	return view('Barang/barang',['barang' => $barang]);
    }
    public function barang_store (Request $request)
    {
        DB::table('barang')-> insert ([
            'id_barang'=>$request->id_barang,
            'id_pegawai'=>$request->id_pegawai,
            'merk'=>$request->merk,
            'harga'=>$request->harga,
            'masuk'=>$request->masuk,
            'keluar'=>$request->keluar,
            'total'=>$request->total,
            'tanggal'=>$request->tanggal,
        ]);
        return redirect('/barang');
    }

    public function barang_tambah()
    {
        $pegawai= DB::table('pegawai')->get();
        return view('Barang/barang_tambah',['pegawai' => $pegawai]);
    }

    public function barang_edit($id_barang)
    {
        $barang = DB::table('barang')->where('id_barang','=',$id_barang)->get();
        $pegawai = DB::table('pegawai')->get();
        return view('Barang/barang_edit',['barang' => $barang,'pegawai' => $pegawai]);
    }

    public function barang_update(Request $request)
    {
        DB::table('barang')->where('id_barang',$request->id_barang)->update([
            'id_barang'=>$request->id_barang,
            'id_pegawai'=>$request->id_pegawai,
            'merk'=>$request->merk,
            'harga'=>$request->harga,
            'masuk'=>$request->masuk,
            'keluar'=>$request->keluar,
            'total'=>$request->total,
            'tanggal'=>$request->tanggal,
        ]);
        return redirect ('/barang');
    }

    public function barang_hapus($id_barang)
    {
        DB::table('barang')->where('id_barang',$id_barang)->delete();
        return redirect('/barang');
    }

    public function barang_cetak(){
        $barang = DB::table('barang')->get();
        $file = view('Barang/barang_cetak',['barang' => $barang]);

        $dompdf = new Dompdf();
        $dompdf -> loadHtml($file);
        $dompdf -> setPaper('A4','portrait');
        $dompdf -> render();
        $dompdf -> stream('Data Barang.pdf');
    }
}
