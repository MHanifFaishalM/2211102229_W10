<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Hanif</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            padding: 30px;
            color: #333;
        }

        h1, h2 {
            margin-bottom: 10px;
        }

        hr {
            border: none;
            height: 2px;
            background-color: #444;
            margin: 20px 0;
        }

        .btn {
            display: inline-block;
            padding: 8px 16px;
            background-color: #4CAF50;
            color: white;
            text-decoration: none;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .btn:hover {
            background-color: #45a049;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            background-color: white;
            box-shadow: 0 0 8px rgba(0, 0, 0, 0.1);
        }

        th {
            background-color: #4CAF50;
            color: white;
        }

        th, td {
            padding: 12px 16px;
            border: 1px solid #ddd;
            text-align: left;
        }

        tr:hover {
            background-color: #f1f1f1;
        }

        .action-links a {
            margin-right: 10px;
            color: #007bff;
            text-decoration: none;
        }

        .action-links a:hover {
            text-decoration: underline;
        }

        .action-links form {
            display: inline;
        }

        .delete-btn {
            background-color: #e74c3c;
            border: none;
            color: white;
            padding: 6px 12px;
            border-radius: 4px;
            cursor: pointer;
        }

        .delete-btn:hover {
            background-color: #c0392b;
        }
    </style>
</head>
<body>

    <h1>Nama: M Hanif Faishal M</h1>
    <h1>NIM: 2211102229</h1>

    <hr>

    <h2>Form Buku</h2>
    <a href="{{ route('film.create') }}" class="btn">+ Tambah Film</a>

    <h2>Daftar Film</h2>
    <table>
        <thead>
            <tr>
                <th>Judul</th>
                <th>Genre</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $film)
                <tr>
                    <td>{{ $film->judul }}</td>
                    <td>{{ $film->genre }}</td>
                    <td class="action-links">
                        <a href="{{ route('film.edit', $film->id) }}">Edit</a>

                        <form action="{{ route('film.destroy', $film->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="delete-btn">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>