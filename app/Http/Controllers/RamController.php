<?php

namespace App\Http\Controllers;

use App\Models\Ram;
use Illuminate\Http\Request;

class RamController extends Controller
{
    public function index()
    {
        $ram = Ram::all();
        return view('ram.index', compact(['ram']));
    }

    public function create()    
    {
        return view('ram.create');
    }

    public function store(Request $request)
    {
        Ram::create($request->except(['token', 'submit']));
        return redirect('/ram');
    }

    public function edit($id)
    {
        $ram = Ram::find($id);
        return view('ram.edit', compact(['ram']));
    }

    public function update($id, Request $request)
    {
        $ram = Ram::find($id);
        $ram->update($request->except(['_token', 'submit']));
        return redirect('/ram');
    }

    public function destroy($id)
    {
        $ram = Ram::find($id);
        $ram->delete();
        return redirect('/ram');
    }
}
