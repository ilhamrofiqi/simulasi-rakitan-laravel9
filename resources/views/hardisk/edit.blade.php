@extends('layouts.master')
@section('content')

<div class="container custom">
    <div class="header">
        <h3>Edit Hardisk</h3>
    </div>
    <form action="/hardisk/{{$hardisk->id}}" method="POST">
        @method('put')
        @csrf
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nama Hardisk</label>
            <input value="{{$hardisk->nama}}" type="text" name="nama" class="form-control"
                id="exampleFormControlInput1" placeholder="Hardisk">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Harga</label>
            <input value="{{$hardisk->harga}}" type="number" name="harga" class="form-control"
                id="exampleFormControlInput1" placeholder="Harga (Tanpa titik)">
        </div>
        <input class="btn btn-primary" type="submit" name="submit" value="Edit Hardisk">
    </form>
</div>



@endsection