@extends('admin_eskul.layout.app')

@section('heading', 'Nilai Akhir')

{{-- @section('button_section')
<a href="{{ route('presensi_history_all') }}" class="btn btn-primary">Back</a>
@endsection --}}

@section('main_content')
    @if($event_nilai)
    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header bg-primary text-white h5">Pengumuman</div>
                    <div class="card-body">
                        Halaman Penilaian telah tersedia, silahkan akses link dibawah ini untuk menginput nilai.
                        <a href="{{ route('admin_extracurricular_grade_detail', $event_nilai->id) }}">Link Penilaian</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @else
    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header bg-primary text-white h5">Pengumuman</div>
                    <div class="card-body fs-3">
                        Halaman Penilaian belum tersedia, silahkan berkunjung lain kali dan tunggu pengumuman. Jika tidak bisa coba lihat halaman history ini <a href="{{ route('admin_extracurricular_grade_history') }}">History</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif
@endsection

