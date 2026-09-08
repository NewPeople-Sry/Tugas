@extends('layouts.app')

@section('title', 'Profil')

@section('content')

<div class="card">

    <h3>Profil Pengguna</h3>

    <p>
        Informasi akun pengguna.
    </p>

    <div style="
        display:flex;
        align-items:center;
        gap:20px;
        padding:20px;
        background:#f8fafc;
        border-radius:10px;
        margin-bottom:20px;
    ">

        <div style="
            width:65px;
            height:65px;
            border-radius:50%;
            background:#2148b5;
            color:white;
            display:flex;
            align-items:center;
            justify-content:center;
            font-size:25px;
        ">
            👤
        </div>

        <div>
            <h3 style="margin-bottom:4px;">
                Raffa Basjhani
            </h3>

            <p style="margin:0;">
                Admin Database • SMK Negeri 2 Jakarta
            </p>
        </div>

    </div>

    <table>

        <tr>
            <th>Nama</th>
            <td>Raffa Basjhani</td>
        </tr>

        <tr>
            <th>Email</th>
            <td>raffa@gmail.com</td>
        </tr>

        <tr>
            <th>Jabatan</th>
            <td>Admin Database</td>
        </tr>

    </table>

</div>

@endsection