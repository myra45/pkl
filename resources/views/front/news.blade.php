@extends('front.layout.app')
@section('main_content')
    <section class="home-section home-parallax home-fade home-full-height bg-dark-60 agency-page-header" id="home"
        data-background="{{ asset('dist_front/assets/images/agency/Background.jpg') }}">
        <div class="titan-caption home-caption">
            <div class="caption-content">
                <div class="mb-30 titan-title-size-2 a-color">
                    SMK Budi Bakti Ciwidey
                </div>
                <div class="mb-40 titan-title-size-3" style="text-transform: uppercase;">
                    <span class="rotate">Berita</span>
                </div>
            </div>
        </div>
    </section>
    <div class="main">
        <section class="module">
            <div class="container">
                <div class="row multi-columns-row post-columns">
                    <div class="col-sm-6 col-md-4 col-lg-4">
                        <div class="post">
                            <div class="post-thumbnail gambar-badag"><a href="#"><img
                                        src="{{ asset('dist_front/assets/images/berita/berita1.jpg') }}"
                                        alt="Blog-post Thumbnail" /></a>
                            </div>
                            <div class="post-header font-alt">
                                <h2 class="post-title"><a href="#">Mengikuti kegiatan kemah</a></h2>
                                <div class="post-meta">By&nbsp;<a href="#">Iwan Ridwansyah</a>&nbsp;| 3 Agustus | 4
                                    Comments
                                </div>
                            </div>
                            <div class="post-entry">
                                <p>Menjadi peserta kegiatan Kemah Tangkas 1.0 OSIS SMK Se-Jawa Barat dengan perwakilan dari sekolah SMK Budi  Bakti  Ciwidey sebanyak 5 peserta dengan peserta menduduki banku kelas 11 dan 12. </p>
                            </div>
                            <div class="post-more"><a class="more-link" href="#">Read more</a></div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-4">
                        <div class="post">
                            <div class="post-thumbnail gambar-badag"><a href="#"><img
                                        src="{{ asset('dist_front/assets/images/Berita-1.jpg') }}"
                                        alt="Blog-post Thumbnail" /></a>
                            </div>
                            <div class="post-header font-alt">
                                <h2 class="post-title"><a href="#">Mengikuti perlombaan LKBB</a></h2>
                                <div class="post-meta">By&nbsp;<a href="#">Agus Muhammad Wilyan</a>&nbsp;| 30 Juni | 4
                                    Comments
                                </div>
                            </div>
                            <div class="post-entry">
                                <p> Kegiatan ini di ikuti dari Siswa dan purna SMK Budi Bakti Ciwidey yang di mana di laksanakan di SMP Handayani 2 Pameungpeuk dengan pasukan kategori Purna.</p>
                            </div>
                            <div class="post-more"><a class="more-link" href="{{route('detail_berita')}}">Read more</a></div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-4">
                        <div class="post">
                            <div class="post-thumbnail gambar-badag"><a href="#"><img
                                        src="{{ asset('dist_front/assets/images/Berita-2.jpg') }}"
                                        alt="Blog-post Thumbnail" /></a>
                            </div>
                            <div class="post-header font-alt">
                                <h2 class="post-title"><a href="#">Kegiatan Sholat Duhha</a></h2>
                                <div class="post-meta">By&nbsp;<a href="#">Yudin</a>&nbsp;| 5 November | 15
                                    Comments
                                </div>
                            </div>
                            <div class="post-entry">
                                <p>Kegiatan sholat duhha ini di lakukan sebelum siswa melakukan pembelajaran serta kegiatan ini sudah berlangsung dari sejak lama, sehingga kegiatan ini bisa di sebut tradsi di SMK Budi Bakti Ciwidey</p>
                            </div>
                            <div class="post-more"><a class="more-link" href="#">Read more</a></div>
                        </div>
                    </div>
                </div>
        </section>

    </div>
@endsection
