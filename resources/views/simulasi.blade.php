@extends('layouts.master')

@section('content')

<div class="container custom">

    <div class="header">
        <h3>Simulasi Rakitan</h3>
    </div>

    <div class="simulasi">
        <div class="d-grid gap-3">
            <!-- Brand -->
            <div class="row">
                <div class="col-md-2">
                    <p class="text-left">Brand</p>
                </div>
                <div class="col-md-7">
                    <select class="form-select" name="" id="brand-dropdown" aria-label="Default select example">
                        <option selected>Pilih Brand</option>
                        @foreach($brand as $b)
                        <option value="{{$b->id}}">{{$b->nama}}</option>
                        @endforeach
                    </select>
                    <input name="name1" id="nex1" value="0" type="hidden">
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-2"></div>
            </div>
            <!-- Socket -->
            <div class="row">
                <div class="col-md-2">
                    <p class="text-left">Socket</p>
                </div>
                <div class="col-md-7">
                    <select class="form-select" name="" id="socket-dropdown" aria-label="Default select example">
                        <option selected>Pilih Brand Dahulu</option>
                        @foreach($socket as $s)
                        <option value="{{$s->id}}">{{$s->nama}}</option>
                        @endforeach
                    </select>
                    <input name="name1" id="nex1" value="0" type="hidden">
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-2"></div>
            </div>
            <!-- Processor -->
            <div class="row">
                <div class="col-md-2">
                    <p class="text-left">Processor</p>
                </div>
                <div class="col-sm-7 kolom">
                    <select class="form-control" name="n1" id="s1"
                        onchange="updateHargax(this,document.getElementById('q1'),document.getElementById('p1'),document.getElementById('nex1'))">
                        <option selected>Pilih Socket Dahulu</option>
                        @foreach($processor as $p)
                        <option value="{{$p->harga}}">{{$p->nama}}</option>
                        @endforeach
                    </select>
                    <input name="name1" id="nex1" type="hidden" value="0">
                </div>
                <div class="col-md-1 kolom">
                    <select class="form-control" name="qty1" id="q1"
                        onchange="updateHarga(this.value, document.getElementById('s1'),document.getElementById('p1'))">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                    </select>
                </div>
                <div class="col-md-2 kolom">
                    <input id="p1" class="form-control" type="text" value="0"
                        style="text-align:right; font-size: medium;" disabled="">
                </div>
            </div>
            <!-- Motherboard -->
            <div class="row">
                <div class="col-md-2">
                    <p class="text-left">Motherboard</p>
                </div>
                <div class="col-sm-7 kolom">
                    <select class="form-control" name="n2" id="s2"
                        onchange="updateHargax(this,document.getElementById('q2'),document.getElementById('p2'),document.getElementById('nex2'))">
                        <option selected>Pilih Socket Dahulu</option>
                        @foreach($motherboard as $m)
                        <option value="{{$m->harga}}">{{$m->nama}}</option>
                        @endforeach
                    </select>
                    <input name="name2" id="nex2" type="hidden" value="0">
                </div>
                <div class="col-md-1 kolom">
                    <select class="form-control" name="qty2" id="q2"
                        onchange="updateHarga(this.value, document.getElementById('s2'),document.getElementById('p2'))">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                    </select>
                </div>
                <div class="col-md-2 kolom">
                    <input id="p2" class="form-control" type="text" value="0"
                        style="text-align:right; font-size: medium;" disabled="">
                </div>
            </div>

        </div>

    </div>


</div>

@endsection