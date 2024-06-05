@extends('layouts.admin')

@section('content')
<div class="pagetitle">
    <h1>Tambahkan Profil RW</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/admin/data-penduduk">Home</a></li>
            <li class="breadcrumb-item"><a href="/admin/profilrw">Profil RW</a></li>
            <li class="breadcrumb-item active">Create</li>
        </ol>
    </nav>
</div>

<div class="container mt-5">
    <div class="card shadow p-4">
        <form action="/admin/profilrw" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="mb-4">
                <label for="description" class="form-label">Deskripsi:</label>
                <textarea class="form-control" id="description" name="description" rows="4" required></textarea>
            </div>

            <div class="mb-4">
                <label for="image" class="form-label">Foto:</label>
                <input type="file" class="form-control" id="image" name="image" required>
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</div>
@endsection
