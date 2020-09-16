@extends('layouts.ladmin')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header" data-background-color="orange">
                    <h4 class="title text-center">Update Key Perfomance Indicator</h4>
                    <p class="category text-center">update selected kpi</p>
                </div>
                <div class="card-content table-responsive">
                    <br />
                    <h2>Update Key Perfomance Indicator Details</h2>
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

                    <form method="post" action="{{ route('kpis.update', $kpi->id) }}">
                        @method('PATCH')
                        @csrf
                        <input type="hidden" value="{{ Auth::user()->id }}" name="creator_id">


                        <div class="row">
                            <div class="form-group col-md-4 input-group-lg">
                                <label for="for_assoc_pillar">Select Associated Pillar</label>
                                <select class="form-control" aria-label="Large" name="ref_pillar_id"
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
                                value="{{ $kpi->kpi_title }}"
                                placeholder="" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-4 input-group-lg">
                                <label for="forKpi_dc_timing">Timing of Data Collection </label>
                                <input type="text" class="form-control" name="dc_timing"
                                value="{{ $kpi->dc_timing }}"
                                placeholder="">
                            </div>
                            <div class="form-group col-md-4 input-group-lg">
                                <label for="forKpi_fq_of_dc">Frequency of Collection </label>
                                <input type="text" class="form-control" name="fq_of_dc"
                                value="{{ $kpi->fq_of_dc }}"
                                placeholder="">
                            </div>
                            <div class="form-group col-md-4 input-group-lg">
                                <label for="forKpi_classification">Classification </label>
                                <input type="text" class="form-control" name="classification"
                                value="{{ $kpi->classification }}"
                                placeholder="" required>
                            </div>
                        </div>


                        <div class="row">
                            <div class="form-group col-md-4 input-group-lg">
                                <label for="forunit_of_measure">Unit of Measure </label>
                                <input type="text" class="form-control" name="unit_of_measure"
                                value="{{ $kpi->unit_of_measure }}"
                                placeholder="">
                            </div>
                            <div class="form-group col-md-4 input-group-lg">
                                <label for="forKpi_method_dc">Method of Data Collection/Tools </label>
                                <input type="text" class="form-control" name="method_of_dc"
                                value="{{ $kpi->method_of_dc }}"
                                placeholder="">
                            </div>
                            <div class="form-group col-md-4 input-group-lg">
                                <label for="forKpi_dis_aggregates">Disaggregates </label>
                                <input type="text" class="form-control" name="dissaggregate"
                                value="{{ $kpi->dissaggregate }}"
                                placeholder="" required>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-md-4 input-group-lg">
                                <label for="forKpi_formula">Formula </label>
                                <input type="text" class="form-control" name="formula"
                                value="{{ $kpi->formula }}"
                                placeholder="">
                            </div>
                            <div class="form-group col-md-4 input-group-lg">
                                <label for="forKpi_report_responsibility">Reporting Responsibility </label>
                                <input type="text" class="form-control" name="reporting_respns"
                                value="{{ $kpi->reporting_respns }}"
                                placeholder="">
                            </div>
                            <div class="form-group col-md-4 input-group-lg">
                                <label for="forKpi_target_value">Target Value </label>
                                <input type="text" class="form-control" name="target_value"
                                value="{{ $kpi->target_value }}"
                                placeholder="" required>
                            </div>
                        </div>


                        <div class="row">
                            <div class="form-group col-md-4 input-group-lg">
                                <label for="forKpi_tolerance_band">Tolerance Band </label>
                                <input type="text" class="form-control" name="tolerance_band"
                                value="{{ $kpi->tolerance_band }}"
                                placeholder="">
                            </div>
                            <div class="form-group col-md-4 input-group-lg">
                                <label for="forKpi_title">Last Approval </label>
                                <input type="date" class="form-control" name="last_approved"
                                value="{{ $kpi->last_approved }}"
                                placeholder="">
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-lg-8 input-group-lg">
                                <div class="form-group green-border-focus">
                                    <label for="forPillarBriefDescription">Brief description
                                    </label>
                                    <textarea class="form-control" name="kpi_desc" rows="10" required>"{{ $kpi->kpi_desc }}"</textarea>
                                </div>
                            </div>
                        </div>


                        <div class="row">

                            <div class="form-group offset-md-8 col-md-4 input-group-lg push-right">
                                <button type="submit" class="btn btn-outline-info btn-lg">update</button>
                            </div>
                            <div class="form-group offset-md-8 col-md-4 input-group-lg pull-right">
                                <a href="{{ route('manage-kpis')}}"
                                class="btn btn-outline-danger btn-lg">cancel</a>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
            <!-- end of first column -->
        </div>
    </div>
</div>

@endsection
