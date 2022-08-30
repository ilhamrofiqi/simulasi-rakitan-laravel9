@extends('layouts.master')
@section('content')

<div class="container custom">
    <div class="header">
        <h3>Edit Casing</h3>
    </div>
    <form action="/casing/{{$casing->id}}" method="POST">
        @method('put')
        @csrf
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nama Casing</label>
            <input value="{{$casing->nama}}" type="text" name="nama" class="form-control"
                id="exampleFormControlInput1" placeholder="Casing">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Harga</label>
            <input value="{{$casing->harga}}" type="number" name="harga" class="form-control"
                id="exampleFormControlInput1" placeholder="Harga (Tanpa titik)">
        </div>
        <input class="btn btn-primary" type="submit" name="submit" value="Edit Casing">
    </form>
</div>

@endsection