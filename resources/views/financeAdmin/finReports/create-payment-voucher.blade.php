@extends('layouts.lfinanceadmin')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <h4 class="title text-center">Payment Voucher</h4>
        </div>
    </div>
    <form method="post" action="">
        @csrf
        <input type="hidden" value="{{ Auth::user()->id }}" name="creator_id">
        <div class="row">
            <div class="form-group offset-col-6 col-md-4 input-group-lg">
                <label for="forKpi_title">Date: <strong>18 Dec 2020</strong> </label>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-4 input-group-lg">
                <label for="forKpi_dc_timing">Name of Payee: </label>
                <input type="text" class="form-control" name="dc_timing"
                    value="<?= isset($_POST['dc_timing']) ? $_POST['dc_timing'] : ''; ?>" placeholder="">
            </div>
        </div>


        <div class="row">
            <div class="form-group col-md-6 input-group-lg">
                <div class="form-group green-border-focus">
                    <label for="forPillarBriefDescription">Address of Payee:
                    </label>
                    <textarea class="form-control" name="kpi_desc" rows="4" required></textarea>
                </div>
            </div>
        </div>

        <div class="row">

            <div class="form-group col-md-4 input-group-lg">
                <label for="forKpi_method_dc">Cost Center: </label>
                <input type="text" class="form-control" name="method_of_dc"
                    value="<?= isset($_POST['method_of_dc']) ? $_POST['method_of_dc'] : ''; ?>" placeholder="">
            </div>
            <div class="form-group col-md-4 input-group-lg">
                <label for="forunit_of_measure">BPV number: </label>
                <input type="text" class="form-control" name="unit_of_measure"
                    value="<?= isset($_POST['unit_of_measure']) ? $_POST['unit_of_measure'] : ''; ?>" placeholder="">
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-4 input-group-lg">
                <label for="forunit_of_measure">Wire Transfer / CHO Number: </label>
                <input type="text" class="form-control" name="unit_of_measure"
                    value="<?= isset($_POST['unit_of_measure']) ? $_POST['unit_of_measure'] : ''; ?>" placeholder="">
            </div>


            <div class="form-group col-md-4 input-group-lg">
                <label for="formGroupProductName">Select Curency type</label>
                <select class="form-control" aria-label="Large" id="selectProject" name="selectProject"
                    aria-describedby="inputGroup-sizing-sm">
                    <option value="select">Currency Type</option>
                    <option value="userid1">USD</option>
                    <option value="userid2">TZS </option>
                </select>
            </div>
        </div>


        <div class="row">
            <div class="form-group col-md-3 input-group-lg">
                <label for="forKpi_method_dc">Fund Code: </label>
                <input type="text" class="form-control" name="method_of_dc"
                    value="<?= isset($_POST['method_of_dc']) ? $_POST['method_of_dc'] : ''; ?>" placeholder="">
            </div>
            <div class="form-group col-md-3 input-group-lg">
                <label for="forunit_of_measure">Activity Number: </label>
                <input type="text" class="form-control" name="unit_of_measure"
                    value="<?= isset($_POST['unit_of_measure']) ? $_POST['unit_of_measure'] : ''; ?>" placeholder="">
            </div>
        </div>



        <div class="row">
            <div class="form-group col-md-8 input-group-lg">
                <div class="form-group green-border-focus">
                    <label for="forPillarBriefDescription">Payment Description:
                    </label>
                    <textarea class="form-control" name="kpi_desc" rows="6" required></textarea>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="form-group col-md-4 input-group-lg">
                <label for="forKpi_method_dc">Total Amount: </label>
                <input type="text" class="form-control" name="method_of_dc"
                    value="<?= isset($_POST['method_of_dc']) ? $_POST['method_of_dc'] : ''; ?>" placeholder="">
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-8 input-group-lg">
                <div class="form-group green-border-focus">
                    <label for="forPillarBriefDescription"> Total Amount in Words:
                    </label>
                    <textarea class="form-control" name="kpi_desc" rows="6" required></textarea>
                </div>
            </div>
        </div>


        <div class="form-group col-md-3 input-group-lg">
            {{-- <label for="formGroupProductName">to Be reviewed by</label> --}}
            <select class="form-control" aria-label="Large" id="selectProject" name="selectProject"
                aria-describedby="inputGroup-sizing-sm">
                <option value="select">To be received by</option>
                <option value="userid1">Chacha</option>
                <option value="userid2">Nguza </option>
            </select>
        </div>
        <div class="form-group col-md-3 input-group-lg">
            {{-- <label for="formGroupProductName">to Be reviewed by</label> --}}
            <select class="form-control" aria-label="Large" id="selectProject" name="selectProject"
                aria-describedby="inputGroup-sizing-sm">
                <option value="select">Prepared by</option>
                <option value="userid1">Chacha</option>
                <option value="userid2">Nguza </option>
            </select>
        </div>



        <div class="form-group col-md-3 input-group-lg">
            {{-- <label for="formGroupProductName">to Be reviewed by</label> --}}
            <select class="form-control" aria-label="Large" id="selectProject" name="selectProject"
                aria-describedby="inputGroup-sizing-sm">
                <option value="select">To be approved by</option>
                <option value="userid1">Chacha</option>
                <option value="userid2">Nguza </option>
            </select>
        </div>


        <div class="form-group col-md-3 input-group-lg">
            {{-- <label for="formGroupProductName">to Be reviewed by</label> --}}
            <select class="form-control" aria-label="Large" id="selectProject" name="selectProject"
                aria-describedby="inputGroup-sizing-sm">
                <option value="select">To be Authorised by</option>
                <option value="userid1">Chacha</option>
                <option value="userid2">Nguza </option>
            </select>
        </div>
        <div class="row">
            <div class="form-group offset-md-8 col-md-4 input-group-lg push-right">
                <button type="submit" class="btn btn-outline-info btn-lg">create payment coucher</button>
            </div>
            <div class="form-group offset-md-8 col-md-4 input-group-lg pull-right">
                <button type="button" name="btnCancel" class="btn btn-outline-danger btn-lg">cancel entry</button>
            </div>
        </div>
    </form>
</div>
@endsection
