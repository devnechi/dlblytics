@extends('layouts.llmds')
@section('content')
<div class="container-fluid">


    <ul class="nav nav-tabs md-tabs" id="selectDataViewTab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="data-science-overview-tab-md" data-toggle="tab"
                href="#data-science-overview-md" role="tab" aria-controls="data-science-overview-md"
                aria-selected="true"> Overview </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="data-science-request-tab-md" data-toggle="tab" href="#data-science-request-md"
                role="tab" aria-controls="data-science-request-md" aria-selected="false"> Data Science Requests</a>
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
            <a class="nav-link" id="projects-nactivities-tab-md" data-toggle="tab" href="#projects-nactivities-md"
                role="tab" aria-controls="projects-nactivities-md" aria-selected="false">Projects & Activities </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="download-forms-tab-md" data-toggle="tab" href="#download-forms-md" role="tab"
                aria-controls="download-forms-md" aria-selected="false">Download Forms </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" id="data-science-timesheet-tab-md" data-toggle="tab" href="#data-science-timesheet-md"
                role="tab" aria-controls="data-science-timesheet-md" aria-selected="false">Timesheet</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="data-science-analytics-tab-md" data-toggle="tab" href="#data-science-analytics-md"
                role="tab" aria-controls="data-science-analytics-md" aria-selected="false">Data Science Analytics</a>
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
                {{-- data science notifications --}}
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
                <div class="col-lg-9">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-content table-responsive">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <p> projects created </p>
                                        </div>
                                    </div>

                                    <div class="row">

                                        <div class="offset-3 col-md-3">
                                            <h3>12</h3>
                                        </div>
                                        <div class="offset-3 col-md-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                                fill="#84d985" class="bi bi-folder-check" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd"
                                                    d="M9.828 4H2.19a1 1 0 0 0-.996 1.09l.637 7a1 1 0 0 0 .995.91H9v1H2.826a2 2 0 0 1-1.991-1.819l-.637-7a1.99 1.99 0 0 1 .342-1.31L.5 3a2 2 0 0 1 2-2h3.672a2 2 0 0 1 1.414.586l.828.828A2 2 0 0 0 9.828 3h3.982a2 2 0 0 1 1.992 2.181L15.546 8H14.54l.265-2.91A1 1 0 0 0 13.81 4H9.828zm-2.95-1.707L7.587 3H2.19c-.24 0-.47.042-.684.12L1.5 2.98a1 1 0 0 1 1-.98h3.672a1 1 0 0 1 .707.293z" />
                                                <path fill-rule="evenodd"
                                                    d="M15.854 10.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708l1.146 1.147 2.646-2.647a.5.5 0 0 1 .708 0z" />
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-content table-responsive">
                                    <p> Activities created </p>
                                    <div class="row">

                                        <div class="offset-3 col-md-3">
                                            <h3>10</h3>
                                        </div>
                                        <div class="offset-3 col-md-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                                fill="#84d985" class="bi bi-folder-check" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd"
                                                    d="M9.828 4H2.19a1 1 0 0 0-.996 1.09l.637 7a1 1 0 0 0 .995.91H9v1H2.826a2 2 0 0 1-1.991-1.819l-.637-7a1.99 1.99 0 0 1 .342-1.31L.5 3a2 2 0 0 1 2-2h3.672a2 2 0 0 1 1.414.586l.828.828A2 2 0 0 0 9.828 3h3.982a2 2 0 0 1 1.992 2.181L15.546 8H14.54l.265-2.91A1 1 0 0 0 13.81 4H9.828zm-2.95-1.707L7.587 3H2.19c-.24 0-.47.042-.684.12L1.5 2.98a1 1 0 0 1 1-.98h3.672a1 1 0 0 1 .707.293z" />
                                                <path fill-rule="evenodd"
                                                    d="M15.854 10.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708l1.146 1.147 2.646-2.647a.5.5 0 0 1 .708 0z" />
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-content table-responsive">
                                    <p> Sub-Activities recorded </p>
                                    <div class="row">

                                        <div class="offset-3 col-md-3">
                                            <h3>24</h3>
                                        </div>
                                        <div class="offset-3 col-md-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                                fill="#84d985" class="bi bi-folder-check" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd"
                                                    d="M9.828 4H2.19a1 1 0 0 0-.996 1.09l.637 7a1 1 0 0 0 .995.91H9v1H2.826a2 2 0 0 1-1.991-1.819l-.637-7a1.99 1.99 0 0 1 .342-1.31L.5 3a2 2 0 0 1 2-2h3.672a2 2 0 0 1 1.414.586l.828.828A2 2 0 0 0 9.828 3h3.982a2 2 0 0 1 1.992 2.181L15.546 8H14.54l.265-2.91A1 1 0 0 0 13.81 4H9.828zm-2.95-1.707L7.587 3H2.19c-.24 0-.47.042-.684.12L1.5 2.98a1 1 0 0 1 1-.98h3.672a1 1 0 0 1 .707.293z" />
                                                <path fill-rule="evenodd"
                                                    d="M15.854 10.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708l1.146 1.147 2.646-2.647a.5.5 0 0 1 .708 0z" />
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-content table-responsive">
                                    <p> other Activities </p>
                                    <div class="row">

                                        <div class="offset-3 col-md-3">
                                            <h3>06</h3>
                                        </div>
                                        <div class="offset-3 col-md-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                                fill="#84d985" class="bi bi-folder-check" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd"
                                                    d="M9.828 4H2.19a1 1 0 0 0-.996 1.09l.637 7a1 1 0 0 0 .995.91H9v1H2.826a2 2 0 0 1-1.991-1.819l-.637-7a1.99 1.99 0 0 1 .342-1.31L.5 3a2 2 0 0 1 2-2h3.672a2 2 0 0 1 1.414.586l.828.828A2 2 0 0 0 9.828 3h3.982a2 2 0 0 1 1.992 2.181L15.546 8H14.54l.265-2.91A1 1 0 0 0 13.81 4H9.828zm-2.95-1.707L7.587 3H2.19c-.24 0-.47.042-.684.12L1.5 2.98a1 1 0 0 1 1-.98h3.672a1 1 0 0 1 .707.293z" />
                                                <path fill-rule="evenodd"
                                                    d="M15.854 10.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708l1.146 1.147 2.646-2.647a.5.5 0 0 1 .708 0z" />
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        {{-- pillar funds break down --}}
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-content table-responsive">
                                    <!-- <label for="exampleFormControlSelect1" class="control-label">select below:</label> -->
                                    <div id="chartContainer" style="height: 335px; width: 100%;"></div>
                                </div>
                            </div>
                            <!-- end of first column -->
                        </div>
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-content table-responsive">
                                    <p> Total Allocated funds to <strong>Pillar</strong> </p>
                                    <div class="row">
                                        <div class="offset-1 col-md-8">
                                            <h3>12,000,000.00 <strong>TZS</strong></h3>
                                            <p>5454.00 <strong>USD</strong></p>
                                        </div>
                                        <div class="offset-1 col-md-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                                fill="#84d985" class="bi bi-folder-check" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd"
                                                    d="M9.828 4H2.19a1 1 0 0 0-.996 1.09l.637 7a1 1 0 0 0 .995.91H9v1H2.826a2 2 0 0 1-1.991-1.819l-.637-7a1.99 1.99 0 0 1 .342-1.31L.5 3a2 2 0 0 1 2-2h3.672a2 2 0 0 1 1.414.586l.828.828A2 2 0 0 0 9.828 3h3.982a2 2 0 0 1 1.992 2.181L15.546 8H14.54l.265-2.91A1 1 0 0 0 13.81 4H9.828zm-2.95-1.707L7.587 3H2.19c-.24 0-.47.042-.684.12L1.5 2.98a1 1 0 0 1 1-.98h3.672a1 1 0 0 1 .707.293z" />
                                                <path fill-rule="evenodd"
                                                    d="M15.854 10.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708l1.146 1.147 2.646-2.647a.5.5 0 0 1 .708 0z" />
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-content table-responsive">
                                    <p> Total Expenses recorded by <strong>Pillar</strong> </p>
                                    <div class="row">
                                        <div class="offset-1 col-md-8">
                                            <h3>12,000,000.00 <strong>TZS</strong></h3>
                                            <p>5454.00 <strong>USD</strong></p>
                                        </div>
                                        <div class="offset-1 col-md-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                                fill="#84d985" class="bi bi-folder-check" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd"
                                                    d="M9.828 4H2.19a1 1 0 0 0-.996 1.09l.637 7a1 1 0 0 0 .995.91H9v1H2.826a2 2 0 0 1-1.991-1.819l-.637-7a1.99 1.99 0 0 1 .342-1.31L.5 3a2 2 0 0 1 2-2h3.672a2 2 0 0 1 1.414.586l.828.828A2 2 0 0 0 9.828 3h3.982a2 2 0 0 1 1.992 2.181L15.546 8H14.54l.265-2.91A1 1 0 0 0 13.81 4H9.828zm-2.95-1.707L7.587 3H2.19c-.24 0-.47.042-.684.12L1.5 2.98a1 1 0 0 1 1-.98h3.672a1 1 0 0 1 .707.293z" />
                                                <path fill-rule="evenodd"
                                                    d="M15.854 10.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708l1.146 1.147 2.646-2.647a.5.5 0 0 1 .708 0z" />
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <h4>Requests, Retirements & Imprests</h4>
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-content table-responsive">
                            <h4>Pillar Request</h4>
                            <div class="row">
                                <div class="col-md-6">
                                    <p>Total Pillar Requests: </p>
                                    <h3><strong>120</strong></h3>
                                </div>
                                <div class="col-md-6">
                                    <p>Total Pending Reviews: </p>
                                    <h3><strong>0</strong></h3>
                                </div>
                                <div class="col-md-6">
                                    <p>Total Pending Approvals: </p>
                                    <h3><strong>120</strong></h3>
                                </div>
                                <div class="col-md-6">
                                    <p>Total Approved requests: </p>
                                    <h3><strong>120</strong></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-content table-responsive">
                            <h4>Pillar Retirements</h4>
                            <div class="row">
                                <div class="col-md-6">
                                    <p>Total Pillar Retirements: </p>
                                    <h3><strong>120</strong></h3>
                                </div>
                                <div class="col-md-6">
                                    <p>Total Retirements Reviews: </p>
                                    <h3><strong>0</strong></h3>
                                </div>
                                <div class="col-md-6">
                                    <p>Total Pending Approvals: </p>
                                    <h3><strong>120</strong></h3>
                                </div>
                                <div class="col-md-6">
                                    <p>Approved Retirements: </p>
                                    <h3><strong>120</strong></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-content table-responsive">
                            <h4>Pillar Imprests</h4>
                            <div class="row">
                                <div class="col-md-6">
                                    <p>Total Created Imprests: </p>
                                    <h3><strong>120</strong></h3>
                                </div>
                                <div class="col-md-6">
                                    <p>Imprest pending reviews: </p>
                                    <h3><strong>0</strong></h3>
                                </div>
                                <div class="col-md-6">
                                    <p>Pending Approvals: </p>
                                    <h3><strong>120</strong></h3>
                                </div>
                                <div class="col-md-6">
                                    <p>Total Approved Imprests: </p>
                                    <h3><strong>120</strong></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <h4>My Activity Summary</h4>

            <div class="row">
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-content table-responsive">
                            <h4>Reviewed</h4>
                            <p>Balance in Acc <strong>3,000,000</strong></p>
                            <p>Cash Book balance<strong>3,100,000</strong></p>


                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-content table-responsive">
                            <h4>Prepared by me</h4>
                            <p>Total Journal Entries <strong>1</strong></p>
                            <p>Total Debit <strong>120000</strong></p>
                            <p>Total Credit <strong>120000</strong></p>


                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-content table-responsive">
                            <h4>Approved</h4>
                            <p>this month Count <strong>20</strong></p>
                            <p>Total Amount Issued <strong>3,000,000</strong></p>
                            <p>Total Amount Issued <strong>3,000,000</strong></p>

                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-content table-responsive">
                            <h4>Authorised by me</h4>
                            <p>Total Journal Entries <strong>1</strong></p>
                            <p>Total Debit <strong>120000</strong></p>
                            <p>Total Credit <strong>120000</strong></p>


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
        <div class="tab-pane fade" id="data-science-analytics-md" role="tabpanel"
            aria-labelledby="data-science-analytics-tab-md">
            <p>data science analytics Reports</p>
            <br />


        </div>
        <!-- end of financial-analytics data panel -->

    </div>

</div>
@endsection
