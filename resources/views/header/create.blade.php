@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-success text-white">Header Parts</div>
                    @if (session('photoname'))
                        <span class="alert alert-success">{{ session('photoname') }}</span>
                    @endif
                    @if (session('insert'))
                        <span class="alert alert-success">{{ session('insert') }}</span>
                    @endif
                    <div class="card-body">
                        <form action="{{ route('header.store') }}"method="POST"enctype="multipart/form-data">
                            @csrf
                            <div class="mt-2">
                                <label>Title_name</label>
                                <input type="text"class="form-control  @error('title_name') is-invalid @enderror "name="title_name"placeholder="Enter Your Title Name">
                                @error('title_name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mt-2">
                                <label>Full-description</label>
                                <textarea type="text"class="form-control @error('title_description') is-invalid @enderror "name="title_description"rows="5" placeholder="Enter Your Full-description"></textarea>
                                @error('title_description')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            {{-- <div class="mt-2">
                                <label>Robert_Fox</label>
                                <input type="file"class="form-control @error('robert_fox') is-invalid @enderror"name="robert_fox">
                                 @error('robert_fox')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mt-2">
                                <label>michel_jones</label>
                                <input type="file"class="form-control @error('michel_jones') is-invalid @enderror"name="michel_jones">
                                 @error('michel_jones')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div> --}}
                            <div class="mt-2">
                                <label>Header_photo</label>
                                <input type="file"class="form-control @error('header_photo') is-invalid @enderror"name="header_photo">
                                 @error('header_photo')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                           <button type="submit" class="btn btn-success mt-2">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
@endsection
