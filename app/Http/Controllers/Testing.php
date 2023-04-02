<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class Testing extends Controller
{
    public function index()
    {
        $barang = DB::table('barang')->select('foto')->get();
        $files = Storage::files('/public/foto');
        dd($files);
    }
}
