@extends('layouts.admin')
@section('content')
    <div class="pagetitle" style="text-align: center;">
      <h1>Kumpulan Berita Kegiatan</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/admin/data-penduduk">Home</a></li>
          <li class="breadcrumb-item active">Berita Kegiatan</li>
        </ol>
      </nav>
    </div>
    <section class="section">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <br>
              <a href="/admin/beritakegiatan/create" class="btn btn-primary">Buat Berita Kegiatan</a>
              <br>
              <table class="table datatable">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Judul</th>
                    <th>Deskripsi</th>
                    <th>Isi</th>
                    <th>Tanggal</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($berita_kegiatan as $bk)
                    <tr>
                      <td>{{ $bk->id }}</td>
                      <td>{{ $bk->judul }}</td>
                      <td>{{ $bk->deskripsi }}</td>
                      <td>{{ Str::limit($bk->isi, 100) }}</td>
                      <td>{{ $bk->tanggal }}</td>
                      <td style="display: flex; gap: 5px; justify-content:center">
                        <a href="/admin/beritakegiatan/{{ $bk->id }}/edit" class="btn btn-warning btn-sm">Edit✏️</a>
                        <form action="/admin/beritakegiatan/{{ $bk->id }}" method="POST">
                          @csrf
                          @method('delete')
                          <input class="btn btn-danger btn-sm" type="submit" value='Delete🗑️' onclick="return confirm('Hapus Berita Kegiatan?')">
                        </form>
                      </td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection
