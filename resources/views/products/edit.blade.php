@extends('layouts.layout')
@section('content')
    <div class="container">
        <h1>Edit Produk</h1>
        <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="name" class="form-label">Nama Produk</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $product->name }}" required>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Deskripsi</label>
                <textarea class="form-control" id="description" name="description" required>{{ $product->description }}</textarea>
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Harga</label>
                <input type="number" step="0.01" class="form-control" id="price" name="price"
                    value="{{ $product->price }}" required>
            </div>

            <div class="mb-3">
                <label for="images">Gambar Produk</label>
                <input type="file" name="images[]" id="images" class="form-control" multiple required>
            </div>
            <button type="submit" class="btn btn-success">Update Produk</button><a href="{{ route('products.index') }}"
                class="btn btn-secondary">Kembali</a>
        </form>
    </div>
@endsection
