<nav class="navbar navbar-custom navbar-fixed-top navbar-transparent" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header align-items-center">
            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#custom-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span><span class="icon-bar"></span>
                <span class="icon-bar"></span></button><a class="navbar-brand d-flex" href="#"
                style="padding-bottom: 5.5rem;">
                <img class="logo" src="{{asset('dist_front//assets/images/navbar.png')}}" alt="" />
                <img class="second-logo" src="{{ asset('dist_front/assets/images/favicons/navbar1.png') }}"
                    alt="" />
            </a>
        </div>
        <div class="collapse navbar-collapse " id="custom-collapse" style="padding-top: 1.5rem;">
            <ul class="nav navbar-nav navbar-right">
                <li class="{{ Request::is('/') ? 'active' : ' ' }}">
                    <a class="a-color" href="{{ route('home') }}">Beranda</a>
                </li>
                <li class="">
                    <a class="a-color" href="{{ route('home') . '#tentang' }}">Tentang</a>
                </li>
                <li class="{{ Request::is('/berita') ? 'active' : ' ' }}">
                    <a class="a-color" href="{{ route('berita') }}">Berita</a>
                </li>
                <li class=""><a class="a-color" href="{{ route('home') . '#kontak' }}">Kontak</a></li>
                @if (auth()->check() && auth()->user()->role == 'Member')
                <li class=""><a class="a-color" href="{{ route('user_dashboard') }}">Dashboard</a></li>
                <li class=""><a class="a-color" href="{{ route('logout') }}">Logout</a></li>
                @else
                    <li class=""><a class="a-color" href="{{ route('login') }}">Masuk</a></li>
                    <li class=""><a class="a-color" href="{{ route('sign_up') }}">Daftar</a>
                @endif
                </li>
            </ul>
        </div>
    </div>
</nav>
