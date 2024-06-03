@extends('layouts.homepage')

@section('content')

<!-- First Section: Carousel -->
<section id="hero" class="d-flex align-items-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
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
                                <img class="d-block w-100 carousel-image" src="{{ asset($image->image) }}" alt="Slide {{ $index + 1 }}">
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

<!-- Last Section: Photo Carousel -->
<section id="services" class="services section-bg">
  <div class="container" data-aos="fade-up">
    <div class="section-title">
      <h2>Foto Kegiatan</h2>
      <p>Foto kegiatan-kegiatan yang dilakukan di RW IX Kelurahan Banyumanik, Kecamatan Banyumanik, Kota Semarang.</p>
    </div>
    <div class="container">
      <div class="wrapper">
        <ul class="carousel carousel slide" data-ride="carousel">
          @foreach($photoCarouselImages as $index => $image)
            <li>
              <img src="{{ asset($image->image) }}" alt="img" draggable="false" data-slide-to="{{ $index }}">
            </li>
          @endforeach
        </ul>
        <i id="left" class="fa-solid fa-angle-left"></i>
        <i id="right" class="fa-solid fa-angle-right"></i>
      </div>
    </div>
  </div>
</section>
<style>
  * 
  .wrapper {
    max-width: 1100px;
    width: 100%;
    position: relative;
  }
  .wrapper i {
    top: 50%;
    height: 50px;
    width: 50px;
    font-size: 1.25rem;
    position: absolute;
    text-align: center;
    line-height: 50px;
    background: #fff;
    border-radius: 50%;
    box-shadow: 0 3px 6px rgba(0,0,0,0.23);
    transform: translateY(-50%);
    transition: transform 0.1s linear;
  }
  .wrapper i:first-child {
    left: -22px;
  }
  .wrapper i:last-child {
    right: -22px;
  }
  .wrapper .carousel {
    display: flex;
    overflow-x: auto;
    scroll-snap-type: x mandatory;
    gap: 16px;
    border-radius: 8px;
    scroll-behavior: smooth;
    scrollbar-width: none;
  }
  .carousel::-webkit-scrollbar {
    display: none;
  }
  .carousel.no-transition {
    scroll-behavior: auto;
  }
  .carousel.dragging {
    scroll-snap-type: none;
    scroll-behavior: auto;
  }
  .carousel li {
    scroll-snap-align: start;
    flex: 0 0 auto;
    list-style: none;
  }
  .carousel li img {
    width: 270px;
    height: 210px;
    object-fit: cover;
    border-radius: 8px;
    border: 4px solid #fff;
  }
  .carousel-image {
        width: 100%;
        height: 400px; /* Set a fixed height */
        object-fit: cover; /* Ensures the image covers the area without distortion */
    }

    /* Adjustments for different screen sizes */
    @media (max-width: 768px) {
        .carousel-image {
            height: 300px;
        }
    }

    @media (max-width: 576px) {
        .carousel-image {
            height: 200px;
        }
    }

  @media screen and (max-width: 900px) {
    .carousel li img {
      width: calc(50% - 9px);
    }
  }
  @media screen and (max-width: 600px) {
    .carousel li img {
      width: 100%;
    }
  }
  
</style>

<script>
  document.addEventListener('DOMContentLoaded', () => {
    const wrapper = document.querySelector(".wrapper");
    const carousel = document.querySelector(".carousel");
    const firstCardWidth = carousel.querySelector(".card").offsetWidth;
    const arrowBtns = document.querySelectorAll(".wrapper i");
    const carouselChildrens = [...carousel.children];

    let isDragging = false, isAutoPlay = true, startX, startScrollLeft, timeoutId;

    // Get the number of cards that can fit in the carousel at once
    let cardPerView = Math.round(carousel.offsetWidth / firstCardWidth);

    // Insert copies of the last few cards to beginning of carousel for infinite scrolling
    carouselChildrens.slice(-cardPerView).reverse().forEach(card => {
        carousel.insertAdjacentHTML("afterbegin", card.outerHTML);
    });

    // Insert copies of the first few cards to end of carousel for infinite scrolling
    carouselChildrens.slice(0, cardPerView).forEach(card => {
        carousel.insertAdjacentHTML("beforeend", card.outerHTML);
    });

    // Scroll the carousel at appropriate position to hide first few duplicate cards on Firefox
    carousel.classList.add("no-transition");
    carousel.scrollLeft = carousel.offsetWidth;
    carousel.classList.remove("no-transition");

    // Add event listeners for the arrow buttons to scroll the carousel left and right
    arrowBtns.forEach(btn => {
        btn.addEventListener("click", () => {
            carousel.scrollLeft += btn.id === "left" ? -firstCardWidth : firstCardWidth;
        });
    });

    const dragStart = (e) => {
        isDragging = true;
        carousel.classList.add("dragging");
        // Records the initial cursor and scroll position of the carousel
        startX = e.pageX;
        startScrollLeft = carousel.scrollLeft;
    }

    const dragging = (e) => {
        if(!isDragging) return; // if isDragging is false return from here
        // Updates the scroll position of the carousel based on the cursor movement
        carousel.scrollLeft = startScrollLeft - (e.pageX - startX);
    }

    const dragStop = () => {
        isDragging = false;
        carousel.classList.remove("dragging");
    }

    const infiniteScroll = () => {
        // If the carousel is at the beginning, scroll to the end
        if(carousel.scrollLeft === 0) {
            carousel.classList.add("no-transition");
            carousel.scrollLeft = carousel.scrollWidth - (2 * carousel.offsetWidth);
            carousel.classList.remove("no-transition");
        }
        // If the carousel is at the end, scroll to the beginning
        else if(Math.ceil(carousel.scrollLeft) === carousel.scrollWidth - carousel.offsetWidth) {
            carousel.classList.add("no-transition");
            carousel.scrollLeft = carousel.offsetWidth;
            carousel.classList.remove("no-transition");
        }

        // Clear existing timeout & start autoplay if mouse is not hovering over carousel
        clearTimeout(timeoutId);
        if(!wrapper.matches(":hover")) autoPlay();
    }

    const autoPlay = () => {
        if(window.innerWidth < 800 || !isAutoPlay) return; // Return if window is smaller than 800 or isAutoPlay is false
        // Autoplay the carousel after every 2500 ms
        timeoutId = setTimeout(() => carousel.scrollLeft += firstCardWidth, 2500);
    }

    carousel.addEventListener("mousedown", dragStart);
    carousel.addEventListener("mousemove", dragging);
    document.addEventListener("mouseup", dragStop);
    carousel.addEventListener("scroll", infiniteScroll);
    wrapper.addEventListener("mouseenter", () => clearTimeout(timeoutId));
    wrapper.addEventListener("mouseleave", autoPlay);

    // Initial call to autoplay
    autoPlay();
  });

</script>
@endsection