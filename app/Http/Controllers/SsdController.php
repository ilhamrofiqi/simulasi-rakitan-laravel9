<?php

namespace App\Http\Controllers;

use App\Models\Ssd;
use Illuminate\Http\Request;

class SsdController extends Controller
{
    public function index()
    {
        $ssd = Ssd::all();
        return view('ssd.index', compact(['ssd']));
    }

    public function create()
    {
        return view('ssd.create');
    }

    public function store(Request $request)
    {
        Ssd::create($request->except(['_token', 'submit']));
        return redirect('/ssd');
    }

    public function edit($id)
    {
        $ssd = Ssd::find($id);
        return view('ssd.edit', compact(['ssd']));
    }

    public function update($id, Request $request)   
    {
        $ssd = Ssd::find($id);
        $ssd->update($request->except(['_tokken', 'submit']));
        return redirect('/ssd');
    }

    public function destroy($id)
    {
        $ssd = Ssd::find($id);
        $ssd->delete();
        return redirect('/ssd');
    }
}
