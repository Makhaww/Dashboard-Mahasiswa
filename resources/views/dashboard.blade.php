@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <x-alert type="success" class="mb-6">
        Selamat datang, {{ $admin }}! Data dashboard berhasil dimuat.
    </x-alert>

    {{-- Kartu statistik --}}
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 mb-6">
        <x-card>
            <p class="text-sm text-gray-500">🎓 Total Mahasiswa</p>
            <p class="text-3xl font-bold mt-1">{{ $stats['total'] }}</p>
        </x-card>
        <x-card>
            <p class="text-sm text-gray-500">✅ Mahasiswa Aktif</p>
            <p class="text-3xl font-bold mt-1 text-green-600">{{ $stats['aktif'] }}</p>
        </x-card>
        <x-card>
            <p class="text-sm text-gray-500">⏸️ Mahasiswa Cuti</p>
            <p class="text-3xl font-bold mt-1 text-yellow-600">{{ $stats['cuti'] }}</p>
        </x-card>
        <x-card>
            <p class="text-sm text-gray-500">⛔ Mahasiswa Nonaktif</p>
            <p class="text-3xl font-bold mt-1 text-red-600">{{ $stats['nonaktif'] }}</p>
        </x-card>
    </div>

    {{-- Pengujian slot (langkah 17) --}}
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-4 mb-6">
        <x-panel>
            <x-slot:header>
                <h3 class="font-semibold">Tentang Dashboard</h3>
                <p class="text-xs text-gray-500">Ringkasan data akademik mahasiswa.</p>
            </x-slot:header>
            Halaman ini menampilkan statistik dan mahasiswa terbaru.
        </x-panel>

        <x-panel>
            <x-slot:header><h3 class="font-semibold">Aksi Cepat</h3></x-slot:header>
            <x-slot:actions><x-button>+ Tambah</x-button></x-slot:actions>
            Tambahkan data mahasiswa baru dari sini.
        </x-panel>
    </div>

    {{-- Tabel mahasiswa terbaru --}}
    <x-panel>
        <x-slot:header><h3 class="font-semibold">Mahasiswa Terbaru</h3></x-slot:header>

        <table class="w-full text-sm text-left">
            <thead class="bg-gray-50 text-gray-600">
                <tr>
                    <th class="px-3 py-2 w-12">No</th>
                    <th class="px-3 py-2">Nama</th>
                    <th class="px-3 py-2">NIM</th>
                    <th class="px-3 py-2">Program Studi</th>
                    <th class="px-3 py-2">Status</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-100">
                @forelse ($mahasiswa as $m)
                    <tr>
                        <td class="px-3 py-2">{{ $loop->iteration }}</td>
                        <td class="px-3 py-2">{{ $m['nama'] }}</td>
                        <td class="px-3 py-2">{{ $m['nim'] }}</td>
                        <td class="px-3 py-2">{{ $m['prodi'] }}</td>
                        <td class="px-3 py-2"><x-badge :status="$m['status']" /></td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5">
                            <x-empty-state
                                title="Belum ada data mahasiswa"
                                description="Data akan muncul di sini setelah mahasiswa ditambahkan."
                                icon="🎓" />
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </x-panel>
@endsection