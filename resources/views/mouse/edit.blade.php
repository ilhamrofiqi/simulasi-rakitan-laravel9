@extends('layouts.master')
@section('content')

<div class="container custom">
    <div class="header">
        <h3>Edit Mouse</h3>
    </div>
    <form action="/mouse/{{$mouse->id}}" method="POST">
        @method('put')
        @csrf
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nama Mouse</label>
            <input value="{{$mouse->nama}}" type="text" name="nama" class="form-control"
                id="exampleFormControlInput1" placeholder="Mouse">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Harga</label>
            <input value="{{$mouse->harga}}" type="number" name="harga" class="form-control"
                id="exampleFormControlInput1" placeholder="Harga (Tanpa titik)">
        </div>
        <input class="btn btn-primary" type="submit" name="submit" value="Edit Mouse">
    </form>
</div>

@endsection