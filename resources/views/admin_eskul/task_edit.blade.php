@extends('admin_eskul.layout.app')

@section('heading', 'Edit Task')

@section('button_section')
    <a href="{{ route('admin_extracurricular_task_manajement_all') }}" class="btn btn-primary">Back</a>
@endsection

@section('main_content')
    <div class="card">
        <div class="card-body">
            <form method="POST" action="{{ route('admin_extracurricular_task_manajement_update', $row_data->id) }}">
                @csrf
                <div class="row">
                    <div class="col-md-9">
                        <div class="mb-3">
                            <label for="name" class="form-label">Date</label>
                            <input type="date" class="form-control" id="name" name="tanggal"
                                value="{{ $row_data->tanggal }}" disabled>
                        </div>
                        <div class="mb-3">
                            <label for="text" class="form-label"> Title</label>
                            <input type="text" class="form-control" id="judul" name="judul"
                                value="{{ $row_data->judul_tugas }}" disabled>
                        </div>
                        <div class="mb-4">
                            <label for="eskul" class="form-label">Status</label>
                            <select name="status" class="form-control">
                                <option value="Belum Selesai" {{ $row_data->status == 'Belum Selesai' ? 'selected' : '' }}>
                                    Belum Selesai</option>
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
