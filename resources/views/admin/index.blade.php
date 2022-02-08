@extends('layouts.ladmin')

@section('content')
<div class="container-fluid">
    <!--
         ========================================
         =                                      =
         =       start of line manager side     =
         ======================================== -->
    <div class="tab-pane fade show active" id="line-manager-content" role="tabpanel" aria-labelledby="line-manager-tab-md">
        <br />
        <ul class="nav nav-tabs md-tabs" id="linemanagerPanel" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="lm-dash-visual-tab-md" data-toggle="tab" href="#line-manager-dash-visual-content" role="tab" aria-controls="line-manager-dash-visual-md" aria-selected="true">Visualisation
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="line-manager-tab-md" data-toggle="tab" href="#line-manager-pillar-content" role="tab" aria-controls="line-manager-pillar-md" aria-selected="true">Pillars
                    <span class="badge badge-pill badge-danger">20</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="line-manager-finance-tab-md" data-toggle="tab" href="#line-manager-finance-content" role="tab" aria-controls="line-manager-finance--md" aria-selected="false">Finance

                    <span class="badge badge-pill badge-danger">5</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" id="line-manager-human-resource-tab-md" data-toggle="tab" href="#line-manager-human-resource-content" role="tab" aria-controls="human-resource-md" aria-selected="false">Human Resource

                    <span class="badge badge-pill badge-danger">5</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" id="line-manager-mne-tab-md" data-toggle="tab" href="#line-manager-mne-content" role="tab" aria-controls="line-manager-mne-md" aria-selected="false">M & E

                    <span class="badge badge-pill badge-danger">5</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" id="line-manager-donor-tab-md" data-toggle="tab" href="#line-manager-donor-content" role="tab" aria-controls="line-manager-donor-md" aria-selected="false">Donors

                    <span class="badge badge-pill badge-danger">5</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" id="line-manager-report-tab-md" data-toggle="tab" href="#line-manager-report-content" role="tab" aria-controls="lm-reports-md" aria-selected="false">Reports

                    <span class="badge badge-pill badge-danger">5</span>
                </a>
            </li>
        </ul>


        <div class="tab-content pt-5" id="selectDataViewTabContent">
            <!--
              ========================================
              =                                      =
              =       start of line manager side     =
              ======================================== -->
            <div class="tab-pane fade show active" id="line-manager-dash-visual-content" role="tabpanel" aria-labelledby="line-manager-dassh-content-tab-md">
                <br />
                {{-- line manager pillar --}}
                dash board visualisation

            </div>
            <!-- end of line manager panel -->

            <!--
              ========================================
              =                                      =
              =       start of line manager side     =
              ======================================== -->


            <div class="tab-pane  fade" id="line-manager-pillar-content" role="tabpanel" aria-labelledby="finance-admin-tab-md">
                {{-- financial pillar administration --}}

                <div class="row">
                    <div class="col-lg-12">

                        <nav>
                            <div class="nav nav-tabs" id="finance-pillars-nav-tab" role="tablist">
                                <a class="nav-item nav-link active" id="finance-pillars-nav-ds-tab" data-toggle="tab" href="#finance-pillars-nav-ds-content" role="tab" aria-controls="finance-pillars-nav-ds" aria-selected="true">
                                    Data Science</a>

                                <a class="nav-item nav-link" id="finance-pillars-nav-ce-tab" data-toggle="tab" href="#finance-pillars-nav-ce-content" role="tab" aria-controls="finance-pillars-nav-ce" aria-selected="true">
                                    Community Engagement</a>

                                <a class="nav-item nav-link" id="finance-pillars-nav-cb-tab" data-toggle="tab" href="#finance-pillars-nav-cb-content" role="tab" aria-controls="finance-pillars-nav-cb" aria-selected="true">
                                    Capacity Building</a>

                                <a class="nav-item nav-link" id="finance-pillars-nav-ri-tab" data-toggle="tab" href="#finance-pillars-nav-ri-content" role="tab" aria-controls="finance-pillars-nav-ri" aria-selected="true">
                                    Research and Innovation</a>

                                <a class="nav-item nav-link" id="finance-pillars-nav-is-tab" data-toggle="tab" href="#finance-pillars-nav-is-content" role="tab" aria-controls="finance-pillars-nav-is" aria-selected="true">
                                    Institutional Stregthening</a>

                                <a class="nav-item nav-link" id="finance-pillars-nav-cc-tab" data-toggle="tab" href="#finance-pillars-nav-cc-content" role="tab" aria-controls="finance-pillars-nav-cc" aria-selected="true">
                                    Communication Channels</a>

                            </div>
                        </nav>
                        <div class="tab-content" id="ds-tms-nav-tabContent">
                            <div class="tab-pane fade show active" id="finance-pillars-nav-ds-content" role="tabpanel" aria-labelledby="finance-pillars-nav-dc-tab">
                                <br />

                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="nav flex-column nav-pills" id="vds-finance-pillars-pills-ds-tab" role="tablist" aria-orientation="vertical">
                                            <a class="nav-link active" id="pillars-pills-ds-requests-tab" data-toggle="pill" href="#pillars-pills-ds-requests-content" role="tab" aria-controls="" aria-selected="true">Requests</a>

                                            <a class="nav-link" id="pillars-pills-ds-projects-tab" data-toggle="pill" href="#pillars-pills-ds-projects-content" role="tab" aria-controls="pillars-pills-ds-content-tab" aria-selected="false">Projects</a>

                                            <a class="nav-link" id="pillars-pills-ds-imprests-tab" data-toggle="pill" href="#pillars-pills-ds-imprests-content" role="tab" aria-controls="pillars-pills-funds-tab" aria-selected="false">Imprests</a>


                                            <a class="nav-link" id="pillars-pills-ds-activities-tab" data-toggle="pill" href="#pillars-pills-ds-activities-content" role="tab" aria-controls="pillars-pills-funds-tab" aria-selected="false">Activities</a>

                                            <a class="nav-link" id="pillars-pills-ds-sub-activities-tab" data-toggle="pill" href="#pillars-pills-ds-sub-activities-content" role="tab" aria-controls="pillars-pills-funds-tab" aria-selected="false">Sub Activities</a>



                                        </div>
                                    </div>
                                    <div class="col-md-10">

                                        <div class="tab-content" id="vds-finance-pillars-pills-tabContent">
                                            <div class="tab-pane fade show active" id="pillars-pills-ds-requests-content" role="tabpanel" aria-labelledby="pills-finance-pillars-tab">
                                                {{-- my retirements --}}

                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="card">
                                                            <div class="card-content table-responsive">
                                                                <br />
                                                                <table class="table table-bordered table-hover">
                                                                    <p><strong>Data Science requests.</strong></p>
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
                                            <div class="tab-pane fade" id="pillars-pills-ds-projects-content" role="tabpanel" aria-labelledby="vdsreqs-pills-profile-tab">
                                                {{-- my retirements --}}
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="card">
                                                            <div class="card-content table-responsive">
                                                                <br />
                                                                @php
                                                                use App\Support\CollectionHelper;
                                                                $dsproject=CollectionHelper::paginate($projects->where('pillar_ref_id',5),2);
                                                                $ds=1;
                                                                @endphp
                                                                @if(count($dsproject)==0)
                                                                <div class="d-flex p-2 bg-info justify-content-center">No Projects Found!</div>
                                                                @else

                                                                <table class="table table-bordered table-hover">
                                                                    <p><strong>Data Science Projects</strong></p>
                                                                    <thead>

                                                                        <tr>
                                                                            <th scope="col">#</th>
                                                                            <th scope="col">Created by</th>
                                                                            <th scope="col-md-4">Title</th>

                                                                            <th scope="col">Total Cost</th>
                                                                            <th scope="col">Lead</th>
                                                                            <th scope="col"># of approval</th>
                                                                            <th scope="col">Date created</th>
                                                                            <th scope="col"></th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        @foreach($dsproject as $pro)

                                                                        <tr>
                                                                            <th scope="row">{{$ds}}</th>
                                                                            <td>{{$pro->user->fname}} {{$pro->user->lname }}</td>
                                                                            <td>{{$pro->project_title }}</td>
                                                                            <td>{{$pro->total_project_cost}}
                                                                                <span class="badge badge-success">TZS</span>
                                                                            </td>
                                                                            <td class=" ">{{ empty($pro->lead)?'none': $pro->lead }}</td>
                                                                            <td class="">{{ empty($pro->activities->where('approval_status','approved'))?'0':  count($pro->activities->where('approval_status','approved'))  }}</td>
                                                                            <td>{{$pro->created_at}}
                                                                            </td>
                                                                            <td class="w-30 p-2">
                                                                                <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#pr{{$pro->project_id }}"> Actions
                                                                                </button>
                                                                                <!-- Modal -->
                                                                                <div class="modal fade" id="pr{{$pro->project_id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" data-proj="{{ $pro->project_id }}" data-user="{{ Auth::user()->user_id }}">
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
                                                                                                        <a href="" class="btn  btn-outline-secondary d-flex justify-content-between">
                                                                                                            <i class="fas fa-chalkboard fa-lg mt-auto mb-auto"></i>
                                                                                                            <p class="m-auto">Review project</p>
                                                                                                        </a>

                                                                                                    </li>
                                                                                                    <li class="list-group-item">
                                                                                                        <a href="{{ route('pillar-project.show',   $pro->project_id)}}" class="btn btn-outline-success d-flex justify-content-between" data-toggle="tooltip" data-bs-placement="top" title="view project full details">
                                                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                                                                                                <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                                                                                                                <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                                                                                                            </svg>
                                                                                                            <p class="m-auto">Project Details</p>
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
                                                                        @php $ds++; @endphp
                                                                        @endforeach
                                                                    </tbody>
                                                                </table>
                                                                <br />
                                                                <nav aria-label="Page navigation example">
                                                                    <ul class="pagination">

                                                                        <li class="page-item">
                                                                            <a class="page-link" href="{{ $dsproject->previousPageUrl() }}">
                                                                                <span aria-hidden="true">&laquo;</span>
                                                                                <span class="sr-only">Previous</span>
                                                                            </a>
                                                                        </li>

                                                                        @for ($i = 1; $i <= $dsproject->lastPage(); $i++)

                                                                            <li class="page-item {{$dsproject->currentPage() == $i ? 'active' : ''}}">
                                                                                <a class="page-link" href="{{ $dsproject->url($i) }}">{{$i}}
                                                                                </a>
                                                                            </li>
                                                                            @endfor

                                                                            <li class="page-item">
                                                                                <a class="page-link" href="{{ $dsproject->nextPageUrl() }}">Next
                                                                                </a>
                                                                            </li>
                                                                    </ul>
                                                                </nav>
                                                                @endif
                                                            </div>
                                                        </div>
                                                        <!-- end of SECOND column -->
                                                    </div>

                                                </div>
                                            </div>

                                            <div class="tab-pane fade" id="pillars-pills-ds-imprests-content" role="tabpanel" aria-labelledby="vdsreqs-pills-settings-tab">
                                                {{-- data science imprests --}}
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        @php
                                                        $dsimprest=$imprests->where('pillar_id',5);

                                                        @endphp
                                                        @if(count($dsimprest)==0)
                                                        <div class="d-flex p-2 justify-content-center">No Record Found!</div>
                                                        @else
                                                        <table class="table table-bordered table-hover">
                                                            <p>All created <strong>imprest</strong> in Data science Pillar</p>
                                                            <thead>
                                                                <tr>
                                                                    <th scope="col">#</th>
                                                                    <th scope="col">Requested by</th>
                                                                    <th scope="col">Title</th>
                                                                    <th scope="col">Current Stage</th>
                                                                    <th scope="col">Status</th>
                                                                    <th scope="col">Total Cost</th>
                                                                    <th scope="col">Date created</th>

                                                                    <th scope="col"></th>

                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @php $n=1;@endphp

                                                                @foreach($dsimprest as $imp)
                                                                <tr>
                                                                    <th scope="row">{{$n}}.</th>
                                                                    <td>{{$imp->requestedby->fname}}</td>
                                                                    <td>{{$imp->imp_title}}</td>
                                                                    <td> {{$imp->current_stage}}</td>
                                                                    <td>{{$imp->status}}</td>
                                                                    <td>{{$imp->amount_rqst}}</td>
                                                                    <td>{{$imp->created_at->format('Y-m-d') }}</span>
                                                                    </td>

                                                                    <td class=" p-2">
                                                                        <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#rq{{$imp->id}}"> Actions
                                                                        </button>
                                                                        <!-- Modal -->
                                                                        <div class="modal fade" id="rq{{$imp->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
                                                                                                <a href="{{ route('imprest.show',   $imp->id)}}" class="btn btn-outline-success d-flex justify-content-between" data-toggle="tooltip" data-bs-placement="top" title="view project full details">
                                                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                                                                                        <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                                                                                                        <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                                                                                                    </svg>
                                                                                                    <p class="m-auto">Imprest Details </p>
                                                                                                </a>

                                                                                            </li>
                                                                                            <li class="list-group-item">
                                                                                                <a class="btn btn-outline-info btn-md d-flex justify-content-between" data-toggle="modal" data-dismiss="modal" data-target="#rev{{$imp->id}}">
                                                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-arrow-up-circle" viewBox="0 0 16 16">
                                                                                                        <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-7.5 3.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V11.5z" />
                                                                                                    </svg>
                                                                                                    <p class="m-auto">Review Imprest </p>
                                                                                                </a>
                                                                                            </li>
                                                                                            <li class="list-group-item">
                                                                                                <a href="{{ route('retireshow',   $imp->id)}}" class="btn btn-outline-success d-flex justify-content-between" data-toggle="tooltip" data-bs-placement="top" title="view project full details">
                                                                                                    <i class="fas fa-marker fa-2x"></i>
                                                                                                    <p class="m-auto">Review Retirements</p>
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
                                                                        <div class="modal fade" id="rev{{$imp->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                                            <div class="modal-dialog " role="document">
                                                                                <form action="{{route('imprestreview')}}" method="post">
                                                                                    @csrf
                                                                                    <div class="modal-content">
                                                                                        <div class="modal-header text-light bg-primary">
                                                                                            <h6>Imprest Review: {{$imp->imp_title}} </h6>
                                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                                <span aria-hidden="true">&times;</span>
                                                                                            </button>
                                                                                        </div>
                                                                                        <div class="modal-body">
                                                                                            <input type="hidden" value="{{$imp->id }}" name="imprest_id">

                                                                                            <div class="form-group input-group-lg">
                                                                                                <label for="status">Choose Remark</label>
                                                                                                <select class="form-control form-group col-lg-12" onchange="countrychange(this)" aria-label="Large" id="selectProject" name="status" aria-describedby="inputGroup-sizing-sm">
                                                                                                    <option value="">Select Action</option>
                                                                                                    <option value="Denied">Denied</option>
                                                                                                    <option value="Approved">Approved</option>
                                                                                                    <option value="On review">On review</option>
                                                                                                </select>
                                                                                            </div>

                                                                                            <div class="form-group  input-group-lg">
                                                                                                <div class="form-group green-border-focus">
                                                                                                    <label for="fordeptBriefDescription">Comments
                                                                                                    </label>
                                                                                                    <textarea class="form-control" name="comments" rows="8" required></textarea>
                                                                                                </div>
                                                                                            </div>

                                                                                        </div>
                                                                                        <div class="modal-footer">
                                                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                                            <button type="submit" class="btn btn-success">Submit</button>
                                                                                        </div>
                                                                                    </div>
                                                                                </form>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                @php $n++;@endphp
                                                                @endforeach


                                                            </tbody>

                                                        </table>

                                                        <br />
                                                        <br />
                                                        <nav aria-label="Page navigation example">
                                                            <ul class="pagination">
                                                                <li class="page-item">
                                                                    <a class="page-link" href="#" aria-label="Previous">
                                                                        <span aria-hidden="true">&laquo;</span>
                                                                        <span class="sr-only">Previous</span>
                                                                    </a>
                                                                </li>
                                                                <li class="page-item"><a class="page-link" href="#">1</a>
                                                                </li>
                                                                <li class="page-item"><a class="page-link" href="#">2</a>
                                                                </li>
                                                                <li class="page-item"><a class="page-link" href="#">3</a>
                                                                </li>
                                                                <li class="page-item">
                                                                    <a class="page-link" href="#" aria-label="Next">
                                                                        <span aria-hidden="true">&raquo;</span>
                                                                        <span class="sr-only">Next</span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </nav>
                                                        @endif
                                                        <!-- end of SECOND column -->
                                                    </div>

                                                </div>

                                            </div>

                                            <div class="tab-pane fade" id="pillars-pills-ds-activities-content" role="tabpanel" aria-labelledby="pillars-pills-ds-activities-tab">
                                                {{-- data science activities --}}
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="card">
                                                            <div class="card-content table-responsive">
                                                                <br />

                                                                @php
                                                                $myact=$activities->where('pillar_ref_id',5);
                                                                $act=1;
                                                                @endphp
                                                                @if(count($myact)==0)
                                                                <div class="d-flex p-2 justify-content-center">No Record Found!</div>
                                                                @else
                                                                <table class="table table-bordered table-hover">
                                                                    <p class="d-flex justify-content-between"><strong>All activities from Data science</strong>

                                                                    </p>
                                                                    <thead>
                                                                        <tr>
                                                                            <th scope="col">#</th>
                                                                            <th scope="col">Activity title</th>
                                                                            <th scope="col-md-4">Total Estimated cost</th>
                                                                            <th scope="col">current stage</th>
                                                                            <th scope="col">Status</th>
                                                                            <th scope="col">Date created</th>
                                                                            <th scope="col"></th>

                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        @foreach($myact as $myactiv)
                                                                        <tr>
                                                                            <th scope="row">{{ $act }}</th>
                                                                            <td class="w-30 p-2">{{ $myactiv->act_title }}</td>
                                                                            <td class="w-30 p-2">{{ $myactiv->total_act_cost }}</td>
                                                                            <td class="w-30  p-2">On review {{ $myactiv->current_stage }}</td>
                                                                            <td class="w-30  p-2">{{ $myactiv->review_status }}</td>
                                                                            <td class="w-10 p-2">{{ $myactiv->created_at }}</td>
                                                                            <td class="w-30 p-2">
                                                                                <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#act{{$myactiv->pillar_act_id}}"> Actions
                                                                                </button>
                                                                                <!-- Modal -->
                                                                                <div class="modal fade" id="act{{$myactiv->pillar_act_id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" data-proj="{{ $myactiv->pillar_act_id }}" data-user="{{ Auth::user()->user_id }}">
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
                                                                                                        <a href="{{ route('pillar-activity.show',   $myactiv->pillar_act_id)}}" class="btn btn-outline-success d-flex justify-content-between" data-toggle="tooltip" data-bs-placement="top" title="view project full details">
                                                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                                                                                                <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                                                                                                                <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                                                                                                            </svg>
                                                                                                            <p class="m-auto">Activity Details</p>
                                                                                                        </a>

                                                                                                    </li>
                                                                                                    <li class="list-group-item">
                                                                                                        <a href="" class="btn btn-outline-info btn-md d-flex justify-content-between" data-toggle="tooltip" data-bs-placement="top" title="view update project details">
                                                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-arrow-up-circle" viewBox="0 0 16 16">
                                                                                                                <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-7.5 3.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V11.5z" />
                                                                                                            </svg>
                                                                                                            <p class="m-auto">Review Activity </p>
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
                                                                        @php $act++ @endphp
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
                                                                @endif
                                                            </div>
                                                        </div>
                                                        <!-- end of SECOND column -->
                                                    </div>

                                                </div>


                                            </div>

                                            <div class="tab-pane fade" id="pillars-pills-ds-sub-activities-content" role="tabpanel" aria-labelledby="pillars-pills-ds-sub-activities-tab">

                                                {{-- data science sub activities --}}
                                                <div class="col-lg-12">
                                                    <div class="card">
                                                        <div class="card-content table-responsive">
                                                            <br />
                                                            @php
                                                            $mysubactivities=$subactivities->where('pillar_ref_id',5);

                                                            @endphp
                                                            @if(count($mysubactivities)==0)
                                                            <div class="d-flex p-2 justify-content-center">No Record Found!</div>
                                                            @else
                                                            <table class="table table-bordered table-hover">
                                                                <p class="d-flex justify-content-between"><strong>All SubActivitiesfrom Data science</strong>

                                                                </p>
                                                                <thead>
                                                                    <tr>
                                                                        <th scope="col">#</th>
                                                                        <th scope="col">SubActivity title</th>
                                                                        <th scope="col-md-4">Total Estimated cost</th>
                                                                        <th scope="col">current stage</th>
                                                                        <th scope="col">status</th>
                                                                        <th scope="col">Date created</th>
                                                                        <th scope="col"></th>

                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    @php $i=0;@endphp @foreach($mysubactivities as $myact)
                                                                    @php $i++;@endphp <tr>
                                                                        <th scope="row">{{ $i}}</th>
                                                                        <td class="w-30 p-2">{{ $myact->subact_title }}</td>
                                                                        <td class="w-30 p-2">{{ $myact->total_subactivity_cost }}</td>
                                                                        <td class="w-30  p-2">{{ $myact->current_stage }}</td>
                                                                        <td class="w-30  p-2">{{ $myact->review_status }}</td>
                                                                        <td class="w-10 p-2">{{ $myact->created_at }}</td>
                                                                        <td class="w-30 p-2">
                                                                            <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#subact{{$myact->id}}"> Actions
                                                                            </button>
                                                                            <!-- Modal -->
                                                                            <div class="modal fade" id="subact{{$myact->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
                                                                                                    <a href="{{ route('pillar-subactivity.show',$myact->id)}}" class="btn btn-outline-success d-flex justify-content-between" data-toggle="tooltip" data-bs-placement="top" title="view project full details">
                                                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                                                                                            <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                                                                                                            <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                                                                                                        </svg>
                                                                                                        <p class="m-auto">SubActivity Details</p>
                                                                                                    </a>

                                                                                                </li>
                                                                                                <li class="list-group-item">
                                                                                                    <a href="" class="btn btn-outline-info btn-md d-flex justify-content-between" data-toggle="tooltip" data-bs-placement="top" title="view update project details">
                                                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-arrow-up-circle" viewBox="0 0 16 16">
                                                                                                            <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-7.5 3.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V11.5z" />
                                                                                                        </svg>
                                                                                                        <p class="m-auto">Review SubActivity </p>
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
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <!-- end of SECOND column -->
                                                </div>

                                            </div>

                                            <div class="tab-pane fade" id="pillars-pills-ds-retirements-content" role="tabpanel" aria-labelledby="pillars-pills-ds-retirements-tab">

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

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="finance-pillars-nav-ce-content" role="tabpanel" aria-labelledby="finance-pillars-nav-ce-nav">
                                <br />
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="nav flex-column nav-pills" id="vds-finance-pillars-pills-tab" role="tablist" aria-orientation="vertical">
                                            <a class="nav-link active" id="pillars-pills-ce-requests-tab" data-toggle="pill" href="#pillars-pills-ce-requests-content" role="tab" aria-controls="" aria-selected="true">Requests</a>

                                            <a class="nav-link" id="pillars-pills-ce-projects-tab" data-toggle="pill" href="#pillars-pills-ce-projects-content" role="tab" aria-controls="pillars-pills-ce-content-tab" aria-selected="false">Projects</a>

                                            <a class="nav-link" id="pillars-pills-ce-imprests-tab" data-toggle="pill" href="#pillars-pills-ce-imprests-content" role="tab" aria-controls="pillars-pills-funds-tab" aria-selected="false">Imprests</a>


                                            <a class="nav-link" id="pillars-pills-ce-activities-tab" data-toggle="pill" href="#pillars-pills-ce-activities-content" role="tab" aria-controls="pillars-pills-funds-tab" aria-selected="false">Activities</a>

                                            <a class="nav-link" id="pillars-pills-ce-sub-activities-tab" data-toggle="pill" href="#pillars-pills-ce-sub-activities-content" role="tab" aria-controls="pillars-pills-funds-tab" aria-selected="false">Sub Activities</a>




                                        </div>
                                    </div>
                                    <div class="col-md-10">

                                        <div class="tab-content" id="ce-finance-pillars-pills-tabContent">

                                            <div class="tab-pane fade show active" id="pillars-pills-ce-requests-content" role="tabpanel" aria-labelledby="pills-finance-pillars-tab">
                                                {{-- my retirements --}}

                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="card">
                                                            <div class="card-content table-responsive">
                                                                <br />
                                                                <table class="table table-bordered table-hover">
                                                                    <p><strong>Data Science requests.</strong></p>
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
                                            <div class="tab-pane fade" id="pillars-pills-ce-projects-content" role="tabpanel" aria-labelledby="vdsreqs-pills-profile-tab">
                                                {{-- my retirements --}}
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="card">
                                                            <div class="card-content table-responsive">
                                                                <br />
                                                                @php
                                                                $dsproject=$projects->where('pillar_ref_id',5);
                                                                $ds=1;
                                                                @endphp
                                                                @if(count($dsproject)==0)
                                                                <div class="d-flex p-2 bg-info justify-content-center">No Projects Found!</div>
                                                                @else

                                                                <table class="table table-bordered table-hover">
                                                                    <p><strong>Data Science Projects</strong></p>
                                                                    <thead>

                                                                        <tr>
                                                                            <th scope="col">#</th>
                                                                            <th scope="col">Created by</th>
                                                                            <th scope="col-md-4">Title</th>

                                                                            <th scope="col">Total Cost</th>
                                                                            <th scope="col">current stage</th>
                                                                            <th scope="col">status</th>
                                                                            <th scope="col">Date created</th>
                                                                            <th scope="col"></th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        @foreach($dsproject as $pro)

                                                                        <tr>
                                                                            <th scope="row">{{$ds}}</th>
                                                                            <td>{{$pro->user->fname}} {{$pro->user->lname }}</td>
                                                                            <td>{{$pro->project_title }}</td>
                                                                            <td>{{$pro->total_project_cost}}
                                                                                <span class="badge badge-success">TZS</span>
                                                                            </td>
                                                                            <td class=" ">{{ $pro->current_stage }}</td>
                                                                            <td class="">{{ $pro->review_status }}</td>
                                                                            <td>{{$pro->created_at}}
                                                                            </td>
                                                                            <td class="w-30 p-2">
                                                                                <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#pr{{$pro->project_id }}"> Actions
                                                                                </button>
                                                                                <!-- Modal -->
                                                                                <div class="modal fade" id="pr{{$pro->project_id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" data-proj="{{ $pro->project_id }}" data-user="{{ Auth::user()->user_id }}">
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
                                                                                                        <a href="" class="btn  btn-outline-secondary d-flex justify-content-between">
                                                                                                            <i class="fas fa-chalkboard fa-lg mt-auto mb-auto"></i>
                                                                                                            <p class="m-auto">Review project</p>
                                                                                                        </a>

                                                                                                    </li>
                                                                                                    <li class="list-group-item">
                                                                                                        <a href="{{ route('pillar-project.show',   $pro->project_id)}}" class="btn btn-outline-success d-flex justify-content-between" data-toggle="tooltip" data-bs-placement="top" title="view project full details">
                                                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                                                                                                <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                                                                                                                <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                                                                                                            </svg>
                                                                                                            <p class="m-auto">Project Details</p>
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
                                                                        @php $ds++; @endphp
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
                                                                @endif
                                                            </div>
                                                        </div>
                                                        <!-- end of SECOND column -->
                                                    </div>

                                                </div>
                                            </div>

                                            <div class="tab-pane fade" id="pillars-pills-ce-imprests-content" role="tabpanel" aria-labelledby="vdsreqs-pills-settings-tab">
                                                {{-- data science imprests --}}
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        @php
                                                        $dsimprest=$imprests->where('pillar_id',5);

                                                        @endphp
                                                        @if(count($dsimprest)==0)
                                                        <div class="d-flex p-2 justify-content-center">No Record Found!</div>
                                                        @else
                                                        <table class="table table-bordered table-hover">
                                                            <p>All created <strong>imprest</strong> in Data science Pillar</p>
                                                            <thead>
                                                                <tr>
                                                                    <th scope="col">#</th>
                                                                    <th scope="col">Requested by</th>
                                                                    <th scope="col-md-4">Title</th>
                                                                    <th scope="col">Current Stage</th>
                                                                    <th scope="col">Status</th>
                                                                    <th scope="col">Total Cost</th>
                                                                    <th scope="col">Date created</th>

                                                                    <th scope="col"></th>

                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @php $n=1;@endphp

                                                                @foreach($dsimprest as $imp)
                                                                <tr>
                                                                    <th scope="row">{{$n}}.</th>
                                                                    <td>{{$imp->requestedby->fname}}</td>
                                                                    <td>{{$imp->imp_title}}</td>
                                                                    <td> on review finance</td>
                                                                    <td></td>
                                                                    <td>{{$imp->amount_rqst}}</td>
                                                                    <td>{{$imp->created_at->format('Y-m-d') }}</span>
                                                                    </td>

                                                                    <td class=" p-2">
                                                                        <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#rq{{$imp->id}}"> Actions
                                                                        </button>
                                                                        <!-- Modal -->
                                                                        <div class="modal fade" id="rq{{$imp->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
                                                                                                <a href="{{ route('imprest.show',   $imp->id)}}" class="btn btn-outline-success d-flex justify-content-between" data-toggle="tooltip" data-bs-placement="top" title="view project full details">
                                                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                                                                                        <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                                                                                                        <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                                                                                                    </svg>
                                                                                                    <p class="m-auto">Imprest Details & retirements</p>
                                                                                                </a>

                                                                                            </li>
                                                                                            <li class="list-group-item">
                                                                                                <a href="" class="btn btn-outline-info btn-md d-flex justify-content-between" data-toggle="tooltip" data-bs-placement="top" title="view update project details">
                                                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-arrow-up-circle" viewBox="0 0 16 16">
                                                                                                        <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-7.5 3.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V11.5z" />
                                                                                                    </svg>
                                                                                                    <p class="m-auto">Review Imprest </p>
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
                                                                @php $n++;@endphp
                                                                @endforeach


                                                            </tbody>

                                                        </table>

                                                        <br />
                                                        <br />
                                                        <nav aria-label="Page navigation example">
                                                            <ul class="pagination">
                                                                <li class="page-item">
                                                                    <a class="page-link" href="#" aria-label="Previous">
                                                                        <span aria-hidden="true">&laquo;</span>
                                                                        <span class="sr-only">Previous</span>
                                                                    </a>
                                                                </li>
                                                                <li class="page-item"><a class="page-link" href="#">1</a>
                                                                </li>
                                                                <li class="page-item"><a class="page-link" href="#">2</a>
                                                                </li>
                                                                <li class="page-item"><a class="page-link" href="#">3</a>
                                                                </li>
                                                                <li class="page-item">
                                                                    <a class="page-link" href="#" aria-label="Next">
                                                                        <span aria-hidden="true">&raquo;</span>
                                                                        <span class="sr-only">Next</span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </nav>
                                                        @endif
                                                        <!-- end of SECOND column -->
                                                    </div>

                                                </div>

                                            </div>

                                            <div class="tab-pane fade" id="pillars-pills-ce-activities-content" role="tabpanel" aria-labelledby="pillars-pills-ds-activities-tab">
                                                {{-- data science activities --}}
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="card">
                                                            <div class="card-content table-responsive">
                                                                <br />

                                                                @php
                                                                $myact=$activities->where('pillar_ref_id',5);
                                                                $act=1;
                                                                @endphp
                                                                @if(count($myact)==0)
                                                                <div class="d-flex p-2 justify-content-center">No Record Found!</div>
                                                                @else
                                                                <table class="table table-bordered table-hover">
                                                                    <p class="d-flex justify-content-between"><strong>All activities from Data science</strong>

                                                                    </p>
                                                                    <thead>
                                                                        <tr>
                                                                            <th scope="col">#</th>
                                                                            <th scope="col">Activity title</th>
                                                                            <th scope="col-md-4">Total Estimated cost</th>
                                                                            <th scope="col">current stage</th>
                                                                            <th scope="col">Date created</th>
                                                                            <th scope="col"></th>

                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        @foreach($myact as $myactiv)
                                                                        <tr>
                                                                            <th scope="row">{{ $act }}</th>
                                                                            <td class="w-30 p-2">{{ $myactiv->act_title }}</td>
                                                                            <td class="w-30 p-2">{{ $myactiv->total_act_cost }}</td>
                                                                            <td class="w-30  p-2">{{ $myactiv->current_stage }}</td>
                                                                            <td class="w-10 p-2">{{ $myactiv->created_at }}</td>
                                                                            <td class="w-30 p-2">
                                                                                <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#act{{$myactiv->pillar_act_id}}"> Actions
                                                                                </button>
                                                                                <!-- Modal -->
                                                                                <div class="modal fade" id="act{{$myactiv->pillar_act_id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" data-proj="{{ $myactiv->pillar_act_id }}" data-user="{{ Auth::user()->user_id }}">
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
                                                                                                        <a href="{{ route('pillar-activity.show',   $myactiv->pillar_act_id)}}" class="btn btn-outline-success d-flex justify-content-between" data-toggle="tooltip" data-bs-placement="top" title="view project full details">
                                                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                                                                                                <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                                                                                                                <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                                                                                                            </svg>
                                                                                                            <p class="m-auto">Activity Details</p>
                                                                                                        </a>

                                                                                                    </li>
                                                                                                    <li class="list-group-item">
                                                                                                        <a href="" class="btn btn-outline-info btn-md d-flex justify-content-between" data-toggle="tooltip" data-bs-placement="top" title="view update project details">
                                                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-arrow-up-circle" viewBox="0 0 16 16">
                                                                                                                <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-7.5 3.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V11.5z" />
                                                                                                            </svg>
                                                                                                            <p class="m-auto">Review Activity </p>
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
                                                                        @php $act++ @endphp
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
                                                                @endif
                                                            </div>
                                                        </div>
                                                        <!-- end of SECOND column -->
                                                    </div>

                                                </div>


                                            </div>

                                            <div class="tab-pane fade" id="pillars-pills-ce-sub-activities-content" role="tabpanel" aria-labelledby="pillars-pills-ds-sub-activities-tab">
                                                <div class="row"> {{-- data science sub activities --}}
                                                    <div class="col-lg-12">
                                                        <div class="card">
                                                            <div class="card-content table-responsive">
                                                                <br />
                                                                @php
                                                                $mysubactivities=$subactivities->where('pillar_ref_id',5);

                                                                @endphp
                                                                @if(count($mysubactivities)==0)
                                                                <div class="d-flex p-2 justify-content-center">No Record Found!</div>
                                                                @else
                                                                <table class="table table-bordered table-hover">
                                                                    <p class="d-flex justify-content-between"><strong>All SubActivitiesfrom Data science</strong>

                                                                    </p>
                                                                    <thead>
                                                                        <tr>
                                                                            <th scope="col">#</th>
                                                                            <th scope="col">SubActivity title</th>
                                                                            <th scope="col-md-4">Total Estimated cost</th>
                                                                            <th scope="col">current stage</th>
                                                                            <th scope="col">status</th>
                                                                            <th scope="col">Date created</th>
                                                                            <th scope="col"></th>

                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        @php $i=0;@endphp @foreach($mysubactivities as $myact)
                                                                        @php $i++;@endphp <tr>
                                                                            <th scope="row">{{ $i}}</th>
                                                                            <td class="w-30 p-2">{{ $myact->subact_title }}</td>
                                                                            <td class="w-30 p-2">{{ $myact->total_subactivity_cost }}</td>
                                                                            <td class="w-30  p-2">{{ $myact->current_stage }}</td>
                                                                            <td class="w-30  p-2">{{ $myact->review_status }}</td>
                                                                            <td class="w-10 p-2">{{ $myact->created_at }}</td>
                                                                            <td class="w-30 p-2">
                                                                                <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#subact{{$myact->id}}"> Actions
                                                                                </button>
                                                                                <!-- Modal -->
                                                                                <div class="modal fade" id="subact{{$myact->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
                                                                                                        <a href="{{ route('pillar-subactivity.show',$myact->id)}}" class="btn btn-outline-success d-flex justify-content-between" data-toggle="tooltip" data-bs-placement="top" title="view project full details">
                                                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                                                                                                <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                                                                                                                <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                                                                                                            </svg>
                                                                                                            <p class="m-auto">SubActivity Details</p>
                                                                                                        </a>

                                                                                                    </li>
                                                                                                    <li class="list-group-item">
                                                                                                        <a href="" class="btn btn-outline-info btn-md d-flex justify-content-between" data-toggle="tooltip" data-bs-placement="top" title="view update project details">
                                                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-arrow-up-circle" viewBox="0 0 16 16">
                                                                                                                <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-7.5 3.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V11.5z" />
                                                                                                            </svg>
                                                                                                            <p class="m-auto">Review SubActivity </p>
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
                                                                @endif
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

                            <div class="tab-pane fade" id="finance-pillars-nav-cb-content" role="tabpanel" aria-labelledby="finance-pillars-nav-cb-nav">
                                <br />

                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="nav flex-column nav-pills" id="vds-finance-pillars-pills-tab" role="tablist" aria-orientation="vertical">
                                            <a class="nav-link active" id="pillars-pills-cb-requests-tab" data-toggle="pill" href="#pillars-pills-cb-requests-content" role="tab" aria-controls="" aria-selected="true">Requests</a>

                                            <a class="nav-link" id="pillars-pills-cb-projects-tab" data-toggle="pill" href="#pillars-pills-cb-projects-content" role="tab" aria-controls="pillars-pills-cb-content-tab" aria-selected="false">Projects</a>

                                            <a class="nav-link" id="pillars-pills-cb-imprests-tab" data-toggle="pill" href="#pillars-pills-cb-imprests-content" role="tab" aria-controls="pillars-pills-funds-tab" aria-selected="false">Imprests</a>


                                            <a class="nav-link" id="pillars-pills-cb-activities-tab" data-toggle="pill" href="#pillars-pills-cb-activities-content" role="tab" aria-controls="pillars-pills-funds-tab" aria-selected="false">Activities</a>

                                            <a class="nav-link" id="pillars-pills-cb-sub-activities-tab" data-toggle="pill" href="#pillars-pills-cb-sub-activities-content" role="tab" aria-controls="pillars-pills-funds-tab" aria-selected="false">Sub Activities</a>




                                        </div>
                                    </div>
                                    <div class="col-md-10">

                                        <div class="tab-content" id="cb-finance-pillars-pills-tabContent">

                                            <div class="tab-pane fade show active" id="pillars-pills-cb-requests-content" role="tabpanel" aria-labelledby="pills-finance-pillars-tab">
                                                {{-- my retirements --}}

                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="card">
                                                            <div class="card-content table-responsive">
                                                                <br />
                                                                <table class="table table-bordered table-hover">
                                                                    <p><strong>Data Science requests.</strong></p>
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
                                            <div class="tab-pane fade" id="pillars-pills-cb-projects-content" role="tabpanel" aria-labelledby="vdsreqs-pills-profile-tab">
                                                {{-- my retirements --}}
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="card">
                                                            <div class="card-content table-responsive">
                                                                <br />
                                                                @php
                                                                $dsproject=$projects->where('pillar_ref_id',5);
                                                                $ds=1;
                                                                @endphp
                                                                @if(count($dsproject)==0)
                                                                <div class="d-flex p-2 bg-info justify-content-center">No Projects Found!</div>
                                                                @else

                                                                <table class="table table-bordered table-hover">
                                                                    <p><strong>Data Science Projects</strong></p>
                                                                    <thead>

                                                                        <tr>
                                                                            <th scope="col">#</th>
                                                                            <th scope="col">Created by</th>
                                                                            <th scope="col-md-4">Title</th>

                                                                            <th scope="col">Total Cost</th>
                                                                            <th scope="col">current stage</th>
                                                                            <th scope="col">status</th>
                                                                            <th scope="col">Date created</th>
                                                                            <th scope="col"></th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        @foreach($dsproject as $pro)

                                                                        <tr>
                                                                            <th scope="row">{{$ds}}</th>
                                                                            <td>{{$pro->user->fname}} {{$pro->user->lname }}</td>
                                                                            <td>{{$pro->project_title }}</td>
                                                                            <td>{{$pro->total_project_cost}}
                                                                                <span class="badge badge-success">TZS</span>
                                                                            </td>
                                                                            <td class=" ">{{ $pro->current_stage }}</td>
                                                                            <td class="">{{ $pro->review_status }}</td>
                                                                            <td>{{$pro->created_at}}
                                                                            </td>
                                                                            <td class="w-30 p-2">
                                                                                <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#pr{{$pro->project_id }}"> Actions
                                                                                </button>
                                                                                <!-- Modal -->
                                                                                <div class="modal fade" id="pr{{$pro->project_id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" data-proj="{{ $pro->project_id }}" data-user="{{ Auth::user()->user_id }}">
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
                                                                                                        <a href="" class="btn  btn-outline-secondary d-flex justify-content-between">
                                                                                                            <i class="fas fa-chalkboard fa-lg mt-auto mb-auto"></i>
                                                                                                            <p class="m-auto">Review project</p>
                                                                                                        </a>

                                                                                                    </li>
                                                                                                    <li class="list-group-item">
                                                                                                        <a href="{{ route('pillar-project.show',   $pro->project_id)}}" class="btn btn-outline-success d-flex justify-content-between" data-toggle="tooltip" data-bs-placement="top" title="view project full details">
                                                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                                                                                                <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                                                                                                                <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                                                                                                            </svg>
                                                                                                            <p class="m-auto">Project Details</p>
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
                                                                        @php $ds++; @endphp
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
                                                                @endif
                                                            </div>
                                                        </div>
                                                        <!-- end of SECOND column -->
                                                    </div>

                                                </div>
                                            </div>

                                            <div class="tab-pane fade" id="pillars-pills-cb-imprests-content" role="tabpanel" aria-labelledby="vdsreqs-pills-settings-tab">
                                                {{-- data science imprests --}}
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        @php
                                                        $dsimprest=$imprests->where('pillar_id',5);

                                                        @endphp
                                                        @if(count($dsimprest)==0)
                                                        <div class="d-flex p-2 justify-content-center">No Record Found!</div>
                                                        @else
                                                        <table class="table table-bordered table-hover">
                                                            <p>All created <strong>imprest</strong> in Data science Pillar</p>
                                                            <thead>
                                                                <tr>
                                                                    <th scope="col">#</th>
                                                                    <th scope="col">Requested by</th>
                                                                    <th scope="col-md-4">Title</th>
                                                                    <th scope="col">Current Stage</th>
                                                                    <th scope="col">Status</th>
                                                                    <th scope="col">Total Cost</th>
                                                                    <th scope="col">Date created</th>

                                                                    <th scope="col"></th>

                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @php $n=1;@endphp

                                                                @foreach($dsimprest as $imp)
                                                                <tr>
                                                                    <th scope="row">{{$n}}.</th>
                                                                    <td>{{$imp->requestedby->fname}}</td>
                                                                    <td>{{$imp->imp_title}}</td>
                                                                    <td> on review finance</td>
                                                                    <td></td>
                                                                    <td>{{$imp->amount_rqst}}</td>
                                                                    <td>{{$imp->created_at->format('Y-m-d') }}</span>
                                                                    </td>

                                                                    <td class=" p-2">
                                                                        <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#rq{{$imp->id}}"> Actions
                                                                        </button>
                                                                        <!-- Modal -->
                                                                        <div class="modal fade" id="rq{{$imp->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
                                                                                                <a href="{{ route('imprest.show',   $imp->id)}}" class="btn btn-outline-success d-flex justify-content-between" data-toggle="tooltip" data-bs-placement="top" title="view project full details">
                                                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                                                                                        <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                                                                                                        <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                                                                                                    </svg>
                                                                                                    <p class="m-auto">Imprest Details & retirements</p>
                                                                                                </a>

                                                                                            </li>
                                                                                            <li class="list-group-item">
                                                                                                <a href="" class="btn btn-outline-info btn-md d-flex justify-content-between" data-toggle="tooltip" data-bs-placement="top" title="view update project details">
                                                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-arrow-up-circle" viewBox="0 0 16 16">
                                                                                                        <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-7.5 3.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V11.5z" />
                                                                                                    </svg>
                                                                                                    <p class="m-auto">Review Imprest </p>
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
                                                                @php $n++;@endphp
                                                                @endforeach


                                                            </tbody>

                                                        </table>

                                                        <br />
                                                        <br />
                                                        <nav aria-label="Page navigation example">
                                                            <ul class="pagination">
                                                                <li class="page-item">
                                                                    <a class="page-link" href="#" aria-label="Previous">
                                                                        <span aria-hidden="true">&laquo;</span>
                                                                        <span class="sr-only">Previous</span>
                                                                    </a>
                                                                </li>
                                                                <li class="page-item"><a class="page-link" href="#">1</a>
                                                                </li>
                                                                <li class="page-item"><a class="page-link" href="#">2</a>
                                                                </li>
                                                                <li class="page-item"><a class="page-link" href="#">3</a>
                                                                </li>
                                                                <li class="page-item">
                                                                    <a class="page-link" href="#" aria-label="Next">
                                                                        <span aria-hidden="true">&raquo;</span>
                                                                        <span class="sr-only">Next</span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </nav>
                                                        @endif
                                                        <!-- end of SECOND column -->
                                                    </div>

                                                </div>

                                            </div>

                                            <div class="tab-pane fade" id="pillars-pills-cb-activities-content" role="tabpanel" aria-labelledby="pillars-pills-ds-activities-tab">
                                                {{-- data science activities --}}
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="card">
                                                            <div class="card-content table-responsive">
                                                                <br />

                                                                @php
                                                                $myact=$activities->where('pillar_ref_id',5);
                                                                $act=1;
                                                                @endphp
                                                                @if(count($myact)==0)
                                                                <div class="d-flex p-2 justify-content-center">No Record Found!</div>
                                                                @else
                                                                <table class="table table-bordered table-hover">
                                                                    <p class="d-flex justify-content-between"><strong>All activities from Data science</strong>

                                                                    </p>
                                                                    <thead>
                                                                        <tr>
                                                                            <th scope="col">#</th>
                                                                            <th scope="col">Activity title</th>
                                                                            <th scope="col-md-4">Total Estimated cost</th>
                                                                            <th scope="col">current stage</th>
                                                                            <th scope="col">Date created</th>
                                                                            <th scope="col"></th>

                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        @foreach($myact as $myactiv)
                                                                        <tr>
                                                                            <th scope="row">{{ $act }}</th>
                                                                            <td class="w-30 p-2">{{ $myactiv->act_title }}</td>
                                                                            <td class="w-30 p-2">{{ $myactiv->total_act_cost }}</td>
                                                                            <td class="w-30  p-2">{{ $myactiv->current_stage }}</td>
                                                                            <td class="w-10 p-2">{{ $myactiv->created_at }}</td>
                                                                            <td class="w-30 p-2">
                                                                                <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#act{{$myactiv->pillar_act_id}}"> Actions
                                                                                </button>
                                                                                <!-- Modal -->
                                                                                <div class="modal fade" id="act{{$myactiv->pillar_act_id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" data-proj="{{ $myactiv->pillar_act_id }}" data-user="{{ Auth::user()->user_id }}">
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
                                                                                                        <a href="{{ route('pillar-activity.show',   $myactiv->pillar_act_id)}}" class="btn btn-outline-success d-flex justify-content-between" data-toggle="tooltip" data-bs-placement="top" title="view project full details">
                                                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                                                                                                <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                                                                                                                <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                                                                                                            </svg>
                                                                                                            <p class="m-auto">Activity Details</p>
                                                                                                        </a>

                                                                                                    </li>
                                                                                                    <li class="list-group-item">
                                                                                                        <a href="" class="btn btn-outline-info btn-md d-flex justify-content-between" data-toggle="tooltip" data-bs-placement="top" title="view update project details">
                                                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-arrow-up-circle" viewBox="0 0 16 16">
                                                                                                                <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-7.5 3.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V11.5z" />
                                                                                                            </svg>
                                                                                                            <p class="m-auto">Review Activity </p>
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
                                                                        @php $act++ @endphp
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
                                                                @endif
                                                            </div>
                                                        </div>
                                                        <!-- end of SECOND column -->
                                                    </div>

                                                </div>


                                            </div>

                                            <div class="tab-pane fade" id="pillars-pills-cb-sub-activities-content" role="tabpanel" aria-labelledby="pillars-pills-ds-sub-activities-tab">
                                                <div class="row"> {{-- data science sub activities --}}
                                                    <div class="col-lg-12">
                                                        <div class="card">
                                                            <div class="card-content table-responsive">
                                                                <br />
                                                                @php
                                                                $mysubactivities=$subactivities->where('pillar_ref_id',5);

                                                                @endphp
                                                                @if(count($mysubactivities)==0)
                                                                <div class="d-flex p-2 justify-content-center">No Record Found!</div>
                                                                @else
                                                                <table class="table table-bordered table-hover">
                                                                    <p class="d-flex justify-content-between"><strong>All SubActivitiesfrom Data science</strong>

                                                                    </p>
                                                                    <thead>
                                                                        <tr>
                                                                            <th scope="col">#</th>
                                                                            <th scope="col">SubActivity title</th>
                                                                            <th scope="col-md-4">Total Estimated cost</th>
                                                                            <th scope="col">current stage</th>
                                                                            <th scope="col">status</th>
                                                                            <th scope="col">Date created</th>
                                                                            <th scope="col"></th>

                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        @php $i=0;@endphp @foreach($mysubactivities as $myact)
                                                                        @php $i++;@endphp <tr>
                                                                            <th scope="row">{{ $i}}</th>
                                                                            <td class="w-30 p-2">{{ $myact->subact_title }}</td>
                                                                            <td class="w-30 p-2">{{ $myact->total_subactivity_cost }}</td>
                                                                            <td class="w-30  p-2">{{ $myact->current_stage }}</td>
                                                                            <td class="w-30  p-2">{{ $myact->review_status }}</td>
                                                                            <td class="w-10 p-2">{{ $myact->created_at }}</td>
                                                                            <td class="w-30 p-2">
                                                                                <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#subact{{$myact->id}}"> Actions
                                                                                </button>
                                                                                <!-- Modal -->
                                                                                <div class="modal fade" id="subact{{$myact->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
                                                                                                        <a href="{{ route('pillar-subactivity.show',$myact->id)}}" class="btn btn-outline-success d-flex justify-content-between" data-toggle="tooltip" data-bs-placement="top" title="view project full details">
                                                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                                                                                                <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                                                                                                                <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                                                                                                            </svg>
                                                                                                            <p class="m-auto">SubActivity Details</p>
                                                                                                        </a>

                                                                                                    </li>
                                                                                                    <li class="list-group-item">
                                                                                                        <a href="" class="btn btn-outline-info btn-md d-flex justify-content-between" data-toggle="tooltip" data-bs-placement="top" title="view update project details">
                                                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-arrow-up-circle" viewBox="0 0 16 16">
                                                                                                                <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-7.5 3.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V11.5z" />
                                                                                                            </svg>
                                                                                                            <p class="m-auto">Review SubActivity </p>
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
                                                                @endif
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

                            <div class="tab-pane fade" id="finance-pillars-nav-ri-content" role="tabpanel" aria-labelledby="finance-pillars-nav-ri-nav">
                                <br />

                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="nav flex-column nav-pills" id="vds-finance-pillars-pills-tab" role="tablist" aria-orientation="vertical">
                                            <a class="nav-link active" id="pillars-pills-ri-requests-tab" data-toggle="pill" href="#pillars-pills-ri-requests-content" role="tab" aria-controls="" aria-selected="true">Requests</a>

                                            <a class="nav-link" id="pillars-pills-ri-projects-tab" data-toggle="pill" href="#pillars-pills-ri-projects-content" role="tab" aria-controls="pillars-pills-ri-content-tab" aria-selected="false">Projects</a>

                                            <a class="nav-link" id="pillars-pills-ri-imprests-tab" data-toggle="pill" href="#pillars-pills-ri-imprests-content" role="tab" aria-controls="pillars-pills-funds-tab" aria-selected="false">Imprests</a>


                                            <a class="nav-link" id="pillars-pills-ri-activities-tab" data-toggle="pill" href="#pillars-pills-ri-activities-content" role="tab" aria-controls="pillars-pills-funds-tab" aria-selected="false">Activities</a>

                                            <a class="nav-link" id="pillars-pills-ri-sub-activities-tab" data-toggle="pill" href="#pillars-pills-ri-sub-activities-content" role="tab" aria-controls="pillars-pills-funds-tab" aria-selected="false">Sub Activities</a>




                                        </div>
                                    </div>
                                    <div class="col-md-10">

                                        <div class="tab-content" id="ri-finance-pillars-pills-tabContent">

                                            <div class="tab-pane fade show active" id="pillars-pills-ri-requests-content" role="tabpanel" aria-labelledby="pills-finance-pillars-tab">
                                                {{-- my retirements --}}

                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="card">
                                                            <div class="card-content table-responsive">
                                                                <br />
                                                                <table class="table table-bordered table-hover">
                                                                    <p><strong>Data Science requests.</strong></p>
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
                                            <div class="tab-pane fade" id="pillars-pills-ri-projects-content" role="tabpanel" aria-labelledby="vdsreqs-pills-profile-tab">
                                                {{-- my retirements --}}
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="card">
                                                            <div class="card-content table-responsive">
                                                                <br />
                                                                @php
                                                                $dsproject=$projects->where('pillar_ref_id',5);
                                                                $ds=1;
                                                                @endphp
                                                                @if(count($dsproject)==0)
                                                                <div class="d-flex p-2 bg-info justify-content-center">No Projects Found!</div>
                                                                @else

                                                                <table class="table table-bordered table-hover">
                                                                    <p><strong>Data Science Projects</strong></p>
                                                                    <thead>

                                                                        <tr>
                                                                            <th scope="col">#</th>
                                                                            <th scope="col">Created by</th>
                                                                            <th scope="col-md-4">Title</th>

                                                                            <th scope="col">Total Cost</th>
                                                                            <th scope="col">current stage</th>
                                                                            <th scope="col">status</th>
                                                                            <th scope="col">Date created</th>
                                                                            <th scope="col"></th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        @foreach($dsproject as $pro)

                                                                        <tr>
                                                                            <th scope="row">{{$ds}}</th>
                                                                            <td>{{$pro->user->fname}} {{$pro->user->lname }}</td>
                                                                            <td>{{$pro->project_title }}</td>
                                                                            <td>{{$pro->total_project_cost}}
                                                                                <span class="badge badge-success">TZS</span>
                                                                            </td>
                                                                            <td class=" ">{{ $pro->current_stage }}</td>
                                                                            <td class="">{{ $pro->review_status }}</td>
                                                                            <td>{{$pro->created_at}}
                                                                            </td>
                                                                            <td class="w-30 p-2">
                                                                                <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#pr{{$pro->project_id }}"> Actions
                                                                                </button>
                                                                                <!-- Modal -->
                                                                                <div class="modal fade" id="pr{{$pro->project_id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" data-proj="{{ $pro->project_id }}" data-user="{{ Auth::user()->user_id }}">
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
                                                                                                        <a href="" class="btn  btn-outline-secondary d-flex justify-content-between">
                                                                                                            <i class="fas fa-chalkboard fa-lg mt-auto mb-auto"></i>
                                                                                                            <p class="m-auto">Review project</p>
                                                                                                        </a>

                                                                                                    </li>
                                                                                                    <li class="list-group-item">
                                                                                                        <a href="{{ route('pillar-project.show',   $pro->project_id)}}" class="btn btn-outline-success d-flex justify-content-between" data-toggle="tooltip" data-bs-placement="top" title="view project full details">
                                                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                                                                                                <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                                                                                                                <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                                                                                                            </svg>
                                                                                                            <p class="m-auto">Project Details</p>
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
                                                                        @php $ds++; @endphp
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
                                                                @endif
                                                            </div>
                                                        </div>
                                                        <!-- end of SECOND column -->
                                                    </div>

                                                </div>
                                            </div>

                                            <div class="tab-pane fade" id="pillars-pills-ri-imprests-content" role="tabpanel" aria-labelledby="vdsreqs-pills-settings-tab">
                                                {{-- data science imprests --}}
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        @php
                                                        $dsimprest=$imprests->where('pillar_id',5);

                                                        @endphp
                                                        @if(count($dsimprest)==0)
                                                        <div class="d-flex p-2 justify-content-center">No Record Found!</div>
                                                        @else
                                                        <table class="table table-bordered table-hover">
                                                            <p>All created <strong>imprest</strong> in Data science Pillar</p>
                                                            <thead>
                                                                <tr>
                                                                    <th scope="col">#</th>
                                                                    <th scope="col">Requested by</th>
                                                                    <th scope="col-md-4">Title</th>
                                                                    <th scope="col">Current Stage</th>
                                                                    <th scope="col">Status</th>
                                                                    <th scope="col">Total Cost</th>
                                                                    <th scope="col">Date created</th>

                                                                    <th scope="col"></th>

                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @php $n=1;@endphp

                                                                @foreach($dsimprest as $imp)
                                                                <tr>
                                                                    <th scope="row">{{$n}}.</th>
                                                                    <td>{{$imp->requestedby->fname}}</td>
                                                                    <td>{{$imp->imp_title}}</td>
                                                                    <td> on review finance</td>
                                                                    <td></td>
                                                                    <td>{{$imp->amount_rqst}}</td>
                                                                    <td>{{$imp->created_at->format('Y-m-d') }}</span>
                                                                    </td>

                                                                    <td class=" p-2">
                                                                        <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#rq{{$imp->id}}"> Actions
                                                                        </button>
                                                                        <!-- Modal -->
                                                                        <div class="modal fade" id="rq{{$imp->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
                                                                                                <a href="{{ route('imprest.show',   $imp->id)}}" class="btn btn-outline-success d-flex justify-content-between" data-toggle="tooltip" data-bs-placement="top" title="view project full details">
                                                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                                                                                        <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                                                                                                        <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                                                                                                    </svg>
                                                                                                    <p class="m-auto">Imprest Details & retirements</p>
                                                                                                </a>

                                                                                            </li>
                                                                                            <li class="list-group-item">
                                                                                                <a href="" class="btn btn-outline-info btn-md d-flex justify-content-between" data-toggle="tooltip" data-bs-placement="top" title="view update project details">
                                                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-arrow-up-circle" viewBox="0 0 16 16">
                                                                                                        <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-7.5 3.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V11.5z" />
                                                                                                    </svg>
                                                                                                    <p class="m-auto">Review Imprest </p>
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
                                                                @php $n++;@endphp
                                                                @endforeach


                                                            </tbody>

                                                        </table>

                                                        <br />
                                                        <br />
                                                        <nav aria-label="Page navigation example">
                                                            <ul class="pagination">
                                                                <li class="page-item">
                                                                    <a class="page-link" href="#" aria-label="Previous">
                                                                        <span aria-hidden="true">&laquo;</span>
                                                                        <span class="sr-only">Previous</span>
                                                                    </a>
                                                                </li>
                                                                <li class="page-item"><a class="page-link" href="#">1</a>
                                                                </li>
                                                                <li class="page-item"><a class="page-link" href="#">2</a>
                                                                </li>
                                                                <li class="page-item"><a class="page-link" href="#">3</a>
                                                                </li>
                                                                <li class="page-item">
                                                                    <a class="page-link" href="#" aria-label="Next">
                                                                        <span aria-hidden="true">&raquo;</span>
                                                                        <span class="sr-only">Next</span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </nav>
                                                        @endif
                                                        <!-- end of SECOND column -->
                                                    </div>

                                                </div>

                                            </div>

                                            <div class="tab-pane fade" id="pillars-pills-ri-activities-content" role="tabpanel" aria-labelledby="pillars-pills-ds-activities-tab">
                                                {{-- data science activities --}}
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="card">
                                                            <div class="card-content table-responsive">
                                                                <br />

                                                                @php
                                                                $myact=$activities->where('pillar_ref_id',5);
                                                                $act=1;
                                                                @endphp
                                                                @if(count($myact)==0)
                                                                <div class="d-flex p-2 justify-content-center">No Record Found!</div>
                                                                @else
                                                                <table class="table table-bordered table-hover">
                                                                    <p class="d-flex justify-content-between"><strong>All activities from Data science</strong>

                                                                    </p>
                                                                    <thead>
                                                                        <tr>
                                                                            <th scope="col">#</th>
                                                                            <th scope="col">Activity title</th>
                                                                            <th scope="col-md-4">Total Estimated cost</th>
                                                                            <th scope="col">current stage</th>
                                                                            <th scope="col">Date created</th>
                                                                            <th scope="col"></th>

                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        @foreach($myact as $myactiv)
                                                                        <tr>
                                                                            <th scope="row">{{ $act }}</th>
                                                                            <td class="w-30 p-2">{{ $myactiv->act_title }}</td>
                                                                            <td class="w-30 p-2">{{ $myactiv->total_act_cost }}</td>
                                                                            <td class="w-30  p-2">{{ $myactiv->current_stage }}</td>
                                                                            <td class="w-10 p-2">{{ $myactiv->created_at }}</td>
                                                                            <td class="w-30 p-2">
                                                                                <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#act{{$myactiv->pillar_act_id}}"> Actions
                                                                                </button>
                                                                                <!-- Modal -->
                                                                                <div class="modal fade" id="act{{$myactiv->pillar_act_id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" data-proj="{{ $myactiv->pillar_act_id }}" data-user="{{ Auth::user()->user_id }}">
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
                                                                                                        <a href="{{ route('pillar-activity.show',   $myactiv->pillar_act_id)}}" class="btn btn-outline-success d-flex justify-content-between" data-toggle="tooltip" data-bs-placement="top" title="view project full details">
                                                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                                                                                                <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                                                                                                                <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                                                                                                            </svg>
                                                                                                            <p class="m-auto">Activity Details</p>
                                                                                                        </a>

                                                                                                    </li>
                                                                                                    <li class="list-group-item">
                                                                                                        <a href="" class="btn btn-outline-info btn-md d-flex justify-content-between" data-toggle="tooltip" data-bs-placement="top" title="view update project details">
                                                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-arrow-up-circle" viewBox="0 0 16 16">
                                                                                                                <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-7.5 3.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V11.5z" />
                                                                                                            </svg>
                                                                                                            <p class="m-auto">Review Activity </p>
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
                                                                        @php $act++ @endphp
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
                                                                @endif
                                                            </div>
                                                        </div>
                                                        <!-- end of SECOND column -->
                                                    </div>

                                                </div>


                                            </div>

                                            <div class="tab-pane fade" id="pillars-pills-ri-sub-activities-content" role="tabpanel" aria-labelledby="pillars-pills-ds-sub-activities-tab">
                                                <div class="row"> {{-- data science sub activities --}}
                                                    <div class="col-lg-12">
                                                        <div class="card">
                                                            <div class="card-content table-responsive">
                                                                <br />
                                                                @php
                                                                $mysubactivities=$subactivities->where('pillar_ref_id',5);

                                                                @endphp
                                                                @if(count($mysubactivities)==0)
                                                                <div class="d-flex p-2 justify-content-center">No Record Found!</div>
                                                                @else
                                                                <table class="table table-bordered table-hover">
                                                                    <p class="d-flex justify-content-between"><strong>All SubActivitiesfrom Data science</strong>

                                                                    </p>
                                                                    <thead>
                                                                        <tr>
                                                                            <th scope="col">#</th>
                                                                            <th scope="col">SubActivity title</th>
                                                                            <th scope="col-md-4">Total Estimated cost</th>
                                                                            <th scope="col">current stage</th>
                                                                            <th scope="col">status</th>
                                                                            <th scope="col">Date created</th>
                                                                            <th scope="col"></th>

                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        @php $i=0;@endphp @foreach($mysubactivities as $myact)
                                                                        @php $i++;@endphp <tr>
                                                                            <th scope="row">{{ $i}}</th>
                                                                            <td class="w-30 p-2">{{ $myact->subact_title }}</td>
                                                                            <td class="w-30 p-2">{{ $myact->total_subactivity_cost }}</td>
                                                                            <td class="w-30  p-2">{{ $myact->current_stage }}</td>
                                                                            <td class="w-30  p-2">{{ $myact->review_status }}</td>
                                                                            <td class="w-10 p-2">{{ $myact->created_at }}</td>
                                                                            <td class="w-30 p-2">
                                                                                <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#subact{{$myact->id}}"> Actions
                                                                                </button>
                                                                                <!-- Modal -->
                                                                                <div class="modal fade" id="subact{{$myact->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
                                                                                                        <a href="{{ route('pillar-subactivity.show',$myact->id)}}" class="btn btn-outline-success d-flex justify-content-between" data-toggle="tooltip" data-bs-placement="top" title="view project full details">
                                                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                                                                                                <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                                                                                                                <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                                                                                                            </svg>
                                                                                                            <p class="m-auto">SubActivity Details</p>
                                                                                                        </a>

                                                                                                    </li>
                                                                                                    <li class="list-group-item">
                                                                                                        <a href="" class="btn btn-outline-info btn-md d-flex justify-content-between" data-toggle="tooltip" data-bs-placement="top" title="view update project details">
                                                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-arrow-up-circle" viewBox="0 0 16 16">
                                                                                                                <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-7.5 3.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V11.5z" />
                                                                                                            </svg>
                                                                                                            <p class="m-auto">Review SubActivity </p>
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
                                                                @endif
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
                            <div class="tab-pane fade" id="finance-pillars-nav-is-content" role="tabpanel" aria-labelledby="finance-pillars-nav-is-nav">
                                <br />

                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="nav flex-column nav-pills" id="vds-finance-pillars-pills-tab" role="tablist" aria-orientation="vertical">
                                            <a class="nav-link active" id="pillars-pills-is-requests-tab" data-toggle="pill" href="#pillars-pills-is-requests-content" role="tab" aria-controls="" aria-selected="true">Requests</a>

                                            <a class="nav-link" id="pillars-pills-is-projects-tab" data-toggle="pill" href="#pillars-pills-is-projects-content" role="tab" aria-controls="pillars-pills-is-content-tab" aria-selected="false">Projects</a>

                                            <a class="nav-link" id="pillars-pills-is-imprests-tab" data-toggle="pill" href="#pillars-pills-is-imprests-content" role="tab" aria-controls="pillars-pills-funds-tab" aria-selected="false">Imprests</a>


                                            <a class="nav-link" id="pillars-pills-is-activities-tab" data-toggle="pill" href="#pillars-pills-is-activities-content" role="tab" aria-controls="pillars-pills-funds-tab" aria-selected="false">Activities</a>

                                            <a class="nav-link" id="pillars-pills-is-sub-activities-tab" data-toggle="pill" href="#pillars-pills-is-sub-activities-content" role="tab" aria-controls="pillars-pills-funds-tab" aria-selected="false">Sub Activities</a>




                                        </div>
                                    </div>
                                    <div class="col-md-10">

                                        <div class="tab-content" id="is-finance-pillars-pills-tabContent">

                                            <div class="tab-pane fade show active" id="pillars-pills-is-requests-content" role="tabpanel" aria-labelledby="pills-finance-pillars-tab">
                                                {{-- my retirements --}}

                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="card">
                                                            <div class="card-content table-responsive">
                                                                <br />
                                                                <table class="table table-bordered table-hover">
                                                                    <p><strong>Data Science requests.</strong></p>
                                                                    <thead>
                                                                        <tr>
                                                                            <th scope="col">#</th>
                                                                            <th scope="col">Requested by</th>
                                                                            <th scope="col">Title</th>
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
                                            <div class="tab-pane fade" id="pillars-pills-is-projects-content" role="tabpanel" aria-labelledby="vdsreqs-pills-profile-tab">
                                                {{-- my retirements --}}
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="card">
                                                            <div class="card-content table-responsive">
                                                                <br />
                                                                @php
                                                                $dsproject=$projects->where('pillar_ref_id',5);
                                                                $ds=1;
                                                                @endphp
                                                                @if(count($dsproject)==0)
                                                                <div class="d-flex p-2 bg-info justify-content-center">No Projects Found!</div>
                                                                @else

                                                                <table class="table table-bordered table-hover">
                                                                    <p><strong>Data Science Projects</strong></p>
                                                                    <thead>

                                                                        <tr>
                                                                            <th scope="col">#</th>
                                                                            <th scope="col">Created by</th>
                                                                            <th scope="col-md-4">Title</th>

                                                                            <th scope="col">Total Cost</th>
                                                                            <th scope="col">current stage</th>
                                                                            <th scope="col">status</th>
                                                                            <th scope="col">Date created</th>
                                                                            <th scope="col"></th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        @foreach($dsproject as $pro)

                                                                        <tr>
                                                                            <th scope="row">{{$ds}}</th>
                                                                            <td>{{$pro->user->fname}} {{$pro->user->lname }}</td>
                                                                            <td>{{$pro->project_title }}</td>
                                                                            <td>{{$pro->total_project_cost}}
                                                                                <span class="badge badge-success">TZS</span>
                                                                            </td>
                                                                            <td class=" ">{{ $pro->current_stage }}</td>
                                                                            <td class="">{{ $pro->review_status }}</td>
                                                                            <td>{{$pro->created_at}}
                                                                            </td>
                                                                            <td class="w-30 p-2">
                                                                                <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#pr{{$pro->project_id }}"> Actions
                                                                                </button>
                                                                                <!-- Modal -->
                                                                                <div class="modal fade" id="pr{{$pro->project_id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" data-proj="{{ $pro->project_id }}" data-user="{{ Auth::user()->user_id }}">
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
                                                                                                        <a href="" class="btn  btn-outline-secondary d-flex justify-content-between">
                                                                                                            <i class="fas fa-chalkboard fa-lg mt-auto mb-auto"></i>
                                                                                                            <p class="m-auto">Review project</p>
                                                                                                        </a>

                                                                                                    </li>
                                                                                                    <li class="list-group-item">
                                                                                                        <a href="{{ route('pillar-project.show',   $pro->project_id)}}" class="btn btn-outline-success d-flex justify-content-between" data-toggle="tooltip" data-bs-placement="top" title="view project full details">
                                                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                                                                                                <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                                                                                                                <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                                                                                                            </svg>
                                                                                                            <p class="m-auto">Project Details</p>
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
                                                                        @php $ds++; @endphp
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
                                                                @endif
                                                            </div>
                                                        </div>
                                                        <!-- end of SECOND column -->
                                                    </div>

                                                </div>
                                            </div>

                                            <div class="tab-pane fade" id="pillars-pills-is-imprests-content" role="tabpanel" aria-labelledby="vdsreqs-pills-settings-tab">
                                                {{-- data science imprests --}}
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        @php
                                                        $dsimprest=$imprests->where('pillar_id',5);

                                                        @endphp
                                                        @if(count($dsimprest)==0)
                                                        <div class="d-flex p-2 justify-content-center">No Record Found!</div>
                                                        @else
                                                        <table class="table table-bordered table-hover">
                                                            <p>All created <strong>imprest</strong> in Data science Pillar</p>
                                                            <thead>
                                                                <tr>
                                                                    <th scope="col">#</th>
                                                                    <th scope="col">Requested by</th>
                                                                    <th scope="col-md-4">Title</th>
                                                                    <th scope="col">Current Stage</th>
                                                                    <th scope="col">Status</th>
                                                                    <th scope="col">Total Cost</th>
                                                                    <th scope="col">Date created</th>

                                                                    <th scope="col"></th>

                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @php $n=1;@endphp

                                                                @foreach($dsimprest as $imp)
                                                                <tr>
                                                                    <th scope="row">{{$n}}.</th>
                                                                    <td>{{$imp->requestedby->fname}}</td>
                                                                    <td>{{$imp->imp_title}}</td>
                                                                    <td> on review finance</td>
                                                                    <td></td>
                                                                    <td>{{$imp->amount_rqst}}</td>
                                                                    <td>{{$imp->created_at->format('Y-m-d') }}</span>
                                                                    </td>

                                                                    <td class=" p-2">
                                                                        <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#rq{{$imp->id}}"> Actions
                                                                        </button>
                                                                        <!-- Modal -->
                                                                        <div class="modal fade" id="rq{{$imp->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
                                                                                                <a href="{{ route('imprest.show',   $imp->id)}}" class="btn btn-outline-success d-flex justify-content-between" data-toggle="tooltip" data-bs-placement="top" title="view project full details">
                                                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                                                                                        <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                                                                                                        <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                                                                                                    </svg>
                                                                                                    <p class="m-auto">Imprest Details & retirements</p>
                                                                                                </a>

                                                                                            </li>
                                                                                            <li class="list-group-item">
                                                                                                <a href="" class="btn btn-outline-info btn-md d-flex justify-content-between" data-toggle="tooltip" data-bs-placement="top" title="view update project details">
                                                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-arrow-up-circle" viewBox="0 0 16 16">
                                                                                                        <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-7.5 3.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V11.5z" />
                                                                                                    </svg>
                                                                                                    <p class="m-auto">Review Imprest </p>
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
                                                                @php $n++;@endphp
                                                                @endforeach


                                                            </tbody>

                                                        </table>

                                                        <br />
                                                        <br />
                                                        <nav aria-label="Page navigation example">
                                                            <ul class="pagination">
                                                                <li class="page-item">
                                                                    <a class="page-link" href="#" aria-label="Previous">
                                                                        <span aria-hidden="true">&laquo;</span>
                                                                        <span class="sr-only">Previous</span>
                                                                    </a>
                                                                </li>
                                                                <li class="page-item"><a class="page-link" href="#">1</a>
                                                                </li>
                                                                <li class="page-item"><a class="page-link" href="#">2</a>
                                                                </li>
                                                                <li class="page-item"><a class="page-link" href="#">3</a>
                                                                </li>
                                                                <li class="page-item">
                                                                    <a class="page-link" href="#" aria-label="Next">
                                                                        <span aria-hidden="true">&raquo;</span>
                                                                        <span class="sr-only">Next</span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </nav>
                                                        @endif
                                                        <!-- end of SECOND column -->
                                                    </div>

                                                </div>

                                            </div>

                                            <div class="tab-pane fade" id="pillars-pills-is-activities-content" role="tabpanel" aria-labelledby="pillars-pills-ds-activities-tab">
                                                {{-- data science activities --}}
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="card">
                                                            <div class="card-content table-responsive">
                                                                <br />

                                                                @php
                                                                $myact=$activities->where('pillar_ref_id',5);
                                                                $act=1;
                                                                @endphp
                                                                @if(count($myact)==0)
                                                                <div class="d-flex p-2 justify-content-center">No Record Found!</div>
                                                                @else
                                                                <table class="table table-bordered table-hover">
                                                                    <p class="d-flex justify-content-between"><strong>All activities from Data science</strong>

                                                                    </p>
                                                                    <thead>
                                                                        <tr>
                                                                            <th scope="col">#</th>
                                                                            <th scope="col">Activity title</th>
                                                                            <th scope="col-md-4">Total Estimated cost</th>
                                                                            <th scope="col">current stage</th>
                                                                            <th scope="col">Date created</th>
                                                                            <th scope="col"></th>

                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        @foreach($myact as $myactiv)
                                                                        <tr>
                                                                            <th scope="row">{{ $act }}</th>
                                                                            <td class="w-30 p-2">{{ $myactiv->act_title }}</td>
                                                                            <td class="w-30 p-2">{{ $myactiv->total_act_cost }}</td>
                                                                            <td class="w-30  p-2">{{ $myactiv->current_stage }}</td>
                                                                            <td class="w-10 p-2">{{ $myactiv->created_at }}</td>
                                                                            <td class="w-30 p-2">
                                                                                <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#act{{$myactiv->pillar_act_id}}"> Actions
                                                                                </button>
                                                                                <!-- Modal -->
                                                                                <div class="modal fade" id="act{{$myactiv->pillar_act_id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" data-proj="{{ $myactiv->pillar_act_id }}" data-user="{{ Auth::user()->user_id }}">
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
                                                                                                        <a href="{{ route('pillar-activity.show',   $myactiv->pillar_act_id)}}" class="btn btn-outline-success d-flex justify-content-between" data-toggle="tooltip" data-bs-placement="top" title="view project full details">
                                                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                                                                                                <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                                                                                                                <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                                                                                                            </svg>
                                                                                                            <p class="m-auto">Activity Details</p>
                                                                                                        </a>

                                                                                                    </li>
                                                                                                    <li class="list-group-item">
                                                                                                        <a href="" class="btn btn-outline-info btn-md d-flex justify-content-between" data-toggle="tooltip" data-bs-placement="top" title="view update project details">
                                                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-arrow-up-circle" viewBox="0 0 16 16">
                                                                                                                <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-7.5 3.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V11.5z" />
                                                                                                            </svg>
                                                                                                            <p class="m-auto">Review Activity </p>
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
                                                                        @php $act++ @endphp
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
                                                                @endif
                                                            </div>
                                                        </div>
                                                        <!-- end of SECOND column -->
                                                    </div>

                                                </div>


                                            </div>

                                            <div class="tab-pane fade" id="pillars-pills-is-sub-activities-content" role="tabpanel" aria-labelledby="pillars-pills-ds-sub-activities-tab">
                                                <div class="row"> {{-- data science sub activities --}}
                                                    <div class="col-lg-12">
                                                        <div class="card">
                                                            <div class="card-content table-responsive">
                                                                <br />
                                                                @php
                                                                $mysubactivities=$subactivities->where('pillar_ref_id',5);

                                                                @endphp
                                                                @if(count($mysubactivities)==0)
                                                                <div class="d-flex p-2 justify-content-center">No Record Found!</div>
                                                                @else
                                                                <table class="table table-bordered table-hover">
                                                                    <p class="d-flex justify-content-between"><strong>All SubActivitiesfrom Data science</strong>

                                                                    </p>
                                                                    <thead>
                                                                        <tr>
                                                                            <th scope="col">#</th>
                                                                            <th scope="col">SubActivity title</th>
                                                                            <th scope="col-md-4">Total Estimated cost</th>
                                                                            <th scope="col">current stage</th>
                                                                            <th scope="col">status</th>
                                                                            <th scope="col">Date created</th>
                                                                            <th scope="col"></th>

                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        @php $i=0;@endphp @foreach($mysubactivities as $myact)
                                                                        @php $i++;@endphp <tr>
                                                                            <th scope="row">{{ $i}}</th>
                                                                            <td class="w-30 p-2">{{ $myact->subact_title }}</td>
                                                                            <td class="w-30 p-2">{{ $myact->total_subactivity_cost }}</td>
                                                                            <td class="w-30  p-2">{{ $myact->current_stage }}</td>
                                                                            <td class="w-30  p-2">{{ $myact->review_status }}</td>
                                                                            <td class="w-10 p-2">{{ $myact->created_at }}</td>
                                                                            <td class="w-30 p-2">
                                                                                <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#subact{{$myact->id}}"> Actions
                                                                                </button>
                                                                                <!-- Modal -->
                                                                                <div class="modal fade" id="subact{{$myact->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
                                                                                                        <a href="{{ route('pillar-subactivity.show',$myact->id)}}" class="btn btn-outline-success d-flex justify-content-between" data-toggle="tooltip" data-bs-placement="top" title="view project full details">
                                                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                                                                                                <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                                                                                                                <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                                                                                                            </svg>
                                                                                                            <p class="m-auto">SubActivity Details</p>
                                                                                                        </a>

                                                                                                    </li>
                                                                                                    <li class="list-group-item">
                                                                                                        <a href="" class="btn btn-outline-info btn-md d-flex justify-content-between" data-toggle="tooltip" data-bs-placement="top" title="view update project details">
                                                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-arrow-up-circle" viewBox="0 0 16 16">
                                                                                                                <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-7.5 3.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V11.5z" />
                                                                                                            </svg>
                                                                                                            <p class="m-auto">Review SubActivity </p>
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
                                                                @endif
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

                            <div class="tab-pane fade" id="finance-pillars-nav-cc-content" role="tabpanel" aria-labelledby="finance-pillars-nav-cc-nav">
                                <br />
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="nav flex-column nav-pills" id="vds-finance-pillars-pills-tab" role="tablist" aria-orientation="vertical">
                                            <a class="nav-link active" id="pillars-pills-cc-requests-tab" data-toggle="pill" href="#pillars-pills-cc-requests-content" role="tab" aria-controls="" aria-selected="true">Requests</a>

                                            <a class="nav-link" id="pillars-pills-cc-projects-tab" data-toggle="pill" href="#pillars-pills-cc-projects-content" role="tab" aria-controls="pillars-pills-cc-content-tab" aria-selected="false">Projects</a>

                                            <a class="nav-link" id="pillars-pills-cc-imprests-tab" data-toggle="pill" href="#pillars-pills-cc-imprests-content" role="tab" aria-controls="pillars-pills-funds-tab" aria-selected="false">Imprests</a>


                                            <a class="nav-link" id="pillars-pills-cc-activities-tab" data-toggle="pill" href="#pillars-pills-cc-activities-content" role="tab" aria-controls="pillars-pills-funds-tab" aria-selected="false">Activities</a>

                                            <a class="nav-link" id="pillars-pills-cc-sub-activities-tab" data-toggle="pill" href="#pillars-pills-cc-sub-activities-content" role="tab" aria-controls="pillars-pills-funds-tab" aria-selected="false">Sub Activities</a>




                                        </div>
                                    </div>
                                    <div class="col-md-10">

                                        <div class="tab-content" id="cc-finance-pillars-pills-tabContent">

                                            <div class="tab-pane fade show active" id="pillars-pills-cc-requests-content" role="tabpanel" aria-labelledby="pills-finance-pillars-tab">
                                                {{-- my retirements --}}

                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="card">
                                                            <div class="card-content table-responsive">
                                                                <br />
                                                                <table class="table table-bordered table-hover">
                                                                    <p><strong>Data Science requests.</strong></p>
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
                                            <div class="tab-pane fade" id="pillars-pills-cc-projects-content" role="tabpanel" aria-labelledby="vdsreqs-pills-profile-tab">
                                                {{-- my retirements --}}
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="card">
                                                            <div class="card-content table-responsive">
                                                                <br />
                                                                @php
                                                                $dsproject=$projects->where('pillar_ref_id',5);
                                                                $ds=1;
                                                                @endphp
                                                                @if(count($dsproject)==0)
                                                                <div class="d-flex p-2 bg-info justify-content-center">No Projects Found!</div>
                                                                @else

                                                                <table class="table table-bordered table-hover">
                                                                    <p><strong>Data Science Projects</strong></p>
                                                                    <thead>

                                                                        <tr>
                                                                            <th scope="col">#</th>
                                                                            <th scope="col">Created by</th>
                                                                            <th scope="col-md-4">Title</th>

                                                                            <th scope="col">Total Cost</th>
                                                                            <th scope="col">current stage</th>
                                                                            <th scope="col">status</th>
                                                                            <th scope="col">Date created</th>
                                                                            <th scope="col"></th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        @foreach($dsproject as $pro)

                                                                        <tr>
                                                                            <th scope="row">{{$ds}}</th>
                                                                            <td>{{$pro->user->fname}} {{$pro->user->lname }}</td>
                                                                            <td>{{$pro->project_title }}</td>
                                                                            <td>{{$pro->total_project_cost}}
                                                                                <span class="badge badge-success">TZS</span>
                                                                            </td>
                                                                            <td class=" ">{{ $pro->current_stage }}</td>
                                                                            <td class="">{{ $pro->review_status }}</td>
                                                                            <td>{{$pro->created_at}}
                                                                            </td>
                                                                            <td class="w-30 p-2">
                                                                                <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#pr{{$pro->project_id }}"> Actions
                                                                                </button>
                                                                                <!-- Modal -->
                                                                                <div class="modal fade" id="pr{{$pro->project_id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" data-proj="{{ $pro->project_id }}" data-user="{{ Auth::user()->user_id }}">
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
                                                                                                        <a href="" class="btn  btn-outline-secondary d-flex justify-content-between">
                                                                                                            <i class="fas fa-chalkboard fa-lg mt-auto mb-auto"></i>
                                                                                                            <p class="m-auto">Review project</p>
                                                                                                        </a>

                                                                                                    </li>
                                                                                                    <li class="list-group-item">
                                                                                                        <a href="{{ route('pillar-project.show',   $pro->project_id)}}" class="btn btn-outline-success d-flex justify-content-between" data-toggle="tooltip" data-bs-placement="top" title="view project full details">
                                                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                                                                                                <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                                                                                                                <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                                                                                                            </svg>
                                                                                                            <p class="m-auto">Project Details</p>
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
                                                                        @php $ds++; @endphp
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
                                                                @endif
                                                            </div>
                                                        </div>
                                                        <!-- end of SECOND column -->
                                                    </div>

                                                </div>
                                            </div>

                                            <div class="tab-pane fade" id="pillars-pills-cc-imprests-content" role="tabpanel" aria-labelledby="vdsreqs-pills-settings-tab">
                                                {{-- data science imprests --}}
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        @php
                                                        $dsimprest=$imprests->where('pillar_id',5);

                                                        @endphp
                                                        @if(count($dsimprest)==0)
                                                        <div class="d-flex p-2 justify-content-center">No Record Found!</div>
                                                        @else
                                                        <table class="table table-bordered table-hover">
                                                            <p>All created <strong>imprest</strong> in Data science Pillar</p>
                                                            <thead>
                                                                <tr>
                                                                    <th scope="col">#</th>
                                                                    <th scope="col">Requested by</th>
                                                                    <th scope="col-md-4">Title</th>
                                                                    <th scope="col">Current Stage</th>
                                                                    <th scope="col">Status</th>
                                                                    <th scope="col">Total Cost</th>
                                                                    <th scope="col">Date created</th>

                                                                    <th scope="col"></th>

                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @php $n=1;@endphp

                                                                @foreach($dsimprest as $imp)
                                                                <tr>
                                                                    <th scope="row">{{$n}}.</th>
                                                                    <td>{{$imp->requestedby->fname}}</td>
                                                                    <td>{{$imp->imp_title}}</td>
                                                                    <td> on review finance</td>
                                                                    <td></td>
                                                                    <td>{{$imp->amount_rqst}}</td>
                                                                    <td>{{$imp->created_at->format('Y-m-d') }}</span>
                                                                    </td>

                                                                    <td class=" p-2">
                                                                        <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#rq{{$imp->id}}"> Actions
                                                                        </button>
                                                                        <!-- Modal -->
                                                                        <div class="modal fade" id="rq{{$imp->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
                                                                                                <a href="{{ route('imprest.show',   $imp->id)}}" class="btn btn-outline-success d-flex justify-content-between" data-toggle="tooltip" data-bs-placement="top" title="view project full details">
                                                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                                                                                        <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                                                                                                        <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                                                                                                    </svg>
                                                                                                    <p class="m-auto">Imprest Details & retirements</p>
                                                                                                </a>

                                                                                            </li>
                                                                                            <li class="list-group-item">
                                                                                                <a href="" class="btn btn-outline-info btn-md d-flex justify-content-between" data-toggle="tooltip" data-bs-placement="top" title="view update project details">
                                                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-arrow-up-circle" viewBox="0 0 16 16">
                                                                                                        <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-7.5 3.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V11.5z" />
                                                                                                    </svg>
                                                                                                    <p class="m-auto">Review Imprest </p>
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
                                                                @php $n++;@endphp
                                                                @endforeach


                                                            </tbody>

                                                        </table>

                                                        <br />
                                                        <br />
                                                        <nav aria-label="Page navigation example">
                                                            <ul class="pagination">
                                                                <li class="page-item">
                                                                    <a class="page-link" href="#" aria-label="Previous">
                                                                        <span aria-hidden="true">&laquo;</span>
                                                                        <span class="sr-only">Previous</span>
                                                                    </a>
                                                                </li>
                                                                <li class="page-item"><a class="page-link" href="#">1</a>
                                                                </li>
                                                                <li class="page-item"><a class="page-link" href="#">2</a>
                                                                </li>
                                                                <li class="page-item"><a class="page-link" href="#">3</a>
                                                                </li>
                                                                <li class="page-item">
                                                                    <a class="page-link" href="#" aria-label="Next">
                                                                        <span aria-hidden="true">&raquo;</span>
                                                                        <span class="sr-only">Next</span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </nav>
                                                        @endif
                                                        <!-- end of SECOND column -->
                                                    </div>

                                                </div>

                                            </div>

                                            <div class="tab-pane fade" id="pillars-pills-cc-activities-content" role="tabpanel" aria-labelledby="pillars-pills-ds-activities-tab">
                                                {{-- data science activities --}}
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="card">
                                                            <div class="card-content table-responsive">
                                                                <br />

                                                                @php
                                                                $myact=$activities->where('pillar_ref_id',5);
                                                                $act=1;
                                                                @endphp
                                                                @if(count($myact)==0)
                                                                <div class="d-flex p-2 justify-content-center">No Record Found!</div>
                                                                @else
                                                                <table class="table table-bordered table-hover">
                                                                    <p class="d-flex justify-content-between"><strong>All activities from Data science</strong>

                                                                    </p>
                                                                    <thead>
                                                                        <tr>
                                                                            <th scope="col">#</th>
                                                                            <th scope="col">Activity title</th>
                                                                            <th scope="col-md-4">Total Estimated cost</th>
                                                                            <th scope="col">current stage</th>
                                                                            <th scope="col">Date created</th>
                                                                            <th scope="col"></th>

                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        @foreach($myact as $myactiv)
                                                                        <tr>
                                                                            <th scope="row">{{ $act }}</th>
                                                                            <td class="w-30 p-2">{{ $myactiv->act_title }}</td>
                                                                            <td class="w-30 p-2">{{ $myactiv->total_act_cost }}</td>
                                                                            <td class="w-30  p-2">{{ $myactiv->current_stage }}</td>
                                                                            <td class="w-10 p-2">{{ $myactiv->created_at }}</td>
                                                                            <td class="w-30 p-2">
                                                                                <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#act{{$myactiv->pillar_act_id}}"> Actions
                                                                                </button>
                                                                                <!-- Modal -->
                                                                                <div class="modal fade" id="act{{$myactiv->pillar_act_id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" data-proj="{{ $myactiv->pillar_act_id }}" data-user="{{ Auth::user()->user_id }}">
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
                                                                                                        <a href="{{ route('pillar-activity.show',   $myactiv->pillar_act_id)}}" class="btn btn-outline-success d-flex justify-content-between" data-toggle="tooltip" data-bs-placement="top" title="view project full details">
                                                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                                                                                                <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                                                                                                                <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                                                                                                            </svg>
                                                                                                            <p class="m-auto">Activity Details</p>
                                                                                                        </a>

                                                                                                    </li>
                                                                                                    <li class="list-group-item">
                                                                                                        <a href="" class="btn btn-outline-info btn-md d-flex justify-content-between" data-toggle="tooltip" data-bs-placement="top" title="view update project details">
                                                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-arrow-up-circle" viewBox="0 0 16 16">
                                                                                                                <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-7.5 3.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V11.5z" />
                                                                                                            </svg>
                                                                                                            <p class="m-auto">Review Activity </p>
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
                                                                        @php $act++ @endphp
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
                                                                @endif
                                                            </div>
                                                        </div>
                                                        <!-- end of SECOND column -->
                                                    </div>

                                                </div>


                                            </div>

                                            <div class="tab-pane fade" id="pillars-pills-cc-sub-activities-content" role="tabpanel" aria-labelledby="pillars-pills-ds-sub-activities-tab">
                                                <div class="row"> {{-- data science sub activities --}}
                                                    <div class="col-lg-12">
                                                        <div class="card">
                                                            <div class="card-content table-responsive">
                                                                <br />
                                                                @php
                                                                $mysubactivities=$subactivities->where('pillar_ref_id',5);

                                                                @endphp
                                                                @if(count($mysubactivities)==0)
                                                                <div class="d-flex p-2 justify-content-center">No Record Found!</div>
                                                                @else
                                                                <table class="table table-bordered table-hover">
                                                                    <p class="d-flex justify-content-between"><strong>All SubActivitiesfrom Data science</strong>

                                                                    </p>
                                                                    <thead>
                                                                        <tr>
                                                                            <th scope="col">#</th>
                                                                            <th scope="col">SubActivity title</th>
                                                                            <th scope="col-md-4">Total Estimated cost</th>
                                                                            <th scope="col">current stage</th>
                                                                            <th scope="col">status</th>
                                                                            <th scope="col">Date created</th>
                                                                            <th scope="col"></th>

                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        @php $i=0;@endphp @foreach($mysubactivities as $myact)
                                                                        @php $i++;@endphp <tr>
                                                                            <th scope="row">{{ $i}}</th>
                                                                            <td class="w-30 p-2">{{ $myact->subact_title }}</td>
                                                                            <td class="w-30 p-2">{{ $myact->total_subactivity_cost }}</td>
                                                                            <td class="w-30  p-2">{{ $myact->current_stage }}</td>
                                                                            <td class="w-30  p-2">{{ $myact->review_status }}</td>
                                                                            <td class="w-10 p-2">{{ $myact->created_at }}</td>
                                                                            <td class="w-30 p-2">
                                                                                <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#subact{{$myact->id}}"> Actions
                                                                                </button>
                                                                                <!-- Modal -->
                                                                                <div class="modal fade" id="subact{{$myact->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
                                                                                                        <a href="{{ route('pillar-subactivity.show',$myact->id)}}" class="btn btn-outline-success d-flex justify-content-between" data-toggle="tooltip" data-bs-placement="top" title="view project full details">
                                                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                                                                                                <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                                                                                                                <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                                                                                                            </svg>
                                                                                                            <p class="m-auto">SubActivity Details</p>
                                                                                                        </a>

                                                                                                    </li>
                                                                                                    <li class="list-group-item">
                                                                                                        <a href="" class="btn btn-outline-info btn-md d-flex justify-content-between" data-toggle="tooltip" data-bs-placement="top" title="view update project details">
                                                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-arrow-up-circle" viewBox="0 0 16 16">
                                                                                                                <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-7.5 3.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V11.5z" />
                                                                                                            </svg>
                                                                                                            <p class="m-auto">Review SubActivity </p>
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
                                                                @endif
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
                <div class="tab-pane fade" id="finance-pills-funds-content" role="tabpanel" aria-labelledby="vdsreqs-pills-profile-tab">
                    {{-- my retirements --}}
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-content table-responsive">
                                    <br />
                                    <table class="table table-bordered table-hover">
                                        <p><strong>Applicants Shortlisted</strong></p>
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

                <div class="tab-pane fade" id="finance-pills-financial-reports-content" role="tabpanel" aria-labelledby="vdsreqs-pills-settings-tab">
                    {{-- my retirements --}}
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-content table-responsive">
                                    <br />
                                    <table class="table table-bordered table-hover">
                                        <p>
                                            <strong>Financial reports.</strong>
                                        </p>

                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#newDSimprest">
                                            create new report
                                        </button>
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
            <!-- end of line manager panel -->


            <!--
              ========================================
              =                                      =
              =       start of line manager side     =
              ======================================== -->
            <div class="tab-pane fade" id="line-manager-finance-content" role="tabpanel" aria-labelledby="line-manager-finance-content-tab-md">

                <br />
                <div class="row">
                    <div class="col-md-2">
                        <div class="nav flex-column nav-pills" id="vds-finance-tab" role="tablist" aria-orientation="vertical">
                            <a class="nav-link active" id="finance-pill-departments-tab" data-toggle="pill" href="#finance-pill-departments-content" role="tab" aria-controls="" aria-selected="true">Department Finances</a>

                            <a class="nav-link" id="finance-pill-funds-tab" data-toggle="pill" href="#finance-pill-funds-content" role="tab" aria-controls="finance-pill-funds-tab" aria-selected="false">Funds</a>

                            <a class="nav-link" id="finance-pill-bank-accounts-tab" data-toggle="pill" href="#finance-pill-bank-accounts-content" role="tab" aria-controls="finance-pill-bank-accounts-tab" aria-selected="false">Bank Accounts</a>


                            <a class="nav-link" id="finance-pill-assets-tab" data-toggle="pill" href="#finance-pill-assets-content" role="tab" aria-controls="finance-pill-assets-tab" aria-selected="false">Assets</a>

                            <a class="nav-link" id="finance-pill-capture-income-tab" data-toggle="pill" href="#finance-pill-capture-income-content" role="tab" aria-controls="finance-pill-capture-income-tab" aria-selected="false">capture income</a>

                            <a class="nav-link" id="finance-pill-contracts-tab" data-toggle="pill" href="#finance-pill-contracts-content" role="tab" aria-controls="finance-pill-contracts-tab" aria-selected="false">contracts / direct
                                pay</a>


                            <a class="nav-link" id="finance-pill-gl-tab" data-toggle="pill" href="#finance-pill-gl-content" role="tab" aria-controls="pillars-pills-ds-grantees-tab" aria-selected="false">General ledger / JV</a>

                            <a class="nav-link" id="finance-pill-pv-tab" data-toggle="pill" href="#finance-pill-pv-content" role="tab" aria-controls="finance-pill-pv-tab" aria-selected="false">Payment voucher</a>


                            <a class="nav-link" id="finance-pill-petty-cash-tab" data-toggle="pill" href="#finance-pill-petty-cash-content" role="tab" aria-controls="finance-pill-petty-cash-tab" aria-selected="false">Petty Cash</a>

                            <a class="nav-link" id="finance-pill-payroll-tab" data-toggle="pill" href="#finance-pill-payroll-content" role="tab" aria-controls="finance-pill-payroll-tab" aria-selected="false">Payroll</a>

                            <a class="nav-link" id="finance-pill-wht-payments-tab" data-toggle="pill" href="#finance-pill-wht-payments-content" role="tab" aria-controls="finance-pill-wht-payments-tab" aria-selected="false">WHT payments</a>

                            <a class="nav-link" id="finance-pill-contracts-tab" data-toggle="pill" href="#finance-pill-contracts-content" role="tab" aria-controls="finance-pill-contracts-tab" aria-selected="false">Contracts</a>

                            <a class="nav-link" id="finance-pill-other-tab" data-toggle="pill" href="#finance-pill-other-content" role="tab" aria-controls="finance-pill-other-tab" aria-selected="false">Others</a>

                        </div>
                    </div>
                    <div class="col-md-10">

                        <div class="tab-content" id="vds-finance-pillars-pills-tabContent">
                            <div class="tab-pane fade show active" id="finance-pill-departments-content" role="tabpanel" aria-labelledby="pills-finance-pillars-tab">
                                {{-- my retirements --}}

                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="card">
                                            <div class="card-content table-responsive">
                                                <br />
                                                <table class="table table-bordered table-hover">
                                                    <p><strong>Data Science requests.</strong></p>
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
                            <div class="tab-pane fade" id="finance-pill-funds-content" role="tabpanel" aria-labelledby="vdsreqs-pills-profile-tab">
                                {{-- my retirements --}}
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="card">
                                            <div class="card-content table-responsive">
                                                <br />
                                                <table class="table table-bordered table-hover">
                                                    <p><strong>Data Science Projects</strong></p>
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
                            <div class="tab-pane fade" id="finance-pill-bank-accounts-content" role="tabpanel" aria-labelledby="vdsreqs-pills-profile-tab">
                                {{-- my retirements --}}
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="card">
                                            <div class="card-content table-responsive">
                                                <br />
                                                <table class="table table-bordered table-hover">
                                                    <p><strong>Data Science Projects</strong></p>
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
                            <div class="tab-pane fade" id="finance-pill-assets-content" role="tabpanel" aria-labelledby="vdsreqs-pills-profile-tab">
                                {{-- my retirements --}}
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="card">
                                            <div class="card-content table-responsive">
                                                <br />
                                                <table class="table table-bordered table-hover">
                                                    <p><strong>Data Science Projects</strong></p>
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
                            <div class="tab-pane fade" id="finance-pill-capture-income-content" role="tabpanel" aria-labelledby="vdsreqs-pills-profile-tab">
                                {{-- my retirements --}}
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="card">
                                            <div class="card-content table-responsive">
                                                <br />
                                                <table class="table table-bordered table-hover">
                                                    <p><strong>Data Science Projects</strong></p>
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
                            <div class="tab-pane fade" id="finance-pill-contracts-content" role="tabpanel" aria-labelledby="vdsreqs-pills-profile-tab">
                                {{-- my retirements --}}
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="card">
                                            <div class="card-content table-responsive">
                                                <br />
                                                <table class="table table-bordered table-hover">
                                                    <p><strong>Data Science Projects</strong></p>
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

                            <div class="tab-pane fade" id="finance-pill-gl-content" role="tabpanel" aria-labelledby="vdsreqs-pills-settings-tab">
                                {{-- data science imprests --}}
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="card">
                                            <div class="card-content table-responsive">
                                                <br />
                                                <table class="table table-bordered table-hover">
                                                    <p>
                                                        <strong>Data Science Imprests.</strong>
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

                            <div class="tab-pane fade" id="finance-pill-pv-content" role="tabpanel" aria-labelledby="pillars-pills-ds-activities-tab">
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

                            <div class="tab-pane fade" id="finance-pill-petty-cash-content" role="tabpanel" aria-labelledby="pillars-pills-ds-sub-activities-tab">

                                {{-- data science sub activities --}}
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="card">
                                            <div class="card-content table-responsive">
                                                <br />
                                                <table class="table table-bordered table-hover">
                                                    <p>
                                                        <strong>Data Science Sub Activities.</strong>
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

                            <div class="tab-pane fade" id="finance-pill-payroll-content" role="tabpanel" aria-labelledby="pillars-pills-ds-activities-tab">
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

                            <div class="tab-pane fade" id="finance-pill-wht-payments-content" role="tabpanel" aria-labelledby="pillars-pills-ds-scholars-tab">

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
                            <div class="tab-pane fade" id="finance-pill-contracts-content" role="tabpanel" aria-labelledby="pillars-pills-ds-grantees-tab">

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
                            <div class="tab-pane fade" id="finance-pill-other-content" role="tabpanel" aria-labelledby="pillars-pills-ds-retirements-tab">

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

                        </div>
                    </div>
                </div>
                <br />
            </div>

            <!-- end of line manager panel -->

            <!--
              ========================================
              =                                      =
              =       start of line manager side     =
              ======================================== -->
            <div class="tab-pane fade" id="line-manager-human-resource-content" role="tabpanel" aria-labelledby="line-manager-human-resource-tab-md">
                <p>Human Resources</p>
                <br />
                <div class="row">
                    <div class="col-md-2">
                        <div class="nav flex-column nav-pills" id="vds-hr-tab" role="tablist" aria-orientation="vertical">
                            <a class="nav-link active" id="hr-pills-departments-tab" data-toggle="pill" href="#hr-pills-departments-content" role="tab" aria-controls="hr-pills-departments-tab" aria-selected="true">Departments</a>

                            <a class="nav-link" id="hr-pills-staff-employee-tab" data-toggle="pill" href="#hr-pills-staff-employee-content" role="tab" aria-controls="hr-pills-staff-employee-tab" aria-selected="false">Staff / Employees</a>


                            <a class="nav-link" id="hr-pills-benefits-tab" data-toggle="pill" href="#hr-pills-benefits-content" role="tab" aria-controls="hr-pills-benefits-tab" aria-selected="false">Benefits</a>


                            <a class="nav-link" id="hr-pills-cost-sharing-tab" data-toggle="pill" href="#hr-pills-cost-sharing-content" role="tab" aria-controls="hr-pills-cost-sharing-tab" aria-selected="false">Cost Sharing</a>

                            <a class="nav-link" id="hr-pills-deductions-tab" data-toggle="pill" href="#hr-pills-deductions-content" role="tab" aria-controls="hr-pills-deductions-tab" aria-selected="false">Deductions</a>

                            <a class="nav-link" id="hr-pills-dlr-tab" data-toggle="pill" href="#hr-pills-dlr-content" role="tab" aria-controls="hr-pills-dlr-tab" aria-selected="false">Direct Loans
                                receipts</a>


                            <a class="nav-link" id="hr-pills-leave-allowance-tab" data-toggle="pill" href="#hr-pills-leave-allowance-content" role="tab" aria-controls="hr-pills-leave-allowance-tab" aria-selected="false">Leave allowance</a>

                            <a class="nav-link" id="hr-pills-leaves-tab" data-toggle="pill" href="#hr-pills-leaves-content" role="tab" aria-controls="hr-pills-leaves-tab" aria-selected="false">Leaves</a>


                            <a class="nav-link" id="hr-pills-loans-tab" data-toggle="pill" href="#hr-pills-loans-content" role="tab" aria-controls="hr-pills-loans-tab" aria-selected="false">Loans</a>

                            <a class="nav-link" id="hr-pills-payroll-tab" data-toggle="pill" href="#hr-pills-payroll-content" role="tab" aria-controls="hr-pills-payroll-tab" aria-selected="false">Payroll</a>

                            <a class="nav-link" id="hr-pills-salary-tab" data-toggle="pill" href="#hr-pills-salary-content" role="tab" aria-controls="hr-pills-salary-tab" aria-selected="false">Salary and Salary Areas</a>

                            <a class="nav-link" id="hr-pills-salary-slips-tab" data-toggle="pill" href="#hr-pills-salary-slips-content" role="tab" aria-controls="hr-pills-salary-slips-tab" aria-selected="false">Salary Slips</a>

                            <a class="nav-link" id="hr-pills-staff-appraisal-tab" data-toggle="pill" href="#hr-pills-staff-appraisal-content" role="tab" aria-controls="hr-pills-staff-appraisal-tab" aria-selected="false">Staff Appraisals</a>




                        </div>
                    </div>
                    <div class="col-md-10">

                        <div class="tab-content" id="vds-finance-pillars-pills-tabContent">
                            <div class="tab-pane fade show active" id="hr-pills-departments-content" role="tabpanel" aria-labelledby="pills-finance-pillars-tab">
                                {{-- my retirements --}}

                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="card">
                                            <div class="card-content table-responsive">
                                                <br />
                                                <table class="table table-bordered table-hover">
                                                    <p><strong>Data Science requests.</strong></p>
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
                            <div class="tab-pane fade" id="hr-pills-staff-employee-content" role="tabpanel" aria-labelledby="vdsreqs-pills-profile-tab">
                                {{-- my retirements --}}
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="card">
                                            <div class="card-content table-responsive">
                                                <br />
                                                <table class="table table-bordered table-hover">
                                                    <p><strong>Data Science Projects</strong></p>
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

                            <div class="tab-pane fade" id="hr-pills-benefits-content" role="tabpanel" aria-labelledby="vdsreqs-pills-settings-tab">
                                {{-- data science imprests --}}
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="card">
                                            <div class="card-content table-responsive">
                                                <br />
                                                <table class="table table-bordered table-hover">
                                                    <p>
                                                        <strong>Data Science Imprests.</strong>
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

                            <div class="tab-pane fade" id="hr-pills-deductions-content" role="tabpanel" aria-labelledby="pillars-pills-ds-sub-activities-tab">

                                {{-- data science sub activities --}}
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="card">
                                            <div class="card-content table-responsive">
                                                <br />
                                                <table class="table table-bordered table-hover">
                                                    <p>
                                                        <strong>Data Science Sub Activities.</strong>
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
                </div>
                <br />
            </div>
            <!-- end of line manager panel -->


            <!--
              ========================================
              =                                      =
              =       start of line manager side     =
              ======================================== -->
            <div class="tab-pane fade" id="line-manager-mne-content" role="tabpanel" aria-labelledby="line-manager-mne-tab-md">
                <p>Monitoring and Eveluation</p>
                <br />
                <div class="row">
                    <div class="col-md-2">
                        <div class="nav flex-column nav-pills" id="vds-mne-tab" role="tablist" aria-orientation="vertical">
                            <a class="nav-link active" id="mne-pills-meetings-tab" data-toggle="pill" href="#mne-pills-meetings-content" role="tab" aria-controls="mne-pills-meetings-tab" aria-selected="true">Meetings</a>

                            <a class="nav-link" id="mne-pills-breakfast-debate-tab" data-toggle="pill" href="#mne-pills-breakfast-debate-content" role="tab" aria-controls="mne-pills-breakfast-debate-tab" aria-selected="false">Breakfast
                                Debate</a>


                            <a class="nav-link" id="mne-pills-direct-report-tab" data-toggle="pill" href="#mne-pills-direct-report-content" role="tab" aria-controls="mne-pills-direct-report-tab" aria-selected="false">Direct Report</a>


                            <a class="nav-link" id="mne-pills-pillar-assessments-tab" data-toggle="pill" href="#mne-pills-pillar-assessments-content" role="tab" aria-controls="mne-pills-pillar-assessments-tab" aria-selected="false">Pillar
                                Assessments</a>

                            <a class="nav-link" id="mne-pills-admin-assessments-tab" data-toggle="pill" href="#mne-pills-admin-assessments-content" role="tab" aria-controls="mne-pills-admin-assessments-tab" aria-selected="false">Administration
                                Assessments</a>

                            <a class="nav-link" id="mne-pills-budget-tab" data-toggle="pill" href="#mne-pills-budget-content" role="tab" aria-controls="mne-pills-budget-tab" aria-selected="false">Budget</a>


                            <a class="nav-link" id="mne-pills-dir-rep-tab" data-toggle="pill" href="#mne-pills-dir-rep-content" role="tab" aria-controls="mne-pills-dir-rep-tab" aria-selected="false">Direct Report</a>

                            <a class="nav-link" id="mne-pills-impact-distribution-tab" data-toggle="pill" href="#mne-pills-impact-distribution-content" role="tab" aria-controls="mne-pills-impact-distribution-tab" aria-selected="false">Impact
                                Distribution</a>


                            <a class="nav-link" id="mne-pills-mel-plans-tab" data-toggle="pill" href="#mne-pills-mel-plans-content" role="tab" aria-controls="mne-pills-mel-plans-tab" aria-selected="false">MEL Plans</a>

                            <a class="nav-link" id="mne-pills-prog-tracking-tab" data-toggle="pill" href="#mne-pills-prog-tracking-content" role="tab" aria-controls="mne-pills-prog-tracking-tab" aria-selected="false">Program tracking</a>

                            <a class="nav-link" id="mne-pills-qualitative-reports-tab" data-toggle="pill" href="#mne-pills-qualitative-reports-content" role="tab" aria-controls="mne-pills-qualitative-reports-tab" aria-selected="false">Qualitative
                                reports</a>

                        </div>
                    </div>
                    <div class="col-md-10">

                        <div class="tab-content" id="vds-finance-pillars-pills-tabContent">
                            <div class="tab-pane fade show active" id="mne-pills-meetings-content" role="tabpanel" aria-labelledby="pills-finance-pillars-tab">
                                {{-- my Meetings --}}



                                <div class="content container-fluid">

                                    <div class="page-header">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <h3 class="page-title">Meeting Goal Tracking</h3>
                                                <ul class="breadcrumb">
                                                    <li class="breadcrumb-item"><a href="admin-dashboard.html">Dashboard</a></li>
                                                    <li class="breadcrumb-item active">Meeting Goal Tracking</li>
                                                </ul>
                                            </div>
                                            <div class="col-auto float-end ms-auto">
                                                <a href="#" class="btn add-btn" data-toggle="modal" data-target="#add_goal"><i class="fa fa-plus"></i> Add New</a>
                                            </div>
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
                                                                        <th style="width: 11.8594px;" class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="#: activate to sort column descending">#</th>
                                                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Goal Type: activate to sort column ascending" style="width: 91.6094px;">Goal Type</th>
                                                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Subject: activate to sort column ascending" style="width: 57.4844px;">Subject</th>
                                                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Target Achievement: activate to sort column ascending" style="width: 151.781px;">Target Achievement</th>
                                                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Start Date: activate to sort column ascending" style="width: 77.625px;">Start Date</th>
                                                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="End Date: activate to sort column ascending" style="width: 72.8281px;">End Date</th>
                                                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Description : activate to sort column ascending" style="width: 119.75px;">Description </th>
                                                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Status : activate to sort column ascending" style="width: 93px;">Status </th>
                                                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Progress : activate to sort column ascending" style="width: 104.844px;">Progress </th>
                                                                        <th class="text-end sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending" style="width: 49.9062px;">Action</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>





                                                                    <tr class="odd">
                                                                        <td class="sorting_1">1</td>
                                                                        <td>Event Goal</td>
                                                                        <td>Test Goal</td>
                                                                        <td>Lorem ipsum dollar</td>
                                                                        <td>
                                                                            7 May 2019
                                                                        </td>
                                                                        <td>10 May 2019</td>
                                                                        <td>Lorem ipsum dollar</td>
                                                                        <td>
                                                                            <div class="dropdown action-label">
                                                                                <a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">
                                                                                    <i class="fa fa-dot-circle-o text-success"></i> Active
                                                                                </a>
                                                                                <div class="dropdown-menu">
                                                                                    <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-success"></i> Active</a>
                                                                                    <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> Inactive</a>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <p class="mb-1">Completed 73%</p>
                                                                            <div class="progress" style="height:5px">
                                                                                <div class="progress-bar bg-primary progress-sm" style="width: 73%;height:10px;"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td class="text-end">
                                                                            <div class="dropdown dropdown-action">
                                                                                <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_goal"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                                                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_goal"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr class="even">
                                                                        <td class="sorting_1">2</td>
                                                                        <td>Invoice Goal</td>
                                                                        <td>Test Goal</td>
                                                                        <td>Lorem ipsum dollar</td>
                                                                        <td>
                                                                            7 May 2019
                                                                        </td>
                                                                        <td>10 May 2019</td>
                                                                        <td>Lorem ipsum dollar</td>
                                                                        <td>
                                                                            <div class="dropdown action-label">
                                                                                <a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">
                                                                                    <i class="fa fa-dot-circle-o text-danger"></i> Inactive
                                                                                </a>
                                                                                <div class="dropdown-menu">
                                                                                    <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-success"></i> Active</a>
                                                                                    <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> Inactive</a>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <p class="mb-1">Completed 100%</p>
                                                                            <div class="progress" style="height:5px">
                                                                                <div class="progress-bar bg-primary progress-sm" style="width: 100%;height:10px;"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td class="text-end">
                                                                            <div class="dropdown dropdown-action">
                                                                                <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_goal"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                                                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_goal"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr class="odd">
                                                                        <td class="sorting_1">3</td>
                                                                        <td>Employee Goal</td>
                                                                        <td>Test Goal</td>
                                                                        <td>Lorem ipsum dollar</td>
                                                                        <td>
                                                                            7 May 2019
                                                                        </td>
                                                                        <td>10 May 2019</td>
                                                                        <td>Lorem ipsum dollar</td>
                                                                        <td>
                                                                            <div class="dropdown action-label">
                                                                                <a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">
                                                                                    <i class="fa fa-dot-circle-o text-success"></i> Active
                                                                                </a>
                                                                                <div class="dropdown-menu">
                                                                                    <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-success"></i> Active</a>
                                                                                    <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> Inactive</a>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <p class="mb-1">Completed 73%</p>
                                                                            <div class="progress" style="height:5px">
                                                                                <div class="progress-bar bg-primary progress-sm" style="width: 73%;height:10px;"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td class="text-end">
                                                                            <div class="dropdown dropdown-action">
                                                                                <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_goal"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                                                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_goal"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr class="even">
                                                                        <td class="sorting_1">4</td>
                                                                        <td>Invoice Goal</td>
                                                                        <td>Test Goal</td>
                                                                        <td>Lorem ipsum dollar</td>
                                                                        <td>
                                                                            7 May 2019
                                                                        </td>
                                                                        <td>10 May 2019</td>
                                                                        <td>Lorem ipsum dollar</td>
                                                                        <td>
                                                                            <div class="dropdown action-label">
                                                                                <a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">
                                                                                    <i class="fa fa-dot-circle-o text-success"></i> Active
                                                                                </a>
                                                                                <div class="dropdown-menu">
                                                                                    <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-success"></i> Active</a>
                                                                                    <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> Inactive</a>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <p class="mb-1">Completed 73%</p>
                                                                            <div class="progress" style="height:5px">
                                                                                <div class="progress-bar bg-primary progress-sm" style="width: 73%;height:10px;"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td class="text-end">
                                                                            <div class="dropdown dropdown-action">
                                                                                <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_goal"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                                                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_goal"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr class="odd">
                                                                        <td class="sorting_1">5</td>
                                                                        <td>Project Goal</td>
                                                                        <td>Test Goal</td>
                                                                        <td>Lorem ipsum dollar</td>
                                                                        <td>
                                                                            7 May 2019
                                                                        </td>
                                                                        <td>10 May 2019</td>
                                                                        <td>Lorem ipsum dollar</td>
                                                                        <td>
                                                                            <div class="dropdown action-label">
                                                                                <a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">
                                                                                    <i class="fa fa-dot-circle-o text-success"></i> Active
                                                                                </a>
                                                                                <div class="dropdown-menu">
                                                                                    <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-success"></i> Active</a>
                                                                                    <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> Inactive</a>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <p class="mb-1">Completed 73%</p>
                                                                            <div class="progress" style="height:5px">
                                                                                <div class="progress-bar bg-primary progress-sm" style="width: 73%;height:10px;"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td class="text-end">
                                                                            <div class="dropdown dropdown-action">
                                                                                <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_goal"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                                                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_goal"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
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
                                                            <div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">Showing 1 to 5 of 5 entries</div>
                                                        </div>
                                                        <div class="col-sm-12 col-md-7">
                                                            <div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate">
                                                                <ul class="pagination">
                                                                    <li class="paginate_button page-item previous disabled" id="DataTables_Table_0_previous"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li>
                                                                    <li class="paginate_button page-item active"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
                                                                    <li class="paginate_button page-item next disabled" id="DataTables_Table_0_next"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="2" tabindex="0" class="page-link">Next</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div id="add_goal" class="modal custom-modal fade" style="display: none;" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Add Meeting Goal Tracking</h5>
                                                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">×</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form>
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <div class="form-group">
                                                                <label class="col-form-label">Goal Type</label>
                                                                <select class="select select2-hidden-accessible" data-select2-id="select2-data-1-1q6g" tabindex="-1" aria-hidden="true">
                                                                    <option data-select2-id="select2-data-3-zlc9">Invoice Goal</option>
                                                                    <option>Event Goal</option>
                                                                </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="select2-data-2-3s6w" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-rwkh-container" aria-controls="select2-rwkh-container"><span class="select2-selection__rendered" id="select2-rwkh-container" role="textbox" aria-readonly="true" title="Invoice Goal">Invoice Goal</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label class="col-form-label">Subject</label>
                                                                <input class="form-control" type="text">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label class="col-form-label">Target Achievement</label>
                                                                <input class="form-control" type="text">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label>Start Date <span class="text-danger">*</span></label>
                                                                <div class="cal-icon"><input class="form-control datetimepicker" type="text"></div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label>End Date <span class="text-danger">*</span></label>
                                                                <div class="cal-icon"><input class="form-control datetimepicker" type="text"></div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12">
                                                            <div class="form-group">
                                                                <label>Description <span class="text-danger">*</span></label>
                                                                <textarea class="form-control" rows="4"></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12">
                                                            <div class="form-group">
                                                                <label class="col-form-label">Status</label>
                                                                <select class="select select2-hidden-accessible" data-select2-id="select2-data-4-ybc0" tabindex="-1" aria-hidden="true">
                                                                    <option data-select2-id="select2-data-6-p3rk">Active</option>
                                                                    <option>Inactive</option>
                                                                </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="select2-data-5-d2zs" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-2ltj-container" aria-controls="select2-2ltj-container"><span class="select2-selection__rendered" id="select2-2ltj-container" role="textbox" aria-readonly="true" title="Active">Active</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
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


                                <div id="edit_goal" class="modal custom-modal fade" role="dialog">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Edit Meeting Goal Tracking</h5>
                                                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">×</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form>
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <div class="form-group">
                                                                <label class="col-form-label">Goal Type</label>
                                                                <select class="select select2-hidden-accessible" data-select2-id="select2-data-7-hohe" tabindex="-1" aria-hidden="true">
                                                                    <option selected="" data-select2-id="select2-data-9-cen9">Invoice Goal</option>
                                                                    <option>Event Goal</option>
                                                                </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="select2-data-8-fk79" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-gqqm-container" aria-controls="select2-gqqm-container"><span class="select2-selection__rendered" id="select2-gqqm-container" role="textbox" aria-readonly="true" title="Invoice Goal">Invoice Goal</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label class="col-form-label">Subject</label>
                                                                <input class="form-control" type="text" value="Test Goal">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label class="col-form-label">Target Achievement</label>
                                                                <input class="form-control" type="text" value="Lorem ipsum dollar">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label>Start Date <span class="text-danger">*</span></label>
                                                                <div class="cal-icon"><input class="form-control datetimepicker" value="01-01-2019" type="text"></div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label>End Date <span class="text-danger">*</span></label>
                                                                <div class="cal-icon"><input class="form-control datetimepicker" value="01-01-2019" type="text"></div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12 mb-3">
                                                            <div class="form-group">
                                                                <label for="customRange">Progress</label>
                                                                <input type="range" class="form-control-range form-range" id="customRange">
                                                                <div class="mt-2" id="result">Progress Value: <b>50</b></div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12">
                                                            <div class="form-group">
                                                                <label>Description <span class="text-danger">*</span></label>
                                                                <textarea class="form-control" rows="4">Lorem ipsum dollar</textarea>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12">
                                                            <div class="form-group">
                                                                <label class="col-form-label">Status</label>
                                                                <select class="select select2-hidden-accessible" data-select2-id="select2-data-10-boel" tabindex="-1" aria-hidden="true">
                                                                    <option data-select2-id="select2-data-12-dg5e">Active</option>
                                                                    <option>Inactive</option>
                                                                </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="select2-data-11-ebn6" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-rfaf-container" aria-controls="select2-rfaf-container"><span class="select2-selection__rendered" id="select2-rfaf-container" role="textbox" aria-readonly="true" title="Active">Active</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
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


                                <div class="modal custom-modal fade" id="delete_goal" role="dialog">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <div class="form-header">
                                                    <h3>Delete Meeting Goal Tracking List</h3>
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
                            <div class="tab-pane fade" id="mne-pills-breakfast-debate-content" role="tabpanel" aria-labelledby="vdsreqs-pills-profile-tab">
                                {{-- my Morning Debate --}}
                                <div class="event-schedule-area-two bg-color pad100">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-12">
                                              
                                            </div>

                                        </div>

                                        <div class="row">
                                            <div class="col-lg-12">
                                                <ul class="nav custom-tab" id="myTab" role="tablist">
                                                    <li class="nav-item">
                                                        <a class="nav-link" id="home-taThursday" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="false">Day 1</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link active show" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="true">Day 2</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Day 3</a>
                                                    </li>
                                                    <li class="nav-item d-none d-lg-block">
                                                        <a class="nav-link" id="sunday-tab" data-toggle="tab" href="#sunday" role="tab" aria-controls="sunday" aria-selected="false">Day 4</a>
                                                    </li>
                                                    <li class="nav-item mr-0 d-none d-lg-block">
                                                        <a class="nav-link" id="monday-tab" data-toggle="tab" href="#monday" role="tab" aria-controls="monday" aria-selected="false">Day 5</a>
                                                    </li>
                                                </ul>
                                                <div class="tab-content" id="myTabContent">
                                                    <div class="tab-pane fade" id="home" role="tabpanel" aria-labelledby="home-tab">
                                                        <div class="table-responsive">
                                                            <table class="table">
                                                                <thead>
                                                                    <tr>
                                                                        <th class="text-center" scope="col">Date</th>
                                                                        <th scope="col">Speakers</th>
                                                                        <th scope="col">Session</th>
                                                                        <th scope="col">Venue</th>
                                                                        <th class="text-center" scope="col">Venue</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr class="inner-box">
                                                                        <th scope="row">
                                                                            <div class="event-date">
                                                                                <span>16</span>
                                                                                <p>Novembar</p>
                                                                            </div>
                                                                        </th>
                                                                        <td>
                                                                            <div class="event-img">
                                                                                <img src="assets/img/team/1.jpg" alt="">
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="event-wrap">
                                                                                <h3><a href="speakers-single.html">Harman Kardon</a></h3>
                                                                                <div class="meta">
                                                                                    <div class="organizers">
                                                                                        <a href="#">Aslan Lingker</a>
                                                                                    </div>
                                                                                    <div class="categories">
                                                                                        <a href="#">Inspire</a>
                                                                                    </div>
                                                                                    <div class="time">
                                                                                        <span>05:35 AM - 08:00 AM 2h 25'</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="r-no">
                                                                                <span>Room B3</span>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="primary-btn">
                                                                                <a class="btn-primary" href="#">Read More</a>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr class="inner-box">
                                                                        <th scope="row">
                                                                            <div class="event-date">
                                                                                <span>20</span>
                                                                                <p>Novembar</p>
                                                                            </div>
                                                                        </th>
                                                                        <td>
                                                                            <div class="event-img">
                                                                                <img src="assets/img/team/2.jpg" alt="">
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="event-wrap">
                                                                                <h3><a href="#">Toni Duggan</a></h3>
                                                                                <div class="meta">
                                                                                    <div class="organizers">
                                                                                        <a href="#">Aslan Lingker</a>
                                                                                    </div>
                                                                                    <div class="categories">
                                                                                        <a href="#">Inspire</a>
                                                                                    </div>
                                                                                    <div class="time">
                                                                                        <span>05:35 AM - 08:00 AM 2h 25'</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="r-no">
                                                                                <span>Room D3</span>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="primary-btn">
                                                                                <a class="btn-primary" href="#">Read More</a>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr class="inner-box border-bottom-0">
                                                                        <th scope="row">
                                                                            <div class="event-date">
                                                                                <span>18</span>
                                                                                <p>Novembar</p>
                                                                            </div>
                                                                        </th>
                                                                        <td>
                                                                            <div class="event-img">
                                                                                <img src="assets/img/team/3.jpg" alt="">
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="event-wrap">
                                                                                <h3><a href="#">Billal Hossain</a></h3>
                                                                                <div class="meta">
                                                                                    <div class="organizers">
                                                                                        <a href="#">Aslan Lingker</a>
                                                                                    </div>
                                                                                    <div class="categories">
                                                                                        <a href="#">Inspire</a>
                                                                                    </div>
                                                                                    <div class="time">
                                                                                        <span>05:35 AM - 08:00 AM 2h 25'</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="r-no">
                                                                                <span>Room A3</span>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="primary-btn">
                                                                                <a class="btn-primary" href="#">Read More</a>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade active show" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                                        <div class="table-responsive">
                                                            <table class="table">
                                                                <thead>
                                                                    <tr>
                                                                        <th scope="col">Date</th>
                                                                        <th scope="col">Speakers</th>
                                                                        <th scope="col">Session</th>
                                                                        <th scope="col">Venue</th>
                                                                        <th scope="col">Venue</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr class="inner-box">
                                                                        <th scope="row">
                                                                            <div class="event-date">
                                                                                <span>16</span>
                                                                                <p>Novembar</p>
                                                                            </div>
                                                                        </th>
                                                                        <td>
                                                                            <div class="event-img">
                                                                                <img src="assets/img/team/1.jpg" alt="">
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="event-wrap">
                                                                                <h3><a href="speakers-single.html">Harman Kardon</a></h3>
                                                                                <div class="meta">
                                                                                    <div class="organizers">
                                                                                        <a href="#">Aslan Lingker</a>
                                                                                    </div>
                                                                                    <div class="categories">
                                                                                        <a href="#">Inspire</a>
                                                                                    </div>
                                                                                    <div class="time">
                                                                                        <span>05:35 AM - 08:00 AM 2h 25'</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="r-no">
                                                                                <span>Room B3</span>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="primary-btn">
                                                                                <a class="btn-primary" href="#">Read More</a>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr class="inner-box">
                                                                        <th scope="row">
                                                                            <div class="event-date">
                                                                                <span>16</span>
                                                                                <p>Novembar</p>
                                                                            </div>
                                                                        </th>
                                                                        <td>
                                                                            <div class="event-img">
                                                                                <img src="assets/img/team/2.jpg" alt="">
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="event-wrap">
                                                                                <h3><a href="speakers-single.html">Toni Duggan</a></h3>
                                                                                <div class="meta">
                                                                                    <div class="organizers">
                                                                                        <a href="#">Aslan Lingker</a>
                                                                                    </div>
                                                                                    <div class="categories">
                                                                                        <a href="#">Inspire</a>
                                                                                    </div>
                                                                                    <div class="time">
                                                                                        <span>05:35 AM - 08:00 AM 2h 25'</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="r-no">
                                                                                <span>Room B3</span>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="primary-btn">
                                                                                <a class="btn-primary" href="#">Read More</a>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr class="inner-box border-bottom-0">
                                                                        <th scope="row">
                                                                            <div class="event-date">
                                                                                <span>16</span>
                                                                                <p>Novembar</p>
                                                                            </div>
                                                                        </th>
                                                                        <td>
                                                                            <div class="event-img">
                                                                                <img src="assets/img/team/3.jpg" alt="">
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="event-wrap">
                                                                                <h3><a href="speakers-single.html">Billal Hossain</a></h3>
                                                                                <div class="meta">
                                                                                    <div class="organizers">
                                                                                        <a href="#">Aslan Lingker</a>
                                                                                    </div>
                                                                                    <div class="categories">
                                                                                        <a href="#">Inspire</a>
                                                                                    </div>
                                                                                    <div class="time">
                                                                                        <span>05:35 AM - 08:00 AM 2h 25'</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="r-no">
                                                                                <span>Room B3</span>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="primary-btn">
                                                                                <a class="btn-primary" href="#">Read More</a>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                                        <div class="table-responsive">
                                                            <table class="table">
                                                                <thead>
                                                                    <tr>
                                                                        <th scope="col">Date</th>
                                                                        <th scope="col">Speakers</th>
                                                                        <th scope="col">Session</th>
                                                                        <th scope="col">Venue</th>
                                                                        <th scope="col">Venue</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr class="inner-box">
                                                                        <th scope="row">
                                                                            <div class="event-date">
                                                                                <span>16</span>
                                                                                <p>Novembar</p>
                                                                            </div>
                                                                        </th>
                                                                        <td>
                                                                            <div class="event-img">
                                                                                <img src="assets/img/team/1.jpg" alt="">
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="event-wrap">
                                                                                <h3><a href="speakers-single.html">Harman Kardon</a></h3>
                                                                                <div class="meta">
                                                                                    <div class="organizers">
                                                                                        <a href="#">Aslan Lingker</a>
                                                                                    </div>
                                                                                    <div class="categories">
                                                                                        <a href="#">Inspire</a>
                                                                                    </div>
                                                                                    <div class="time">
                                                                                        <span>05:35 AM - 08:00 AM 2h 25'</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="r-no">
                                                                                <span>Room B3</span>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="primary-btn">
                                                                                <a class="btn-primary" href="#">Read More</a>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr class="inner-box">
                                                                        <th scope="row">
                                                                            <div class="event-date">
                                                                                <span>16</span>
                                                                                <p>Novembar</p>
                                                                            </div>
                                                                        </th>
                                                                        <td>
                                                                            <div class="event-img">
                                                                                <img src="assets/img/team/2.jpg" alt="">
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="event-wrap">
                                                                                <h3><a href="speakers-single.html">Toni Duggan</a></h3>
                                                                                <div class="meta">
                                                                                    <div class="organizers">
                                                                                        <a href="#">Aslan Lingker</a>
                                                                                    </div>
                                                                                    <div class="categories">
                                                                                        <a href="#">Inspire</a>
                                                                                    </div>
                                                                                    <div class="time">
                                                                                        <span>05:35 AM - 08:00 AM 2h 25'</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="r-no">
                                                                                <span>Room B3</span>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="primary-btn">
                                                                                <a class="btn-primary" href="#">Read More</a>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr class="inner-box border-bottom-0">
                                                                        <th scope="row">
                                                                            <div class="event-date">
                                                                                <span>16</span>
                                                                                <p>Novembar</p>
                                                                            </div>
                                                                        </th>
                                                                        <td>
                                                                            <div class="event-img">
                                                                                <img src="assets/img/team/3.jpg" alt="">
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="event-wrap">
                                                                                <h3><a href="speakers-single.html">Billal Hossain</a></h3>
                                                                                <div class="meta">
                                                                                    <div class="organizers">
                                                                                        <a href="#">Aslan Lingker</a>
                                                                                    </div>
                                                                                    <div class="categories">
                                                                                        <a href="#">Inspire</a>
                                                                                    </div>
                                                                                    <div class="time">
                                                                                        <span>05:35 AM - 08:00 AM 2h 25'</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="r-no">
                                                                                <span>Room B3</span>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="primary-btn">
                                                                                <a class="btn-primary" href="#">Read More</a>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="sunday" role="tabpanel" aria-labelledby="sunday-tab">
                                                        <div class="table-responsive">
                                                            <table class="table">
                                                                <thead>
                                                                    <tr>
                                                                        <th scope="col">Date</th>
                                                                        <th scope="col">Speakers</th>
                                                                        <th scope="col">Session</th>
                                                                        <th scope="col">Venue</th>
                                                                        <th scope="col">Venue</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr class="inner-box">
                                                                        <th scope="row">
                                                                            <div class="event-date">
                                                                                <span>16</span>
                                                                                <p>Novembar</p>
                                                                            </div>
                                                                        </th>
                                                                        <td>
                                                                            <div class="event-img">
                                                                                <img src="assets/img/team/1.jpg" alt="">
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="event-wrap">
                                                                                <h3><a href="speakers-single.html">Harman Kardon</a></h3>
                                                                                <div class="meta">
                                                                                    <div class="organizers">
                                                                                        <a href="#">Aslan Lingker</a>
                                                                                    </div>
                                                                                    <div class="categories">
                                                                                        <a href="#">Inspire</a>
                                                                                    </div>
                                                                                    <div class="time">
                                                                                        <span>05:35 AM - 08:00 AM 2h 25'</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="r-no">
                                                                                <span>Room B3</span>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="primary-btn">
                                                                                <a class="btn-primary" href="#">Read More</a>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr class="inner-box">
                                                                        <th scope="row">
                                                                            <div class="event-date">
                                                                                <span>16</span>
                                                                                <p>Novembar</p>
                                                                            </div>
                                                                        </th>
                                                                        <td>
                                                                            <div class="event-img">
                                                                                <img src="assets/img/team/2.jpg" alt="">
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="event-wrap">
                                                                                <h3><a href="speakers-single.html">Toni Duggan</a></h3>
                                                                                <div class="meta">
                                                                                    <div class="organizers">
                                                                                        <a href="#">Aslan Lingker</a>
                                                                                    </div>
                                                                                    <div class="categories">
                                                                                        <a href="#">Inspire</a>
                                                                                    </div>
                                                                                    <div class="time">
                                                                                        <span>05:35 AM - 08:00 AM 2h 25'</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="r-no">
                                                                                <span>Room B3</span>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="primary-btn">
                                                                                <a class="btn-primary" href="#">Read More</a>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr class="inner-box border-bottom-0">
                                                                        <th scope="row">
                                                                            <div class="event-date">
                                                                                <span>16</span>
                                                                                <p>Novembar</p>
                                                                            </div>
                                                                        </th>
                                                                        <td>
                                                                            <div class="event-img">
                                                                                <img src="assets/img/team/3.jpg" alt="">
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="event-wrap">
                                                                                <h3><a href="speakers-single.html">Billal Hossain</a></h3>
                                                                                <div class="meta">
                                                                                    <div class="organizers">
                                                                                        <a href="#">Aslan Lingker</a>
                                                                                    </div>
                                                                                    <div class="categories">
                                                                                        <a href="#">Inspire</a>
                                                                                    </div>
                                                                                    <div class="time">
                                                                                        <span>05:35 AM - 08:00 AM 2h 25'</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="r-no">
                                                                                <span>Room B3</span>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="primary-btn">
                                                                                <a class="btn-primary" href="#">Read More</a>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="monday" role="tabpanel" aria-labelledby="monday-tab">
                                                        <div class="table-responsive">
                                                            <table class="table">
                                                                <thead>
                                                                    <tr>
                                                                        <th scope="col">Date</th>
                                                                        <th scope="col">Speakers</th>
                                                                        <th scope="col">Session</th>
                                                                        <th scope="col">Venue</th>
                                                                        <th scope="col">Venue</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr class="inner-box">
                                                                        <th scope="row">
                                                                            <div class="event-date">
                                                                                <span>16</span>
                                                                                <p>Novembar</p>
                                                                            </div>
                                                                        </th>
                                                                        <td>
                                                                            <div class="event-img">
                                                                                <img src="assets/img/team/1.jpg" alt="">
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="event-wrap">
                                                                                <h3><a href="speakers-single.html">Harman Kardon</a></h3>
                                                                                <div class="meta">
                                                                                    <div class="organizers">
                                                                                        <a href="#">Aslan Lingker</a>
                                                                                    </div>
                                                                                    <div class="categories">
                                                                                        <a href="#">Inspire</a>
                                                                                    </div>
                                                                                    <div class="time">
                                                                                        <span>05:35 AM - 08:00 AM 2h 25'</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="r-no">
                                                                                <span>Room B3</span>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="primary-btn">
                                                                                <a class="btn-primary" href="#">Read More</a>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr class="inner-box">
                                                                        <th scope="row">
                                                                            <div class="event-date">
                                                                                <span>18</span>
                                                                                <p>Novembar</p>
                                                                            </div>
                                                                        </th>
                                                                        <td>
                                                                            <div class="event-img">
                                                                                <img src="assets/img/team/2.jpg" alt="">
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="event-wrap">
                                                                                <h3><a href="speakers-single.html">Toni Duggan</a></h3>
                                                                                <div class="meta">
                                                                                    <div class="organizers">
                                                                                        <a href="#">Aslan Lingker</a>
                                                                                    </div>
                                                                                    <div class="categories">
                                                                                        <a href="#">Inspire</a>
                                                                                    </div>
                                                                                    <div class="time">
                                                                                        <span>05:35 AM - 08:00 AM 2h 25'</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="r-no">
                                                                                <span>Room B3</span>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="primary-btn">
                                                                                <a class="btn-primary" href="#">Read More</a>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr class="inner-box border-bottom-0">
                                                                        <th scope="row">
                                                                            <div class="event-date">
                                                                                <span>20</span>
                                                                                <p>Novembar</p>
                                                                            </div>
                                                                        </th>
                                                                        <td>
                                                                            <div class="event-img">
                                                                                <img src="assets/img/team/3.jpg" alt="">
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="event-wrap">
                                                                                <h3><a href="speakers-single.html">Billal Hossain</a></h3>
                                                                                <div class="meta">
                                                                                    <div class="organizers">
                                                                                        <a href="#">Aslan Lingker</a>
                                                                                    </div>
                                                                                    <div class="categories">
                                                                                        <a href="#">Inspire</a>
                                                                                    </div>
                                                                                    <div class="time">
                                                                                        <span>05:35 AM - 08:00 AM 2h 25'</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="r-no">
                                                                                <span>Room B3</span>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="primary-btn">
                                                                                <a class="btn-primary" href="#">Read More</a>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="primary-btn text-center">
                                                    <a href="#" class="btn-primary">Download Schedule</a>
                                                </div>
                                            </div>

                                        </div>

                                    </div>

                                </div>
                            </div>

                            <div class="tab-pane fade" id="mne-pills-direct-report-content" role="tabpanel" aria-labelledby="vdsreqs-pills-settings-tab">
                                {{-- data science imprests --}}
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="card">
                                            <div class="card-content table-responsive">
                                                <br />
                                                <table class="table table-bordered table-hover">
                                                    <p>
                                                        <strong>Data Science Imprests.</strong>
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

                            <div class="tab-pane fade" id="mne-pills-pillar-assessments-content" role="tabpanel" aria-labelledby="pillars-pills-ds-activities-tab">
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

                            <div class="tab-pane fade" id="mne-pills-admin-assessments-content" role="tabpanel" aria-labelledby="pillars-pills-ds-sub-activities-tab">

                                {{-- data science sub activities --}}
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="card">
                                            <div class="card-content table-responsive">
                                                <br />
                                                <table class="table table-bordered table-hover">
                                                    <p>
                                                        <strong>Data Science Sub Activities.</strong>
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

                            <div class="tab-pane fade" id="mne-pills-budget-content" role="tabpanel" aria-labelledby="pillars-pills-ds-scholars-tab">

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
                            <div class="tab-pane fade" id="mne-pills-dir-rep-content" role="tabpanel" aria-labelledby="pillars-pills-ds-grantees-tab">

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
                            <div class="tab-pane fade" id="mne-pills-impact-distribution-content" role="tabpanel" aria-labelledby="pillars-pills-ds-retirements-tab">

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

                            <div class="tab-pane fade" id="mne-pills-mel-plans-content" role="tabpanel" aria-labelledby="pillars-pills-ds-retirements-tab">

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

                            <div class="tab-pane fade" id="mne-pills-prog-tracking-content" role="tabpanel" aria-labelledby="pillars-pills-ds-retirements-tab">

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

                            <div class="tab-pane fade" id="mne-pills-qualitative-reports-content" role="tabpanel" aria-labelledby="pillars-pills-ds-retirements-tab">

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


                        </div>
                    </div>
                </div>
                <br />
            </div>
            <!-- end of line manager panel -->

            <!--
              ========================================
              =                                      =
              =       start of line manager side     =
              ======================================== -->
            <div class="tab-pane fade" id="line-manager-donor-content" role="tabpanel" aria-labelledby="line-manager-donor-tab-md">
                <p>Donor</p>
                <br />
                <div class="row">
                    <div class="col-md-2">
                        <div class="nav flex-column nav-pills" id="vds-donor-tab" role="tablist" aria-orientation="vertical">
                            <a class="nav-link active" id="donor-pills-our-donors-tab" data-toggle="pill" href="#donor-pills-our-donors-content" role="tab" aria-controls="" aria-selected="true">Donors</a>

                            <a class="nav-link" id="donor-pills-grants-tab" data-toggle="pill" href="#donor-pills-grants-content" role="tab" aria-controls="donor-pills-grants-tab" aria-selected="false">Grants & Funding</a>


                            <a class="nav-link" id="donor-pills-funds-received-tab" data-toggle="pill" href="#donor-pills-funds-received-content" role="tab" aria-controls="donor-pills-funds-received-tab" aria-selected="false">Funds received</a>


                            <a class="nav-link" id="donor-pills-members-tab" data-toggle="pill" href="#donor-pills-members-content" role="tab" aria-controls="donor-pills-members-tab" aria-selected="false">Members</a>

                            <a class="nav-link" id="donor-pills-partners-tab" data-toggle="pill" href="#donor-pills-partners-content" role="tab" aria-controls="donor-pills-partners-tab" aria-selected="false">Partners</a>

                            <a class="nav-link" id="donor-pills-others-tab" data-toggle="pill" href="#donor-pills-others-content" role="tab" aria-controls="donor-pills-others-tab" aria-selected="false">Other</a>
                        </div>
                    </div>
                    <div class="col-md-10">

                        <div class="tab-content" id="vds-donor-tabContent">
                            <div class="tab-pane fade show active" id="donor-pills-our-donors-content" role="tabpanel" aria-labelledby="pills-finance-pillars-tab">
                                {{-- my retirements --}}
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="card">
                                            <div class="card-content table-responsive">
                                                <br />
                                                <table class="table table-bordered table-hover">
                                                    <p><strong>Data Science requests.</strong></p>
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
                            <div class="tab-pane fade" id="donor-pills-grants-content" role="tabpanel" aria-labelledby="vdsreqs-pills-profile-tab">
                                {{-- my retirements --}}
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="card">
                                            <div class="card-content table-responsive">
                                                <br />
                                                <table class="table table-bordered table-hover">
                                                    <p><strong>Data Science Projects</strong></p>
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

                            <div class="tab-pane fade" id="donor-pills-funds-received-content" role="tabpanel" aria-labelledby="vdsreqs-pills-settings-tab">
                                {{-- data science imprests --}}
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="card">
                                            <div class="card-content table-responsive">
                                                <br />
                                                <table class="table table-bordered table-hover">
                                                    <p>
                                                        <strong>Data Science Imprests.</strong>
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

                            <div class="tab-pane fade" id="donor-pills-members-content" role="tabpanel" aria-labelledby="pillars-pills-ds-activities-tab">
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

                            <div class="tab-pane fade" id="donor-pills-partners-content" role="tabpanel" aria-labelledby="pillars-pills-ds-sub-activities-tab">

                                {{-- data science sub activities --}}
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="card">
                                            <div class="card-content table-responsive">
                                                <br />
                                                <table class="table table-bordered table-hover">
                                                    <p>
                                                        <strong>Data Science Sub Activities.</strong>
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

                            <div class="tab-pane fade" id="donor-pills-others-content" role="tabpanel" aria-labelledby="pillars-pills-ds-scholars-tab">

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

                        </div>
                    </div>
                </div>
                <br />
            </div>
            <!-- end of line manager panel -->



            <!--
              ========================================
              =                                      =
              =       start of line manager side     =
              ======================================== -->
            <div class="tab-pane fade" id="line-manager-report-content" role="tabpanel" aria-labelledby="line-manager-reports-tab-md">

                <p>Reports</p>

                <div class="row">
                    <div class="col-md-2">
                        <div class="nav flex-column nav-pills" id="vds-reports-tab" role="tablist" aria-orientation="vertical">
                            <a class="nav-link active" id="reports-pill-organisation-tab" data-toggle="pill" href="#reports-pill-organisation-content" role="tab" aria-controls="" aria-selected="true">Organisational reports</a>

                            <a class="nav-link" id="reports-pill-dept-reports-tab" data-toggle="pill" href="#reports-pill-dept-reports-content" role="tab" aria-controls="reports-pill-dept-reports-tab" aria-selected="false">Department
                                reports</a>


                            <a class="nav-link" id="reports-pill-financial-reports-tab" data-toggle="pill" href="#reports-pill-financial-reports-content" role="tab" aria-controls="reports-pill-financial-reports-tab" aria-selected="false">Financial
                                reports</a>


                            <a class="nav-link" id="reports-pill-hr-reports-tab" data-toggle="pill" href="#reports-pill-hr-reports-content" role="tab" aria-controls="reports-pill-hr-reports-tab" aria-selected="false">Human Resources
                                reports</a>

                            <a class="nav-link" id="reports-pill-pillar-reports-tab" data-toggle="pill" href="#reports-pill-pillar-reports-content" role="tab" aria-controls="reports-pill-pillar-reports-tab" aria-selected="false">Pillar reports</a>

                            <a class="nav-link" id="reports-pill-other-reports-tab" data-toggle="pill" href="#reports-pill-other-reports-content" role="tab" aria-controls="reports-pill-other-reports-tab" aria-selected="false">Other reports</a>
                        </div>
                    </div>
                    <div class="col-md-10">

                        <div class="tab-content" id="vds-finance-pillars-pills-tabContent">
                            <div class="tab-pane fade show active" id="reports-pill-organisation-content" role="tabpanel" aria-labelledby="pills-finance-pillars-tab">
                                {{-- my retirements --}}

                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="card">
                                            <div class="card-content table-responsive">
                                                <br />
                                                <table class="table table-bordered table-hover">
                                                    <p><strong>Data Science requests.</strong></p>
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
                            <div class="tab-pane fade" id="reports-pill-dept-reports-content" role="tabpanel" aria-labelledby="vdsreqs-pills-profile-tab">
                                {{-- my retirements --}}
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="card">
                                            <div class="card-content table-responsive">
                                                <br />
                                                <table class="table table-bordered table-hover">
                                                    <p><strong>Data Science Projects</strong></p>
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

                            <div class="tab-pane fade" id="reports-pill-financial-reports-content" role="tabpanel" aria-labelledby="pillars-pills-ds-activities-tab">
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

                            <div class="tab-pane fade" id="reports-pill-hr-reports-content" role="tabpanel" aria-labelledby="pillars-pills-ds-sub-activities-tab">

                                {{-- data science sub activities --}}
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="card">
                                            <div class="card-content table-responsive">
                                                <br />
                                                <table class="table table-bordered table-hover">
                                                    <p>
                                                        <strong>Data Science Sub Activities.</strong>
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

                            <div class="tab-pane fade" id="reports-pill-pillar-reports-content" role="tabpanel" aria-labelledby="pillars-pills-ds-scholars-tab">

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
                            <div class="tab-pane fade" id="reports-pill-other-reports" role="tabpanel" aria-labelledby="pillars-pills-ds-grantees-tab">

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
                </div>
                <br />
                <br />
            </div>
            <!-- end of line manager panel -->

        </div>


    </div>
    <!-- end of line manager panel -->

</div>
@endsection
