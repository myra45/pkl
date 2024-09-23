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
            <div class="row">
                <div class="col-sm-8">
                    <div class="post">
                        <div class="post-video embed-responsive embed-responsive-16by9">
                            <img class="embed-responsive-item object-fit-cover"
                                src="{{ asset('uploads/' . $detail_berita->gambar) }}"></img>
                        </div>
                        <div class="post-header font-alt">
                            <h2 class="post-title">{{ $detail_berita->judul }}</h2>
                            <div class="post-meta">By&nbsp;<a href="#">{{ $detail_berita->penulis }}</a>|
                                {{ \Carbon\Carbon::parse($detail_berita->tanggal)->translatedFormat('d F') }} | {{ $jlm_komentar }}
                                Komentar | <a href="#">{{ $detail_berita->rCategory->name }}</a>
                            </div>
                        </div>
                        <p>{!! nl2br($detail_berita->deskripsi) !!}</p>
                    </div>
                    <div class="comment">
                        <h4>Komentar</h4>
                        <div class="list-group mb-4">
                            @forelse ($komentar as $item)
                                <div class="list-group-item">
                                    <h5>{{ $item->user->name }}</h5>
                                    <p>{!! nl2br(e($item->isi_komentar)) !!}</p>
                                    <small class="text-muted">{{ \Carbon\Carbon::parse($item->created_at)->translatedFormat('d F Y') }}</small>
                                </div>
                            @empty
                                <div class="list-group-item">
                                    <p>Belum ada Komentar</p>
                                </div>
                            @endforelse
                        </div>

                        @if (auth()->check() && auth()->user()->role == 'Member')
                            <h5>Tambah Komentar</h5>
                            <form action="{{ route('send_comentar') }}" method="POST">
                                @csrf
                                @if (session()->get('success'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session()->get('success') }}
                                    </div>
                                @endif
                                <input type="hidden" name="berita_id" value="{{ $detail_berita->id }}">
                                <div class="mb-3">
                                    <label for="isi_komentar" class="form-label">Komentar</label>
                                    <textarea name="isi_komentar" id="" cols="30" rows="5" class="form-control"></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary" style="margin-top: 10px">Kirim
                                    Komentar</button>
                            </form>
                        @else
                            <p>Anda harus login untuk berkomentar.</p>
                            <div class="btn btn-sm btn-primary"><a href="{{ route('login') }}" style="color: #fff">login</a>
                            </div>
                        @endif
                    </div>
                </div>
                <div class="col-sm-4 col-md-3 col-md-offset-1 sidebar">
                    <div class="widget">
                        <h5 class="widget-title font-alt">Kategori Blog</h5>
                        <ul class="icon-list" style="color: #000 !important">
                            @foreach ($berita_categories as $item)
                                <li>{{ $item->name }}</li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="widget">
                        <h5 class="widget-title font-alt">Postingan Terbaru</h5>
                        <ul class="widget-posts">
                            @foreach ($beritas as $item)
                                <li class="clearfix">
                                    <div class="widget-posts-image"><a href="{{ route('detail_berita', $item->id) }}"><img
                                                src="{{ asset('uploads/' . $item->gambar) }}" alt="Post Thumbnail" /></a>
                                    </div>
                                    <div class="widget-posts-body">
                                        <div class="widget-posts-title"><a
                                                href="{{ route('detail_berita', $item->id) }}">{{ $item->judul }}</a>
                                        </div>
                                        <div class="widget-posts-meta">
                                            {{ \Carbon\Carbon::parse($item->tanggal)->translatedFormat('d F Y') }}</div>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection

@section('footer')
    <Script>
        $(document).ready(function() {
            $('#btn-pesan-utama').click(function() {
                alert(0);
            });
        });
    </Script>
@endsection
