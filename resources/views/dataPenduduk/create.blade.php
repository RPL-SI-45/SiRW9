@extends('layouts.admin')
@section('content')
    <div class="pagetitle">
      <h1>Tambahkan Data Penduduk</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/admin/data-penduduk">Home</a></li>
          <li class="breadcrumb-item">Data Penduduk</li>
          <li class="breadcrumb-item active">Tambah</li>
        </ol>
      </nav>
    </div>
    <div class="card">
        <div class="card-body">
              <h5 class="card-title">Masukkan data penduduk baru</h5>
                <form id="pendudukForm" action="/admin/data-penduduk/store" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label>Nama Warga</label>
                        <input name="Nama_Warga" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                    </div>
                    <div class="mb-3">
                        <label>NIK</label>
                        <input name="NIK" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                    </div>
                    <div class="mb-3">
                        <label>Tanggal Lahir</label>
                        <input name="Tanggal_Lahir" type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                    </div>
                    <div class="mb-3">
                        <label>Jenis Kelamin</label>
                        <select class="form-select" name="Jenis_Kelamin" required>
                            <option value="">Pilih Jenis Kelamin</option>
                            <option value="Perempuan">Perempuan</option>
                            <option value="Laki-Laki">Laki - Laki</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label>Alamat</label>
                        <input name="Alamat" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                    </div>
                    <div class="mb-3">
                        <label>RT</label>
                        <select class="form-select" name="RT" required>
                            <option value="">Pilih RT</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label>Status Perkawinan</label>
                        <select class="form-select" name="Status_Perkawinan" required>
                            <option value="">Pilih Status Perkawinan</option>
                            <option value="Belum Kawin">Belum Kawin</option>
                            <option value="Kawin">Kawin</option>
                            <option value="Cerai Hidup">Cerai Hidup</option>
                            <option value="Cerai Mati">Cerai Mati</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Pekerjaan</label>
                        <input name="Pekerjaan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                    </div>
                    <div class="text-center">
                        <input type="submit" name="submit" class="btn btn-primary" value='Tambahkan'> 
                    </div>
                </form>
            </div>
            <script>
                document.getElementById("pendudukForm").addEventListener("submit", function(event) {
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