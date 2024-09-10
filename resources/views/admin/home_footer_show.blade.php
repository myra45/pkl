@extends('admin.layout.app')

@section('heading', 'Footer Section')

@section('button_section')



@endsection


@section('main_content')
    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('home_footer_submit') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="card-body p-0">
                                        <div class="">
                                            <div class="d-flex justify-content-center mb-2">
                                                <div class="mb-4">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                    <div class="mb-4">
                                        <label class="form-label">Judul Footer 1</label>
                                        <input type="text" class="form-control" name="footer_judul_1" value="{{ $page_data->footer_judul_1 }}">
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label">Judul Footer 2</label>
                                        <input type="text" class="form-control" name="footer_judul_2" value="{{ $page_data->footer_judul_2 }}">
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label">Judul Footer 3</label>
                                        <input type="text" class="form-control" name="footer_judul_3" value="{{ $page_data->footer_judul_3 }}">
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label">Judul Footer 4</label>
                                        <input type="text" class="form-control" name="footer_judul_4" value="{{ $page_data->footer_judul_4 }}">
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label">Deskripsi Footer</label>
                                        <textarea name="footer_desc" class="form-control" id="" cols="30" rows="10"></textarea>
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label">Kontak Telepon Footer</label>
                                        <input type="text" class="form-control" name="footer_kontak_telepon" value="{{ $page_data->footer_kontak_telepon }}">
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label">Kontak Email Footer</label>
                                        <input type="text" class="form-control" name="footer_kontak_email" value="{{ $page_data->footer_kontak_email }}">
                                    </div>
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
