@extends('layouts.lfinanceadmin')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <h4 class="title text-center">Bank Reconciliation form</h4>
        </div>
    </div>
    <form method="post" action="">
        @csrf
        <input type="hidden" value="{{ Auth::user()->id }}" name="creator_id">
        <div class="row">
            <div class="form-group col-md-4 input-group-lg">
                <label for="forKpi_title">Account Name: </label>
                <input type="text" class="form-control" name="kpi_title"
                    value="<?= isset($_POST['kpi_title']) ? $_POST['kpi_title'] : ''; ?>" placeholder="" required>
            </div>
            <div class="form-group col-md-4 input-group-lg">
                <label for="forKpi_title">Account Number: </label>
                <input type="text" class="form-control" name="kpi_title"
                    value="<?= isset($_POST['kpi_title']) ? $_POST['kpi_title'] : ''; ?>" placeholder="" required>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-4 input-group-lg">
                <label for="forKpi_dc_timing">Bank Name: </label>
                <input type="text" class="form-control" name="dc_timing"
                    value="<?= isset($_POST['dc_timing']) ? $_POST['dc_timing'] : ''; ?>" placeholder="">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-4 input-group-lg">
                <label for="forunit_of_measure">Bank Reconciliation as At </label>
                <input type="text" class="form-control" name="unit_of_measure"
                    value="<?= isset($_POST['unit_of_measure']) ? $_POST['unit_of_measure'] : ''; ?>" placeholder="">
            </div>
        </div>


        <div class="row">
            <div class="form-group col-md-4 input-group-lg">
                <label for="forunit_of_measure"> Closing Balance per Bank Statement</label>
                <input type="text" class="form-control" name="unit_of_measure"
                    value="<?= isset($_POST['unit_of_measure']) ? $_POST['unit_of_measure'] : ''; ?>" placeholder="">
            </div>
        </div>
        <div class="card">
            <div class="card-content table-responsive">
                <h4><strong>LESS:</strong> Unprecedented cheques</h4>
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
                                                    <label for="formGroupProductName">Date</label>
                                                    <input type="date" class="form-control" id="number_of_breaks"
                                                        name="number_of_breaks"
                                                        value="<?= isset($_POST['number_of_breaks']) ? $_POST['number_of_breaks'] : ''; ?>"
                                                        placeholder="">
                                                </div>

                                            </div>

                                            <div class="row">
                                                <div class="form-group col-md-4 input-group-lg">
                                                    <label for="formGroupProductName">Cheque Number</label>
                                                    <input type="text" class="form-control" id="number_of_breaks"
                                                        name="number_of_breaks"
                                                        value="<?= isset($_POST['number_of_breaks']) ? $_POST['number_of_breaks'] : ''; ?>"
                                                        placeholder="">
                                                </div>

                                            </div>
                                            <div class="row">
                                                <div class="form-group col-lg-5 input-group-lg">
                                                    <div class="form-group green-border-focus">
                                                        <label for="forPillarBriefDescription">Description:
                                                        </label>
                                                        <textarea class="form-control" name="kpi_desc" rows="4"
                                                            required></textarea>
                                                    </div>
                                                </div>

                                                <div class="col-md-3 input-group-lg">
                                                    <label for="formGroupExampleInput2">Payee</label>
                                                    <input type="text" name="sourceReach[]" class="form-control">

                                                </div>
                                                <div class="col-md-3 input-group-lg">
                                                    <label for="formGroupExampleInput2">Total Amount<small>
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


        <div class="row">
            <div class="form-group col-md-4 input-group-lg">
                <label for="forunit_of_measure"> Total Outstanding cheques</label>
                <input type="text" class="form-control" name="unit_of_measure"
                    value="<?= isset($_POST['unit_of_measure']) ? $_POST['unit_of_measure'] : ''; ?>" placeholder="">
            </div>
        </div>


        <div class="card">
            <div class="card-content table-responsive">
                <h4><strong>ADD:</strong> Receipts In the General Ledger not yet recorded in the Bank Statement</h4>
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
                                                    <label for="formGroupProductName">Date</label>
                                                    <input type="date" class="form-control" id="number_of_breaks"
                                                        name="number_of_breaks"
                                                        value="<?= isset($_POST['number_of_breaks']) ? $_POST['number_of_breaks'] : ''; ?>"
                                                        placeholder="">
                                                </div>

                                            </div>

                                            <div class="row">
                                                <div class="form-group col-md-4 input-group-lg">
                                                    <label for="formGroupProductName">Cheque Number</label>
                                                    <input type="text" class="form-control" id="number_of_breaks"
                                                        name="number_of_breaks"
                                                        value="<?= isset($_POST['number_of_breaks']) ? $_POST['number_of_breaks'] : ''; ?>"
                                                        placeholder="">
                                                </div>

                                            </div>
                                            <div class="row">
                                                <div class="form-group col-lg-5 input-group-lg">
                                                    <div class="form-group green-border-focus">
                                                        <label for="forPillarBriefDescription">Description:
                                                        </label>
                                                        <textarea class="form-control" name="kpi_desc" rows="4"
                                                            required></textarea>
                                                    </div>
                                                </div>

                                                <div class="col-md-3 input-group-lg">
                                                    <label for="formGroupExampleInput2">Payee</label>
                                                    <input type="text" name="sourceReach[]" class="form-control">

                                                </div>
                                                <div class="col-md-3 input-group-lg">
                                                    <label for="formGroupExampleInput2">Total Amount<small>
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


        <div class="row">
            <div class="form-group col-md-4 input-group-lg">
                <label for="forunit_of_measure"> Total Deposits</label>
                <input type="text" class="form-control" name="unit_of_measure"
                    value="<?= isset($_POST['unit_of_measure']) ? $_POST['unit_of_measure'] : ''; ?>" placeholder="">
            </div>
        </div>




        <div class="card">
            <div class="card-content table-responsive">
                <h4><strong>ADD: </strong> Payment deducted in the Bank Statement but not yet reflected in the General Ledger</h4>
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
                                                    <label for="formGroupProductName">Date</label>
                                                    <input type="date" class="form-control" id="number_of_breaks"
                                                        name="number_of_breaks"
                                                        value="<?= isset($_POST['number_of_breaks']) ? $_POST['number_of_breaks'] : ''; ?>"
                                                        placeholder="">
                                                </div>

                                            </div>

                                            <div class="row">
                                                <div class="form-group col-md-4 input-group-lg">
                                                    <label for="formGroupProductName">Cheque Number</label>
                                                    <input type="text" class="form-control" id="number_of_breaks"
                                                        name="number_of_breaks"
                                                        value="<?= isset($_POST['number_of_breaks']) ? $_POST['number_of_breaks'] : ''; ?>"
                                                        placeholder="">
                                                </div>

                                            </div>
                                            <div class="row">
                                                <div class="form-group col-lg-5 input-group-lg">
                                                    <div class="form-group green-border-focus">
                                                        <label for="forPillarBriefDescription">Description:
                                                        </label>
                                                        <textarea class="form-control" name="kpi_desc" rows="4"
                                                            required></textarea>
                                                    </div>
                                                </div>

                                                <div class="col-md-3 input-group-lg">
                                                    <label for="formGroupExampleInput2">Payee</label>
                                                    <input type="text" name="sourceReach[]" class="form-control">

                                                </div>
                                                <div class="col-md-3 input-group-lg">
                                                    <label for="formGroupExampleInput2">Total Amount<small>
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


        <div class="row">
            <div class="form-group col-md-4 input-group-lg">
                <label for="forunit_of_measure"> Total Payments</label>
                <input type="text" class="form-control" name="unit_of_measure"
                    value="<?= isset($_POST['unit_of_measure']) ? $_POST['unit_of_measure'] : ''; ?>" placeholder="">
            </div>
        </div>


