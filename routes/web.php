<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\SiswaController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('guru', TeacherController::class);
Route::resource('siswa', SiswaController::class);

Route::get('/api/guru', [TeacherController::class, 'api']);
Route::get('/simpan', [TeacherController::class, 'simpan']);

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/mapel', function () {
    return view('mapel.index');
});

Route::get('/jadwal', function () {
    return view('jadwal');
});

Route::get('/nilai', function () {
    return view('nilai');
});

Route::get('/profil', function () {
    return view('profil');
});