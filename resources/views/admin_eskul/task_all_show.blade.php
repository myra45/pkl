@extends('admin_eskul.layout.app')

@section('heading', 'All Task')

@section('button_section')
    {{-- <a href="{{ route('admin_extracurricular_task_manajement_create') }}" class="btn btn-primary">Create</a> --}}
    <div class="d-flex">
        <form action="{{ route('admin_extracurricular_task_manajement_all') }}" method="GET" class="d-flex">
            <div class="form-group">
                <input type="text" name="search" id="search" class="form-control" value="{{ request()->input('search') }}"
                    placeholder="Search...">
            </div>
            <button type="submit" class="btn btn-secondary ms-2"><i class="ti ti-search"></i></button>
        </form>
        <a href="{{ route('admin_extracurricular_task_manajement_create') }}" class="btn btn-primary ms-2" data-bs-toggle="tooltip" data-bs-placement="top"
            title="Add New"><span class="ti ti-plus"></span></a>


        {{-- Tombol Kembali akan muncul jika ada pencarian --}}
        @if (request()->input('search'))
            <a href="{{ route('admin_extracurricular_task_manajement_all') }}" class="btn btn-warning ms-2">Back <i class="ti ti-arrow-left"></i></a>
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
                                        <th>date</th>
                                        <th>Title</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @if ($all_tugas->count() > 0)
                                    @foreach ($all_tugas as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->tanggal }}</td>
                                            <td>{{ $item->judul_tugas }}</td>
                                            <td>
                                                @if ($item->status == 'Belum Selesai')
                                                    <span class="badge bg-warning">Belum Selesai</span>
                                                @else
                                                    <span class="badge bg-success">Selesai</span>
                                                @endif
                                                </select>
                                            </td>
                                            <td class="pt_10 pb_10">
                                                @if ($item->status == 'Belum Selesai')
                                                    <a href="{{ route('admin_extracurricular_task_manajement_edit', $item->id) }}"
                                                        class="btn btn-primary">Edit</a>
                                                @else
                                                    <button class="btn btn-secondary" disabled>Edit</button>
                                                @endif
                                                <a href="{{ route('admin_extracurricular_task_manajement_delete', $item->id) }}"
                                                    class="btn btn-danger"
                                                    onClick="return confirm('Are you sure?');">Delete</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    @else
                                    <tr>
                                        <td colspan="5" class="text-center">No data found for '{{ $search }}'
                                        </td>
                                    </tr>
                                @endif
                                </tbody>
                            </table>
                            {{-- Pembungkus Pagination --}}
                            <div class="paginate-wrapper mt-4">
                                {{ $all_tugas->links('pagination::bootstrap-5') }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
