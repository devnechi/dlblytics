@extends('layouts.lfinanceadmin')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <h4 class="title text-center">Petty Cash Reconciliation form</h4>
        </div>
    </div>
    <form method="post" action="">
        @csrf
        <input type="hidden" value="{{ Auth::user()->id }}" name="creator_id">
        <div class="row">
            <div class="form-group col-md-4 input-group-lg">
                <label for="forKpi_title">Start Date: </label>
                <input type="date" class="form-control" name="kpi_title"
                    value="<?= isset($_POST['kpi_title']) ? $_POST['kpi_title'] : ''; ?>" placeholder="" required>
            </div>
            <div class="form-group col-md-4 input-group-lg">
                <label for="forKpi_title">End Date: </label>
                <input type="date" class="form-control" name="kpi_title"
                    value="<?= isset($_POST['kpi_title']) ? $_POST['kpi_title'] : ''; ?>" placeholder="" required>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-4 input-group-lg">
                <label for="forKpi_dc_timing">Opening Balance: </label>
                <input type="text" class="form-control" name="dc_timing"
                    value="<?= isset($_POST['dc_timing']) ? $_POST['dc_timing'] : ''; ?>" placeholder="">
            </div>
        </div>

        <div class="card">
            <div class="card-content table-responsive">
                <h4>Petty cash Reconciliation Items</h4>
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
                                                <div class="form-group col-md-3 input-group-lg">
                                                    <label for="formGroupProductName">Name</label>
                                                    <input type="text" class="form-control" id="number_of_breaks"
                                                        name="number_of_breaks"
                                                        value="<?= isset($_POST['number_of_breaks']) ? $_POST['number_of_breaks'] : ''; ?>"
                                                        placeholder="">
                                                </div>

                                                <div class="form-group col-md-4 input-group-lg">
                                                    <label for="formGroupProductName"> Activity Description</label>
                                                    <input type="text" class="form-control" id="number_of_breaks"
                                                        name="number_of_breaks"
                                                        value="<?= isset($_POST['number_of_breaks']) ? $_POST['number_of_breaks'] : ''; ?>"
                                                        placeholder="">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-2 input-group-lg">
                                                    <label for="formGroupExampleInput2">PCV / Receipt number</label>
                                                    <input type="text" name="sourceReach[]" class="form-control">
                                                </div>


                                                <div class="col-md-2 input-group-lg">
                                                    <label for="formGroupExampleInput2">Account Codes</label>
                                                    <input type="text" name="sourceReach[]" class="form-control">

                                                </div>
                                                <div class="col-md-2 input-group-lg">
                                                    <label for="formGroupExampleInput2">Receipts<small>
                                                            (TZS)</small></label>
                                                    <input type="text" name="source[]" class="form-control">
                                                </div>
                                                <div class="col-md-2 input-group-lg">
                                                    <label for="formGroupExampleInput2">Payments<small>
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
                <p>Petty cash expediture and Current Balance</p>

                <h3>Total PC/ Expenditures : <strong>990,000</strong></h3>

            </div>
            <div class="form-group offset-6 col-md-6 input-group-lg">
                <h3>Current Balance : <strong>10,0000</strong></h3>

            </div>
        </div>



        {{-- cash out break down Reconciliation --}}
        <div class="card">
            <div class="card-content table-responsive">
                <h4>Cash Reconciliation</h4>
                <br />
                <div class="row">
                    <div class="col-lg-12">

                        <p>Formular :</p>

                        <h3>Expected Cash in box = <strong>Total float Amount - Petty cash
                                spent</strong></h3>

                        <br />
                        <p>Notes and Coins Break down</p>

                        <div class="row">
                            <div class="form-group col-md-6 input-group-lg">
                                <table class="table">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Note/Coin</th>
                                            <th scope="col">Qty</th>
                                            <th scope="col">Cash out</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>10000 x</td>
                                            <td>
                                                <div class="row">
                                                    <div class="col-lg-6 input-group-lg">
                                                        <input type="text" name="cashout1" class="form-control"
                                                            placeholder="1">
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="row">
                                                    <div class="col-lg-12 input-group-lg">
                                                        <input type="text" name="cashout1" class="form-control"
                                                            placeholder="10000">
                                                    </div>
                                                </div>
                                            </td>

                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>5000 x</td>
                                            <td>
                                                <div class="row">
                                                    <div class="col-lg-6 input-group-lg">
                                                        <input type="text" name="cashout1" class="form-control"
                                                            placeholder="0">
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
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>2000 x</td>
                                            <td>
                                                <div class="row">
                                                    <div class="col-lg-6 input-group-lg">
                                                        <input type="text" name="cashout1" class="form-control"
                                                            placeholder="0">
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

                                        </tr>
                                        <tr>
                                            <th scope="row">4</th>
                                            <td>1000 x</td>
                                            <td>
                                                <div class="row">
                                                    <div class="col-lg-6 input-group-lg">
                                                        <input type="text" name="cashout1" class="form-control"
                                                            placeholder="0">
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
                                        </tr>
                                        <tr>
                                            <th scope="row">5</th>
                                            <td>500 x</td>
                                            <td>
                                                <div class="row">
                                                    <div class="col-lg-6 input-group-lg">
                                                        <input type="text" name="cashout1" class="form-control"
                                                            placeholder="0">
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
                                        </tr>
                                    </tbody>
                                </table>


                                <br />
                                <br />
                                <div class="container">
                                    <div class="row">
                                        <div class="form-group col-md-8 input-group-lg">
                                            <h4>Cash in Hand = <strong> 10,000</strong></h4>
                                            <div class="form-check form-check-pcr">
                                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                <label class="form-check-label" for="exampleCheck1"> Cash in Hand confirmed, <strong> Select IF YES</strong>.</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
</div>



<div class="row">
    <div class="form-group col-lg-12 input-group-lg">
        <div class="form-group green-border-focus">
            <label for="forPillarBriefDescription">Comments:
            </label>
            <textarea class="form-control" name="kpi_desc" rows="10"></textarea>
        </div>
    </div>
</div>


<div class="form-group col-md-6 input-group-lg">
    {{-- <label for="formGroupProductName">to Be reviewed by</label> --}}
    <select class="form-control" aria-label="Large" id="selectProject" name="selectProject"
        aria-describedby="inputGroup-sizing-sm">
        <option value="select">Prepare by</option>
        <option value="userid1">Chacha</option>
        <option value="userid2">Nguza </option>
    </select>
</div>



<div class="form-group col-md-6 input-group-lg">
    {{-- <label for="formGroupProductName">to Be reviewed by</label> --}}
    <select class="form-control" aria-label="Large" id="selectProject" name="selectProject"
        aria-describedby="inputGroup-sizing-sm">
        <option value="select">To be verified by</option>
        <option value="userid1">Executive director</option>
        <option value="userid2">Auditor </option>
    </select>
</div>



<br />
<br />

<div class="row">
    <div class="form-group offset-md-8 col-md-4 input-group-lg push-right">
        <button type="submit" class="btn btn-outline-info btn-lg">create petty cash reconciliation</button>
    </div>
    <div class="form-group offset-md-8 col-md-4 input-group-lg pull-right">
        <button type="button" name="btnCancel" class="btn btn-outline-danger btn-lg">cancel entry</button>
    </div>
</div>
</form>
</div>
@endsection
