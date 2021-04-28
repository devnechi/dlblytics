@extends('layouts.llmce')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header" data-background-color="orange">
                    <h4 class="title text-center">Project Details</h4>
                    <p class="category text-center">full project</p>
                </div>
                <div class="card-content table-responsive">
                    <br />
                    <h2> Project Details</h2>
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

                    <div class="row">
                        <div class="form-group col-md-6 input-group-lg">
                            {{-- <label for="forPillarTitle" value="">Pillar Title</label> --}}
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <h3><strong>{{ $project->project_title }}</strong></h3>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-md-6 input-group-lg">
                            {{-- <label for="forPillarTitle" value="">Pillar Title</label> --}}
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <h3><strong>Duration</strong> <small>in days</small></h3>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-md-6 input-group-lg">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <h3><strong>Start date :</strong></h3>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-md-6 input-group-lg">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <h3><strong>End date :</strong></h3>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6 input-group-lg">
                            {{-- <label for="forPillarTitle" value="">Pillar Title</label> --}}
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <h3><strong>{{ $project->total_project_cost }}</strong></h3>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6 input-group-lg">
                            {{-- <label for="forPillarTitle" value="">Pillar Title</label> --}}
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <h3><strong>{{ $project->current_stage }}</strong></h3>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-md-6 input-group-lg">
                            {{-- <label for="forPillarTitle" value="">Pillar Title</label> --}}
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <h3><strong>{{ $project->review_status }}</strong></h3>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-md-6 input-group-lg">
                            {{-- <label for="forPillarTitle" value="">Pillar Title</label> --}}
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <p><strong>{{ $project->created_at }}</strong></p>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    {{-- // retrieve project related activities, sub act, docs --}}

                    <div class="row">
                        <div class="col-lg-12">
                            <nav>
                                <div class="nav nav-tabs" id="ds-vw-proj-nav-tab" role="tablist">
                                    <a class="nav-item nav-link active" id="ds-nav-pna-my-proj-tab" data-toggle="tab"
                                        href="#ds-pna-my-proj-content" role="tab" aria-controls="nav-my-proj"
                                        aria-selected="true"> Activities</a>
                                    <a class="nav-item nav-link" id="ds-nav-pna-staff-proj-tab" data-toggle="tab"
                                        href="#ds-pna-staff-proj-content" role="tab"
                                        aria-controls="nav-staff-proj-content" aria-selected="false">sub activities</a>
                                    <a class="nav-item nav-link" id="ds-pna-lm-response-tab" data-toggle="tab"
                                        href="#ds-pna-lm-response-content" role="tab" aria-controls="nav-lm-response"
                                        aria-selected="false">retirements</a>
                                </div>
                            </nav>
                            <div class="tab-content" id="ds-impr-nav-tabContent">
                                <div class="tab-pane fade show active" id="ds-pna-my-proj-content" role="tabpanel"
                                    aria-labelledby="nav-ds-pna-my-proj-content-tab">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="card">
                                                <div class="card-content table-responsive">
                                                    <br />
                                                    <div class="alert alert-primary" role="alert">
                                                        No current record for this <a href="#"
                                                            class="alert-link">section</a>. If pillar staff creates a
                                                        project request it will show up here.
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end of SECOND column -->
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="ds-pna-staff-proj-content" role="tabpanel"
                                    aria-labelledby="nav-profile-tab">
                                    <br />
                                    <br />
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="card">
                                                <div class="card-content table-responsive">
                                                    <br />
                                                    <div class="alert alert-primary" role="alert">
                                                        No current record for this <a href="#"
                                                            class="alert-link">section</a>. If pillar staff creates a
                                                        project request it will show up here.
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end of SECOND column -->
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="ds-pna-lm-response-content" role="tabpanel"
                                    aria-labelledby="nav-contact-tab">
                                    <br />
                                    <br />
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="card">
                                                <div class="card-content table-responsive">
                                                    <br />
                                                    <div class="alert alert-primary" role="alert">
                                                        No current response from <a href="#" class="alert-link">line
                                                            manager</a>. If you get a project response it will show up
                                                        here.
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end of SECOND column -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- end of first column -->
        </div>
    </div>
</div>

@endsection
