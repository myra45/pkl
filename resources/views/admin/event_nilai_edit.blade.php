@extends('admin_eskul.layout.app')

@section('heading', 'Edit Event Nilai')

@section('button_section')
    <a href="{{ route('event_nilai_all') }}" class="btn btn-primary">Back</a>
@endsection

@section('main_content')
    <div class="card">
        <div class="card-body">
            <form method="POST" action="{{ route('event_nilai_update', $row_data->id) }}">
                @csrf
                <div class="row">
                    <div class="col-md-9">
                        <div class="mb-3">
                            <label for="name" class="form-label">Nama Event</label>
                            <input type="text" class="form-control" id="name" name="nama_event"
                                value="{{ $row_data->nama_event }}" disabled>
                        </div>
                        <div class="mb-3">
                            <label for="text" class="form-label">Tanggal</label>
                            <input type="date" class="form-control" id="judul" name="tanggal"
                                value="{{ $row_data->tanggal }}" disabled>
                        </div>
                        <div class="mb-4">
                            <label for="eskul" class="form-label">Status</label>
                            <select name="status" class="form-control">
                                <option value="Belum Selesai" {{ $row_data->status == 'Aktif' ? 'selected' : '' }}>
                                    Aktif</option>
                                <option value="Selesai" {{ $row_data->status == 'Selesai' ? 'selected' : '' }}>Selesai
                                </option>
                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
            </form>
        </div>
    </div>

@endsection
