@extends('admin.layout.app')

@section('heading', 'Tambah Admin Eskul')

@section('main_content')
    <div class="card">
        <div class="card-body">
            <form method="POST" action="{{ route('add_admin_submit') }}">
              @csrf
                <div class="row">
                    <div class="col-md-9">
                        <input type="hidden" name="extracurricular_id" value="{{ $role }}">
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

                        <button type="submit" class="btn btn-primary">Tambah Admin</button>
                    </div>
            </form>
        </div>
    </div>

@endsection
