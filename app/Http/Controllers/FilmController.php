<?php

namespace App\Http\Controllers;

use App\Models\Film;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FilmController extends Controller
{
    public function index()
    {
        $film = Film::all();
        return view('film.index', compact('film'));
    }

    public function create()
    {
        return view('film.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'kode' => 'required|unique:films',
            'judul' => 'required',
            'tahun' => 'required|digits:4',
            'jam_tayang' => 'required',
            'cover' => 'nullable|image|mimes:jpg,jpeg,png|max:2048'
        ]);

        $data = $request->all();

        if ($request->hasFile('cover')) {
            $data['cover'] = $request->file('cover')->store('films', 'public');
        }

        Film::create($data);

        return redirect()->route('film.index')
            ->with('success', 'Film berhasil ditambahkan');
    }

    public function edit($id)
    {
        $film = Film::findOrFail($id);
        return view('film.edit', compact('film'));
    }

    public function update(Request $request, $id)
    {
        $film = Film::findOrFail($id);

        $request->validate([
            'kode' => 'required|unique:films,kode,' . $id,
            'judul' => 'required',
            'tahun' => 'required|digits:4',
            'jam_tayang' => 'required',
            'cover' => 'nullable|image|mimes:jpg,jpeg,png|max:2048'
        ]);

        $data = $request->all();

        if ($request->hasFile('cover')) {

            if ($film->cover) {
                Storage::disk('public')->delete($film->cover);
            }

            $data['cover'] = $request->file('cover')->store('films', 'public');
        }

        $film->update($data);

        return redirect()->route('film.index')
            ->with('success', 'Film berhasil diupdate');
    }

    public function destroy($id)
    {
        $film = Film::findOrFail($id);

        if ($film->cover) {
            Storage::disk('public')->delete($film->cover);
        }

        $film->delete();

        return redirect()->route('film.index')
            ->with('success', 'Film berhasil dihapus');
    }
}