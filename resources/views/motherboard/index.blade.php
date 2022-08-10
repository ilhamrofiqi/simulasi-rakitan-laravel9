@extends('layouts.master')
@section('content')

<div class="header">
    <h3>Data Motherboard</h3>
</div>

<div class="container custom">
    <a href="motherboard/create" type="button" class="btn btn-primary mb-3">Tambah Motherboard</a>
    <table class="table table-hover table-bordered">
        <tr>
            <th>ID</th>
            <th>SOCKET</th>
            <th>NAMA</th>
            <th>HARGA</th>
            <th>Aksi</th>
        </tr>
        @foreach($motherboard as $item)
        <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->socket['nama']}}</td>
            <td>{{$item->nama}}</td>
            <td>{{$item->harga}}</td>
            <td>
                <div class="btn-toolbar" role="toolbar">
                    <div class="btn-group me-2 mb-1" role="group">
                        <a href="/motherboard/{{$item->id}}/edit" type="button" class="btn btn-outline-primary">Edit</a>
                    </div>
                    <div class="btn-group me-2" role="group" aria-label="Basic mixed style example">
                        <form action="/motherboard/{{$item->id}}" method="POST">
                            @csrf
                            @method('delete')
                            <input type="submit" class="btn btn-outline-danger" value="Delete">
                        </form>
                    </div>
                </div>
            </td>
        </tr>
        @endforeach
    </table>
</div>

@endsection