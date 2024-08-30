@extends('admin.layout.app')

@section('heading', 'About Section')

@section('button_section')



@endsection


@section('main_content')
    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('about_submit') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="card-body p-0">
                                        <div class="">
                                            <div class="d-flex justify-content-center mb-2">
                                                <div class="mb-4">
                                                    <div class="border border-4 border-white rounded overflow-hidden mb-4">
                                                        <img src="{{ asset('uploads/'.$page_data->about_photo) }}"
                                                            alt="admin-img" class="w-100 h-100">
                                                    </div>
                                                    <div class="mb-4">
                                                        <input type="file" name="about_photo" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="mb-4">
                                        <label class="form-label">About Title</label>
                                        <input type="text" class="form-control" name="about_title"
                                            value="{{ $page_data->about_title}}">
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label">About Description</label>
                                        <input type="text" class="form-control" name="about_description"
                                            value="{{ $page_data->about_description}}">
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label">About Person Name</label>
                                        <input type="text" class="form-control" name="about_person_name"
                                            value="{{ $page_data->about_person_name}}">
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label">About Subtitle</label>
                                        <input type="text" class="form-control" name="about_subtitle"
                                            value="{{ $page_data->about_subtitle}}">
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label">About Icon 1</label>
                                        <p class="text-sm">*catatan : Icon nya harus berupa link</p>
                                        <input type="text" class="form-control" name="about_icon_1"
                                            value="{{ $page_data->about_icon_1}}">
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label">About Title Icon 1</label>
                                        <input type="text" class="form-control" name="about_title_icon_1"
                                        value="{{ $page_data->about_title_icon_1}}">
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label">About Desc Icon 1</label>
                                        <input type="text" class="form-control" name="about_desc_icon_1"
                                        value="{{ $page_data->about_desc_icon_1}}">
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label">About Icon 2</label>
                                        <p class="text-sm">*catatan : Icon nya harus berupa link</p>
                                        <input type="text" class="form-control" name="about_icon_2"
                                        value="{{ $page_data->about_icon_2}}">
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label">About Title Icon 2</label>
                                        <input type="text" class="form-control" name="about_title_icon_2"
                                        value="{{
                                            $page_data->about_title_icon_2}}">
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label">About Desc Icon 2</label>
                                        <input type="text" class="form-control" name="about_desc_icon_2"
                                        value="{{ $page_data->about_desc_icon_2}}">
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label">About Icon 3</label>
                                        <p class="text-sm">*catatan : Icon nya harus berupa link</p>
                                        <input type="text" class="form-control" name="about_icon_3"
                                            value="{{ $page_data->about_icon_3}}">
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label">About Title Icon 3</label>
                                        <input type="text" class="form-control" name="about_title_icon_3"
                                            value="{{ $page_data->about_title_icon_3}}">
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label">About Desc Icon 3</label>
                                        <input type="text" class="form-control" name="about_desc_icon_3"
                                            value="{{ $page_data->about_desc_icon_3}}">
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
