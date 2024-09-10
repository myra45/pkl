@extends('admin.layout.app')

@section('heading', 'About service')

@section('button_section')



@endsection


@section('main_content')
    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('home_service_submit') }}" method="POST" enctype="multipart/form-data">
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
                                    <label class="form-label">Service Title</label>
                                    <input type="text" class="form-control" name="service_title" value="{{ $page_data->service_title }}">
                                </div>
                                <div class="col-md-8">
                                    <div class="mb-4">
                                        <label class="form-label">Icon Ekskul 1</label>
                                        <input type="text" class="form-control" name="eskul_icon_1" value="{{ $page_data->eskul_icon_1 }}">
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label">Nama Ekskul 1</label>
                                        <input type="text" class="form-control" name="nama_eskul_1" value="{{ $page_data->nama_eskul_1 }}">
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label">Deskripsi Ekskul 1</label>
                                        <input type="text" class="form-control" name="desc_eskul_1" value="{{ $page_data->desc_eskul_1 }}">
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label">Icon Ekskul 2</label>
                                        <input type="text" class="form-control" name="eskul_icon_2" value="{{ $page_data->eskul_icon_2 }}">
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label">Nama Ekskul 2</label>
                                        <input type="text" class="form-control" name="nama_eskul_2" value="{{ $page_data->nama_eskul_2 }}">
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label">Deskripsi Ekskul 2</label>
                                        <input type="text" class="form-control" name="desc_eskul_2" value="{{ $page_data->desc_eskul_2 }}">
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label">Icon Ekskul 3</label>
                                        <input type="text" class="form-control" name="eskul_icon_3" value="{{ $page_data->eskul_icon_3 }}">
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label">Nama Ekskul 3</label>
                                        <input type="text" class="form-control" name="nama_eskul_3" value="{{ $page_data->nama_eskul_3 }}">
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label">Deskripsi Ekskul 3</label>
                                        <input type="text" class="form-control" name="desc_eskul_3" value="{{ $page_data->desc_eskul_3 }}">
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label">Icon Ekskul 4</label>
                                        <input type="text" class="form-control" name="eskul_icon_4" value="{{ $page_data->eskul_icon_4 }}">
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label">Nama Ekskul 4</label>
                                        <input type="text" class="form-control" name="nama_eskul_4" value="{{ $page_data->nama_eskul_4 }}">
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label">Deskripsi Ekskul 4</label>
                                        <input type="text" class="form-control" name="desc_eskul_4" value="{{ $page_data->desc_eskul_4}}">
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
