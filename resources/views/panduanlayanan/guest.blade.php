@extends('layouts.guest')
@section('content')
    <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">
        <br>
        <br>
        <div class="section-title">
          <h2>Panduan Layanan</h2>
          <p>Temukan solusi pertanyaan dan permasalahan anda dengan panduan layanan di bawah.</p>
          <p>Pilih kategori sesuai dengan permasalahan anda.</p>
        </div>

        <ul id="portfolio-flters" class="flex justifiy-content-center" data-aos="fade-up" data-aos-delay="50" style="text-align: center; align-items:center">
          <li data-filter="*" class="filter-active">Semua</li>
          <li data-filter=".filter-inum">Informasi Umum</li>
          <li data-filter=".filter-pead">Pelayanan Administrasi</li>
          <li data-filter=".filter-kepro">Kegiatan dan Program RW</li>
          <li data-filter=".filter-ppm">Partisipasi dan Pengaduan Masyarakat</li>
        </ul>

        <section id="faq" class="faq section-bg">
            <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="50">
                @foreach($panduanlayanan as $ply)
                    @if($ply->KategoriPanduan == 'Informasi Umum')
                    <div class="col-lg-12 portfolio-item filter-inum">
                    @elseif($ply->KategoriPanduan == 'Pelayanan Administrasi')
                    <div class="col-lg-12 portfolio-item filter-pead">
                    @elseif($ply->KategoriPanduan == 'Kegiatan dan Program RW')
                    <div class="col-lg-12 portfolio-item filter-kepro">
                    @elseif($ply->KategoriPanduan == 'Partisipasi dan Pengaduan Masyarakat')
                    <div class="col-lg-12 portfolio-item filter-ppm">
                    @endif
                        <div class="container" data-aos="fade-up">
                            <div class="faq-list">
                                <ul>
                                    <li data-aos="fade-up" data-aos-delay="50">
                                        <i class="bx bx-help-circle icon-help"></i> 
                                        <a href="{{url('isipanduan', $ply->slug)}}" data-bs-target="#faq-list-{{$loop->index + 1}}">
                                            {{$ply->Judul_Panduan}}
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
</section>