<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\PegawaiDBController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\KeyboardDBController;
use App\Http\Controllers\NilaiKuliahController;

Route::get('/', function () {
    return view('menu026');
});


Route::get('/pertemuan1', function () {
	return view('intro');
});

Route::get('/pertemuan2', function () {
	return view('news1');
});

Route::get('/pertemuan3', function () {
	return view('responsif');
});

Route::get('/tugaspertemuan3', function () {
	return view('contoh');
});

Route::get('/pertemuan4', function () {
	return view('5026241026');
});

Route::get('/pertemuan5', function () {
	return view('pertemuan5');
});

Route::get('/tugaspertemuan5', function () {
	return view('tugaspertemuan5');
});

Route::get('/pertemuan7', function () {
	return view('pertemuan7');
});

Route::get('/tugaspertemuan7', function () {
	return view('menu026');
});

Route::get('/tugaspraETS', function () {
	return view('tugas_ets');
});

Route::get('/halo', function () {
	return "<h1>Halo, Selamat datang</h1> di tutorial laravel <b>www.malasngoding.com/b>";
});
Route::get('/blog', function () {
	return view('blog');
});
Route::get('/dosen', [DosenController::class, 'index']);
Route::get('/biodata', [DosenController::class, 'biodata']);

Route::get('/formulir', [PegawaiController::class, 'formulir']);
Route::post('/formulir/proses', [PegawaiController::class, 'proses']);
//blog
Route::get('/blog', [BlogController::class, 'home']);
Route::get('/blog/tentang', [BlogController::class, 'tentang']);
Route::get('/blog/kontak', [BlogController::class, 'kontak']);

//Route CRUD
Route::get('/pegawai', [PegawaiDBController::class, 'index']);
Route::get('/pegawai/tambah', [PegawaiDBController::class, 'tambah']);
Route::post('/pegawai/store', [PegawaiDBController::class, 'store']);
Route::get('/pegawai/edit/{id}', [PegawaiDBController::class, 'edit']);
Route::post('/pegawai/update', [PegawaiDBController::class, 'update']);
Route::get('/pegawai/hapus/{id}', [PegawaiDBController::class, 'hapus']);
Route::get('/pegawai/cari', [PegawaiDBController::class, 'cari']);

Route::get('/keyboard', [KeyboardDBController::class, 'index']);
Route::get('/keyboard/tambah', [KeyboardDBController::class, 'tambah']);
Route::post('/keyboard/store', [KeyboardDBController::class, 'store']);
Route::get('/keyboard/edit/{id}', [KeyboardDBController::class, 'edit']);
Route::post('/keyboard/update', [KeyboardDBController::class, 'update']);
Route::get('/keyboard/hapus/{id}', [KeyboardDBController::class, 'hapus']);
Route::get('/keyboard/cari', [KeyboardDBController::class, 'cari']);

Route::get('/nilaikuliah', [NilaiKuliahController::class, 'index']);
Route::get('/nilaikuliah/tambah', [NilaiKuliahController::class, 'tambah']);
Route::post('/nilaikuliah/store', [NilaiKuliahController::class, 'store']);
