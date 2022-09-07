@extends('layouts.master')
@section('content')

<div class="container mb-5">
    <div class="header">
        <h3>Data Mouse</h3>
    </div>
    <a href="mouse/create" type="button" class="btn btn-primary mb-3">Tambah Mouse</a>
    <table class="table table-hover table-bordered">
        <tr>
            <th>ID</th>
            <th>NAMA</th>
            <th>HARGA</th>
            <th>Aksi</th>
        </tr>
        @foreach($mouse as $item)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$item->nama}}</td>
            <td>{{$item->harga}}</td>
            <td>
                <div class="btn-toolbar" role="toolbar">
                    <div class="btn-group me-2 mb-1" role="group">
                        <a href="/mouse/{{$item->id}}/edit" type="button" class="btn btn-outline-primary">Edit</a>
                    </div>
                    <div class="btn-group me-2" role="group" aria-label="Basic mixed style example">
                        <form action="/mouse/{{$item->id}}" method="POST">
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