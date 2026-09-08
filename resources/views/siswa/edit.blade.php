@extends('layouts.app')

@section('title', 'Edit Siswa')

@section('content')

<div class="card">

    <h3>{{ $title ?? 'Edit Siswa' }}</h3>
    <p>Ubah data siswa.</p>

    <form action="{{ route('siswa.update', $siswa->id) }}" method="POST">

        @csrf
        @method('PUT')

        <div class="form-group">

            <label for="nama">Nama</label>

            <input
                type="text"
                id="nama"
                name="nama"
                value="{{ old('nama', $siswa->nama) }}"
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
                value="{{ old('kelas', $siswa->kelas) }}"
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
                value="{{ old('email', $siswa->email) }}"
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
                Update Siswa
            </button>

        </div>

    </form>

</div>

@endsection