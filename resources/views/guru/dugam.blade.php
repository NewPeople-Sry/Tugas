<!DOCTYPE html>
<html lang="en">
<head>
    <title>Guru</title>
</head>
<body>
    <h2>{{ $title }}</h2>

    <p>{{ $name }}</p>

    <form action="/guru" method="POST">
        @csrf
        <input type="text" name="nama">
        <button>Simpan</button>
    </form>

    @if(session('success'))
    <div style="background:lightgreen;padding:10px">
        {{ session('success') }}
    </div>
    @endif
</body>
</html>