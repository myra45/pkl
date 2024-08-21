@extends('admin.layout.app')

@section('heading', 'Member Eskul')

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
                            @foreach ($user as $item )
                                  <tr>
                                      <td>{{ $loop->iteration }}</td>
                                      <td>{{ $item->name }}</td>
                                      <td>{{ $item->email }}</td>
                                      <td>{{ $item->rEskul?->nama_eskul }}</td>
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
