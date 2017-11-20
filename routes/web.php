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
	return view('masuk');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//agen
Route::get('/dashboardAgen', 'controllerAgen@home')->name('home');
Route::get('/buatPenawaran', 'controllerAgen@penawaran')->name('penawaran'); 
Route::get('/buatPenawaran', 'controllerAgen@penawaran');
Route::post('/insertPenawaran', 'controllerAgen@insertPenawaran');
Route::get('/sidebarAgen_layouts', 'controllerAgen@keluar');
Route::get('/daftarPenawaran/{id}', 'controllerAgen@view');
Route::get('/notifikasiAgen/{id}', 'controllerAgen@notif');
Route::get('/profilAgen/{id}', 'controllerAgen@profil')->name('profil');
Route::get('/updateProfil/{id}', 'controllerAgen@updateProfil')->name('profil');

//ini mau ngedit sama ambil data dari id yg diklik
Route::get('/editPenawaran/{id}', 'controllerAgen@editPenawaran'); 
Route::post('/updatePenawaran/{id}', 'controllerAgen@updatePenawaran');

//pengusaha
Route::get('/dashboardPengusaha', 'controllerPengusaha@home')->name('home');
Route::get('/profilPengusaha/{id}', 'controllerPengusaha@profil')->name('profil');
Route::get('/updateProfil/{id}', 'controllerPengusaha@updateProfil')->name('profil');
Route::get('/notifikasiPengusaha/{id}', 'controllerPengusaha@notif')->name('notif');
Route::get('/daftarPenawaranPengusaha', 'controllerPengusaha@hitung')->name('daftar');
Route::post('/hitung', 'controllerPengusaha@hitung');
Route::get('/beliPenawaran/{id}', 'controllerPengusaha@beliPenawaran');
Route::post('/updateBeli/{id}', 'controllerPengusaha@updateBeli');  

//ini mau proses terima beli sama tolak beli
Route::get('/terimaTransaksi/{id}', 'controllerAgen@terimaTransaksi'); 
Route::post('/updateTransaksi/{id}', 'controllerAgen@updateTransaksi'); 
Route::get('/tolakTransaksi/{id}', 'controllerAgen@tolakTransaksi'); 
Route::post('/updateTolakTransaksi/{id}', 'controllerAgen@updateTolakTransaksi'); 

//ini mau proses konfirmasi setelah dikirimin no.rekening
Route::get('/lanjutkanTransaksi/{id}', 'controllerPengusaha@lanjutkanTransaksi'); 
Route::post('/updateTransaksi/{id}', 'controllerAgen@updateTransaksi'); 
Route::post('/konfirmTransaksi/{id}', 'controllerAgen@konfirmTransaksi'); 