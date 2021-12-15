@extends('layouts.llmds')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                {{-- <div class="card-header" data-background-color="orange">
                    <h4 class="title text-center">Project Details</h4>
                    <p class="category text-center">full project</p>
                </div> --}}
                <div class="card-content table-responsive">
                    {{-- <br />
                    <h6> Project Details</h6>
                    <br /> --}}
                    <div class="container">

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
                                            <p>Project title</p>
                                            <h1><strong>{{ $project->project_title }}</strong></h1>

                                        </div>
                                    </div>
                               </div>
                           </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 input-group-lg">
                                <p>Project description</p>
                                <p>{{ $project->project_desc }}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6 input-group-lg">
                                {{-- <label for="forPillarTitle" value="">Pillar Title</label> --}}
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <p>Project total cost</p>
                                            <h3><strong>{{ $project->total_project_cost }}</strong></h3>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <p>Currency</p>
                                            <h3><strong>TZS</strong></h3>
                                        </div>
                                    </div>
                               </div>
                           </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-md-6 input-group-lg">
                                {{-- <label for="forPillarTitle" value="">Pillar Title</label> --}}
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <p>Project current stage</p>
                                            <h3><strong>{{ $project->current_stage }}</strong></h3>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <p>Status</p>
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
                                            <p>Date Created</p>
                                            <h3><strong>{{ $project->created_at }}</strong></h3>
                                        </div>
                                    </div>
                               </div>
                           </div>
                        </div>


                        <div class="row">
                            <div class="col-lg-12">
                                <nav>
                                    <div class="nav nav-tabs" id="proj-details-nav-tab" role="tablist">
                                      <a class="nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Home</a>
                                      <a class="nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Profile</a>
                                      <a class="nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Contact</a>
                                    </div>
                                  </nav>
                                  <div class="tab-content" id="proj-details-Content">
                                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">...</div>
                                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">...</div>
                                    <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">...</div>
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
