<?php

namespace App\Http\Controllers;

use App\Models\Hardisk;
use Illuminate\Http\Request;

class HardiskController extends Controller
{
    public function index()
    {
        $hardisk = Hardisk::all();
        return view('hardisk.index', compact(['hardisk']));
    }

    public function create()
    {
        return view('hardisk.create');
    }

    public function store(Request $request)     
    {
        Hardisk::create($request->except(['_token', 'submit']));
        return redirect('/hardisk');
    }

    public function edit($id)
    {
        $hardisk = Hardisk::find($id);
        return view('hardisk.edit', compact(['hardisk']));
    }

    public function update($id, Request $request)
    {
        $hardisk = Hardisk::find($id);
        $hardisk->update($request->except(['_token', 'submit']));
        return redirect('/hardisk');
    }

    public function destroy($id)
    {
        $hardisk = Hardisk::find($id);
        $hardisk->delete();
        return redirect('/hardisk');
    }
}
