@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')

<div class="dashboard-grid">

    <div class="stat-card">
        <div class="icon">👨‍🏫</div>
        <div class="label">TOTAL GURU</div>
        <div class="number">0</div>
    </div>

    <div class="stat-card">
        <div class="icon">👨‍🎓</div>
        <div class="label">TOTAL SISWA</div>
        <div class="number">0</div>
    </div>

    <div class="stat-card">
        <div class="icon">📚</div>
        <div class="label">MATA PELAJARAN</div>
        <div class="number">0</div>
    </div>

    <div class="stat-card">
        <div class="icon">📝</div>
        <div class="label">DATA NILAI</div>
        <div class="number">0</div>
    </div>

</div>

<div class="card">

    <h3>Selamat Datang di Database Guru</h3>

    <p>
        Sistem informasi akademik SMK Negeri 2 Jakarta.
    </p>

    <table>
        <tr>
            <th>Informasi</th>
            <th>Keterangan</th>
        </tr>

        <tr>
            <td>Status Sistem</td>
            <td>Aktif</td>
        </tr>

        <tr>
            <td>Tahun Ajaran</td>
            <td>2026 / 2027</td>
        </tr>

        <tr>
            <td>Semester</td>
            <td>Ganjil</td>
        </tr>
    </table>

</div>

@endsection