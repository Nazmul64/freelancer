@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header bg-success text-white">Profile Setting</div>
                    @if (session('photoname'))
                        <span class="alert alert-success">{{ session('photoname') }}</span>
                    @endif
                    <div class="card-body">
                        <form method="POST"action="{{ route('profilesetting') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="mt-2">
                                <label>Name</label>
                                <input
                                    type="text"class="form-control  @error('name') is-invalid @enderror "name="name"value="
                                    {{ Auth::user()->name }}">
                                @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mt-2">
                                <img class="card-img-top"
                                    src="{{ asset('uploads/profile_photos/' . Auth::user()->profile_photo) }}"
                                    alt="Card image cap">
                                <input type="file"class="form-control  @error('profile_photo') is-invalid @enderror "name="profile_photo">
                                          @error('profile_photo')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                       </div>
                                       <button type="submit" class="btn btn-success mt-2">update</button>
                                   </form>
                        </div>
                    </div>
                </div>
                   <div class="col-md-6">
                    <div class="card">
                        <div class="card-header bg-success text-white">Password Change</div>
                          @if (session('password'))
                                <span class="alert alert-success">{{ session('password') }}</span>
                          @endif
                                <div class="card-body">
                                    <form method="POST"action="{{ route('chagepassword') }}">
                                        @csrf
                                        <div class="mt-2">
                                            <label>Old Password</label>
                                            <input
                                                type="text"class="form-control  @error('old_password') is-invalid @enderror "name="old_password">
                                            @error('old_password')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                         <div class="mt-2">
                                            <label>New Password</label>
                                            <input
                                                type="text"class="form-control  @error('password') is-invalid @enderror "name="password">
                                            @error('password')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                         <div class="mt-2">
                                            <label>confirm password</label>
                                            <input
                                                type="text"class="form-control  @error('confirm_password') is-invalid @enderror "name="confirm_password">
                                            @error('confirm_password')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                       <button type="submit" class="btn btn-success mt-2">update</button>
                                   </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
