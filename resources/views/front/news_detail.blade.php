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
    <section class="module" style="margin-top: 200px">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <div class="post">
                        <div class="post-video embed-responsive embed-responsive-16by9">
                            <img class="embed-responsive-item object-fit-cover"
                                src="{{ asset('uploads/'.$beritas->gambar) }}"></img>
                        </div>
                        <div class="post-header font-alt">
                            <h2 class="post-title"><a href="#">{{ $beritas->judul }}</a></h2>
                            <div class="post-meta">By&nbsp;<a href="#">{{ $beritas->penulis }}</a>| 23 November | 3 Comments | <a
                                    href="#">{{ $beritas->rCategory->name }}</a>
                            </div>
                        </div>
                        <p>{!! nl2br($beritas->deskripsi) !!}</p>
                    </div>                       
                    <div class="comment">
                        {{-- Menampilkan komentar terkait berita ini --}}
                        <h4>Komentar</h4>
                        <div class="list-group mb-4">
                                <div class="list-group-item">
                                    <h5>Dio Tri Gana</h5> {{-- Misalnya jika ada field user_name --}}
                                    <p>Kapan Kegiatan ini dilakukan?</p> {{-- Field isi dari komentar --}}
                                    <small class="text-muted">9 Juli 2023</small>
                                </div>
                        </div>

                        {{-- Form untuk menambah komentar baru --}}
                        <h5>Tambah Komentar</h5>
                        <form action="" method="POST">
                            @csrf
                            @if (session()->get('success'))
                            <div class="alert alert-success" role="alert">
                                {{ session()->get('success') }}
                            </div>
                            @endif
                            {{-- <div class="mb-3">
                                <label for="isi" class="form-label">Komentar</label>
                                <textarea class="form-control @error('isi') is-invalid @enderror" id="isi" name="isi" rows="3" required>{{ old('isi') }}</textarea>
                                @error('isi')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div> --}}
                            <input type="hidden" name="berita_id" value="">
                            <input type="hidden" name="user_id" value="">
                            <div class="mb-3">
                                <label for="isi_komentar" class="form-label">Komentar</label>
                                <textarea name="isi_komentar" id="" cols="30" rows="5" class="form-control"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary" style="margin-top: 10px">Kirim Komentar</button>
                        </form>
                    </div>
                </div>
                <div class="col-sm-4 col-md-3 col-md-offset-1 sidebar">
                    <div class="widget">
                        <form role="form">
                            <div class="search-box">
                                <input class="form-control" type="text" placeholder="Mencari..." />
                                <button class="search-btn" type="submit"><i class="fa fa-search"></i></button>
                            </div>
                        </form>
                    </div>
                    <div class="widget">
                        <h5 class="widget-title font-alt">Kategori Blog</h5>
                        <ul class="icon-list" style="color: #000 !important">
                            @foreach ($berita_categories as $item)
                            <li>{{ $item->rCategory->name }}</li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="widget">
                        <h5 class="widget-title font-alt">Postingan Populer</h5>
                        <ul class="widget-posts">
                            <li class="clearfix">
                                <div class="widget-posts-image"><a href="#"><img
                                            src="{{ asset('dist_front/assets/images/Berita-1.jpg') }}"
                                            alt="Post Thumbnail" /></a></div>
                                <div class="widget-posts-body">
                                    <div class="widget-posts-title"><a href="#">Mengikuti Perlombaan</a></div>
                                    <div class="widget-posts-meta">30 Juni 2024</div>
                                </div>
                            </li>
                            <li class="clearfix">
                                <div class="widget-posts-image"><a href="#"><img
                                            src="{{ asset('dist_front/assets/images/Berita-2.jpg') }}"
                                            alt="Post Thumbnail" /></a></div>
                                <div class="widget-posts-body">
                                    <div class="widget-posts-title"><a href="#">Sholat Duha Bersama</a></div>
                                    <div class="widget-posts-meta">15 February</div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="widget">
                        <h5 class="widget-title font-alt">Text</h5>Website ini di buat agar manajemen organisasi yang ada di
                        sekolah dapat berubah dengan Era Digital yang sudah berubah di beberapa tahun kebelakang.
                    </div>
                    <div class="widget">
                        <h5 class="widget-title font-alt">Komentar Terakhir</h5>
                        <ul class="icon-list">
                            <li>Muhammad Rifan Herdiansyah <a href="#">Paskibra SMK Budi Bakti Ciwidey KEREN</a></li>
                            <li>Azlia Nur Afifah <a href="#">Ayo join WJLRC sekarang!</a></li>
                            <li>Muhammad Abyan Ma'ruf <a href="#">Eskul kita Masyaallah</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('footer')
    <Script>
        $(document).ready(function(){
            $('#btn-pesan-utama').click(function(){
                alert(0);
            });
        });
    </Script>
@endsection

