@extends('layouts.guest')
@section('content')
  <br>
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="/">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">Profil RW</li>
    </ol>
  </nav>

  <section id="profil-rw" class="profil-rw">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="section-title text-center">
            <h2>Profil RW</h2>
          </div>

          <div class="profil-rw-content">
            <p>{!! $profilRW->description !!}</p>

            @if ($profilRW->image)
              <div class="text-center">
                <img src="{{ asset($profilRW->image) }}" alt="Profil RW" class="img-fluid rounded">
              </div>
            @endif
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection
