<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoopController;
use App\Http\Controllers\OngkirController;
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
    return view('welcome');
});

Route::get('/loop', [LoopController::class, 'index']);
Route::post('/loop/process', [LoopController::class, 'process'])->name('loop.process');
Route::get('/ongkir', [OngkirController::class, 'index']);
Route::post('/ongkir/process', [OngkirController::class, 'process'])->name('ongkir.process');

