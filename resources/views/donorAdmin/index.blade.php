@extends('layouts.ldnr')

@section('content')
<div class="container-fluid">


    <ul class="nav nav-tabs md-tabs" id="selectDataViewTab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="datadashboard-tab-md" data-toggle="tab" href="#datadashboard-md" role="tab"
                aria-controls="datadashboard-md" aria-selected="true"> Overview </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="imprest-retirements-tab-md" data-toggle="tab" href="#imprest-retirements-md" role="tab"
                aria-controls="imprest-retirements-md" aria-selected="false">Imprests & Retirements</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="payment-approvalnrequest-tab-md" data-toggle="tab" href="#payment-approvalnrequest-md" role="tab"
                aria-controls="payment-approvalnrequest-md" aria-selected="false">Payment Approval & Requests</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="financial-reports-tab-md" data-toggle="tab" href="#financial-reports-md" role="tab" aria-controls="financial-reports-md"
                aria-selected="false">Financial reports</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="payroll-system-tab-md" data-toggle="tab" href="#payroll-system-md" role="tab"
                aria-controls="payroll-system-md" aria-selected="false">Payroll System</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="scholars-grantees-tab-md" data-toggle="tab" href="#scholars-grantees-md"
                role="tab" aria-controls="scholars-grantees-md" aria-selected="false">Private and Public
                Data</a>
        </li>
    </ul>


    <div class="tab-content pt-5" id="selectDataViewTabContent">
        <!--
         =========================================
         =                                       =
         =      start of data dashboard           =
         ========================================= -->
        <!-- start of  data dashboard panel -->
        <div class="tab-pane fade show active" id="datadashboard-md" role="tabpanel"
            aria-labelledby="datadashboard-tab-md">
            {{-- <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-content table-responsive">
                            <div class="row">
                                <div class="col-lg-6">
                                    <br />
                                    <h5 class="title">Quick Shortcuts</h5>
                                    <br />
                                    <div class="row">
                                        <div class="form-group col-lg-12 input-group-lg">

                                        </div>

                                    </div>
                                </div>
                                <!-- end of row -->
                            </div>
                        </div>
                    </div>
                    <!-- end of first column -->
                </div>
            </div> --}}

            <div class="row">
                {{-- <div class="col-md-6">
                    <div class="card">
                        <div class="card-content table-responsive">
                            <div class="row">
                                <div class="col-lg-12">
                                    <br />
                                    <h5 class="title text-center">Quick Shortcuts</h5>
                                    <br />
                                    <div class="row">
                                        <div class="form-group col-lg-12 input-group-lg">

                                        </div>

                                    </div>
                                </div>
                                <!-- end of row -->
                            </div>
                        </div>
                    </div>
                    <!-- end of first column -->
                </div> --}}
                <div class="col-md-6">
                    <div class="card">
                        <!-- <div class="card-header" data-background-color="orange">
                               <h4 class="title text-center">Update Data</h4>
                               <p class="category text-center">Select Project to Update, 2019</p>
                         </div> -->
                        <div class="card-content table-responsive">
                            <div class="row">
                                <div class="col-lg-12">
                                    <br />
                                    <h5 class="title text-center">Dlab impact</h5>
                                    <br />
                                    <div class="row">
                                        <div class="form-group col-md-3 input-group-lg">
                                            <!-- <label for="exampleFormControlSelect1" class="control-label">select below:</label> -->
                                            <svg class="bi bi-graph-up" width="6em" height="6em" viewBox="0 0 16 16"
                                                fill="#0488ae" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M0 0h1v16H0V0zm1 15h15v1H1v-1z" />
                                                <path fill-rule="evenodd"
                                                    d="M14.39 4.312L10.041 9.75 7 6.707l-3.646 3.647-.708-.708L7 5.293 9.959 8.25l3.65-4.563.781.624z" />
                                                <path fill-rule="evenodd"
                                                    d="M10 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0V4h-3.5a.5.5 0 0 1-.5-.5z" />
                                            </svg>
                                        </div>
                                        <div class="form-group col-md-9 input-group-lg">

                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item"><strong>Capacity Building</strong>
                                                    - + 250 Trained Beneficiaries</li>
                                                <li class="list-group-item">
                                                    <strong>Research & Innovation</strong> - + 3000 Data point
                                                    generated</li>
                                                <li class="list-group-item"><strong>Data Science</strong> - + 200 Formed
                                                    Partnership</li>

                                                <li class="list-group-item"><strong>Community engagement</strong> - + 200 Formed
                                                Partnership</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-lg-12 input-group-lg">
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item"><strong>5000+
                                                    </strong> -Women impacted by
                                                    <strong>dlab</strong> projects</li>

                                                <!-- <li class="list-group-item"><strong>3760+ </strong> -Youth impacted by <strong>dlab</strong> projects</li> -->
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- end of row -->
                            </div>
                        </div>
                    </div>
                    <!-- end of first column -->
                </div>
                <div class="col-lg-12">

                    <div class="card">
                        <!-- <div class="card-header" data-background-color="orange">
                                <h4 class="title text-center">Update Data</h4>
                                <p class="category text-center">Select Project to Update, 2019</p>
                                 </div> -->
                        <div class="card-content table-responsive">
                            <div class="row">
                                <div class="col-lg-12">
                                    <br />

                                    <h5 class="title text-center">Total Use Stories generated across different sectors</h5>
                                    <br />
                                    <div class="row">
                                        <div class="form-group col-md-4 input-group-lg">
                                            <!-- <label for="exampleFormControlSelect1" class="control-label">select below:</label> -->
                                            <svg class="bi bi-bar-chart-fill" width="6em" height="6em"
                                                viewBox="0 0 16 16" fill="#0488ae" xmlns="http://www.w3.org/2000/svg">
                                                <rect width="4" height="5" x="1" y="10" rx="1" />
                                                <rect width="4" height="9" x="6" y="6" rx="1" />
                                                <rect width="4" height="14" x="11" y="1" rx="1" />
                                            </svg>
                                        </div>
                                        <div class="form-group col-md-4 input-group-lg">

                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item"><strong>Sector: HIV</strong>
                                                    - #250 use stories</li>
                                                <li class="list-group-item">
                                                    <strong>Sector: Health</strong> - #308 use stories
                                                </li>
                                                <li class="list-group-item"><strong>Sector: Gender</strong> - #213 user stories
                                                    and ventures</li>
                                            </ul>
                                        </div>
                                        <div class="form-group col-md-4 input-group-lg">

                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item"><strong>Sector: Economic growth</strong>
                                                    - #250 use stories</li>
                                                <li class="list-group-item">
                                                    <strong>Sector: Education</strong> - #308 use stories
                                                </li>
                                                <li class="list-group-item"><strong>Other</strong> - #213 use stories
                                                    and ventures</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="form-group col-lg-12 input-group-lg">
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item"><strong>3760+
                                                    </strong> -Youth impacted by
                                                    <strong>dlab</strong> projects</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- end of row -->
                            </div>
                        </div>
                    </div>
                    <!-- end of first column -->
                    <!-- end of first column -->
                </div>
            </div>

            <!-- dash stakeholders engaged -->
            <!-- 4 div kpi row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-content table-responsive">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group col-lg-12 input-group-lg">
                                        <div class="text-center">
                                            <br />
                                            <h4 class="title"># of stakeholders engaged from
                                                various
                                                DLAB innovation programs</h4>
                                            <br />
                                            <br />
                                        </div>

                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="text-center">
                                                            <img src="{{ URL::to('/') }}/images/dash_icons/awe.png"
                                                                alt="dlab out-reach icon"
                                                                style="height: auto; width: 120px;">
                                                            <br />
                                                            <br />
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="text-center">
                                                            <h6>Out-reach awareness</h6>
                                                            <p> <strong><b>3500+</b></strong> potential
                                                                stakeholders reached</p>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="text-center">
                                                            <img src="../images/dash_icons/app_rec.png"
                                                                alt="dlab receveived applications icon"
                                                                style="height: auto; width: 105px;">
                                                            <br />
                                                            <br />
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="text-center">
                                                            <h6>Applications </h6>
                                                            <p> <strong><b>2500+</b></strong> Number of
                                                                Applications received
                                                            </p>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">

                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="text-center">
                                                            <img src="../images/dash_icons/short_app.png"
                                                                alt="dlab shortlisted icon"
                                                                style="height: auto; width: 105px;">
                                                            <br />
                                                            <br />
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="text-center">
                                                            <h6>Applications Shortlisted
                                                            </h6>
                                                            <p> <strong><b>1500+</b></strong> Number of
                                                                Applications
                                                                short-listed</p>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-md-3">

                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="text-center">
                                                            <img src="../images/dash_icons/ideas_pitched.jpg"
                                                                alt="dlab pitched ideas icon"
                                                                style="height: auto; width: 148px;">
                                                            <br />
                                                            <br />
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="text-center">
                                                            <h6>Applications Pitched </h6>
                                                            <p> <strong><b>500+</b></strong> Number of
                                                                Applications pitched</p>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                        <!-- stakeolders engaged part b -->
                                        <br />
                                        <br />
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="text-center">
                                                            <img src="../images/dash_icons/inno_award.png"
                                                                alt="dlab awarded innovators icon"
                                                                style="height: auto; width: 140px;">
                                                            <br />
                                                            <br />
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="text-center">
                                                            <h6>Innovators Awarded</h6>
                                                            <p> <strong><b>250+</b></strong> potential
                                                                stakeholders reached</p>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="text-center">
                                                            <img src="../images/dash_icons/award_drop.png"
                                                                alt="dlab out-reach icon"
                                                                style="height: auto; width: 120px;">
                                                            <br />
                                                            <br />
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="text-center">
                                                            <h6>Drop-outs awards </h6>
                                                            <p> <strong><b>200+</b></strong> Number of awarded
                                                                drop-outs</p>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">

                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="text-center">
                                                            <img src="../images/dash_icons/complete_grad.png"
                                                                alt="dlab out-reach icon"
                                                                style="height: auto; width: 120px;">
                                                            <br />
                                                            <br />
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="text-center">
                                                            <h6>Awards Completed/Graduated
                                                            </h6>
                                                            <p> <strong><b>150+</b></strong> Number of graduates
                                                                and finalists </p>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-md-3">

                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="text-center">
                                                            <img src="../images/dash_icons/scale_up.png"
                                                                alt="dlab out-reach icon"
                                                                style="height: auto; width: 165px;">
                                                            <br />
                                                            <br />
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="text-center">
                                                            <h6>Scaled Up Projects </h6>
                                                            <p> <strong><b>120+</b></strong> Number of scale of
                                                                projects </p>
                                                        </div>
                                                    </div>
                                                </div>

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

            <!-- end stakeholders engaged -->

            <!-- 4 div kpi row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-content table-responsive">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group col-lg-12 input-group-lg">
                                        <br />
                                        <h4 class="title">Demographics</h4>
                                        <br />
                                        <br />
                                        <ul class="nav nav-tabs" id="dash-demographic-tab" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" id="youth-tab" data-toggle="tab"
                                                    href="#youth" role="tab" aria-controls="youth"
                                                    aria-selected="true">Youth</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="female-tab" data-toggle="tab" href="#female"
                                                    role="tab" aria-controls="female" aria-selected="false">Female</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="general-tab" data-toggle="tab" href="#general"
                                                    role="tab" aria-controls="general" aria-selected="false">General</a>
                                            </li>
                                        </ul>

                                        <div class="tab-content" id="myTabPerYouthFemaleContent">
                                            <!-- demographic: youth -->
                                            <div class="tab-pane fade show active" id="youth" role="tabpanel"
                                                aria-labelledby="youth-tab">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="form-group col-lg-12 input-group-lg">
                                                            <br />
                                                            <h4 class="title">Impact on
                                                                <strong>Youth</strong>
                                                            </h4>
                                                            <br />
                                                            <br />

                                                            <div id="accordion">
                                                                <div class="card">
                                                                    <div class="card-header" id="headingOne">
                                                                        <h5 class="mb-0">
                                                                            <button class="btn btn-link"
                                                                                data-toggle="collapse"
                                                                                data-target="#collapseOne"
                                                                                aria-expanded="true"
                                                                                aria-controls="collapseOne">
                                                                                Youth who reported positive change
                                                                            </button>
                                                                        </h5>
                                                                    </div>
                                                                    <div id="collapseOne" class="collapse show"
                                                                        aria-labelledby="headingOne"
                                                                        data-parent="#accordion">
                                                                        <div class="card-body">
                                                                            <div class="row">
                                                                                <div class="col-md-3">
                                                                                    <div class="text-center">
                                                                                        <img src="../images/dash_icons/rep_pos.jpg"
                                                                                            alt="dlab out-reach icon"
                                                                                            style="height: auto; width: 220px;">
                                                                                        <br />
                                                                                        <br />
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-9">
                                                                                    <div class="text-center">
                                                                                        <h6> Youth
                                                                                            reported
                                                                                            positive
                                                                                            change
                                                                                        </h6>
                                                                                        <p> <strong><b>120+</b></strong>
                                                                                            Percentage of activity
                                                                                            participants
                                                                                            who
                                                                                            reported
                                                                                            positive
                                                                                            change
                                                                                            as
                                                                                            a
                                                                                            result
                                                                                            of
                                                                                            Dlab
                                                                                            programs
                                                                                            Intervention
                                                                                        </p>
                                                                                    </div>

                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="card">
                                                                    <div class="card-header" id="headingTwo">
                                                                        <h5 class="mb-0">
                                                                            <button class="btn btn-link collapsed"
                                                                                data-toggle="collapse"
                                                                                data-target="#collapseTwo"
                                                                                aria-expanded="false"
                                                                                aria-controls="collapseTwo">
                                                                                Percentage of you participants on
                                                                                different roles
                                                                            </button>
                                                                        </h5>
                                                                    </div>
                                                                    <div id="collapseTwo" class="collapse"
                                                                        aria-labelledby="headingTwo"
                                                                        data-parent="#accordion">
                                                                        <div class="card-body">

                                                                            <div class="row">
                                                                                <div class="col-md-3">
                                                                                    <div class="text-center">
                                                                                        <img src="../images/dash_icons/roles.jpg"
                                                                                            alt="dlab out-reach icon"
                                                                                            style="height: auto; width: 220px;">
                                                                                        <br />
                                                                                        <br />
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-9">
                                                                                    <div class="text-center">
                                                                                        <h6> Youth
                                                                                            Participants
                                                                                        </h6>
                                                                                        <p> <strong><b>65.4%</b></strong>
                                                                                            percentage
                                                                                            of
                                                                                            participants
                                                                                            who
                                                                                            are
                                                                                            youth
                                                                                        </p>
                                                                                        <br />
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-9">
                                                                                    <h6>PARTICIPANTS ROLES</h6>
                                                                                    <ul
                                                                                        class="list-group list-group-flush">
                                                                                        <li class="list-group-item">
                                                                                            <p><strong><b>33.33%</b></strong>
                                                                                                in Decion roles</p>
                                                                                        </li>
                                                                                        <li class="list-group-item">
                                                                                            <p><strong><b>25.33+</b></strong>
                                                                                                in Advisory Role</p>
                                                                                        </li>
                                                                                        <li class="list-group-item">
                                                                                            <p><strong><b>43.42</b></strong>
                                                                                                in Supporting Team</p>
                                                                                        </li>

                                                                                    </ul>
                                                                                </div>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="card">
                                                                    <div class="card-header" id="headingThree">
                                                                        <h5 class="mb-0">
                                                                            <button class="btn btn-link collapsed"
                                                                                data-toggle="collapse"
                                                                                data-target="#collapseThree"
                                                                                aria-expanded="false"
                                                                                aria-controls="collapseThree">
                                                                                Number of people trained directy by dlab
                                                                                programs
                                                                            </button>
                                                                        </h5>
                                                                    </div>

                                                                    <div id="collapseThree" class="collapse"
                                                                        aria-labelledby="headingThree"
                                                                        data-parent="#accordion">
                                                                        <div class="card-body">


                                                                            <div class="row">
                                                                                <div class="col-md-3">
                                                                                    <div class="text-center">
                                                                                        <img src="../images/dash_icons/trainee.jpg"
                                                                                            alt="dlab out-reach icon"
                                                                                            style="height: auto; width: 220px;">
                                                                                        <br />
                                                                                        <br />
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-9">
                                                                                    <div class="text-center">
                                                                                        <h6> Youth
                                                                                            Participants
                                                                                        </h6>
                                                                                        <p> Participants who are youth
                                                                                        </p>
                                                                                        <br />
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-9">
                                                                                    <h6>accomplished trainees</h6>
                                                                                    <ul
                                                                                        class="list-group list-group-flush">
                                                                                        <li class="list-group-item">
                                                                                            <p>250+ Data Fellows</p>
                                                                                        </li>
                                                                                        <li class="list-group-item">
                                                                                            <p>253+ Data Scientists</p>
                                                                                        </li>
                                                                                        <li class="list-group-item">
                                                                                            <p>424+ Data Ambassadors</p>
                                                                                        </li>

                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="card">
                                                                    <div class="card-header" id="headingFour">
                                                                        <h5 class="mb-0">
                                                                            <button class="btn btn-link collapsed"
                                                                                data-toggle="collapse"
                                                                                data-target="#collapseFour"
                                                                                aria-expanded="false"
                                                                                aria-controls="collapseFour">
                                                                                Number of people trained directy by dlab
                                                                                programs
                                                                            </button>
                                                                        </h5>
                                                                    </div>


                                                                    <div id="collapseFour" class="collapse"
                                                                        aria-labelledby="headingFour"
                                                                        data-parent="#accordion">
                                                                        <div class="card-body">
                                                                            <div class="row">
                                                                                <div class="col-md-3">
                                                                                    <div class="text-center">
                                                                                        <img src="../images/dash_icons/engage.png"
                                                                                            alt="dlab out-reach icon"
                                                                                            style="height: auto; width: 320px;">
                                                                                        <br />
                                                                                        <br />
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-9">
                                                                                    <div class="text-center">
                                                                                        <h6> Youth engaged
                                                                                        </h6>
                                                                                        <p> 100+
                                                                                            Percentage
                                                                                            of
                                                                                            activity
                                                                                            participants
                                                                                            who
                                                                                            reported
                                                                                            positive
                                                                                            change
                                                                                            as
                                                                                            a
                                                                                            result
                                                                                            of
                                                                                            Dlab
                                                                                            programs
                                                                                            Intervention
                                                                                        </p>
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
                                            <!-- end demographic: youth -->
                                            <!--  demographic: female -->

                                            <div class="tab-pane fade" id="female" role="tabpanel"
                                                aria-labelledby="female-tab">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="form-group col-lg-12 input-group-lg">
                                                            <br />
                                                            <h4 class="title">Impact on
                                                                <strong>Female participants</strong>
                                                            </h4>
                                                            <br />
                                                            <br />

                                                            <div id="womenaccordion">
                                                                <div class="card">
                                                                    <div class="card-header" id="headingwomenOne">
                                                                        <h5 class="mb-0">
                                                                            <button class="btn btn-link"
                                                                                data-toggle="collapse"
                                                                                data-target="#collapsewomenOne"
                                                                                aria-expanded="true"
                                                                                aria-controls="collapsewomenOne">
                                                                                women who reported positive change
                                                                            </button>
                                                                        </h5>
                                                                    </div>

                                                                    <div id="collapsewomenOne" class="collapse show"
                                                                        aria-labelledby="headingwomenOne"
                                                                        data-parent="#womenaccordion">
                                                                        <div class="card-body">
                                                                            <div class="row">
                                                                                <div class="col-md-3">
                                                                                    <div class="text-center">
                                                                                        <img src="../images/dash_icons/rep_pos.jpg"
                                                                                            alt="dlab out-reach icon"
                                                                                            style="height: auto; width: 220px;">
                                                                                        <br />
                                                                                        <br />
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-9">
                                                                                    <div class="text-center">
                                                                                        <h6> Women
                                                                                            reported
                                                                                            positive
                                                                                            change
                                                                                        </h6>
                                                                                        <p> 100+
                                                                                            Percentage
                                                                                            of
                                                                                            activity
                                                                                            participants
                                                                                            who
                                                                                            reported
                                                                                            positive
                                                                                            change
                                                                                            as
                                                                                            a
                                                                                            result
                                                                                            of
                                                                                            Dlab
                                                                                            programs
                                                                                            Intervention
                                                                                        </p>
                                                                                    </div>

                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="card">
                                                                    <div class="card-header" id="headingwomenTwo">
                                                                        <h5 class="mb-0">
                                                                            <button class="btn btn-link collapsed"
                                                                                data-toggle="collapse"
                                                                                data-target="#collapsewomenTwo"
                                                                                aria-expanded="false"
                                                                                aria-controls="collapsewomenTwo">
                                                                                Percentage of women participants on
                                                                                different roles
                                                                            </button>
                                                                        </h5>
                                                                    </div>
                                                                    <div id="collapsewomenTwo" class="collapse"
                                                                        aria-labelledby="headingwomenTwo"
                                                                        data-parent="#womenaccordion">
                                                                        <div class="card-body">

                                                                            <div class="row">
                                                                                <div class="col-md-3">
                                                                                    <div class="text-center">
                                                                                        <img src="../images/dash_icons/roles.jpg"
                                                                                            alt="dlab out-reach icon"
                                                                                            style="height: auto; width: 220px;">
                                                                                        <br />
                                                                                        <br />
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-9">
                                                                                    <div class="text-center">
                                                                                        <h6> women
                                                                                            Participants
                                                                                        </h6>
                                                                                        <p>
                                                                                            percentage
                                                                                            of
                                                                                            participants
                                                                                            who
                                                                                            are
                                                                                            women
                                                                                        </p>
                                                                                        <br />
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-9">
                                                                                    <h6>PARTICIPANTS ROLES</h6>
                                                                                    <ul
                                                                                        class="list-group list-group-flush">
                                                                                        <li class="list-group-item">
                                                                                            <p>33.33% in Decion roles
                                                                                            </p>
                                                                                        </li>
                                                                                        <li class="list-group-item">
                                                                                            <p>25.33% in Advisory Role
                                                                                            </p>
                                                                                        </li>
                                                                                        <li class="list-group-item">
                                                                                            <p>42.44% in Supporting Team
                                                                                            </p>
                                                                                        </li>

                                                                                    </ul>
                                                                                </div>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="card">
                                                                    <div class="card-header" id="headingwomenThree">
                                                                        <h5 class="mb-0">
                                                                            <button class="btn btn-link collapsed"
                                                                                data-toggle="collapse"
                                                                                data-target="#collapsewomenThree"
                                                                                aria-expanded="false"
                                                                                aria-controls="collapsewomenThree">
                                                                                Number of people trained directy by dlab
                                                                                programs
                                                                            </button>
                                                                        </h5>
                                                                    </div>
                                                                    <div id="collapsewomenThree" class="collapse"
                                                                        aria-labelledby="headingwomenThree"
                                                                        data-parent="#womenaccordion">
                                                                        <div class="card-body">


                                                                            <div class="row">
                                                                                <div class="col-md-3">
                                                                                    <div class="text-center">

                                                                                        <img src="../images/dash_icons/engage.png"
                                                                                            alt="dlab out-reach icon"
                                                                                            style="height: auto; width: 320px;">
                                                                                        <br />
                                                                                        <br />
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-9">
                                                                                    <div class="text-center">
                                                                                        <h6> Women
                                                                                            Participants
                                                                                        </h6>
                                                                                        <p> Participants who are women
                                                                                        </p>
                                                                                        <br />
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-9">
                                                                                    <h6>accomplished trainees</h6>
                                                                                    <ul
                                                                                        class="list-group list-group-flush">
                                                                                        <li class="list-group-item">
                                                                                            <p>250+ Data Fellows</p>
                                                                                        </li>
                                                                                        <li class="list-group-item">
                                                                                            <p>253+ Data Scientists</p>
                                                                                        </li>
                                                                                        <li class="list-group-item">
                                                                                            <p>424+ Data Ambassadors</p>
                                                                                        </li>

                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="card">
                                                                    <div class="card-header" id="headingwomenFour">
                                                                        <h5 class="mb-0">
                                                                            <button class="btn btn-link collapsed"
                                                                                data-toggle="collapse"
                                                                                data-target="#collapsewomenFour"
                                                                                aria-expanded="false"
                                                                                aria-controls="collapsewomenFour">
                                                                                Number of people trained directy by dlab
                                                                                programs
                                                                            </button>
                                                                        </h5>
                                                                    </div>
                                                                    <div id="collapsewomenFour" class="collapse"
                                                                        aria-labelledby="headingwomenFour"
                                                                        data-parent="#womenaccordion">
                                                                        <div class="card-body">
                                                                            <div class="row">
                                                                                <div class="col-md-3">
                                                                                    <div class="text-center">

                                                                                        <img src="../images/dash_icons/trainee.jpg"
                                                                                            alt="dlab out-reach icon"
                                                                                            style="height: auto; width: 220px;">
                                                                                        <br />
                                                                                        <br />
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-9">
                                                                                    <div class="text-center">
                                                                                        <h6> Women engaged
                                                                                        </h6>
                                                                                        <p> 100+
                                                                                            Percentage
                                                                                            of
                                                                                            activity
                                                                                            participants
                                                                                            who
                                                                                            reported
                                                                                            positive
                                                                                            change
                                                                                            as
                                                                                            a
                                                                                            result
                                                                                            of
                                                                                            Dlab
                                                                                            programs
                                                                                            Intervention
                                                                                        </p>
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
                                            <!-- end demographic: female -->
                                            <!--  demographic: general -->
                                            <div class="tab-pane fade" id="general" role="tabpanel"
                                                aria-labelledby="general-tab">
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <div class="form-group col-lg-12 input-group-lg">
                                                            <br />
                                                            <h4 class="title">Impact on
                                                                <strong>All
                                                                    participants</strong>
                                                            </h4>
                                                            <br />
                                                            <br />

                                                            <div class="row">
                                                                <div class="col-lg-12">
                                                                    <div class="row">
                                                                        <div class="col-lg-3">
                                                                            <div class="text-center">
                                                                                <img src="../images/dash_icons/awe.png"
                                                                                    alt="dlab out-reach icon"
                                                                                    style="height: auto; width: 120px;"
                                                                                    class="rounded img-thumbnail iconsz">
                                                                                <br />
                                                                                <br />
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-9">
                                                                            <div class="text-center">
                                                                                <h6>Innovators
                                                                                    Awarded
                                                                                </h6>
                                                                                <p> 100+
                                                                                    potential
                                                                                    stakeholders
                                                                                    reached
                                                                                </p>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-lg-12">
                                                                    <div class="row">
                                                                        <div class="col-lg-3">
                                                                            <div class="text-center">
                                                                                <img src="../images/dash_icons/awe.png"
                                                                                    alt="dlab out-reach icon"
                                                                                    style="height: auto; width: 120px;"
                                                                                    class="rounded img-thumbnail iconsz">
                                                                                <br />
                                                                                <br />
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-9">
                                                                            <div class="text-center">
                                                                                <h6>Innovators
                                                                                    Awarded
                                                                                </h6>
                                                                                <p> 100+
                                                                                    potential
                                                                                    stakeholders
                                                                                    reached
                                                                                </p>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-12">
                                                                    <div class="row">
                                                                        <div class="col-lg-3">
                                                                            <div class="text-center">
                                                                                <img src="../images/dash_icons/awe.png"
                                                                                    alt="dlab out-reach icon"
                                                                                    style="height: auto; width: 120px;"
                                                                                    class="rounded img-thumbnail iconsz">
                                                                                <br />
                                                                                <br />
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-9">
                                                                            <div class="text-center">
                                                                                <h6>Innovators
                                                                                    Awarded
                                                                                </h6>
                                                                                <p> 100+
                                                                                    potential
                                                                                    stakeholders
                                                                                    reached
                                                                                </p>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </div>


                                                            </div>


                                                        </div>
                                                    </div>
                                                    <div class="col-lg-8">

                                                        <div class="row">
                                                            <div class="col-lg-8">
                                                                <div class="form-group col-md-6 input-group-lg">
                                                                    <br />
                                                                    <!-- <h4 class="title">
                                                                                                         all
                                                                                                         participants
                                                                                                         Activity
                                                                                                   </h4> -->
                                                                    <br />
                                                                    <br />


                                                                </div>
                                                            </div>
                                                            <!-- end of row -->
                                                        </div>
                                                    </div>

                                                    <!-- end of row -->
                                                </div>
                                            </div>
                                            <!-- end demographic: general -->

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
            <!-- 4 kpi div end row -->
            <!-- end demographics -->

            <!-- received user stories sectorwise -->
            <!-- 4 div kpi row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-content table-responsive">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group col-lg-12 input-group-lg">
                                        <br />
                                        <h4 class="title"> Received Use stories by sector</h4>
                                        <br />
                                        <br />


                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="text-center">
                                                            <img src="../images/dash_icons/hiv.png"
                                                                alt="dlab out-reach icon"
                                                                style="height: auto; width: 120px;">
                                                            <br />
                                                            <br />
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="text-center">
                                                            <h6>Sector: HIV</h6>
                                                            <p> <strong><b>1500+</b></strong> potential
                                                                stakeholders reached</p>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="text-center">
                                                            <img src="../images/dash_icons/health.png"
                                                                alt="dlab out-reach icon"
                                                                style="height: auto; width: 155px;">
                                                            <br />
                                                            <br />
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="text-center">
                                                            <h6>Sector: Health</h6>
                                                            <p> <strong><b>1250+</b></strong> potential
                                                                stakeholders reached</p>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="text-center">
                                                            <img src="../images/dash_icons/gender.png"
                                                                alt="dlab out-reach icon"
                                                                style="height: auto; width: 210px;">
                                                            <br />
                                                            <br />
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="text-center">
                                                            <h6>Sector: Gender</h6>
                                                            <p> <strong><b>3500+</b></strong> potential
                                                                stakeholders reached</p>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end of row: userstories part a -->
                                        <br />
                                        <br />


                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="text-center">
                                                            <img src="../images/dash_icons/eco_growth.png"
                                                                alt="dlab out-reach icon"
                                                                style="height: auto; width: 210px;">
                                                            <br />
                                                            <br />
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="text-center">
                                                            <h6>Sector: Economic growth</h6>
                                                            <p> <strong><b>1650+</b></strong> potential
                                                                stakeholders reached</p>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="text-center">
                                                            <img src="../images/dash_icons/education.png"
                                                                alt="dlab out-reach icon"
                                                                style="height: auto; width: 120px;">
                                                            <br />
                                                            <br />
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="text-center">
                                                            <h6>Sector: Education</h6>
                                                            <p> <strong><b>1720+</b></strong> potential
                                                                stakeholders reached</p>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="text-center">
                                                            <img src="../images/dash_icons/gov.png"
                                                                alt="dlab out-reach icon"
                                                                style="height: auto; width: 120px;">
                                                            <br />
                                                            <br />
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="text-center">
                                                            <h6>Sector: Governance / Decision making</h6>
                                                            <p> <strong><b>1450+</b></strong> potential
                                                                stakeholders reached</p>
                                                        </div>

                                                    </div>
                                                </div>
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
            <!-- 4 kpi div end row -->
            <!-- end of sector wise user stories -->

            <!-- table user stories received -->
            <!-- 4 div kpi row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-content table-responsive">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group col-lg-12 input-group-lg">
                                        <br />
                                        <h4 class="title">Recorded use stories</h4>
                                        <br />
                                        <br />

                                        <table class="table">
                                            <caption>Received use stories
                                            </caption>
                                            <thead>
                                                <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">Use Story Title</th>
                                                    <th scope="col">Participants name</th>
                                                    <th scope="col">Sector</th>
                                                    <th scope="col">Date published</th>
                                                    <th scope="col">Date created</th>
                                                    <th scope="col">Date updated</th>
                                                    <th scope="col"></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td>Dr Esla</td>
                                                    <td>Mark millan</td>
                                                    <td>Health</td>
                                                    <td>@mdo</td>
                                                    <td>12-03-2020</td>
                                                    <td>12-03-2020</td>
                                                    <td><button type="button" class="btn btn-outline-success">view full
                                                            details</button>
                                                    <td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">2</th>
                                                    <td>Dr Esla</td>
                                                    <td>Mark millan</td>
                                                    <td>Health</td>
                                                    <td>@mdo</td>
                                                    <td>12-03-2020</td>
                                                    <td>12-03-2020</td>
                                                    <td><button type="button" class="btn btn-outline-success">view full
                                                            details</button>
                                                    <td>

                                                </tr>
                                                <tr>
                                                    <th scope="row">3</th>
                                                    <td>Dr Esla</td>
                                                    <td>Mark millan</td>
                                                    <td>Health</td>
                                                    <td>@mdo</td>
                                                    <td>12-03-2020</td>
                                                    <td>12-03-2020</td>
                                                    <td><button type="button" class="btn btn-outline-success">view full
                                                            details</button>
                                                    <td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <!-- </div> -->
                                    </div>
                                </div>
                                <!-- end of row -->
                            </div>
                        </div>
                    </div>
                    <!-- end of first column -->
                </div>
            </div>
            <!-- 4 kpi div end row -->


            <!-- capacity building activity -->
            <!-- 4 div kpi row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-content table-responsive">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group col-lg-12 input-group-lg">
                                        <br />
                                        <h4 class="title"> Data related capacity building activities</h4>
                                        <br />
                                        <br />


                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="text-center">
                                                            <img src="../images/dash_icons/coach.png"
                                                                alt="dlab out-reach icon"
                                                                style="height: auto; width: 180px;">
                                                            <br />
                                                            <br />
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="text-center">
                                                            <h6>Training</h6>
                                                            <p> <strong><b>1500+</b></strong> training activities for
                                                                potential stakeholders</p>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="text-center">
                                                            <img src="../images/dash_icons/mentor.png"
                                                                alt="dlab out-reach icon"
                                                                style="height: auto; width: 180px;">
                                                            <br />
                                                            <br />
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="text-center">
                                                            <h6>Mentorship</h6>
                                                            <p> <strong><b>1500+</b></strong> potential
                                                                stakeholders mentored</p>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="text-center">
                                                            <img src="../images/dash_icons/info_access.png"
                                                                alt="dlab out-reach icon"
                                                                style="height: auto; width: 190px;">
                                                            <br />
                                                            <br />
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="text-center">
                                                            <h6>Access to Information Resources</h6>
                                                            <p> <strong><b>1500+</b></strong> potential
                                                                stakeholders access to information and resources</p>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end of row: userstories part a -->
                                        <br />
                                        <br />


                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="text-center">
                                                            <img src="../images/dash_icons/eqi.png"
                                                                alt="dlab out-reach icon"
                                                                style="height: auto; width: 120px;">
                                                            <br />
                                                            <br />
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="text-center">
                                                            <h6>Technical Infrastructure/equipment</h6>
                                                            <p> <strong><b>1500+</b></strong> potential
                                                                stakeholders have access to infrastructure and technical
                                                                equipment</p>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="text-center">
                                                            <img src="../images/dash_icons/strat.png"
                                                                alt="dlab out-reach icon"
                                                                style="height: auto; width: 120px;">
                                                            <br />
                                                            <br />
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="text-center">
                                                            <h6>Thinking/Strategic</h6>
                                                            <p> <strong><b>1500+</b></strong> potential
                                                                stakeholders benefit from strategy and critical thinking
                                                                activities</p>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="text-center">
                                                            <img src="../images/dash_icons/lead.png"
                                                                alt="dlab out-reach icon"
                                                                style="height: auto; width: 120px;">
                                                            <br />
                                                            <br />
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="text-center">
                                                            <h6>Sector: Governance / Leadership</h6>
                                                            <p> <strong><b>1500+</b></strong> Potential
                                                                stakeholders have leadership and governace training</p>
                                                        </div>

                                                    </div>
                                                </div>
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
            <!-- 4 kpi div end row -->
            <!-- end of capapcity building activities -->

            <!-- table user stories received -->
            <!-- 4 div kpi row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-content table-responsive">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group col-lg-12 input-group-lg">
                                        <br />
                                        <h4 class="title">Organisations Engaged</h4>
                                        <br />
                                        <br />

                                        <div class="row">
                                            <div class="col-md-6">
                                                <h4>Location engaged </h4>
                                            </div>
                                            <div class="col-md-6">
                                                <h4>Type of Organisations engaged </h4>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <br />
                                            <div class="row">

                                                <div class="col-lg-8 offset-md-1">

                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <div class="text-center">
                                                                <img src="../images/dash_icons/urban.png"
                                                                    alt="dlab out-reach icon"
                                                                    style="height: auto; width: 120px;"
                                                                    class="rounded img-thumbnail iconsz">
                                                                <br />
                                                                <br />
                                                            </div>
                                                        </div>
                                                        <div class="col-md-9">
                                                            <div class="text-center">
                                                                <h6>Urban Area</h6>
                                                                <p> 1500+ potential
                                                                    stakeholders reached</p>
                                                            </div>

                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <div class="text-center">
                                                                <img src="../images/dash_icons/semi_urban.png"
                                                                    alt="dlab out-reach icon"
                                                                    style="height: auto; width: 120px;"
                                                                    class="rounded img-thumbnail iconsz">
                                                                <br />
                                                                <br />
                                                            </div>
                                                        </div>
                                                        <div class="col-md-9">
                                                            <div class="text-center">
                                                                <h6>Semi-Urban</h6>
                                                                <p> 1500+ potential
                                                                    stakeholders reached</p>
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <div class="text-center">
                                                                <img src="../images/dash_icons/rural.png"
                                                                    alt="dlab out-reach icon"
                                                                    style="height: auto; width: 120px;"
                                                                    class="rounded img-thumbnail iconsz">
                                                                <br />
                                                                <br />
                                                            </div>
                                                        </div>
                                                        <div class="col-md-9">
                                                            <div class="text-center">
                                                                <h6>Rural Areas</h6>
                                                                <p> 1500+ potential
                                                                    stakeholders reached</p>
                                                            </div>

                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <!-- second part -->
                                        <div class="col-md-6">
                                            <br />

                                            <div class="row">

                                                <div class="col-lg-8">
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <div class="text-center">
                                                                <img src="../images/dash_icons/eng_gov.png"
                                                                    alt="dlab out-reach icon"
                                                                    style="height: auto; width: 120px;"
                                                                    class="rounded img-thumbnail iconsz">
                                                                <br />
                                                                <br />
                                                            </div>
                                                        </div>
                                                        <div class="col-md-9">
                                                            <div class="text-center">
                                                                <h6>Government</h6>
                                                                <p> 1500+ potential
                                                                    stakeholders reached</p>
                                                            </div>

                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <div class="text-center">
                                                                <img src="../images/dash_icons/non_profit.png"
                                                                    alt="dlab out-reach icon"
                                                                    style="height: auto; width: 120px;"
                                                                    class="rounded img-thumbnail iconsz">
                                                                <br />
                                                                <br />
                                                            </div>
                                                        </div>
                                                        <div class="col-md-9">
                                                            <div class="text-center">
                                                                <h6>Private non profit Organisations</h6>
                                                                <p> 1500+ potential
                                                                    stakeholders reached</p>
                                                            </div>

                                                        </div>
                                                    </div>


                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <div class="text-center">
                                                                <img src="../images/dash_icons/for_profit.png"
                                                                    alt="dlab out-reach icon"
                                                                    style="height: auto; width: 180px;"
                                                                    class="rounded img-thumbnail iconsz">
                                                                <br />
                                                                <br />
                                                            </div>
                                                        </div>
                                                        <div class="col-md-9">
                                                            <div class="text-center">
                                                                <h6>Private for Profit</h6>
                                                                <p> 1500+ potential
                                                                    stakeholders reached</p>
                                                            </div>

                                                        </div>
                                                    </div>

                                                </div>
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
            <!-- 4 kpi div end row -->


            <!-- newly generated data points -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-content table-responsive">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group col-lg-12 input-group-lg">
                                        <br />
                                        <h4 class="title">Recent generated New Data Points</h4>
                                        <br />
                                        <br />

                                        <table class="table">
                                            <caption>New data points generated as a result of dlab
                                                intervention</caption>
                                            <thead>
                                                <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">Data point Title</th>
                                                    <th scope="col">Sector</th>
                                                    <th scope="col">data point type </th>
                                                    <th scope="col">Data point source </th>
                                                    <th scope="col">Date created</th>
                                                    <th scope="col">Date updated</th>
                                                    <th scope="col"></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td>GirlSef</td>
                                                    <td>Genger</td>
                                                    <td>video</td>
                                                    <td>capacity building event</td>
                                                    <td>12-03-2020</td>
                                                    <td> - </td>
                                                    <td><button type="button" class="btn btn-outline-success">view full
                                                            details</button>
                                                    <td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">2</th>
                                                    <td>invoTech</td>
                                                    <td>Employement</td>
                                                    <td>platform</td>
                                                    <td>Online</td>
                                                    <td>12-03-2020</td>
                                                    <td> - </td>
                                                    <td><button type="button" class="btn btn-outline-success">view full
                                                            details</button>
                                                    <td>

                                                </tr>
                                                <tr>
                                                    <th scope="row">3</th>
                                                    <td>homeSchool </td>
                                                    <td>Education</td>
                                                    <td>image</td>
                                                    <td>Worksho</td>
                                                    <td>12-03-2020</td>
                                                    <td> - </td>
                                                    <td><button type="button" class="btn btn-outline-success">view full
                                                            details</button>
                                                    <td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <!-- </div> -->
                                    </div>
                                </div>
                                <!-- end of row -->
                            </div>
                        </div>
                    </div>
                    <!-- end of first column -->
                </div>
            </div>
            <!-- end of table new data points generated -->

            <!-- data point generated cards -->
            <!-- 4 div kpi row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-content table-responsive">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group col-lg-12 input-group-lg">
                                        <br />
                                        <br />
                                        <h4 class="title">Data points generated sectorwise</h4>
                                        <br />
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <br />
                                            <div class="row">

                                                <div class="col-lg-8 offset-md-1">

                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <div class="text-center">
                                                                <img src="../images/dash_icons/hiv.png"
                                                                    alt="dlab out-reach icon"
                                                                    style="height: auto; width: 120px;">
                                                                <br />
                                                                <br />
                                                            </div>
                                                        </div>
                                                        <div class="col-md-9">
                                                            <div class="text-center">
                                                                <h6>HIV</h6>
                                                                <p> <b>1500+</b> potential
                                                                    stakeholders reached</p>
                                                            </div>

                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <div class="text-center">
                                                                <img src="../images/dash_icons/health.png"
                                                                    alt="dlab out-reach icon"
                                                                    style="height: auto; width: 120px;">
                                                                <br />
                                                                <br />
                                                            </div>
                                                        </div>
                                                        <div class="col-md-9">
                                                            <div class="text-center">
                                                                <h6>Health</h6>
                                                                <p> <b>1500+</b> potential
                                                                    stakeholders reached</p>
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <div class="text-center">
                                                                <img src="../images/dash_icons/gender.png"
                                                                    alt="dlab out-reach icon"
                                                                    style="height: auto; width: 120px;">
                                                                <br />
                                                                <br />
                                                            </div>
                                                        </div>
                                                        <div class="col-md-9">
                                                            <div class="text-center">
                                                                <h6>Gender</h6>
                                                                <p> <b>1500+</b> potential
                                                                    stakeholders reached</p>
                                                            </div>

                                                        </div>
                                                    </div>


                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <div class="text-center">
                                                                <img src="../images/dash_icons/eco_grow.png"
                                                                    alt="dlab out-reach icon"
                                                                    style="height: auto; width: 120px;">
                                                                <br />
                                                                <br />
                                                            </div>
                                                        </div>
                                                        <div class="col-md-9">
                                                            <div class="text-center">
                                                                <h6>Economic Growth</h6>
                                                                <p> <b>1500+</b> potential
                                                                    stakeholders reached</p>
                                                            </div>

                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <div class="text-center">
                                                                <img src="../images/dash_icons/employ.png"
                                                                    alt="dlab out-reach icon"
                                                                    style="height: auto; width: 120px;">
                                                                <br />
                                                                <br />
                                                            </div>
                                                        </div>
                                                        <div class="col-md-9">
                                                            <div class="text-center">
                                                                <h6>Employment</h6>
                                                                <p> <b>1500+</b> potential
                                                                    stakeholders reached</p>
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <div class="text-center">
                                                                <img src="../images/dash_icons/drainage.jpg"
                                                                    alt="dlab out-reach icon"
                                                                    style="height: auto; width: 120px;">
                                                                <br />
                                                                <br />
                                                            </div>
                                                        </div>
                                                        <div class="col-md-9">
                                                            <div class="text-center">
                                                                <h6>Drainage</h6>
                                                                <p> <b>1500+</b> potential
                                                                    stakeholders reached</p>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- second part -->
                                        <div class="col-md-6">
                                            <br />

                                            <div class="row">

                                                <div class="col-lg-8">
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <div class="text-center">
                                                                <img src="../images/dash_icons/education.png"
                                                                    alt="dlab out-reach icon"
                                                                    style="height: auto; width: 120px;">
                                                                <br />
                                                                <br />
                                                            </div>
                                                        </div>
                                                        <div class="col-md-9">
                                                            <div class="text-center">
                                                                <h6>Education</h6>
                                                                <p> <b>1500+</b> potential
                                                                    stakeholders reached</p>
                                                            </div>

                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <div class="text-center">
                                                                <img src="../images/dash_icons/behav.png"
                                                                    alt="dlab out-reach icon"
                                                                    style="height: auto; width: 120px;">
                                                                <br />
                                                                <br />
                                                            </div>
                                                        </div>
                                                        <div class="col-md-9">
                                                            <div class="text-center">
                                                                <h6>Behaivor</h6>
                                                                <p> <b>1500+</b> potential
                                                                    stakeholders reached</p>
                                                            </div>

                                                        </div>
                                                    </div>


                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <div class="text-center">
                                                                <img src="../images/dash_icons/infra.png"
                                                                    alt="dlab out-reach icon"
                                                                    style="height: auto; width: 120px;">
                                                                <br />
                                                                <br />
                                                            </div>
                                                        </div>
                                                        <div class="col-md-9">
                                                            <div class="text-center">
                                                                <h6>Infrastructure</h6>
                                                                <p> <b>1500+</b> potential
                                                                    stakeholders reached</p>
                                                            </div>

                                                        </div>
                                                    </div>

                                                </div>
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
            <!-- end 4 data points generated cards div end row -->



            <!-- online and offline activities -->
            <!-- 4 div kpi row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-content table-responsive">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group col-lg-12 input-group-lg">
                                        <br />
                                        <h4 class="title">Project Online and Offline activities</h4>
                                        <br />
                                        <br />
                                        <ul class="nav nav-tabs" id="dash-onlineofflineactivities-tab" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" id="online-tab" data-toggle="tab"
                                                    href="#online" role="tab" aria-controls="online"
                                                    aria-selected="true">Online</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="offline-tab" data-toggle="tab" href="#offline"
                                                    role="tab" aria-controls="offline" aria-selected="false">Offline</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="other-activities-tab" data-toggle="tab"
                                                    href="#other-activities" role="tab" aria-controls="other-activities"
                                                    aria-selected="false">Other</a>
                                            </li>
                                        </ul>

                                        <div class="tab-content" id="myTabActContent">
                                            <!-- activities: online -->
                                            <div class="tab-pane fade show active" id="online" role="tabpanel"
                                                aria-labelledby="online-tab">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="form-group col-lg-12 input-group-lg">
                                                            <br />
                                                            <h4 class="title">
                                                                <strong>Online</strong>
                                                            </h4>
                                                            <br />
                                                            <br />

                                                            <div class="row">
                                                                <div class="col-lg-12">
                                                                    <div class="row">
                                                                        <div class="col-lg-3">
                                                                            <div class="text-center">
                                                                                <img src="../images/dash_icons/online_tools.png"
                                                                                    alt="dlab out-reach icon"
                                                                                    style="height: auto; width: 120px;">
                                                                                <br />
                                                                                <br />
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-9">
                                                                            <div class="text-center">
                                                                                <h6>Number of stakeholders accessing
                                                                                    Program <strong>online</strong>
                                                                                    Tools
                                                                                </h6>
                                                                                <p> 100+
                                                                                    potential
                                                                                    stakeholders
                                                                                    reached
                                                                                </p>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-lg-12">
                                                                    <div class="row">
                                                                        <div class="col-lg-3">
                                                                            <div class="text-center">
                                                                                <img src="../images/dash_icons/community_engage.png"
                                                                                    alt="dlab out-reach icon"
                                                                                    style="height: auto; width: 120px;">
                                                                                <br />
                                                                                <br />
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-9">
                                                                            <div class="text-center">
                                                                                <h6>Number of <strong> online</strong>
                                                                                    Data related Events facilitated by
                                                                                    Dlab programs
                                                                                </h6>
                                                                                <p> 100+
                                                                                    potential
                                                                                    stakeholders
                                                                                    reached
                                                                                </p>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-12">
                                                                    <div class="row">
                                                                        <div class="col-lg-3">
                                                                            <div class="text-center">
                                                                                <img src="../images/dash_icons/online_training.png"
                                                                                    alt="dlab out-reach icon"
                                                                                    style="height: auto; width: 120px;">
                                                                                <br />
                                                                                <br />
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-9">
                                                                            <div class="text-center">
                                                                                <h6>Number of <strong>Online</strong>
                                                                                    Project Training Packages provided
                                                                                    to Target Stakeholders
                                                                                </h6>
                                                                                <p> 100+
                                                                                    potential
                                                                                    stakeholders
                                                                                    reached
                                                                                </p>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-lg-12">
                                                                    <div class="row">
                                                                        <div class="col-lg-3">
                                                                            <div class="text-center">
                                                                                <img src="../images/dash_icons/enga.png"
                                                                                    alt="dlab out-reach icon"
                                                                                    style="height: auto; width: 120px;">
                                                                                <br />
                                                                                <br />
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-9">
                                                                            <div class="text-center">
                                                                                <h6>Number of <strong>Online</strong>
                                                                                    engagement as a result of program
                                                                                    intervention
                                                                                </h6>
                                                                                <p> 100+
                                                                                    potential
                                                                                    stakeholders
                                                                                    reached
                                                                                </p>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </div>


                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end activities: online -->
                                            <!--  activities: offline -->

                                            <div class="tab-pane fade" id="offline" role="tabpanel"
                                                aria-labelledby="offline-tab">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="form-group col-lg-12 input-group-lg">
                                                            <br />
                                                            <h4 class="title">
                                                                <strong>Offline</strong>
                                                                Activities
                                                            </h4>
                                                            <br />
                                                            <br />
                                                            <div class="row">
                                                                <div class="col-lg-12">
                                                                    <div class="row">
                                                                        <div class="col-lg-3">
                                                                            <div class="text-center">
                                                                                <img src="../images/dash_icons/geart.png"
                                                                                    alt="dlab out-reach icon"
                                                                                    style="height: auto; width: 120px;">
                                                                                <br />
                                                                                <br />
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-9">
                                                                            <div class="text-center">
                                                                                <h6>Number of stakeholders accessing
                                                                                    Program <strong>offline</strong>
                                                                                    Tools
                                                                                </h6>
                                                                                <p> 100+
                                                                                    potential
                                                                                    stakeholders
                                                                                    reached
                                                                                </p>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-lg-12">
                                                                    <div class="row">
                                                                        <div class="col-lg-3">
                                                                            <div class="text-center">
                                                                                <img src="../images/dash_icons/wrk.png"
                                                                                    alt="dlab out-reach icon"
                                                                                    style="height: auto; width: 120px;">
                                                                                <br />
                                                                                <br />
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-9">
                                                                            <div class="text-center">
                                                                                <h6>Number of <strong> offline</strong>
                                                                                    Data related Events facilitated by
                                                                                    Dlab programs
                                                                                </h6>
                                                                                <p> 100+
                                                                                    potential
                                                                                    stakeholders
                                                                                    reached
                                                                                </p>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-12">
                                                                    <div class="row">
                                                                        <div class="col-lg-3">
                                                                            <div class="text-center">
                                                                                <img src="../images/dash_icons/strat.png"
                                                                                    alt="dlab out-reach icon"
                                                                                    style="height: auto; width: 120px;">
                                                                                <br />
                                                                                <br />
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-9">
                                                                            <div class="text-center">
                                                                                <h6>Number of <strong>Offline</strong>
                                                                                    Project Training Packages provided
                                                                                    to Target Stakeholders
                                                                                </h6>
                                                                                <p> 100+
                                                                                    potential
                                                                                    stakeholders
                                                                                    reached
                                                                                </p>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-lg-12">
                                                                    <div class="row">
                                                                        <div class="col-lg-3">
                                                                            <div class="text-center">
                                                                                <img src="../images/dash_icons/training.png"
                                                                                    alt="dlab out-reach icon"
                                                                                    style="height: auto; width: 120px;">
                                                                                <br />
                                                                                <br />
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-9">
                                                                            <div class="text-center">
                                                                                <h6>Number of <strong>Offline</strong>
                                                                                    Project Training Packages provided
                                                                                    to Target Stakeholders
                                                                                </h6>
                                                                                <p> 100+
                                                                                    potential
                                                                                    stakeholders
                                                                                    reached
                                                                                </p>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </div>


                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end activities: offline -->
                                            <!--  activities: other -->
                                            <div class="tab-pane fade" id="other-activities" role="tabpanel"
                                                aria-labelledby="other-activities-tab">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="form-group col-lg-12 input-group-lg">
                                                            <br />
                                                            <h4 class="title">
                                                                <strong>Other</strong>
                                                                Activities
                                                            </h4>
                                                            <br />
                                                            <br />
                                                            <div class="row">
                                                                <div class="col-lg-12">
                                                                    <div class="row">
                                                                        <div class="col-lg-3">
                                                                            <div class="text-center">
                                                                                <img src="../images/dash_icons/awe.png"
                                                                                    alt="dlab out-reach icon"
                                                                                    style="height: auto; width: 120px;">
                                                                                <br />
                                                                                <br />
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-9">
                                                                            <div class="text-center">
                                                                                <h6>Number of stakeholders accessing
                                                                                    Program <strong>and other</strong>
                                                                                    Tools
                                                                                </h6>
                                                                                <p> 100+
                                                                                    potential
                                                                                    stakeholders
                                                                                    reached
                                                                                </p>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-lg-12">
                                                                    <div class="row">
                                                                        <div class="col-lg-3">
                                                                            <div class="text-center">
                                                                                <img src="../images/dash_icons/awe.png"
                                                                                    alt="dlab out-reach icon"
                                                                                    style="height: auto; width: 120px;"
                                                                                    class="rounded img-thumbnail iconsz">
                                                                                <br />
                                                                                <br />
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-9">
                                                                            <div class="text-center">
                                                                                <h6>Number of <strong> other</strong>
                                                                                    Data related Events facilitated by
                                                                                    Dlab programs
                                                                                </h6>
                                                                                <p> 100+
                                                                                    potential
                                                                                    stakeholders
                                                                                    reached
                                                                                </p>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-12">
                                                                    <div class="row">
                                                                        <div class="col-lg-3">
                                                                            <div class="text-center">
                                                                                <img src="../images/dash_icons/awe.png"
                                                                                    alt="dlab out-reach icon"
                                                                                    style="height: auto; width: 120px;"
                                                                                    class="rounded img-thumbnail iconsz">
                                                                                <br />
                                                                                <br />
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-9">
                                                                            <div class="text-center">
                                                                                <h6>Number of <strong>Other</strong>
                                                                                    Project Training Packages provided
                                                                                    to Target Stakeholders
                                                                                </h6>
                                                                                <p> 100+
                                                                                    potential
                                                                                    stakeholders
                                                                                    reached
                                                                                </p>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-lg-12">
                                                                    <div class="row">
                                                                        <div class="col-lg-3">
                                                                            <div class="text-center">
                                                                                <img src="../images/dash_icons/awe.png"
                                                                                    alt="dlab out-reach icon"
                                                                                    style="height: auto; width: 120px;"
                                                                                    class="rounded img-thumbnail iconsz">
                                                                                <br />
                                                                                <br />
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-9">
                                                                            <div class="text-center">
                                                                                <h6>Number of <strong>Other</strong>
                                                                                    Project Training Packages provided
                                                                                    to Target Stakeholders
                                                                                </h6>
                                                                                <p> 100+
                                                                                    potential
                                                                                    stakeholders
                                                                                    reached
                                                                                </p>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </div>


                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="col-lg-8">

                                                        <div class="row">
                                                            <div class="col-lg-8">
                                                                <div class="form-group col-md-6 input-group-lg">
                                                                    <br />
                                                                    <!-- <h4 class="title">
                                                                                                         all
                                                                                                         participants
                                                                                                         Activity
                                                                                                   </h4> -->
                                                                    <br />
                                                                    <br />


                                                                </div>
                                                            </div>
                                                            <!-- end of row -->
                                                        </div>
                                                    </div>

                                                    <!-- end of row -->
                                                </div>
                                            </div>
                                            <!-- end activities: other -->

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
            <!-- 4 kpi div end row -->
            <!-- end online and offline activities -->


            <!-- direct and indirect beneficiaries -->
            <!-- 4 div kpi row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-content table-responsive">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group col-lg-12 input-group-lg">
                                        <br />
                                        <h4 class="title"> Number of direct and indirect beneficiaries</h4>
                                        <br />
                                        <br />


                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="text-center">
                                                            <img src="../images/dash_icons/in_benefic.png"
                                                                alt="dlab out-reach icon"
                                                                style="height: auto; width: 210px;">
                                                            <br />
                                                            <br />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="text-center">
                                                            <h6>Total Number of <strong>Indirect Beneficiaries</strong>
                                                            </h6>
                                                            <p> 1500+ potential
                                                                stakeholders reached</p>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <div class="text-center">
                                                            <img src="../images/dash_icons/direct_benefic.png"
                                                                alt="dlab out-reach icon"
                                                                style="height: auto; width: 210px;"
                                                                class="rounded img-thumbnail iconsz">
                                                            <br />
                                                            <br />
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <div class="text-center">
                                                            <h6>Total number of <strong>Direct Beneficiaries</strong>
                                                            </h6>
                                                            <p> 1500+ potential
                                                                stakeholders reached</p>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end of row: userstories part a -->
                                        <br />
                                        <br />
                                    </div>
                                </div>
                                <!-- end of row -->
                            </div>
                        </div>
                    </div>
                    <!-- end of first column -->
                </div>
            </div>
            <!-- 4 kpi div end row -->
            <!-- end of direct and indirect beneficiaries -->


            <!-- dash partnerships formed -->
            <!-- 4 div kpi row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-content table-responsive">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group col-lg-12 input-group-lg">
                                        <div class="text-center">
                                            <br />
                                            <h4 class="title">Partnerships formed</h4>
                                            <br />
                                            <br />
                                        </div>

                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="text-center">
                                                            <img src="../images/dash_icons/eng_gov.png"
                                                                alt="dlab out-reach icon"
                                                                style="height: auto; width: 120px;">
                                                            <br />
                                                            <br />
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="text-center">
                                                            <h6>Government</h6>
                                                            <p> <b>150+</b> Partnership formed</p>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="text-center">
                                                            <img src="../images/dash_icons/non_profit.png"
                                                                alt="dlab out-reach icon"
                                                                style="height: auto; width: 210px;">
                                                            <br />
                                                            <br />
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="text-center">
                                                            <h6>Private non profit </h6>
                                                            <p> 200+ Partnership formed
                                                            </p>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">

                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="text-center">
                                                            <img src="../images/dash_icons/for_profit.png"
                                                                alt="dlab out-reach icon"
                                                                style="height: auto; width: 120px;">
                                                            <br />
                                                            <br />
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="text-center">
                                                            <h6>Private for profit
                                                            </h6>
                                                            <p> 120+ Partnership formed</p>
                                                        </div>
                                                    </div>
                                                </div>

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
            <!-- end partnerships formed -->


            <!-- Program funds management -->
            <!-- 4 div kpi row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-content table-responsive">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group col-lg-12 input-group-lg">
                                        <div class="text-center">
                                            <br />
                                            <h4 class="title">Program funds management</h4>
                                            <br />
                                            <br />
                                        </div>

                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="text-center">
                                                            <img src="../images/dash_icons/cap_bui.png"
                                                                alt="dlab out-reach icon"
                                                                style="height: auto; width: 120px;">
                                                            <br />
                                                            <br />
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="text-center">
                                                            <h6>Capacity Building</h6>
                                                            <p> 2500000 USD</p>
                                                            <p> 700+ MIL TZS</p>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="text-center">
                                                            <img src="../images/dash_icons/community_engage.png"
                                                                alt="dlab out-reach icon"
                                                                style="height: auto; width: 120px;">
                                                            <br />
                                                            <br />
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="text-center">
                                                            <h6>Community Engagement </h6>
                                                            <p> 150000 USD</p>
                                                            <p> 300+ MIL TZS</p>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">

                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="text-center">
                                                            <img src="../images/dash_icons/toolsfund.png"
                                                                alt="dlab out-reach icon"
                                                                style="height: auto; width: 130px;">
                                                            <br />
                                                            <br />
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="text-center">
                                                            <h6> Tools & Equipment
                                                            </h6>
                                                            <p> 150000 USD</p>
                                                            <p> 300+ MIL TZS</p>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-md-3">

                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="text-center">
                                                            <img src="../images/dash_icons/inno_prog.png"
                                                                alt="dlab out-reach icon"
                                                                style="height: auto; width: 170px;">
                                                            <br />
                                                            <br />
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="text-center">
                                                            <h6>Innovation Programs </h6>
                                                            <p> 150000 USD</p>
                                                            <p> 300+ MIL TZS</p>
                                                        </div>
                                                    </div>
                                                </div>

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
            <!-- end funds management -->

        </div>


        <!-- end of imprest-retirements data panel -->

        <!-- =========================================
               =                                       =
               =             start of imprest-retirements data =
               ========================================= -->

        <div class="tab-pane fade" id="imprest-retirements-md" role="tabpanel" aria-labelledby="imprest-retirements-tab-md">
            <!-- line chart -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">

                        <div class="card-content table-responsive">
                            <div class="container">
                              <div class="row">
                                  <div class="col">
                                    <br />
                                    <br />
                                    <h5 class="title">Recent Imprests inbound</h5>
                                    <br />

                                    <table class="table table-hover">
                                        <caption>view full list</caption>
                                        <thead>
                                          <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Title</th>
                                            <th scope="col">Initiated by</th>
                                            <th scope="col">Total Amount</th>
                                            <th scope="col">Assoc pillar</th>
                                            <th scope="col">Imprest type</th>
                                            <th scope="col">Location</th>
                                            <th scope="col">Date Created</th>
                                            <th scope="col"></th>

                                          </tr>
                                        </thead>
                                        <tbody>
                                          <tr>
                                            <th scope="row">1</th>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>@mdo</td>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>@mdo</td>
                                            <td>@mdo</td>
                                            <td><button type="button" class="btn btn-outline-info">view full details</button></td>
                                          </tr>
                                          <tr>
                                            <th scope="row">2</th>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>@mdo</td>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>@mdo</td>
                                            <td>@mdo</td>
                                            <td><button type="button" class="btn btn-outline-info">view full details</button></td>

                                          </tr>
                                          <tr>
                                            <th scope="row">3</th>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>@mdo</td>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>@mdo</td>
                                            <td>@mdo</td>
                                            <td><button type="button" class="btn btn-outline-info">view full details</button></td>

                                        </tr>
                                        </tbody>
                                      </table>

                                      <nav aria-label="Page navigation example">
                                        <ul class="pagination">
                                          <li class="page-item">
                                            <a class="page-link" href="#" aria-label="Previous">
                                              <span aria-hidden="true">&laquo;</span>
                                              <span class="sr-only">Previous</span>
                                            </a>
                                          </li>
                                          <li class="page-item"><a class="page-link" href="#">1</a></li>
                                          <li class="page-item"><a class="page-link" href="#">2</a></li>
                                          <li class="page-item"><a class="page-link" href="#">3</a></li>
                                          <li class="page-item">
                                            <a class="page-link" href="#" aria-label="Next">
                                              <span aria-hidden="true">&raquo;</span>
                                              <span class="sr-only">Next</span>
                                            </a>
                                          </li>
                                        </ul>
                                      </nav>
                                    </div>
                                </div>

                            </div>



                            </div>
                    </div>
                    <!-- end of SECOND column -->
                </div>

            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">

                        <div class="card-content table-responsive">
                            <div class="container">

                                <div class="row">
                                    <div class="col">
                                        <br />
                                        <br />
                                        <h5 class="title">Recent Retirements</h5>
                                        <br />

                                        <table class="table table-hover">
                                            <caption>view full list</caption>
                                            <thead>
                                              <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Title</th>
                                                <th scope="col">Initiated by</th>
                                                <th scope="col">Total Amount</th>
                                                <th scope="col">Assoc pillar</th>
                                                <th scope="col">Imprest type</th>
                                                <th scope="col">Location</th>
                                                <th scope="col">Date Created</th>
                                                <th scope="col"></th>

                                              </tr>
                                            </thead>
                                            <tbody>
                                              <tr>
                                                <th scope="row">1</th>
                                                <td>Mark</td>
                                                <td>Otto</td>
                                                <td>@mdo</td>
                                                <td>Mark</td>
                                                <td>Otto</td>
                                                <td>@mdo</td>
                                                <td>@mdo</td>
                                                <td><button type="button" class="btn btn-outline-primary">review</button></td>
                                              </tr>
                                              <tr>
                                                <th scope="row">2</th>
                                                <td>Mark</td>
                                                <td>Otto</td>
                                                <td>@mdo</td>
                                                <td>Mark</td>
                                                <td>Otto</td>
                                                <td>@mdo</td>
                                                <td>@mdo</td>
                                                <td><button type="button" class="btn btn-outline-primary">review</button></td>

                                              </tr>
                                              <tr>
                                                <th scope="row">3</th>
                                                <td>Mark</td>
                                                <td>Otto</td>
                                                <td>@mdo</td>
                                                <td>Mark</td>
                                                <td>Otto</td>
                                                <td>@mdo</td>
                                                <td>@mdo</td>
                                                <td><button type="button" class="btn btn-outline-primary">review</button></td>

                                            </tr>
                                            </tbody>
                                          </table>
                                          <nav aria-label="Page navigation example">
                                            <ul class="pagination">
                                              <li class="page-item">
                                                <a class="page-link" href="#" aria-label="Previous">
                                                  <span aria-hidden="true">&laquo;</span>
                                                  <span class="sr-only">Previous</span>
                                                </a>
                                              </li>
                                              <li class="page-item"><a class="page-link" href="#">1</a></li>
                                              <li class="page-item"><a class="page-link" href="#">2</a></li>
                                              <li class="page-item"><a class="page-link" href="#">3</a></li>
                                              <li class="page-item">
                                                <a class="page-link" href="#" aria-label="Next">
                                                  <span aria-hidden="true">&raquo;</span>
                                                  <span class="sr-only">Next</span>
                                                </a>
                                              </li>
                                            </ul>
                                          </nav>
                                        </div>
                              </div>
                            </div>



                            </div>
                    </div>
                    <!-- end of SECOND column -->
                </div>

            </div>

        </div>
        <!-- end of imprest-retirements data column -->
        <!--
               =========================================
               =                                       =
               =      start of payment-approvalnrequest data           =
               ========================================= -->
        <!-- start of payment-approvalnrequest data panel -->
        <div class="tab-pane fade" id="payment-approvalnrequest-md" role="tabpanel" aria-labelledby="payment-approvalnrequest-tab-md">
            <p>Date is specific to individual projects</p>
            <br />
            <br />


        </div>
        <!-- end of payment-approvalnrequest data panel -->

        <!--
               =========================================
               =                                       =
               =      start of finacial reports data           =
               ========================================= -->
        <!-- start of financial reports data panel -->
        <div class="tab-pane fade" id="financial-reports-md" role="tabpanel" aria-labelledby="financial-reports-tab-md">
            <p>Date is specific to individual projects</p>
            <br />
            <br />


        </div>
        <!-- end of  financial reports panel -->
        <!--
         ========================================
         =                                      =
         =       start of payroll-system =
         ======================================== -->
        <!-- start of payroll-system panel -->
        <div class="tab-pane fade" id="payroll-system-md" role="tabpanel" aria-labelledby="payroll-system-tab-md">

            <br />
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header" data-background-color="orange">
                            <h4 class="title text-center">DLAB TIMELINE</h4>
                            <p class="category text-center">Dlab archievement over the years, as of 2020</p>
                        </div>
                        <div class="card-content table-responsive">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="main-timeline4">
                                            <div class="timeline">
                                                <a href="#" class="timeline-content">
                                                    <span class="year">2018</span>
                                                    <div class="inner-content">
                                                        <h3 class="title">Dlab</h3>
                                                        <p class="description">
                                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                            Cras ex odio, rhoncus sit amet tincidunt eu, suscipit a
                                                            orci. In suscipit quam eget dui auctor.
                                                        </p>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="timeline">
                                                <a href="#" class="timeline-content">
                                                    <span class="year">2017</span>
                                                    <div class="inner-content">
                                                        <h3 class="title">DCLI, DLI, DATA ZETU</h3>
                                                        <p class="description">
                                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                            Cras ex odio, rhoncus sit amet tincidunt eu, suscipit a
                                                            orci. In suscipit quam eget dui auctor.
                                                        </p>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="timeline">
                                                <a href="#" class="timeline-content">
                                                    <span class="year">2016</span>
                                                    <div class="inner-content">
                                                        <h3 class="title">DCLI, DLI, DATAZETU</h3>
                                                        <p class="description">
                                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                            Cras ex odio, rhoncus sit amet tincidunt eu, suscipit a
                                                            orci. In suscipit quam eget dui auctor.
                                                        </p>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="timeline">
                                                <a href="#" class="timeline-content">
                                                    <span class="year">2015</span>
                                                    <div class="inner-content">
                                                        <h3 class="title">Dlab Inception</h3>
                                                        <p class="description">
                                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                            Cras ex odio, rhoncus sit amet tincidunt eu, suscipit a
                                                            orci. In suscipit quam eget dui auctor.
                                                        </p>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                        </div>
                    </div>
                    <!-- end of first column -->
                </div>

            </div>
            <!-- END OF ROW -->


        </div>
        <!-- end of payroll-system data panel -->
        <!--
         ========================================
         =                                      =
         =       start of scholars and grantees =
         ======================================== -->
        <!-- start of scholar and grantees data panel -->
        <div class="tab-pane fade" id="scholars-grantees-md" role="tabpanel"
            aria-labelledby="scholars-grantees-tab-md">
            <p>Scholar information</p>
            <br />
            <br />
        </div>
        <!-- end of scholar and grantees data panel -->
    </div>

</div>
@endsection
