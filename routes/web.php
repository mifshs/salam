<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [MainController::class, 'showIndex'])->name('home');

Route::get('/array', [MainController::class, 'showArray'])->name('array');

Route::get('/array/shuffle', [MainController::class, 'shuffleArray'])->name('array.shuffle');

Route::get('/array/sort', [MainController::class, 'sortArray'])->name('array.sort');

Route::get('/array/filter', [MainController::class, 'filterArray'])->name('array.filter');

Route::get('/array/filter1', [MainController::class, 'filterArray1'])->name('array.filter1');
