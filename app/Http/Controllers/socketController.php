<?php

namespace App\Http\Controllers;
use App\Models\Socket;

use Illuminate\Http\Request;

class socketController extends Controller
{
    public function index() {
        $socket = Socket::all();
        return view('socket.index', compact(['socket']));
    }

    public function create()
    {
        return view('socket.create');
    }

    public function store(Request $request)
    {
        Socket::create($request->except(['_token','submit']));
        return redirect(('/socket'));
    }
}