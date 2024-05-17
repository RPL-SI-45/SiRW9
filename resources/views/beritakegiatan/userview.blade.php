@extends('layouts.guest')

@section('content')
<section id="portfolio" class="portfolio">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <h2>Berita Kegiatan</h2>
      <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
    </div>

    <div class="row blog-container" data-aos="fade-up" data-aos-delay="200">
        @foreach($beritakegiatan as $beritakegiatan)
            <div class="col-lg-4 col-md-6 portfolio-item">
                <div class="card">
                    <img src="{{ asset($beritakegiatan->image) }}" class="card-img-top" alt="{{ $beritakegiatan->judul }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $beritakegiatan->judul }}</h5>
                        <p class="card-text">{!! Str::limit($beritakegiatan->deskripsi, 150) !!}</p>
                        <a href="{{ route('blog-details', $beritakegiatan->slug) }}" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>


  </div>
</section>
@endsection