</div>



<br />
<br />
<div class="row">
    <div class="form-group col-md-6 input-group-lg">
        <label for="forKpi_title">Balance per Reconciliation: </label>
        <input type="text" class="form-control" name="kpi_title"
            value="<?= isset($_POST['kpi_title']) ? $_POST['kpi_title'] : ''; ?>" placeholder="" required>
    </div>
</div>

<div class="row">
    <div class="form-group col-md-6 input-group-lg">
        <label for="forKpi_title">Balance per Quick Book Acc System: </label>
        <input type="text" class="form-control" name="kpi_title"
            value="<?= isset($_POST['kpi_title']) ? $_POST['kpi_title'] : ''; ?>" placeholder="" required>
    </div>
</div>


<div class="row">
    <div class="form-group col-md-6 input-group-lg">
        <label for="forKpi_title"> Difference: </label>
        <input type="text" class="form-control" name="kpi_title"
            value="<?= isset($_POST['kpi_title']) ? $_POST['kpi_title'] : ''; ?>" placeholder="" required>
    </div>

    <div class="form-group col-md-6 input-group-lg">
        <label for="forKpi_title">Unreconciled difference: </label>
        <input type="text" class="form-control" name="kpi_title"
            value="<?= isset($_POST['kpi_title']) ? $_POST['kpi_title'] : ''; ?>" placeholder="" required>
    </div>
</div>
<br />
<br />
<div class="row">
<div class="form-group col-md-6 input-group-lg">
    {{-- <label for="formGroupProductName">to Be reviewed by</label> --}}
    <select class="form-control" aria-label="Large" id="selectProject" name="selectProject"
        aria-describedby="inputGroup-sizing-sm">
        <option value="select">Prepared by</option>
        <option value="userid1">Chacha</option>
        <option value="userid2">Nguza </option>
    </select>
</div>
</div>
<div class="row">
<div class="form-group col-md-6 input-group-lg">
    {{-- <label for="formGroupProductName">to Be reviewed by</label> --}}
    <select class="form-control" aria-label="Large" id="selectProject" name="selectProject"
        aria-describedby="inputGroup-sizing-sm">
        <option value="select">To be reviewed by</option>
        <option value="userid1">Chacha</option>
        <option value="userid2">Nguza </option>
    </select>
</div>
</div>

<div class="row">
<div class="form-group col-md-6 input-group-lg">
    {{-- <label for="formGroupProductName">to Be reviewed by</label> --}}
    <select class="form-control" aria-label="Large" id="selectProject" name="selectProject"
        aria-describedby="inputGroup-sizing-sm">
        <option value="select">To be approved by</option>
        <option value="userid1">Chacha</option>
        <option value="userid2">Nguza </option>
    </select>
</div>
</div>

<br />
<br />

<div class="row">
    <div class="form-group offset-md-8 col-md-4 input-group-lg push-right">
        <button type="submit" class="btn btn-outline-info btn-lg">create report</button>
    </div>
    <div class="form-group offset-md-8 col-md-4 input-group-lg pull-right">
        <button type="button" name="btnCancel" class="btn btn-outline-danger btn-lg">cancel entry</button>
    </div>
</div>
</form>
</div>
@endsection
