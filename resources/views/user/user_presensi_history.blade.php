@extends('user.layout.app')

@section('heading', 'History Presensi')

@section('button_section')
    <div class="d-flex">
        <form action="{{ route('user_presensi_history') }}" method="GET" class="d-flex">
            <div class="form-group">
                <input type="text" name="search" id="search" class="form-control" value="{{ request()->input('search') }}"
                    placeholder="Cari...">
            </div>
            <button type="submit" class="btn btn-secondary ms-2"><i class="ti ti-search"></i></button>
        </form>

        @if (request()->input('search'))
            <a href="{{ route('user_presensi_history') }}" class="btn btn-warning ms-2">Kembali <i
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
                                <th>Nama Event</th>
                                <th>Tanggal</th>
                                <th>Status</th>
                            </tr>
                        </thead>

                        <tbody>
                            @forelse($presensi as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->event->nama_event }}</td>
                                    <td>{{ $item->event->tanggal }}</td>
                                    <td>
                                        @if ($item->status == 'Hadir')
                                            <span class="badge bg-success">Hadir</span>
                                        @elseif ($item->status == 'Sakit')
                                        <span class="badge bg-secondary">Sakit</span>
                                        @elseif ($item->status == 'Izin')
                                        <span class="badge bg-warning">Izin</span>
                                        @else 
                                        <span class="badge bg-danger">Tanpa Keterangan</span>
                                        @endif
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4">Belum ada riwayat presensi.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                    {{-- Pembungkus Pagination --}}
                    <div class="paginate-wrapper mt-4">
                        {{ $presensi->links('pagination::bootstrap-5') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
