<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SapaController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\CategoryController;

Route::get('/sapa', [SapaController::class, 'index']);

Route::get('/mahasiswa', [MahasiswaController::class, 'index']);
Route::get('/product', [ProductController::class, 'index']);
Route::get('/product/addProduct', [ProductController::class, 'addProduct']);
Route::post('/product', [ProductController::class, 'store']);
Route::get('/product/{id}', [ProductController::class, 'show']);
Route::get('/product/{id}/edit', [ProductController::class, 'edit']);
Route::put('/product/{id}', [ProductController::class, 'update']);
Route::delete('/product/{id}', [ProductController::class, 'destroy']);
Route::resource('/category', CategoryController::class);


Route::get('/', function () {
    return view('pages.beranda');
});

Route::get('/about', function () {
    return view('pages.about', [
        'nama'=> 'Ahmad Zaidan Wahyudin',
        'kelas'=> 'D4SM-48-04',
        'nim' => '707082400003',
    ]);
});

Route::view('/contact', 'pages.contact');