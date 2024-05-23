@extends('layouts.admin')
@section('content')
    <div class="pagetitle">
      <h1>Tambah Aduan Warga</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/admin/pengaduanwarga">Home</a></li>
          <li class="breadcrumb-item active">Aduan Warga</li>
          <li class="breadcrumb-item active">Tambah Aduan Warga</li>
        </ol>
      </nav>
    </div>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Masukkan Aduan warga</h5>
            <form id='pengaduanwargaForm' class="row g-3" action="/admin/pengaduanwarga/store" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="juduladuan">Judul Aduan</label>
                    <input name="juduladuan" type="text" class="form-control" id="juduladuan" aria-describedby="Aduan Anda" required>
                </div>
                <div class="row mb-3">
                    <div class="col-md-9">
                        <label for="nama_pengadu">Nama Pelapor</label>
                        <input name="nama_pengadu" type="text" class="form-control" id="nama_pengadu" aria-describedby="Nama Anda" required>
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
                    </div>
                </div>
                <div class="form-group mb-3">
                    <label for="aduan">Detail Aduan</label>
                    <textarea class="form-control" name="aduan" rows="5" id="aduan" required></textarea>
                </div>
                <div class="mb-3">
                    <label for="bukti_aduan" class="col-form-label">Bukti Aduan</label>
                    <input class="form-control" type="file" name="bukti_aduan" id="bukti_aduan" required>
                </div>
                <div class="mb-3">
                    <label for="status_aduan">Status Aduan</label>
                    <select class="form-select" name="status_aduan" id="status_aduan" required>
                        <option value="">Status</option>
                        <option value="menunggu">Menunggu</option>
                        <option value="disetujui">Disetujui</option>
                        <option value="ditolak">Ditolak</option>
                    </select>
                </div>
                <div class="text-center">
                    <input type="submit" name="submit" class="btn btn-primary" value='Submit'>
                </div>
            </form>
        </div>
    </div>
@endsection
