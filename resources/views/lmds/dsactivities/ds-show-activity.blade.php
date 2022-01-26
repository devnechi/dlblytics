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
        font-size: 12px;
        font-weight: 400;
    }
</style>
<div class="m-auto " style="padding-top:40px; background:rgb(45, 170, 166); height:280px ">
    <div class="cont text-light text-center mb-4">
        <a class="btn btn-outline-light mb-5">{{$activt->act_title}} : activt Overview</a>
        <h1 class="text-center "><strong>{{$activt->act_title}}<strong></h1>
        <p class=" text-light">
            <strong>title<strong>
        </p>
    </div>

</div>

<div class="container pl-2 mt-5">
    <p class="text-left mb-0"><strong> Description</strong> </p>
    <div class="  mb-5  border ">
        <p class="m-3">{{$activt->act_desc}}</p>
    </div>
    <div class=" mt-3 mb-3  border p-3 ">
        <div class="row">
            <div class="col-lg-12">
                <nav>
                    <div class="nav nav-tabs" id="proj-details-nav-tab" role="tablist">
                        <a class="nav-link active" id="nav-acts-tab" data-toggle="tab" href="#nav-acts" role="tab" aria-controls="nav-acts" aria-selected="true">Activity Overview</a>
                        <a class="nav-link" id="nav-sub-acts-tab" data-toggle="tab" href="#nav-sub-acts" role="tab" aria-controls="nav-sub-acts" aria-selected="false">Sub
                            Activities</a>

                        <a class="nav-link" id="nav-imprests-tab" data-toggle="tab" href="#nav-imprests" role="tab" aria-controls="nav-imprests" aria-selected="false">Imprests</a>

                        <a class="nav-link" id="nav-members-tab" data-toggle="tab" href="#nav-members" role="tab" aria-controls="nav-members" aria-selected="false">Members</a>



                    </div>
                </nav>
                <div class="tab-content" id="proj-details-Content">
                    <div class="tab-pane fade show active" id="nav-acts" role="tabpanel" aria-labelledby="nav-acts-tab">
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
                                                @foreach( $activt->act_objectives as $arriy)
                                                @foreach( explode(',', $arriy) as $fnd)
                                                <li class="list-group-item">{{$fnd}}</li>
                                                @endforeach
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
                                                    <h3 class="cardhd">{{$activt->total_act_cost}}</h3>
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
                                    <div class="card rounded">
                                        <div class="card-header d-flex justify-content-between">
                                            <p>Location</p>
                                            <i class="fas fa-map-pin fa-2x"></i>
                                        </div>
                                        <div class="card-content  ">
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item d-flex justify-content-between"> <span>Country:</span> <span>{{$activt->country}}</span> </li>
                                                <li class="list-group-item d-flex justify-content-between"> <span>Region:</span> <span>{{$activt->region}}</span></li>
                                                <li class="list-group-item d-flex justify-content-between"> <span>Venue:</span> <span>{{$activt->venue}}</span></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                                <div class=" col-md-6">
                                    <div class="card">
                                        <div class="card-header d-flex justify-content-between">
                                            <p>Pesonnel involved</p> <i class="fas fa-users fa-2x"></i>
                                        </div>
                                        <div class="card-body">
                                            <ul class="list-group list-group-flush">
                                                @foreach( $activt->pinvolved as $arriy)
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
                    <div class="tab-pane fade" id="nav-sub-acts" role="tabpanel" aria-labelledby="nav-sub-acts-tab">
                        <br />
                        <br />
                        <br />
                        @if(count($activt->subactivities)==0)
                        <div class="d-flex p-2 bg-teal justify-content-center">No Sub Activities Found!</div>
                        @else
                        <table class="table table-bordered table-hover">
                            <h5><strong>Project Sub Activities</strong></h5>
                            <br />

                            <thead>

                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Sub Activity Title</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Total Estimated cost</th>
                                    <th scope="col">Date created</th>
                                    <th scope="col"></th>
                                </tr>

                            </thead>
                            <tbody>
                                @php $n=1; @endphp
                                @foreach($activt->subactivities as $subacts)
                                <tr>
                                    <th scope="row">{{$n}}</th>
                                    <td>{{$subacts->subact_title}}</td>
                                    <td>on-going</td>
                                    <td>{{$subacts->total_subactivity_cost}}<span class="badge badge-success">TZS</span>
                                    </td>
                                    <td>{{$subacts->start_date}}</td>
                                    <td>
                                        <button type="button" class="btn btn-outline-success">view
                                            request</button>
                                    </td>
                                </tr>
                                @php $n++; @endphp
                                @endforeach
                            </tbody>
                        </table>
                        <br />



                        @endif
                    </div>
                    <div class="tab-pane fade" id="nav-imprests" role="tabpanel" aria-labelledby="nav-imprests-tab">
                        <br />
                        <br />
                        <br />
                        @if(count($activt->imprests)==0)
                        <div class="d-flex p-2 bg-teal justify-content-center">No Sub Activities Found!</div>
                        @else
                        <table class="table table-bordered table-hover">
                            <h5><strong>Activivty Imprests</strong></h5>
                            <br />

                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Imprest Title</th>
                                    <th scope="col">Created by</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Current Stage</th>
                                    <th scope="col">Total cost</th>
                                    <th scope="col">Date created</th>
                                    <th scope="col"></th>

                                </tr>
                            </thead>
                            <tbody>
                                @php $ni=1; @endphp
                                @foreach($activt->imprests as $imps)
                                <tr>
                                    <th scope="row">{{$ni}}</th>
                                    <td>{{$imps->imp_title}}</td>
                                    <td>{{$imps->user->fname}} {{$imps->user->lname}}</td>
                                    <td>{{$imps->status}}</td>
                                    <td>{{$imps->current_stage}}</td>
                                    <td>{{$imps->amount_rqst}}<span class="badge badge-success">TZS</span></td>
                                    <td>{{$imps->start_date}}</td>
                                    <td class=" p-2">
                                                            <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#rq{{$imps->id}}"> Actions
                                                            </button>
                                                            <!-- Modal -->
                                                            <div class="modal fade" id="rq{{$imps->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
                                                                                    <a href="{{ route('imprest.show',   $imps->id)}}" class="btn btn-outline-success d-flex justify-content-between" data-bs-toggle="tooltip" data-bs-placement="top" title="view project full details">
                                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                                                                            <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                                                                                            <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                                                                                        </svg>
                                                                                        <p class="m-auto">Imprest Details & retirements</p>
                                                                                    </a>

                                                                                </li>
                                                                                <li class="list-group-item">
                                                                                    <a href="{{ route('imprest.edit', $imps->id)}}" class="btn btn-outline-info btn-md d-flex justify-content-between" data-bs-toggle="tooltip" data-bs-placement="top" title="view update project details">
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
                                @php $ni++; @endphp
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

