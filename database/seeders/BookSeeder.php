<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book;

class BookSeeder extends Seeder
{
    public function run(): void
    {
        $books = [
            ['title' => 'Pemrograman PHP', 'author' => 'Andi', 'year' => 2024, 'stock' => 5],
            ['title' => 'Laravel untuk Pemula', 'author' => 'Budi', 'year' => 2023, 'stock' => 8],
            ['title' => 'Basis Data Relasional', 'author' => 'Siti', 'year' => 2022, 'stock' => 10],
            ['title' => 'Algoritma & Pemrograman', 'author' => 'Joko', 'year' => 2023, 'stock' => 6],
            ['title' => 'Pemrograman Web Lanjut', 'author' => 'Dewi', 'year' => 2025, 'stock' => 4],
        ];

        foreach ($books as $book) {
            Book::create($book);
        }
    }
}