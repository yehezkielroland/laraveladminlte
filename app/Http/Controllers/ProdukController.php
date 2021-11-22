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
    
    public function add(Request $request){
        $produk = new produk();
        $produk -> name = $request ->name;
        $produk -> description = $request ->description;
        $produk -> stock = $request ->stock;
        $produk -> price = $request ->price;
        $produk -> category_id = $request ->category_id;
        $produk -> save();
        
        return redirect()-> back();
        
    }
    //
}
