@extends('layouts.lfinanceadmin')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <h4 class="title text-center">Create Journal Voucher</h4>
        </div>
    </div>
    <form method="post" action="">
        @csrf
        <input type="hidden" value="{{ Auth::user()->id }}" name="creator_id">
        <div class="row">
            <div class="form-group col-md-4 input-group-lg">
                <label for="forKpi_title">Date: <strong>12 Dec 2020</strong></label>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-4 input-group-lg">
                <label for="forKpi_title">Journal Voucher number: <strong>#0012</strong></label>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-4 input-group-lg">
                <label for="forKpi_dc_timing">Name: </label>
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
            <div class="form-group col-md-3 input-group-lg">
                <label for="formGroupProductName">Type of Currency</label>
                <select class="form-control" aria-label="Large" id="selectProject" name="selectProject"
                    aria-describedby="inputGroup-sizing-sm">
                    <option value="select">Select Type of Currency</option>
                    <option value="userid1">USD</option>
                    <option value="userid2">TZS </option>
                </select>
            </div>
        </div>


        <div class="row">
            <div class="form-group col-md-2 input-group-lg">
                <label for="formGroupProductName">Fund Code</label>
                <input type="text" class="form-control" id="number_of_breaks" name="number_of_breaks"
                    value="<?= isset($_POST['number_of_breaks']) ? $_POST['number_of_breaks'] : ''; ?>" placeholder="">
            </div>

            <div class="form-group col-md-2 input-group-lg">
                <label for="formGroupExampleInput2">Accounts code</label>
                <input type="text" name="sourceReach[]" class="form-control">
            </div>
        </div>

        <div class="card">
            <div class="card-content table-responsive">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="form-group col-md-8 input-group-lg">
                                <table class="table">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Description</th>
                                            <th scope="col">Debit (DR)</th>
                                            <th scope="col">Credit (CR)</th>

                                        </tr>
                                    </thead>
                                    <tbody>

                                        <tr>
                                            <th scope="row">1</th>
                                            <td>
                                                <div class="row">
                                                    <div class="col-lg-12 input-group-lg">
                                                        <input type="text" name="cashout1" class="form-control"
                                                            placeholder="journal entry">
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="row">
                                                    <div class="col-lg-12 input-group-lg">
                                                        <input type="text" name="cashout1" class="form-control"
                                                            placeholder="0">
                                                    </div>
                                                </div>
                                            </td>
                                            <td>

                                            </td>

                                        </tr>

                                        <tr>
                                            <th scope="row">2</th>
                                            <td>
                                                <div class="row">
                                                    <div class="col-lg-12 input-group-lg">
                                                        <input type="text" name="cashout1" class="form-control"
                                                            placeholder="journal entry">
                                                    </div>
                                                </div>
                                            </td>
                                            <td>

                                            </td>
                                            <td>
                                                <div class="row">
                                                    <div class="col-lg-12 input-group-lg">
                                                        <input type="text" name="cashout1" class="form-control"
                                                            placeholder="0">
                                                    </div>
                                                </div>
                                            </td>

                                        </tr>

                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>


        <div class="row">
            <div class="form-group col-md-6 input-group-lg">
                <div class="form-group green-border-focus">
                    <label for="forPillarBriefDescription">Comments:
                    </label>
                    <textarea class="form-control" name="kpi_desc" rows="6" required></textarea>
                </div>
            </div>
        </div>

        <div class="form-group col-md-4 input-group-lg">
            {{-- <label for="formGroupProductName">to Be reviewed by</label> --}}
            <select class="form-control" aria-label="Large" id="selectProject" name="selectProject"
                aria-describedby="inputGroup-sizing-sm">
                <option value="select">Prepared by</option>
                <option value="userid1">Chacha</option>
                <option value="userid2">Nguza </option>
            </select>
        </div>



        <div class="form-group col-md-4 input-group-lg">
            {{-- <label for="formGroupProductName">to Be reviewed by</label> --}}
            <select class="form-control" aria-label="Large" id="selectProject" name="selectProject"
                aria-describedby="inputGroup-sizing-sm">
                <option value="select">To be approved by</option>
                <option value="userid1">Chacha</option>
                <option value="userid2">Nguza </option>
            </select>
        </div>

        <br />
        <br />

        <div class="row">
            <div class="form-group offset-md-8 col-md-4 input-group-lg push-right">
                <button type="submit" class="btn btn-outline-info btn-lg">create journal voucher</button>
            </div>
            <div class="form-group offset-md-8 col-md-4 input-group-lg pull-right">
                <button type="button" name="btnCancel" class="btn btn-outline-danger btn-lg">cancel entry</button>
            </div>
        </div>
    </form>
</div>
@endsection
