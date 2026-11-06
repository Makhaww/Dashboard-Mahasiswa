
@extends('layouts.app')

@section('title', 'Detail Produk')

@section('content')
<div class="card shadow-sm">
    <div class="card-header bg-white">
        <h4 class="mb-0">Detail Produk</h4>
    </div>

    <div class="card-body">
        <table class="table">
            <tr>
                <th style="width: 180px">ID</th>
                <td>{{ $produk->id }}</td>
            </tr>
            <tr>
                <th>Nama Produk</th>
                <td>{{ $produk->nama }}</td>
            </tr>
            <tr>
                <th>Deskripsi</th>
                <td>{{ $produk->deskripsi ?: '-' }}</td>
            </tr>
            <tr>
                <th>Harga</th>
                <td>Rp {{ number_format($produk->harga, 0, ',', '.') }}</td>
            </tr>
            <tr>
                <th>Stok</th>
                <td>{{ $produk->stok }}</td>
            </tr>
            <tr>
                <th>Dibuat</th>
                <td>{{ $produk->created_at->format('d-m-Y H:i') }}</td>
            </tr>
            <tr>
                <th>Diperbarui</th>
                <td>{{ $produk->updated_at->format('d-m-Y H:i') }}</td>
            </tr>
        </table>

        <a href="{{ route('produk.edit', $produk) }}" class="btn btn-warning">
            Edit
        </a>

        <a href="{{ route('produk.index') }}" class="btn btn-secondary">
            Kembali
        </a>
    </div>
</div>
@endsection
