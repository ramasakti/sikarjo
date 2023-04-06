<?php

namespace App\Http\Controllers;

use DB;
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
        if (!session()->has('username')) {
            return redirect('login');
        }
        return view('transaksi.cart', [
            'dataTransaksi' => ''
        ]);
    }

    public function transaksi(Request $request)
    {
        $hasil = [];
        for ($i = 0; $i < count($request->jumlah); $i++) {
            $hasil[$i] = $request->jumlah[$i] * $request->harga[$i];
        }
        $total = array_sum($hasil);

        DB::table('transaksi')
            ->insert([
                'id_transaksi' => 'K'.date('YmdHis'),
                'tanggal_transaksi' => date('Y-m-d'),
                'pembeli' => $request->username,
                'total' => $total,
                'lunas' => false
            ]);
        
        return redirect('/transaksi/pending');
    }

    public function pending(Request $request)
    {
        $trx = DB::table('users')
                ->join('transaksi', 'transaksi.pembeli', 'users.username')
                ->get();
        return view('transaksi.pending', [
            'trx' => $trx
        ]);
    }

    public function engine(Request $request)
    {
        $trx = DB::table('transaksi')->where('id_transaksi', $request->pembeli)->get();
        if (count($trx) < 1) {
            return back()->with('fail', 'Transaksi tidak tersedia');
        }
        DB::table('transaksi')
            ->where('id_transaksi', $request->pembeli)
            ->update([
                'lunas' => true
            ]);

        return back()->with('success', 'Berhasil melakukan pembayaran');
    }
}
