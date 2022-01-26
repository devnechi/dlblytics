@extends('layouts.lfinanceadmin')

@section('content')
<div class="container-fluid">

    <nav>
        <div class="nav nav-tabs" id="finance-pillars-nav-tab" role="tablist">
            <a class="nav-item nav-link active" id="finance-pillars-nav-ds-tab" data-toggle="tab" href="#financial-management" role="tab" aria-controls="finance-pillars-nav-ds" aria-selected="true">
                Financial Management</a>

            <a class="nav-item nav-link" id="finance-pillars-nav-ce-tab" data-toggle="tab" href="#administrational-management" role="tab" aria-controls="finance-pillars-nav-ce" aria-selected="true">
                Administration Managenment</a>



        </div>
    </nav>
    <div class="tab-content pt-5" id="selectDataViewTabContent">
        <!-- end of imprest-retirements data panel -->


        <div class="tab-pane tb fade active show" id="financial-management" role="tabpanel" aria-labelledby="finance-admin-tab-md">
            {{-- financial administration --}}
            <div class="row">
                <div class="col-md-2">
                    <div class="nav flex-column nav-pills" id="vds-finance-main-pills-tab" role="tablist" aria-orientation="vertical">
                        <a class="nav-link active" id="finance-pills-bank-accounts-tab" data-toggle="pill" href="#finance-pills-bank-accounts-content" role="tab" aria-controls="" aria-selected="true">Bank Accounts</a>

                        <a class="nav-link" id="finance-pills-funds-tab" data-toggle="pill" href="#finance-pills-funds-content" role="tab" aria-controls="finance-pills-funds-tab" aria-selected="false">Fund allocation</a>

                        <a class="nav-link" id="vds-ds-grantees-pills-pitched-tab" data-toggle="pill" href="#finance-pills-financial-reports-content" role="tab" aria-controls="vdsreqs-pills-pitched" aria-selected="false">Financial reports</a>

                        <a class="nav-link" id="vds-ds-grantees-pills-pitched-tab" data-toggle="pill" href="#financial-forms" role="tab" aria-controls="vdsreqs-pills-pitched" aria-selected="false">Financial Forms</a>




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
                        <div class="tab-pane fade" id="financial-forms" role="tabpanel" aria-labelledby="vdsreqs-pills-settings-tab">
                            {{--financial-forms  --}}
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
                        <div class="tab-pane fade" id="financial-advance-request" role="tabpanel" aria-labelledby="vdsreqs-pills-settings-tab">
                            {{--financial-advance-request  --}}
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
        <!-- end of financial-analytics data panel -->

 <!-- end of imprest-retirements data panel -->
        <div class="tab-pane tb fade" id="administrational-management" role="tabpanel" aria-labelledby="finance-admin-tab-md">
            {{-- financial administration --}}
            <div class="row">
                <div class="col-md-2">
                    <div class="nav flex-column nav-pills" id="vds-finance-main-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link active" id="vds-ds-grantees-pills-pitched-tab" data-toggle="pill" href="#financial-advance-request" role="tab" aria-controls="vdsreqs-pills-pitched" aria-selected="false">Advance requests</a>

                    </div>
                </div>
                <div class="col-md-10">

                    <div class="tab-content" id="vds-ds-impr-pills-tabContent">
                    <div class="tab-pane fade show active" id="financial-advance-request" role="tabpanel" aria-labelledby="vdsreqs-pills-settings-tab">
                            {{--financial-advance-request  --}}
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




        <!-- end of financial-analytics data panel -->

    </div>

</div>
@endsection
