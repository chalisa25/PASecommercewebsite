@extends('layouts.admin')

@section('judul', 'Tambah Kategori Barang')

@section('content')
<form action="/kategori" method="POST">
    @csrf
    <div class="form-group p-3">
        <label>Nama Kategori Barang</label>
        <input type="text" name='nama' class="form-control" placeholder="Masukan Kategori Barang">
        @error('nama')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="p-3">
        <a href="/kategori" class="btn btn-success my-3">Kembali</a>
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>

@endsection
