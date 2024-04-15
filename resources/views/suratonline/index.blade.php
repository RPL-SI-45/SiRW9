@extends('layouts.admin')
@section('content')
<!-- <nav>
    <a class = "logo"> Surat Online</a>
    <ul>
        </li><a href="/suratonline">Home</a></li>
    </ul>
    <div class="nav-button">
</nav> -->
<div class="pagetitle" style="text-align: center;">
    <h1>Surat Online</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/admin/suratonline">Home</a></li>
            <li class="breadcrumb-item active">Data Penduduk</li>
        </ol>
    </nav>
</div>
<section class="section">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <br>
                    <a class="btn btn-primary"href="/admin/suratonline/create">Tambah Data</a>
                    <br>
                        <table class="table datatable">
                            <thread>
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
                            </thread>
                            @foreach($surat as $s)
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
                                    <td>
                                        <a class="btn btn-warning" href="/admin/suratonline/{{$s->id}}/edit">Edit</a>
                                        <form action="/admin/suratonline/{{$s->id}}" method="POST">
                                            @csrf
                                            @method('delete')
                                            <input class="btn btn-danger btn-sm" type="submit" value='Delete🗑️' onclick="confirm('Hapus Data?')">
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
