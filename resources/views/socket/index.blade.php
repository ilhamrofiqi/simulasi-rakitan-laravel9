@extends('layouts.master')

@section('content')

<div class="header">
        <h3>Data Socket</h3>
    </div>

<div class="container custom">
<a type="button" class="btn btn-primary btn-custom" href="socket/create">Tambah Socket</a>
    <table class="table table-hover table-bordered">
        <tr>
            <th>ID</th>
            <th>BRAND ID</th>
            <th>NAMA</th>
            <th>Aksi</th>
        </tr>
        @foreach($socket as $s)
        <tr>
            <td>{{$s->id}}</td>
            <td>{{$s->brand_id}}</td>
            <td>{{$s->nama}}</td>
            <td>
                <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                    <button type="button" class="btn btn-outline-primary">Edit</button>

                    <button type="button" class="btn btn-outline-danger">Delete</button>
                </div>
            </td>
        </tr>
        @endforeach
    </table>
    
</div>

@endsection