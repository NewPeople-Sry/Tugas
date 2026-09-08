<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teachers = Teacher::all();
        return view('guru.dugam', ['title' => 'Daftar Guru', 'name' => 'SMK Negeri 2', 'teachers' => $teachers]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('guru.create', ['title' => 'Tambah Guru']);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
        'nama' => 'required|string|max:255',
        'mata_pelajaran' => 'required|string|max:255',
        'email' => 'required|email|max:255',
    ]);

    Teacher::create([
        'nama' => $request->nama,
        'mata_pelajaran' => $request->mata_pelajaran,
        'email' => $request->email,
    ]);

    return redirect()
        ->route('guru.index')
        ->with('success', 'Data guru berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $teacher = Teacher::findOrFail($id);

        return view('guru.edit', [
            'title' => 'Edit Guru',
            'teacher' => $teacher
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'mata_pelajaran' => 'required|string|max:255',
            'email' => 'required|email|max:255',
        ]);

        $teacher = Teacher::findOrFail($id);
        $teacher->update([
            'nama' => $request->nama,
            'mata_pelajaran' => $request->mata_pelajaran,
            'email' => $request->email,
        ]);

        return redirect()
            ->route('guru.index')
            ->with('success', 'Data guru berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $teacher = Teacher::findOrFail($id);
        $teacher->delete();

        return redirect()
            ->route('guru.index')
            ->with('success', 'Data guru berhasil dihapus.');
    }

    public function api()
    {
        return response()->json([
            'status' => true,
            'message' => 'Berhasil',
            'data' => [
                'nama' => 'Andi',
                'mapel' => 'Pemrograman'
            ]
        ]);
    }

    public function simpan()
    {
        return redirect('/guru')
            ->with('success', 'Data berhasil disimpan');
    }
}
