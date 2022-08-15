@extends('layouts.master')
@section('content')

<div class="container custom">
    <div class="header">
        <h3>Edit RAM</h3>
    </div>
    <form action="/ram/{{$ram->id}}" method="POST">
        @method('put')
        @csrf
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nama RAM</label>
            <input value="{{$ram->nama}}" type="text" name="nama" class="form-control"
                id="exampleFormControlInput1" placeholder="Ram">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Harga</label>
            <input value="{{$ram->harga}}" type="number" name="harga" class="form-control"
                id="exampleFormControlInput1" placeholder="Harga (Tanpa titik)">
        </div>
        <input class="btn btn-primary" type="submit" name="submit" value="Edit RAM">
    </form>
</div>



@endsection