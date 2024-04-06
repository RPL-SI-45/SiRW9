@extends('layouts.admin')
@section('content')
    <div class="pagetitle" style="text-align: center;">
      <h1>Tabel Data Penduduk</h1>
    </div>
    <section class="section">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title"></h5>
              <a href="/admin/data-penduduk/create" class="btn btn-primary" class='card-title'>Tambah Data Penduduk</a>
                    <table  class="table datatable">
                        <thead>
                            <tr >
                                <th>ID</th>
                                <th>Nama</th>
                                <th>NIK</th>
                                <th>Tanggal Lahir</th>
                                <th>Jenis Kelamin</th>
                                <th>Alamat</th>
                                <th>RT</th>
                                <th>Status Perkawinan</th>
                                <th>Pekerjaan</th>
                                <th> </th>
                            </tr>
                        </thead>
                        @foreach($data_penduduk as $dp)
                            <tr>
                                <td>{{$dp->id}}</td>
                                <td>{{$dp->Nama_Warga}}</td>
                                <td>{{$dp->NIK}}</td>
                                <td>{{$dp->Tanggal_Lahir}}</td>
                                <td>{{$dp->Jenis_Kelamin}}</td>
                                <td>{{$dp->Alamat}}</td>
                                <td>{{$dp->RT}}</td>
                                <td>{{$dp->Status_Perkawinan}}</td>
                                <td>{{$dp->Pekerjaan}}</td>
                                <td style="display: flex; gap: 5px; justify-content:center">
                                    <a href="/admin/data-penduduk/{{$dp->id}}/edit" class="btn btn-warning btn-sm">Edit✏️</a>
                                    <form action="/admin/data-penduduk/{{$dp->id}}" method="POST">
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