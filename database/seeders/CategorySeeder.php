<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        Category::create([
            'nama_kategori' => 'Fiksi',
            'deskripsi' => 'Buku cerita dan novel',
        ]);

        Category::create([
            'nama_kategori' => 'Teknologi',
            'deskripsi' => 'Buku tentang teknologi dan komputer',
        ]);

        Category::create([
            'nama_kategori' => 'Pendidikan',
            'deskripsi' => 'Buku untuk pembelajaran',
        ]);
    }
}