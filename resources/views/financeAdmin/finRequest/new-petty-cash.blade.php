@extends('layouts.lfinanceadmin')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <h4 class="title text-center">CREATE A PETTY CASH VOUCHER</h4>
        </div>
    </div>
    <form method="post" action="">
        @csrf
        <input type="hidden" value="{{ Auth::user()->id }}" name="creator_id">
        <div class="row">
            <div class="form-group col-md-4 input-group-lg">
                <label for="forKpi_title">Name of Payee: </label>
                <input type="text" class="form-control" name="kpi_title"
                    value="<?= isset($_POST['kpi_title']) ? $_POST['kpi_title'] : ''; ?>" placeholder="" required>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-4 input-group-lg">
                <label for="forKpi_dc_timing">PCV No: </label>
                <input type="text" class="form-control" name="dc_timing"
                    value="<?= isset($_POST['dc_timing']) ? $_POST['dc_timing'] : ''; ?>" placeholder="">
            </div>
        </div>


        <div class="row">
            <div class="form-group col-md-6 input-group-lg">
                <div class="form-group green-border-focus">
                    <label for="forPillarBriefDescription">Address:
                    </label>
                    <textarea class="form-control" name="kpi_desc" rows="4" required></textarea>
                </div>
            </div>

            <div class="form-group col-md-4 input-group-lg">
                <label for="forKpi_method_dc">Cost Center: </label>
                <input type="text" class="form-control" name="method_of_dc"
                    value="<?= isset($_POST['method_of_dc']) ? $_POST['method_of_dc'] : ''; ?>" placeholder="">
            </div>
        </div>


        <div class="card">
            <div class="card-content table-responsive">
                <h4>Petty Cash Voucher Items</h4>
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
                                                    <label for="formGroupProductName">Particulars of payment</label>
                                                    <input type="text" class="form-control" id="number_of_breaks"
                                                        name="number_of_breaks"
                                                        value="<?= isset($_POST['number_of_breaks']) ? $_POST['number_of_breaks'] : ''; ?>"
                                                        placeholder="">
                                                </div>

                                                <div class="col-md-3 input-group-lg">
                                                    <label for="formGroupExampleInput2">Account Code</label>
                                                    <input type="text" name="sourceReach[]" class="form-control">
                                                </div>


                                                <div class="col-md-3 input-group-lg">
                                                    <label for="formGroupExampleInput2">Amount <small>tzs</small></label>
                                                    <input type="text" name="sourceReach[]" class="form-control">

                                                </div>
                                                <div class="col-md-2 input-group-lg">
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
                <label for="forKpi_title">Total Amount: </label>
                <input type="text" class="form-control" name="kpi_title"
                    value="<?= isset($_POST['kpi_title']) ? $_POST['kpi_title'] : ''; ?>" placeholder="" required>
            </div>
        </div>

        <div class="row">
            <div class="form-group col-lg-12 input-group-lg">
                <div class="form-group green-border-focus">
                    <label for="forPillarBriefDescription">Amount in words:
                    </label>
                    <textarea class="form-control" name="kpi_desc" rows="4" required></textarea>
                </div>
            </div>
        </div>



        <div class="row">
        <div class="form-group col-md-6 input-group-lg">
            {{-- <label for="formGroupProductName">to Be reviewed by</label> --}}
            <select class="form-control" aria-label="Large" id="selectProject" name="selectProject"
                aria-describedby="inputGroup-sizing-sm">
                <option value="select">To be Reviewed by</option>
                <option value="userid1">Chacha</option>
                <option value="userid2">Nguza </option>
            </select>
        </div>



        <div class="form-group col-md-6 input-group-lg">
            {{-- <label for="formGroupProductName">to Be reviewed by</label> --}}
            <select class="form-control" aria-label="Large" id="selectProject" name="selectProject"
                aria-describedby="inputGroup-sizing-sm">
                <option value="select">To be Authorised by</option>
                <option value="userid1">Chacha</option>
                <option value="userid2">Nguza </option>
            </select>
        </div>

        <div class="form-group col-md-6 input-group-lg">
            {{-- <label for="formGroupProductName">to Be reviewed by</label> --}}
            <select class="form-control" aria-label="Large" id="selectProject" name="selectProject"
                aria-describedby="inputGroup-sizing-sm">
                <option value="select">To be received by</option>
                <option value="userid1">Chacha</option>
                <option value="userid2">Nguza </option>
            </select>
        </div>
        <div class="form-group col-md-6 input-group-lg">
            <input type="text" class="form-control" name="kpi_title"
                value="<?= isset($_POST['kpi_title']) ? $_POST['kpi_title'] : ''; ?>" placeholder="Requested By" required>
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
