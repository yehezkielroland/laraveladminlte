<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;
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

Route::get('/tambah',[ProdukController::class,'create'])
->name('tambah');


