<nav class="navbar navbar-custom navbar-fixed-top navbar-transparent" role="navigation">
<div class="container-fluid">
  <div class="navbar-header align-items-center"> 
    <button
      class="navbar-toggle"
      type="button"
      data-toggle="collapse"
      data-target="#custom-collapse">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span><span class="icon-bar"></span>
      <span class="icon-bar"></span></button><a class="navbar-brand d-flex" href="#" style="padding-bottom: 5.5rem;">
      <img class="logo" src="{{ asset('dist_front/assets/images/favicons/navbar2.png') }}" alt=""/>
      <img class="second-logo" src="{{ asset('dist_front/assets/images/favicons/navbar1.png') }}" alt=""/>
    </a>
  </div>
  <div class="collapse navbar-collapse " id="custom-collapse" style="padding-top: 1.5rem;">
    <ul class="nav navbar-nav navbar-right">
      <li class="">
        <a class="a-color" href="{{ route('home') }}">Beranda</a
        >
      </li>
      <li class="">
        <a class="a-color" href="#tentang"
          >Tentang</a
        >
      </li>
      <li class="">
        <a class="a-color" href="{{ route('berita') }}"
          >Berita</a
        >
      </li>
      <li class=""><a class="a-color" href="#kontak" data-toggle="">Kontak</a></li>
      <li class=""><a class="a-color" href="{{ route('login') }}" data-toggle="">Masuk</a></li>
      <li class="">
        <a class="a-color" href="{{ route('sign_up') }}"
      >Daftar</a>
      </li>
    </ul>
  </div>
</div>
</nav>