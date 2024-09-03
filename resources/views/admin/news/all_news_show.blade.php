@extends('admin.layout.app')

@section('heading', 'All News')

@section('button_section')

<a href="" class="btn btn-primary">Add New <span class="ti ti-plus"></span></a>

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
                                  <th>Judul Berita</th>
                                  <th>Photo</th>
                                  <th>Tanggal</th>
                                  <th>Kategori</th>
                                  <th>Action</th>
                              </tr>
                          </thead>

                          <tbody>
                            {{-- @foreach ($admin_eskul as $item ) --}}
                                  <tr>
                                      <td>1</td>
                                      <td>Mengikuti Lomba</td>
                                      <td><img src="{{asset('dist_front/assets/images/post-1.jpg')}}" style="width: 200px; height: 100px;"></img></td>
                                      <td>22/08/2024</td>
                                      <td>WJLRC</td>
                                      <td class="pt_10 pb_10">
                                        <a href="" class="btn btn-primary">Edit</a>
                                        <a href="" class="btn btn-danger"
                                            onClick="return confirm('Are you sure?');">Delete</a>
                                    </td>
                                  </tr>
                          </tbody>
                      </table>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>

@endsection
