@extends('layouts.admin')

@section('content')
<div class="pagetitle">
    <h1>Edit Foto</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/admin/data-penduduk">Home</a></li>
            <li class="breadcrumb-item"><a href="/admin/homepage-edit">Edit Homepage</a></li>
            <li class="breadcrumb-item active">Edit</li>
        </ol>
    </nav>
</div>
<section>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <br>
                    <form id="BKForm" action="{{ url('/admin/homepage-edit/' . $carouselImage->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="image" class="form-label">Ubah Foto</label>
                            @if ($carouselImage->image)
                                <div class="mt-2">
                                    <img src="{{ asset($carouselImage->image) }}" style="max-width: 200px;">
                                    <p>Foto yang saat ini ditampilkan: <a href="{{ asset($carouselImage->image) }}">{{ $carouselImage->image }}</a></p>
                                </div>
                            @endif
                            <input class="form-control" type="file" id="image" name="image" accept="image/png, image/jpeg, image/jpg, image/webp">
                            <div class="invalid-feedback">File harus berupa gambar dengan format PNG, JPG, JPEG, atau WEBP dan ukuran maksimal 2MB.</div>
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    document.getElementById("BKForm").addEventListener("submit", function(event) {
        var form = event.target;
        var fileInput = document.getElementById('image');
        var file = fileInput.files[0];

        if (!form.checkValidity()) {
            event.preventDefault();
            event.stopPropagation();
            alert("Please fill out all required fields.");
            return;
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