@foreach($activt->pinvolved as $arriy)

@foreach( explode(',', $arriy) as $pinvo)
                        <div class="row">
                            <div class="card mb-3" style=" ">
                                <div class="row no-gutters">
                                    <div class="col-md-4">

                                        <i class=" m-3 fas fa-user-alt fa-7x"></i>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title">{{$pinvo}}</h5>


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
@endforeach
@endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>






</div>

</div>
<script>
    function cp(e, param) {

        e.preventDefault();
        if (e.target.innerHTML === "View") {
            e.target.innerHTML = "Close";
        } else {
            e.target.innerHTML = "View";
        }
        $('#cp' + param).toggle().style.transition = "all 2s";


    }

    function getbalance(e, prm) {
        var ta = document.getElementById('ta' + prm);
        var ba = document.getElementById('ba' + prm);
        var bol = document.getElementById('b' + prm);

        ba.value = parseInt(ta.innerHTML) - parseInt(e.target.value);
        var newb = document.createElement('div');
        oldb = '<button type="button"  data-toggle="modal" data-target="#activt" class="btn btn-info">describe</button>';
        newb = '<button type="submit"   class="btn btn-info">Submit</button>';
        if (ba.value == 0) {
            bol.innerHTML = newb;
        } else {
            bol.innerHTML = oldb;
        }
    }
    const filepdf = document.getElementById('pdf-btn');

    filepdf.addEventListener('change', function(e) {
        made2(URL.createObjectURL(this.files[0]), this.files[0].name, e);
    });
    var i2 = 1;

    function made2(url, name, e) {
        var nam1 = name.toString().split(".pdf");
        var nam2 = nam1.toString().replace(/_/gi, ' ');
        var btnhtml2 =
            '<tr class="" id="' + name.slice(0, 4) + '">' +
            '<td>' + nam2 + '</td>' +
            '<td><button type="button" class="btn btn-outline-success m-1"' +
            'onclick="openpdf(\'' + url + '\')">Preview</button>' +
            '</tr>';
        var item = document.getElementById("pdfb");
        item.removeChild(item.childNodes[0]);
        $("#pdfb").append($(btnhtml2));
        i2++;
    };
</script>
@endsection
