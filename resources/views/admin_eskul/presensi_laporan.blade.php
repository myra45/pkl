{{-- 
    @foreach ($events as $event)
        <h2>{{ $event->nama_event }} - {{ $event->tanggal }}</h2>
        <table>
            <thead>
                <tr>
                    <th>Nama Member</th>
                    <th>Status Kehadiran</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($event->presensis as $presensi)
                    <tr>
                        <td>{{ $presensi->user->name }}</td>
                        <td>{{ $presensi->status }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <br><br>
    @endforeach --}}

@extends('admin_eskul.layout.app')

@section('heading', 'Laporann Presensi')

@section('button_section')
    <a href="{{ route('admin_extracurricular_presensi') }}" class="btn btn-primary">Back</a>
@endsection

@section('main_content')
    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="table-responsive">
                  @foreach ($events as $event)
                    <h2>{{ $event->nama_event }} - {{ $event->tanggal }}</h2>
                    <table class="table table-bordered" id="example1">
                        <thead>
                            <tr>
                                <th>Nama Member</th>
                                <th>Status Kehadiran</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($event->presensis as $presensi)
                                <tr>
                                    <td>{{ $presensi->user->name }}</td>
                                    <td>{{ $presensi->status }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
