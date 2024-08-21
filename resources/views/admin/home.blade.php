@extends('admin.layout.app')

@section('heading','Dashboard')

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
                      <p class="fw-semibold fs-3 text-warning mb-1">Admin Eskul</p>
                      <h5 class="fw-semibold text-warning mb-0"><a href="{{ route('add_admin') }}" class="text-warning">Tambah Admin</a></h5>
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
                    {{-- <img src="{{ asset('dist/images/products/icon-user-male.svg') }}" width="50" height="55"
                        class="mb-3" alt="modernize-img"> --}}
                    <p class="fw-semibold fs-3 text-success mb-1">Admin Eskul</p>
                    <h5 class="fw-semibold text-success mb-0">8 Orang</h5>
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
                {{-- <img src="{{ asset('dist/images/products/icon-user-male.svg') }}" width="50" height="55"
                class="mb-3" alt="modernize-img"> --}}
                  <p class="fw-semibold fs-3 text-primary mb-1">Ekstrakulikuler</p>
                  <h5 class="fw-semibold text-primary mb-0">12 Eskul</h5>
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
                  {{-- <img src="{{ asset('dist/images/products/icon-user-male.svg') }}" width="50" height="50"
                      class="mb-3" alt="modernize-img"> --}}
                  <p class="fw-semibold fs-3 text-warning mb-1">Event</p>
                  <h5 class="fw-semibold text-warning mb-0">40 Event</h5>
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
                    {{-- <img src="{{ asset('dist/images/products/icon-user-male.svg') }}" width="50" height="50"
                        class="mb-3" alt="modernize-img"> --}}
                    <p class="fw-semibold fs-3 text-danger mb-1">Track</p>
                    <h5 class="fw-semibold text-danger mb-0">123 </h5>
                </div>
            </div>
        </div>
    </div>
  </div>

</div>

</div>
  

@endsection