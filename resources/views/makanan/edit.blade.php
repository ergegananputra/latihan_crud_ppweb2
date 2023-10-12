@extends('layouts.app')

@section('content')
<div class="d-flex">
    <form action="{{route('makanan.update', $makanan->id)}}" method="post">
        @csrf
        <div class="form-group row">
            <label for="nama_menu" class="col">Nama Menu</label>
            <div class="col">
                <input type="text" name="nama" id="nama" class="form-control" value="{{$makanan->nama}}">
            </div>
        </div>
        <div class="form-group row">
            <label for="harga" class="col">Harga</label>
            <div class="col">
                <input type="text" name="harga" id="harga" class="form-control" value="{{$makanan->harga}}">
            </div>
        </div>
        <div class="form-group row">
            <label for="deskripsi" class="col">Deskripsi</label>
            <div class="col">
                <input type="text" name="deskripsi" id="deskripsi" class="form-control" value="{{$makanan->deskripsi}}">
            </div>
        </div>
        <div class="form-group row">
            <label for="rating" class="col">Rating</label>
            <div class="col">
                <input type="text" name="rating" id="rating" class="form-control" value="{{$makanan->rating}}">
            </div>
        </div>
        <div class="form-group row">
            <div class="col">
                <a href="/makanan" class="btn btn-danger">Kembali</a>
            </div>
            <div class="col">
                <button type="submit" class="btn btn-success">Simpan</button>
            </div>
        </div>
    </form>
</div>
@endsection