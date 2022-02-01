@extends('layouts.lfinanceadmin')

@section('content')

<div class="container-fluid">
    @if ($message = Session::get('success'))
    <div class="alert alert-success">
    <p>{{ $message }}</p>
    </div>
    @endif
    <nav>
        <div class="nav nav-tabs" id="finance-pillars-nav-tab" role="tablist">
            <a class="nav-item nav-link active" id="finance-pillars-nav-ds-tab" data-toggle="tab" href="#financial-management" role="tab" aria-controls="finance-pillars-nav-ds" aria-selected="true">
                Financial Management
            </a>
            <a class="nav-item nav-link" id="finance-pillars-nav-ce-tab" data-toggle="tab" href="#administrational-management" role="tab" aria-controls="finance-pillars-nav-ce" aria-selected="true">
                Administration Managenment
            </a>
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
                            {{-- company bank accounts --}}

                            <div class="row">
                                <div class="col-lg-12">
                                       <p class="d-flex justify-content-end">
                                        <a class="btn btn-outline-primary  mr-1 float-right" href="{{ route('fin-add-new-bnk-account') }}" role="button">
                                            add new bank account
                                        </a>
                                    </p>
                                    <br />
                                    <div class="card">
                                        <div class="card-content table-responsive">
                                            <br />
                                            <br />
                                            <table class="table table-bordered table-hover">
                                                <p><strong>Company Bank Accounts.</strong></p>
                                                <thead>
                                                    <tr>
                                                        <th scope="col">#</th>
                                                        <th scope="col">Account title</th>
                                                        <th scope="col">Account Number</th>
                                                        <th scope="col-md-4">Current Balance</th>
                                                        <th scope="col">Bank location</th>
                                                        <th scope="col">Date created</th>
                                                        <th scope="col">Date updated</th>
                                                        <th scope="col"></th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        @foreach ($bankaccs as $bankacc)

                                                        <th scope="row">{{ $bankacc->akk_id }}</th>
                                                        <td>{{ $bankacc->acctitle }}</td>
                                                        <td>{{ $bankacc->bankaccno }}</td>
                                                        <td>{{ $bankacc->bankaccountbalance }}
                                                            <span class="badge badge-success">{{ $bankacc->currencyType }}</span>
                                                        </td>
                                                        <td>{{ $bankacc->banklocation }}</td>
                                                        <td>{{ $bankacc->created_at }}</td>
                                                        <td>{{ $bankacc->updated_at }}</td>
                                                        <td>
                                                            <button type="button" class="btn btn-outline-success"> action</button>
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
                                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                          <a class="nav-link active" id="pills-fin-bank-recon-tab" data-toggle="pill" href="#pills-fin-bank-recon" role="tab" aria-controls="pills-fin-bank-recon" aria-selected="true">Bank reconcilliation</a>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                          <a class="nav-link" id="pills-petty-cash-recon-tab" data-toggle="pill" href="#pills-petty-cash-recon" role="tab" aria-controls="pills-petty-cash-recon" aria-selected="false">Petty cash reconcilliation</a>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                          <a class="nav-link" id="pills-sp-nssf-tab" data-toggle="pill" href="#pills-sp-nssf" role="tab" aria-controls="pills-sp-nssf" aria-selected="false">SP-NSSF</a>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link" id="pills-sp-sdl-tab" data-toggle="pill" href="#pills-sp-sdl" role="tab" aria-controls="pills-sp-sdl" aria-selected="false">SP-SDL</a>
                                          </li>
                                          <li class="nav-item" role="presentation">
                                            <a class="nav-link" id="pills-sp-payee-tab" data-toggle="pill" href="#pills-sp-payee" role="tab" aria-controls="pills-sp-payee" aria-selected="false">SP-PAYEE</a>
                                          </li>
                                          <li class="nav-item" role="presentation">
                                            <a class="nav-link" id="pills-sp-wht-tab" data-toggle="pill" href="#pills-sp-wht" role="tab" aria-controls="pills-sp-wht" aria-selected="false">SP-WHT</a>
                                          </li>
                                          <li class="nav-item" role="presentation">
                                            <a class="nav-link" id="pills-sp-wcf-tab" data-toggle="pill" href="#pills-sp-wcf" role="tab" aria-controls="pills-sp-wcf" aria-selected="false">SP-WCF</a>
                                          </li>
                                      </ul>
                                      <div class="tab-content" id="pills-tabContent">
                                        <div class="tab-pane fade show active" id="pills-fin-bank-recon" role="tabpanel" aria-labelledby="pills-fin-bank-recon-tab">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <p class="d-flex justify-content-end">
                                                        <a class="btn btn-outline-primary  mr-1 float-right" href="{{ route('fin-add-bank-recon-report') }}" role="button">
                                                            add new bank recon report
                                                        </a>
                                                    </p>
                                                    <div class="card">
                                                        <div class="card-content table-responsive">
                                                            <br />
                                                            <table class="table table-bordered table-hover">
                                                                <p>
                                                                    <strong>Financial bank reconciliation reports.</strong>
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
                                        <div class="tab-pane fade" id="pills-petty-cash-recon" role="tabpanel" aria-labelledby="pills-petty-cash-recon-tab">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <p class="d-flex justify-content-end">
                                                        <a class="btn btn-outline-primary  mr-1 float-right" href="{{ route('create-petty-cash-reconciliation-report') }}" role="button">
                                                            add new petty cash recon report
                                                        </a>
                                                    </p>
                                                    <div class="card">
                                                        <div class="card-content table-responsive">
                                                            <br />
                                                            <table class="table table-bordered table-hover">
                                                                <p>
                                                                    <strong>Petty cash reconcilliation reports.</strong>
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
                                        <div class="tab-pane fade" id="pills-sp-nssf" role="tabpanel" aria-labelledby="pills-sp-nssf-tab">

                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <p class="d-flex justify-content-end">
                                                        <a class="btn btn-outline-primary  mr-1 float-right" href="{{ route('create-petty-cash-reconciliation-report') }}" role="button">
                                                            add new nssf report
                                                        </a>
                                                    </p>
                                                    <div class="card">
                                                        <div class="card-content table-responsive">
                                                            <br />
                                                            <table class="table table-bordered table-hover">
                                                                <p>
                                                                    <strong>Nation Social Security Fund reports.</strong>
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
                                        <div class="tab-pane fade" id="pills-sp-sdl" role="tabpanel" aria-labelledby="pills-sp-sdl-tab">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <p class="d-flex justify-content-end">
                                                        <a class="btn btn-outline-primary  mr-1 float-right" href="{{ route('create-petty-cash-reconciliation-report') }}" role="button">
                                                            add new sdl report
                                                        </a>
                                                    </p>
                                                    <div class="card">
                                                        <div class="card-content table-responsive">
                                                            <br />
                                                            <table class="table table-bordered table-hover">
                                                                <p>
                                                                    <strong>SDL reports.</strong>
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
                                        <div class="tab-pane fade" id="pills-sp-payee" role="tabpanel" aria-labelledby="pills-sp-payee-tab">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <p class="d-flex justify-content-end">
                                                        <a class="btn btn-outline-primary  mr-1 float-right" href="{{ route('create-petty-cash-reconciliation-report') }}" role="button">
                                                            add new payee report
                                                        </a>
                                                    </p>
                                                    <div class="card">
                                                        <div class="card-content table-responsive">
                                                            <br />
                                                            <table class="table table-bordered table-hover">
                                                                <p>
                                                                    <strong>Pay as you earn (Payee) reports.</strong>
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
                                        <div class="tab-pane fade" id="pills-sp-wht" role="tabpanel" aria-labelledby="pills-sp-wht-tab">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <p class="d-flex justify-content-end">
                                                        <a class="btn btn-outline-primary  mr-1 float-right" href="{{ route('create-petty-cash-reconciliation-report') }}" role="button">
                                                            add new wht report
                                                        </a>
                                                    </p>
                                                    <div class="card">
                                                        <div class="card-content table-responsive">
                                                            <br />
                                                            <table class="table table-bordered table-hover">
                                                                <p>
                                                                    <strong>Withholding Tax reports.</strong>
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
                                        <div class="tab-pane fade" id="pills-sp-wcf" role="tabpanel" aria-labelledby="pills-sp-wcf-tab">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <p class="d-flex justify-content-end">
                                                        <a class="btn btn-outline-primary  mr-1 float-right" href="{{ route('create-petty-cash-reconciliation-report') }}" role="button">
                                                            add new wcf report
                                                        </a>
                                                    </p>
                                                    <div class="card">
                                                        <div class="card-content table-responsive">
                                                            <br />
                                                            <table class="table table-bordered table-hover">
                                                                <p>
                                                                    <strong>Workers compersation fund reports.</strong>
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
                                    <!-- end of SECOND column -->
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="financial-forms" role="tabpanel" aria-labelledby="vdsreqs-pills-settings-tab">
                            {{--financial-forms  --}}
                            <div class="row">
                                <div class="col-lg-12">
                                    <button type="button" class="btn btn-outline-primary float-right" data-toggle="modal" data-target="#newDSimprest">
                                        add new financial form
                                       </button>
                                    <br />
                                    <div class="card">
                                        <div class="card-content table-responsive">
                                            <br />
                                            <table class="table table-bordered table-hover">
                                                <p>
                                                    <strong>Financial forms.</strong>
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
            <br />
            <div class="row">
                <div class="col-md-2">
                    <div class="nav flex-column nav-pills" id="vds-finance-tab" role="tablist"
                        aria-orientation="vertical">
                        <a class="nav-link active" id="finance-pill-staff-requests-tab" data-toggle="pill"
                            href="#finance-pill-staff-requests-content" role="tab" aria-controls=""
                            aria-selected="true">Staff requests</a>


                        <a class="nav-link" id="finance-pill-office-requests-tab" data-toggle="pill"
                            href="#finance-pill-office-requests-content" role="tab"
                            aria-controls="finance-pill-office-requests-tab" aria-selected="false">Office requests</a>


                        <a class="nav-link" id="finance-pill-retirements-tab" data-toggle="pill"
                        href="#finance-pill-retirements-content" role="tab" aria-controls="finance-pill-funds-tab"
                        aria-selected="false">Retirements</a>

                        <a class="nav-link" id="finance-pill-assets-tab" data-toggle="pill"
                            href="#finance-pill-assets-content" role="tab" aria-controls="finance-pill-assets-tab"
                            aria-selected="false">Assets</a>

                        <a class="nav-link" id="finance-pill-capture-income-tab" data-toggle="pill"
                            href="#finance-pill-capture-income-content" role="tab"
                            aria-controls="finance-pill-capture-income-tab" aria-selected="false">capture income</a>

                        <a class="nav-link" id="finance-pill-contracts-tab" data-toggle="pill"
                            href="#finance-pill-contracts-content" role="tab"
                            aria-controls="finance-pill-contracts-tab" aria-selected="false">contracts / direct
                            pay</a>

                        <a class="nav-link" id="finance-pill-gl-tab" data-toggle="pill"
                            href="#finance-pill-gl-content" role="tab" aria-controls="pillars-pills-ds-grantees-tab"
                            aria-selected="false">General ledger / JV</a>

                        <a class="nav-link" id="finance-pill-pv-tab" data-toggle="pill"
                            href="#finance-pill-pv-content" role="tab" aria-controls="finance-pill-pv-tab"
                            aria-selected="false">Payment voucher</a>

                        <a class="nav-link" id="finance-pill-petty-cash-tab" data-toggle="pill"
                            href="#finance-pill-petty-cash-content" role="tab"
                            aria-controls="finance-pill-petty-cash-tab" aria-selected="false">Petty Cash</a>

                        <a class="nav-link" id="finance-pill-payroll-tab" data-toggle="pill"
                            href="#finance-pill-payroll-content" role="tab" aria-controls="finance-pill-payroll-tab"
                            aria-selected="false">Payroll</a>

                        <a class="nav-link" id="finance-pill-wht-payments-tab" data-toggle="pill"
                            href="#finance-pill-wht-payments-content" role="tab"
                            aria-controls="finance-pill-wht-payments-tab" aria-selected="false">WHT payments</a>

                        <a class="nav-link" id="finance-pill-contracts-tab" data-toggle="pill"
                            href="#finance-pill-contracts-content" role="tab"
                            aria-controls="finance-pill-contracts-tab" aria-selected="false">Contracts</a>

                        <a class="nav-link" id="finance-pill-other-tab" data-toggle="pill"
                            href="#finance-pill-other-content" role="tab" aria-controls="finance-pill-other-tab"
                            aria-selected="false">Others</a>

                    </div>
                </div>
                <div class="col-md-10">

                    <div class="tab-content" id="vds-finance-pillars-pills-tabContent">
                        <div class="tab-pane fade show active" id="finance-pill-staff-requests-content" role="tabpanel"
                            aria-labelledby="pills-finance-pillars-tab">

                            <div class="row">
                                <div class="col-lg-12">
                                    <button type="button" class="btn btn-outline-primary float-right" data-toggle="modal" data-target="#fin-staffrequestsContent">
                                        create new staff request
                                    </button>
                                    <br />
                                    <!-- Button trigger modal -->
                                <!-- Modal -->
                                <div class="modal fade" id="fin-staffrequestsContent" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle">Type of Request</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        </div>
                                        <div class="modal-body">
                                            <ul class="list-group-flush">
                                                <li class="list-group-item">
                                                    <a href="#" class="btn  btn-outline-secondary d-flex justify-content-between">
                                                        <i class="fas fa-chalkboard fa-lg mt-auto mb-auto"></i>
                                                        <p class="m-auto"> PAYMENT REQUISITION</p>
                                                    </a>
                                                </li>
                                                <li class="list-group-item">
                                                    <a href="#" class="btn  btn-outline-secondary d-flex justify-content-between">
                                                        <i class="fas fa-chalkboard fa-lg mt-auto mb-auto"></i>
                                                        <p class="m-auto"> TRAVEL ADVANCE REQUEST</p>
                                                    </a>
                                                </li>
                                                <li class="list-group-item">
                                                    <a href="#" class="btn btn-outline-success d-flex justify-content-between" data-bs-toggle="tooltip" data-bs-placement="top" title="view project full details">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                                            <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                                                            <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                                                        </svg>
                                                        <p class="m-auto">PETTY CASH</p>
                                                    </a>

                                                </li>
                                                <li class="list-group-item">
                                                    <a href="#" class="btn btn-outline-info btn-md d-flex justify-content-between" data-bs-toggle="tooltip" data-bs-placement="top" title="view update project details">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-arrow-up-circle" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-7.5 3.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V11.5z" />
                                                        </svg>
                                                        <p class="m-auto">PER DIEM CLAIM </p>
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
                                    <div class="card">
                                        <div class="card-content table-responsive">

                                            <table class="table table-bordered table-hover">
                                                <p><strong>All Staff requests.</strong></p>
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
                                                            <button type="button"
                                                                class="btn btn-outline-success">view
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
                                                            <button type="button"
                                                                class="btn btn-outline-success">view
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
                                                            <button type="button"
                                                                class="btn btn-outline-success">view
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
                        <div class="tab-pane fade" id="finance-pill-retirements-content" role="tabpanel"
                            aria-labelledby="vdsreqs-pills-profile-tab">
                            {{-- my retirements --}}
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-content table-responsive">
                                            <br />
                                            <table class="table table-bordered table-hover">
                                                <p><strong>All Retirements </strong></p>
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
                                                            <button type="button"
                                                                class="btn btn-outline-success">view
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
                                                            <button type="button"
                                                                class="btn btn-outline-success">view
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
                                                            <button type="button"
                                                                class="btn btn-outline-success">view
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
                        <div class="tab-pane fade" id="finance-pill-office-requests-content" role="tabpanel"
                            aria-labelledby="vdsreqs-pills-profile-tab">
                            {{-- my retirements --}}
                            <div class="row">
                                <div class="col-lg-12">
                                    <button type="button" class="btn btn-outline-primary float-right" data-toggle="modal" data-target="#">
                                        create new office request
                                       </button>
                                    <br />
                                    <div class="card">
                                        <div class="card-content table-responsive">
                                            <br />
                                            <table class="table table-bordered table-hover">
                                                <p><strong>Office / Official requests</strong></p>
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
                                                            <button type="button"
                                                                class="btn btn-outline-success">view
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
                                                            <button type="button"
                                                                class="btn btn-outline-success">view
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
                                                            <button type="button"
                                                                class="btn btn-outline-success">view
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
                        <div class="tab-pane fade" id="finance-pill-assets-content" role="tabpanel"
                            aria-labelledby="vdsreqs-pills-profile-tab">
                            {{-- my retirements --}}
                            <div class="row">
                                <div class="col-lg-12">
                                    <button type="button" class="btn btn-outline-primary float-right" data-toggle="modal" data-target="#exampleModalCenter">
                                        add new asset
                                       </button>
                                    <br />
                                    <!-- Button trigger modal -->
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle">Type of Request</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        </div>
                                        <div class="modal-body">
                                            <ul class="list-group-flush">
                                                <li class="list-group-item">
                                                    <a href="#" class="btn  btn-outline-secondary d-flex justify-content-between">
                                                        <i class="fas fa-chalkboard fa-lg mt-auto mb-auto"></i>
                                                        <p class="m-auto"> PAYMENT REQUISITION</p>
                                                    </a>
                                                </li>
                                                <li class="list-group-item">
                                                    <a href="#" class="btn  btn-outline-secondary d-flex justify-content-between">
                                                        <i class="fas fa-chalkboard fa-lg mt-auto mb-auto"></i>
                                                        <p class="m-auto"> TRAVEL ADVANCE REQUEST</p>
                                                    </a>
                                                </li>
                                                <li class="list-group-item">
                                                    <a href="#" class="btn btn-outline-success d-flex justify-content-between" data-bs-toggle="tooltip" data-bs-placement="top" title="view project full details">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                                            <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                                                            <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                                                        </svg>
                                                        <p class="m-auto">PETTY CASH</p>
                                                    </a>

                                                </li>
                                                <li class="list-group-item">
                                                    <a href="#" class="btn btn-outline-info btn-md d-flex justify-content-between" data-bs-toggle="tooltip" data-bs-placement="top" title="view update project details">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-arrow-up-circle" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-7.5 3.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V11.5z" />
                                                        </svg>
                                                        <p class="m-auto">PER DIEM CLAIM </p>
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
                                    <div class="card">
                                        <div class="card-content table-responsive">
                                            <br />
                                            <table class="table table-bordered table-hover">
                                                <p><strong>All company Assets</strong></p>
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
                                                            <button type="button"
                                                                class="btn btn-outline-success">view
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
                                                            <button type="button"
                                                                class="btn btn-outline-success">view
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
                                                            <button type="button"
                                                                class="btn btn-outline-success">view
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
                        <div class="tab-pane fade" id="finance-pill-capture-income-content" role="tabpanel"
                            aria-labelledby="vdsreqs-pills-profile-tab">
                            {{-- my retirements --}}
                            <div class="row">
                                <div class="col-lg-12">
                                    <button type="button" class="btn btn-outline-primary float-right" data-toggle="modal" data-target="#newDSimprest">
                                        add new C/I package
                                       </button>
                                    <br />
                                    <div class="card">
                                        <div class="card-content table-responsive">
                                            <br />
                                            <table class="table table-bordered table-hover">
                                                <p><strong>Capture income packages</strong></p>
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
                                                            <button type="button"
                                                                class="btn btn-outline-success">view
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
                                                            <button type="button"
                                                                class="btn btn-outline-success">view
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
                                                            <button type="button"
                                                                class="btn btn-outline-success">view
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
                        <div class="tab-pane fade" id="finance-pill-contracts-content" role="tabpanel"
                            aria-labelledby="vdsreqs-pills-profile-tab">
                            {{-- my retirements --}}
                            <div class="row">
                                <div class="col-lg-12">
                                    <button type="button" class="btn btn-outline-primary float-right" data-toggle="modal" data-target="#newDSimprest">
                                        add new contract
                                       </button>
                                    <br />
                                    <div class="card">
                                        <div class="card-content table-responsive">
                                            <br />
                                            <table class="table table-bordered table-hover">
                                                <p><strong>All company contracts</strong></p>
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
                                                            <button type="button"
                                                                class="btn btn-outline-success">view
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
                                                            <button type="button"
                                                                class="btn btn-outline-success">view
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
                                                            <button type="button"
                                                                class="btn btn-outline-success">view
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

                        <div class="tab-pane fade" id="finance-pill-gl-content" role="tabpanel"
                            aria-labelledby="vdsreqs-pills-settings-tab">
                            {{-- data science imprests --}}
                            <div class="row">
                                <div class="col-lg-12">
                                    <button type="button" class="btn btn-outline-primary float-right" data-toggle="modal" data-target="#newDSimprest">
                                        add new general ledger
                                       </button>
                                    <br />
                                    <div class="card">
                                        <div class="card-content table-responsive">
                                            <br />
                                            <table class="table table-bordered table-hover">
                                                <p>
                                                    <strong>General Ledger.</strong></p>
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
                                                            <button type="button"
                                                                class="btn btn-outline-success">view
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
                                                            <button type="button"
                                                                class="btn btn-outline-success">view
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
                                                            <button type="button"
                                                                class="btn btn-outline-success">view
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

                        <div class="tab-pane fade" id="finance-pill-pv-content" role="tabpanel"
                            aria-labelledby="pillars-pills-ds-activities-tab">
                            {{-- data science activities --}}
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-content table-responsive">
                                            <br />
                                            <table class="table table-bordered table-hover">
                                                <p>
                                                    <strong>All payment vouchers.</strong></p>
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
                                                            <button type="button"
                                                                class="btn btn-outline-success">view
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
                                                            <button type="button"
                                                                class="btn btn-outline-success">view
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
                                                            <button type="button"
                                                                class="btn btn-outline-success">view
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

                        <div class="tab-pane fade" id="finance-pill-petty-cash-content" role="tabpanel"
                            aria-labelledby="pillars-pills-ds-sub-activities-tab">

                            {{-- data science sub activities --}}
                            <div class="row">
                                <div class="col-lg-12">
                                    {{-- <button type="button" class="btn btn-outline-primary float-right" data-toggle="modal" data-target="#newDSimprest">
                                        add new petty cash
                                       </button>
                                    <br /> --}}
                                    <div class="card">
                                        <div class="card-content table-responsive">
                                            <br />
                                            <table class="table table-bordered table-hover">
                                                <p>
                                                    <strong>Petty Cash requests.</strong></p>
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
                                                            <button type="button"
                                                                class="btn btn-outline-success">view
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
                                                            <button type="button"
                                                                class="btn btn-outline-success">view
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
                                                            <button type="button"
                                                                class="btn btn-outline-success">view
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

                        <div class="tab-pane fade" id="finance-pill-payroll-content" role="tabpanel"
                            aria-labelledby="pillars-pills-ds-activities-tab">
                            {{-- data science activities --}}
                            <div class="row">
                                <div class="col-lg-12">

                                    <div class="card">
                                        <div class="card-content table-responsive">
                                            <br />
                                            <table class="table table-bordered table-hover">
                                                <p>
                                                    <strong>Staff Payroll.</strong></p>
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
                                                            <button type="button"
                                                                class="btn btn-outline-success">view
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
                                                            <button type="button"
                                                                class="btn btn-outline-success">view
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
                                                            <button type="button"
                                                                class="btn btn-outline-success">view
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

                        <div class="tab-pane fade" id="finance-pill-wht-payments-content" role="tabpanel"
                            aria-labelledby="pillars-pills-ds-scholars-tab">

                            {{-- data science scholars --}}
                            <div class="row">
                                <div class="col-lg-12">
                                    <button type="button" class="btn btn-outline-primary float-right" data-toggle="modal" data-target="#newDSimprest">
                                        add new wht payment
                                       </button>
                                    <br />
                                    <div class="card">
                                        <div class="card-content table-responsive">
                                            <br />
                                            <table class="table table-bordered table-hover">
                                                <p>
                                                    <strong>Witholding Tax records.</strong></p>
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
                                                            <button type="button"
                                                                class="btn btn-outline-success">view
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
                                                        <button type="button"
                                                            class="btn btn-outline-success">view
                                                            request
                                                        </button>
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
                                                            <button type="button"
                                                                class="btn btn-outline-success">view
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
                        <div class="tab-pane fade" id="finance-pill-contracts-content" role="tabpanel"
                            aria-labelledby="pillars-pills-ds-grantees-tab">

                            {{-- data science grantees --}}
                            <div class="row">
                                <div class="col-lg-12">
                                    <button type="button" class="btn btn-outline-primary float-right" data-toggle="modal" data-target="#newDSimprest">
                                        add new contract record
                                       </button>
                                    <br />
                                    <div class="card">
                                        <div class="card-content table-responsive">
                                            <br />
                                            <table class="table table-bordered table-hover">
                                                <p>
                                                    <strong>Company contracts records.</strong></p>
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
                                                            <button type="button"
                                                                class="btn btn-outline-success">view
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
                                                            <button type="button"
                                                                class="btn btn-outline-success">view
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
                                                            <button type="button"
                                                                class="btn btn-outline-success">view
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
                        <div class="tab-pane fade" id="finance-pill-other-content" role="tabpanel"
                            aria-labelledby="pillars-pills-ds-retirements-tab">

                            {{-- data science retirements --}}
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-content table-responsive">
                                            <br />
                                            <table class="table table-bordered table-hover">
                                                <p>
                                                    <strong>Other company records.</strong></p>

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
                                                            <button type="button"
                                                                class="btn btn-outline-success">view
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
                                                            <button type="button"
                                                                class="btn btn-outline-success">view
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
                                                            <button type="button"
                                                                class="btn btn-outline-success">view
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
