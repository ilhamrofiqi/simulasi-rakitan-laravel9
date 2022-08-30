@extends('layouts.master')
@section('content')

<div class="container custom">
    <div class="header">
        <h3>Edit Power Supply</h3>
    </div>
    <form action="/psu/{{$psu->id}}" method="POST">
        @method('put')
        @csrf
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nama Power Supply</label>
            <input value="{{$psu->nama}}" type="text" name="nama" class="form-control"
                id="exampleFormControlInput1" placeholder="Power Supply">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Harga</label>
            <input value="{{$psu->harga}}" type="number" name="harga" class="form-control"
                id="exampleFormControlInput1" placeholder="Harga (Tanpa titik)">
        </div>
        <input class="btn btn-primary" type="submit" name="submit" value="Edit Power Supply">
    </form>
</div>

@endsection