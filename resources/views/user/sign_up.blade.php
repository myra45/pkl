<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sign Up</title>
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
                    <div class="col-sm-8 col-md-8 col-lg-8 col-xxl-3">
                        <div class="card mb-0">
                            <div class="card-body">
                                <a href="" class="text-nowrap logo-img text-center d-block py-3 w-100">
                                    <img src="{{ asset('dist/images/logos/44.png') }}" width="300" style="margin-bottom:0px; margin-right:650px; margin-left:-25px; margin-top:-30px" alt="" />
                                </a>
                                <form method="POST" action="{{ route('sign_up_submit') }}">
                                    @csrf
                                    <div class="row">
                                        <div class="col-6">
                                            <input type="hidden" name="role" value="Member">
                                            <div class="mb-3">
                                                <label for="name" class="form-label">Nama</label>
                                                <input type="text"
                                                    class="form-control  @error('name') is-invalid @enderror"
                                                    id="name" name="name" value="{{ old('name') }}" autofocus>
                                                @error('name')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label for="email" class="form-label">Alamat Email</label>
                                                <input type="email"
                                                    class="form-control @error('email') is-invalid @enderror"
                                                    id="email" name="email" value="{{ old('email') }}" autofocus>
                                                @error('email')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-6">
                                            <div class="mb-3 ">
                                                <label for="password" class="form-label">Password</label>
                                                <input type="password"
                                                    class="form-control @error('password') is-invalid @enderror"
                                                    id="password" name="password" value="{{ old('password') }}"
                                                    autofocus>
                                                @error('password')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="mb-3 ">
                                                <label for="retype_password" class="form-label">Retype Password</label>
                                                <input type="password"
                                                    class="form-control @error('retype_password') is-invalid @enderror"
                                                    id="retype_password" name="retype_password">
                                                @error('retype_password')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="mb-4">
                                            <label for="eskul" class="form-label">Ekstrakulikuler</label>
                                            <select name="eskul_id" class="form-control select2">
                                                <option value="">-- Pilih Ekstrakulikuler --</option>
                                                @foreach ($eskul_data as $rEskul)
                                                    <option value="{{ $rEskul->id }}">
                                                        {{ $rEskul->nama_eskul }}</option>  
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                          <button type="submit" class="btn btn-primary w-100 py-8 fs-3 mb-4 rounded-2">Sign
                                            Up</button>
                                          <div class="d-flex align-items-center justify-content-center">
                                          <p class="fs-4 mb-0 fw-bold">Already Have an Account?</p>
                                          <a class="text-primary fw-bold ms-2"
                                              href="{{ route('login') }}">Login</a>
                                      </div>
                                        </div>
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
