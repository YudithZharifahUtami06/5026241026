<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;

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

Route::get('/halo', function () {
	return "<h1>Halo, Selamat datang</h1> di tutorial laravel <b>www.malasngoding.com/b>";
});
Route::get('/blog', function () {
	return view('blog');
});
Route::get('/dosen', [DosenController::class, 'index']);
Route::get('/biodata', [DosenController::class, 'biodata']);
