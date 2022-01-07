@extends('layouts.lfinanceadmin')

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

    .ow {
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }
</style>
<div class="m-auto " style="padding-top:40px; background:rgb(45, 170, 166); height:280px ">
    <div class="cont text-light text-center mb-4">
        <a class="btn btn-outline-light mb-5">{{$imprest->imp_title}} : Imprest Overview</a>
        <h1 class="text-center "><strong>{{$imprest->imp_title}}<strong></h1>
        <p class=" text-light">
            <strong>title<strong>
        </p>
    </div>

</div>

<div class="container pl-2 mt-5">
    <p class="text-left mb-0"><strong> Description</strong> </p>
    <div class="  mb-5  border ">
        <p class="m-3">{{$imprest->purpose}}</p>
    </div>
    <div class=" mt-3 mb-3  border p-3 ">

        <h4 class="m-1"> <strong>Retirements </strong></h4>
        <div class="d-flex justify-content-between">
            <p>
                <span>{{count($imprest->imp_activities)}} Retirement </span>
            </P>
            <a href="\\"><strong>Total Amount: </strong>{{$imprest->amount_rqst}}</a>
        </div>
    </div>

    <div class="coursevida">
        <div class="row">
            <div class="col-lg-12">
                @php


                @endphp
                @if(count($imprest->imp_activities)==0)
                <div class="d-flex p-2 justify-content-center">No Record Found!</div>
                @else
                <table class="table table-bordered table-hover">
                    <p>All created <strong>imprest</strong> in Data science Pillar</p>
                    <thead>
                        <tr>
                            <th scope="col">#</th>

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

                        @foreach($imprest->imp_activities as $ret)
                        <tr>
                            <th scope="row">{{$n}}.</th>

                            <td>{{$ret->imp_act_name}}</td>
                            <td> on review finance</td>
                            <td></td>
                            <td>{{$ret->total_cost}}</td>
                            <td>{{$ret->created_at->format('Y-m-d') }}</span>
                            </td>

                            <td class=" p-2">
                                <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#rq{{$ret->id}}"> Actions
                                </button>
                                <!-- Modal -->
                                <div class="modal fade" id="rq{{$ret->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
                                                        <a class="btn btn-outline-info btn-md d-flex justify-content-between" data-toggle="modal" data-dismiss="modal" data-target="#rev{{$ret->id}}">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-arrow-up-circle" viewBox="0 0 16 16">
                                                                <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-7.5 3.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V11.5z" />
                                                            </svg>
                                                            <p class="m-auto">Review Retirements </p>
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
                                <div class="modal fade" id="rev{{$ret->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog " role="document">
                                        <form action="{{route('retireview')}}" method="post">
                                            @csrf
                                            <div class="modal-content">
                                                <div class="modal-header text-light bg-primary">
                                                    <h6>Retire Review: {{$ret->imp_act_name}} </h6>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <input type="hidden" value="{{$imprest  ->id }}" name="imprest_id">
                                                    <input type="hidden" value="{{$ret  ->id }}" name="imprest_act_id">
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




</div>

</div>
<script>
    const receipt = document.getElementById('receipt');
    const copic = document.getElementById('copic');

    function changefile(e, param) {

        $(param).html(e.value);
        copic.innerHTML = e.target.files[0].name;
    };

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
        oldb = '<button type="button"  data-toggle="modal" data-target="#mo' + prm + '" class="btn btn-info">describe</button>';
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
