@extends('admin.layout.app')

@section('heading', 'Edit News')

@section('button_section')
  <a href="{{ route('news_show') }}" class="btn btn-primary">Back</a>
@endsection

@section('main_content')
    <div class="card">
        <div class="card-body">
            <form method="POST" action="" enctype="multipart/form-data">
              @csrf
                <div class="row">
                    <div class="col-md-12">
                        <div class="mb-3">
                            <img src="{{ asset('uploads/'.$row_data->gambar) }}" class="img-thumbnail object-fit-cover" style="width: 100%; height: 300px">
                        </div>
                        <div class="mb-3">
                            <label for="judul" class="form-label">Photo</label>
                            <input type="file"
                            class="form-control" id="judul" name="file" autofocus>
                        </div>
                        <div class="mb-3">
                            <label for="judul" class="form-label">Judul</label>
                            <input type="text"
                            class="form-control" id="judul" name="judul" value="{{ $row_data->judul }}" autofocus>
                        </div>
                        <div class="mb-3">
                            <label for="berita_category" class="form-label">Berita Category</label>
                            <select name="nilai" class="form-control">
                              <option value="{{ $row_data->rCategory->id}}" 
                                @if ( $row_data->rCategory->name) 
                                selected 
                                @endif>
                                  {{ $row_data->rCategory->name }}</option>
                            </select>
                        </div>
                      <div class="mb-3">
                          <label for="penulis" class="form-label">Penulis</label>
                          <input type="photo"
                              class="form-control" id="penulis" name="penulis" value="{{ $row_data->penulis }}" autofocus>
                      </div>
                      <div class="mb-3">
                        <label for="tanggal" class="form-label">Tanggal</label>
                        <input type="tanggal"
                            class="form-control" id="tanggal" name="tanggal" value="{{ $row_data->tanggal }}" autofocus>
                    </div>
                    <div class="mb-3">
                        <label for="deskripsi" class="form-label">Deskripsi</label>
                        <textarea name="deskripsi" class="form-control" cols="30" rows="10">{{ $row_data->deskripsi }}</textarea>
                    </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
            </form>
        </div>
    </div>
@endsection