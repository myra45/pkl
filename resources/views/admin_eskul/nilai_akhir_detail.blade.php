@extends('admin_eskul.layout.app')

@section('heading', '' . $event->nama_event . '')

@section('button_section')
<div class="d-flex">
    <form action="{{ route('admin_extracurricular_grade_detail', $event->id) }}" method="GET" class="d-flex">
        <div class="form-group">
            <input type="text" name="search" id="search" class="form-control" value="{{ request()->input('search') }}"
                placeholder="Cari...">
        </div>
        <button type="submit" class="btn btn-secondary ms-2"><i class="ti ti-search"></i></button>
    </form>

    @if (request()->input('search'))
        <a href="{{ route('admin_extracurricular_grade_detail', $event->id) }}" class="btn btn-warning ms-2">Kembali <i
                class="ti ti-arrow-left"></i></a>
    @else
        <a href="{{ route('admin_extracurricular_grade_history') }}" class="btn btn-primary ms-2" data-bs-toggle="tooltip" data-bs-placement="top"
        title="Back"><i class="ti ti-arrow-left"></i></a>
    @endif
</div>
@endsection

@section('main_content')
<div class="section-body">
    <div class="row">
        <div class="col-12">
            <form action="{{ route('admin_extracurricular_grade_detail_submit', $event->id) }}" method="POST">
                @csrf
                <div class="table-responsive">
                    <table class="table table-bordered" id="example1">
                        <thead>
                            <tr>
                                <th>SL</th>
                                <th>Name</th>
                                <th>Extracurricular</th>
                                <th>Final Score</th>
                            </tr>
                        </thead>

                        <tbody>
                            @if($members->count() > 0)
                                @foreach ($members as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->Extracurricular->nama_eskul }}</td>
                                        <td>
                                            @php
                                                // Cek apakah sudah ada nilai untuk user ini
                                                $nilai = $nilaiData->firstWhere('user_id', $item->id);
                                            @endphp

                                            <!-- Hidden input untuk eskul_id dan user_id -->
                                            <input type="hidden" name="eskul_id[]" value="{{ $item->eskul_id }}">
                                            <input type="hidden" name="user_id[]" value="{{ $item->id }}">

                                            @if ($nilai && $nilai->nilai_akhir != null)
                                                <!-- Jika sudah ada nilai, tampilkan dropdown dengan nilai yang dipilih -->
                                                <select name="nilai_akhir[]" class="form-control">
                                                    <option value="A" {{ $nilai->nilai_akhir == 'A' ? 'selected' : '' }}>A</option>
                                                    <option value="B" {{ $nilai->nilai_akhir == 'B' ? 'selected' : '' }}>B</option>
                                                    <option value="C" {{ $nilai->nilai_akhir == 'C' ? 'selected' : '' }}>C</option>
                                                    <option value="D" {{ $nilai->nilai_akhir == 'D' ? 'selected' : '' }}>D</option>
                                                </select>
                                            @else
                                                <!-- Jika belum ada nilai, tampilkan dropdown kosong -->
                                                <select name="nilai_akhir[]" class="form-control">
                                                    <option value="">--Silahkan Pilih Predikat Nilai--</option>
                                                    <option value="A">A</option>
                                                    <option value="B">B</option>
                                                    <option value="C">C</option>
                                                    <option value="D">D</option>
                                                </select>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="5" class="text-center">No data found for '{{ $search }}'</td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                    @if($members->count() > 0)
                        @if ($nilai->nilai_akhir != null)
                            <a href="{{ route('admin_extracurricular_grade_export', $event->id) }}" class="btn btn-primary">Export Nilai</a>
                        @else
                            <button type="submit" class="btn btn-primary">Update</button>
                        @endif
                    @endif
                    <div class="paginate-wrapper mt-4">
                        {{ $members->links('pagination::bootstrap-5') }}
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
