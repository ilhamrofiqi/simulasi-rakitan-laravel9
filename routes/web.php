<?php

use App\Http\Controllers\simulasiController;
use App\Http\Controllers\socketController;
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

// Route::get('/', function () {
//     return view('simulasi');
// });

Route::get('/', [simulasiController::class, 'index']);

Route::get('/socket', [socketController::class, 'index']);
Route::get('/socket/create', [socketController::class, 'create']);
Route::post('/socket/store', [socketController::class, 'store']);