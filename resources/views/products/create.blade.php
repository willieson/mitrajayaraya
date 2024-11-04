@extends('layouts.layout')
@section('content')
    <div class="container">
        <h1>Tambah Produk</h1>
        <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Nama Produk</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Deskripsi</label>
                <textarea class="form-control" id="description" name="description" required></textarea>
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Harga</label>
                <input type="number" step="0.01" class="form-control" id="price" name="price" required>
            </div>
            <div class="mb-3">
                <label for="images">Gambar Produk</label>
                <input type="file" name="images[]" id="images" class="form-control" multiple required>
            </div>
            <button type="submit" class="btn btn-success">Simpan Produk</button> <a href="{{ route('products.index') }}"
                class="btn btn-secondary">Kembali</a>
        </form>
    </div>
@endsection
