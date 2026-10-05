<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController; 

Route::get('/', function () {
    return view('welcome');
});
 


Route::get('/home', [MainController::class, 'showIndex'])->name('home');

Route::get('/array', [MainController::class, 'showArray'])->name('array');

