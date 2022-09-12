<?php

namespace App\Http\Controllers;

use App\Models\Monitor;
use Illuminate\Http\Request;

class MonitorController extends Controller
{
    public function index()
    {
        $monitor = Monitor::all();
        return view('monitor.index', compact(['monitor']));
    }

    public function create()
    {
        return view('monitor.create');
    }

    public function store(Request $request)
    {
        Monitor::create($request->except(['_token', 'submit']));
        return redirect('/monitor');
    }

    public function edit($id)
    {
        $monitor = Monitor::find($id);
        return view('monitor.edit', compact(['monitor']));
    }

    public function update($id, Request $request)
    {
        $monitor = Monitor::find($id);
        $monitor->update($request->except(['_token', 'submit']));
        return redirect('/monitor');
    }

    public function destroy($id)
    {
        $monitor = Monitor::find($id);
        $monitor->delete();
        return redirect('/monitor');
    }
}
