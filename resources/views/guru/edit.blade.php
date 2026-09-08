@extends('layouts.app')

@section('title', 'Edit Guru')

@section('content')

<div class="card">

    <h3>{{ $title ?? 'Edit Guru' }}</h3>
    <p>Ubah data guru.</p>

    <form action="{{ route('guru.update', $teacher->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="nama">Nama</label>

            <input
                type="text"
                id="nama"
                name="nama"
                value="{{ old('nama', $teacher->nama) }}"
                required
            >
        </div>

        <div class="form-group">
            <label for="mata_pelajaran">Mata Pelajaran</label>

            <input
                type="text"
                id="mata_pelajaran"
                name="mata_pelajaran"
                value="{{ old('mata_pelajaran', $teacher->mata_pelajaran) }}"
                required
            >
        </div>

        <div class="form-group">
            <label for="email">Email</label>

            <input
                type="email"
                id="email"
                name="email"
                value="{{ old('email', $teacher->email) }}"
                required
            >
        </div>

        <div class="form-action">

            <a href="{{ route('guru.index') }}" class="btn-batal">
                Batal
            </a>

            <button type="submit" class="btn-simpan">
                Update Guru
            </button>

        </div>

    </form>

</div>

@endsection