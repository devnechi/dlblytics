@extends('layouts.lfinanceadmin')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <h4 class="title text-center">Registration of users to a Workshop</h4>
        </div>
    </div>
    <form method="post" action="">
        @csrf
        <input type="hidden" value="{{ Auth::user()->id }}" name="creator_id">
        <div class="row">
            <div class="form-group col-md-4 input-group-lg">
                <label for="forKpi_title">Activity Title: </label>
                <input type="text" class="form-control" name="kpi_title"
                    value="<?= isset($_POST['kpi_title']) ? $_POST['kpi_title'] : ''; ?>" placeholder="" required>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-4 input-group-lg">
                <label for="forKpi_dc_timing">Location: </label>
                <input type="text" class="form-control" name="dc_timing"
                    value="<?= isset($_POST['dc_timing']) ? $_POST['dc_timing'] : ''; ?>" placeholder="">
            </div>
        </div>


        <div class="card">

            <div class="card-content table-responsive">
                <h4>PARTICIPANT'S RELEVANT INFORMATION</h4>
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
                                                    <label for="formGroupProductName">First Name</label>
                                                    <input type="text" class="form-control" id="number_of_breaks"
                                                        name="number_of_breaks"
                                                        value="<?= isset($_POST['number_of_breaks']) ? $_POST['number_of_breaks'] : ''; ?>"
                                                        placeholder="">
                                                </div>
                                                <div class="form-group col-md-4 input-group-lg">
                                                    <label for="formGroupProductName">Second Name</label>
                                                    <input type="text" class="form-control" id="number_of_breaks"
                                                        name="number_of_breaks"
                                                        value="<?= isset($_POST['number_of_breaks']) ? $_POST['number_of_breaks'] : ''; ?>"
                                                        placeholder="">
                                                </div>
                                                <div class="form-group col-md-4 input-group-lg">
                                                    <label for="formGroupProductName">Lasts Name</label>
                                                    <input type="text" class="form-control" id="number_of_breaks"
                                                        name="number_of_breaks"
                                                        value="<?= isset($_POST['number_of_breaks']) ? $_POST['number_of_breaks'] : ''; ?>"
                                                        placeholder="">
                                                </div>
                                            </div>
                                            <div class="row">

                                                <div class="form-group col-md-6 input-group-lg">
                                                    <label for="formGroupProductName">Organisation/Institution</label>
                                                    <input type="text" class="form-control" id="number_of_breaks"
                                                        name="number_of_breaks"
                                                        value="<?= isset($_POST['number_of_breaks']) ? $_POST['number_of_breaks'] : ''; ?>"
                                                        placeholder="">
                                                </div>

                                                <div class="form-group col-md-6 input-group-lg">
                                                    <label for="formGroupProductName">Designation</label>
                                                    <input type="text" class="form-control" id="number_of_breaks"
                                                        name="number_of_breaks"
                                                        value="<?= isset($_POST['number_of_breaks']) ? $_POST['number_of_breaks'] : ''; ?>"
                                                        placeholder="">
                                                </div>

                                                <div class="col-md-6 input-group-lg">
                                                    <label for="formGroupExampleInput2">Phone Number</label>
                                                    <input type="text" name="sourceReach[]" class="form-control">
                                                </div>


                                                <div class="col-md-6 input-group-lg">
                                                    <label for="formGroupExampleInput2">Email</label>
                                                    <input type="text" name="sourceReach[]" class="form-control">

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
        <div class="form-group col-md-6 input-group-lg">
            <select class="form-control" aria-label="Large" id="selectProject"
                name="selectProject" aria-describedby="inputGroup-sizing-sm">
                <option value="select">To prepared by</option>
                <option value="userid1">Chacha</option>
                <option value="userid2">Nguza </option>
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
