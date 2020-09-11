@extends('layouts.ladmin')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header" data-background-color="orange">
                    <h4 class="title text-center">Create New Key Perfomance Indicator</h4>
                    <p class="category text-center">Creating a Key Perfomance Indicator that tracks data</p>
                </div>
                <div class="card-content table-responsive">
                    <div class="row">
                        <div class="col-lg-12">
                            <br />
                            <h2>New Key Perfomance Indicator details</h2>
                            <br />

                            @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div><br />
                            @endif


                    <form method="post" action="{{ route('kpis.store') }}">
                        @csrf
                        <input type="hidden" value="{{ Auth::user()->id }}" name="creator_id">

                        <div class="row">
                            <div class="form-group col-md-4 input-group-lg">
                                <label for="forpillar_status">Select Associated Pillar</label>
                                <select class="form-control" aria-label="Large" name="pillar_status"
                                    aria-describedby="inputGroup-sizing-sm">
                                    <option value="select">select</option>
                                    @foreach($pillars as $pillar)
                                    <option value="{{$pillar->id}}">{{$pillar->pillar_title}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-md-4 input-group-lg">
                                <label for="forKpi_title">Key Perfomance Indicator Title </label>
                                <input type="text" class="form-control" name="kpi_title"
                                value="<?= isset($_POST['kpi_title']) ? $_POST['kpi_title'] : ''; ?>"
                                placeholder="" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-4 input-group-lg">
                                <label for="forKpi_title">Timing of Data Collection </label>
                                <input type="text" class="form-control" name="kpi_title"
                                value="<?= isset($_POST['kpi_title']) ? $_POST['kpi_title'] : ''; ?>"
                                placeholder="">
                            </div>
                            <div class="form-group col-md-4 input-group-lg">
                                <label for="forKpi_title">Frequency of Collection </label>
                                <input type="text" class="form-control" name="kpi_title"
                                value="<?= isset($_POST['kpi_title']) ? $_POST['kpi_title'] : ''; ?>"
                                placeholder="">
                            </div>
                            <div class="form-group col-md-4 input-group-lg">
                                <label for="forKpi_title">Classification </label>
                                <input type="text" class="form-control" name="kpi_title"
                                value="<?= isset($_POST['kpi_title']) ? $_POST['kpi_title'] : ''; ?>"
                                placeholder="" required>
                            </div>
                        </div>


                        <div class="row">
                            <div class="form-group col-md-4 input-group-lg">
                                <label for="forKpi_title">Unit of Measure </label>
                                <input type="text" class="form-control" name="kpi_title"
                                value="<?= isset($_POST['kpi_title']) ? $_POST['kpi_title'] : ''; ?>"
                                placeholder="">
                            </div>
                            <div class="form-group col-md-4 input-group-lg">
                                <label for="forKpi_title">Method of Data Collection/Tools </label>
                                <input type="text" class="form-control" name="kpi_title"
                                value="<?= isset($_POST['kpi_title']) ? $_POST['kpi_title'] : ''; ?>"
                                placeholder="">
                            </div>
                            <div class="form-group col-md-4 input-group-lg">
                                <label for="forKpi_title">Disaggregates </label>
                                <input type="text" class="form-control" name="kpi_title"
                                value="<?= isset($_POST['kpi_title']) ? $_POST['kpi_title'] : ''; ?>"
                                placeholder="" required>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-md-4 input-group-lg">
                                <label for="forKpi_title">Formula </label>
                                <input type="text" class="form-control" name="kpi_title"
                                value="<?= isset($_POST['kpi_title']) ? $_POST['kpi_title'] : ''; ?>"
                                placeholder="">
                            </div>
                            <div class="form-group col-md-4 input-group-lg">
                                <label for="forKpi_title">Reporting Responsibility </label>
                                <input type="text" class="form-control" name="kpi_title"
                                value="<?= isset($_POST['kpi_title']) ? $_POST['kpi_title'] : ''; ?>"
                                placeholder="">
                            </div>
                            <div class="form-group col-md-4 input-group-lg">
                                <label for="forKpi_title">Target Value </label>
                                <input type="text" class="form-control" name="kpi_title"
                                value="<?= isset($_POST['kpi_title']) ? $_POST['kpi_title'] : ''; ?>"
                                placeholder="" required>
                            </div>
                        </div>


                        <div class="row">
                            <div class="form-group col-md-4 input-group-lg">
                                <label for="forKpi_title">Tolerance Band </label>
                                <input type="text" class="form-control" name="kpi_title"
                                value="<?= isset($_POST['kpi_title']) ? $_POST['kpi_title'] : ''; ?>"
                                placeholder="">
                            </div>
                            <div class="form-group col-md-4 input-group-lg">
                                <label for="forKpi_title">Last Approval </label>
                                <input type="date" class="form-control" name="kpi_title"
                                value="<?= isset($_POST['kpi_title']) ? $_POST['kpi_title'] : ''; ?>"
                                placeholder="">
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-lg-8 input-group-lg">
                                <div class="form-group green-border-focus">
                                    <label for="forPillarBriefDescription">Brief description
                                    </label>
                                    <textarea class="form-control" name="pillar_desc" rows="10" required></textarea>
                                </div>
                            </div>
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
                        <!-- end of row -->
                    </div>
                </div>
            </div>
            <!-- end of first column -->
        </div>
    </div>
</div>

@endsection
