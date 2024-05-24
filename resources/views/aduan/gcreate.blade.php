@extends('layouts.guest')

@section('content')
<div class="pagetitle">
    <h1>Aduan Warga</h1>
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
        <form id='aduanWargaForm' method="POST" action="/aduanwarga/store" enctype="multipart/form-data" class="needs-validation" novalidate>
            @csrf
            <div class="mb-3">
                <label for="juduladuan">Judul Aduan</label>
                <input name="juduladuan" type="text" class="form-control" id="juduladuan" aria-describedby="Aduan Anda" required>
                <div class="invalid-feedback">
                    Judul Aduan wajib diisi.
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-9">
                    <label for="nama_pengadu">Nama Pelapor</label>
                    <input name="nama_pengadu" type="text" class="form-control" id="nama_pengadu" aria-describedby="Nama Anda" required>
                    <div class="invalid-feedback">
                        Nama Pelapor wajib diisi.
                    </div>
                </div>
                <div class="col-md-3">
                    <label for="rt_pengadu">RT Pelapor</label>
                    <select class="form-select" name="rt_pengadu" id="rt_pengadu" required>
                        <option value="">Pilih RT</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                    </select>
                    <div class="invalid-feedback">
                        RT Pelapor wajib dipilih.
                    </div>
                </div>
            </div>
            <div class="form-group mb-3">
                <label for="aduan">Detail Aduan</label>
                <textarea class="form-control" name="aduan" rows="5" id="aduan" required></textarea>
                <div class="invalid-feedback">
                    Detail Aduan wajib diisi.
                </div>
            </div>
            <div class="mb-3">
                <label for="bukti_aduan" class="col-form-label">Bukti Aduan</label>
                <input class="form-control" type="file" name="bukti_aduan" id="bukti_aduan">
            </div>
            <div class="text-center">
                <input type="submit" name="submit" class="btn btn-primary" value='Submit'>
            </div>
        </form>
    </div>
</div>

<script>
    (function () {
        'use strict'

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.querySelectorAll('.needs-validation')

        // Loop over them and prevent submission
        Array.prototype.slice.call(forms)
            .forEach(function (form) {
                form.addEventListener('submit', function (event) {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }

                    form.classList.add('was-validated')
                }, false)
            })
    })()
</script>
@endsection
