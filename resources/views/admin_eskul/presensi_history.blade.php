@extends('admin_eskul.layout.app')

@section('heading', 'History Presensi')

@section('main_content')
<div class="section-body">
    <div class="row">
        <div class="col-12">
                <div class="table-responsive">
                    <table class="table table-bordered" id="example1">
                        <thead>
                            <tr>
                                <th>SL</th>
                                <th>Nama Event</th>
                                <th>Tanggal</th>
                                <th>Tempat</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($event_data as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->nama_event }}</td>
                                    <td>{{ $item->tanggal }}</td>
                                    <td>{{ $item->tempat }}</td>
                                    <td class="pt_10 pb_10">
                                        <a href="{{route('admin_extracurricular_presensi_show', $item->id)}}" class="btn btn-primary">View all</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
