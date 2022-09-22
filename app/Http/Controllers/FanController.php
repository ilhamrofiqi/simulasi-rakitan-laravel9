<?php

namespace App\Http\Controllers;

use App\Models\Fan;
use Illuminate\Http\Request;

class FanController extends Controller
{
    public function index()
    {
        $fan = Fan::all();
        return view('fan.index', compact(['fan']));
    }

    public function create()
    {
        return view('fan.create');
    }

    public function store(Request $request)
    {
        Fan::create($request->except(['_token', 'submit']));
        return redirect('/fan');
    }

    public function edit($id)
    {
        $fan = Fan::find($id);
        return view('fan.edit', compact(['fan']));
    }

    public function update($id, Request $request)
    {
        $fan = Fan::find($id);
        $fan->update($request->except(['_token', 'submit']));
        return redirect('/fan');
    }

    public function destroy($id)
    {
        $fan = Fan::find($id);
        $fan->delete();
        return redirect('/fan');
    }
}
