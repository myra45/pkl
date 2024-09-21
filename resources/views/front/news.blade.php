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
                    @foreach ($beritas as $item)
                    <div class="col-sm-6 col-md-4 col-lg-4">
                        <div class="post">
                            <div class="" style="overflow: hidden;">
                                <div class="post-thumbnail gambar-badag">
                                    <a>
                                        <img class=""
                                            src="{{ asset('uploads/'.$item->gambar) }}"
                                            alt="Blog-post Thumbnail" />
                                    </a>
                                </div>
                            </div>
                            <div class="post-header   ">
                                <h2 class="post-title"><a href="#">{{ $item->judul }}</a></h2>
                                <div class="post-meta">By&nbsp;<a href="#">{{ $item->penulis }}</a>&nbsp;| {{ \Carbon\Carbon::parse($item->created_at)->translatedFormat('d F') }} |
                                    {{ $item->komentar->count() }} Komentar
                                </div>
                            </div>
                            <div class="post-entry">
                                <p>{{ \Illuminate\Support\Str::limit(strip_tags($item->deskripsi), 100, '...') }}</p>
                            </div>
                            <div class="post-more"><a class="more-link" href="{{ route('detail_berita', $item->id) }}">Baca Selengkapnya</a>
                            </div>
                        </div>
                    </div>                              
                    @endforeach
                </div>
                {{-- Pembungkus Pagination --}}
                <div class="paginate-wrapper mt-4">
                    {{ $beritas->links('pagination::bootstrap-4') }}
                </div>
        </section>

    </div>
@endsection
