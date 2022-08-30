<?php

namespace App\Http\Controllers;

use App\Models\Casing;
use Illuminate\Http\Request;

class CasingController extends Controller
{
    public function index()
    {
        $casing = Casing::all();
        return view('casing.index', compact(['casing']));
    }

    public function create()
    {
        return view('casing.create');
    }

    public function store(Request $request)
    {
        Casing::create($request->except(['_token', 'submit']));
        return redirect('/casing');
    }

    public function edit($id)
    {
        $casing = Casing::find($id);
        return view('casing.edit', compact(['casing']));
    }

    public function update($id, Request $request)
    {
        $casing = Casing::find($id);
        $casing->update($request->except(['_token', 'submit']));
        return redirect('/casing');
    }

    public function destroy($id)
    {
        $casing = Casing::find($id);
        $casing->delete();
        return redirect('/casing');
    }
}
