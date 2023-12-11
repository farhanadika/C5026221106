<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class KaryawanController extends Controller
{
	public function index()
	{
    	// mengambil data dari table karyawan
		//$karyawan = DB::table('karyawan')->get();
        $karyawan = DB::table('karyawan')->paginate(15);
    	// mengirim data karyawan ke view index
		return view('indexkaryawan',['karyawan' => $karyawan]);

	}

	// method untuk menampilkan view form tambah karyawan
	public function tambah()
	{

		// memanggil view tambah
		return view('tambahkaryawan');

	}

	// method untuk insert data ke table karyawan
	public function store(Request $request)
	{
		// insert data ke table karyawan
		DB::table('karyawan')->insert([
			'kodepegawai' => $request->kodepegawai,
			'namalengkap' => $request->namalengkap,
			'divisi' => $request->divisi,
			'departemen' => $request->departemen
		]);
		// alihkan halaman ke halaman karyawan
		return redirect('/karyawan');

	}

	// method untuk edit data karyawan
	public function edit($id)
	{
		// mengambil data karyawan berdasarkan id yang dipilih
		$karyawan = DB::table('karyawan')->where('id',$id)->get();
		// passing data karyawan yang didapat ke view edit.blade.php
		return view('edit',['karyawan' => $karyawan]);

	}

    // method untuk view data karyawan
    public function view($id)
    {
        // mengambil data karyawan berdasarkan id yang dipilih
        // passing data karyawan yang didapat ke view edit.blade.php
        return view('view', ['karyawan' => $karyawan]);
    }

	// update data karyawan
	public function update(Request $request)
	{
		// update data karyawan
		DB::table('karyawan')->where('kodepegawai',$request->id)->update([
			'kodepegawai' => $request->kodepegawai,
			'namalengkap' => $request->namalengkap,
			'divisi' => $request->divisi,
			'departemen' => $request->departemen
		]);
		// alihkan halaman ke halaman karyawan
		return redirect('/karyawan');
	}

    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table karyawan sesuai pencarian data
		$karyawan = DB::table('karyawan')
		->where('kodepegawai','like',"%".$cari."%")
		->paginate();

    		// mengirim data karyawan ke view index
		return view('indexkaryawan',['karyawan' => $karyawan, 'cari' => $cari]);

	}

	// method untuk hapus data karyawan
	public function hapus($id)
	{
		// menghapus data karyawan berdasarkan id yang dipilih
		DB::table('karyawan')->where('id',$id)->delete();

		// alihkan halaman ke halaman karyawan
		return redirect('/karyawan');
	}
}
