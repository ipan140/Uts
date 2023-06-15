<?php

use App\Http\Controllers\Databarang;
use App\Http\Controllers\Datasatuan;
use App\Http\Controllers\homeawalan;
use App\Http\Controllers\Profileuser;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('home', [homeawalan::class, 'index'])->name('home'); 
Route::get('profile', Profileuser::class)->name('profile');
Route::resource('barang', Databarang::class);
Route::resource('satuan', Datasatuan::class);