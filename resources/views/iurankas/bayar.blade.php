@extends('layouts.guest')
@section('content')
<div class="pagetitle">
    <h1>Bayar Kas Bulanan</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/iurankas">Home</a></li>
            <li class="breadcrumb-item active">Bayar Kas Bulanan</li>
        </ol>
    </nav>
</div>
<div class="card">
    <div class="card-body">
        <h5 class="card-title">Masukkan data</h5>
        <form class="row g-3" action="/iurankas/store" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label>Nama Lengkap</label>
                <input name="Nama_Lengkap" type="text" class="form-control" id="Nama_Lengkap" aria-describedby="Isikan Nama Lengkap">
            </div>
            <div class="col-md-10 mb-3">
                <label>Alamat</label>
                <input name="Alamat" type="text" class="form-control" id="Alamat" aria-describedby="Alamat Tempat Tinggal">
            </div>
            <div class="col-md-2 mb-3">
                <label>RT</label>
                <input name="RT" type="text" class="form-control" id="RT" aria-describedby="Isi RT Tempat Tinggal">
            </div>
            <div class="mb-3">
                <label>Tanggal Bayar</label>
                <input name="Tanggal_Bayar" type="date" class="form-control" id="Tanggal_Bayar">
            </div>
            <div class="mb-3 col-md-6">
                <label>Nomor Rekening</label>
                <input name="Nomor_Rekening" type="text" class="form-control" id="Nomor_Rekening" aria-describedby="Isikan Nomor Rekening">
            </div>
            <div class="mb-3 col-md-6">
                <label>Nama Pengirim</label>
                <input name="Nama_Pengirim" type="text" class="form-control" id="Nama_Pengirim" aria-describedby="Isikan Nama Pengirim">
            </div>
            <div class="mb-3">
                <label for="inputNumber" class="col-sm-2 col-form-label">Bukti Pembayaran</label>
                <div class="col-sm-12">
                    <input class="form-control" type="file" name="Bukti_Pembayaran">
                </div>
                <div class="text-center">
                    <input type="submit" name="submit" class="btn btn-primary" value='Submit'>
                </div>
        </form>
    </div>
    @endsection