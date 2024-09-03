@extends('admin.layout.app')

@section('heading', 'Tambah Eskul')

@section('button_section')
 <a href="{{ route('eskul_show') }}" class="btn btn-primary">Back</a>
@endsection

@section('main_content')
    <div class="card">
        <div class="card-body">
            <form method="POST" action="{{ route('eskul_add_submit') }}">
              @csrf
                <div class="row">
                    <div class="col-md-9">
                        <div class="mb-3">
                          <label for="name" class="form-label">Nama Eskul</label>
                          <input type="text"
                              class="form-control"
                              id="name" name="nama_eskul" value="{{ old('name') }}" autofocus>
                      </div>
                        <button type="submit" class="btn btn-primary">Tambah Eskul</button>
                    </div>
            </form>
        </div>
    </div>

@endsection
