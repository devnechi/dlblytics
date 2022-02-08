@extends('layouts.llmds')

@section('content')

<div class="m-2" style="padding-top:80px">
    <div class="cont mb-4">
        <h4 class="text-left "><strong>{{$imprest->imp_title}}<strong></h4>
        <h6 class="font-weight-bolder p-0"> Description</h4>
        <div class="panel-body   border">

                <p class="p-2 ">
                    {{$imprest->purpose}}
                </p>

        </div>

    </div>

</div>




<div class="container pl-2">
    <div class=" mt-3 mb-3  border p-2">
        <h4> <strong>Retirements </strong></h4>
        <div class="d-flex justify-content-between">
            <p>
                <span>{{count($imprest->imp_activities)}} Retirement </span>
            </P>
            <a href="\\"><strong>Expand all Sections</strong></a>
        </div>
    </div>

    <div class="coursevida">

       @foreach($imprest->imp_activities as $imp)

            <ul class="list-group">
            <li class="list-group-item mt-2 " >
                <a href="" class=" d-flex justify-content-between"
                onclick="cp(event,'{{$imp->id}}')">
                 {{$imp->imp_act_name}}
                    <span class="badge badge-primary badge-pill "></span>
                </a>

            </li>
        </ul>
        <div class="collapse" id="{{'cp'.$imp->id}}">
            <div class="card ">
                <form action="{{route('retirement.store')}}" method="post">
                @csrf
                    <div class=" row card-body">
                        <div class="col-md-6">Lorem ipsum dolor sit amet consectetur</div>
                        <div class="col-md-6">
                            <div class="form-group  input-group-sm d-flex justify-content-between">
                                <label  class="mr-2">Estimated Amount</label>
                                <label  class="form-control col-4">{{$imp->total_cost}}</label>
                            </div>
                            <div class="form-group  input-group-sm d-flex justify-content-between">
                                <label for="forDepartmentTitle" class="mr-2">Amount used</label>
                                <input type="text" class="form-control col-4 mr-1" name="amount_used[]">
                                <div class="custom-file input-group-sm">
                                    <input type="file" name="receipt[]" class="custom-file-input" id="coverpic">
                                    <label class="custom-file-label" id="receipt" for="receipt">
                                        No receipt Attached</label>
                                </div>
                            </div>
                            <div class="form-group  input-group-sm d-flex justify-content-between">
                                <label for="forDepartmentTitle" class="mr-2">Balance</label>
                                <input type="text" class="form-control col-4"readonly name="balance[]">
                                <button type="button" data-toggle="modal" data-target="#imp{{$imprest->id}}" class="btn btn-info">describe</button>
                                <div class="modal fade" id="imp{{$imprest->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog  modal-dialog-scrollable  modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalCenterTitle">describe retirement</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body" style="width: 85%; margin:10px auto;">
                                                <div class="container-fluid">
                                                    <div class="row">
                                                        <div class="form-group col-lg-12 input-group-lg">
                                                            <div class="form-group green-border-focus">
                                                                <label for="amount_rqst" class=" text-nowrap">Description
                                                                </label>
                                                                <textarea class="form-control" name="descrbide[]"> </textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        @endforeach
    </div>




</div>

</div>
<script>
    function cp(e,param){

        e.preventDefault();
        $('#cp'+param).toggle().style.transition = "all 2s";

    }
</script>

@endsection
