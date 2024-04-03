@extends('layouts.master')
@section('content')
<nav>
    <a class = "logo"> Surat Online</a>
    <ul>
        </li><a href="/suratonline">Home</a></li>
    </ul>
    <div class="nav-button">
</nav>
<div class = 'container'>
<a class="btn btn-primary"href="/suratonline/create">Tambah Data</a>
<table border = 1>
    <tr>
    <th>status_surat</th>
    <th>jenis_kelamin</th>
    <th>jenis_surat</th>
    <th>agama</th>
    <th>status_perkawinan</th>
    </tr>
    @foreach($surat as $s)
    <tr>
        <td>{{$s->status_surat}}</td>
        <td>{{$s->jenis_kelamin}}</td>
        <td>{{$s->jenis_surat}}</td>
        <td>{{$s->agama}}</td>
        <td>{{$s->status_perkawinan}}</td>
    </tr>
    @endforeach
</table>
</div>
