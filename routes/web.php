<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\CustomersController;
use App\Http\Controllers\CategoriesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/master', function () {
    return view('master');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/produk',[ProdukController::class,'index'])
->name('produk');

Route::get('/produk/delete/{id}', [ProdukController::class,'destroy'])
->name('produkdelete');
Route::get('/produkedit/edit/{id}', [ProdukController::class,'edit'])
->name('produkedit');
Route::post('/produkupdate/update/{id}', [ProdukController::class,'update'])
->name('produkupdate');

Route::get('/tambah',[ProdukController::class,'create'])
->name('tambah');
Route::post('/tambah/add',[ProdukController::class,'add'])
->name('tambahAdd');

// categori
Route::get('/categories',[CategoriesController::class,'index'] )
->name('categories');
Route::get('/categoriesdelete/delete/{id}',[CategoriesController::class,'destroy'] )
->name('categoriesdelete');
// customers
Route::get('/customers',[CustomersController::class,'index'] )
->name('customers');
Route::get('/customersdelete/delete/{id}',[CustomersController::class,'destroy'] )
->name('customersdelete');