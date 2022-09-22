@extends('layouts.master')
@section('content')

<div class="container custom">
    <div class="header">
        <h3>Edit Fan</h3>
    </div>
    <form action="/fan/{{$fan->id}}" method="POST">
        @method('put')
        @csrf
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nama Fan</label>
            <input value="{{$fan->nama}}" type="text" name="nama" class="form-control"
                id="exampleFormControlInput1" placeholder="Fan">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Harga</label>
            <input value="{{$fan->harga}}" type="number" name="harga" class="form-control"
                id="exampleFormControlInput1" placeholder="Harga (Tanpa titik)">
        </div>
        <input class="btn btn-primary" type="submit" name="submit" value="Edit Fan">
    </form>
</div>

@endsection