<?php

namespace App\Http\Controllers;

use App\Models\Vga;
use Illuminate\Http\Request;

class VgaController extends Controller
{
    public function index()
    {
        $vga = Vga::all();
        return view('vga.index', compact(['vga']));
    }

    public function create()
    {
        return view('vga.create');
    }

    public function store(Request $request)     
    {
        Vga::create($request->except(['_token', 'submit']));
        return redirect('/vga');
    }

    public function edit($id)
    {
        $vga = Vga::find($id);
        return view('vga.edit', compact(['vga']));
    }

    public function update($id, Request $request)
    {
        $vga = Vga::find($id);
        $vga->update($request->except(['_token', 'submit']));
        return redirect('/vga');
    }

    public function destroy($id)
    {
        $vga = Vga::find($id);
        $vga->delete();
        return redirect('/vga');
    }
}
