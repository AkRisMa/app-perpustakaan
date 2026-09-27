<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    public function run(): void
    {
        $teknologi = Category::where('nama_kategori', 'Teknologi')->first();

        Book::create([
            'judul' => 'Pemrograman Laravel',
            'penulis' => 'Civeryoshioka',
            'penerbit' => 'Penerbit Informatika',
            'tahun_terbit' => 2025,
            'isbn' => '9786020000001',
            'stok' => 5,
            'sampul' => null,
            'category_id' => $teknologi->id,
        ]);
    }
}