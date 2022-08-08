@extends('layouts.master')
@section('content')

<div class="container custom">
    <div class="header">
        <h3>Tambah Motherboard</h3>
    </div>
    <form action="/motherboard/store" method="POST">
        @csrf 
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Socket</label>
            <select name="socket_id" class="form-select" aria-label="Default select example" id="">
                <option selected>Pilih Socket</option>
                @foreach($socket as $item)
                <option value="{{$item->id}}">{{$item->nama}}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Nama Motherboard</label>
            <input type="text" name="nama" class="form-control" id="exampleFormControlInput1" placeholder="Motherboard">
        </div>
        <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Harga</label>
            <input type="number" name="harga" class="form-control" id="exampleFormControlInput1" placeholder="Harga (Tanpa titik)">
        </div>
        <input class="btn btn-primary" type="submit" name="submit" value="Tambah Motherboard">
    </form>
</div>

@endsection