@extends('admin.layout.app')

@section('heading', 'Kontak Section')

@section('button_section')

<a href="{{route('home_kontak_add')}}" class="btn btn-primary">Add New </a>

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
                                  <th>Nama</th>
                                  <th>Kelas</th>
                                  <th>Action</th>
                              </tr>
                          </thead>

                          <tbody>
                                @foreach ($kontak as $item)
                                <tr>
                                    <td>{{ $loop->iteration}}</td>
                                    <td>{{ $item->nama_developer}}</td>
                                    <td>{{ $item->kelas_developer}}</td>
                                    <td class="pt_10 pb_10">
                                      <a href="{{ route('home_kontak_edit', $item->id) }}" class="btn btn-primary">Edit</a>
                                      <a href="{{ route('home_kontak_delete', $item->id) }}" class="btn btn-danger"
                                          onClick="return confirm('Are you sure?');">Delete</a>
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
  </div>
</div>

@endsection
