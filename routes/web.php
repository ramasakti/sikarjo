<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Login;
use App\Http\Controllers\Barang;
use App\Http\Controllers\Transaksi;
use App\Http\Controllers\Testing;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Index;

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

Route::get('/', [Index::class, 'index']);

Route::get('/test', [Testing::class, 'index']);

Route::get('/login', [Login::class, 'index'])->name('login');
Route::post('/login', [Login::class, 'authenticate']);
Route::get('/dashboard', [Login::class, 'dashboard']);

Route::get('/barang', [Barang::class, 'index']);
Route::post('/barang/store', [Barang::class, 'store']);
Route::post('/barang/update', [Barang::class, 'update']);
Route::post('/barang/delete', [Barang::class, 'delete']);

Route::get('/transaksi/scan', [Transaksi::class, 'scan']);
Route::get('/transaksi/riwayat', [Transaksi::class, 'riwayat']);
Route::get('/transaksi/cart', [Transaksi::class, 'cart']);
Route::post('/transaksi/store', [Transaksi::class, 'transaksi']);
Route::get('/transaksi/pending', [Transaksi::class, 'pending']);
Route::post('/transaksi/engine', [Transaksi::class, 'engine']);


Route::get('/storage/foto', function () {
    Artisan::call('storage:link');
});