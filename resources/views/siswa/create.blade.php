@extends('layouts.app')

@section('title', 'Tambah Siswa')

@section('content')

<div class="card">

    <h3>{{ $title ?? 'Tambah Siswa' }}</h3>
    <p>Tambahkan data siswa baru.</p>

    <form action="{{ route('siswa.store') }}" method="POST">

        @csrf

        <div class="form-group">
            <label for="nama">Nama</label>

            <input
                type="text"
                id="nama"
                name="nama"
                value="{{ old('nama') }}"
                required
            >

            @error('nama')
                <small style="color: red;">{{ $message }}</small>
            @enderror
        </div>

        <div class="form-group">
            <label for="kelas">Kelas</label>

            <input
                type="text"
                id="kelas"
                name="kelas"
                value="{{ old('kelas') }}"
                placeholder="Contoh: XI RPL 1"
                required
            >

            @error('kelas')
                <small style="color: red;">{{ $message }}</small>
            @enderror
        </div>

        <div class="form-group">
            <label for="email">Email</label>

            <input
                type="email"
                id="email"
                name="email"
                value="{{ old('email') }}"
                required
            >

            @error('email')
                <small style="color: red;">{{ $message }}</small>
            @enderror
        </div>

        <div class="form-action">

            <a href="{{ route('siswa.index') }}" class="btn-batal">
                Batal
            </a>

            <button type="submit" class="btn-simpan">
                Simpan Siswa
            </button>

        </div>

    </form>

</div>

@endsection