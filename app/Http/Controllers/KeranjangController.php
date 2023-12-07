<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class KeranjangController extends Controller
{
	public function index()
	{
    	// mengambil data dari table belanja
        $keranjangbelanja = DB::table('keranjangbelanja')->get();
    	// mengirim data belanja ke view index
		return view('index2',['keranjangbelanja' => $keranjangbelanja]);

	}

	// method untuk menampilkan view form tambah belanja
	public function beli()
	{

		// memanggil view tambah
		return view('beli');

	}

	// method untuk insert data ke table belanja
	public function store(Request $request)
	{
		// insert data ke table belanja
		DB::table('keranjangbelanja')->insert([
			'ID' => $request->id,
			'KodeBarang' => $request->kodebarang,
			'Jumlah' => $request->jumlah,
			'Harga' => $request->harga
		]);
		// alihkan halaman ke halaman belanja
		return redirect('/keranjangbelanja');

	}

	// method untuk hapus data belanja
	public function hapus($id)
	{
		// menghapus data belanja berdasarkan id yang dipilih
		DB::table('keranjangbelanja')->where('ID',$id)->delete();

		// alihkan halaman ke halaman belanja
		return redirect('/keranjangbelanja');
	}


}
