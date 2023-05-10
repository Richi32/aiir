<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


// mulai middleware
// untuk diluar middleware / siapapun bisa akses
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// untuk admin saja
Route::group(['middleware' => ['ceklevel:admin']], function () {
    // view
    Route::get('/akun', 'App\Http\Controllers\HomeController@view_akun')->name('akun');

    // crud
    Route::post('ganti-level/{id}', 'App\Http\Controllers\ReklameController@ganti_level')->name('ganti-level');
});


// untuk petugas dan admin
Route::group(['middleware' => ['ceklevel:admin,petugas']], function () {
    // view
    Route::get('/proses-izin', 'App\Http\Controllers\HomeController@view_proses_izin')->name('proses-izin');
    Route::get('/form-proses-izin/{id}', 'App\Http\Controllers\HomeController@view_form_proses_izin')->name('form-proses-izin');
    Route::get('/validasi-kadin', 'App\Http\Controllers\HomeController@view_validasi_kadin')->name('validasi-kadin');
    Route::get('/form-validasi-kadin/{id}', 'App\Http\Controllers\HomeController@view_form_validasi_kadin')->name('form-validasi-kadin');

    // crud
    Route::post('proses-izin-reklame/{id}', 'App\Http\Controllers\ReklameController@proses_izin_reklame')->name('proses-izin-reklame');
    Route::post('proses-validasi-kadin/{id}', 'App\Http\Controllers\ReklameController@proses_validasi_kadin')->name('proses-validasi-kadin');
    Route::get('tolak-izin-reklame/{id}', 'App\Http\Controllers\ReklameController@tolak_izin_reklame')->name('tolak-izin-reklame');
});


// untuk user dan petugas dan admin
Route::group(['middleware' => ['ceklevel:admin,petugas,user']], function () {
    // view
    Route::get('/pengajuan-izin', 'App\Http\Controllers\HomeController@view_form_user')->name('form-user');
    Route::get('/izin-belum-terbit', 'App\Http\Controllers\HomeController@view_izin_belum_terbit')->name('izin-belum-terbit');
    Route::get('/izin-aktif', 'App\Http\Controllers\HomeController@view_izin_aktif')->name('izin-aktif');
    Route::get('/riwayat-izin', 'App\Http\Controllers\HomeController@view_riwayat_izin')->name('riwayat-izin');
    Route::get('/masa-tenggang-izin', 'App\Http\Controllers\HomeController@view_masa_tenggang_izin')->name('masa-tenggang-izin');

    // crud
    Route::post('tambah-izin-reklame', 'App\Http\Controllers\ReklameController@tambah_izin_reklame')->name('tambah-izin-reklame');
    Route::get('proses-ulang-izin/{id}', 'App\Http\Controllers\ReklameController@proses_ulang_izin')->name('proses-ulang-izin');

    // print
    Route::get('cetak-izin/{id}', 'App\Http\Controllers\HomeController@cetak_izin')->name('cetak-izin');
    Route::get('cetak-bukti-pengambilan/{id}', 'App\Http\Controllers\HomeController@cetak_bukti_pengambilan')->name('cetak-bukti-pengambilan');
});
