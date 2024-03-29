@extends('layouts.llmri')
@section('content')
<div class="container-fluid">
      <ul class="nav nav-tabs md-tabs" id="selectDataViewTab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="data-science-overview-tab-md" data-toggle="tab" href="#data-science-overview-md" role="tab"
                aria-controls="data-science-overview-md" aria-selected="true"> Overview </a>
        </li>


        <li class="nav-item">
            <a class="nav-link" id="projects-nactivities-tab-md" data-toggle="tab" href="#projects-nactivities-md" role="tab"
                aria-controls="projects-nactivities-md" aria-selected="false">Projects & Activities </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" id="data-science-request-tab-md" data-toggle="tab" href="#data-science-request-md"
                role="tab" aria-controls="data-science-request-md" aria-selected="false"> <strong>Research & Innovation</strong> Requests</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="retirements-tab-md" data-toggle="tab" href="#retirements-md" role="tab"
                aria-controls="retirements-md" aria-selected="false">Retirements</a>
        </li>

        <li class="nav-item">
            <a class="nav-link" id="imprests-tab-md" data-toggle="tab" href="#imprests-md" role="tab"
                aria-controls="imprests-md" aria-selected="false">Imprest Management</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="data-science-timesheet-tab-md" data-toggle="tab" href="#data-science-timesheet-md"
                role="tab" aria-controls="data-science-timesheet-md" aria-selected="false">Timesheet</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="download-forms-tab-md" data-toggle="tab" href="#download-forms-md" role="tab"
                aria-controls="download-forms-md" aria-selected="false">Download Forms </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" id="data-science-analytics-tab-md" data-toggle="tab" href="#data-science-analytics-md"
                role="tab" aria-controls="data-science-analytics-md" aria-selected="false"><strong>RI</strong> Analytics</a>
        </li>

    </ul>



    <div class="tab-content pt-5" id="selectDataViewTabContent">
        <!--
         =========================================
         =                                       =
         =      start of data dashboard           =
         ========================================= -->
        <!-- start of  data dashboard panel -->
        <div class="tab-pane fade show active" id="data-science-overview-md" role="tabpanel"
            aria-labelledby="data-science-overview-tab-md">


            <div class="row">
                <div class="col-lg-3">
                    <div class="card">
                        <div class="card-content table-responsive">
                            <h5 class="title">New Notifications</h5>
                            <br />
                            <ul class="list-group">
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <svg width="3em" height="2em" viewBox="0 0 16 16" class="bi bi-file-easel"
                                        fill="#0488ae" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M4 0h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2zm0 1a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H4z" />
                                        <path
                                            d="M8.5 5a.5.5 0 1 0-1 0h1zm1.527 5H8.973l.553 1.658a.5.5 0 1 0 .948-.316L10.027 10zM8.5 10h-1v1a.5.5 0 0 0 1 0v-1zm-1.473 0H5.973l-.447 1.342a.5.5 0 1 0 .948.316L7.027 10z" />
                                        <path fill-rule="evenodd"
                                            d="M4 6.5A1.5 1.5 0 0 1 5.5 5h5A1.5 1.5 0 0 1 12 6.5v2a1.5 1.5 0 0 1-1.5 1.5h-5A1.5 1.5 0 0 1 4 8.5v-2zM5.5 6a.5.5 0 0 0-.5.5v2a.5.5 0 0 0 .5.5h5a.5.5 0 0 0 .5-.5v-2a.5.5 0 0 0-.5-.5h-5z" />
                                    </svg>
                                    New Approved Request
                                    <span class="badge badge-danger badge-pill">14</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <svg width="3em" height="2em" viewBox="0 0 16 16" class="bi bi-file-easel"
                                        fill="#0488ae" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M4 0h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2zm0 1a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H4z" />
                                        <path
                                            d="M8.5 5a.5.5 0 1 0-1 0h1zm1.527 5H8.973l.553 1.658a.5.5 0 1 0 .948-.316L10.027 10zM8.5 10h-1v1a.5.5 0 0 0 1 0v-1zm-1.473 0H5.973l-.447 1.342a.5.5 0 1 0 .948.316L7.027 10z" />
                                        <path fill-rule="evenodd"
                                            d="M4 6.5A1.5 1.5 0 0 1 5.5 5h5A1.5 1.5 0 0 1 12 6.5v2a1.5 1.5 0 0 1-1.5 1.5h-5A1.5 1.5 0 0 1 4 8.5v-2zM5.5 6a.5.5 0 0 0-.5.5v2a.5.5 0 0 0 .5.5h5a.5.5 0 0 0 .5-.5v-2a.5.5 0 0 0-.5-.5h-5z" />
                                    </svg>
                                    New Staff Request
                                    <span class="badge badge-danger badge-pill">14</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <svg width="3em" height="2em" viewBox="0 0 16 16" class="bi bi-file-easel"
                                        fill="#0488ae" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M4 0h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2zm0 1a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H4z" />
                                        <path
                                            d="M8.5 5a.5.5 0 1 0-1 0h1zm1.527 5H8.973l.553 1.658a.5.5 0 1 0 .948-.316L10.027 10zM8.5 10h-1v1a.5.5 0 0 0 1 0v-1zm-1.473 0H5.973l-.447 1.342a.5.5 0 1 0 .948.316L7.027 10z" />
                                        <path fill-rule="evenodd"
                                            d="M4 6.5A1.5 1.5 0 0 1 5.5 5h5A1.5 1.5 0 0 1 12 6.5v2a1.5 1.5 0 0 1-1.5 1.5h-5A1.5 1.5 0 0 1 4 8.5v-2zM5.5 6a.5.5 0 0 0-.5.5v2a.5.5 0 0 0 .5.5h5a.5.5 0 0 0 .5-.5v-2a.5.5 0 0 0-.5-.5h-5z" />
                                    </svg>
                                    Pending Retirements
                                    <span class="badge badge-danger badge-pill">6</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <svg width="3em" height="2em" viewBox="0 0 16 16" class="bi bi-inbox" fill="#0488ae"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M4.98 4a.5.5 0 0 0-.39.188L1.54 8H6a.5.5 0 0 1 .5.5 1.5 1.5 0 1 0 3 0A.5.5 0 0 1 10 8h4.46l-3.05-3.812A.5.5 0 0 0 11.02 4H4.98zm9.954 5H10.45a2.5 2.5 0 0 1-4.9 0H1.066l.32 2.562a.5.5 0 0 0 .497.438h12.234a.5.5 0 0 0 .496-.438L14.933 9zM3.809 3.563A1.5 1.5 0 0 1 4.981 3h6.038a1.5 1.5 0 0 1 1.172.563l3.7 4.625a.5.5 0 0 1 .105.374l-.39 3.124A1.5 1.5 0 0 1 14.117 13H1.883a1.5 1.5 0 0 1-1.489-1.314l-.39-3.124a.5.5 0 0 1 .106-.374l3.7-4.625z" />
                                    </svg>
                                     Advance requests responses
                                    <span class="badge badge-danger badge-pill">2</span>
                                </li>

                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <svg width="3em" height="2em" viewBox="0 0 16 16" class="bi bi-file-easel"
                                        fill="#0488ae" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M4 0h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2zm0 1a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H4z" />
                                        <path
                                            d="M8.5 5a.5.5 0 1 0-1 0h1zm1.527 5H8.973l.553 1.658a.5.5 0 1 0 .948-.316L10.027 10zM8.5 10h-1v1a.5.5 0 0 0 1 0v-1zm-1.473 0H5.973l-.447 1.342a.5.5 0 1 0 .948.316L7.027 10z" />
                                        <path fill-rule="evenodd"
                                            d="M4 6.5A1.5 1.5 0 0 1 5.5 5h5A1.5 1.5 0 0 1 12 6.5v2a1.5 1.5 0 0 1-1.5 1.5h-5A1.5 1.5 0 0 1 4 8.5v-2zM5.5 6a.5.5 0 0 0-.5.5v2a.5.5 0 0 0 .5.5h5a.5.5 0 0 0 .5-.5v-2a.5.5 0 0 0-.5-.5h-5z" />
                                    </svg>
                                    Monthly Staff Timesheet
                                    <span class="badge badge-danger badge-pill">2</span>
                                </li>
                            </ul>
                            <br />
                            <br />
                            <button type="button" class="btn btn-outline-primary">create advance request</button>

                        </div>

                    </div>
                </div>
                <div class="col-lg-6">

                    <div class="card">
                        <div class="card-content table-responsive">

                            <div class="row">
                                <div class="col-md-3">
                                    <svg width="6em" height="6em" viewBox="0 0 16 16" class="bi bi-file-earmark-check"
                                        fill="#0488ae" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M4 0h5.5v1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4.5h1V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2z" />
                                        <path d="M9.5 3V0L14 4.5h-3A1.5 1.5 0 0 1 9.5 3z" />
                                        <path fill-rule="evenodd"
                                            d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0z" />
                                    </svg>
                                    <br />
                                    <br />
                                    Reports generated
                                </div>

                                <div class="col-md-3">
                                    <svg width="6em" height="6em" viewBox="0 0 16 16" class="bi bi-arrow-left-right"
                                        fill="#ACE4AA" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M1 11.5a.5.5 0 0 0 .5.5h11.793l-3.147 3.146a.5.5 0 0 0 .708.708l4-4a.5.5 0 0 0 0-.708l-4-4a.5.5 0 0 0-.708.708L13.293 11H1.5a.5.5 0 0 0-.5.5zm14-7a.5.5 0 0 1-.5.5H2.707l3.147 3.146a.5.5 0 1 1-.708.708l-4-4a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 4H14.5a.5.5 0 0 1 .5.5z" />
                                    </svg>
                                    <br />
                                    <br />
                                    Payment Requests Completed


                                </div>
                                <div class="col-md-3">
                                    <svg width="6em" height="6em" viewBox="0 0 16 16" class="bi bi-file-earmark-person"
                                        fill="#795548" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M4 0h5.5v1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4.5h1V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2z" />
                                        <path d="M9.5 3V0L14 4.5h-3A1.5 1.5 0 0 1 9.5 3z" />
                                        <path fill-rule="evenodd" d="M8 11a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                                        <path
                                            d="M8 12c4 0 5 1.755 5 1.755V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1v-.245S4 12 8 12z" />
                                    </svg>
                                    <br />
                                    <br />
                                    Total Number of Scholars
                                </div>
                                <div class="col-md-3">
                                    <svg width="6em" height="6em" viewBox="0 0 16 16" class="bi bi-person-check-fill"
                                        fill="#795548" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm9.854-2.854a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L12.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z" />
                                    </svg>
                                    <br />
                                    <br />
                                    Total Number of Grantees
                                </div>
                            </div>
                            <br />
                            <br />
                            <div class="row">
                                <div class="col-md-3">
                                    <svg width="6em" height="6em" viewBox="0 0 16 16" class="bi bi-clipboard-x"
                                        fill="#f44336" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z" />
                                        <path fill-rule="evenodd"
                                            d="M9.5 1h-3a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3zm-.354 7.146a.5.5 0 0 1 .708 0L8 8.293l1.146-1.147a.5.5 0 1 1 .708.708L8.707 9l1.147 1.146a.5.5 0 0 1-.708.708L8 9.707l-1.146 1.147a.5.5 0 0 1-.708-.708L7.293 9 6.146 7.854a.5.5 0 0 1 0-.708z" />
                                    </svg>
                                    <br />
                                    <br />
                                    Reports Past Due
                                </div>

                                <div class="col-md-3">
                                    <svg width="6em" height="6em" viewBox="0 0 16 16" class="bi bi-journal-x"
                                        fill="#f44336" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z" />
                                        <path
                                            d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z" />
                                        <path fill-rule="evenodd"
                                            d="M6.146 6.146a.5.5 0 0 1 .708 0L8 7.293l1.146-1.147a.5.5 0 1 1 .708.708L8.707 8l1.147 1.146a.5.5 0 0 1-.708.708L8 8.707 6.854 9.854a.5.5 0 0 1-.708-.708L7.293 8 6.146 6.854a.5.5 0 0 1 0-.708z" />
                                    </svg>
                                    <br />
                                    <br />
                                    Request Disapproved


                                </div>
                                <div class="col-md-3">
                                    <svg width="6em" height="6em" viewBox="0 0 16 16" class="bi bi-award-fill"
                                        fill="#fbc02d" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M8 0l1.669.864 1.858.282.842 1.68 1.337 1.32L13.4 6l.306 1.854-1.337 1.32-.842 1.68-1.858.282L8 12l-1.669-.864-1.858-.282-.842-1.68-1.337-1.32L2.6 6l-.306-1.854 1.337-1.32.842-1.68L6.331.864 8 0z" />
                                        <path
                                            d="M4 11.794V16l4-1 4 1v-4.206l-2.018.306L8 13.126 6.018 12.1 4 11.794z" />
                                    </svg>
                                    <br />
                                    <br />
                                    Total Grantees Funding
                                </div>
                                <div class="col-md-3">
                                    <svg width="6em" height="6em" viewBox="0 0 16 16" class="bi bi-bag-fill"
                                        fill="#cddc39" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M8 1a2.5 2.5 0 0 0-2.5 2.5V4h5v-.5A2.5 2.5 0 0 0 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5z" />
                                    </svg>
                                    <br />
                                    <br />
                                    Total Scholar Expenses Recorded
                                </div>
                            </div>


                            {{-- end of second row --}}

                        </div>
                    </div>
                </div>
                <!-- end of first column -->
                <!-- end of first column -->
                <div class="col-lg-3">
                    <div class="card">
                        <div class="card-content table-responsive">
                            <h5 class="title">Enter what you will be doing today.</h5>
                            <form>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Title</label>
                                    <input class="form-control" type="text" placeholder="title"> </div>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">short description</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                </div>
                                <button type="button" class="btn btn-outline-info">add task</button>

                            </form>
                            <br />
                            <button type="button" class="btn btn-outline-success">preview my timesheet</button>

                        </div>
                    </div>

                </div>
            </div>

            <h4>Bank Accounts</h4>
            <p>Total Accounts <strong>5</strong></p>
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-content table-responsive">
                            <h6>Account 1: XXX XXXX XXX 234</h6>
                            <p>Bank : CRDB</p>
                            <p>Currecy type: TZS</p>
                            <p>Total Transactions : 15</p>
                            <p>Total Expenditures on Account : 26,500,000</p>
                            <p>Balance : 12,000,000</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-content table-responsive">
                            <h6>Account 2: XXX XXXX XXX 234</h6>
                            <p>Bank : CRDB</p>
                            <p>Currecy type: TZS</p>
                            <p>Total Transactions : 15</p>
                            <p>Total Expenditures on Account : 26,500,000</p>
                            <p>Balance : 12,000,000</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-content table-responsive">
                            <h6>Account 3: XXX XXXX XXX 234</h6>
                            <p>Bank : CRDB</p>
                            <p>Currecy type: TZS</p>
                            <p>Total Transactions : 15</p>
                            <p>Total Expenditures on Account : 26,500,000</p>
                            <p>Balance : 12,000,000</p>
                        </div>
                    </div>
                </div>
            </div>


            <h4>Finance Information</h4>

            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-content table-responsive">
                            <h4>Bank Accounts, Expenditures & Balances</h4>
                            <p>Balance in Acc <strong>3,000,000</strong></p>
                            <p>Cash Book balance<strong>3,100,000</strong></p>


                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-content table-responsive">
                            <h4>Bank accounts</h4>
                            <p>Total Journal Entries <strong>1</strong></p>
                            <p>Total Debit <strong>120000</strong></p>
                            <p>Total Credit <strong>120000</strong></p>


                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-content table-responsive">
                            <h4>Pillars and Projects</h4>
                            <p>this month Count <strong>20</strong></p>
                            <p>Total Amount Issued <strong>3,000,000</strong></p>
                            <p>Total Amount Issued <strong>3,000,000</strong></p>

                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-content table-responsive">
                            <h4>Bank accounts</h4>
                            <p>Total Journal Entries <strong>1</strong></p>
                            <p>Total Debit <strong>120000</strong></p>
                            <p>Total Credit <strong>120000</strong></p>


                        </div>
                    </div>
                </div>
            </div>
            <h4>Administrative Information</h4>
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-content table-responsive">
                            <h4>Bank Reconciliations</h4>
                            <p>this month Count <strong>1</strong></p>
                            <p>Total Amount Issued <strong>3,000,000</strong></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-content table-responsive">
                            <h4>Comparison</h4>
                            <p>this month = <strong>1</strong></p>
                            <p>Total Amount Issued <strong>3,000,000</strong></p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card">
                        <div class="card-content table-responsive">
                            <h4>Next Upcoming update</h4>
                            <p>this month = <strong>1</strong></p>
                            <p>Total Amount Issued <strong>3,000,000</strong></p>
                        </div>
                    </div>
                </div>
            </div>

            <h4>Pillars, Projects and Organisation Activities</h4>
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-content table-responsive">
                            <h4>Pett Cash Reconciliations</h4>
                            <p>PCR Status this month: <strong>Available</strong></p>
                            <p>this month Count <strong>1</strong></p>
                            <p>Openning Balance at <strong>7,000,000</strong></p>
                            <p>Total Amount Issued <strong>3,000,000</strong></p>
                            <p>BPR <strong>3,000,000</strong></p>
                            <p>BPQB Account System: <strong>3,000,000</strong></p>
                            <p>Difference: <strong>3,000,000</strong></p>
                            <p>Unreconciled <strong>3,000,000</strong></p>

                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-content table-responsive">
                            <h4>Comparison</h4>
                            <p>PCR Status this month: <strong>Available</strong></p>
                            <p>this month Count <strong>1</strong></p>
                            <p>Openning Balance at <strong>7,000,000</strong></p>
                            <p>Total Amount Issued <strong>3,000,000</strong></p>
                            <p>BPR <strong>3,000,000</strong></p>
                            <p>BPQB Account System: <strong>3,000,000</strong></p>
                            <p>Difference: <strong>3,000,000</strong></p>
                            <p>Unreconciled <strong>3,000,000</strong></p>

                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card">
                        <div class="card-content table-responsive">
                            <h4>Next Upcoming update</h4>
                            <p>last created at: <strong>10 Nov 2020</strong></p>
                            <p>Opening Balance <strong>3,000,000</strong></p>
                            <p>Expenses <strong>3,000,000</strong></p>

                        </div>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-md-4">
                    <h4>Payment Vouchers</h4>

                    <div class="card">
                        <div class="card-content table-responsive">
                            <h4>Total vouchers</h4>
                            <p>PCR Status this month: <strong>Available</strong></p>
                            <p>this month Count <strong>1</strong></p>
                            <p>Openning Balance at <strong>7,000,000</strong></p>
                            <p>Total Amount Issued <strong>3,000,000</strong></p>
                            <p>BPR <strong>3,000,000</strong></p>
                            <p>BPQB Account System: <strong>3,000,000</strong></p>
                            <p>Difference: <strong>3,000,000</strong></p>
                            <p>Unreconciled <strong>3,000,000</strong></p>

                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <h4>Journal Vouchers</h4>

                    <div class="card">
                        <div class="card-content table-responsive">
                            <h4>Comparison</h4>
                            <p>PCR Status this month: <strong>Available</strong></p>
                            <p>this month Count <strong>1</strong></p>
                            <p>Openning Balance at <strong>7,000,000</strong></p>
                            <p>Total Amount Issued <strong>3,000,000</strong></p>
                            <p>BPR <strong>3,000,000</strong></p>
                            <p>BPQB Account System: <strong>3,000,000</strong></p>
                            <p>Difference: <strong>3,000,000</strong></p>
                            <p>Unreconciled <strong>3,000,000</strong></p>

                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <h4>Deposit Vouchers</h4>

                    <div class="card">
                        <div class="card-content table-responsive">
                            <h4>Next Upcoming update</h4>
                            <p>last created at: <strong>10 Nov 2020</strong></p>
                            <p>Opening Balance <strong>3,000,000</strong></p>
                            <p>Expenses <strong>3,000,000</strong></p>

                        </div>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-content table-responsive">
                            <h4>Pett Cash Reconciliations</h4>
                            <p>this month Count <strong>20</strong></p>
                            <p>Total Amount Issued <strong>3,000,000</strong></p>
                            <p>Total Amount Issued <strong>3,000,000</strong></p>

                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-content table-responsive">
                            <h4>Pay Slips</h4>
                            <p>Total Journal Entries <strong>1</strong></p>
                            <p>Total Debit <strong>120000</strong></p>
                            <p>Total Credit <strong>120000</strong></p>


                        </div>
                    </div>
                </div>
            </div>
            <div class="row">

                <div class="col-3">
                    <div class="card">
                        <div class="card-content table-responsive">
                            <h4>Petty Cash Reconciliation</h4>
                            <p>this month = <strong>150</strong></p>
                            <p>Items in collection <strong>1200</strong></p>
                            <p>Total Amount Issued <strong>6,000,000</strong></p>

                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card">
                        <div class="card-content table-responsive">
                            <h4>Payment Requicitions</h4>
                            <p>this month = <strong>150</strong></p>
                            <p>Total Amount Issued <strong>13,000,000</strong></p>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card">
                        <div class="card-content table-responsive">
                            <h4>Journal Entries</h4>
                            <p>this month = <strong>150</strong></p>
                            <p>Total Amount Issued <strong>13,000,000</strong></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">

                <div class="col-3">
                    <div class="card">
                        <div class="card-content table-responsive">
                            <h4>Training Request</h4>
                            <p>this month = <strong>150</strong></p>
                            <p>Total Amount Issued <strong>13,000,000</strong></p>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card">
                        <div class="card-content table-responsive">
                            <h4>Travel Advance Request</h4>
                            <p>this month = <strong>150</strong></p>
                            <p>Total Amount Issued <strong>13,000,000</strong></p>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card">
                        <div class="card-content table-responsive">
                            <h4>Allowance Request</h4>
                            <p>this month = <strong>150</strong></p>
                            <p>Total Amount Issued <strong>13,000,000</strong></p>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card">
                        <div class="card-content table-responsive">
                            <h4>Per Diem Claims</h4>
                            <p>this month = <strong>150</strong></p>
                            <p>Total Amount Issued <strong>13,000,000</strong></p>
                        </div>
                    </div>
                </div>
            </div>



            {{-- overview: from executive directors desk --}}

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-content table-responsive">
                            <br />
                            <h5 class="title">Recent Advance requests from <strong>Staff</strong> and <strong>Executive
                                    Director</strong></h5>
                            <br />
                            <br />

                            <div class="row">
                                <div class="col-md-12">
                                    <nav>
                                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                            <a class="nav-item nav-link active" id="nav-rfexec-tab" data-toggle="tab"
                                                href="#nav-rfexec" role="tab" aria-controls="nav-rfexec"
                                                aria-selected="true">
                                                Request from Executive director
                                                <span class="badge badge-danger badge-pill">3</span>
                                            </a>
                                            <a class="nav-item nav-link" id="nav-rfstaff-tab" data-toggle="tab"
                                                href="#nav-rfstaff" role="tab" aria-controls="nav-rfstaff"
                                                aria-selected="false">
                                                Request from Staff
                                                <span class="badge badge-danger badge-pill">4</span>
                                            </a>
                                            <a class="nav-item nav-link" id="nav-allreq-tab" data-toggle="tab"
                                                href="#nav-allreq" role="tab" aria-controls="nav-allreq"
                                                aria-selected="false">
                                                All Request
                                                <span class="badge badge-danger badge-pill">7</span>
                                            </a>
                                        </div>
                                    </nav>

                                    <div class="tab-content" id="nav-tabContent">
                                        <div class="tab-pane fade show active" id="nav-rfexec" role="tabpanel"
                                            aria-labelledby="nav-rfexec-tab">
                                            <br />
                                            <p>All Request Reponses from the <strong>Executive Director</strong></p>

                                            <table class="table table-bordered table-hover">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">#</th>
                                                        <th scope="col">Title</th>
                                                        <th scope="col">Requested by</th>
                                                        <th scope="col">Request Type</th>
                                                        <th scope="col">Project Name</th>
                                                        <th scope="col"># Activities</th>
                                                        <th scope="col">Total Requested</th>
                                                        <th scope="col">Depature date</th>
                                                        <th scope="col">Return Date</th>
                                                        <th scope="col">Request stage</th>
                                                        <th scope="col">Date Created</th>
                                                        <th scope="col"></th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th scope="row">1</th>
                                                        <td>Mark</td>
                                                        <td>Otto</td>
                                                        <td>Mark</td>
                                                        <td>Otto</td>
                                                        <td>Mark</td>
                                                        <td>Otto</td>
                                                        <td>Otto</td>
                                                        <td>Otto</td>
                                                        <td>@mdo</td>
                                                        <td>@mdo</td>
                                                        <td>
                                                            <button type="button" class="btn btn-outline-success">view
                                                                request</button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">2</th>
                                                        <td>Jacob</td>
                                                        <td>Thornton</td>
                                                        <td>Jacob</td>
                                                        <td>Thornton</td>
                                                        <td>Jacob</td>
                                                        <td>Otto</td>
                                                        <td>Thornton</td>
                                                        <td>Otto</td>
                                                        <td>@fat</td>
                                                        <td>@mdo</td>
                                                        <td>
                                                            <button type="button" class="btn btn-outline-success">view
                                                                request</button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">3</th>
                                                        <td>Larry</td>
                                                        <td> the Bird</td>
                                                        <td>Jacob</td>
                                                        <td>Thornton</td>
                                                        <td>Jacob</td>
                                                        <td>Thornton</td>
                                                        <td>Otto</td>
                                                        <td>Otto</td>
                                                        <td>@twitter</td>
                                                        <td>@mdo</td>
                                                        <td>
                                                            <button type="button" class="btn btn-outline-success">view
                                                                request</button>
                                                        </td>

                                                    </tr>
                                                </tbody>
                                            </table>
                                            <br />
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
                                        {{-- end of req from executive --}}
                                        <div class="tab-pane fade" id="nav-rfstaff" role="tabpanel"
                                            aria-labelledby="nav-rfstaff-tab">
                                            <br />
                                            <p>All requests from <strong>Staff</strong></p>
                                            <table class="table table-bordered table-hover">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">#</th>
                                                        <th scope="col">Title</th>
                                                        <th scope="col">Requested by</th>
                                                        <th scope="col">Request Type</th>
                                                        <th scope="col">Project Name</th>
                                                        <th scope="col"># Activities</th>
                                                        <th scope="col">Total Requested</th>
                                                        <th scope="col">Depature date</th>
                                                        <th scope="col">Return Date</th>
                                                        <th scope="col">Request stage</th>
                                                        <th scope="col">Date Created</th>
                                                        <th scope="col"></th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th scope="row">1</th>
                                                        <td>Mark</td>
                                                        <td>Otto</td>
                                                        <td>Mark</td>
                                                        <td>Otto</td>
                                                        <td>Mark</td>
                                                        <td>Otto</td>
                                                        <td>Otto</td>
                                                        <td>Otto</td>
                                                        <td>@mdo</td>
                                                        <td>@mdo</td>
                                                        <td>
                                                            <button type="button" class="btn btn-outline-success">view
                                                                request</button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">2</th>
                                                        <td>Jacob</td>
                                                        <td>Thornton</td>
                                                        <td>Jacob</td>
                                                        <td>Thornton</td>
                                                        <td>Jacob</td>
                                                        <td>Otto</td>
                                                        <td>Thornton</td>
                                                        <td>Otto</td>
                                                        <td>@fat</td>
                                                        <td>@mdo</td>
                                                        <td>
                                                            <button type="button" class="btn btn-outline-success">view
                                                                request</button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">3</th>
                                                        <td>Larry</td>
                                                        <td> the Bird</td>
                                                        <td>Jacob</td>
                                                        <td>Thornton</td>
                                                        <td>Jacob</td>
                                                        <td>Thornton</td>
                                                        <td>Otto</td>
                                                        <td>Otto</td>
                                                        <td>@twitter</td>
                                                        <td>@mdo</td>
                                                        <td>
                                                            <button type="button" class="btn btn-outline-success">view
                                                                request</button>
                                                        </td>

                                                    </tr>
                                                </tbody>
                                            </table>
                                            <br />
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
                                        <div class="tab-pane fade" id="nav-allreq" role="tabpanel"
                                            aria-labelledby="nav-allreq-tab">
                                            <br />
                                            <p>All request</p>
                                            <table class="table table-bordered table-hover">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">#</th>
                                                        <th scope="col">Title</th>
                                                        <th scope="col">Requested by</th>
                                                        <th scope="col">Request Type</th>
                                                        <th scope="col">Project Name</th>
                                                        <th scope="col"># Activities</th>
                                                        <th scope="col">Total Requested</th>
                                                        <th scope="col">Depature date</th>
                                                        <th scope="col">Return Date</th>
                                                        <th scope="col">Request stage</th>
                                                        <th scope="col">Date Created</th>
                                                        <th scope="col"></th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th scope="row">1</th>
                                                        <td>Mark</td>
                                                        <td>Otto</td>
                                                        <td>Mark</td>
                                                        <td>Otto</td>
                                                        <td>Mark</td>
                                                        <td>Otto</td>
                                                        <td>Otto</td>
                                                        <td>Otto</td>
                                                        <td>@mdo</td>
                                                        <td>@mdo</td>
                                                        <td>
                                                            <button type="button" class="btn btn-outline-success">view
                                                                request</button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">2</th>
                                                        <td>Jacob</td>
                                                        <td>Thornton</td>
                                                        <td>Jacob</td>
                                                        <td>Thornton</td>
                                                        <td>Jacob</td>
                                                        <td>Otto</td>
                                                        <td>Thornton</td>
                                                        <td>Otto</td>
                                                        <td>@fat</td>
                                                        <td>@mdo</td>
                                                        <td>
                                                            <button type="button" class="btn btn-outline-success">view
                                                                request</button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">3</th>
                                                        <td>Larry</td>
                                                        <td> the Bird</td>
                                                        <td>Jacob</td>
                                                        <td>Thornton</td>
                                                        <td>Jacob</td>
                                                        <td>Thornton</td>
                                                        <td>Otto</td>
                                                        <td>Otto</td>
                                                        <td>@twitter</td>
                                                        <td>@mdo</td>
                                                        <td>
                                                            <button type="button" class="btn btn-outline-success">view
                                                                request</button>
                                                        </td>

                                                    </tr>
                                                </tbody>
                                            </table>
                                            <br />
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

                                <!-- end of row -->
                            </div>
                        </div>
                    </div>
                    <!-- end of first column -->
                    <!-- end of first column -->
                </div>
            </div>
            {{--end overview: from executive directors desk --}}


            {{-- overview: from staffs desk --}}

            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-content table-responsive">
                            <br />
                            <h5 class="title">Reports <strong>Overview</strong></h5>
                            <br />
                            <p>There are 12 total reports with <strong><span
                                        class="badge badge-danger badge-pill">2</span>
                                    pending reports</strong></p>


                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Title</th>
                                        <th scope="col">Report Type</th>
                                        <th scope="col">Last Submitted</th>
                                        <th scope="col">Next Submission</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Date Created</th>
                                        <th scope="col"></th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                        <td>@mdo</td>
                                        <td>
                                            <button type="button" class="btn btn-outline-success">view details</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>Thornton</td>
                                        <td>Otto</td>
                                        <td>@fat</td>
                                        <td>@mdo</td>
                                        <td>
                                            <button type="button" class="btn btn-outline-success">view details</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Larry</td>
                                        <td> the Bird</td>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>@twitter</td>
                                        <td>@mdo</td>
                                        <td>
                                            <button type="button" class="btn btn-outline-success">view details</button>
                                        </td>

                                    </tr>
                                    <tr>
                                        <th scope="row">4</th>
                                        <td>Larry</td>
                                        <td> the Bird</td>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>@twitter</td>
                                        <td>@mdo</td>
                                        <td>
                                            <button type="button" class="btn btn-outline-success">view details</button>
                                        </td>

                                    </tr>
                                    <tr>
                                        <th scope="row">5</th>
                                        <td>Larry</td>
                                        <td> the Bird</td>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>@twitter</td>
                                        <td>@mdo</td>
                                        <td>
                                            <button type="button" class="btn btn-outline-success">view details</button>
                                        </td>

                                    </tr>
                                    <tr>
                                        <th scope="row">6</th>
                                        <td>Larry</td>
                                        <td> the Bird</td>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>@twitter</td>
                                        <td>@mdo</td>
                                        <td>
                                            <button type="button" class="btn btn-outline-success">view details</button>
                                        </td>

                                    </tr>
                                    <tr>
                                        <th scope="row">7</th>
                                        <td>Larry</td>
                                        <td> the Bird</td>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>@twitter</td>
                                        <td>@mdo</td>
                                        <td>
                                            <button type="button" class="btn btn-outline-success">view details</button>
                                        </td>

                                    </tr>
                                </tbody>
                            </table>
                            <br />
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
                    <!-- end of first column -->
                    <!-- end of first column -->
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-content table-responsive">
                            <br />
                            <h5 class="title">Reports submission <strong>Status</strong></h5>
                            <br />
                            <p>There are <strong>12</strong> total reports with <strong><span
                                        class="badge badge-danger badge-pill">2</span> pending reports</strong></p>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-check2-all"
                                        fill="#ACE4AA" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M12.354 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z" />
                                        <path
                                            d="M6.25 8.043l-.896-.897a.5.5 0 1 0-.708.708l.897.896.707-.707zm1 2.414l.896.897a.5.5 0 0 0 .708 0l7-7a.5.5 0 0 0-.708-.708L8.5 10.293l-.543-.543-.707.707z" />
                                    </svg>
                                    Bank Reconcilliation
                                </li>
                                <li class="list-group-item">
                                    <svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-check2-all"
                                        fill="#ACE4AA" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M12.354 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z" />
                                        <path
                                            d="M6.25 8.043l-.896-.897a.5.5 0 1 0-.708.708l.897.896.707-.707zm1 2.414l.896.897a.5.5 0 0 0 .708 0l7-7a.5.5 0 0 0-.708-.708L8.5 10.293l-.543-.543-.707.707z" />
                                    </svg>
                                    Petty Cash Reconcilliation</li>
                                <li class="list-group-item">
                                    <svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-x-circle"
                                        fill="#f44336" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                        <path fill-rule="evenodd"
                                            d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                                    </svg>
                                    Financial Report</li>
                                <li class="list-group-item">
                                    <svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-check2-all"
                                        fill="#ACE4AA" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M12.354 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z" />
                                        <path
                                            d="M6.25 8.043l-.896-.897a.5.5 0 1 0-.708.708l.897.896.707-.707zm1 2.414l.896.897a.5.5 0 0 0 .708 0l7-7a.5.5 0 0 0-.708-.708L8.5 10.293l-.543-.543-.707.707z" />
                                    </svg>
                                    SP-NSSF</li>
                                <li class="list-group-item">
                                    <svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-check2-all"
                                        fill="#ACE4AA" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M12.354 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z" />
                                        <path
                                            d="M6.25 8.043l-.896-.897a.5.5 0 1 0-.708.708l.897.896.707-.707zm1 2.414l.896.897a.5.5 0 0 0 .708 0l7-7a.5.5 0 0 0-.708-.708L8.5 10.293l-.543-.543-.707.707z" />
                                    </svg>
                                    SP-SDL</li>
                                <li class="list-group-item">
                                    <svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-x-circle"
                                        fill="#f44336" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                        <path fill-rule="evenodd"
                                            d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                                    </svg>
                                    SP-Payee</li>
                                <li class="list-group-item">
                                    <svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-check2-all"
                                        fill="#ACE4AA" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M12.354 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z" />
                                        <path
                                            d="M6.25 8.043l-.896-.897a.5.5 0 1 0-.708.708l.897.896.707-.707zm1 2.414l.896.897a.5.5 0 0 0 .708 0l7-7a.5.5 0 0 0-.708-.708L8.5 10.293l-.543-.543-.707.707z" />
                                    </svg>
                                    SP-Withholding Task</li>
                                <li class="list-group-item">
                                    <svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-check2-all"
                                        fill="#ACE4AA" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M12.354 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z" />
                                        <path
                                            d="M6.25 8.043l-.896-.897a.5.5 0 1 0-.708.708l.897.896.707-.707zm1 2.414l.896.897a.5.5 0 0 0 .708 0l7-7a.5.5 0 0 0-.708-.708L8.5 10.293l-.543-.543-.707.707z" />
                                    </svg>
                                    SP-WCF</li>
                            </ul>
                            <br />
                        </div>
                    </div>
                    <!-- end of first column -->
                    <!-- end of first column -->
                </div>
            </div>
            {{--end overview: from staff desk --}}



            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-content table-responsive">
                            <br />
                            <h5 class="title">Staff pay-roll task collections for <strong>Staff TimeSheet</strong></h5>
                            <p>There are 18 total <strong>Staff</strong> with <strong><span
                                        class="badge badge-danger badge-pill">6</span> pending timesheet
                                    un-completed</strong></p>
                            <br />
                            <br />
                            <nav>
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <a class="nav-item nav-link active" id="nav-task-collection-tab" data-toggle="tab"
                                        href="#nav-task-collection" role="tab" aria-controls="nav-task-collection"
                                        aria-selected="true">Task Collection</a>
                                    <a class="nav-item nav-link" id="nav-timesheet-tab" data-toggle="tab"
                                        href="#nav-timesheet" role="tab" aria-controls="nav-profile"
                                        aria-selected="false">Time-Sheet</a>
                                    <a class="nav-item nav-link" id="nav-payroll-tab" data-toggle="tab"
                                        href="#nav-payroll" role="tab" aria-controls="nav-payroll"
                                        aria-selected="false">Payroll</a>
                                </div>
                            </nav>
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="nav-task-collection" role="tabpanel"
                                    aria-labelledby="nav--task-collection-tab">
                                    <br />
                                    <br />
                                    <p>Today Staff approved Tasks</p>

                                    <table class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Task by</th>
                                                <th scope="col">Task Title</th>
                                                <th scope="col">Approved Tasks</th>
                                                <th scope="col"># Activities</th>
                                                <th scope="col">Reviewed by</th>
                                                <th scope="col">Approve by</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Date Created</th>
                                                <th scope="col"></th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Mark</td>
                                                <td>Otto</td>
                                                <td>Mark</td>
                                                <td>Otto</td>
                                                <td>Mark</td>
                                                <td>Otto</td>
                                                <td>Otto</td>
                                                <td>Otto</td>
                                                <td>
                                                    <button type="button" class="btn btn-outline-success">view
                                                        request</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">2</th>
                                                <td>Jacob</td>
                                                <td>Thornton</td>
                                                <td>Jacob</td>
                                                <td>Thornton</td>
                                                <td>Jacob</td>
                                                <td>Otto</td>
                                                <td>Thornton</td>
                                                <td>Otto</td>
                                                <td>
                                                    <button type="button" class="btn btn-outline-success">view
                                                        request</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">3</th>
                                                <td>Larry</td>
                                                <td> the Bird</td>
                                                <td>Jacob</td>
                                                <td>Thornton</td>
                                                <td>Jacob</td>
                                                <td>Thornton</td>
                                                <td>Otto</td>
                                                <td>Otto</td>
                                                <td>
                                                    <button type="button" class="btn btn-outline-success">view
                                                        request</button>
                                                </td>

                                            </tr>
                                        </tbody>
                                    </table>
                                    <br />
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
                                <div class="tab-pane fade" id="nav-timesheet" role="tabpanel"
                                    aria-labelledby="nav-timesheet-tab">
                                    <br />
                                    <br />
                                    <p>Collection of Staff makes a monthly TimeSheet</p>
                                    <table class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Task by</th>
                                                <th scope="col">Task Title</th>
                                                <th scope="col">Approved Tasks</th>
                                                <th scope="col"># Activities</th>
                                                <th scope="col">Reviewed by</th>
                                                <th scope="col">Approve by</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Date Created</th>
                                                <th scope="col"></th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Mark</td>
                                                <td>Otto</td>
                                                <td>Mark</td>
                                                <td>Otto</td>
                                                <td>Mark</td>
                                                <td>Otto</td>
                                                <td>Otto</td>
                                                <td>Otto</td>
                                                <td>
                                                    <button type="button" class="btn btn-outline-success">view
                                                        request</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">2</th>
                                                <td>Jacob</td>
                                                <td>Thornton</td>
                                                <td>Jacob</td>
                                                <td>Thornton</td>
                                                <td>Jacob</td>
                                                <td>Otto</td>
                                                <td>Thornton</td>
                                                <td>Otto</td>
                                                <td>
                                                    <button type="button" class="btn btn-outline-success">view
                                                        request</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">3</th>
                                                <td>Larry</td>
                                                <td> the Bird</td>
                                                <td>Jacob</td>
                                                <td>Thornton</td>
                                                <td>Jacob</td>
                                                <td>Thornton</td>
                                                <td>Otto</td>
                                                <td>Otto</td>
                                                <td>
                                                    <button type="button" class="btn btn-outline-success">view
                                                        request</button>
                                                </td>

                                            </tr>
                                        </tbody>
                                    </table>
                                    <br />
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
                                <div class="tab-pane fade" id="nav-payroll" role="tabpanel"
                                    aria-labelledby="nav-payroll-tab">
                                    <br />
                                    <br />
                                    <table class="table table-bordered table-hover">
                                        <p> collection of tasks for staff pay-roll</p>
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Task by</th>
                                                <th scope="col">Task Title</th>
                                                <th scope="col">Approved Tasks</th>
                                                <th scope="col"># Activities</th>
                                                <th scope="col">Reviewed by</th>
                                                <th scope="col">Approve by</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Date Created</th>
                                                <th scope="col"></th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Mark</td>
                                                <td>Otto</td>
                                                <td>Mark</td>
                                                <td>Otto</td>
                                                <td>Mark</td>
                                                <td>Otto</td>
                                                <td>Otto</td>
                                                <td>Otto</td>
                                                <td>
                                                    <button type="button" class="btn btn-outline-success">view
                                                        request</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">2</th>
                                                <td>Jacob</td>
                                                <td>Thornton</td>
                                                <td>Jacob</td>
                                                <td>Thornton</td>
                                                <td>Jacob</td>
                                                <td>Otto</td>
                                                <td>Thornton</td>
                                                <td>Otto</td>
                                                <td>
                                                    <button type="button" class="btn btn-outline-success">view
                                                        request</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">3</th>
                                                <td>Larry</td>
                                                <td> the Bird</td>
                                                <td>Jacob</td>
                                                <td>Thornton</td>
                                                <td>Jacob</td>
                                                <td>Thornton</td>
                                                <td>Otto</td>
                                                <td>Otto</td>
                                                <td>
                                                    <button type="button" class="btn btn-outline-success">view
                                                        request</button>
                                                </td>

                                            </tr>
                                        </tbody>
                                    </table>
                                    <br />
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
            </div>
        </div>


        <!-- end of imprest-retirements data panel -->

        <!-- =========================================
               =                                       =
               =             start of imprest-retirements data =
               ========================================= -->

        <div class="tab-pane fade" id="data-science-request-md" role="tabpanel"
            aria-labelledby="data-science-request-tab-md">
            <!-- line chart -->
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#exampleModalCenter">
                create a new request
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Select Type of Request</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            {{-- <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <a href="#" class="btn btn-lg  btn-outline-info" role="button"
                                        aria-pressed="true">Training Adavance Request</a>
                                </li>
                                <li class="list-group-item">
                                    <a href="#" class="btn btn-lg  btn-outline-info" role="button"
                                        aria-pressed="true">Travel Adavance Request</a>
                                </li>
                                <li class="list-group-item">
                                    <a href="#" class="btn btn-lg  btn-outline-info" role="button"
                                        aria-pressed="true">Allowance Request</a>
                                </li>
                                <li class="list-group-item">
                                    <a href="#" class="btn btn-lg  btn-outline-info" role="button"
                                        aria-pressed="true">Per Diem claim</a>
                                </li>
                                <li class="list-group-item">
                                    <a href="#" class="btn btn-lg  btn-outline-info" role="button"
                                        aria-pressed="true">Petty Cash</a>
                                </li>
                                <li class="list-group-item">
                                    <a href="#" class="btn btn-lg  btn-outline-info" role="button"
                                        aria-pressed="true">Payment Requisition</a>
                                </li>
                                <li class="list-group-item">
                                    <a href="#" class="btn btn-lg  btn-outline-info" role="button"
                                        aria-pressed="true">Training Adavance Request</a>
                                </li>

                                <li class="list-group-item">
                                    <a href="#" class="btn btn-lg  btn-outline-info" role="button"
                                        aria-pressed="true">Workshop Registration Form</a>
                                </li>

                            </ul> --}}
                            <ul class="list-group-flush">
                                <li class="list-group-item">
                                    <a href="{{ route('create-new-training-advance-request') }}"
                                        class="list-group-item list-group-item-action">
                                        Training Advance Request
                                    </a>
                                </li>
                                <li class="list-group-item">
                                    <a href="{{ route('create-new-travel-advance-request') }}"
                                        class="list-group-item list-group-item-action">
                                        Travel Advance Request
                                    </a>
                                </li>
                                <li class="list-group-item">
                                    <a href="{{ route('create-allowance-request') }}"
                                        class="list-group-item list-group-item-action">
                                        Allowance Request
                                    </a>
                                </li>
                                <li class="list-group-item">
                                    <a href="{{ route('create-new-per-diem-claim') }}"
                                        class="list-group-item list-group-item-action">
                                        Per Diem claim
                                    </a>
                                </li>
                                <li class="list-group-item">
                                    <a href="{{ route('create-new-petty-cash') }}"
                                        class="list-group-item list-group-item-action">
                                        Petty Cash
                                    </a>
                                </li>
                                <li class="list-group-item">
                                    <a href="{{ route('create-payment-requisition') }}"
                                        class="list-group-item list-group-item-action">
                                        Payment Requisition
                                    </a>
                                </li>

                                <li class="list-group-item">
                                    <a href="{{ route('create-new-workshop-registration') }}"
                                        class="list-group-item list-group-item-action">
                                        Workshop Registration Form
                                    </a>
                                </li>

                            </ul>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">

                        <div class="card-content table-responsive">

                            <br />
                            <p>All requests from <strong>Executive Director</strong></p>
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Title</th>
                                        <th scope="col">Requested by</th>
                                        <th scope="col">Request Type</th>
                                        <th scope="col">Project Name</th>
                                        <th scope="col"># Activities</th>
                                        <th scope="col">Total Requested</th>
                                        <th scope="col">Depature date</th>
                                        <th scope="col">Return Date</th>
                                        <th scope="col">Request stage</th>
                                        <th scope="col">Date Created</th>
                                        <th scope="col"></th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>Otto</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                        <td>@mdo</td>
                                        <td>
                                            <button type="button" class="btn btn-outline-success">view request</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>Jacob</td>
                                        <td>Otto</td>
                                        <td>Thornton</td>
                                        <td>Otto</td>
                                        <td>@fat</td>
                                        <td>@mdo</td>
                                        <td>
                                            <button type="button" class="btn btn-outline-success">view request</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Larry</td>
                                        <td> the Bird</td>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>Otto</td>
                                        <td>Otto</td>
                                        <td>@twitter</td>
                                        <td>@mdo</td>
                                        <td>
                                            <button type="button" class="btn btn-outline-success">view request</button>
                                        </td>

                                    </tr>
                                </tbody>
                            </table>
                            <br />
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
                    <!-- end of SECOND column -->
                </div>

            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-content table-responsive">
                            <br />
                            <p>All requests from <strong>Staff</strong></p>
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Title</th>
                                        <th scope="col">Requested by</th>
                                        <th scope="col">Request Type</th>
                                        <th scope="col">Project Name</th>
                                        <th scope="col"># Activities</th>
                                        <th scope="col">Total Requested</th>
                                        <th scope="col">Depature date</th>
                                        <th scope="col">Return Date</th>
                                        <th scope="col">Request stage</th>
                                        <th scope="col">Date Created</th>
                                        <th scope="col"></th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>Otto</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                        <td>@mdo</td>
                                        <td>
                                            <button type="button" class="btn btn-outline-success">view request</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>Jacob</td>
                                        <td>Otto</td>
                                        <td>Thornton</td>
                                        <td>Otto</td>
                                        <td>@fat</td>
                                        <td>@mdo</td>
                                        <td>
                                            <button type="button" class="btn btn-outline-success">view request</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Larry</td>
                                        <td> the Bird</td>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>Otto</td>
                                        <td>Otto</td>
                                        <td>@twitter</td>
                                        <td>@mdo</td>
                                        <td>
                                            <button type="button" class="btn btn-outline-success">view request</button>
                                        </td>

                                    </tr>
                                </tbody>
                            </table>
                            <br />
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
                    <!-- end of SECOND column -->
                </div>

            </div>

        </div>
        <!-- end of imprest-retirements data column -->

        <!--
               =========================================
               =                                       =
               =      start of finacial reports data           =
               ========================================= -->
        <!-- start of financial reports data panel -->
        <div class="tab-pane fade" id="retirements-md" role="tabpanel" aria-labelledby="retirements-tab-md">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#newFinancialReport">
                create a new financial report
            </button>
            <br />

            <!-- Modal -->
            <div class="modal fade" id="newFinancialReport" tabindex="-1" role="dialog"
                aria-labelledby="newFinancialReportTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Select Type of Report</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">

                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <a href="{{ route('create-bank-reconciliation-report') }}"
                                        class="btn btn-lg  btn-outline-info" role="button" aria-pressed="true">Bank
                                        Reconciliation</a>
                                </li>
                                <li class="list-group-item">
                                    <a href="{{ route('create-petty-cash-reconciliation-report') }}"
                                        class="btn btn-lg  btn-outline-info" role="button" aria-pressed="true">Petty
                                        Cash
                                        Reconciliation</a>
                                </li>
                                <li class="list-group-item">
                                    <a href="{{ route('create-payment-voucher') }}" class="btn btn-lg  btn-outline-info"
                                        role="button" aria-pressed="true">Payment voucher</a>
                                </li>
                                <li class="list-group-item">
                                    <a href="{{ route('create-deposit-voucher') }}" class="btn btn-lg  btn-outline-info"
                                        role="button" aria-pressed="true">Deposit voucher</a>
                                </li>
                                <li class="list-group-item">
                                    <a href="{{ route('create-journal-voucher') }}" class="btn btn-lg  btn-outline-info"
                                        role="button" aria-pressed="true">Journal voucher</a>
                                </li>
                                <li class="list-group-item">
                                    <a href="{{ route('create-pay-slip') }}" class="btn btn-lg  btn-outline-info"
                                        role="button" aria-pressed="true">Payslip</a>
                                </li>

                            </ul>


                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>


            <br />
            <div id="financial-reports-accordion">
                <div class="card">
                    <div class="card-header" id="headingOne">
                        <h5 class="mb-0">
                            <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne"
                                aria-expanded="true" aria-controls="collapseOne">
                                Recent Bank Reconciliation
                            </button>
                        </h5>
                    </div>
                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                        data-parent="#financial-reports-accordion">
                        <div class="card-body">
                            <div class="row">

                                <div class="col-lg-12">
                                    <br />
                                    <p>There are 12 total reports with <strong><span
                                                class="badge badge-danger badge-pill">2</span> pending reports</strong>
                                    </p>


                                    <table class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Title</th>
                                                <th scope="col">Report Type</th>
                                                <th scope="col">Last Submitted</th>
                                                <th scope="col">Next Submission</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Date Created</th>
                                                <th scope="col"></th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Mark</td>
                                                <td>Otto</td>
                                                <td>Mark</td>
                                                <td>Otto</td>
                                                <td>@mdo</td>
                                                <td>@mdo</td>
                                                <td>
                                                    <button type="button" class="btn btn-outline-success">view
                                                        details</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">2</th>
                                                <td>Jacob</td>
                                                <td>Thornton</td>
                                                <td>Thornton</td>
                                                <td>Otto</td>
                                                <td>@fat</td>
                                                <td>@mdo</td>
                                                <td>
                                                    <button type="button" class="btn btn-outline-success">view
                                                        details</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">3</th>
                                                <td>Larry</td>
                                                <td> the Bird</td>
                                                <td>Jacob</td>
                                                <td>Thornton</td>
                                                <td>@twitter</td>
                                                <td>@mdo</td>
                                                <td>
                                                    <button type="button" class="btn btn-outline-success">view
                                                        details</button>
                                                </td>

                                            </tr>
                                            <tr>
                                                <th scope="row">4</th>
                                                <td>Larry</td>
                                                <td> the Bird</td>
                                                <td>Jacob</td>
                                                <td>Thornton</td>
                                                <td>@twitter</td>
                                                <td>@mdo</td>
                                                <td>
                                                    <button type="button" class="btn btn-outline-success">view
                                                        details</button>
                                                </td>

                                            </tr>
                                            <tr>
                                                <th scope="row">5</th>
                                                <td>Larry</td>
                                                <td> the Bird</td>
                                                <td>Jacob</td>
                                                <td>Thornton</td>
                                                <td>@twitter</td>
                                                <td>@mdo</td>
                                                <td>
                                                    <button type="button" class="btn btn-outline-success">view
                                                        details</button>
                                                </td>

                                            </tr>
                                            <tr>
                                                <th scope="row">6</th>
                                                <td>Larry</td>
                                                <td> the Bird</td>
                                                <td>Jacob</td>
                                                <td>Thornton</td>
                                                <td>@twitter</td>
                                                <td>@mdo</td>
                                                <td>
                                                    <button type="button" class="btn btn-outline-success">view
                                                        details</button>
                                                </td>

                                            </tr>
                                            <tr>
                                                <th scope="row">7</th>
                                                <td>Larry</td>
                                                <td> the Bird</td>
                                                <td>Jacob</td>
                                                <td>Thornton</td>
                                                <td>@twitter</td>
                                                <td>@mdo</td>
                                                <td>
                                                    <button type="button" class="btn btn-outline-success">view
                                                        details</button>
                                                </td>

                                            </tr>
                                        </tbody>
                                    </table>
                                    <br />
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

                <div class="card">
                    <div class="card-header" id="headingTwo">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo"
                                aria-expanded="false" aria-controls="collapseTwo">
                                Recent Petty Cash Reconciliation

                            </button>
                        </h5>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                        data-parent="#financial-reports-accordion">
                        <div class="card-body">

                            <div class="row">
                                <div class="col-lg-12">
                                    <br />
                                    <p>There are 12 total reports with <strong><span
                                                class="badge badge-danger badge-pill">2</span> pending reports</strong>
                                    </p>


                                    <table class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Title</th>
                                                <th scope="col">Report Type</th>
                                                <th scope="col">Last Submitted</th>
                                                <th scope="col">Next Submission</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Date Created</th>
                                                <th scope="col"></th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Mark</td>
                                                <td>Otto</td>
                                                <td>Mark</td>
                                                <td>Otto</td>
                                                <td>@mdo</td>
                                                <td>@mdo</td>
                                                <td>
                                                    <button type="button" class="btn btn-outline-success">view
                                                        details</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">2</th>
                                                <td>Jacob</td>
                                                <td>Thornton</td>
                                                <td>Thornton</td>
                                                <td>Otto</td>
                                                <td>@fat</td>
                                                <td>@mdo</td>
                                                <td>
                                                    <button type="button" class="btn btn-outline-success">view
                                                        details</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">3</th>
                                                <td>Larry</td>
                                                <td> the Bird</td>
                                                <td>Jacob</td>
                                                <td>Thornton</td>
                                                <td>@twitter</td>
                                                <td>@mdo</td>
                                                <td>
                                                    <button type="button" class="btn btn-outline-success">view
                                                        details</button>
                                                </td>

                                            </tr>
                                            <tr>
                                                <th scope="row">4</th>
                                                <td>Larry</td>
                                                <td> the Bird</td>
                                                <td>Jacob</td>
                                                <td>Thornton</td>
                                                <td>@twitter</td>
                                                <td>@mdo</td>
                                                <td>
                                                    <button type="button" class="btn btn-outline-success">view
                                                        details</button>
                                                </td>

                                            </tr>
                                            <tr>
                                                <th scope="row">5</th>
                                                <td>Larry</td>
                                                <td> the Bird</td>
                                                <td>Jacob</td>
                                                <td>Thornton</td>
                                                <td>@twitter</td>
                                                <td>@mdo</td>
                                                <td>
                                                    <button type="button" class="btn btn-outline-success">view
                                                        details</button>
                                                </td>

                                            </tr>
                                            <tr>
                                                <th scope="row">6</th>
                                                <td>Larry</td>
                                                <td> the Bird</td>
                                                <td>Jacob</td>
                                                <td>Thornton</td>
                                                <td>@twitter</td>
                                                <td>@mdo</td>
                                                <td>
                                                    <button type="button" class="btn btn-outline-success">view
                                                        details</button>
                                                </td>

                                            </tr>
                                            <tr>
                                                <th scope="row">7</th>
                                                <td>Larry</td>
                                                <td> the Bird</td>
                                                <td>Jacob</td>
                                                <td>Thornton</td>
                                                <td>@twitter</td>
                                                <td>@mdo</td>
                                                <td>
                                                    <button type="button" class="btn btn-outline-success">view
                                                        details</button>
                                                </td>

                                            </tr>
                                        </tbody>
                                    </table>
                                    <br />
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

                <div class="card">
                    <div class="card-header" id="headingThree">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree"
                                aria-expanded="false" aria-controls="collapseThree">
                                Payment voucher
                            </button>
                        </h5>
                    </div>

                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                        data-parent="#financial-reports-accordion">
                        <div class="card-body">


                            <div class="row">
                                <div class="col-lg-12">
                                    <br />
                                    <p>There are 12 total reports with <strong><span
                                                class="badge badge-danger badge-pill">2</span> pending reports</strong>
                                    </p>


                                    <table class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Title</th>
                                                <th scope="col">Report Type</th>
                                                <th scope="col">Last Submitted</th>
                                                <th scope="col">Next Submission</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Date Created</th>
                                                <th scope="col"></th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Mark</td>
                                                <td>Otto</td>
                                                <td>Mark</td>
                                                <td>Otto</td>
                                                <td>@mdo</td>
                                                <td>@mdo</td>
                                                <td>
                                                    <button type="button" class="btn btn-outline-success">view
                                                        details</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">2</th>
                                                <td>Jacob</td>
                                                <td>Thornton</td>
                                                <td>Thornton</td>
                                                <td>Otto</td>
                                                <td>@fat</td>
                                                <td>@mdo</td>
                                                <td>
                                                    <button type="button" class="btn btn-outline-success">view
                                                        details</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">3</th>
                                                <td>Larry</td>
                                                <td> the Bird</td>
                                                <td>Jacob</td>
                                                <td>Thornton</td>
                                                <td>@twitter</td>
                                                <td>@mdo</td>
                                                <td>
                                                    <button type="button" class="btn btn-outline-success">view
                                                        details</button>
                                                </td>

                                            </tr>
                                            <tr>
                                                <th scope="row">4</th>
                                                <td>Larry</td>
                                                <td> the Bird</td>
                                                <td>Jacob</td>
                                                <td>Thornton</td>
                                                <td>@twitter</td>
                                                <td>@mdo</td>
                                                <td>
                                                    <button type="button" class="btn btn-outline-success">view
                                                        details</button>
                                                </td>

                                            </tr>
                                            <tr>
                                                <th scope="row">5</th>
                                                <td>Larry</td>
                                                <td> the Bird</td>
                                                <td>Jacob</td>
                                                <td>Thornton</td>
                                                <td>@twitter</td>
                                                <td>@mdo</td>
                                                <td>
                                                    <button type="button" class="btn btn-outline-success">view
                                                        details</button>
                                                </td>

                                            </tr>
                                            <tr>
                                                <th scope="row">6</th>
                                                <td>Larry</td>
                                                <td> the Bird</td>
                                                <td>Jacob</td>
                                                <td>Thornton</td>
                                                <td>@twitter</td>
                                                <td>@mdo</td>
                                                <td>
                                                    <button type="button" class="btn btn-outline-success">view
                                                        details</button>
                                                </td>

                                            </tr>
                                            <tr>
                                                <th scope="row">7</th>
                                                <td>Larry</td>
                                                <td> the Bird</td>
                                                <td>Jacob</td>
                                                <td>Thornton</td>
                                                <td>@twitter</td>
                                                <td>@mdo</td>
                                                <td>
                                                    <button type="button" class="btn btn-outline-success">view
                                                        details</button>
                                                </td>

                                            </tr>
                                        </tbody>
                                    </table>
                                    <br />
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
                <div class="card">
                    <div class="card-header" id="headingFour">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour"
                                aria-expanded="false" aria-controls="collapseFour">
                                Deposit voucher
                            </button>
                        </h5>
                    </div>


                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour"
                        data-parent="#financial-reports-accordion">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <br />
                                    <p>There are 12 total reports with <strong><span
                                                class="badge badge-danger badge-pill">2</span> pending reports</strong>
                                    </p>


                                    <table class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Title</th>
                                                <th scope="col">Report Type</th>
                                                <th scope="col">Last Submitted</th>
                                                <th scope="col">Next Submission</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Date Created</th>
                                                <th scope="col"></th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Mark</td>
                                                <td>Otto</td>
                                                <td>Mark</td>
                                                <td>Otto</td>
                                                <td>@mdo</td>
                                                <td>@mdo</td>
                                                <td>
                                                    <button type="button" class="btn btn-outline-success">view
                                                        details</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">2</th>
                                                <td>Jacob</td>
                                                <td>Thornton</td>
                                                <td>Thornton</td>
                                                <td>Otto</td>
                                                <td>@fat</td>
                                                <td>@mdo</td>
                                                <td>
                                                    <button type="button" class="btn btn-outline-success">view
                                                        details</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">3</th>
                                                <td>Larry</td>
                                                <td> the Bird</td>
                                                <td>Jacob</td>
                                                <td>Thornton</td>
                                                <td>@twitter</td>
                                                <td>@mdo</td>
                                                <td>
                                                    <button type="button" class="btn btn-outline-success">view
                                                        details</button>
                                                </td>

                                            </tr>
                                            <tr>
                                                <th scope="row">4</th>
                                                <td>Larry</td>
                                                <td> the Bird</td>
                                                <td>Jacob</td>
                                                <td>Thornton</td>
                                                <td>@twitter</td>
                                                <td>@mdo</td>
                                                <td>
                                                    <button type="button" class="btn btn-outline-success">view
                                                        details</button>
                                                </td>

                                            </tr>
                                            <tr>
                                                <th scope="row">5</th>
                                                <td>Larry</td>
                                                <td> the Bird</td>
                                                <td>Jacob</td>
                                                <td>Thornton</td>
                                                <td>@twitter</td>
                                                <td>@mdo</td>
                                                <td>
                                                    <button type="button" class="btn btn-outline-success">view
                                                        details</button>
                                                </td>

                                            </tr>
                                            <tr>
                                                <th scope="row">6</th>
                                                <td>Larry</td>
                                                <td> the Bird</td>
                                                <td>Jacob</td>
                                                <td>Thornton</td>
                                                <td>@twitter</td>
                                                <td>@mdo</td>
                                                <td>
                                                    <button type="button" class="btn btn-outline-success">view
                                                        details</button>
                                                </td>

                                            </tr>
                                            <tr>
                                                <th scope="row">7</th>
                                                <td>Larry</td>
                                                <td> the Bird</td>
                                                <td>Jacob</td>
                                                <td>Thornton</td>
                                                <td>@twitter</td>
                                                <td>@mdo</td>
                                                <td>
                                                    <button type="button" class="btn btn-outline-success">view
                                                        details</button>
                                                </td>

                                            </tr>
                                        </tbody>
                                    </table>
                                    <br />
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

                <div class="card">
                    <div class="card-header" id="headingFive">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFive"
                                aria-expanded="false" aria-controls="collapseFive">
                                Journal voucher
                            </button>
                        </h5>
                    </div>


                    <div id="collapseFive" class="collapse" aria-labelledby="headingFive"
                        data-parent="#financial-reports-accordion">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <br />
                                    <p>There are 12 total reports with <strong><span
                                                class="badge badge-danger badge-pill">2</span> pending reports</strong>
                                    </p>


                                    <table class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Title</th>
                                                <th scope="col">Report Type</th>
                                                <th scope="col">Last Submitted</th>
                                                <th scope="col">Next Submission</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Date Created</th>
                                                <th scope="col"></th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Mark</td>
                                                <td>Otto</td>
                                                <td>Mark</td>
                                                <td>Otto</td>
                                                <td>@mdo</td>
                                                <td>@mdo</td>
                                                <td>
                                                    <button type="button" class="btn btn-outline-success">view
                                                        details</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">2</th>
                                                <td>Jacob</td>
                                                <td>Thornton</td>
                                                <td>Thornton</td>
                                                <td>Otto</td>
                                                <td>@fat</td>
                                                <td>@mdo</td>
                                                <td>
                                                    <button type="button" class="btn btn-outline-success">view
                                                        details</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">3</th>
                                                <td>Larry</td>
                                                <td> the Bird</td>
                                                <td>Jacob</td>
                                                <td>Thornton</td>
                                                <td>@twitter</td>
                                                <td>@mdo</td>
                                                <td>
                                                    <button type="button" class="btn btn-outline-success">view
                                                        details</button>
                                                </td>

                                            </tr>
                                            <tr>
                                                <th scope="row">4</th>
                                                <td>Larry</td>
                                                <td> the Bird</td>
                                                <td>Jacob</td>
                                                <td>Thornton</td>
                                                <td>@twitter</td>
                                                <td>@mdo</td>
                                                <td>
                                                    <button type="button" class="btn btn-outline-success">view
                                                        details</button>
                                                </td>

                                            </tr>
                                            <tr>
                                                <th scope="row">5</th>
                                                <td>Larry</td>
                                                <td> the Bird</td>
                                                <td>Jacob</td>
                                                <td>Thornton</td>
                                                <td>@twitter</td>
                                                <td>@mdo</td>
                                                <td>
                                                    <button type="button" class="btn btn-outline-success">view
                                                        details</button>
                                                </td>

                                            </tr>
                                            <tr>
                                                <th scope="row">6</th>
                                                <td>Larry</td>
                                                <td> the Bird</td>
                                                <td>Jacob</td>
                                                <td>Thornton</td>
                                                <td>@twitter</td>
                                                <td>@mdo</td>
                                                <td>
                                                    <button type="button" class="btn btn-outline-success">view
                                                        details</button>
                                                </td>

                                            </tr>
                                            <tr>
                                                <th scope="row">7</th>
                                                <td>Larry</td>
                                                <td> the Bird</td>
                                                <td>Jacob</td>
                                                <td>Thornton</td>
                                                <td>@twitter</td>
                                                <td>@mdo</td>
                                                <td>
                                                    <button type="button" class="btn btn-outline-success">view
                                                        details</button>
                                                </td>

                                            </tr>
                                        </tbody>
                                    </table>
                                    <br />
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

                <div class="card">
                    <div class="card-header" id="headingSix">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSix"
                                aria-expanded="false" aria-controls="collapseSix">
                                Payment voucher
                            </button>
                        </h5>
                    </div>


                    <div id="collapseSix" class="collapse" aria-labelledby="headingSix"
                        data-parent="#financial-reports-accordion">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <br />
                                    <p>There are 12 total reports with <strong><span
                                                class="badge badge-danger badge-pill">2</span> pending reports</strong>
                                    </p>


                                    <table class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Title</th>
                                                <th scope="col">Report Type</th>
                                                <th scope="col">Last Submitted</th>
                                                <th scope="col">Next Submission</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Date Created</th>
                                                <th scope="col"></th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Mark</td>
                                                <td>Otto</td>
                                                <td>Mark</td>
                                                <td>Otto</td>
                                                <td>@mdo</td>
                                                <td>@mdo</td>
                                                <td>
                                                    <button type="button" class="btn btn-outline-success">view
                                                        details</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">2</th>
                                                <td>Jacob</td>
                                                <td>Thornton</td>
                                                <td>Thornton</td>
                                                <td>Otto</td>
                                                <td>@fat</td>
                                                <td>@mdo</td>
                                                <td>
                                                    <button type="button" class="btn btn-outline-success">view
                                                        details</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">3</th>
                                                <td>Larry</td>
                                                <td> the Bird</td>
                                                <td>Jacob</td>
                                                <td>Thornton</td>
                                                <td>@twitter</td>
                                                <td>@mdo</td>
                                                <td>
                                                    <button type="button" class="btn btn-outline-success">view
                                                        details</button>
                                                </td>

                                            </tr>
                                            <tr>
                                                <th scope="row">4</th>
                                                <td>Larry</td>
                                                <td> the Bird</td>
                                                <td>Jacob</td>
                                                <td>Thornton</td>
                                                <td>@twitter</td>
                                                <td>@mdo</td>
                                                <td>
                                                    <button type="button" class="btn btn-outline-success">view
                                                        details</button>
                                                </td>

                                            </tr>
                                            <tr>
                                                <th scope="row">5</th>
                                                <td>Larry</td>
                                                <td> the Bird</td>
                                                <td>Jacob</td>
                                                <td>Thornton</td>
                                                <td>@twitter</td>
                                                <td>@mdo</td>
                                                <td>
                                                    <button type="button" class="btn btn-outline-success">view
                                                        details</button>
                                                </td>

                                            </tr>
                                            <tr>
                                                <th scope="row">6</th>
                                                <td>Larry</td>
                                                <td> the Bird</td>
                                                <td>Jacob</td>
                                                <td>Thornton</td>
                                                <td>@twitter</td>
                                                <td>@mdo</td>
                                                <td>
                                                    <button type="button" class="btn btn-outline-success">view
                                                        details</button>
                                                </td>

                                            </tr>
                                            <tr>
                                                <th scope="row">7</th>
                                                <td>Larry</td>
                                                <td> the Bird</td>
                                                <td>Jacob</td>
                                                <td>Thornton</td>
                                                <td>@twitter</td>
                                                <td>@mdo</td>
                                                <td>
                                                    <button type="button" class="btn btn-outline-success">view
                                                        details</button>
                                                </td>

                                            </tr>
                                        </tbody>
                                    </table>
                                    <br />
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

                <div class="card">
                    <div class="card-header" id="headingSeven">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSeven"
                                aria-expanded="false" aria-controls="collapseSeven">
                                Payslip
                            </button>
                        </h5>
                    </div>


                    <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven"
                        data-parent="#financial-reports-accordion">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <br />
                                    <p>There are 12 total reports with <strong><span
                                                class="badge badge-danger badge-pill">2</span> pending reports</strong>
                                    </p>


                                    <table class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Title</th>
                                                <th scope="col">Report Type</th>
                                                <th scope="col">Last Submitted</th>
                                                <th scope="col">Next Submission</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Date Created</th>
                                                <th scope="col"></th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Mark</td>
                                                <td>Otto</td>
                                                <td>Mark</td>
                                                <td>Otto</td>
                                                <td>@mdo</td>
                                                <td>@mdo</td>
                                                <td>
                                                    <button type="button" class="btn btn-outline-success">view
                                                        details</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">2</th>
                                                <td>Jacob</td>
                                                <td>Thornton</td>
                                                <td>Thornton</td>
                                                <td>Otto</td>
                                                <td>@fat</td>
                                                <td>@mdo</td>
                                                <td>
                                                    <button type="button" class="btn btn-outline-success">view
                                                        details</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">3</th>
                                                <td>Larry</td>
                                                <td> the Bird</td>
                                                <td>Jacob</td>
                                                <td>Thornton</td>
                                                <td>@twitter</td>
                                                <td>@mdo</td>
                                                <td>
                                                    <button type="button" class="btn btn-outline-success">view
                                                        details</button>
                                                </td>

                                            </tr>
                                            <tr>
                                                <th scope="row">4</th>
                                                <td>Larry</td>
                                                <td> the Bird</td>
                                                <td>Jacob</td>
                                                <td>Thornton</td>
                                                <td>@twitter</td>
                                                <td>@mdo</td>
                                                <td>
                                                    <button type="button" class="btn btn-outline-success">view
                                                        details</button>
                                                </td>

                                            </tr>
                                            <tr>
                                                <th scope="row">5</th>
                                                <td>Larry</td>
                                                <td> the Bird</td>
                                                <td>Jacob</td>
                                                <td>Thornton</td>
                                                <td>@twitter</td>
                                                <td>@mdo</td>
                                                <td>
                                                    <button type="button" class="btn btn-outline-success">view
                                                        details</button>
                                                </td>

                                            </tr>
                                            <tr>
                                                <th scope="row">6</th>
                                                <td>Larry</td>
                                                <td> the Bird</td>
                                                <td>Jacob</td>
                                                <td>Thornton</td>
                                                <td>@twitter</td>
                                                <td>@mdo</td>
                                                <td>
                                                    <button type="button" class="btn btn-outline-success">view
                                                        details</button>
                                                </td>

                                            </tr>
                                            <tr>
                                                <th scope="row">7</th>
                                                <td>Larry</td>
                                                <td> the Bird</td>
                                                <td>Jacob</td>
                                                <td>Thornton</td>
                                                <td>@twitter</td>
                                                <td>@mdo</td>
                                                <td>
                                                    <button type="button" class="btn btn-outline-success">view
                                                        details</button>
                                                </td>

                                            </tr>
                                        </tbody>
                                    </table>
                                    <br />
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
            </div>


        </div>
        <!-- end of  financial reports panel -->

        <!--
         ========================================
         =                                      =
         =       start of payroll-system =
         ======================================== -->
        <!-- start of payroll-system panel -->
        <div class="tab-pane fade" id="imprests-md" role="tabpanel" aria-labelledby="imprests-tab-md">

            <h4>Data Science Projects & Imperest</h4>

            <!-- Button trigger modal -->
            <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#newFinancialReport">
                create a new imprest
            </button>
            <br />



            <div class="row">
                <div class="col-lg-12">
                    <div class="card">

                        <div class="card-content table-responsive">

                            <br />
                            <p>All available projects under <strong>Data Science</strong> pillar</p>
                            <p>Select one and create an imprest</p>

                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Title</th>
                                        <th scope="col">Requested by</th>
                                        <th scope="col">Request Type</th>
                                        <th scope="col">Project Name</th>
                                        <th scope="col"># Activities</th>
                                        <th scope="col">Total Requested</th>
                                        <th scope="col">Depature date</th>
                                        <th scope="col">Return Date</th>
                                        <th scope="col">Request stage</th>
                                        <th scope="col">Date Created</th>
                                        <th scope="col"></th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>Otto</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                        <td>@mdo</td>
                                        <td>
                                            <button type="button" class="btn btn-outline-success">view request</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>Jacob</td>
                                        <td>Otto</td>
                                        <td>Thornton</td>
                                        <td>Otto</td>
                                        <td>@fat</td>
                                        <td>@mdo</td>
                                        <td>
                                            <button type="button" class="btn btn-outline-success">view request</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Larry</td>
                                        <td> the Bird</td>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>Otto</td>
                                        <td>Otto</td>
                                        <td>@twitter</td>
                                        <td>@mdo</td>
                                        <td>
                                            <button type="button" class="btn btn-outline-success">view request</button>
                                        </td>

                                    </tr>
                                </tbody>
                            </table>
                            <br />
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
                    <!-- end of SECOND column -->
                </div>

            </div>

        </div>
        <!-- end of payroll-system data panel -->

        <!--
         ========================================
         =                                      =
         =       start of scholars and grantees =
         ======================================== -->
        <!-- start of scholar and grantees data panel -->
        <div class="tab-pane fade" id="download-forms-md" role="tabpanel" aria-labelledby="download-forms-tab-md">
            <h4>All forms that you might need</h4>
            <br />
            <br />

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">

                        <div class="card-content table-responsive">

                            <br />
                            <p>All requests from <strong>Executive Director</strong></p>
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Title</th>
                                        <th scope="col">Requested by</th>
                                        <th scope="col">Request Type</th>
                                        <th scope="col">Project Name</th>
                                        <th scope="col"># Activities</th>
                                        <th scope="col">Total Requested</th>
                                        <th scope="col">Depature date</th>
                                        <th scope="col">Return Date</th>
                                        <th scope="col">Request stage</th>
                                        <th scope="col">Date Created</th>
                                        <th scope="col"></th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>Otto</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                        <td>@mdo</td>
                                        <td>
                                            <button type="button" class="btn btn-outline-success">view request</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>Jacob</td>
                                        <td>Otto</td>
                                        <td>Thornton</td>
                                        <td>Otto</td>
                                        <td>@fat</td>
                                        <td>@mdo</td>
                                        <td>
                                            <button type="button" class="btn btn-outline-success">view request</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Larry</td>
                                        <td> the Bird</td>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>Otto</td>
                                        <td>Otto</td>
                                        <td>@twitter</td>
                                        <td>@mdo</td>
                                        <td>
                                            <button type="button" class="btn btn-outline-success">view request</button>
                                        </td>

                                    </tr>
                                </tbody>
                            </table>
                            <br />
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
                    <!-- end of SECOND column -->
                </div>

            </div>

            <h4>Scholars Information</h4>


            <div class="row">
                <div class="col-md-3">
                    <div class="card">

                        <div class="card-content table-responsive">



                        </div>
                    </div>
                    <!-- end of SECOND column -->
                </div>


                <div class="col-md-3">
                    <div class="card">

                        <div class="card-content table-responsive">
                            <p>Data Science Staff Timesheets</p>



                        </div>
                    </div>
                    <!-- end of SECOND column -->
                </div>


                <div class="col-md-3">
                    <div class="card">

                        <div class="card-content table-responsive">



                        </div>
                    </div>
                    <!-- end of SECOND column -->
                </div>


                <div class="col-md-3">
                    <div class="card">

                        <div class="card-content table-responsive">



                        </div>
                    </div>
                    <!-- end of SECOND column -->
                </div>
            </div>

        </div>
        <!-- end of scholar and grantees data panel -->






                <!--
               =========================================
               =                                       =
               =      start of financial-analytics data           =
               ========================================= -->
        <!-- start of financial-analytics data panel -->
        <div class="tab-pane fade" id="projects-nactivities-md" role="tabpanel"
            aria-labelledby="projects-nactivities-tab-md">
            <p>Data Science Projects and Activities</p>
            <br />


        </div>
        <!-- end of data-science-analytics data panel -->

        <!--
               =========================================
               =                                       =
               =      start of financial-analytics data           =
               ========================================= -->
        <!-- start of financial-analytics data panel -->
        <div class="tab-pane fade" id="data-science-timesheet-md" role="tabpanel"
            aria-labelledby="data-science-timesheet-tab-md">
            <p>Data Science Staff Timesheets</p>
            <br />


        </div>
        <!-- end of data-science-analytics data panel -->


        <!--
               =========================================
               =                                       =
               =      start of financial-analytics data           =
               ========================================= -->
        <!-- start of financial-analytics data panel -->
        <div class="tab-pane fade" id="data-science-timesheet-md" role="tabpanel"
            aria-labelledby="data-science-timesheet-tab-md">
            <p>Data Science Staff Timesheets</p>
            <br />


        </div>
        <!-- end of data-science-analytics data panel -->

        <!--
               =========================================
               =                                       =
               =      start of financial-analytics data           =
               ========================================= -->
        <!-- start of financial-analytics data panel -->
        <div class="tab-pane fade" id="data-science-analytics-md" role="tabpanel"
            aria-labelledby="data-science-analytics-tab-md">
            <p>data science analytics Reports</p>
            <br />


        </div>
        <!-- end of financial-analytics data panel -->

    </div>

</div>
@endsection
