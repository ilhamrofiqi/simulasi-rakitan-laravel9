<?php

namespace App\Http\Controllers;

use App\Models\Keyboard;
use Illuminate\Http\Request;

class KeyboardController extends Controller
{
    public function index()
    {
        $keyboard = Keyboard::all();
        return view('keyboard.index', compact(['keyboard']));
    }

    public function create()
    {
        return view('keyboard.create');
    }

    public function store(Request $request)
    {
        Keyboard::create($request->except(['_token', 'submit']));
        return redirect('/keyboard');
    }

    public function edit($id)
    {
        $keyboard = Keyboard::find($id);
        return view('keyboard.edit', compact(['keyboard']));
    }

    public function update($id, Request $request)
    {
        $keyboard = Keyboard::find($id);
        $keyboard->update($request->except(['_token', 'submit']));
        return redirect('/keyboard');
    }

    public function destroy($id)
    {
        $keyboard = Keyboard::find($id);
        $keyboard->delete();
        return redirect('/keyboard');
    }
}
