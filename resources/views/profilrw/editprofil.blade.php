@extends('layouts.admin')

@section('content')
<head>
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.8/dist/trix.css">
    <script type="text/javascript" src="https://unpkg.com/trix@2.0.8/dist/trix.umd.min.js"></script>

    <style>
    trix-toolbar [data-trix-button-group='file-tools']{
        display:none;
    }
    </style>
</head>

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
                <input id="description" type="hidden" name="description" value="{{ $profilRW->description }}" required>
                <trix-editor input="description"></trix-editor>
            </div>

            <div class="mb-4">
                <label for="image" class="form-label">Foto:</label>
                <input type="file" class="form-control" id="image" name="image">
                @if ($profilRW->image)
                    <div class="text-center mt-3">
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
