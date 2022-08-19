@extends('layouts.master')
@section('content')

<div class="container custom">
    <div class="header">
        <h3>Edit VGA</h3>
    </div>
    <form action="/vga/{{$vga->id}}" method="POST">
        @method('put')
        @csrf
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nama VGA</label>
            <input value="{{$vga->nama}}" type="text" name="nama" class="form-control"
                id="exampleFormControlInput1" placeholder="VGA">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Harga</label>
            <input value="{{$vga->harga}}" type="number" name="harga" class="form-control"
                id="exampleFormControlInput1" placeholder="Harga (Tanpa titik)">
        </div>
        <input class="btn btn-primary" type="submit" name="submit" value="Edit VGA">
    </form>
</div>

@endsection