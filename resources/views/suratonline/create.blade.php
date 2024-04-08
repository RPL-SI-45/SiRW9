@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>MENAMBAH SURAT ONLINE</h1>
    <form action="/admin/suratonline/store" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
            <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap">
        </div>
        <div class="mb-3">
            <label for="nik" class="form-label">NIK</label>
            <input type="text" class="form-control" id="nik" name="nik">
        </div>
        <div class="mb-3">
            <label for="keperluan" class="form-label">Keperluan</label>
            <input type="text" class="form-control" id="keperluan" name="keperluan">
        </div>
        <div class="mb-3">
            <label for="jenis_surat" class="form-label">Jenis Surat</label>
            <select class="form-select" id="jenis_surat" name="jenis_surat">
                <option selected disabled>Jenis Surat</option>
                <option value="izin">Izin</option>
                <option value="kunjungan">Kunjungan</option>
                <option value="pindah">Pindah</option>
                <option value="lainnya">Lainnya</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
            <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir">
        </div>
        <div class="mb-3">
            <label for="umur" class="form-label">Umur</label>
            <input type="text" class="form-control" id="umur" name="umur">
        </div>
        <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <select class="form-select" id="status" name="status">
                <option selected disabled>Status</option>
                <option value="belum kawin">Belum Kawin</option>
                <option value="kawin">Kawin</option>
                <option value="cerai hidup">Cerai Hidup</option>
                <option value="cerai mati">Cerai Mati</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="agama" class="form-label">Agama</label>
            <select class="form-select" id="agama" name="agama">
                <option selected disabled>Agama</option>
                <option value="islam">Islam</option>
                <option value="kristen">Kristen</option>
                <option value="katolik">Katolik</option>
                <option value="hindu">Hindu</option>
                <option value="budha">Budha</option>
                <option value="konghucu">Konghucu</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
            <select class="form-select" id="jenis_kelamin" name="jenis_kelamin">
                <option selected disabled>Jenis Kelamin</option>
                <option value="laki-laki">Laki-Laki</option>
                <option value="perempuan">Perempuan</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="pekerjaan" class="form-label">Pekerjaan</label>
            <input type="text" class="form-control" id="pekerjaan" name="pekerjaan">
        </div>
        <div class="mb-3">
            <label for="inputNumber" class="form-label">Dokumen</label>
            <input type="file" class="form-control" id="dokumen" name="dokumen">
        </div>
        <div class="mb-3">
            <label for="status_surat" class="form-label">Status Surat</label>
            <select class="form-select" id="status_surat" name="status_surat">
                <option selected disabled>Status Surat</option>
                <option value="menunggu">Menunggu</option>
                <option value="disetujui">Disetujui</option>
                <option value="ditolak">Ditolak</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Tambah Data</button>
    </form>
</div>
@endsection
