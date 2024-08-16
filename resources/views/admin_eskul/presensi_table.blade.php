@extends('admin_eskul.layout.app')

@section('heading', 'Presensi')

@section('main_content')
<div class="section-body">
  <div class="row">
      <div class="col-12">
          <div class="card">
              <div class="card-body">
                <form action="" method="POST">
                  <div class="table-responsive">
                      <table class="table table-bordered" id="example1">
                          <thead>
                              <tr>
                                  <th>SL</th>
                                  <th>Name</th>
                                  <th>Ekstrakulikuler</th>
                                  <th>Status</th>
                              </tr>
                          </thead>

                          <tbody>
                                  <tr>
                                      <td>1</td>
                                      <td>Shine</td>
                                      <td>WJLRC</td>
                                      <td>
                                        <select name="status_absensi" class="form-control">
                                        <option value="hadir">Hadir</option>
                                        <option value="Sakit">Sakit</option>
                                        <option value="Izin">Izin</option>
                                        <option value="Tanpa Keterangan">Tanpa Keterangan</option>
                                    </select>
                                  </td>
                                  </tr>
                                  <tr>
                                      <td>2</td>
                                      <td>Moon</td>
                                      <td>DKM</td>
                                      <td>
                                        <select name="status_absensi" class="form-control">
                                        <option value="hadir">Hadir</option>
                                        <option value="Sakit">Sakit</option>
                                        <option value="Izin">Izin</option>
                                        <option value="Tanpa Keterangan">Tanpa Keterangan</option>
                                    </select>
                                  </td>
                                  </tr>
                          </tbody>
                      </table>
                      <button type="submit" class="btn btn-primary">Simpan Absensi</button>
                  </div>
                </form>
              </div>
          </div>
      </div>
  </div>
</div>

@endsection
