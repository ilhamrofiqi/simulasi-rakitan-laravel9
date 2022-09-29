@extends('layouts.master')
@section('content')

<div class="container custom">
    <div class="header">
        <h3>Edit Headset</h3>
    </div>
    <form action="/headset/{{$headset->id}}" method="POST">
        @method('put')
        @csrf
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nama Headset</label>
            <input value="{{$headset->nama}}" type="text" name="nama" class="form-control"
                id="exampleFormControlInput1" placeholder="Headset">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Harga</label>
            <input value="{{$headset->harga}}" type="number" name="harga" class="form-control"
                id="exampleFormControlInput1" placeholder="Harga (Tanpa titik)">
        </div>
        <input class="btn btn-primary" type="submit" name="submit" value="Edit Headset">
    </form>
</div>

@endsection