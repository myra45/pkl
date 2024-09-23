@extends('admin_eskul.layout.app')

@section('heading', 'History Presensi')

@section('button_section')
    <div class="d-flex">
        <form action="{{ route('presensi_history_all') }}" method="GET" class="d-flex">
            <div class="form-group">
                <input type="text" name="search" id="search" class="form-control" value="{{ request()->input('search') }}"
                    placeholder="Search...">
            </div>
            <button type="submit" class="btn btn-secondary ms-2"><i class="ti ti-search"></i></button>
        </form>
        <a href="{{ route('presensi_create') }}" class="btn btn-primary ms-2" data-bs-toggle="tooltip"
            data-bs-placement="top" title="Add New"><span class="ti ti-plus"></span></a>

        @if (request()->input('search'))
            <a href="{{ route('presensi_history_all') }}" class="btn btn-warning ms-2">Back <i
                    class="ti ti-arrow-left"></i></a>
        @endif
    </div>
@endsection

@section('main_content')
    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="table-responsive">
                    <table class="table table-bordered" id="example1">
                        <thead>
                            <tr>
                                <th>SL</th>
                                <th>Event Name</th>
                                <th>Date</th>
                                <th>Place</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @if ($events->count() > 0)
                                @foreach ($events as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->nama_event }}</td>
                                        <td>{{ $item->tanggal }}</td>
                                        <td>{{ $item->tempat }}</td>
                                        <td class="pt_10 pb_10">
                                            <!-- Tombol untuk melihat semua presensi -->
                                            <a href="{{ route('admin_extracurricular_presensi_show', $item->id) }}"
                                                class="btn btn-primary me-2">View all</a>

                                            <!-- Tombol untuk mengekspor presensi berdasarkan event -->
                                            <a href="{{ route('preview_report_event', $item->id) }}"
                                                class="btn btn-secondary me-2">
                                                <span class="ti ti-file-export"></span> Export
                                            </a>

                                            <a href="{{ route('presensi_delete', $item->id) }}" class="btn btn-danger"
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
                    <!-- Tombol untuk mengekspor semua event -->
                    <a href="{{ route('preview_report') }}" class="btn btn-secondary">
                        <span class="ti ti-file-export"></span> Export All Events
                    </a>

                    {{-- Pembungkus Pagination --}}
                    <div class="paginate-wrapper mt-4">
                        {{ $events->links('pagination::bootstrap-5') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
