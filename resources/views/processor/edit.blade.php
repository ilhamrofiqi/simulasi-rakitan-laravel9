@extends('layouts.master')

@section('content')

<div class="container custom">
    <div class="header">
        <h3>Edit Processor</h3>
    </div>
    <form action="/processor/{{$processor->id}}" method="POST">
        @method('put')
        @csrf
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Socket</label>
            <select class="form-select" name="socket_id" aria-label="Default select example">
                <option selected>Pilih Socket</option>
                @foreach($socket as $s)
                <option value="{{$s->id}}" {{$processor->socket_id == $s->id ? 'selected' : ''}}>{{$s->nama}}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nama Processor</label>
            <input value="{{$processor->nama}}" type="text" name="nama" class="form-control" id="exampleFormControlInput1" placeholder="Processor">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Harga</label>
            <input value="{{$processor->harga}}" type="number" name="harga" class="form-control" id="exampleFormControlInput1" placeholder="Harga (Tanpa titik)">
        </div>

        <input class="btn btn-primary" type="submit" name="submit" value="Edit Processor">
    </form>
</div>

@endsection
