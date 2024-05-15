@extends('layouts.admin')
@section('content')
    <div class="pagetitle" style="text-align: center;">
      <h1>Tabel Pengaduan Warga</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/admin/usulanwarga">Home</a></li>
          <li class="breadcrumb-item active">Pengaduan Warga</li>
        </ol>
      </nav>
    </div>
    <section class="section">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <br>
              <a href="/admin/pengaduanwarga/create" class="btn btn-primary" >Tambah Pengaduan Warga</a>
              <br>
                    <table  class="table datatable">
                        <thead>
                            <tr >
                                <th>ID</th>
                                <th>Aduan</th>
                                <th>Nama Pengadu</th>
                                <th>RT Pengadu</th>
                                <th>Status Aduan</th>
                                <th>Bukti Aduan</th>
                            </tr>
                        </thead>
                        @foreach($pengaduanwarga as $pw)
                            <tr>
                                <td>{{$pw->id}}</td>
                                <td>{{$pw->Aduan}}</td>
                                <td>{{$pw->Nama_Pengadu}}</td>
                                <td>{{$pw->RT_Pengadu}}</td>
                                <td>{{$pw->StatusAduan}}</td>
                                <td style="display: flex; gap: 5px; justify-content:center">
                                    <a href="/admin/pengaduanwarga/edit/{{$pw->id}}" class="btn btn-warning btn-sm">Edit✏️</a>
                                    <form action="/admin/pengaduanwarga/delete/{{$pw->id}}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <input class="btn btn-danger btn-sm" type="submit" value='Delete🗑️' onclick="confirm('Hapus Data Pengaduan?')">
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