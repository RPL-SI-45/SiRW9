@extends('layouts.admin')
@section('content')
    <div class="pagetitle">
      <h1>Tambah Data Iuran Kas</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/admin/iurankas">Home</a></li>
          <li class="breadcrumb-item active">Edit Iuran Kas</li>
        </ol>
      </nav>
    </div>
    <div class="card">
        <div class="card-body">
              <h5 class="card-title">Edit data iuran kas</h5>
                <form class="row g-3" action="/admin/iurankas/update/{{$iurankas->id}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label>Nama Lengkap</label>
                        <input name="Nama_Lengkap" type="text" class="form-control" id="Nama_Lengkap" aria-describedby="Isikan Nama Lengkap" value="{{$iurankas->Nama_Lengkap}}">
                    </div>
                    <div class="col-md-10 mb-3">
                        <label>Alamat</label>
                        <input name="Alamat" type="text" class="form-control" id="Alamat" aria-describedby="Alamat Tempat Tinggal" value="{{$iurankas->Alamat}}">
                    </div>
                    <div class="col-md-2 mb-3">
                        <label>RT</label>
                        <input name="RT" type="text" class="form-control" id="RT" aria-describedby="Isi RT Tempat Tinggal" value="{{$iurankas->RT}}">
                    </div>
                    <div class="mb-3">
                        <label>Tanggal Bayar</label>
                        <input name="Tanggal_Bayar" type="date" class="form-control" id="Tanggal_Bayar" value="{{$iurankas->Tanggal_Bayar}}">
                    </div>
                    <div class="mb-3 col-md-6">
                        <label>Nomor Rekening</label>
                        <input name="Nomor_Rekening" type="text" class="form-control" id="Nomor_Rekening" aria-describedby="Isikan Nomor Rekening" value="{{$iurankas->Nomor_Rekening}}">
                    </div>
                    <div class="mb-3 col-md-6">
                        <label>Nama Pengirim</label>
                        <input name="Nama_Pengirim" type="text" class="form-control" id="Nama_Pengirim" aria-describedby="Isikan Nama Pengirim" value="{{$iurankas->Nama_Pengirim}}">
                    </div>
                    <div class="mb-3">
                        <label for="inputNumber" class="col-sm-2 col-form-label">Bukti Pembayaran</label>
                        <div class="col-sm-12">
                            <input class="form-control" type="file" name="Bukti_Pembayaran">
                            @if($iurankas->Bukti_Pembayaran)
                            <a href="{{ asset($iurankas->Bukti_Pembayaran) }}">{{$iurankas->Bukti_Pembayaran}}</a>
                            @else
                                <p>Belum ada bukti yang diupload</p>
                            @endif
                        </div>
                    </div>
                    <div class="mb-3">
                        <label>Status Pembayaran</label>
                        <select class="form-select" name="Status_Pembayaran">
                            <option value="">Status Pembayaran</option>
                            <option value="Lunas" @if($iurankas->Status_Pembayaran == "Lunas") selected @endif>Lunas</option>
                            <option value="Belum Lunas" @if($iurankas->Status_Pembayaran == "Belum Lunas") selected @endif>Belum Lunas</option>
                        </select>
                    </div>
                    <div class="text-center">
                        <input type="submit" name="submit" class="btn btn-primary" value='Edit Data'> 
                    </div>
                </form>
            </div>
@endsection