<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeacherController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('guru', TeacherController::class);
Route::get('/guru', [TeacherController::class,'index']);
Route::get('/api/guru', [TeacherController::class,'api']);
Route::get('/simpan', [TeacherController::class,'simpan']);