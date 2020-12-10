@extends('layouts.lfinanceadmin')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <h4 class="title text-center">CREATE A TRAINING ADVANCE REQUEST</h4>
        </div>
    </div>
    <form method="post" action="">
        @csrf
        <input type="hidden" value="{{ Auth::user()->id }}" name="creator_id">
        <div class="row">
            <div class="form-group col-md-4 input-group-lg">
                <label for="forKpi_title">Requested by: </label>
                <input type="text" class="form-control" name="kpi_title"
                    value="<?= isset($_POST['kpi_title']) ? $_POST['kpi_title'] : ''; ?>" placeholder="" required>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-4 input-group-lg">
                <label for="forKpi_dc_timing">Staff advance Number: </label>
                <input type="text" class="form-control" name="dc_timing"
                    value="<?= isset($_POST['dc_timing']) ? $_POST['dc_timing'] : ''; ?>" placeholder="">
            </div>
        </div>


        <div class="row">
            <div class="form-group col-md-4 input-group-lg">
                <label for="forunit_of_measure">Project Name: </label>
                <input type="text" class="form-control" name="unit_of_measure"
                    value="<?= isset($_POST['unit_of_measure']) ? $_POST['unit_of_measure'] : ''; ?>" placeholder="">
            </div>
            <div class="form-group col-md-4 input-group-lg">
                <label for="forKpi_method_dc">Cost Center: </label>
                <input type="text" class="form-control" name="method_of_dc"
                    value="<?= isset($_POST['method_of_dc']) ? $_POST['method_of_dc'] : ''; ?>" placeholder="">
            </div>
        </div>

        <div class="row">
            <div class="form-group col-lg-12 input-group-lg">
                <div class="form-group green-border-focus">
                    <label for="forPillarBriefDescription">Purpose of Training Summary:
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
                <h4>Add Travel Activities</h4>
                <br />
                <div class="row">
                    <div class="col-lg-12">

                        <div class="form-group col-lg-12 input-group-lg">
                            <div class="row">

                                <div class="form-group col-lg-12">
                                    <div class="form-group multiple-form-group" data-max=6>
                                        <div class="form-group input-group-lg">

                                            <div class="row">

                                                <div class="form-group col-md-4 input-group-lg">
                                                    <label for="formGroupProductName">Activity</label>
                                                    <input type="text" class="form-control" id="number_of_breaks"
                                                        name="number_of_breaks"
                                                        value="<?= isset($_POST['number_of_breaks']) ? $_POST['number_of_breaks'] : ''; ?>"
                                                        placeholder="">
                                                </div>

                                                <div class="form-group col-md-2 input-group-lg">
                                                    <label for="formGroupProductName">Rate <small> (TZS)</small></label>
                                                    <input type="text" class="form-control" id="number_of_breaks"
                                                        name="number_of_breaks"
                                                        value="<?= isset($_POST['number_of_breaks']) ? $_POST['number_of_breaks'] : ''; ?>"
                                                        placeholder="">
                                                </div>

                                                <div class="col-md-1 input-group-lg">
                                                    <label for="formGroupExampleInput2">Units</label>
                                                    <input type="text" name="sourceReach[]" class="form-control">
                                                </div>


                                                <div class="col-md-2 input-group-lg">
                                                    <label for="formGroupExampleInput2">Number</label>
                                                    <input type="text" name="sourceReach[]" class="form-control">

                                                </div>
                                                <div class="col-md-2 input-group-lg">
                                                    <label for="formGroupExampleInput2">Total Cost<small>
                                                            (TZS)</small></label>
                                                    <input type="text" name="source[]" class="form-control">
                                                </div>
                                                <div class="col-md-1 input-group-lg">
                                                    <br />
                                                    <br />
                                                    <span class="input-group-btn"><button type="button"
                                                            class="btn btn-outline-primary btn-add">+
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
                <label for="forKpi_title">Total Requested: </label>
                <input type="text" class="form-control" name="kpi_title"
                value="<?= isset($_POST['kpi_title']) ? $_POST['kpi_title'] : ''; ?>"
                placeholder="" required>
            </div>

        </div>


        <div class="form-group col-md-6 input-group-lg">
            {{-- <label for="formGroupProductName">to Be reviewed by</label> --}}
            <select class="form-control" aria-label="Large" id="selectProject"
                name="selectProject" aria-describedby="inputGroup-sizing-sm">
                <option value="select">To be reviewed by</option>
                <option value="userid1">Chacha</option>
                <option value="userid2">Nguza </option>
            </select>
        </div>



        <div class="form-group col-md-6 input-group-lg">
            {{-- <label for="formGroupProductName">to Be reviewed by</label> --}}
            <select class="form-control" aria-label="Large" id="selectProject"
                name="selectProject" aria-describedby="inputGroup-sizing-sm">
                <option value="select">To be approved by</option>
                <option value="userid1">Chacha</option>
                <option value="userid2">Nguza </option>
            </select>
        </div>


        <div class="row">
            <div class="card">
                <div class="card-content table-responsive">
                    <div class="form-group col-lg-12 input-group-lg">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">I declare to receive funds and agree to retire it within 10 working days after implementation of activities.</label>
                          </div>
                    </div>
                </div>
            </div>
            </div>

            <br />
            <br />

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
