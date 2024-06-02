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

        <ul id="portfolio-flters" class="flex justifiy-content-center" data-aos="fade-up" data-aos-delay="100" style="text-align: center; align-items:center">
          <li data-filter="*" class="filter-active">Semua</li>
          <li data-filter=".filter-inum">Informasi Umum</li>
          <li data-filter=".filter-pead">Pelayanan Administrasi</li>
          <li data-filter=".filter-kepro">Kegiatan dan Program RW</li>
          <li data-filter=".filter-ppm">Partisipasi dan Pengaduan Masyarakat</li>
        </ul>

        <section id="faq" class="faq section-bg">
            <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="100">
                @foreach($panduanlayanans as $ply)
                    @if($ply->KategoriPanduan == 'Informasi Umum')
                    <div class="col-lg-12 portfolio-item filter-inum" data-aos-delay="{{ ($loop->index + 1) * 100 }}">
                    @elseif($ply->KategoriPanduan == 'Kegiatan dan Program RW')
                    <div class="col-lg-12 portfolio-item filter-pead" data-aos-delay="{{ ($loop->index + 1) * 100 }}">
                    @elseif($ply->KategoriPanduan == 'Pelayanan Administrasi')
                    <div class="col-lg-12 portfolio-item filter-kepro" data-aos-delay="{{ ($loop->index + 1) * 100 }}">
                    @elseif($ply->KategoriPanduan == 'Partisipasi dan Pengaduan Masyarakat')
                    <div class="col-lg-12 portfolio-item filter-ppm" data-aos-delay="{{ ($loop->index + 1) * 100 }}">
                    @endif
                        <div class="container" data-aos="fade-up">
                            <div class="faq-list">
                                <ul>
                                    <li data-aos="fade-up" data-aos-delay="{{ ($loop->index + 1) * 100 }}">
                                        <i class="bx bx-help-circle icon-help"></i> 
                                        <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-{{$loop->index + 1}}">
                                            {{$ply->Judul_Panduan}}
                                            <i class="bx bx-chevron-down icon-show"></i>
                                            <i class="bx bx-chevron-up icon-close"></i>
                                        </a>
                                        <div id="faq-list-{{$loop->index + 1}}" class="collapse" data-bs-parent=".faq-list">
                                            <p>{{$ply->IsiPanduan}}</p>
                                        </div>
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