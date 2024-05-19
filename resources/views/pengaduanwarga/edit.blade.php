@extends('layouts.admin')
@section('content')
    <div class="pagetitle">
      <h1>Edit Data Pengaduan Warga</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/admin/pengaduanwarga">Home</a></li>
          <li class="breadcrumb-item active">Pengaduan Warga</li>
          <li class="breadcrumb-item active">Edit Aduan Warga</li>
        </ol>
      </nav>
    </div>
    <div class="card">
        <div class="card-body">
              <h5 class="card-title">Edit Aduan Warga</h5>
                <form id='pengaduanWargaForm' class="row g-3" action="/admin/pegaduanwarga/edit/{{$pengaduan_warga->id}}" method="GET">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label>Aduan</label>
                        <input name="Aduan" type="text" class="form-control" id="Aduan" value="{{$pengaduan_warga->Aduan}}">
                    </div>
                    <div class="col-md-8 mb-3">
                        <label>Nama Pengusul</label>
                        <input name="Nama_Pengadu" type="text" class="form-control" id="Nama_Pengadu" value="{{$pengaduan_warga->Aduan}}">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label>RT</label>
                        <select class="form-select" name="RT"  required>
                        <option value="">Pilih RT</option>
                            <option value="1" @if($pengaduan_warga->RT=='1') selected @endif>1</option>
                            <option value="2" @if($pengaduan_warga->RT=='2') selected @endif>2</option>
                            <option value="3" @if($pengaduan_warga->RT=='3') selected @endif>3</option>
                            <option value="4" @if($pengaduan_warga->RT=='4') selected @endif>4</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="inputNumber" class="col-sm-2 col-form-label">Bukti Aduan</label>
                        <div class="col-sm-12">
                            <input class="form-control" type="file" name="Bukti_Aduan">
                            @if($pengaduan_warga->Bukti_Aduan)
                            <a href="{{ asset($pengaduan_warga->Bukti_Aduan) }}">{{$pengaduan_warga->Bukti_Aduan}}</a>
                            @else
                                <p>Belum ada bukti yang diupload</p>
                            @endif
                        </div>
                    </div>
                    <div class="text-center">
                        <input type="submit" name="submit" class="btn btn-primary" value='Edit Aduan'> 
                    </div>
                </form>
            </div>
            <script>
                document.getElementById("aduanwargaform").addEventListener("submit", function(event) {
                    var form = event.target;
                    if (!form.checkValidity()) {
                        event.preventDefault();
                        event.stopPropagation();
                        // Show notification for empty fields
                        alert("Please fill out all required fields.");
                    }
                    form.classList.add('was-validated');
                });
            </script>
@endsection