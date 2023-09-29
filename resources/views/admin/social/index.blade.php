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
                                <a href="{{ route('social-create') }}" class="btn btn-blue waves-effect waves-light">Add
                                    Social Media</a>
                            </ol>
                        </div>
                        <h4 class="page-title">Social Media All </h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">


                            <table id="basic-datatable" class="table dt-responsive nowrap w-100">
                                <thead>
                                    <tr>
                                        <th>Sl</th>
                                        <th>Icon </th>
                                        <th>URL </th>
                                        <th>Status </th>
                                        <th>Action </th>
                                    </tr>
                                </thead>


                                <tbody>
                                    @foreach ($datas as $key => $item)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $item->icon }}</td>
                                            <td>{{ $item->url }}</td>
                                            <td>
                                                @if ($item->status == 1)
                                                    <span class="badge badge-pill bg-success">Active</span>
                                                @else
                                                    <span class="badge badge-pill bg-danger">InActive</span>
                                                @endif


                                            </td>
                                            <td>
                                                <a href="{{ route('social-edit', $item->id) }}"
                                                    class="btn btn-primary rounded-pill waves-effect waves-light">Edit</a>
                                                <a href="{{ route('social-delete', $item->id) }}"
                                                    class="btn btn-danger rounded-pill waves-effect waves-light"
                                                    id="delete">Delete</a>
                                                @if ($item->status == 1)
                                                    <a href="{{ route('social-inactive', $item->id) }}"
                                                        class="btn btn-primary rounded-pill waves-effect waves-light"
                                                        title="Inactive"><i class="fa-solid fa-thumbs-down"></i> </a>
                                                @else
                                                    <a href="{{ route('social-active', $item->id) }}"
                                                        class="btn btn-primary rounded-pill waves-effect waves-light"
                                                        title="Active"><i class="fa-solid fa-thumbs-up"></i></a>
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>

                        </div> <!-- end card body-->
                    </div> <!-- end card -->
                </div><!-- end col-->
            </div>
            <!-- end row-->



        </div> <!-- container -->

    </div> <!-- content -->
@endsection
