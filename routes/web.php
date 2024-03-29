<?php

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
    return view('isi');
});

// Route::group(['middleware' => 'auth'], function () {
//   Route::get('/data-pegawai', 'PegawaiController@list')->name('list');
//   Route::resource('/tambah-data', 'PostController');
//   Route::get('/pdf', [ PdfController::class, 'Pdf']); 

//   Route::get('/upload-form', function() { 
//     return view('upload-form');
//   });


Route::get('/', 'PegawaiController@list');
Route::get('/data-pegawai', 'PegawaiController@list');
Route::get('/data-pegawai/cetak_pdf', 'PegawaiController@cetak_pdf');
Route::get('/hapus/{id}', 'PegawaiController@hapus');
Route::get('/tambah-data', function () {
    return view('tambah-data');
});
Route::get('/tambah-data', 'PegawaiController@tambah');
Route::post('/simpan-data', 'PegawaiController@simpan');
Route::get('/ubah/{id}', 'PegawaiController@ubah');
Route::post('/ubah', 'PegawaiController@rubah');
Route::get('/detail/{id}', 'PegawaiController@detail');
Route::get('/data-pegawai/cari', 'PegawaiController@cari');
Route::post('/simpan-data/cari', 'PegawaiController@cari');
Route::post('/ubah/cari', 'PegawaiController@cari');


Route::get('/upload-form', function() {
  return view('upload-form');
});
Route::post('/upload-file', 'HomeController@upload');
Route::get('/unduh-gambar/{path}', 'HomeController@unduh');

Route::post('/upload-file', 'PegawaiController@upload');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
