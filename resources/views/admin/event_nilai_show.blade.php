@extends('admin.layout.app')

@section('heading', 'Event Assessment')

@section('main_content')
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header bg-primary">
                    <h5 class="text-white">Event Created: </h5>
                </div>
                <div class="card-body">
                        <ul class="">
                          @foreach ($event as $item)
                          <li class="d-flex justify-content-between">
                            <div class="h5">{{ $item->nama_event }}
                                <span><p class="fw-normal fs-3 mt-2">Date : {{ $item->tanggal }}</p></span>
                              </div>
                              @if ($item->status = 'Aktif')
                              <div class="left-side">
                                <span class="mb-3 badge bg-primary">Active</span>
                              </div>
                              @endif
                          </li>
                          @endforeach
                        </ul>
                </div>
            </div>
        </div>
        <div class="col-md-6">
          <div class="header">
              <div class="border-bottom title-part-padding px-0 mb-3">
                  <h5>Quick Links <span class="ti ti-link align-items-center"></span> </h5>
              </div>
          </div>
          <div class="d-flex">
                        <div class="col-md-4 col-sm-4">
              <div class="card p-4 me-3">
                    <p class="fw-bold fs-5 mb-3">
                      All Task
                    </p>
                    <a href="{{ route('event_nilai_all') }}" class="btn btn-sm btn-primary">View All</a>
              </div>
            </div>
            <div class="col-md-4 col-sm-4">
              <div class="card p-4 me-3">
                    <p class="fw-bold fs-5 mb-3">
                      Create Task
                    </p>
                    <a href="{{ route('event_nilai_create') }}" class="btn btn-sm btn-primary">Create</a>
              </div>
            </div>
          </div>
          </div>
      </div>
    </div>
    </div>


@endsection
