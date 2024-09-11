@extends('admin.layout.app')

@section('heading', 'Profile')

@section('button_section')



@endsection


@section('main_content')
    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('admin_profile_submit') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="card-body p-0">
                                        <div class="">
                                            <div class="d-flex justify-content-center mb-2">
                                                <div class="mb-4">
                                                    <div class="border border-4 border-white rounded overflow-hidden mb-4">
                                                        <img src="{{ auth()->user()->profile_picture_url }}" alt="Profile Picture" class="w-100 h-100">
                                                    </div>
                                                    <div class="mb-4">
                                                        <input type="file" name="photo" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="mb-4">
                                        <label class="form-label">Name</label>
                                        <input type="text" class="form-control" name="name"
                                            value="{{ Auth::user()->name }}">
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label">Email</label>
                                        <input type="text" class="form-control" name="email"
                                            value="{{ Auth::user()->email }}">
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label">Password</label>
                                        <input type="password" class="form-control" name="password">
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label">Retype Password</label>
                                        <input type="password" class="form-control" name="retype_password">
                                    </div>
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
