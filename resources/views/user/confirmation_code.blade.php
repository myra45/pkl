<html lang="en" dir="ltr" data-bs-theme="light" data-color-theme="Blue_Theme" data-layout="vertical"
    data-boxed-layout="boxed" data-card="shadow">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @include('admin.layout.favicon')

    @include('admin.layout.styles')

    <title>Confirmation Code</title>
</head>

<body>
    <div id="main-wrapper" class="auth-customizer-none">
        <div
            class="position-relative overflow-hidden radial-gradient min-vh-100 w-100 d-flex align-items-center justify-content-center">
            <div class="d-flex align-items-center justify-content-center w-100">
                <div class="row justify-content-center w-100">
                    <div class="col-sm-10 col-md-8 col-lg-8 col-xl-5 col-xxl-4 auth-card">
                        <div class="card mb-0">
                            <div class="card-body pt-5">
                                <a href="../main/index.html"
                                    class="text-nowrap logo-img text-center d-block mb-4 w-100">
                                    <img src="{{ asset('dist/images/logos/dark-logo.svg') }}" class="dark-logo"
                                        alt="Logo-Dark">
                                </a>
                                <div class="mb-5 text-center">
                                    <p>We sent a verification code to your Email. Enter the code from the Email in the
                                        field below.</p>
                                    <h6 class="fw-bolder">******1234</h6>
                                </div>
                                <form>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label fw-semibold">Type your 6
                                            digits security
                                            code</label>
                                        <div class="d-flex align-items-center gap-2 gap-sm-3">
                                            <input type="text" class="form-control" placeholder="">
                                            <input type="text" class="form-control" placeholder="">
                                            <input type="text" class="form-control" placeholder="">
                                            <input type="text" class="form-control" placeholder="">
                                            <input type="text" class="form-control" placeholder="">
                                            <input type="text" class="form-control" placeholder="">
                                        </div>
                                    </div>
                                    <a href="javascript:void(0)" class="btn btn-primary w-100 py-8 mb-4">Verify My
                                        Account</a>
                                    <div class="d-flex align-items-center">
                                        <p class="fs-4 mb-0 text-dark">Didn't get the code?</p>
                                        <a class="text-primary fw-medium ms-2" href="javascript:void(0)">Resend</a>
                                    </div>
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
