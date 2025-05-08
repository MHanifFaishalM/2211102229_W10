<h2>Tambah Film</h2>
<form action="{{ route('film.store') }}" method="POST">
    @csrf
    <input type="text" name="judul" placeholder="Judul Film" required>
    <input type="text" name="genre" placeholder="Genre" required>
    <button type="submit">Simpan</button>
</form>
<a href="{{ route('film.index') }}">← Kembali</a>
