@extends('admin.layout.app')

@section('heading', 'Home Banner Edit')

@section('button_section')



@endsection


@section('main_content')
    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('home_banner_submit') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="card-body p-0">
                                        <div class="">
                                            <div class="d-flex justify-content-center mb-2">
                                                <div class="mb-4">
                                                    <div class="border border-4 border-white rounded overflow-hidden mb-4">
                                                        <img src="{{ asset('uploads/'. $page_data->banner_photo) }}"
                                                            alt="admin-img" class="w-100 h-100">
                                                    </div>
                                                    <div class="mb-4">
                                                        <input type="file" name="banner_photo" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="mb-4">
                                        <label class="form-label">Banner Title</label>
                                        <input type="text" class="form-control" name="banner_title" value="{{ $page_data->banner_title }}">
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label">Banner Subtitle</label>
                                        <input type="text" class="form-control" name="banner_subtitle" value="{{ $page_data->banner_subtitle }}">
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label">Banner Button Text</label>
                                        <input type="text" class="form-control" name="banner_button_text" value="{{ $page_data->banner_button_text }}">
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label">Banner Button URL</label>
                                        <input type="text" class="form-control" name="banner_button_url" value="{{ $page_data->banner_button_url }}">
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
