@extends('layouts.guest')

@section('content')

<!-- First Section: Carousel -->
<section id="carousel" class="carousel">
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      @foreach($carouselImages as $index => $image)
        <li data-target="#carouselExampleIndicators" data-slide-to="{{ $index }}" class="{{ $index == 0 ? 'active' : '' }}"></li>
      @endforeach
    </ol>
    <div class="carousel-inner">
      @foreach($carouselImages as $index => $image)
        <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
          <img class="d-block w-100" src="{{ asset($image->image) }}" alt="Slide {{ $index + 1 }}">
          <div class="carousel-caption d-none d-md-block">
            <h5>{{ $image->title }}</h5>
            <p>{{ $image->description }}</p>
          </div>
        </div>
      @endforeach
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</section>

<!-- Second Section: Berita Kegiatan -->
<section id="portfolio" class="portfolio">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <h2>Berita Kegiatan</h2>
      <p>Kegiatan-kegiatan yang telah atau hendak dilaksanakan di RW IX Kelurahan Banyumanik, Kecamatan Banyumanik, Kota Semarang.</p>
    </div>

    <div class="row blog-container" data-aos="fade-up" data-aos-delay="200">
      @foreach($beritakegiatan as $berita)
        <div class="col-lg-4 col-md-6 portfolio-item">
          <div class="card">
            <img src="{{ asset($berita->image) }}" class="card-img-top" alt="{{ $berita->judul }}">
            <div class="card-body">
              <h5 class="card-title">{{ $berita->judul }}</h5>
              <p class="card-text">{!! Str::limit($berita->deskripsi, 150) !!}</p>
              <a href="{{ route('blog-details', $berita->slug) }}" class="btn btn-primary">Read More</a>
            </div>
          </div>
        </div>
      @endforeach
    </div>

  </div>
</section>

@endsection
