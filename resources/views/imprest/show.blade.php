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

    <div class="coursevida border-left  border-primary" style=" border-width: 5px !important;">
        @php $i=1;@endphp

        @foreach($imprest->imp_activities as $imp)

        <ul class="list-group ">
            <li class="list-group-item d-flex justify-content-between ">

                <span class="row">
                    <h1 class="mr-5 ml-3 text-dark"><strong>{{$i}}</strong></h1>
                    <span class="m-auto"> {{$imp->imp_act_name}}</span>

                </span>
                <div><a class="btn  btn-outline-success " onclick="cp(event,'{{$imp->id}}')" type="button">View</a></div>

            </li>
        </ul>
        <div class="collapse" id="{{'cp'.$imp->id}}">
            <div class="card mt-1 mb-1">
                <form action="{{route('retirement.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class=" row card-body">
                        <div class="col-md-4 text-small">Imprest type: <span class=" bg-teal">{{$imp->imp_type}}</span> </div>
                        <div class="col-md-8">
                            <div class="form-group   d-flex justify-content-between">
                                <label class="mr-2">Estimated Amount</label>
                                <label class="form-control col-4" id="ta{{$imp->id}}">{{$imp->total_cost}}</label>
                            </div>
                            <div class="form-group  input-group-sm d-flex justify-content-between">
                                <label for="forDepartmentTitle" class="mr-2">Amount used</label>
                                <input type="text" class="form-control col-4 mr-1" onchange="getbalance(event,'{{$imp->id}}')" value="{{ isset($imp->retire->amount_used) ? $imp->retire->amount_used : ''}}" name="amount_used" required>
                                <div class="custom-file input-group-sm">
                                    <input type="file" name="receipt" class="custom-file-input" id="receipt" onchange="changefile(this,'#copic{{$imp->id}}')" required>
                                    <label class="custom-file-label ow" id="copic{{$imp->id}}" for="receipt">
                                        {{empty($imp->retire->receipt_path) ? 'No receipt Attached':$imp->retire->receipt_path}}</label>
                                </div>
                            </div>
                            <input name="imp_act_id" type="hidden" id="imp_act_id" value="{{ isset($imp->id) ? $imp->id : ''}}">
                            <div class="form-group  input-group-sm d-flex justify-content-between">
                                <label for="forDepartmentTitle" class="mr-2">Balance</label>
                                <input type="text" id="ba{{$imp->id}}" readonly class="form-control col-4" value="{{ isset($imp->retire->balance) ? $imp->retire->balance : ''}}" name="balance">
                                <div id="b{{$imp->id}}">
                                    <button type="button" data-toggle="modal" data-target="#mo{{$imp->id}}" class="btn btn-info">describe</button>
                                </div>

                                <div class="modal fade" id="mo{{$imp->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
                                                        <div class="form-group col-md-6 input-group-lg">
                                                            <div class="form-group">
                                                                <p>Pay inslip Attachment</p>
                                                                <p><small>The document should be in </small></p>
                                                                <ul>
                                                                    <li>{{empty($imp->retire->balance_path) ? 'No receipt Attached':$imp->retire->balance_path}}.</li>
                                                                </ul>

                                                                <div class="">
                                                                    <div class="mafile">
                                                                        <input type="file" name="describedoc" id="pdf-btn" hidden />
                                                                        <label class="malabel" for="pdf-btn">attach doc</label>
                                                                    </div>
                                                                    <div class=" border rounded">
                                                                        <table class="  w-100 text-center" id="pdfb">

                                                                        </table>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="form-group col-lg-12 input-group-lg">
                                                            <div class="form-group green-border-focus">
                                                                <label for="amount_rqst" class=" text-nowrap">Description
                                                                </label>
                                                                <textarea class="form-control" name="described">{{ isset($imp->retire->described) ? $imp->retire->described : ''}}
                                                                </textarea>
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
        @php $i++;@endphp
        @endforeach
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
