<?php

namespace App\Http\Controllers;
use App\Models\Processor;
use App\Models\Socket;

use Illuminate\Http\Request;

class ProcessorController extends Controller
{
    public function index()
    {
        $processor = Processor::all();
        return view('processor.index', compact(['processor']));
    }

    public function create()
    {
        $socket = Socket::all();
        return view('processor.create', compact(['socket']));
    }

    public function store(Request $request)
    {
        Processor::create($request->except(['_token', 'submit']));
        return redirect(('/processor'));
    }
}
