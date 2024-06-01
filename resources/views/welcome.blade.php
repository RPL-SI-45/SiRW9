@extends('layouts.homepage')

@section('content')

<!-- First Section: Carousel -->
<section id="hero" class="d-flex align-items-center ">
    <div class="container">
        <div class="row ">
            <div class="col-lg-5 d-flex flex-column justify-content-center pt-4  pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200" >
                <h1>Selamat Datang!</h1>
                <h2>Di website RW IX Kelurahan Banyumanik, Kecamatan Banyumanik, Kota Semarang.</h2>
                <div class="d-flex justify-content-center justify-content-lg-start">
                    <a href="#about" class="btn-get-started scrollto">Profil RW</a>
                </div>
            </div>
            <div class="col-lg-7 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
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
                                <div class="carousel-caption">
                                    <h4>{{ $image->title }}</h4>
                                </div>
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
        </div>
    </div>
</section>

<div class="container">
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
</div>


@endsection
