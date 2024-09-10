@extends('admin_eskul.layout.app')

@section('heading', 'All Task')

@section('button_section')
    <a href="{{ route('admin_extracurricular_task_manajement_create') }}" class="btn btn-primary">Create</a>
@endsection

@section('main_content')
    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="">
                    <div class="">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="example1">
                                <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>Tanggal</th>
                                        <th>Judul</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($all_tugas as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->tanggal }}</td>
                                            <td>{{ $item->judul_tugas }}</td>
                                            <td>
                                                @if ($item->status == 'Belum Selesai')
                                                    <span class="badge bg-warning">Belum Selesai</span>
                                                @else
                                                    <span class="badge bg-success">Selesai</span>
                                                @endif
                                                </select>
                                            </td>
                                            <td class="pt_10 pb_10">
                                                @if ($item->status == 'Belum Selesai')
                                                    <a href="{{ route('admin_extracurricular_task_manajement_edit', $item->id) }}"
                                                        class="btn btn-primary">Edit</a>
                                                @else
                                                    <button class="btn btn-secondary" disabled>Edit</button>
                                                @endif
                                                <a href="{{ route('admin_extracurricular_task_manajement_delete', $item->id) }}"
                                                    class="btn btn-danger"
                                                    onClick="return confirm('Are you sure?');">Delete</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
