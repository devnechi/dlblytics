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

    <form method="post" enctype="multipart/form-data" action="">
        @csrf

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h4 class="title text-center">EDIT IMPREST </h4>
                </div>
            </div>

            <input type="hidden" value="{{Auth::user()->user_id }}" name="requested_by">
            <div class="row">
                <div class="form-group col-md-6 input-group-lg">
                    <div class="form-group {{ $errors->has('ref_no') ? 'has-error' : ''}}">
                        <label for="ref_no" class="control-label">{{ 'Ref No' }}</label>
                        <input class="form-control" name="ref_no" type="text" id="ref_no" value="{{ isset($imprest->ref_no) ? $imprest->ref_no : ''}}">
                        {!! $errors->first('ref_no', '<p class="help-block">:message</p>') !!}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-6 input-group-lg">
                    <div class="form-group {{ $errors->has('imp_title') ? 'has-error' : ''}}">
                        <label for="imp_title" class="control-label">{{ 'Imprest Title' }}</label>
                        <input class="form-control" name="imp_title" type="text" id="imp_title" value="{{ isset($imprest->imp_title) ? $imprest->imp_title : ''}}" required>
                        {!! $errors->first('imp_title', '<p class="help-block">:message</p>') !!}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-4  {{ $errors->has('start_date') ? 'has-error' : ''}}">
                    <label for="start_date" class="control-label">{{ 'Start Date' }}</label>
                    <input class="form-control" name="start_date" type="datetime" id="start_date" value="{{ isset($imprest->start_date) ? date('d-m-Y', strtotime($imprest->start_date)) : ''}}" required>
                    {!! $errors->first('start_date', '<p class="help-block">:message</p>') !!}
                </div>

                <div class="form-group  {{ $errors->has('end_date') ? 'has-error' : ''}}">
                    <label for="end_date" class="control-label">{{ 'End Date' }}</label>
                    <input class="form-control" name="end_date" type="datetime" id="end_date" value="{{ isset($imprest->end_date) ? date('d-m-Y', strtotime($imprest->end_date))  : ''}}" required>
                    {!! $errors->first('end_date', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="row">
                <div class="form-group col-lg-12 input-group-lg">
                    <div class="form-group {{ $errors->has('purpose') ? 'has-error' : ''}}">
                        <label for="purpose" class="control-label">{{ 'Description' }}</label>
                        <textarea class="form-control" rows="5" name="purpose" type="textarea" id="purpose" required>{{ isset($imprest->purpose) ? $imprest->purpose : ''}}</textarea>
                        {!! $errors->first('purpose', '<p class="help-block">:message</p>') !!}
                    </div>
                </div>
            </div>
            <br>
            <hr>
            <div class="row">
                <div class="form-group col-md-6 input-group-lg">
                    <div class="form-group">
                        <p>Imprest Attachment</p>
                        <p><small>The document should be in </small></p>
                        <ul>
                            <li>PDF.</li>
                        </ul>

                        <div class="">
                            <div class="mafile">
                                <input type="file" name="project_tech" id="pdf-btn" hidden />
                                <label class="malabel" for="pdf-btn">change imprest doc</label>
                            </div>
                            <div class=" border rounded">
                                <table class="  w-100 text-center" id="pdfb">

                                </table>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="card">

                <div class="card-content table-responsive">
                    <h4>Edit imprest activities</h4>
                    <br />
                    <div class="row">
                        <div class="col-lg-12">

                            <div class="form-group col-lg-12 input-group-lg">
                                <div class="row">

                                    <div class="form-group col-lg-12">
                                        @php
                                        $numItems = count($imprest->imp_activities);
                                        $i = 0;
                                        @endphp
                                        @foreach($imprest->imp_activities as $impact)
                                        <div class="form-group multiple-form-group" data-max=6>
                                            <div class="form-group input-group-lg">

                                                <div class="d-flex justify-content-between">

                                                    <div class="row">

                                                        <div class="form-group  input-group-sm p-1  col-md-6">
                                                            <label for="formGroupProductName">Activity title</label>
                                                            <input type="text" class="form-control" id="number_of_breaks" name="imp_act_name[]" placeholder="" value="{{$impact->imp_act_name}}">
                                                        </div>


                                                        <div class="form-group input-group-sm p-1 col-md-6"> <label for="formGroupProductName">Imprest type</label>
                                                            <select class="form-control form-group col-lg-12 " aria-label="Large" id="selectimprest" name="imp_type[]" aria-describedby="inputGroup-sizing-sm">
                                                                <option value="">Select imprest Item</option>
                                                                <option value="Training Advance Request" {{$impact->imp_type=='Training Advance Request' ? 'selected':''}}>Training Advance Request</option>
                                                                <option value="Travel Advance Request" {{strtolower($impact->imp_type)=='travel advance request' ? 'selected':''}}>Travel Advance Request</option>
                                                                <option value="Allowance Request" {{strtolower($impact->imp_type)=='allowance request' ? 'selected':''}}>Allowance Request</option>
                                                                <option value="Per Diem Claim" {{strtolower($impact->imp_type)=='per diem claim' ? 'selected':''}}>Per Diem Claim</option>
                                                                <option value="Petty Cash" {{strtolower($impact->imp_type)=='petty cash' ? 'selected':''}}>Petty Cash</option>
                                                                <option value="Payment Requesition Request" {{strtolower($impact->imp_type)=='payment requesition Request' ? 'selected':''}}>Payment Requesition Request</option>
                                                                <option value="Other">Other</option>
                                                            </select>
                                                        </div>
                                                        <div class=" input-group-sm  col-md-1 p-1">
                                                            <label for="formGroupExampleInput2">Qty</label>
                                                            <input type="text" value="{{$impact->qty}}" name="qty[]" id="qty" class="form-control">
                                                        </div>
                                                        <div class=" input-group-sm   p-1">
                                                            <label for="formGroupExampleInput2">Unit</label>
                                                            <input type="text" value="{{$impact->unit}}" name="unit[]" id="united" class="form-control">
                                                        </div>

                                                        <div class=" input-group-sm col-md-1 p-1 mr-3">
                                                            <label for="formGroupExampleInput2">Number</label>
                                                            <input type="text" name="number[]" id="number" value="{{$impact->number}}" class="form-control">
                                                        </div>
                                                        <div class=" input-group-sm  col-md-2 p-1">
                                                            <label for="formGroupExampleInput2">Unit price</label>
                                                            <input type="text" value="{{$impact->unit_price}}" onchange="totalcost(event)" name="unit_price[]" class="form-control">
                                                        </div>

                                                        <div class=" input-group-sm text-nowrap  p-1">
                                                            <label for="formGroupExampleInput2">Total Amount<small> (TZS)</small></label>
                                                            <input type="text" id="tcost" value="{{$impact->total_cost}}" name="total_cost[]" readonly class="tocost form-control">
                                                        </div>


                                                    </div>

                                                    <div class="col-md-1 input-group-sm ml-4 mt-4 border-left">
                                                        <label for="formGroupExampleInput2"> <br><br></label>
                                                        <span class="input-group-btn"><button type="button" class="btn btn-danger btn-remov">-
                                                            </button></span>
                                                        @if(++$i === $numItems)
                                                        <label for="formGroupExampleInput2"> <br><br></label>
                                                        <span class="input-group-btn"><button type="button" class="btn btn-outline-success btn-adl">+
                                                            </button></span>
                                                        @endif
                                                    </div>

                                                </div>
                                                <hr style="background-color: aqua;">

                                            </div>

                                        </div>
                                        @endforeach
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
                        <input type="text" class="form-control col-4 tt" name="amount_rqst">
                    </div>
                </div>
            </div>
        </div>

</div>
</div>
<div class="float-right">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
    <button type="submit" class="btn btn-primary">Submit</button>
</div>
</div>
</div>
</div>

</form>
<!-- Modal -->
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
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
</script>
<script>
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

    (function($) {
        $(function() {

            var addFormGroup = function(event) {

                event.preventDefault();

                var $formGroup = $(this).closest('.form-group');
                var $multipleFormGroup = $formGroup.closest('.multiple-form-group');
                var $formGroupClone = $formGroup.clone();

                $(this).toggleClass('btn-default btn-adl  d-none')
                    .html('–');

                $formGroupClone.find('input').val('');
                $formGroupClone.insertAfter($formGroup);

                var $lastFormGroupLast = $multipleFormGroup.find('.form-group:last');
                if ($multipleFormGroup.data('max') <= countFormGroup($multipleFormGroup)) {
                    $lastFormGroupLast.find('.btn-adl').attr('disabled', true);
                }
            };

            var removeFormGroup = function(event) {
                event.preventDefault();

                var $formGroup = $(this).closest('.form-group');
                var $multipleFormGroup = $formGroup.closest('.multiple-form-group');

                var $lastFormGroupLast = $multipleFormGroup.find('.form-group:last');
                if ($multipleFormGroup.data('max') >= countFormGroup($multipleFormGroup)) {
                    $lastFormGroupLast.find('.btn-adl').attr('disabled', false);
                }

                $formGroup.remove();
            };

            var countFormGroup = function($form) {
                return $form.find('.form-group').length;
            };

            $(document).on('click', '.btn-adl', addFormGroup);
            $(document).on('click', '.btn-remov', removeFormGroup);
        });
        $(document).ready(function(){
        var elements = document.getElementsByClassName("tocost");
        var tt = document.getElementsByClassName("tt");
        var sum = 0;
        for (var i = 0, len = elements.length; i < len; i++) {
            alert(element[i].value);
            sum = sum + element[i].value;
        }

        tt.value = sum;
    });
    })(jQuery);
</script>
@endsection
