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

                                <li class="breadcrumb-item active">Edit About Us</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Edit About Us</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <!-- Form row -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <form id="myForm" method="post" action="{{ route('about-update') }}"
                                enctype="multipart/form-data">
                                @csrf

                                <input type="hidden" name="id" value="{{ $data->id }}">
                                <input type="hidden" name="old_image" value="{{ $data->id }}">


                                <div class="row">

                                    <div class="form-group col-md-6 mb-3">
                                        <label for="inputEmail4" class="form-label"> Image </label>
                                        <input type="file" name="image" class="form-control"id="image">
                                    </div>
                                    <div class="form-group col-md-6 mb-3">
                                        <label for="inputEmail4" class="form-label"> </label>
                                        <img id="showImage"
                                            src="{{ !empty($data->image) ? url($data->image) : url('no_image.jpg') }}"
                                            class="rounded-circle avatar-lg img-thumbnail" alt="profile-image">
                                    </div>

                                    <div class="form-group col-md-6 mb-3">
                                        <label for="inputEmail4" class="form-label"> Title </label>
                                        <input type="text" name="title" class="form-control" id="inputEmail4"
                                            placeholder="Enter About Title" value="{{ $data->title }}">
                                        @error('title')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>


                                    <div class="form-group col-md-6 mb-3">
                                        <label for="inputEmail4" class="form-label">Birthday </label>
                                        <input type="text" name="birthday" class="form-control" id="inputEmail4"
                                            placeholder="Enter Birthday" value="{{ $data->birthday }}">
                                        @error('birthday')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="form-group col-md-6 mb-3">
                                        <label for="inputEmail4" class="form-label">Email </label>
                                        <input type="text" name="email" class="form-control" id="inputEmail4"
                                            placeholder="Enter Email" value="{{ $data->email }}">
                                        @error('email')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="form-group col-md-6 mb-3">
                                        <label for="inputEmail4" class="form-label"> Phone </label>
                                        <input type="text" name="phone" class="form-control" id="inputEmail4"
                                            placeholder="Enter Phone Number" value="{{ $data->phone }}">
                                        @error('phone')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="form-group col-md-12 mb-3">
                                        <label for="inputEmail4" class="form-label">City </label>
                                        <input type="text" name="city" class="form-control" id="inputEmail4"
                                            placeholder="Enter City" value="{{ $data->city }}">
                                        @error('city')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="form-group col-md-6 mb-3">
                                        <label for="inputEmail4" class="form-label"> Age </label>
                                        <input type="text" name="age" class="form-control" id="inputEmail4"
                                            placeholder="Enter Age " value="{{ $data->age }}">
                                        @error('age')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="form-group col-md-6 mb-3">
                                        <label for="inputEmail4" class="form-label">Degree </label>
                                        <input type="text" name="degree" class="form-control" id="inputEmail4"
                                            placeholder="Enter Degree" value="{{ $data->degree }}">
                                        @error('degree')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="form-group col-md-6 mb-3">
                                        <label for="inputEmail4" class="form-label"> Hobbies </label>
                                        <input type="text" name="hobbies" class="form-control" id="inputEmail4"
                                            placeholder="Enter Hobbies " value="{{ $data->hobbies }}">
                                        @error('hobbies')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="form-group col-md-6 mb-3">
                                        <label for="inputEmail4" class="form-label"> Languages Know </label>
                                        <input type="text" name="languages_know" class="form-control"
                                            id="inputEmail4" placeholder="Enter Languages Know "
                                            value="{{ $data->languages_know }}">
                                        @error('languages_know')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>


                                <button type="submit" class="btn btn-primary waves-effect waves-light">Update
                                    About Us</button>
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
