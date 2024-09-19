@extends('admin_eskul.layout.app')

@section('heading', 'History Penilaian')

@section('button_section')
    <div class="d-flex">
        <form action="{{ route('admin_extracurricular_grade_history') }}" method="GET" class="d-flex">
            <div class="form-group">
                <input type="text" name="search" id="search" class="form-control" value="{{ request()->input('search') }}"
                    placeholder="Search...">
            </div>
            <button type="submit" class="btn btn-secondary ms-2"><i class="ti ti-search"></i></button>
        </form>

        @if (request()->input('search'))
            <a href="{{ route('admin_extracurricular_grade_history') }}" class="btn btn-warning ms-2">Back <i
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
                                <th> Event Name</th>
                                <th>Date</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @if ($all_event_nilai->count() > 0)
                                @foreach ($all_event_nilai as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->nama_event }}</td>
                                        <td>{{ $item->tanggal }}</td>
                                        <td>
                                            @if ($item->status == 'Aktif')
                                                <span class="badge bg-primary">Aktif</span>
                                            @else
                                                <span class="badge bg-success">Selesai</span>
                                            @endif
                                        </td>
                                        <td class="pt_10 pb_10">
                                            <a href="{{ route('admin_extracurricular_grade_detail', $item->id) }}"
                                                class="btn btn-primary me-2">View All</a>
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
                        {{ $all_event_nilai->links('pagination::bootstrap-5') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
