<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class IkanController extends Controller
{
	public function index()
	{
    	// mengambil data dari table pegawai
		// $pegawai = DB::table('pegawai')->get();
        $ikan = DB::table('ikan')->get();

    	// mengirim data pegawai ke view index
		return view('indexikan',['ikan' => $ikan]);

	}

	// method untuk menampilkan view form tambah pegawai
	public function tambah()
	{

		// memanggil view tambah
		return view('tambahikan');

	}

	// method untuk insert data ke table pegawai
	public function store(Request $request)
	{
        if ($request->jumlah > 0) $status = 1;
        else $status = 0;

		// insert data ke table pegawai
		DB::table('ikan')->insert([
			'kodeikan' => $request->kode,
			'namaikan' => $request->nama,
			'jumlahikan' => $request->jumlah,
			'tersedia' => $status
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/ikan');

	}

	// method untuk edit data pegawai
	public function edit($id)
	{
		// mengambil data pegawai berdasarkan id yang dipilih
		$ikan = DB::table('ikan')->where('kodeikan',$id)->get();
		// passing data pegawai yang didapat ke view edit.blade.php
		return view('editikan',['ikan' => $ikan]);

	}

	// update data pegawai
	public function update(Request $request)
	{
        if ($request->jumlah > 0) $status = 1;
        else $status = 0;

		// update data pegawai
		DB::table('ikan')->where('kodeikan',$request->id)->update([
			'namaikan' => $request->nama,
			'jumlahikan' => $request->jumlah,
			'tersedia' => $status,
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/ikan');
	}

	// method untuk hapus data pegawai
	public function hapus($id)
	{
		// menghapus data pegawai berdasarkan id yang dipilih
		DB::table('ikan')->where('kodeikan',$id)->delete();

		// alihkan halaman ke halaman pegawai
		return redirect('/ikan');
	}

    // method cari pegawai
    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table pegawai sesuai pencarian data
		$ikan = DB::table('ikan')
		->where('namaikan','like',"%".$cari."%")
		->paginate();

    		// mengirim data pegawai ke view index
		return view('indexikan',['ikan' => $ikan]);

	}

    public function view($id)
	{
		// mengambil data pegawai berdasarkan id yang dipilih
		$ikan = DB::table('ikan')->where('kodeikan',$id)->get();
		// passing data pegawai yang didapat ke view view.blade.php
        return view('viewikan',['ikan' => $ikan]);

	}
}
