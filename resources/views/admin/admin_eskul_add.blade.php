@extends('admin.layout.app')

@section('heading', 'Tambah Admin Eskul')

@section('button_section')
 <a href="{{ route('admin_show') }}" class="btn btn-primary">Back</a>
@endsection

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
                              class="form-control" id="name" name="name" value="{{ old('name') }}" autofocus>
                      </div>
                      <div class="mb-3">
                          <label for="email" class="form-label">Alamat Email</label>
                          <input type="email"
                              class="form-control" id="email" name="email" value="{{ old('email') }}" autofocus>
                      </div>
                      <div class="mb-3 ">
                        <label for="password" class="form-label">Password</label>
                        <input type="password"
                            class="form-control"
                            id="password" name="password" value="{{ old('password') }}"
                            >
                    </div>
                    <div class="mb-3 ">
                        <label for="retype_password" class="form-label">Retype Password</label>
                        <input type="password"
                            class="form-control"
                            id="retype_password" name="retype_password">
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
