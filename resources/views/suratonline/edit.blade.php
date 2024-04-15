@extends('layouts.admin')

@section('content')
<div class="pagetitle">
    <h1>MENGEDIT SURAT ONLINE</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"> <a href="/admin/suratonline">Home</a></li>
            <li class="breadcrumb-item active">Surat Online</li>
            <li class="breadcrumb-item active">Edit</li>
        </ol>
    </nav>
</div>
<div class="card">
    <div class="card-body">
        <h5 class="card-title">Edit surat online</h5>
            <form action="/admin/suratonline/{surat_online->id}" method="POST" enctype="multipart/form-data">
            @method("put")
            @csrf
                <div class="mb-3">
                    <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
                    <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" value="{{$surat_online->nama_lengkap}}" >
                </div>
                <div class="mb-3">
                    <label for="nik" class="form-label">NIK</label>
                    <input type="text" class="form-control" id="nik" name="nik" value="{{$surat_online->nik}}">
                </div>
                <div class="mb-3">
                    <label for="keperluan" class="form-label">Keperluan</label>
                    <input type="text" class="form-control" id="keperluan" name="keperluan" value="{{$surat_online->keperluan}}">
                </div>
                <div class="mb-3">
                    <label for="jenis_surat" class="form-label">Jenis Surat</label>
                    <select class="form-select" id="jenis_surat" name="jenis_surat">
                        <option selected disabled>Jenis Surat</option>
                        <option value="izin" @if($surat_online->jenis_surat=='izin') selected @endif>Izin</option>
                        <option value="kunjungan" @if($surat_online->jenis_surat=='kunjungan') selected @endif>Kunjungan</option>
                        <option value="pindah" @if($surat_online->jenis_surat=='pindah') selected @endif>Pindah</option>
                        <option value="lainnya" @if($surat_online->jenis_surat=='lainnya') selected @endif>Lainnya</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                    <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" value="{{$surat_online->tanggal_lahir}}" >
                </div>
                <div class="mb-3">
                    <label for="umur" class="form-label">Umur</label>
                    <input type="text" class="form-control" id="umur" name="umur" value="{{$surat_online->umur}}">
                </div>
                <div class="mb-3">
                    <label for="status" class="form-label">Status</label>
                    <select class="form-select" id="status" name="status">
                        <option selected disabled>Status</option>
                        <option value="belum kawin" @if($surat_online->status=='belum kawin') selected @endif>Belum Kawin</option>
                        <option value="kawin" @if($surat_online->status=='kawin') selected @endif>Kawin</option>
                        <option value="cerai hidup" @if($surat_online->status=='cerai hidup') selected @endif>Cerai Hidup</option>
                        <option value="cerai mati" @if($surat_online->status=='cerai mati') selected @endif>Cerai Mati</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="agama" class="form-label">Agama</label>
                    <select class="form-select" id="agama" name="agama">
                        <option selected disabled>Agama</option>
                        <option value="islam" @if($surat_online->agama=='islam') selected @endif>Islam</option>
                        <option value="kristen" @if($surat_online->agama=='kristen') selected @endif>Kristen</option>
                        <option value="katolik" @if($surat_online->agama=='katolik') selected @endif>Katolik</option>
                        <option value="hindu" @if($surat_online->agama=='hindu') selected @endif>Hindu</option>
                        <option value="budha" @if($surat_online->agama=='budha') selected @endif>Budha</option>
                        <option value="konghucu" @if($surat_online->agama=='konghucu') selected @endif>Konghucu</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                    <select class="form-select" id="jenis_kelamin" name="jenis_kelamin">
                        <option selected disabled>Jenis Kelamin</option>
                        <option value="laki-laki" @if($surat_online->jenis_kelamin=='laki-laki') selected @endif>Laki-Laki</option>
                        <option value="perempuan" @if($surat_online->jenis_kelamin=='perempuan') selected @endif>Perempuan</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="pekerjaan" class="form-label">Pekerjaan</label>
                    <input type="text" class="form-control" id="pekerjaan" name="pekerjaan" value="{{$surat_online->pekerjaan}}">
                </div>
                <div class="mb-3">
                    <label for="dokumen" class="form-label">Dokumen</label>
                    <input type="file" class="form-control" id="dokumen" name="dokumen" value="{{$surat_online->dokumen}}">
                    @if($surat_online->dokumen)
                            <a href="{{ asset($surat_online->dokumen) }}">{{$surat_online->dokumen}}</a>
                            @else
                                <p>Belum ada surat yang diupload</p>
                            @endif
                </div>
                <div class="mb-3">
                    <label for="status_surat" class="form-label">Status Surat</label>
                    <select class="form-select" id="status_surat" name="status_surat">
                        <option selected disabled>Status Surat</option>
                        <option value="menunggu" @if($surat_online->status_surat=='menunggu') selected @endif>Menunggu</option>
                        <option value="disetujui" @if($surat_online->status_surat=='disetujui') selected @endif>Disetujui</option>
                        <option value="ditolak" @if($surat_online->status_surat=='ditolak') selected @endif>Ditolak</option>
                    </select>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Edit Data</button>
                </div>
        </form>
    </div>
@endsection








