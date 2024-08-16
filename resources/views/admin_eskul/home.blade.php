@extends('admin_eskul.layout.app')

@section('heading', 'Dashboard Extracuricullar')

@section('main_content')

<div class="owl-carousel counter-carousel owl-theme owl-loaded owl-drag">

  <div class="owl-stage-outer">

    <div class="owl-item cloned" style="width: 185px;">
      <div class="item">
          <div class="card border-0 zoom-in bg-warning-subtle shadow-none">
              <div class="card-body">
                  <div class="text-center">
                      <img src="{{ asset('dist/images/products/icon-user-male.svg') }}" width="50" height="55"
                          class="mb-3" alt="modernize-img">
                      <p class="fw-semibold fs-3 text-warning mb-1">Presensi Member</p>
                      <h5 class="fw-semibold text-warning mb-0"><a href="{{ route('admin_extracurricular_presensi_form') }}" class="text-warning">Buat</a></h5>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <div class="owl-item cloned" style="width: 185px; margin-left: 20px;">
    <div class="item">
        <div class="card border-0 zoom-in bg-success-subtle shadow-none">
            <div class="card-body">
                <div class="text-center">
                    <img src="{{ asset('dist/images/products/icon-user-male.svg') }}" width="50" height="55"
                        class="mb-3" alt="modernize-img">
                    <p class="fw-semibold fs-3 text-success mb-1">Hadir</p>
                    <h5 class="fw-semibold text-success mb-0">124 Orang</h5>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="owl-item cloned" style="width: 185px; margin-left: 20px;">
  <div class="item">
      <div class="card border-0 zoom-in bg-primary-subtle shadow-none">
          <div class="card-body">
              <div class="text-center">
                <img src="{{ asset('dist/images/products/icon-user-male.svg') }}" width="50" height="55"
                class="mb-3" alt="modernize-img">
                  <p class="fw-semibold fs-3 text-primary mb-1">Sakit</p>
                  <h5 class="fw-semibold text-primary mb-0">3 Orang</h5>
              </div>
          </div>
      </div>
  </div>
</div>

<div class="owl-item cloned" style="width: 185px; margin-left: 20px;">
  <div class="item">
      <div class="card border-0 zoom-in bg-warning-subtle shadow-none">
          <div class="card-body">
              <div class="text-center">
                  <img src="{{ asset('dist/images/products/icon-user-male.svg') }}" width="50" height="50"
                      class="mb-3" alt="modernize-img">
                  <p class="fw-semibold fs-3 text-warning mb-1">Izin</p>
                  <h5 class="fw-semibold text-warning mb-0">4 Orang</h5>
              </div>
          </div>
      </div>
  </div>
</div>

<div class="owl-item cloned" style="width: 185px; margin-left: 20px;">
    <div class="item">
        <div class="card border-0 zoom-in bg-danger-subtle shadow-none">
            <div class="card-body">
                <div class="text-center">
                    <img src="{{ asset('dist/images/products/icon-user-male.svg') }}" width="50" height="50"
                        class="mb-3" alt="modernize-img">
                    <p class="fw-semibold fs-3 text-danger mb-1">Alpa</p>
                    <h5 class="fw-semibold text-danger mb-0">6 Orang</h5>
                </div>
            </div>
        </div>
    </div>
  </div>

</div>

</div>

  <div class="row">
    <div class="col-lg-8 d-flex align-items-strech">
      <div class="card w-100">
        <div class="card-body">
          <div class="d-sm-flex d-block align-items-center justify-content-between mb-9">
            <div class="mb-3 mb-sm-0">
              <h5 class="card-title fw-semibold">Sales Overview</h5>
            </div>
            <div>
              <select class="form-select">
                <option value="1">March 2023</option>
                <option value="2">April 2023</option>
                <option value="3">May 2023</option>
                <option value="4">June 2023</option>
              </select>
            </div>
          </div>
          <div id="chart"></div>
        </div>
      </div>
    </div>
    <div class="col-lg-4">
      <div class="row">
        <div class="col-lg-12">
          <!-- Yearly Breakup -->
          <div class="card overflow-hidden">
            <div class="card-body p-4">
              <h5 class="card-title mb-9 fw-semibold">Yearly Breakup</h5>
              <div class="row align-items-center">
                <div class="col-8">
                  <h4 class="fw-semibold mb-3">$36,358</h4>
                  <div class="d-flex align-items-center mb-3">
                    <span
                      class="me-1 rounded-circle bg-light-success round-20 d-flex align-items-center justify-content-center">
                      <i class="ti ti-arrow-up-left text-success"></i>
                    </span>
                    <p class="text-dark me-1 fs-3 mb-0">+9%</p>
                    <p class="fs-3 mb-0">last year</p>
                  </div>
                  <div class="d-flex align-items-center">
                    <div class="me-4">
                      <span class="round-8 bg-primary rounded-circle me-2 d-inline-block"></span>
                      <span class="fs-2">2023</span>
                    </div>
                    <div>
                      <span class="round-8 bg-light-primary rounded-circle me-2 d-inline-block"></span>
                      <span class="fs-2">2023</span>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="d-flex justify-content-center">
                    <div id="breakup"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-12">
          <!-- Monthly Earnings -->
          <div class="card">
            <div class="card-body">
              <div class="row alig n-items-start">
                <div class="col-8">
                  <h5 class="card-title mb-9 fw-semibold"> Monthly Earnings </h5>
                  <h4 class="fw-semibold mb-3">$6,820</h4>
                  <div class="d-flex align-items-center pb-1">
                    <span
                      class="me-2 rounded-circle bg-light-danger round-20 d-flex align-items-center justify-content-center">
                      <i class="ti ti-arrow-down-right text-danger"></i>
                    </span>
                    <p class="text-dark me-1 fs-3 mb-0">+9%</p>
                    <p class="fs-3 mb-0">last year</p>
                  </div>
                </div>
                <div class="col-4">
                  <div class="d-flex justify-content-end">
                    <div
                      class="text-white bg-secondary rounded-circle p-6 d-flex align-items-center justify-content-center">
                      <i class="ti ti-currency-dollar fs-6"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div id="earning"></div>
          </div>
        </div>
      </div>
    </div>
  </div>


@endsection
