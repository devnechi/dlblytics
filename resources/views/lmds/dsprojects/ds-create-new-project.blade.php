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
<div class="container-fluid" >
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div><br />
    @endif

    <div class="row">
        <div class="col-lg-12">
            <h4 class="title text-center">New project details</h4>
        </div>
    </div>
    <form method="post" enctype="multipart/form-data" action="{{ route('pillar-project.store') }}">
        @csrf
        <input type="hidden" value="{{ Auth::user()->user_id }}" name="created_by">
        <input type="hidden" value="{{ Auth::user()->pillar_id }}" name="pillar_ref_id">


        <input type="hidden" value='pending review' name="review_status">
        <input type="hidden" value='submitted' name="current_stage">
        <label for="formGroupExampleInput2">Project Lead.</label>
        <div class="row">
            <div class="col-md-4 input-group-lg">
                <select class="form-control form-group col-lg-12" aria-label="Large" id="selectProject" name="lead" aria-describedby="inputGroup-sizing-sm">
                    <option value="">Select lead</option>
                    @if(isset($lead))
                    @foreach($lead as $ld)
                    <option value="{{$ld->pillar_act_id}}">{{$ld->act_title}}</option>
                    @endforeach
                    @else

                    @endif

                </select>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="form-group col-md-4 input-group-lg">
                <label for="forDepartmentTitle">Project Title</label>
                <input type="text" class="form-control" name="project_title" placeholder="" required>
            </div>
        </div>

        <p>Project estimated duration</p>
        <div class="row">
            <div class="form-group col-md-4 input-group-lg">
                <label for="forDepartmentTitle">Start Date</label>
                <input type="date" class="form-control" name="start_date">
            </div>
            <div class="form-group col-md-4 input-group-lg">
                <label for="forDepartmentTitle">End Date</label>
                <input type="date" class="form-control" name="end_date">
            </div>
        </div>
        <hr>



        <label for="formGroupExampleInput2">Project objectives.</label>
        <div class="row">
            <div class="form-group col-lg-12">
                <div class="form-group multiple-form-group" data-max=6>
                    <div class="mb-2 list-group list-group-flush col-md-6 listob">

</div>

                    <div class="form-group input-group-sm">
                        <div class="row">
                            <div class="col-md-6 input-group-lg">
                                <input type="text" id="pob" class="form-control">
                            </div>

                            <div class="col-md-2 input-group-lg">
                                <span class="input-group-btn">
                                    <button type="button" class="btn btn-outline-primary" onclick="addob(this)"> add +
                                    </button></span>
                                {{-- <hr style="background-color: aqua;"> --}}
                            </div>

                        </div>
                    </div>


                </div>
            </div>
        </div>

        <hr>
        <label for="formGroupExampleInput2">Project Funders.</label>
        <div class="row">
            <div class="form-group col-lg-10">
                <div class="form-group multiple-form-group" data-max=6>
                    <div class="form-group input-group-lg">
                        <div class="row">
                            <div class="col-md-8 input-group-lg">
                                <div class="list-group list-group-flush col-md-6 mb-2 listfond">

