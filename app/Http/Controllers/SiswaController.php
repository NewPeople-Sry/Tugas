<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;

class SiswaController extends Controller
{
    public function index()
    {
        $siswas = Siswa::all();

        return view('siswa.index', [
            'title' => 'Data Siswa',
            'siswas' => $siswas
        ]);
    }

    public function create()
    {
        return view('siswa.create', [
            'title' => 'Tambah Siswa'
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'kelas' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:siswa,email',
        ]);

        Siswa::create([
            'nama' => $request->nama,
            'kelas' => $request->kelas,
            'email' => $request->email,
        ]);

        return redirect()
            ->route('siswa.index')
            ->with('success', 'Data siswa berhasil ditambahkan.');
    }

    public function show(string $id)
    {
        $siswa = Siswa::findOrFail($id);

        return view('siswa.show', [
            'title' => 'Detail Siswa',
            'siswa' => $siswa
        ]);
    }

    public function edit(string $id)
    {
        $siswa = Siswa::findOrFail($id);

        return view('siswa.edit', [
            'title' => 'Edit Siswa',
            'siswa' => $siswa
        ]);
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'kelas' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:siswa,email,' . $id,
        ]);

        $siswa = Siswa::findOrFail($id);

        $siswa->update([
            'nama' => $request->nama,
            'kelas' => $request->kelas,
            'email' => $request->email,
        ]);

        return redirect()
            ->route('siswa.index')
            ->with('success', 'Data siswa berhasil diperbarui.');
    }

    public function destroy(string $id)
    {
        $siswa = Siswa::findOrFail($id);

        $siswa->delete();

        return redirect()
            ->route('siswa.index')
            ->with('success', 'Data siswa berhasil dihapus.');
    }
}