@extends('user.layout.app')

@section('heading', 'Extracurricular Final Grades Page')

@section('button_section')
@endsection

@section('main_content')
    <div class="section-body">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h3 class="mb-3">Announcement</h3>
                        <p class="fs-4">Pengumuman penting mengenai kegiatan ekstrakurikuler dapat ditampilkan di sini.</p>
                    </div>
                </div>
                <h3>Final Score</h3>
                <div class="table-responsive">
                    <table class="table table-bordered" id="example1">
                        <thead>
                            <tr>
                                <th>SL</th>
                                <th>Member Name</th>
                                <th>extracurricular</th>
                                <th>Final Scorer</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>{{ Auth::user()->name }}</td>
                                <td>{{ Auth::user()->Extracurricular->nama_eskul }}</td>
                                <td>{{ $nilaiData->nilai_akhir ?? 'Belum ada nilai' }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
