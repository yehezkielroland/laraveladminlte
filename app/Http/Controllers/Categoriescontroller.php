<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\categories;

class Categoriescontroller extends Controller
{   
    public function index(){
        $getCategories = Categories ::all();
        return view('categories.categories',compact('getCategories'));
    }
    
    public function destroy($id){
        $getCategories = Categories::find($id);
        $getCategories->delete();
        return redirect()->back();    
    }
}