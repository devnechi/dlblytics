@extends('layouts.lfinanceadmin')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <h4 class="title text-center">Create Pay Slip</h4>
        </div>
    </div>
    <form method="post" action="">
        @csrf
        <input type="hidden" value="{{ Auth::user()->id }}" name="creator_id">
        <div class="row">
            <div class="form-group col-md-4 input-group-lg">
                <label for="forKpi_title">Payment slip for the month of: <strong> Dec 2020</strong> </label>

            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-4 input-group-lg">
                <label for="forKpi_dc_timing">Name: </label>
                <input type="text" class="form-control" name="dc_timing"
                    value="<?= isset($_POST['dc_timing']) ? $_POST['dc_timing'] : ''; ?>" placeholder="Bernard">
            </div>
            <div class="form-group col-md-4 input-group-lg">
                <label for="forKpi_dc_timing">Employee Number: </label>
                <input type="text" class="form-control" name="dc_timing"
                    value="<?= isset($_POST['dc_timing']) ? $_POST['dc_timing'] : ''; ?>" placeholder="00345">
            </div>
        </div>


        <div class="row">
            <div class="form-group col-md-4 input-group-lg">
                <label for="forunit_of_measure">NSSF number: </label>
                <input type="text" class="form-control" name="unit_of_measure"
                    value="<?= isset($_POST['unit_of_measure']) ? $_POST['unit_of_measure'] : ''; ?>" placeholder="">
            </div>
            <div class="form-group col-md-4 input-group-lg">
                <label for="forKpi_method_dc">Cost Center: </label>
                <select class="form-control" aria-label="Large" id="selectProject"
                name="selectProject" aria-describedby="inputGroup-sizing-sm">
                <option value="select">Currency type</option>
                <option value="userid1">usd</option>
                <option value="userid2">tzs </option>
            </select>
            </div>
        </div>


        <div class="row">
            <div class="form-group col-md-4 input-group-lg">
                <label for="forunit_of_measure">USD amount: </label>
                <input type="text" class="form-control" name="unit_of_measure"
                    value="<?= isset($_POST['unit_of_measure']) ? $_POST['unit_of_measure'] : ''; ?>" placeholder="">
            </div>
            <div class="form-group col-md-4 input-group-lg">
                <label for="forunit_of_measure">current Exchange rate </label>
                <input type="text" class="form-control" name="unit_of_measure"
                    value="<?= isset($_POST['unit_of_measure']) ? $_POST['unit_of_measure'] : ''; ?>" placeholder="">
            </div>
            <div class="form-group col-md-4 input-group-lg">
                <label for="forunit_of_measure">TZs Amount: </label>
                <input type="text" class="form-control" name="unit_of_measure"
                    value="<?= isset($_POST['unit_of_measure']) ? $_POST['unit_of_measure'] : ''; ?>" placeholder="">
            </div>
        </div>


        <div class="row">
            <div class="form-group col-md-4 input-group-lg">
                <label for="forunit_of_measure">Basic Pay: </label>
                <input type="text" class="form-control" name="unit_of_measure"
                    value="<?= isset($_POST['unit_of_measure']) ? $_POST['unit_of_measure'] : ''; ?>" placeholder="">
            </div>

        </div>

        <div class="row">
            <div class="form-group col-md-4 input-group-lg">
                <label for="forunit_of_measure">Salary Increment: </label>
                <input type="text" class="form-control" name="unit_of_measure"
                    value="<?= isset($_POST['unit_of_measure']) ? $_POST['unit_of_measure'] : ''; ?>" placeholder="">
            </div>
            <div class="form-group col-md-4 input-group-lg">
                <label for="forunit_of_measure">Retention Scheme: </label>
                <input type="text" class="form-control" name="unit_of_measure"
                    value="<?= isset($_POST['unit_of_measure']) ? $_POST['unit_of_measure'] : ''; ?>" placeholder="">
            </div>
            <div class="form-group col-md-4 input-group-lg">
                <label for="forunit_of_measure">Gross Salary: </label>
                <input type="text" class="form-control" name="unit_of_measure"
                    value="<?= isset($_POST['unit_of_measure']) ? $_POST['unit_of_measure'] : ''; ?>" placeholder="">
            </div>

        </div>

         <h2><strong>Less</strong></h2>
            <br />

        <div class="row">
            <div class="form-group col-md-4 input-group-lg">
                <label for="forunit_of_measure">Unpaid Holidays: </label>
                <input type="text" class="form-control" name="unit_of_measure"
                    value="<?= isset($_POST['unit_of_measure']) ? $_POST['unit_of_measure'] : ''; ?>" placeholder="">
            </div>
            <div class="form-group col-md-4 input-group-lg">
                <label for="forunit_of_measure">Unpaid Hours: </label>
                <input type="text" class="form-control" name="unit_of_measure"
                    value="<?= isset($_POST['unit_of_measure']) ? $_POST['unit_of_measure'] : ''; ?>" placeholder="">
            </div>
            <div class="form-group col-md-4 input-group-lg">
                <label for="forunit_of_measure"> Net Earnings: </label>
                <input type="text" class="form-control" name="unit_of_measure"
                    value="<?= isset($_POST['unit_of_measure']) ? $_POST['unit_of_measure'] : ''; ?>" placeholder="">
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-4 input-group-lg">
                <label for="forunit_of_measure"> Taxable Earnings:  </label>
                <input type="text" class="form-control" name="unit_of_measure"
                    value="<?= isset($_POST['unit_of_measure']) ? $_POST['unit_of_measure'] : ''; ?>" placeholder="">
            </div>
            <div class="form-group col-md-4 input-group-lg">
                <label for="forunit_of_measure"> PAYEE:  </label>
                <input type="text" class="form-control" name="unit_of_measure"
                    value="<?= isset($_POST['unit_of_measure']) ? $_POST['unit_of_measure'] : ''; ?>" placeholder="">
            </div>
            <div class="form-group col-md-4 input-group-lg">
                <label for="forunit_of_measure"> Taxfree allowance - NSSF 10 %:  </label>
                <input type="text" class="form-control" name="unit_of_measure"
                    value="<?= isset($_POST['unit_of_measure']) ? $_POST['unit_of_measure'] : ''; ?>" placeholder="">
            </div>
        </div>

        <h2><strong>Deductions</strong></h2>
        <br />
        <br />
        <div class="row">
            <div class="form-group col-md-4 input-group-lg">
                <label for="forunit_of_measure"> NSSF:  </label>
                <input type="text" class="form-control" name="unit_of_measure"
                    value="<?= isset($_POST['unit_of_measure']) ? $_POST['unit_of_measure'] : ''; ?>" placeholder="">
            </div>
            <div class="form-group col-md-4 input-group-lg">
                <label for="forunit_of_measure"> Staff Welfare:  </label>
                <input type="text" class="form-control" name="unit_of_measure"
                    value="<?= isset($_POST['unit_of_measure']) ? $_POST['unit_of_measure'] : ''; ?>" placeholder="">
            </div>
            <div class="form-group col-md-4 input-group-lg">
                <label for="forunit_of_measure"> Retention Scheme  </label>
                <input type="text" class="form-control" name="unit_of_measure"
                    value="<?= isset($_POST['unit_of_measure']) ? $_POST['unit_of_measure'] : ''; ?>" placeholder="">
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-4 input-group-lg">
                <label for="forunit_of_measure"> Other Deductions  </label>
                <input type="text" class="form-control" name="unit_of_measure"
                    value="<?= isset($_POST['unit_of_measure']) ? $_POST['unit_of_measure'] : ''; ?>" placeholder="">
            </div>
        </div>


        <div class="row">
            <div class="form-group offset-6 col-md-6 input-group-lg">
                <h3>Total Deductions: <strong>56,000.00</strong></h3>
            </div>
        </div>
        <div class="row">

            <div class="form-group offset-6 col-md-6 input-group-lg">
                <h2>Net Pay:<strong>566,000.00</strong></h2>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-4 input-group-lg">
                <label for="forunit_of_measure">Bank:  </label>
                <input type="text" class="form-control" name="unit_of_measure"
                    value="<?= isset($_POST['unit_of_measure']) ? $_POST['unit_of_measure'] : ''; ?>" placeholder="">
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-4 input-group-lg">
                <label for="forunit_of_measure"> Branch: </label>
                <input type="text" class="form-control" name="unit_of_measure"
                    value="<?= isset($_POST['unit_of_measure']) ? $_POST['unit_of_measure'] : ''; ?>" placeholder="">
            </div>
        </div>


        <div class="row">
            <div class="form-group col-md-4 input-group-lg">
                <label for="forunit_of_measure"> Account Number:  </label>
                <input type="text" class="form-control" name="unit_of_measure"
                    value="<?= isset($_POST['unit_of_measure']) ? $_POST['unit_of_measure'] : ''; ?>" placeholder="">
            </div>
        </div>


        <div class="row">
            <div class="form-group offset-md-8 col-md-4 input-group-lg push-right">
                <button type="submit" class="btn btn-outline-info btn-lg"> Create Pay Slip</button>
            </div>
            <div class="form-group offset-md-8 col-md-4 input-group-lg pull-right">
                <button type="button" name="btnCancel" class="btn btn-outline-danger btn-lg">cancel entry</button>
            </div>
        </div>
    </form>
</div>
@endsection
