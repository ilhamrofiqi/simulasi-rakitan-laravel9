<?php

namespace App\Http\Controllers;

use App\Models\Ups;
use Illuminate\Http\Request;

class UpsController extends Controller
{
    public function index()
    {
        $ups = Ups::all();
        return view('ups.index', compact(['ups']));
    }

    public function create()
    {
        return view('ups.create');
    }

    public function store(Request $request)
    {
        Ups::create($request->except(['_token', 'submit']));
        return redirect('/ups');
    }

    public function edit($id)
    {
        $ups = Ups::find($id);
        return view('ups.edit', compact(['ups']));
    }

    public function update($id, Request $request)  
    {
        $ups = Ups::find($id);
        $ups->update($request->except(['_token', 'submit']));
        return redirect('/ups');
    }

    public function destroy($id)
    {
        $ups = Ups::find($id);
        $ups->delete();
        return redirect('/ups');
    }
}
