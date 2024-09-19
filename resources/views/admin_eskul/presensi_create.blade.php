@extends('admin_eskul.layout.app')

@section('heading', 'Create a Presence')

@section('button_section')
<a href="{{ route('presensi_history_all') }}" class="btn btn-primary">Back</a>
@endsection

@section('main_content')

<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-body">
          <form method="POST" action="{{ route('admin_extracurricular_presensi_form_submit') }}">
              @csrf
              <input type="hidden" name="eskul_id" value="{{ $admin_data?->eskul_id }}">
              <div class="mb-3">
                  <label for="eventName" class="form-label">Event Name</label>
                  <input type="text" class="form-control " id="eventName" name="nama_event">
              </div>
              <div class="mb-3">
                  <label for="tanggal" class="form-label">Date</label>
                  <input type="date" class="form-control" id="tanggal" name="tanggal">
              </div>
              <div class="mb-3">
                  <label for="jamMulai" class="form-label">Start Time</label>
                  <input type="time" class="form-control" id="jamMulai" name="jam_mulai">
              </div>
              <div class="mb-3">
                  <label for="tempat" class="form-label">Place</label>
                  <input type="text" class="form-control" id="tempat" name="tempat">
              </div>

              <button type="submit" class="btn btn-primary">Create a Presence</button>
          </form>
      </div>
  </div>
  </div>
</div>

@endsection