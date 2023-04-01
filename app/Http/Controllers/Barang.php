<?php

namespace App\Http\Controllers;

use DB;
use App\Models\File;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use App\Http\Requests\StoreFileRequest;

class Barang extends Controller
{
    public function index()
    {
        return view('barang.index', [
            'title' => 'Barang',
            'navactive' => 'barang',
            'dataBarang' => DB::table('barang')->get()
        ]);
    }
    
    public function store(Request $request)
    {   
        $ext = $request->file('foto')->getClientOriginalExtension();
        $filename = date('YmdHis') . '.' . $ext;
        $request->file('foto')->storeAs('public/foto', $filename);

        $validReq = $request->validate([
            'nama_barang' => 'required',
            'foto' => 'image|file|max:4096',
            'jenis' => 'required',
            'harga' => 'required|numeric',
        ]);

        DB::table('barang')
            ->insert([
                'nama_barang' => $request->nama_barang,
                'foto' => $filename,
                'jenis' => $request->jenis,
                'harga' => $request->harga
            ]);
        
        return back()->with('success', 'Berhasil menambahkan barang');
    }

    public function update(Request $request)
    {

    }

    public function delete(Request $request)
    {

    }
}
