<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;
use App\Models\Hardisk;
use App\Models\Socket;
use App\Models\Processor;
use App\Models\Motherboard;
use App\Models\Ram;
use App\Models\Ssd;
use App\Models\Vga;

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

        return view('simulasi',compact(
            ['brand', 'socket', 'processor', 'motherboard', 'hardisk', 'ram',
            'ssd', 'vga']));
    }
}
