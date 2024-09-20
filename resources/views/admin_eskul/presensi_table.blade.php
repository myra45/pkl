@extends('admin_eskul.layout.app')

@section('heading')
    <div>
        <h4>Presensi Untuk Event : {{ $event?->nama_event }}</h4>
    </div>
@endsection

@section('button_section')
<div class="d-flex">
    <form action="{{ route('admin_extracurricular_presensi_show', $event->id) }}" method="GET" class="d-flex">
        <div class="form-group">
            <input type="text" name="search" id="search" class="form-control" value="{{ request()->input('search') }}"
                placeholder="Cari...">
        </div>
        <button type="submit" class="btn btn-secondary ms-2"><i class="ti ti-search"></i></button>
    </form>
    <a href="{{ route('presensi_history_all') }}" class="btn btn-primary ms-2" data-bs-toggle="tooltip" data-bs-placement="top"
        title="Back"><span class="ti ti-arrow-left"></span></a>

    @if (request()->input('search'))
        <a href="{{ route('admin_extracurricular_presensi_show', $event->id) }}" class="btn btn-warning ms-2">Kembali <i class="ti ti-arrow-left"></i></a>
    @endif
</div>
@endsection

@section('main_content')
    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div>
                    <p>Pukul : {{ $event?->jam_mulai }}</p>
                    <p>Tanggal : {{ $event?->tanggal }}</p>
                    <p>Lokasi : {{ $event?->tempat }}</p>

                </div>
                <form action="{{ route('admin_extracurricular_presensi_submit', $event?->id) }}" method="POST">
                    @csrf
                    <div class="table-responsive">
                        <table class="table table-bordered" id="example1">
                            <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Name</th>
                                    <th>Ekstrakulikuler</th>
                                    <th>Status</th>
                                </tr>
                            </thead>

                            <tbody>
                                @if ($presensi->count() > 0)
                                    @foreach ($presensi as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->user->name }}</td>
                                            <td>{{ $item->eskul->nama_eskul }}</td>

                                            <td>
                                                <input type="hidden" name="user_id[]" value="{{ $item->user->id }}">
                                                <select name="status[]" class="form-control">
                                                    <option value="Hadir" {{ $item->status == 'Hadir' ? 'selected' : '' }}>Hadir</option>
                                                    <option value="Sakit" {{ $item->status == 'Sakit' ? 'selected' : '' }}>Sakit</option>
                                                    <option value="Izin" {{ $item->status == 'Izin' ? 'selected' : '' }}>Izin</option>
                                                    <option value="Tanpa Keterangan" {{ $item->status == 'Tanpa Keterangan' ? 'selected' : '' }}>Tanpa Keterangan</option>
                                                </select>
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="4" class="text-center">No data found for '{{ request()->input('search') }}'</td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                        @if ($search)
                        <div class="paginate-wrapper mt-4">
                            {{ $presensi->links('pagination::bootstrap-5') }}
                        </div>
                        @endif
                        <button type="submit" class="btn btn-primary">Simpan Absensi</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
