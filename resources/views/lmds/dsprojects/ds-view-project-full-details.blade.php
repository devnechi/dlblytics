




@extends('layouts.llmds')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">

                <div class="card-content table-responsive">
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div><br />
                    @endif
                    <div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="m-auto " style="padding-top:40px; background:rgb(45, 170, 166); height:280px ">
                                    <div class="cont text-light text-center mb-4">
                                        <a href="{{route('pillar-project.index')}}" class="btn btn-outline-light mb-5">{{$project->project_title}} : project Overview</a>
                                        <h1 class="text-center "><strong>{{$project->project_title}}<strong></h1>
                                        <p class=" text-light">
                                            <strong>title<strong>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container pl-2 mt-5">
                            <p class="text-left mb-0"><strong> Description</strong> </p>
                            <div class="  mb-5  border ">
                                <p class="m-3">{{$project->project_desc}}</p>
                            </div>
                        </div>


                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <nav>
                                        <div class="nav nav-tabs" id="proj-details-nav-tab" role="tablist">
                                            <a class="nav-link active" id="nav-acts-tab" data-toggle="tab" href="#nav-projs" role="tab" aria-controls="nav-acts" aria-selected="true">Project Overview</a>
                                            <a class="nav-link " id="nav-acts-tab" data-toggle="tab" href="#nav-acts" role="tab" aria-controls="nav-acts" aria-selected="false">Activities</a>
                                            <a class="nav-link" id="nav-members-tab" data-toggle="tab" href="#nav-members" role="tab" aria-controls="nav-members" aria-selected="false">Members</a>
                                            <a class="nav-link" id="nav-partners-tab" data-toggle="tab" href="#nav-partners" role="tab" aria-controls="nav-partners" aria-selected="false">Partners</a>
                                            <a class="nav-link" id="nav-funders-tab" data-toggle="tab" href="#nav-funders" role="tab" aria-controls="nav-funders" aria-selected="false">Funders</a>
                                            <a class="nav-link" id="nav-pdocuments-tab" data-toggle="tab" href="#nav-pdocuments" role="tab" aria-controls="nav-pdocuments" aria-selected="false">Documents</a>

                                        </div>
                                    </nav>
                                    <div class="tab-content" id="proj-details-Content">
                                        <div class="tab-pane fade show active" id="nav-projs" role="tabpanel" aria-labelledby="nav-acts-tab">
                                            <br />
                                            <br />


                                            <div class="coursevida">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="card">
                                                            <div class="card-header d-flex justify-content-between">
                                                                <p>Objectives</p> <i class="fas fa-tasks fa-2x"></i>
                                                            </div>
                                                            <div class="card-body">
                                                                <ul class="list-group list-group-flush">
                                                                    @foreach( $project->pObjs as $arriy)
                                                                    <li class="list-group-item">{{$arriy->objective_content}}</li>
                                                                    @endforeach
                                                                </ul>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="card rounded">
                                                            <div class="card-content table-responsive ">
                                                                <p> Total Cost </p>
                                                                <div class="row justify-content-between">

                                                                    <div class="">
                                                                        <h3 class="cardhd">{{$project->total_project_cost}}</h3>
                                                                    </div>
                                                                    <div class="">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="#009688" class="bi bi-check2-square" viewBox="0 0 16 16">
                                                                            <path fill-rule="evenodd" d="M15.354 2.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3-3a.5.5 0 1 1 .708-.708L8 9.293l6.646-6.647a.5.5 0 0 1 .708 0z" />
                                                                            <path fill-rule="evenodd" d="M1.5 13A1.5 1.5 0 0 0 3 14.5h10a1.5 1.5 0 0 0 1.5-1.5V8a.5.5 0 0 0-1 0v5a.5.5 0 0 1-.5.5H3a.5.5 0 0 1-.5-.5V3a.5.5 0 0 1 .5-.5h8a.5.5 0 0 0 0-1H3A1.5 1.5 0 0 0 1.5 3v10z" />
                                                                        </svg>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="card">
                                                            <div class="card-header d-flex justify-content-between">
                                                                <p>Duration</p> <i class="fas fa-hourglass-half fa-2x text-info"></i></i>
                                                            </div>
                                                            <div class="card-body">
                                                                <ul class="list-group list-group-flush">
                                                                    @php
                                                                    $start_time = \Carbon\Carbon::parse($project->start_date);
                                                                    $finish_time = \Carbon\Carbon::parse($project->end_date);
                                                                    @endphp
                                                                    <li class="list-group-item text-center">{{$start_time->diffInDays($finish_time, false)}} Days</li>
                                                                    <li class="list-group-item d-flex justify-content-between"> <span>From <i class="text-success">{{date('d-m-Y', strtotime($start_time))}}</i> </span> <span>To <i class="text-primary">
                                                                                {{date('d-m-Y', strtotime($finish_time))}}
                                                                            </i> </span> </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="card">
                                                            <div class="card-header d-flex justify-content-between">
                                                                <p>Pertners</p> <i class="fas fa-hands-helping fa-2x text-secondary"></i></i>
                                                            </div>
                                                            <div class="card-body">
                                                                <ul class="list-group list-group-flush">
                                                                    @foreach( $project->project_partiners as $arriy)
                                                                    @foreach( explode(',', $arriy) as $fnd)
                                                                    <li class="list-group-item">{{$fnd}}</li>
                                                                    @endforeach
                                                                    @endforeach
                                                                </ul>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                            <!-- end of SECOND column -->

                                        </div>
                                        <div class="tab-pane fade " id="nav-acts" role="tabpanel" aria-labelledby="nav-acts-tab">

                                            @if(count($project->activities)==0)
                                            <div class="d-flex p-2 bg-teal justify-content-center">No Activities Found!</div>
                                            @else
                                            <table class="table table-bordered table-hover">

                                                <br />

                                                <thead>
                                                    <tr>
                                                        <th scope="col">#</th>
                                                        <th scope="col">Title</th>
                                                        <th scope="col">Status</th>
                                                        <th scope="col">Current Stage</th>
                                                        <th scope="col">Total Estimated cost</th>
                                                        <th scope="col">Date created</th>
                                                        <th scope="col"></th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @php $n=1; @endphp
                                                    @foreach($project->activities as $acts)
                                                    <tr>
                                                        <th scope="row">{{$n}}</th>

                                                        <td>{{$acts->act_title}}</td>
                                                        <td>{{$acts->review_status}}</td>
                                                        <td>{{$acts->current_stage}}</td>
                                                        <td>{{$acts->total_act_cost}} <span class="badge badge-success">TZS</span>
                                                        </td>
                                                        <td>{{$acts->created_at->format('Y-m-d')}}</td>
                                                        <td class="w-30 p-2">
                                                                            <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#act{{$acts->pillar_act_id}}"> Actions
                                                                            </button>
                                                                            <!-- Modal -->
                                                                            <div class="modal fade" id="act{{$acts->pillar_act_id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" data-proj="{{ $acts->pillar_act_id }}" data-user="{{ Auth::user()->user_id }}">
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
                                                                                                    <a href="{{ route('pillar-activity.show',   $acts->pillar_act_id)}}" class="btn btn-outline-success d-flex justify-content-between" data-bs-toggle="tooltip" data-bs-placement="top" title="view project full details">
                                                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                                                                                            <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                                                                                                            <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                                                                                                        </svg>
                                                                                                        <p class="m-auto">Activity Details</p>
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
                                                    @php $n++; @endphp
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


                                        <div class="tab-pane fade" id="nav-members" role="tabpanel" aria-labelledby="nav-members-tab">
                                            <br />
                                            <br />
                                            <h5><strong> Members involved in the Project</strong></h5>
                                            <br />

                                            <div class="row">
                                                <div class="card mb-3" style=" ">
                                                    <div class="row no-gutters">
                                                        <div class="col-md-4">
                                                            <img src="/images/pot/man-1.jpg" alt="members photo">
                                                        </div>
                                                        <div class="col-md-8">
                                                            <div class="card-body">
                                                                <h5 class="card-title">John Alex Solomon</h5>
                                                                <p class="card-text">This is a wider card with supporting
                                                                    text below as a natural lead-in to additional content.
                                                                    This content is a little bit longer.</p>
                                                                <p class="card-text"><small class="text-muted">Last updated
                                                                        3 mins ago</small></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="card mb-3" style=" ">
                                                    <div class="row no-gutters">
                                                        <div class="col-md-4">
                                                            <img src="/images/pot/woman-2.jpg" alt="members photo">
                                                        </div>
                                                        <div class="col-md-8">
                                                            <div class="card-body">
                                                                <h5 class="card-title">Marian Jeremy Mbise</h5>
                                                                <p class="card-text">This is a wider card with supporting
                                                                    text below as a natural lead-in to additional content.
                                                                    This content is a little bit longer.</p>
                                                                <p class="card-text"><small class="text-muted">Last updated
                                                                        3 mins ago</small></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="tab-pane fade" id="nav-partners" role="tabpanel" aria-labelledby="nav-partners-tab">
                                            <br />
                                            <br />
                                            <br />
                                            <h5><strong>Partners on this project </strong></h5>
                                            <br />
                                            <div class="row">
                                                <div class="card mb-3" style=" ">
                                                    <div class="row no-gutters">
                                                        <div class="col-md-4">
                                                            <img src="/images/pot/man-1.jpg" alt="members photo">
                                                        </div>
                                                        <div class="col-md-8">
                                                            <div class="card-body">
                                                                <h5 class="card-title">John Alex Solomon</h5>
                                                                <p class="card-text">This is a wider card with supporting
                                                                    text below as a natural lead-in to additional content.
                                                                    This content is a little bit longer.</p>
                                                                <p class="card-text"><small class="text-muted">Last updated
                                                                        3 mins ago</small></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="card mb-3" style=" ">
                                                    <div class="row no-gutters">
                                                        <div class="col-md-4">
                                                            <img src="/images/pot/woman-2.jpg" alt="members photo">
                                                        </div>
                                                        <div class="col-md-8">
                                                            <div class="card-body">
                                                                <h5 class="card-title">Marian Jeremy Mbise</h5>
                                                                <p class="card-text">This is a wider card with supporting
                                                                    text below as a natural lead-in to additional content.
                                                                    This content is a little bit longer.</p>
                                                                <p class="card-text"><small class="text-muted">Last updated
                                                                        3 mins ago</small></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="tab-pane fade" id="nav-funders" role="tabpanel" aria-labelledby="nav-funders-tab">
                                            <br />
                                            <br />
                                            <h5><strong>Project Funders</strong></h5>
                                            <br />
                                            <div class="row">
                                                <div class="card mb-3" style=" ">
                                                    <div class="row no-gutters">
                                                        <div class="col-md-4">
                                                            <img src="/images/pot/man-1.jpg" alt="members photo">
                                                        </div>
                                                        <div class="col-md-8">
                                                            <div class="card-body">
                                                                <h5 class="card-title">John Alex Solomon</h5>
                                                                <p class="card-text">This is a wider card with supporting
                                                                    text below as a natural lead-in to additional content.
                                                                    This content is a little bit longer.</p>
                                                                <p class="card-text"><small class="text-muted">Last updated
                                                                        3 mins ago</small></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="card mb-3" style=" ">
                                                    <div class="row no-gutters">
                                                        <div class="col-md-4">
                                                            <img src="/images/pot/woman-2.jpg" alt="members photo">
                                                        </div>
                                                        <div class="col-md-8">
                                                            <div class="card-body">
                                                                <h5 class="card-title">Marian Jeremy Mbise</h5>
                                                                <p class="card-text">This is a wider card with supporting
                                                                    text below as a natural lead-in to additional content.
                                                                    This content is a little bit longer.</p>
                                                                <p class="card-text"><small class="text-muted">Last updated
                                                                        3 mins ago</small></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>


                                        <div class="tab-pane fade" id="nav-pdocuments" role="tabpanel" aria-labelledby="nav-pdocuments-tab">
                                            <br />
                                            <br />
                                            <h5><strong>Project Documents</strong></h5>
                                            <br />
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <h5 class="card-title">Technical Document</h5>
                                                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                                            <a data-toggle="modal" data-target="#techmodal" class="btn btn-primary">Preview document</a>
                                                            <div class="modal" id="myModal">


                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="card ">
                                                        <div class="card-body">
                                                            <h5 class="card-title">Financial Documet</h5>
                                                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                                            <a data-toggle="modal" data-target="#finmodal" class="btn btn-primary">Preview document</a>
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
                <!-- end of first column -->
            </div>
        </div>
    </div>

    <!-- The Modal -->
    <div class="modal" id="techmodal">
        <div class="modal-dialog" style="max-width: 80%;">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Preview Technical</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <div style="width: 100%; height: 83vh;">
                        <object  style="width: 100%; height: inherit;"
                        data="{{isset($project->ProjectFile->where('file_type','projecttech')->first()->file_path) ? route('get-pdf',explode('/',$project->ProjectFile->where('file_type','projecttech')->first()->file_path)[3]) :'' }}"
                        id="pspdfkit"></object>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="modal" id="finmodal">
        <div class="modal-dialog" style="max-width: 80%;">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Preview financial Doc</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <div style="width: 100%; height: 83vh;">
                        <object data="{{isset($project->ProjectFile->where('file_type','projectbusi')->first()->file_path) ? route('get-pdf',explode('/',$project->ProjectFile->where('file_type','projectbusi')->first()->file_path)[3]) :'' }}" style="width: 100%; height: inherit;" id="pspdfkit"></object>
                    </div>
                </div>

            </div>
        </div>
    </div>
    @endsection
