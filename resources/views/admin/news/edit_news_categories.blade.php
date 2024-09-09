@extends('admin.layout.app')

@section('heading', 'Edit Category News')

@section('button_section')
  <a href="{{ route('news_category_show') }}" class="btn btn-primary">Back</a>
@endsection

@section('main_content')
    <div class="card">
        <div class="card-body">
            <form method="POST" action="{{route('news_category_update', $row_data->id)}}">
              @csrf
                <div class="row">
                    <div class="col-md-9">
                        <div class="mb-3">
                            <label for="berita_category" class="form-label">Name</label>
                            <input type="text"
                                class="form-control" id="berita_category" name="name" value="{{ $row_data->name }}" autofocus>
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
            </form>
        </div>
    </div>
@endsection