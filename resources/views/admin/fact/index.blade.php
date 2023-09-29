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

                                <li class="breadcrumb-item active">Edit Fact</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Edit Fact</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <!-- Form row -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <form id="myForm" method="post" action="{{ route('fact-update') }}">
                                @csrf
                                <input type="hidden" name="id" value="{{ $data->id }}">

                                <div class="row">
                                    <div class="form-group col-md-6 mb-3">
                                        <label for="inputEmail4" class="form-label"> Happy Client </label>
                                        <input type="number" name="happyclient" class="form-control" id="inputEmail4"
                                            placeholder="Enter Happy Client" value="{{ $data->happyclient }}">
                                        @error('happyclient')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="form-group col-md-6 mb-3">
                                        <label for="inputEmail4" class="form-label">Project </label>
                                        <input type="number" name="project" class="form-control" id="inputEmail4"
                                            placeholder="Enter Project" value="{{ $data->project }}">
                                        @error('project')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="form-group col-md-6 mb-3">
                                        <label for="inputEmail4" class="form-label"> Company </label>
                                        <input type="number" name="company" class="form-control" id="inputEmail4"
                                            placeholder="Enter Company" value="{{ $data->company }}">
                                        @error('company')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="form-group col-md-6 mb-3">
                                        <label for="inputEmail4" class="form-label">Certificate </label>
                                        <input type="number" name="certificate" class="form-control" id="inputEmail4"
                                            placeholder="Enter Certificate" value="{{ $data->certificate }}">
                                        @error('certificate')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>






                                <button type="submit" class="btn btn-primary waves-effect waves-light">Update Fact</button>

                            </form>

                        </div> <!-- end card-body -->
                    </div> <!-- end card-->
                </div> <!-- end col -->
            </div>
            <!-- end row -->



        </div> <!-- container -->

    </div> <!-- content -->
@endsection
