@extends('admin.layout.app')

@section('heading', 'Admin Eskul')

@section('button_section')

<a href="{{ route('add_admin') }}" class="btn btn-primary">Tambah Admin Eskul</a>

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
                                  <th>Name</th>
                                  <th>Email</th>
                                  <th>Nama Eskul</th>
                              </tr>
                          </thead>

                          <tbody>
                            @foreach ($all_data as $item )
                                  <tr>
                                      <td>{{ $loop->iteration }}</td>
                                      <td>{{ $item->name }}</td>
                                      <td>{{ $item->email }}</td>
                                      <td>{{ $item->rExtracurricular?->nama_eskul }}</td>
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
