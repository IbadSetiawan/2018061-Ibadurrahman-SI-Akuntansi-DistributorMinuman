<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Dompdf\Dompdf;

class PengeluaranController extends Controller
{
    public function index8()
    {
        $pengeluaran = DB::table('pengeluaran')->get();
    	return view('Pengeluaran/pengeluaran',['pengeluaran' => $pengeluaran]);
    }

    public function pengeluaran_store (Request $request)
    {
        DB::table('pengeluaran')-> insert ([
            'id_pengeluaran'=>$request->id_pengeluaran,
            'id_pegawai'=>$request->id_pegawai,
            'id_pembelian'=>$request->id_pembelian,
            'merk'=>$request->merk,
            'kas_keluar'=>$request->kas_keluar,
            'tanggal'=>$request->tanggal,
        ]);
        return redirect('/pengeluaran');
    }

    public function pengeluaran_tambah()
    {
        $pegawai= DB::table('pegawai')->get();
        $pembelian= DB::table('pembelian')->get();
        return view('Pengeluaran/pengeluaran_tambah',['pegawai' => $pegawai, 'pembelian' => $pembelian]);
    }

    public function pengeluaran_edit($id_pengeluaran)
    {
        $pengeluaran = DB::table('pengeluaran')->where('id_pengeluaran','=',$id_pengeluaran)->get();
        $pegawai= DB::table('pegawai')->get();
        $pembelian= DB::table('pembelian')->get();
        return view('Pengeluaran/pengeluaran_edit',['pegawai' => $pegawai, 'pembelian' => $pembelian,'pengeluaran' => $pengeluaran]);
    }

    public function pengeluaran_update(Request $request)
    {
        DB::table('pengeluaran')->where('id_pengeluaran',$request->id_pengeluaran)->update([
            'id_pengeluaran'=>$request->id_pengeluaran,
            'id_pegawai'=>$request->id_pegawai,
            'id_pembelian'=>$request->id_pembelian,
            'merk'=>$request->merk,
            'kas_keluar'=>$request->kas_keluar,
            'tanggal'=>$request->tanggal,
        ]);
        return redirect ('/pengeluaran');
    }

    public function pengeluaran_hapus($id_pengeluaran)
    {
        DB::table('pengeluaran')->where('id_pengeluaran',$id_pengeluaran)->delete();
        return redirect('/pengeluaran');
    }

    public function pengeluaran_cetak(){
        $pengeluaran = DB::table('pengeluaran')->get();
        $file = view('Pengeluaran/pengeluaran_cetak',['pengeluaran' => $pengeluaran]);

        $dompdf = new Dompdf();
        $dompdf -> loadHtml($file);
        $dompdf -> setPaper('A4','portrait');
        $dompdf -> render();
        $dompdf -> stream('Data_pengeluaran.pdf');
    }
}
