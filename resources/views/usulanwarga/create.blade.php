@extends('layouts.admin')
@section('content')
    <div class="pagetitle">
      <h1>Tambah Data Usulan Warga</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/admin/usulanwarga">Home</a></li>
          <li class="breadcrumb-item active">Usulan Warga</li>
          <li class="breadcrumb-item active">Tambah Usulan Warga</li>
        </ol>
      </nav>
    </div>
    <div class="card">
        <div class="card-body">
              <h5 class="card-title">Masukkan usulan warga</h5>
                <form id='usulanWargaForm' class="row g-3" action="/admin/usulanwarga/store" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label>Judul Usulan</label>
                        <input name="Judul_Usulan" type="text" class="form-control" id="Judul_Usulan" required>
                    </div>
                    <div class="col-md-8 mb-3">
                        <label>Nama Pengusul</label>
                        <input name="Nama_Pengusul" type="text" class="form-control" id="Nama_Pengusul" required>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label>RT</label>
                        <select class="form-select" name="RT"  required>
                            <option value="">Pilih RT</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                        </select>
                    </div>
                    <div class="col-12">
                        <div class="form-floating">
                        <textarea class="form-control" name="Detail_Usulan" placeholder="Detail_Usulan" id="Detail_Usulan" style="height: 100px;"></textarea>
                        <label>Detail Usulan</label>
                    </div>
                    </div>
                    <div class="text-center">
                        <input type="submit" name="submit" class="btn btn-primary" value='Tambah Usulan'> 
                    </div>
                </form>
            </div>
            <script>
                document.getElementById("usulanWargaform").addEventListener("submit", function(event) {
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