@extends('layouts.admin_layouts')
@section('Doctor') active @endsection

@section('admin_content')
    <div class="content-page">
        <div class="content">
            <div class="container">

                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                        <h4 class="pull-left page-title">Add Doctor</h4>
                        <ol class="breadcrumb pull-right">
                            <li><a href="#">Admin</a></li>
                            <li class="active">Doctor</li>
                        </ol>
                    </div>
                </div>
                <!--Start Row  -->
                <button type="button" class="btn btn-info  " data-toggle="modal" data-target="#exampleModal">
                    <i class="fa fa-plus-square"></i> ADD Doctor
                </button>


                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Add Doctor Information</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="name">Full Name</label>
                                            <input type="text" class="form-control" name="name">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="email">Email</label>
                                            <input type="email" class="form-control" name="email">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="institute">Educational Institute</label>
                                            <input type="text" class="form-control" name="institute">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="qualification">Qualification</label>
                                            <input type="text" class="form-control" name="qualification">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="employee">Employee</label>
                                            <input type="text" class="form-control" name="employee">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="specialist">Specialist</label>
                                            <select name="specialist" class="form-control">
                                                <option selected> Choose your Department</option>
                                                <option>...</option>
                                            </select>
                                        </div>

                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-3">
                                            <label for="phone">Contruct Number</label>
                                            <input type="number" class="form-control" name="phone">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="nid">NID Number</label>
                                            <input type="number" class="form-control" name="nid">
                                        </div>
                                        <div class="form-group col-md-5">
                                            <label for="bmdc">BMDC Reg. No.</label>
                                            <input type="number" class="form-control" name="bmdc">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-8">
                                            <label for="address">Address</label>
                                            <input type="text" class="form-control" name="address"
                                                placeholder="House, Road, City">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="district">District</label>
                                            <input type="text" class="form-control" name="district">
                                        </div>


                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <label for="password">Password</label>
                                            <input type="password" class="form-control" name="password">
                                        </div>
                                        <div class="form-group col-md-2">
                                            <label for="fees">Consultation fees</label>
                                            <input type="text" class="form-control" name="fees">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="avatar">Doctor Image</label>
                                            <input type="file" class="form-control" name="avatar">
                                        </div>
                                        <div class="form-group col-md-2">
                                            <img id="image" src="#" />
                                            <input type="file" name="avatar" accept="image/*" class="upload" required
                                                onchange="readURL(this);">
                                        </div>


                                    </div>


                                    <button type="submit" class="btn btn-info "><i class="fa fa-plus-square"></i> Add
                                        Doctor </button>

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
                                                    <th>No.</th>
                                                    <th>Name</th>
                                                    <th>Email</th>
                                                    <th>Specialist</th>
                                                    <th>Fees</th>
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

    <script type="text/javascript">
function readURL(input)
    </script>

@endsection
