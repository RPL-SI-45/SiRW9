@extends('layouts.admin')
@section('content')
    <div class="pagetitle">
      <h1>Tambah Data Panduan Layanan</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/admin/panduanlayanan">Home</a></li>
          <li class="breadcrumb-item active">Panduan Layanan</li>
          <li class="breadcrumb-item active">Tambah Panduan Layanan</li>
        </ol>
      </nav>
    </div>
    <div class="card">
        <div class="card-body">
              <h5 class="card-title">Masukkan Data Panduan Layanan</h5>
                <form id='panduanLayananForm' class="row g-3" action="/admin/panduanlayanan/store" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label>Judul Panduan Layanan</label>
                        <input name="Judul_Panduan" type="text" class="form-control" id="Judul_Panduan" required>
                    </div>
                    <div class="col-12">
                        <label>Isi Panduan</label>
                        <div>
                        <textarea class="form-control" name="IsiPanduan" id="IsiPanduan" style="height: 100px;"></textarea>
                        </div>
                    </div>
                    <div class="col-md-8 mb-3">
                        <label>Kategori</label>
                        <select class="form-select" name="KategoriPanduan"  required>
                            <option value="">Pilih Kategori</option>
                            <option value="Informasi Umum">Informasi Umum</option>
                            <option value="Pelayanan Administrasi">Pelayanan Administrasi</option>
                            <option value="Kegiatan dan Program RW">Kegiatan dan Program RW</option>
                            <option value="Partisipasi dan Pengaduan Masyarakat">Partisipasi dan Pengaduan Masyarakat</option>
                        </select>
                    </div>
                    <div class="text-center">
                        <input type="submit" name="submit" class="btn btn-primary" value='Tambah Panduan Layanan'> 
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