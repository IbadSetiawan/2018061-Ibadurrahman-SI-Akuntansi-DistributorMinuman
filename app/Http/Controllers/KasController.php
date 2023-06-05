<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Dompdf\Dompdf;

class KasController extends Controller
{
    public function index9()
    {
        $kas = DB::table('kas_bank')->get();
    	return view('Kas_Bank/kas',['kas' => $kas]);
    }

    public function kas_store (Request $request)
    {
        DB::table('kas_bank')-> insert ([
            'kode_unik'=>$request->kode_unik,
            'id_pengeluaran'=>$request->id_pengeluaran,
            'id_pemasukan'=>$request->id_pemasukan,
            'deskripsi'=>$request->deskripsi,
            'kas_keluar'=>$request->kas_keluar,
            'kas_masuk'=>$request->kas_masuk,
            'total'=>$request->total,
            'tanggal'=>$request->tanggal,
        ]);
        return redirect('/kas');
    }

    public function kas_tambah()
    {
        $pengeluaran= DB::table('pengeluaran')->get();
        $pemasukan= DB::table('pemasukan')->get();
        return view('Kas_Bank/kas_tambah',['pengeluaran' => $pengeluaran, 'pemasukan' => $pemasukan]);
    }

    public function kas_edit($kode_unik)
    {
        $kas = DB::table('kas_bank')->where('kode_unik','=',$kode_unik)->get();
        $pengeluaran= DB::table('pengeluaran')->get();
        $pemasukan= DB::table('pemasukan')->get();
        return view('Kas_Bank/kas_edit',['kas' => $kas, 'pengeluaran' => $pengeluaran,'pemasukan' => $pemasukan]);
    }

    public function kas_update(Request $request)
    {
        DB::table('kas_bank')->where('kode_unik',$request->kode_unik)->update([
            'kode_unik'=>$request->kode_unik,
            'id_pengeluaran'=>$request->id_pengeluaran,
            'id_pemasukan'=>$request->id_pemasukan,
            'deskripsi'=>$request->deskripsi,
            'kas_keluar'=>$request->kas_keluar,
            'kas_masuk'=>$request->kas_masuk,
            'total'=>$request->total,
            'tanggal'=>$request->tanggal,
        ]);
        return redirect ('/kas');
    }

    public function kas_hapus($kode_unik)
    {
        DB::table('kas_bank')->where('kode_unik',$kode_unik)->delete();
        return redirect('/kas');
    }

    public function kas_cetak(){
        $kas = DB::table('kas_bank')->get();
        $file = view('Kas_Bank/kas_cetak',['kas' => $kas]);

        $dompdf = new Dompdf();
        $dompdf -> loadHtml($file);
        $dompdf -> setPaper('A4','portrait');
        $dompdf -> render();
        $dompdf -> stream('Data_Kas&Bank.pdf');
    }
}
