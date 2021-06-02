@extends('layouts.admin_layouts')
@section('Department') active @endsection

@section('admin_content')
    <div class="content-page">
        <div class="content">
            <div class="container">

                {{-- @if (session('update'))
                    <div class="alert alert-success alart-dismissible fade show" role="alert">
                        <strong>{{ session('update') }}</strong>

                        <button type="button" class="close" data-dismiss="alert" aria-label="close">
                            <span aria-hidden="true">&times</span>
                        </button>
                    </div>

                @endif --}}

                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                        <h4 class="pull-left page-title">Add Department</h4>
                        <ol class="breadcrumb pull-right">
                            <li><a href="#">Admin</a></li>
                            <li class="active">All Department</li>
                        </ol>
                    </div>
                </div>
                <!--Start Row  -->
                <button type="button" class="btn btn-info  " data-toggle="modal" data-target="#exampleModal">
                    <i class="fa fa-plus-square"></i> ADD Department
                </button>
                <hr>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Add Department</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="" method="POST">
                                    {{-- {{ route('store.department') }} --}}
                                    @csrf
                                    <div class="form-group">
                                        <label class="sr-only">Department Name</label>
                                        <input type="text" name="Department_name" class="form-control"
                                            placeholder="Enter Department name">

                                        @error('department_name')
                                            <strong class="text-danger">{{ $message }}</strong>
                                        @enderror
                                    </div>

                                    <button type="submit" class="btn btn-info waves-effect waves-light m-l-10 pull-right">
                                        <i class="fa fa-plus-square"></i> ADD </button>
                                </form>

                            </div>

                        </div>
                    </div>
                </div>
                <!--End Row  -->
                <!--Start 2nd Row  -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">

                                        <table id="datatable" class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Serial No.</th>
                                                    <th>Department Name</th>
                                                    <th>Status</th>
                                                    <th>Action</th>

                                                </tr>
                                            </thead>


                                            {{-- <tbody>

                                                                @php
                                                                    $i = 1;
                                                                @endphp
                                                                @foreach ($categories as $category)
                                                                    <tr>
                                                                        <td>{{ $i++ }}</td>
                                                                        <td>{{ $category->category_name }}</td>
                                                                        <td>
                                                                            @if ($category->status == 1)
                                                                                <span class="label label-success">Active</span>
                                                                            @else
                                                                                <span class="label label-danger">Inactive</span>
                                                                            @endif

                                                                        </td>
                                                                        <td>
                                                                            <a href="{{ url('admin/categories/edit/' . $category->id) }}"
                                                                                class="btn btn-info"><i class="fa fa-edit"></i></a>

                                                                            <a href="{{ url('admin/categories/delete/' . $category->id) }}"
                                                                                class="btn btn-danger"
                                                                                onclick="return confirm('Are you sure to Delete This Item')"><i
                                                                                    class="fa fa-trash"></i></a>

                                                                            @if ($category->status == 1)
                                                                                <a href="{{ url('admin/categories/inactive/' . $category->id) }}"
                                                                                    class="btn btn-danger"><i class="fa fa-toggle-on">

                                                                                    </i> </a>
                                                                            @else
                                                                                <a href="{{ url('admin/categories/active/' . $category->id) }}"
                                                                                    class="btn btn-success"><i class="fa fa-toggle-off">

                                                                                    </i> Active</a>
                                                                            @endif
                                                                        </td>
                                                                    </tr>
                                                                @endforeach
                                                            </tbody> --}}
                                        </table>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End 2nd Row  -->




            </div>
        </div>

    </div>

@endsection
