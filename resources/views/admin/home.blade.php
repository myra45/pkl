@extends('admin.layout.app')

@section('heading', 'Dashboard')

@section('main_content')

<div class="row">
  <div class="col-lg-3 col-md-6">
    <div class="card">
      <div class="card-body">
        <div class="d-flex flex-row gap-6 align-items-center">
          <div class="round-40 rounded-circle text-white d-flex align-items-center justify-content-center text-bg-primary">
            <i class="ti ti-users fs-6"></i>
          </div>
          <div class="align-self-center">
            <h4 class="card-title mb-1">All Admin</h4>
            <p class="card-subtitle">{{ $all_admin_eskul }}</p>
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
            <i class="ti ti-users fs-6"></i>
          </div>
          <div class="align-self-center">
            <h4 class="card-title mb-1">All Member</h4>
            <p class="card-subtitle">{{ $all_members }}</p>
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
            <i class="ti ti-x fs-6"></i>
          </div>
          <div class="align-self-center">
            <h4 class="card-title mb-1">All Eskul</h4>
            <p class="card-subtitle">{{ $all_eskuls }}</p>
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
            <i class="ti ti-news fs-6"></i>
          </div>
          <div class="align-self-center">
            <h4 class="card-title mb-1">All News</h4>
            <p class="card-subtitle">{{ $all_beritas }}</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>



@endsection
