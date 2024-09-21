@extends('admin.layout.app')

@section('heading', 'All Comentars')

@section('button_section')


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
                                  <th>Berita Id</th>
                                  <th>User Id</th>
                                  <th>Isi Komentar</th>
                                  <th>Created</th>
                                  <th>Action</th>
                              </tr>
                          </thead>

                          <tbody>
                                  <tr>
                                      <td>1</td>
                                      <td>2</td>
                                      <td>9</td>
                                      <td>kj</td>
                                      <td>2006</td>
                                      <td class="pt_10 pb_10">
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
