
@extends('layouts.app')

@section('title', 'Edit Produk')

@section('content')
<div class="card shadow-sm">
    <div class="card-header bg-white">
        <h4 class="mb-0">Edit Produk</h4>
    </div>

    <div class="card-body">
        <form action="{{ route('produk.update', $produk) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="nama" class="form-label">Nama Produk</label>
                <input
                    type="text"
                    name="nama"
                    id="nama"
                    class="form-control @error('nama') is-invalid @enderror"
                    value="{{ old('nama', $produk->nama) }}"
                    required
                >
                @error('nama')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="deskripsi" class="form-label">Deskripsi</label>
                <textarea
                    name="deskripsi"
                    id="deskripsi"
                    class="form-control @error('deskripsi') is-invalid @enderror"
                    rows="3"
                >{{ old('deskripsi', $produk->deskripsi) }}</textarea>
                @error('deskripsi')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="harga" class="form-label">Harga (Rp)</label>
                <input
                    type="number"
                    name="harga"
                    id="harga"
                    min="0"
                    step="0.01"
                    class="form-control @error('harga') is-invalid @enderror"
                    value="{{ old('harga', $produk->harga) }}"
                    required
                >
                @error('harga')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="stok" class="form-label">Stok</label>
                <input
                    type="number"
                    name="stok"
                    id="stok"
                    min="0"
                    step="1"
                    class="form-control @error('stok') is-invalid @enderror"
                    value="{{ old('stok', $produk->stok) }}"
                    required
                >
                @error('stok')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">
                Update
            </button>

            <a href="{{ route('produk.index') }}" class="btn btn-secondary">
                Batal
            </a>
        </form>
    </div>
</div>
@endsection
