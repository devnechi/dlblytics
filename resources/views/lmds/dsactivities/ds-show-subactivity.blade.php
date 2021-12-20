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
        <a class="btn btn-outline-light mb-5">{{$activt->subact_title}} : activt Overview</a>
        <h1 class="text-center "><strong>{{$activt->subact_title}}<strong></h1>
        <p class=" text-light">
            <strong>title<strong>
        </p>
    </div>

</div>

<div class="container pl-2 mt-5">
    <p class="text-left mb-0"><strong> Description</strong> </p>
    <div class="  mb-2  border ">
        <p class="m-3">{{$activt->subact_desc}}</p>
    </div>

    <div class="coursevida">


        <div class="row">
            <div class=" col-md-6">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <p>Objectives</p> <i class="fas fa-tasks fa-2x"></i>
                    </div>
                    <div class="card-body">
                        <ul class="list-group list-group-flush">
                            @foreach( $activt->subact_objectives as $arriy)
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
                                <h3 class="cardhd">{{$activt->total_subactivity_cost}}</h3>
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
                            <li class="list-group-item d-flex justify-content-between"> <span>Venue:</span>  <span>{{$activt->venue}}</span></li>
                        </ul>
                    </div>
                </div>

            </div>
            <div class="card col-md-6">
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
