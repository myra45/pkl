@extends('admin.layout.app')

@section('heading', 'Dashboard Extracuricullar')

@section('main_content')

<div class="row">
  <div class="col-lg-3 col-md-6">
    <div class="card">
      <div class="card-body">
        <div class="d-flex flex-row gap-6 align-items-center">
          <div class="round-40 rounded-circle text-white d-flex align-items-center justify-content-center text-bg-primary">
            <i class="ti ti-clipboard-check fs-6"></i>
          </div>
          <div class="align-self-center">
            <h4 class="card-title mb-1">Presensi</h4>
            <p class="card-subtitle">5</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-3 col-md-6">
    <div class="card">
      <div class="card-body">
        <div class="d-flex flex-row gap-6 align-items-center">
          <div class="round-40 rounded-circle text-white d-flex align-items-center justify-content-center text-bg-success">
            <i class="ti ti-checklist fs-6"></i>
          </div>
          <div class="align-self-center">
            <h4 class="card-title mb-1">Tugas</h4>
            <p class="card-subtitle">5</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-3 col-md-6">
    <div class="card">
      <div class="card-body">
        <div class="d-flex flex-row gap-6 align-items-center">
          <div class="round-40 rounded-circle text-white d-flex align-items-center justify-content-center text-bg-warning">
            <i class="ti ti-users fs-6"></i>
          </div>
          <div class="align-self-center">
            <h4 class="card-title mb-1">Members</h4>
            <p class="card-subtitle">110</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-3 col-md-6">
    <div class="card">
      <div class="card-body">
        <div class="d-flex flex-row gap-6 align-items-center">
          <div class="round-40 rounded-circle text-white d-flex align-items-center justify-content-center text-bg-danger">
            <i class="ti ti-speakerphone fs-6"></i>
          </div>
          <div class="align-self-center">
            <h4 class="card-title mb-1">Event</h4>
            <p class="card-subtitle">5</p>
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
