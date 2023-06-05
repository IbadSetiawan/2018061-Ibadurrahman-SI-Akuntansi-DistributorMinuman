<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PenjualanController extends Controller
{
    public function index5()
    {
        $penjualan = DB::table('penjualan')->get();
    	return view('Penjualan/penjualan',['penjualan' => $penjualan]);
    }

    public function penjualan_store (Request $request)
    {
        DB::table('penjualan')-> insert ([
            'id_penjualan'=>$request->id_penjualan,
            'id_customer'=>$request->id_customer,
            'id_barang'=>$request->id_barang,
            'merk'=>$request->merk,
            'keluar'=>$request->keluar,
            'kas_masuk'=>$request->kas_masuk,
            'tanggal'=>$request->tanggal,
        ]);
        return redirect('/penjualan');
    }

    public function penjualan_tambah()
    {
        $customer= DB::table('customer')->get();
        $barang= DB::table('barang')->get();
        return view('Penjualan/penjualan_tambah',['customer' => $customer, 'barang' => $barang]);
    }

    public function penjualan_edit($id_penjualan)
    {
        $penjualan = DB::table('penjualan')->where('id_penjualan','=',$id_penjualan)->get();
        $customer= DB::table('customer')->get();
        $barang= DB::table('barang')->get();
        return view('Penjualan/penjualan_edit',['customer' => $customer, 'barang' => $barang,'penjualan' => $penjualan]);
    }

    public function penjualan_update(Request $request)
    {
        DB::table('penjualan')->where('id_penjualan',$request->id_penjualan)->update([
            'id_penjualan'=>$request->id_penjualan,
            'id_customer'=>$request->id_customer,
            'id_barang'=>$request->id_barang,
            'merk'=>$request->merk,
            'keluar'=>$request->keluar,
            'kas_masuk'=>$request->kas_masuk,
            'tanggal'=>$request->tanggal,
        ]);
        return redirect ('/penjualan');
    }

    public function penjualan_hapus($id_penjualan)
    {
        DB::table('penjualan')->where('id_penjualan',$id_penjualan)->delete();
        return redirect('/penjualan');
    }
    public function penjualan_Cetak()
    {
        $penjualan = DB::table('penjualan')->get();
    	return view('Penjualan/penjualan_cetak',['penjualan' => $penjualan]);
    }
}
