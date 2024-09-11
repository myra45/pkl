@extends('admin_eskul.layout.app')

@section('heading', 'Nilai Akhir')

{{-- @section('button_section')
<a href="{{ route('presensi_history_all') }}" class="btn btn-primary">Back</a>
@endsection --}}

@section('main_content')
    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <form action="{{ route('admin_extracurricular_grade_submit') }}" method="POST">
                    @csrf
                    <div class="table-responsive">
                        <table class="table table-bordered" id="example1">
                            <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Nama</th>
                                    <th>Ekstrakulikuler</th>
                                    <th>Nilai Akhir</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($members as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->Extracurricular->nama_eskul }}</td>
                                        <td>
                                            @php
                                                // Mengecek apakah ada nilai yang sudah diupdate untuk user ini
                                                $nilai = $nilaiData->firstWhere('user_id', $item->id);
                                            @endphp

                                            <input type="hidden" name="user_id[]" value="{{ $item->id }}">
                                            <input type="hidden" name="eskul_id[]" value="{{ $item->Extracurricular->id }}">

                                            @if($nilai)
                                                <!-- Menampilkan nilai yang sudah diupdate -->
                                                <select name="nilai_akhir[]" class="form-control">
                                                    <option value="A" {{ $nilai->nilai_akhir == 'A' ? 'selected' : '' }}>A</option>
                                                    <option value="B" {{ $nilai->nilai_akhir == 'B' ? 'selected' : '' }}>B</option>
                                                    <option value="C" {{ $nilai->nilai_akhir == 'C' ? 'selected' : '' }}>C</option>
                                                    <option value="D" {{ $nilai->nilai_akhir == 'D' ? 'selected' : '' }}>D</option>
                                                </select>
                                            @else
                                                <!-- Menampilkan dropdown untuk memasukkan nilai baru jika belum ada -->
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
                            </tbody>
                        </table>
                        <button type="submit" class="btn btn-primary">Simpan Nilai </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
