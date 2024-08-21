@extends('admin_eskul.layout.app')

@section('heading', 'Buat Presensi')

@section('main_content')
    <div class="card">
        <div class="card-body">
            <form method="POST" action="">
              @csrf
                <div class="row">
                    <div class="col-md-9">
                        <input type="text" name="extracurricular_id" value="{{ $extracurricularId }}">
                        <div class="mb-3">
                            <label for="eventName" class="form-label">Nama Event</label>
                            <input type="text" class="form-control " id="eventName"
                             name="nama_event">
                        </div>
                        <div class="mb-3">
                            <label for="tanggal" class="form-label">Tanggal</label>
                            <input type="date" class="form-control" id="tanggal"
                            name="tanggal">
                        </div>
                        <div class="mb-3">
                            <label for="jamMulai" class="form-label">Jam Mulai</label>
                            <input type="time" class="form-control" id="jamMulai"
                            name="jam_mulai">
                        </div>
                        <div class="mb-3">
                            <label for="tempat" class="form-label">Tempat</label>
                            <input type="text" class="form-control" id="tempat"
                            name="tempat">
                        </div>

                        <button type="submit" class="btn btn-primary">Buat Presensi</button>
                    </div>
            </form>
        </div>
    </div>

@endsection
