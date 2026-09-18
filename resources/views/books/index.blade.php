@extends('layouts.app')

@section('title', 'Daftar Buku')

@section('content')
    <h2>Daftar Buku</h2>

    @if($stock > 0)
        <p>Status Stok: <strong>Buku Tersedia</strong></p>
    @else
        <p>Status Stok: <strong>Buku Sedang Habis</strong></p>
    @endif

    <ul>
        @foreach($books as $book)
            <li>{{ $book['title'] }} - {{ $book['author'] }} ({{ $book['year'] }})</li>
        @endforeach
    </ul>
@endsection