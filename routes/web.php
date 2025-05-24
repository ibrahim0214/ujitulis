<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/ujian/tertulis', [UjianController::class, 'tertulis'])->name('ujian.tertulis');
Route::get('/ujian/psikotes', [UjianController::class, 'psikotes'])->name('ujian.psikotes');
