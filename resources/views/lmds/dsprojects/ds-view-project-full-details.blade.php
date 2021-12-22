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
                                        <a class="btn btn-outline-light mb-5">{{$project->project_title}} : project Overview</a>
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

                                            <a class="nav-link" id="nav-sub-acts-tab" data-toggle="tab" href="#nav-sub-acts" role="tab" aria-controls="nav-sub-acts" aria-selected="false">Sub
                                                Activities</a>

                                            <a class="nav-link" id="nav-imprests-tab" data-toggle="tab" href="#nav-imprests" role="tab" aria-controls="nav-imprests" aria-selected="false">Imprests</a>
                                            <a class="nav-link" id="nav-retirements-tab" data-toggle="tab" href="#nav-retirements" role="tab" aria-controls="nav-retirements" aria-selected="false">Retirements</a>
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
                                                    <div class=" col-md-6">
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

                                                    <div class=" col-md-6">
                                                        <div class="card">
                                                        <div class="card-header d-flex justify-content-between">
                                                            <p>Funders</p> <i class="fas fa-hand-holding-usd fa-2x"></i></i>
                                                        </div>
                                                        <div class="card-body">
                                                            <ul class="list-group list-group-flush">
                                                                @foreach( $project->project_funders as $arriy)
                                                                @foreach( explode(',', $arriy) as $fnd)


                                                                <li class="list-group-item">{{$fnd}}</li>
                                                                @endforeach
                                                                @endforeach
                                                            </ul>
                                                        </div>
                                                        </div>

                                                    </div>
                                                    <div class=" col-md-6">
                                                        <div class="card">
                                                        <div class="card-header d-flex justify-content-between">
                                                            <p>Pertners</p> <i class="fas fa-hands-helping fa-2x"></i></i>
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
                                            <br />
                                            <br />

                                            <div class="card">
                                                <div class="card-content table-responsive">
                                                    <br />
                                                    <table class="table table-bordered table-hover">
                                                        <h5><strong>Project Activities</strong></h5>
                                                        <br />

                                                        <thead>
                                                            <tr>
                                                                <th scope="col">#</th>
                                                                <th scope="col">Created by</th>
                                                                <th scope="col-md-4">Activity Title</th>
                                                                <th scope="col">Status</th>
                                                                <th scope="col">Total Estimated cost</th>
                                                                <th scope="col">Date created</th>
                                                                <th scope="col"></th>

                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <th scope="row">1</th>
                                                                <td>MarkCuban</td>
                                                                <td>Data visualisation in Mbeya</td>
                                                                <td>on-going</td>
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
                                                                <td>on-going</td>
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
                                                                <td>on-going</td>
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
                                        <div class="tab-pane fade" id="nav-sub-acts" role="tabpanel" aria-labelledby="nav-sub-acts-tab">
                                            <br />
                                            <br />
                                            <br />

                                            <table class="table table-bordered table-hover">
                                                <h5><strong>Project Sub Activities</strong></h5>
                                                <br />

                                                <thead>
                                                    <tr>
                                                        <th scope="col">#</th>
                                                        <th scope="col">Lead Activitity</th>
                                                        <th scope="col-md-4">Sub Activity Title</th>
                                                        <th scope="col">Status</th>
                                                        <th scope="col">Total Estimated cost</th>
                                                        <th scope="col">Date created</th>
                                                        <th scope="col"></th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th scope="row">1</th>
                                                        <td>SIAS 1</td>
                                                        <td>Data visualisation in Mbeya</td>
                                                        <td>on-going</td>
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
                                                        <td>SIAS 3</td>
                                                        <td>Data Mining in Dar</td>
                                                        <td>on-going</td>
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
                                                        <td>SIAS 5</td>
                                                        <td>Data Analyis and Mining</td>
                                                        <td>on-going</td>
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
                                        <div class="tab-pane fade" id="nav-imprests" role="tabpanel" aria-labelledby="nav-imprests-tab">
                                            <br />
                                            <br />
                                            <br />
                                            <table class="table table-bordered table-hover">
                                                <h5><strong>Project Imprests</strong></h5>
                                                <br />

                                                <thead>
                                                    <tr>
                                                        <th scope="col">#</th>
                                                        <th scope="col-md-4">Imprest Title</th>
                                                        <th scope="col">Created by</th>
                                                        <th scope="col">Total cost</th>
                                                        <th scope="col">Date created</th>
                                                        <th scope="col"></th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th scope="row">1</th>
                                                        <td>Data visualisation in Mbeya</td>
                                                        <td>MarkCuban</td>
                                                        <td>6,600,000 <span class="badge badge-success">TZS</span>
                                                        <td>2019-09-11</td>
                                                        <td>
                                                            <button type="button" class="btn btn-outline-success">actions</button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">2</th>
                                                        <td>Data visualisation in Mbeya</td>
                                                        <td>MarkCuban</td>
                                                        <td>6,600,000 <span class="badge badge-success">TZS</span>
                                                        <td>2019-09-11</td>
                                                        <td>
                                                            <button type="button" class="btn btn-outline-success">actions</button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">3</th>
                                                        <td>Data visualisation in Mbeya</td>
                                                        <td>MarkCuban</td>
                                                        <td>6,600,000 <span class="badge badge-success">TZS</span>
                                                        <td>2019-09-11</td>
                                                        <td>
                                                            <button type="button" class="btn btn-outline-success">actions</button>
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
                                        <div class="tab-pane fade" id="nav-retirements" role="tabpanel" aria-labelledby="nav-retirements-tab">
                                            <br />
                                            <br />
                                            <br />
                                            <table class="table table-bordered table-hover">
                                                <h5><strong>Project Retirements</strong></h5>
                                                <br />

                                                <thead>
                                                    <tr>
                                                        <th scope="col">#</th>
                                                        <th scope="col">Requested by</th>
                                                        <th scope="col-md-4">Retirement Title</th>
                                                        <th scope="col">imprest id</th>
                                                        <th scope="col">status</th>
                                                        <th scope="col">Total allocated amount</th>
                                                        <th scope="col">Total amount retired</th>
                                                        <th scope="col">Date created</th>
                                                        <th scope="col"></th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th scope="row">1</th>
                                                        <td>MarkCuban</td>
                                                        <td>Data visualisation ret</td>
                                                        <td>23</td>
                                                        <td>pending retirement</td>
                                                        <td>2,000,000 <span class="badge badge-success">TZS</span></td>
                                                        <td>1,300,000
                                                        </td>
                                                        <td>2019-09-11</td>
                                                        <td>
                                                            <button type="button" class="btn btn-outline-success">actions</button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">2</th>
                                                        <td>MarkCuban</td>
                                                        <td>Data visualisation ret</td>
                                                        <td>23</td>
                                                        <td>pending retirement</td>
                                                        <td>2,000,000 <span class="badge badge-success">TZS</span></td>
                                                        <td>1,300,000
                                                        </td>
                                                        <td>2019-09-11</td>
                                                        <td>
                                                            <button type="button" class="btn btn-outline-success">actions</button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">3</th>
                                                        <td>MarkCuban</td>
                                                        <td>Data visualisation ret</td>
                                                        <td>23</td>
                                                        <td>pending retirement</td>
                                                        <td>2,000,000 <span class="badge badge-success">TZS</span></td>
                                                        <td>1,300,000
                                                        </td>
                                                        <td>2019-09-11</td>
                                                        <td>
                                                            <button type="button" class="btn btn-outline-success">actions</button>
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
                                        <div class="tab-pane fade" id="nav-members" role="tabpanel" aria-labelledby="nav-members-tab">
                                            <br />
                                            <br />
                                            <h5><strong> Members involved in the Project</strong></h5>
                                            <br />

                                            <div class="row">
                                                <div class="card mb-3" style="max-width: 540px;">
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
                                                <div class="card mb-3" style="max-width: 540px;">
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
                                                <div class="card mb-3" style="max-width: 540px;">
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
                                                <div class="card mb-3" style="max-width: 540px;">
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
                                                <div class="card mb-3" style="max-width: 540px;">
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
                                                <div class="card mb-3" style="max-width: 540px;">
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
                                                <div class="col-sm-6">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <h5 class="card-title">Technical Document</h5>
                                                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                                            <a href="#" class="btn btn-primary">Preview document</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <h5 class="card-title">Financial Documet</h5>
                                                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                                            <a href="#" class="btn btn-primary">Preview document</a>
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

    @endsection
