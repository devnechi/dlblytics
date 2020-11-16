@extends('layouts.ladmin')

@section('content')
<div class="container-fluid">
    <!-- // style="display: none;" -->
    <!-- panel create sr Administrator -->
    <div id="pnl_select_pillars" class="panel panel-default" style="display: show;">
        <div class="panel-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header" data-background-color="orange">
                            <h4 class="title text-center">Update Data</h4>
                        </div>
                        <div class="card-content table-responsive">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group offset-md-3 col-md-6 input-group-lg">
                                        <!-- <label for="exampleFormControlSelect1" class="control-label">select below:</label> -->
                                        <select class="form-control" aria-label="Large" id="selectPillar"
                                            name="selectPillar" aria-describedby="inputGroup-sizing-sm">
                                            <option value="select">Select Pillar </option>
                                            <option value="cb">Capacity Building</option>
                                            <option value="ce">Community engagement</option>
                                            <option value="ds">Data Science</option>
                                            <option value="ri">Research and Innovation</option>
                                            <option value="is">Institutional Strengthening</option>

                                        </select>
                                    </div>
                                </div>
                            </div>
                            <!-- end of row -->
                        </div>
                    </div>
                </div>
                <!-- end of first column -->
            </div>
        </div>
    </div>
    <!-- end of panel -->


    {{-- selected pillars panel --}}
    <!-- pillar one: capacity building -->
    <div id="pnl_cb_pillar" class="panel panel-default" style="display: none;">
        <div class="panel-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header" data-background-color="orange">
                            <h4 class="title text-center">CAPACITY BUILDING INDICATOR</h4>
                            <p class="category text-center">Update dlab capacity building activities</p>
                        </div>
                        <div class="card-content table-responsive">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group offset-md-3 col-md-6 input-group-lg">
                                        <!-- <label for="exampleFormControlSelect1" class="control-label">select below:</label> -->
                                        <select class="form-control" aria-label="Large" id="selectCBindicator"
                                            name="selectCBindicator" aria-describedby="inputGroup-sizing-sm">
                                            <option value="select">Select Indicator </option>
                                            <option value="indicator1">Number of packaged data "Use Stories"</option>
                                            <option value="indicator4">Number of Data Activities facilitated by dLab
                                            </option>
                                            <option value="indicator5">Number of dLab's Training Package provided to
                                                Target Stakeholders</option>
                                            <option value="indicator6">Number of data related Capacity Building
                                                Activities</option>
                                            <option value="indicator7">Percentage of activity participants who are
                                                Youths</option>
                                            <option value="indicator8">Percentage of activity participants who are
                                                Female</option>
                                            <option value="indicator11">Number of Organisations engaged</option>
                                            <option value="indicator12">Number of Data Fellows engaged by dLab</option>
                                            <option value="indicator14">Number of Data Ambassadors engaged by dLab
                                            </option>
                                            <option value="indicator15">Number of Partnerships formed by dLab</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <!-- end of row -->
                        </div>
                    </div>
                </div>
                <!-- end of first column -->
            </div>
        </div>
    </div>
    <!-- end of panel -->
    <!-- end pillar one: capacity building -->


    {{-- selected pillars panel --}}
    <!-- pillar two: community engagement -->
    <div id="pnl_ce_pillar" class="panel panel-default" style="display: none;">
        <div class="panel-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header" data-background-color="orange">
                            <h4 class="title text-center">COMMUNITY ENGAGEMENT INDICATOR</h4>
                            <p class="category text-center">Update dlab community engagement activities</p>
                        </div>
                        <div class="card-content table-responsive">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group offset-md-3 col-md-6 input-group-lg">
                                        <!-- <label for="exampleFormControlSelect1" class="control-label">select below:</label> -->
                                        <select class="form-control" aria-label="Large" id="selectCEindicator"
                                            name="selectCEindicator" aria-describedby="inputGroup-sizing-sm">
                                            <option value="select">Select Indicator </option>
                                            <option value="indicator1">Number of packaged data "Use Stories"</option>
                                            <option value="indicator2">Percentage of activity participants who reported
                                                positive change as a result of dLab's Intervention</option>
                                            <option value="indicator3">Number of Stakeholders accessing Data Tools
                                                supported by dLab</option>
                                            <option value="indicator4">Number of Data Activities facilitated by dLab
                                            </option>
                                            <option value="indicator6">Number of data related Capacity Building
                                                Activities</option>
                                            <option value="indicator7">Percentage of activity participants who are
                                                Youths</option>
                                            <option value="indicator8">Percentage of activity participants who are
                                                Female</option>
                                            <option value="indicator9">Number of New Community-generated Data Points
                                            </option>
                                            <option value="indicator11">Number of Organisations engaged</option>
                                            <option value="indicator15">Number of Partnerships formed by dLab</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <!-- end of row -->
                        </div>
                    </div>
                </div>
                <!-- end of first column -->
            </div>
        </div>
    </div>
    <!-- end of panel -->
    <!-- end pillar two: community engagement -->


    {{-- selected pillars panel --}}
    <!-- pillar three: RESEARCH & INNOVATION -->
    <div id="pnl_ri_pillar" class="panel panel-default" style="display: none;">
        <div class="panel-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header" data-background-color="orange">
                            <h4 class="title text-center">RESEARCH & INNOVATION INDICATOR</h4>
                            <p class="category text-center">Update dlab research and innovation activities</p>
                        </div>
                        <div class="card-content table-responsive">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group offset-md-3 col-md-6 input-group-lg">
                                        <!-- <label for="exampleFormControlSelect1" class="control-label">select below:</label> -->
                                        <select class="form-control" aria-label="Large" id="selectRIindicator"
                                            name="selectRIindicator aria-describedby=" inputGroup-sizing-sm">
                                            <option value="select">Select Indicator </option>
                                            <option value="indicator1">Number of packaged data "Use Stories"</option>
                                            <option value="indicator3">Number of Stakeholders accessing Data Tools
                                                supported by dLab</option>
                                            <option value="indicator6">Number of data related Capacity Building
                                                Activities</option>
                                            <option value="indicator7">Percentage of activity participants who are
                                                Youths</option>
                                            <option value="indicator8">Percentage of activity participants who are
                                                Female</option>
                                            <option value="indicator10">Number of Data Products and Services supported
                                                by dLab</option>
                                            <option value="indicator11">Number of Organisations engaged</option>
                                            <option value="indicator15">Number of Partnerships formed by dLab</option>
                                            <option value="indicator16">Number of Stakeholders engaged in dLab's
                                                Innovation Program</option>
                                            <option value="indicator17">Value of Grants facilitated by dLab (USD)
                                            </option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <!-- end of row -->
                        </div>
                    </div>
                </div>
                <!-- end of first column -->
            </div>
        </div>
    </div>
    <!-- end of panel -->
    <!-- end pillar three: RESEARCH & INNOVATION -->



    {{-- selected pillars panel --}}
    <!-- pillar four(4): data science -->
    <div id="pnl_ds_pillar" class="panel panel-default" style="display: none;">
        <div class="panel-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header" data-background-color="orange">
                            <h4 class="title text-center">DATA SCIENCE INDICATOR</h4>
                            <p class="category text-center">Update Data science activity</p>
                        </div>
                        <div class="card-content table-responsive">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group offset-md-3 col-md-6 input-group-lg">
                                        <!-- <label for="exampleFormControlSelect1" class="control-label">select below:</label> -->
                                        <select class="form-control" aria-label="Large" id="selectDSindicator"
                                            name="selectDSindicator" aria-describedby="inputGroup-sizing-sm">
                                            <option value="select">Select </option>
                                            <option value="indicator1">Number of packaged data "Use Stories"</option>
                                            <option value="indicator4">Number of Data Activities facilitated by dLab
                                            </option>
                                            <option value="indicator5">Number of dLab's Training Package provided to
                                                Target Stakeholders</option>
                                            <option value="indicator7">Percentage of activity participants who are
                                                Youths</option>
                                            <option value="indicator8">Percentage of activity participants who are
                                                Female</option>
                                            <option value="indicator10">Number of Data Products and Services supported
                                                by dLab</option>
                                            <option value="indicator11">Number of Organisations engaged</option>
                                            <option value="indicator13">Number of Data Scientists engaged by dLab
                                            </option>
                                            <option value="indicator15">Number of Partnerships formed by dLab</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <!-- end of row -->
                        </div>
                    </div>
                </div>
                <!-- end of first column -->
            </div>
        </div>
    </div>
    <!-- end of panel -->
    <!-- end pillar four (4): data science -->


    {{-- selected pillars panel --}}
    <!-- pillar four(4): data science -->
    <div id="pnl_is_pillar" class="panel panel-default" style="display: none;">
        <div class="panel-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header" data-background-color="orange">
                            <h4 class="title text-center">DATA SCIENCE INDICATOR</h4>
                            <p class="category text-center">Update Data science activity</p>
                        </div>
                        <div class="card-content table-responsive">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group offset-md-3 col-md-6 input-group-lg">
                                        <!-- <label for="exampleFormControlSelect1" class="control-label">select below:</label> -->
                                        <select class="form-control" aria-label="Large" id="selectISindicator"
                                            name="selectISindicator" aria-describedby="inputGroup-sizing-sm">
                                            <option value="select">Select </option>
                                            <option value="#">Number of packaged data "Use Stories"</option>
                                            <option value="#">Number of Data Activities facilitated by dLab</option>
                                            <option value="#">Number of dLab's Training Package provided to Target
                                                Stakeholders</option>
                                            <option value="#">Percentage of activity participants who are Youths
                                            </option>
                                            <option value="#">Percentage of activity participants who are Female
                                            </option>
                                            <option value="#">Number of Data Products and Services supported by dLab
                                            </option>
                                            <option value="#">Number of Organisations engaged</option>
                                            <option value="#">Number of Data Scientists engaged by dLab</option>
                                            <option value="#">Number of Partnerships formed by dLab</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <!-- end of row -->
                        </div>
                    </div>
                </div>
                <!-- end of first column -->
            </div>
        </div>
    </div>
    <!-- end of panel -->
    <!-- end pillar four (4): data science -->




    <!-- KPI-1 panel to add new user stories -->
    <!-- // style="display: none;" -->
    <div id="pnl_kpi_1" class="panel panel-default" style="display: none;">
        <div class="panel-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header" data-background-color="orange">
                            <h3 class="title text-center"> kpi-<strong>1</strong></h3>
                            <h4 class="title text-center">ADD NEW USE STORY</h4>
                            <p class="category text-center">Number of packaged data "Use Stories"</p>
                        </div>
                        <div class="card-content table-responsive">
                            <br />
                            <h2>Use story Details</h2>
                            <br />
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="row">

                                        <div class="form-group col-md-3 input-group-lg pull-right">
                                            <button type="submit" name="submit" type="button"
                                                class="btn btn-outline-success btn-lg" value="Submit">SELECT
                                                PILLAR</button>
                                        </div>
                                    </div>
                                    <br />
                                    <br />
                                    <br />
                                    <div class="row">
                                        <div class="form-group col-md-6 input-group-lg">
                                            <label for="formGroupProductName">Name of Use Story</label>
                                            <input type="text" class="form-control" id="number_of_breaks"
                                                name="number_of_breaks"
                                                value="<?= isset($_POST['number_of_breaks']) ? $_POST['number_of_breaks'] : ''; ?>"
                                                placeholder="">
                                        </div>
                                        {{-- <div class="form-group col-md-6 input-group-lg">
                                            <label for="formGroupProductName">Full Name of Participant. <small
                                                    class="text-muted">originator</small></label>
                                            <input type="text" class="form-control" id="number_of_breaks"
                                                name="number_of_breaks"
                                                value="<?= isset($_POST['number_of_breaks']) ? $_POST['number_of_breaks'] : ''; ?>"
                                                placeholder="">
                                        </div> --}}
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6 input-group-lg">
                                            <label for="formGroupProductName">Name of Organisation/ Individual</label>
                                            <input type="text" class="form-control" id="number_of_breaks"
                                                name="number_of_breaks"
                                                value="<?= isset($_POST['number_of_breaks']) ? $_POST['number_of_breaks'] : ''; ?>"
                                                placeholder="">
                                        </div>
                                        <div class="form-group col-md-6 input-group-lg">
                                            <label for="formGroupProductName">Date of Publishing</label>
                                            ￼ <input type="date" class="form-control" name="bday" min="1000-01-01"
                                                max="3000-12-31" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6 input-group-lg">
                                            <select class="form-control" aria-label="Large" id="selectAccountStatus"
                                                name="selectAccountStatus" aria-describedby="inputGroup-sizing-sm">
                                                <option value="select">Select Sector</option>
                                                <option value="dli">Sector: HIV</option>
                                                <option value="data">Sector: Health</option>
                                                <option value="dcli">Sector: Economic Growth</option>
                                                <option value="dli">Sector: Education</option>
                                                <option value="data">Sector: Governance Decision Making</option>
                                                <option value="dcli">Sector: Gender</option>
                                                <option value="dcli">Other</option>

                                            </select>￼
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="form-group col-md-6 input-group-lg">
                                            <br />
                                            <h2>Upload doc</h2>
                                            <br />
                                            <div class="input-group col-mb-6">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">Upload Use story in PDF</span>
                                                </div>
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="inputGroupFile01">
                                                    <label class="custom-file-label" for="inputGroupFile01">Choose
                                                        file</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-lg-12 input-group-lg">
                                            <div class="form-group green-border-focus">
                                                <label for="exampleFormControlTextarea5">Brief description
                                                    </label>
                                                <textarea class="form-control" id="exampleFormControlTextarea5"
                                                    rows="10"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">


                                        <div class="form-group col-md-3 input-group-lg pull-right">
                                            <button type="submit" name="submit" type="button"
                                                class="btn btn-outline-success btn-lg" value="Submit">NEXT
                                                INDICATOR</button>
                                        </div>

                                        <div class="form-group offset-md-8 col-md-4 input-group-lg push-right">
                                            <button type="submit" name="submit" type="button"
                                                class="btn btn-outline-info btn-lg" value="Submit">SAVE & ADD ANOTHER
                                                RECORD</button>
                                        </div>
                                        <div class="form-group offset-md-9 col-md-3 input-group-lg pull-right">
                                            <button type="submit" name="submit" type="button"
                                                class="btn btn-outline-success btn-lg" value="Submit">SAVE THIS
                                                RECORD</button>
                                        </div>
                                        <div class="form-group offset-md-9 col-md-3 input-group-lg pull-right">
                                            <button type="submit" name="submit" type="button"
                                                class="btn btn-outline-danger btn-lg" value="Submit">CANCEL
                                                ENTRY</button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- end of row -->
                        </div>
                    </div>
                </div>
                <!-- end of first column -->
            </div>
        </div>
    </div>
    <!-- end of panel -->

    <!-- KPI-2: Percentage of activity participants who reported positive change as a result of DCLI Intervention -->
    <!-- // style="display: none;" -->
    <div id="pnl_kpi_2" class="panel panel-default" style="display: none;">
        <div class="panel-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header" data-background-color="orange">
                            <h3 class="title text-center"> kpi-<strong>2</strong></h3>
                            <h4 class="title text-center">Percentage of activity participants who reported positive
                                change as a result of Dlab Intervention</h4>
                            {{-- <p class="category text-center">Percentage of activity participants who reported positive
                                change as a result of Dlab Intervention</p> --}}
                        </div>
                        <div class="card-content table-responsive">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="form-group col-md-6">

                                            <br />
                                            <h2>Details</h2>
                                        </div>
                                    </div>
                                    <hr>
                                    <br />
                                    <div class="row">
                                        <div class="form-group col-md-6 input-group-lg">
                                            <label for="formGroupProductName">Intervention Title</label>
                                            <input type="text" class="form-control" id="number_of_breaks"
                                                name="number_of_breaks"
                                                value="<?= isset($_POST['number_of_breaks']) ? $_POST['number_of_breaks'] : ''; ?>"
                                                placeholder="">
                                        </div>
                                        {{-- <div class="form-group col-md-6 input-group-lg">
                                            <label for="formGroupProductName">Date of Intervention</label>
                                            ￼ <input type="date" class="form-control" name="bday" min="1000-01-01"
                                                max="3000-12-31" class="form-control">

                                        </div> --}}
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6 input-group-lg">
                                            <label for="formGroupProductName">Total number of Participants</label>
                                            <input type="text" class="form-control" id="number_of_breaks"
                                                name="number_of_breaks"
                                                value="<?= isset($_POST['number_of_breaks']) ? $_POST['number_of_breaks'] : ''; ?>"
                                                placeholder="">
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6 input-group-lg">
                                            <label for="formGroupProductName">Number of Female Participants</label>
                                            <input type="text" class="form-control" id="number_of_breaks"
                                                name="number_of_breaks"
                                                value="<?= isset($_POST['number_of_breaks']) ? $_POST['number_of_breaks'] : ''; ?>"
                                                placeholder="">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6 input-group-lg">
                                            <label for="formGroupProductName">Number of Youth Participants</label>
                                            <input type="text" class="form-control" id="number_of_breaks"
                                                name="number_of_breaks"
                                                value="<?= isset($_POST['number_of_breaks']) ? $_POST['number_of_breaks'] : ''; ?>"
                                                placeholder="">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6 input-group-lg">
                                            <label for="formGroupProductName">Total Participants who <strong>Reported
                                                    Positive</strong> change</label>
                                            <input type="text" class="form-control" id="number_of_breaks"
                                                name="number_of_breaks"
                                                value="<?= isset($_POST['number_of_breaks']) ? $_POST['number_of_breaks'] : ''; ?>"
                                                placeholder="">
                                        </div>

                                        <div class="form-group col-md-6 input-group-lg">
                                            <label for="formGroupProductName">Number of Female Participants <strong>Reported
                                                Positive</strong> change</label>
                                            <input type="text" class="form-control" id="number_of_breaks"
                                                name="number_of_breaks"
                                                value="<?= isset($_POST['number_of_breaks']) ? $_POST['number_of_breaks'] : ''; ?>"
                                                placeholder="">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6 input-group-lg">
                                            <label for="formGroupProductName">Number of Youth Participants <strong>Reported
                                                Positive</strong> change</label>
                                            <input type="text" class="form-control" id="number_of_breaks"
                                                name="number_of_breaks"
                                                value="<?= isset($_POST['number_of_breaks']) ? $_POST['number_of_breaks'] : ''; ?>"
                                                placeholder="">
                                        </div>
                                        <div class="form-group col-md-6 input-group-lg">
                                            <label for="formGroupProductName">Indicator Type</label>
                                            <select class="form-control" aria-label="Large" id="selectProject"
                                                name="selectProject" aria-describedby="inputGroup-sizing-sm">
                                                <option value="select">Select type</option>
                                                <option value="urban">Count</option>
                                                <option value="semi_urban">Rate</option>
                                                <option value="rural">Rate</option>
                                                <option value="semi_rural">Percentage</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-6 input-group-lg">
                                            <label for="formGroupProductName">Location of intervention</label>
                                            <select class="form-control" aria-label="Large" id="selectProject"
                                                name="selectProject" aria-describedby="inputGroup-sizing-sm">
                                                <option value="select">Select location</option>
                                                <option value="urban">Urban</option>
                                                <option value="semi_urban">Semi Urban</option>
                                                <option value="rural">Rural</option>
                                                <option value="semi_rural">Semi Rural</option>
                                            </select>
                                            <br />

                                        </div>


                                    </div>

                                    <div class="row">
                                        <div class="form-group col-md-6 input-group-lg">
                                            <br />
                                            <h2>Report uploads</h2>
                                            <label for="formGroupProductName">Link to google form. <small>(showing
                                                    survey findings)</small></label>
                                            <input type="text" class="form-control" id="number_of_breaks"
                                                name="number_of_breaks"
                                                value="<?= isset($_POST['number_of_breaks']) ? $_POST['number_of_breaks'] : ''; ?>"
                                                placeholder="">
                                        </div>

                                        <div class="form-group col-md-6 input-group-lg">
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">Upload signing sheet</span>
                                                </div>
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="inputGroupFile01">
                                                    <label class="custom-file-label" for="inputGroupFile01">Choose
                                                        file</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6 input-group-lg">
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">Upload field report</span>
                                                </div>
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="inputGroupFile01">
                                                    <label class="custom-file-label" for="inputGroupFile01">Choose
                                                        file</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <div class="form-group col-md-6 input-group-lg">
                                    <br />
                                    <h2>Duration</h2>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="formGroupProductName">Start Date</label>
                                            ￼ <input type="date" class="form-control" name="bday" min="1000-01-01"
                                                max="3000-12-31" class="form-control">

                                        </div>
                                        <div class="col-md-6">
                                            <label for="formGroupProductName">End Date</label>
                                            ￼ <input type="date" class="form-control" name="bday" min="1000-01-01"
                                                max="3000-12-31" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <!-- <div class="form-group offset-md-8 col-md-4 input-group-lg push-right">
                                            <button type="submit" name="submit" type="button"
                                                class="btn btn-outline-info btn-lg" value="Submit">SAVE & ADD ANOTHER RECORD</button>
                                        </div> -->
                                <div class="form-group offset-md-9 col-md-3 input-group-lg pull-right">
                                    <button type="submit" name="submit" type="button"
                                        class="btn btn-outline-success btn-lg" value="Submit">SAVE THIS RECORD</button>
                                </div>
                                <div class="form-group offset-md-9 col-md-3 input-group-lg pull-right">
                                    <button type="submit" name="submit" type="button"
                                        class="btn btn-outline-warning btn-lg" value="Submit">CANCEL ENTRY</button>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- end of row -->
                </div>
            </div>
        </div>
        <!-- end of first column -->
    </div>
    <!-- end of panel -->

    <!-- KPI-3 -->
    <!-- // style="display: none;" -->
    <!-- panel create sr Administrator -->
    <div id="pnl_kpi_3" class="panel panel-default" style="display: none;">
        <div class="panel-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header" data-background-color="orange">
                            <h3 class="title text-center"> kpi-<strong>3</strong></h3>
                            <h4 class="title text-center">Number of Stakeholders accessing Data Tools supported by dLab</h4>
                            {{-- <p class="category text-center">Number of Stakeholders accessing Dlab Data Tools</p> --}}
                        </div>
                        <div class="card-content table-responsive">
                            <div class="row">
                                <div class="col-lg-12">
                                    <br />
                                    <h2>Details</h2>
                                    <br />
                                    <div class="row">

                                    </div>


                                    <div class="row">
                                        <div class="form-group col-md-6 input-group-lg">
                                            <br />
                                            <h2>Sources details.</h2>
                                            <div class="row">

                                                <div class="form-group col-lg-12">
                                                    <div class="form-group multiple-form-group" data-max=6>
                                                        <div class="form-group input-group-lg">

                                                            <div class="row">
                                                                <div class="form-group col-md-6 input-group-lg">
                                                                    <label for="formGroupProductName">Name of tool</label>
                                                                    <input type="text" class="form-control" id="number_of_breaks"
                                                                        name="number_of_breaks"
                                                                        value="<?= isset($_POST['number_of_breaks']) ? $_POST['number_of_breaks'] : ''; ?>"
                                                                        placeholder="">
                                                                </div>

                                                                <div class="form-group col-md-6 input-group-lg">
                                                                    <label for="formGroupProductName">Type of tool</label>
                                                                    <select class="form-control" aria-label="Large" id="selectProject"
                                                                        name="selectProject" aria-describedby="inputGroup-sizing-sm">
                                                                        <option value="select">Select type</option>
                                                                        <option value="urban">Online</option>
                                                                        <option value="semi_urban">Offline </option>

                                                                    </select>
                                                                    <br />

                                                                </div>

                                                                <div class="col-md-8 input-group-lg">
                                                                    <label for="formGroupExampleInput2">Total Reach.</label>
                                                                    <input type="text" name="sourceReach[]"
                                                                        class="form-control">

                                                                </div>
                                                                <div class="col-md-8 input-group-lg">
                                                                    <label for="formGroupExampleInput2">Source.</label>
                                                                    <input type="text" name="source[]"
                                                                        class="form-control">
                                                                        <span class="input-group-btn"><button type="button"
                                                                            class="btn btn-outline-primary btn-add">+
                                                                        </button></span>
                                                                        <hr style="background-color: aqua;">
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="form-group col-md-6 input-group-lg">
                                            <br />
                                            <h2>Duration</h2>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label for="formGroupProductName">Start Date</label>
                                                    ￼ <input type="date" class="form-control" name="bday"
                                                        min="1000-01-01" max="3000-12-31" class="form-control">

                                                </div>
                                                <div class="col-md-6">
                                                    <label for="formGroupProductName">End Date</label>
                                                    ￼ <input type="date" class="form-control" name="bday"
                                                        min="1000-01-01" max="3000-12-31" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <!-- <div class="form-group offset-md-8 col-md-4 input-group-lg push-right">
                                          <button type="submit" name="submit" type="button"
                                              class="btn btn-outline-info btn-lg" value="Submit">SAVE & ADD ANOTHER RECORD</button>
                                      </div> -->
                                        <div class="form-group offset-md-9 col-md-3 input-group-lg pull-right">
                                            <button type="submit" name="submit" type="button"
                                                class="btn btn-outline-success btn-lg" value="Submit">SAVE THIS
                                                RECORD</button>
                                        </div>
                                        <div class="form-group offset-md-9 col-md-3 input-group-lg pull-right">
                                            <button type="submit" name="submit" type="button"
                                                class="btn btn-outline-warning btn-lg" value="Submit">CANCEL
                                                ENTRY</button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- end of row -->
                        </div>
                    </div>
                </div>
                <!-- end of first column -->
            </div>
        </div>
    </div>
    <!-- end of panel -->


    <!-- KPI-4 panel Number of Data related Events facilitated by DCLI -->
    <!-- // style="display: none;" -->
    <div id="pnl_kpi_4" class="panel panel-default" style="display: none;">
        <div class="panel-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header" data-background-color="orange">
                            <h3 class="title text-center"> kpi-<strong>4</strong></h3>
                            <h4 class="title text-center">Number of Data related Events facilitated by Dlab</h4>
                            {{-- <p class="category text-center">Number of Data related Events facilitated by Dlab</p> --}}
                        </div>
                        <div class="card-content table-responsive">
                            <div class="row">
                                <div class="col-lg-12">
                                    <br />
                                    <br />

                                    <div class="row">
                                        <div class="form-group col-md-4 input-group-lg">
                                            <br />
                                            <h2>Details</h2>
                                            <label for="formGroupProductName">Name of Event</label>
                                            <input type="text" class="form-control" id="name_of_event"
                                                name="name_of_event" placeholder="">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6 input-group-lg">
                                            <label for="formGroupProductName">Total number of Participants</label>
                                            <input type="text" class="form-control" id="number_of_breaks"
                                                name="number_of_breaks"
                                                value="<?= isset($_POST['number_of_breaks']) ? $_POST['number_of_breaks'] : ''; ?>"
                                                placeholder="">
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="form-group col-md-6 input-group-lg">
                                            <label for="formGroupProductName">Number of Female Participants</label>
                                            <input type="text" class="form-control" id="number_of_breaks"
                                                name="number_of_breaks"
                                                value="<?= isset($_POST['number_of_breaks']) ? $_POST['number_of_breaks'] : ''; ?>"
                                                placeholder="">
                                        </div>
                                        <div class="form-group col-md-6 input-group-lg">
                                            <label for="formGroupProductName">Number of Youth Participants</label>
                                            <input type="text" class="form-control" id="number_of_breaks"
                                                name="number_of_breaks"
                                                value="<?= isset($_POST['number_of_breaks']) ? $_POST['number_of_breaks'] : ''; ?>"
                                                placeholder="">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6 input-group-lg">
                                            <div class="input-group input-group-lg mb-3">
                                                <select class="custom-select" id="selectTypeOfEvent">
                                                    <option selected>Select event type...</option>
                                                    <option value="1">Online</option>
                                                    <option value="2">Offline</option>
                                                </select>
                                                <div class="input-group-append">
                                                    <label class="input-group-text" for="inputGroupSelect02">Select
                                                        event
                                                        type</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="form-group col-md-6 input-group-lg">
                                            <div class="input-group input-group-lg mb-3">
                                                <select class="custom-select" id="selectTypeOfEvent">
                                                    <option selected>Select event location...</option>
                                                    <option value="1">Online</option>
                                                    <option value="2">Urban</option>
                                                    <option value="3">Semi Urban</option>
                                                    <option value="4">Rural</option>
                                                    <option value="5">Semi Rural</option>
                                                </select>
                                                <div class="input-group-append">
                                                    <label class="input-group-text" for="inputGroupSelect02">Select
                                                        event
                                                        location</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <br />
                                    <h2>Add location</h2>
                                    <br />
                                    <div class="row">

                                        <div class="form-group col-md-4 input-group-lg">
                                            <label for="formGroupProductName">Enter Region</label>
                                            <input type="text" class="form-control" id="name_of_event"
                                                name="name_of_event" placeholder="enter region">
                                        </div>
                                        <div class="form-group col-md-4 input-group-lg">
                                            <label for="formGroupProductName">Enter District</label>
                                            <input type="text" class="form-control" id="name_of_event"
                                                name="name_of_event" placeholder="enter district">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="form-group col-md-6 input-group-lg">
                                            <br />
                                            <h2>Report upload</h2>
                                            <br />
                                            <div class="input-group col-mb-6">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">Upload signing sheet</span>
                                                </div>
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="inputGroupFile01">
                                                    <label class="custom-file-label" for="inputGroupFile01">Choose
                                                        file</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6 input-group-lg">
                                            <div class="input-group col-mb-6">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">Upload report</span>
                                                </div>
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="inputGroupFile01">
                                                    <label class="custom-file-label" for="inputGroupFile01">Choose
                                                        file</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6 input-group-lg">
                                            <br />
                                            <h2>Duration</h2>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label for="formGroupProductName">Start Date</label>
                                                    ￼ <input type="date" class="form-control" name="bday"
                                                        min="1000-01-01" max="3000-12-31" class="form-control">

                                                </div>
                                                <div class="col-md-6">
                                                    <label for="formGroupProductName">End Date</label>
                                                    ￼ <input type="date" class="form-control" name="bday"
                                                        min="1000-01-01" max="3000-12-31" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-lg-9 input-group-lg">
                                            <div class="form-group green-border-focus">
                                                <label for="exampleFormControlTextarea5">short description of
                                                    event</label>
                                                <textarea class="form-control" id="exampleFormControlTextarea5"
                                                    rows="10"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <!-- <div class="form-group offset-md-8 col-md-4 input-group-lg push-right">
                                        <button type="submit" name="submit" type="button"
                                            class="btn btn-outline-info btn-lg" value="Submit">SAVE & ADD ANOTHER RECORD</button>
                                    </div> -->
                                        <div class="form-group offset-md-9 col-md-3 input-group-lg pull-right">
                                            <button type="submit" name="submit" type="button"
                                                class="btn btn-outline-success btn-lg" value="Submit">SAVE THIS
                                                RECORD</button>
                                        </div>
                                        <div class="form-group offset-md-9 col-md-3 input-group-lg pull-right">
                                            <button type="submit" name="submit" type="button"
                                                class="btn btn-outline-warning btn-lg" value="Submit">CANCEL
                                                ENTRY</button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- end of row -->
                        </div>
                    </div>
                </div>
                <!-- end of first column -->
            </div>
        </div>
    </div>
    <!-- end of panel -->

    <!-- KPI-5 Number of DCLI Training Package provided to Target Stakeholders -->
    <!-- // style="display: none;" -->
    <div id="pnl_kpi_5" class="panel panel-default" style="display: none;">
        <div class="panel-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header" data-background-color="orange">
                            <h3 class="title text-center"> kpi-<strong>5</strong></h3>
                            <h4 class="title text-center"> Number of dLab's Training Package provided to Target Stakeholders</h4>
                            {{-- <p class="category text-center">Number of Data related Events facilitated by Dlab</p> --}}
                        </div>
                        <div class="card-content table-responsive">
                            <div class="row">
                                <div class="col-lg-12">

                                    <br />
                                    <br />
                                    <br />
                                    <div class="row">
                                        <div class="form-group col-md-4 input-group-lg">
                                            <label for="formGroupProductName">Name of Training Package</label>
                                            <input type="text" class="form-control" id="name_of_event"
                                                name="name_of_event" placeholder="name of event">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6 input-group-lg">
                                            <div class="input-group input-group-lg mb-3">
                                                <select class="custom-select" id="selectTypeOfEvent">
                                                    <option selected>Select type training package...</option>
                                                    <option value="1">Online</option>
                                                    <option value="2">Offline</option>
                                                </select>
                                                <div class="input-group-append">
                                                    <label class="input-group-text" for="inputGroupSelect02">Select
                                                        event
                                                        type</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- <div class="row">
                                        <div class="form-group col-md-6 input-group-lg">
                                            <div class="input-group input-group-lg mb-3">
                                                <select class="custom-select" id="selectTypeOfEvent">
                                                    <option selected>Select event location...</option>
                                                    <option value="1">Online</option>
                                                    <option value="2">Urban</option>
                                                    <option value="3">Semi Urban</option>
                                                    <option value="4">Rural</option>
                                                    <option value="5">Semi Rural</option>
                                                </select>
                                                <div class="input-group-append">
                                                    <label class="input-group-text" for="inputGroupSelect02">Select
                                                        training
                                                        location</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div> --}}
                                    <div class="row">

                                        <div class="form-group col-md-6 input-group-lg">
                                            <label for="formGroupProductName">Date Developed</label>
                                            ￼ <input type="date" class="form-control" name="bday" min="1000-01-01"
                                                max="3000-12-31" class="form-control">

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-lg-12 input-group-lg">
                                            <div class="form-group green-border-focus">
                                                <label for="exampleFormControlTextarea5">Short description of Trainig
                                                    package</label>
                                                <textarea class="form-control" id="exampleFormControlTextarea5"
                                                    rows="10"></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <!-- <div class="form-group offset-md-8 col-md-4 input-group-lg push-right">
                                        <button type="submit" name="submit" type="button"
                                            class="btn btn-outline-info btn-lg" value="Submit">SAVE & ADD ANOTHER RECORD</button>
                                    </div> -->
                                        <div class="form-group offset-md-9 col-md-3 input-group-lg pull-right">
                                            <button type="submit" name="submit" type="button"
                                                class="btn btn-outline-success btn-lg" value="Submit">SAVE THIS
                                                RECORD</button>
                                        </div>
                                        <div class="form-group offset-md-9 col-md-3 input-group-lg pull-right">
                                            <button type="submit" name="submit" type="button"
                                                class="btn btn-outline-warning btn-lg" value="Submit">CANCEL
                                                ENTRY</button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- end of row -->
                        </div>
                    </div>
                </div>
                <!-- end of first column -->
            </div>
        </div>

    </div>
    <!-- end of panel -->


    <!-- KPI-6 Number of DCLI data related Capacity Building Activities -->
    <!-- // style="display: none;" -->
    <div id="pnl_kpi_6" class="panel panel-default" style="display: none;">
        <div class="panel-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header" data-background-color="orange">
                            <h3 class="title text-center"> kpi-<strong>6</strong></h3>
                            <h4 class="title text-center"> Capacity Building Activity Details</h4>
                        {{-- <p class="category text-center">Number of Dlab data related Capacity Building Activities</p> --}}
                        </div>
                        <div class="card-content table-responsive">
                            <div class="row">
                                <div class="col-lg-12">

                                    <br />
                                    <br />
                                    <h2>Activity details</h2>
                                    <br />
                                    <div class="row">
                                        <div class="form-group col-md-6 input-group-lg">

                                            <label for="formGroupProductName"> Title of Capacity Building
                                                Activity</label>
                                            <input type="text" class="form-control" id="number_of_breaks"
                                                name="number_of_breaks"
                                                value="<?= isset($_POST['number_of_breaks']) ? $_POST['number_of_breaks'] : ''; ?>"
                                                placeholder="">
                                        </div>
                                        <div class="form-group col-md-6 input-group-lg">
                                            <label for="formGroupProductName"> Type of Capacity Building Activity
                                            </label>

                                            <select class="form-control" aria-label="Large" id="selectAccountStatus"
                                                name="selectAccountStatus" aria-describedby="inputGroup-sizing-sm">
                                                <option value="select">Select activity type</option>
                                                <option value="dli">Training</option>
                                                <option value="data">Mentorship/Coaching Activity</option>
                                                <option value="dli">other</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="form-group col-md-6 input-group-lg">
                                            <label for="formGroupProductName">Number of Male Participants</label>
                                            <input type="text" class="form-control" id="number_of_breaks"
                                                name="number_of_breaks"
                                                value="<?= isset($_POST['number_of_breaks']) ? $_POST['number_of_breaks'] : ''; ?>"
                                                placeholder="">
                                        </div>
                                        <div class="form-group col-md-6 input-group-lg">
                                            <label for="formGroupProductName">Number of Female Participants</label>
                                            <input type="text" class="form-control" id="number_of_breaks"
                                                name="number_of_breaks"
                                                value="<?= isset($_POST['number_of_breaks']) ? $_POST['number_of_breaks'] : ''; ?>"
                                                placeholder="">
                                                <br />
                                        </div>
                                    </div>
                                    <br />
                                            <h2>Participants Age Group</h2>
                                            <br />
                                    <div class="row">
                                        <div class="form-group col-md-6 input-group-lg">

                                            <label for="formGroupProductName">Age group 18-19 (youth) participants</label>
                                            <input type="text" class="form-control" id="number_of_breaks"
                                                name="number_of_breaks"
                                                value="<?= isset($_POST['number_of_breaks']) ? $_POST['number_of_breaks'] : ''; ?>"
                                                placeholder="">
                                        </div>

                                        <div class="form-group col-md-6 input-group-lg">
                                            <label for="formGroupProductName">Age groupd 20-24 participants</label>
                                            <input type="text" class="form-control" id="number_of_breaks"
                                                name="number_of_breaks"
                                                value="<?= isset($_POST['number_of_breaks']) ? $_POST['number_of_breaks'] : ''; ?>"
                                                placeholder="">
                                        </div>

                                        <div class="form-group col-md-6 input-group-lg">
                                            <label for="formGroupProductName">Adult 25-29 participants</label>
                                            <input type="text" class="form-control" id="number_of_breaks"
                                                name="number_of_breaks"
                                                value="<?= isset($_POST['number_of_breaks']) ? $_POST['number_of_breaks'] : ''; ?>"
                                                placeholder="">
                                        </div>


                                        <div class="form-group col-md-6 input-group-lg">
                                            <label for="formGroupProductName">Age groupd 30-35 participants</label>
                                            <input type="text" class="form-control" id="number_of_breaks"
                                                name="number_of_breaks"
                                                value="<?= isset($_POST['number_of_breaks']) ? $_POST['number_of_breaks'] : ''; ?>"
                                                placeholder="">
                                        </div>

                                        <div class="form-group col-md-6 input-group-lg">
                                            <label for="formGroupProductName">Age groupd 36 and above participants</label>
                                            <input type="text" class="form-control" id="number_of_breaks"
                                                name="number_of_breaks"
                                                value="<?= isset($_POST['number_of_breaks']) ? $_POST['number_of_breaks'] : ''; ?>"
                                                placeholder="">
                                        </div>
                                    </div>
                                    <div class="row">

                                        <div class="col-md-6">
                                            <br />
                                            <h2>Duration</h2>
                                            <br />
                                            <div class="row">
                                                <div class="col-md-6 form-group col-md-6 input-group-lg">
                                                    <label for="formGroupProductName">Start date</label>
                                                    <input type="date" class="form-control" id="number_of_breaks"
                                                        name="number_of_breaks"
                                                        value="<?= isset($_POST['number_of_breaks']) ? $_POST['number_of_breaks'] : ''; ?>"
                                                        placeholder="">
                                                </div>
                                                <div class="col-md-6 form-group col-md-6 input-group-lg">
                                                    <label for="formGroupProductName">End date</label>
                                                    <input type="date" class="form-control" id="number_of_breaks"
                                                        name="number_of_breaks"
                                                        value="<?= isset($_POST['number_of_breaks']) ? $_POST['number_of_breaks'] : ''; ?>"
                                                        placeholder="">
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6 input-group-lg">
                                            <br />
                                            <h2>Report upload</h2>
                                            <br />
                                            <div class="input-group col-mb-6">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">Upload signing sheet</span>
                                                </div>
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="inputGroupFile01">
                                                    <label class="custom-file-label" for="inputGroupFile01">Choose
                                                        file</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6 input-group-lg">
                                            <div class="input-group col-mb-6">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">Upload report</span>
                                                </div>
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="inputGroupFile01">
                                                    <label class="custom-file-label" for="inputGroupFile01">Choose
                                                        file</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="form-group col-lg-12 input-group-lg">
                                            <br />
                                            <h2>Description</h2>
                                            <br />
                                            <div class="form-group green-border-focus">
                                                <label for="exampleFormControlTextarea5">Description of the Training
                                                    Package</label>
                                                <textarea class="form-control" id="exampleFormControlTextarea5"
                                                    rows="10"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <!-- <div class="form-group offset-md-8 col-md-4 input-group-lg push-right">
                                          <button type="submit" name="submit" type="button"
                                              class="btn btn-outline-info btn-lg" value="Submit">SAVE & ADD ANOTHER RECORD</button>
                                      </div> -->
                                        <div class="form-group offset-md-9 col-md-3 input-group-lg pull-right">
                                            <button type="submit" name="submit" type="button"
                                                class="btn btn-outline-success btn-lg" value="Submit">SAVE THIS
                                                RECORD</button>
                                        </div>
                                        <div class="form-group offset-md-9 col-md-3 input-group-lg pull-right">
                                            <button type="submit" name="submit" type="button"
                                                class="btn btn-outline-warning btn-lg" value="Submit">CANCEL
                                                ENTRY</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end of row -->
                        </div>
                    </div>
                </div>
                <!-- end of first column -->
            </div>
        </div>
    </div>
    <!-- end of panel -->


    <!-- KPI-7 Number of DCLI data related Capacity Building Activities -->
    <!-- // style="display: none;" -->
    <div id="pnl_kpi_7" class="panel panel-default" style="display: none;">
        <div class="panel-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header" data-background-color="orange">
                            <h3 class="title text-center"> kpi-<strong>7 (to be deleted)</strong></h3>
                            <h4 class="title text-center">Percentage of activity participants who are Youths<strong>Youth
                                    and
                                    Women</strong></h4>
                        </div>
                        <div class="card-content table-responsive">
                            <div class="row">
                                <div class="col-lg-12">

                                    <br />
                                    <br />
                                    <div class="row">
                                        <div class="form-group col-md-6 input-group-lg">
                                            <label for="formGroupProductName"> Number of youth participants in <strong>
                                                    Decision Making Role</strong></label>
                                            <input type="text" class="form-control" id="number_of_breaks"
                                                name="number_of_breaks"
                                                value="<?= isset($_POST['number_of_breaks']) ? $_POST['number_of_breaks'] : ''; ?>"
                                                placeholder="">
                                        </div>
                                        <div class="form-group col-md-6 input-group-lg">
                                            <label for="formGroupProductName"> Number of youth participants in <strong>
                                                    Advisory Role</strong></label>
                                            <input type="text" class="form-control" id="number_of_breaks"
                                                name="number_of_breaks"
                                                value="<?= isset($_POST['number_of_breaks']) ? $_POST['number_of_breaks'] : ''; ?>"
                                                placeholder="">
                                        </div>
                                        <div class="form-group col-md-6 input-group-lg">
                                            <label for="formGroupProductName"> Number of youth participants in <strong>
                                                    Supporting Team Role</strong></label>
                                            <input type="text" class="form-control" id="number_of_breaks"
                                                name="number_of_breaks"
                                                value="<?= isset($_POST['number_of_breaks']) ? $_POST['number_of_breaks'] : ''; ?>"
                                                placeholder="">
                                        </div>
                                        <div class="form-group col-md-6 input-group-lg">
                                            <label for="formGroupProductName"> Demographic:<strong> Female
                                                </strong></label>
                                            <input type="text" class="form-control" id="number_of_breaks"
                                                name="number_of_breaks"
                                                value="<?= isset($_POST['number_of_breaks']) ? $_POST['number_of_breaks'] : ''; ?>"
                                                placeholder="">
                                        </div>

                                    </div>
                                    <div class="row">
                                        <!-- <div class="form-group offset-md-8 col-md-4 input-group-lg push-right">
                                          <button type="submit" name="submit" type="button"
                                              class="btn btn-outline-info btn-lg" value="Submit">SAVE & ADD ANOTHER RECORD</button>
                                      </div> -->
                                        <div class="form-group offset-md-9 col-md-3 input-group-lg pull-right">
                                            <button type="submit" name="submit" type="button"
                                                class="btn btn-outline-success btn-lg" value="Submit">SAVE THIS
                                                RECORD</button>
                                        </div>
                                        <div class="form-group offset-md-9 col-md-3 input-group-lg pull-right">
                                            <button type="submit" name="submit" type="button"
                                                class="btn btn-outline-warning btn-lg" value="Submit">CANCEL
                                                ENTRY</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end of row -->
                        </div>
                    </div>
                </div>
                <!-- end of first column -->
            </div>
        </div>
    </div>
    <!-- end of panel -->


    <!-- KPI-8 Number of DCLI data related Capacity Building Activities -->
    <!-- // style="display: none;" -->
    <div id="pnl_kpi_8" class="panel panel-default" style="display: none;">
        <div class="panel-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header" data-background-color="orange">
                            <h3 class="title text-center"> kpi-<strong>8 (to be deleted)</strong></h3>
                            <h4 class="title text-center">Percentage of activity participants <strong> who are Female</strong></h4>
                        </div>
                        <div class="card-content table-responsive">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <ul class="nav navbar-nav navbar-right">
                                                <li><a href="#">Project Selected: <strong>DCLI</strong></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <br />
                                    <br />
                                    <br />
                                    <div class="row">
                                        <div class="form-group col-md-6 input-group-lg">
                                            <label for="formGroupProductName"> Number of Women participants in <strong>
                                                    Decision Making Role</strong></label>
                                            <input type="text" class="form-control" id="number_of_breaks"
                                                name="number_of_breaks"
                                                value="<?= isset($_POST['number_of_breaks']) ? $_POST['number_of_breaks'] : ''; ?>"
                                                placeholder="">
                                        </div>
                                        <div class="form-group col-md-6 input-group-lg">
                                            <label for="formGroupProductName"> Number of Women participants in <strong>
                                                    Advisory Role</strong></label>
                                            <input type="text" class="form-control" id="number_of_breaks"
                                                name="number_of_breaks"
                                                value="<?= isset($_POST['number_of_breaks']) ? $_POST['number_of_breaks'] : ''; ?>"
                                                placeholder="">
                                        </div>
                                        <div class="form-group col-md-6 input-group-lg">
                                            <label for="formGroupProductName"> Number of Women participants in <strong>
                                                    Supporting Team Role</strong></label>
                                            <input type="text" class="form-control" id="number_of_breaks"
                                                name="number_of_breaks"
                                                value="<?= isset($_POST['number_of_breaks']) ? $_POST['number_of_breaks'] : ''; ?>"
                                                placeholder="">
                                        </div>
                                        <div class="form-group col-md-6 input-group-lg">
                                            <label for="formGroupProductName"> Demographic:<strong> Youth
                                                </strong></label>
                                            <input type="text" class="form-control" id="number_of_breaks"
                                                name="number_of_breaks"
                                                value="<?= isset($_POST['number_of_breaks']) ? $_POST['number_of_breaks'] : ''; ?>"
                                                placeholder="">
                                        </div>

                                    </div>
                                    <div class="row">
                                        <!-- <div class="form-group offset-md-8 col-md-4 input-group-lg push-right">
                                        <button type="submit" name="submit" type="button"
                                            class="btn btn-outline-info btn-lg" value="Submit">SAVE & ADD ANOTHER RECORD</button>
                                    </div> -->
                                        <div class="form-group offset-md-9 col-md-3 input-group-lg pull-right">
                                            <button type="submit" name="submit" type="button"
                                                class="btn btn-outline-success btn-lg" value="Submit">SAVE THIS
                                                RECORD</button>
                                        </div>
                                        <div class="form-group offset-md-9 col-md-3 input-group-lg pull-right">
                                            <button type="submit" name="submit" type="button"
                                                class="btn btn-outline-warning btn-lg" value="Submit">CANCEL
                                                ENTRY</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end of row -->
                        </div>
                    </div>
                </div>
                <!-- end of first column -->
            </div>
        </div>
    </div>
    <!-- end of panel -->


    <!-- KPI-9 Number of DCLI data related Capacity Building Activities -->
    <!-- // style="display: none;" -->
    <div id="pnl_kpi_9" class="panel panel-default" style="display: none;">
        <div class="panel-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header" data-background-color="orange">
                            <h3 class="title text-center"> kpi-<strong>9</strong></h3>
                            <h4 class="title text-center">Number of New Community-generated Data Points</h4>

                        </div>
                        <div class="card-content table-responsive">
                            <div class="row">
                                <div class="col-lg-12">

                                    <br />
                                    <h2>New Data point generated details</h2>
                                    <br />

                                    <div class="row">
                                        <div class="form-group col-md-6 input-group-lg">
                                            <label for="formGroupProductName">source of new data
                                                point</label>
                                            <input type="text" class="form-control" id="number_of_breaks"
                                                name="number_of_breaks"
                                                value="<?= isset($_POST['number_of_breaks']) ? $_POST['number_of_breaks'] : ''; ?>"
                                                placeholder="">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="form-group col-md-6 input-group-lg">
                                            <label for="formGroupProductName"> Select Associated Sector </label>

                                            <div class="input-group input-group-lg mb-3">
                                                <select class="custom-select" id="selectTypeOfEvent">
                                                    <option selected>Select here..</option>
                                                    <option value="dli">HIV</option>
                                                    <option value="data">Health</option>
                                                    <option value="dli">Gender</option>
                                                    <option value="dli">Economic Growth</option>
                                                    <option value="dli">Employment</option>
                                                    <option value="dli">Drainage</option>
                                                    <option value="dli">Education</option>
                                                    <option value="dli">Behaviour</option>
                                                    <option value="dli">Infrastructure</option>
                                                    <option value="dli">other</option>
                                                </select>
                                                <div class="input-group-append">
                                                    <label class="input-group-text" for="inputGroupSelect02">Select data
                                                        point sector</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6 input-group-lg">
                                            <label for="formGroupProductName"> Type of Data point </label>
                                            <div class="input-group input-group-lg mb-3">
                                                <select class="custom-select" id="selectTypeOfEvent">
                                                    <option selected>Select here.... </option>
                                                    <option value="data">images</option>
                                                    <option value="data">Text</option>
                                                    <option value="data">Video</option>
                                                </select>
                                                <div class="input-group-append">
                                                    <label class="input-group-text" for="inputGroupSelect02">Select data
                                                        point type</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="form-group col-md-6 input-group-lg">

                                            <div class="input-group col-mb-6">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">Upload data point file</span>
                                                </div>
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="inputGroupFile01">
                                                    <label class="custom-file-label" for="inputGroupFile01">Choose
                                                        file</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="form-group col-md-6 input-group-lg">
                                            <br />
                                            <h2>Location</h2>
                                            <br />
                                            <label for="formGroupProductName"> Select source location </label>
                                            <div class="input-group input-group-lg mb-3">
                                                <select class="custom-select" id="selectTypeOfEvent">
                                                    <option selected>Select here...</option>
                                                    <option value="1">Online</option>
                                                    <option value="2">Urban</option>
                                                    <option value="3">Semi Urban</option>
                                                    <option value="4">Rural</option>
                                                    <option value="5">Semi Rural</option>
                                                </select>
                                                <div class="input-group-append">
                                                    <label class="input-group-text" for="inputGroupSelect02">Select data
                                                        point source location</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">

                                        <div class="form-group col-md-4 input-group-lg">
                                            <label for="formGroupProductName">Enter Region</label>
                                            <input type="text" class="form-control" id="name_of_event"
                                                name="name_of_event" placeholder="enter region">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-4 input-group-lg">
                                            <label for="formGroupProductName">Enter District</label>
                                            <input type="text" class="form-control" id="name_of_event"
                                                name="name_of_event" placeholder="enter district">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="form-group col-lg-12 input-group-lg">
                                            <div class="form-group green-border-focus">
                                                <label for="exampleFormControlTextarea5">Description of the <strong> New
                                                        Data point Generated </strong></label>
                                                <textarea class="form-control" id="exampleFormControlTextarea5"
                                                    rows="10"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <!-- <div class="form-group offset-md-8 col-md-4 input-group-lg push-right">
                                          <button type="submit" name="submit" type="button"
                                              class="btn btn-outline-info btn-lg" value="Submit">SAVE & ADD ANOTHER RECORD</button>
                                      </div> -->
                                        <div class="form-group offset-md-9 col-md-3 input-group-lg pull-right">
                                            <button type="submit" name="submit" type="button"
                                                class="btn btn-outline-success btn-lg" value="Submit">SAVE THIS
                                                RECORD</button>
                                        </div>
                                        <div class="form-group offset-md-9 col-md-3 input-group-lg pull-right">
                                            <button type="submit" name="submit" type="button"
                                                class="btn btn-outline-warning btn-lg" value="Submit">CANCEL
                                                ENTRY</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end of row -->
                        </div>
                    </div>
                </div>
                <!-- end of first column -->
            </div>
        </div>
    </div>
    <!-- end of panel -->


    <!-- KPI-10 Number of DCLI data related Capacity Building Activities -->
    <!-- // style="display: none;" -->
    <div id="pnl_kpi_10" class="panel panel-default" style="display: none;">
        <div class="panel-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header" data-background-color="orange">
                            <h3 class="title text-center"> kpi-<strong>10</strong></h3>
                            <h4 class="title text-center">Data Products and Services supported by dLab</h4>
                        </div>
                        <div class="card-content table-responsive">
                            <div class="row">
                                <div class="col-lg-12">
                                    <br />
                                    <h2>Details</h2>
                                    <br />
                                    <div class="row">
                                        <div class="form-group col-md-4 input-group-lg">
                                            <label for="formGroupProductName"> Select Category </label>

                                            <div class="input-group input-group-lg mb-3">
                                                <select class="custom-select" id="selectTypeOfEvent">
                                                    <option selected>Select here..</option>
                                                    <option value="dli">Product</option>
                                                    <option value="data">Service</option>
                                                </select>
                                                <div class="input-group-append">
                                                    <label class="input-group-text" for="inputGroupSelect02">select
                                                        category</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-4 input-group-lg">
                                            <label for="formGroupProductName"> Select type </label>

                                            <div class="input-group input-group-lg mb-3">
                                                <select class="custom-select" id="selectTypeOfEvent">
                                                    <option selected>Select here..</option>
                                                    <option value="dli">Offline</option>
                                                    <option value="data">Online</option>
                                                </select>
                                                <div class="input-group-append">
                                                    <label class="input-group-text" for="inputGroupSelect02">Select
                                                        type</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="form-group col-md-6 input-group-lg">
                                            <label for="formGroupProductName"> Title of <strong>Product or
                                                    Service</strong></label>
                                            <input type="text" class="form-control" id="number_of_breaks"
                                                name="number_of_breaks"
                                                value="<?= isset($_POST['number_of_breaks']) ? $_POST['number_of_breaks'] : ''; ?>"
                                                placeholder="">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="form-group col-md-6 input-group-lg">
                                            <h6> Type of support</h6>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="defaultCheckT">
                                                <label class="form-check-label" for="defaultCheckT">
                                                    Technical Support
                                                </label>
                                            </div>

                                            <div class="form-group green-border-focus">
                                                <label for="exampleFormControlTextarea5">Short Description of Technical Support</strong></label>
                                                <textarea class="form-control" id="exampleFormControlTextarea5"
                                                    rows="10"></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">

                                        <div class="form-group col-md-6 input-group-lg">

                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="defaultCheckF">
                                                <label class="form-check-label" for="defaultCheckF">
                                                    Financial Support
                                                </label>
                                            </div>


                                            <div class="form-group green-border-focus">
                                                <label for="exampleFormControlTextarea5">Amount offered</strong></label>
                                                <input type="text" class="form-control" id="number_of_breaks"
                                                name="number_of_breaks"
                                                value="<?= isset($_POST['number_of_breaks']) ? $_POST['number_of_breaks'] : ''; ?>"
                                                placeholder="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">

                                        <div class="col-md-6">
                                            <br />
                                            <h2>Duration</h2>
                                            <br />
                                            <div class="row">
                                                <div class="col-md-6 form-group col-md-6 input-group-lg">
                                                    <label for="formGroupProductName">Start date</label>
                                                    <input type="date" class="form-control" id="number_of_breaks"
                                                        name="number_of_breaks"
                                                        value="<?= isset($_POST['number_of_breaks']) ? $_POST['number_of_breaks'] : ''; ?>"
                                                        placeholder="">
                                                </div>
                                                <div class="col-md-6 form-group col-md-6 input-group-lg">
                                                    <label for="formGroupProductName">End date</label>
                                                    <input type="date" class="form-control" id="number_of_breaks"
                                                        name="number_of_breaks"
                                                        value="<?= isset($_POST['number_of_breaks']) ? $_POST['number_of_breaks'] : ''; ?>"
                                                        placeholder="">
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-lg-12 input-group-lg">
                                            <br />
                                            <h2>Description</h2>
                                            <br />
                                            <div class="form-group green-border-focus">
                                                <label for="exampleFormControlTextarea5">Description of the
                                                    <strong>Product or Service</strong></label>
                                                <textarea class="form-control" id="exampleFormControlTextarea5"
                                                    rows="10"></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <!-- <div class="form-group offset-md-8 col-md-4 input-group-lg push-right">
                                          <button type="submit" name="submit" type="button"
                                              class="btn btn-outline-info btn-lg" value="Submit">SAVE & ADD ANOTHER RECORD</button>
                                      </div> -->
                                        <div class="form-group offset-md-9 col-md-3 input-group-lg pull-right">
                                            <button type="submit" name="submit" type="button"
                                                class="btn btn-outline-success btn-lg" value="Submit">SAVE THIS
                                                RECORD</button>
                                        </div>
                                        <div class="form-group offset-md-9 col-md-3 input-group-lg pull-right">
                                            <button type="submit" name="submit" type="button"
                                                class="btn btn-outline-warning btn-lg" value="Submit">CANCEL
                                                ENTRY</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end of row -->
                        </div>
                    </div>
                </div>
                <!-- end of first column -->
            </div>
        </div>
    </div>
    <!-- end of panel -->


    <!-- KPI-11 Number of DCLI data related Capacity Building Activities -->
    <!-- // style="display: none;" -->
    <div id="pnl_kpi_11" class="panel panel-default" style="display: none;">
        <div class="panel-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header" data-background-color="orange">
                            <h3 class="title text-center"> kpi-<strong>11</strong></h3>
                            <h4 class="title text-center"> Organisations Engaged</h4>
                        </div>
                        <div class="card-content table-responsive">
                            <div class="row">
                                <div class="col-lg-12">
                                    <br />
                                    <h2>Organisation details</h2>
                                    <br />
                                    <br />
                                    <div class="row">
                                        <div class="form-group col-md-6 input-group-lg">
                                            <label for="formGroupProductName"> Title of Organisation</label>
                                            <input type="text" class="form-control" id="number_of_breaks"
                                                name="number_of_breaks"
                                                value="<?= isset($_POST['number_of_breaks']) ? $_POST['number_of_breaks'] : ''; ?>"
                                                placeholder="">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6 input-group-lg">
                                            <div class="input-group input-group-lg mb-3">
                                                <select class="custom-select" id="selectTypeOfEvent">
                                                    <option selected>Select here..</option>
                                                    <option value="dli">Urban</option>
                                                    <option value="dli">Semi Urban</option>
                                                    <option value="dli">Rural </option>
                                                    <option value="data">Semi Rural</option>
                                                </select>
                                                <div class="input-group-append">
                                                    <label class="input-group-text" for="inputGroupSelect02">location of
                                                        the
                                                        Organisation</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6 input-group-lg">
                                            <div class="input-group input-group-lg mb-3">
                                                <select class="custom-select" id="selectTypeOfEvent">
                                                    <option selected>Select here..</option>
                                                    <option value="dli">Government</option>
                                                    <option value="data">Private non profit</option>
                                                    <option value="data">Private for profit</option>
                                                </select>
                                                <div class="input-group-append">
                                                    <label class="input-group-text" for="inputGroupSelect02">Type of
                                                        Organisation</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">

                                        <div class="col-md-6">
                                            <br />
                                            <h2>Duration</h2>
                                            <br />
                                            <div class="row">
                                                <div class="col-md-6 form-group col-md-6 input-group-lg">
                                                    <label for="formGroupProductName">Start date</label>
                                                    <input type="date" class="form-control" id="number_of_breaks"
                                                        name="number_of_breaks"
                                                        value="<?= isset($_POST['number_of_breaks']) ? $_POST['number_of_breaks'] : ''; ?>"
                                                        placeholder="">
                                                </div>
                                                <div class="col-md-6 form-group col-md-6 input-group-lg">
                                                    <label for="formGroupProductName">End date</label>
                                                    <input type="date" class="form-control" id="number_of_breaks"
                                                        name="number_of_breaks"
                                                        value="<?= isset($_POST['number_of_breaks']) ? $_POST['number_of_breaks'] : ''; ?>"
                                                        placeholder="">
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-lg-12 input-group-lg">
                                            <div class="form-group green-border-focus">
                                                <label for="exampleFormControlTextarea5">Breif description of the
                                                    engagement</label>
                                                <textarea class="form-control" id="exampleFormControlTextarea5"
                                                    rows="10"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <!-- <div class="form-group offset-md-8 col-md-4 input-group-lg push-right">
                                          <button type="submit" name="submit" type="button"
                                              class="btn btn-outline-info btn-lg" value="Submit">SAVE & ADD ANOTHER RECORD</button>
                                      </div> -->
                                        <div class="form-group offset-md-9 col-md-3 input-group-lg pull-right">
                                            <button type="submit" name="submit" type="button"
                                                class="btn btn-outline-success btn-lg" value="Submit">SAVE THIS
                                                RECORD</button>
                                        </div>
                                        <div class="form-group offset-md-9 col-md-3 input-group-lg pull-right">
                                            <button type="submit" name="submit" type="button"
                                                class="btn btn-outline-warning btn-lg" value="Submit">CANCEL
                                                ENTRY</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end of row -->
                        </div>
                    </div>
                </div>
                <!-- end of first column -->
            </div>
        </div>
    </div>
    <!-- end of panel -->


    <!-- KPI-12 Number of DCLI data related Capacity Building Activities -->
    <!-- // style="display: none;" -->
    <div id="pnl_kpi_12" class="panel panel-default" style="display: none;">
        <div class="panel-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header" data-background-color="orange">
                            <h3 class="title text-center"> kpi-<strong>12, 13, 14</strong></h3>
                            <h4 class="title text-center">Beneficiaries of dLab training</h4>
                        </div>
                        <div class="card-content table-responsive">
                            <div class="row">
                                <div class="col-lg-12">
                                    <br />
                                    <h2>Activity details</h2>
                                    <br />
                                    <br />


                                    <div class="row">
                                        <div class="form-group col-md-6 input-group-lg">
                                            <label for="formGroupProductName">Activity Title</label>
                                            <input type="text" class="form-control" id="number_of_breaks"
                                                name="number_of_breaks"
                                                value="<?= isset($_POST['number_of_breaks']) ? $_POST['number_of_breaks'] : ''; ?>"
                                                placeholder="">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6 input-group-lg">
                                            <label for="formGroupProductName">Number of Male Participants</label>
                                            <input type="text" class="form-control" id="number_of_breaks"
                                                name="number_of_breaks"
                                                value="<?= isset($_POST['number_of_breaks']) ? $_POST['number_of_breaks'] : ''; ?>"
                                                placeholder="">
                                        </div>
                                        <div class="form-group col-md-6 input-group-lg">
                                            <label for="formGroupProductName">Number of Female Participants</label>
                                            <input type="text" class="form-control" id="number_of_breaks"
                                                name="number_of_breaks"
                                                value="<?= isset($_POST['number_of_breaks']) ? $_POST['number_of_breaks'] : ''; ?>"
                                                placeholder="">
                                                <br />
                                        </div>
                                    </div>
                                    <br />
                                            <h2>Participants Age Group</h2>
                                            <br />
                                    <div class="row">
                                        <div class="form-group col-md-6 input-group-lg">

                                            <label for="formGroupProductName">Age group 18-19 (youth) participants</label>
                                            <input type="text" class="form-control" id="number_of_breaks"
                                                name="number_of_breaks"
                                                value="<?= isset($_POST['number_of_breaks']) ? $_POST['number_of_breaks'] : ''; ?>"
                                                placeholder="">
                                        </div>

                                        <div class="form-group col-md-6 input-group-lg">
                                            <label for="formGroupProductName">Age groupd 20-24 participants</label>
                                            <input type="text" class="form-control" id="number_of_breaks"
                                                name="number_of_breaks"
                                                value="<?= isset($_POST['number_of_breaks']) ? $_POST['number_of_breaks'] : ''; ?>"
                                                placeholder="">
                                        </div>

                                        <div class="form-group col-md-6 input-group-lg">
                                            <label for="formGroupProductName">Adult 25-29 participants</label>
                                            <input type="text" class="form-control" id="number_of_breaks"
                                                name="number_of_breaks"
                                                value="<?= isset($_POST['number_of_breaks']) ? $_POST['number_of_breaks'] : ''; ?>"
                                                placeholder="">
                                        </div>


                                        <div class="form-group col-md-6 input-group-lg">
                                            <label for="formGroupProductName">Age groupd 30-35 participants</label>
                                            <input type="text" class="form-control" id="number_of_breaks"
                                                name="number_of_breaks"
                                                value="<?= isset($_POST['number_of_breaks']) ? $_POST['number_of_breaks'] : ''; ?>"
                                                placeholder="">
                                        </div>

                                        <div class="form-group col-md-6 input-group-lg">
                                            <label for="formGroupProductName">Age groupd 36 and above participants</label>
                                            <input type="text" class="form-control" id="number_of_breaks"
                                                name="number_of_breaks"
                                                value="<?= isset($_POST['number_of_breaks']) ? $_POST['number_of_breaks'] : ''; ?>"
                                                placeholder="">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6 input-group-lg">
                                            <div class="input-group input-group-lg mb-3">
                                                <select class="custom-select" id="selectTypeOfEvent">
                                                    <option selected>Select here..</option>
                                                    <option value="dli">Data Fellows</option>
                                                    <option value="dli">Data Scientists</option>
                                                    <option value="dli">Data Ambassadors </option>
                                                </select>
                                                <div class="input-group-append">
                                                    <label class="input-group-text" for="inputGroupSelect02">Type of Beneficiaries</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="form-group col-md-6 input-group-lg">
                                            <br />
                                            <h2>Duration</h2>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label for="formGroupProductName">Start Date</label>
                                                    ￼ <input type="date" class="form-control" name="bday"
                                                        min="1000-01-01" max="3000-12-31" class="form-control">

                                                </div>
                                                <div class="col-md-6">
                                                    <label for="formGroupProductName">End Date</label>
                                                    ￼ <input type="date" class="form-control" name="bday"
                                                        min="1000-01-01" max="3000-12-31" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6 input-group-lg">
                                            <br />
                                            <h2>Report upload</h2>
                                            <br />
                                            <div class="input-group col-mb-6">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">Upload signing sheet</span>
                                                </div>
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="inputGroupFile01">
                                                    <label class="custom-file-label" for="inputGroupFile01">Choose
                                                        file</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div><div class="row">
                                        <div class="form-group col-md-6 input-group-lg">

                                            <div class="input-group col-mb-6">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">Upload training Report</span>
                                                </div>
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="inputGroupFile01">
                                                    <label class="custom-file-label" for="inputGroupFile01">Choose
                                                        file</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="form-group col-lg-12 input-group-lg">
                                            <div class="form-group green-border-focus">
                                                <label for="exampleFormControlTextarea5">Objectives of the Training </label>
                                                <textarea class="form-control" id="exampleFormControlTextarea5"
                                                    rows="10"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <!-- <div class="form-group offset-md-8 col-md-4 input-group-lg push-right">
                                          <button type="submit" name="submit" type="button"
                                              class="btn btn-outline-info btn-lg" value="Submit">SAVE & ADD ANOTHER RECORD</button>
                                      </div> -->
                                        <div class="form-group offset-md-9 col-md-3 input-group-lg pull-right">
                                            <button type="submit" name="submit" type="button"
                                                class="btn btn-outline-success btn-lg" value="Submit">SAVE THIS
                                                RECORD</button>
                                        </div>
                                        <div class="form-group offset-md-9 col-md-3 input-group-lg pull-right">
                                            <button type="submit" name="submit" type="button"
                                                class="btn btn-outline-warning btn-lg" value="Submit">CANCEL
                                                ENTRY</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end of row -->
                        </div>
                    </div>
                </div>
                <!-- end of first column -->
            </div>
        </div>
    </div>
    <!-- end of panel -->



    <!-- KPI-13 Number of DCLI data related Capacity Building Activities -->
    <!-- // style="display: none;" -->
    <div id="pnl_kpi_13" class="panel panel-default" style="display: none;">
        <div class="panel-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header" data-background-color="orange">
                            <h3 class="title text-center"> kpi-<strong>13</strong></h3>
                            <h4 class="title text-center">Data Scientists engaged</h4>
                            <p class="category text-center">Number of Data Scientists engaged by Dlab</p>
                        </div>
                        <div class="card-content table-responsive">
                            <div class="row">
                                <div class="col-lg-12">
                                    <br />
                                    <h2>Engagement details</h2>
                                    <br />
                                    <br />


                                    <div class="row">
                                        <div class="form-group col-md-6 input-group-lg">
                                            <label for="formGroupProductName">Training Title</label>
                                            <input type="text" class="form-control" id="number_of_breaks"
                                                name="number_of_breaks"
                                                value="<?= isset($_POST['number_of_breaks']) ? $_POST['number_of_breaks'] : ''; ?>"
                                                placeholder="">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="form-group col-md-6 input-group-lg">
                                            <label for="formGroupProductName">Total number of Participants</label>
                                            <input type="text" class="form-control" id="number_of_breaks"
                                                name="number_of_breaks"
                                                value="<?= isset($_POST['number_of_breaks']) ? $_POST['number_of_breaks'] : ''; ?>"
                                                placeholder="">
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="form-group col-md-6 input-group-lg">
                                            <label for="formGroupProductName">Number of Female Participants</label>
                                            <input type="text" class="form-control" id="number_of_breaks"
                                                name="number_of_breaks"
                                                value="<?= isset($_POST['number_of_breaks']) ? $_POST['number_of_breaks'] : ''; ?>"
                                                placeholder="">
                                        </div>
                                        <div class="form-group col-md-6 input-group-lg">
                                            <label for="formGroupProductName">Number of Youth Participants</label>
                                            <input type="text" class="form-control" id="number_of_breaks"
                                                name="number_of_breaks"
                                                value="<?= isset($_POST['number_of_breaks']) ? $_POST['number_of_breaks'] : ''; ?>"
                                                placeholder="">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6 input-group-lg">
                                            <div class="input-group input-group-lg mb-3">
                                                <select class="custom-select" id="selectTypeOfEvent">
                                                    <option selected>Select here..</option>
                                                    <option value="dli">Data Fellows</option>
                                                    <option value="dli">Data Scientists</option>
                                                    <option value="dli">Data Ambassadors </option>
                                                </select>
                                                <div class="input-group-append">
                                                    <label class="input-group-text" for="inputGroupSelect02">Target
                                                        population</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="form-group col-md-6 input-group-lg">
                                            <br />
                                            <h2>Duration</h2>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label for="formGroupProductName">Start Date</label>
                                                    ￼ <input type="date" class="form-control" name="bday"
                                                        min="1000-01-01" max="3000-12-31" class="form-control">

                                                </div>
                                                <div class="col-md-6">
                                                    <label for="formGroupProductName">End Date</label>
                                                    ￼ <input type="date" class="form-control" name="bday"
                                                        min="1000-01-01" max="3000-12-31" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="form-group col-lg-12 input-group-lg">
                                            <div class="form-group green-border-focus">
                                                <label for="exampleFormControlTextarea5">Aim of the Training </label>
                                                <textarea class="form-control" id="exampleFormControlTextarea5"
                                                    rows="10"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <!-- <div class="form-group offset-md-8 col-md-4 input-group-lg push-right">
                                          <button type="submit" name="submit" type="button"
                                              class="btn btn-outline-info btn-lg" value="Submit">SAVE & ADD ANOTHER RECORD</button>
                                      </div> -->
                                        <div class="form-group offset-md-9 col-md-3 input-group-lg pull-right">
                                            <button type="submit" name="submit" type="button"
                                                class="btn btn-outline-success btn-lg" value="Submit">SAVE THIS
                                                RECORD</button>
                                        </div>
                                        <div class="form-group offset-md-9 col-md-3 input-group-lg pull-right">
                                            <button type="submit" name="submit" type="button"
                                                class="btn btn-outline-warning btn-lg" value="Submit">CANCEL
                                                ENTRY</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end of row -->
                        </div>
                    </div>
                </div>
                <!-- end of first column -->
            </div>
        </div>
    </div>
    <!-- end of panel -->


    <!-- KPI-14 Number of DCLI data related Capacity Building Activities -->
    <!-- // style="display: none;" -->
    <div id="pnl_kpi_14" class="panel panel-default" style="display: none;">
        <div class="panel-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header" data-background-color="orange">
                            <h3 class="title text-center"> kpi-<strong>14</strong></h3>
                            <h4 class="title text-center">Data Ambassadors engaged</h4>
                            <p class="category text-center">Number of Data Ambassadors engaged by Dlab</p>
                        </div>
                        <div class="card-content table-responsive">
                            <div class="row">
                                <div class="col-lg-12">
                                    <br />
                                    <h2>Engagement details</h2>
                                    <br />
                                    <br />


                                    <div class="row">
                                        <div class="form-group col-md-6 input-group-lg">
                                            <label for="formGroupProductName">Training Title</label>
                                            <input type="text" class="form-control" id="number_of_breaks"
                                                name="number_of_breaks"
                                                value="<?= isset($_POST['number_of_breaks']) ? $_POST['number_of_breaks'] : ''; ?>"
                                                placeholder="">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="form-group col-md-6 input-group-lg">
                                            <label for="formGroupProductName">Total number of Participants</label>
                                            <input type="text" class="form-control" id="number_of_breaks"
                                                name="number_of_breaks"
                                                value="<?= isset($_POST['number_of_breaks']) ? $_POST['number_of_breaks'] : ''; ?>"
                                                placeholder="">
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="form-group col-md-6 input-group-lg">
                                            <label for="formGroupProductName">Number of Female Participants</label>
                                            <input type="text" class="form-control" id="number_of_breaks"
                                                name="number_of_breaks"
                                                value="<?= isset($_POST['number_of_breaks']) ? $_POST['number_of_breaks'] : ''; ?>"
                                                placeholder="">
                                        </div>
                                        <div class="form-group col-md-6 input-group-lg">
                                            <label for="formGroupProductName">Number of Youth Participants</label>
                                            <input type="text" class="form-control" id="number_of_breaks"
                                                name="number_of_breaks"
                                                value="<?= isset($_POST['number_of_breaks']) ? $_POST['number_of_breaks'] : ''; ?>"
                                                placeholder="">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6 input-group-lg">
                                            <div class="input-group input-group-lg mb-3">
                                                <select class="custom-select" id="selectTypeOfEvent">
                                                    <option selected>Select here..</option>
                                                    <option value="dli">Data Fellows</option>
                                                    <option value="dli">Data Scientists</option>
                                                    <option value="dli">Data Ambassadors </option>
                                                </select>
                                                <div class="input-group-append">
                                                    <label class="input-group-text" for="inputGroupSelect02">Target
                                                        population</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="form-group col-md-6 input-group-lg">
                                            <br />
                                            <h2>Duration</h2>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label for="formGroupProductName">Start Date</label>
                                                    ￼ <input type="date" class="form-control" name="bday"
                                                        min="1000-01-01" max="3000-12-31" class="form-control">

                                                </div>
                                                <div class="col-md-6">
                                                    <label for="formGroupProductName">End Date</label>
                                                    ￼ <input type="date" class="form-control" name="bday"
                                                        min="1000-01-01" max="3000-12-31" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="form-group col-lg-12 input-group-lg">
                                            <div class="form-group green-border-focus">
                                                <label for="exampleFormControlTextarea5">Aim of the Training </label>
                                                <textarea class="form-control" id="exampleFormControlTextarea5"
                                                    rows="10"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <!-- <div class="form-group offset-md-8 col-md-4 input-group-lg push-right">
                                          <button type="submit" name="submit" type="button"
                                              class="btn btn-outline-info btn-lg" value="Submit">SAVE & ADD ANOTHER RECORD</button>
                                      </div> -->
                                        <div class="form-group offset-md-9 col-md-3 input-group-lg pull-right">
                                            <button type="submit" name="submit" type="button"
                                                class="btn btn-outline-success btn-lg" value="Submit">SAVE THIS
                                                RECORD</button>
                                        </div>
                                        <div class="form-group offset-md-9 col-md-3 input-group-lg pull-right">
                                            <button type="submit" name="submit" type="button"
                                                class="btn btn-outline-warning btn-lg" value="Submit">CANCEL
                                                ENTRY</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end of row -->
                        </div>
                    </div>
                </div>
                <!-- end of first column -->
            </div>
        </div>
    </div>
    <!-- end of panel -->



    <!-- KPI-15 Number of DCLI data related Capacity Building Activities -->
    <!-- // style="display: none;" -->
    <div id="pnl_kpi_15" class="panel panel-default" style="display: none;">
        <div class="panel-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header" data-background-color="orange">
                            <h3 class="title text-center"> kpi-<strong>15</strong></h3>
                            <h4 class="title text-center">Partnerships Formed</h4>
                        </div>
                        <div class="card-content table-responsive">
                            <div class="row">
                                <div class="col-lg-12">
                                    <br />
                                    <h2>Details</h2>
                                    <br />
                                    <br />
                                    <div class="row">
                                        <div class="form-group col-md-6 input-group-lg">
                                            <label for="formGroupProductName"> Name of Organisation</label>
                                            <input type="text" class="form-control" id="number_of_breaks"
                                                name="number_of_breaks"
                                                value="<?= isset($_POST['number_of_breaks']) ? $_POST['number_of_breaks'] : ''; ?>"
                                                placeholder="">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="form-group col-md-6 input-group-lg">
                                            <div class="input-group input-group-lg mb-3">
                                                <select class="custom-select" id="selectTypeOfEvent">
                                                    <option selected>Select type...</option>
                                                    <option value="dli">Government</option>
                                                    <option value="dli">Private non profit</option>
                                                    <option value="dli">Private for profit </option>
                                                </select>
                                                <div class="input-group-append">
                                                    <label class="input-group-text" for="inputGroupSelect02">Type of
                                                        Organisation</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="form-group col-md-6 input-group-lg">

                                                        <label for="formGroupProductName">
                                                            Sector/Area of Partnership </label>

                                                        <input type="text" class="form-control" id="number_of_breaks"
                                                        name="number_of_breaks"
                                                        value="<?= isset($_POST['number_of_breaks']) ? $_POST['number_of_breaks'] : ''; ?>"
                                                        placeholder="">

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6 input-group-lg">
                                            <div class="input-group input-group-lg mb-3">
                                                <select class="custom-select" id="selectTypeOfEvent">
                                                    <option selected>Patnership Status</option>
                                                    <option value="1">Active</option>
                                                    <option value="2">Inactive</option>
                                                </select>
                                                <div class="input-group-append">
                                                    <label class="input-group-text" for="inputGroupSelect02">Select
                                                        event
                                                        type</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6 input-group-lg">
                                            <br />
                                            <h2>Evidence of Partnership <small>(Upload memorandum of understanding or an
                                                    aggrement)</small></h2>
                                            <br />
                                            <div class="input-group col-mb-6">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">Upload document</span>
                                                </div>
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="inputGroupFile01">
                                                    <label class="custom-file-label" for="inputGroupFile01">Choose
                                                        file</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 form-group col-md-6 input-group-lg">
                                            <label for="formGroupProductName">Date Formed</label>
                                            <input type="date" class="form-control" id="number_of_breaks"
                                                name="number_of_breaks"
                                                value="<?= isset($_POST['number_of_breaks']) ? $_POST['number_of_breaks'] : ''; ?>"
                                                placeholder="">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6 input-group-lg">
                                            <br />
                                            <h2>Duration</h2>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label for="formGroupProductName">Start Date</label>
                                                    ￼ <input type="date" class="form-control" name="bday"
                                                        min="1000-01-01" max="3000-12-31" class="form-control">

                                                </div>
                                                <div class="col-md-6">
                                                    <label for="formGroupProductName">End Date</label>
                                                    ￼ <input type="date" class="form-control" name="bday"
                                                        min="1000-01-01" max="3000-12-31" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="form-group col-lg-12 input-group-lg">
                                            <div class="form-group green-border-focus">
                                                <label for="exampleFormControlTextarea5">Short description of
                                                    partnership</label>
                                                <textarea class="form-control" id="exampleFormControlTextarea5"
                                                    rows="10"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <!-- <div class="form-group offset-md-8 col-md-4 input-group-lg push-right">
                                        <button type="submit" name="submit" type="button"
                                            class="btn btn-outline-info btn-lg" value="Submit">SAVE & ADD ANOTHER RECORD</button>
                                    </div> -->
                                        <div class="form-group offset-md-9 col-md-3 input-group-lg pull-right">
                                            <button type="submit" name="submit" type="button"
                                                class="btn btn-outline-success btn-lg" value="Submit">SAVE THIS
                                                RECORD</button>
                                        </div>
                                        <div class="form-group offset-md-9 col-md-3 input-group-lg pull-right">
                                            <button type="submit" name="submit" type="button"
                                                class="btn btn-outline-warning btn-lg" value="Submit">CANCEL
                                                ENTRY</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end of row -->
                        </div>
                    </div>
                </div>
                <!-- end of first column -->
            </div>
        </div>
    </div>
    <!-- end of panel -->


    <!-- KPI-16 Number of DCLI data related Capacity Building Activities -->
    <!-- // style="display: none;" -->
    <div id="pnl_kpi_16" class="panel panel-default" style="display: none;">
        <div class="panel-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header" data-background-color="orange">
                            <h3 class="title text-center"> kpi-<strong>16</strong></h3>
                            <h4 class="title text-center">Innovation program assessment</h4>

                        </div>
                        <div class="card-content table-responsive">
                            <div class="row">
                                <div class="col-lg-12">
                                    <br />
                                    <br />
                                    <br />
                                    <h2>Program Details</h2>
                                    <br />
                                    <br />
                                    <div class="row">
                                        <div class="form-group col-md-6 input-group-lg">
                                            <label for="formGroupProductName"> Title of innovation program</label>
                                            <input type="text" class="form-control" id="number_of_breaks"
                                                name="number_of_breaks"
                                                value="<?= isset($_POST['number_of_breaks']) ? $_POST['number_of_breaks'] : ''; ?>"
                                                placeholder="">
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="form-group col-md-6 input-group-lg">
                                            <label for="formGroupProductName"> Sector of Focus</label>
                                            <input type="text" class="form-control" id="number_of_breaks"
                                                name="number_of_breaks"
                                                value="<?= isset($_POST['number_of_breaks']) ? $_POST['number_of_breaks'] : ''; ?>"
                                                placeholder="">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="form-group col-md-6 input-group-lg">
                                            <label for="formGroupProductName">Number of Individuals</label>
                                            <input type="text" class="form-control" id="number_of_breaks"
                                                name="number_of_breaks"
                                                value="<?= isset($_POST['number_of_breaks']) ? $_POST['number_of_breaks'] : ''; ?>"
                                                placeholder="">
                                        </div>
                                        <div class="form-group col-md-6 input-group-lg">
                                            <label for="formGroupProductName">Number of Organisation</label>
                                            <input type="text" class="form-control" id="number_of_breaks"
                                                name="number_of_breaks"
                                                value="<?= isset($_POST['number_of_breaks']) ? $_POST['number_of_breaks'] : ''; ?>"
                                                placeholder="">
                                                <br />
                                        </div>
                                    </div>
                                    <br />
                                    <div class="row">
                                        <div class="form-group col-md-6 input-group-lg">
                                            <label for="formGroupProductName">Number of Male Participants</label>
                                            <input type="text" class="form-control" id="number_of_breaks"
                                                name="number_of_breaks"
                                                value="<?= isset($_POST['number_of_breaks']) ? $_POST['number_of_breaks'] : ''; ?>"
                                                placeholder="">
                                        </div>
                                        <div class="form-group col-md-6 input-group-lg">
                                            <label for="formGroupProductName">Number of Female Participants</label>
                                            <input type="text" class="form-control" id="number_of_breaks"
                                                name="number_of_breaks"
                                                value="<?= isset($_POST['number_of_breaks']) ? $_POST['number_of_breaks'] : ''; ?>"
                                                placeholder="">
                                                <br />
                                        </div>
                                    </div>
                                    <br />
                                            <h2>Participants Age Group</h2>
                                            <br />
                                    <div class="row">
                                        <div class="form-group col-md-6 input-group-lg">

                                            <label for="formGroupProductName">Age group 18-19 (youth) participants</label>
                                            <input type="text" class="form-control" id="number_of_breaks"
                                                name="number_of_breaks"
                                                value="<?= isset($_POST['number_of_breaks']) ? $_POST['number_of_breaks'] : ''; ?>"
                                                placeholder="">
                                        </div>

                                        <div class="form-group col-md-6 input-group-lg">
                                            <label for="formGroupProductName">Age groupd 20-24 participants</label>
                                            <input type="text" class="form-control" id="number_of_breaks"
                                                name="number_of_breaks"
                                                value="<?= isset($_POST['number_of_breaks']) ? $_POST['number_of_breaks'] : ''; ?>"
                                                placeholder="">
                                        </div>

                                        <div class="form-group col-md-6 input-group-lg">
                                            <label for="formGroupProductName">Adult 25-29 participants</label>
                                            <input type="text" class="form-control" id="number_of_breaks"
                                                name="number_of_breaks"
                                                value="<?= isset($_POST['number_of_breaks']) ? $_POST['number_of_breaks'] : ''; ?>"
                                                placeholder="">
                                        </div>


                                        <div class="form-group col-md-6 input-group-lg">
                                            <label for="formGroupProductName">Age groupd 30-35 participants</label>
                                            <input type="text" class="form-control" id="number_of_breaks"
                                                name="number_of_breaks"
                                                value="<?= isset($_POST['number_of_breaks']) ? $_POST['number_of_breaks'] : ''; ?>"
                                                placeholder="">
                                        </div>

                                        <div class="form-group col-md-6 input-group-lg">
                                            <label for="formGroupProductName">Age groupd 36 and above participants</label>
                                            <input type="text" class="form-control" id="number_of_breaks"
                                                name="number_of_breaks"
                                                value="<?= isset($_POST['number_of_breaks']) ? $_POST['number_of_breaks'] : ''; ?>"
                                                placeholder="">
                                                <br />
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="form-group col-md-6 input-group-lg">
                                            <div class="input-group input-group-lg mb-3">
                                                <select class="custom-select" id="selectTypeOfEvent">
                                                    <option selected>Select type...</option>
                                                    <option value="dli">coming soon</option>
                                                    <option value="dli">on going</option>
                                                    <option value="dli">completed </option>
                                                </select>
                                                <div class="input-group-append">
                                                    <label class="input-group-text" for="inputGroupSelect02">Program
                                                        status</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6 input-group-lg">
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">Upload image</span>
                                                </div>
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="inputGroupFile01">
                                                    <label class="custom-file-label" for="inputGroupFile01">Choose
                                                        file</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-4 input-group-lg">
                                    <label for="formGroupProductName"> Total Amount Awarded <small>in TZS</small></label>
                                    <input type="text" class="form-control" id="number_of_breaks"
                                        name="number_of_breaks"
                                        value="<?= isset($_POST['number_of_breaks']) ? $_POST['number_of_breaks'] : ''; ?>"
                                        placeholder="">
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-md-4 input-group-lg">
                                    <label for="formGroupProductName"> Total Amount Disbursed <small>in TZS</small></label>
                                    <input type="text" class="form-control" id="number_of_breaks"
                                        name="number_of_breaks"
                                        value="<?= isset($_POST['number_of_breaks']) ? $_POST['number_of_breaks'] : ''; ?>"
                                        placeholder="">
                                </div>
                            </div>
                            <div class="row">

                                <div class="col-md-6">
                                    <br />
                                    <h2>Duration</h2>
                                    <br />
                                    <div class="row">
                                        <div class="col-md-6 form-group col-md-6 input-group-lg">
                                            <label for="formGroupProductName">Start date</label>
                                            <input type="date" class="form-control" id="number_of_breaks"
                                                name="number_of_breaks"
                                                value="<?= isset($_POST['number_of_breaks']) ? $_POST['number_of_breaks'] : ''; ?>"
                                                placeholder="">
                                        </div>
                                        <div class="col-md-6 form-group col-md-6 input-group-lg">
                                            <label for="formGroupProductName">End date</label>
                                            <input type="date" class="form-control" id="number_of_breaks"
                                                name="number_of_breaks"
                                                value="<?= isset($_POST['number_of_breaks']) ? $_POST['number_of_breaks'] : ''; ?>"
                                                placeholder="">
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-lg-12 input-group-lg">
                                    <div class="form-group green-border-focus">
                                        <label for="exampleFormControlTextarea5">Description of innnovation
                                            program
                                        </label>
                                        <textarea class="form-control" id="exampleFormControlTextarea5"
                                            rows="10"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <!-- <div class="form-group offset-md-8 col-md-4 input-group-lg push-right">
                                        <button type="submit" name="submit" type="button"
                                            class="btn btn-outline-info btn-lg" value="Submit">SAVE & ADD ANOTHER RECORD</button>
                                    </div> -->
                                <div class="form-group offset-md-9 col-md-3 input-group-lg pull-right">
                                    <button type="submit" name="submit" type="button"
                                        class="btn btn-outline-success btn-lg" value="Submit">SAVE THIS
                                        RECORD</button>
                                </div>
                                <div class="form-group offset-md-9 col-md-3 input-group-lg pull-right">
                                    <button type="submit" name="submit" type="button"
                                        class="btn btn-outline-warning btn-lg" value="Submit">CANCEL
                                        ENTRY</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end of row -->
                </div>
            </div>
        </div>
        <!-- end of first column -->
    </div>
    <!-- end of panel -->


    <!-- KPI-17 Number of DCLI data related Capacity Building Activities -->
    <!-- // style="display: none;" -->
    <div id="pnl_kpi_17" class="panel panel-default" style="display: none;">
        <div class="panel-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header" data-background-color="orange">
                            <h3 class="title text-center"> kpi-<strong>17</strong></h3>
                            <h4 class="title text-center">Funds Managed by dLab</h4>
                        </div>
                        <div class="card-content table-responsive">
                            <div class="row">
                                <div class="col-lg-12">
                                    <br />
                                    <h2>Fund Details</h2>
                                    <br />
                                    <br />
                                    <div class="row">
                                        <div class="form-group col-md-6 input-group-lg">
                                            <label for="formGroupProductName"> Name of Activity</label>
                                            <input type="text" class="form-control" id="number_of_breaks"
                                                name="number_of_breaks"
                                                value="<?= isset($_POST['number_of_breaks']) ? $_POST['number_of_breaks'] : ''; ?>"
                                                placeholder="">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="form-group col-md-6 input-group-lg">
                                            <div class="input-group input-group-lg mb-3">
                                                <select class="custom-select" id="selectTypeOfEvent">
                                                    <option selected>Select...</option>
                                                    <option value="dli">Capacity Building</option>
                                                    <option value="dli">Community Engagement</option>
                                                    <option value="dli">Tools </option>
                                                </select>
                                                <div class="input-group-append">
                                                    <label class="input-group-text" for="inputGroupSelect02">Type of
                                                        Fund</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="form-group col-md-6 input-group-lg">
                                            <div class="input-group input-group-lg mb-3">
                                                <select class="custom-select" id="selectTypeOfEvent">
                                                    <option value="select">Select Pillar </option>
                                                    <option value="cb">Capacity Building</option>
                                                    <option value="ce">Community engagement</option>
                                                    <option value="ds">Data Science</option>
                                                    <option value="ri">Research and Innovation</option>
                                                    <option value="is">Institutional Strengthening</option>
                                                </select>
                                                <div class="input-group-append">
                                                    <label class="input-group-text" for="inputGroupSelect02">Dlab
                                                        Pillars</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="form-group col-md-6 input-group-lg">
                                            <label for="formGroupProductName">Total Amount</label>
                                            <div class="row">
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" id="number_of_breaks"
                                                        name="number_of_breaks"
                                                        value="<?= isset($_POST['number_of_breaks']) ? $_POST['number_of_breaks'] : ''; ?>"
                                                        placeholder="">
                                                </div>
                                                <div class="col-md-3">
                                                    <select class="form-control" aria-label="Large" id="selectDuration"
                                                        name="selectDuration" aria-describedby="inputGroup-sizing-sm">
                                                        <option value="select">in..</option>
                                                        <option value="dli">TZS</option>
                                                        <option value="dli">Dollars</option>
                                                        <option value="data">Euro</option>
                                                        <option value="data">Pounds</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <br />
                                            <h2>Duration</h2>
                                            <br />
                                            <div class="row">
                                                <div class="col-md-6 form-group col-md-6 input-group-lg">
                                                    <label for="formGroupProductName">Start date</label>
                                                    <input type="text" class="form-control" id="number_of_breaks"
                                                        name="number_of_breaks"
                                                        value="<?= isset($_POST['number_of_breaks']) ? $_POST['number_of_breaks'] : ''; ?>"
                                                        placeholder="">
                                                </div>
                                                <div class="col-md-6 form-group col-md-6 input-group-lg">
                                                    <label for="formGroupProductName">End date</label>
                                                    <input type="text" class="form-control" id="number_of_breaks"
                                                        name="number_of_breaks"
                                                        value="<?= isset($_POST['number_of_breaks']) ? $_POST['number_of_breaks'] : ''; ?>"
                                                        placeholder="">
                                                </div>
                                            </div>
                                            <br />
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="form-group col-md-6 input-group-lg">
                                            <div class="input-group col-mb-6">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">Upload document</span>
                                                </div>
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="inputGroupFile01">
                                                    <label class="custom-file-label" for="inputGroupFile01">Choose
                                                        file</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="form-group col-lg-12 input-group-lg">
                                            <div class="form-group green-border-focus">
                                                <label for="exampleFormControlTextarea5">Description of Funds</label>
                                                <textarea class="form-control" id="exampleFormControlTextarea5"
                                                    rows="10"></textarea>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <!-- <div class="form-group offset-md-8 col-md-4 input-group-lg push-right">
                                        <button type="submit" name="submit" type="button"
                                            class="btn btn-outline-info btn-lg" value="Submit">SAVE & ADD ANOTHER RECORD</button>
                                    </div> -->
                                        <div class="form-group offset-md-9 col-md-3 input-group-lg pull-right">
                                            <button type="submit" name="submit" type="button"
                                                class="btn btn-outline-success btn-lg" value="Submit">SAVE THIS
                                                RECORD</button>
                                        </div>
                                        <div class="form-group offset-md-9 col-md-3 input-group-lg pull-right">
                                            <button type="submit" name="submit" type="button"
                                                class="btn btn-outline-warning btn-lg" value="Submit">CANCEL
                                                ENTRY</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end of row -->
                        </div>
                    </div>
                </div>
                <!-- end of first column -->
            </div>
        </div>
    </div>
    <!-- end of panel -->


    <!-- KPI-18 Number of Communication channels accessed -->
    <!-- // style="display: none;" -->
    <div id="pnl_kpi_18" class="panel panel-default" style="display: none;">
        <div class="panel-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header" data-background-color="orange">
                            <h3 class="title text-center"> kpi-<strong>18</strong></h3>
                            <h4 class="title text-center">Communication channels</h4>
                            <p class="category text-center">Number of stakeholders accessing Dlab communication channels</p>
                        </div>
                        <div class="card-content table-responsive">
                            <div class="row">
                                <div class="col-lg-12">
                                    <br />
                                    <h2>Channel Details</h2>
                                    <br />
                                    <br />
                                    <div class="row">
                                        <div class="form-group col-md-6 input-group-lg">
                                            <label for="formGroupProductName"> Name of Channel</label>
                                            <input type="text" class="form-control" id="number_of_breaks"
                                                name="number_of_breaks"
                                                value="<?= isset($_POST['number_of_breaks']) ? $_POST['number_of_breaks'] : ''; ?>"
                                                placeholder="">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="form-group col-md-6 input-group-lg">
                                            <label for="formGroupProductName"> Platform name</label>
                                            <input type="text" class="form-control" id="number_of_breaks"
                                                name="number_of_breaks"
                                                value="<?= isset($_POST['number_of_breaks']) ? $_POST['number_of_breaks'] : ''; ?>"
                                                placeholder="">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="form-group col-md-6 input-group-lg">
                                            <label for="formGroupProductName"> Direct link</label>
                                            <input type="text" class="form-control" id="number_of_breaks"
                                                name="number_of_breaks"
                                                value="<?= isset($_POST['number_of_breaks']) ? $_POST['number_of_breaks'] : ''; ?>"
                                                placeholder="">
                                        </div>
                                    </div>




                                    <div class="row">
                                        <!-- <div class="form-group offset-md-8 col-md-4 input-group-lg push-right">
                                        <button type="submit" name="submit" type="button"
                                            class="btn btn-outline-info btn-lg" value="Submit">SAVE & ADD ANOTHER RECORD</button>
                                    </div> -->
                                        <div class="form-group offset-md-9 col-md-3 input-group-lg pull-right">
                                            <button type="submit" name="submit" type="button"
                                                class="btn btn-outline-success btn-lg" value="Submit">SAVE THIS
                                                RECORD</button>
                                        </div>
                                        <div class="form-group offset-md-9 col-md-3 input-group-lg pull-right">
                                            <button type="submit" name="submit" type="button"
                                                class="btn btn-outline-warning btn-lg" value="Submit">CANCEL
                                                ENTRY</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end of row -->
                        </div>
                    </div>
                </div>
                <!-- end of first column -->
            </div>
        </div>
    </div>
    <!-- end of panel -->

</div>
</div>
@endsection
