<head>
  <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.8/dist/trix.css">
  <script type="text/javascript" src="https://unpkg.com/trix@2.0.8/dist/trix.umd.min.js"></script>

  <style>
    trix-toolbar [data-trix-button-group='file-tools']{
        display:none;
    }
  </style>
</head>
@extends('layouts.admin')

@section('content')
    <div class="pagetitle">
      <h1>Tambahkan Berita Kegiatan</h1>
      <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/admin/data-penduduk">Home</a></li>
            <li class="breadcrumb-item"><a href="/admin/beritakegiatan">Berita Kegiatan</a></li>
            <li class="breadcrumb-item active">Tambah</li>
        </ol>
      </nav>
    </div>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Buat berita kegiatan</h5>
            <form id="BKform" action="/admin/beritakegiatan/store" method="POST" novalidate enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="judul" class="form-label">Judul</label>
                    <input name="judul" type="text" class="form-control" id="judul" aria-describedby="judul" required>
                    <div class="invalid-feedback">Judul harus diisi.</div>
                </div>
                <div class="mb-3">
                    <label for="slug" class="form-label">Link Post</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="slug-prepend">/guest/beritakegiatan/</span>
                        </div>
                        <input name="slug" type="text" class="form-control" id="slug" aria-describedby="slug-prepend" disabled readonly>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="formFile" class="form-label">Masukkan Foto</label>
                    <input class="form-control" type="file" id="image" name="image" accept="image/png, image/jpeg, image/jpg, image/webp">
                    <div class="invalid-feedback">File harus berupa gambar dengan format PNG, JPG, JPEG, atau WEBP dan ukuran maksimal 2MB.</div>
                </div>
                <div class="mb-3">
                    <label for="isi" class="form-label">Konten</label>
                    <input id="isi" type="hidden" name="isi">
                    <trix-editor input="isi"></trix-editor>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Buat Berita Kegiatan</button>
                </div>
            </form>
        </div>
    </div>

<script>
    const judul = document.querySelector('#judul');
    const slug = document.querySelector('#slug');

    judul.addEventListener('change', function() {
        fetch('/admin/beritakegiatan/checkSlug?judul=' + judul.value)
            .then(response => response.json())
            .then(data => slug.value = data.slug)
    });

    document.getElementById("BKform").addEventListener("submit", function(event) {
        var form = event.target;
        var fileInput = document.getElementById('image');
        var file = fileInput.files[0];

        if (!form.checkValidity()) {
            event.preventDefault();
            event.stopPropagation();
            alert("Please fill out all required fields.");
        }

        if (file) {
            var validTypes = ['image/png', 'image/jpeg', 'image/jpg', 'image/webp'];
            if (!validTypes.includes(file.type)) {
                alert("Invalid file type. Only PNG, JPG, JPEG, and WEBP are allowed.");
                event.preventDefault();
                return;
            }

            if (file.size > 2048 * 1024) {
                alert("File size exceeds 2MB.");
                event.preventDefault();
                return;
            }
        }

        form.classList.add('was-validated');
    });

    document.addEventListener('trix-file-accept', function(e) {
        e.preventDefault();
    });
</script>
@endsection
