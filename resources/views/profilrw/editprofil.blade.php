@extends('layouts.admin')
@section('content')

<!DOCTYPE html>
<html>
<head>
    <title>Edit Profil RW</title>
</head>
<body>
    <h1>Edit Profil RW</h1>

    @if ($profilRW)
        <form action="{{ url('/admin/profilrw/update') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <label for="description">Deskripsi:</label><br>
            <textarea name="description" id="description" rows="4" cols="50">{{ $profilRW->description }}</textarea><br><br>

            <label for="photo">Foto:</label><br>
            <input type="file" name="photo" id="photo"><br><br>

            <button type="submit">Simpan</button>
        </form>
    @else
        <p>Profil RW belum tersedia.</p>
    @endif

</body>
</html>
