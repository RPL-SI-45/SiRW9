@extends('layouts.guest')
@section('content')
    <div class="pagetitle">
      <h1> Permohonan Surat</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Permohonan Surat</li>
        </ol>
      </nav>
    </div>
    <div class="card">
        <div class="card-body">
              <h5 class="card-title">Lihatlah Panduan Pembuatan Surat Pada</h5><br>
              <h5><i>link panduan permohonan</h5></i>
                <form method="POST" action="/suratonline/store" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label>Nama Lengkap</label>
                        <input name="nama_lengkap" type="text" class="form-control" id="nama_Lengkap" aria-describedby="Nama Lengkap Anda">
                    </div>
                    <div class="mb-3">
                        <label>NIK</label>
                        <input name="nik" type="text" class="form-control" id="nik" aria-describedby="NIK Anda">
                    </div>
                    <div class="mb-3">
                        <label>Agama</label>
                        <select class="form-select" name="agama">
                            <option value="agama">Agama</option>
                            <option value="islam">Islam</option>
                            <option value="kristen">Kristen</option>
                            <option value="kastolik">Katolik</option>
                            <option value="hindu">Hindu</option>
                            <option value="budha">Budha</option>
                            <option value="konghucu">Konghucu</option>
                            
                        </select>
                    </div>
                    <div class="mb-3">
                        <label>Tanggal Lahir</label>
                        <input name="tanggal_lahir" type="date" class="form-control" id="tanggal_lahir" aria-describedby="Tanggal Lahir Anda">
                    </div>
                    <div class="mb-3">
                        <label>Umur</label>
                        <input name="umur" type="text" class="form-control" id="umur" aria-describedby="Umur Lahir Anda">
                    </div>
                    <div class="mb-3">
                        <label>Status Perkawinan</label>
                        <select class="form-select" name="status">
                            <option value="">Status Perkawinan</option>
                            <option value="belum kawin">Belum Kawin</option>
                            <option value="sudah kawin">Sudah Kawin</option>
                            <option value="cerai hidup">Cerai Hidup</option>
                            <option value="cerai mati">Cerai Mati</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label>Jenis Kelamin</label>
                        <select class="form-select" name="jenis_kelamin">
                            <option value="">Jenis Kelamin</option>
                            <option value="P">Perempuan</option>
                            <option value="L">Laki - Laki</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label>Alamat</label>
                        <input name="alamat" type="text" class="form-control" id="alamat" aria-describedby="Alamat Anda">
                    </div>
                    <div class="mb-3">
                        <label>Pekerjaan</label>
                        <input name="pekerjaan" type="text" class="form-control" id="pekerjaan" aria-describedby="Pekerjaan Anda">
                    </div>
                    <div class="mb-3">
                        <label for="inputNumber" class="col-sm-2 col-form-label">Dokumen</label>
                        <div class="col-sm-12">
                            <input class="form-control" type="file" name="dokumen">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label>Jenis Surat</label>
                        <select class="form-select" name="jenis_surat">
                            <option value="">Jenis Surat</option>
                            <option value="izin">Izin</option>
                            <option value="kunjungan">Kunjungan</option>
                            <option value="pindah">Pindah</option>
                            <option value="lainnya">Pindah</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label>Keperluan</label>
                        <input name="keperluan" type="text" class="form-control" id="keperluan" aria-describedby="Keperluan">
                    </div>
                    <div class="text-center">
                        <input type="submit" name="submit" class="btn btn-primary" value='Buat Surat'> 
                    </div>
                </form>
            </div>
@endsection