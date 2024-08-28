@extends('admin_eskul.layout.app')

@section('heading', 'Member Eskul')

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
                                    @foreach ($user as $userItem)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $userItem->name }}</td>
                                            <td>{{ $userItem->email }}</td>
                                            <td>{{ $userItem->Extracurricular->nama_eskul }}</td>
                                            <td class="pt_10 pb_10">
                                                <a href="{{ route('member_delete', $userItem->id) }}" class="btn btn-danger"
                                                    onClick="return confirm('Are you sure?');">Delete</a>
                                            </td>
                                        </tr>
                                    @endforeach


                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
