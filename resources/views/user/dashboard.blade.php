@extends('user.layout.app')

@section('heading', 'Dashboard')

@section('main_content')
    <div class="section-body">
        <div class="row">
            <!-- Menu Akses Cepat -->
            <div class="col-md-12">
                <div class="card mb-4">
                    <div class="card-header bg-primary text-white">
                        <h5 class="text-white">Quick Links</h5>
                    </div>
                    <div class="card-body d-flex justify-content-around">
                        <!-- Beranda -->
                        <div class="text-center">
                            <a href="{{ route('home') }}" class="btn btn-outline-primary">
                                <p>Home</p>
                            </a>
                        </div>
                        <!-- Profile -->
                        <div class="text-center">
                            <a href="{{ route('user_profile') }}" class="btn btn-outline-primary">
                                <p>Profile</p>
                            </a>
                        </div>
                        <!-- Tugas -->
                        <div class="text-center">
                            <a href="{{ route('user_task') }}" class="btn btn-outline-primary">
                                <span class="class="ti ti-tasks fa-2x mb-2"></span>
                                <p>Task</p>
                            </a>
                        </div>
                        <!-- Nilai Akhir -->
                        <div class="text-center">
                            <a href="{{ route('user_nilai_akhir') }}" class="btn btn-outline-primary">
                                <i class="fas fa-chart-line fa-2x mb-2"></i>
                                <p>Final Score</p>
                            </a>
                        </div>
                        <!-- Logout -->
                        <div class="text-center">
                            <a href="{{ route('logout') }}" class="btn btn-outline-danger">
                                <i class="fas fa-sign-out-alt fa-2x mb-2"></i>
                                <p>Logout</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pengumuman -->
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-warning">
                        <h5 class="text-white">Announcement</h5>
                    </div>
                    <div class="card-body">
                        <h6 class="mb-3">Deadline Tugas :</h6>
                        <ul>
                            @foreach ($user_tasks as $item)
                            <li>Tugas {{ $loop->iteration }} : {{ $item->judul_tugas }}, selesaikan sebelum tanggal {{ \Carbon\Carbon::parse($item->tanggal)->format('d M Y') }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
