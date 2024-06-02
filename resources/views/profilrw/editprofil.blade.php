@extends('layouts.admin')

@section('content')
<div class="pagetitle">
    <h1>Edit Profil RW</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/admin/data-penduduk">Home</a></li>
            <li class="breadcrumb-item"><a href="/admin/profilrw">Profil RW</a></li>
            <li class="breadcrumb-item active">Edit</li>
        </ol>
    </nav>
</div>

<div class="container mt-5">
    <div class="card shadow p-4">
        <form action="/admin/profilrw/update/{{ $profilRW->id }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="description" class="form-label">Deskripsi:</label>
                <textarea class="form-control" id="description" name="description" rows="4" required>{{ $profilRW->description }}</textarea>
            </div>

            <div class="mb-4">
                <label for="image" class="form-label">Foto:</label>
                <input type="file" class="form-control" id="image" name="image">
                @if ($profilRW->image)
                    <div class="text-center">
                        <img src="{{ asset($profilRW->image) }}" alt="Foto Profil RW" class="img-fluid">
                    </div>
                @endif
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
    </div>
</div>
@endsection
