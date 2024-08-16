@extends('front.layout.app')
@section('main_content')
  <section class="module bg-dark-60 blog-page-header" data-background="{{ asset('dist_front/assets/images/agency/Background.jpg') }}">
    <div class="container">
      <div class="row">
        <div class="col-sm-6 col-sm-offset-3">
          <h2 class="module-title font-alt">BERITA</h2>
          <div class="module-subtitle font-serif">SMK Budi Bakti Ciwidey.</div>
        </div>
      </div>
    </div>
  </section>
  <section class="module">
    <div class="container">
      <div class="row multi-columns-row post-columns">
        <div class="col-sm-6 col-md-4 col-lg-4">
          <div class="post">
            <div class="post-thumbnail"><a href="#"><img src="{{ asset('dist_front/assets/images/Berita-2.jpg') }}" alt="Blog-post Thumbnail"/></a></div>
            <div class="post-header font-alt">
              <h2 class="post-title"><a href="#">Our trip to the Alps</a></h2>
              <div class="post-meta">By&nbsp;<a href="#">Mark Stone</a>&nbsp;| 23 November | 3 Comments
              </div>
            </div>
            <div class="post-entry">
              <p> SMK Budi Bakti Ciwidey.</p>
            </div>
            <div class="post-more"><a class="more-link" href="#">Read more</a></div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-4">
          <div class="post">
            <div class="post-thumbnail"><a href="#"><img src="{{ asset('dist_front/assets/images/Berita-1.jpg') }}" alt="Blog-post Thumbnail"/></a></div>
            <div class="post-header font-alt">
              <h2 class="post-title"><a href="#">Shore after the tide</a></h2>
              <div class="post-meta">By&nbsp;<a href="#">Andy River</a>&nbsp;| 11 November | 4 Comments
              </div>
            </div>
            <div class="post-entry">
              <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
            </div>
            <div class="post-more"><a class="more-link" href="#">Read more</a></div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-4">
          <div class="post">
            <div class="post-thumbnail"><a href="#"><img src="{{ asset('dist_front/assets/images/Berita-2.jpg') }}" alt="Blog-post Thumbnail"/></a></div>
            <div class="post-header font-alt">
              <h2 class="post-title"><a href="#">We in New Zealand</a></h2>
              <div class="post-meta">By&nbsp;<a href="#">Dylan Woods</a>&nbsp;| 5 November | 15 Comments
              </div>
            </div>
            <div class="post-entry">
              <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
            </div>
            <div class="post-more"><a class="more-link" href="#">Read more</a></div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-4">
          <div class="post">
            <div class="post-thumbnail"><a href="#"><img src="{{ asset('dist_front/assets/images/Berita-1.jpg') }}" alt="Blog-post Thumbnail"/></a></div>
            <div class="post-header font-alt">
              <h2 class="post-title"><a href="#">Shore after the tide</a></h2>
              <div class="post-meta">By&nbsp;<a href="#">Andy River</a>&nbsp;| 11 November | 4 Comments
              </div>
            </div>
            <div class="post-entry">
              <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
            </div>
            <div class="post-more"><a class="more-link" href="#">Read more</a></div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-4">
          <div class="post">
            <div class="post-thumbnail"><a href="#"><img src="{{ asset('dist_front/assets/images/Berita-2.jpg') }}" alt="Blog-post Thumbnail"/></a></div>
            <div class="post-header font-alt">
              <h2 class="post-title"><a href="#">We in New Zealand</a></h2>
              <div class="post-meta">By&nbsp;<a href="#">Dylan Woods</a>&nbsp;| 5 November | 15 Comments
              </div>
            </div>
            <div class="post-entry">
              <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
            </div>
            <div class="post-more"><a class="more-link" href="#">Read more</a></div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-4">
          <div class="post">
            <div class="post-thumbnail"><a href="#"><img src="{{ asset('dist_front/assets/images/Berita-3.jpg') }}" alt="Blog-post Thumbnail"/></a></div>
            <div class="post-header font-alt">
              <h2 class="post-title"><a href="#">Plane in the field</a></h2>
              <div class="post-meta">By&nbsp;<a href="#">Mark Stone</a>&nbsp;| 23 November | 3 Comments
              </div>
            </div>
            <div class="post-entry">
              <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
            </div>
            <div class="post-more"><a class="more-link" href="#">Read more</a></div>
          </div>
        </div>
      </div>
      <div class="pagination font-alt"><a href="#"><i class="fa fa-angle-left"></i></a><a class="active" href="#">1</a><a href="#">2</a><a href="#">3</a><a href="#">4</a><a href="#"><i class="fa fa-angle-right"></i></a></div>
    </div>
  </section>
@endsection