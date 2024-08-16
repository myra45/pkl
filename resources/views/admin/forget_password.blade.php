<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Forget Password</title>
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
                                <div class="mb-5">
                                    <h2 class="fw-bolder fs-7 mb-3">Forgot your password?</h2>
                                    <p class="mb-0 ">
                                        Please enter the email address associated with your account and We will
                                        email you a link to reset
                                        your password.
                                    </p>
                                </div>
                                <form method="POST" action="{{ route('admin_forget_password_submit') }}">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email address</label>
                                        <input type="text" class="form-control @error('email')
                                            is-invalid
                                        @enderror" name="email" id="email" value="{{ old('email') }}" autofocus>
                                        @error('email')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                        @if (session()->get('error'))
                                                <div class="text-danger">
                                                    {{ session()->get('error') }}
                                                </div>
                                            @endif
                                    </div>
                                    <button type="submit" class="btn btn-primary w-100 py-8 mb-3">Send Password Reset Link</button>
                                    <a href="{{ route('admin_login') }}">Back to
                                        Login</a>
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
