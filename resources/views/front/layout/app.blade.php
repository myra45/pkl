<!DOCTYPE html>
<html lang="en-US" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--  
    Document Title
    =============================================
    -->
    <title>Manajemen Ekstrakulikuler</title>
    <!--  
    Favicons
    =============================================
    -->
    <link
      rel="apple-touch-icon"
      sizes="57x57"
      href="{{asset('dist_front/assets/images/favicons/logo.png')}}"
    />
    <meta name="theme-color" content="#ffffff" />
    @include('front.layout.styles')
  </head>
  <body data-spy="scroll" data-target=".onpage-navigation" data-offset="60">
    <main>
      <div class="page-loader">
        <div class="loader">Loading...</div>
      </div>
      @include('front.layout.nav')

      @yield('main_content')

      <div class="scroll-up">
        <a href="#totop"><i class="fa fa-angle-double-up"></i></a>
      </div>
    </main>

    @include('front.layout.scripts')
    @include('front.layout.footer')

    @if (session()->get('error'))
    <script>
        iziToast.error({
            title: '',
            position: 'topRight',
            message: '{{ session()->get('error') }}',
        });
    </script>
@endif

@if (session()->get('success'))
<script>
    iziToast.success({
        title: '',
        position: 'topRight',
        message: '{{ session()->get('success') }}',
    });
</script>
@endif
  </body>
</html>
