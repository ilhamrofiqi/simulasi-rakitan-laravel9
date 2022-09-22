<?php

use App\Http\Controllers\CasingController;
use App\Http\Controllers\CpucoolerController;
use App\Http\Controllers\FanController;
use App\Http\Controllers\HardiskController;
use App\Http\Controllers\KeyboardController;
use App\Http\Controllers\MonitorController;
use App\Http\Controllers\MotherboardController;
use App\Http\Controllers\MouseController;
use App\Http\Controllers\PowerSupplyController;
use App\Http\Controllers\simulasiController;
use App\Http\Controllers\socketController;
use App\Http\Controllers\ProcessorController;
use App\Http\Controllers\RamController;
use App\Http\Controllers\SsdController;
use App\Http\Controllers\VgaController;
use App\Models\Fan;
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

// RAM
Route::get('/ram', [RamController::class, 'index']);
Route::get('/ram/create', [RamController::class, 'create']);
Route::post('/ram/store', [RamController::class, 'store']);
Route::get('/ram/{id}/edit', [RamController::class, 'edit']);
Route::put('/ram/{id}', [RamController::class, 'update']);
Route::delete('/ram/{id}', [RamController::class, 'destroy']);

// SSD
Route::get('/ssd', [SsdController::class, 'index']);
Route::get('/ssd/create', [SsdController::class, 'create']);
Route::post('/ssd/store', [SsdController::class, 'store']);
Route::get('/ssd/{id}/edit', [SsdController::class, 'edit']);
Route::put('/ssd/{id}', [SsdController::class, 'update']);
Route::delete('/ssd/{id}', [SsdController::class, 'destroy']);

// VGA
Route::get('/vga', [VgaController::class, 'index']);
Route::get('/vga/create', [VgaController::class, 'create']);
Route::post('/vga/store', [VgaController::class, 'store']);
Route::get('/vga/{id}/edit', [VgaController::class, 'edit']);
Route::put('/vga/{id}', [VgaController::class, 'update']);
Route::delete('/vga/{id}', [VgaController::class, 'destroy']);

// PSU
Route::get('/psu', [PowerSupplyController::class, 'index']);
Route::get('/psu/create', [PowerSupplyController::class, 'create']);
Route::post('/psu/store', [PowerSupplyController::class, 'store']);
Route::get('/psu/{id}/edit', [PowerSupplyController::class, 'edit']);
Route::put('/psu/{id}', [PowerSupplyController::class, 'update']);
Route::delete('/psu/{id}', [PowerSupplyController::class, 'destroy']);

// Casing
Route::get('/casing', [CasingController::class, 'index']);
Route::get('/casing/create', [CasingController::class, 'create']);
Route::post('/casing/store', [CasingController::class, 'store']);
Route::get('casing/{id}/edit', [CasingController::class, 'edit']);
Route::put('/casing/{id}', [CasingController::class, 'update']);
Route::delete('/casing/{id}', [CasingController::class, 'destroy']);

// Keyboard
Route::get('/keyboard', [KeyboardController::class, 'index']);
Route::get('/keyboard/create', [KeyboardController::class, 'create']);
Route::post('/keyboard/store', [KeyboardController::class, 'store']);
Route::get('/keyboard/{id}/edit', [KeyboardController::class, 'edit']);
Route::put('/keyboard/{id}', [KeyboardController::class, 'update']);
Route::delete('/keyboard/{id}', [KeyboardController::class, 'destroy']);

// Mouse
Route::get('/mouse', [MouseController::class, 'index']);
Route::get('/mouse/create', [MouseController::class, 'create']);
Route::post('/mouse/store', [MouseController::class, 'store']);
Route::get('/mouse/{id}/edit', [MouseController::class, 'edit']);
Route::put('/mouse/{id}', [MouseController::class, 'update']);
Route::delete('/mouse/{id}', [MouseController::class, 'destroy']);

// Monitor
Route::get('/monitor', [MonitorController::class, 'index']);
Route::get('/monitor/create', [MonitorController::class, 'create']);
Route::post('/monitor/store', [MonitorController::class, 'store']);
Route::get('/monitor/{id}/edit', [MonitorController::class, 'edit']);
Route::put('/monitor/{id}', [MonitorController::class, 'update']);
Route::delete('/monitor/{id}', [MonitorController::class, 'destroy']);

// CPU Cooler
Route::get('/cpucooler', [CpucoolerController::class, 'index']);
Route::get('/cpucooler/create', [CpucoolerController::class, 'create']);
Route::post('/cpucooler/store', [CpucoolerController::class, 'store']);
Route::get('/cpucooler/{id}/edit', [CpucoolerController::class, 'edit']);
Route::put('/cpucooler/{id}', [CpucoolerController::class, 'update']);
Route::delete('/cpucooler/{id}', [CpucoolerController::class, 'destroy']);

// Fan
Route::get('/fan', [FanController::class, 'index']);
Route::get('/fan/create', [FanController::class, 'create']);
Route::post('/fan/store', [FanController::class, 'store']);
Route::get('/fan/{id}/edit', [FanController::class, 'edit']);
Route::put('/fan/{id}', [FanController::class, 'update']);
Route::delete('fan/{id}', [FanController::class, 'destroy']);

