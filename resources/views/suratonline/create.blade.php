@extends('layouts.admin')
@section('content')
    <div class="pagetitle">
      <h1>PERMOHONAN SURAT</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/admin/iurankas">Home</a></li>
          <li class="breadcrumb-item active">Tambah Iuran Kas</li>
        </ol>
      </nav>
    </div>
    <div class="card">
        <div class="card-body">
              <h5 class="card-title">Lihatlah Panduan Pembuatan Surat Pada</h5><br>
              <h5><i>link panduan permohonan</h5></i>
                <form class="row g-3" action="/suratonline/store" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label>Nama Lengkap</label>
                        <input name="Nama_Lengkap" type="text" class="form-control" id="Nama_Lengkap" aria-describedby="Nama Lengkap Anda">
                    </div>
                    <div class="col-md-10 mb-3">
                        <label>Tanggal Lahir</label>
                        <input name="Tanggal_Lahir" type="date" class="form-control" id="Tanggal_Lahir" aria-describedby="Tanggal Lahir Tinggal Anda">
                    </div>
                    <div class="col-md-2 mb-3">
                        <label>NIK</label>
                        <input name="NIK" type="text" class="form-control" id="NIK" aria-describedby="NIK Anda">
                    </div>
                    <div class="mb-3">
                        <label>Jenis Kelamin</label>
                        <select class="form-select" name="Jenis_Kelamin">
                            <option value="">Jenis Kelamin</option>
                            <option value="P">Perempuan</option>
                            <option value="L">Laki - Laki</option>
                        </select>
                    </div>
                    <div class="mb-3 col-md-6">
                        <label>Alamat</label>
                        <input name="Alamat" type="text" class="form-control" id="Alamat" aria-describedby="Alamat Anda">
                    </div>
                    <div class="mb-3 col-md-6">
                        <label>Pekerjaan</label>
                        <input name="Pekerjaan" type="text" class="form-control" id="Pekerjaan" aria-describedby="Pekerjaan Anda">
                    </div>
                    <div class="mb-3">
                        <label for="inputNumber" class="col-sm-2 col-form-label">Berkas Pendukung</label>
                        <div class="col-sm-12">
                            <input class="form-control" type="file" name="Berkas_Pendukung(Link_Drive)">
                        </div>
                    </div>
                    <div class="mb-3 col-md-6">
                        <label>Keperluan</label>
                        <input name="Keperluan" type="text" class="form-control" id="Keperluan" aria-describedby="Keperluan">
                    </div>
                    <div class="text-center">
                        <input type="submit" name="submit" class="btn btn-primary" value='Buat Surat'> 
                    </div>
                </form>
            </div>
@endsection