@extends('layouts.master')
@section('content')

<div class="container custom">
    <div class="header">
        <h3>Edit Monitor</h3>
    </div>
    <form action="/monitor/{{$monitor->id}}" method="POST">
        @method('put')
        @csrf
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nama Monitor</label>
            <input value="{{$monitor->nama}}" type="text" name="nama" class="form-control"
                id="exampleFormControlInput1" placeholder="Monitor">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Harga</label>
            <input value="{{$monitor->harga}}" type="number" name="harga" class="form-control"
                id="exampleFormControlInput1" placeholder="Harga (Tanpa titik)">
        </div>
        <input class="btn btn-primary" type="submit" name="submit" value="Edit Monitor">
    </form>
</div>

@endsection