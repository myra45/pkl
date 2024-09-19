@extends('admin_eskul.layout.app')

@section('heading', 'Member Eskul')

@section('button_section')
    <div class="d-flex">
        <form action="{{ route('member_eskul_show') }}" method="GET" class="d-flex">
            <div class="form-group">
                <input type="text" name="search" id="search" class="form-control" value="{{ request()->input('search') }}"
                    placeholder="Cari...">
            </div>
            <button type="submit" class="btn btn-secondary ms-2"><i class="ti ti-search"></i></button>
        </form>
        {{-- Tombol Kembali akan muncul jika ada pencarian --}}
        @if (request()->input('search'))
            <a href="{{ route('member_eskul_show') }}" class="btn btn-warning ms-2">Kembali <i
                    class="ti ti-arrow-left"></i></a>
        @endif
    </div>
@endsection

@section('main_content')
    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="">
                    <div class="">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="example1">
                                <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Nama Eskul</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @if ($user_eskul->count() > 0)
                                        @foreach ($user_eskul as $item)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $item->name }}</td>
                                                <td>{{ $item->email }}</td>
                                                <td>{{ $item->Extracurricular?->nama_eskul }}</td>
                                                <td>
                                                    <a href="{{ route('member_eskul_delete', $item->id) }}" class="btn btn-danger"
                                                        onClick="return confirm('Are you sure?');">Delete</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <tr>
                                            <td colspan="5" class="text-center">No data found for '{{ $search }}'
                                            </td>
                                        </tr>
                                    @endif
                                </tbody>
                            </table>
                            {{-- Pembungkus Pagination --}}
                            <div class="paginate-wrapper mt-4">
                                {{ $user_eskul->links('pagination::bootstrap-5') }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
