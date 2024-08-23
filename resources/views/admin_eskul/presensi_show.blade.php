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
                            <i class="ti ti-checkup-list fs-6"></i>
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
                            <i class="ti ti-checklist fs-6"></i>
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
                            <i class="ti ti-users fs-6"></i>
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
                            <i class="ti ti-x fs-6"></i>
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
@endsection
