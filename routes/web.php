<?php

use App\Http\Controllers\SerieController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [SerieController::class, 'index'])->name('series');
Route::get('/series', [SerieController::class, 'index'])->name('series');
Route::post('/series', [SerieController::class, 'store'])->name('create-series');
Route::delete('/series', [SerieController::class, 'destroy'])->name('delete-series');
Route::put('/series', [SerieController::class, 'update'])->name('update-series');
