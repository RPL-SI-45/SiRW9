@extends('layouts.admin')
@section('content')
    <div class="pagetitle" style="text-align: center;">
      <h1>SURAT ONLINE RW09</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/admin/data-penduduk">Home</a></li>
          <li class="breadcrumb-item active">Surat Online</li>
        </ol>
      </nav>
    </div>
    <section class="section">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body" style="overflow: visible;">
              <br>
              <a href="/admin/suratonline/create" class="btn btn-primary">Data Surat Online</a>
              <br>
                    <table  class="table datatable">
                        <thead>
                            
                            <tr>
                                <th>Nama Lengkap</th>
                                <th>NIK</th>
                                <th>Keperluan</th>
                                <th>Jenis Surat</th>
                                <th>Tanggal Lahir</th>
                                <th>Umur</th>
                                <th>Status</th>
                                <th>Agama</th>
                                <th>Jenis Kelamin</th>
                                <th>Pekerjaan</th>
                                <th>Dokumen</th>
                                <th>Status Surat</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        @foreach($surat_online as $s)
                            <tr>
                            <td>{{$s->nama_lengkap}}</td> 
                                <td>{{$s->nik}}</td> 
                                <td>{{$s->keperluan}}</td>
                                <td>{{$s->jenis_surat}}</td>
                                <td>{{$s->tanggal_lahir}}</td>
                                <td>{{$s->umur}}</td> 
                                <td>{{$s->status}}</td>
                                <td>{{$s->agama}}</td>
                                <td>{{$s->jenis_kelamin}}</td>
                                <td>{{$s->pekerjaan}}</td>
                                <td>
                                    <a href="{{ asset($s->dokumen) }}" target="_blank">Lihat Dokumen</a> 
                                </td>
                                <td>{{$s->status_surat}}</td>
                                <td style="display: flex; gap: 5px; justify-content:center">
                                    <a href="/admin/suratonline/{{$s->id}}}/edit" class="btn btn-warning btn-sm">Edit✏️</a>
                                    <form action="/admin/suratonline/{{$s->id}}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <input class="btn btn-danger btn-sm" type="submit" value='Delete🗑️' onclick="confirm('Hapus Data Surat Online?')">
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