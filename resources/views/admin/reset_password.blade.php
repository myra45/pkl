<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Reset Password</title>
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
                                <div class="mb-3">
                                    <h2 class="fw-bolder fs-7 mb-3">Reset Password</h2>
                                </div>
                                <form method="POST" action="{{ route('admin_reset_password_submit')}}">
                                    @csrf

                                    <input type="hidden" name="token" value="{{ $token }}">
                                    <input type="hidden" name="email" value="{{ $email }}">

                                    <div class="mb-3">
                                        <label for="password" class="form-label">New Password</label>
                                        <input type="password" class="form-control @error('password')
                                            is-invalid
                                        @enderror" name="password" id="password" autofocus>
                                        @error('password')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                        @if (session()->get('error'))
                                                <div class="text-danger">
                                                    {{ session()->get('error') }}
                                                </div>
                                            @endif
                                    </div>
                                    <div class="mb-3">
                                        <label for="retype_password" class="form-label">Retype Password</label>
                                        <input type="password" class="form-control @error('retype_password')
                                            is-invalid
                                        @enderror" name="retype_password" id="retype_password" value="{{ old('email') }}" autofocus>
                                        @error('retype_password')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <button type="submit" class="btn btn-primary w-100 py-8 mb-3">Update</button>
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
