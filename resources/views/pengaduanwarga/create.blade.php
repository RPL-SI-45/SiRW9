@extends('layouts.admin')
@section('content')
    <div class="pagetitle">
      <h1>Tambah Aduan Warga</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/pengaduanwarga/create">Home</a></li>
          <li class="breadcrumb-item active">Aduan Warga</li>
          <li class="breadcrumb-item active">Tambah Aduan Warga</li>
        </ol>
      </nav>
    </div>
    <div class="card">
        <div class="card-body">
              <h5 class="card-title">Masukkan Aduan warga</h5>
                <form id='pengaduanwargaForm' class="row g-3" action="/pengaduanwarga/create" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label>Aduan</label>
                        <input name="Aduan" type="text" class="form-control" id="Aduan" required>
                    </div>
                    <div class="col-md-8 mb-3">
                        <label>Nama Pengadu</label>
                        <input name="Nama_Pengadu" type="text" class="form-control" id="Nama_Pengadu" required>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label>RT Pengadu</label>
                        <select class="form-select" name="RT"  required>
                            <option value="">Pilih RT</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                        </select>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label>Status Aduan</label>
                        <select class="form-select" name="StatusAduan"  required>
                            <option value="">Pilih Status</option>
                            <option value="BelumDiverifikasi">Belum Diverifikasi</option>
                            <option value="Terverifikasi">Terverifikasi</option>
                        </select>
                    <div class="col-12">
                        <div class="form-floating">
                        <textarea class="form-control" name="Bukti_Aduan" placeholder="Bukti_Aduan" id="Bukti_Aduan" style="height: 100px;"></textarea>
                        <label>Bukti Aduan</label>
                    </div>
                    </div>
                    <div class="text-center">
                        <input type="submit" name="submit" class="btn btn-primary" value='Tambah Aduan'> 
                    </div>
                </form>
            </div>
            <script>
                document.getElementById("pengaduanWargaform").addEventListener("submit", function(event) {
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