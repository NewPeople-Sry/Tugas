@extends('layouts.app')

@section('title', 'Data Guru')

@section('content')

@if(session('success'))
    <x-alert>{{ session('success') }}</x-alert>
@endif

<div class="card">

    <div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:20px">

        <div>
            <h3>Data Guru</h3>
            <p>Daftar guru SMK Negeri 2 Jakarta.</p>
        </div>

        <a href="{{ route('guru.create') }}" class="btn-tambah">
            + Tambah Guru
        </a>

    </div>

    <table>

        <tr>
            <th>Nama</th>
            <th>Mata Pelajaran</th>
            <th>Email</th>
            <th>Aksi</th>
        </tr>

        @forelse($teachers as $teacher)

        <tr>

            <td>{{ $teacher->nama }}</td>

            <td>{{ $teacher->mata_pelajaran }}</td>

            <td>{{ $teacher->email }}</td>

            <td>

                <a href="{{ route('guru.edit', $teacher->id) }}"
                   class="btn-edit">
                    Edit
                </a>

                <form
                    action="{{ route('guru.destroy', $teacher->id) }}"
                    method="POST"
                    style="display:inline"
                    onsubmit="return confirm('Yakin ingin menghapus guru ini?')">

                    @csrf
                    @method('DELETE')

                    <button class="btn-hapus">
                        Hapus
                    </button>

                </form>

            </td>

        </tr>

        @empty

        <tr>
            <td colspan="4" style="text-align:center">
                Belum ada data guru.
            </td>
        </tr>

        @endforelse

    </table>

</div>

@endsection