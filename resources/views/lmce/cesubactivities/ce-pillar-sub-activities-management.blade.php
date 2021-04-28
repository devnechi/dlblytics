@extends('layouts.llmce')

@section('content')
<div class="container-fluid">
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div><br />
    @endif

    <br />
    <div class="row">
        <div class="col-lg-12">
            <nav>
                <div class="nav nav-tabs" id="ds-pna-proj-nav-tab" role="tablist">
                    <a class="nav-item nav-link active" id="ds-nav-pna-my-proj-tab"
                        data-toggle="tab" href="#ds-pna-my-proj-content" role="tab"
                        aria-controls="nav-my-proj" aria-selected="true">My
                        sub activities</a>
                    <a class="nav-item nav-link" id="ds-nav-pna-staff-proj-tab" data-toggle="tab"
                        href="#ds-pna-staff-proj-content" role="tab" aria-controls="nav-staff-proj-content"
                        aria-selected="false">Staff sub activities</a>
                    <a class="nav-item nav-link" id="ds-pna-lm-response-tab" data-toggle="tab"
                        href="#ds-pna-lm-response-content" role="tab" aria-controls="nav-lm-response"
                        aria-selected="false">Response from Line Manager</a>
                </div>
            </nav>
            <div class="tab-content" id="ds-impr-nav-tabContent">
                <div class="tab-pane fade show active" id="ds-pna-my-proj-content" role="tabpanel"
                    aria-labelledby="nav-ds-pna-my-proj-content-tab">

                    <br />
                        {{-- my ds requests --}}
                        <div class="row">
                            <div class="col-md-2">
                                <div class="nav flex-column nav-pills" id="vds-ds-project-ed-pills-tab" role="tablist"
                                    aria-orientation="vertical">
                                    <a class="nav-link active" id="vds-ds-project-ed-pills-reviewed-tab" data-toggle="pill"
                                        href="#vds-ds-project-ed-pills-reviewed-content" role="tab"
                                        aria-controls="vds-ed-reqs-pills-reviewed" aria-selected="true">On Review</a>

                                    <a class="nav-link" id="vds-ds-project-ed-pills-approved-tab" data-toggle="pill"
                                        href="#vds-ds-project-ed-pills-approved-content" role="tab"
                                        aria-controls="vds-ed-reqs-pills-approved" aria-selected="false">Approved</a>

                                    <a class="nav-link" id="vds-ds-project-ed-pills-denied-tab" data-toggle="pill"
                                        href="#vds-ds-project-ed-pills-denied-content" role="tab"
                                        aria-controls="vds-ed-reqs-pills-denied"
                                        aria-selected="false">Denied</a>

                                    <a class="nav-link" id="vds-ds-project-ed-pills-all-tab" data-toggle="pill"
                                        href="#vds-ds-project-ed-pills-all-content" role="tab"
                                        aria-controls="vds-ed-reqs-pills-all" aria-selected="false">All</a>
                                </div>
                            </div>
                            <div class="col-md-10">

                                <div class="tab-content" id="vds-ds-project-ed-pills-tabContent">
                                    <div class="tab-pane fade show active" id="vds-ds-project-ed-pills-reviewed-content"
                                        role="tabpanel" aria-labelledby="vds-ed-reqs-pills-home-tab">


                                        {{-- my retirements --}}
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="card">
                                                    <div class="card-content table-responsive">
                                                        <br />

                                                            <table class="table table-bordered table-hover">
                                                                <p><strong>My sub activities on review</strong></p>
                                                                <thead>
                                                                    <tr>
                                                                        <th scope="col">#</th>
                                                                        <th scope="col">sub activity title</th>
                                                                        <th scope="col-md-4">Total Estimated cost</th>
                                                                        <th scope="col">current stage</th>
                                                                        <th scope="col">status</th>
                                                                        <th scope="col">Date created</th>
                                                                        <th scope="col"></th>
                                                                        <th scope="col"></th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>

                                                                    @foreach($myprojects as $myproject)
                                                                    <tr>
                                                                        <th scope="row">{{ $myproject->project_id }}</th>
                                                                        <td class="w-30 p-2">{{ $myproject->project_title }}</td>
                                                                        <td class="w-30 p-2">{{ $myproject->total_project_cost }}</td>
                                                                        <td class="w-30 h-30 p-4">{{ $myproject->current_stage }}</td>
                                                                        <td class="w-30 h-30 p-4">{{ $myproject->review_status }}</td>
                                                                        <td class="w-10 p-2">{{ $myproject->created_at }}</td>
                                                                        <td class="w-10 p-2"><a href="{{ route('pillar-project.show', $myproject->project_id)}}"
                                                                            class="btn btn-outline-success">view details</a>
                                                                       </td>
                                                                       <td class="w-30 p-2"><a href="{{ route('pillar-project.edit', $myproject->project_id)}}"
                                                                        class="btn btn-outline-info btn-md">update</a>
                                                                       </td>
                                                                    </tr>

                                                                </tbody>
                                                                @endforeach
                                                            </table>
                                                        <br />
                                                        <nav aria-label="Page navigation example">
                                                            <ul class="pagination">
                                                                <li class="page-item">
                                                                    <a class="page-link" href="#"
                                                                        aria-label="Previous">
                                                                        <span aria-hidden="true">&laquo;</span>
                                                                        <span class="sr-only">Previous</span>
                                                                    </a>
                                                                </li>
                                                                <li class="page-item"><a class="page-link"
                                                                        href="#">1</a></li>
                                                                <li class="page-item"><a class="page-link"
                                                                        href="#">2</a></li>
                                                                <li class="page-item"><a class="page-link"
                                                                        href="#">3</a></li>
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
                                    <div class="tab-pane fade" id="vds-ds-project-ed-pills-approved-content" role="tabpanel"
                                        aria-labelledby="vdsreqs-pills-approved-tab">


                                        {{-- my approved projects --}}
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="card">
                                                    <div class="card-content table-responsive">
                                                        <br />

                                                        <table class="table table-bordered table-hover">
                                                            <p><strong>My Approved sub activities</strong></p>
                                                            <thead>
                                                                <tr>
                                                                    <th scope="col">#</th>
                                                                    <th scope="col">sub activity title</th>
                                                                    <th scope="col-md-4">Total Estimated cost</th>
                                                                    <th scope="col">current stage</th>
                                                                    <th scope="col">status</th>
                                                                    <th scope="col">Date created</th>
                                                                    <th scope="col"></th>
                                                                    <th scope="col"></th>
                                                                    <th scope="col"></th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>

                                                                @foreach($myapprovedprojects as $myapprovedproject)
                                                                <tr>
                                                                    <th scope="row">{{ $myapprovedproject->project_id }}</th>
                                                                    <td class="w-30 p-2">{{ $myapprovedproject->project_title }}</td>
                                                                    <td class="w-30 p-2">{{ $myapprovedproject->total_project_cost }}</td>
                                                                    <td class="w-30 h-30 p-4">{{ $myapprovedproject->current_stage }}</td>
                                                                    <td class="w-30 h-30 p-4">{{ $myapprovedproject->review_status }}</td>
                                                                    <td class="w-10 p-2">{{ $myapprovedproject->created_at }}</td>

                                                                    <td class="w-10 p-2"><a href="{{ route('pillar-project.show', $myapprovedproject->project_id)}}"
                                                                        class="btn btn-outline-success" data-bs-toggle="tooltip" data-bs-placement="top" title="view project full details">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                                                          <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
                                                                          <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
                                                                        </svg></a>
                                                                   </td>
                                                                   <td class="w-30 p-2"><a href="{{ route('pillar-project.edit', $myapprovedproject->project_id)}}"
                                                                    class="btn btn-outline-info btn-md" data-bs-toggle="tooltip" data-bs-placement="top" title="view update project details">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-arrow-up-circle" viewBox="0 0 16 16">
                                                                        <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-7.5 3.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V11.5z"/>
                                                                      </svg>
                                                                    </a>
                                                                   </td>
                                                                   <td class="w-30 p-2">
                                                                    {{-- <select class="form-control form-group col-lg-12" aria-label="Large" id="ref_kpi" name="selectProject"
                                                                        aria-describedby="inputGroup-sizing-sm">
                                                                        <option value="select">Create new </option>
                                                                        <option value="indicator1">New Request</option>
                                                                        <option value="indicator4">New Activity</option>
                                                                        <option value="indicator4">New Sub Activity</option>
                                                                        </option>
                                                                    </select> --}}
                                                                    <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#ds-proj-createNewRequest">
                                                                        create a new
                                                                    </button>
                                                                     <!-- Modal -->
                                                                    <div class="modal fade" id="ds-proj-createNewRequest" tabindex="-1" role="dialog"
                                                                    aria-labelledby="exampleModalCenterTitle" aria-hidden="true" data-proj="{{ $myapprovedproject->project_id }}"
                                                                    data-user="{{ Auth::user()->user_id }}">
                                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title" id="exampleModalLongTitle">Select Type of Request</h5>
                                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                    <span aria-hidden="true">&times;</span>
                                                                                </button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <ul class="list-group-flush">
                                                                                    <li class="list-group-item">

                                                                                        {{-- <a href="{{ route('ds-create-new-activity', ['projid' =>  Crypt::encrypt($myapprovedproject->project_id)]) }}" --}}
                                                                                            <a href="{{ route('ds-create-new-project-activity', $myapprovedproject->project_id) }}"
                                                                                            class="list-group-item list-group-item-action">
                                                                                            New project activity
                                                                                        </a>

                                                                                    </li>
                                                                                    <li class="list-group-item">
                                                                                        <a href="{{ route('create-new-training-advance-request', ['projid' => $myapprovedproject->project_id]) }}"
                                                                                            class="list-group-item list-group-item-action">
                                                                                            Training Advance Request
                                                                                        </a>

                                                                                    </li>
                                                                                    <li class="list-group-item">
                                                                                        <a href="{{ route('create-new-training-advance-request', ['projid' => $myapprovedproject->project_id]) }}"
                                                                                            class="list-group-item list-group-item-action">
                                                                                            Travel Advance request
                                                                                        </a>

                                                                                    <li class="list-group-item">
                                                                                        <a href="{{ route('create-allowance-request', ['projid' => $myapprovedproject->project_id]) }}"
                                                                                            class="list-group-item list-group-item-action">
                                                                                            Allowance Request
                                                                                        </a>
                                                                                    </li>
                                                                                    <li class="list-group-item">
                                                                                        <a href="{{ route('create-new-per-diem-claim', ['projid' => $myapprovedproject->project_id]) }}"
                                                                                            class="list-group-item list-group-item-action">
                                                                                            Per Diem claim
                                                                                        </a>
                                                                                    </li>
                                                                                    <li class="list-group-item">
                                                                                        <a href="{{ route('create-new-petty-cash', ['projid' => $myapprovedproject->project_id]) }}"
                                                                                            class="list-group-item list-group-item-action">
                                                                                            Petty Cash
                                                                                        </a>
                                                                                    </li>
                                                                                    <li class="list-group-item">
                                                                                        <a href="{{ route('create-payment-requisition', ['projid' => $myapprovedproject->project_id]) }}"
                                                                                            class="list-group-item list-group-item-action">
                                                                                            Payment Requisition
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
                                                            @endforeach
                                                        </table>
                                                        <br />
                                                        <nav aria-label="Page navigation example">
                                                            <ul class="pagination">
                                                                <li class="page-item">
                                                                    <a class="page-link" href="#"
                                                                        aria-label="Previous">
                                                                        <span aria-hidden="true">&laquo;</span>
                                                                        <span class="sr-only">Previous</span>
                                                                    </a>
                                                                </li>
                                                                <li class="page-item"><a class="page-link"
                                                                        href="#">1</a></li>
                                                                <li class="page-item"><a class="page-link"
                                                                        href="#">2</a></li>
                                                                <li class="page-item"><a class="page-link"
                                                                        href="#">3</a></li>
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
                                    <div class="tab-pane fade" id="vds-ds-project-ed-pills-denied-content" role="tabpanel"
                                        aria-labelledby="vdsreqs-pills-messages-tab">

                                        {{-- my denied projects --}}
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="card">
                                                    <div class="card-content table-responsive">
                                                        <br />

                                                        <table class="table table-bordered table-hover">
                                                            <p><strong>My Denied sub activities</strong></p>
                                                            <thead>
                                                                <tr>
                                                                    <th scope="col">#</th>
                                                                    <th scope="col">sub activity title</th>
                                                                    <th scope="col-md-4">Total Estimated cost</th>
                                                                    <th scope="col">current stage</th>
                                                                    <th scope="col">status</th>
                                                                    <th scope="col">Date created</th>
                                                                    <th scope="col"></th>
                                                                    <th scope="col"></th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>

                                                                @foreach($mydeniedprojects as $mydeniedproject)
                                                                <tr>
                                                                    <th scope="row">{{ $mydeniedproject->project_id }}</th>
                                                                    <td class="w-30 p-2">{{ $mydeniedproject->project_title }}</td>
                                                                    <td class="w-30 p-2">{{ $mydeniedproject->total_project_cost }}</td>
                                                                    <td class="w-30 h-30 p-4">{{ $mydeniedproject->current_stage }}</td>
                                                                    <td class="w-30 h-30 p-4">{{ $mydeniedproject->review_status }}</td>
                                                                    <td class="w-10 p-2">{{ $mydeniedproject->created_at }}</td>
                                                                    <td class="w-10 p-2"><a href="{{ route('pillar-project.show', $mydeniedproject->project_id)}}"
                                                                        class="btn btn-outline-success">view details</a>
                                                                   </td>
                                                                   <td class="w-30 p-2"><a href="{{ route('pillar-project.edit', $mydeniedproject->project_id)}}"
                                                                    class="btn btn-outline-info btn-md">update</a>
                                                                   </td>
                                                                </tr>

                                                            </tbody>
                                                            @endforeach
                                                        </table>
                                                        <br />
                                                        <nav aria-label="Page navigation example">
                                                            <ul class="pagination">
                                                                <li class="page-item">
                                                                    <a class="page-link" href="#"
                                                                        aria-label="Previous">
                                                                        <span aria-hidden="true">&laquo;</span>
                                                                        <span class="sr-only">Previous</span>
                                                                    </a>
                                                                </li>
                                                                <li class="page-item"><a class="page-link"
                                                                        href="#">1</a></li>
                                                                <li class="page-item"><a class="page-link"
                                                                        href="#">2</a></li>
                                                                <li class="page-item"><a class="page-link"
                                                                        href="#">3</a></li>
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
                                    <div class="tab-pane fade" id="vds-ds-project-ed-pills-all-content" role="tabpanel"
                                        aria-labelledby="vdsreqs-pills-settings-tab">


                                        {{-- my retirements --}}
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="card">
                                                    <div class="card-content table-responsive">
                                                        <br />
                                                        <table class="table table-bordered table-hover">
                                                            <p><strong>All sub activities under this pillar</strong></p>
                                                            <thead>
                                                                <tr>
                                                                    <th scope="col">#</th>
                                                                    <th scope="col">sub activity title</th>
                                                                    <th scope="col-md-4">Total Estimated cost</th>
                                                                    <th scope="col">current stage</th>
                                                                    <th scope="col">status</th>
                                                                    <th scope="col">Date created</th>
                                                                    <th scope="col"></th>
                                                                    <th scope="col"></th>


                                                                </tr>
                                                            </thead>
                                                            <tbody>

                                                                @foreach($pillarprojects as $pillarproject)
                                                                <tr>
                                                                    <th scope="row">{{ $pillarproject->project_id }}</th>
                                                                    <td class="w-30 p-2">{{ $pillarproject->project_title }}</td>

                                                                    <td class="w-30 p-2">{{ $pillarproject->total_project_cost }}</td>
                                                                    <td class="w-30 h-30 p-4">{{ $pillarproject->current_stage }}</td>
                                                                    <td class="w-30 h-30 p-4">{{ $pillarproject->review_status }}</td>
                                                                    <td class="w-10 p-2">{{ $pillarproject->created_at }}</td>
                                                                    <td class="w-10 p-2"><a href="{{ route('pillar-project.show', $pillarproject->project_id)}}"
                                                                        class="btn btn-outline-success">view details</a>
                                                                   </td>
                                                                   <td class="w-30 p-2"><a href="{{ route('pillar-project.edit', $pillarproject->project_id)}}"
                                                                    class="btn btn-outline-info btn-md">update</a>
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
                                </div>
                            </div>
                        </div>
                </div>
                <div class="tab-pane fade" id="ds-pna-staff-proj-content" role="tabpanel"
                    aria-labelledby="nav-profile-tab">
                    <br />
                    <br />
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-content table-responsive">
                                    <br />
                                    <div class="alert alert-primary" role="alert">
                                        No current record  for this <a href="#" class="alert-link">section</a>. If pillar staff creates a project request it will show up here.
                                      </div>
                                </div>
                            </div>
                            <!-- end of SECOND column -->
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="ds-pna-lm-response-content" role="tabpanel"
                    aria-labelledby="nav-contact-tab">
                    <br />
                    <br />
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-content table-responsive">
                                    <br />
                                    <div class="alert alert-primary" role="alert">
                                        No current response from <a href="#" class="alert-link">line manager</a>. If you get a project response it will show up here.
                                      </div>
                                </div>
                            </div>
                            <!-- end of SECOND column -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
