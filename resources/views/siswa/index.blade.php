@extends('layouts.app')

@section('title', 'Data Siswa')

@section('content')

<div class="card">

    <div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:20px">
        <div>
            <h3>{{ $title ?? 'Data Siswa' }}</h3>
            <p>Daftar siswa SMK Negeri 2 Jakarta</p>
        </div>

        <a href="{{ route('siswa.create') }}" class="btn-tambah">
            + Tambah Siswa
        </a>
    </div>

    @if(session('success'))
        <x-alert>{{ session('success') }}</x-alert>
    @endif

    <div class="table-container">

        <table>

            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Kelas</th>
                    <th>Email</th>
                    <th>Aksi</th>
                </tr>
            </thead>

            <tbody>

                @forelse($siswas as $siswa)

                <tr>

                    <td>{{ $loop->iteration }}</td>

                    <td>{{ $siswa->nama }}</td>

                    <td>{{ $siswa->kelas }}</td>

                    <td>{{ $siswa->email }}</td>

                    <td>

                        <a href="{{ route('siswa.edit', $siswa->id) }}"
                           class="btn-edit">
                            Edit
                        </a>

                        <form action="{{ route('siswa.destroy', $siswa->id) }}"
                              method="POST"
                              style="display: inline;"
                              onsubmit="return confirm('Yakin ingin menghapus data siswa ini?')">

                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn-hapus">
                                Hapus
                            </button>

                        </form>

                    </td>

                </tr>

                @empty

                <tr>
                    <td colspan="5" style="text-align: center;">
                        Belum ada data siswa.
                    </td>
                </tr>

                @endforelse

            </tbody>

        </table>

    </div>

</div>

@endsection