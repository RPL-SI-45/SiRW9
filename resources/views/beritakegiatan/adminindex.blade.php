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
      @if(session()->has('sukses'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          {{ session('sukses')}}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      @endif
      @if(session()->has('delete'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          {{ session('delete')}}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      @endif
    </div>
    <section class="section">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <br>
              <a href="/admin/beritakegiatan/create" class="btn btn-primary">Buat Berita Kegiatan</a>
              <br>
              <div class="table-responsive col-lg-12">
                <table class="table datatable">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Judul</th>
                      <th>Tanggal</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($berita_kegiatan as $bk)
                      <tr>
                        <td>{{ $bk->id }}</td>
                        <td>{{ $bk->judul }}</td>
                        <td>{{ $bk->tanggal }}</td>
                        <td style="display: flex; gap: 5px; justify-content:center">
                          <a href="/admin/beritakegiatan/{{ $bk->id }}" class="badge bg-info"><span data-feather="eye"></span></a>
                          <a href="/admin/beritakegiatan/{{ $bk->id }}/edit" class="badge bg-warning"><span data-feather="edit"></span></a>
                          <form action="/admin/beritakegiatan/{{ $bk->id }}" method="POST">
                            @csrf
                            @method('delete')
                            <button class="badge bg-danger border-0" type="submit" onclick="return confirm('Hapus Berita Kegiatan?')">
                              <span data-feather="trash-2"></span>
                            </button>
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
      </div>
    </section>
@endsection
