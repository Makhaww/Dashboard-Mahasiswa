
@extends('layouts.app')

@section('title', 'Edit Mahasiswa')

@section('content')
<div class="card shadow-sm">
    <div class="card-header bg-white">
        <h4>Edit Mahasiswa</h4>
    </div>

    <div class="card-body">
        <form action="{{ route('admin.mahasiswa.update', $mahasiswa) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="nim" class="form-label">NIM</label>
                <input type="text" id="nim" name="nim"
                    class="form-control @error('nim') is-invalid @enderror"
                    value="{{ old('nim', $mahasiswa->nim) }}"
                    maxlength="20" required>
                @error('nim') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>

            <div class="mb-3">
                <label for="nama" class="form-label">Nama Lengkap</label>
                <input type="text" id="nama" name="nama"
                    class="form-control @error('nama') is-invalid @enderror"
                    value="{{ old('nama', $mahasiswa->nama) }}" required>
                @error('nama') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" id="email" name="email"
                    class="form-control @error('email') is-invalid @enderror"
                    value="{{ old('email', $mahasiswa->email) }}" required>
                @error('email') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>

            <div class="mb-3">
                <label for="program_studi" class="form-label">Program Studi</label>
                <select id="program_studi" name="program_studi"
                    class="form-select @error('program_studi') is-invalid @enderror"
                    required>
                    <option value="">-- Pilih Program Studi --</option>
                    @foreach (['Informatika', 'Sistem Informasi', 'Manajemen', 'Akuntansi', 'Teknik Industri'] as $prodi)
                        <option value="{{ $prodi }}"
                            @selected(old('program_studi', $mahasiswa->program_studi) === $prodi)>
                            {{ $prodi }}
                        </option>
                    @endforeach
                </select>
                @error('program_studi') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>

            <div class="mb-3">
                <label for="semester" class="form-label">Semester</label>
                <select id="semester" name="semester"
                    class="form-select @error('semester') is-invalid @enderror"
                    required>
                    <option value="">-- Pilih Semester --</option>
                    @for ($i = 1; $i <= 14; $i++)
                        <option value="{{ $i }}"
                            @selected((string) old('semester', $mahasiswa->semester) === (string) $i)>
                            Semester {{ $i }}
                        </option>
                    @endfor
                </select>
                @error('semester') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>

            <div class="mb-3">
                <label for="status_aktif" class="form-label">Status Aktif</label>
                <select id="status_aktif" name="status_aktif"
                    class="form-select @error('status_aktif') is-invalid @enderror"
                    required>
                    <option value="1"
                        @selected((string) old('status_aktif', (int) $mahasiswa->status_aktif) === '1')>
                        Aktif
                    </option>
                    <option value="0"
                        @selected((string) old('status_aktif', (int) $mahasiswa->status_aktif) === '0')>
                        Tidak Aktif
                    </option>
                </select>
                @error('status_aktif') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{ route('admin.mahasiswa.index') }}" class="btn btn-secondary">Batal</a>
        </form>
    </div>
</div>
@endsection
