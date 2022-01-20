
@extends('layouts.lfinanceadmin')

@section('content')
<div class="container-fluid">

    <div class="tab-content pt-5" id="selectDataViewTabContent">
        <!--
         =========================================
         =                                       =
         =      start of data dashboard           =
         ========================================= -->
        <!-- start of  data dashboard panel -->
        <div class="tab-pane tb fade show active" id="datadashboard-md" role="tabpanel" aria-labelledby="datadashboard-tab-md">


            <div class="row">
                <div class="col-lg-3">
                    <div class="card">
                        <div class="card-content table-responsive">
                            <h5 class="title">New Notifications</h5>
                            <br />
                            <ul class="list-group">
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <svg width="3em" height="2em" viewBox="0 0 16 16" class="bi bi-file-easel" fill="#0488ae" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M4 0h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2zm0 1a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H4z" />
                                        <path d="M8.5 5a.5.5 0 1 0-1 0h1zm1.527 5H8.973l.553 1.658a.5.5 0 1 0 .948-.316L10.027 10zM8.5 10h-1v1a.5.5 0 0 0 1 0v-1zm-1.473 0H5.973l-.447 1.342a.5.5 0 1 0 .948.316L7.027 10z" />
                                        <path fill-rule="evenodd" d="M4 6.5A1.5 1.5 0 0 1 5.5 5h5A1.5 1.5 0 0 1 12 6.5v2a1.5 1.5 0 0 1-1.5 1.5h-5A1.5 1.5 0 0 1 4 8.5v-2zM5.5 6a.5.5 0 0 0-.5.5v2a.5.5 0 0 0 .5.5h5a.5.5 0 0 0 .5-.5v-2a.5.5 0 0 0-.5-.5h-5z" />
                                    </svg>
                                    Pending Reports
                                    <span class="badge badge-danger badge-pill">14</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <svg width="3em" height="2em" viewBox="0 0 16 16" class="bi bi-file-easel" fill="#0488ae" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M4 0h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2zm0 1a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H4z" />
                                        <path d="M8.5 5a.5.5 0 1 0-1 0h1zm1.527 5H8.973l.553 1.658a.5.5 0 1 0 .948-.316L10.027 10zM8.5 10h-1v1a.5.5 0 0 0 1 0v-1zm-1.473 0H5.973l-.447 1.342a.5.5 0 1 0 .948.316L7.027 10z" />
                                        <path fill-rule="evenodd" d="M4 6.5A1.5 1.5 0 0 1 5.5 5h5A1.5 1.5 0 0 1 12 6.5v2a1.5 1.5 0 0 1-1.5 1.5h-5A1.5 1.5 0 0 1 4 8.5v-2zM5.5 6a.5.5 0 0 0-.5.5v2a.5.5 0 0 0 .5.5h5a.5.5 0 0 0 .5-.5v-2a.5.5 0 0 0-.5-.5h-5z" />
                                    </svg>
                                    Pending Retirements
                                    <span class="badge badge-danger badge-pill">6</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <svg width="3em" height="2em" viewBox="0 0 16 16" class="bi bi-inbox" fill="#0488ae" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M4.98 4a.5.5 0 0 0-.39.188L1.54 8H6a.5.5 0 0 1 .5.5 1.5 1.5 0 1 0 3 0A.5.5 0 0 1 10 8h4.46l-3.05-3.812A.5.5 0 0 0 11.02 4H4.98zm9.954 5H10.45a2.5 2.5 0 0 1-4.9 0H1.066l.32 2.562a.5.5 0 0 0 .497.438h12.234a.5.5 0 0 0 .496-.438L14.933 9zM3.809 3.563A1.5 1.5 0 0 1 4.981 3h6.038a1.5 1.5 0 0 1 1.172.563l3.7 4.625a.5.5 0 0 1 .105.374l-.39 3.124A1.5 1.5 0 0 1 14.117 13H1.883a1.5 1.5 0 0 1-1.489-1.314l-.39-3.124a.5.5 0 0 1 .106-.374l3.7-4.625z" />
                                    </svg>
                                    New Advance requests
                                    <span class="badge badge-danger badge-pill">2</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <svg width="3em" height="2em" viewBox="0 0 16 16" class="bi bi-person-check" fill="#0488ae" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M8 5a2 2 0 1 1-4 0 2 2 0 0 1 4 0zM6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm6 5c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10zm4.854-7.85a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L12.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z" />
                                    </svg>
                                    New Grantees
                                    <span class="badge badge-danger badge-pill">1</span>
                                </li>

                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <svg width="3em" height="2em" viewBox="0 0 16 16" class="bi bi-file-earmark-person" fill="#0488ae" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4 0h5.5v1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4.5h1V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2z" />
                                        <path d="M9.5 3V0L14 4.5h-3A1.5 1.5 0 0 1 9.5 3z" />
                                        <path fill-rule="evenodd" d="M8 11a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                                        <path d="M8 12c4 0 5 1.755 5 1.755V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1v-.245S4 12 8 12z" />
                                    </svg>
                                    New Scholars
                                    <span class="badge badge-danger badge-pill">1</span>
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
                                    <svg width="6em" height="6em" viewBox="0 0 16 16" class="bi bi-file-earmark-check" fill="#0488ae" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4 0h5.5v1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4.5h1V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2z" />
                                        <path d="M9.5 3V0L14 4.5h-3A1.5 1.5 0 0 1 9.5 3z" />
                                        <path fill-rule="evenodd" d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0z" />
                                    </svg>
                                    <br />
                                    <br />
                                    Reports generated
                                </div>

                                <div class="col-md-3">
                                    <svg width="6em" height="6em" viewBox="0 0 16 16" class="bi bi-arrow-left-right" fill="#ACE4AA" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M1 11.5a.5.5 0 0 0 .5.5h11.793l-3.147 3.146a.5.5 0 0 0 .708.708l4-4a.5.5 0 0 0 0-.708l-4-4a.5.5 0 0 0-.708.708L13.293 11H1.5a.5.5 0 0 0-.5.5zm14-7a.5.5 0 0 1-.5.5H2.707l3.147 3.146a.5.5 0 1 1-.708.708l-4-4a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 4H14.5a.5.5 0 0 1 .5.5z" />
                                    </svg>
                                    <br />
                                    <br />
                                    Payment Requests Completed


                                </div>
                                <div class="col-md-3">
                                    <svg width="6em" height="6em" viewBox="0 0 16 16" class="bi bi-file-earmark-person" fill="#795548" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4 0h5.5v1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4.5h1V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2z" />
                                        <path d="M9.5 3V0L14 4.5h-3A1.5 1.5 0 0 1 9.5 3z" />
                                        <path fill-rule="evenodd" d="M8 11a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                                        <path d="M8 12c4 0 5 1.755 5 1.755V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1v-.245S4 12 8 12z" />
                                    </svg>
                                    <br />
                                    <br />
                                    Total Number of Scholars
                                </div>
                                <div class="col-md-3">
                                    <svg width="6em" height="6em" viewBox="0 0 16 16" class="bi bi-person-check-fill" fill="#795548" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm9.854-2.854a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L12.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z" />
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
                                    <svg width="6em" height="6em" viewBox="0 0 16 16" class="bi bi-clipboard-x" fill="#f44336" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z" />
                                        <path fill-rule="evenodd" d="M9.5 1h-3a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3zm-.354 7.146a.5.5 0 0 1 .708 0L8 8.293l1.146-1.147a.5.5 0 1 1 .708.708L8.707 9l1.147 1.146a.5.5 0 0 1-.708.708L8 9.707l-1.146 1.147a.5.5 0 0 1-.708-.708L7.293 9 6.146 7.854a.5.5 0 0 1 0-.708z" />
                                    </svg>
                                    <br />
                                    <br />
                                    Reports Past Due
                                </div>

                                <div class="col-md-3">
                                    <svg width="6em" height="6em" viewBox="0 0 16 16" class="bi bi-journal-x" fill="#f44336" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z" />
                                        <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z" />
                                        <path fill-rule="evenodd" d="M6.146 6.146a.5.5 0 0 1 .708 0L8 7.293l1.146-1.147a.5.5 0 1 1 .708.708L8.707 8l1.147 1.146a.5.5 0 0 1-.708.708L8 8.707 6.854 9.854a.5.5 0 0 1-.708-.708L7.293 8 6.146 6.854a.5.5 0 0 1 0-.708z" />
                                    </svg>
                                    <br />
                                    <br />
                                    Request Disapproved


                                </div>
                                <div class="col-md-3">
                                    <svg width="6em" height="6em" viewBox="0 0 16 16" class="bi bi-award-fill" fill="#fbc02d" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8 0l1.669.864 1.858.282.842 1.68 1.337 1.32L13.4 6l.306 1.854-1.337 1.32-.842 1.68-1.858.282L8 12l-1.669-.864-1.858-.282-.842-1.68-1.337-1.32L2.6 6l-.306-1.854 1.337-1.32.842-1.68L6.331.864 8 0z" />
                                        <path d="M4 11.794V16l4-1 4 1v-4.206l-2.018.306L8 13.126 6.018 12.1 4 11.794z" />
                                    </svg>
                                    <br />
                                    <br />
                                    Total Grantees Funding
                                </div>
                                <div class="col-md-3">
                                    <svg width="6em" height="6em" viewBox="0 0 16 16" class="bi bi-bag-fill" fill="#cddc39" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M8 1a2.5 2.5 0 0 0-2.5 2.5V4h5v-.5A2.5 2.5 0 0 0 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5z" />
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
                                    <input class="form-control" type="text" placeholder="title">
                                </div>
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
                                            <a class="nav-item nav-link active" id="nav-rfexec-tab" data-toggle="tab" href="#nav-rfexec" role="tab" aria-controls="nav-rfexec" aria-selected="true">
                                                Request from Executive director
                                                <span class="badge badge-danger badge-pill">3</span>
                                            </a>
                                            <a class="nav-item nav-link" id="nav-rfstaff-tab" data-toggle="tab" href="#nav-rfstaff" role="tab" aria-controls="nav-rfstaff" aria-selected="false">
                                                Request from Staff
                                                <span class="badge badge-danger badge-pill">4</span>
                                            </a>
                                            <a class="nav-item nav-link" id="nav-allreq-tab" data-toggle="tab" href="#nav-allreq" role="tab" aria-controls="nav-allreq" aria-selected="false">
                                                All Request
                                                <span class="badge badge-danger badge-pill">7</span>
                                            </a>
                                        </div>
                                    </nav>

                                    <div class="tab-content" id="nav-tabContent">
                                        <div class="tab-pane fade show active" id="nav-rfexec" role="tabpanel" aria-labelledby="nav-rfexec-tab">
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
                                        <div class="tab-pane fade" id="nav-rfstaff" role="tabpanel" aria-labelledby="nav-rfstaff-tab">
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
                                        <div class="tab-pane fade" id="nav-allreq" role="tabpanel" aria-labelledby="nav-allreq-tab">
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
                            <p>There are 12 total reports with <strong><span class="badge badge-danger badge-pill">2</span>
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
                            <p>There are <strong>12</strong> total reports with <strong><span class="badge badge-danger badge-pill">2</span> pending reports</strong></p>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-check2-all" fill="#ACE4AA" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M12.354 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z" />
                                        <path d="M6.25 8.043l-.896-.897a.5.5 0 1 0-.708.708l.897.896.707-.707zm1 2.414l.896.897a.5.5 0 0 0 .708 0l7-7a.5.5 0 0 0-.708-.708L8.5 10.293l-.543-.543-.707.707z" />
                                    </svg>
                                    Bank Reconcilliation
                                </li>
                                <li class="list-group-item">
                                    <svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-check2-all" fill="#ACE4AA" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M12.354 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z" />
                                        <path d="M6.25 8.043l-.896-.897a.5.5 0 1 0-.708.708l.897.896.707-.707zm1 2.414l.896.897a.5.5 0 0 0 .708 0l7-7a.5.5 0 0 0-.708-.708L8.5 10.293l-.543-.543-.707.707z" />
                                    </svg>
                                    Petty Cash Reconcilliation
                                </li>
                                <li class="list-group-item">
                                    <svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-x-circle" fill="#f44336" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                        <path fill-rule="evenodd" d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                                    </svg>
                                    Financial Report
                                </li>
                                <li class="list-group-item">
                                    <svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-check2-all" fill="#ACE4AA" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M12.354 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z" />
                                        <path d="M6.25 8.043l-.896-.897a.5.5 0 1 0-.708.708l.897.896.707-.707zm1 2.414l.896.897a.5.5 0 0 0 .708 0l7-7a.5.5 0 0 0-.708-.708L8.5 10.293l-.543-.543-.707.707z" />
                                    </svg>
                                    SP-NSSF
                                </li>
                                <li class="list-group-item">
                                    <svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-check2-all" fill="#ACE4AA" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M12.354 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z" />
                                        <path d="M6.25 8.043l-.896-.897a.5.5 0 1 0-.708.708l.897.896.707-.707zm1 2.414l.896.897a.5.5 0 0 0 .708 0l7-7a.5.5 0 0 0-.708-.708L8.5 10.293l-.543-.543-.707.707z" />
                                    </svg>
                                    SP-SDL
                                </li>
                                <li class="list-group-item">
                                    <svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-x-circle" fill="#f44336" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                        <path fill-rule="evenodd" d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                                    </svg>
                                    SP-Payee
                                </li>
                                <li class="list-group-item">
                                    <svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-check2-all" fill="#ACE4AA" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M12.354 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z" />
                                        <path d="M6.25 8.043l-.896-.897a.5.5 0 1 0-.708.708l.897.896.707-.707zm1 2.414l.896.897a.5.5 0 0 0 .708 0l7-7a.5.5 0 0 0-.708-.708L8.5 10.293l-.543-.543-.707.707z" />
                                    </svg>
                                    SP-Withholding Task
                                </li>
                                <li class="list-group-item">
                                    <svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-check2-all" fill="#ACE4AA" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M12.354 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z" />
                                        <path d="M6.25 8.043l-.896-.897a.5.5 0 1 0-.708.708l.897.896.707-.707zm1 2.414l.896.897a.5.5 0 0 0 .708 0l7-7a.5.5 0 0 0-.708-.708L8.5 10.293l-.543-.543-.707.707z" />
                                    </svg>
                                    SP-WCF
                                </li>
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
                            <p>There are 18 total <strong>Staff</strong> with <strong><span class="badge badge-danger badge-pill">6</span> pending timesheet
                                    un-completed</strong></p>
                            <br />
                            <br />
                            <nav>
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <a class="nav-item nav-link active" id="nav-task-collection-tab" data-toggle="tab" href="#nav-task-collection" role="tab" aria-controls="nav-task-collection" aria-selected="true">Task Collection</a>
                                    <a class="nav-item nav-link" id="nav-timesheet-tab" data-toggle="tab" href="#nav-timesheet" role="tab" aria-controls="nav-profile" aria-selected="false">Time-Sheet</a>
                                    <a class="nav-item nav-link" id="nav-payroll-tab" data-toggle="tab" href="#nav-payroll" role="tab" aria-controls="nav-payroll" aria-selected="false">Payroll</a>
                                </div>
                            </nav>
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="nav-task-collection" role="tabpanel" aria-labelledby="nav--task-collection-tab">
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
                                <div class="tab-pane fade" id="nav-timesheet" role="tabpanel" aria-labelledby="nav-timesheet-tab">
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
                                <div class="tab-pane fade" id="nav-payroll" role="tabpanel" aria-labelledby="nav-payroll-tab">
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
               =             start of financial adminstration data =
               ========================================= -->

        <div class="tab-pane tb fade" id="finance-admin-content" role="tabpanel" aria-labelledby="finance-admin-tab-md">
            {{-- financial administration --}}
            <div class="row">
                <div class="col-md-2">
                    <div class="nav flex-column nav-pills" id="vds-finance-main-pills-tab" role="tablist" aria-orientation="vertical">
                        <a class="nav-link active" id="finance-pills-bank-accounts-tab" data-toggle="pill" href="#finance-pills-bank-accounts-content" role="tab" aria-controls="" aria-selected="true">Bank Accounts</a>

                        <a class="nav-link" id="finance-pills-funds-tab" data-toggle="pill" href="#finance-pills-funds-content" role="tab" aria-controls="finance-pills-funds-tab" aria-selected="false">Fund allocation</a>

                        <a class="nav-link" id="vds-ds-grantees-pills-pitched-tab" data-toggle="pill" href="#finance-pills-financial-reports-content" role="tab" aria-controls="vdsreqs-pills-pitched" aria-selected="false">Financial reports</a>

                    </div>
                </div>
                <div class="col-md-10">

                    <div class="tab-content" id="vds-ds-impr-pills-tabContent">
                        <div class="tab-pane fade show active" id="finance-pills-bank-accounts-content" role="tabpanel" aria-labelledby="impr-pills-home-tab">
                            {{-- my retirements --}}

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-content table-responsive">
                                            <br />
                                            <br />
                                            <table class="table table-bordered table-hover">
                                                <p><strong>New Applicants.</strong></p>
                                                <thead>
                                                    <tr>
                                                        <th scope="col">#</th>
                                                        <th scope="col">Requested by</th>
                                                        <th scope="col-md-4">Title</th>
                                                        <th scope="col">Request Type</th>
                                                        <th scope="col">Under Project</th>
                                                        <th scope="col"># of approvals</th>
                                                        <th scope="col">Total Cost</th>
                                                        <th scope="col">Date created</th>

                                                        <th scope="col"></th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th scope="row">1</th>
                                                        <td>MarkCuban</td>
                                                        <td>Data visualisation in Mbeya</td>
                                                        <td>Training</td>
                                                        <td>Sauti Mpya</td>
                                                        <td>0</td>
                                                        <td>2,300,000 <span class="badge badge-success">TZS</span>
                                                        </td>
                                                        <td>2019-09-11</td>
                                                        <td>
                                                            <button type="button" class="btn btn-outline-success">view
                                                                request</button>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <th scope="row">4</th>
                                                        <td>Jane Sharpe</td>
                                                        <td>Data Mining in Dar</td>
                                                        <td>Training</td>
                                                        <td>Data Zetu</td>
                                                        <td>0</td>
                                                        <td>6,600,000 <span class="badge badge-success">TZS</span>
                                                        </td>
                                                        <td>2019-09-11</td>
                                                        <td>
                                                            <button type="button" class="btn btn-outline-success">view
                                                                request</button>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <th scope="row">3</th>
                                                        <td>Mary Poppins</td>
                                                        <td>Data Analyis and Mining</td>
                                                        <td>Training</td>
                                                        <td>Sauti Mpya</td>
                                                        <td>0</td>
                                                        <td>8,700,000 <span class="badge badge-success">TZS</span>
                                                        </td>
                                                        <td>2019-09-11</td>
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
                                    <!-- end of SECOND column -->
                                </div>

                            </div>
                        </div>
                        <div class="tab-pane fade" id="finance-pills-funds-content" role="tabpanel" aria-labelledby="vdsreqs-pills-profile-tab">
                            {{-- my retirements --}}
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-content table-responsive">
                                            <br />
                                            <table class="table table-bordered table-hover">
                                                <p><strong>Applicants Shortlisted</strong></p>
                                                <thead>
                                                    <tr>
                                                        <th scope="col">#</th>
                                                        <th scope="col">Requested by</th>
                                                        <th scope="col-md-4">Title</th>
                                                        <th scope="col">Request Type</th>
                                                        <th scope="col">Under Project</th>
                                                        <th scope="col"># of approvals</th>
                                                        <th scope="col">Total Cost</th>
                                                        <th scope="col">Date created</th>

                                                        <th scope="col"></th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th scope="row">1</th>
                                                        <td>MarkCuban</td>
                                                        <td>Data visualisation in Mbeya</td>
                                                        <td>Training</td>
                                                        <td>Sauti Mpya</td>
                                                        <td>0</td>
                                                        <td>2,300,000 <span class="badge badge-success">TZS</span>
                                                        </td>
                                                        <td>2019-09-11</td>
                                                        <td>
                                                            <button type="button" class="btn btn-outline-success">view
                                                                request</button>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <th scope="row">4</th>
                                                        <td>Jane Sharpe</td>
                                                        <td>Data Mining in Dar</td>
                                                        <td>Training</td>
                                                        <td>Data Zetu</td>
                                                        <td>0</td>
                                                        <td>6,600,000 <span class="badge badge-success">TZS</span>
                                                        </td>
                                                        <td>2019-09-11</td>
                                                        <td>
                                                            <button type="button" class="btn btn-outline-success">view
                                                                request</button>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <th scope="row">3</th>
                                                        <td>Mary Poppins</td>
                                                        <td>Data Analyis and Mining</td>
                                                        <td>Training</td>
                                                        <td>Sauti Mpya</td>
                                                        <td>0</td>
                                                        <td>8,700,000 <span class="badge badge-success">TZS</span>
                                                        </td>
                                                        <td>2019-09-11</td>
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
                                    <!-- end of SECOND column -->
                                </div>

                            </div>
                        </div>

                        <div class="tab-pane fade" id="finance-pills-financial-reports-content" role="tabpanel" aria-labelledby="vdsreqs-pills-settings-tab">
                            {{-- my retirements --}}
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-content table-responsive">
                                            <br />
                                            <table class="table table-bordered table-hover">
                                                <p>
                                                    <strong>Financial reports.</strong>
                                                </p>

                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#newDSimprest">
                                                    create new report
                                                </button>
                                                <thead>
                                                    <tr>
                                                        <th scope="col">#</th>
                                                        <th scope="col">Requested by</th>
                                                        <th scope="col-md-4">Title</th>
                                                        <th scope="col">Request Type</th>
                                                        <th scope="col">Under Project</th>
                                                        <th scope="col"># of approvals</th>
                                                        <th scope="col">Total Cost</th>
                                                        <th scope="col">Date created</th>

                                                        <th scope="col"></th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th scope="row">1</th>
                                                        <td>MarkCuban</td>
                                                        <td>Data visualisation in Mbeya</td>
                                                        <td>Training</td>
                                                        <td>Sauti Mpya</td>
                                                        <td>0</td>
                                                        <td>2,300,000 <span class="badge badge-success">TZS</span>
                                                        </td>
                                                        <td>2019-09-11</td>
                                                        <td>
                                                            <button type="button" class="btn btn-outline-success">view
                                                                request</button>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <th scope="row">4</th>
                                                        <td>Jane Sharpe</td>
                                                        <td>Data Mining in Dar</td>
                                                        <td>Training</td>
                                                        <td>Data Zetu</td>
                                                        <td>0</td>
                                                        <td>6,600,000 <span class="badge badge-success">TZS</span>
                                                        </td>
                                                        <td>2019-09-11</td>
                                                        <td>
                                                            <button type="button" class="btn btn-outline-success">view
                                                                request</button>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <th scope="row">3</th>
                                                        <td>Mary Poppins</td>
                                                        <td>Data Analyis and Mining</td>
                                                        <td>Training</td>
                                                        <td>Sauti Mpya</td>
                                                        <td>0</td>
                                                        <td>8,700,000 <span class="badge badge-success">TZS</span>
                                                        </td>
                                                        <td>2019-09-11</td>
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
                                    <!-- end of SECOND column -->
                                </div>

                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- end of finance adminstration data column -->


        <!-- =========================================
               =                                       =
               =             start of financial pillar adminstration data =
               ========================================= -->

        <div class="tab-pane tb fade" id="finance-pillars-content" role="tabpanel" aria-labelledby="finance-admin-tab-md">
            {{-- financial pillar administration --}}

            <div class="row">
                <div class="col-lg-12">

                    <nav>
                        <div class="nav nav-tabs" id="finance-pillars-nav-tab" role="tablist">
                            <a class="nav-item nav-link active" id="finance-pillars-nav-ds-tab" data-toggle="tab" href="#finance-pillars-nav-ds-content" role="tab" aria-controls="finance-pillars-nav-ds" aria-selected="true">
                                Data Science</a>

                            <a class="nav-item nav-link" id="finance-pillars-nav-ce-tab" data-toggle="tab" href="#finance-pillars-nav-ce-content" role="tab" aria-controls="finance-pillars-nav-ce" aria-selected="true">
                                Community Engagement</a>

                            <a class="nav-item nav-link" id="finance-pillars-nav-cb-tab" data-toggle="tab" href="#finance-pillars-nav-cb-content" role="tab" aria-controls="finance-pillars-nav-cb" aria-selected="true">
                                Capacity Building</a>

                            <a class="nav-item nav-link" id="finance-pillars-nav-ri-tab" data-toggle="tab" href="#finance-pillars-nav-ri-content" role="tab" aria-controls="finance-pillars-nav-ri" aria-selected="true">
                                Research and Innovation</a>

                            <a class="nav-item nav-link" id="finance-pillars-nav-is-tab" data-toggle="tab" href="#finance-pillars-nav-is-content" role="tab" aria-controls="finance-pillars-nav-is" aria-selected="true">
                                Institutional Stregthening</a>

                            <a class="nav-item nav-link" id="finance-pillars-nav-cc-tab" data-toggle="tab" href="#finance-pillars-nav-cc-content" role="tab" aria-controls="finance-pillars-nav-cc" aria-selected="true">
                                Communication Channels</a>

                        </div>
                    </nav>
                    <div class="tab-content" id="ds-tms-nav-tabContent">
                        <div class="tab-pane fade show active" id="finance-pillars-nav-ds-content" role="tabpanel" aria-labelledby="finance-pillars-nav-dc-tab">
                            <br />

                            <div class="row">
                                <div class="col-md-2">
                                    <div class="nav flex-column nav-pills" id="vds-finance-pillars-pills-ds-tab" role="tablist" aria-orientation="vertical">
                                        <a class="nav-link active" id="pillars-pills-ds-requests-tab" data-toggle="pill" href="#pillars-pills-ds-requests-content" role="tab" aria-controls="" aria-selected="true">Requests</a>

                                        <a class="nav-link" id="pillars-pills-ds-projects-tab" data-toggle="pill" href="#pillars-pills-ds-projects-content" role="tab" aria-controls="pillars-pills-ds-content-tab" aria-selected="false">Projects</a>

                                        <a class="nav-link" id="pillars-pills-ds-imprests-tab" data-toggle="pill" href="#pillars-pills-ds-imprests-content" role="tab" aria-controls="pillars-pills-funds-tab" aria-selected="false">Imprests</a>


                                        <a class="nav-link" id="pillars-pills-ds-activities-tab" data-toggle="pill" href="#pillars-pills-ds-activities-content" role="tab" aria-controls="pillars-pills-funds-tab" aria-selected="false">Activities</a>

                                        <a class="nav-link" id="pillars-pills-ds-sub-activities-tab" data-toggle="pill" href="#pillars-pills-ds-sub-activities-content" role="tab" aria-controls="pillars-pills-funds-tab" aria-selected="false">Sub Activities</a>



                                    </div>
                                </div>
                                <div class="col-md-10">

                                    <div class="tab-content" id="vds-finance-pillars-pills-tabContent">
                                        <div class="tab-pane fade show active" id="pillars-pills-ds-requests-content" role="tabpanel" aria-labelledby="pills-finance-pillars-tab">
                                            {{-- my retirements --}}

                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="card">
                                                        <div class="card-content table-responsive">
                                                            <br />
                                                            <table class="table table-bordered table-hover">
                                                                <p><strong>Data Science requests.</strong></p>
                                                                <thead>
                                                                    <tr>
                                                                        <th scope="col">#</th>
                                                                        <th scope="col">Requested by</th>
                                                                        <th scope="col-md-4">Title</th>
                                                                        <th scope="col">Request Type</th>
                                                                        <th scope="col">Under Project</th>
                                                                        <th scope="col"># of approvals</th>
                                                                        <th scope="col">Total Cost</th>
                                                                        <th scope="col">Date created</th>

                                                                        <th scope="col"></th>

                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <th scope="row">1</th>
                                                                        <td>MarkCuban</td>
                                                                        <td>Data visualisation in Mbeya</td>
                                                                        <td>Training</td>
                                                                        <td>Sauti Mpya</td>
                                                                        <td>0</td>
                                                                        <td>2,300,000 <span class="badge badge-success">TZS</span>
                                                                        </td>
                                                                        <td>2019-09-11</td>
                                                                        <td>
                                                                            <button type="button" class="btn btn-outline-success">view
                                                                                request</button>
                                                                        </td>
                                                                    </tr>

                                                                    <tr>
                                                                        <th scope="row">4</th>
                                                                        <td>Jane Sharpe</td>
                                                                        <td>Data Mining in Dar</td>
                                                                        <td>Training</td>
                                                                        <td>Data Zetu</td>
                                                                        <td>0</td>
                                                                        <td>6,600,000 <span class="badge badge-success">TZS</span>
                                                                        </td>
                                                                        <td>2019-09-11</td>
                                                                        <td>
                                                                            <button type="button" class="btn btn-outline-success">view
                                                                                request</button>
                                                                        </td>
                                                                    </tr>

                                                                    <tr>
                                                                        <th scope="row">3</th>
                                                                        <td>Mary Poppins</td>
                                                                        <td>Data Analyis and Mining</td>
                                                                        <td>Training</td>
                                                                        <td>Sauti Mpya</td>
                                                                        <td>0</td>
                                                                        <td>8,700,000 <span class="badge badge-success">TZS</span>
                                                                        </td>
                                                                        <td>2019-09-11</td>
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
                                                    <!-- end of SECOND column -->
                                                </div>

                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="pillars-pills-ds-projects-content" role="tabpanel" aria-labelledby="vdsreqs-pills-profile-tab">
                                            {{-- my retirements --}}
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="card">
                                                        <div class="card-content table-responsive">
                                                            <br />
                                                            @php
                                                            use App\Support\CollectionHelper;
                                                            $dsproject=CollectionHelper::paginate($projects->where('pillar_ref_id',5),2);
                                                            $ds=1;
                                                            @endphp
                                                            @if(count($dsproject)==0)
                                                            <div class="d-flex p-2 bg-info justify-content-center">No Projects Found!</div>
                                                            @else

                                                            <table class="table table-bordered table-hover">
                                                                <p><strong>Data Science Projects</strong></p>
                                                                <thead>

                                                                    <tr>
                                                                        <th scope="col">#</th>
                                                                        <th scope="col">Created by</th>
                                                                        <th scope="col-md-4">Title</th>

                                                                        <th scope="col">Total Cost</th>
                                                                        <th scope="col">Lead</th>
                                                                        <th scope="col"># of approval</th>
                                                                        <th scope="col">Date created</th>
                                                                        <th scope="col"></th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    @foreach($dsproject as $pro)

                                                                    <tr>
                                                                        <th scope="row">{{$ds}}</th>
                                                                        <td>{{$pro->user->fname}} {{$pro->user->lname }}</td>
                                                                        <td>{{$pro->project_title }}</td>
                                                                        <td>{{$pro->total_project_cost}}
                                                                            <span class="badge badge-success">TZS</span>
                                                                        </td>
                                                                        <td class=" ">{{ empty($pro->lead)?'none': $pro->lead }}</td>
                                                                        <td class="">{{ empty($pro->activities->where('approval_status','approved'))?'0':  count($pro->activities->where('approval_status','approved'))  }}</td>
                                                                        <td>{{$pro->created_at}}
                                                                        </td>
                                                                        <td class="w-30 p-2">
                                                                            <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#pr{{$pro->project_id }}"> Actions
                                                                            </button>
                                                                            <!-- Modal -->
                                                                            <div class="modal fade" id="pr{{$pro->project_id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" data-proj="{{ $pro->project_id }}" data-user="{{ Auth::user()->user_id }}">
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
                                                                                                    <a href="" class="btn  btn-outline-secondary d-flex justify-content-between">
                                                                                                        <i class="fas fa-chalkboard fa-lg mt-auto mb-auto"></i>
                                                                                                        <p class="m-auto">Review project</p>
                                                                                                    </a>

                                                                                                </li>
                                                                                                <li class="list-group-item">
                                                                                                    <a href="{{ route('pillar-project.show',   $pro->project_id)}}" class="btn btn-outline-success d-flex justify-content-between" data-bs-toggle="tooltip" data-bs-placement="top" title="view project full details">
                                                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                                                                                            <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                                                                                                            <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                                                                                                        </svg>
                                                                                                        <p class="m-auto">Project Details</p>
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
                                                                        </td>
                                                                    </tr>
                                                                    @php $ds++; @endphp
                                                                    @endforeach
                                                                </tbody>
                                                            </table>
                                                            <br />
                                                            <nav aria-label="Page navigation example">
                                                <ul class="pagination">

                                                    <li class="page-item">
                                                        <a class="page-link" href="{{ $dsproject->previousPageUrl() }}">
                                                            <span aria-hidden="true">&laquo;</span>
                                                            <span class="sr-only">Previous</span>
                                                        </a>
                                                    </li>

                                                    @for ($i = 1; $i <= $dsproject->lastPage(); $i++)

                                                        <li class="page-item {{$dsproject->currentPage() == $i ? 'active' : ''}}">
                                                            <a class="page-link" href="{{ $dsproject->url($i) }}">{{$i}}
                                                            </a>
                                                        </li>
                                                        @endfor

                                                        <li class="page-item">
                                                            <a class="page-link" href="{{ $dsproject->nextPageUrl() }}">Next
                                                            </a>
                                                        </li>
                                                </ul>
                                            </nav>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <!-- end of SECOND column -->
                                                </div>

                                            </div>
                                        </div>

                                        <div class="tab-pane fade" id="pillars-pills-ds-imprests-content" role="tabpanel" aria-labelledby="vdsreqs-pills-settings-tab">
                                            {{-- data science imprests --}}
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    @php
                                                    $dsimprest=$imprests->where('pillar_id',5);
                                                    @endphp
                                                    @if(count($dsimprest)==0)
                                                    <div class="d-flex p-2 justify-content-center">No Record Found!</div>
                                                    @else
                                                    <table class="table table-bordered table-hover">
                                                        <p>All created <strong>imprest</strong> in Data science Pillar</p>
                                                        <thead>
                                                            <tr>
                                                                <th scope="col">#</th>
                                                                <th scope="col">Requested by</th>
                                                                <th scope="col">Title</th>
                                                                <th scope="col">Current Stage</th>
                                                                <th scope="col">Status</th>
                                                                <th scope="col">Total Cost</th>
                                                                <th scope="col">Date created</th>

                                                                <th scope="col"></th>

                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @php $n=1;@endphp

                                                            @foreach($dsimprest as $imp)
                                                            <tr>
                                                                <th scope="row">{{$n}}.</th>
                                                                <td>{{$imp->requestedby->fname}}</td>
                                                                <td>{{$imp->imp_title}}</td>
                                                                <td>  {{$imp->current_stage}}</td>
                                                                <td>{{$imp->status}}</td>
                                                                <td>{{$imp->amount_rqst}}</td>
                                                                <td>{{$imp->created_at->format('Y-m-d') }}</span>
                                                                </td>

                                                                <td class=" p-2">
                                                                    <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#rq{{$imp->id}}"> Actions
                                                                    </button>
                                                                    <!-- Modal -->
                                                                    <div class="modal fade" id="rq{{$imp->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header">

                                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                        <span aria-hidden="true">&times;</span>
                                                                                    </button>
                                                                                </div>
                                                                                <div class="modal-body">
                                                                                    <ul class="list-group-flush">

                                                                                        <li class="list-group-item">
                                                                                            <a href="{{ route('imprest.show',   $imp->id)}}" class="btn btn-outline-success d-flex justify-content-between" data-bs-toggle="tooltip" data-bs-placement="top" title="view project full details">
                                                                                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                                                                                    <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                                                                                                    <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                                                                                                </svg>
                                                                                                <p class="m-auto">Imprest Details </p>
                                                                                            </a>

                                                                                        </li>
                                                                                        <li class="list-group-item">
                                                                                            <a class="btn btn-outline-info btn-md d-flex justify-content-between" data-toggle="modal" data-dismiss="modal" data-target="#rev{{$imp->id}}">
                                                                                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-arrow-up-circle" viewBox="0 0 16 16">
                                                                                                    <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-7.5 3.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V11.5z" />
                                                                                                </svg>
                                                                                                <p class="m-auto">Review Imprest </p>
                                                                                            </a>
                                                                                        </li>
                                                                                        <li class="list-group-item">
                                                                                            <a href="{{ route('retireshow',   $imp->id)}}" class="btn btn-outline-success d-flex justify-content-between" data-bs-toggle="tooltip" data-bs-placement="top" title="view project full details">
                                                                                                <i class="fas fa-marker fa-2x"></i>
                                                                                                <p class="m-auto">Review Retirements</p>
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
                                                                    <div class="modal fade" id="rev{{$imp->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                                        <div class="modal-dialog " role="document">
                                                                            <form action="{{route('imprestreview')}}" method="post">
                                                                                @csrf
                                                                                <div class="modal-content">
                                                                                    <div class="modal-header text-light bg-primary">
                                                                                        <h6>Imprest Review: {{$imp->imp_title}} </h6>
                                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                            <span aria-hidden="true">&times;</span>
                                                                                        </button>
                                                                                    </div>
                                                                                    <div class="modal-body">
                                                                                        <input type="hidden" value="{{$imp->id }}" name="imprest_id">

                                                                                        <div class="form-group input-group-lg">
                                                                                            <label for="status">Choose Remark</label>
                                                                                            <select class="form-control form-group col-lg-12" onchange="countrychange(this)" aria-label="Large" id="selectProject" name="status" aria-describedby="inputGroup-sizing-sm">
                                                                                                <option value="">Select Action</option>
                                                                                                <option value="Denied">Denied</option>
                                                                                                <option value="Approved">Approved</option>
                                                                                                <option value="On review">On review</option>
                                                                                            </select>
                                                                                        </div>

                                                                                        <div class="form-group  input-group-lg">
                                                                                            <div class="form-group green-border-focus">
                                                                                                <label for="fordeptBriefDescription">Comments
                                                                                                </label>
                                                                                                <textarea class="form-control" name="comments" rows="8" required></textarea>
                                                                                            </div>
                                                                                        </div>

                                                                                    </div>
                                                                                    <div class="modal-footer">
                                                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                                        <button type="submit" class="btn btn-success">Submit</button>
                                                                                    </div>
                                                                                </div>
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            @php $n++;@endphp
                                                            @endforeach


                                                        </tbody>

                                                    </table>

                                                    <br />
                                                    <br />
                                                    <nav aria-label="Page navigation example">
                                                        <ul class="pagination">
                                                            <li class="page-item">
                                                                <a class="page-link" href="#" aria-label="Previous">
                                                                    <span aria-hidden="true">&laquo;</span>
                                                                    <span class="sr-only">Previous</span>
                                                                </a>
                                                            </li>
                                                            <li class="page-item"><a class="page-link" href="#">1</a>
                                                            </li>
                                                            <li class="page-item"><a class="page-link" href="#">2</a>
                                                            </li>
                                                            <li class="page-item"><a class="page-link" href="#">3</a>
                                                            </li>
                                                            <li class="page-item">
                                                                <a class="page-link" href="#" aria-label="Next">
                                                                    <span aria-hidden="true">&raquo;</span>
                                                                    <span class="sr-only">Next</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </nav>
                                                    @endif
                                                    <!-- end of SECOND column -->
                                                </div>

                                            </div>

                                        </div>

                                        <div class="tab-pane fade" id="pillars-pills-ds-activities-content" role="tabpanel" aria-labelledby="pillars-pills-ds-activities-tab">
                                            {{-- data science activities --}}
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="card">
                                                        <div class="card-content table-responsive">
                                                            <br />

                                                            @php
                                                            $myact=$activities->where('pillar_ref_id',5);
                                                            $act=1;
                                                            @endphp
                                                            @if(count($myact)==0)
                                                            <div class="d-flex p-2 justify-content-center">No Record Found!</div>
                                                            @else
                                                            <table class="table table-bordered table-hover">
                                                                <p class="d-flex justify-content-between"><strong>All activities from Data science</strong>

                                                                </p>
                                                                <thead>
                                                                    <tr>
                                                                        <th scope="col">#</th>
                                                                        <th scope="col">Activity title</th>
                                                                        <th scope="col-md-4">Total Estimated cost</th>
                                                                        <th scope="col">current stage</th>
                                                                        <th scope="col">Status</th>
                                                                        <th scope="col">Date created</th>
                                                                        <th scope="col"></th>

                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    @foreach($myact as $myactiv)
                                                                    <tr>
                                                                        <th scope="row">{{ $act }}</th>
                                                                        <td class="w-30 p-2">{{ $myactiv->act_title }}</td>
                                                                        <td class="w-30 p-2">{{ $myactiv->total_act_cost }}</td>
                                                                        <td class="w-30  p-2">On review {{ $myactiv->current_stage }}</td>
                                                                        <td class="w-30  p-2">{{ $myactiv->review_status }}</td>
                                                                        <td class="w-10 p-2">{{ $myactiv->created_at }}</td>
                                                                        <td class="w-30 p-2">
                                                                            <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#act{{$myactiv->pillar_act_id}}"> Actions
                                                                            </button>
                                                                            <!-- Modal -->
                                                                            <div class="modal fade" id="act{{$myactiv->pillar_act_id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" data-proj="{{ $myactiv->pillar_act_id }}" data-user="{{ Auth::user()->user_id }}">
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
                                                                                                    <a href="{{ route('pillar-activity.show',   $myactiv->pillar_act_id)}}" class="btn btn-outline-success d-flex justify-content-between" data-bs-toggle="tooltip" data-bs-placement="top" title="view project full details">
                                                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                                                                                            <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                                                                                                            <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                                                                                                        </svg>
                                                                                                        <p class="m-auto">Activity Details</p>
                                                                                                    </a>

                                                                                                </li>
                                                                                                <li class="list-group-item">
                                                                                                    <a href="" class="btn btn-outline-info btn-md d-flex justify-content-between" data-bs-toggle="tooltip" data-bs-placement="top" title="view update project details">
                                                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-arrow-up-circle" viewBox="0 0 16 16">
                                                                                                            <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-7.5 3.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V11.5z" />
                                                                                                        </svg>
                                                                                                        <p class="m-auto">Review Activity </p>
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
                                                                        </td>
                                                                    </tr>
                                                                    @php $act++ @endphp
                                                                    @endforeach
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

                                                            @endif
                                                        </div>
                                                    </div>
                                                    <!-- end of SECOND column -->
                                                </div>

                                            </div>


                                        </div>

                                        <div class="tab-pane fade" id="pillars-pills-ds-sub-activities-content" role="tabpanel" aria-labelledby="pillars-pills-ds-sub-activities-tab">

                                            {{-- data science sub activities --}}
                                            <div class="col-lg-12">
                                                <div class="card">
                                                    <div class="card-content table-responsive">
                                                        <br />
                                                        @php
                                                        $mysubactivities=$subactivities->where('pillar_ref_id',5);
                                                        @endphp
                                                        @if(count($mysubactivities)==0)
                                                        <div class="d-flex p-2 justify-content-center">No Record Found!</div>
                                                        @else
                                                        <table class="table table-bordered table-hover">
                                                            <p class="d-flex justify-content-between"><strong>All SubActivitiesfrom Data science</strong>

                                                            </p>
                                                            <thead>
                                                                <tr>
                                                                    <th scope="col">#</th>
                                                                    <th scope="col">SubActivity title</th>
                                                                    <th scope="col-md-4">Total Estimated cost</th>
                                                                    <th scope="col">current stage</th>
                                                                    <th scope="col">status</th>
                                                                    <th scope="col">Date created</th>
                                                                    <th scope="col"></th>

                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @php $i=0;@endphp @foreach($mysubactivities as $myact)
                                                                @php $i++;@endphp <tr>
                                                                    <th scope="row">{{ $i}}</th>
                                                                    <td class="w-30 p-2">{{ $myact->subact_title }}</td>
                                                                    <td class="w-30 p-2">{{ $myact->total_subactivity_cost }}</td>
                                                                    <td class="w-30  p-2">{{ $myact->current_stage }}</td>
                                                                    <td class="w-30  p-2">{{ $myact->review_status }}</td>
                                                                    <td class="w-10 p-2">{{ $myact->created_at }}</td>
                                                                    <td class="w-30 p-2">
                                                                        <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#subact{{$myact->id}}"> Actions
                                                                        </button>
                                                                        <!-- Modal -->
                                                                        <div class="modal fade" id="subact{{$myact->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
                                                                                                <a href="{{ route('pillar-subactivity.show',$myact->id)}}" class="btn btn-outline-success d-flex justify-content-between" data-bs-toggle="tooltip" data-bs-placement="top" title="view project full details">
                                                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                                                                                        <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                                                                                                        <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                                                                                                    </svg>
                                                                                                    <p class="m-auto">SubActivity Details</p>
                                                                                                </a>

                                                                                            </li>
                                                                                            <li class="list-group-item">
                                                                                                <a href="" class="btn btn-outline-info btn-md d-flex justify-content-between" data-bs-toggle="tooltip" data-bs-placement="top" title="view update project details">
                                                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-arrow-up-circle" viewBox="0 0 16 16">
                                                                                                        <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-7.5 3.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V11.5z" />
                                                                                                    </svg>
                                                                                                    <p class="m-auto">Review SubActivity </p>
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
                                                                    </td>
                                                                </tr>
                                                                @endforeach
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
                                                        @endif
                                                    </div>
                                                </div>
                                                <!-- end of SECOND column -->
                                            </div>

                                        </div>

                                        <div class="tab-pane fade" id="pillars-pills-ds-retirements-content" role="tabpanel" aria-labelledby="pillars-pills-ds-retirements-tab">

                                            {{-- data science retirements --}}
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="card">
                                                        <div class="card-content table-responsive">
                                                            <br />
                                                            <table class="table table-bordered table-hover">
                                                                <p>
                                                                    <strong>Data Science Retirements.</strong>
                                                                </p>

                                                                <thead>
                                                                    <tr>
                                                                        <th scope="col">#</th>
                                                                        <th scope="col">Requested by</th>
                                                                        <th scope="col-md-4">Title</th>
                                                                        <th scope="col">Request Type</th>
                                                                        <th scope="col">Under Project</th>
                                                                        <th scope="col"># of approvals</th>
                                                                        <th scope="col">Total Cost</th>
                                                                        <th scope="col">Date created</th>

                                                                        <th scope="col"></th>

                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <th scope="row">1</th>
                                                                        <td>MarkCuban</td>
                                                                        <td>Data visualisation in Mbeya</td>
                                                                        <td>Training</td>
                                                                        <td>Sauti Mpya</td>
                                                                        <td>0</td>
                                                                        <td>2,300,000 <span class="badge badge-success">TZS</span>
                                                                        </td>
                                                                        <td>2019-09-11</td>
                                                                        <td>
                                                                            <button type="button" class="btn btn-outline-success">view
                                                                                request</button>
                                                                        </td>
                                                                    </tr>

                                                                    <tr>
                                                                        <th scope="row">4</th>
                                                                        <td>Jane Sharpe</td>
                                                                        <td>Data Mining in Dar</td>
                                                                        <td>Training</td>
                                                                        <td>Data Zetu</td>
                                                                        <td>0</td>
                                                                        <td>6,600,000 <span class="badge badge-success">TZS</span>
                                                                        </td>
                                                                        <td>2019-09-11</td>
                                                                        <td>
                                                                            <button type="button" class="btn btn-outline-success">view
                                                                                request</button>
                                                                        </td>
                                                                    </tr>

                                                                    <tr>
                                                                        <th scope="row">3</th>
                                                                        <td>Mary Poppins</td>
                                                                        <td>Data Analyis and Mining</td>
                                                                        <td>Training</td>
                                                                        <td>Sauti Mpya</td>
                                                                        <td>0</td>
                                                                        <td>8,700,000 <span class="badge badge-success">TZS</span>
                                                                        </td>
                                                                        <td>2019-09-11</td>
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
                                                    <!-- end of SECOND column -->
                                                </div>

                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="finance-pillars-nav-ce-content" role="tabpanel" aria-labelledby="finance-pillars-nav-ce-nav">
                            <br />
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="nav flex-column nav-pills" id="vds-finance-pillars-pills-tab" role="tablist" aria-orientation="vertical">
                                        <a class="nav-link active" id="pillars-pills-ce-requests-tab" data-toggle="pill" href="#pillars-pills-ce-requests-content" role="tab" aria-controls="" aria-selected="true">Requests</a>

                                        <a class="nav-link" id="pillars-pills-ce-projects-tab" data-toggle="pill" href="#pillars-pills-ce-projects-content" role="tab" aria-controls="pillars-pills-ce-content-tab" aria-selected="false">Projects</a>

                                        <a class="nav-link" id="pillars-pills-ce-imprests-tab" data-toggle="pill" href="#pillars-pills-ce-imprests-content" role="tab" aria-controls="pillars-pills-funds-tab" aria-selected="false">Imprests</a>


                                        <a class="nav-link" id="pillars-pills-ce-activities-tab" data-toggle="pill" href="#pillars-pills-ce-activities-content" role="tab" aria-controls="pillars-pills-funds-tab" aria-selected="false">Activities</a>

                                        <a class="nav-link" id="pillars-pills-ce-sub-activities-tab" data-toggle="pill" href="#pillars-pills-ce-sub-activities-content" role="tab" aria-controls="pillars-pills-funds-tab" aria-selected="false">Sub Activities</a>




                                    </div>
                                </div>
                                <div class="col-md-10">

                                    <div class="tab-content" id="ce-finance-pillars-pills-tabContent">

                                        <div class="tab-pane fade show active" id="pillars-pills-ce-requests-content" role="tabpanel" aria-labelledby="pills-finance-pillars-tab">
                                            {{-- my retirements --}}

                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="card">
                                                        <div class="card-content table-responsive">
                                                            <br />
                                                            <table class="table table-bordered table-hover">
                                                                <p><strong>Data Science requests.</strong></p>
                                                                <thead>
                                                                    <tr>
                                                                        <th scope="col">#</th>
                                                                        <th scope="col">Requested by</th>
                                                                        <th scope="col-md-4">Title</th>
                                                                        <th scope="col">Request Type</th>
                                                                        <th scope="col">Under Project</th>
                                                                        <th scope="col"># of approvals</th>
                                                                        <th scope="col">Total Cost</th>
                                                                        <th scope="col">Date created</th>

                                                                        <th scope="col"></th>

                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <th scope="row">1</th>
                                                                        <td>MarkCuban</td>
                                                                        <td>Data visualisation in Mbeya</td>
                                                                        <td>Training</td>
                                                                        <td>Sauti Mpya</td>
                                                                        <td>0</td>
                                                                        <td>2,300,000 <span class="badge badge-success">TZS</span>
                                                                        </td>
                                                                        <td>2019-09-11</td>
                                                                        <td>
                                                                            <button type="button" class="btn btn-outline-success">view
                                                                                request</button>
                                                                        </td>
                                                                    </tr>

                                                                    <tr>
                                                                        <th scope="row">4</th>
                                                                        <td>Jane Sharpe</td>
                                                                        <td>Data Mining in Dar</td>
                                                                        <td>Training</td>
                                                                        <td>Data Zetu</td>
                                                                        <td>0</td>
                                                                        <td>6,600,000 <span class="badge badge-success">TZS</span>
                                                                        </td>
                                                                        <td>2019-09-11</td>
                                                                        <td>
                                                                            <button type="button" class="btn btn-outline-success">view
                                                                                request</button>
                                                                        </td>
                                                                    </tr>

                                                                    <tr>
                                                                        <th scope="row">3</th>
                                                                        <td>Mary Poppins</td>
                                                                        <td>Data Analyis and Mining</td>
                                                                        <td>Training</td>
                                                                        <td>Sauti Mpya</td>
                                                                        <td>0</td>
                                                                        <td>8,700,000 <span class="badge badge-success">TZS</span>
                                                                        </td>
                                                                        <td>2019-09-11</td>
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
                                                    <!-- end of SECOND column -->
                                                </div>

                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="pillars-pills-ce-projects-content" role="tabpanel" aria-labelledby="vdsreqs-pills-profile-tab">
                                            {{-- my retirements --}}
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="card">
                                                        <div class="card-content table-responsive">
                                                            <br />
                                                            @php
                                                            $dsproject=$projects->where('pillar_ref_id',5);
                                                            $ds=1;
                                                            @endphp
                                                            @if(count($dsproject)==0)
                                                            <div class="d-flex p-2 bg-info justify-content-center">No Projects Found!</div>
                                                            @else

                                                            <table class="table table-bordered table-hover">
                                                                <p><strong>Data Science Projects</strong></p>
                                                                <thead>

                                                                    <tr>
                                                                        <th scope="col">#</th>
                                                                        <th scope="col">Created by</th>
                                                                        <th scope="col-md-4">Title</th>

                                                                        <th scope="col">Total Cost</th>
                                                                        <th scope="col">current stage</th>
                                                                        <th scope="col">status</th>
                                                                        <th scope="col">Date created</th>
                                                                        <th scope="col"></th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    @foreach($dsproject as $pro)

                                                                    <tr>
                                                                        <th scope="row">{{$ds}}</th>
                                                                        <td>{{$pro->user->fname}} {{$pro->user->lname }}</td>
                                                                        <td>{{$pro->project_title }}</td>
                                                                        <td>{{$pro->total_project_cost}}
                                                                            <span class="badge badge-success">TZS</span>
                                                                        </td>
                                                                        <td class=" ">{{ $pro->current_stage }}</td>
                                                                        <td class="">{{ $pro->review_status }}</td>
                                                                        <td>{{$pro->created_at}}
                                                                        </td>
                                                                        <td class="w-30 p-2">
                                                                            <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#pr{{$pro->project_id }}"> Actions
                                                                            </button>
                                                                            <!-- Modal -->
                                                                            <div class="modal fade" id="pr{{$pro->project_id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" data-proj="{{ $pro->project_id }}" data-user="{{ Auth::user()->user_id }}">
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
                                                                                                    <a href="" class="btn  btn-outline-secondary d-flex justify-content-between">
                                                                                                        <i class="fas fa-chalkboard fa-lg mt-auto mb-auto"></i>
                                                                                                        <p class="m-auto">Review project</p>
                                                                                                    </a>

                                                                                                </li>
                                                                                                <li class="list-group-item">
                                                                                                    <a href="{{ route('pillar-project.show',   $pro->project_id)}}" class="btn btn-outline-success d-flex justify-content-between" data-bs-toggle="tooltip" data-bs-placement="top" title="view project full details">
                                                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                                                                                            <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                                                                                                            <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                                                                                                        </svg>
                                                                                                        <p class="m-auto">Project Details</p>
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
                                                                        </td>
                                                                    </tr>
                                                                    @php $ds++; @endphp
                                                                    @endforeach
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
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <!-- end of SECOND column -->
                                                </div>

                                            </div>
                                        </div>

                                        <div class="tab-pane fade" id="pillars-pills-ce-imprests-content" role="tabpanel" aria-labelledby="vdsreqs-pills-settings-tab">
                                            {{-- data science imprests --}}
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    @php
                                                    $dsimprest=$imprests->where('pillar_id',5);
                                                    @endphp
                                                    @if(count($dsimprest)==0)
                                                    <div class="d-flex p-2 justify-content-center">No Record Found!</div>
                                                    @else
                                                    <table class="table table-bordered table-hover">
                                                        <p>All created <strong>imprest</strong> in Data science Pillar</p>
                                                        <thead>
                                                            <tr>
                                                                <th scope="col">#</th>
                                                                <th scope="col">Requested by</th>
                                                                <th scope="col-md-4">Title</th>
                                                                <th scope="col">Current Stage</th>
                                                                <th scope="col">Status</th>
                                                                <th scope="col">Total Cost</th>
                                                                <th scope="col">Date created</th>

                                                                <th scope="col"></th>

                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @php $n=1;@endphp

                                                            @foreach($dsimprest as $imp)
                                                            <tr>
                                                                <th scope="row">{{$n}}.</th>
                                                                <td>{{$imp->requestedby->fname}}</td>
                                                                <td>{{$imp->imp_title}}</td>
                                                                <td> on review finance</td>
                                                                <td></td>
                                                                <td>{{$imp->amount_rqst}}</td>
                                                                <td>{{$imp->created_at->format('Y-m-d') }}</span>
                                                                </td>

                                                                <td class=" p-2">
                                                                    <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#rq{{$imp->id}}"> Actions
                                                                    </button>
                                                                    <!-- Modal -->
                                                                    <div class="modal fade" id="rq{{$imp->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header">

                                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                        <span aria-hidden="true">&times;</span>
                                                                                    </button>
                                                                                </div>
                                                                                <div class="modal-body">
                                                                                    <ul class="list-group-flush">

                                                                                        <li class="list-group-item">
                                                                                            <a href="{{ route('imprest.show',   $imp->id)}}" class="btn btn-outline-success d-flex justify-content-between" data-bs-toggle="tooltip" data-bs-placement="top" title="view project full details">
                                                                                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                                                                                    <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                                                                                                    <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                                                                                                </svg>
                                                                                                <p class="m-auto">Imprest Details & retirements</p>
                                                                                            </a>

                                                                                        </li>
                                                                                        <li class="list-group-item">
                                                                                            <a href="" class="btn btn-outline-info btn-md d-flex justify-content-between" data-bs-toggle="tooltip" data-bs-placement="top" title="view update project details">
                                                                                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-arrow-up-circle" viewBox="0 0 16 16">
                                                                                                    <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-7.5 3.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V11.5z" />
                                                                                                </svg>
                                                                                                <p class="m-auto">Review Imprest </p>
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
                                                                </td>
                                                            </tr>
                                                            @php $n++;@endphp
                                                            @endforeach


                                                        </tbody>

                                                    </table>

                                                    <br />
                                                    <br />
                                                    <nav aria-label="Page navigation example">
                                                        <ul class="pagination">
                                                            <li class="page-item">
                                                                <a class="page-link" href="#" aria-label="Previous">
                                                                    <span aria-hidden="true">&laquo;</span>
                                                                    <span class="sr-only">Previous</span>
                                                                </a>
                                                            </li>
                                                            <li class="page-item"><a class="page-link" href="#">1</a>
                                                            </li>
                                                            <li class="page-item"><a class="page-link" href="#">2</a>
                                                            </li>
                                                            <li class="page-item"><a class="page-link" href="#">3</a>
                                                            </li>
                                                            <li class="page-item">
                                                                <a class="page-link" href="#" aria-label="Next">
                                                                    <span aria-hidden="true">&raquo;</span>
                                                                    <span class="sr-only">Next</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </nav>
                                                    @endif
                                                    <!-- end of SECOND column -->
                                                </div>

                                            </div>

                                        </div>

                                        <div class="tab-pane fade" id="pillars-pills-ce-activities-content" role="tabpanel" aria-labelledby="pillars-pills-ds-activities-tab">
                                            {{-- data science activities --}}
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="card">
                                                        <div class="card-content table-responsive">
                                                            <br />

                                                            @php
                                                            $myact=$activities->where('pillar_ref_id',5);
                                                            $act=1;
                                                            @endphp
                                                            @if(count($myact)==0)
                                                            <div class="d-flex p-2 justify-content-center">No Record Found!</div>
                                                            @else
                                                            <table class="table table-bordered table-hover">
                                                                <p class="d-flex justify-content-between"><strong>All activities from Data science</strong>

                                                                </p>
                                                                <thead>
                                                                    <tr>
                                                                        <th scope="col">#</th>
                                                                        <th scope="col">Activity title</th>
                                                                        <th scope="col-md-4">Total Estimated cost</th>
                                                                        <th scope="col">current stage</th>
                                                                        <th scope="col">Date created</th>
                                                                        <th scope="col"></th>

                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    @foreach($myact as $myactiv)
                                                                    <tr>
                                                                        <th scope="row">{{ $act }}</th>
                                                                        <td class="w-30 p-2">{{ $myactiv->act_title }}</td>
                                                                        <td class="w-30 p-2">{{ $myactiv->total_act_cost }}</td>
                                                                        <td class="w-30  p-2">{{ $myactiv->current_stage }}</td>
                                                                        <td class="w-10 p-2">{{ $myactiv->created_at }}</td>
                                                                        <td class="w-30 p-2">
                                                                            <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#act{{$myactiv->pillar_act_id}}"> Actions
                                                                            </button>
                                                                            <!-- Modal -->
                                                                            <div class="modal fade" id="act{{$myactiv->pillar_act_id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" data-proj="{{ $myactiv->pillar_act_id }}" data-user="{{ Auth::user()->user_id }}">
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
                                                                                                    <a href="{{ route('pillar-activity.show',   $myactiv->pillar_act_id)}}" class="btn btn-outline-success d-flex justify-content-between" data-bs-toggle="tooltip" data-bs-placement="top" title="view project full details">
                                                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                                                                                            <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                                                                                                            <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                                                                                                        </svg>
                                                                                                        <p class="m-auto">Activity Details</p>
                                                                                                    </a>

                                                                                                </li>
                                                                                                <li class="list-group-item">
                                                                                                    <a href="" class="btn btn-outline-info btn-md d-flex justify-content-between" data-bs-toggle="tooltip" data-bs-placement="top" title="view update project details">
                                                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-arrow-up-circle" viewBox="0 0 16 16">
                                                                                                            <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-7.5 3.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V11.5z" />
                                                                                                        </svg>
                                                                                                        <p class="m-auto">Review Activity </p>
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
                                                                        </td>
                                                                    </tr>
                                                                    @php $act++ @endphp
                                                                    @endforeach
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
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <!-- end of SECOND column -->
                                                </div>

                                            </div>


                                        </div>

                                        <div class="tab-pane fade" id="pillars-pills-ce-sub-activities-content" role="tabpanel" aria-labelledby="pillars-pills-ds-sub-activities-tab">
                                            <div class="row"> {{-- data science sub activities --}}
                                                <div class="col-lg-12">
                                                    <div class="card">
                                                        <div class="card-content table-responsive">
                                                            <br />
                                                            @php
                                                            $mysubactivities=$subactivities->where('pillar_ref_id',5);
                                                            @endphp
                                                            @if(count($mysubactivities)==0)
                                                            <div class="d-flex p-2 justify-content-center">No Record Found!</div>
                                                            @else
                                                            <table class="table table-bordered table-hover">
                                                                <p class="d-flex justify-content-between"><strong>All SubActivitiesfrom Data science</strong>

                                                                </p>
                                                                <thead>
                                                                    <tr>
                                                                        <th scope="col">#</th>
                                                                        <th scope="col">SubActivity title</th>
                                                                        <th scope="col-md-4">Total Estimated cost</th>
                                                                        <th scope="col">current stage</th>
                                                                        <th scope="col">status</th>
                                                                        <th scope="col">Date created</th>
                                                                        <th scope="col"></th>

                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    @php $i=0;@endphp @foreach($mysubactivities as $myact)
                                                                    @php $i++;@endphp <tr>
                                                                        <th scope="row">{{ $i}}</th>
                                                                        <td class="w-30 p-2">{{ $myact->subact_title }}</td>
                                                                        <td class="w-30 p-2">{{ $myact->total_subactivity_cost }}</td>
                                                                        <td class="w-30  p-2">{{ $myact->current_stage }}</td>
                                                                        <td class="w-30  p-2">{{ $myact->review_status }}</td>
                                                                        <td class="w-10 p-2">{{ $myact->created_at }}</td>
                                                                        <td class="w-30 p-2">
                                                                            <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#subact{{$myact->id}}"> Actions
                                                                            </button>
                                                                            <!-- Modal -->
                                                                            <div class="modal fade" id="subact{{$myact->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
                                                                                                    <a href="{{ route('pillar-subactivity.show',$myact->id)}}" class="btn btn-outline-success d-flex justify-content-between" data-bs-toggle="tooltip" data-bs-placement="top" title="view project full details">
                                                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                                                                                            <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                                                                                                            <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                                                                                                        </svg>
                                                                                                        <p class="m-auto">SubActivity Details</p>
                                                                                                    </a>

                                                                                                </li>
                                                                                                <li class="list-group-item">
                                                                                                    <a href="" class="btn btn-outline-info btn-md d-flex justify-content-between" data-bs-toggle="tooltip" data-bs-placement="top" title="view update project details">
                                                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-arrow-up-circle" viewBox="0 0 16 16">
                                                                                                            <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-7.5 3.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V11.5z" />
                                                                                                        </svg>
                                                                                                        <p class="m-auto">Review SubActivity </p>
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
                                                                        </td>
                                                                    </tr>
                                                                    @endforeach
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
                                                            @endif
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

                        <div class="tab-pane fade" id="finance-pillars-nav-cb-content" role="tabpanel" aria-labelledby="finance-pillars-nav-cb-nav">
                            <br />

                            <div class="row">
                                <div class="col-md-2">
                                    <div class="nav flex-column nav-pills" id="vds-finance-pillars-pills-tab" role="tablist" aria-orientation="vertical">
                                        <a class="nav-link active" id="pillars-pills-cb-requests-tab" data-toggle="pill" href="#pillars-pills-cb-requests-content" role="tab" aria-controls="" aria-selected="true">Requests</a>

                                        <a class="nav-link" id="pillars-pills-cb-projects-tab" data-toggle="pill" href="#pillars-pills-cb-projects-content" role="tab" aria-controls="pillars-pills-cb-content-tab" aria-selected="false">Projects</a>

                                        <a class="nav-link" id="pillars-pills-cb-imprests-tab" data-toggle="pill" href="#pillars-pills-cb-imprests-content" role="tab" aria-controls="pillars-pills-funds-tab" aria-selected="false">Imprests</a>


                                        <a class="nav-link" id="pillars-pills-cb-activities-tab" data-toggle="pill" href="#pillars-pills-cb-activities-content" role="tab" aria-controls="pillars-pills-funds-tab" aria-selected="false">Activities</a>

                                        <a class="nav-link" id="pillars-pills-cb-sub-activities-tab" data-toggle="pill" href="#pillars-pills-cb-sub-activities-content" role="tab" aria-controls="pillars-pills-funds-tab" aria-selected="false">Sub Activities</a>




                                    </div>
                                </div>
                                <div class="col-md-10">

                                    <div class="tab-content" id="cb-finance-pillars-pills-tabContent">

                                        <div class="tab-pane fade show active" id="pillars-pills-cb-requests-content" role="tabpanel" aria-labelledby="pills-finance-pillars-tab">
                                            {{-- my retirements --}}

                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="card">
                                                        <div class="card-content table-responsive">
                                                            <br />
                                                            <table class="table table-bordered table-hover">
                                                                <p><strong>Data Science requests.</strong></p>
                                                                <thead>
                                                                    <tr>
                                                                        <th scope="col">#</th>
                                                                        <th scope="col">Requested by</th>
                                                                        <th scope="col-md-4">Title</th>
                                                                        <th scope="col">Request Type</th>
                                                                        <th scope="col">Under Project</th>
                                                                        <th scope="col"># of approvals</th>
                                                                        <th scope="col">Total Cost</th>
                                                                        <th scope="col">Date created</th>

                                                                        <th scope="col"></th>

                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <th scope="row">1</th>
                                                                        <td>MarkCuban</td>
                                                                        <td>Data visualisation in Mbeya</td>
                                                                        <td>Training</td>
                                                                        <td>Sauti Mpya</td>
                                                                        <td>0</td>
                                                                        <td>2,300,000 <span class="badge badge-success">TZS</span>
                                                                        </td>
                                                                        <td>2019-09-11</td>
                                                                        <td>
                                                                            <button type="button" class="btn btn-outline-success">view
                                                                                request</button>
                                                                        </td>
                                                                    </tr>

                                                                    <tr>
                                                                        <th scope="row">4</th>
                                                                        <td>Jane Sharpe</td>
                                                                        <td>Data Mining in Dar</td>
                                                                        <td>Training</td>
                                                                        <td>Data Zetu</td>
                                                                        <td>0</td>
                                                                        <td>6,600,000 <span class="badge badge-success">TZS</span>
                                                                        </td>
                                                                        <td>2019-09-11</td>
                                                                        <td>
                                                                            <button type="button" class="btn btn-outline-success">view
                                                                                request</button>
                                                                        </td>
                                                                    </tr>

                                                                    <tr>
                                                                        <th scope="row">3</th>
                                                                        <td>Mary Poppins</td>
                                                                        <td>Data Analyis and Mining</td>
                                                                        <td>Training</td>
                                                                        <td>Sauti Mpya</td>
                                                                        <td>0</td>
                                                                        <td>8,700,000 <span class="badge badge-success">TZS</span>
                                                                        </td>
                                                                        <td>2019-09-11</td>
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
                                                    <!-- end of SECOND column -->
                                                </div>

                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="pillars-pills-cb-projects-content" role="tabpanel" aria-labelledby="vdsreqs-pills-profile-tab">
                                            {{-- my retirements --}}
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="card">
                                                        <div class="card-content table-responsive">
                                                            <br />
                                                            @php
                                                            $dsproject=$projects->where('pillar_ref_id',5);
                                                            $ds=1;
                                                            @endphp
                                                            @if(count($dsproject)==0)
                                                            <div class="d-flex p-2 bg-info justify-content-center">No Projects Found!</div>
                                                            @else

                                                            <table class="table table-bordered table-hover">
                                                                <p><strong>Data Science Projects</strong></p>
                                                                <thead>

                                                                    <tr>
                                                                        <th scope="col">#</th>
                                                                        <th scope="col">Created by</th>
                                                                        <th scope="col-md-4">Title</th>

                                                                        <th scope="col">Total Cost</th>
                                                                        <th scope="col">current stage</th>
                                                                        <th scope="col">status</th>
                                                                        <th scope="col">Date created</th>
                                                                        <th scope="col"></th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    @foreach($dsproject as $pro)

                                                                    <tr>
                                                                        <th scope="row">{{$ds}}</th>
                                                                        <td>{{$pro->user->fname}} {{$pro->user->lname }}</td>
                                                                        <td>{{$pro->project_title }}</td>
                                                                        <td>{{$pro->total_project_cost}}
                                                                            <span class="badge badge-success">TZS</span>
                                                                        </td>
                                                                        <td class=" ">{{ $pro->current_stage }}</td>
                                                                        <td class="">{{ $pro->review_status }}</td>
                                                                        <td>{{$pro->created_at}}
                                                                        </td>
                                                                        <td class="w-30 p-2">
                                                                            <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#pr{{$pro->project_id }}"> Actions
                                                                            </button>
                                                                            <!-- Modal -->
                                                                            <div class="modal fade" id="pr{{$pro->project_id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" data-proj="{{ $pro->project_id }}" data-user="{{ Auth::user()->user_id }}">
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
                                                                                                    <a href="" class="btn  btn-outline-secondary d-flex justify-content-between">
                                                                                                        <i class="fas fa-chalkboard fa-lg mt-auto mb-auto"></i>
                                                                                                        <p class="m-auto">Review project</p>
                                                                                                    </a>

                                                                                                </li>
                                                                                                <li class="list-group-item">
                                                                                                    <a href="{{ route('pillar-project.show',   $pro->project_id)}}" class="btn btn-outline-success d-flex justify-content-between" data-bs-toggle="tooltip" data-bs-placement="top" title="view project full details">
                                                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                                                                                            <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                                                                                                            <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                                                                                                        </svg>
                                                                                                        <p class="m-auto">Project Details</p>
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
                                                                        </td>
                                                                    </tr>
                                                                    @php $ds++; @endphp
                                                                    @endforeach
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
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <!-- end of SECOND column -->
                                                </div>

                                            </div>
                                        </div>

                                        <div class="tab-pane fade" id="pillars-pills-cb-imprests-content" role="tabpanel" aria-labelledby="vdsreqs-pills-settings-tab">
                                            {{-- data science imprests --}}
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    @php
                                                    $dsimprest=$imprests->where('pillar_id',5);
                                                    @endphp
                                                    @if(count($dsimprest)==0)
                                                    <div class="d-flex p-2 justify-content-center">No Record Found!</div>
                                                    @else
                                                    <table class="table table-bordered table-hover">
                                                        <p>All created <strong>imprest</strong> in Data science Pillar</p>
                                                        <thead>
                                                            <tr>
                                                                <th scope="col">#</th>
                                                                <th scope="col">Requested by</th>
                                                                <th scope="col-md-4">Title</th>
                                                                <th scope="col">Current Stage</th>
                                                                <th scope="col">Status</th>
                                                                <th scope="col">Total Cost</th>
                                                                <th scope="col">Date created</th>

                                                                <th scope="col"></th>

                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @php $n=1;@endphp

                                                            @foreach($dsimprest as $imp)
                                                            <tr>
                                                                <th scope="row">{{$n}}.</th>
                                                                <td>{{$imp->requestedby->fname}}</td>
                                                                <td>{{$imp->imp_title}}</td>
                                                                <td> on review finance</td>
                                                                <td></td>
                                                                <td>{{$imp->amount_rqst}}</td>
                                                                <td>{{$imp->created_at->format('Y-m-d') }}</span>
                                                                </td>

                                                                <td class=" p-2">
                                                                    <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#rq{{$imp->id}}"> Actions
                                                                    </button>
                                                                    <!-- Modal -->
                                                                    <div class="modal fade" id="rq{{$imp->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header">

                                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                        <span aria-hidden="true">&times;</span>
                                                                                    </button>
                                                                                </div>
                                                                                <div class="modal-body">
                                                                                    <ul class="list-group-flush">

                                                                                        <li class="list-group-item">
                                                                                            <a href="{{ route('imprest.show',   $imp->id)}}" class="btn btn-outline-success d-flex justify-content-between" data-bs-toggle="tooltip" data-bs-placement="top" title="view project full details">
                                                                                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                                                                                    <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                                                                                                    <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                                                                                                </svg>
                                                                                                <p class="m-auto">Imprest Details & retirements</p>
                                                                                            </a>

                                                                                        </li>
                                                                                        <li class="list-group-item">
                                                                                            <a href="" class="btn btn-outline-info btn-md d-flex justify-content-between" data-bs-toggle="tooltip" data-bs-placement="top" title="view update project details">
                                                                                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-arrow-up-circle" viewBox="0 0 16 16">
                                                                                                    <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-7.5 3.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V11.5z" />
                                                                                                </svg>
                                                                                                <p class="m-auto">Review Imprest </p>
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
                                                                </td>
                                                            </tr>
                                                            @php $n++;@endphp
                                                            @endforeach


                                                        </tbody>

                                                    </table>

                                                    <br />
                                                    <br />
                                                    <nav aria-label="Page navigation example">
                                                        <ul class="pagination">
                                                            <li class="page-item">
                                                                <a class="page-link" href="#" aria-label="Previous">
                                                                    <span aria-hidden="true">&laquo;</span>
                                                                    <span class="sr-only">Previous</span>
                                                                </a>
                                                            </li>
                                                            <li class="page-item"><a class="page-link" href="#">1</a>
                                                            </li>
                                                            <li class="page-item"><a class="page-link" href="#">2</a>
                                                            </li>
                                                            <li class="page-item"><a class="page-link" href="#">3</a>
                                                            </li>
                                                            <li class="page-item">
                                                                <a class="page-link" href="#" aria-label="Next">
                                                                    <span aria-hidden="true">&raquo;</span>
                                                                    <span class="sr-only">Next</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </nav>
                                                    @endif
                                                    <!-- end of SECOND column -->
                                                </div>

                                            </div>

                                        </div>

                                        <div class="tab-pane fade" id="pillars-pills-cb-activities-content" role="tabpanel" aria-labelledby="pillars-pills-ds-activities-tab">
                                            {{-- data science activities --}}
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="card">
                                                        <div class="card-content table-responsive">
                                                            <br />

                                                            @php
                                                            $myact=$activities->where('pillar_ref_id',5);
                                                            $act=1;
                                                            @endphp
                                                            @if(count($myact)==0)
                                                            <div class="d-flex p-2 justify-content-center">No Record Found!</div>
                                                            @else
                                                            <table class="table table-bordered table-hover">
                                                                <p class="d-flex justify-content-between"><strong>All activities from Data science</strong>

                                                                </p>
                                                                <thead>
                                                                    <tr>
                                                                        <th scope="col">#</th>
                                                                        <th scope="col">Activity title</th>
                                                                        <th scope="col-md-4">Total Estimated cost</th>
                                                                        <th scope="col">current stage</th>
                                                                        <th scope="col">Date created</th>
                                                                        <th scope="col"></th>

                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    @foreach($myact as $myactiv)
                                                                    <tr>
                                                                        <th scope="row">{{ $act }}</th>
                                                                        <td class="w-30 p-2">{{ $myactiv->act_title }}</td>
                                                                        <td class="w-30 p-2">{{ $myactiv->total_act_cost }}</td>
                                                                        <td class="w-30  p-2">{{ $myactiv->current_stage }}</td>
                                                                        <td class="w-10 p-2">{{ $myactiv->created_at }}</td>
                                                                        <td class="w-30 p-2">
                                                                            <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#act{{$myactiv->pillar_act_id}}"> Actions
                                                                            </button>
                                                                            <!-- Modal -->
                                                                            <div class="modal fade" id="act{{$myactiv->pillar_act_id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" data-proj="{{ $myactiv->pillar_act_id }}" data-user="{{ Auth::user()->user_id }}">
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
                                                                                                    <a href="{{ route('pillar-activity.show',   $myactiv->pillar_act_id)}}" class="btn btn-outline-success d-flex justify-content-between" data-bs-toggle="tooltip" data-bs-placement="top" title="view project full details">
                                                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                                                                                            <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                                                                                                            <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                                                                                                        </svg>
                                                                                                        <p class="m-auto">Activity Details</p>
                                                                                                    </a>

                                                                                                </li>
                                                                                                <li class="list-group-item">
                                                                                                    <a href="" class="btn btn-outline-info btn-md d-flex justify-content-between" data-bs-toggle="tooltip" data-bs-placement="top" title="view update project details">
                                                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-arrow-up-circle" viewBox="0 0 16 16">
                                                                                                            <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-7.5 3.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V11.5z" />
                                                                                                        </svg>
                                                                                                        <p class="m-auto">Review Activity </p>
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
                                                                        </td>
                                                                    </tr>
                                                                    @php $act++ @endphp
                                                                    @endforeach
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
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <!-- end of SECOND column -->
                                                </div>

                                            </div>


                                        </div>

                                        <div class="tab-pane fade" id="pillars-pills-cb-sub-activities-content" role="tabpanel" aria-labelledby="pillars-pills-ds-sub-activities-tab">
                                            <div class="row"> {{-- data science sub activities --}}
                                                <div class="col-lg-12">
                                                    <div class="card">
                                                        <div class="card-content table-responsive">
                                                            <br />
                                                            @php
                                                            $mysubactivities=$subactivities->where('pillar_ref_id',5);
                                                            @endphp
                                                            @if(count($mysubactivities)==0)
                                                            <div class="d-flex p-2 justify-content-center">No Record Found!</div>
                                                            @else
                                                            <table class="table table-bordered table-hover">
                                                                <p class="d-flex justify-content-between"><strong>All SubActivitiesfrom Data science</strong>

                                                                </p>
                                                                <thead>
                                                                    <tr>
                                                                        <th scope="col">#</th>
                                                                        <th scope="col">SubActivity title</th>
                                                                        <th scope="col-md-4">Total Estimated cost</th>
                                                                        <th scope="col">current stage</th>
                                                                        <th scope="col">status</th>
                                                                        <th scope="col">Date created</th>
                                                                        <th scope="col"></th>

                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    @php $i=0;@endphp @foreach($mysubactivities as $myact)
                                                                    @php $i++;@endphp <tr>
                                                                        <th scope="row">{{ $i}}</th>
                                                                        <td class="w-30 p-2">{{ $myact->subact_title }}</td>
                                                                        <td class="w-30 p-2">{{ $myact->total_subactivity_cost }}</td>
                                                                        <td class="w-30  p-2">{{ $myact->current_stage }}</td>
                                                                        <td class="w-30  p-2">{{ $myact->review_status }}</td>
                                                                        <td class="w-10 p-2">{{ $myact->created_at }}</td>
                                                                        <td class="w-30 p-2">
                                                                            <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#subact{{$myact->id}}"> Actions
                                                                            </button>
                                                                            <!-- Modal -->
                                                                            <div class="modal fade" id="subact{{$myact->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
                                                                                                    <a href="{{ route('pillar-subactivity.show',$myact->id)}}" class="btn btn-outline-success d-flex justify-content-between" data-bs-toggle="tooltip" data-bs-placement="top" title="view project full details">
                                                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                                                                                            <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                                                                                                            <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                                                                                                        </svg>
                                                                                                        <p class="m-auto">SubActivity Details</p>
                                                                                                    </a>

                                                                                                </li>
                                                                                                <li class="list-group-item">
                                                                                                    <a href="" class="btn btn-outline-info btn-md d-flex justify-content-between" data-bs-toggle="tooltip" data-bs-placement="top" title="view update project details">
                                                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-arrow-up-circle" viewBox="0 0 16 16">
                                                                                                            <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-7.5 3.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V11.5z" />
                                                                                                        </svg>
                                                                                                        <p class="m-auto">Review SubActivity </p>
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
                                                                        </td>
                                                                    </tr>
                                                                    @endforeach
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
                                                            @endif
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

                        <div class="tab-pane fade" id="finance-pillars-nav-ri-content" role="tabpanel" aria-labelledby="finance-pillars-nav-ri-nav">
                            <br />

                            <div class="row">
                                <div class="col-md-2">
                                    <div class="nav flex-column nav-pills" id="vds-finance-pillars-pills-tab" role="tablist" aria-orientation="vertical">
                                        <a class="nav-link active" id="pillars-pills-ri-requests-tab" data-toggle="pill" href="#pillars-pills-ri-requests-content" role="tab" aria-controls="" aria-selected="true">Requests</a>

                                        <a class="nav-link" id="pillars-pills-ri-projects-tab" data-toggle="pill" href="#pillars-pills-ri-projects-content" role="tab" aria-controls="pillars-pills-ri-content-tab" aria-selected="false">Projects</a>

                                        <a class="nav-link" id="pillars-pills-ri-imprests-tab" data-toggle="pill" href="#pillars-pills-ri-imprests-content" role="tab" aria-controls="pillars-pills-funds-tab" aria-selected="false">Imprests</a>


                                        <a class="nav-link" id="pillars-pills-ri-activities-tab" data-toggle="pill" href="#pillars-pills-ri-activities-content" role="tab" aria-controls="pillars-pills-funds-tab" aria-selected="false">Activities</a>

                                        <a class="nav-link" id="pillars-pills-ri-sub-activities-tab" data-toggle="pill" href="#pillars-pills-ri-sub-activities-content" role="tab" aria-controls="pillars-pills-funds-tab" aria-selected="false">Sub Activities</a>




                                    </div>
                                </div>
                                <div class="col-md-10">

                                    <div class="tab-content" id="ri-finance-pillars-pills-tabContent">

                                        <div class="tab-pane fade show active" id="pillars-pills-ri-requests-content" role="tabpanel" aria-labelledby="pills-finance-pillars-tab">
                                            {{-- my retirements --}}

                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="card">
                                                        <div class="card-content table-responsive">
                                                            <br />
                                                            <table class="table table-bordered table-hover">
                                                                <p><strong>Data Science requests.</strong></p>
                                                                <thead>
                                                                    <tr>
                                                                        <th scope="col">#</th>
                                                                        <th scope="col">Requested by</th>
                                                                        <th scope="col-md-4">Title</th>
                                                                        <th scope="col">Request Type</th>
                                                                        <th scope="col">Under Project</th>
                                                                        <th scope="col"># of approvals</th>
                                                                        <th scope="col">Total Cost</th>
                                                                        <th scope="col">Date created</th>

                                                                        <th scope="col"></th>

                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <th scope="row">1</th>
                                                                        <td>MarkCuban</td>
                                                                        <td>Data visualisation in Mbeya</td>
                                                                        <td>Training</td>
                                                                        <td>Sauti Mpya</td>
                                                                        <td>0</td>
                                                                        <td>2,300,000 <span class="badge badge-success">TZS</span>
                                                                        </td>
                                                                        <td>2019-09-11</td>
                                                                        <td>
                                                                            <button type="button" class="btn btn-outline-success">view
                                                                                request</button>
                                                                        </td>
                                                                    </tr>

                                                                    <tr>
                                                                        <th scope="row">4</th>
                                                                        <td>Jane Sharpe</td>
                                                                        <td>Data Mining in Dar</td>
                                                                        <td>Training</td>
                                                                        <td>Data Zetu</td>
                                                                        <td>0</td>
                                                                        <td>6,600,000 <span class="badge badge-success">TZS</span>
                                                                        </td>
                                                                        <td>2019-09-11</td>
                                                                        <td>
                                                                            <button type="button" class="btn btn-outline-success">view
                                                                                request</button>
                                                                        </td>
                                                                    </tr>

                                                                    <tr>
                                                                        <th scope="row">3</th>
                                                                        <td>Mary Poppins</td>
                                                                        <td>Data Analyis and Mining</td>
                                                                        <td>Training</td>
                                                                        <td>Sauti Mpya</td>
                                                                        <td>0</td>
                                                                        <td>8,700,000 <span class="badge badge-success">TZS</span>
                                                                        </td>
                                                                        <td>2019-09-11</td>
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
                                                    <!-- end of SECOND column -->
                                                </div>

                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="pillars-pills-ri-projects-content" role="tabpanel" aria-labelledby="vdsreqs-pills-profile-tab">
                                            {{-- my retirements --}}
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="card">
                                                        <div class="card-content table-responsive">
                                                            <br />
                                                            @php
                                                            $dsproject=$projects->where('pillar_ref_id',5);
                                                            $ds=1;
                                                            @endphp
                                                            @if(count($dsproject)==0)
                                                            <div class="d-flex p-2 bg-info justify-content-center">No Projects Found!</div>
                                                            @else

                                                            <table class="table table-bordered table-hover">
                                                                <p><strong>Data Science Projects</strong></p>
                                                                <thead>

                                                                    <tr>
                                                                        <th scope="col">#</th>
                                                                        <th scope="col">Created by</th>
                                                                        <th scope="col-md-4">Title</th>

                                                                        <th scope="col">Total Cost</th>
                                                                        <th scope="col">current stage</th>
                                                                        <th scope="col">status</th>
                                                                        <th scope="col">Date created</th>
                                                                        <th scope="col"></th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    @foreach($dsproject as $pro)

                                                                    <tr>
                                                                        <th scope="row">{{$ds}}</th>
                                                                        <td>{{$pro->user->fname}} {{$pro->user->lname }}</td>
                                                                        <td>{{$pro->project_title }}</td>
                                                                        <td>{{$pro->total_project_cost}}
                                                                            <span class="badge badge-success">TZS</span>
                                                                        </td>
                                                                        <td class=" ">{{ $pro->current_stage }}</td>
                                                                        <td class="">{{ $pro->review_status }}</td>
                                                                        <td>{{$pro->created_at}}
                                                                        </td>
                                                                        <td class="w-30 p-2">
                                                                            <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#pr{{$pro->project_id }}"> Actions
                                                                            </button>
                                                                            <!-- Modal -->
                                                                            <div class="modal fade" id="pr{{$pro->project_id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" data-proj="{{ $pro->project_id }}" data-user="{{ Auth::user()->user_id }}">
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
                                                                                                    <a href="" class="btn  btn-outline-secondary d-flex justify-content-between">
                                                                                                        <i class="fas fa-chalkboard fa-lg mt-auto mb-auto"></i>
                                                                                                        <p class="m-auto">Review project</p>
                                                                                                    </a>

                                                                                                </li>
                                                                                                <li class="list-group-item">
                                                                                                    <a href="{{ route('pillar-project.show',   $pro->project_id)}}" class="btn btn-outline-success d-flex justify-content-between" data-bs-toggle="tooltip" data-bs-placement="top" title="view project full details">
                                                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                                                                                            <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                                                                                                            <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                                                                                                        </svg>
                                                                                                        <p class="m-auto">Project Details</p>
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
                                                                        </td>
                                                                    </tr>
                                                                    @php $ds++; @endphp
                                                                    @endforeach
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
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <!-- end of SECOND column -->
                                                </div>

                                            </div>
                                        </div>

                                        <div class="tab-pane fade" id="pillars-pills-ri-imprests-content" role="tabpanel" aria-labelledby="vdsreqs-pills-settings-tab">
                                            {{-- data science imprests --}}
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    @php
                                                    $dsimprest=$imprests->where('pillar_id',5);
                                                    @endphp
                                                    @if(count($dsimprest)==0)
                                                    <div class="d-flex p-2 justify-content-center">No Record Found!</div>
                                                    @else
                                                    <table class="table table-bordered table-hover">
                                                        <p>All created <strong>imprest</strong> in Data science Pillar</p>
                                                        <thead>
                                                            <tr>
                                                                <th scope="col">#</th>
                                                                <th scope="col">Requested by</th>
                                                                <th scope="col-md-4">Title</th>
                                                                <th scope="col">Current Stage</th>
                                                                <th scope="col">Status</th>
                                                                <th scope="col">Total Cost</th>
                                                                <th scope="col">Date created</th>

                                                                <th scope="col"></th>

                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @php $n=1;@endphp

                                                            @foreach($dsimprest as $imp)
                                                            <tr>
                                                                <th scope="row">{{$n}}.</th>
                                                                <td>{{$imp->requestedby->fname}}</td>
                                                                <td>{{$imp->imp_title}}</td>
                                                                <td> on review finance</td>
                                                                <td></td>
                                                                <td>{{$imp->amount_rqst}}</td>
                                                                <td>{{$imp->created_at->format('Y-m-d') }}</span>
                                                                </td>

                                                                <td class=" p-2">
                                                                    <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#rq{{$imp->id}}"> Actions
                                                                    </button>
                                                                    <!-- Modal -->
                                                                    <div class="modal fade" id="rq{{$imp->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header">

                                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                        <span aria-hidden="true">&times;</span>
                                                                                    </button>
                                                                                </div>
                                                                                <div class="modal-body">
                                                                                    <ul class="list-group-flush">

                                                                                        <li class="list-group-item">
                                                                                            <a href="{{ route('imprest.show',   $imp->id)}}" class="btn btn-outline-success d-flex justify-content-between" data-bs-toggle="tooltip" data-bs-placement="top" title="view project full details">
                                                                                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                                                                                    <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                                                                                                    <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                                                                                                </svg>
                                                                                                <p class="m-auto">Imprest Details & retirements</p>
                                                                                            </a>

                                                                                        </li>
                                                                                        <li class="list-group-item">
                                                                                            <a href="" class="btn btn-outline-info btn-md d-flex justify-content-between" data-bs-toggle="tooltip" data-bs-placement="top" title="view update project details">
                                                                                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-arrow-up-circle" viewBox="0 0 16 16">
                                                                                                    <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-7.5 3.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V11.5z" />
                                                                                                </svg>
                                                                                                <p class="m-auto">Review Imprest </p>
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
                                                                </td>
                                                            </tr>
                                                            @php $n++;@endphp
                                                            @endforeach


                                                        </tbody>

                                                    </table>

                                                    <br />
                                                    <br />
                                                    <nav aria-label="Page navigation example">
                                                        <ul class="pagination">
                                                            <li class="page-item">
                                                                <a class="page-link" href="#" aria-label="Previous">
                                                                    <span aria-hidden="true">&laquo;</span>
                                                                    <span class="sr-only">Previous</span>
                                                                </a>
                                                            </li>
                                                            <li class="page-item"><a class="page-link" href="#">1</a>
                                                            </li>
                                                            <li class="page-item"><a class="page-link" href="#">2</a>
                                                            </li>
                                                            <li class="page-item"><a class="page-link" href="#">3</a>
                                                            </li>
                                                            <li class="page-item">
                                                                <a class="page-link" href="#" aria-label="Next">
                                                                    <span aria-hidden="true">&raquo;</span>
                                                                    <span class="sr-only">Next</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </nav>
                                                    @endif
                                                    <!-- end of SECOND column -->
                                                </div>

                                            </div>

                                        </div>

                                        <div class="tab-pane fade" id="pillars-pills-ri-activities-content" role="tabpanel" aria-labelledby="pillars-pills-ds-activities-tab">
                                            {{-- data science activities --}}
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="card">
                                                        <div class="card-content table-responsive">
                                                            <br />

                                                            @php
                                                            $myact=$activities->where('pillar_ref_id',5);
                                                            $act=1;
                                                            @endphp
                                                            @if(count($myact)==0)
                                                            <div class="d-flex p-2 justify-content-center">No Record Found!</div>
                                                            @else
                                                            <table class="table table-bordered table-hover">
                                                                <p class="d-flex justify-content-between"><strong>All activities from Data science</strong>

                                                                </p>
                                                                <thead>
                                                                    <tr>
                                                                        <th scope="col">#</th>
                                                                        <th scope="col">Activity title</th>
                                                                        <th scope="col-md-4">Total Estimated cost</th>
                                                                        <th scope="col">current stage</th>
                                                                        <th scope="col">Date created</th>
                                                                        <th scope="col"></th>

                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    @foreach($myact as $myactiv)
                                                                    <tr>
                                                                        <th scope="row">{{ $act }}</th>
                                                                        <td class="w-30 p-2">{{ $myactiv->act_title }}</td>
                                                                        <td class="w-30 p-2">{{ $myactiv->total_act_cost }}</td>
                                                                        <td class="w-30  p-2">{{ $myactiv->current_stage }}</td>
                                                                        <td class="w-10 p-2">{{ $myactiv->created_at }}</td>
                                                                        <td class="w-30 p-2">
                                                                            <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#act{{$myactiv->pillar_act_id}}"> Actions
                                                                            </button>
                                                                            <!-- Modal -->
                                                                            <div class="modal fade" id="act{{$myactiv->pillar_act_id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" data-proj="{{ $myactiv->pillar_act_id }}" data-user="{{ Auth::user()->user_id }}">
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
                                                                                                    <a href="{{ route('pillar-activity.show',   $myactiv->pillar_act_id)}}" class="btn btn-outline-success d-flex justify-content-between" data-bs-toggle="tooltip" data-bs-placement="top" title="view project full details">
                                                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                                                                                            <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                                                                                                            <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                                                                                                        </svg>
                                                                                                        <p class="m-auto">Activity Details</p>
                                                                                                    </a>

                                                                                                </li>
                                                                                                <li class="list-group-item">
                                                                                                    <a href="" class="btn btn-outline-info btn-md d-flex justify-content-between" data-bs-toggle="tooltip" data-bs-placement="top" title="view update project details">
                                                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-arrow-up-circle" viewBox="0 0 16 16">
                                                                                                            <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-7.5 3.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V11.5z" />
                                                                                                        </svg>
                                                                                                        <p class="m-auto">Review Activity </p>
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
                                                                        </td>
                                                                    </tr>
                                                                    @php $act++ @endphp
                                                                    @endforeach
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
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <!-- end of SECOND column -->
                                                </div>

                                            </div>


                                        </div>

                                        <div class="tab-pane fade" id="pillars-pills-ri-sub-activities-content" role="tabpanel" aria-labelledby="pillars-pills-ds-sub-activities-tab">
                                            <div class="row"> {{-- data science sub activities --}}
                                                <div class="col-lg-12">
                                                    <div class="card">
                                                        <div class="card-content table-responsive">
                                                            <br />
                                                            @php
                                                            $mysubactivities=$subactivities->where('pillar_ref_id',5);
                                                            @endphp
                                                            @if(count($mysubactivities)==0)
                                                            <div class="d-flex p-2 justify-content-center">No Record Found!</div>
                                                            @else
                                                            <table class="table table-bordered table-hover">
                                                                <p class="d-flex justify-content-between"><strong>All SubActivitiesfrom Data science</strong>

                                                                </p>
                                                                <thead>
                                                                    <tr>
                                                                        <th scope="col">#</th>
                                                                        <th scope="col">SubActivity title</th>
                                                                        <th scope="col-md-4">Total Estimated cost</th>
                                                                        <th scope="col">current stage</th>
                                                                        <th scope="col">status</th>
                                                                        <th scope="col">Date created</th>
                                                                        <th scope="col"></th>

                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    @php $i=0;@endphp @foreach($mysubactivities as $myact)
                                                                    @php $i++;@endphp <tr>
                                                                        <th scope="row">{{ $i}}</th>
                                                                        <td class="w-30 p-2">{{ $myact->subact_title }}</td>
                                                                        <td class="w-30 p-2">{{ $myact->total_subactivity_cost }}</td>
                                                                        <td class="w-30  p-2">{{ $myact->current_stage }}</td>
                                                                        <td class="w-30  p-2">{{ $myact->review_status }}</td>
                                                                        <td class="w-10 p-2">{{ $myact->created_at }}</td>
                                                                        <td class="w-30 p-2">
                                                                            <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#subact{{$myact->id}}"> Actions
                                                                            </button>
                                                                            <!-- Modal -->
                                                                            <div class="modal fade" id="subact{{$myact->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
                                                                                                    <a href="{{ route('pillar-subactivity.show',$myact->id)}}" class="btn btn-outline-success d-flex justify-content-between" data-bs-toggle="tooltip" data-bs-placement="top" title="view project full details">
                                                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                                                                                            <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                                                                                                            <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                                                                                                        </svg>
                                                                                                        <p class="m-auto">SubActivity Details</p>
                                                                                                    </a>

                                                                                                </li>
                                                                                                <li class="list-group-item">
                                                                                                    <a href="" class="btn btn-outline-info btn-md d-flex justify-content-between" data-bs-toggle="tooltip" data-bs-placement="top" title="view update project details">
                                                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-arrow-up-circle" viewBox="0 0 16 16">
                                                                                                            <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-7.5 3.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V11.5z" />
                                                                                                        </svg>
                                                                                                        <p class="m-auto">Review SubActivity </p>
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
                                                                        </td>
                                                                    </tr>
                                                                    @endforeach
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
                                                            @endif
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
                        <div class="tab-pane fade" id="finance-pillars-nav-is-content" role="tabpanel" aria-labelledby="finance-pillars-nav-is-nav">
                            <br />

                            <div class="row">
                                <div class="col-md-2">
                                    <div class="nav flex-column nav-pills" id="vds-finance-pillars-pills-tab" role="tablist" aria-orientation="vertical">
                                        <a class="nav-link active" id="pillars-pills-is-requests-tab" data-toggle="pill" href="#pillars-pills-is-requests-content" role="tab" aria-controls="" aria-selected="true">Requests</a>

                                        <a class="nav-link" id="pillars-pills-is-projects-tab" data-toggle="pill" href="#pillars-pills-is-projects-content" role="tab" aria-controls="pillars-pills-is-content-tab" aria-selected="false">Projects</a>

                                        <a class="nav-link" id="pillars-pills-is-imprests-tab" data-toggle="pill" href="#pillars-pills-is-imprests-content" role="tab" aria-controls="pillars-pills-funds-tab" aria-selected="false">Imprests</a>


                                        <a class="nav-link" id="pillars-pills-is-activities-tab" data-toggle="pill" href="#pillars-pills-is-activities-content" role="tab" aria-controls="pillars-pills-funds-tab" aria-selected="false">Activities</a>

                                        <a class="nav-link" id="pillars-pills-is-sub-activities-tab" data-toggle="pill" href="#pillars-pills-is-sub-activities-content" role="tab" aria-controls="pillars-pills-funds-tab" aria-selected="false">Sub Activities</a>




                                    </div>
                                </div>
                                <div class="col-md-10">

                                    <div class="tab-content" id="is-finance-pillars-pills-tabContent">

                                        <div class="tab-pane fade show active" id="pillars-pills-is-requests-content" role="tabpanel" aria-labelledby="pills-finance-pillars-tab">
                                            {{-- my retirements --}}

                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="card">
                                                        <div class="card-content table-responsive">
                                                            <br />
                                                            <table class="table table-bordered table-hover">
                                                                <p><strong>Data Science requests.</strong></p>
                                                                <thead>
                                                                    <tr>
                                                                        <th scope="col">#</th>
                                                                        <th scope="col">Requested by</th>
                                                                        <th scope="col">Title</th>
                                                                        <th scope="col">Request Type</th>
                                                                        <th scope="col">Under Project</th>
                                                                        <th scope="col"># of approvals</th>
                                                                        <th scope="col">Total Cost</th>
                                                                        <th scope="col">Date created</th>
                                                                        <th scope="col"></th>

                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <th scope="row">1</th>
                                                                        <td>MarkCuban</td>
                                                                        <td>Data visualisation in Mbeya</td>
                                                                        <td>Training</td>
                                                                        <td>Sauti Mpya</td>
                                                                        <td>0</td>
                                                                        <td>2,300,000 <span class="badge badge-success">TZS</span>
                                                                        </td>
                                                                        <td>2019-09-11</td>
                                                                        <td>
                                                                            <button type="button" class="btn btn-outline-success">view
                                                                                request</button>
                                                                        </td>
                                                                    </tr>

                                                                    <tr>
                                                                        <th scope="row">4</th>
                                                                        <td>Jane Sharpe</td>
                                                                        <td>Data Mining in Dar</td>
                                                                        <td>Training</td>
                                                                        <td>Data Zetu</td>
                                                                        <td>0</td>
                                                                        <td>6,600,000 <span class="badge badge-success">TZS</span>
                                                                        </td>
                                                                        <td>2019-09-11</td>
                                                                        <td>
                                                                            <button type="button" class="btn btn-outline-success">view
                                                                                request</button>
                                                                        </td>
                                                                    </tr>

                                                                    <tr>
                                                                        <th scope="row">3</th>
                                                                        <td>Mary Poppins</td>
                                                                        <td>Data Analyis and Mining</td>
                                                                        <td>Training</td>
                                                                        <td>Sauti Mpya</td>
                                                                        <td>0</td>
                                                                        <td>8,700,000 <span class="badge badge-success">TZS</span>
                                                                        </td>
                                                                        <td>2019-09-11</td>
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
                                                    <!-- end of SECOND column -->
                                                </div>

                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="pillars-pills-is-projects-content" role="tabpanel" aria-labelledby="vdsreqs-pills-profile-tab">
                                            {{-- my retirements --}}
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="card">
                                                        <div class="card-content table-responsive">
                                                            <br />
                                                            @php
                                                            $dsproject=$projects->where('pillar_ref_id',5);
                                                            $ds=1;
                                                            @endphp
                                                            @if(count($dsproject)==0)
                                                            <div class="d-flex p-2 bg-info justify-content-center">No Projects Found!</div>
                                                            @else

                                                            <table class="table table-bordered table-hover">
                                                                <p><strong>Data Science Projects</strong></p>
                                                                <thead>

                                                                    <tr>
                                                                        <th scope="col">#</th>
                                                                        <th scope="col">Created by</th>
                                                                        <th scope="col-md-4">Title</th>

                                                                        <th scope="col">Total Cost</th>
                                                                        <th scope="col">current stage</th>
                                                                        <th scope="col">status</th>
                                                                        <th scope="col">Date created</th>
                                                                        <th scope="col"></th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    @foreach($dsproject as $pro)

                                                                    <tr>
                                                                        <th scope="row">{{$ds}}</th>
                                                                        <td>{{$pro->user->fname}} {{$pro->user->lname }}</td>
                                                                        <td>{{$pro->project_title }}</td>
                                                                        <td>{{$pro->total_project_cost}}
                                                                            <span class="badge badge-success">TZS</span>
                                                                        </td>
                                                                        <td class=" ">{{ $pro->current_stage }}</td>
                                                                        <td class="">{{ $pro->review_status }}</td>
                                                                        <td>{{$pro->created_at}}
                                                                        </td>
                                                                        <td class="w-30 p-2">
                                                                            <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#pr{{$pro->project_id }}"> Actions
                                                                            </button>
                                                                            <!-- Modal -->
                                                                            <div class="modal fade" id="pr{{$pro->project_id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" data-proj="{{ $pro->project_id }}" data-user="{{ Auth::user()->user_id }}">
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
                                                                                                    <a href="" class="btn  btn-outline-secondary d-flex justify-content-between">
                                                                                                        <i class="fas fa-chalkboard fa-lg mt-auto mb-auto"></i>
                                                                                                        <p class="m-auto">Review project</p>
                                                                                                    </a>

                                                                                                </li>
                                                                                                <li class="list-group-item">
                                                                                                    <a href="{{ route('pillar-project.show',   $pro->project_id)}}" class="btn btn-outline-success d-flex justify-content-between" data-bs-toggle="tooltip" data-bs-placement="top" title="view project full details">
                                                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                                                                                            <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                                                                                                            <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                                                                                                        </svg>
                                                                                                        <p class="m-auto">Project Details</p>
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
                                                                        </td>
                                                                    </tr>
                                                                    @php $ds++; @endphp
                                                                    @endforeach
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
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <!-- end of SECOND column -->
                                                </div>

                                            </div>
                                        </div>

                                        <div class="tab-pane fade" id="pillars-pills-is-imprests-content" role="tabpanel" aria-labelledby="vdsreqs-pills-settings-tab">
                                            {{-- data science imprests --}}
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    @php
                                                    $dsimprest=$imprests->where('pillar_id',5);
                                                    @endphp
                                                    @if(count($dsimprest)==0)
                                                    <div class="d-flex p-2 justify-content-center">No Record Found!</div>
                                                    @else
                                                    <table class="table table-bordered table-hover">
                                                        <p>All created <strong>imprest</strong> in Data science Pillar</p>
                                                        <thead>
                                                            <tr>
                                                                <th scope="col">#</th>
                                                                <th scope="col">Requested by</th>
                                                                <th scope="col-md-4">Title</th>
                                                                <th scope="col">Current Stage</th>
                                                                <th scope="col">Status</th>
                                                                <th scope="col">Total Cost</th>
                                                                <th scope="col">Date created</th>

                                                                <th scope="col"></th>

                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @php $n=1;@endphp

                                                            @foreach($dsimprest as $imp)
                                                            <tr>
                                                                <th scope="row">{{$n}}.</th>
                                                                <td>{{$imp->requestedby->fname}}</td>
                                                                <td>{{$imp->imp_title}}</td>
                                                                <td> on review finance</td>
                                                                <td></td>
                                                                <td>{{$imp->amount_rqst}}</td>
                                                                <td>{{$imp->created_at->format('Y-m-d') }}</span>
                                                                </td>

                                                                <td class=" p-2">
                                                                    <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#rq{{$imp->id}}"> Actions
                                                                    </button>
                                                                    <!-- Modal -->
                                                                    <div class="modal fade" id="rq{{$imp->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header">

                                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                        <span aria-hidden="true">&times;</span>
                                                                                    </button>
                                                                                </div>
                                                                                <div class="modal-body">
                                                                                    <ul class="list-group-flush">

                                                                                        <li class="list-group-item">
                                                                                            <a href="{{ route('imprest.show',   $imp->id)}}" class="btn btn-outline-success d-flex justify-content-between" data-bs-toggle="tooltip" data-bs-placement="top" title="view project full details">
                                                                                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                                                                                    <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                                                                                                    <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                                                                                                </svg>
                                                                                                <p class="m-auto">Imprest Details & retirements</p>
                                                                                            </a>

                                                                                        </li>
                                                                                        <li class="list-group-item">
                                                                                            <a href="" class="btn btn-outline-info btn-md d-flex justify-content-between" data-bs-toggle="tooltip" data-bs-placement="top" title="view update project details">
                                                                                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-arrow-up-circle" viewBox="0 0 16 16">
                                                                                                    <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-7.5 3.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V11.5z" />
                                                                                                </svg>
                                                                                                <p class="m-auto">Review Imprest </p>
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
                                                                </td>
                                                            </tr>
                                                            @php $n++;@endphp
                                                            @endforeach


                                                        </tbody>

                                                    </table>

                                                    <br />
                                                    <br />
                                                    <nav aria-label="Page navigation example">
                                                        <ul class="pagination">
                                                            <li class="page-item">
                                                                <a class="page-link" href="#" aria-label="Previous">
                                                                    <span aria-hidden="true">&laquo;</span>
                                                                    <span class="sr-only">Previous</span>
                                                                </a>
                                                            </li>
                                                            <li class="page-item"><a class="page-link" href="#">1</a>
                                                            </li>
                                                            <li class="page-item"><a class="page-link" href="#">2</a>
                                                            </li>
                                                            <li class="page-item"><a class="page-link" href="#">3</a>
                                                            </li>
                                                            <li class="page-item">
                                                                <a class="page-link" href="#" aria-label="Next">
                                                                    <span aria-hidden="true">&raquo;</span>
                                                                    <span class="sr-only">Next</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </nav>
                                                    @endif
                                                    <!-- end of SECOND column -->
                                                </div>

                                            </div>

                                        </div>

                                        <div class="tab-pane fade" id="pillars-pills-is-activities-content" role="tabpanel" aria-labelledby="pillars-pills-ds-activities-tab">
                                            {{-- data science activities --}}
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="card">
                                                        <div class="card-content table-responsive">
                                                            <br />

                                                            @php
                                                            $myact=$activities->where('pillar_ref_id',5);
                                                            $act=1;
                                                            @endphp
                                                            @if(count($myact)==0)
                                                            <div class="d-flex p-2 justify-content-center">No Record Found!</div>
                                                            @else
                                                            <table class="table table-bordered table-hover">
                                                                <p class="d-flex justify-content-between"><strong>All activities from Data science</strong>

                                                                </p>
                                                                <thead>
                                                                    <tr>
                                                                        <th scope="col">#</th>
                                                                        <th scope="col">Activity title</th>
                                                                        <th scope="col-md-4">Total Estimated cost</th>
                                                                        <th scope="col">current stage</th>
                                                                        <th scope="col">Date created</th>
                                                                        <th scope="col"></th>

                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    @foreach($myact as $myactiv)
                                                                    <tr>
                                                                        <th scope="row">{{ $act }}</th>
                                                                        <td class="w-30 p-2">{{ $myactiv->act_title }}</td>
                                                                        <td class="w-30 p-2">{{ $myactiv->total_act_cost }}</td>
                                                                        <td class="w-30  p-2">{{ $myactiv->current_stage }}</td>
                                                                        <td class="w-10 p-2">{{ $myactiv->created_at }}</td>
                                                                        <td class="w-30 p-2">
                                                                            <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#act{{$myactiv->pillar_act_id}}"> Actions
                                                                            </button>
                                                                            <!-- Modal -->
                                                                            <div class="modal fade" id="act{{$myactiv->pillar_act_id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" data-proj="{{ $myactiv->pillar_act_id }}" data-user="{{ Auth::user()->user_id }}">
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
                                                                                                    <a href="{{ route('pillar-activity.show',   $myactiv->pillar_act_id)}}" class="btn btn-outline-success d-flex justify-content-between" data-bs-toggle="tooltip" data-bs-placement="top" title="view project full details">
                                                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                                                                                            <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                                                                                                            <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                                                                                                        </svg>
                                                                                                        <p class="m-auto">Activity Details</p>
                                                                                                    </a>

                                                                                                </li>
                                                                                                <li class="list-group-item">
                                                                                                    <a href="" class="btn btn-outline-info btn-md d-flex justify-content-between" data-bs-toggle="tooltip" data-bs-placement="top" title="view update project details">
                                                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-arrow-up-circle" viewBox="0 0 16 16">
                                                                                                            <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-7.5 3.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V11.5z" />
                                                                                                        </svg>
                                                                                                        <p class="m-auto">Review Activity </p>
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
                                                                        </td>
                                                                    </tr>
                                                                    @php $act++ @endphp
                                                                    @endforeach
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
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <!-- end of SECOND column -->
                                                </div>

                                            </div>


                                        </div>

                                        <div class="tab-pane fade" id="pillars-pills-is-sub-activities-content" role="tabpanel" aria-labelledby="pillars-pills-ds-sub-activities-tab">
                                            <div class="row"> {{-- data science sub activities --}}
                                                <div class="col-lg-12">
                                                    <div class="card">
                                                        <div class="card-content table-responsive">
                                                            <br />
                                                            @php
                                                            $mysubactivities=$subactivities->where('pillar_ref_id',5);
                                                            @endphp
                                                            @if(count($mysubactivities)==0)
                                                            <div class="d-flex p-2 justify-content-center">No Record Found!</div>
                                                            @else
                                                            <table class="table table-bordered table-hover">
                                                                <p class="d-flex justify-content-between"><strong>All SubActivitiesfrom Data science</strong>

                                                                </p>
                                                                <thead>
                                                                    <tr>
                                                                        <th scope="col">#</th>
                                                                        <th scope="col">SubActivity title</th>
                                                                        <th scope="col-md-4">Total Estimated cost</th>
                                                                        <th scope="col">current stage</th>
                                                                        <th scope="col">status</th>
                                                                        <th scope="col">Date created</th>
                                                                        <th scope="col"></th>

                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    @php $i=0;@endphp @foreach($mysubactivities as $myact)
                                                                    @php $i++;@endphp <tr>
                                                                        <th scope="row">{{ $i}}</th>
                                                                        <td class="w-30 p-2">{{ $myact->subact_title }}</td>
                                                                        <td class="w-30 p-2">{{ $myact->total_subactivity_cost }}</td>
                                                                        <td class="w-30  p-2">{{ $myact->current_stage }}</td>
                                                                        <td class="w-30  p-2">{{ $myact->review_status }}</td>
                                                                        <td class="w-10 p-2">{{ $myact->created_at }}</td>
                                                                        <td class="w-30 p-2">
                                                                            <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#subact{{$myact->id}}"> Actions
                                                                            </button>
                                                                            <!-- Modal -->
                                                                            <div class="modal fade" id="subact{{$myact->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
                                                                                                    <a href="{{ route('pillar-subactivity.show',$myact->id)}}" class="btn btn-outline-success d-flex justify-content-between" data-bs-toggle="tooltip" data-bs-placement="top" title="view project full details">
                                                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                                                                                            <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                                                                                                            <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                                                                                                        </svg>
                                                                                                        <p class="m-auto">SubActivity Details</p>
                                                                                                    </a>

                                                                                                </li>
                                                                                                <li class="list-group-item">
                                                                                                    <a href="" class="btn btn-outline-info btn-md d-flex justify-content-between" data-bs-toggle="tooltip" data-bs-placement="top" title="view update project details">
                                                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-arrow-up-circle" viewBox="0 0 16 16">
                                                                                                            <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-7.5 3.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V11.5z" />
                                                                                                        </svg>
                                                                                                        <p class="m-auto">Review SubActivity </p>
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
                                                                        </td>
                                                                    </tr>
                                                                    @endforeach
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
                                                            @endif
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

                        <div class="tab-pane fade" id="finance-pillars-nav-cc-content" role="tabpanel" aria-labelledby="finance-pillars-nav-cc-nav">
                            <br />
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="nav flex-column nav-pills" id="vds-finance-pillars-pills-tab" role="tablist" aria-orientation="vertical">
                                        <a class="nav-link active" id="pillars-pills-cc-requests-tab" data-toggle="pill" href="#pillars-pills-cc-requests-content" role="tab" aria-controls="" aria-selected="true">Requests</a>

                                        <a class="nav-link" id="pillars-pills-cc-projects-tab" data-toggle="pill" href="#pillars-pills-cc-projects-content" role="tab" aria-controls="pillars-pills-cc-content-tab" aria-selected="false">Projects</a>

                                        <a class="nav-link" id="pillars-pills-cc-imprests-tab" data-toggle="pill" href="#pillars-pills-cc-imprests-content" role="tab" aria-controls="pillars-pills-funds-tab" aria-selected="false">Imprests</a>


                                        <a class="nav-link" id="pillars-pills-cc-activities-tab" data-toggle="pill" href="#pillars-pills-cc-activities-content" role="tab" aria-controls="pillars-pills-funds-tab" aria-selected="false">Activities</a>

                                        <a class="nav-link" id="pillars-pills-cc-sub-activities-tab" data-toggle="pill" href="#pillars-pills-cc-sub-activities-content" role="tab" aria-controls="pillars-pills-funds-tab" aria-selected="false">Sub Activities</a>




                                    </div>
                                </div>
                                <div class="col-md-10">

                                    <div class="tab-content" id="cc-finance-pillars-pills-tabContent">

                                        <div class="tab-pane fade show active" id="pillars-pills-cc-requests-content" role="tabpanel" aria-labelledby="pills-finance-pillars-tab">
                                            {{-- my retirements --}}

                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="card">
                                                        <div class="card-content table-responsive">
                                                            <br />
                                                            <table class="table table-bordered table-hover">
                                                                <p><strong>Data Science requests.</strong></p>
                                                                <thead>
                                                                    <tr>
                                                                        <th scope="col">#</th>
                                                                        <th scope="col">Requested by</th>
                                                                        <th scope="col-md-4">Title</th>
                                                                        <th scope="col">Request Type</th>
                                                                        <th scope="col">Under Project</th>
                                                                        <th scope="col"># of approvals</th>
                                                                        <th scope="col">Total Cost</th>
                                                                        <th scope="col">Date created</th>

                                                                        <th scope="col"></th>

                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <th scope="row">1</th>
                                                                        <td>MarkCuban</td>
                                                                        <td>Data visualisation in Mbeya</td>
                                                                        <td>Training</td>
                                                                        <td>Sauti Mpya</td>
                                                                        <td>0</td>
                                                                        <td>2,300,000 <span class="badge badge-success">TZS</span>
                                                                        </td>
                                                                        <td>2019-09-11</td>
                                                                        <td>
                                                                            <button type="button" class="btn btn-outline-success">view
                                                                                request</button>
                                                                        </td>
                                                                    </tr>

                                                                    <tr>
                                                                        <th scope="row">4</th>
                                                                        <td>Jane Sharpe</td>
                                                                        <td>Data Mining in Dar</td>
                                                                        <td>Training</td>
                                                                        <td>Data Zetu</td>
                                                                        <td>0</td>
                                                                        <td>6,600,000 <span class="badge badge-success">TZS</span>
                                                                        </td>
                                                                        <td>2019-09-11</td>
                                                                        <td>
                                                                            <button type="button" class="btn btn-outline-success">view
                                                                                request</button>
                                                                        </td>
                                                                    </tr>

                                                                    <tr>
                                                                        <th scope="row">3</th>
                                                                        <td>Mary Poppins</td>
                                                                        <td>Data Analyis and Mining</td>
                                                                        <td>Training</td>
                                                                        <td>Sauti Mpya</td>
                                                                        <td>0</td>
                                                                        <td>8,700,000 <span class="badge badge-success">TZS</span>
                                                                        </td>
                                                                        <td>2019-09-11</td>
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
                                                    <!-- end of SECOND column -->
                                                </div>

                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="pillars-pills-cc-projects-content" role="tabpanel" aria-labelledby="vdsreqs-pills-profile-tab">
                                            {{-- my retirements --}}
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="card">
                                                        <div class="card-content table-responsive">
                                                            <br />
                                                            @php
                                                            $dsproject=$projects->where('pillar_ref_id',5);
                                                            $ds=1;
                                                            @endphp
                                                            @if(count($dsproject)==0)
                                                            <div class="d-flex p-2 bg-info justify-content-center">No Projects Found!</div>
                                                            @else

                                                            <table class="table table-bordered table-hover">
                                                                <p><strong>Data Science Projects</strong></p>
                                                                <thead>

                                                                    <tr>
                                                                        <th scope="col">#</th>
                                                                        <th scope="col">Created by</th>
                                                                        <th scope="col-md-4">Title</th>

                                                                        <th scope="col">Total Cost</th>
                                                                        <th scope="col">current stage</th>
                                                                        <th scope="col">status</th>
                                                                        <th scope="col">Date created</th>
                                                                        <th scope="col"></th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    @foreach($dsproject as $pro)

                                                                    <tr>
                                                                        <th scope="row">{{$ds}}</th>
                                                                        <td>{{$pro->user->fname}} {{$pro->user->lname }}</td>
                                                                        <td>{{$pro->project_title }}</td>
                                                                        <td>{{$pro->total_project_cost}}
                                                                            <span class="badge badge-success">TZS</span>
                                                                        </td>
                                                                        <td class=" ">{{ $pro->current_stage }}</td>
                                                                        <td class="">{{ $pro->review_status }}</td>
                                                                        <td>{{$pro->created_at}}
                                                                        </td>
                                                                        <td class="w-30 p-2">
                                                                            <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#pr{{$pro->project_id }}"> Actions
                                                                            </button>
                                                                            <!-- Modal -->
                                                                            <div class="modal fade" id="pr{{$pro->project_id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" data-proj="{{ $pro->project_id }}" data-user="{{ Auth::user()->user_id }}">
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
                                                                                                    <a href="" class="btn  btn-outline-secondary d-flex justify-content-between">
                                                                                                        <i class="fas fa-chalkboard fa-lg mt-auto mb-auto"></i>
                                                                                                        <p class="m-auto">Review project</p>
                                                                                                    </a>

                                                                                                </li>
                                                                                                <li class="list-group-item">
                                                                                                    <a href="{{ route('pillar-project.show',   $pro->project_id)}}" class="btn btn-outline-success d-flex justify-content-between" data-bs-toggle="tooltip" data-bs-placement="top" title="view project full details">
                                                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                                                                                            <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                                                                                                            <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                                                                                                        </svg>
                                                                                                        <p class="m-auto">Project Details</p>
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
                                                                        </td>
                                                                    </tr>
                                                                    @php $ds++; @endphp
                                                                    @endforeach
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
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <!-- end of SECOND column -->
                                                </div>

                                            </div>
                                        </div>

                                        <div class="tab-pane fade" id="pillars-pills-cc-imprests-content" role="tabpanel" aria-labelledby="vdsreqs-pills-settings-tab">
                                            {{-- data science imprests --}}
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    @php
                                                    $dsimprest=$imprests->where('pillar_id',5);
                                                    @endphp
                                                    @if(count($dsimprest)==0)
                                                    <div class="d-flex p-2 justify-content-center">No Record Found!</div>
                                                    @else
                                                    <table class="table table-bordered table-hover">
                                                        <p>All created <strong>imprest</strong> in Data science Pillar</p>
                                                        <thead>
                                                            <tr>
                                                                <th scope="col">#</th>
                                                                <th scope="col">Requested by</th>
                                                                <th scope="col-md-4">Title</th>
                                                                <th scope="col">Current Stage</th>
                                                                <th scope="col">Status</th>
                                                                <th scope="col">Total Cost</th>
                                                                <th scope="col">Date created</th>

                                                                <th scope="col"></th>

                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @php $n=1;@endphp

                                                            @foreach($dsimprest as $imp)
                                                            <tr>
                                                                <th scope="row">{{$n}}.</th>
                                                                <td>{{$imp->requestedby->fname}}</td>
                                                                <td>{{$imp->imp_title}}</td>
                                                                <td> on review finance</td>
                                                                <td></td>
                                                                <td>{{$imp->amount_rqst}}</td>
                                                                <td>{{$imp->created_at->format('Y-m-d') }}</span>
                                                                </td>

                                                                <td class=" p-2">
                                                                    <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#rq{{$imp->id}}"> Actions
                                                                    </button>
                                                                    <!-- Modal -->
                                                                    <div class="modal fade" id="rq{{$imp->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header">

                                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                        <span aria-hidden="true">&times;</span>
                                                                                    </button>
                                                                                </div>
                                                                                <div class="modal-body">
                                                                                    <ul class="list-group-flush">

                                                                                        <li class="list-group-item">
                                                                                            <a href="{{ route('imprest.show',   $imp->id)}}" class="btn btn-outline-success d-flex justify-content-between" data-bs-toggle="tooltip" data-bs-placement="top" title="view project full details">
                                                                                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                                                                                    <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                                                                                                    <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                                                                                                </svg>
                                                                                                <p class="m-auto">Imprest Details & retirements</p>
                                                                                            </a>

                                                                                        </li>
                                                                                        <li class="list-group-item">
                                                                                            <a href="" class="btn btn-outline-info btn-md d-flex justify-content-between" data-bs-toggle="tooltip" data-bs-placement="top" title="view update project details">
                                                                                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-arrow-up-circle" viewBox="0 0 16 16">
                                                                                                    <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-7.5 3.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V11.5z" />
                                                                                                </svg>
                                                                                                <p class="m-auto">Review Imprest </p>
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
                                                                </td>
                                                            </tr>
                                                            @php $n++;@endphp
                                                            @endforeach


                                                        </tbody>

                                                    </table>

                                                    <br />
                                                    <br />
                                                    <nav aria-label="Page navigation example">
                                                        <ul class="pagination">
                                                            <li class="page-item">
                                                                <a class="page-link" href="#" aria-label="Previous">
                                                                    <span aria-hidden="true">&laquo;</span>
                                                                    <span class="sr-only">Previous</span>
                                                                </a>
                                                            </li>
                                                            <li class="page-item"><a class="page-link" href="#">1</a>
                                                            </li>
                                                            <li class="page-item"><a class="page-link" href="#">2</a>
                                                            </li>
                                                            <li class="page-item"><a class="page-link" href="#">3</a>
                                                            </li>
                                                            <li class="page-item">
                                                                <a class="page-link" href="#" aria-label="Next">
                                                                    <span aria-hidden="true">&raquo;</span>
                                                                    <span class="sr-only">Next</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </nav>
                                                    @endif
                                                    <!-- end of SECOND column -->
                                                </div>

                                            </div>

                                        </div>

                                        <div class="tab-pane fade" id="pillars-pills-cc-activities-content" role="tabpanel" aria-labelledby="pillars-pills-ds-activities-tab">
                                            {{-- data science activities --}}
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="card">
                                                        <div class="card-content table-responsive">
                                                            <br />

                                                            @php
                                                            $myact=$activities->where('pillar_ref_id',5);
                                                            $act=1;
                                                            @endphp
                                                            @if(count($myact)==0)
                                                            <div class="d-flex p-2 justify-content-center">No Record Found!</div>
                                                            @else
                                                            <table class="table table-bordered table-hover">
                                                                <p class="d-flex justify-content-between"><strong>All activities from Data science</strong>

                                                                </p>
                                                                <thead>
                                                                    <tr>
                                                                        <th scope="col">#</th>
                                                                        <th scope="col">Activity title</th>
                                                                        <th scope="col-md-4">Total Estimated cost</th>
                                                                        <th scope="col">current stage</th>
                                                                        <th scope="col">Date created</th>
                                                                        <th scope="col"></th>

                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    @foreach($myact as $myactiv)
                                                                    <tr>
                                                                        <th scope="row">{{ $act }}</th>
                                                                        <td class="w-30 p-2">{{ $myactiv->act_title }}</td>
                                                                        <td class="w-30 p-2">{{ $myactiv->total_act_cost }}</td>
                                                                        <td class="w-30  p-2">{{ $myactiv->current_stage }}</td>
                                                                        <td class="w-10 p-2">{{ $myactiv->created_at }}</td>
                                                                        <td class="w-30 p-2">
                                                                            <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#act{{$myactiv->pillar_act_id}}"> Actions
                                                                            </button>
                                                                            <!-- Modal -->
                                                                            <div class="modal fade" id="act{{$myactiv->pillar_act_id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" data-proj="{{ $myactiv->pillar_act_id }}" data-user="{{ Auth::user()->user_id }}">
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
                                                                                                    <a href="{{ route('pillar-activity.show',   $myactiv->pillar_act_id)}}" class="btn btn-outline-success d-flex justify-content-between" data-bs-toggle="tooltip" data-bs-placement="top" title="view project full details">
                                                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                                                                                            <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                                                                                                            <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                                                                                                        </svg>
                                                                                                        <p class="m-auto">Activity Details</p>
                                                                                                    </a>

                                                                                                </li>
                                                                                                <li class="list-group-item">
                                                                                                    <a href="" class="btn btn-outline-info btn-md d-flex justify-content-between" data-bs-toggle="tooltip" data-bs-placement="top" title="view update project details">
                                                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-arrow-up-circle" viewBox="0 0 16 16">
                                                                                                            <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-7.5 3.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V11.5z" />
                                                                                                        </svg>
                                                                                                        <p class="m-auto">Review Activity </p>
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
                                                                        </td>
                                                                    </tr>
                                                                    @php $act++ @endphp
                                                                    @endforeach
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
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <!-- end of SECOND column -->
                                                </div>

                                            </div>


                                        </div>

                                        <div class="tab-pane fade" id="pillars-pills-cc-sub-activities-content" role="tabpanel" aria-labelledby="pillars-pills-ds-sub-activities-tab">
                                            <div class="row"> {{-- data science sub activities --}}
                                                <div class="col-lg-12">
                                                    <div class="card">
                                                        <div class="card-content table-responsive">
                                                            <br />
                                                            @php
                                                            $mysubactivities=$subactivities->where('pillar_ref_id',5);
                                                            @endphp
                                                            @if(count($mysubactivities)==0)
                                                            <div class="d-flex p-2 justify-content-center">No Record Found!</div>
                                                            @else
                                                            <table class="table table-bordered table-hover">
                                                                <p class="d-flex justify-content-between"><strong>All SubActivitiesfrom Data science</strong>

                                                                </p>
                                                                <thead>
                                                                    <tr>
                                                                        <th scope="col">#</th>
                                                                        <th scope="col">SubActivity title</th>
                                                                        <th scope="col-md-4">Total Estimated cost</th>
                                                                        <th scope="col">current stage</th>
                                                                        <th scope="col">status</th>
                                                                        <th scope="col">Date created</th>
                                                                        <th scope="col"></th>

                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    @php $i=0;@endphp @foreach($mysubactivities as $myact)
                                                                    @php $i++;@endphp <tr>
                                                                        <th scope="row">{{ $i}}</th>
                                                                        <td class="w-30 p-2">{{ $myact->subact_title }}</td>
                                                                        <td class="w-30 p-2">{{ $myact->total_subactivity_cost }}</td>
                                                                        <td class="w-30  p-2">{{ $myact->current_stage }}</td>
                                                                        <td class="w-30  p-2">{{ $myact->review_status }}</td>
                                                                        <td class="w-10 p-2">{{ $myact->created_at }}</td>
                                                                        <td class="w-30 p-2">
                                                                            <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#subact{{$myact->id}}"> Actions
                                                                            </button>
                                                                            <!-- Modal -->
                                                                            <div class="modal fade" id="subact{{$myact->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
                                                                                                    <a href="{{ route('pillar-subactivity.show',$myact->id)}}" class="btn btn-outline-success d-flex justify-content-between" data-bs-toggle="tooltip" data-bs-placement="top" title="view project full details">
                                                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                                                                                            <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                                                                                                            <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                                                                                                        </svg>
                                                                                                        <p class="m-auto">SubActivity Details</p>
                                                                                                    </a>

                                                                                                </li>
                                                                                                <li class="list-group-item">
                                                                                                    <a href="" class="btn btn-outline-info btn-md d-flex justify-content-between" data-bs-toggle="tooltip" data-bs-placement="top" title="view update project details">
                                                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-arrow-up-circle" viewBox="0 0 16 16">
                                                                                                            <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-7.5 3.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V11.5z" />
                                                                                                        </svg>
                                                                                                        <p class="m-auto">Review SubActivity </p>
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
                                                                        </td>
                                                                    </tr>
                                                                    @endforeach
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
                                                            @endif
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

                </div>
            </div>
            <div class="tab-pane fade" id="finance-pills-funds-content" role="tabpanel" aria-labelledby="vdsreqs-pills-profile-tab">
                {{-- my retirements --}}
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-content table-responsive">
                                <br />
                                <table class="table table-bordered table-hover">
                                    <p><strong>Applicants Shortlisted</strong></p>
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Requested by</th>
                                            <th scope="col-md-4">Title</th>
                                            <th scope="col">Request Type</th>
                                            <th scope="col">Under Project</th>
                                            <th scope="col"># of approvals</th>
                                            <th scope="col">Total Cost</th>
                                            <th scope="col">Date created</th>

                                            <th scope="col"></th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>MarkCuban</td>
                                            <td>Data visualisation in Mbeya</td>
                                            <td>Training</td>
                                            <td>Sauti Mpya</td>
                                            <td>0</td>
                                            <td>2,300,000 <span class="badge badge-success">TZS</span>
                                            </td>
                                            <td>2019-09-11</td>
                                            <td>
                                                <button type="button" class="btn btn-outline-success">view
                                                    request</button>
                                            </td>
                                        </tr>

                                        <tr>
                                            <th scope="row">4</th>
                                            <td>Jane Sharpe</td>
                                            <td>Data Mining in Dar</td>
                                            <td>Training</td>
                                            <td>Data Zetu</td>
                                            <td>0</td>
                                            <td>6,600,000 <span class="badge badge-success">TZS</span>
                                            </td>
                                            <td>2019-09-11</td>
                                            <td>
                                                <button type="button" class="btn btn-outline-success">view
                                                    request</button>
                                            </td>
                                        </tr>

                                        <tr>
                                            <th scope="row">3</th>
                                            <td>Mary Poppins</td>
                                            <td>Data Analyis and Mining</td>
                                            <td>Training</td>
                                            <td>Sauti Mpya</td>
                                            <td>0</td>
                                            <td>8,700,000 <span class="badge badge-success">TZS</span>
                                            </td>
                                            <td>2019-09-11</td>
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
                        <!-- end of SECOND column -->
                    </div>

                </div>
            </div>

            <div class="tab-pane fade" id="finance-pills-financial-reports-content" role="tabpanel" aria-labelledby="vdsreqs-pills-settings-tab">
                {{-- my retirements --}}
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-content table-responsive">
                                <br />
                                <table class="table table-bordered table-hover">
                                    <p>
                                        <strong>Financial reports.</strong>
                                    </p>

                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#newDSimprest">
                                        create new report
                                    </button>
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Requested by</th>
                                            <th scope="col-md-4">Title</th>
                                            <th scope="col">Request Type</th>
                                            <th scope="col">Under Project</th>
                                            <th scope="col"># of approvals</th>
                                            <th scope="col">Total Cost</th>
                                            <th scope="col">Date created</th>

                                            <th scope="col"></th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>MarkCuban</td>
                                            <td>Data visualisation in Mbeya</td>
                                            <td>Training</td>
                                            <td>Sauti Mpya</td>
                                            <td>0</td>
                                            <td>2,300,000 <span class="badge badge-success">TZS</span>
                                            </td>
                                            <td>2019-09-11</td>
                                            <td>
                                                <button type="button" class="btn btn-outline-success">view
                                                    request</button>
                                            </td>
                                        </tr>

                                        <tr>
                                            <th scope="row">4</th>
                                            <td>Jane Sharpe</td>
                                            <td>Data Mining in Dar</td>
                                            <td>Training</td>
                                            <td>Data Zetu</td>
                                            <td>0</td>
                                            <td>6,600,000 <span class="badge badge-success">TZS</span>
                                            </td>
                                            <td>2019-09-11</td>
                                            <td>
                                                <button type="button" class="btn btn-outline-success">view
                                                    request</button>
                                            </td>
                                        </tr>

                                        <tr>
                                            <th scope="row">3</th>
                                            <td>Mary Poppins</td>
                                            <td>Data Analyis and Mining</td>
                                            <td>Training</td>
                                            <td>Sauti Mpya</td>
                                            <td>0</td>
                                            <td>8,700,000 <span class="badge badge-success">TZS</span>
                                            </td>
                                            <td>2019-09-11</td>
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
                        <!-- end of SECOND column -->
                    </div>

                </div>

            </div>

        </div>


        <!-- end of finance line manager adminstration data column -->

        <!-- =========================================
               =                                       =
               =             start of financial adminstration data =
               ========================================= -->

        <div class="tab-pane tb fade" id="finance-executive-dir-content" role="tabpanel" aria-labelledby="finance-admin-tab-md">
            {{-- financial administration --}}
            <div class="row">
                <div class="col-md-2">
                    <div class="nav flex-column nav-pills" id="vds-finance-executive-dir-main-pills-tab" role="tablist" aria-orientation="vertical">
                        <a class="nav-link active" id="finance-pills-bank-accounts-tab" data-toggle="pill" href="#finance-pills-bank-accounts-content" role="tab" aria-controls="" aria-selected="true">Requests</a>

                        <a class="nav-link" id="finance-pills-funds-tab" data-toggle="pill" href="#finance-pills-funds-content" role="tab" aria-controls="finance-pills-funds-tab" aria-selected="false">Fund allocation</a>

                        <a class="nav-link" id="vds-ds-grantees-pills-pitched-tab" data-toggle="pill" href="#finance-pills-financial-reports-content" role="tab" aria-controls="vdsreqs-pills-pitched" aria-selected="false">Approvals</a>

                    </div>
                </div>
                <div class="col-md-10">

                    <div class="tab-content" id="vds-ds-impr-pills-tabContent">
                        <div class="tab-pane fade show active" id="finance-pills-bank-accounts-content" role="tabpanel" aria-labelledby="impr-pills-home-tab">
                            {{-- my retirements --}}

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-content table-responsive">
                                            <br />
                                            <br />
                                            <table class="table table-bordered table-hover">
                                                <p><strong>New Applicants.</strong></p>
                                                <thead>
                                                    <tr>
                                                        <th scope="col">#</th>
                                                        <th scope="col">Requested by</th>
                                                        <th scope="col-md-4">Title</th>
                                                        <th scope="col">Request Type</th>
                                                        <th scope="col">Under Project</th>
                                                        <th scope="col"># of approvals</th>
                                                        <th scope="col">Total Cost</th>
                                                        <th scope="col">Date created</th>

                                                        <th scope="col"></th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th scope="row">1</th>
                                                        <td>MarkCuban</td>
                                                        <td>Data visualisation in Mbeya</td>
                                                        <td>Training</td>
                                                        <td>Sauti Mpya</td>
                                                        <td>0</td>
                                                        <td>2,300,000 <span class="badge badge-success">TZS</span>
                                                        </td>
                                                        <td>2019-09-11</td>
                                                        <td>
                                                            <button type="button" class="btn btn-outline-success">view
                                                                request</button>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <th scope="row">4</th>
                                                        <td>Jane Sharpe</td>
                                                        <td>Data Mining in Dar</td>
                                                        <td>Training</td>
                                                        <td>Data Zetu</td>
                                                        <td>0</td>
                                                        <td>6,600,000 <span class="badge badge-success">TZS</span>
                                                        </td>
                                                        <td>2019-09-11</td>
                                                        <td>
                                                            <button type="button" class="btn btn-outline-success">view
                                                                request</button>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <th scope="row">3</th>
                                                        <td>Mary Poppins</td>
                                                        <td>Data Analyis and Mining</td>
                                                        <td>Training</td>
                                                        <td>Sauti Mpya</td>
                                                        <td>0</td>
                                                        <td>8,700,000 <span class="badge badge-success">TZS</span>
                                                        </td>
                                                        <td>2019-09-11</td>
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
                                    <!-- end of SECOND column -->
                                </div>

                            </div>
                        </div>
                        <div class="tab-pane fade" id="finance-pills-funds-content" role="tabpanel" aria-labelledby="vdsreqs-pills-profile-tab">
                            {{-- my retirements --}}
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-content table-responsive">
                                            <br />
                                            <table class="table table-bordered table-hover">
                                                <p><strong>Applicants Shortlisted</strong></p>
                                                <thead>
                                                    <tr>
                                                        <th scope="col">#</th>
                                                        <th scope="col">Requested by</th>
                                                        <th scope="col-md-4">Title</th>
                                                        <th scope="col">Request Type</th>
                                                        <th scope="col">Under Project</th>
                                                        <th scope="col"># of approvals</th>
                                                        <th scope="col">Total Cost</th>
                                                        <th scope="col">Date created</th>

                                                        <th scope="col"></th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th scope="row">1</th>
                                                        <td>MarkCuban</td>
                                                        <td>Data visualisation in Mbeya</td>
                                                        <td>Training</td>
                                                        <td>Sauti Mpya</td>
                                                        <td>0</td>
                                                        <td>2,300,000 <span class="badge badge-success">TZS</span>
                                                        </td>
                                                        <td>2019-09-11</td>
                                                        <td>
                                                            <button type="button" class="btn btn-outline-success">view
                                                                request</button>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <th scope="row">4</th>
                                                        <td>Jane Sharpe</td>
                                                        <td>Data Mining in Dar</td>
                                                        <td>Training</td>
                                                        <td>Data Zetu</td>
                                                        <td>0</td>
                                                        <td>6,600,000 <span class="badge badge-success">TZS</span>
                                                        </td>
                                                        <td>2019-09-11</td>
                                                        <td>
                                                            <button type="button" class="btn btn-outline-success">view
                                                                request</button>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <th scope="row">3</th>
                                                        <td>Mary Poppins</td>
                                                        <td>Data Analyis and Mining</td>
                                                        <td>Training</td>
                                                        <td>Sauti Mpya</td>
                                                        <td>0</td>
                                                        <td>8,700,000 <span class="badge badge-success">TZS</span>
                                                        </td>
                                                        <td>2019-09-11</td>
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
                                    <!-- end of SECOND column -->
                                </div>

                            </div>
                        </div>

                        <div class="tab-pane fade" id="finance-pills-financial-reports-content" role="tabpanel" aria-labelledby="vdsreqs-pills-settings-tab">
                            {{-- my retirements --}}
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-content table-responsive">
                                            <br />
                                            <table class="table table-bordered table-hover">
                                                <p>
                                                    <strong>Financial reports.</strong>
                                                </p>

                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#newDSimprest">
                                                    create new report
                                                </button>
                                                <thead>
                                                    <tr>
                                                        <th scope="col">#</th>
                                                        <th scope="col">Requested by</th>
                                                        <th scope="col-md-4">Title</th>
                                                        <th scope="col">Request Type</th>
                                                        <th scope="col">Under Project</th>
                                                        <th scope="col"># of approvals</th>
                                                        <th scope="col">Total Cost</th>
                                                        <th scope="col">Date created</th>

                                                        <th scope="col"></th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th scope="row">1</th>
                                                        <td>MarkCuban</td>
                                                        <td>Data visualisation in Mbeya</td>
                                                        <td>Training</td>
                                                        <td>Sauti Mpya</td>
                                                        <td>0</td>
                                                        <td>2,300,000 <span class="badge badge-success">TZS</span>
                                                        </td>
                                                        <td>2019-09-11</td>
                                                        <td>
                                                            <button type="button" class="btn btn-outline-success">view
                                                                request</button>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <th scope="row">4</th>
                                                        <td>Jane Sharpe</td>
                                                        <td>Data Mining in Dar</td>
                                                        <td>Training</td>
                                                        <td>Data Zetu</td>
                                                        <td>0</td>
                                                        <td>6,600,000 <span class="badge badge-success">TZS</span>
                                                        </td>
                                                        <td>2019-09-11</td>
                                                        <td>
                                                            <button type="button" class="btn btn-outline-success">view
                                                                request</button>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <th scope="row">3</th>
                                                        <td>Mary Poppins</td>
                                                        <td>Data Analyis and Mining</td>
                                                        <td>Training</td>
                                                        <td>Sauti Mpya</td>
                                                        <td>0</td>
                                                        <td>8,700,000 <span class="badge badge-success">TZS</span>
                                                        </td>
                                                        <td>2019-09-11</td>
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
                                    <!-- end of SECOND column -->
                                </div>

                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- end of finance executive director adminstration data column -->


        <!-- =========================================
               =                                       =
               =             start of financial executive dir adminstration data =
               ========================================= -->

        <div class="tab-pane tb fade" id="finance-hr-content" role="tabpanel" aria-labelledby="finance-admin-tab-md">
            {{-- human resource --}}
            <div class="row">
                <div class="col-md-2">
                    <div class="nav flex-column nav-pills" id="vds-hr-tab" role="tablist" aria-orientation="vertical">
                        <a class="nav-link active" id="hr-pills-departments-tab" data-toggle="pill" href="#hr-pills-departments-content" role="tab" aria-controls="hr-pills-departments-tab" aria-selected="true">Departments & Pillars</a>

                        <a class="nav-link" id="hr-pills-staff-employee-tab" data-toggle="pill" href="#hr-pills-staff-employee-content" role="tab" aria-controls="hr-pills-staff-employee-tab" aria-selected="false">Staff / Employees</a>


                        <a class="nav-link" id="hr-pills-benefits-tab" data-toggle="pill" href="#hr-pills-benefits-content" role="tab" aria-controls="hr-pills-benefits-tab" aria-selected="false">Benefits</a>


                        <a class="nav-link" id="hr-pills-cost-sharing-tab" data-toggle="pill" href="#hr-pills-cost-sharing-content" role="tab" aria-controls="hr-pills-cost-sharing-tab" aria-selected="false">Cost Sharing</a>

                        <a class="nav-link" id="hr-pills-deductions-tab" data-toggle="pill" href="#hr-pills-deductions-content" role="tab" aria-controls="hr-pills-deductions-tab" aria-selected="false">Deductions</a>

                        <a class="nav-link" id="hr-pills-dlr-tab" data-toggle="pill" href="#hr-pills-dlr-content" role="tab" aria-controls="hr-pills-dlr-tab" aria-selected="false">Direct Loans
                            receipts</a>


                        <a class="nav-link" id="hr-pills-leave-allowance-tab" data-toggle="pill" href="#hr-pills-leave-allowance-content" role="tab" aria-controls="hr-pills-leave-allowance-tab" aria-selected="false">Leave allowance</a>

                        <a class="nav-link" id="hr-pills-leaves-tab" data-toggle="pill" href="#hr-pills-leaves-content" role="tab" aria-controls="hr-pills-leaves-tab" aria-selected="false">Leaves</a>


                        <a class="nav-link" id="hr-pills-loans-tab" data-toggle="pill" href="#hr-pills-loans-content" role="tab" aria-controls="hr-pills-loans-tab" aria-selected="false">Loans</a>

                        <a class="nav-link" id="hr-pills-payroll-tab" data-toggle="pill" href="#hr-pills-payroll-content" role="tab" aria-controls="hr-pills-payroll-tab" aria-selected="false">Payroll</a>

                        <a class="nav-link" id="hr-pills-salary-tab" data-toggle="pill" href="#hr-pills-salary-content" role="tab" aria-controls="hr-pills-salary-tab" aria-selected="false">Salary and Salary Areas</a>

                        <a class="nav-link" id="hr-pills-salary-slips-tab" data-toggle="pill" href="#hr-pills-salary-slips-content" role="tab" aria-controls="hr-pills-salary-slips-tab" aria-selected="false">Salary Slips</a>

                        <a class="nav-link" id="hr-pills-staff-appraisal-tab" data-toggle="pill" href="#hr-pills-staff-appraisal-content" role="tab" aria-controls="hr-pills-staff-appraisal-tab" aria-selected="false">Staff Appraisals</a>




                    </div>
                </div>
                <div class="col-md-10">

                    <div class="tab-content" id="vds-finance-pillars-pills-tabContent">
                        <div class="tab-pane fade show active" id="hr-pills-departments-content" role="tabpanel" aria-labelledby="pills-finance-pillars-tab">
                            {{-- departments and pillars --}}

                            <div class="container-fluid">
                                <div class="tab-pane fade show active" id="line-manager-content" role="tabpanel" aria-labelledby="line-manager-tab-md">
                                    <br />
                                    <ul class="nav nav-tabs md-tabs" id="linemanagerPanel" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="hr-departments-pill" data-toggle="tab" href="#hr-departments-content" role="tab" aria-controls="hr-departments-content-md" aria-selected="true">Departments
                                            </a>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link" id="hr-pillar-pill" data-toggle="tab" href="#hr-pillar-content" role="tab" aria-controls="hr-pillar-content-md" aria-selected="true">Pillars

                                            </a>
                                        </li>
                                    </ul>


                                    <div class="tab-content pt-5" id="selectDataViewTabContent">
                                        <!--
                                                ========================================
                                                =                                      =
                                                =       departments    =
                                                ======================================== -->
                                        <div class="tab-pane fade show active" id="hr-departments-content" role="tabpanel" aria-labelledby="hr-pillar-content-tab-md">
                                            {{-- departments --}}
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <!-- Button trigger modal -->

                                                    <a class="btn btn-outline-success btn-lg" href="{{ route('add-a-new-department') }}" role="button"> Add a New Department</a>
                                                    <div class="card">
                                                        <div class="card-content table-responsive">
                                                            <br />
                                                            <table class="table table-bordered table-hover">
                                                                <p><strong>All organisation Departments</strong></p>
                                                                <thead>
                                                                    <tr>
                                                                        <th scope="col">#</th>
                                                                        <th scope="col">Department Name</th>
                                                                        <th scope="col-md-4">Head of Deparment</th>
                                                                        <th scope="col">Description</th>
                                                                        <th scope="col">total funds allocated</th>
                                                                        <th scope="col">total staff</th>
                                                                        <th scope="col">Date created</th>
                                                                        <th scope="col"></th>
                                                                        <th scope="col"></th>


                                                                    </tr>
                                                                </thead>
                                                                <tbody>

                                                                    @foreach($departments as $department)
                                                                    <tr>
                                                                        <th scope="row">{{ $department->dept_id }}</th>
                                                                        <td class="w-30 p-2">{{ $department->dept_title }}</td>

                                                                        <td class="w-30 p-2">{{ $department->dept_manager_id }}</td>
                                                                        <td class="w-30 h-30 p-4">{{ $department->dept_description }}</td>
                                                                        <td class="w-30 h-30 p-4"> 10000000 </td>
                                                                        <td class="w-30 h-30 p-4"> 22 </td>
                                                                        <td class="w-10 p-2">{{ $department->created_at }}</td>
                                                                        <td class="w-10 p-2"><a href="{{ route('hrdepts.show', $department->dept_id)}}" class="btn btn-outline-success">view details</a>
                                                                        </td>
                                                                        <td class="w-30 p-2"><a href="{{ route('hrdepts.edit', $department->dept_id)}}" class="btn btn-outline-info btn-md">update</a>
                                                                        </td>

                                                                        {{-- {{ $department->total_fund_allocations }} --}}
                                                                        {{-- <td class="w-10 p-2"><a href="{{ route('deptmanager.edit', $deptmanager->user_id)}}"
                                                                        class="btn btn-outline-info">edit</a>
                                                                        </td> --}}
                                                                        {{-- <td class="w-20 p-2">
                                                                                <form action="{{ route('dept.destroy', $deptmanager->user_id)}}"
                                                                        method="post">
                                                                        @csrf
                                                                        @method('UPDATE')
                                                                        <button class="btn btn-outline-danger" type="submit">Delete</button>
                                                                        </form>
                                                                        </td> --}}
                                                                    </tr>

                                                                </tbody>
                                                                @endforeach
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
                                        <!-- end of departments panel -->


                                        <!--
                                                ========================================
                                                =                                      =
                                                =       pillars                       =
                                                ======================================== -->
                                        <div class="tab-pane fade" id="hr-pillar-content" role="tabpanel" aria-labelledby="hr-pillar-content-tab-md">
                                            {{-- pillars --}}
                                            <div class="row">
                                                <div class="col-lg-12">

                                                    <a class="btn btn-outline-success btn-lg" href="{{ route('add-a-new-pillar') }}" role="button"> Add a New Pillar</a>

                                                    <div class="card">
                                                        <div class="card-content table-responsive">
                                                            <br />
                                                            <table class="table table-bordered table-hover">
                                                                <br />
                                                                <p><strong>All organisation pillars</strong></p>
                                                                <br />
                                                                <br />

                                                                <thead>
                                                                    <tr>
                                                                        <th scope="col">#</th>
                                                                        <th scope="col">Pillar Name</th>
                                                                        <th scope="col">Manager</th>
                                                                        <th scope="col-md-4">Description</th>
                                                                        <th scope="col">Number of Staff</th>
                                                                        <th scope="col">total funds allocated</th>
                                                                        <th scope="col">Date created</th>
                                                                        <th scope="col">last updated</th>
                                                                        <th scope="col"></th>
                                                                        <th scope="col"></th>


                                                                    </tr>
                                                                </thead>
                                                                <tbody>

                                                                    @foreach($pillars as $pillar)
                                                                    <tr>
                                                                        <th scope="row">{{ $pillar->pillar_id }}</th>
                                                                        <td class="w-30 p-2">{{ $pillar->pillar_title }}</td>
                                                                        <td class="w-30 p-2">{{ $pillar->managers_id }}</td>
                                                                        <td class="w-30 h-30 p-4">{{ $pillar->pillar_desc }}</td>
                                                                        <td class="w-30 h-30 p-4"> {{ $pillar->total_fund_allocations }} </td>
                                                                        <td class="w-10 p-2"></td>
                                                                        <td class="w-10 p-2">{{ $pillar->created_at }}</td>
                                                                        <td class="w-10 p-2">{{ $pillar->date_updated }}</td>
                                                                        <td class="w-10 p-2"><a href="{{ route('hrpillars.show', $pillar->pillar_id)}}" class="btn btn-outline-success">view details</a>
                                                                        </td>
                                                                        <td class="w-30 p-2"><a href="{{ route('hrpillars.edit', $pillar->pillar_id)}}" class="btn btn-outline-info btn-md">update</a>
                                                                        </td>

                                                                    </tr>
                                                                    @endforeach
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
                                        <!-- end of pillars panel -->

                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="tab-pane fade" id="hr-pills-staff-employee-content" role="tabpanel" aria-labelledby="vdsreqs-pills-profile-tab">
                            {{-- hr staff and employees --}}
                            <div class="container-fluid">
                                <div class="tab-pane fade show active" id="hr-employeesnmanagers-content" role="tabpanel" aria-labelledby="hr-employeesnmanagers-tab-md">
                                    <br />
                                    <ul class="nav nav-tabs md-tabs" id="employeesnmanagersPanel" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="hr-managers-pill" data-toggle="tab" href="#hr-managers-content" role="tab" aria-controls="hr-managers-content-md" aria-selected="true">Managers
                                            </a>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link" id="hr-staff-pill" data-toggle="tab" href="#hr-staff-content" role="tab" aria-controls="hr-staff-content-md" aria-selected="true">Staff

                                            </a>
                                        </li>
                                    </ul>


                                    <div class="tab-content pt-5" id="hr-pills-staff-employeeTabContent">
                                        <!--
                                                ========================================
                                                =                                      =
                                                =       managers    =
                                                ======================================== -->
                                        <div class="tab-pane fade show active" id="hr-managers-content" role="tabpanel" aria-labelledby="hr-managers-content-tab-md">
                                            {{-- all managers --}}
                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#hrcreateNewManagerModal">
                                                add new manager
                                            </button>


                                            <!-- Modal -->
                                            <div class="modal fade" id="hrcreateNewManagerModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLongTitle">Type of Manager</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <ul class="list-group-flush">

                                                                <li class="list-group-item">
                                                                    <a href="{{ route('create-new-pillar-manager') }}" class="list-group-item list-group-item-action">
                                                                        Pillar Manager
                                                                    </a>
                                                                </li>
                                                                <li class="list-group-item">
                                                                    <a href="{{ route('create-new-dept-manager') }}" class="list-group-item list-group-item-action">
                                                                        Department Manager
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
                                                            <table class="table table-bordered table-hover">
                                                                <br />
                                                                <br />

                                                                <p><strong>All Organisation Managers</strong></p>
                                                                <br />
                                                                <br />

                                                                <thead>
                                                                    <tr>
                                                                        <th scope="col">#</th>
                                                                        <th scope="col">First Name</th>
                                                                        <th scope="col-md-4">Email</th>
                                                                        <th scope="col">role</th>
                                                                        <th scope="col">Department</th>
                                                                        <th scope="col">Date created</th>
                                                                        <th scope="col"></th>
                                                                        <th scope="col"></th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>

                                                                    @foreach($deptmanagers as $deptmanager)
                                                                    <tr>
                                                                        <th scope="row">{{ $deptmanager->user_id }}</th>
                                                                        <td class="w-30 p-2">{{ $deptmanager->fname }}</td>

                                                                        <td class="w-30 p-2">{{ $deptmanager->email }}</td>
                                                                        <td class="w-30 h-30 p-4">{{ $deptmanager->role_title }}</td>
                                                                        <td class="w-30 h-30 p-4">{{ $deptmanager->dept_title }}</td>
                                                                        <td class="w-10 p-2">{{ $deptmanager->created_at }}</td>
                                                                        <td class="w-10 p-2"><a href="#" class="btn btn-outline-success">view details</a>
                                                                        </td>
                                                                        <td class="w-10 p-2"><a href="#" class="btn btn-outline-info">update details</a>
                                                                        </td>

                                                                        {{-- <td class="w-10 p-2"><a href="{{ route('deptmanager.edit', $deptmanager->user_id)}}"
                                                                        class="btn btn-outline-info">edit</a>
                                                                        </td> --}}
                                                                        {{-- <td class="w-20 p-2">
                                                                                <form action="{{ route('dept.destroy', $deptmanager->user_id)}}"
                                                                        method="post">
                                                                        @csrf
                                                                        @method('UPDATE')
                                                                        <button class="btn btn-outline-danger" type="submit">Delete</button>
                                                                        </form>
                                                                        </td> --}}
                                                                    </tr>

                                                                </tbody>

                                                                @endforeach
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
                                        <!-- end of managers panel -->


                                        <!--
                                                ========================================
                                                =                                      =
                                                =       managers                       =
                                                ======================================== -->
                                        <div class="tab-pane fade" id="hr-staff-content" role="tabpanel" aria-labelledby="hr-staff-content-tab-md">
                                            {{-- managers --}}
                                            <!-- Button trigger modal to create new staff/employee -->
                                            <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#hrcreateNewStaffModal">
                                                add new staff
                                            </button>


                                            <!-- Modal -->
                                            <div class="modal fade" id="hrcreateNewStaffModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLongTitle">Type of Staff</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <ul class="list-group-flush">
                                                                <li class="list-group-item">
                                                                    <a href="{{ route('create-new-dept-staff') }}" class="list-group-item list-group-item-action">
                                                                        Department Staff
                                                                    </a>

                                                                </li>
                                                                <li class="list-group-item">
                                                                    <a href="{{ route('create-new-pillar-staff') }}" class="list-group-item list-group-item-action">
                                                                        Pillar Staff
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
                                                            <table class="table table-bordered table-hover">
                                                                <br />
                                                                <br />
                                                                <p><strong>All Organisation Staff</strong></p>
                                                                <br />
                                                                <thead>
                                                                    <tr>
                                                                        <th scope="col">#</th>
                                                                        <th scope="col">First Name</th>
                                                                        <th scope="col-md-4">Email</th>
                                                                        <th scope="col">role</th>
                                                                        <th scope="col">Department</th>
                                                                        <th scope="col">Date created</th>
                                                                        <th scope="col"></th>
                                                                        <th scope="col"></th>
                                                                    </tr>
                                                                </thead>

                                                                @foreach($pillarstaffs as $pillarstaff)
                                                                <tr>
                                                                    <th scope="row">{{ $pillarstaff->user_id }}</th>
                                                                    <td class="w-30 p-2">{{ $pillarstaff->fname }}</td>

                                                                    <td class="w-30 p-2">{{ $pillarstaff->email }}</td>
                                                                    <td class="w-30 h-30 p-4">{{ $pillarstaff->role_title }}</td>
                                                                    <td class="w-30 h-30 p-4">{{ $pillarstaff->dept_title }}</td>
                                                                    <td class="w-10 p-2">{{ $pillarstaff->created_at }}</td>
                                                                    <td class="w-10 p-2"><a href="#" class="btn btn-outline-success">view details</a>
                                                                    </td>
                                                                    <td class="w-10 p-2"><a href="#" class="btn btn-outline-info">update details</a>
                                                                    </td>

                                                                    {{-- <td class="w-10 p-2"><a href="{{ route('deptmanager.edit', $deptmanager->user_id)}}"
                                                                    class="btn btn-outline-info">edit</a>
                                                                    </td> --}}
                                                                    {{-- <td class="w-20 p-2">
                                                                            <form action="{{ route('dept.destroy', $deptmanager->user_id)}}"
                                                                    method="post">
                                                                    @csrf
                                                                    @method('UPDATE')
                                                                    <button class="btn btn-outline-danger" type="submit">Delete</button>
                                                                    </form>
                                                                    </td> --}}
                                                                </tr>

                                                                </tbody>

                                                                @endforeach
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
                                        <!-- end of managers panel -->
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="hr-pills-benefits-content" role="tabpanel" aria-labelledby="vdsreqs-pills-settings-tab">
                            {{-- data science imprests --}}
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-content table-responsive">
                                            <br />
                                            <table class="table table-bordered table-hover">
                                                <p>
                                                    <strong>Data Science Imprests.</strong>
                                                </p>
                                                <thead>
                                                    <tr>
                                                        <th scope="col">#</th>
                                                        <th scope="col">Requested by</th>
                                                        <th scope="col-md-4">Title</th>
                                                        <th scope="col">Request Type</th>
                                                        <th scope="col">Under Project</th>
                                                        <th scope="col"># of approvals</th>
                                                        <th scope="col">Total Cost</th>
                                                        <th scope="col">Date created</th>

                                                        <th scope="col"></th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th scope="row">1</th>
                                                        <td>MarkCuban</td>
                                                        <td>Data visualisation in Mbeya</td>
                                                        <td>Training</td>
                                                        <td>Sauti Mpya</td>
                                                        <td>0</td>
                                                        <td>2,300,000 <span class="badge badge-success">TZS</span>
                                                        </td>
                                                        <td>2019-09-11</td>
                                                        <td>
                                                            <button type="button" class="btn btn-outline-success">view
                                                                request</button>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <th scope="row">4</th>
                                                        <td>Jane Sharpe</td>
                                                        <td>Data Mining in Dar</td>
                                                        <td>Training</td>
                                                        <td>Data Zetu</td>
                                                        <td>0</td>
                                                        <td>6,600,000 <span class="badge badge-success">TZS</span>
                                                        </td>
                                                        <td>2019-09-11</td>
                                                        <td>
                                                            <button type="button" class="btn btn-outline-success">view
                                                                request</button>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <th scope="row">3</th>
                                                        <td>Mary Poppins</td>
                                                        <td>Data Analyis and Mining</td>
                                                        <td>Training</td>
                                                        <td>Sauti Mpya</td>
                                                        <td>0</td>
                                                        <td>8,700,000 <span class="badge badge-success">TZS</span>
                                                        </td>
                                                        <td>2019-09-11</td>
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
                                    <!-- end of SECOND column -->
                                </div>

                            </div>

                        </div>

                        <div class="tab-pane fade" id="hr-pills-cost-sharing-content" role="tabpanel" aria-labelledby="pillars-pills-ds-activities-tab">
                            {{-- data science activities --}}
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-content table-responsive">
                                            <br />
                                            <table class="table table-bordered table-hover">
                                                <p>
                                                    <strong>Pillar Activities.</strong>
                                                </p>
                                                <thead>
                                                    <tr>
                                                        <th scope="col">#</th>
                                                        <th scope="col">Requested by</th>
                                                        <th scope="col-md-4">Title</th>
                                                        <th scope="col">Request Type</th>
                                                        <th scope="col">Under Project</th>
                                                        <th scope="col"># of approvals</th>
                                                        <th scope="col">Total Cost</th>
                                                        <th scope="col">Date created</th>

                                                        <th scope="col"></th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th scope="row">1</th>
                                                        <td>MarkCuban</td>
                                                        <td>Data visualisation in Mbeya</td>
                                                        <td>Training</td>
                                                        <td>Sauti Mpya</td>
                                                        <td>0</td>
                                                        <td>2,300,000 <span class="badge badge-success">TZS</span>
                                                        </td>
                                                        <td>2019-09-11</td>
                                                        <td>
                                                            <button type="button" class="btn btn-outline-success">view
                                                                request</button>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <th scope="row">4</th>
                                                        <td>Jane Sharpe</td>
                                                        <td>Data Mining in Dar</td>
                                                        <td>Training</td>
                                                        <td>Data Zetu</td>
                                                        <td>0</td>
                                                        <td>6,600,000 <span class="badge badge-success">TZS</span>
                                                        </td>
                                                        <td>2019-09-11</td>
                                                        <td>
                                                            <button type="button" class="btn btn-outline-success">view
                                                                request</button>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <th scope="row">3</th>
                                                        <td>Mary Poppins</td>
                                                        <td>Data Analyis and Mining</td>
                                                        <td>Training</td>
                                                        <td>Sauti Mpya</td>
                                                        <td>0</td>
                                                        <td>8,700,000 <span class="badge badge-success">TZS</span>
                                                        </td>
                                                        <td>2019-09-11</td>
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
                                    <!-- end of SECOND column -->
                                </div>

                            </div>


                        </div>

                        <div class="tab-pane fade" id="hr-pills-deductions-content" role="tabpanel" aria-labelledby="pillars-pills-ds-sub-activities-tab">

                            {{-- data science sub activities --}}
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-content table-responsive">
                                            <br />
                                            <table class="table table-bordered table-hover">
                                                <p>
                                                    <strong>Data Science Sub Activities.</strong>
                                                </p>
                                                <thead>
                                                    <tr>
                                                        <th scope="col">#</th>
                                                        <th scope="col">Requested by</th>
                                                        <th scope="col-md-4">Title</th>
                                                        <th scope="col">Request Type</th>
                                                        <th scope="col">Under Project</th>
                                                        <th scope="col"># of approvals</th>
                                                        <th scope="col">Total Cost</th>
                                                        <th scope="col">Date created</th>

                                                        <th scope="col"></th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th scope="row">1</th>
                                                        <td>MarkCuban</td>
                                                        <td>Data visualisation in Mbeya</td>
                                                        <td>Training</td>
                                                        <td>Sauti Mpya</td>
                                                        <td>0</td>
                                                        <td>2,300,000 <span class="badge badge-success">TZS</span>
                                                        </td>
                                                        <td>2019-09-11</td>
                                                        <td>
                                                            <button type="button" class="btn btn-outline-success">view
                                                                request</button>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <th scope="row">4</th>
                                                        <td>Jane Sharpe</td>
                                                        <td>Data Mining in Dar</td>
                                                        <td>Training</td>
                                                        <td>Data Zetu</td>
                                                        <td>0</td>
                                                        <td>6,600,000 <span class="badge badge-success">TZS</span>
                                                        </td>
                                                        <td>2019-09-11</td>
                                                        <td>
                                                            <button type="button" class="btn btn-outline-success">view
                                                                request</button>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <th scope="row">3</th>
                                                        <td>Mary Poppins</td>
                                                        <td>Data Analyis and Mining</td>
                                                        <td>Training</td>
                                                        <td>Sauti Mpya</td>
                                                        <td>0</td>
                                                        <td>8,700,000 <span class="badge badge-success">TZS</span>
                                                        </td>
                                                        <td>2019-09-11</td>
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
                                    <!-- end of SECOND column -->
                                </div>

                            </div>

                        </div>

                        <div class="tab-pane fade" id="hr-pills-dlr-content" role="tabpanel" aria-labelledby="pillars-pills-ds-scholars-tab">

                            {{-- data science scholars --}}
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-content table-responsive">
                                            <br />
                                            <table class="table table-bordered table-hover">
                                                <p>
                                                    <strong>Data Science Scholars.</strong>
                                                </p>
                                                <thead>
                                                    <tr>
                                                        <th scope="col">#</th>
                                                        <th scope="col">Requested by</th>
                                                        <th scope="col-md-4">Title</th>
                                                        <th scope="col">Request Type</th>
                                                        <th scope="col">Under Project</th>
                                                        <th scope="col"># of approvals</th>
                                                        <th scope="col">Total Cost</th>
                                                        <th scope="col">Date created</th>

                                                        <th scope="col"></th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th scope="row">1</th>
                                                        <td>MarkCuban</td>
                                                        <td>Data visualisation in Mbeya</td>
                                                        <td>Training</td>
                                                        <td>Sauti Mpya</td>
                                                        <td>0</td>
                                                        <td>2,300,000 <span class="badge badge-success">TZS</span>
                                                        </td>
                                                        <td>2019-09-11</td>
                                                        <td>
                                                            <button type="button" class="btn btn-outline-success">view
                                                                request</button>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <th scope="row">4</th>
                                                        <td>Jane Sharpe</td>
                                                        <td>Data Mining in Dar</td>
                                                        <td>Training</td>
                                                        <td>Data Zetu</td>
                                                        <td>0</td>
                                                        <td>6,600,000 <span class="badge badge-success">TZS</span>
                                                        </td>
                                                        <td>2019-09-11</td>
                                                        <td>
                                                            <button type="button" class="btn btn-outline-success">view
                                                                request</button>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <th scope="row">3</th>
                                                        <td>Mary Poppins</td>
                                                        <td>Data Analyis and Mining</td>
                                                        <td>Training</td>
                                                        <td>Sauti Mpya</td>
                                                        <td>0</td>
                                                        <td>8,700,000 <span class="badge badge-success">TZS</span>
                                                        </td>
                                                        <td>2019-09-11</td>
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
                                    <!-- end of SECOND column -->
                                </div>

                            </div>

                        </div>
                        <div class="tab-pane fade" id="hr-pills-leave-allowance-content" role="tabpanel" aria-labelledby="pillars-pills-ds-grantees-tab">

                            {{-- data science grantees --}}
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-content table-responsive">
                                            <br />
                                            <table class="table table-bordered table-hover">
                                                <p>
                                                    <strong>Data Science Grantees.</strong>
                                                </p>
                                                <thead>
                                                    <tr>
                                                        <th scope="col">#</th>
                                                        <th scope="col">Requested by</th>
                                                        <th scope="col-md-4">Title</th>
                                                        <th scope="col">Request Type</th>
                                                        <th scope="col">Under Project</th>
                                                        <th scope="col"># of approvals</th>
                                                        <th scope="col">Total Cost</th>
                                                        <th scope="col">Date created</th>

                                                        <th scope="col"></th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th scope="row">1</th>
                                                        <td>MarkCuban</td>
                                                        <td>Data visualisation in Mbeya</td>
                                                        <td>Training</td>
                                                        <td>Sauti Mpya</td>
                                                        <td>0</td>
                                                        <td>2,300,000 <span class="badge badge-success">TZS</span>
                                                        </td>
                                                        <td>2019-09-11</td>
                                                        <td>
                                                            <button type="button" class="btn btn-outline-success">view
                                                                request</button>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <th scope="row">4</th>
                                                        <td>Jane Sharpe</td>
                                                        <td>Data Mining in Dar</td>
                                                        <td>Training</td>
                                                        <td>Data Zetu</td>
                                                        <td>0</td>
                                                        <td>6,600,000 <span class="badge badge-success">TZS</span>
                                                        </td>
                                                        <td>2019-09-11</td>
                                                        <td>
                                                            <button type="button" class="btn btn-outline-success">view
                                                                request</button>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <th scope="row">3</th>
                                                        <td>Mary Poppins</td>
                                                        <td>Data Analyis and Mining</td>
                                                        <td>Training</td>
                                                        <td>Sauti Mpya</td>
                                                        <td>0</td>
                                                        <td>8,700,000 <span class="badge badge-success">TZS</span>
                                                        </td>
                                                        <td>2019-09-11</td>
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
                                    <!-- end of SECOND column -->
                                </div>

                            </div>

                        </div>
                        <div class="tab-pane fade" id="hr-pills-leaves-content" role="tabpanel" aria-labelledby="pillars-pills-ds-retirements-tab">

                            {{-- data science retirements --}}
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-content table-responsive">
                                            <br />
                                            <table class="table table-bordered table-hover">
                                                <p>
                                                    <strong>Data Science Retirements.</strong>
                                                </p>

                                                <thead>
                                                    <tr>
                                                        <th scope="col">#</th>
                                                        <th scope="col">Requested by</th>
                                                        <th scope="col-md-4">Title</th>
                                                        <th scope="col">Request Type</th>
                                                        <th scope="col">Under Project</th>
                                                        <th scope="col"># of approvals</th>
                                                        <th scope="col">Total Cost</th>
                                                        <th scope="col">Date created</th>

                                                        <th scope="col"></th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th scope="row">1</th>
                                                        <td>MarkCuban</td>
                                                        <td>Data visualisation in Mbeya</td>
                                                        <td>Training</td>
                                                        <td>Sauti Mpya</td>
                                                        <td>0</td>
                                                        <td>2,300,000 <span class="badge badge-success">TZS</span>
                                                        </td>
                                                        <td>2019-09-11</td>
                                                        <td>
                                                            <button type="button" class="btn btn-outline-success">view
                                                                request</button>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <th scope="row">4</th>
                                                        <td>Jane Sharpe</td>
                                                        <td>Data Mining in Dar</td>
                                                        <td>Training</td>
                                                        <td>Data Zetu</td>
                                                        <td>0</td>
                                                        <td>6,600,000 <span class="badge badge-success">TZS</span>
                                                        </td>
                                                        <td>2019-09-11</td>
                                                        <td>
                                                            <button type="button" class="btn btn-outline-success">view
                                                                request</button>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <th scope="row">3</th>
                                                        <td>Mary Poppins</td>
                                                        <td>Data Analyis and Mining</td>
                                                        <td>Training</td>
                                                        <td>Sauti Mpya</td>
                                                        <td>0</td>
                                                        <td>8,700,000 <span class="badge badge-success">TZS</span>
                                                        </td>
                                                        <td>2019-09-11</td>
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
                                    <!-- end of SECOND column -->
                                </div>

                            </div>

                        </div>

                        <div class="tab-pane fade" id="hr-pills-loans-content" role="tabpanel" aria-labelledby="pillars-pills-ds-scholars-tab">

                            {{-- data science scholars --}}
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-content table-responsive">
                                            <br />
                                            <table class="table table-bordered table-hover">
                                                <p>
                                                    <strong>Data Science Scholars.</strong>
                                                </p>
                                                <thead>
                                                    <tr>
                                                        <th scope="col">#</th>
                                                        <th scope="col">Requested by</th>
                                                        <th scope="col-md-4">Title</th>
                                                        <th scope="col">Request Type</th>
                                                        <th scope="col">Under Project</th>
                                                        <th scope="col"># of approvals</th>
                                                        <th scope="col">Total Cost</th>
                                                        <th scope="col">Date created</th>

                                                        <th scope="col"></th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th scope="row">1</th>
                                                        <td>MarkCuban</td>
                                                        <td>Data visualisation in Mbeya</td>
                                                        <td>Training</td>
                                                        <td>Sauti Mpya</td>
                                                        <td>0</td>
                                                        <td>2,300,000 <span class="badge badge-success">TZS</span>
                                                        </td>
                                                        <td>2019-09-11</td>
                                                        <td>
                                                            <button type="button" class="btn btn-outline-success">view
                                                                request</button>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <th scope="row">4</th>
                                                        <td>Jane Sharpe</td>
                                                        <td>Data Mining in Dar</td>
                                                        <td>Training</td>
                                                        <td>Data Zetu</td>
                                                        <td>0</td>
                                                        <td>6,600,000 <span class="badge badge-success">TZS</span>
                                                        </td>
                                                        <td>2019-09-11</td>
                                                        <td>
                                                            <button type="button" class="btn btn-outline-success">view
                                                                request</button>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <th scope="row">3</th>
                                                        <td>Mary Poppins</td>
                                                        <td>Data Analyis and Mining</td>
                                                        <td>Training</td>
                                                        <td>Sauti Mpya</td>
                                                        <td>0</td>
                                                        <td>8,700,000 <span class="badge badge-success">TZS</span>
                                                        </td>
                                                        <td>2019-09-11</td>
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
                                    <!-- end of SECOND column -->
                                </div>

                            </div>

                        </div>
                        <div class="tab-pane fade" id="hr-pills-payroll-content" role="tabpanel" aria-labelledby="pillars-pills-ds-grantees-tab">

                            {{-- data science grantees --}}
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-content table-responsive">
                                            <br />
                                            <table class="table table-bordered table-hover">
                                                <p>
                                                    <strong>Data Science Grantees.</strong>
                                                </p>
                                                <thead>
                                                    <tr>
                                                        <th scope="col">#</th>
                                                        <th scope="col">Requested by</th>
                                                        <th scope="col-md-4">Title</th>
                                                        <th scope="col">Request Type</th>
                                                        <th scope="col">Under Project</th>
                                                        <th scope="col"># of approvals</th>
                                                        <th scope="col">Total Cost</th>
                                                        <th scope="col">Date created</th>

                                                        <th scope="col"></th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th scope="row">1</th>
                                                        <td>MarkCuban</td>
                                                        <td>Data visualisation in Mbeya</td>
                                                        <td>Training</td>
                                                        <td>Sauti Mpya</td>
                                                        <td>0</td>
                                                        <td>2,300,000 <span class="badge badge-success">TZS</span>
                                                        </td>
                                                        <td>2019-09-11</td>
                                                        <td>
                                                            <button type="button" class="btn btn-outline-success">view
                                                                request</button>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <th scope="row">4</th>
                                                        <td>Jane Sharpe</td>
                                                        <td>Data Mining in Dar</td>
                                                        <td>Training</td>
                                                        <td>Data Zetu</td>
                                                        <td>0</td>
                                                        <td>6,600,000 <span class="badge badge-success">TZS</span>
                                                        </td>
                                                        <td>2019-09-11</td>
                                                        <td>
                                                            <button type="button" class="btn btn-outline-success">view
                                                                request</button>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <th scope="row">3</th>
                                                        <td>Mary Poppins</td>
                                                        <td>Data Analyis and Mining</td>
                                                        <td>Training</td>
                                                        <td>Sauti Mpya</td>
                                                        <td>0</td>
                                                        <td>8,700,000 <span class="badge badge-success">TZS</span>
                                                        </td>
                                                        <td>2019-09-11</td>
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
                                    <!-- end of SECOND column -->
                                </div>

                            </div>

                        </div>
                        <div class="tab-pane fade" id="hr-pills-salary-content" role="tabpanel" aria-labelledby="pillars-pills-ds-retirements-tab">

                            {{-- data science retirements --}}
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-content table-responsive">
                                            <br />
                                            <table class="table table-bordered table-hover">
                                                <p>
                                                    <strong>Data Science Retirements.</strong>
                                                </p>

                                                <thead>
                                                    <tr>
                                                        <th scope="col">#</th>
                                                        <th scope="col">Requested by</th>
                                                        <th scope="col-md-4">Title</th>
                                                        <th scope="col">Request Type</th>
                                                        <th scope="col">Under Project</th>
                                                        <th scope="col"># of approvals</th>
                                                        <th scope="col">Total Cost</th>
                                                        <th scope="col">Date created</th>

                                                        <th scope="col"></th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th scope="row">1</th>
                                                        <td>MarkCuban</td>
                                                        <td>Data visualisation in Mbeya</td>
                                                        <td>Training</td>
                                                        <td>Sauti Mpya</td>
                                                        <td>0</td>
                                                        <td>2,300,000 <span class="badge badge-success">TZS</span>
                                                        </td>
                                                        <td>2019-09-11</td>
                                                        <td>
                                                            <button type="button" class="btn btn-outline-success">view
                                                                request</button>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <th scope="row">4</th>
                                                        <td>Jane Sharpe</td>
                                                        <td>Data Mining in Dar</td>
                                                        <td>Training</td>
                                                        <td>Data Zetu</td>
                                                        <td>0</td>
                                                        <td>6,600,000 <span class="badge badge-success">TZS</span>
                                                        </td>
                                                        <td>2019-09-11</td>
                                                        <td>
                                                            <button type="button" class="btn btn-outline-success">view
                                                                request</button>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <th scope="row">3</th>
                                                        <td>Mary Poppins</td>
                                                        <td>Data Analyis and Mining</td>
                                                        <td>Training</td>
                                                        <td>Sauti Mpya</td>
                                                        <td>0</td>
                                                        <td>8,700,000 <span class="badge badge-success">TZS</span>
                                                        </td>
                                                        <td>2019-09-11</td>
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
                                    <!-- end of SECOND column -->
                                </div>

                            </div>

                        </div>

                        <div class="tab-pane fade" id="hr-pills-salary-slips-content" role="tabpanel" aria-labelledby="pillars-pills-ds-scholars-tab">

                            {{-- data science scholars --}}
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-content table-responsive">
                                            <br />
                                            <table class="table table-bordered table-hover">
                                                <p>
                                                    <strong>Data Science Scholars.</strong>
                                                </p>
                                                <thead>
                                                    <tr>
                                                        <th scope="col">#</th>
                                                        <th scope="col">Requested by</th>
                                                        <th scope="col-md-4">Title</th>
                                                        <th scope="col">Request Type</th>
                                                        <th scope="col">Under Project</th>
                                                        <th scope="col"># of approvals</th>
                                                        <th scope="col">Total Cost</th>
                                                        <th scope="col">Date created</th>

                                                        <th scope="col"></th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th scope="row">1</th>
                                                        <td>MarkCuban</td>
                                                        <td>Data visualisation in Mbeya</td>
                                                        <td>Training</td>
                                                        <td>Sauti Mpya</td>
                                                        <td>0</td>
                                                        <td>2,300,000 <span class="badge badge-success">TZS</span>
                                                        </td>
                                                        <td>2019-09-11</td>
                                                        <td>
                                                            <button type="button" class="btn btn-outline-success">view
                                                                request</button>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <th scope="row">4</th>
                                                        <td>Jane Sharpe</td>
                                                        <td>Data Mining in Dar</td>
                                                        <td>Training</td>
                                                        <td>Data Zetu</td>
                                                        <td>0</td>
                                                        <td>6,600,000 <span class="badge badge-success">TZS</span>
                                                        </td>
                                                        <td>2019-09-11</td>
                                                        <td>
                                                            <button type="button" class="btn btn-outline-success">view
                                                                request</button>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <th scope="row">3</th>
                                                        <td>Mary Poppins</td>
                                                        <td>Data Analyis and Mining</td>
                                                        <td>Training</td>
                                                        <td>Sauti Mpya</td>
                                                        <td>0</td>
                                                        <td>8,700,000 <span class="badge badge-success">TZS</span>
                                                        </td>
                                                        <td>2019-09-11</td>
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
                                    <!-- end of SECOND column -->
                                </div>

                            </div>

                        </div>
                        <div class="tab-pane fade" id="hr-pills-staff-appraisal-content" role="tabpanel" aria-labelledby="pillars-pills-ds-grantees-tab">

                            {{-- data science grantees --}}
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-content table-responsive">
                                            <br />
                                            <table class="table table-bordered table-hover">
                                                <p>
                                                    <strong>Data Science Grantees.</strong>
                                                </p>
                                                <thead>
                                                    <tr>
                                                        <th scope="col">#</th>
                                                        <th scope="col">Requested by</th>
                                                        <th scope="col-md-4">Title</th>
                                                        <th scope="col">Request Type</th>
                                                        <th scope="col">Under Project</th>
                                                        <th scope="col"># of approvals</th>
                                                        <th scope="col">Total Cost</th>
                                                        <th scope="col">Date created</th>

                                                        <th scope="col"></th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th scope="row">1</th>
                                                        <td>MarkCuban</td>
                                                        <td>Data visualisation in Mbeya</td>
                                                        <td>Training</td>
                                                        <td>Sauti Mpya</td>
                                                        <td>0</td>
                                                        <td>2,300,000 <span class="badge badge-success">TZS</span>
                                                        </td>
                                                        <td>2019-09-11</td>
                                                        <td>
                                                            <button type="button" class="btn btn-outline-success">view
                                                                request</button>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <th scope="row">4</th>
                                                        <td>Jane Sharpe</td>
                                                        <td>Data Mining in Dar</td>
                                                        <td>Training</td>
                                                        <td>Data Zetu</td>
                                                        <td>0</td>
                                                        <td>6,600,000 <span class="badge badge-success">TZS</span>
                                                        </td>
                                                        <td>2019-09-11</td>
                                                        <td>
                                                            <button type="button" class="btn btn-outline-success">view
                                                                request</button>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <th scope="row">3</th>
                                                        <td>Mary Poppins</td>
                                                        <td>Data Analyis and Mining</td>
                                                        <td>Training</td>
                                                        <td>Sauti Mpya</td>
                                                        <td>0</td>
                                                        <td>8,700,000 <span class="badge badge-success">TZS</span>
                                                        </td>
                                                        <td>2019-09-11</td>
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
                                    <!-- end of SECOND column -->
                                </div>

                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- end of finance executive director adminstration data column -->


        <!-- =========================================
               =                                       =
               =             start of imprest-retirements data =
               ========================================= -->

        <div class="tab-pane tb fade" id="imprest-retirements-md" role="tabpanel" aria-labelledby="imprest-retirements-tab-md">
            <!-- line chart -->
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#exampleModalCenter">
                create a new request
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
                                    <a href="{{ route('create-new-training-advance-request') }}" class="list-group-item list-group-item-action">
                                        Training Advance Request
                                    </a>
                                </li>
                                <li class="list-group-item">
                                    <a href="{{ route('create-new-travel-advance-request') }}" class="list-group-item list-group-item-action">
                                        Travel Advance Request
                                    </a>
                                </li>
                                <li class="list-group-item">
                                    <a href="{{ route('create-allowance-request') }}" class="list-group-item list-group-item-action">
                                        Allowance Request
                                    </a>
                                </li>
                                <li class="list-group-item">
                                    <a href="{{ route('create-new-per-diem-claim') }}" class="list-group-item list-group-item-action">
                                        Per Diem claim
                                    </a>
                                </li>
                                <li class="list-group-item">
                                    <a href="{{ route('create-new-petty-cash') }}" class="list-group-item list-group-item-action">
                                        Petty Cash
                                    </a>
                                </li>
                                <li class="list-group-item">
                                    <a href="{{ route('create-payment-requisition') }}" class="list-group-item list-group-item-action">
                                        Payment Requisition
                                    </a>
                                </li>

                                <li class="list-group-item">
                                    <a href="{{ route('create-new-workshop-registration') }}" class="list-group-item list-group-item-action">
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
        <div class="tab-pane tb fade" id="financial-reports-md" role="tabpanel" aria-labelledby="financial-reports-tab-md">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#newFinancialReport">
                create a new financial report
            </button>
            <br />

            <!-- Modal -->
            <div class="modal fade" id="newFinancialReport" tabindex="-1" role="dialog" aria-labelledby="newFinancialReportTitle" aria-hidden="true">
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
                                    <a href="{{ route('create-bank-reconciliation-report') }}" class="btn btn-lg  btn-outline-info" role="button" aria-pressed="true">Bank
                                        Reconciliation</a>
                                </li>
                                <li class="list-group-item">
                                    <a href="{{ route('create-petty-cash-reconciliation-report') }}" class="btn btn-lg  btn-outline-info" role="button" aria-pressed="true">Petty
                                        Cash
                                        Reconciliation</a>
                                </li>
                                <li class="list-group-item">
                                    <a href="{{ route('create-payment-voucher') }}" class="btn btn-lg  btn-outline-info" role="button" aria-pressed="true">Payment voucher</a>
                                </li>
                                <li class="list-group-item">
                                    <a href="{{ route('create-deposit-voucher') }}" class="btn btn-lg  btn-outline-info" role="button" aria-pressed="true">Deposit voucher</a>
                                </li>
                                <li class="list-group-item">
                                    <a href="{{ route('create-journal-voucher') }}" class="btn btn-lg  btn-outline-info" role="button" aria-pressed="true">Journal voucher</a>
                                </li>
                                <li class="list-group-item">
                                    <a href="{{ route('create-pay-slip') }}" class="btn btn-lg  btn-outline-info" role="button" aria-pressed="true">Payslip</a>
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
                            <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Recent Bank Reconciliation
                            </button>
                        </h5>
                    </div>
                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#financial-reports-accordion">
                        <div class="card-body">
                            <div class="row">

                                <div class="col-lg-12">
                                    <br />
                                    <p>There are 12 total reports with <strong><span class="badge badge-danger badge-pill">2</span> pending reports</strong>
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
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Recent Petty Cash Reconciliation

                            </button>
                        </h5>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#financial-reports-accordion">
                        <div class="card-body">

                            <div class="row">
                                <div class="col-lg-12">
                                    <br />
                                    <p>There are 12 total reports with <strong><span class="badge badge-danger badge-pill">2</span> pending reports</strong>
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
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Payment voucher
                            </button>
                        </h5>
                    </div>

                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#financial-reports-accordion">
                        <div class="card-body">


                            <div class="row">
                                <div class="col-lg-12">
                                    <br />
                                    <p>There are 12 total reports with <strong><span class="badge badge-danger badge-pill">2</span> pending reports</strong>
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
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                Deposit voucher
                            </button>
                        </h5>
                    </div>


                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#financial-reports-accordion">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <br />
                                    <p>There are 12 total reports with <strong><span class="badge badge-danger badge-pill">2</span> pending reports</strong>
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
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                Journal voucher
                            </button>
                        </h5>
                    </div>


                    <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#financial-reports-accordion">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <br />
                                    <p>There are 12 total reports with <strong><span class="badge badge-danger badge-pill">2</span> pending reports</strong>
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
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                Payment voucher
                            </button>
                        </h5>
                    </div>


                    <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#financial-reports-accordion">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <br />
                                    <p>There are 12 total reports with <strong><span class="badge badge-danger badge-pill">2</span> pending reports</strong>
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
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                Payslip
                            </button>
                        </h5>
                    </div>


                    <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#financial-reports-accordion">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <br />
                                    <p>There are 12 total reports with <strong><span class="badge badge-danger badge-pill">2</span> pending reports</strong>
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
        <div class="tab-pane tb fade" id="payroll-system-md" role="tabpanel" aria-labelledby="payroll-system-tab-md">

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

        <!-- end of scholar and grantees data panel -->

        <!--
               =========================================
               =                                       =
               =      start of financial-analytics data           =
               ========================================= -->
        <!-- start of financial-analytics data panel -->
        <div class="tab-pane tb fade" id="financial-forms-content" role="tabpanel" aria-labelledby="financial-analytics-tab-md">
            <p>Financial Forms</p>
            <br />


        </div>
        <!-- end of financial-analytics data panel -->

    </div>

</div>
@endsection
