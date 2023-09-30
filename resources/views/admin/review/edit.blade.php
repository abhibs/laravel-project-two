@extends('admin.layout.app')
@section('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">

                                <li class="breadcrumb-item active">Edit Review</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Edit Review</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <!-- Form row -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <form id="myForm" method="post" action="{{ route('review-update') }}"
                                enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="id" value="{{ $data->id }}">
                                <input type="hidden" name="old_image" value="{{ $data->image }}">
                                <div class="row">

                                    <div class="form-group col-md-6 mb-3">
                                        <label for="example-fileinput" class="form-label">Company Photo</label>
                                        <input type="file" name="image" id="image" class="form-control">
                                    </div>

                                    <div class="form-group col-md-6 mb-3">
                                        <label for="example-fileinput" class="form-label"> </label>
                                        <img id="showImage" src="{{ asset($data->image) }} "
                                            class="rounded-circle avatar-lg img-thumbnail" alt="profile-image">
                                    </div>
                                    <div class="form-group col-md-6 mb-3">
                                        <label for="inputEmail4" class="form-label">Company Name </label>
                                        <input type="text" name="company" class="form-control" id="inputEmail4"
                                            placeholder="Add Company Name" value="{{ $data->company }}">
                                        @error('company')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="form-group col-md-6 mb-3">
                                        <label for="inputEmail4" class="form-label">Company CEO </label>
                                        <input type="text" name="ceo" class="form-control" id="inputEmail4"
                                            placeholder="Add Company CEO" value="{{ $data->ceo }}">
                                        @error('ceo')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-12 mb-3">
                                        <label for="inputEmail4" class="form-label"> Content </label>
                                        <textarea class="ckeditor form-control" name="content">{!! $data->content !!}</textarea>
                                    </div>


                                </div>

                                <button type="submit" class="btn btn-primary waves-effect waves-light">Updata
                                    Review</button>

                            </form>

                        </div> <!-- end card-body -->
                    </div> <!-- end card-->
                </div> <!-- end col -->
            </div>
            <!-- end row -->



        </div> <!-- container -->

    </div> <!-- content -->
    <script type="text/javascript">
        $(document).ready(function() {
            $('#image').change(function(e) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#showImage').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
    </script>
@endsection
