<?php

namespace App\Http\Controllers;

class BookController extends Controller
{
    public function index()
    {
        $books = [
            ['title' => 'Pemrograman PHP', 'author' => 'Andi', 'year' => 2021],
            ['title' => 'Laravel untuk Pemula', 'author' => 'Budi', 'year' => 2022],
            ['title' => 'Basis Data', 'author' => 'Citra', 'year' => 2020],
            ['title' => 'Algoritma dan Pemrograman', 'author' => 'Dewi', 'year' => 2019],
            ['title' => 'Pemrograman Berorientasi Objek', 'author' => 'Eko', 'year' => 2023]
        ];
        $stock = 5;

        return view('books.index', compact('books', 'stock'));
    }

    public function show($id)
    {
        return view('books.show', compact('id'));
    }
}