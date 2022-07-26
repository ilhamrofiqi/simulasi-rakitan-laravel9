<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;
use App\Models\Casing;
use App\Models\CpuCooler;
use App\Models\Hardisk;
use App\Models\Keyboard;
use App\Models\Monitor;
use App\Models\Socket;
use App\Models\Processor;
use App\Models\Motherboard;
use App\Models\Mouse;
use App\Models\PowerSupply;
use App\Models\Ram;
use App\Models\Ssd;
use App\Models\Vga;
use App\Models\Fan;
use App\Models\Headset;
use App\Models\Ups;

class simulasiController extends Controller
{
    public function index() {
        $brand = Brand::all();
        $socket = Socket::all();
        $processor = Processor::all();
        $motherboard = Motherboard::all();
        $hardisk = Hardisk::all();
        $ram = Ram::all();
        $ssd = Ssd::all();
        $vga = Vga::all();
        $psu = PowerSupply::all();
        $casing = Casing::all();
        $keyboard = Keyboard::all();
        $mouse = Mouse::all();
        $monitor = Monitor::all();
        $cpucooler = CpuCooler::all();
        $fan = Fan::all();
        $ups = Ups::all();
        $headset = Headset::all();

        return view('simulasi',compact(
            ['brand', 'socket', 'processor', 'motherboard', 'hardisk', 'ram',
            'ssd', 'vga', 'psu', 'casing', 'keyboard', 'mouse', 'monitor',
            'cpucooler', 'fan', 'ups', 'headset' ]));
    }
}
