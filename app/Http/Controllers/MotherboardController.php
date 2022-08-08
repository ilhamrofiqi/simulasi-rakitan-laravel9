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

    public function create()
    {
        $socket = Socket::all();
        return view('motherboard.create', compact(['socket']));
    }

    public function store(Request $request)
    {
        Motherboard::create($request->except(['_token', 'submit']));
        return redirect('/motherboard');
    }

    public function edit($id)
    {
        $motherboard = Motherboard::find($id);
        $socket = Socket::all();
        return view('motherboard.edit', compact(['motherboard', 'socket']));
    }

    public function update($id, Request $request)           
    {
        $motherboard = Motherboard::find($id);
        $motherboard->update($request->except(['_token','submit']));
        return redirect('/motherboard');
    }

    public function destroy($id)
    {
        $motherboard = Motherboard::find($id);
        $motherboard->delete();
        return redirect('/motherboard');
    }
}
