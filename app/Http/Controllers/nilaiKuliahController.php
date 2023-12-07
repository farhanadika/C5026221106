<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class NilaiKuliahController extends Controller
{
	public function index()
    {

    	$nilaikuliah = DB::table('nilaikuliah')->get();

    	return view('indexnilai',['nilaikuliah' => $nilaikuliah]);

    }

	public function tambahnilai()
	{

		return view('tambahnilai');

	}

	public function storenilai(Request $request)
	{
		DB::table('nilaikuliah')->insert([
			'NRP' => $request->NRP,
			'NilaiAngka' => $request->NilaiAngka,
			'SKS' => $request->SKS
		]);

        return redirect('/nilaikuliah');
    }
}
