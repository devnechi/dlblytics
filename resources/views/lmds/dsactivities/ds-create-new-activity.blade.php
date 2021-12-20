@extends('layouts.llmds')

@section('content')
<div class="container-fluid">
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
            <h4 class="title text-center">New Activity details</h4>
        </div>
    </div>
    <form method="post" enctype="multipart/form-data" action="{{ route('pillar-activity.store') }}">
        @csrf
        <input type="hidden" value="{{ Auth::user()->user_id }}" name="created_by">
        <input type="hidden" value='pending review' name="review_status">
        <input type="hidden" value='submitted' name="current_stage">

        <label for="forDepartmentTitle">project reference</label>
        <div class="row">
            <div class="form-group col-lg-12">
                <div class="form-group multiple-form-group" data-max=6>
                    <div class="form-group input-group-lg">
                        <div class="row">
                            <div class="col-md-6 input-group-lg">
                                <select class="form-control form-group col-lg-12" aria-label="Large" id="project_ref_id" name="project_ref_id" {{empty($proj_id) ?'':'disabled="true"'}} aria-describedby="inputGroup-sizing-sm">
                                    @if(isset($proj_id))

                                    @foreach($projs as $prijs)
                                    <option value="{{$prijs->project_id}}" {{ $proj_id==$prijs->project_id?'selected':''}}>{{$prijs->project_title}}</option>
                                    @endforeach
                                    @else
                                    <option value="">Select Project </option>
                                    @foreach($projs as $prijs)
                                    <option value="{{$prijs->project_id}}">{{$prijs->project_title}}</option>
                                    @endforeach
                                    @endif
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <label for="formGroupExampleInput2">Personnel involved.</label>
        <div class="row">
            <div class="form-group col-lg-10">
                <div class="form-group multiple-form-group" data-max=6>
                    <div class="form-group input-group-lg">
                        <div class="row">
                            <div class="col-md-6 input-group-lg">
                                <select class="form-control form-group col-lg-12" aria-label="Large" id="selectProject" name="pinvolved[]" aria-describedby="inputGroup-sizing-sm">
                                    <option value="">Select individual</option>

                                    @if(isset($users))
                                    @foreach($users as $user)
                                    <option value="{{$user->fname}}">{{$user->fname}} {{$user->lname}}</option>
                                    @endforeach
                                    @else
                                    @endif

                                </select>
                            </div>
                            <div class="col-md-2 input-group-lg">
                                <span class="input-group-btn"><button type="button" class="btn btn-outline-primary btn-add">+
                                    </button></span>
                                {{-- <hr style="background-color: aqua;"> --}}
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="form-group col-md-6 input-group-lg">
                <label for="forDepartmentTitle">Activity Title</label>
                <input type="text" class="form-control" name="act_title" placeholder="" required>
            </div>
        </div>
        <p>Activity estimated duration</p>
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
        <label for="formGroupExampleInput2">Activity objectives.</label>
        <div class="row">
            <div class="form-group col-lg-12">
                <div class="form-group multiple-form-group" data-max=6>
                    <div class="form-group input-group-lg">
                        <div class="row">
                            <div class="col-md-6 input-group-lg">
                                <input type="text" name="act_objectives[]" class="form-control">
                            </div>
                            <div class="col-md-2 input-group-lg">
                                <span class="input-group-btn"><button type="button" class="btn btn-outline-primary btn-add"> add +
                                    </button></span>
                                {{-- <hr style="background-color: aqua;"> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <p>Location</p>
        <div class="row">
            <div class="form-group col-md-4 input-group-lg">
                <label for="Country">Country</label>
                <select class="form-control form-group col-lg-12" onchange="countrychange(this)" aria-label="Large" id="selectProject" name="country" aria-describedby="inputGroup-sizing-sm">
                    <option value="">Select country</option>
                    @foreach($countries as $country)
                    <option value="{{$country }}">{{$country }}</option>
                    @endforeach

                </select>
            </div>
            <div class="form-group col-md-4 reg input-group-lg " style="display: none;">
                <label for="forDepartmentTitle">Region</label>
                <select class="form-control form-group col-lg-12" aria-label="Large" id="selectProject" name="Region" aria-describedby="inputGroup-sizing-sm">
                    <option value="">Select region</option>
                    @foreach($regions as $region)
                    <option value="{{$region}}">{{$region}}</option>
                    @endforeach


                </select>
            </div>
            <div class="form-group col-md-4 input-group-lg">
                <label for="forDepartmentTitle">Venue</label>
                <input type="Text" class="form-control" placeholder="Enter Venue" name="venue">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-10 input-group-lg">
                <div class="form-group green-border-focus">
                    <label for="fordeptBriefDescription">Brief description
                    </label>
                    <textarea class="form-control" name="act_desc" rows="8" required></textarea>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-4 input-group-lg">
                <label for="forDepartmentTitle">Total Estiamated cost</label>
                <input type="text" class="form-control" name="total_act_cost" value="" placeholder="" required>
            </div>
        </div>
        <div class="row justify-content-end">
            <div class="form-group col-md-6 input-group-lg ">
                <div class="form-group ">
                    <button type="button" class="btn btn-outline-success  rounded" data-toggle="modal" data-target="#imprest">Attach imprest and Submit form</button>
                </div>
            </div>
        </div>

        <br />
        <br />
        <div class="modal fade" id="imprest" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog  modal-dialog-scrollable modal-xl" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalCenterTitle">Imprest Form</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body" style="width: 85%; margin:10px auto;">
                        <div id="tarc">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h4 class="title text-center">CREATE A IMPREST FOR ACTIVITY</h4>
                                    </div>
                                </div>

                                <input type="hidden" value="{{Auth::user()->user_id }}" name="requested_by">
                                <div class="row">
                                    <div class="form-group col-md-6 input-group-lg">
                                        <label for="ref_no">Reference Number: </label>
                                        <input type="text" class="form-control" name="ref_no" value="" placeholder="" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6 input-group-lg">
                                        <div class="form-group green-border-focus">
                                            <label for="impt_title">Imprest Title:
                                            </label>
                                            <input class="form-control" name="imp_title" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-4 input-group-lg">
                                        <label for="start_datei">Start Date</label>
                                        <input type="date" class="form-control" name="start_datei">
                                    </div>
                                    <div class="form-group col-md-4 input-group-lg">
                                        <label for="end_datei">End Date</label>
                                        <input type="date" class="form-control" name="end_datei">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-lg-12 input-group-lg">
                                        <div class="form-group green-border-focus">
                                            <label for="forPillarBriefDescription">Description:
                                            </label>
                                            <textarea class="form-control" name="purpose" rows="8" required></textarea>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <hr>
                                <div class="row">
                                    <div class="form-group input-group-sm col-lg-12">
                                        <p>Attach Imprest document</p>
                                        <p><small>the document should be in either </small></p>
                                        <ul>
                                            <li>PDF.</li>
                                            <li> XLS and XLSX.</li>
                                        </ul></small></p>
                                        <input type="file" class="form-control-file" name="imprest_doc" id="imprest_file">
                                    </div>
                                </div>
                                <div class="card">

                                    <div class="card-content table-responsive">
                                        <h4>Add Activities </h4>
                                        <p>As per uploaded Imprest above</p>
                                        <br />
                                        <div class="row">
                                            <div class="col-lg-12">

                                                <div class="form-group col-lg-12 input-group-lg">
                                                    <div class="row ">

                                                        <div class="form-group col-md-12">
                                                            <div class="form-group multiple-form-group " id="custg" data-max=6>
                                                                <div class="form-group input-group-lg">
                                                                    <div class="d-flex justify-content-between">
                                                                        <div class="row">

                                                                            <div class="form-group  input-group-sm p-1 col-md-6">
                                                                                <label for="formGroupProductName">Activity title</label>
                                                                                <input type="text" class="form-control" id="number_of_breaks" name="imp_act_name[]" value="" placeholder="">
                                                                            </div>

                                                                            <div class="form-group input-group-sm p-1 col-md-6"> <label for="formGroupProductName">Imprest type</label>
                                                                                <select class="form-control form-group col-lg-12 " aria-label="Large" id="selectimprest" name="imp_type[]" aria-describedby="inputGroup-sizing-sm">
                                                                                    <option value="">Select imprest Item</option>
                                                                                    <option value="Training Advance Request">Training Advance Request</option>
                                                                                    <option value="Travel Advance Request">Travel Advance Request</option>
                                                                                    <option value="Allowance Request">Allowance Request</option>
                                                                                    <option value="Per Diem Claim">Per Diem Claim</option>
                                                                                    <option value="Petty Cash">Petty Cash</option>
                                                                                    <option value="Payment Requesition Request">Payment Requesition Request</option>
                                                                                    <option value="Other">Other</option>
                                                                                </select>
                                                                            </div>
                                                                            <div class=" input-group-sm p-1 col-md-1">
                                                                                <label for="formGroupExampleInput2">Qty</label>
                                                                                <input type="text" name="qty[]" id="qty" class="form-control cls0">
                                                                            </div>
                                                                            <div class=" input-group-sm p-1 ">
                                                                                <label for="formGroupExampleInput2">Unit</label>
                                                                                <input type="text" name="unit[]" id="united" class="form-control ">
                                                                            </div>

                                                                            <div class=" input-group-sm p-1 col-md-1 mr-3">
                                                                                <label for="formGroupExampleInput2">Number</label>
                                                                                <input type="text" name="number[]" id="number" class="form-control cls0">
                                                                            </div>
                                                                            <div class=" input-group-sm p-1 col-md-2">
                                                                                <label for="formGroupExampleInput2">Unit price</label>
                                                                                <input type="text" onchange="totalcost(event)" name="unit_price[]" class="form-control cls0">
                                                                            </div>

                                                                            <div class=" input-group-sm text-nowrap p-1 ">
                                                                                <label for="formGroupExampleInput2">Total Amount<small> (TZS)</small></label>
                                                                                <input type="text" id="cls0t" oninput="totalamount(this.value)" name="total_cost[]" readonly class="tocost form-control">
                                                                            </div>


                                                                        </div>
                                                                        <div class="col-md-1 input-group-sm border-left mt-4 ml-4">
                                                                            <label for="formGroupExampleInput2"> <br><br></label>
                                                                            <span class="input-group-btn"><button type="button" class="btn btn-outline-primary btn-danger btn-remo">-
                                                                                </button></span>
                                                                        </div>
                                                                    </div>
                                                                    <hr style="background-color: aqua;">

                                                                </div>
                                                                <div class="row justify-content-end">
                                                                    <div class="col-md-1 input-group-sm  m-0 p-1">
                                                                        <label for="formGroupExampleInput2"></label>
                                                                        <span class="input-group-btn"><button type="button" class="btn btn-outline-primary btn-adl btn-default">+
                                                                            </button></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- <label for="exampleFormControlSelect1" class="control-label">select below:</label> -->

                                                </div>
                                            </div>
                                            <!-- end of row -->
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-lg-12 input-group-lg">
                                        <div class="form-group green-border-focus d-flex justify-content-between">
                                            <label for="amount_rqst" class=" text-nowrap">Total Amount Requested:
                                            </label>
                                            <input type="text" class="form-control col-4" id="tt" name="amount_rqst " readonly>
                                        </div>
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
</form>
<!-- Modal -->

</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script>
    function countrychange(event) {

        if (event.value == "Tanzania") {
            $(".reg").toggle()
        } else {
            $(".reg").hide()
        }

    }

    function collps(param) {
        $(param).toggle().style.transition = "all 2s";
    }

    function changedimprest(event) {
        $("#" + event.value).toggle().style.transition = "all 2s";
    }

    function totalcost(e) {

        var gclas = e.target.getAttribute("class");
        var ele = gclas.split(' ')[1];

        var elements = document.getElementsByClassName(ele);

        let sum = 1;
        for (var i = 0, len = elements.length; i < len; i++) {

            sum *= parseInt(elements[i].value);
        }

        var f = document.getElementById(ele + 't');
        f.value = sum;
        totalamount();
    }

    function totalamount() {

        var element = document.getElementsByClassName("tocost");

        var tt =document.getElementById("tt");
        var sum = 0;
        for (var i = 0, len = element.length; i < len; i++) {

            sum = sum + parseInt(element[i].value);
        }

        tt.value = sum;


    };
    var cls = 1;
    var addFormGrp = function(event) {

        var formg = '<div class="form-group input-group-lg">' +
            '<div class="d-flex justify-content-between">' +
            '<div class="row"> <div class="form-group  input-group-sm p-1 col-md-6">' +
            '<label for="formGroupProductName">Activity title</label>' +
            '<input type="text" class="form-control" id="number_of_breaks" name="imp_act_name[]" value="" placeholder=""></div>' +
            '<div class="form-group input-group-sm p-1 col-md-6"> <label   for="formGroupProductName">Imprest type</label>' +
            '<select class="form-control form-group col-lg-12 " aria-label="Large" id="selectimprest" name="imp_type[]" aria-describedby="inputGroup-sizing-sm">' +
            '<option value="">Select imprest Item</option>' +
            '<option value="Training Advance Request">Training Advance Request</option>' +
            '<option value="Travel Advance Request">Travel Advance Request</option>' +
            '<option value="Allowance Request">Allowance Request</option>' +
            '<option value="Per Diem Claim">Per Diem Claim</option>' +
            '<option value="Petty Cash">Petty Cash</option>' +
            '<option value="Payment Requesition Request">Payment Requesition Request</option>' +
            '<option value="Other">Other</option>' +
            '</select> </div>' +
            '<div class=" input-group-sm p-1 col-md-1">' +
            '<label for="formGroupExampleInput2">Qty</label>' +
            '<input type="text" name="qty[]" id="qty" class="form-control cls' + cls + '"></div>' +
            '<div class=" input-group-sm p-1 ">' +
            '<label for="formGroupExampleInput2">Unit</label>' +
            '<input type="text" name="unit[]" id="united" class="form-control "></div>' +
            '<div class=" input-group-sm p-1 col-md-1 mr-3">' +
            '<label for="formGroupExampleInput2">Number</label>' +
            '<input type="text" name="number[]" id="number" class="form-control cls' + cls + '"></div>' +
            '<div class=" input-group-sm p-1 col-md-2">' +
            '<label for="formGroupExampleInput2">Unit price</label>' +
            '<input type="text" onchange="totalcost(event)" name="unit_price[]" class="form-control cls' + cls + '"></div>' +
            '<div class=" input-group-sm text-nowrap p-1 ">' +
            '<label for="formGroupExampleInput2">Total Amount<small> (TZS)</small></label>' +
            '<input type="text" id="cls' + cls + 't" name="total_cost[]" readonly class="tocost form-control"></div>' +
            '</div><div class="col-md-1 input-group-sm border-left mt-4 ml-4">' +
            '<label for="formGroupExampleInput2"> <br><br></label>' +
            '<span class="input-group-btn"><button type="button" class="btn btn-outline-danger btn-remo">-' +
            '</button></span></div></div>' +
            '<hr style="background-color: aqua;"></div>';


        $("#custg").append(formg);

        cls++;
    };
    var removeFormGrp = function(event) {
                    event.preventDefault();

                    var $formGroup = $(this).closest('.form-group');
                    var $multipleFormGroup = $formGroup.closest('.multiple-form-group');

                    var $lastFormGroupLast = $multipleFormGroup.find('.form-group:last');
                    if ($multipleFormGroup.data('max') >= countFormGroup($multipleFormGroup)) {
                        $lastFormGroupLast.find('.btn-add').attr('disabled', false);
                    }

                    $formGroup.remove();
                    totalamount();
                };

                var countFormGroup = function($form) {
                    return $form.find('.form-group').length;
                };


    $(document).on('click', '.btn-remo', removeFormGrp);
    $(document).on('click', '.btn-adl', addFormGrp);
</script>
@endsection
