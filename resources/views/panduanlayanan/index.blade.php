@extends('layouts.admin')
@section('content')
    <div class="pagetitle" style="text-align: center;">
      <h1>Tabel Panduan Layanan</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/admin/panduanlayanan">Home</a></li>
          <li class="breadcrumb-item active">Panduan Layanan</li>
        </ol>
      </nav>
    </div>
    <section class="section">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <br>
              <a href="/admin/panduanlayanan/create" class="btn btn-primary" >Tambah Panduan Layanan</a>
              <br>
                    <table  class="table datatable">
                        <thead>
                            <tr >
                                <th>ID</th>
                                <th>Judul Panduan</th>
                                <th>Isi Panduan</th>
                                <th>Kategori Panduan</th>
                                <th>Tanggal Pembuatan</th>
                                <th>Tanggal Diperbarui</th>
                            </tr>
                        </thead>
                        @foreach($panduanlayanan as $pl)
                            <tr>
                                <td>{{$pl->id}}</td>
                                <td>{{$pl->Judul_Panduan}}</td>
                                <td>{{!!$pl->IsiPanduan!!}}</td>
                                <td>{{$pl->KategoriPanduan}}</td>
                                <td>{{$pl->created_at}}</td>
                                <td>{{$pl->updated_at}}</td>
                                <td style="display: flex; gap: 5px; justify-content:center">
                                    <a href="/admin/panduanlayanan/edit/{{$pl->id}}" class="badge bg-warning"><span data-feather="edit"></span></a>
                                    <form action="/admin/panduanlayanan/delete/{{$pl->id}}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button class="badge bg-danger border-0" type="submit" onclick="return confirm('Hapus Panduan Layanan?')">
                                          <span data-feather="trash-2"></span>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </table>
            </div>
          </div>

        </div>
      </div>
    </section>
@endsection