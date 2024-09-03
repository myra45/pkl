@extends('admin_eskul.layout.app')

@section('heading')
    <div>
        <h4>Presensi Untuk Event : {{ $event?->nama_event }}</h4>
    </div>
@endsection

@section('button_section')
<a href="{{ route('presensi_history_all') }}" class="btn btn-primary">Back</a>
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
                                @foreach ($presensi as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->user->name }}</td>
                                        <td>{{ $item->eskul->nama_eskul }}</td>

                                        <td>
                                            <input type="hidden" name="user_id[]" value="{{ $item->user->id }}">
                                            <select name="status[]" class="form-control">
                                                <option value="Hadir" {{ isset($presensi) && $item->status == 'Hadir' ? 'selected' : '' }}>Hadir</option>
                                                <option value="Sakit" {{ isset($item) && $item->status == 'Sakit' ? 'selected' : '' }}>Sakit</option>
                                                <option value="Izin" {{ isset($item) && $item->status == 'Izin' ? 'selected' : '' }}>Izin</option>
                                                <option value="Tanpa Keterangan" {{ isset($item) && $item->status == 'Tanpa Keterangan' ? 'selected' : '' }}>Tanpa Keterangan</option>
                                            </select>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <button type="submit" class="btn btn-primary">Simpan Absensi</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
