@extends('layouts.app')

@section('content')
    <table class="table table-striped">
        <thead>
            <th scope="col">ID</th>
            <th scope="col">Nama Menu</th>
            <th scope="col">Harga</th>
            <th scope="col">Deskripsi</th>
            <th scope="col">Rating</th>
            <th scope="col" colspan="2">Aksi</th>
        </thead>
        <tbody>
            @foreach ($list_makanan as $makanan)
                <tr>
                    <td scope="col">{{$makanan->id}}</td>
                    <td scope="col">{{$makanan->nama_menu}}</td>
                    <td scope="col">{{$makanan->harga}}</td>
                    <td scope="col">{{$makanan->deskripsi}}</td>
                    <td scope="col">{{$makanan->rating}}</td>
                    <td scope="col">
                        <a href="{{route('makanan.edit', $makanan->id)}}" class="btn btn-primary">Edit</a>
                    </td>
                    <td scope="col">
                        <form action="{{route('makanan.destroy', $makanan->id)}}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{route('makanan.create')}}" class="btn btn-success">Tambah Menu</a>
@endsection