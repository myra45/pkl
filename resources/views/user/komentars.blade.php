@extends('user.layout.app')

@section('heading', 'All Comentars')

@section('button_section')

<div class="d-flex">
    <form action="{{ route('user_komentar') }}" method="GET" class="d-flex">
        <div class="form-group">
            <input type="text" name="search" id="search" class="form-control" value="{{ request()->input('search') }}"
                placeholder="Search...">
        </div>
        <button type="submit" class="btn btn-secondary ms-2"><i class="ti ti-search"></i></button>
    </form>

    {{-- Tombol Kembali akan muncul jika ada pencarian --}}
    @if (request()->input('search'))
        <a href="{{ route('user_komentar') }}" class="btn btn-warning ms-2">Back <i class="ti ti-arrow-left"></i></a>
    @endif
</div>

@endsection

@section('main_content')
<div class="section-body">
  <div class="row">
      <div class="col-12">

          <div class="card">
            <div class="card-body">
                @if($komen->count() > 0)
                <ul class="list-group list-group-flush">
                    @foreach($komen as $item)
                    <li class="list-group-item mb-2  list-group-item-warning rounded p-3">
                        <ul class="h5">
                            <div class="d-flex justify-content-between">
                                Judul Artikel : {{ $item->berita->judul }} <span><p class="fw-normal fs-3">Tanggal : {{ $item->created_at->format('d M Y') }}</p></span>
                            </div>
                        </ul>
                        <p>Isi Komentar : {!! nl2br(e($item->isi_komentar)) !!}</p>
                        <form action="{{ route('user_komentar_delete', $item->id) }}" method="POST" onsubmit="return confirm('Are you sure?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                        </form>

                    </li> 
                    @endforeach
                </ul>
                @else
                <tr>
                    <td colspan="5" class="text-center">No data found for '{{ $search }}'</td>
                </tr>
            @endif
            </div>
          </div>
      </div>
  </div>
</div>

@endsection
