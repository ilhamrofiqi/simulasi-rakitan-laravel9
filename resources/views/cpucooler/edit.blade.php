@extends('layouts.master')
@section('content')

<div class="container custom">
    <div class="header">
        <h3>Edit CPU Cooler</h3>
    </div>
    <form action="/cpucooler/{{$cpucooler->id}}" method="POST">
        @method('put')
        @csrf
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nama CPU Cooler</label>
            <input value="{{$cpucooler->nama}}" type="text" name="nama" class="form-control"
                id="exampleFormControlInput1" placeholder="CPU Cooler">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Harga</label>
            <input value="{{$cpucooler->harga}}" type="number" name="harga" class="form-control"
                id="exampleFormControlInput1" placeholder="Harga (Tanpa titik)">
        </div>
        <input class="btn btn-primary" type="submit" name="submit" value="Edit CPU Cooler">
    </form>
</div>

@endsection