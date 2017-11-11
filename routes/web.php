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
Route::get('/profilAgen', 'controllerAgen@profil')->name('profil');
Route::get('/buatPenawaran', 'controllerAgen@penawaran')->name('penawaran'); 
Route::get('/buatPenawaran', 'controllerAgen@penawaran');
Route::post('/insertPenawaran', 'controllerAgen@insertPenawaran');
Route::get('/daftarPenawaran', 'controllerAgen@daftarPenawaran');
Route::get('/sidebarAgen_layouts', 'controllerAgen@keluar');
Route::get('/daftarPenawaran', 'controllerAgen@view');
Route::get('/notifikasiAgen', 'controllerAgen@notif');


//ini mau ngedit sama ambil data dari id yg diklik
Route::get('/editPenawaran/{id}', 'controllerAgen@editPenawaran'); 
Route::post('/updatePenawaran/{id}', 'controllerAgen@updatePenawaran');

Route::post('/updateProfil', 'RegisterController@updateProfil');
//pengusaha
Route::get('/dashboardPengusaha', 'controllerPengusaha@home')->name('home');
Route::get('/profilPengusaha', 'controllerPengusaha@profil')->name('profil');
Route::get('/notifikasiPengusaha', 'controllerPengusaha@notif')->name('notif');
Route::get('/daftarPenawaranPengusaha', 'controllerPengusaha@view')->name('daftar');
Route::post('/hitung', 'controllerPengusaha@hitung');
Route::get('/beliPenawaran/{id}', 'controllerPengusaha@beliPenawaran');
Route::put('/beli/{id}', 'controllerPengusaha@jadiBeli');  