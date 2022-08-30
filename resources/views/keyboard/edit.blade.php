@extends('layouts.master')
@section('content')

<div class="container custom">
    <div class="header">
        <h3>Edit Keyboard</h3>
    </div>
    <form action="/keyboard/{{$keyboard->id}}" method="POST">
        @method('put')
        @csrf
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nama Keyboard</label>
            <input value="{{$keyboard->nama}}" type="text" name="nama" class="form-control"
                id="exampleFormControlInput1" placeholder="Keyboard">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Harga</label>
            <input value="{{$keyboard->harga}}" type="number" name="harga" class="form-control"
                id="exampleFormControlInput1" placeholder="Harga (Tanpa titik)">
        </div>
        <input class="btn btn-primary" type="submit" name="submit" value="Edit Keyboard">
    </form>
</div>

@endsection