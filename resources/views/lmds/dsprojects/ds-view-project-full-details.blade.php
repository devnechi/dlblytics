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
                                <br />
                                <br />
                                <br />
                                <br />
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
                                      <a class="nav-link active" id="nav-acts-tab" data-toggle="tab" href="#nav-acts" role="tab" aria-controls="nav-acts" aria-selected="true">Activities</a>
                                      <a class="nav-link" id="nav-sub-acts-tab" data-toggle="tab" href="#nav-sub-acts" role="tab" aria-controls="nav-sub-acts" aria-selected="false">Sub Activities</a>
                                      <a class="nav-link" id="nav-retirements-tab" data-toggle="tab" href="#nav-retirements" role="tab" aria-controls="nav-retirements" aria-selected="false">Retirements</a>
                                      <a class="nav-link" id="nav-members-tab" data-toggle="tab" href="#nav-members" role="tab" aria-controls="nav-members" aria-selected="false">Members</a>
                                      <a class="nav-link" id="nav-partners-tab" data-toggle="tab" href="#nav-partners" role="tab" aria-controls="nav-partners" aria-selected="false">Partners</a>
                                      <a class="nav-link" id="nav-funders-tab" data-toggle="tab" href="#nav-funders" role="tab" aria-controls="nav-funders" aria-selected="false">Funders</a>

                                    </div>
                                  </nav>
                                  <div class="tab-content" id="proj-details-Content">
                                    <div class="tab-pane fade show active" id="nav-acts" role="tabpanel" aria-labelledby="nav-acts-tab">
                                        <br />
                                        <br />

                                        <div class="card">
                                            <h5 class="card-header">Featured</h5>
                                            <div class="card-body">
                                              <h5 class="card-title">Special title treatment</h5>
                                              <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                              <a href="#" class="btn btn-primary">Go somewhere</a>
                                            </div>
                                          </div>

                                    </div>
                                    <div class="tab-pane fade" id="nav-sub-acts" role="tabpanel" aria-labelledby="nav-sub-acts-tab">
                                        <br />
                                        <br />
                                        <div class="row">
                                            <div class="col-sm-6">
                                              <div class="card">
                                                <div class="card-body">
                                                  <h5 class="card-title">Special title treatment</h5>
                                                  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                                  <a href="#" class="btn btn-primary">Go somewhere</a>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="col-sm-6">
                                              <div class="card">
                                                <div class="card-body">
                                                  <h5 class="card-title">Special title treatment</h5>
                                                  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                                  <a href="#" class="btn btn-primary">Go somewhere</a>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                    </div>
                                    <div class="tab-pane fade" id="nav-retirements" role="tabpanel" aria-labelledby="nav-retirements-tab">
                                        <br />
                                        <br />
                                        <div class="card mb-3" style="max-width: 540px;">
                                            <div class="row g-0">
                                              <div class="col-md-4">
                                                <img src="..." class="img-fluid rounded-start" alt="...">
                                              </div>
                                              <div class="col-md-8">
                                                <div class="card-body">
                                                  <h5 class="card-title">Card title</h5>
                                                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                                  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                    </div>
                                    <div class="tab-pane fade" id="nav-members" role="tabpanel" aria-labelledby="nav-members-tab">
                                        <br />
                                        <br />
                                        <div class="card mb-3" style="max-width: 540px;">
                                            <div class="row g-0">
                                              <div class="col-md-4">
                                                <img src="..." class="img-fluid rounded-start" alt="...">
                                              </div>
                                              <div class="col-md-8">
                                                <div class="card-body">
                                                  <h5 class="card-title">Card title</h5>
                                                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                                  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                    </div>

                                    <div class="tab-pane fade" id="nav-partners" role="tabpanel" aria-labelledby="nav-partners-tab">
                                        <br />
                                        <br />
                                        <div class="card mb-3" style="max-width: 540px;">
                                            <div class="row g-0">
                                              <div class="col-md-4">
                                                <img src="..." class="img-fluid rounded-start" alt="...">
                                              </div>
                                              <div class="col-md-8">
                                                <div class="card-body">
                                                  <h5 class="card-title">Card title</h5>
                                                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                                  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                    </div>

                                    <div class="tab-pane fade" id="nav-funders" role="tabpanel" aria-labelledby="nav-funders-tab">
                                        <br />
                                        <br />
                                        <div class="card mb-3" style="max-width: 540px;">
                                            <div class="row g-0">
                                              <div class="col-md-4">
                                                <img src="..." class="img-fluid rounded-start" alt="...">
                                              </div>
                                              <div class="col-md-8">
                                                <div class="card-body">
                                                  <h5 class="card-title">Card title</h5>
                                                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                                  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
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
            <!-- end of first column -->
        </div>
    </div>
</div>

@endsection
