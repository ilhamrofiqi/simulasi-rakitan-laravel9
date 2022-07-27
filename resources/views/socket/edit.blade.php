@extends('layouts.master')

@section('content')

<div class="container custom">
    <div class="header">
        <h3>Edit Socket</h3>
    </div>
    <form action="/socket/{{$socket->id}}" method="POST">
        @method('put')
        @csrf
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Socket ID</label>
            <input value="{{$socket->id}}" type="text" name="nama" class="form-control" id="exampleFormControlInput1" placeholder="Socket">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Brand</label>
            <select class="form-select" name="brand_id" aria-label="Default select example">
                <option selected>Pilih Brand</option>
                <option value="1" @if($socket->brand_id == "1") selected @endif>Intel</option>
                <option value="2" @if($socket->brand_id == "2") selected @endif>AMD</option>
            </select>

        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nama Socket</label>
            <input value="{{$socket->nama}}" type="text" name="nama" class="form-control" id="exampleFormControlInput1" placeholder="Socket">
        </div>
        <input class="btn btn-primary" type="submit" name="submit" value="Tambah Socket">
    </form>
</div>

@endsection
