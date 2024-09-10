@extends('user.layout.app')

@section('heading', 'Tugas Saya')

@section('main_content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header bg-primary">
                <h5 class="text-white">Tugas Saya:</h5>
            </div>
            <div class="card-body">
                @if($user_tasks->count() > 0)
                    <ul>
                        @foreach($user_tasks as $task)
                        <li>
                            <div class="h5 d-flex justify-content-between mb-1">
                                • {{ $task->judul_tugas }}
                                <span><p class="fw-normal fs-3">{{ $task->tanggal }}</p></span>
                            </div>
                            <p>{!! nl2br($task->deskripsi) !!}</p>
                            <span class="badge {{ $task->status == 'selesai' ? 'bg-success' : 'bg-warning' }}">
                                {{ $task->status == 'selesai' ? 'Selesai' : 'Belum Selesai' }}
                            </span>
                        </li>
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
