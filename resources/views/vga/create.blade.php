@extends('layouts.master')
@section('content')

<div class="container">
    <div class="header">
        <h3>Tambah VGA</h3>
    </div>
    <form action="/vga/store" method="POST">
        @csrf 
        <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Nama VGA</label>
            <input type="text" name="nama" class="form-control" placeholder="VGA" id="exampleFormControlInput1" >
        </div>
        <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Harga</label>
            <input type="number" name="harga" class="form-control" id="exampleFormControlInput1" placeholder="Harga (Tanpa titik)">
        </div>
        <input class="btn btn-primary" type="submit" name="submit" value="Tambah VGA">
    </form>
</div>

@endsection