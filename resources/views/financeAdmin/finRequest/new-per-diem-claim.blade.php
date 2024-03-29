@extends('layouts.lfinanceadmin')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <h4 class="title text-center">CREATE PER DIEM EXPENSE RETIREMENT</h4>
        </div>
    </div>
    <form method="post" action="">
        @csrf
        <input type="hidden" value="{{ Auth::user()->id }}" name="creator_id">
        <div class="row">
            <div class="form-group col-md-4 input-group-lg">
                <label for="forKpi_title">Name: </label>
                <input type="text" class="form-control" name="kpi_title"
                    value="<?= isset($_POST['kpi_title']) ? $_POST['kpi_title'] : ''; ?>" placeholder="" required>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-4 input-group-lg">
                <label for="forKpi_dc_timing">Position: </label>
                <input type="text" class="form-control" name="dc_timing"
                    value="<?= isset($_POST['dc_timing']) ? $_POST['dc_timing'] : ''; ?>" placeholder="">
            </div>
        </div>


        <div class="row">
            <div class="form-group col-md-4 input-group-lg">
                <label for="forunit_of_measure">Visit: </label>
                <input type="text" class="form-control" name="unit_of_measure"
                    value="<?= isset($_POST['unit_of_measure']) ? $_POST['unit_of_measure'] : ''; ?>" placeholder="">
            </div>

            <div class="form-group col-md-4 input-group-lg">
                <label for="forKpi_method_dc">Currency: </label>
                <input type="text" class="form-control" name="method_of_dc"
                    value="<?= isset($_POST['method_of_dc']) ? $_POST['method_of_dc'] : ''; ?>" placeholder="">
            </div>
            <div class="form-group col-md-4 input-group-lg">
                <label for="forKpi_method_dc">Dates: </label>
                <input type="date" class="form-control" name="method_of_dc"
                    value="<?= isset($_POST['method_of_dc']) ? $_POST['method_of_dc'] : ''; ?>" placeholder="">
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-4 input-group-lg">
                <label for="forunit_of_measure">Exchange rate <small>TZS/USD</small> </label>
                <input type="text" class="form-control" name="unit_of_measure"
                    value="<?= isset($_POST['unit_of_measure']) ? $_POST['unit_of_measure'] : ''; ?>" placeholder="">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-lg-12 input-group-lg">
                <div class="form-group green-border-focus">
                    <label for="forPillarBriefDescription">Purpose of request:
                    </label>
                    <textarea class="form-control" name="kpi_desc" rows="10" required></textarea>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-4 input-group-lg">
                <label for="forKpi_tolerance_band">Departure Date: </label>
                <input type="date" class="form-control" name="tolerance_band"
                    value="<?= isset($_POST['tolerance_band']) ? $_POST['tolerance_band'] : ''; ?>" placeholder="">
            </div>
            <div class="form-group col-md-4 input-group-lg">
                <label for="forKpi_title">Returning Date: </label>
                <input type="date" class="form-control" name="last_approved"
                    value="<?= isset($_POST['last_approved']) ? $_POST['last_approved'] : ''; ?>" placeholder="">
            </div>
        </div>

        <div class="card">

            <div class="card-content table-responsive">
                <h4 class="title text-center">Daily Subsistence Allowance</h4>
                <p class="category text-center">Meals and Accomodation cost</p>
                <br />
                <div class="row">
                    <div class="col-lg-12">

                        <div class="form-group col-lg-12 input-group-lg">
                            <div class="row">

                                <div class="form-group col-lg-12">
                                    <div class="form-group multiple-form-group" data-max=6>
                                        <div class="form-group input-group-lg">

                                            <div class="row">

                                                <div class="col-md-3 input-group-lg">
                                                    <label for="formGroupExampleInput2">Date:</label>
                                                    <input type="date" name="sourceReach[]" class="form-control">
                                                </div>

                                                <div class="form-group col-md-4 input-group-lg">
                                                    <label for="formGroupProductName"> Subsistence Title</label>
                                                    <input type="text" class="form-control" id="number_of_breaks"
                                                        name="number_of_breaks"
                                                        value="<?= isset($_POST['number_of_breaks']) ? $_POST['number_of_breaks'] : ''; ?>"
                                                        placeholder="">
                                                </div>

                                                <div class="col-md-2 input-group-lg">
                                                    <label for="formGroupExampleInput2">Number of Days</label>
                                                    <input type="text" name="sourceReach[]" class="form-control">
                                                </div>

                                                <div class="col-md-2 input-group-lg">
                                                    <label for="formGroupExampleInput2">Total Cost<small>
                                                            (TZS)</small></label>
                                                    <input type="text" name="source[]" class="form-control">
                                                </div>
                                                <div class="col-md-1 input-group-lg">
                                                    <br />
                                                    <span class="input-group-btn"><button type="button"
                                                            class="btn btn-lg btn-outline-primary btn-add" data-toggle="tooltip" data-placement="right" title="add new"> +
                                                        </button></span>
                                                </div>

                                            </div>
                                            <hr style="background-color: aqua;">

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


        <br />
        <br />
        <div class="row">

            <div class="form-group offset-6 col-md-6 input-group-lg">
                <label for="forKpi_title">Total Requested <small>in TZS</small> </label>
                <input type="text" class="form-control" name="kpi_title"
                value="<?= isset($_POST['kpi_title']) ? $_POST['kpi_title'] : ''; ?>"
                placeholder="" required>
            </div>

        </div>


        <div class="form-group col-md-6 input-group-lg">
            {{-- <label for="formGroupProductName">to Be reviewed by</label> --}}
            <select class="form-control" aria-label="Large" id="selectProject"
                name="selectProject" aria-describedby="inputGroup-sizing-sm">
                <option value="select">To be sent to</option>
                <option value="userid1">Chacha</option>
                <option value="userid2">Nguza </option>
            </select>
        </div>



        <div class="form-group col-md-6 input-group-lg">
            {{-- <label for="formGroupProductName">to Be reviewed by</label> --}}
            <select class="form-control" aria-label="Large" id="selectProject"
                name="selectProject" aria-describedby="inputGroup-sizing-sm">
                <option value="select">To be Authorised by</option>
                <option value="userid1">Chacha</option>
                <option value="userid2">Nguza </option>
            </select>
        </div>


        <div class="row">
            <div class="form-group offset-md-8 col-md-4 input-group-lg push-right">
                <button type="submit" class="btn btn-outline-info btn-lg">add new key perfomance indicator</button>
            </div>
            <div class="form-group offset-md-8 col-md-4 input-group-lg pull-right">
                <button type="button" name="btnCancel" class="btn btn-outline-danger btn-lg">cancel entry</button>
            </div>
        </div>
    </form>
</div>

@endsection