</div>
                                <select class="form-control form-group col-lg-12" onchange="addfond(event)" aria-label="Large" id="fundersel" aria-describedby="inputGroup-sizing-sm">
                                    <option value="">Select funder</option>
                                    @foreach($facil as $fac)
                                    <option value="{{$fac->name}}">{{$fac->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2 input-group-lg">
                <span class="input-group-btn"><button type="button" class="btn btn-outline-primary " data-toggle="modal" data-target="#fundermodal"> add new funder
                    </button></span>
                {{-- <hr style="background-color: aqua;"> --}}
            </div>
        </div>

        <label for="formGroupExampleInput2">Project Partners.</label>
        <div class="row">
            <div class="form-group col-lg-10">
                <div class="form-group multiple-form-group" data-max=6>
                    <div class="form-group input-group-lg">
                        <div class="row">
                            <div class="col-md-8 input-group-lg">
                                <div class="list-group list-group-flush col-md-6 mb-2 listpart">

                                </div>
                                <select class="form-control form-group col-lg-12" aria-label="Large" id="partsel" onchange="addpart(event)" aria-describedby="inputGroup-sizing-sm">
                                    <option value="">Select partner</option>
                                    @if(isset($facil))
                                    @foreach($facil as $fac)
                                    <option value="{{$fac->name}}">{{$fac->name}}</option>
                                    @endforeach
                                    @else

                                    @endif

                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2 input-group-lg">
                <span class="input-group-btn"><button type="button" class="btn btn-outline-primary " data-toggle="modal" data-target="#partnermodal"> add new partner
                    </button></span>
                {{-- <hr style="background-color: aqua;"> --}}
            </div>
        </div>
        <hr>


        <div class="row">
            <div class="form-group col-md-10 input-group-lg">
                <div class="form-group green-border-focus">
                    <label for="fordeptBriefDescription">Brief description
                    </label>
                    <textarea class="form-control" name="project_desc" rows="6" cols="50" maxlength="200" required>
                    </textarea>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-4 input-group-lg">
                <label for="forDepartmentTitle">Total Estiamated cost</label>
                <input type="text" class="form-control" name="total_project_cost" value="" placeholder="" required>
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-6 input-group-lg">
                <div class="form-group">
                    <p>Upload technical proposal document</p>
                    <p><small>the document should be in either </small></p>
                    <ul>
                        <li>PDF.</li>
                    </ul>

                    <div class="">
                        <div class="mafile">
                            <input type="file" name="project_tech" id="pdf-btn" hidden />
                            <label class="malabel" for="pdf-btn">change technical doc</label>
                        </div>
                        <div class=" border rounded">
                            <table class="  w-100 text-center" id="pdfb">

                            </table>
                        </div>

                    </div>
                </div>
            </div>
            <div class="form-group col-md-6 input-group-lg">
                <div class="form-group">
                    <p>Upload financial proposal document</p>
                    <p><small>the document should be in either </small></p>
                    <ul class="d-flex">
                        <li class="mr-4">PDF.</li>
                        <li class="">XSL.</li>
                    </ul>
                    <div class="">
                        <div class="fifile row justify-content-end">
                            <input type="file" name="project_busi" id="pdf-fin" hidden />
                            <label class="filabel " for="pdf-fin">change financial doc</label>
                        </div>
                        <div class=" border rounded">
                            <table class="  w-100 text-center" id="pdff">


                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <br />
        <br />

        <div class="row justify-content-end">
            <div class="form-group m-2 ">
                <button type="submit" class="btn btn-outline-info btn-lg">add new project</button>

            </div>
            <div class="form-group m-2 ">
                <button type="button" name="btnCancel" class="btn btn-outline-danger btn-lg">cancel</button>
            </div>
        </div>
    </form>
</div>
<!-- Modal pdfs -->
<div class="modal" id="myModal">
    <div class="modal-dialog" style="max-width: 80%;">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Preview PDF</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <div style="width: 100%; height: 83vh;">
                    <object data="" style="width: 100%; height: inherit;" id="pspdfkit"></object>
                </div>
            </div>

        </div>
    </div>
</div><div class="modal" id="mModal">
    <div class="modal-dialog" style="max-width: 80%;">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Preview PDF</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <div style="width: 100%; height: 83vh;">
                    <object data="" style="width: 100%; height: inherit;" id="pspdf"></object>
                </div>
            </div>

        </div>
    </div>
</div>
    <!-- Modal -->
    <div class="modal fade" id="fundermodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Add funder</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="facil_name" class="control-label">Funder name</label>
                        <input type="text" name="facil_name" class="form-control" />
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" onclick="ajaxed1()" data-dismiss="modal" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="partnermodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Add Partner</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="facil_nam" class="control-label">Partner name</label>
                        <input type="text" name="facil_nam" class="form-control" />
                    </div>
                </div>
                <div class="modal-footer ">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" onclick="ajaxed2()"  data-dismiss="modal" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    <script>
        function ajaxed1() {
            var form_dat = new FormData();
            form_dat.append('facil_name', $('input[name=facil_name]').val());
            const fun = document.getElementById('fundersel');
            const par = document.getElementById('partsel');

            $.ajax({
                type: 'POST',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: "{{route('facilitatorpost') }}",
                data: form_dat,
                processData: false,
                contentType: false,
                success: function(data) {
                    if ((data.errors)) {
                        alert(data.errors);
                    } else {

                        var po='<option value="">Select option</option>';

                        for(let i in data){
                            po=po+'<option value="'+ data[i].name +'">'+ data[i].name +'</option>';
                    }

                    fun.innerHTML=po;
                    par.innerHTML=po;
                    }
                },





            });
        };

   function ajaxed2() {
            var form_da = new FormData();
            form_da.append('facil_name', $('input[name=facil_nam]').val());
            const fun = document.getElementById('fundersel');
            const par = document.getElementById('partsel');

            $.ajax({
                type: 'POST',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: "{{route('facilitatorpost') }}",
                data: form_da,
                processData: false,
                contentType: false,
                success: function(data) {
                    if ((data.errors)) {
                        alert(data.errors);
                    } else {

                        var po='<option value="">Select option</option>';

                        for(let i in data){
                            po=po+'<option value="'+ data[i].name +'">'+ data[i].name +'</option>';
                    }

                    fun.innerHTML=po;
                    par.innerHTML=po;
                    }
                },





            });
        };

        function remofond(e) {
            e.preventDefault();
            e.currentTarget.remove();
        }

        function addob(e) {

            const obv = document.getElementById('pob');
            var n = '<a href="" class=" list-group-item" onclick="remofond(event)">' + obv.value + ' <span>&times;</span><input type="hidden" value="' + obv.value + '" name="project_objectives[]"></a>';
            if(obv.value!=""){
            $('.listob').append(n);
            obv.value="";
            }
        }

        function addfond(e) {
            var n = '<a href="" class="list-group-item" onclick="remofond(event)">' + e.target.value + ' <span>&times;</span>' +
                '<input type="hidden" value="' + e.target.value + '" name="pfunder[]"></a>';
            $('.listfond').append(n)
        }

        function addpart(e) {
            var n = '<a href="" class="list-group-item" onclick="remofond(event)">' + e.target.value + ' <span>&times;</span>' +
                '<input type="hidden" value="' + e.target.value + '" name="ppartiner[]"></a>';
            $('.listpart').append(n)
        }

        const filepdf = document.getElementById('pdf-btn');

        filepdf.addEventListener('change', function(e) {
            made2(URL.createObjectURL(this.files[0]), this.files[0].name, e);
        });

        const filepdff = document.getElementById('pdf-fin');

        filepdff.addEventListener('change', function(e) {
            made2a(URL.createObjectURL(this.files[0]), this.files[0].name, e);
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

        function made2a(url, name, e) {
            var nam1 = name.toString().split(".pdf");
            var nam2 = nam1.toString().replace(/_/gi, ' ');
            var btnhtml2 =
                '<tr class="" id="' + name.slice(0, 4) + '">' +
                '<td>' + nam2 + '</td>' +
                '<td><button type="button" class="btn btn-outline-success m-1"' +
                'onclick="openpdff(\'' + url + '\')">Preview</button>' +
                '</td>' +
                '</tr>';
            var item = document.getElementById("pdff");
            item.removeChild(item.childNodes[0]);
            $("#pdff").append($(btnhtml2));

            i2++;
        };

        function openpdf(url) {
            const pdfviewer = document.getElementById('pspdfkit');
            pdfviewer.data = url;
            $('#myModal').modal('show');
        };
        function openpdff(url) {
            const pdfviewer = document.getElementById('pspdf');
            pdfviewer.data = url;
            $('#mModal').modal('show');
        };
    </script>
    @endsection
