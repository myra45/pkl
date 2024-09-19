@extends('admin.layout.app')

@section('heading', 'Add News Category')

@section('button_section')
 <a href="{{ route('news_category_show') }}" class="btn btn-primary">Back</a>
@endsection

@section('main_content')
    <div class="card">
        <div class="card-body">
            <form method="POST" action="{{route('news_category_submit')}}">
              @csrf
                <div class="row">
                    <div class="col-md-9">
                    <div class="mb-3">
                        <label for="name" class="form-label">Category Name</label>
                        <input type="text"
                            class="form-control" id="name" name="name" autofocus>
                    </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
            </form>
        </div>
    </div>

@endsection
