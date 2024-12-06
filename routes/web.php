<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TamuController;
use Illuminate\Http\Request;


// Route::get('/', function () {
//     return view('home');
// });

Route::get('/cihuy', [TamuController::class, 'index'])->name('pengunjung');
Route::get('/', [TamuController::class, 'tamu'])->name('home');
Route::post('/tambahdata', [TamuController::class, 'tambahdata'])->name('tambahdata');

Route::get('/login', function () {
    return view('login');
});

Route::get('/coba', function () {
    return view('master');
});

Route::get('/cobarekap', function () {
    return view('rekap');
});

// Route::get('/cihuy', function () {
//     return view('pengunjung');
// });

