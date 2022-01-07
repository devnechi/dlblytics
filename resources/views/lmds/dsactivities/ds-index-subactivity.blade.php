@extends('layouts.llmds')

@section('content')
<style>

</style>

<div class="container-fluid" id="vds-ds-pna-pills-sub-act">

    {{-- Sub   Activities --}}

    <div class="row">
        <div class="col-lg-12">
            <nav>
                <div class="nav nav-tabs" id="ds-pna-sub-activities-nav-tab" role="tablist">
                    <a class="nav-item nav-link active" id="ds-nav-pna-my-sub-activities-tab" data-toggle="tab" href="#vds-ds-subact-ed-pills-all-content" role="tab" aria-controls="nav-my-sub-activities" aria-selected="true">All Sub-Activities</a>
                    <a class="nav-item nav-link" id="ds-nav-pna-staff-sub-activities-tab" data-toggle="tab" href="#ds-ds-subact-ed-pills-going-content" role="tab" aria-controls="nav-staff-proj-content" aria-selected="false">On-going Sub-Activities</a>
                    <a class="nav-item nav-link" id="ds-pna-sub-activities-lm-response-tab" data-toggle="tab" href="#vds-ds-subact-ed-pills-complete-content" role="tab" aria-controls="nav-lm-response" aria-selected="false">Completed</a>
                </div>
            </nav>
            <div class="tab-content" id="ds-impr-nav-tabContent">
                <div class="tab-pane fade show active" id="vds-ds-subact-ed-pills-all-content" role="tabpanel" aria-labelledby="nav-ds-pna-my-sub-activities-content-tab">


                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-content table-responsive">
                                    <br />
                                    <table class="table table-bordered table-hover">
                                        <p class="d-flex justify-content-between"><strong>My Sub Activities that are on Administrative review</strong>

                                            {{-- <a class="btn btn-outline-info btn-lg" href="{{ route('ds-create-new-subactivity') }}" role="button"> create a new SubActivity</a> --}}
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
                                                    <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#subacti{{$myact->id}}"> Actions
                                                    </button>
                                                    <!-- Modal -->
                                                    <div class="modal fade" id="subacti{{$myact->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" data-proj="{{ $myact->id }}" data-user="{{ Auth::user()->user_id }}">
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
                                                                            <a href="{{ route('pillar-subactivity.show',  $myact->id)}}" class="btn btn-outline-success d-flex justify-content-between" data-bs-toggle="tooltip" data-bs-placement="top" title="view subactivity full details">
                                                                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                                                                    <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                                                                                    <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                                                                                </svg>
                                                                                <p class="m-auto">SubActivity Details</p>
                                                                            </a>

                                                                        </li>
                                                                        <li class="list-group-item">
                                                                            <a href="{{ route('pillar-subactivity.edit', $myact->id)}}" class="btn btn-outline-info btn-md d-flex justify-content-between" data-bs-toggle="tooltip" data-bs-placement="top" title="view update subactivity details">
                                                                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-arrow-up-circle" viewBox="0 0 16 16">
                                                                                    <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-7.5 3.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V11.5z" />
                                                                                </svg>
                                                                                <p class="m-auto">Edit SubActivity </p>
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
                                </div>
                            </div>
                            <!-- end of SECOND column -->
                        </div>

                    </div>
                </div>
                <div class="tab-pane fade " id="ds-ds-subact-ed-pills-going-content" role="tabpanel" aria-labelledby="nav-ds-pna-my-sub-activities-content-tab">


                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-content table-responsive">
                                    <br />
                                    <table class="table table-bordered table-hover">
                                        <p class="d-flex justify-content-between"><strong>My SubActivities that are on Administrative review</strong>

                                            <a class="btn btn-outline-info btn-lg" href="{{ route('ds-create-new-subactivity') }}" role="button"> create a new SubActivity</a>
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
                                                    <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="subat{{$myact->id}}"> Actions
                                                    </button>
                                                    <!-- Modal -->
                                                    <div class="modal fade" id="subat{{$myact->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
                                                                            <a href="{{ route('ds-create-new-subactivity', $myact->id) }}" class="btn  btn-outline-secondary d-flex justify-content-between">
                                                                                <i class="fas fa-chalkboard fa-lg mt-auto mb-auto"></i>
                                                                                <p class="m-auto"> New Subactivity</p>
                                                                            </a>
                                                                        </li>
                                                                        <li class="list-group-item">
                                                                            <a href="{{ route('pillar-subactivity.show',   $myact->id)}}" class="btn btn-outline-success d-flex justify-content-between" data-bs-toggle="tooltip" data-bs-placement="top" title="view project full details">
                                                                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                                                                    <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                                                                                    <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                                                                                </svg>
                                                                                <p class="m-auto">SubActivity Details</p>
                                                                            </a>

                                                                        </li>
                                                                        <li class="list-group-item">
                                                                            <a href="{{ route('pillar-subactivity.edit', $myact->id)}}" class="btn btn-outline-info btn-md d-flex justify-content-between" data-bs-toggle="tooltip" data-bs-placement="top" title="view update project details">
                                                                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-arrow-up-circle" viewBox="0 0 16 16">
                                                                                    <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-7.5 3.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V11.5z" />
                                                                                </svg>
                                                                                <p class="m-auto">Edit SubActivity </p>
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
                                </div>
                            </div>
                            <!-- end of SECOND column -->
                        </div>

                    </div>
                </div>
                <div class="tab-pane fade " id="vds-ds-subact-ed-pills-complete-content" role="tabpanel" aria-labelledby="nav-ds-pna-my-sub-activities-content-tab">


                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-content table-responsive">
                                    <br />
                                    <table class="table table-bordered table-hover">
                                        <p class="d-flex justify-content-between"><strong>My SubActivities that are on Administrative review</strong>

                                            <a class="btn btn-outline-info btn-lg" href="{{ route('ds-create-new-subactivity') }}" role="button"> create a new SubActivity</a>
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
                                                                            <a href="{{ route('pillar-subactivity.show',$myact->id)}}" class="btn btn-outline-success d-flex justify-content-between" data-bs-toggle="tooltip" data-bs-placement="top" title="view project full details">
                                                                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                                                                    <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                                                                                    <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                                                                                </svg>
                                                                                <p class="m-auto">SubActivity Details</p>
                                                                            </a>

                                                                        </li>
                                                                        <li class="list-group-item">
                                                                            <a href="{{ route('pillar-subactivity.edit',$myact->id)}}" class="btn btn-outline-info btn-md d-flex justify-content-between" data-bs-toggle="tooltip" data-bs-placement="top" title="view update project details">
                                                                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-arrow-up-circle" viewBox="0 0 16 16">
                                                                                    <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-7.5 3.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V11.5z" />
                                                                                </svg>
                                                                                <p class="m-auto">Edit SubActivity </p>
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
