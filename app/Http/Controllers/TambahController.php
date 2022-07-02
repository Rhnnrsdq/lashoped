<?php

namespace App\Http\Controllers;
use App\Barang;
use Auth;
use Alert;
use Carbon\Carbon;
use Illuminate\Http\Request;

class TambahController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
    	return view('tambah.index');
    }

    public function tambah(Request $request)
    {
    	$this->validate($request, 
           [
            'nama_barang'=>'required',
            'harga'=>'required',
            'stok'=>'required',
            'keterangan'=>'',
            'gambar'=>''
            ]);

        $barang = new \App\Barang;
        $barang->nama_barang = $request->nama_barang;
        $barang->harga = $request->harga;
        $barang->stok = $request->stok;
        $barang->keterangan = $request->keterangan;
        $barang->gambar = $request->gambar;
        $barang->save();

        Alert()->success('Barang Sukses Ditambah!', 'Success');
        return redirect('tambah');

    }
}
