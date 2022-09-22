<?php

namespace App\Http\Controllers;

use App\Models\CpuCooler;
use Illuminate\Http\Request;

class CpucoolerController extends Controller
{
    public function index()
    {
        $cpucooler = CpuCooler::all();
        return view('cpucooler.index', compact(['cpucooler']));
    }

    public function create()
    {
        return view('cpucooler.create');
    }

    public function store(Request $request)
    {
        CpuCooler::create($request->except(['_token', 'submit']));
        return redirect('/cpucooler');
    }

    public function edit($id)
    {
        $cpucooler = CpuCooler::find($id);
        return view('cpucooler.edit', compact(['cpucooler']));
    }

    public function update($id, Request $request)
    {
        $cpucooler = CpuCooler::find($id);
        $cpucooler->update($request->except(['_token', 'submit']));
        return redirect('/cpucooler');
    }

    public function destroy($id)
    {
        $cpucooler = CpuCooler::find($id);
        $cpucooler->delete();
        return redirect('/cpucooler');
    }
}
