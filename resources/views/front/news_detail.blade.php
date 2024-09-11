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
                                src="{{ asset('dist_front/assets/images/berita/berita1.jpg') }}"></img>
                        </div>
                        <div class="post-header font-alt">
                            <h2 class="post-title"><a href="#">Kegiatan Perkemahan</a></h2>
                            <div class="post-meta">By&nbsp;<a href="#">Mark Stone</a>| 23 November | 3 Comments | <a
                                    href="#">Marketing, </a><a href="#">Web Design</a>
                            </div>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. A ad quos, iure eaque tenetur ullam
                            iste, tempore laudantium harum laborum voluptatem. Aliquid id cumque adipisci quas deserunt ad
                            enim inventore iusto distinctio aliquam velit officia quaerat omnis, nihil beatae eius, numquam
                            perferendis rerum. Nesciunt laudantium, facere delectus sapiente vitae amet a eligendi at
                            aperiam autem aut. </p>
                            
                           <p> Dolorum deleniti est consectetur rem sunt, tempore modi minima voluptatem
                            fugiat quia? Eaque ducimus atque exercitationem similique consequuntur. Cumque libero eaque
                            incidunt fuga quam nulla fugit quod recusandae fugiat, quidem labore possimus, dignissimos alias
                            quia impedit magni deleniti veritatis. Rerum voluptatum incidunt impedit ipsa!</p>
                    </div>
                    {{-- <div class="komentar">
                        <div class="btn-group">   
                            <button class="btn btn.default"><i class="lnr lnr-thumbs-up"></i> Suka</button>
                            <button class="btn btn.default"><i class="lnr lnr-bubble"></i> Komentar</button>
                        </div>
                        <div class="col-md-12">
                            <textarea name="Komentar" class="from-control" id="Komentar-Utama" cols="40" rows="10" placeholder="komentar"></textarea>
                        </div>
                    </div> --}}
                    {{-- <form action="" method="post">
                        <label for="nama">Nama:</label>
                        <input type="text" id="nama" name="nama" required>
                    
                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" required>
                    
                        <label for="komentar">Komentar:</label>
                        <textarea id="komentar" name="komentar" rows="4" required></textarea>
                    
                        <button type="submit">Kirim</button>
                    </form> --}}
                    <div class="comment" style="margin-top: -50px, display:none">
                        <h5 class="widget widget-title font-alt mb-3">Komentar : </h5>
                        <div class="form-group col-md-6" style="padding-right: 0;padding-left: 0;">
                          <input type="text" Name="" id="" class="form-control" placeholder="Nama">
                        </div>
                        <div class="form-group col-md-6" style="padding-right: 0;">
                          <input type="text" Name="" id="" class="form-control" placeholder="Emaiil">
                        </div>
                        <div class="form-group">
                          <textarea class="form-control" name="" id="" cols="30" rows="10" placeholder="Pesan : "></textarea>
                        </div>
                        <button class="btn btn-primary btn-block">Kirim</button>
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
                            <li><a href="#">Paskibra</a></li>
                            <li><a href="#">PMR</a></li>
                            <li><a href="#">Pramuka</a></li>
                            <li><a href="#">WJLRC</a></li>
                            <li><a href="#">Kepal</a></li>
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
                                    <div class="widget-posts-meta">23 january</div>
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
                        <h5 class="widget-title font-alt">Tag</h5>
                        <div class="tags font-serif"><a href="#" rel="tag">OSIS</a><a href="#"
                                rel="tag">MPK</a><a href="#" rel="tag">WJLRC</a><a href="#"
                                rel="tag">PASKIBRA</a><a href="#" rel="tag">PMR</a><a href="#"
                                rel="tag">PRAMUKA</a><a href="#" rel="tag">KEPAL</a><a href="#"
                                rel="tag">SENI</a><a href="#" rel="tag">VOLLY</a><a href="#"
                                rel="tag">FUTSAL</a><a href="#" rel="tag">BULU TANGKIS</a><a href="#"
                                rel="tag">BASKET</a><a href="#" rel="tag">IT</a></a><a href="#"
                                rel="tag">KARATE</a><a href="#" rel="tag">SILAT</a>
                        </div>
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

