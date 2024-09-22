
        <div class="module-small bg-dark" style="background-color: #5271ff; color: #fff">
          <div class="container"> 
            <div class="row">
              <div class="col-sm-3">
                <div class="widget">
                  <h5 class="widget-title font-alt">{{$page_data->footer_judul_1}}</h5>
                  <p>{{ $page_data->footer_desc }}</p>
                  <p>Phone: {{$page_data->footer_kontak_telepon}}</p>
                  <p>Email:<a href="mailto:{{$page_data->footer_kontak_email}}">{{$page_data->footer_kontak_email}}</a></p>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="widget">
                  <h5 class="widget-title font-alt">{{$page_data->footer_judul_2}}</h5>
                  <ul class="icon-list" style="color: #ffffff">
                    @foreach ($all_komentar as $item)
                    <li>{{ $item->user->name }} <a href="{{ route('detail_berita', $item->berita->id) }}">{{ $item->isi_komentar }}</a></li>
                    @endforeach
                  </ul>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="widget">
                  <h5 class="widget-title font-alt">{{$page_data->footer_judul_3}}</h5>
                  <ul class="icon-list">
                    @foreach ($berita_categories as $item)
                    <li><a href="{{ route('filterCategory', $item->id) }}">{{ $item->name }}</a></li>
                    @endforeach
                  </ul>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="widget">
                  <h5 class="widget-title font-alt">{{$page_data->footer_judul_4}}</h5>
                  <ul class="widget-posts">
                    @foreach ($last_post as $item)
                            <li class="clearfix">
                                <div class="widget-posts-image"><a href="{{ route('detail_berita', $item->id) }}"><img
                                            src="{{ asset('uploads/'.$item->gambar) }}"
                                            alt="Post Thumbnail" /></a></div>
                                <div class="widget-posts-body">
                                    <div class="widget-posts-title"><a href="{{ route('detail_berita', $item->id) }}">{{ $item->judul }}</a></div>
                                    <div class="widget-posts-meta">{{ \Carbon\Carbon::parse($item->tanggal)->translatedFormat('d F') }}</div>
                                </div>
                            </li>
                            @endforeach
                  </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<hr class="divider-d">
<footer class="footer bg-dark" style="background-color: #5271ff; color: #fff">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
            </div>
            <div class="col-sm-6" style="margin-right: 15v 0px"> &copy copyright 2024
              <a href="{{route('kontak_developer')}}">Kontak Developer</a>
            </div>
        </div>
    </div>
</footer>
