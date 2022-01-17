@extends('layouts.llmds')

@section('content')
<style>

</style>
<div class="container-fluid " id="vds-ds-pna-pills-proj">
    {{-- Projects --}}

    <div class="row">
        <div class="col-lg-12">
            <nav>
                <div class="nav nav-tabs" id="ds-pna-activities-nav-tab" role="tablist">
                    <a class="nav-link nav-item active" id="vds-ds-project-ed-pills-reviewed-tab" data-toggle="tab" href="#vds-ds-project-ed-pills-reviewed-content" role="tab" aria-controls="vds-ed-reqs-pills-reviewed" aria-selected="true">All Projects</a>

                    <a class=" nav-item nav-link" id="vds-ds-project-ed-pills-approved-tab" data-toggle="tab" href="#vds-ds-act-ed-pills-approved-content" role="tab" aria-controls="vds-ed-reqs-pills-approved" aria-selected="false">Completed</a>


                    <a class=" nav-item nav-link" id="vds-ds-project-ed-pills-all-tab" data-toggle="tab" href="#vds-ds-act-ed-pills-denied-content" role="tab" aria-controls="vds-ed-reqs-pills-all" aria-selected="false">On going</a>
                </div>
            </nav>
            <div class="tab-content" id="ds-impr-nav-tabContent">

                <div class="tab-pane fade show active" id="ds-pna-my-proj-content" role="tabpanel" aria-labelledby="nav-ds-pna-my-proj-content-tab">

                    <br />
                    {{-- my ds requests --}}
                    <div class="row">




                        <div class="col-md-12">

                            <div class="tab-content" id="vds-ds-project-ed-pills-tabContent">

                                <div class="tab-pane fade show active" id="vds-ds-project-ed-pills-reviewed-content" role="tabpanel" aria-labelledby="vds-ed-reqs-pills-home-tab">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="card">
                                                <div class="card-content table-responsive">
                                                    <br />
                                                    <table class="table table-bordered table-hover">
                                                        <p class="d-flex justify-content-between">
                                                            <strong>All projects</strong>
                                                            <a class="btn btn-outline-info btn-lg mr-1" href="{{ route('ds-create-new-project') }}" role="button"> create a new project</a>
                                                        </p>
                                                        <thead>
                                                            <tr>
                                                                <th scope="col">#</th>
                                                                <th scope="col">project title</th>
                                                                <th scope="col-md-4">Total Estimated cost</th>
                                                                <th scope="col">Lead</th>
                                                                <th scope="col"># of approval</th>
                                                                <th scope="col">Date created</th>
                                                                <th scope="col"></th>

                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @php
                                                            $ds=1;
                                                            @endphp
                                                            @foreach($myprojects as $myproject)
                                                            <tr>
                                                                <th scope="row">{{$ds}}</th>
                                                                <td class="w-30 p-2">{{ $myproject->project_title }}</td>
                                                                <td class="w-30 p-2">{{ $myproject->total_project_cost }}</td>

                                                                <td class=" ">{{ empty($myproject->lead)?'none': $myproject->lead }}</td>
                                                                <td class="">{{ empty($myproject->activities->where('approval_status','approved'))?'0':  count($myproject->activities->where('approval_status','approved'))  }}</td>
                                                                <td>{{$myproject->created_at->format('Y-m-d')}}
                                                                <td class="w-30 p-2">
                                                                    <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#pr{{$myproject->project_id }}"> Actions
                                                                    </button>
                                                                    <!-- Modal -->
                                                                    <div class="modal fade" id="pr{{$myproject->project_id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" data-proj="{{ $myproject->project_id }}" data-user="{{ Auth::user()->user_id }}">
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
                                                                                            <a href="{{ route('ds-create-new-activity', $myproject->project_id) }}" class="btn  btn-outline-secondary d-flex justify-content-between">
                                                                                                <i class="fas fa-chalkboard fa-lg mt-auto mb-auto"></i>
                                                                                                <p class="m-auto"> New Activity</p>
                                                                                            </a>
                                                                                        </li>
                                                                                        <li class="list-group-item">
                                                                                            <a href="{{ route('pillar-project.show',   $myproject->project_id)}}" class="btn btn-outline-success d-flex justify-content-between" data-bs-toggle="tooltip" data-bs-placement="top" title="view project full details">
                                                                                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                                                                                    <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                                                                                                    <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                                                                                                </svg>
                                                                                                <p class="m-auto">Project Details</p>
                                                                                            </a>

                                                                                        </li>
                                                                                        <li class="list-group-item">
                                                                                            <a href="{{ route('edit-project', $myproject->project_id)}}" class="btn btn-outline-info btn-md d-flex justify-content-between" data-bs-toggle="tooltip" data-bs-placement="top" title="view update project details">
                                                                                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-arrow-up-circle" viewBox="0 0 16 16">
                                                                                                    <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-7.5 3.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V11.5z" />
                                                                                                </svg>
                                                                                                <p class="m-auto">Edit Project</p>
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
                                                            @php
                                                            $ds++;
                                                            @endphp
                                                            @endforeach
                                                        </tbody>
                                                    </table>
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
                                <div class="tab-pane fade" id="vds-ds-act-ed-pills-approved-content" role="tabpanel" aria-labelledby="vdsreqs-pills-approved-tab">


                                    {{-- my retirements --}}
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="card">
                                                <div class="card-content table-responsive">
                                                    <br />
                                                    <table class="table table-bordered table-hover">
                                                        <p>My Project that have been <strong>Completed </strong></p>

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
                                <div class="tab-pane fade" id="vds-ds-act-ed-pills-denied-content" role="tabpanel" aria-labelledby="vdsreqs-pills-messages-tab">

                                    {{-- my retirements --}}
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="card">
                                                <div class="card-content table-responsive">
                                                    <br />
                                                    <table class="table table-bordered table-hover">
                                                        <strong>My on-going projects</strong>


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
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
