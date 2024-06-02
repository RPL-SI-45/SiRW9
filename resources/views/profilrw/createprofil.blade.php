@extends('layouts.admin')
@section('content')
<!-- create.blade.php -->
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
        <h2>Create Profil RW</h2>
        <form action="/admin/profilrw" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="description">Description:</label>
                <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
            </div>
            <div class="form-group">
                <label for="image">Image:</label>
                <input type="file" class="form-control-file" id="image" name="image" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection