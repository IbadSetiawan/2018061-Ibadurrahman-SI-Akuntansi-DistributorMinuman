<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Dompdf\Dompdf;

class PemasukanController extends Controller
{
    public function index7()
    {
        $pemasukan = DB::table('pemasukan')->get();
    	return view('Pemasukan/pemasukan',['pemasukan' => $pemasukan]);
    }
    public function pemasukan_store (Request $request)
    {
        DB::table('pemasukan')-> insert ([
            'id_pemasukan'=>$request->id_pemasukan,
            'id_pegawai'=>$request->id_pegawai,
            'id_penjualan'=>$request->id_penjualan,
            'merk'=>$request->merk,
            'kas_masuk'=>$request->kas_masuk,
            'tanggal'=>$request->tanggal,
        ]);
        return redirect('/pemasukan');
    }

    public function pemasukan_tambah()
    {
        $pegawai= DB::table('pegawai')->get();
        $penjualan= DB::table('penjualan')->get();
        return view('Pemasukan/pemasukan_tambah',['pegawai' => $pegawai, 'penjualan' => $penjualan]);
    }

    public function pemasukan_edit($id_pemasukan)
    {
        $pemasukan = DB::table('pemasukan')->where('id_pemasukan','=',$id_pemasukan)->get();
        $pegawai= DB::table('pegawai')->get();
        $penjualan= DB::table('penjualan')->get();
        return view('Pemasukan/pemasukan_edit',['pemasukan' => $pemasukan, 'pegawai' => $pegawai,'penjualan' => $penjualan]);
    }

    public function pemasukan_update(Request $request)
    {
        DB::table('pemasukan')->where('id_pemasukan',$request->id_pemasukan)->update([
            'id_pemasukan'=>$request->id_pemasukan,
            'id_pegawai'=>$request->id_pegawai,
            'id_penjualan'=>$request->id_penjualan,
            'merk'=>$request->merk,
            'kas_masuk'=>$request->kas_masuk,
            'tanggal'=>$request->tanggal,
        ]);
        return redirect ('/pemasukan');
    }

    public function pemasukan_hapus($id_pemasukan)
    {
        DB::table('pemasukan')->where('id_pemasukan',$id_pemasukan)->delete();
        return redirect('/pemasukan');
    }

    public function pemasukan_cetak(){
        $pemasukan = DB::table('pemasukan')->get();
        $file = view('Pemasukan/pemasukan_cetak',['pemasukan' => $pemasukan]);

        $dompdf = new Dompdf();
        $dompdf -> loadHtml($file);
        $dompdf -> setPaper('A4','portrait');
        $dompdf -> render();
        $dompdf -> stream('Data Pemasukan.pdf');
    }
}
