@extends('layouts.guest')
@section('content')
<div class="pagetitle">
    <h1>Usulan Warga</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active">Usulan Warga</li>
        </ol>
    </nav>
</div>
<div class="card">
    <div class="card-body">
        <h5 class="card-title">Masukkan usulan</h5>
        <form id="usulanform" class="row g-3" action="/usulanwarga/store" method="POST">
            @csrf
            <div class="mb-3">
                <label>Judul Usulan</label>
                <input name="Judul_Usulan" type="text" class="form-control" id="Judul_Usulan" required>
            </div>
            <div class="col-md-9 mb-3">
                <label>Nama Lengkap</label>
                <input name="Nama_Pengusul" type="text" class="form-control" id="Nama_Pengusul" required>
            </div>
            <div class="col-md-3 mb-3">
                <label>RT</label>
                <select class="form-select" name="RT" required>
                    <option value="">Pilih RT</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                </select>
            </div>
            <div class="form-group">
                <label for="name">Detail Usulan</label>
                <textarea class="form-control" name="Detail_Usulan" rows="10" required></textarea>
            </div>
            <div class="text-center">
                    <input type="submit" name="submit" class="btn btn-primary" value='Submit'>
            </div>
             <script>
                document.getElementById("usulanform").addEventListener("submit", function(event) {
                    var form = event.target;
                    if (!form.checkValidity()) {
                        event.preventDefault();
                        event.stopPropagation();
                        // Show notification for empty fields
                        alert("Please fill out all required fields.");
                    }
                    form.classList.add('was-validated');
                });
            </script>
        </form>
    </div>
    @endsection