@extends('user.layout.app')

@section('heading', 'Extracurricular Final Grades Page')

@section('button_section')
    <div class="d-flex">
        <form action="{{ route('user_nilai_akhir') }}" method="GET" class="d-flex">
            <div class="form-group">
                <input type="text" name="search" id="search" class="form-control" value="{{ request()->input('search') }}"
                    placeholder="Cari...">
            </div>
            <button type="submit" class="btn btn-secondary ms-2"><i class="ti ti-search"></i></button>
        </form>

        @if (request()->input('search'))
            <a href="{{ route('user_nilai_akhir') }}" class="btn btn-warning ms-2">Kembali <i
                    class="ti ti-arrow-left"></i></a>
        @endif
    </div>
@endsection

@section('main_content')
    <div class="section-body">
        <div class="row">
            <div class="col-md-12">
                
                <div class="table-responsive">
                    <table class="table table-bordered" id="example1">
                        <thead>
                            <tr>
                                <th>SL</th>
                                <th>Event Name</th>
                                <th>Member Name</th>
                                <th>extracurricular</th>
                                <th>Final Scorer</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($nilaiData->count() > 0)
                                @foreach ($nilaiData as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->event->nama_event }}</td> <!-- Perhatikan ini -->
                                        <td>{{ Auth::user()->name }}</td>
                                        <td>{{ Auth::user()->extracurricular->nama_eskul }}</td> <!-- Perhatikan ini -->
                                        <td>{{ $item->nilai_akhir ?? 'Belum ada nilai' }}</td>
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
                        {{ $nilaiData->links('pagination::bootstrap-5') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
