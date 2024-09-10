@extends('front.layout.app')
@section('main_content')
        <section class="home-section home-parallax home-fade home-full-height bg-dark-60 agency-page-header" id="home"
            data-background="{{ asset('uploads/' . $page_data->banner_photo) }}">
            <div class="titan-caption home-caption">
                <div class="caption-content">
                    <div class="mb-30 titan-title-size-2 a-color">
                        {{ $page_data->banner_title }}
                    </div>
                    <div class="mb-40 titan-title-size-3" style="text-transform: uppercase;">
                        <span class="rotate">{{ $page_data->banner_subtitle }}</span>
                    </div>
                    <a class="section-scroll btn btn-border-w btn-circle a-color"
                        href="{{ $page_data->banner_button_url }}">{{ $page_data->banner_button_text }}</a>
                </div>
            </div>
        </section>

    <div class="main">
        <section class="about-section" style="padding-top: 8rem;" id="tentang">
            <div class="container">
                <div class="row">
                    <div class="col-md-6" style="padding: 0px;">
                        <img src="{{ asset('uploads/'.$page_data->about_photo) }}"
                            alt="Ekstrakulikuler image" class="about-img" />
                    </div>
                    <div class="col-md-6" style="margin-top: 8rem;">
                        <h2 class="module-title    align-left">{{ $page_data->about_title}}</h2>
                        <div class="module-subtitle font-serif align-left">
                            "Kegiatan ekstrakurikuler merupakan kegiatan diluar kurikulum pokok yang dilakukan disekolah
                            untuk mengembangkan aspek non-akademik siswa" &mdash; Prof. Dr. Haryanto, M.Pd.,
                        </div>
                        <p style="margin-top: -5rem;">
                            <span style="font-size: medium;">Beberapa manfaat ekstrakulikuler antara lain:</span>
                        </p>

                        <div class="col-md-4">
                            <div class="features-item">
                                <div class="features-icon">
                                    <span><img width="50" height="50"
                                            src="{{ $page_data->about_icon_1}}" alt="design--v1" /></span>
                                </div>
                                <h3 class="features-title">
                                    {{$page_data->about_title_icon_1}}
                                </h3>
                                <span class=" " style="font-size: 1.4rem;">
                                    <div>{{$page_data->about_desc_icon_1}}</div>
                                </span>
                            </div>

                        </div>
                        <div class="col-md-4">
                            <div class="features-item">
                                <div class="features-icon">
                                    <span><img width="50" height="50"
                                            src="{{ $page_data->about_icon_2}}"
                                            alt="development-skill" /></span>
                                </div>
                                <h3 class="features-title">
                                    {{ $page_data->about_title_icon_2}}
                                </h3>
                                <span class=" " style="font-size: 1.4rem;">
                                    <div>{{ $page_data->about_desc_icon_2}}</div>
                                </span>
                            </div>

                        </div>

                        <div class="col-md-4 ">
                            <div class="features-item">
                                <div class="features-icon">
                                    <span><img width="50" height="50" src="{{ $page_data->about_icon_3}}"
                                            alt="welfare" /></span>
                                </div>
                                <h3 class="features-title   ">{{ $page_data->about_title_icon_3}}</h3>
                                <span class=" " style="font-size: 1.4rem;">
                                    <div>{{ $page_data->about_desc_icon_3}}
                                    </div>
                                </span>
                            </div>

                        </div>
                    </div>
                </div>
        </section>
            <section class="module">
                <h2 class="module-title    ">{{ $page_data->service_title }}</h2>
                <div class="container">
                    <div class="row multi-columns-row">
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="features-item">
                                <div class="features-icon">
                                    <span><img width="50" height="50" src="{{ $page_data->eskul_icon_1 }}"
                                            alt="mosque" /></span>
                                </div>
                                <h3 class="features-title">{{ $page_data->nama_eskul_1 }}</h3>
                                <span class=" " style="font-size: 1.4rem;">
                                    <div>{{ $page_data->desc_eskul_1 }}</div>
                                </span>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="features-item">
                                <div class="features-icon">
                                    <span><img width="50" height="50" src="{{ $page_data->eskul_icon_2 }}"
                                            alt="open-book--v1" /></span>
                                </div>
                                <h3 class="features-title   ">
                                    {{ $page_data->nama_eskul_2 }}
                                </h3>
                                <span class="" style="font-size: 1.4rem;">
                                    <div>{{ $page_data->desc_eskul_2 }}</div>
                                </span>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="features-item">
                                <div class="features-icon">
                                    <span><img width="50" height="50" src="{{ $page_data->eskul_icon_3 }}"
                                            alt="poplar" /></span>
                                </div>
                                <h3 class="features-title   ">
                                    {{ $page_data->nama_eskul_3 }}
                                </h3>
                                <span class=" " style="font-size: 1.4rem;">
                                    <div>{{ $page_data->desc_eskul_3 }}</div>
                                </span>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="features-item">
                                <div class="features-icon">
                                    <span><img width="50" height="50" src="{{ $page_data->eskul_icon_4 }}"
                                            alt="angklung" /></span>
                                </div>
                                <h3 class="features-title   ">{{ $page_data->nama_eskul_4 }}</h3>
                                <span class=" " style="font-size: 1.4rem;">
                                    <div>{{ $page_data->desc_eskul_4 }}</div>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <section class="module pt-0 pb-0" id="news">
            <div class="row position-relative m-0">
                <h2 class="module-title" style="margin: 0 ;">BERITA</h2>
                <section class="module">
                    <div class="container">
                        <div class="row multi-columns-row post-columns">
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="post">
                                    <div class="" style="overflow: hidden;">
                                        <div class="post-thumbnail gambar-badag">
                                            <a>
                                                <img class=""
                                                    src="{{ asset('dist_front/assets/images/Berita-1.jpg') }}"
                                                    alt="Blog-post Thumbnail" />
                                            </a>
                                        </div>
                                    </div>
                                    <div class="post-header   ">
                                        <h2 class="post-title"><a href="#">Mengikuti Perlombaan</a></h2>
                                        <div class="post-meta">By&nbsp;<a href="#">SMK BBC</a>&nbsp;| 23 November |
                                            3 Comments
                                        </div>
                                    </div>
                                    <div class="post-entry">
                                        <p>A wonderful serenity has taken possession of my entire soul, like these sweet
                                            mornings of spring which I enjoy with my whole heart.</p>
                                    </div>
                                    <div class="post-more"><a class="more-link" href="#">Baca Selengkapnya</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="post">
                                    <div class="" style="overflow: hidden; transition: all 10s;"></div>
                                    <div class="post-thumbnail gambar-badag"><a><img
                                                src="{{ asset('dist_front/assets/images/Berita-2.jpg') }}"
                                                alt="Blog-post Thumbnail" /></a></div>
                                    <div class="post-header   ">
                                        <h2 class="post-title"><a href="#">Sholat Dhuha Bersama</a></h2>
                                        <div class="post-meta">By&nbsp;<a href="#">SMK BBC</a>&nbsp;| 11 November |
                                            4 Comments
                                        </div>
                                    </div>
                                    <div class="post-entry">
                                        <p>A wonderful serenity has taken possession of my entire soul, like these sweet
                                            mornings of spring which I enjoy with my whole heart.</p>
                                    </div>
                                    <div class="post-more"><a class="more-link" href="{{ route('detail_berita') }}">Baca Selengkapnya</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="post">
                                    <div class="" style="overflow: hidden; transition: all 10s;"></div>
                                    <div class="post-thumbnail gambar-badag"><a><img
                                                src="{{ asset('dist_front/assets/images/Berita-3.jpg') }}"
                                                alt="Blog-post Thumbnail" /></a></div>
                                    <div class="post-header   ">
                                        <h2 class="post-title"><a href="#">Taman Baca</a></h2>
                                        <div class="post-meta">By&nbsp;<a href="{{ route('detail_berita') }}">SMK BBC</a>&nbsp;| 5 November |
                                            15 Comments
                                        </div>
                                    </div>
                                    <div class="post-entry">
                                        <p>A wonderful serenity has taken possession of my entire soul, like these sweet
                                            mornings of spring which I enjoy with my whole heart.</p>
                                    </div>
                                    <div class="post-more"><a class="more-link" href="{{ route('detail_berita') }}">Baca
                                            Selengkapnya</a></div>
                                </div>
                            </div>
                </section>
                <section class="module bg-dark-60 pt-0 pb-0 parallax-bg testimonial"
                    data-background="{{ asset('uploads/' . $page_data->bg_testi) }}">
                    <div class="testimonials-slider pt-140 pb-140">
                        <ul class="slides">
                            <li>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="module-icon"><span class="icon-quote"></span></div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-8 col-sm-offset-2">
                                            <blockquote class="testimonial-text font-alt">{{$page_data->desc_testi}}</blockquote>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-4 col-sm-offset-4">
                                            <div class="testimonial-author">
                                                <div class="testimonial-caption font-alt">
                                                    <div class="testimonial-title">{{$page_data->nama_testi}}</div>
                                                    <div class="testimonial-descr">{{$page_data->eskul_testi}}</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </section>
                <section class="module" id="kontak">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6 col-sm-offset-3">
                                <h2 class="module-title">KONTAK</h2>
                                <div class="module-subtitle font-serif"></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <form role="form" method="POST" action="">
                                    @csrf
                                    <div class="form-group">
                                        <label class="sr-only" for="name">Nama</label>
                                        <input class="form-control" type="text" id="name" name="name"
                                            placeholder="Nama*" required="required"
                                            data-validation-required-message="Please enter your name." />
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    <div class="form-group">
                                        <label class="sr-only" for="email">Email</label>
                                        <input class="form-control" type="email" id="email" name="email"
                                            placeholder="Email*" required="required"
                                            data-validation-required-message="Please enter your email address." />
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    <div class="form-group">
                                        <textarea class="form-control" rows="7" id="message" name="message" placeholder="Tulis Pesan*"
                                            required="required" data-validation-required-message="Please enter your message."></textarea>
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    <div class="text-center">
                                        <button class="btn btn-block btn-round btn-c cd btn-custom" id="cfsubmit"
                                            type="submit">
                                            Submit
                                        </button>
                                    </div>
                                </form>
                                {{-- <div class="ajax-response   " id="contactFormResponse"></div> --}}
                            </div>
                        </div>
                    </div>
                </section>
            </div>
    </div>
@endsection
