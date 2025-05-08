<h2>Edit Film</h2>
<form action="{{ route('film.update', $edit->id) }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="judul" value="{{ $edit->judul }}" required>
    <input type="text" name="genre" value="{{ $edit->genre }}" required>
    <button type="submit">Update</button>
</form>
<a href="{{ route('film.index') }}">← Kembali</a>