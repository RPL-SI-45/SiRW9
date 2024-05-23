@extends('layouts.admin')

@section('content')
    <div class="pagetitle" style="text-align: center;">
        <h1>Tabel Pengaduan Warga</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/admin/pengaduanwarga">Home</a></li>
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
                        <a href="/admin/pengaduanwarga/create" class="btn btn-primary">Tambah Pengaduan Warga</a>
                        <br>
                        <div class="table-responsive col-lg-12">
                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Judul Aduan</th>
                                        <th>Nama Pengadu</th>
                                        <th>RT Pengadu</th>
                                        <th>Detail Aduan</th>
                                        <th>Bukti Aduan</th>
                                        <th>Status Aduan</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($pengaduan_warga as $pw)
                                        <tr>
                                            <td>{{ $pw->id }}</td>
                                            <td>{{ $pw->juduladuan }}</td>
                                            <td>{{ $pw->nama_pengadu }}</td>
                                            <td>{{ $pw->rt_pengadu }}</td>
                                            <td>{{$pw->aduan}}</td>
                                            <td><a href="{{ asset($pw->bukti_aduan) }}" target="_blank">Lihat</a></td>
                                            <td>{{ $pw->status_aduan }}</td>
                                            <td style="display: flex; gap: 5px; justify-content: center">
                                                <a href="/admin/pengaduanwarga/edit/{{ $pw->id }}" class="btn btn-warning btn-sm">Edit✏️</a>
                                                <form action="/admin/pengaduanwarga/delete/{{ $pw->id }}" method="POST" onsubmit="return confirm('Hapus Data Pengaduan?')">
                                                    @csrf
                                                    @method('delete')
                                                    <input class="btn btn-danger btn-sm" type="submit" value="Delete 🗑️">
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
