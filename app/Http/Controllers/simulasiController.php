<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;
use App\Models\Hardisk;
use App\Models\Socket;
use App\Models\Processor;
use App\Models\Motherboard;

class simulasiController extends Controller
{
    public function index() {
        $brand = Brand::all();
        $socket = Socket::all();
        $processor = Processor::all();
        $motherboard = Motherboard::all();
        $hardisk = Hardisk::all();

        return view('simulasi',compact(['brand', 'socket', 'processor', 'motherboard', 'hardisk']));
    }
}
