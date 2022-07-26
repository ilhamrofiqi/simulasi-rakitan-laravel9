@extends('layouts.master')

@section('content')

<div class="container custom">
    <div class="header">
        <h3>Tambah Socket</h3>
    </div>
    <form action="/socket/store" method="POST">
        @csrf
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Brand</label>
            <select class="form-select" name="brand_id" aria-label="Default select example">
                <option selected>Pilih Brand</option>
                <option value="1">Intel</option>
                <option value="2">AMD</option>
            </select>

        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nama Socket</label>
            <input type="text" name="nama" class="form-control" id="exampleFormControlInput1" placeholder="Socket">
        </div>
        <input class="btn btn-primary" type="submit" name="submit" value="Tambah Socket">
    </form>
</div>

@endsection
