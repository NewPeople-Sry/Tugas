@extends('layouts.app')

@section('title', 'Tambah Guru')

@section('content')

<div class="card">

    <h3>Tambah Guru</h3>
    <p>Tambahkan data guru baru.</p>

    <form action="{{ route('guru.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="nama">Nama</label>
            <input
                type="text"
                id="nama"
                name="nama"
                placeholder="Masukkan nama guru"
                value="{{ old('nama') }}"
                required
            >
        </div>

        <div class="form-group">
            <label for="mata_pelajaran">Mata Pelajaran</label>
            <input
                type="text"
                id="mata_pelajaran"
                name="mata_pelajaran"
                placeholder="Masukkan mata pelajaran"
                value="{{ old('mata_pelajaran') }}"
                required
            >
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input
                type="email"
                id="email"
                name="email"
                placeholder="Masukkan email"
                value="{{ old('email') }}"
                required
            >
        </div>

        <div class="form-action">
            <a href="{{ route('guru.index') }}" class="btn-batal">
                Batal
            </a>

            <button type="submit" class="btn-simpan">
                Simpan Guru
            </button>
        </div>

    </form>

</div>

@endsection