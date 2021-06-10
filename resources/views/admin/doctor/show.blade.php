@extends('layouts.admin_layouts')
@section('Doctor') active @endsection

@section('admin_content')
    <div class="content-page">
        <div class="content">
            <div class="container">

                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                        <h4 class="pull-left page-title">Doctor Information</h4>
                        <ol class="breadcrumb pull-right">
                            <li><a href="#">Admin</a></li>
                            <li class="active">Doctor Information</li>
                        </ol>
                    </div>
                </div>
                <!--End page Title -->

                <div>
                    <a href="{{ url('admin/doctor/edit/' . $doctors->id) }}" class="btn btn-info"><i
                            class="fa fa-edit"></i> Edit Doctor Information</a>


                </div>
                <div class="modal-body">

                    <h2 style="text-align: center">Doctor Information</h2>
                    <div class="card mb-3">
                        <div class="row no-gutters">
                            <div class="col-md-8">
                                <table class="table table-hover">
                                    <tbody>

                                        <tr>
                                            <td> Name
                                            </td>
                                            <td><b>{{ $doctors->name }}</b>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Email</td>
                                            <td><b>{{ $doctors->email }}</b>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>
                                                Institute
                                            </td>
                                            <td><b>{{ $doctors->institute }}</b>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Qualification</td>
                                            <td><b>{{ $doctors->qualification }}</b>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                Specialist
                                            </td>
                                            <td><b>{{ $doctors->joindep->department_name }}</b>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Address
                                            </td>
                                            <td><b>{{ $doctors->address }}</b>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                District
                                            </td>
                                            <td><b>{{ $doctors->district }}</b>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                            <div class="col-md-4 " style="border-left:4px dotted">
                                <div style="text-align: center">
                                    <img src="{{ asset('uploads/documents/doctor/' . $doctors->avatar) }}" width="140px"
                                        height="140px" class="card-img" alt="..." style="border: 2px outset">
                                </div>
                                <table class="table table-hover" style="margin-top: 10px">
                                    <tbody>

                                        <tr>
                                            <td>BMDC Reg</td>
                                            <td><b>{{ $doctors->bmdc }}</b>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>Consultation Fees
                                            </td>
                                            <td><b>{{ $doctors->fees }}</b>
                                                Tk.
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>Date Of Birth</td>
                                            <td><b>{{ $doctors->birth }}</b>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>NID No.</td>
                                            <td><b>{{ $doctors->nid }}</b>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>
                                                Phone
                                            </td>
                                            <td>
                                                <b>{{ $doctors->phone }}</b>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>




            </div>
        </div>

    </div>

@endsection
