<h1>Iuran Kas Warga</h1>

<a href="/iurankas/create">Tambah Data</a>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Nama Lengkap</th>
        <th>Alamat</th>
        <th>RT</th>
        <th>Tanggal Bayar</th>
        <th>Nomor Rekening</th>
        <th>Nama Pengirim</th>
        <th>Bukti Pembayaran</th>
        <th>Status Pembayaran</th>
    </tr>
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
    </tr>
    @endforeach
</table>