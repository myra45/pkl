<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Panel</title>
    @include('admin.layout.favicon')

    @include('admin.layout.styles')
</head>

<body>

    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">

        @include('admin.layout.sidebar')

        <!--  Main wrapper -->
        <div class="body-wrapper">

            @include('admin.layout.header')

            <div class="container-fluid">

                <div class="col-12">
                    <div class="d-flex align-items-center border-bottom title-part-padding px-0 mb-3 justify-content-between">
                        <h4 class="mb-0 fs-5">@yield('heading')</h4>
                        <div>
                         @yield('button_section')
                        </div>
                    </div>

                    @yield('main_content')


                </div>

            </div>

        </div>
    </div>
    @include('admin.layout.scripts')

    @if ($errors->any())
    @foreach ($errors->all() as $error)
        <script>
            iziToast.error({
                title: '',
                position: 'topRight',
                message: '{{ $error }}',
            });
        </script>
    @endforeach
@endif

{{--     
@if ($success->any())
    @foreach ($success->all() as $success)
        <script>
            iziToast.success({
                title: '',
                position: 'topRight',
                message: '{{ $success }}',
            });
        </script>
    @endforeach
@endif --}}

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
