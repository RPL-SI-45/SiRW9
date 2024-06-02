
@extends('layouts.admin')

@section('content')
    <div class="pagetitle">
      <h1>Tambahkan Foto</h1>
      <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/admin/data-penduduk">Home</a></li>
            <li class="breadcrumb-item"><a href="/admin/homepage-edit">Edit Homepage</a></li>
            <li class="breadcrumb-item active">Tambah</li>
        </ol>
      </nav>
    </div>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Tambah Foto Homepage</h5>
            <form id="BKform" action="/admin/photo-edit/store" method="POST" novalidate enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="formFile" class="form-label">Masukkan Foto</label>
                    <input class="form-control" type="file" id="image" name="image" accept="image/png, image/jpeg, image/jpg, image/webp">
                    <div class="invalid-feedback">File harus berupa gambar dengan format PNG, JPG, JPEG, atau WEBP dan ukuran maksimal 2MB.</div>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Tambahkan</button>
                </div>
            </form>
        </div>
    </div>

<script>

    document.getElementById("BKform").addEventListener("submit", function(event) {
        var form = event.target;
        var fileInput = document.getElementById('image');
        var file = fileInput.files[0];

        if (!form.checkValidity()) {
            event.preventDefault();
            event.stopPropagation();
            alert("Please fill out all required fields.");
        }

        if (file) {
            var validTypes = ['image/png', 'image/jpeg', 'image/jpg', 'image/webp'];
            if (!validTypes.includes(file.type)) {
                alert("Invalid file type. Only PNG, JPG, JPEG, and WEBP are allowed.");
                event.preventDefault();
                return;
            }

            if (file.size > 2048 * 1024) {
                alert("File size exceeds 2MB.");
                event.preventDefault();
                return;
            }
        }

        form.classList.add('was-validated');
    });

</script>
@endsection
