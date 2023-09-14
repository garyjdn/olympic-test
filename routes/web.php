<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});


Route::get('/no1', [PageController::class, 'no1'])->name('no1');
Route::get('/no2', [PageController::class, 'no2'])->name('no2');
Route::get('/no3', [PageController::class, 'no3'])->name('no3');