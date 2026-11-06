<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswa = [
            ['nama' => 'Andi Pratama', 'nim' => '2201001', 'prodi' => 'Informatika',       'status' => 'Aktif'],
            ['nama' => 'Siti Aisyah',  'nim' => '2201002', 'prodi' => 'Sistem Informasi',  'status' => 'Cuti'],
            ['nama' => 'Budi Santoso', 'nim' => '2201003', 'prodi' => 'Teknik Komputer',   'status' => 'Nonaktif'],
            ['nama' => 'Dewi Lestari', 'nim' => '2201004', 'prodi' => 'Informatika',       'status' => 'Aktif'],
        ];

        $stats = [
            'total'    => 120,
            'aktif'    => 95,
            'cuti'     => 10,
            'nonaktif' => 15,
        ];

        return view('dashboard', [
            'admin'     => 'Administrator',
            'stats'     => $stats,
            'mahasiswa' => $mahasiswa, // ganti dengan [] untuk menguji empty state
        ]);
    }
}
