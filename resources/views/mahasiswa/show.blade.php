@extends('layouts.app')
@section('title', 'Detail Mahasiswa')
@section('content')
<div class="card shadow-sm">
    <div class="card-header bg-white">
        <h4 class="mb-0">Detail Mahasiswa</h4>
    </div>

    <div class="card-body">
        <table class="table">
            <tr>
                <th style="width: 200px">NIM</th>
                <td>{{ $mahasiswa->nim }}</td>
            </tr>
            <tr>
                <th>Nama</th>
                <td>{{ $mahasiswa->nama }}</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>{{ $mahasiswa->email }}</td>
            </tr>
            <tr>
                <th>Program Studi</th>
                <td>{{ $mahasiswa->program_studi }}</td>
            </tr>
            <tr>
                <th>Semester</th>
                <td>{{ $mahasiswa->semester }}</td>
            </tr>
            <tr>
                <th>Status Aktif</th>
                <td>
                    @if ($mahasiswa->status_aktif)
                        <span class="badge bg-success">Aktif</span>
                    @else
                        <span class="badge bg-secondary">Tidak Aktif</span>
                    @endif
                </td>
            </tr>
            <tr>
                <th>Dibuat</th>
                <td>{{ $mahasiswa->created_at->format('d-m-Y H:i') }}</td>
            </tr>
            <tr>
                <th>Diperbarui</th>
                <td>{{ $mahasiswa->updated_at->format('d-m-Y H:i') }}</td>
            </tr>
        </table>

        <a href="{{ route('admin.mahasiswa.edit', $mahasiswa) }}"
           class="btn btn-warning">Edit</a>

        <a href="{{ route('admin.mahasiswa.index') }}"
           class="btn btn-secondary">Kembali</a>
    </div>
</div>
@endsection