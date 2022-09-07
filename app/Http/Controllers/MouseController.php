<?php

namespace App\Http\Controllers;

use App\Models\Mouse;
use Illuminate\Http\Request;

class MouseController extends Controller
{
    public function index()
    {
        $mouse = Mouse::all();
        return view('mouse.index', compact(['mouse']));
    }

    public function create()
    {
        return view('mouse.create');
    }

    public function store(Request $request)
    {
        Mouse::create($request->except(['_token', 'submit']));
        return redirect('/mouse');
    }

    public function edit($id)
    {
        $mouse = Mouse::find($id);
        return view('mouse.edit', compact(['mouse']));
    }

    public function update($id, Request $request)
    {
        $mouse = Mouse::find($id);
        $mouse->update($request->except(['_token', 'submit']));
        return redirect('/mouse');
    }

    public function destroy($id)
    {
        $mouse = Mouse::find($id);
        $mouse->delete();
        return redirect('/mouse');  
    }
}
