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
            <form id="pengaduanWargaForm" class="row g-3" action="/admin/pengaduanwarga/{{$pengaduan_warga->id}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="juduladuan">Judul Aduan</label>
                    <input name="juduladuan" type="text" class="form-control" id="juduladuan" value="{{ $pengaduan_warga->juduladuan }}" required>
                </div>
                <div class="col-md-8 mb-3">
                    <label for="nama_pengadu">Nama Pengadu</label>
                    <input name="nama_pengadu" type="text" class="form-control" id="nama_pengadu" value="{{ $pengaduan_warga->nama_pengadu }}" required>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="rt_pengadu">RT</label>
                    <select class="form-select" name="rt_pengadu" id="rt_pengadu" required>
                        <option value="">Pilih RT</option>
                        <option value="1" @if($pengaduan_warga->rt_pengadu == '1') selected @endif>1</option>
                        <option value="2" @if($pengaduan_warga->rt_pengadu == '2') selected @endif>2</option>
                        <option value="3" @if($pengaduan_warga->rt_pengadu == '3') selected @endif>3</option>
                        <option value="4" @if($pengaduan_warga->rt_pengadu == '4') selected @endif>4</option>
                    </select>
                </div>
                <div class="form-group mb-3">
                    <label for="aduan">Detail Aduan</label>
                    <textarea class="form-control" name="aduan" rows="5" id="aduan" required>{{ $pengaduan_warga->aduan }}</textarea>
                </div>
                <div class="mb-3">
                    <label for="bukti_aduan" class="col-form-label">Bukti Aduan</label>
                    <div class="input-group">
                        <input class="form-control" type="file" name="bukti_aduan" id="bukti_aduan">
                        @if($pengaduan_warga->bukti_aduan)
                            <div class="input-group-append">
                                <a href="{{ asset($pengaduan_warga->bukti_aduan) }}" target="_blank" class="btn btn-primary">Lihat Bukti</a>
                            </div>
                        @else
                            <div class="input-group-append">
                                <span class="input-group-text">Belum ada bukti yang diupload</span>
                            </div>
                        @endif
                    </div>
                </div>
                <div class="mb-3">
                    <label for="status_aduan">Status Aduan</label>
                    <select class="form-select" name="status_aduan" id="status_aduan" required>
                        <option value="">Status</option>
                        <option value="menunggu" @if($pengaduan_warga->status_aduan == 'menunggu') selected @endif>Menunggu</option>
                        <option value="disetujui" @if($pengaduan_warga->status_aduan == 'disetujui') selected @endif>Disetujui</option>
                        <option value="ditolak" @if($pengaduan_warga->status_aduan == 'ditolak') selected @endif>Ditolak</option>
                    </select>
                </div>
                <div class="text-center">
                    <input type="submit" name="submit" class="btn btn-primary" value="Edit Aduan">
                </div>
            </form>
        </div>
    </div>

    <script>
        document.getElementById("pengaduanWargaForm").addEventListener("submit", function(event) {
            var form = event.target;
            if (!form.checkValidity()) {
                event.preventDefault();
                event.stopPropagation();
                alert("Please fill out all required fields.");
            }
            form.classList.add('was-validated');
        });
    </script>
@endsection
