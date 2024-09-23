@extends('admin.layout.app')

@section('heading', 'Add News')

@section('button_section')
    <a href="{{ route('news_show') }}" class="btn btn-primary">Back</a>
@endsection

@section('main_content')
    <div class="card">
        <div class="card-body">
            <form method="POST" action="{{ route('admin_news_submit') }}" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-9">
                            <div class="mb-3">
                                <label for="gambar" class="form-label">Photo</label>
                                <input type="file" name="gambar" id="gambar" class="form-control">
                            </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Title</label>
                            <input type="text" class="form-control" id="name" name="judul" autofocus>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Category Name</label>
                            <select name="berita_category_id" class="form-control">
                                <option value="">-- Choose Category --</option>
                                @foreach ($category as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Writer</label>
                            <input type="text" class="form-control" id="name" name="penulis" autofocus>
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Date</label>
                            <input type="date" class="form-control" id="name" name="tanggal" autofocus>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Description </label>
                                    <textarea name="deskripsi" id="" class="form-control snote" cols="30" rows="10"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
            </form>
        </div>
    </div>

@endsection
