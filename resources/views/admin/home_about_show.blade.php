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
                        <form action="{{ route('admin_profile_submit') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="card-body p-0">
                                        <div class="">
                                            <div class="d-flex justify-content-center mb-2">
                                                <div class="mb-4">
                                                    <div class="border border-4 border-white rounded overflow-hidden mb-4">
                                                        <img src="{{ asset('uploads/') }}"
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
                                            value="">
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label">About Description</label>
                                        <input type="text" class="form-control" name="about_description"
                                            value="">
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label">About Person Name</label>
                                        <input type="text" class="form-control" name="about_person_name"
                                            value="">
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label">About_Subtitle</label>
                                        <input type="text" class="form-control" name="about_subtitle"
                                            value="">
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label">About_Icon_1</label>
                                        <input type="text" class="form-control" name="about_icon_1"
                                            value="">
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label">About_Title_Icon_1</label>
                                        <input type="text" class="form-control" name="about_title_icon_1"
                                            value="">
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label">About_Desc_Icon_1</label>
                                        <input type="text" class="form-control" name="about_desc_icon_1"
                                            value="">
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label">About_Icon_2</label>
                                        <input type="text" class="form-control" name="about_icon_2"
                                            value="">
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label">About_Title_Icon_2</label>
                                        <input type="text" class="form-control" name="about_title_icon_2"
                                            value="">
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label">About_Desc_Icon_2</label>
                                        <input type="text" class="form-control" name="about_desc_icon_2"
                                            value="">
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label">About_Icon_3</label>
                                        <input type="text" class="form-control" name="about_icon_3"
                                            value="">
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label">About_Title_Icon_3</label>
                                        <input type="text" class="form-control" name="about_title_icon_3"
                                            value="">
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label">About_Desc_Icon_3</label>
                                        <input type="text" class="form-control" name="about_desc_icon_3"
                                            value="">
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label">About_Photo</label>
                                        <input type="text" class="form-control" name="about_photo"
                                            value="">
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
