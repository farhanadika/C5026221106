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
