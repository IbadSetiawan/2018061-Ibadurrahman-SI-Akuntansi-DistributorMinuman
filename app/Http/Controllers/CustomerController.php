<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
    public function index2()
    {
        $customer = DB::table('customer')->get();
    	return view('Customer/customer',['customer' => $customer]);
    }

    public function customer_store (Request $request)
    {
        DB::table('customer')-> insert ([
            'id_customer'=>$request->id_customer,
            'nama_customer'=>$request->nama_customer,
            'alamat'=>$request->alamat,
            'no_telp'=>$request->no_telp,
        ]);
        return redirect('/customer');
    }

    public function customer_tambah()
    {
        return view('Customer/customer_tambah');
    }

    public function customer_edit($id_customer)
    {
        $customer = DB::table('customer')->where('id_customer','=',$id_customer)->get();
        return view('Customer/customer_edit',['customer' => $customer]);
    }

    public function customer_update(Request $request)
    {
        DB::table('customer')->where('id_customer',$request->id_customer)->update([
            'id_customer'=>$request->id_customer,
            'nama_customer'=>$request->nama_customer,
            'alamat'=>$request->alamat,
            'no_telp'=>$request->no_telp,
        ]);
        return redirect ('/customer');
    }

    public function customer_hapus($id_customer)
    {
        DB::table('customer')->where('id_customer',$id_customer)->delete();
        return redirect('/customer');
    }

    public function customer_Cetak()
    {
        $customer = DB::table('customer')->get();
    	return view('Customer/customer_cetak',['customer' => $customer]);
    }
}
