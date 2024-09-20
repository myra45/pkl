<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Login</title>
    @include('admin.layout.favicon')
    @include('admin.layout.styles')
</head>

<body>
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
        <div
            class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
            <div class="d-flex align-items-center justify-content-center w-100">
                <div class="row justify-content-center w-100">
                    <div class="col-sm-8 col-md-8 col-lg-6 col-xxl-3">
                        <div class="card mb-0">
                            <div class="card-body">
                                <a href="" class="text-nowrap logo-img text-center d-block py-3 w-100">
                                    <img src="{{ asset('dist/images/logos/44.png') }}" width="300" style="margin-bottom:0px; margin-right:650px; margin-left:-25px; margin-top:-30px" alt="" /> 
                                </a>
                                @if (session()->get('success'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session()->get('success') }}
                                    </div>
                                @endif
                                <form method="POST" action="{{ route('admin_login_submit') }}">
                                    @csrf
                                    <div class="mb-4">
                                        <label for="email" class="form-label">Email Address</label>
                                        <input type="text"
                                            class="form-control @error('email')
                                            is-invalid
                                        @enderror"
                                            name="email" id="email" value="{{ old('email') }}" autofocus>
                                        @error('email')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                        @if (session()->get('error'))
                                            <div class="text-danger">
                                                {{ session()->get('error') }}
                                            </div>
                                        @endif
                                    </div>
                                    <div class="mb-3 form-group">
                                        <label for="password" class="form-label">Password</label>
                                        <input type="password"
                                            class="form-control @error('password')
                                            is-invalid
                                        @enderror"
                                            name="password" id="password">
                                        @error('password')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="d-flex mb-3 justify-content-end">
                                        <a class="text-primary fw-bold"
                                            href="{{ route('admin_forget_password') }}">Forget Password ?</a>
                                    </div>
                                    <button type="submit" class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2"
                                        style="border-radius: 0px">Log In</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('admin.layout.scripts')
</body>

</html>
