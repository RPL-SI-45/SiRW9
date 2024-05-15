@extends('layouts.admin')
@section('content')
<div class="pagetitle">
  <h1>Detail Berita Kegiatan</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="/admin/data-penduduk">Home</a></li>
      <li class="breadcrumb-item"><a href="/admin/beritakegiatan">Berita Kegiatan</a></li>
      <li class="breadcrumb-item active">Detail</li>
    </ol>
  </nav>
</div>
<section class="section">
  <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">{{ $beritakegiatan->judul }}</h5>
          <p class="card-text">{!! $beritakegiatan->isi !!}</p>
          <p class="card-text"><small class="text-muted">{{ $beritakegiatan->tanggal }}</small></p>
          <a href="/admin/beritakegiatan/{{ $beritakegiatan->id }}/edit" class="btn btn-warning">Edit</a>
          <form action="/admin/beritakegiatan/{{ $beritakegiatan->id }}" method="POST" style="display:inline-block;">
            @csrf
            @method('delete')
            <button class="btn btn-danger" type="submit" onclick="return confirm('Hapus Berita Kegiatan?')">Delete</button>
          </form>
          <a href="/admin/beritakegiatan" class="btn btn-secondary">Back</a>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
