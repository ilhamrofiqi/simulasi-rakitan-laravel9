@extends('layouts.master')
@section('content')

<div class="container">
    <div class="header">
        <h3>Tambah CPU Cooler</h3>
    </div>
    <form action="/cpucooler/store" method="POST">
        @csrf 
        <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Nama CPU Cooler</label>
            <input type="text" name="nama" class="form-control" placeholder="CPU Cooler" id="exampleFormControlInput1" >
        </div>
        <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Harga</label>
            <input type="number" name="harga" class="form-control" id="exampleFormControlInput1" placeholder="Harga (Tanpa titik)">
        </div>
        <input class="btn btn-primary" type="submit" name="submit" value="Tambah CPU Cooler">
    </form>
</div>

@endsection