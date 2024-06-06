@extends('layouts.guest')
@section('content')
<div class="pagetitle">
    <br>
  <h1>{{$panduanlayanan->Judul_Panduan}}</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="/">Home</a></li>
      <li class="breadcrumb-item"><a href="/panduanlayanan">Panduan Layanan</a></li>
      <li class="breadcrumb-item active">{{($panduanlayanan->Judul_Panduan)}}</li>
    </ol>
  </nav>
</div>
<div class="row gy-4">
    <div class="blog-description">
        <p>{!! $panduanlayanan->IsiPanduan !!}</p>
        <strong>Dibuat pada:</strong> {{$panduanlayanan->created_at}}</li>
        <br>
        <strong>Terakhir diupdate:</strong>: {{$panduanlayanan->updated_at}}</li>
    </div>

</div>

@endsection