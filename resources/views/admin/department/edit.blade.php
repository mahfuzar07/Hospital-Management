@extends('layouts.admin_layouts')
@section('Department') active @endsection

@section('admin_content')
    <div class="content-page">
        <div class="content">
            <div class="container">

                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                        <h4 class="pull-left page-title">Update Department</h4>
                        <ol class="breadcrumb pull-right">
                            <li><a href="#">Admin</a></li>
                            <li class="active">Department</li>
                        </ol>
                    </div>
                </div>
                <!--Start Row  -->

                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Update Department</h3>
                            </div>
                            <div class="panel-body">

                                <form action="{{ route('update.department') }}" method="POST">
                                    @csrf


                                    <input type="hidden" value="{{ $departments->id }}" type="text" name="id"
                                        class="form-control">




                                    <div class="form-group">
                                        <label class="sr-only">Department Name</label>
                                        <input value="{{ $departments->department_name }}" type="text"
                                            name="department_name" class="form-control">
                                    </div>

                                    <button type="submit"
                                        class="btn btn-info waves-effect waves-light m-l-10">Update</button>
                                </form>
                            </div> <!-- panel-body -->
                        </div> <!-- panel -->
                    </div> <!-- col -->






                </div> <!-- container -->
                <!--End Row  -->

            </div>
        </div>

    </div>

@endsection
