@extends('admin_eskul.layout.app')

@section('heading', 'Nilai Akhir')

@section('button_section')
<a href="{{ route('presensi_history_all') }}" class="btn btn-primary">Back</a>
@endsection

@section('main_content')
    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <form action="">
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
                                            <input type="hidden" name="eskul_id" value="{{ $item->Extracurricular->id }}">
                                            <input type="hidden" name="user_id" value="{{ $item->id }}">
                                            <select name="nilai" class="form-control">
                                                <option value="A">A</option>
                                                <option value="B">B</option> 
                                                <option value="C">C</option>
                                                <option value="D">D</option>
                                            </select>
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
