@extends('layouts.admin')
@section('content')

<!DOCTYPE html>
<html>
<head>
    <title>Profil RW</title>
</head>
<body>
    <h1>Profil RW</h1>

    @if ($profilRW)
        <p>{{ $profilRW->description }}</p>
        @if ($profilRW->photo)
            <img src="{{ asset('images/' . $profilRW->photo) }}" alt="Foto Profil RW">
        @endif
        <a href="{{ url('/admin/profilrw/edit') }}">Edit</a>
    @else
        <p>Profil RW belum tersedia.</p>
    @endif

</body>
</html>
@endsection