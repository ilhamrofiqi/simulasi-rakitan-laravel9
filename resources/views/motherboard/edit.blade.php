@extends('layouts.master')
@section('content')

<div class="container custom">
    <div class="header">
        <h3>Edit Motherboard</h3>
    </div>
    <form action="/motherboard/{{$motherboard->id}}" method="POST">
        @method('put')
        @csrf
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Socket</label>
            <select class="form-select" name="socket_id" aria-label="Default select example">
                <option selected>Pilih Socket</option>
                @foreach($socket as $item)
                <option value="{{$item->id}}" {{$motherboard->socket_id == $item->id ? 'selected' : ''}}>{{$item->nama}}
                </option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nama Motherboard</label>
            <input value="{{$motherboard->nama}}" type="text" name="nama" class="form-control"
                id="exampleFormControlInput1" placeholder="Motherboard">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Harga</label>
            <input value="{{$motherboard->harga}}" type="number" name="harga" class="form-control"
                id="exampleFormControlInput1" placeholder="Harga (Tanpa titik)">
        </div>
        <input class="btn btn-primary" type="submit" name="submit" value="Edit Motherboard">
    </form>
</div>



@endsection