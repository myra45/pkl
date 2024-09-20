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
                        <form action="{{ route('home_testimonial_update', $row_data->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="mb-4">
                                        <label class="form-label">Nama</label>
                                        <input type="text" class="form-control" name="nama" value="{{ $row_data->nama }}">
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label">Ekstrakulikuler</label>
                                        <input type="text" class="form-control" name="eskul" value="{{ $row_data->eskul }}">
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label">Deskripsi Testimonial</label>
                                       <textarea name="desc" id="" class="form-control" cols="30" rows="10" >{{$row_data->desc}}
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
