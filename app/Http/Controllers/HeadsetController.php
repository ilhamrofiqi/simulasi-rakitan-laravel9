<?php

namespace App\Http\Controllers;

use App\Models\Headset;
use Illuminate\Http\Request;

class HeadsetController extends Controller
{
    public function index()
    {
        $headset = Headset::all();
        return view('headset.index', compact(['headset']));
    }

    public function create()
    {
        return view('headset.create');  
    }

    public function store(Request $request)
    {
        Headset::create($request->except(['_token', 'submit']));
        return redirect('/headset');
    }

    public function edit($id)
    {
        $headset = Headset::find($id);
        return view('headset.edit', compact(['headset']));
    }

    public function update($id, Request $request)
    {
        $headset = Headset::find($id);
        $headset->update($request->except(['_token', 'submit']));
        return redirect('/headset');
    }

    public function destroy($id)
    {
        $headset = Headset::find($id);
        $headset->delete();
        return redirect('/headset');
    }
}
