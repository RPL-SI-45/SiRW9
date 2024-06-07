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
      <h1>Edit Data Panduan Layanan</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/admin/panduanlayanan">Home</a></li>
          <li class="breadcrumb-item active">Panduan Layanan</li>
          <li class="breadcrumb-item active">Edit Panduan Layanan</li>
        </ol>
      </nav>
    </div>
    <div class="card">
        <div class="card-body">
              <h5 class="card-title">Mengubah Data Panduan Layanan</h5>
                <form id='panduanLayananForm' class="row g-3" action="/admin/panduanlayanan/update/{{$panduanlayanan->id}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label>Judul Panduan Layanan</label>
                        <input name="Judul_Panduan" type="text" class="form-control" id="Judul_Panduan" value="{{$panduanlayanan->Judul_Panduan}}">
                    </div>
                    <div class="mb-3">
                        <label for="IsiPanduan" class="form-label">Isi Panduan</label>
                        <input id="IsiPanduan" type="hidden" name="IsiPanduan" value="{{ old('IsiPanduan', $panduanlayanan->IsiPanduan) }}">
                        <trix-editor input="IsiPanduan"></trix-editor>
                    </div>
                    <div class="col-md-8 mb-3">
                        <label>Kategori</label>
                        <select class="form-select" name="KategoriPanduan"  required>
                            <option value="">Pilih Kategori</option>
                            <option value="Informasi Umum" @if($panduanlayanan->KategoriPanduan=='Informasi Umum') selected @endif>Informasi Umum</option>
                            <option value="Pelayanan Administrasi" @if($panduanlayanan->KategoriPanduan=='Pelayanan Administrasi') selected @endif>Pelayanan Administrasi</option>
                            <option value="Kegiatan dan Program RW" @if($panduanlayanan->KategoriPanduan=='Kegiatan dan Program RW') selected @endif>Kegiatan dan Program RW</option>
                            <option value="Partisipasi dan Pengaduan Masyarakat" @if($panduanlayanan->KategoriPanduan=='Partisipasi dan Pengaduan Masyarakat') selected @endif>Partisipasi dan Pengaduan Masyarakat</option>
                        </select>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Edit</button>
                    </div>
                </form>
            </div>
            <script>
                document.getElementById("panduanLayananForm").addEventListener("submit", function(event) {
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
@endsection