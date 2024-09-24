@extends('admin.layout.app')

@section('heading', 'All Comentars')

@section('button_section')

<div class="d-flex">
    <form action="{{ route('admin_komentar') }}" method="GET" class="d-flex">
        <div class="form-group">
            <input type="text" name="search" id="search" class="form-control" value="{{ request()->input('search') }}"
                placeholder="Search...">
        </div>
        <button type="submit" class="btn btn-secondary ms-2"><i class="ti ti-search"></i></button>
    </form>

    {{-- Tombol Kembali akan muncul jika ada pencarian --}}
    @if (request()->input('search'))
        <a href="{{ route('admin_komentar') }}" class="btn btn-warning ms-2">Back <i class="ti ti-arrow-left"></i></a>
    @endif
</div>

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
                            @if ($all_komen->count() > 0)
                            @foreach ($all_komen as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->berita->judul }}</td>
                                <td>{{ $item->user->name }}</td>
                                {{-- <td>{{ $item->isi_komentar }}</td> --}}
                                <td>{{ ($item->created_at) }}</td>
                                <td class="pt_10 pb_10">
                                  <a href="{{route('admin_komentar_delete', $item->id)}}" class="btn btn-danger"
                                      onClick="return confirm('Are you sure?');">Delete</a>
                              </td>
                            </tr>
                            @endforeach
                            @else
                                <tr>
                                    <td colspan="5" class="text-center">No data found for '{{ $search }}'</td>
                                </tr>
                            @endif
                          </tbody>
                      </table>
                      {{-- Pembungkus Pagination --}}
                    <div class="paginate-wrapper mt-4">
                        {{ $all_komen->links('pagination::bootstrap-5') }}
                    </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>

@endsection
