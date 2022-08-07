<?php

namespace App\Http\Controllers;
use App\Models\Motherboard;
use App\Models\Socket;

use Illuminate\Http\Request;

class MotherboardController extends Controller
{
    public function index()
    {
        $motherboard = Motherboard::all();
        return view('motherboard.index', compact(['motherboard']));
    }
}
