@extends('admin.layout.app')

@section('heading', 'Add Testimonial')

@section('button_section')
 <a href="{{ route('home_testimonial_show') }}" class="btn btn-primary">Back</a>
@endsection

@section('main_content')
    <div class="card">
        <div class="card-body">
            <form method="POST" action="{{ route('home_testimonial_submit') }}">
              @csrf
                <div class="row">
                    <div class="col-md-9">
                        <div class="mb-3">
                          <label for="name" class="form-label">Nama</label>
                          <input type="text"
                              class="form-control" id="name" name=" nama" placeholder="Nama" value="{{ old('name') }}" autofocus>
                      </div>
                      <div class="mb-3">
                          <label for="eskul" class="form-label">Ekstrakulikuler</label>
                          <input type="text"
                              class="form-control" id="kelas" name="eskul" placeholder="OSIS" value="{{ old('kelas') }}" autofocus>
                      </div>
                      <div class="mb-3">
                        <label for="whatsapp" class="form-label">Deskripsi</label>
                        <textarea name="desc" class="form-control" id="" cols="30" rows="10"></textarea>
                    </div>


                        <button type="submit" class="btn btn-primary">Add</button>
                    </div>
            </form>
        </div>
    </div>

@endsection
