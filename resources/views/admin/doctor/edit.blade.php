@extends('layouts.admin_layouts')
@section('Doctor') active @endsection

@section('admin_content')
    <div class="content-page">
        <div class="content">
            <div class="container">
                <div class="panel-heading" style="background-color: thistle">
                    <h4 class="text-center"><b>UPDATE DOCTOR INFORMATION </b> </h4>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">

                            <div class="panel-body" style="background-color: rgb(213, 220, 226)">

                                <form method="POST" enctype="multipart/form-data" action="{{ route('update.doctor') }}">
                                    @csrf
                                    <input type="hidden" value="{{ $doctors->id }}" name="id" class="form-control">

                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="name">Full Name</label>
                                            <input value="{{ $doctors->name }}" type="text" class="form-control"
                                                name="name">
                                            @error('name')
                                                <strong class="text-danger">{{ $message }}</strong>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="email">Email</label>
                                            <input value="{{ $doctors->email }}" type="email" class="form-control"
                                                name="email">
                                            @error('email')
                                                <strong class="text-danger">{{ $message }}</strong>
                                            @enderror
                                        </div>

                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="institute">Last Educational Institute</label>
                                            <input value="{{ $doctors->institute }}" type="text" class="form-control"
                                                name="institute">
                                            @error('institute')
                                                <strong class="text-danger">{{ $message }}</strong>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="qualification">Last Educational Degree</label>
                                            <input value="{{ $doctors->qualification }}" type="text" class="form-control"
                                                name="qualification">
                                            @error('qualification')
                                                <strong class="text-danger">{{ $message }}</strong>
                                            @enderror
                                        </div>


                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <label for="bmdc">BMDC Reg. No.</label>
                                            <input value="{{ $doctors->bmdc }}" type="number" class="form-control"
                                                name="bmdc">
                                            @error('bmdc')
                                                <strong class="text-danger">{{ $message }}</strong>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-5">
                                            <label for="department_id">Specialist</label>
                                            <select name="department_id" class="form-control">
                                                <option> Choose your Department</option>
                                                @foreach ($departments as $department)
                                                    <option value="{{ $department->id }}"
                                                        {{ $department->id == $doctors->department_id ? 'selected' : '' }}>
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
                                            <input value="{{ $doctors->fees }}" type="text" class="form-control"
                                                name="fees">
                                            @error('fees')
                                                <strong class="text-danger">{{ $message }}</strong>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <label for="birth">Date Of Birth</label>
                                            <input value="{{ $doctors->birth }}" type="date" class="form-control"
                                                name="birth">
                                            @error('birth')
                                                <strong class="text-danger">{{ $message }}</strong>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-5">
                                            <label for="nid">NID Number</label>
                                            <input value="{{ $doctors->nid }}" type="number" class="form-control"
                                                name="nid">
                                            @error('nid')
                                                <strong class="text-danger">{{ $message }}</strong>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="phone">Contruct Number</label>
                                            <input value="{{ $doctors->phone }}" type="number" class="form-control"
                                                name="phone">
                                            @error('phone')
                                                <strong class="text-danger">{{ $message }}</strong>
                                            @enderror
                                        </div>

                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-md-9">
                                            <label for="address">Address</label>
                                            <input value="{{ $doctors->address }}" type="text" class="form-control"
                                                name="address" placeholder="House, Road, City">
                                            @error('address')
                                                <strong class="text-danger">{{ $message }}</strong>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="district">District</label>
                                            <input value="{{ $doctors->district }}" type="text" class="form-control"
                                                name="district">
                                            @error('district')
                                                <strong class="text-danger">{{ $message }}</strong>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-9">
                                            <label for="password">Password</label>
                                            <input value="{{ $doctors->password }}" type="password" class="form-control"
                                                name="password">
                                            @error('password')
                                                <strong class="text-danger">{{ $message }}</strong>
                                            @enderror
                                        </div>


                                        <div class="form-group col-md-3">
                                            <label for="avatar">Profile Photo</label>
                                            <img style="border-radius: 50%" id="image"
                                                src="{{ asset('uploads/documents/doctor/' . $doctors->avatar) }}"
                                                width=" 125px" height="125px" />
                                            <img style="border-radius: 50%" id="image" src="#" />
                                            <input type="file" class="form-control" name="avatar" accept="image/*"
                                                class="upload" onchange="readURL(this);">

                                        </div>


                                    </div>


                                    <div style="text-align: center">
                                        <button type="submit" class="btn btn-primary btn-block "><i
                                                class="fa fa-plus-square"></i> Update
                                            Doctor Information </button>
                                    </div>



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
