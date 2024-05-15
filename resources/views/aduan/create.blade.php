@extends('layouts.guest')
@section('content')
<div class="pagetitle">
    <h1> Aduan Warga</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active">Form Aduan Warga</li>
        </ol>
    </nav>
</div>
<div class="card">
    <div class="card-body">
        <h5 class="card-title">Laporkan Keluhan dan Aduan Anda</h5><br>
        <form id='aduanWargaform' method="POST" action="/aduanwarga/store" enctype="multipart/form-data" novalidate>
            @csrf
            <div class="mb-3">
                <label>Tulis Aduan</label>
                <input name="aduan" type="text" class="form-control" id="aduan" aria-describedby="Aduan Anda" required>
            </div>
            <div class="mb-3">
                <label>Nama Pengadu</label>
                <input name="nama_pengadu" type="text" class="form-control" id="nama_pengadu" aria-describedby="Nama Anda" required>
            </div>
            <div class="col-md-2 mb-3">
                <label>RT Pengadu</label>
                <select class="form-select" name="rt_pengadu" required>
                    <option value="">Pilih RT</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="inputNumber" class="col-sm-2 col-form-label">Bukti Aduan</label>
                <div class="col-sm-12">
                    <input class="form-control" type="file" name="bukti_aduan" required>
                </div>
                <br>
                <div class="text-center">
                    <input type="submit" name="submit" class="btn btn-primary" value='Submit'>
                </div>
                <script>
                    document.getElementById("aduanWargaform").addEventListener("submit", function(event) {
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