@extends('admin.layout.app')

@section('heading', 'All Comentars')

@section('button_section')


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
                                  <th>News Title</th>
                                  <th>Name</th>
                                  {{-- <th>Coments</th> --}}
                                  <th>Created</th>
                                  <th>Action</th>
                              </tr>
                          </thead>

                          <tbody>
                            @foreach ($all_komen as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->berita->judul }}</td>
                                <td>{{ $item->user->name }}</td>
                                {{-- <td>{{ $item->isi_komentar }}</td> --}}
                                <td>{{ \Carbon\Carbon::parse($item->created_at)->translatedFormat('d F Y') }}</td>
                                <td class="pt_10 pb_10">
                                  <a href="{{route('admin_komentar_delete', $item->id)}}" class="btn btn-danger"
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
