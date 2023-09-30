@extends('admin.layout.app')
@section('content')
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">

                                <li class="breadcrumb-item active">Edit Experience</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Edit Experience</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <!-- Form row -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <form id="myForm" method="post" action="{{ route('experience-update') }}">
                                @csrf
                                <input type="hidden" name="id" value="{{ $data->id }}">

                                <div class="row">
                                    <div class="form-group col-md-6 mb-3">
                                        <label for="inputEmail4" class="form-label"> Name </label>
                                        <input type="text" name="name" class="form-control" id="inputEmail4"
                                            placeholder="Enter Company Name" value="{{ $data->name }}">
                                        @error('name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6 mb-3">
                                        <label for="inputEmail4" class="form-label">Year </label>
                                        <input type="text" name="year" class="form-control" id="inputEmail4"
                                            placeholder="Enter Experience Year" value="{{ $data->year }}">
                                        @error('year')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>


                                    <div class="form-group col-md-12 mb-3">
                                        <label for="inputEmail4" class="form-label">Location </label>
                                        <input type="text" name="location" class="form-control" id="inputEmail4"
                                            placeholder="Enter Location" value="{{ $data->location }}">
                                        @error('location')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="col-12 mb-3">
                                        <label for="inputEmail4" class="form-label"> Content </label>
                                        <textarea class="ckeditor form-control" name="content">{!! $data->content !!}</textarea>
                                    </div>


                                </div>

                                <button type="submit" class="btn btn-primary waves-effect waves-light">Update
                                    Experience</button>

                            </form>

                        </div> <!-- end card-body -->
                    </div> <!-- end card-->
                </div> <!-- end col -->
            </div>
            <!-- end row -->



        </div> <!-- container -->

    </div> <!-- content -->
@endsection
