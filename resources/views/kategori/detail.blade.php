@extends('layouts.admin')

@section('judul', 'Detail Kategori Barang')

@section('content')
<div class="p-3">
    <div class="card" style="width: 24rem;">
        <div class="card-body">
            <h5 class="card-title">Detail Kategori Barang ke {{ $kategori->id }}</h5>
            <h2>{{ $kategori->nama_kategori }}</h2>
            <a href="/kategori" class="btn btn-success my-3">Kembali</a>
        </div>
    </div>
</div>
@endsection
