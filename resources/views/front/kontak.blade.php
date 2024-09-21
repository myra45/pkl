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
            <span class="rotate">Kontak Developer</span>
        </div>
    </div>
</div>
</section>
<div class="main">
    <hr class="divider-w" />
    <section class="module">
      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-sm-offset-3">
            <h2 class="module-title font-alt">Kontak Developer</h2>
          </div>
        </div>
        <ul
          class="works-grid works-grid-gut works-grid-4 works-hover-w"
          id="works-grid"
        >
        @foreach ($kontak_data as $item)
        <li class="work-item illustration webdesign">
          <div class="work-image">
            <img
              src="{{asset('uploads/'.$item->photo_developer)}}"
              alt="Portfolio Item" style="width: 300px; height: 400px; object-fit: cover"
            />
          </div>
          <div class="work-caption font-alt">
            <h3 class="work-title">{{$item->nama_developer}}</h3>
            <div class="work-descr">{{$item->kelas_developer}}</div>
            <div class="work-descr" style="display: flex !important; justify-content: center; margin-top: 10px">
                <div class="work-descr"><a href="{{ $item->wa_developer}}">
                    <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-brand-whatsapp"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 21l1.65 -3.8a9 9 0 1 1 3.4 2.9l-5.05 .9" /><path d="M9 10a.5 .5 0 0 0 1 0v-1a.5 .5 0 0 0 -1 0v1a5 5 0 0 0 5 5h1a.5 .5 0 0 0 0 -1h-1a.5 .5 0 0 0 0 1" /></svg>
                    </a>
                </div>
                <div class="work-descr"><a href="{{$item->ig_developer}}">
                    <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-brand-instagram"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 4m0 4a4 4 0 0 1 4 -4h8a4 4 0 0 1 4 4v8a4 4 0 0 1 -4 4h-8a4 4 0 0 1 -4 -4z" /><path d="M12 12m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" /><path d="M16.5 7.5l0 .01" /></svg>                        </a>
                </div>
                <div class="work-descr"><a href="mailto:{{$item->email_developer}}">
                    <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-mail"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 7a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10z" /><path d="M3 7l9 6l9 -6" /></svg>                        </a>
                </div>
            </div>
          </div>
      </li>
        @endforeach
        </ul>
      </div>
    </section>
  </div>
@endsection