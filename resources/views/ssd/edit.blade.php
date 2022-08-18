@extends('layouts.master')
@section('content')

<div class="container custom">
    <div class="header">
        <h3>Edit SSD</h3>
    </div>
    <form action="/ssd/{{$ssd->id}}" method="POST">
        @method('put')
        @csrf
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nama SSD</label>
            <input value="{{$ssd->nama}}" type="text" name="nama" class="form-control"
                id="exampleFormControlInput1" placeholder="SSD">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Harga</label>
            <input value="{{$ssd->harga}}" type="number" name="harga" class="form-control"
                id="exampleFormControlInput1" placeholder="Harga (Tanpa titik)">
        </div>
        <input class="btn btn-primary" type="submit" name="submit" value="Edit SSD">
    </form>
</div>

@endsection