@extends('layouts.master')

@section('content')

<div class="header">
    <h3>Data Socket</h3>
</div>

<div class="container custom">
    <a type="button" class="btn btn-primary mb-3" href="socket/create">Tambah Socket</a>
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
                <div class="btn-toolbar" role="toolbar">
                    <div class="btn-group me-2 mb-1" role="group">
                        <a type="button" class="btn btn-outline-primary" href="/socket/{{$s->id}}/edit">Edit</a>
                    </div>
                    <div class="btn-group me-2" role="group" aria-label="Basic mixed styles example">
                        <form action="/socket/{{$s->id}}" method="POST">
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
