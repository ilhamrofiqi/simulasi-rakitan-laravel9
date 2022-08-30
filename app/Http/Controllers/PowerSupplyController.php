<?php

namespace App\Http\Controllers;

use App\Models\PowerSupply;
use Illuminate\Http\Request;

class PowerSupplyController extends Controller
{
    public function index()
    {
        $psu = PowerSupply::all();
        return view('psu.index', compact('psu'));
    }

    public function create()
    {
        return view('psu.create');
    }

    public function store(Request $request) 
    {
        PowerSupply::create($request->except('_token', 'submit'));
        return redirect('/psu');
    }

    public function edit($id)
    {
        $psu = PowerSupply::find($id);
        return view('psu.edit', compact(['psu']));
    }

    public function update($id, Request $request)
    {
        $psu = PowerSupply::find($id);
        $psu->update($request->except(['_token', 'submit']));
        return redirect('/psu');
    }

    public function destroy($id)
    {
        $psu = PowerSupply::find($id);
        $psu->delete();
        return redirect('/psu');
    }
}
