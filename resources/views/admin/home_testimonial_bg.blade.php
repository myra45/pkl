@extends('admin.layout.app')

@section('heading', 'Home Testi BG Edit')

@section('button_section')

<a href="{{ route('home_testimonial_show') }}" class="btn btn-primary">Back</a>

@endsection


@section('main_content')
<div class="card">
    <div class="card-body">
        <form method="POST" action="{{ route('home_testimonial_bg_submit') }}" enctype="multipart/form-data">
          @csrf
            <div class="row">
                <div class="col-md-12">
                    <div class="mb-3">
                        <img src="{{ asset('uploads/'.$page_data->bg_testi) }}" class="img-thumbnail object-fit-cover" style="width: 100%; height: 300px">
                    </div>
                    <div class="mb-3">
                        <label for="judul" class="form-label">Bg Testimonial</label>
                        <input type="file"
                        class="form-control" id="judul" name="bg_testi" autofocus>
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
        </form>
    </div>
</div>
@endsection
