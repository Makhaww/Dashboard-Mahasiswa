@extends('layouts.app')
@section('title', 'Data Mahasiswa')
@section('content')
<div class="card shadow-sm">
    <div class="table-responsive">
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
    </div>
</div>
@endsection
