<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SiRW9</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    @yield('content')
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
@extends('layouts.admin')
@section('content')
    <div class="pagetitle" style="text-align: center;">
      <h1>Home Page Edit</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/admin/data-penduduk">Home</a></li>
          <li class="breadcrumb-item active">Home Page Edit</li>
        </ol>
      </nav>
      @if(session()->has('sukses'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          {{ session('sukses')}}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      @endif
      @if(session()->has('delete'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          {{ session('delete')}}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      @endif
    </div>
    <section class="section">
      <div class="row">
        <div class="col-lg-6">
          <div class="card">
            <br>
                <div class="card-body ">
                  <div class="text-center">
                    <h4>Edit Carousel</h4>
                  </div>
                    <div class="table-responsive col-lg-12">
                        <table class="table">
                        <div class="justify-content-center">
                            <div id="carouselExampleIndicators" class="carousel slide col-lg-12" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    @foreach($carouselImages as $index => $image)
                                        <li data-target="#carouselExampleIndicators" data-slide-to="{{ $index }}" class="{{ $index == 0 ? 'active' : '' }}"></li>
                                    @endforeach
                                </ol>
                                <div class="carousel-inner">
                                    @foreach($carouselImages as $index => $image)
                                        <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                                            <img class="d-block w-100" src="{{ asset($image->image) }}" alt="Slide {{ $index + 1 }}">
                                        </div>
                                    @endforeach
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                </a>
                            </div>
                        </div>
                        
                    <tr>
                      <th>ID</th>
                      <th>Judul</th>
                      <th>Action</th>
                    </tr>
                  <tbody>
                    @foreach($carouselImages as $image)
                      <tr>
                        <td>{{ $image->id }}</td>
                        <td><a href="{{ asset($image->image) }}">{{ $image->image }}</a></td>
                        <td style="display: flex; gap: 5px; justify-content:center">
                          <a href="/admin/homepage-edit/{{ $image->id }}/edit" class="badge bg-warning"><span data-feather="edit"></span></a>
                        </td>
                      </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="card">
              <br>
              <div class="card-body" id='photoCard'>
                  <div class="text-center">
                    <h4>Tambah Foto</h4>
                  </div>
                  <a href="/admin/photo-edit/create" class="btn btn-primary">Tambahkan Foto Homepage</a>
                  <br>
                  <br>
                  <div class="table-responsive col-lg-12">
                      <table class="table">
                          <tr>
                              <th>ID</th>
                              <th>Judul</th>
                              <th>Action</th>
                          </tr>
                          <tbody>
                              @foreach($photoCarouselImages as $pc)
                              <tr>
                                  <td>{{ $pc->id }}</td>
                                  <td><a href="{{ asset($pc->image) }}">{{ $pc->image }}</a></td>
                                  <td style="display: flex; gap: 5px; justify-content:center">
                                      <a href="/admin/photo-edit/{{ $pc->id }}/edit" class="badge bg-warning"><span data-feather="edit"></span></a>
                                      <form action="/admin/photo-edit/{{ $pc->id }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button class="badge bg-danger border-0" type="submit" onclick="return confirm('Hapus Berita Kegiatan?')">
                                          <span data-feather="trash-2"></span>
                                        </button>
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
