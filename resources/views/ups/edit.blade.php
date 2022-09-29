@extends('layouts.master')
@section('content')

<div class="container custom">
    <div class="header">
        <h3>Edit UPS</h3>
    </div>
    <form action="/ups/{{$ups->id}}" method="POST">
        @method('put')
        @csrf
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nama UPS</label>
            <input value="{{$ups->nama}}" type="text" name="nama" class="form-control"
                id="exampleFormControlInput1" placeholder="UPS">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Harga</label>
            <input value="{{$ups->harga}}" type="number" name="harga" class="form-control"
                id="exampleFormControlInput1" placeholder="Harga (Tanpa titik)">
        </div>
        <input class="btn btn-primary" type="submit" name="submit" value="Edit UPS">
    </form>
</div>

@endsection