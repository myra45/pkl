@extends('admin.layout.app')

@section('heading', 'Kontak Developer Edit')

@section('button_section')



@endsection


@section('main_content')
    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('home_kontak_update', $row_data->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="card-body p-0">
                                        <div class="">
                                            <div class="d-flex justify-content-center mb-2">
                                                <div class="mb-4">
                                                    <div class="border border-4 border-white rounded overflow-hidden mb-4">
                                                        <img src="{{ asset('uploads/'. $row_data->photo_developer) }}"
                                                            alt="admin-img" class="w-100 h-100">
                                                    </div>
                                                    <div class="mb-4">
                                                        <input type="file" name="photo_developer" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="mb-4">
                                        <label class="form-label">Nama</label>
                                        <input type="text" class="form-control" name="nama_developer" placeholder="Admin" value="{{ $row_data->nama_developer }}">
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label">Kelas</label>
                                        <input type="text" class="form-control" name="kelas_developer" placeholder="XII RPL 1" value="{{ $row_data->kelas_developer }}">
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label">Link WhatsApp</label>
                                        <input type="text" class="form-control" name="wa_developer" placeholder="https://api.whatsapp.com/send/?phone=628.......&text&type=phone_number&app_absent=0" value="{{ $row_data->wa_developer }}">
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label">Link instagram</label>
                                        <input type="text" class="form-control" name="ig_developer" placeholder="https://www.instagram.com/nama_ig/?utm_source=ig_web_button_share_sheet" value="{{ $row_data->ig_developer }}">
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label">  Email</label>
                                        <input type="text" class="form-control" name="email_developer" placeholder="Admin@gmail.com" value="{{ $row_data->email_developer }}">
                                    </div>
                                    <button type="submit" class="btn btn-primary">Update</button>
                                    <a href="{{ route('home_kontak_show') }}" class="btn btn-danger"
                                    onClick="return confirm('Are you sure?');">Back</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
