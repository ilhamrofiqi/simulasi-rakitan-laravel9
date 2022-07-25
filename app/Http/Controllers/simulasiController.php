<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;
use App\Models\Socket;

class simulasiController extends Controller
{
    public function index() {
        $brand = Brand::all();
        $socket = Socket::all();

        return view('simulasi',compact(['brand','socket']));
    }
}
