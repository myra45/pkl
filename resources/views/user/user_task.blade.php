@extends('user.layout.app')

@section('heading', 'All Task')

@section('main_content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header bg-primary">
                <h5 class="text-white">My Task:</h5>
            </div>
            <div class="card-body">
                        @if($user_tasks->count() > 0)
                    <ul class="list-group list-group-flush">
                        @foreach($user_tasks as $task)
                        @if ($task->status == ' Belum Selesai')
                        <li class="list-group-item mb-2  list-group-item-warning rounded p-3">
                            <ul class="h5 d-flex justify-content-between">
                                <div>
                                    {{ $task->judul_tugas }} <span><p class="fw-normal fs-3 mt-2">{{ $task->tanggal }}</p></span>
                                </div>
                                <div class="left-side">
                                <span class="badge {{ $task->status == 'Belum Selesai' ? 'bg-warning' : '' }}">
                                    {{ $task->status == 'Selesai' ? 'Selesai' : 'Belum Selesai' }}
                                </span>
                                </div>
                            </ul>
                            <p>{!! nl2br(e($task->deskripsi)) !!}</p>
                        </li>                              
                        @endif
                        @endforeach
                    </ul>
                @else
                    <p>Belum ada tugas yang diberikan.</p>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
