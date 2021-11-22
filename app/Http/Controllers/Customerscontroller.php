<?php

namespace App\Http\Controllers;

use App\Models\customers;
use Illuminate\Http\Request;

class Customerscontroller extends Controller
{   
    public function index(){
        $getCustomers = customers::all();
        return view('customers.customers',compact('getCustomers'));
    }
    
    public function destroy($id){
        $getCustomers = customers::find($id);
        $getCustomers->delete();
        return redirect()->back();    
    }
}