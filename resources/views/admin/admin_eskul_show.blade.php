@extends('admin.layout.app')

@section('heading', 'Admin Eskul')

@section('button_section')
    <div class="d-flex">
        <form action="{{ route('admin_show') }}" method="GET" class="d-flex">
            <div class="form-group">
                <input type="text" name="search" id="search" class="form-control" value="{{ request()->input('search') }}"
                    placeholder="Search...">
            </div>
            <button type="submit" class="btn btn-secondary ms-2"><i class="ti ti-search"></i></button>
        </form>
        <a href="{{ route('add_admin') }}" class="btn btn-primary ms-2" data-bs-toggle="tooltip" data-bs-placement="top"
            title="Add New"><span class="ti ti-plus"></span></a>


        {{-- Tombol Kembali akan muncul jika ada pencarian --}}
        @if (request()->input('search'))
            <a href="{{ route('admin_show') }}" class="btn btn-warning ms-2">Kembali <i class="ti ti-arrow-left"></i></a>
        @endif
    </div>
@endsection

@section('main_content')
    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>SL</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Nama Eskul</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($admin_eskul->count() > 0)
                                @foreach ($admin_eskul as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td>{{ $item->Extracurricular?->nama_eskul }}</td>
                                        <td>
                                            <a href="{{ route('admin_edit', $item->id) }}" class="btn btn-primary">Edit</a>
                                            <a href="{{ route('admin_delete', $item->id) }}" class="btn btn-danger"
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
                        {{ $admin_eskul->links('pagination::bootstrap-5') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
