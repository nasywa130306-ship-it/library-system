<h1>Library System</h1>

<p>
    <a href="/books">Books</a> | 
    <a href="/categories">Categories</a> | 
    <a href="/members">Members</a>
</p>

<hr>

<h2>Daftar Buku</h2>
<p>Daftar buku yang tersedia di perpustakaan.</p>

@foreach($books as $book)
    <h3>{{ $book->title }}</h3>
    <p>Penulis: {{ $book->author }}</p>
    <p>Tahun: {{ $book->year }}</p>
    <p>Stok: {{ $book->stock }}</p>
    <hr>
@endforeach

<footer>Library System</footer>