<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\ReportController;
use Illuminate\Image\Transformations\Rotate;
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

Route::get('/reports', [ReportController::class, 'index'])->name('reports.index');

Route::get('/repots/create', function() {
    return view('report.create');
})->name('reports.create');

Route::delete('/reports/{report}', [ReportController::class, 'destroy'])->name('reports.destroy');

Route::post('/reports', [ReportController::class, 'store'])->name('reports.store');

Route::get('/reports/create', [ReportController::class, 'showCreate'])->name('create');

Route::get('/reports/{report}/edit', [ReportController::class , 'edit'])->name('reports.edit');
Route::get('/reports/{report}', [ReportController::class, 'update'])->name('reports.update');