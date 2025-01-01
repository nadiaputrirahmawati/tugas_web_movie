<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Models\Movie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MovieController extends Controller
{
    public function index()
    {
        $movie = Movie::with('genre')->paginate(5);
        return view('admin.movie.index', compact('movie'));
    }

    public function create()
    {
        $genre = Genre::all();
        return view('admin.movie.create', compact('genre'));
    }

    public function store(Request $request)
    {
        // Validasi input data
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'synopsis' => 'required|string',
            'poster' => 'required|image|mimes:jpg,png,jpeg|max:2048',
            'year' => 'required|integer',
            'available' => 'nullable|string|in:on,off',
            'genre_id' => 'required|exists:genres,id',
        ]);
        $validated['available'] = $request->input('available') === 'on' ? 1 : 0;

        // Menyimpan file poster
        if ($request->hasFile('poster')) {
            $posterPath = $request->file('poster')->store('posters', 'public');
        }

        // Membuat movie baru
        Movie::create([
            'title' => $validated['title'],
            'synopsis' => $validated['synopsis'],
            'poster' => $posterPath ?? null,
            'year' => $validated['year'],
            'available' => $validated['available'],
            'genre_id' => $validated['genre_id'],
        ]);

        return redirect()->route('movie.index')->with('success', 'Movie created successfully');
    }

    public function show($id)
    {
        $movie = Movie::findOrFail($id);
        return view('admin.movie.detail', compact('movie'));
    }

    public function edit($id)
    {
        $movie = Movie::findOrFail($id);
        $genre = Genre::all();
        return view('admin.movie.update', compact('movie', 'genre'));
    }

    public function update(Request $request, $id)
    {
        // Validasi input data
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'synopsis' => 'required|string',
            'poster' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
            'year' => 'required|integer',
            'available' => 'nullable|string|in:on,off',
            'genre_id' => 'required|exists:genres,id',
        ]);
        // dd($validated);
        $validated['available'] = $request->input('available') === 'on' ? 1 : 0;
        // Mencari movie yang akan diupdate
        $movie = Movie::findOrFail($id);

        // Menyimpan file poster baru jika ada
        if ($request->hasFile('poster')) {
            // Hapus poster lama jika ada
            if ($movie->poster && Storage::exists('public/' . $movie->poster)) {
                Storage::delete('public/' . $movie->poster);
            }
            // Simpan poster baru
            $posterPath = $request->file('poster')->store('posters', 'public');
            $movie->poster = $posterPath;
        }

        // Update data movie
        $movie->update([
            'title' => $validated['title'],
            'synopsis' => $validated['synopsis'],
            'year' => $validated['year'],
            'available' => $validated['available'],
            'genre_id' => $validated['genre_id'],
        ]);

        return redirect()->route('movie.index')->with('success', 'Movie updated successfully');
    }

    public function destroy($id)
    {
        $movie = Movie::findOrFail($id);

        // Hapus poster jika ada
        if ($movie->poster && Storage::exists('public/' . $movie->poster)) {
            Storage::delete('public/' . $movie->poster);
        }

        // Hapus data movie
        $movie->delete();

        return redirect()->route('movie.index')->with('success', 'Movie deleted successfully');
    }

    public function detail($id){
        $movie = Movie::findOrFail($id);
        return view('admin.movie.detail', compact('movie'));
    }
}