@extends('admin.layout.app')

@section('heading', 'Tambah Kontak Developer')

@section('button_section')
 <a href="{{ route('home_kontak_show') }}" class="btn btn-primary">Back</a>
@endsection

@section('main_content')
    <div class="card">
        <div class="card-body">
            <form method="POST" action="{{ route('home_kontak_add_submit') }}" enctype="multipart/form-data">
              @csrf
                <div class="row">
                    <div class="col-md-9">
                        <div class="mb-3">
                            <label for="gambar" class="form-label">Photo</label>
                            <input type="file" name="photo_developer" id="gambar" class="form-control">
                        </div>
                        <div class="mb-3">
                          <label for="name" class="form-label">Nama Developer</label>
                          <input type="text"
                              class="form-control" id="name" name=" nama_developer" placeholder="Admin" value="{{ old('name') }}" autofocus>
                      </div>
                      <div class="mb-3">
                          <label for="kelas" class="form-label">Kelas Developer</label>
                          <input type="text"
                              class="form-control" id="kelas" name="kelas_developer" placeholder="XII RPL 1" value="{{ old('kelas') }}" autofocus>
                      </div>
                      <div class="mb-3">
                        <label for="whatsapp" class="form-label">Link WhatsApp</label>
                        <input type="text"
                            class="form-control" id="whatsapp" name="wa_developer" placeholder="https://api.whatsapp.com/send/?phone=628.......&text&type=phone_number&app_absent=0" value="{{ old('whatsapp') }}" autofocus>
                    </div>
                    <div class="mb-3">
                        <label for="instagram" class="form-label">Link Instagram</label>
                        <input type="text"
                            class="form-control" id="instagram" name="ig_developer" placeholder="https://www.instagram.com/nama_ig/?utm_source=ig_web_button_share_sheet" value="{{ old('instagram') }}" autofocus>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email"
                            class="form-control" id="email" name="email_developer" placeholder="Admin@gmail.com" value="{{ old('email') }}" autofocus>
                    </div>


                        <button type="submit" class="btn btn-primary">Tambah Kontak Developer</button>
                    </div>
            </form>
        </div>
    </div>

@endsection
