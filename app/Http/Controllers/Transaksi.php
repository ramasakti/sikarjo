<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Transaksi extends Controller
{
    public function riwayat()
    {
        return view('transaksi.riwayat', [
            'title' => 'Riwayat Transaksi',
            'navactive' => 'transaksi'
        ]);
    }
    
    public function scan()
    {
        return view('transaksi.scan', [
            'title' => 'Scan QR',
            'navactive' => 'transaksi'
        ]);
    }

    public function cart()
    {
        return view('transaksi.cart', []);
    }

    public function transaksi(Request $request)
    {

    }
}
