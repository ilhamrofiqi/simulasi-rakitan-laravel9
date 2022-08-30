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
                        <option selected value="0">Pilih Brand</option>
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
                        <option value="0" selected>Pilih Socket Dahulu</option>
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
                        <option value="0" selected>Pilih Socket Dahulu</option>
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

            <!-- Hardisk -->
            <div class="row">
                <div class="col-md-2">
                    <p class="text-left">Hardisk</p>
                </div>
                <div class="col-sm-7 kolom">
                    <select class="form-control" name="n3" id="s3"
                        onchange="updateHargax(this,document.getElementById('q3'),document.getElementById('p3'),document.getElementById('nex3'))">
                        <option value="0" selected>Pilih Hardisk</option>
                        @foreach($hardisk as $item)
                        <option value="{{$item->harga}}">{{$item->nama}}</option>
                        @endforeach
                    </select>
                    <input name="name3" id="nex3" type="hidden" value="0">
                </div>
                <div class="col-md-1 kolom">
                    <select class="form-control" name="qty3" id="q3"
                        onchange="updateHarga(this.value, document.getElementById('s3'),document.getElementById('p3'))">
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
                    <input id="p3" class="form-control" type="text" value="0"
                        style="text-align:right; font-size: medium;" disabled="">
                </div>
            </div>

            <!-- RAM -->
            <div class="row">
                <div class="col-md-2">
                    <p class="text-left">RAM</p>
                </div>
                <div class="col-sm-7 kolom">
                    <select class="form-control" name="n4" id="s4"
                        onchange="updateHargax(this,document.getElementById('q4'),document.getElementById('p4'),document.getElementById('nex4'))">
                        <option value="0" selected>Pilih RAM</option>
                        @foreach($ram as $item)
                        <option value="{{$item->harga}}">{{$item->nama}}</option>
                        @endforeach
                    </select>
                    <input name="name4" id="nex4" type="hidden" value="0">
                </div>
                <div class="col-md-1 kolom">
                    <select class="form-control" name="qty4" id="q4"
                        onchange="updateHarga(this.value, document.getElementById('s4'),document.getElementById('p4'))">
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
                    <input id="p4" class="form-control" type="text" value="0"
                        style="text-align:right; font-size: medium;" disabled="">
                </div>
            </div>

            <!-- SSD -->
            <div class="row">
                <div class="col-md-2">
                    <p class="text-left">SSD</p>
                </div>
                <div class="col-sm-7 kolom">
                    <select class="form-control" name="n5" id="s5"
                        onchange="updateHargax(this,document.getElementById('q5'),document.getElementById('p5'),document.getElementById('nex5'))">
                        <option value="0" selected>Pilih SSD</option>
                        @foreach($ssd as $item)
                        <option value="{{$item->harga}}">{{$item->nama}}</option>
                        @endforeach
                    </select>
                    <input name="name5" id="nex5" type="hidden" value="0">
                </div>
                <div class="col-md-1 kolom">
                    <select class="form-control" name="qty5" id="q5"
                        onchange="updateHarga(this.value, document.getElementById('s5'),document.getElementById('p5'))">
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
                    <input id="p5" class="form-control" type="text" value="0"
                        style="text-align:right; font-size: medium;" disabled="">
                </div>
            </div>

            <!-- VGA -->
            <div class="row">
                <div class="col-md-2">
                    <p class="text-left">VGA</p>
                </div>
                <div class="col-sm-7 kolom">
                    <select class="form-control" name="n6" id="s6"
                        onchange="updateHargax(this,document.getElementById('q6'),document.getElementById('p6'),document.getElementById('nex6'))">
                        <option value="0" selected>Pilih VGA</option>
                        @foreach($vga as $item)
                        <option value="{{$item->harga}}">{{$item->nama}}</option>
                        @endforeach
                    </select>
                    <input name="name6" id="nex6" type="hidden" value="0">
                </div>
                <div class="col-md-1 kolom">
                    <select class="form-control" name="qty6" id="q6"
                        onchange="updateHarga(this.value, document.getElementById('s6'),document.getElementById('p6'))">
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
                    <input id="p6" class="form-control" type="text" value="0"
                        style="text-align:right; font-size: medium;" disabled="">
                </div>
            </div>

            <!-- Power Supply -->
            <div class="row">
                <div class="col-md-2">
                    <p class="text-left">Power Supply</p>
                </div>
                <div class="col-sm-7 kolom">
                    <select class="form-control" name="n7" id="s7"
                        onchange="updateHargax(this,document.getElementById('q7'),document.getElementById('p7'),document.getElementById('nex7'))">
                        <option value="0" selected>Pilih Power Supply</option>
                        @foreach($psu as $item)
                        <option value="{{$item->harga}}">{{$item->nama}}</option>
                        @endforeach
                    </select>
                    <input name="name6" id="nex6" type="hidden" value="0">
                </div>
                <div class="col-md-1 kolom">
                    <select class="form-control" name="qty7" id="q7"
                        onchange="updateHarga(this.value, document.getElementById('s7'),document.getElementById('p7'))">
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
                    <input id="p7" class="form-control" type="text" value="0"
                        style="text-align:right; font-size: medium;" disabled="">
                </div>
            </div>

            <!-- Casing -->

            <!-- Keyboard -->

        
<!-- end section -->
        </div>
    </div>
</div>

@endsection