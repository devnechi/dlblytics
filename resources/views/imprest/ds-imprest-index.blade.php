@extends('layouts.llmds')

@section('content')
<style>
    .malabel,
    .filabel {
        background-color: #17a2b8;
        color: white;
        padding: 0.5rem;
        font-family: sans-serif;
        border-radius: 0.3rem;
        cursor: pointer;
    }
</style>
<!--  start of imprest-retirements data-->
<div class="container-fluid" id="data-science-request-md">
    <!-- line chart -->
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#dataScienceRequestTypeModal">
        create a new request
    </button>
    <br />
    <br />



    <div class="row">
        <div class="col-lg-12">

            <nav>
                <div class="nav nav-tabs" id="dsreq-nav-tab" role="tablist">
                    <a class="nav-item nav-link active" id="nav-my-requests-tab" data-toggle="tab" href="#dsreq-nav-my-requests" role="tab" aria-controls="nav-my-requests" aria-selected="true">My
                        Requests</a>
                    <a class="nav-item nav-link" id="nav-staff-requests-tab" data-toggle="tab" href="#dsreq-nav-staff-requests" role="tab" aria-controls="nav-staff-requests" aria-selected="false">Staff Requests</a>
                    <a class="nav-item nav-link" id="nav-res-lm-requests-tab" data-toggle="tab" href="#dsreq-nav-res-lm-requests" role="tab" aria-controls="nav-contact" aria-selected="false">Response from Line Manager</a>
                </div>
            </nav>
            <div class="tab-content" id="dsreq-tabContent">
                <div class="tab-pane fade active show  " id="dsreq-nav-my-requests" role="tabpanel" aria-labelledby="nav-home-tab">
                    {{-- my ds requests --}}
                    <br />
                    <br />
                    <div class="row">
                        <div class="col-md-2">
                            <div class="nav flex-column nav-pills" id="vdsreqs-pills-tab" role="tablist" aria-orientation="vertical">
                                <a class="nav-link active" id="vdsreqs-pills-all-pillar-request-tab" data-toggle="pill" href="#vdsreqs-pills-all-pillar-request" role="tab" aria-controls="vdsreqs-pills-all-pillar-request" aria-selected="true">All
                                    Pillar requests</a>
                                <a class="nav-link " id="vdsreqs-pills-my-req-onreview-tab" data-toggle="pill" href="#vdsreqs-pillsmy-req-onreview" role="tab" aria-controls="vdsreqs-pills-my-req-onreview" aria-selected="false">My reviewed requests</a>
                                <a class="nav-link" id="vdsreqs-pills-my-approved-req-tab" data-toggle="pill" href="#vdsreqs-pills-my-approved-req" role="tab" aria-controls="vdsreqs-pills-my-approved-req" aria-selected="false">My Approved
                                    request</a>
                                <a class="nav-link" id="vdsreqs-pills-my-req-retirements-tab" data-toggle="pill" href="#vdsreqs-pills-my-req-retirements" role="tab" aria-controls="vdsreqs-pills-my-req-retirements" aria-selected="false">My
                                    Requests retirements</a>
                                <a class="nav-link" id="vdsreqs-pills-all-my-req-tab" data-toggle="pill" href="#vdsreqs-pills-all-my-req" role="tab" aria-controls="vdsreqs-pills-all-my-req" aria-selected="false">All My
                                    requests</a>

                            </div>
                        </div>
                        <div class="col-md-10">
                            <div class="tab-content" id="v-pills-tabContent">
                                <div class="tab-pane fade active show" id="vdsreqs-pills-all-pillar-request" role="tabpanel" aria-labelledby="vdsreqs-pills-settings-tab">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <table class="table table-bordered table-hover">
                                                <p>All created <strong>Requests</strong> in the Pillar</p>
                                                <thead>
                                                    <tr>
                                                        <th scope="col">#</th>
                                                        <th scope="col">Requested by</th>
                                                        <th scope="col-md-4">Title</th>
                                                                                                               <th scope="col">Under Project</th>
                                                        <th scope="col"># of approvals</th>
                                                        <th scope="col">Total Cost</th>
                                                        <th scope="col">Date created</th>

                                                        <th scope="col"></th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @php $n=1;@endphp
                                                    @foreach($imprests as $imp)
                                                    <tr>
                                                        <th scope="row">{{$n}}.</th>
                                                        <td>{{$imp->requested_by}}</td>
                                                        <td>{{$imp->imp_title}}</td>
                                                        <td>{{empty($imp->project->project_title)?'':$imp->project->project_title}}</td>
                                                        <td>0</td>
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
                                                                            <a href="{{ route('imprest.show',   $imp->id)}}" class="btn btn-outline-success d-flex justify-content-between" data-bs-toggle="tooltip" data-bs-placement="top" title="view project full details">
                                                                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                                                                    <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                                                                                    <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                                                                                </svg>
                                                                                <p class="m-auto">Imprest Details & retirements</p>
                                                                            </a>

                                                                        </li>
                                                                        <li class="list-group-item">
                                                                            <a href="{{ route('imprest.edit', $imp->id)}}" class="btn btn-outline-info btn-md d-flex justify-content-between" data-bs-toggle="tooltip" data-bs-placement="top" title="view update project details">
                                                                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-arrow-up-circle" viewBox="0 0 16 16">
                                                                                    <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-7.5 3.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V11.5z" />
                                                                                </svg>
                                                                                <p class="m-auto">Edit Imprest </p>
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

                                            <!-- end of SECOND column -->
                                        </div>

                                    </div>
                                </div>
                                <div class="tab-pane fade " id="vdsreqs-pillsmy-req-onreview" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                    {{-- My reviewed requests --}}
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <table class="table table-bordered table-hover">
                                                <p>My requests that are on <strong>review</strong></p>
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
                                            <!-- end of SECOND column -->
                                        </div>

                                    </div>
                                </div>
                                <div class="tab-pane fade" id="vdsreqs-pills-my-approved-req" role="tabpanel" aria-labelledby="vdsreqs-pills-profile-tab">

                                    {{-- my approved requests --}}
                                    <div class="row">
                                        <div class="col-lg-12">

                                            <table class="table table-bordered table-hover">
                                                <p>My requests that have been approved </p>
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
                                                        <td>2</td>
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
                                                        <td>4</td>
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
                                                        <td>1</td>
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

                                            <!-- end of SECOND column -->
                                        </div>

                                    </div>

                                </div>
                                <div class="tab-pane fade" id="vdsreqs-pills-my-req-retirements" role="tabpanel" aria-labelledby="vdsreqs-pills-messages-tab">
                                    {{-- my request retirements --}}
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <table class="table table-bordered table-hover">
                                                <p>My request <strong>Retirements</strong></p>
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
                                                        <td>4</td>
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
                                                        <td>4</td>
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
                                                        <td>4</td>
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

                                            <!-- end of SECOND column -->
                                        </div>

                                    </div>
                                </div>
                                <div class="tab-pane fade" id="vdsreqs-pills-all-my-req" role="tabpanel" aria-labelledby="vdsreqs-pills-settings-tab">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <table class="table table-bordered table-hover">
                                                <p>All my created <strong>Requests</strong></p>
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

                                            <!-- end of SECOND column -->
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="dsreq-nav-staff-requests" role="tabpanel" aria-labelledby="nav-profile-tab">
                    {{-- my ds requests --}}
                    <br />
                    <br />
                    <div class="row">
                        <div class="col-md-2">
                            <div class="nav flex-column nav-pills" id="vds-staff-reqs-pills-tab" role="tablist" aria-orientation="vertical">
                                <a class="nav-link active" id="vds-staff-reqs-pills-need-review-tab" data-toggle="pill" href="#vds-staff-reqs-pills-need-review" role="tab" aria-controls="vds-staff-reqs-pills-need-review" aria-selected="true">Request need
                                    your review</a>
                                <a class="nav-link" id="vds-staff-reqs-pills-staff-req-onreview-tab" data-toggle="pill" href="#vds-staff-reqs-pills-staff-req-onreview" role="tab" aria-controls="vds-staff-reqs-pills-home" aria-selected="true">Staff request on
                                    review</a>
                                <a class="nav-link" id="vds-staff-reqs-pills-approved-reqs-tab" data-toggle="pill" href="#vds-staff-reqs-pills-approved-reqs-content" role="tab" aria-controls="vds-staff-reqs-pills-approved-reqs" aria-selected="false">Staff
                                    Approved requests</a>
                                <a class="nav-link" id="vds-staff-reqs-pills-staff-retirements-tab" data-toggle="pill" href="#vds-staff-reqs-pills-staff-retirements" role="tab" aria-controls="vds-staff-reqs-pills-staff-retirements-content" aria-selected="false">Staff
                                    request retirements</a>
                                <a class="nav-link" id="vds-staff-reqs-pills-all-req-request-tab" data-toggle="pill" href="#vds-staff-reqs-pills-all-req-request-content" role="tab" aria-controls="vds-staff-reqs-pills-all-req-request" aria-selected="false">All
                                    Staff request</a>
                            </div>
                        </div>
                        <div class="col-md-10">

                            <div class="tab-content" id="vds-staff-pills-tabContent">
                                <div class="tab-pane fade show active" id="vds-staff-reqs-pills-need-review" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                    {{-- staff requests tab -reviewed--}}

                                    <br />
                                    <table class="table table-bordered table-hover">
                                        <p>Requests that need your <strong>Review</strong></p>
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
                                                <td>2</td>
                                                <td>2,300,000 <span class="badge badge-success">TZS</span></td>
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
                                                <td>4</td>
                                                <td>6,600,000 <span class="badge badge-success">TZS</span></td>
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
                                                <td>1</td>
                                                <td>8,700,000 <span class="badge badge-success">TZS</span></td>
                                                <td>2019-09-11</td>
                                                <td>
                                                    <button type="button" class="btn btn-outline-success">view
                                                        request</button>
                                                </td>
                                            </tr>
                                        </tbody>

                                    </table>
                                    <br />

                                </div>

                                <div class="tab-pane fade" id="vds-staff-reqs-pills-staff-req-onreview" role="tabpanel" aria-labelledby="vdsreqs-pills-profile-tab">

                                    <br />
                                    <table class="table table-bordered table-hover">
                                        <p>Staff requests <strong>On Review</strong></p>
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
                                                <td>2</td>
                                                <td>2,300,000 <span class="badge badge-success">TZS</span></td>
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
                                                <td>4</td>
                                                <td>6,600,000 <span class="badge badge-success">TZS</span></td>
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
                                                <td>1</td>
                                                <td>8,700,000 <span class="badge badge-success">TZS</span></td>
                                                <td>2019-09-11</td>
                                                <td>
                                                    <button type="button" class="btn btn-outline-success">view
                                                        request</button>
                                                </td>
                                            </tr>
                                        </tbody>

                                    </table>
                                    <br />
                                </div>
                                <div class="tab-pane fade" id="vds-staff-reqs-pills-approved-reqs-content" role="tabpanel" aria-labelledby="vdsreqs-pills-profile-tab">

                                    <br />
                                    <table class="table table-bordered table-hover">
                                        <p>Staff request Approved by Adminstration <strong></strong></p>
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
                                                <td>2</td>
                                                <td>2,300,000 <span class="badge badge-success">TZS</span></td>
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
                                                <td>4</td>
                                                <td>6,600,000 <span class="badge badge-success">TZS</span></td>
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
                                                <td>1</td>
                                                <td>8,700,000 <span class="badge badge-success">TZS</span></td>
                                                <td>2019-09-11</td>
                                                <td>
                                                    <button type="button" class="btn btn-outline-success">view
                                                        request</button>
                                                </td>
                                            </tr>
                                        </tbody>

                                    </table>
                                    <br />
                                </div>
                                <div class="tab-pane fade" id="vds-staff-reqs-pills-staff-retirements" role="tabpanel" aria-labelledby="vdsreqs-pills-messages-tab">

                                    <br />
                                    <table class="table table-bordered table-hover">
                                        <p>Staff Request <strong>Retirements</strong></p>
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
                                                <td>2</td>
                                                <td>2,300,000 <span class="badge badge-success">TZS</span></td>
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
                                                <td>4</td>
                                                <td>6,600,000 <span class="badge badge-success">TZS</span></td>
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
                                                <td>1</td>
                                                <td>8,700,000 <span class="badge badge-success">TZS</span></td>
                                                <td>2019-09-11</td>
                                                <td>
                                                    <button type="button" class="btn btn-outline-success">view
                                                        request</button>
                                                </td>
                                            </tr>
                                        </tbody>

                                    </table>
                                    <br />
                                </div>
                                <div class="tab-pane fade" id="vds-staff-reqs-pills-all-req-request-content" role="tabpanel" aria-labelledby="vdsreqs-pills-settings-tab">

                                    <br />
                                    <table class="table table-bordered table-hover">
                                        <p>All request from <strong>Staff</strong></p>
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
                                                <td>2</td>
                                                <td>2,300,000 <span class="badge badge-success">TZS</span></td>
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
                                                <td>4</td>
                                                <td>6,600,000 <span class="badge badge-success">TZS</span></td>
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
                                                <td>1</td>
                                                <td>8,700,000 <span class="badge badge-success">TZS</span></td>
                                                <td>2019-09-11</td>
                                                <td>
                                                    <button type="button" class="btn btn-outline-success">view
                                                        request</button>
                                                </td>
                                            </tr>
                                        </tbody>

                                    </table>
                                    <br />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="dsreq-nav-res-lm-requests" role="tabpanel" aria-labelledby="nav-contact-tab">
                    {{-- my ds requests --}}
                    <br />
                    <br />
                    <div class="row">
                        <div class="col-md-2">
                            <div class="nav flex-column nav-pills" id="vds-ed-reqs-pills-tab" role="tablist" aria-orientation="vertical">
                                <a class="nav-link active" id="vds-ed-reqs-pills-home-tab" data-toggle="pill" href="#vds-ed-reqs-pills-home" role="tab" aria-controls="vds-ed-reqs-pills-home" aria-selected="true">Reviewed</a>
                                <a class="nav-link" id="vds-ed-reqs-pills-profile-tab" data-toggle="pill" href="#vds-ed-reqs-pills-profile" role="tab" aria-controls="vds-ed-reqs-pills-profile" aria-selected="false">Approved</a>
                                <a class="nav-link" id="vds-ed-reqs-pills-messages-tab" data-toggle="pill" href="#vds-ed-reqs-pills-messages" role="tab" aria-controls="vds-ed-reqs-pills-messages" aria-selected="false">Denied</a>
                                <a class="nav-link" id="vds-ed-reqs-pills-settings-tab" data-toggle="pill" href="#vds-ed-reqs-pills-settings" role="tab" aria-controls="vds-ed-reqs-pills-settings" aria-selected="false">All</a>
                            </div>
                        </div>
                        <div class="col-md-10">

                            <div class="tab-content" id="vds-ed-pills-tabContent">
                                <div class="tab-pane fade show active" id="vds-ed-reqs-pills-home" role="tabpanel" aria-labelledby="vds-ed-reqs-pills-home-tab">

                                    <br />
                                    <table class="table table-bordered table-hover">
                                        <p>My request on review by <strong>Line Manager</strong></p>
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
                                                <td>2</td>
                                                <td>2,300,000 <span class="badge badge-success">TZS</span></td>
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
                                                <td>4</td>
                                                <td>6,600,000 <span class="badge badge-success">TZS</span></td>
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
                                                <td>1</td>
                                                <td>8,700,000 <span class="badge badge-success">TZS</span></td>
                                                <td>2019-09-11</td>
                                                <td>
                                                    <button type="button" class="btn btn-outline-success">view
                                                        request</button>
                                                </td>
                                            </tr>
                                        </tbody>

                                    </table>
                                    <br />
                                </div>
                                <div class="tab-pane fade" id="vds-ed-reqs-pills-profile" role="tabpanel" aria-labelledby="vdsreqs-pills-profile-tab">

                                    <br />
                                    <table class="table table-bordered table-hover">
                                        <p>My Approved request by <strong>Line Manager</strong></p>
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
                                                <td>2</td>
                                                <td>2,300,000 <span class="badge badge-success">TZS</span></td>
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
                                                <td>4</td>
                                                <td>6,600,000 <span class="badge badge-success">TZS</span></td>
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
                                                <td>1</td>
                                                <td>8,700,000 <span class="badge badge-success">TZS</span></td>
                                                <td>2019-09-11</td>
                                                <td>
                                                    <button type="button" class="btn btn-outline-success">view
                                                        request</button>
                                                </td>
                                            </tr>
                                        </tbody>

                                    </table>
                                    <br />
                                </div>
                                <div class="tab-pane fade" id="vds-ed-reqs-pills-messages" role="tabpanel" aria-labelledby="vdsreqs-pills-messages-tab">

                                    <br />
                                    <table class="table table-bordered table-hover">
                                        <p> <strong>Denied</strong> requests</p>
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
                                                <td>2</td>
                                                <td>2,300,000 <span class="badge badge-success">TZS</span></td>
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
                                                <td>4</td>
                                                <td>6,600,000 <span class="badge badge-success">TZS</span></td>
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
                                                <td>1</td>
                                                <td>8,700,000 <span class="badge badge-success">TZS</span></td>
                                                <td>2019-09-11</td>
                                                <td>
                                                    <button type="button" class="btn btn-outline-success">view
                                                        request</button>
                                                </td>
                                            </tr>
                                        </tbody>

                                    </table>
                                    <br />
                                </div>
                                <div class="tab-pane fade" id="vds-ed-reqs-pills-settings" role="tabpanel" aria-labelledby="vdsreqs-pills-settings-tab">

                                    <br />
                                    <table class="table table-bordered table-hover">
                                        <p>All my request at <strong>Line Manager</strong> level</p>
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
                                                <td>2</td>
                                                <td>2,300,000 <span class="badge badge-success">TZS</span></td>
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
                                                <td>4</td>
                                                <td>6,600,000 <span class="badge badge-success">TZS</span></td>
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
                                                <td>1</td>
                                                <td>8,700,000 <span class="badge badge-success">TZS</span></td>
                                                <td>2019-09-11</td>
                                                <td>
                                                    <button type="button" class="btn btn-outline-success">view
                                                        request</button>
                                                </td>
                                            </tr>
                                        </tbody>

                                    </table>
                                    <br />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
       <!-- Modal -->
       <div class="modal fade" id="dataScienceRequestTypeModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
                            <a href="{{ route('create-new-training-advance-request') }}" class="list-group-item list-group-item-action">
                                Training Advance Request
                            </a>

                        </li>
                        <li class="list-group-item">
                            <a href="{{ route('create-new-training-advance-request') }}" class="list-group-item list-group-item-action">
                                Travel Advance request
                            </a>

                        <li class="list-group-item">
                            <a href="{{ route('create-allowance-request') }}" class="list-group-item list-group-item-action">
                                Allowance Request
                            </a>
                        </li>
                        <li class="list-group-item">
                            <a href="{{ route('create-new-per-diem-claim') }}" class="list-group-item list-group-item-action">
                                Per Diem claim
                            </a>
                        </li>
                        <li class="list-group-item">
                            <a href="{{ route('create-new-petty-cash') }}" class="list-group-item list-group-item-action">
                                Petty Cash
                            </a>
                        </li>
                        <li class="list-group-item">
                            <a href="{{ route('create-payment-requisition') }}" class="list-group-item list-group-item-action">
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
</div>

</div>
@endsection
