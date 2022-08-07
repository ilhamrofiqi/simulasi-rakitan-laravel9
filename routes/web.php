<?php

use App\Http\Controllers\MotherboardController;
use App\Http\Controllers\simulasiController;
use App\Http\Controllers\socketController;
use App\Http\Controllers\ProcessorController;
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

// Socket
Route::get('/socket', [socketController::class, 'index']);
Route::get('/socket/create', [socketController::class, 'create']);
Route::post('/socket/store', [socketController::class, 'store']);
Route::get('/socket/{id}/edit', [socketController::class, 'edit']);
Route::put('/socket/{id}', [socketController::class, 'update']);
Route::delete('/socket/{id}', [socketController::class, 'destroy']);

// Processor
Route::get('/processor', [ProcessorController::class, 'index']);
Route::get('/processor/create', [ProcessorController::class, 'create']);
Route::post('/processor/store', [ProcessorController::class, 'store']);
Route::get('/processor/{id}/edit', [ProcessorController::class, 'edit']);
Route::put('/processor/{id}', [ProcessorController::class, 'update']);
Route::delete('/processor/{id}', [ProcessorController::class, 'destroy']);

// Motherboard
Route::get('/motherboard', [MotherboardController::class, 'index']);