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




    <div class="row">
        <div class="col-lg-12">

            <nav>
                <div class="nav nav-tabs" id="dsreq-nav-tab" role="tablist">

                    <a class="nav-item nav-link" id="nav-res-lm-requests-tab" data-toggle="tab" href="#dsreq-nav-res-lm-requests" role="tab" aria-controls="nav-contact" aria-selected="false">Response from Line Manager</a>
                </div>
            </nav>
            <div class="tab-content" id="dsreq-tabContent">
                <div class="tab-pane fade active show  " id="dsreq-nav-my-requests" role="tabpanel" aria-labelledby="nav-home-tab">
                    {{-- my ds Imprests --}}
                    <br />
                    <br />
                    <div class="row">
                        <div class="col-md-2">
                            <div class="nav flex-column nav-pills" id="vdsreqs-pills-tab" role="tablist" aria-orientation="vertical">
                                <a class="nav-link active" id="vdsreqs-pills-all-pillar-request-tab" data-toggle="pill" href="#vdsreqs-pills-all-pillar-request" role="tab" aria-controls="vdsreqs-pills-all-pillar-request" aria-selected="true">All


                                    <a class="nav-link" id="submittedimprest-tab" data-toggle="pill" href="#submittedimprest" role="tab" aria-controls="submittedimprest" aria-selected="false">Submitted Imprest</a>
                                    <a class="nav-link" id="prossessingimprest-tab" data-toggle="pill" href="#prossessingimprest" role="tab" aria-controls="prossessingimprest" aria-selected="false">Prossessing Imprest</a>
                            </div>
                        </div>
                        <div class="col-md-10">
                            <div class="tab-content" id="v-pills-tabContent">
                                <div class="tab-pane fade active show" id="vdsreqs-pills-all-pillar-request" role="tabpanel" aria-labelledby="vdsreqs-pills-settings-tab">
                                    <div class="row">
                                        <div class="col-lg-12">

                                            @if(count($imprests)==0)
                                            <div class="d-flex p-2 justify-content-center">No Record Found!</div>
                                            @else

                                            <table class="table table-bordered table-hover">
                                                <p>All created <strong>Imprests</strong> in the Pillar</p>
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

                                                    @foreach($imprests as $imp)
                                                    <tr>
                                                        <th scope="row">{{$n}}.</th>
                                                        <td>{{$imp->requestedby->fname}}</td>
                                                        <td>{{$imp->imp_title}}</td>
                                                        <td>{{$imp->current_stage}}</td>
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
                                                        <a class="page-link" href="{{ $imprests->previousPageUrl() }}">
                                                            <span aria-hidden="true">&laquo;</span>
                                                            <span class="sr-only">Previous</span>
                                                        </a>
                                                    </li>

                                                    @for ($i = 1; $i <= $imprests->lastPage(); $i++)

                                                        <li class="page-item {{$imprests->currentPage() == $i ? 'active' : ''}}">
                                                            <a class="page-link" href="{{ $imprests->url($i) }}">{{$i}}
                                                            </a>
                                                        </li>
                                                        @endfor

                                                        <li class="page-item">
                                                            <a class="page-link" href="{{ $imprests->nextPageUrl() }}">Next
                                                            </a>
                                                        </li>
                                                </ul>
                                            </nav>
                                            @endif
                                            <!-- end of SECOND column -->
                                        </div>

                                    </div>
                                </div>

                                <div class="tab-pane fade" id="vdsreqs-pills-my-approved-req" role="tabpanel" aria-labelledby="vdsreqs-pills-profile-tab">

                                    {{-- my approved Imprests --}}
                                    <div class="row">
                                        <div class="col-lg-12">
                                            @if(count($imprestapprv)==0)
                                            <div class="d-flex p-2 justify-content-center">No Record Found!</div>
                                            @else
                                            <table class="table table-bordered table-hover">
                                                <p>All created <strong>imprestapprv</strong> in the Pillar</p>
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

                                                    @foreach($imprestapprv as $imp)
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

                                            @endif
                                            <!-- end of SECOND column -->
                                        </div>

                                    </div>

                                </div>
                                <div class="tab-pane fade" id="vdsreqs-pills-my-req-retirements" role="tabpanel" aria-labelledby="vdsreqs-pills-messages-tab">
                                    {{-- my Imprest retirements --}}
                                    <div class="row">
                                        <div class="col-lg-12">
                                            @if(count($imprests)==0)
                                            <div class="d-flex p-2 justify-content-center">No Record Found!</div>
                                            @else
                                            <table class="table table-bordered table-hover">
                                                <p>All created <strong>Imprests</strong> in the Pillar</p>
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

                                                    @foreach($imprests as $imp)
                                                    <tr>
                                                        <th scope="row">{{$n}}.</th>
                                                        <td>{{$imp->requestedby->fname}}</td>
                                                        <td>{{$imp->imp_title}}</td>
                                                        <td>{{$imp->current_stage}}</td>
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
                                                        <a class="page-link" href="{{ $imprests->previousPageUrl() }}">
                                                            <span aria-hidden="true">&laquo;</span>
                                                            <span class="sr-only">Previous</span>
                                                        </a>
                                                    </li>

                                                    @for ($i = 1; $i <= $imprests->lastPage(); $i++)

                                                        <li class="page-item {{$imprests->currentPage() == $i ? 'active' : ''}}">
                                                            <a class="page-link" href="{{ $imprests->url($i) }}">{{$i}}
                                                            </a>
                                                        </li>
                                                        @endfor

                                                        <li class="page-item">
                                                            <a class="page-link" href="{{ $imprests->nextPageUrl() }}">Next
                                                            </a>
                                                        </li>
                                                </ul>
                                            </nav>
                                            @endif
                                            <!-- end of SECOND column -->
                                        </div>

                                    </div>
                                </div>

                                <div class="tab-pane fade" id="prossessingimprest" role="tabpanel" aria-labelledby="vdsreqs-pills-messages-tab">
                                    {{-- my Imprest retirements --}}
                                    <div class="row">
                                        <div class="col-lg-12">

                                            @if(count($imprestprossessing)==0)
                                            <div class="d-flex p-2 justify-content-center">No Record Found!</div>
                                            @else
                                            <table class="table table-bordered table-hover">
                                                <p>All created <strong>imprestprossessing</strong> in the Pillar</p>
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

                                                    @foreach($imprestprossessing as $imp)
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
                                                        <a class="page-link" href="{{ $imprests->previousPageUrl() }}">
                                                            <span aria-hidden="true">&laquo;</span>
                                                            <span class="sr-only">Previous</span>
                                                        </a>
                                                    </li>

                                                    @for ($i = 1; $i <= $imprests->lastPage(); $i++)

                                                        <li class="page-item {{$imprests->currentPage() == $i ? 'active' : ''}}">
                                                            <a class="page-link" href="{{ $imprests->url($i) }}">{{$i}}
                                                            </a>
                                                        </li>
                                                        @endfor

                                                        <li class="page-item">
                                                            <a class="page-link" href="{{ $imprests->nextPageUrl() }}">Next
                                                            </a>
                                                        </li>
                                                </ul>
                                            </nav>
                                            @endif
                                            <!-- end of SECOND column -->
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="submittedimprest" role="tabpanel" aria-labelledby="vdsreqs-pills-messages-tab">
                                    {{-- my Imprest retirements --}}
                                    <div class="row">
                                        <div class="col-lg-12">
                                            @if(count($imprestsubmited)==0)
                                            <div class="d-flex p-2 justify-content-center">No Record Found!</div>
                                            @else
                                            <table class="table table-bordered table-hover">
                                                <p>All created <strong>imprestsubmitted</strong> in the Pillar</p>
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

                                                    @foreach($imprestsubmitted as $imp)
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
                                                        <a class="page-link" href="{{ $imprests->previousPageUrl() }}">
                                                            <span aria-hidden="true">&laquo;</span>
                                                            <span class="sr-only">Previous</span>
                                                        </a>
                                                    </li>

                                                    @for ($i = 1; $i <= $imprests->lastPage(); $i++)

                                                        <li class="page-item {{$imprests->currentPage() == $i ? 'active' : ''}}">
                                                            <a class="page-link" href="{{ $imprests->url($i) }}">{{$i}}
                                                            </a>
                                                        </li>
                                                        @endfor

                                                        <li class="page-item">
                                                            <a class="page-link" href="{{ $imprests->nextPageUrl() }}">Next
                                                            </a>
                                                        </li>
                                                </ul>
                                            </nav>
                                            @endif
                                            <!-- end of SECOND column -->
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="dsreq-nav-res-lm-requests" role="tabpanel" aria-labelledby="nav-contact-tab">
                    {{-- my ds Imprests --}}
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
                                        <p>My Imprest on review by <strong>Line Manager</strong></p>
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Requested by</th>
                                                <th scope="col-md-4">Title</th>
                                                <th scope="col">Imprest Type</th>
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
                                                        Imprest</button>
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
                                                        Imprest</button>
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
                                                        Imprest</button>
                                                </td>
                                            </tr>
                                        </tbody>

                                    </table>
                                    <br />
                                </div>
                                <div class="tab-pane fade" id="vds-ed-reqs-pills-profile" role="tabpanel" aria-labelledby="vdsreqs-pills-profile-tab">

                                    <br />
                                    <table class="table table-bordered table-hover">
                                        <p>My Approved Imprest by <strong>Line Manager</strong></p>
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Requested by</th>
                                                <th scope="col-md-4">Title</th>
                                                <th scope="col">Imprest Type</th>
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
                                                        Imprest</button>
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
                                                        Imprest</button>
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
                                                        Imprest</button>
                                                </td>
                                            </tr>
                                        </tbody>

                                    </table>
                                    <br />
                                </div>
                                <div class="tab-pane fade" id="vds-ed-reqs-pills-messages" role="tabpanel" aria-labelledby="vdsreqs-pills-messages-tab">

                                    <br />
                                    <table class="table table-bordered table-hover">
                                        <p> <strong>Denied</strong> Imprests</p>
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Requested by</th>
                                                <th scope="col-md-4">Title</th>
                                                <th scope="col">Imprest Type</th>
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
                                                        Imprest</button>
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
                                                        Imprest</button>
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
                                                        Imprest</button>
                                                </td>
                                            </tr>
                                        </tbody>

                                    </table>
                                    <br />
                                </div>
                                <div class="tab-pane fade" id="vds-ed-reqs-pills-settings" role="tabpanel" aria-labelledby="vdsreqs-pills-settings-tab">

                                    <br />
                                    <table class="table table-bordered table-hover">
                                        <p>All my Imprest at <strong>Line Manager</strong> level</p>
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Requested by</th>
                                                <th scope="col-md-4">Title</th>
                                                <th scope="col">Imprest Type</th>
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
                                                        Imprest</button>
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
                                                        Imprest</button>
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
                                                        Imprest</button>
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
                    <h5 class="modal-title" id="exampleModalLongTitle">Select Type of Imprest</h5>
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
