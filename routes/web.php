<?php

use App\Http\Controllers\HardiskController;
use App\Http\Controllers\MotherboardController;
use App\Http\Controllers\simulasiController;
use App\Http\Controllers\socketController;
use App\Http\Controllers\ProcessorController;
use App\Models\Hardisk;
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
Route::get('/motherboard/create', [MotherboardController::class, 'create']);
Route::post('/motherboard/store', [MotherboardController::class, 'store']);
Route::get('/motherboard/{id}/edit', [MotherboardController::class, 'edit']);
Route::put('/motherboard/{id}', [MotherboardController::class, 'update']);
Route::delete('/motherboard/{id}', [MotherboardController::class, 'destroy']);

// Hardisk
Route::get('/hardisk', [HardiskController::class, 'index']);
Route::get('/hardisk/create', [HardiskController::class, 'create']);
Route::post('/hardisk/store', [HardiskController::class, 'store']);
Route::get('/hardisk/{id}/edit', [HardiskController::class, 'edit']);
Route::put('/hardisk/{id}', [HardiskController::class, 'update']);
Route::delete('/hardisk/{id}', [HardiskController::class, 'destroy']);