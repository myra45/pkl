@extends('admin.layout.app')

@section('heading', 'Testimonial Section')

@section('button_section')

    <div class="d-flex">
        <form action="{{ route('home_testimonial_show') }}" method="GET" class="d-flex">
            <div class="form-group">
                <input type="text" name="search" id="search" class="form-control" value="{{ request()->input('search') }}"
                    placeholder="Search...">
            </div>
            <button type="submit" class="btn btn-secondary ms-2"><i class="ti ti-search"></i></button>
        </form>
        <a href="{{ route('home_testimonial_bg') }}" class="btn btn-primary ms-2" data-bs-toggle="tooltip"
            data-bs-placement="top" title="Bg"><span class="ti ti-photo"></span></a>
        <a href="{{ route('home_testimonial_add') }}" class="btn btn-primary ms-2" data-bs-toggle="tooltip"
            data-bs-placement="top" title="Add New"><span class="ti ti-plus"></span></a>


        {{-- Tombol Kembali akan muncul jika ada pencarian --}}
        @if (request()->input('search'))
            <a href="{{ route('home_testimonial_show') }}" class="btn btn-warning ms-2">Kembali <i
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
                                        <th>Nama</th>
                                        <th>Ekstrakulikuler</th>
                                        <th>Deskripsi</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @if ($testimonial->count() > 0)
                                        @foreach ($testimonial as $item)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $item->nama }}</td>
                                                <td>{{ $item->eskul }}</td>
                                                <td>{{ \Illuminate\Support\Str::words($item->desc, 5, '...') }}</td>
                                                <td class="pt_10 pb_10">
                                                    <a href="{{ route('home_testimonial_edit', $item->id) }}"
                                                        class="btn btn-primary me-2">Edit</a>
                                                    <a href="{{ route('home_testimonial_delete', $item->id) }}"
                                                        class="btn btn-danger "
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
                                {{ $testimonial->links('pagination::bootstrap-5') }}
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
