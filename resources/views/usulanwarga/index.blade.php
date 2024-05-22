@extends('layouts.admin')
@section('content')
    <div class="pagetitle" style="text-align: center;">
      <h1>Tabel Usulan Warga</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/admin/usulanwarga">Home</a></li>
          <li class="breadcrumb-item active">Usulan Warga</li>
        </ol>
      </nav>
    </div>
    <section class="section">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <br>
              <a href="/admin/usulanwarga/create" class="btn btn-primary" >Tambah Usulan Warga</a>
              <br>
                    <table  class="table datatable">
                        <thead>
                            <tr >
                                <th>ID</th>
                                <th>Judul Usulan</th>
                                <th>Nama Pengusul</th>
                                <th>RT</th>
                                <th>Detail Usulan</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        @foreach($usulanwarga as $uw)
                            <tr>
                                <td>{{$uw->id}}</td>
                                <td>{{$uw->Judul_Usulan}}</td>
                                <td>{{$uw->Nama_Pengusul}}</td>
                                <td>{{$uw->RT}}</td>
                                <td>{{$uw->Detail_Usulan}}</td>
                                <td style="display: flex; gap: 5px; justify-content:center">
                                    <a href="/admin/usulanwarga/edit/{{$uw->id}}" class="btn btn-warning btn-sm">Edit✏️</a>
                                    <form action="/admin/usulanwarga/delete/{{$uw->id}}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <input class="btn btn-danger btn-sm" type="submit" value='Delete🗑️' onclick="confirm('Hapus Data Peminjaman?')">
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