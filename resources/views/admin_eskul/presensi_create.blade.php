@extends('admin_eskul.layout.app')

@section('heading', 'Presensi')

@section('main_content')
<div class="border-bottom title-part-padding px-0 mb-3">
  <h5>Buat Presensi</h5>
</div>

<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-body">
          <form method="POST" action="{{ route('admin_extracurricular_presensi_form_submit') }}">
              @csrf
              <input type="hidden" name="eskul_id" value="{{ $admin_data?->eskul_id }}">
              <div class="mb-3">
                  <label for="eventName" class="form-label">Nama Event</label>
                  <input type="text" class="form-control " id="eventName" name="nama_event">
              </div>
              <div class="mb-3">
                  <label for="tanggal" class="form-label">Tanggal</label>
                  <input type="date" class="form-control" id="tanggal" name="tanggal">
              </div>
              <div class="mb-3">
                  <label for="jamMulai" class="form-label">Jam Mulai</label>
                  <input type="time" class="form-control" id="jamMulai" name="jam_mulai">
              </div>
              <div class="mb-3">
                  <label for="tempat" class="form-label">Tempat</label>
                  <input type="text" class="form-control" id="tempat" name="tempat">
              </div>

              <button type="submit" class="btn btn-primary">Buat Presensi</button>
          </form>
      </div>
  </div>
  </div>
</div>

@endsection