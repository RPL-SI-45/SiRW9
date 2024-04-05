@extends('layouts.master')
@section('content')
<!-- <nav>
    <a class = "logo"> Surat Online</a>
    <ul>
        </li><a href="/suratonline">Home</a></li>
    </ul>
    <div class="nav-button">
</nav> -->
<div class = 'container'>
<a class="btn btn-primary"href="/admin/suratonline/create">Tambah Data</a>
<table border = 1>
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
    </tr>
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
        <td>{{$s->dokumen}}</td>
        <td>{{$s->status_surat}}</td>
        <td>
            <a class ="btn btn-warning" href="/admin/suratonline/{{$s->id}}/edit/">Edit</a>
            <form action="/admin/suratonline/{{$s->id}}" method="POST">
                @csrf
                @method('delete')
                <input class="btn btn-danger" type="submit" value="Delete">
            </form>
    </tr>
    @endforeach
</table>
</div>
@endsection