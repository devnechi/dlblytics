@extends('layouts.lfinanceadmin')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <h4 class="title text-center">PAYMENT REQUISITION FORM</h4>
        </div>
    </div>
    <form method="post" action="">
        @csrf
        <input type="hidden" value="{{ Auth::user()->id }}" name="creator_id">
        <div class="row">
            <div class="form-group col-md-4 input-group-lg">
                <label for="forKpi_title">Applicant Name: </label>
                <input type="text" class="form-control" name="kpi_title"
                    value="<?= isset($_POST['kpi_title']) ? $_POST['kpi_title'] : ''; ?>" placeholder="" required>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-4 input-group-lg">
                <label for="forKpi_dc_timing">Designation: </label>
                <input type="text" class="form-control" name="dc_timing"
                    value="<?= isset($_POST['dc_timing']) ? $_POST['dc_timing'] : ''; ?>" placeholder="">
            </div>
        </div>


        <div class="row">
            <div class="form-group col-md-4 input-group-lg">
                <label for="forunit_of_measure">Staff Advance No: </label>
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
                    <label for="forPillarBriefDescription">Purpose of Payment:
                    </label>
                    <textarea class="form-control" name="kpi_desc" rows="10" required></textarea>
                </div>
            </div>
        </div>

        <div class="card">

            <div class="card-content table-responsive">
                <h4>Add Items</h4>
                <br />
                <div class="row">
                    <div class="col-lg-12">

                        <div class="form-group col-lg-12 input-group-lg">
                            <div class="row">

                                <div class="form-group col-lg-12">
                                    <div class="form-group multiple-form-group" data-max=6>
                                        <div class="form-group input-group-lg">

                                            <div class="row">

                                                <div class="form-group col-md-3 input-group-lg">
                                                    <label for="formGroupProductName">Item Description</label>
                                                    <input type="text" class="form-control" id="number_of_breaks"
                                                        name="number_of_breaks"
                                                        value="<?= isset($_POST['number_of_breaks']) ? $_POST['number_of_breaks'] : ''; ?>"
                                                        placeholder="">
                                                </div>
                                                <div class="col-md-4 input-group-lg">
                                                    <label for="formGroupExampleInput2">Activity</label>
                                                    <input type="text" name="sourceReach[]" class="form-control">
                                                </div>


                                                <div class="col-md-2 input-group-lg">
                                                    <label for="formGroupExampleInput2">Amount</label>
                                                    <input type="text" name="sourceReach[]" class="form-control">

                                                </div>
                                                <div class="col-md-2 input-group-lg">

                                                    <label for="formGroupProductName">Currency type</label>
                                                    <select class="form-control" aria-label="Large" id="selectProject"
                                                        name="selectProject" aria-describedby="inputGroup-sizing-sm">
                                                        <option value="select">currency type</option>
                                                        <option value="userid1">TZS</option>
                                                        <option value="userid2">USD </option>
                                                    </select>
                                                </div>

                                                <div class="col-md-1 input-group-lg">
                                                    <br />
                                                    <br />
                                                    <span class="input-group-btn"><button type="button"
                                                            class="btn btn-outline-primary btn-add">+
                                                        </button></span>
                                                </div>

                                              <hr style="background-color: aqua;">
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


        <br />
        <br />
        <div class="row">

            <div class="form-group offset-6 col-md-6 input-group-lg">
                <label for="forKpi_title">Total Requested: </label>
                <input type="text" class="form-control" name="kpi_title"
                    value="<?= isset($_POST['kpi_title']) ? $_POST['kpi_title'] : ''; ?>" placeholder="" required>
            </div>

        </div>

        <div class="row">
            <div class="form-group col-lg-12 input-group-lg">
                <div class="form-group green-border-focus">
                    <label for="forPillarBriefDescription">Total Amount in words:
                    </label>
                    <textarea class="form-control" name="kpi_desc" rows="4" required></textarea>
                </div>
            </div>
        </div>

        <div class="form-group col-md-6 input-group-lg">
            {{-- <label for="formGroupProductName">to Be reviewed by</label> --}}
            <select class="form-control" aria-label="Large" id="selectProject" name="selectProject"
                aria-describedby="inputGroup-sizing-sm">
                <option value="select">Requested by</option>
                <option value="userid1">Employee</option>
                <option value="userid2">Staff </option>
                <option value="userid2">Director </option>
                <option value="userid2">Finance Admin </option>
                <option value="userid2">Manager </option>

            </select>
        </div>

        <div class="form-group col-md-6 input-group-lg">
            {{-- <label for="formGroupProductName">to Be reviewed by</label> --}}
            <select class="form-control" aria-label="Large" id="selectProject" name="selectProject"
                aria-describedby="inputGroup-sizing-sm">
                <option value="select">Reviewed by</option>
                <option value="userid2">Director </option>
                <option value="userid2">Finance Admin </option>
                <option value="userid2">Manager</option>
            </select>
        </div>


        <div class="form-group col-md-6 input-group-lg">
            {{-- <label for="formGroupProductName">to Be reviewed by</label> --}}
            <select class="form-control" aria-label="Large" id="selectProject" name="selectProject"
                aria-describedby="inputGroup-sizing-sm">
                <option value="select">To be approved by</option>
                <option value="userid2">Director </option>
                <option value="userid2">Finance Admin </option>
                <option value="userid2">Manager</option>
            </select>
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
