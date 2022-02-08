@extends('layouts.lfinanceadmin')

@section('content')
<div class="container-fluid">

    <div class="">
        <div class="nav  nav-tabs" id="vds-hr-tab" role="tablist">

            <a class=" nav-link nav-item active" id="hr-pills-departments-tab" data-toggle="tab" href="#hr-pills-departments-content" role="tab" aria-controls="hr-pills-departments-tab" aria-selected="true">Departments & Pillars</a>


            <a class=" nav-link nav-item" id="hr-pills-staff-employee-tab" href="#hr-pills-staff-employee-content" role="tab" data-toggle="tab" aria-controls="hr-pills-staff-employee-tab" aria-selected="false">Staff / Employees</a>



            <a class=" nav-link nav-item" id="hr-pills-benefits-tab" href="#hr-pills-benefits-content" role="tab" data-toggle="tab" aria-controls="hr-pills-benefits-tab" aria-selected="false">Payroll Items</a>



            <a class=" nav-link nav-item" id="hr-pills-cost-sharing-tab" href="#hr-pills-cost-sharing-content" role="tab" data-toggle="tab" aria-controls="hr-pills-cost-sharing-tab" aria-selected="false">Cost Sharing</a>



            <a class=" nav-link nav-item" id="hr-pills-dlr-tab" href="#hr-pills-dlr-content" role="tab" data-toggle="tab" aria-controls="hr-pills-dlr-tab" aria-selected="false">Direct Loans
                receipts</a>



            <a class=" nav-link nav-item" id="hr-pills-leave-allowance-tab" href="#hr-pills-leave-allowance-content" role="tab" data-toggle="tab" aria-controls="hr-pills-leave-allowance-tab" aria-selected="false">Leave allowance</a>


            <a class=" nav-link nav-item" id="hr-pills-leaves-tab" href="#hr-pills-leaves-content" role="tab" data-toggle="tab" aria-controls="hr-pills-leaves-tab" aria-selected="false">Leaves</a>



            <a class=" nav-link nav-item" id="hr-pills-loans-tab" href="#hr-pills-loans-content" role="tab" data-toggle="tab" aria-controls="hr-pills-loans-tab" aria-selected="false">Loans</a>


            <a class=" nav-link nav-item" id="hr-pills-payroll-tab" href="#hr-pills-payroll-content" role="tab" data-toggle="tab" aria-controls="hr-pills-payroll-tab" aria-selected="false">Payroll</a>


            <a class=" nav-link nav-item" id="hr-pills-salary-tab" href="#hr-pills-salary-content" role="tab" data-toggle="tab" aria-controls="hr-pills-salary-tab" aria-selected="false">Salary and Salary Areas</a>


            <a class="nav-link nav-item" id="hr-pills-salary-slips-tab" href="#hr-pills-salary-slips-content" role="tab" data-toggle="tab" aria-controls="hr-pills-salary-slips-tab" aria-selected="false">Salary Slips</a>


            <a class="nav-link nav-item" id="hr-pills-staff-appraisal-tab" href="#hr-pills-staff-appraisal-content" role="tab" data-toggle="tab" aria-controls="hr-pills-staff-appraisal-tab" aria-selected="false">Staff Appraisals</a>

        </div>
    </div>


    <div class="tab-content" id="vds-finance-pillars-pills-tabContent">
        <div class="tab-pane fade show active" id="hr-pills-departments-content" role="tabpanel" aria-labelledby="pills-finance-pillars-tab">
            {{-- departments and pillars --}}

            <div class="container-fluid">
                <div class="tab-pane fade show active" id="line-manager-content" role="tabpanel" aria-labelledby="line-manager-tab-md">
                    <br />
                    <div class="row">
                        <div class="col-md-2">
                            <div class="nav flex-column nav-pills" id="linemanagerPanel" role="tablist" aria-orientation="vertical">

                                <a class="nav-link active" id="hr-departments-pill" data-toggle="pill" href="#hr-departments-content" role="tab" aria-controls="hr-departments-content-md" aria-selected="true">Departments
                                </a>
                                <a class="nav-link" id="hr-pillar-pill" data-toggle="pill" href="#hr-pillar-content" role="tab" aria-controls="hr-pillar-content-md" aria-selected="false">Pillars
                                </a>
                            </div>
                        </div>
                        <div class="col-md-10">
                            <div class="tab-content " id="selectDataViewTabContent">

                                <div class="tab-pane fade show active" id="hr-departments-content" role="tabpanel" aria-labelledby="hr-pillar-content-tab-md">
                                    {{-- departments --}}
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <!-- Button trigger modal -->
                                            <div class="d-flex justify-content-end">
                                                <a class="btn btn-outline-success btn-sm" href="{{ route('add-a-new-department') }}" role="button"> Add a New Department</a>
                                            </div>

                                            <div class="card">
                                                <div class="card-content table-responsive">
                                                    <br />
                                                    <table class="table table-bordered table-hover">
                                                        <p><strong>All organisation Departments</strong></p>
                                                        <thead>
                                                            <tr>
                                                                <th scope="col">#</th>
                                                                <th scope="col">Department Name</th>
                                                                <th scope="col">Head of Deparment</th>
                                                                <th scope="col">Description</th>
                                                                <th scope="col">total funds allocated</th>
                                                                <th scope="col">total staff</th>
                                                                <th scope="col">Date created</th>
                                                                <th scope="col"></th>



                                                            </tr>
                                                        </thead>
                                                        <tbody>

                                                            @foreach($departments as $department)
                                                            <tr>
                                                                <th scope="row">{{ $department->dept_id }}</th>
                                                                <td class="w-30 p-2">{{ $department->dept_title }}</td>

                                                                <td class="w-30 p-2">{{ $department->dept_manager_id }}</td>
                                                                <td class="w-30 h-30 p-4">{{ $department->dept_description }}</td>
                                                                <td class="w-30 h-30 p-4"> 10000000 </td>
                                                                <td class="w-30 h-30 p-4"> 22 </td>
                                                                <td class="w-10 p-2">{{ $department->date_created }}</td>
                                                                <td class="w-10 p-2">
                                                                <div class="">
                                                                    <a href="#" class="btn btn-outline-primary" data-toggle="dropdown" aria-expanded="false">Actions</a>
                                                                    <div class="dropdown-menu dropdown-menu-right">
                                                                        <a class="dropdown-item" a href="{{ route('hrdepts.edit', $department->dept_id)}}"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                                                        <a class="dropdown-item" href="#"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                                                        <a class="dropdown-item" href="{{ route('hrdepts.show', $department->dept_id)}}"><i class="fa fa-v m-r-5"></i> View Details</a>
                                                                    </div>
                                                                </div>
                                                                </td>


                                                            </tr>

                                                        </tbody>
                                                        @endforeach
                                                    </table>
                                                    <br />
                                                    <nav aria-label="Page navigation example">
                                                        <ul class="pagination">
                                                            <li class="page-item">
                                                                <a class="page-link" href="#" aria-label="Previous">
                                                                    <span aria-hidden="true">&laquo;</span>
                                                                    <span class="sr-only">Previous</span>
                                                                </a>
                                                            </li>
                                                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                            <li class="page-item">
                                                                <a class="page-link" href="#" aria-label="Next">
                                                                    <span aria-hidden="true">&raquo;</span>
                                                                    <span class="sr-only">Next</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </nav>
                                                </div>
                                            </div>
                                            <!-- end of SECOND column -->
                                        </div>

                                    </div>


                                </div>
                                <!-- end of departments panel -->


                                <!--
                        ========================================
                        =                                      =
                        =       pillars                       =
                        ======================================== -->
                                <div class="tab-pane fade" id="hr-pillar-content" role="tabpanel" aria-labelledby="hr-pillar-content-tab-md">
                                    {{-- pillars --}}
                                    <div class="row">
                                        <div class="col-lg-12">

                                            <a class="btn btn-outline-success btn-lg" href="{{ route('add-a-new-pillar') }}" role="button"> Add a New Pillar</a>

                                            <div class="card">
                                                <div class="card-content table-responsive">
                                                    <br />
                                                    <table class="table table-bordered table-hover">
                                                        <br />
                                                        <p><strong>All organisation pillars</strong></p>
                                                        <br />
                                                        <br />

                                                        <thead>
                                                            <tr>
                                                                <th scope="col">#</th>
                                                                <th scope="col">Pillar Name</th>
                                                                <th scope="col">Manager</th>
                                                                <th scope="col">Description</th>
                                                                <th scope="col">Number of Staff</th>
                                                                <th scope="col">total funds allocated</th>
                                                                <th scope="col">Date created</th>
                                                                <th scope="col">last updated</th>
                                                                <th scope="col"></th>
                                                                <th scope="col"></th>


                                                            </tr>
                                                        </thead>
                                                        <tbody>

                                                            @foreach($pillars as $pillar)
                                                            <tr>
                                                                <th scope="row">{{ $pillar->pillar_id }}</th>
                                                                <td class="w-30 p-2">{{ $pillar->pillar_title }}</td>
                                                                <td class="w-30 p-2">{{ $pillar->managers_id }}</td>
                                                                <td class="w-30 h-30 p-4">{{ $pillar->pillar_desc }}</td>
                                                                <td class="w-30 h-30 p-4"> {{ $pillar->total_fund_allocations }} </td>
                                                                <td class="w-10 p-2"></td>
                                                                <td class="w-10 p-2">{{ $pillar->created_at }}</td>
                                                                <td class="w-10 p-2">{{ $pillar->date_updated }}</td>
                                                                <td class="w-10 p-2"><a href="{{ route('hrpillars.show', $pillar->pillar_id)}}" class="btn btn-outline-success">view details</a>
                                                                </td>
                                                                <td class="w-30 p-2"><a href="{{ route('hrpillars.edit', $pillar->pillar_id)}}" class="btn btn-outline-info btn-md">update</a>
                                                                </td>

                                                            </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                    <br />
                                                    <nav aria-label="Page navigation example">
                                                        <ul class="pagination">
                                                            <li class="page-item">
                                                                <a class="page-link" href="#" aria-label="Previous">
                                                                    <span aria-hidden="true">&laquo;</span>
                                                                    <span class="sr-only">Previous</span>
                                                                </a>
                                                            </li>
                                                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                            <li class="page-item">
                                                                <a class="page-link" href="#" aria-label="Next">
                                                                    <span aria-hidden="true">&raquo;</span>
                                                                    <span class="sr-only">Next</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </nav>
                                                </div>
                                            </div>
                                            <!-- end of SECOND column -->
                                        </div>

                                    </div>


                                </div>
                                <!-- end of pillars panel -->

                            </div>
                        </div>



                    </div>

                </div>
            </div>

        </div>
        <div class="tab-pane fade" id="hr-pills-staff-employee-content" role="tabpanel" aria-labelledby="vdsreqs-pills-profile-tab">
            {{-- hr staff and employees --}}
            <div class="container-fluid">
                <div class="tab-pane fade show active" id="hr-employeesnmanagers-content" role="tabpanel" aria-labelledby="hr-employeesnmanagers-tab-md">
                    <br />
                    <div class="row">
                        <div class="col-md-2">
                            <div class="nav flex-column nav-pills" id="employeesnmanagersPanel" role="tablist">

                                <a class="nav-item nav-link active" id="hr-managers-pill" data-toggle="pill" href="#hr-managers-content" role="tab" aria-controls="hr-managers-content-md" aria-selected="true">Managers
                                </a>

                                <a class="nav-item nav-link" id="hr-staff-pill" data-toggle="pill" href="#hr-staff-content" role="tab" aria-controls="hr-staff-content-md" aria-selected="false">Staff

                                </a>

                            </div>


                        </div>
                        <div class="col-md-10">
                            <div class="tab-content " id="hr-pills-staff-employeeTabContent">
                                <!--
                                                ========================================
                                                =                                      =
                                                =       managers    =
                                                ======================================== -->
                                <div class="tab-pane fade show active" id="hr-managers-content" role="tabpanel" aria-labelledby="hr-managers-content-tab-md">
                                    {{-- all managers --}}
                                    <!-- Button trigger modal -->



                                    <!-- Modal -->
                                    <div class="modal fade" id="hrcreateNewManagerModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLongTitle">Type of Manager</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <ul class="list-group-flush">

                                                        <li class="list-group-item">
                                                            <a href="{{ route('create-new-pillar-manager') }}" class="list-group-item list-group-item-action">
                                                                Pillar Manager
                                                            </a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <a href="{{ route('create-new-dept-manager') }}" class="list-group-item list-group-item-action">
                                                                Department Manager
                                                            </a>
                                                        </li>

                                                    </ul>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="">
                                            <div class="card mt-0">
                                                <div class="card-content table-responsive">
                                                    <table class="table table-bordered table-hover">
                                                        <br />
                                                        <p class="d-flex justify-content-between"><strong>All Organisation Managers</strong>
                                                            <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#hrcreateNewManagerModal">
                                                                add new manager
                                                            </button>
                                                        </p>
                                                        <br />

                                                        <thead>
                                                            <tr>
                                                                <th scope="col">#</th>
                                                                <th scope="col">First Name</th>
                                                                <th scope="col">Email</th>
                                                                <th scope="col">role</th>
                                                                <th scope="col">Department</th>
                                                                <th scope="col">Date created</th>
                                                                <th scope="col"></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @php $d=1;@endphp
                                                            @foreach($deptmanagers as $deptmanager)
                                                            <tr>
                                                                <th scope="row">{{ $d }}</th>
                                                                <td class="">{{ $deptmanager->fname }}</td>

                                                                <td class="">{{ $deptmanager->email }}</td>
                                                                <td class="">{{ $deptmanager->role_title }}</td>
                                                                <td class="">{{ $deptmanager->dept_title }}</td>
                                                                <td class="">{{ $deptmanager->created_at }}</td>

                                                                <td class=" p-2">
                                                                    <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#rq{{$deptmanager->user_id }}"> Actions
                                                                    </button>
                                                                    <!-- Modal -->
                                                                    <div class="modal fade" id="rq{{$deptmanager->user_id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header">

                                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                        <span aria-hidden="true">&times;</span>
                                                                                    </button>
                                                                                </div>
                                                                                <div class="modal-body">
                                                                                    <ul class="list-group-flush">

                                                                                        <li class="list-group-item">
                                                                                            <a href="{{ route('imprest.show',   $deptmanager->user_id )}}" class="btn btn-outline-success d-flex justify-content-between" data-toggle="tooltip" data-bs-placement="top" title="view project full details">
                                                                                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                                                                                    <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                                                                                                    <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                                                                                                </svg>
                                                                                                <p class="m-auto">
                                                                                                    Managers
                                                                                                    Details</p>
                                                                                            </a>

                                                                                        </li>
                                                                                        <li class="list-group-item">
                                                                                            <a href="{{ route('imprest.edit', $deptmanager->user_id )}}" class="btn btn-outline-info btn-md d-flex justify-content-between" data-toggle="tooltip" data-bs-placement="top" title="view update project details">
                                                                                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-arrow-up-circle" viewBox="0 0 16 16">
                                                                                                    <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-7.5 3.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V11.5z" />
                                                                                                </svg>
                                                                                                <p class="m-auto">Edit
                                                                                                    Managers
                                                                                                    Details </p>
                                                                                            </a>
                                                                                        </li>

                                                                                    </ul>
                                                                                </div>
                                                                                <div class="modal-footer">
                                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>

                                                        </tbody>
                                                        @php $d++;@endphp
                                                        @endforeach
                                                    </table>
                                                    <br />
                                                    <nav aria-label="Page navigation example">
                                                        <ul class="pagination">
                                                            <li class="page-item">
                                                                <a class="page-link" href="#" aria-label="Previous">
                                                                    <span aria-hidden="true">&laquo;</span>
                                                                    <span class="sr-only">Previous</span>
                                                                </a>
                                                            </li>
                                                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                            <li class="page-item">
                                                                <a class="page-link" href="#" aria-label="Next">
                                                                    <span aria-hidden="true">&raquo;</span>
                                                                    <span class="sr-only">Next</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </nav>
                                                </div>
                                            </div>
                                            <!-- end of SECOND column -->
                                        </div>

                                    </div>
                                </div>
                                <!-- end of managers panel -->


                                <!--
                                                ========================================
                                                =                                      =
                                                =       managers                       =
                                                ======================================== -->
                                <div class="tab-pane fade" id="hr-staff-content" role="tabpanel" aria-labelledby="hr-staff-content-tab-md">
                                    {{-- Staff --}}



                                    <!-- Modal -->
                                    <div class="modal fade" id="hrcreateNewStaffModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLongTitle">Type of Staff</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <ul class="list-group-flush">
                                                        <li class="list-group-item">
                                                            <a href="{{ route('create-new-dept-staff') }}" class="list-group-item list-group-item-action">
                                                                Department Staff
                                                            </a>

                                                        </li>
                                                        <li class="list-group-item">
                                                            <a href="{{ route('create-new-pillar-staff') }}" class="list-group-item list-group-item-action">
                                                                Pillar Staff
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="card">
                                                <div class="card-content table-responsive">
                                                    <table class="table table-bordered table-hover">
                                                        <br />

                                                        <p class="d-flex justify-content-between"><strong>All Organisation Staff</strong><button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#hrcreateNewStaffModal">
                                                                add new staff
                                                            </button></p>
                                                        <br />
                                                        <thead>
                                                            <tr>
                                                                <th scope="col">#</th>
                                                                <th scope="col">First Name</th>
                                                                <th scope="col">Email</th>
                                                                <th scope="col">role</th>
                                                                <th scope="col">Department</th>
                                                                <th scope="col">Date created</th>
                                                                <th scope="col"></th>

                                                            </tr>
                                                        </thead>
                                                        @php $n=1;@endphp
                                                        @foreach($pillarstaffs as $pillarstaff)
                                                        <tr>
                                                            <th scope="row">{{ $n }}</th>
                                                            <td class="">{{ $pillarstaff->fname }}</td>

                                                            <td class="">{{ $pillarstaff->email }}</td>
                                                            <td class="">{{ $pillarstaff->role_title }}</td>
                                                            <td class="">{{ $pillarstaff->dept_title }}</td>
                                                            <td class="">{{ $pillarstaff->created_at }}</td>

                                                            <td class=" p-2">
                                                                <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#rq{{$pillarstaff->user_id }}"> Actions
                                                                </button>
                                                                <!-- Modal -->
                                                                <div class="modal fade" id="rq{{$pillarstaff->user_id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">

                                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                    <span aria-hidden="true">&times;</span>
                                                                                </button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <ul class="list-group-flush">

                                                                                    <li class="list-group-item">
                                                                                        <a href="{{ route('imprest.show',   $pillarstaff->user_id )}}" class="btn btn-outline-success d-flex justify-content-between" data-toggle="tooltip" data-bs-placement="top" title="view project full details">
                                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                                                                                <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                                                                                                <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                                                                                            </svg>
                                                                                            <p class="m-auto">Staff Details</p>
                                                                                        </a>

                                                                                    </li>
                                                                                    <li class="list-group-item">
                                                                                        <a href="{{ route('imprest.edit', $pillarstaff->user_id )}}" class="btn btn-outline-info btn-md d-flex justify-content-between" data-toggle="tooltip" data-bs-placement="top" title="view update project details">
                                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-arrow-up-circle" viewBox="0 0 16 16">
                                                                                                <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-7.5 3.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V11.5z" />
                                                                                            </svg>
                                                                                            <p class="m-auto">Edit Staff Details </p>
                                                                                        </a>
                                                                                    </li>

                                                                                </ul>
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>

                                                        </tr>

                                                        </tbody>
                                                        @php $n++;@endphp
                                                        @endforeach
                                                    </table>
                                                    <br />
                                                    <nav aria-label="Page navigation example">
                                                        <ul class="pagination">
                                                            <li class="page-item">
                                                                <a class="page-link" href="#" aria-label="Previous">
                                                                    <span aria-hidden="true">&laquo;</span>
                                                                    <span class="sr-only">Previous</span>
                                                                </a>
                                                            </li>
                                                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                            <li class="page-item">
                                                                <a class="page-link" href="#" aria-label="Next">
                                                                    <span aria-hidden="true">&raquo;</span>
                                                                    <span class="sr-only">Next</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </nav>
                                                </div>
                                            </div>
                                            <!-- end of SECOND column -->
                                        </div>

                                    </div>
                                </div>
                                <!-- end of managers panel -->
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>

        <div class="tab-pane fade" id="hr-pills-benefits-content" role="tabpanel" aria-labelledby="vdsreqs-pills-settings-tab">
            {{-- Payroll Items --}}
            <div class="content container-fluid mt-5">

                <div class="page-header">
                    <div class="row align-items-center">
                        <div class="col">
                            <h3 class="page-title">Payroll Items</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="admin-dashboard.html">Dashboard</a></li>
                                <li class="breadcrumb-item active">Payroll Items</li>
                            </ul>
                        </div>
                    </div>
                </div>


                <div class="page-menu">
                    <div class="row">
                        <div class="col-sm-12">
                            <ul class="nav nav-tabs nav-tabs-bottom">
                                <li class="nav-item">
                                    <a class="nav-item nav-link active" data-toggle="tab" href="#tab_additions">Benefits</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-item nav-link" data-toggle="tab" href="#tab_overtime">Overtime</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-item nav-link" data-toggle="tab" href="#tab_deductions">Deductions</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>


                <div class="tab-content">

                    <div class="tab-pane show active" id="tab_additions">

                        <div class="mb-4 mt-4 d-flex justify-content-end">
                            <button class="btn btn-primary " type="button" data-toggle="modal" data-target="#add_addition"><i class="fa fa-plus"></i> Add Benefit</button>
                        </div>


                        <div class="payroll-table card">
                            <div class="table-responsive">
                                <table class="table table-hover table-radius">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Category</th>
                                            <th>Default/Unit Amount</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th>Leave balance amount</th>
                                            <td>Monthly remuneration</td>
                                            <td>$5</td>
                                            <td class="text-end">
                                                <div class="">
                                                    <a href="#" class="action-icon " data-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></a>
                                                    <div class="dropdown-menu ">
                                                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_addition"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_addition"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Arrears of salary</th>
                                            <td>Additional remuneration</td>
                                            <td>$8</td>
                                            <td class="text-end">
                                                <div class="dropdown dropdown-action">
                                                    <a href="#" class="action-icon " data-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_addition"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_addition"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Gratuity</th>
                                            <td>Monthly remuneration</td>
                                            <td>$20</td>
                                            <td class="text-end">
                                                <div class="dropdown dropdown-action">
                                                    <a href="#" class="action-icon " data-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_addition"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_addition"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>


                    <div class="tab-pane" id="tab_overtime">

                        <div class="mb-4 mt-4 d-flex justify-content-end">
                            <button class="btn btn-primary " type="button" data-toggle="modal" data-target="#add_overtime"><i class="fa fa-plus"></i> Add Overtime</button>
                        </div>


                        <div class="payroll-table card">
                            <div class="table-responsive">
                                <table class="table table-hover table-radius">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Rate</th>
                                            <th class="text-end">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th>Normal day OT 1.5x</th>
                                            <td>Hourly 1.5</td>
                                            <td class="text-end">
                                                <div class="">
                                                    <a href="#" class="" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_overtime"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_overtime"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Public holiday OT 3.0x</th>
                                            <td>Hourly 3</td>
                                            <td class="text-end">
                                                <div class="dropdown dropdown-action">
                                                    <a href="#" class="action-icon " data-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_overtime"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_overtime"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Rest day OT 2.0x</th>
                                            <td>Hourly 2</td>
                                            <td class="text-end">
                                                <div class="dropdown dropdown-action">
                                                    <a href="#" class="action-icon " data-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_overtime"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_overtime"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>


                    <div class="tab-pane" id="tab_deductions">

                        <div class="mb-4 mt-4 d-flex justify-content-end">
                            <button class="btn btn-primary " type="button" data-toggle="modal" data-target="#add_deduction"><i class="fa fa-plus"></i> Add Deduction</button>
                        </div>


                        <div class="payroll-table card">
                            <div class="table-responsive">
                                <table class="table table-hover table-radius">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Default/Unit Amount</th>
                                            <th class="text-end">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th>Absent amount</th>
                                            <td>$12</td>
                                            <td class="text-end">
                                                <div class="dropdown dropdown-action">
                                                    <a href="#" class="action-icon " data-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_deduction"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_deduction"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Advance</th>
                                            <td>$7</td>
                                            <td class="text-end">
                                                <div class="dropdown dropdown-action">
                                                    <a href="#" class="action-icon " data-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_deduction"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_deduction"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Unpaid leave</th>
                                            <td>$3</td>
                                            <td class="text-end">
                                                <div class="dropdown dropdown-action">
                                                    <a href="#" class="action-icon " data-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_deduction"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_deduction"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>

                </div>

            </div>


            <div id="add_addition" class="modal custom-modal fade" role="dialog">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Add Addition</h5>
                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="form-group">
                                    <label>Name <span class="text-danger">*</span></label>
                                    <input class="form-control" type="text">
                                </div>
                                <div class="form-group">
                                    <label>Category <span class="text-danger">*</span></label>
                                    <select class="select select2-hidden-accessible" data-select2-id="select2-data-1-cj5n" tabindex="-1" aria-hidden="true">
                                        <option data-select2-id="select2-data-3-m723">Select a category</option>
                                        <option>Monthly remuneration</option>
                                        <option>Additional remuneration</option>
                                    </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="select2-data-2-ik0r" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-8mcq-container" aria-controls="select2-8mcq-container"><span class="select2-selection__rendered" id="select2-8mcq-container" role="textbox" aria-readonly="true" title="Select a category">Select a category</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                </div>
                                <div class="form-group">
                                    <label class="d-block">Unit calculation</label>
                                    <div class="status-toggle">
                                        <input type="checkbox" id="unit_calculation" class="check">
                                        <label for="unit_calculation" class="checktoggle">checkbox</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Unit Amount</label>
                                    <div class="input-group">
                                        <span class="input-group-text">$</span>
                                        <input type="text" class="form-control">
                                        <span class="input-group-text">.00</span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="d-block">Assignee</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="addition_assignee" id="addition_no_emp" value="option1" checked="">
                                        <label class="form-check-label" for="addition_no_emp">
                                            No assignee
                                        </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="addition_assignee" id="addition_all_emp" value="option2">
                                        <label class="form-check-label" for="addition_all_emp">
                                            All employees
                                        </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="addition_assignee" id="addition_single_emp" value="option3">
                                        <label class="form-check-label" for="addition_single_emp">
                                            Select Employee
                                        </label>
                                    </div>
                                    <div class="form-group">
                                        <select class="select select2-hidden-accessible" data-select2-id="select2-data-4-egi4" tabindex="-1" aria-hidden="true">
                                            <option data-select2-id="select2-data-6-mpvw">-</option>
                                            <option>Select All</option>
                                            <option>John Doe</option>
                                            <option>Richard Miles</option>
                                        </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="select2-data-5-eyju" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-mlmc-container" aria-controls="select2-mlmc-container"><span class="select2-selection__rendered" id="select2-mlmc-container" role="textbox" aria-readonly="true" title="-">-</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                    </div>
                                </div>
                                <div class="submit-section">
                                    <button class="btn btn-primary submit-btn">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>


            <div id="edit_addition" class="modal custom-modal fade" role="dialog">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Edit Addition</h5>
                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="form-group">
                                    <label>Name <span class="text-danger">*</span></label>
                                    <input class="form-control" type="text">
                                </div>
                                <div class="form-group">
                                    <label>Category <span class="text-danger">*</span></label>
                                    <select class="select select2-hidden-accessible" data-select2-id="select2-data-7-knet" tabindex="-1" aria-hidden="true">
                                        <option data-select2-id="select2-data-9-5ivo">Select a category</option>
                                        <option>Monthly remuneration</option>
                                        <option>Additional remuneration</option>
                                    </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="select2-data-8-2vp8" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-om57-container" aria-controls="select2-om57-container"><span class="select2-selection__rendered" id="select2-om57-container" role="textbox" aria-readonly="true" title="Select a category">Select a category</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                </div>
                                <div class="form-group">
                                    <label class="d-block">Unit calculation</label>
                                    <div class="status-toggle">
                                        <input type="checkbox" id="edit_unit_calculation" class="check">
                                        <label for="edit_unit_calculation" class="checktoggle">checkbox</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Unit Amount</label>
                                    <div class="input-group">
                                        <span class="input-group-text">$</span>
                                        <input type="text" class="form-control">
                                        <span class="input-group-text">.00</span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="d-block">Assignee</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="edit_addition_assignee" id="edit_addition_no_emp" value="option1" checked="">
                                        <label class="form-check-label" for="edit_addition_no_emp">
                                            No assignee
                                        </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="edit_addition_assignee" id="edit_addition_all_emp" value="option2">
                                        <label class="form-check-label" for="edit_addition_all_emp">
                                            All employees
                                        </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="edit_addition_assignee" id="edit_addition_single_emp" value="option3">
                                        <label class="form-check-label" for="edit_addition_single_emp">
                                            Select Employee
                                        </label>
                                    </div>
                                    <div class="form-group">
                                        <select class="select select2-hidden-accessible" data-select2-id="select2-data-10-jsw9" tabindex="-1" aria-hidden="true">
                                            <option data-select2-id="select2-data-12-g10h">-</option>
                                            <option>Select All</option>
                                            <option>John Doe</option>
                                            <option>Richard Miles</option>
                                        </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="select2-data-11-zv00" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-9o32-container" aria-controls="select2-9o32-container"><span class="select2-selection__rendered" id="select2-9o32-container" role="textbox" aria-readonly="true" title="-">-</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                    </div>
                                </div>
                                <div class="submit-section">
                                    <button class="btn btn-primary submit-btn">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>


            <div class="modal custom-modal fade" id="delete_addition" role="dialog">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="form-header">
                                <h3>Delete Addition</h3>
                                <p>Are you sure want to delete?</p>
                            </div>
                            <div class="modal-btn delete-action">
                                <div class="row">
                                    <div class="col-6">
                                        <a href="javascript:void(0);" class="btn btn-primary continue-btn">Delete</a>
                                    </div>
                                    <div class="col-6">
                                        <a href="javascript:void(0);" data-bs-dismiss="modal" class="btn btn-primary cancel-btn">Cancel</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div id="add_overtime" class="modal custom-modal fade" role="dialog">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Add Overtime</h5>
                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="form-group">
                                    <label>Name <span class="text-danger">*</span></label>
                                    <input class="form-control" type="text">
                                </div>
                                <div class="form-group">
                                    <label>Rate Type <span class="text-danger">*</span></label>
                                    <select class="select select2-hidden-accessible" data-select2-id="select2-data-13-ltw8" tabindex="-1" aria-hidden="true">
                                        <option data-select2-id="select2-data-15-e49q">-</option>
                                        <option>Daily Rate</option>
                                        <option>Hourly Rate</option>
                                    </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="select2-data-14-iixm" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-wug1-container" aria-controls="select2-wug1-container"><span class="select2-selection__rendered" id="select2-wug1-container" role="textbox" aria-readonly="true" title="-">-</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                </div>
                                <div class="form-group">
                                    <label>Rate <span class="text-danger">*</span></label>
                                    <input class="form-control" type="text">
                                </div>
                                <div class="submit-section">
                                    <button class="btn btn-primary submit-btn">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>


            <div id="edit_overtime" class="modal custom-modal fade" role="dialog">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Edit Overtime</h5>
                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="form-group">
                                    <label>Name <span class="text-danger">*</span></label>
                                    <input class="form-control" type="text">
                                </div>
                                <div class="form-group">
                                    <label>Rate Type <span class="text-danger">*</span></label>
                                    <select class="select select2-hidden-accessible" data-select2-id="select2-data-16-v6vj" tabindex="-1" aria-hidden="true">
                                        <option data-select2-id="select2-data-18-15zq">-</option>
                                        <option>Daily Rate</option>
                                        <option>Hourly Rate</option>
                                    </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="select2-data-17-ebqw" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-433b-container" aria-controls="select2-433b-container"><span class="select2-selection__rendered" id="select2-433b-container" role="textbox" aria-readonly="true" title="-">-</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                </div>
                                <div class="form-group">
                                    <label>Rate <span class="text-danger">*</span></label>
                                    <input class="form-control" type="text">
                                </div>
                                <div class="submit-section">
                                    <button class="btn btn-primary submit-btn">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>


            <div class="modal custom-modal fade" id="delete_overtime" role="dialog">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="form-header">
                                <h3>Delete Overtime</h3>
                                <p>Are you sure want to delete?</p>
                            </div>
                            <div class="modal-btn delete-action">
                                <div class="row">
                                    <div class="col-6">
                                        <a href="javascript:void(0);" class="btn btn-primary continue-btn">Delete</a>
                                    </div>
                                    <div class="col-6">
                                        <a href="javascript:void(0);" data-bs-dismiss="modal" class="btn btn-primary cancel-btn">Cancel</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div id="add_deduction" class="modal custom-modal fade" role="dialog">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Add Deduction</h5>
                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="form-group">
                                    <label>Name <span class="text-danger">*</span></label>
                                    <input class="form-control" type="text">
                                </div>
                                <div class="form-group">
                                    <label class="d-block">Unit calculation</label>
                                    <div class="status-toggle">
                                        <input type="checkbox" id="unit_calculation_deduction" class="check">
                                        <label for="unit_calculation_deduction" class="checktoggle">checkbox</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Unit Amount</label>
                                    <div class="input-group">
                                        <span class="input-group-text">$</span>
                                        <input type="text" class="form-control">
                                        <span class="input-group-text">.00</span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="d-block">Assignee</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="deduction_assignee" id="deduction_no_emp" value="option1" checked="">
                                        <label class="form-check-label" for="deduction_no_emp">
                                            No assignee
                                        </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="deduction_assignee" id="deduction_all_emp" value="option2">
                                        <label class="form-check-label" for="deduction_all_emp">
                                            All employees
                                        </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="deduction_assignee" id="deduction_single_emp" value="option3">
                                        <label class="form-check-label" for="deduction_single_emp">
                                            Select Employee
                                        </label>
                                    </div>
                                    <div class="form-group">
                                        <select class="select select2-hidden-accessible" data-select2-id="select2-data-19-kmdz" tabindex="-1" aria-hidden="true">
                                            <option data-select2-id="select2-data-21-17jr">-</option>
                                            <option>Select All</option>
                                            <option>John Doe</option>
                                            <option>Richard Miles</option>
                                        </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="select2-data-20-tsia" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-nm3u-container" aria-controls="select2-nm3u-container"><span class="select2-selection__rendered" id="select2-nm3u-container" role="textbox" aria-readonly="true" title="-">-</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                    </div>
                                </div>
                                <div class="submit-section">
                                    <button class="btn btn-primary submit-btn">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>


            <div id="edit_deduction" class="modal custom-modal fade" role="dialog">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Edit Deduction</h5>
                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="form-group">
                                    <label>Name <span class="text-danger">*</span></label>
                                    <input class="form-control" type="text">
                                </div>
                                <div class="form-group">
                                    <label class="d-block">Unit calculation</label>
                                    <div class="status-toggle">
                                        <input type="checkbox" id="edit_unit_calculation_deduction" class="check">
                                        <label for="edit_unit_calculation_deduction" class="checktoggle">checkbox</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Unit Amount</label>
                                    <div class="input-group">
                                        <span class="input-group-text">$</span>
                                        <input type="text" class="form-control">
                                        <span class="input-group-text">.00</span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="d-block">Assignee</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="edit_deduction_assignee" id="edit_deduction_no_emp" value="option1" checked="">
                                        <label class="form-check-label" for="edit_deduction_no_emp">
                                            No assignee
                                        </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="edit_deduction_assignee" id="edit_deduction_all_emp" value="option2">
                                        <label class="form-check-label" for="edit_deduction_all_emp">
                                            All employees
                                        </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="edit_deduction_assignee" id="edit_deduction_single_emp" value="option3">
                                        <label class="form-check-label" for="edit_deduction_single_emp">
                                            Select Employee
                                        </label>
                                    </div>
                                    <div class="form-group">
                                        <select class="select select2-hidden-accessible" data-select2-id="select2-data-22-5gua" tabindex="-1" aria-hidden="true">
                                            <option data-select2-id="select2-data-24-8hdd">-</option>
                                            <option>Select All</option>
                                            <option>John Doe</option>
                                            <option>Richard Miles</option>
                                        </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="select2-data-23-zhnq" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-c22s-container" aria-controls="select2-c22s-container"><span class="select2-selection__rendered" id="select2-c22s-container" role="textbox" aria-readonly="true" title="-">-</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                    </div>
                                </div>
                                <div class="submit-section">
                                    <button class="btn btn-primary submit-btn">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>


            <div class="modal custom-modal fade" id="delete_deduction" role="dialog">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="form-header">
                                <h3>Delete Deduction</h3>
                                <p>Are you sure want to delete?</p>
                            </div>
                            <div class="modal-btn delete-action">
                                <div class="row">
                                    <div class="col-6">
                                        <a href="javascript:void(0);" class="btn btn-primary continue-btn">Delete</a>
                                    </div>
                                    <div class="col-6">
                                        <a href="javascript:void(0);" data-bs-dismiss="modal" class="btn btn-primary cancel-btn">Cancel</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>

        <div class="tab-pane fade" id="hr-pills-cost-sharing-content" role="tabpanel" aria-labelledby="pillars-pills-ds-activities-tab">
            {{-- data science activities --}}
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-content table-responsive">
                            <br />
                            <table class="table table-bordered table-hover">
                                <p>
                                    <strong>Pillar Activities.</strong>
                                </p>
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Requested by</th>
                                        <th scope="col-md-4">Title</th>
                                        <th scope="col">Request Type</th>
                                        <th scope="col">Under Project</th>
                                        <th scope="col"># of approvals</th>
                                        <th scope="col">Total Cost</th>
                                        <th scope="col">Date created</th>

                                        <th scope="col"></th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>MarkCuban</td>
                                        <td>Data visualisation in Mbeya</td>
                                        <td>Training</td>
                                        <td>Sauti Mpya</td>
                                        <td>0</td>
                                        <td>2,300,000 <span class="badge badge-success">TZS</span>
                                        </td>
                                        <td>2019-09-11</td>
                                        <td>
                                            <button type="button" class="btn btn-outline-success">view
                                                request</button>
                                        </td>
                                    </tr>

                                    <tr>
                                        <th scope="row">4</th>
                                        <td>Jane Sharpe</td>
                                        <td>Data Mining in Dar</td>
                                        <td>Training</td>
                                        <td>Data Zetu</td>
                                        <td>0</td>
                                        <td>6,600,000 <span class="badge badge-success">TZS</span>
                                        </td>
                                        <td>2019-09-11</td>
                                        <td>
                                            <button type="button" class="btn btn-outline-success">view
                                                request</button>
                                        </td>
                                    </tr>

                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Mary Poppins</td>
                                        <td>Data Analyis and Mining</td>
                                        <td>Training</td>
                                        <td>Sauti Mpya</td>
                                        <td>0</td>
                                        <td>8,700,000 <span class="badge badge-success">TZS</span>
                                        </td>
                                        <td>2019-09-11</td>
                                        <td>
                                            <button type="button" class="btn btn-outline-success">view
                                                request</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <br />
                            <nav aria-label="Page navigation example">
                                <ul class="pagination">
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Previous">
                                            <span aria-hidden="true">&laquo;</span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Next">
                                            <span aria-hidden="true">&raquo;</span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <!-- end of SECOND column -->
                </div>

            </div>


        </div>


        <div class="tab-pane fade" id="hr-pills-dlr-content" role="tabpanel" aria-labelledby="pillars-pills-ds-scholars-tab">

            {{-- data science scholars --}}
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-content table-responsive">
                            <br />
                            <table class="table table-bordered table-hover">
                                <p>
                                    <strong>Data Science Scholars.</strong>
                                </p>
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Requested by</th>
                                        <th scope="col-md-4">Title</th>
                                        <th scope="col">Request Type</th>
                                        <th scope="col">Under Project</th>
                                        <th scope="col"># of approvals</th>
                                        <th scope="col">Total Cost</th>
                                        <th scope="col">Date created</th>

                                        <th scope="col"></th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>MarkCuban</td>
                                        <td>Data visualisation in Mbeya</td>
                                        <td>Training</td>
                                        <td>Sauti Mpya</td>
                                        <td>0</td>
                                        <td>2,300,000 <span class="badge badge-success">TZS</span>
                                        </td>
                                        <td>2019-09-11</td>
                                        <td>
                                            <button type="button" class="btn btn-outline-success">view
                                                request</button>
                                        </td>
                                    </tr>

                                    <tr>
                                        <th scope="row">4</th>
                                        <td>Jane Sharpe</td>
                                        <td>Data Mining in Dar</td>
                                        <td>Training</td>
                                        <td>Data Zetu</td>
                                        <td>0</td>
                                        <td>6,600,000 <span class="badge badge-success">TZS</span>
                                        </td>
                                        <td>2019-09-11</td>
                                        <td>
                                            <button type="button" class="btn btn-outline-success">view
                                                request</button>
                                        </td>
                                    </tr>

                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Mary Poppins</td>
                                        <td>Data Analyis and Mining</td>
                                        <td>Training</td>
                                        <td>Sauti Mpya</td>
                                        <td>0</td>
                                        <td>8,700,000 <span class="badge badge-success">TZS</span>
                                        </td>
                                        <td>2019-09-11</td>
                                        <td>
                                            <button type="button" class="btn btn-outline-success">view
                                                request</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <br />
                            <nav aria-label="Page navigation example">
                                <ul class="pagination">
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Previous">
                                            <span aria-hidden="true">&laquo;</span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Next">
                                            <span aria-hidden="true">&raquo;</span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <!-- end of SECOND column -->
                </div>

            </div>

        </div>
        <div class="tab-pane fade" id="hr-pills-leave-allowance-content" role="tabpanel" aria-labelledby="pillars-pills-ds-grantees-tab">

            {{-- data science grantees --}}
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-content table-responsive">
                            <br />
                            <table class="table table-bordered table-hover">
                                <p>
                                    <strong>Data Science Grantees.</strong>
                                </p>
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Requested by</th>
                                        <th scope="col-md-4">Title</th>
                                        <th scope="col">Request Type</th>
                                        <th scope="col">Under Project</th>
                                        <th scope="col"># of approvals</th>
                                        <th scope="col">Total Cost</th>
                                        <th scope="col">Date created</th>

                                        <th scope="col"></th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>MarkCuban</td>
                                        <td>Data visualisation in Mbeya</td>
                                        <td>Training</td>
                                        <td>Sauti Mpya</td>
                                        <td>0</td>
                                        <td>2,300,000 <span class="badge badge-success">TZS</span>
                                        </td>
                                        <td>2019-09-11</td>
                                        <td>
                                            <button type="button" class="btn btn-outline-success">view
                                                request</button>
                                        </td>
                                    </tr>

                                    <tr>
                                        <th scope="row">4</th>
                                        <td>Jane Sharpe</td>
                                        <td>Data Mining in Dar</td>
                                        <td>Training</td>
                                        <td>Data Zetu</td>
                                        <td>0</td>
                                        <td>6,600,000 <span class="badge badge-success">TZS</span>
                                        </td>
                                        <td>2019-09-11</td>
                                        <td>
                                            <button type="button" class="btn btn-outline-success">view
                                                request</button>
                                        </td>
                                    </tr>

                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Mary Poppins</td>
                                        <td>Data Analyis and Mining</td>
                                        <td>Training</td>
                                        <td>Sauti Mpya</td>
                                        <td>0</td>
                                        <td>8,700,000 <span class="badge badge-success">TZS</span>
                                        </td>
                                        <td>2019-09-11</td>
                                        <td>
                                            <button type="button" class="btn btn-outline-success">view
                                                request</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <br />
                            <nav aria-label="Page navigation example">
                                <ul class="pagination">
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Previous">
                                            <span aria-hidden="true">&laquo;</span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Next">
                                            <span aria-hidden="true">&raquo;</span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <!-- end of SECOND column -->
                </div>

            </div>

        </div>
        <div class="tab-pane fade" id="hr-pills-leaves-content" role="tabpanel" aria-labelledby="pillars-pills-ds-retirements-tab">

            {{-- data science retirements --}}


            <div class="content container-fluid">

                <div class="page-header">
                    <div class="row align-items-center">
                        <div class="col">
                            <h3 class="page-title">Leaves</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="admin-dashboard.html">Dashboard</a></li>
                                <li class="breadcrumb-item active">Leaves</li>
                            </ul>
                        </div>
                        <div class="col-auto float-end ms-auto">
                            <a href="#" class="btn add-btn" data-toggle="modal" data-target="#add_leave"><i class="fa fa-plus"></i> Add Leave</a>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-md-3 text-center ">
                        <div class="card p-3">
                            <h6>Today Presents</h6>
                            <h4 class="m-0">12 / 60</h4>
                        </div>
                    </div>
                    <div class="col-md-3 text-center ">
                        <div class="card p-3">
                            <h6>Planned Leaves</h6>
                            <h4 class="m-0">8 <span>Today</span></h4>
                        </div>
                    </div>
                    <div class="col-md-3  text-center">
                        <div class="card p-3 ">
                            <h6>Unplanned Leaves</h6>
                            <h4 class="m-0">0 <span>Today</span></h4>
                        </div>
                    </div>
                    <div class="col-md-3 text-center  ">
                        <div class="card p-3">
                            <h6>Pending Requests</h6>
                            <h4 class="m-0">12</h4>
                        </div>
                    </div>
                </div>


                <div class="row filter-row mt-4 mb-3">
                    <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">
                        <div class="form-group form-focus">
                            <label class=""><small>Employee Name</small></label>
                            <input type="text" class="form-control floating">

                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">
                        <div class="form-group form-focus select-focus focused">
                            <label class="focus-label"><small>Leave Type</small></label>
                            <select class="select floating form-control" data-select2-id="select2-data-1-k9no" tabindex="-1" aria-hidden="true">
                                <option data-select2-id="select2-data-3-e7ba"> Select </option>
                                <option>Casual Leave</option>
                                <option>Medical Leave</option>
                                <option>Loss of Pay</option>
                            </select>

                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">
                        <div class="form-group form-focus select-focus focused">
                            <label class="focus-label"><small>Leave Status </small></label>
                            <select class="select floating form-control" data-select2-id="select2-data-4-2btv" tabindex="-1" aria-hidden="true">
                                <option data-select2-id="select2-data-6-sk0z"> Select </option>
                                <option> Pending </option>
                                <option> Approved </option>
                                <option> Rejected </option>
                            </select>

                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">
                        <div class="form-group form-focus">
                            <div class="cal-icon">
                                <label class="focus-label"><small>From</small></label>
                                <input class="form-control floating datetimepicker" type="text">
                            </div>

                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">
                        <div class="form-group form-focus">
                            <div class="cal-icon">
                                <label class="focus-label"><small>To</small></label>
                                <input class="form-control floating datetimepicker" type="text">
                            </div>

                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">
                        <br>

                        <a href="#" class="btn btn-success w-100"> Search </a>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                                <div class="row">
                                    <div class="col-sm-12 col-md-6">
                                        <div class="dataTables_length" id="DataTables_Table_0_length"><label>Show <select name="DataTables_Table_0_length" aria-controls="DataTables_Table_0" class="custom-select custom-select-sm form-control form-control-sm">
                                                    <option value="10">10</option>
                                                    <option value="25">25</option>
                                                    <option value="50">50</option>
                                                    <option value="100">100</option>
                                                </select> entries</label></div>
                                    </div>
                                    <div class="col-sm-12 col-md-6"></div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <table class="table table-striped custom-table mb-0 datatable dataTable no-footer" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                                            <thead>
                                                <tr role="row">
                                                    <th class="sorting_asc">Employee</th>
                                                    <th class="sorting">Leave Type</th>
                                                    <th class="sorting">From</th>
                                                    <th class="sorting">To</th>
                                                    <th class="sorting">No of Days</th>
                                                    <th class="sorting">Reason</th>
                                                    <th class="text-center sorting">Status</th>
                                                    <th class="text-end sorting">Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>












                                                <tr class="odd">
                                                    <td class="sorting_1">

                                                        <a href="profile.html" class="avatar"><img alt="" src="assets/img/profiles/avatar-02.jpg"></a>
                                                        <a> John Doe <span>Web Designer</span></a>

                                                    </td>
                                                    <td>Medical Leave</td>
                                                    <td>27 Feb 2019</td>
                                                    <td>27 Feb 2019</td>
                                                    <td>1 day</td>
                                                    <td>Going to Hospital</td>
                                                    <td class="text-center">
                                                        <div class="dropdown action-label">
                                                            <a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">
                                                                <i class="fa fa-dot-circle-o text-success"></i> Approved
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-purple"></i> New</a>
                                                                <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-info"></i> Pending</a>
                                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#approve_leave"><i class="fa fa-dot-circle-o text-success"></i> Approved</a>
                                                                <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> Declined</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-end">
                                                        <div class="dropdown dropdown-action">
                                                            <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_leave"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_approve"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="even">
                                                    <td class="sorting_1">

                                                        <a href="profile.html" class="avatar"><img alt="" src="assets/img/profiles/avatar-15.jpg"></a>
                                                        <a>Buster Wigton <span>Web Developer</span></a>

                                                    </td>
                                                    <td>Hospitalisation</td>
                                                    <td>15 Jan 2019</td>
                                                    <td>25 Jan 2019</td>
                                                    <td>10 days</td>
                                                    <td>Going to Hospital</td>
                                                    <td class="text-center">
                                                        <div class="dropdown action-label">
                                                            <a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">
                                                                <i class="fa fa-dot-circle-o text-success"></i> Approved
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-purple"></i> New</a>
                                                                <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-info"></i> Pending</a>
                                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#approve_leave"><i class="fa fa-dot-circle-o text-success"></i> Approved</a>
                                                                <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> Declined</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-end">
                                                        <div class="dropdown dropdown-action">
                                                            <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_leave"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_approve"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="odd">
                                                    <td class="sorting_1">

                                                        <a href="profile.html" class="avatar"><img alt="" src="assets/img/profiles/avatar-08.jpg"></a>
                                                        <a>Catherine Manseau <span>Web Developer</span></a>

                                                    </td>
                                                    <td>Maternity Leave</td>
                                                    <td>5 Jan 2019</td>
                                                    <td>15 Jan 2019</td>
                                                    <td>10 days</td>
                                                    <td>Going to Hospital</td>
                                                    <td class="text-center">
                                                        <div class="dropdown action-label">
                                                            <a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">
                                                                <i class="fa fa-dot-circle-o text-success"></i> Approved
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-purple"></i> New</a>
                                                                <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-info"></i> Pending</a>
                                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#approve_leave"><i class="fa fa-dot-circle-o text-success"></i> Approved</a>
                                                                <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> Declined</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-end">
                                                        <div class="dropdown dropdown-action">
                                                            <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_leave"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_approve"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="even">
                                                    <td class="sorting_1">

                                                        <a href="profile.html" class="avatar"><img alt="" src="assets/img/profiles/avatar-20.jpg"></a>
                                                        <a>Domenic Houston <span>Web Developer</span></a>

                                                    </td>
                                                    <td>Casual Leave</td>
                                                    <td>10 Jan 2019</td>
                                                    <td>11 Jan 2019</td>
                                                    <td>2 days</td>
                                                    <td>Going to Hospital</td>
                                                    <td class="text-center">
                                                        <div class="dropdown action-label">
                                                            <a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">
                                                                <i class="fa fa-dot-circle-o text-success"></i> Approved
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-purple"></i> New</a>
                                                                <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-info"></i> Pending</a>
                                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#approve_leave"><i class="fa fa-dot-circle-o text-success"></i> Approved</a>
                                                                <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> Declined</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-end">
                                                        <div class="dropdown dropdown-action">
                                                            <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_leave"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_approve"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="odd">
                                                    <td class="sorting_1">

                                                        <a href="profile.html" class="avatar"><img alt="" src="assets/img/profiles/avatar-02.jpg"></a>
                                                        <a>John Doe <span>Web Designer</span></a>

                                                    </td>
                                                    <td>Casual Leave</td>
                                                    <td>9 Jan 2019</td>
                                                    <td>10 Jan 2019</td>
                                                    <td>2 days</td>
                                                    <td>Going to Hospital</td>
                                                    <td class="text-center">
                                                        <div class="dropdown action-label">
                                                            <a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">
                                                                <i class="fa fa-dot-circle-o text-success"></i> Approved
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-purple"></i> New</a>
                                                                <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-info"></i> Pending</a>
                                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#approve_leave"><i class="fa fa-dot-circle-o text-success"></i> Approved</a>
                                                                <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> Declined</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-end">
                                                        <div class="dropdown dropdown-action">
                                                            <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_leave"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_approve"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="even">
                                                    <td class="sorting_1">

                                                        <a href="profile.html" class="avatar"><img alt="" src="assets/img/profiles/avatar-10.jpg"></a>
                                                        <a>John Smith <span>Android Developer</span></a>

                                                    </td>
                                                    <td>LOP</td>
                                                    <td>24 Feb 2019</td>
                                                    <td>25 Feb 2019</td>
                                                    <td>2 days</td>
                                                    <td>Personnal</td>
                                                    <td class="text-center">
                                                        <div class="dropdown action-label">
                                                            <a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">
                                                                <i class="fa fa-dot-circle-o text-success"></i> Approved
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-purple"></i> New</a>
                                                                <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-info"></i> Pending</a>
                                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#approve_leave"><i class="fa fa-dot-circle-o text-success"></i> Approved</a>
                                                                <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> Declined</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-end">
                                                        <div class="dropdown dropdown-action">
                                                            <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_leave"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_approve"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="odd">
                                                    <td class="sorting_1">

                                                        <a href="profile.html" class="avatar"><img alt="" src="assets/img/profiles/avatar-20.jpg"></a>
                                                        <a>Melita Faucher <span>Web Developer</span></a>

                                                    </td>
                                                    <td>Casual Leave</td>
                                                    <td>13 Jan 2019</td>
                                                    <td>14 Jan 2019</td>
                                                    <td>2 days</td>
                                                    <td>Going to Hospital</td>
                                                    <td class="text-center">
                                                        <div class="dropdown action-label">
                                                            <a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">
                                                                <i class="fa fa-dot-circle-o text-danger"></i> Declined
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-purple"></i> New</a>
                                                                <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-info"></i> Pending</a>
                                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#approve_leave"><i class="fa fa-dot-circle-o text-success"></i> Approved</a>
                                                                <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> Declined</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-end">
                                                        <div class="dropdown dropdown-action">
                                                            <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_leave"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_approve"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="even">
                                                    <td class="sorting_1">

                                                        <a href="profile.html" class="avatar"><img alt="" src="assets/img/profiles/avatar-05.jpg"></a>
                                                        <a>Mike Litorus <span>IOS Developer</span></a>

                                                    </td>
                                                    <td>Paternity Leave</td>
                                                    <td>13 Feb 2019</td>
                                                    <td>17 Feb 2019</td>
                                                    <td>5 days</td>
                                                    <td>Going to Hospital</td>
                                                    <td class="text-center">
                                                        <div class="dropdown action-label">
                                                            <a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">
                                                                <i class="fa fa-dot-circle-o text-danger"></i> Declined
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-purple"></i> New</a>
                                                                <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-info"></i> Pending</a>
                                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#approve_leave"><i class="fa fa-dot-circle-o text-success"></i> Approved</a>
                                                                <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> Declined</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-end">
                                                        <div class="dropdown dropdown-action">
                                                            <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_leave"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_approve"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="odd">
                                                    <td class="sorting_1">

                                                        <a href="profile.html" class="avatar"><img alt="" src="assets/img/profiles/avatar-09.jpg"></a>
                                                        <a href="#">Richard Miles <span>Web Developer</span></a>

                                                    </td>
                                                    <td>Casual Leave</td>
                                                    <td>8 Mar 2019</td>
                                                    <td>9 Mar 2019</td>
                                                    <td>2 days</td>
                                                    <td>Going to Hospital</td>
                                                    <td class="text-center">
                                                        <div class="dropdown action-label">
                                                            <a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">
                                                                <i class="fa fa-dot-circle-o text-purple"></i> New
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-purple"></i> New</a>
                                                                <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-info"></i> Pending</a>
                                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#approve_leave"><i class="fa fa-dot-circle-o text-success"></i> Approved</a>
                                                                <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> Declined</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-end">
                                                        <div class="dropdown dropdown-action">
                                                            <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_leave"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_approve"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="even">
                                                    <td class="sorting_1">

                                                        <a href="profile.html" class="avatar"><img alt="" src="assets/img/profiles/avatar-24.jpg"></a>
                                                        <a>Richard Parker <span>Web Developer</span></a>

                                                    </td>
                                                    <td>Casual Leave</td>
                                                    <td>30 Jan 2019</td>
                                                    <td>31 Jan 2019</td>
                                                    <td>2 days</td>
                                                    <td>Going to Hospital</td>
                                                    <td class="text-center">
                                                        <div class="dropdown action-label">
                                                            <a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">
                                                                <i class="fa fa-dot-circle-o text-purple"></i> New
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-purple"></i> New</a>
                                                                <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-info"></i> Pending</a>
                                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#approve_leave"><i class="fa fa-dot-circle-o text-success"></i> Approved</a>
                                                                <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> Declined</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-end">
                                                        <div class="dropdown dropdown-action">
                                                            <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_leave"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_approve"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12 col-md-5">
                                        <div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">Showing 1 to 10 of 12 entries</div>
                                    </div>
                                    <div class="col-sm-12 col-md-7">
                                        <div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate">
                                            <ul class="pagination">
                                                <li class="paginate_button page-item previous disabled" id="DataTables_Table_0_previous"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li>
                                                <li class="paginate_button page-item active"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
                                                <li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="2" tabindex="0" class="page-link">2</a></li>
                                                <li class="paginate_button page-item next" id="DataTables_Table_0_next"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="3" tabindex="0" class="page-link">Next</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div id="add_leave" class="modal custom-modal fade" style="display: none;" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Add Leave</h5>
                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="form-group">
                                    <label>Leave Type <span class="text-danger">*</span></label>
                                    <select class="select select2-hidden-accessible" data-select2-id="select2-data-7-t10j" tabindex="-1" aria-hidden="true">
                                        <option data-select2-id="select2-data-9-4bc5">Select Leave Type</option>
                                        <option>Casual Leave 12 Days</option>
                                        <option>Medical Leave</option>
                                        <option>Loss of Pay</option>
                                    </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="select2-data-8-hb2a" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-w12e-container" aria-controls="select2-w12e-container"><span class="select2-selection__rendered" id="select2-w12e-container" role="textbox" aria-readonly="true" title="Select Leave Type">Select Leave Type</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                </div>
                                <div class="form-group">
                                    <label>From <span class="text-danger">*</span></label>
                                    <div class="cal-icon">
                                        <input class="form-control datetimepicker" type="text">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>To <span class="text-danger">*</span></label>
                                    <div class="cal-icon">
                                        <input class="form-control datetimepicker" type="text">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Number of days <span class="text-danger">*</span></label>
                                    <input class="form-control" readonly="" type="text">
                                </div>
                                <div class="form-group">
                                    <label>Remaining Leaves <span class="text-danger">*</span></label>
                                    <input class="form-control" readonly="" value="12" type="text">
                                </div>
                                <div class="form-group">
                                    <label>Leave Reason <span class="text-danger">*</span></label>
                                    <textarea rows="4" class="form-control"></textarea>
                                </div>
                                <div class="submit-section">
                                    <button class="btn btn-primary submit-btn">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>


            <div id="edit_leave" class="modal custom-modal fade" role="dialog">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Edit Leave</h5>
                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="form-group">
                                    <label>Leave Type <span class="text-danger">*</span></label>
                                    <select class="select select2-hidden-accessible" data-select2-id="select2-data-10-3m6p" tabindex="-1" aria-hidden="true">
                                        <option data-select2-id="select2-data-12-lb30">Select Leave Type</option>
                                        <option>Casual Leave 12 Days</option>
                                    </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="select2-data-11-x0b6" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-8vc5-container" aria-controls="select2-8vc5-container"><span class="select2-selection__rendered" id="select2-8vc5-container" role="textbox" aria-readonly="true" title="Select Leave Type">Select Leave Type</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                </div>
                                <div class="form-group">
                                    <label>From <span class="text-danger">*</span></label>
                                    <div class="cal-icon">
                                        <input class="form-control datetimepicker" value="01-01-2019" type="text">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>To <span class="text-danger">*</span></label>
                                    <div class="cal-icon">
                                        <input class="form-control datetimepicker" value="01-01-2019" type="text">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Number of days <span class="text-danger">*</span></label>
                                    <input class="form-control" readonly="" type="text" value="2">
                                </div>
                                <div class="form-group">
                                    <label>Remaining Leaves <span class="text-danger">*</span></label>
                                    <input class="form-control" readonly="" value="12" type="text">
                                </div>
                                <div class="form-group">
                                    <label>Leave Reason <span class="text-danger">*</span></label>
                                    <textarea rows="4" class="form-control">Going to hospital</textarea>
                                </div>
                                <div class="submit-section">
                                    <button class="btn btn-primary submit-btn">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>


            <div class="modal custom-modal fade" id="approve_leave" role="dialog">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="form-header">
                                <h3>Leave Approve</h3>
                                <p>Are you sure want to approve for this leave?</p>
                            </div>
                            <div class="modal-btn delete-action">
                                <div class="row">
                                    <div class="col-6">
                                        <a href="javascript:void(0);" class="btn btn-primary continue-btn">Approve</a>
                                    </div>
                                    <div class="col-6">
                                        <a href="javascript:void(0);" data-bs-dismiss="modal" class="btn btn-primary cancel-btn">Decline</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="modal custom-modal fade" id="delete_approve" role="dialog">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="form-header">
                                <h3>Delete Leave</h3>
                                <p>Are you sure want to delete this leave?</p>
                            </div>
                            <div class="modal-btn delete-action">
                                <div class="row">
                                    <div class="col-6">
                                        <a href="javascript:void(0);" class="btn btn-primary continue-btn">Delete</a>
                                    </div>
                                    <div class="col-6">
                                        <a href="javascript:void(0);" data-bs-dismiss="modal" class="btn btn-primary cancel-btn">Cancel</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="tab-pane fade" id="hr-pills-loans-content" role="tabpanel" aria-labelledby="pillars-pills-ds-scholars-tab">

            {{-- data science scholars --}}
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-content table-responsive">
                            <br />
                            <table class="table table-bordered table-hover">
                                <p>
                                    <strong>Data Science Scholars.</strong>
                                </p>
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Requested by</th>
                                        <th scope="col-md-4">Title</th>
                                        <th scope="col">Request Type</th>
                                        <th scope="col">Under Project</th>
                                        <th scope="col"># of approvals</th>
                                        <th scope="col">Total Cost</th>
                                        <th scope="col">Date created</th>

                                        <th scope="col"></th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>MarkCuban</td>
                                        <td>Data visualisation in Mbeya</td>
                                        <td>Training</td>
                                        <td>Sauti Mpya</td>
                                        <td>0</td>
                                        <td>2,300,000 <span class="badge badge-success">TZS</span>
                                        </td>
                                        <td>2019-09-11</td>
                                        <td>
                                            <button type="button" class="btn btn-outline-success">view
                                                request</button>
                                        </td>
                                    </tr>

                                    <tr>
                                        <th scope="row">4</th>
                                        <td>Jane Sharpe</td>
                                        <td>Data Mining in Dar</td>
                                        <td>Training</td>
                                        <td>Data Zetu</td>
                                        <td>0</td>
                                        <td>6,600,000 <span class="badge badge-success">TZS</span>
                                        </td>
                                        <td>2019-09-11</td>
                                        <td>
                                            <button type="button" class="btn btn-outline-success">view
                                                request</button>
                                        </td>
                                    </tr>

                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Mary Poppins</td>
                                        <td>Data Analyis and Mining</td>
                                        <td>Training</td>
                                        <td>Sauti Mpya</td>
                                        <td>0</td>
                                        <td>8,700,000 <span class="badge badge-success">TZS</span>
                                        </td>
                                        <td>2019-09-11</td>
                                        <td>
                                            <button type="button" class="btn btn-outline-success">view
                                                request</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <br />
                            <nav aria-label="Page navigation example">
                                <ul class="pagination">
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Previous">
                                            <span aria-hidden="true">&laquo;</span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Next">
                                            <span aria-hidden="true">&raquo;</span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <!-- end of SECOND column -->
                </div>

            </div>

        </div>
        <div class="tab-pane fade" id="hr-pills-payroll-content" role="tabpanel" aria-labelledby="pillars-pills-ds-grantees-tab">


            <div class="row">

                <div class="content container-fluid">

                    <div class="page-header">
                        <div class="row align-items-center">
                            <div class="col">
                                <h3 class="page-title">Employee Salary</h3>
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="admin-dashboard.html">Dashboard</a></li>
                                    <li class="breadcrumb-item active">Salary</li>
                                </ul>
                            </div>
                            <div class="col-auto float-end ms-auto">
                                <a href="#" class="btn add-btn" data-toggle="modal" data-target="#add_salary"><i class="fa fa-plus"></i> Add Salary</a>
                            </div>
                        </div>
                    </div>


                    <div class="row filter-row">
                        <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">
                            <div class="form-group form-focus">
                                <small class="focus-label">Employee Name</small>
                                <input type="text" class="form-control ">
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">
                            <div class="form-group form-focus select-focus">
                                <small class="focus-label">Role</small>
                                <select class="select floating form-control" data-select2-id="select2-data-1-8lz3" tabindex="-1" aria-hidden="true">
                                    <option value="" data-select2-id="select2-data-3-sabh"> -- Select -- </option>
                                    <option value="">Employee</option>
                                    <option value="1">Manager</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">
                            <div class="form-group form-focus select-focus focused">
                                <small class="focus-label">Leave Status</small>
                                <select class="select  form-control" data-select2-id="select2-data-4-pkq4" tabindex="-1" aria-hidden="true">
                                    <option data-select2-id="select2-data-6-5qqj"> -- Select -- </option>
                                    <option> Pending </option>
                                    <option> Approved </option>
                                    <option> Rejected </option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">
                            <div class="form-group form-focus">
                                <div class="cal-icon">
                                    <small class="focus-label">From</small>
                                    <input class="form-control floating datetimepicker" type="text">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">
                            <div class="form-group form-focus">
                                <div class="cal-icon">
                                    <small class="focus-label">To</small>
                                    <input class="form-control floating datetimepicker" type="text">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">
                            <label class="focus-label"></label>
                            <a href="#" class="btn btn-success w-100"> Search </a>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="table-responsive">
                                <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                                    <div class="row">
                                        <div class="col-sm-12 col-md-6">
                                            <div class="dataTables_length" id="DataTables_Table_0_length"><label>Show <select name="DataTables_Table_0_length" aria-controls="DataTables_Table_0" class="custom-select custom-select-sm form-control form-control-sm">
                                                        <option value="10">10</option>
                                                        <option value="25">25</option>
                                                        <option value="50">50</option>
                                                        <option value="100">100</option>
                                                    </select> entries</label></div>
                                        </div>
                                        <div class="col-sm-12 col-md-6"></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <table class="table table-striped custom-table datatable dataTable no-footer" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                                                <thead>
                                                    <tr role="row">
                                                        <th class="sorting_asc">Employee</th>
                                                        <th class="sorting">Employee ID</th>
                                                        <th class="sorting">Email</th>
                                                        <th class="sorting">Join Date</th>
                                                        <th class="sorting">Role</th>
                                                        <th class="sorting">Salary</th>
                                                        <th class="sorting">Payslip</th>
                                                        <th class="text-end sorting">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>











                                                    <tr class="odd">
                                                        <td class="sorting_1">

                                                            <a href="profile.html" class="avatar"><img src="assets/img/profiles/avatar-13.jpg" alt=""></a>
                                                            <a href="profile.html">Bernardo Galaviz <span>Web Developer</span></a>

                                                        </td>
                                                        <td>FT-0007</td>
                                                        <td>bernardogalaviz@example.com</td>
                                                        <td>1 Jan 2014</td>
                                                        <td>
                                                            <div class="dropdown">
                                                                <a href="" class="btn btn-white btn-sm btn-rounded dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Web Developer </a>
                                                                <div class="dropdown-menu">
                                                                    <a class="dropdown-item" href="#">Software Engineer</a>
                                                                    <a class="dropdown-item" href="#">Software Tester</a>
                                                                    <a class="dropdown-item" href="#">Frontend Developer</a>
                                                                    <a class="dropdown-item" href="#">UI/UX Developer</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>$38400</td>
                                                        <td><a class="btn btn-sm btn-primary" data-toggle="modal" data-target="#slip">Generate Slip</a></td>
                                                        <td class="text-end">
                                                            <div class="dropdown dropdown-action">
                                                                <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_salary"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_salary"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr class="even">
                                                        <td class="sorting_1">

                                                            <a href="profile.html" class="avatar"><img src="assets/img/profiles/avatar-16.jpg" alt=""></a>
                                                            <a href="profile.html">Jeffery Lalor <span>Team Leader</span></a>

                                                        </td>
                                                        <td>FT-0009</td>
                                                        <td>jefferylalor@example.com</td>
                                                        <td>1 Jan 2013</td>
                                                        <td>
                                                            <div class="dropdown">
                                                                <a href="" class="btn btn-white btn-sm btn-rounded dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Team Leader </a>
                                                                <div class="dropdown-menu">
                                                                    <a class="dropdown-item" href="#">Software Engineer</a>
                                                                    <a class="dropdown-item" href="#">Software Tester</a>
                                                                    <a class="dropdown-item" href="#">Frontend Developer</a>
                                                                    <a class="dropdown-item" href="#">UI/UX Developer</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>$73550</td>
                                                        <td><a class="btn btn-sm btn-primary" data-toggle="modal" data-target="#slip">Generate Slip</a></td>
                                                        <td class="text-end">
                                                            <div class="dropdown dropdown-action">
                                                                <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_salary"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_salary"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr class="odd">
                                                        <td class="sorting_1">

                                                            <a href="profile.html" class="avatar"><img src="assets/img/profiles/avatar-12.jpg" alt=""></a>
                                                            <a href="profile.html">Jeffrey Warden <span>Web Developer</span></a>

                                                        </td>
                                                        <td>FT-0006</td>
                                                        <td>jeffreywarden@example.com</td>
                                                        <td>1 Jan 2013</td>
                                                        <td>
                                                            <div class="dropdown">
                                                                <a href="" class="btn btn-white btn-sm btn-rounded dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Web Developer</a>
                                                                <div class="dropdown-menu">
                                                                    <a class="dropdown-item" href="#">Software Engineer</a>
                                                                    <a class="dropdown-item" href="#">Software Tester</a>
                                                                    <a class="dropdown-item" href="#">Frontend Developer</a>
                                                                    <a class="dropdown-item" href="#">UI/UX Developer</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>$45000</td>
                                                        <td><a class="btn btn-sm btn-primary" data-toggle="modal" data-target="#slip">Generate Slip</a></td>
                                                        <td class="text-end">
                                                            <div class="dropdown dropdown-action">
                                                                <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_salary"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_salary"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr class="even">
                                                        <td class="sorting_1">

                                                            <a href="profile.html" class="avatar"><img alt="" src="assets/img/profiles/avatar-02.jpg"></a>
                                                            <a href="profile.html">John Doe <span>Web Designer</span></a>

                                                        </td>
                                                        <td>FT-0001</td>
                                                        <td>johndoe@example.com</td>
                                                        <td>1 Jan 2013</td>
                                                        <td>
                                                            <div class="dropdown">
                                                                <a href="" class="btn btn-white btn-sm btn-rounded dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Web Designer </a>
                                                                <div class="dropdown-menu">
                                                                    <a class="dropdown-item" href="#">Software Engineer</a>
                                                                    <a class="dropdown-item" href="#">Software Tester</a>
                                                                    <a class="dropdown-item" href="#">Frontend Developer</a>
                                                                    <a class="dropdown-item" href="#">UI/UX Developer</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>$59698</td>
                                                        <td><a class="btn btn-sm btn-primary" data-toggle="modal" data-target="#slip">Generate Slip</a></td>
                                                        <td class="text-end">
                                                            <div class="dropdown dropdown-action">
                                                                <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_salary"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_salary"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr class="odd">
                                                        <td class="sorting_1">

                                                            <a href="profile.html" class="avatar"><img src="assets/img/profiles/avatar-10.jpg" alt=""></a>
                                                            <a href="profile.html">John Smith <span>Android Developer</span></a>

                                                        </td>
                                                        <td>FT-0003</td>
                                                        <td>johnsmith@example.com</td>
                                                        <td>1 Jan 2013</td>
                                                        <td>
                                                            <div class="dropdown">
                                                                <a href="" class="btn btn-white btn-sm btn-rounded dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Android Developer </a>
                                                                <div class="dropdown-menu">
                                                                    <a class="dropdown-item" href="#">Software Engineer</a>
                                                                    <a class="dropdown-item" href="#">Software Tester</a>
                                                                    <a class="dropdown-item" href="#">Frontend Developer</a>
                                                                    <a class="dropdown-item" href="#">UI/UX Developer</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>$48200</td>
                                                        <td><a class="btn btn-sm btn-primary" data-toggle="modal" data-target="#slip">Generate Slip</a></td>
                                                        <td class="text-end">
                                                            <div class="dropdown dropdown-action">
                                                                <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_salary"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_salary"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr class="even">
                                                        <td class="sorting_1">

                                                            <a href="profile.html" class="avatar"><img src="assets/img/profiles/avatar-01.jpg" alt=""></a>
                                                            <a href="profile.html">Lesley Grauer <span>Team Leader</span></a>

                                                        </td>
                                                        <td>FT-0008</td>
                                                        <td>lesleygrauer@example.com</td>
                                                        <td>1 Jun 2015</td>
                                                        <td>
                                                            <div class="dropdown">
                                                                <a href="" class="btn btn-white btn-sm btn-rounded dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Team Leader </a>
                                                                <div class="dropdown-menu">
                                                                    <a class="dropdown-item" href="#">Software Engineer</a>
                                                                    <a class="dropdown-item" href="#">Software Tester</a>
                                                                    <a class="dropdown-item" href="#">Frontend Developer</a>
                                                                    <a class="dropdown-item" href="#">UI/UX Developer</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>$75500</td>
                                                        <td><a class="btn btn-sm btn-primary" data-toggle="modal" data-target="#slip">Generate Slip</a></td>
                                                        <td class="text-end">
                                                            <div class="dropdown dropdown-action">
                                                                <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_salary"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_salary"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr class="odd">
                                                        <td class="sorting_1">

                                                            <a href="profile.html" class="avatar"><img src="assets/img/profiles/avatar-04.jpg" alt=""></a>
                                                            <a href="profile.html">Loren Gatlin <span>Android Developer</span></a>

                                                        </td>
                                                        <td>FT-0010</td>
                                                        <td>lorengatlin@example.com</td>
                                                        <td>1 Jan 2013</td>
                                                        <td>
                                                            <div class="dropdown">
                                                                <a href="" class="btn btn-white btn-sm btn-rounded dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Android Developer </a>
                                                                <div class="dropdown-menu">
                                                                    <a class="dropdown-item" href="#">Software Engineer</a>
                                                                    <a class="dropdown-item" href="#">Software Tester</a>
                                                                    <a class="dropdown-item" href="#">Frontend Developer</a>
                                                                    <a class="dropdown-item" href="#">UI/UX Developer</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>$55000</td>
                                                        <td><a class="btn btn-sm btn-primary" data-toggle="modal" data-target="#slip">Generate Slip</a></td>
                                                        <td class="text-end">
                                                            <div class="dropdown dropdown-action">
                                                                <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_salary"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_salary"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr class="even">
                                                        <td class="sorting_1">

                                                            <a href="profile.html" class="avatar"><img src="assets/img/profiles/avatar-05.jpg" alt=""></a>
                                                            <a href="profile.html">Mike Litorus <span>IOS Developer</span></a>

                                                        </td>
                                                        <td>FT-0004</td>
                                                        <td>mikelitorus@example.com</td>
                                                        <td>1 Jan 2013</td>
                                                        <td>
                                                            <div class="dropdown">
                                                                <a href="" class="btn btn-white btn-sm btn-rounded dropdown-toggle" data-toggle="dropdown" aria-expanded="false">IOS Developer </a>
                                                                <div class="dropdown-menu">
                                                                    <a class="dropdown-item" href="#">Software Engineer</a>
                                                                    <a class="dropdown-item" href="#">Software Tester</a>
                                                                    <a class="dropdown-item" href="#">Frontend Developer</a>
                                                                    <a class="dropdown-item" href="#">UI/UX Developer</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>$59698</td>
                                                        <td><a class="btn btn-sm btn-primary" data-toggle="modal" data-target="#slip">Generate Slip</a></td>
                                                        <td class="text-end">
                                                            <div class="dropdown dropdown-action">
                                                                <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_salary"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_salary"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr class="odd">
                                                        <td class="sorting_1">

                                                            <a href="profile.html" class="avatar"><img src="assets/img/profiles/avatar-09.jpg" alt=""></a>
                                                            <a href="profile.html">Richard Miles <span>Web Developer</span></a>

                                                        </td>
                                                        <td>FT-0002</td>
                                                        <td>richardmiles@example.com</td>
                                                        <td>1 Jan 2013</td>
                                                        <td>
                                                            <div class="dropdown">
                                                                <a href="" class="btn btn-white btn-sm btn-rounded dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Web Developer </a>
                                                                <div class="dropdown-menu">
                                                                    <a class="dropdown-item" href="#">Software Engineer</a>
                                                                    <a class="dropdown-item" href="#">Software Tester</a>
                                                                    <a class="dropdown-item" href="#">Frontend Developer</a>
                                                                    <a class="dropdown-item" href="#">UI/UX Developer</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>$72000</td>
                                                        <td><a class="btn btn-sm btn-primary" data-toggle="modal" data-target="#slip">Generate Slip</a></td>
                                                        <td class="text-end">
                                                            <div class="dropdown dropdown-action">
                                                                <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_salary"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_salary"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr class="even">
                                                        <td class="sorting_1">

                                                            <a href="profile.html" class="avatar"><img src="assets/img/profiles/avatar-03.jpg" alt=""></a>
                                                            <a href="profile.html">Tarah Shropshire <span>Android Developer</span></a>

                                                        </td>
                                                        <td>FT-0011</td>
                                                        <td>tarahshropshire@example.com</td>
                                                        <td>1 Jan 2013</td>
                                                        <td>
                                                            <div class="dropdown">
                                                                <a href="" class="btn btn-white btn-sm btn-rounded dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Android Developer </a>
                                                                <div class="dropdown-menu">
                                                                    <a class="dropdown-item" href="#">Software Engineer</a>
                                                                    <a class="dropdown-item" href="#">Software Tester</a>
                                                                    <a class="dropdown-item" href="#">Frontend Developer</a>
                                                                    <a class="dropdown-item" href="#">UI/UX Developer</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>$92400</td>
                                                        <td><a class="btn btn-sm btn-primary" data-toggle="modal" data-target="#slip">Generate Slip</a></td>
                                                        <td class="text-end">
                                                            <div class="dropdown dropdown-action">
                                                                <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_salary"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_salary"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12 col-md-5">
                                            <div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">Showing 1 to 10 of 11 entries</div>
                                        </div>
                                        <div class="col-sm-12 col-md-7">
                                            <div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate">
                                                <ul class="pagination">
                                                    <li class="paginate_button page-item previous disabled" id="DataTables_Table_0_previous"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li>
                                                    <li class="paginate_button page-item active"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
                                                    <li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="2" tabindex="0" class="page-link">2</a></li>
                                                    <li class="paginate_button page-item next" id="DataTables_Table_0_next"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="3" tabindex="0" class="page-link">Next</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div id="add_salary" class="modal custom-modal fade" role="dialog">
                    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Add Staff Salary</h5>
                                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Select Staff</label>
                                                <select class="select select2-hidden-accessible" data-select2-id="select2-data-7-3199" tabindex="-1" aria-hidden="true">
                                                    <option data-select2-id="select2-data-9-m6q3">John Doe</option>
                                                    <option>Richard Miles</option>
                                                </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="select2-data-8-0q39" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-9jmq-container" aria-controls="select2-9jmq-container"><span class="select2-selection__rendered" id="select2-9jmq-container" role="textbox" aria-readonly="true" title="John Doe">John Doe</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <label>Net Salary</label>
                                            <input class="form-control" type="text">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <h4 class="text-primary">Earnings</h4>
                                            <div class="form-group">
                                                <label>Basic</label>
                                                <input class="form-control" type="text">
                                            </div>
                                            <div class="form-group">
                                                <label>PAYE(40%)</label>
                                                <input class="form-control" type="text">
                                            </div>
                                            <div class="form-group">
                                                <label>(15%)</label>
                                                <input class="form-control" type="text">
                                            </div>
                                            <div class="form-group">
                                                <label>Conveyance</label>
                                                <input class="form-control" type="text">
                                            </div>
                                            <div class="form-group">
                                                <label>Allowance</label>
                                                <input class="form-control" type="text">
                                            </div>
                                            <div class="form-group">
                                                <label>Medical Allowance</label>
                                                <input class="form-control" type="text">
                                            </div>
                                            <div class="form-group">
                                                <label>Others</label>
                                                <input class="form-control" type="text">
                                            </div>
                                            <div class="add-more">
                                                <a href="#"><i class="fa fa-plus-circle"></i> Add More</a>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <h4 class="text-primary">Deductions</h4>
                                            <div class="form-group">
                                                <label>PAYE</label>
                                                <input class="form-control" type="text">
                                            </div>
                                            <div class="form-group">
                                                <label>NSSF</label>
                                                <input class="form-control" type="text">
                                            </div>
                                            <div class="form-group">
                                                <label>SDL</label>
                                                <input class="form-control" type="text">
                                            </div>
                                            <div class="form-group">
                                                <label>Leave</label>
                                                <input class="form-control" type="text">
                                            </div>
                                            <div class="form-group">
                                                <label>WCF</label>
                                                <input class="form-control" type="text">
                                            </div>

                                            <div class="form-group">
                                                <label>Others</label>
                                                <input class="form-control" type="text">
                                            </div>
                                            <div class="add-more">
                                                <a href="#"><i class="fa fa-plus-circle"></i> Add More</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="submit-section">
                                        <button class="btn btn-primary submit-btn">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>


                <div id="edit_salary" class="modal custom-modal fade" role="dialog">
                    <div class="modal-dialog modal-dialog-centered modal-md" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Edit Staff Salary</h5>
                                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Select Staff</label>
                                                <select class="select select2-hidden-accessible" data-select2-id="select2-data-10-xviu" tabindex="-1" aria-hidden="true">
                                                    <option data-select2-id="select2-data-12-9eel">John Doe</option>
                                                    <option>Richard Miles</option>
                                                </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="select2-data-11-psib" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-b0i3-container" aria-controls="select2-b0i3-container"><span class="select2-selection__rendered" id="select2-b0i3-container" role="textbox" aria-readonly="true" title="John Doe">John Doe</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <label>Net Salary</label>
                                            <input class="form-control" type="text" value="$4000">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <h4 class="text-primary">Earnings</h4>
                                            <div class="form-group">
                                                <label>Basic</label>
                                                <input class="form-control" type="text" value="$6500">
                                            </div>
                                            <div class="form-group">
                                                <label>DA(40%)</label>
                                                <input class="form-control" type="text" value="$2000">
                                            </div>
                                            <div class="form-group">
                                                <label>HRA(15%)</label>
                                                <input class="form-control" type="text" value="$700">
                                            </div>
                                            <div class="form-group">
                                                <label>Conveyance</label>
                                                <input class="form-control" type="text" value="$70">
                                            </div>
                                            <div class="form-group">
                                                <label>Allowance</label>
                                                <input class="form-control" type="text" value="$30">
                                            </div>
                                            <div class="form-group">
                                                <label>Medical Allowance</label>
                                                <input class="form-control" type="text" value="$20">
                                            </div>
                                            <div class="form-group">
                                                <label>Others</label>
                                                <input class="form-control" type="text">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <h4 class="text-primary">Deductions</h4>
                                            <div class="form-group">
                                                <label>TDS</label>
                                                <input class="form-control" type="text" value="$300">
                                            </div>
                                            <div class="form-group">
                                                <label>ESI</label>
                                                <input class="form-control" type="text" value="$20">
                                            </div>
                                            <div class="form-group">
                                                <label>PF</label>
                                                <input class="form-control" type="text" value="$20">
                                            </div>
                                            <div class="form-group">
                                                <label>Leave</label>
                                                <input class="form-control" type="text" value="$250">
                                            </div>
                                            <div class="form-group">
                                                <label>Prof. Tax</label>
                                                <input class="form-control" type="text" value="$110">
                                            </div>
                                            <div class="form-group">
                                                <label>Labour Welfare</label>
                                                <input class="form-control" type="text" value="$10">
                                            </div>
                                            <div class="form-group">
                                                <label>Fund</label>
                                                <input class="form-control" type="text" value="$40">
                                            </div>
                                            <div class="form-group">
                                                <label>Others</label>
                                                <input class="form-control" type="text" value="$15">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="submit-section">
                                        <button class="btn btn-primary submit-btn">Save</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="modal custom-modal fade" id="delete_salary" role="dialog">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-body">
                                <div class="form-header">
                                    <h3>Delete Salary</h3>
                                    <p>Are you sure want to delete?</p>
                                </div>
                                <div class="modal-btn delete-action">
                                    <div class="row">
                                        <div class="col-6">
                                            <a href="javascript:void(0);" class="btn btn-primary continue-btn">Delete</a>
                                        </div>
                                        <div class="col-6">
                                            <a href="javascript:void(0);" data-bs-dismiss="modal" class="btn btn-primary cancel-btn">Cancel</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal custom-modal fade" id="slip" role="dialog">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-body">
                                <div class="content container-fluid">

                                    <div class="page-header">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <h3 class="page-title">Payslip</h3>
                                                <ul class="breadcrumb">
                                                    <li class="breadcrumb-item"><a href="admin-dashboard.html">Dashboard</a></li>
                                                    <li class="breadcrumb-item active">Payslip</li>
                                                </ul>
                                            </div>
                                            <div class="col-auto float-end ms-auto">
                                                <div class="btn-group btn-group-sm">
                                                    <button class="btn btn-white">CSV</button>
                                                    <button class="btn btn-white">PDF</button>
                                                    <button class="btn btn-white"><i class="fa fa-print fa-lg"></i> Print</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h4 class="payslip-title">Payslip for the month of Feb 2019</h4>
                                                    <div class="row">
                                                        <div class="col-sm-6 m-b-20">
                                                            <img src="assets/img/logo2.png" class="inv-logo" alt="">
                                                            <ul class="list-unstyled mb-0">
                                                                <li>Dreamguy's Technologies</li>
                                                                <li>3864 Quiet Valley Lane,</li>
                                                                <li>Sherman Oaks, CA, 91403</li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-sm-6 m-b-20">
                                                            <div class="invoice-details">
                                                                <h3 class="text-uppercase">Payslip #49029</h3>
                                                                <ul class="list-unstyled">
                                                                    <li>Salary Month: <span>March, 2019</span></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-12 m-b-20">
                                                            <ul class="list-unstyled">
                                                                <li>
                                                                    <h5 class="mb-0"><strong>John Doe</strong></h5>
                                                                </li>
                                                                <li><span>Web Designer</span></li>
                                                                <li>Employee ID: FT-0009</li>
                                                                <li>Joining Date: 1 Jan 2013</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <div>
                                                                <h4 class="m-b-10"><strong>Earnings</strong></h4>
                                                                <table class="table table-bordered">
                                                                    <tbody>
                                                                        <tr>
                                                                            <td><strong>Basic Salary</strong> <span class="float-end">$6500</span></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><strong>House Rent Allowance (H.R.A.)</strong> <span class="float-end">$55</span></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><strong>Conveyance</strong> <span class="float-end">$55</span></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><strong>Other Allowance</strong> <span class="float-end">$55</span></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><strong>Total Earnings</strong> <span class="float-end"><strong>$55</strong></span></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div>
                                                                <h4 class="m-b-10"><strong>Deductions</strong></h4>
                                                                <table class="table table-bordered">
                                                                    <tbody>
                                                                        <tr>
                                                                            <td><strong>Tax Deducted at Source (T.D.S.)</strong> <span class="float-end">$0</span></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><strong>Provident Fund</strong> <span class="float-end">$0</span></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><strong>ESI</strong> <span class="float-end">$0</span></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><strong>Loan</strong> <span class="float-end">$300</span></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><strong>Total Deductions</strong> <span class="float-end"><strong>$59698</strong></span></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12">
                                                            <p><strong>Net Salary: $59698</strong> (Fifty nine thousand six hundred and ninety eight only.)</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="tab-pane fade" id="hr-pills-salary-content" role="tabpanel" aria-labelledby="pillars-pills-ds-retirements-tab">

            {{-- data science retirements --}}
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-content table-responsive">
                            <br />
                            <table class="table table-bordered table-hover">
                                <p>
                                    <strong>Data Science Retirements.</strong>
                                </p>

                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Requested by</th>
                                        <th scope="col-md-4">Title</th>
                                        <th scope="col">Request Type</th>
                                        <th scope="col">Under Project</th>
                                        <th scope="col"># of approvals</th>
                                        <th scope="col">Total Cost</th>
                                        <th scope="col">Date created</th>

                                        <th scope="col"></th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>MarkCuban</td>
                                        <td>Data visualisation in Mbeya</td>
                                        <td>Training</td>
                                        <td>Sauti Mpya</td>
                                        <td>0</td>
                                        <td>2,300,000 <span class="badge badge-success">TZS</span>
                                        </td>
                                        <td>2019-09-11</td>
                                        <td>
                                            <button type="button" class="btn btn-outline-success">view
                                                request</button>
                                        </td>
                                    </tr>

                                    <tr>
                                        <th scope="row">4</th>
                                        <td>Jane Sharpe</td>
                                        <td>Data Mining in Dar</td>
                                        <td>Training</td>
                                        <td>Data Zetu</td>
                                        <td>0</td>
                                        <td>6,600,000 <span class="badge badge-success">TZS</span>
                                        </td>
                                        <td>2019-09-11</td>
                                        <td>
                                            <button type="button" class="btn btn-outline-success">view
                                                request</button>
                                        </td>
                                    </tr>

                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Mary Poppins</td>
                                        <td>Data Analyis and Mining</td>
                                        <td>Training</td>
                                        <td>Sauti Mpya</td>
                                        <td>0</td>
                                        <td>8,700,000 <span class="badge badge-success">TZS</span>
                                        </td>
                                        <td>2019-09-11</td>
                                        <td>
                                            <button type="button" class="btn btn-outline-success">view
                                                request</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <br />
                            <nav aria-label="Page navigation example">
                                <ul class="pagination">
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Previous">
                                            <span aria-hidden="true">&laquo;</span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Next">
                                            <span aria-hidden="true">&raquo;</span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <!-- end of SECOND column -->
                </div>

            </div>

        </div>

        <div class="tab-pane fade" id="hr-pills-salary-slips-content" role="tabpanel" aria-labelledby="pillars-pills-ds-scholars-tab">

            {{-- data science scholars --}}
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-content table-responsive">
                            <br />
                            <table class="table table-bordered table-hover">
                                <p>
                                    <strong>Data Science Scholars.</strong>
                                </p>
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Requested by</th>
                                        <th scope="col-md-4">Title</th>
                                        <th scope="col">Request Type</th>
                                        <th scope="col">Under Project</th>
                                        <th scope="col"># of approvals</th>
                                        <th scope="col">Total Cost</th>
                                        <th scope="col">Date created</th>

                                        <th scope="col"></th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>MarkCuban</td>
                                        <td>Data visualisation in Mbeya</td>
                                        <td>Training</td>
                                        <td>Sauti Mpya</td>
                                        <td>0</td>
                                        <td>2,300,000 <span class="badge badge-success">TZS</span>
                                        </td>
                                        <td>2019-09-11</td>
                                        <td>
                                            <button type="button" class="btn btn-outline-success">view
                                                request</button>
                                        </td>
                                    </tr>

                                    <tr>
                                        <th scope="row">4</th>
                                        <td>Jane Sharpe</td>
                                        <td>Data Mining in Dar</td>
                                        <td>Training</td>
                                        <td>Data Zetu</td>
                                        <td>0</td>
                                        <td>6,600,000 <span class="badge badge-success">TZS</span>
                                        </td>
                                        <td>2019-09-11</td>
                                        <td>
                                            <button type="button" class="btn btn-outline-success">view
                                                request</button>
                                        </td>
                                    </tr>

                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Mary Poppins</td>
                                        <td>Data Analyis and Mining</td>
                                        <td>Training</td>
                                        <td>Sauti Mpya</td>
                                        <td>0</td>
                                        <td>8,700,000 <span class="badge badge-success">TZS</span>
                                        </td>
                                        <td>2019-09-11</td>
                                        <td>
                                            <button type="button" class="btn btn-outline-success">view
                                                request</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <br />
                            <nav aria-label="Page navigation example">
                                <ul class="pagination">
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Previous">
                                            <span aria-hidden="true">&laquo;</span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Next">
                                            <span aria-hidden="true">&raquo;</span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <!-- end of SECOND column -->
                </div>

            </div>

        </div>
        <div class="tab-pane fade" id="hr-pills-staff-appraisal-content" role="tabpanel" aria-labelledby="pillars-pills-ds-grantees-tab">

            {{-- data science grantees --}}
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-content table-responsive">
                            <br />
                            <table class="table table-bordered table-hover">
                                <p>
                                    <strong>Data Science Grantees.</strong>
                                </p>
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Requested by</th>
                                        <th scope="col-md-4">Title</th>
                                        <th scope="col">Request Type</th>
                                        <th scope="col">Under Project</th>
                                        <th scope="col"># of approvals</th>
                                        <th scope="col">Total Cost</th>
                                        <th scope="col">Date created</th>

                                        <th scope="col"></th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>MarkCuban</td>
                                        <td>Data visualisation in Mbeya</td>
                                        <td>Training</td>
                                        <td>Sauti Mpya</td>
                                        <td>0</td>
                                        <td>2,300,000 <span class="badge badge-success">TZS</span>
                                        </td>
                                        <td>2019-09-11</td>
                                        <td>
                                            <button type="button" class="btn btn-outline-success">view
                                                request</button>
                                        </td>
                                    </tr>

                                    <tr>
                                        <th scope="row">4</th>
                                        <td>Jane Sharpe</td>
                                        <td>Data Mining in Dar</td>
                                        <td>Training</td>
                                        <td>Data Zetu</td>
                                        <td>0</td>
                                        <td>6,600,000 <span class="badge badge-success">TZS</span>
                                        </td>
                                        <td>2019-09-11</td>
                                        <td>
                                            <button type="button" class="btn btn-outline-success">view
                                                request</button>
                                        </td>
                                    </tr>

                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Mary Poppins</td>
                                        <td>Data Analyis and Mining</td>
                                        <td>Training</td>
                                        <td>Sauti Mpya</td>
                                        <td>0</td>
                                        <td>8,700,000 <span class="badge badge-success">TZS</span>
                                        </td>
                                        <td>2019-09-11</td>
                                        <td>
                                            <button type="button" class="btn btn-outline-success">view
                                                request</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <br />
                            <nav aria-label="Page navigation example">
                                <ul class="pagination">
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Previous">
                                            <span aria-hidden="true">&laquo;</span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Next">
                                            <span aria-hidden="true">&raquo;</span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <!-- end of SECOND column -->
                </div>

            </div>

        </div>

    </div>


</div>
@endsection
