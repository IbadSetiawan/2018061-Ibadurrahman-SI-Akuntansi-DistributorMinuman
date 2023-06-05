<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Dompdf\Dompdf;

class PembelianController extends Controller
{
    public function index4()
    {
        $pembelian = DB::table('pembelian')->get();
    	return view('Pembelian/pembelian',['pembelian' => $pembelian]);
    }
    public function pembelian_store (Request $request)
    {
        DB::table('pembelian')-> insert ([
            'id_pembelian'=>$request->id_pembelian,
            'id_suplier'=>$request->id_suplier,
            'id_barang'=>$request->id_barang,
            'merk'=>$request->merk,
            'masuk'=>$request->masuk,
            'kas_keluar'=>$request->kas_keluar,
            'tanggal'=>$request->tanggal,
        ]);
        return redirect('/pembelian');
    }
    public function pembelian_tambah()
    {
        $suplier= DB::table('suplier')->get();
        $barang= DB::table('barang')->get();
        return view('Pembelian/pembelian_tambah',['suplier' => $suplier, 'barang' => $barang]);
    }

    public function pembelian_edit($id_pembelian)
    {
        $pembelian = DB::table('pembelian')->where('id_pembelian','=',$id_pembelian)->get();
        $suplier= DB::table('suplier')->get();
        $barang= DB::table('barang')->get();
        return view('Pembelian/pembelian_edit',['suplier' => $suplier, 'barang' => $barang,'pembelian' => $pembelian]);
    }

    public function pembelian_update(Request $request)
    {
        DB::table('pembelian')->where('id_pembelian',$request->id_pembelian)->update([
            'id_pembelian'=>$request->id_pembelian,
            'id_suplier'=>$request->id_suplier,
            'id_barang'=>$request->id_barang,
            'merk'=>$request->merk,
            'masuk'=>$request->masuk,
            'kas_keluar'=>$request->kas_keluar,
            'tanggal'=>$request->tanggal,
        ]);
        return redirect ('/pembelian');
    }

    public function pembelian_hapus($id_pembelian)
    {
        DB::table('pembelian')->where('id_pembelian',$id_pembelian)->delete();
        return redirect('/pembelian');
    }

    public function pembelian_cetak(){
        $pembelian = DB::table('pembelian')->get();
        $file = view('Pembelian/pembelian_cetak',['pembelian' => $pembelian]);

        $dompdf = new Dompdf();
        $dompdf -> loadHtml($file);
        $dompdf -> setPaper('A4','portrait');
        $dompdf -> render();
        $dompdf -> stream('Data_Pembelian.pdf');
    }
}
