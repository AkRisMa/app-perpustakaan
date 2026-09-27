<?php

namespace Database\Seeders;

use App\Models\Member;
use Illuminate\Database\Seeder;

class MemberSeeder extends Seeder
{
    public function run(): void
    {
        Member::create([
            'kode_member' => 'M001',
            'nama' => 'Budi Santoso',
            'alamat' => 'Surabaya',
            'no_telepon' => '081234567890',
            'tanggal_daftar' => now(),
            'status' => 'aktif',
        ]);

        Member::create([
            'kode_member' => 'M002',
            'nama' => 'Siti Aminah',
            'alamat' => 'Sidoarjo',
            'no_telepon' => '081234567891',
            'tanggal_daftar' => now(),
            'status' => 'aktif',
        ]);
    }
}