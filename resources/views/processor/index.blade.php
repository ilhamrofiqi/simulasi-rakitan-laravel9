@extends('layouts.master')

@section('content')

<div class="header">
    <h3>Data Processor</h3>
</div>

<div class="container custom">
    <a type="button" class="btn btn-primary mb-3" href="processor/create">Tambah Processor</a>
    <table class="table table-hover table-bordered">
        <tr>
            <th>ID</th>
            <th>SOCKET ID</th>
            <th>NAMA</th>
            <th>HARGA</th>
            <th>Aksi</th>
        </tr>
        @foreach($processor as $item)
        <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->socket_id}}</td>
            <td>{{$item->nama}}</td>
            <td>{{$item->harga}}</td>
            <td>
                <div class="btn-toolbar" role="toolbar">
                    <div class="btn-group me-2 mb-1" role="group">
                        <a type="button" class="btn btn-outline-primary" href="/processor/{{$item->id}}/edit">Edit</a>
                    </div>
                    <div class="btn-group me-2" role="group" aria-label="Basic mixed styles example">
                        <form action="/processor/{{$item->id}}" method="POST">
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
