@extends('admin.layout.app')

@section('heading', 'Home Testimonial Edit')

@section('button_section')



@endsection


@section('main_content')
    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('home_testimonial_submit') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="card-body p-0">
                                        <div class="">
                                            <div class="d-flex justify-content-center mb-2">
                                                <div class="mb-4">
                                                    <div class="border border-4 border-white rounded overflow-hidden mb-4">
                                                        <img src="{{ asset('uploads/'. $page_data->bg_testi) }}"
                                                            alt="admin-img" class="w-100 h-100">
                                                    </div>
                                                    <div class="mb-4">
                                                        <input type="file" name="bg_testi" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="mb-4">
                                        <label class="form-label">Nama Testimonial</label>
                                        <input type="text" class="form-control" name="nama_testi" value="{{ $page_data->nama_testi }}">
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label">Nama Ekstrakulikuler Testimonial</label>
                                        <input type="text" class="form-control" name="eskul_testi" value="{{ $page_data->eskul_testi }}">
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label">Deskripsi Testimonial</label>
                                       <textarea name="desc_testi" id="" class="form-control" cols="30" rows="10" >{{$page_data->desc_testi}}
                                       </textarea>
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
