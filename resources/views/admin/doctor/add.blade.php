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
                        <div class="modal-content" style="background-color: rgb(213, 220, 226)">
                            <div class="modal-header" style="text-color:thistle">
                                <h3 class="modal-title" id="exampleModalLabel" style="text-align: center">Add Doctor
                                    Information</h3>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">

                                <form method="POST" enctype="multipart/form-data" action="{{ route('doctor.reg') }}">
                                    @csrf
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="name">Full Name</label>
                                            <input type="text" class="form-control" name="name">
                                            @error('name')
                                                <strong class="text-danger">{{ $message }}</strong>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="email">Email</label>
                                            <input type="email" class="form-control" name="email">
                                            @error('email')
                                                <strong class="text-danger">{{ $message }}</strong>
                                            @enderror
                                        </div>

                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="institute">Last Educational Institute</label>
                                            <input type="text" class="form-control" name="institute">
                                            @error('institute')
                                                <strong class="text-danger">{{ $message }}</strong>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="qualification">Last Educational Degree</label>
                                            <input type="text" class="form-control" name="qualification">
                                            @error('qualification')
                                                <strong class="text-danger">{{ $message }}</strong>
                                            @enderror
                                        </div>


                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <label for="bmdc">BMDC Reg. No.</label>
                                            <input type="number" class="form-control" name="bmdc">
                                            @error('bmdc')
                                                <strong class="text-danger">{{ $message }}</strong>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-5">
                                            <label for="department_id">Specialist</label>
                                            <select name="department_id" class="form-control">
                                                <option> Choose your Department</option>
                                                @foreach ($departments as $department)
                                                    <option value="{{ $department->id }}">
                                                        {{ $department->department_name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            @error('department_id')
                                                <strong class="text-danger">{{ $message }}</strong>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="fees">Consultation Fees</label>
                                            <input type="text" class="form-control" name="fees">
                                            @error('fees')
                                                <strong class="text-danger">{{ $message }}</strong>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <label for="birth">Date Of Birth</label>
                                            <input type="date" class="form-control" name="birth">
                                            @error('birth')
                                                <strong class="text-danger">{{ $message }}</strong>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-5">
                                            <label for="nid">NID Number</label>
                                            <input type="number" class="form-control" name="nid">
                                            @error('nid')
                                                <strong class="text-danger">{{ $message }}</strong>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="phone">Contruct Number</label>
                                            <input type="number" class="form-control" name="phone">
                                            @error('phone')
                                                <strong class="text-danger">{{ $message }}</strong>
                                            @enderror
                                        </div>

                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-md-9">
                                            <label for="address">Address</label>
                                            <input type="text" class="form-control" name="address"
                                                placeholder="House, Road, City">
                                            @error('address')
                                                <strong class="text-danger">{{ $message }}</strong>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="district">District</label>
                                            <input type="text" class="form-control" name="district">
                                            @error('district')
                                                <strong class="text-danger">{{ $message }}</strong>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-9">
                                            <label for="password">Password</label>
                                            <input type="password" class="form-control" name="password">
                                            @error('password')
                                                <strong class="text-danger">{{ $message }}</strong>
                                            @enderror
                                        </div>


                                        <div class="form-group col-md-3">
                                            <label for="avatar"> Upload Photo Here</label>
                                            <img style="border-radius: 50%" id="image" src="#" />
                                            <input type="file" class="form-control" name="avatar" accept="image/*"
                                                class="upload" required onchange="readURL(this);">
                                            @error('avatar')
                                                <strong class="text-danger">{{ $message }}</strong>
                                            @enderror
                                        </div>


                                    </div>


                                    <div style="text-align: center">
                                        <button type="submit" class="btn btn-primary btn-block "><i
                                                class="fa fa-plus-square"></i> Add
                                            Doctor </button>
                                    </div>



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

                                        <table style="text-align: center" id="datatable"
                                            class="table table-striped table-bordered">
                                            <thead style="text-align: center">
                                                <tr>
                                                    <th>No.</th>
                                                    <th>Photos</th>
                                                    <th>Name</th>
                                                    <th>Email</th>
                                                    <th>Specialist</th>
                                                    <th>Fees</th>
                                                    <th>Status</th>
                                                    <th>Action</th>

                                                </tr>
                                            </thead>


                                            <tbody>

                                                @php
                                                    $i = 1;
                                                @endphp
                                                @foreach ($doctors as $doctor)
                                                    <tr>
                                                        <td>{{ $i++ }}</td>
                                                        <td>
                                                            <img src="{{ asset('uploads/documents/doctor/' . $doctor->avatar) }}"
                                                                width="50px" height="40px" alt="">
                                                        </td>
                                                        <td>{{ $doctor->name }}</td>
                                                        <td>{{ $doctor->email }}</td>
                                                        <td>{{ $doctor->joindep->department_name }}</td>
                                                        <td>{{ $doctor->fees }}</td>

                                                        <td>
                                                            @if ($doctor->status == 1)
                                                                <span class="label label-success">Active</span>
                                                            @else
                                                                <span class="label label-danger">Inactive</span>
                                                            @endif

                                                        </td>
                                                        <td>
                                                            <a href="{{ url('admin/doctor/show/' . $doctor->id) }}"
                                                                class="btn btn-info"><i class="fa fa-eye"></i></a>

                                                            <a href="{{ url('admin/doctor/delete/' . $doctor->id) }}"
                                                                class="btn btn-danger"
                                                                onclick="return confirm('Are you sure to Delete This Item')"><i
                                                                    class="fa fa-trash"></i></a>

                                                            @if ($doctor->status == 1)
                                                                <a href="" class="btn btn-danger"><i
                                                                        class="fa fa-toggle-on">

                                                                    </i> </a>
                                                            @else
                                                                <a href="" class="btn btn-success"><i
                                                                        class="fa fa-toggle-off">

                                                                    </i> Active</a>
                                                            @endif
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
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
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#image')
                        .attr('src', e.target.result)
                        .width(120)
                        .height(120);

                };
                reader.readAsDataURL(input.files[0]);
            }
        }

    </script>

@endsection
