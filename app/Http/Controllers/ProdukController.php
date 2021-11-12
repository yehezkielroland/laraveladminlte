<?php

namespace App\Http\Controllers;

use App\Models\produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{   
    public function index(){
        $getproduk = produk::all();
        return view('produk.produk_semua',compact('getproduk'));
    }
    
    public function destroy($id){
        $getproduk = produk::find($id);
        $getproduk->delete();
        return redirect()->back();    
    }

    public function create(){
        $getproduk = produk::all();
        return view('produk.tambah_produk');
    }
    
    //
}
