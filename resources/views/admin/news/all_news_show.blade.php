@extends('admin.layout.app')

@section('heading', 'All News')

@section('button_section')

<a href="{{route('admin_news_add')}}" class="btn btn-primary">Add New <span class="ti ti-plus"></span></a>

@endsection

@section('main_content')
<div class="section-body">
  <div class="row">
      <div class="col-12">
          <div class="">
              <div class="">
                  <div class="table-responsive">
                      <table class="table table-bordered" id="example1">
                          <thead>
                              <tr>
                                  <th>SL</th>
                                  <th>Judul Berita</th>
                                  <th>Tanggal</th>
                                  <th>Kategori</th>
                                  <th>Action</th>
                              </tr>
                          </thead>

                          <tbody>
                            @foreach ($all_data as $item )
                                  <tr>
                                      <td>{{ $loop->iteration }}</td>
                                      <td>{{ $item->judul }}</td>
                                      <td>{{ $item->tanggal }}</td>
                                      <td>{{ $item->rCategory?->name }}</td>
                                      <td class="pt_10 pb_10">
                                        <a href="{{ route('admin_news_edit', $item->id) }}" class="btn btn-primary">Edit</a>
                                        <a href="" class="btn btn-danger"
                                            onClick="return confirm('Are you sure?');">Delete</a>
                                    </td>
                                  </tr>
                                  @endforeach
                          </tbody>
                      </table>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>

@endsection
