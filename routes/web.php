<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Login;
use App\Http\Controllers\Barang;

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

Route::get('/login', [Login::class, 'index']);
Route::post('/login', [Login::class, 'authenticate']);
Route::get('/dashboard', [Login::class, 'dashboard']);

Route::get('/barang', [Barang::class, 'index']);
Route::post('/barang/store', [Barang::class, 'store']);
Route::post('/barang/update', [Barang::class, 'update']);
Route::post('/barang/delete', [Barang::class, 'delete']);