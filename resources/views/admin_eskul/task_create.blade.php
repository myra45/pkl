@extends('admin_eskul.layout.app')

@section('heading', 'Create Task')

@section('button_section')
<a href="{{ route('admin_extracurricular_task_manajement_all') }}" class="btn btn-primary">Back</a>
@endsection

@section('main_content')

<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-body">
          <form method="POST" action="{{ route('admin_extracurricular_task_manajement_create_submit') }}">
              @csrf
              <input type="hidden" name="admin_id" value="{{ $user->id }}">
              <input type="hidden" name="eskul_id" value="{{ $eskul_data->Extracurricular->id }}">
              <div class="mb-3">
                  <label for="tanggal" class="form-label">Tanggal</label>
                  <input type="date" class="form-control" id="tanggal" name="tanggal">
              </div>
              <div class="mb-3">
                  <label for="judul" class="form-label">Judul Tugas</label>
                  <input type="text" class="form-control" id="judul_tugas" name="judul">
              </div>
              <div class="mb-3">
                  <label for="deskripsi" class="form-label">Deskripsi</label>
                  <textarea name="deskripsi" class="form-control" id="" cols="30" rows="10"></textarea>
              </div>
              <select name="status" id="" hidden>
                <option value="Belum Selesai">Belum Selesai</option>
                <option value="Selesai">Selesai</option>
              </select>
              <button type="submit" class="btn btn-primary">Buat Tugas</button>
          </form>
      </div>
  </div>
  </div>
</div>

@endsection