@extends('layouts.guest')
@section('content')
<div class="pagetitle">
    <br>
  <h1>{{$beritakegiatan->judul}}</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="/">Home</a></li>
      <li class="breadcrumb-item"><a href="/beritakegiatan">Berita Kegiatan</a></li>
      <li class="breadcrumb-item active">Detail</li>
    </ol>
  </nav>
</div>
<div class="row gy-4">
    <div class="blog-details-container">
      <img src="{{ asset($beritakegiatan->image) }}" class="img-fluid" alt="{{ $beritakegiatan->judul }}">
    </div>
    <div class="blog-description">
        <p>{!! $beritakegiatan->isi !!}</p>
    <strong>Terakhir diupdate</strong>: {{$beritakegiatan->tanggal}}</li>
    </div>
    
</div>

@endsection
