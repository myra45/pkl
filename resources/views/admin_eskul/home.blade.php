@extends('admin_eskul.layout.app')

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
            <h4 class="card-title mb-1">Presence</h4>
            <p class="card-subtitle">{{ $all_presensi }}</p>
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
            <h4 class="card-title mb-1">Task</h4>
            <p class="card-subtitle">{{ $all_task }}</p>
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
            <p class="card-subtitle">{{ $all_member }}</p>
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
            <h4 class="card-title mb-1">Score</h4>
            <p class="card-subtitle">{{ $all_nilai }}</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-lg-8 d-flex align-items-stretch">
      <div class="card w-100">
          <div class="card-body">
              <div class="d-sm-flex d-block align-items-center justify-content-between mb-9">
                  <div class="mb-3 mb-sm-0">
                      <h5 class="card-title fw-semibold">Kehadiran Bulanan</h5>
                  </div>
              </div>
              <canvas id="monthlyAttendanceChart"></canvas>
          </div>
      </div>
  </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
  const ctx = document.getElementById('monthlyAttendanceChart').getContext('2d');
  new Chart(ctx, {
      type: 'bar',
      data: {
          labels: @json($monthlyAttendance->pluck('month')),
          datasets: [{
              label: 'Jumlah Kehadiran',
              data: @json($monthlyAttendance->pluck('total_attendance')),
              backgroundColor: 'rgba(75, 192, 192, 0.2)',
              borderColor: 'rgba(75, 192, 192, 1)',
              borderWidth: 1
          }]
      },
      options: {
          scales: {
              y: {
                  beginAtZero: true
              }
          }
      }
  });
</script>


@endsection
