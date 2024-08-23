@extends('admin.layout.app')

@section('heading', 'Edit Admin Eskul')

@section('button_section')
  <a href="{{ route('admin_show') }}" class="btn btn-primary">Back</a>
@endsection

@section('main_content')
    <div class="card">
        <div class="card-body">
            <form method="POST" action="{{ route('admin_update', $row_data->id) }}">
              @csrf
                <div class="row">
                    <div class="col-md-9">
                        <div class="mb-3">
                          <label for="name" class="form-label">Nama</label>
                          <input type="text"
                              class="form-control" id="name" name="name" value="{{ $row_data->name }}" autofocus>
                      </div>
                      <div class="mb-3">
                          <label for="email" class="form-label">Alamat Email</label>
                          <input type="email"
                              class="form-control" id="email" name="email" value="{{ $row_data->email }}" autofocus>
                      </div>
                    <div class="mb-4">
                      <label for="eskul" class="form-label">Ekstrakulikuler</label>
                      <select name="eskul_id" class="form-control select2">
                          @foreach ($eskuls as $item)
                              <option value="{{ $item->id}}" 
                                @if ( $item->id == $row_data->eskul_id) 
                                selected 
                                @endif>
                                  {{ $item->nama_eskul }}</option>  
                          @endforeach
                      </select>
                  </div>

                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
            </form>
        </div>
    </div>

@endsection
