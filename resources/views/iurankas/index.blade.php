@extends('layouts.admin')
@section('content')
    <div class="pagetitle" style="text-align: center;">
      <h1>Tabel Iuran Bulanan Kas Warga</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/admin/iurankas">Home</a></li>
        </ol>
      </nav>
    </div>
    <section class="section">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <br>
              <a href="/admin/iurankas/create" class="btn btn-primary">Tambah Data Iuran Kas</a>
              <br>
                    <table  class="table datatable">
                        <thead>
                            <tr >
                                <th>ID</th>
                                <th>Nama Lengkap</th>
                                <th>Alamat</th>
                                <th>RT</th>
                                <th>Tanggal Bayar</th>
                                <th>Nomor Rekening</th>
                                <th>Nama Pengirim</th>
                                <th>Bukti Pembayaran</th>
                                <th>Status Pembayaran</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        @foreach($iurankas as $ik)
                            <tr>
                                <td>{{$ik->id}}</td> 
                                <td>{{$ik->Nama_Lengkap}}</td>
                                <td>{{$ik->Alamat}}</td>
                                <td>{{$ik->RT}}</td>
                                <td>{{$ik->Tanggal_Bayar}}</td>
                                <td>{{$ik->Nomor_Rekening}}</td>
                                <td>{{$ik->Nama_Pengirim}}</td>
                                <td>
                                    <img src="{{asset($ik->Bukti_Pembayaran)}}" style="width: 90px;height: 160px;">
                                </td>
                                <td>{{$ik->Status_Pembayaran}}</td>
                                <td style="display: flex; gap: 5px; justify-content:center">
                                    <a href="/admin/iurankas/edit/{{$ik->id}}" class="btn btn-warning btn-sm">Edit✏️</a>
                                    <form action="/admin/iurankas/delete/{{$ik->id}}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <input class="btn btn-danger btn-sm" type="submit" value='Delete🗑️' onclick="confirm('Hapus Data Iuran Kas?')">
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