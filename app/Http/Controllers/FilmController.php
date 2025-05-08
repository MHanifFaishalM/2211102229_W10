<?php

namespace App\Http\Controllers;

use App\Models\Film;
use Illuminate\Http\Request;

class FilmController extends Controller
{
    public function index()
    {
        $data = Film::all();
        return view('film.form', compact('data'));
    }

    public function create()
    {
        return view('film.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul' => 'required|string|max:255',
            'genre' => 'required|string|max:100',
        ]);

        // Simpan ke database
        Film::create($validated);

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('film.index')->with('success', 'Data film berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $edit = Film::findOrFail($id);
        return view('film.edit', compact('edit'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'judul' => 'required|string|max:255',
            'genre' => 'required|string|max:100',
        ]);

        $film = Film::findOrFail($id);
        $film->update($validated);
        return redirect()->route('film.index');
    }

    public function destroy($id)
    {
        Film::destroy($id);
        return redirect()->back();
    }
}