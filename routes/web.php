<?php

use Illuminate\Support\Facades\Route;

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

Route::get('tugas1',function (){
    return view('tugas1');
})->name('tugas1');

Route::get('tugas2',function (){
    return view('tugas2');
})->name('tugas2');

Route::get('bs4dropdown',function (){
    return view('bs4dropdown');
})->name('bs4dropdown');

Route::get('js1',function (){
    return view('js1');
})->name('js1');

Route::get('js2',function (){
    return view('js2');
})->name('js2');

Route::get('sepatu',function (){
    return view('sepatu');
})->name('sepatu');

Route::get('week1',function (){
    return view('week1');
})->name('week1');

Route::get('perkalian', 'App\Http\Controllers\DosenController@index');
Route::get('biodata', 'App\Http\Controllers\DosenController@biodata');

//route CRUD
Route::get('/pegawai','App\Http\Controllers\PegawaiController@index');
Route::get('/pegawai/tambah','App\Http\Controllers\PegawaiController@tambah');
Route::post('/pegawai/store','App\Http\Controllers\PegawaiController@store');
Route::get('/pegawai/edit/{id}','App\Http\Controllers\PegawaiController@edit');
Route::post('/pegawai/update','App\Http\Controllers\PegawaiController@update');
Route::get('/pegawai/hapus/{id}','App\Http\Controllers\PegawaiController@hapus');
Route::get('/pegawai/cari','App\Http\Controllers\PegawaiController@cari');
Route::get('/pegawai/view/{id}','App\Http\Controllers\PegawaiController@view');

// route nilai kuliah crud
Route::get('/nilaikuliah','App\Http\Controllers\NilaiKuliahController@index1');
Route::get('/nilaikuliah/tambahnilai','App\Http\Controllers\NilaiKuliahController@tambahnilai');
Route::post('/nilaikuliah/storenilai','App\Http\Controllers\NilaiKuliahController@storenilai');

//route CRUD
Route::get('/keranjangbelanja','App\Http\Controllers\KeranjangController@index');
Route::get('/keranjangbelanja/beli','App\Http\Controllers\KeranjangController@beli');
Route::post('/keranjangbelanja/store','App\Http\Controllers\KeranjangController@store');
Route::get('/keranjangbelanja/hapus/{id}','App\Http\Controllers\KeranjangController@hapus');

//route CRUD Ikan
Route::get('/ikan','App\Http\Controllers\IkanController@index');
Route::get('/ikan/tambahikan','App\Http\Controllers\IkanController@tambah');
Route::post('/ikan/store','App\Http\Controllers\IkanController@store');
Route::get('/ikan/edit/{id}','App\Http\Controllers\IkanController@edit');
Route::post('/ikan/update','App\Http\Controllers\IkanController@update');
Route::get('/ikan/hapus/{id}','App\Http\Controllers\IkanController@hapus');
Route::get('/ikan/cari','App\Http\Controllers\IkanController@cari');
Route::get('/ikan/view/{id}','App\Http\Controllers\IkanController@view');
