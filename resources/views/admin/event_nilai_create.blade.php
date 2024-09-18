@extends('admin.layout.app')

@section('heading', 'Create Event Penilaian')

@section('button_section')
<a href="{{ route('event_nilai_all') }}" class="btn btn-primary">Back</a>
@endsection

@section('main_content')

<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-body">
          <form method="POST" action="{{ route('event_nilai_create_submit') }}">
              @csrf
              <div class="mb-3">
                  <label for="nama" class="form-label">Nama Event</label>
                  <input type="text" class="form-control" id="nama" name="nama_event">
              </div>
              <div class="mb-3">
                  <label for="tanggal" class="form-label">Tanggal</label>
                  <input type="date" class="form-control" id="tanggal" name="tanggal">
              </div>
              <button type="submit" class="btn btn-primary">Buat Event</button>
          </form>
      </div>
  </div>
  </div>
</div>

@endsection