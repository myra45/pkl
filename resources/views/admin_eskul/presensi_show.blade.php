@extends('admin_eskul.layout.app')

@section('heading', 'Presensi')

@section('main_content')
    <div class="row">
        <div class="col-lg-3 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex flex-row gap-6 align-items-center">
                        <div
                            class="round-40 rounded-circle text-white d-flex align-items-center justify-content-center text-bg-primary">
                            <i class="ti ti-file-check fs-6"></i>
                        </div>
                        <div class="align-self-center">
                            <h4 class="card-title mb-1">Hadir</h4>
                            <p class="card-subtitle">34</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex flex-row gap-6 align-items-center">
                        <div
                            class="round-40 rounded-circle text-white d-flex align-items-center justify-content-center text-bg-success">
                            <i class="ti ti-file-plus fs-6"></i>
                        </div>
                        <div class="align-self-center">
                            <h4 class="card-title mb-1">Sakit</h4>
                            <p class="card-subtitle">5</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex flex-row gap-6 align-items-center">
                        <div
                            class="round-40 rounded-circle text-white d-flex align-items-center justify-content-center text-bg-warning">
                            <i class="ti calendar-off fs-6"></i>
                        </div>
                        <div class="align-self-center">
                            <h4 class="card-title mb-1">Izin</h4>
                            <p class="card-subtitle">3</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex flex-row gap-6 align-items-center">
                        <div
                            class="round-40 rounded-circle text-white d-flex align-items-center justify-content-center text-bg-danger">
                            <i class="ti ti-file-x fs-6"></i>
                        </div>
                        <div class="align-self-center">
                            <h4 class="card-title mb-1">Absen</h4>
                            <p class="card-subtitle">3</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="border-bottom title-part-padding px-0 mb-3">
        <h5>Buat Presensi</h5>
    </div>
    <div class="row">
        <div class="col-md-9">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{ route('admin_extracurricular_presensi_form_submit') }}">
                        @csrf
                        <input type="hidden" name="eskul_id" value="{{ $admin_data?->eskul_id }}">
                        <div class="mb-3">
                            <label for="eventName" class="form-label">Nama Event</label>
                            <input type="text" class="form-control " id="eventName" name="nama_event">
                        </div>
                        <div class="mb-3">
                            <label for="tanggal" class="form-label">Tanggal</label>
                            <input type="date" class="form-control" id="tanggal" name="tanggal">
                        </div>
                        <div class="mb-3">
                            <label for="jamMulai" class="form-label">Jam Mulai</label>
                            <input type="time" class="form-control" id="jamMulai" name="jam_mulai">
                        </div>
                        <div class="mb-3">
                            <label for="tempat" class="form-label">Tempat</label>
                            <input type="text" class="form-control" id="tempat" name="tempat">
                        </div>

                        <button type="submit" class="btn btn-primary">Buat Presensi</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card mb-3">
                <div class="card-body">
                    <h4 class="mb-3">
                        History Presensi
                    </h4>
                    <a href="{{ route('presensi_history_all') }}" class="btn btn-primary">View All</a>
                </div>
            </div>
            <div class="card mb-3">
                <div class="card-body">
                    <h4 class="mb-3">Laporan Presensi </h4>
                    <a href="{{ route('generate_report') }}" class="btn btn-primary">Create</a>
                </div>
            </div>
            <div class="card mb-3">
                <div class="card-body">
                    <h4 class="mb-3">Export Presensi </h4>
                    <a href="" class="btn btn-primary">Export</a>
                </div>
            </div>
        </div>
    </div>


@endsection
