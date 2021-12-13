@extends('layouts.llmds')
@section('content')
<div class="container-fluid">
    <script>
        $(document).ready(function() {
            $('#nav-tab a[href="#{{ old('
                tab ') }}"]').tab('show')
        });
    </script>

    <div class="flash-message">
        @foreach (['danger', 'warning', 'success', 'info'] as $msg)
        @if(Session::has('alert-' . $msg))

        <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
        @endif
        @endforeach
    </div> <!-- end .flash-message -->



    <div class="tab-content pt-5" id="selectDataViewTabContent">

        <!-- start of  data dashboard panel -->
        <div class="tab-pane fade show active" id="data-science-overview-md" role="tabpanel" aria-labelledby="data-science-overview-tab-md">
            <div class="row">
                {{-- data science notifications --}}
                <div class="col-lg-3">
                    <div class="card rounded">
                        <div class="card-content table-responsive">
                            <h5 class="title">New Notifications</h5>
                            <br />
                            <ul class="list-group">
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <a href="#" class="list-group-item-action">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="3em" height="2em" fill="#0488ae" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z" />
                                            <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z" />
                                        </svg>
                                        New Approved Request
                                        <span class="badge badge-danger badge-pill">14</span>
                                    </a>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <a href="#" class="list-group-item-action">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="3em" height="2em" fill="#0488ae" class="bi bi-person-lines-fill" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm7 1.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5zm-2-3a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5zm2 9a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5z" />
                                        </svg>
                                        New Staff Request
                                        <span class="badge badge-danger badge-pill">14</span>
                                    </a>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <a href="#" class="list-group-item-action">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="3em" height="2em" fill="#0488ae" class="bi bi-file-bar-graph" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M4 0h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2zm0 1a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H4z" />
                                            <path d="M4.5 12a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5h-1zm3 0a.5.5 0 0 1-.5-.5v-4a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-.5.5h-1zm3 0a.5.5 0 0 1-.5-.5v-6a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-.5.5h-1z" />
                                        </svg>
                                        Pending Retirements
                                        <span class="badge badge-danger badge-pill">6</span>
                                    </a>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <a href="#" class="list-group-item-action">
                                        <svg width="3em" height="2em" viewBox="0 0 16 16" class="bi bi-inbox" fill="#0488ae" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M4.98 4a.5.5 0 0 0-.39.188L1.54 8H6a.5.5 0 0 1 .5.5 1.5 1.5 0 1 0 3 0A.5.5 0 0 1 10 8h4.46l-3.05-3.812A.5.5 0 0 0 11.02 4H4.98zm9.954 5H10.45a2.5 2.5 0 0 1-4.9 0H1.066l.32 2.562a.5.5 0 0 0 .497.438h12.234a.5.5 0 0 0 .496-.438L14.933 9zM3.809 3.563A1.5 1.5 0 0 1 4.981 3h6.038a1.5 1.5 0 0 1 1.172.563l3.7 4.625a.5.5 0 0 1 .105.374l-.39 3.124A1.5 1.5 0 0 1 14.117 13H1.883a1.5 1.5 0 0 1-1.489-1.314l-.39-3.124a.5.5 0 0 1 .106-.374l3.7-4.625z" />
                                        </svg>
                                        Advance requests responses
                                        <span class="badge badge-danger badge-pill">2</span>
                                    </a>
                                </li>

                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <a href="#" class="list-group-item-action">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="3em" height="2em" fill="#0488ae" class="bi bi-calendar4-range" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM2 2a1 1 0 0 0-1 1v1h14V3a1 1 0 0 0-1-1H2zm13 3H1v9a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V5z" />
                                            <path d="M9 7.5a.5.5 0 0 1 .5-.5H15v2H9.5a.5.5 0 0 1-.5-.5v-1zm-2 3a.5.5 0 0 0-.5-.5H1v2h5.5a.5.5 0 0 0 .5-.5v-1z" />
                                        </svg>
                                        Monthly Staff Timesheet
                                        <span class="badge badge-danger badge-pill">2</span>
                                    </a>
                                </li>
                            </ul>
                            <br />
                            <button type="button" class="btn btn-outline-primary">create advance request</button>
                            <br />
                            <br />
                            <button type="button" class="btn btn-outline-primary">create new project</button>
                            <br />
                            <br />
                            <button type="button" class="btn btn-outline-primary">create new report</button>

                        </div>

                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="card rounded">
                                <div class="card-content table-responsive d-flex">
                                    <div class="row">
                                        <div class="">
                                            <p class="p-0"> projects created </p>
                                        </div>
                                    </div>

                                    <div class="d-flex justify-content-between">

                                        <div class="m-1">
                                            <h3 class="cardhd">12</h3>
                                        </div>
                                        <div class="m-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#9c27b0" class="bi bi-folder-check" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M9.828 4H2.19a1 1 0 0 0-.996 1.09l.637 7a1 1 0 0 0 .995.91H9v1H2.826a2 2 0 0 1-1.991-1.819l-.637-7a1.99 1.99 0 0 1 .342-1.31L.5 3a2 2 0 0 1 2-2h3.672a2 2 0 0 1 1.414.586l.828.828A2 2 0 0 0 9.828 3h3.982a2 2 0 0 1 1.992 2.181L15.546 8H14.54l.265-2.91A1 1 0 0 0 13.81 4H9.828zm-2.95-1.707L7.587 3H2.19c-.24 0-.47.042-.684.12L1.5 2.98a1 1 0 0 1 1-.98h3.672a1 1 0 0 1 .707.293z" />
                                                <path fill-rule="evenodd" d="M15.854 10.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708l1.146 1.147 2.646-2.647a.5.5 0 0 1 .708 0z" />
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card rounded">
                                <div class="card-content table-responsive d-flex ">
                                    <p> Activities created </p>
                                    <div class="row">

                                        <div class="">
                                            <h3 class="cardhd">10</h3>
                                        </div>
                                        <div class="">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="#00bcd4" class="bi bi-check2-circle" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M15.354 2.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3-3a.5.5 0 1 1 .708-.708L8 9.293l6.646-6.647a.5.5 0 0 1 .708 0z" />
                                                <path fill-rule="evenodd" d="M8 2.5A5.5 5.5 0 1 0 13.5 8a.5.5 0 0 1 1 0 6.5 6.5 0 1 1-3.25-5.63.5.5 0 1 1-.5.865A5.472 5.472 0 0 0 8 2.5z" />
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card rounded">
                                <div class="card-content table-responsive d-flex">
                                    <p> Sub-Activities recorded </p>
                                    <div class="row">

                                        <div class="">
                                            <h3 class="cardhd">24</h3>
                                        </div>
                                        <div class="">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="#009688" class="bi bi-check2-square" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M15.354 2.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3-3a.5.5 0 1 1 .708-.708L8 9.293l6.646-6.647a.5.5 0 0 1 .708 0z" />
                                                <path fill-rule="evenodd" d="M1.5 13A1.5 1.5 0 0 0 3 14.5h10a1.5 1.5 0 0 0 1.5-1.5V8a.5.5 0 0 0-1 0v5a.5.5 0 0 1-.5.5H3a.5.5 0 0 1-.5-.5V3a.5.5 0 0 1 .5-.5h8a.5.5 0 0 0 0-1H3A1.5 1.5 0 0 0 1.5 3v10z" />
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card rounded">
                                <div class="card-content table-responsive d-flex">
                                    <p> other Activities </p>
                                    <div class="row">

                                        <div class="">
                                            <h3 class="cardhd">06</h3>
                                        </div>
                                        <div class="">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#ff9800" class="bi bi-folder-check" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M9.828 4H2.19a1 1 0 0 0-.996 1.09l.637 7a1 1 0 0 0 .995.91H9v1H2.826a2 2 0 0 1-1.991-1.819l-.637-7a1.99 1.99 0 0 1 .342-1.31L.5 3a2 2 0 0 1 2-2h3.672a2 2 0 0 1 1.414.586l.828.828A2 2 0 0 0 9.828 3h3.982a2 2 0 0 1 1.992 2.181L15.546 8H14.54l.265-2.91A1 1 0 0 0 13.81 4H9.828zm-2.95-1.707L7.587 3H2.19c-.24 0-.47.042-.684.12L1.5 2.98a1 1 0 0 1 1-.98h3.672a1 1 0 0 1 .707.293z" />
                                                <path fill-rule="evenodd" d="M15.854 10.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708l1.146 1.147 2.646-2.647a.5.5 0 0 1 .708 0z" />
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
                            <div class="card rounded">
                                <div class="card-content table-responsive">
                                    <!-- <label for="exampleFormControlSelect1" class="control-label">select below:</label> -->
                                    <div id="chartContainer" style="height: 335px; width: 100%;"></div>
                                </div>
                            </div>
                            <!-- end of first column -->
                        </div>
                        <div class="col-md-6">
                            <div class="card rounded">
                                <div class="card-content table-responsive">
                                    <p> Total Allocated funds to <strong>Pillar</strong> </p>
                                    <div class="row">
                                        <div class="offset-1 col-md-8">
                                            <h3 class="cardhdcash text-nowrap">12,000,000.00 <strong>TZS</strong></h3>
                                            <p class="paraspandollars">5454.00 <strong>USD</strong></p>
                                        </div>
                                        <div class="offset-1 col-md-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#ff9800" class="bi bi-cash-stack" viewBox="0 0 16 16">
                                                <path d="M14 3H1a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1h-1z" />
                                                <path fill-rule="evenodd" d="M15 5H1v8h14V5zM1 4a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1H1z" />
                                                <path d="M13 5a2 2 0 0 0 2 2V5h-2zM3 5a2 2 0 0 1-2 2V5h2zm10 8a2 2 0 0 1 2-2v2h-2zM3 13a2 2 0 0 0-2-2v2h2zm7-4a2 2 0 1 1-4 0 2 2 0 0 1 4 0z" />
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card rounded">
                                <div class="card-content table-responsive">
                                    <p> Total Expenses recorded by <strong>Pillar</strong> </p>
                                    <div class="row">
                                        <div class="offset-1 col-md-8">
                                            <h3 class="cardhdexpenscash text-nowrap">12,000,000.00 <strong>TZS</strong></h3>
                                            <p class="paraspandollars">5454.00 <strong>USD</strong></p>
                                        </div>
                                        <div class="offset-1 col-md-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#ff5252" class="bi bi-cash-stack" viewBox="0 0 16 16">
                                                <path d="M14 3H1a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1h-1z" />
                                                <path fill-rule="evenodd" d="M15 5H1v8h14V5zM1 4a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1H1z" />
                                                <path d="M13 5a2 2 0 0 0 2 2V5h-2zM3 5a2 2 0 0 1-2 2V5h2zm10 8a2 2 0 0 1 2-2v2h-2zM3 13a2 2 0 0 0-2-2v2h2zm7-4a2 2 0 1 1-4 0 2 2 0 0 1 4 0z" />
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <h4>Requests, Imprests & Retirements</h4>
            <div class="row">
                <div class="col-md-4">
                    <div class="card rounded">
                        <div class="card-content table-responsive">
                            <div class="row">
                                <div class="col-md-8">
                                    <h4 class="float-left"> Pillar Request
                                    </h4>
                                    <br />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <p>Total Pillar Requests: </p>
                                    <div class="row">
                                        <div class="offset-2 col-md-6">
                                            <h3 class="cardhdthreesuccess"><strong>120</strong></h3>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <p>Total Pending Reviews: </p>
                                    <div class="offset-2 col-md-6">

                                        <h3 class="cardhdthreedanger"><strong>0</strong></h3>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <p>Total Pending Approvals: </p>
                                    <div class="offset-1 col-md-6">
                                        <h3 class="cardhdthreesuccess"><strong>120</strong></h3>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <p>Total Approved requests: </p>
                                    <div class="offset-1 col-md-6">
                                        <h3 class="cardhdthreesuccess"><strong>120</strong></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card rounded">
                        <div class="card-content table-responsive">

                            <div class="row">
                                <div class="col-md-12 ">
                                    <h4 class="text-center"> Pillar Retirements
                                    </h4>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <p>Total Pillar Retirements: </p>
                                    <div class="offset-2 col-md-6">
                                        <h3 class="cardhdthreesuccess"><strong>120</strong></h3>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <p>Total Retirements Reviews: </p>
                                    <div class="offset-2 col-md-6">
                                        <h3 class="cardhdthreedanger"><strong>0</strong></h3>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <p>Total Pending Approvals: </p>
                                    <div class="offset-2 col-md-6">
                                        <h3 class="cardhdthreesuccess"><strong>120</strong></h3>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <p>Approved Retirements: </p>
                                    <div class="offset-2 col-md-6">
                                        <h3 class="cardhdthreesuccess"><strong>120</strong></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card rounded">
                        <div class="card-content table-responsive">
                            <div class="row">
                                <div class="col-md-12">
                                    <h4 class="float-left"> Pillar Imprests
                                    </h4>
                                    <br />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <p>Total Created Imprests: </p>
                                    <div class="offset-2 col-md-6">
                                        <h3 class="cardhdthreesuccess"><strong>120</strong></h3>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <p>Imprest pending reviews: </p>
                                    <div class="offset-2 col-md-6">
                                        <h3 class="cardhdthreedanger"><strong>0</strong></h3>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <p>Pending Approvals: </p>
                                    <div class="offset-2 col-md-6">
                                        <h3 class="cardhdthreesuccess"><strong>120</strong></h3>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <p>Total Approved Imprests: </p>
                                    <div class="offset-2 col-md-6">
                                        <h3 class="cardhdthreesuccess"><strong>120</strong></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <h4>My Activity Summary</h4>

            <div class="row">
                <div class="col-md-4">
                    <div class="card rounded">
                        <div class="card-content table-responsive">
                            <div class="row">
                                <div class="col-md-12">
                                    <h4 class="float-left">Reviewed By Me
                                    </h4>
                                    <br />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-8">
                                    <p>Total Amount of Projects:
                                    </p>
                                </div>
                                <div class="col-md-4">
                                    <h3 class="cardhdthreesuccess"><strong>22</strong></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card rounded">
                        <div class="card-content table-responsive">
                            <div class="row">
                                <div class="col-md-12">
                                    <h4 class="float-left"> Prepared By Me
                                    </h4>
                                    <br />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-8">
                                    <p>Total Number of Projects:
                                    </p>
                                </div>
                                <div class="col-md-4">
                                    <h3 class="cardhdthreesuccess"><strong>36</strong></h3>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-8">
                                    <p>Number of Activities:
                                    </p>
                                </div>
                                <div class="col-md-4">
                                    <h3 class="cardhdthreesuccess"><strong>20</strong></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card rounded">
                        <div class="card-content table-responsive">
                            <div class="row">
                                <div class="col-md-12">
                                    <h4 class="float-left"> Approved by Me
                                    </h4>
                                    <br />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-8">
                                    <p>Total Amount of Requests:
                                    </p>
                                </div>
                                <div class="col-md-4">
                                    <h3 class="cardhdthreesuccess"><strong>79</strong></h3>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-8">
                                    <p>Total Amount of Activities:
                                    </p>
                                </div>
                                <div class="col-md-4">
                                    <h3 class="cardhdthreesuccess"><strong>120</strong></h3>

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-8">
                                    <p>Total Number of Reports:
                                    </p>
                                </div>
                                <div class="col-md-4">
                                    <h3 class="cardhdthreesuccess"><strong>93</strong></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card rounded">
                        <div class="card-content table-responsive">
                            <h4>Quick Statistics</h4>

                            <div class="row">
                                <div class="col-lg-12">
                                    <nav>
                                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                            <a class="nav-item nav-link rounded-tabs active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Pillar Impact</a>
                                            <a class="nav-item nav-link rounded-tabs" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false"> Project & Activity
                                                Tracking</a>
                                            <a class="nav-item nav-link rounded-tabs" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Pillar Annual Schedule
                                                Tracking</a>
                                        </div>
                                    </nav>
                                    <div class="tab-content" id="nav-tabContent">
                                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                            <br />
                                            <div class="row">

                                                <div class="col-md-6">
                                                    <div id="chartDemographicPositive" style="height: 370px; width: 100%;"></div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                            {{-- Project & Activity tracking --}}
                                            <div class="row">
                                                <div class="col-md-3">

                                                    <br />
                                                    <br />

                                                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                                        <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Pillar
                                                            Projects</a>
                                                        <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Pillar
                                                            Activities</a>
                                                        <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Pillar Cost Analysis</a>
                                                        <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Pillar Beneficiaries</a>
                                                    </div>
                                                </div>
                                                <div class="col-md-9">
                                                    <br />
                                                    <br />

                                                    <div class="tab-content" id="v-pills-tabContent">
                                                        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                                            {{--
                                                            pill summary projects & activity tracking --}}

                                                            <div class="row">
                                                                <div class="col-lg-12">
                                                                    <div class="card rounded">
                                                                        <div class="card-content table-responsive">
                                                                            <div class="row">
                                                                                <div class="col-md-8">
                                                                                    <h3 class="cardhdthreesuccess float-left">
                                                                                        #1. Sauti
                                                                                        Mpya
                                                                                    </h3>
                                                                                    <br />
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-md-6">
                                                                                    <p>Number of requests:
                                                                                    </p>
                                                                                </div>
                                                                                <div class="col-md-1">
                                                                                    <h5><strong>10</strong></h5>
                                                                                </div>
                                                                                <div class="col-md-5">
                                                                                    <p>qty pending <span class="badge badge-info">0</span>
                                                                                    </p>
                                                                                </div>
                                                                            </div>

                                                                            <div class="row">
                                                                                <div class="col-md-6">
                                                                                    <p>Number of on-going activities:
                                                                                    </p>
                                                                                </div>
                                                                                <div class="col-md-1">
                                                                                    <h5><strong>1</strong></h5>
                                                                                </div>
                                                                                <div class="col-md-5">
                                                                                    <p>qty pending completion <span class="badge badge-info">2</span>
                                                                                    </p>
                                                                                </div>
                                                                            </div>

                                                                            <div class="row">
                                                                                <div class="col-md-6">
                                                                                    <p>Number of on-going
                                                                                        sub-activities:
                                                                                    </p>
                                                                                </div>
                                                                                <div class="col-md-1">
                                                                                    <h5><strong>6</strong></h5>
                                                                                </div>
                                                                                <div class="col-md-5">
                                                                                    <p>qty pending completion <span class="badge badge-info">3</span>
                                                                                    </p>
                                                                                </div>
                                                                            </div>

                                                                            <div class="row">
                                                                                <div class="col-md-6">
                                                                                    <p>Retirements:
                                                                                    </p>
                                                                                </div>
                                                                                <div class="col-md-1">
                                                                                    <h5><strong>12</strong></h5>
                                                                                </div>
                                                                                <div class="col-md-5">
                                                                                    <p>qty pending <span class="badge badge-info">3</span>
                                                                                    </p>
                                                                                </div>
                                                                            </div>

                                                                            <div class="row">
                                                                                <div class="col-md-6">
                                                                                    <p>Reports:
                                                                                    </p>
                                                                                </div>
                                                                                <div class="col-md-1">
                                                                                    <h5><strong>12</strong></h5>
                                                                                </div>
                                                                                <div class="col-md-5">
                                                                                    <p>qty pending <span class="badge badge-info">3</span>
                                                                                    </p>
                                                                                </div>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-12">
                                                                    <div class="card rounded">
                                                                        <div class="card-content table-responsive">
                                                                            <div class="row">
                                                                                <div class="col-md-8">
                                                                                    <h3 class="cardhdthreesuccess float-left">
                                                                                        #1. Data Zetu
                                                                                    </h3>
                                                                                    <br />
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-md-6">
                                                                                    <p>Number of requests:
                                                                                    </p>
                                                                                </div>
                                                                                <div class="col-md-1">
                                                                                    <h5><strong>10</strong></h5>
                                                                                </div>
                                                                                <div class="col-md-5">
                                                                                    <p>qty pending <span class="badge badge-info">0</span>
                                                                                    </p>
                                                                                </div>
                                                                            </div>

                                                                            <div class="row">
                                                                                <div class="col-md-6">
                                                                                    <p>Number of on-going activities:
                                                                                    </p>
                                                                                </div>
                                                                                <div class="col-md-1">
                                                                                    <h5><strong>1</strong></h5>
                                                                                </div>
                                                                                <div class="col-md-5">
                                                                                    <p>qty pending completion <span class="badge badge-info">2</span>
                                                                                    </p>
                                                                                </div>
                                                                            </div>

                                                                            <div class="row">
                                                                                <div class="col-md-6">
                                                                                    <p>Number of on-going
                                                                                        sub-activities:
                                                                                    </p>
                                                                                </div>
                                                                                <div class="col-md-1">
                                                                                    <h5><strong>6</strong></h5>
                                                                                </div>
                                                                                <div class="col-md-5">
                                                                                    <p>qty pending completion <span class="badge badge-info">3</span>
                                                                                    </p>
                                                                                </div>
                                                                            </div>

                                                                            <div class="row">
                                                                                <div class="col-md-6">
                                                                                    <p>Retirements:
                                                                                    </p>
                                                                                </div>
                                                                                <div class="col-md-1">
                                                                                    <h5><strong>12</strong></h5>
                                                                                </div>
                                                                                <div class="col-md-5">
                                                                                    <p>qty pending <span class="badge badge-info">3</span>
                                                                                    </p>
                                                                                </div>
                                                                            </div>

                                                                            <div class="row">
                                                                                <div class="col-md-6">
                                                                                    <p>Reports:
                                                                                    </p>
                                                                                </div>
                                                                                <div class="col-md-1">
                                                                                    <h5><strong>12</strong></h5>
                                                                                </div>
                                                                                <div class="col-md-5">
                                                                                    <p>qty pending <span class="badge badge-info">3</span>
                                                                                    </p>
                                                                                </div>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">

                                                            {{-- pillar activities --}}
                                                            <div class="row">
                                                                <div class="col-lg-12">
                                                                    <div class="card rounded">
                                                                        <div class="card-content table-responsive">
                                                                            <div class="row">
                                                                                <div class="col-md-8">
                                                                                    <h3 class="cardhdthreesuccess float-left">
                                                                                        #1. Data
                                                                                        Visualizing Mbeya
                                                                                    </h3>
                                                                                    <br />
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-md-6">
                                                                                    <p>Project under <span class="badge badge-secondary">Sauti
                                                                                            Mpya</span>
                                                                                    </p>
                                                                                </div>
                                                                                <div class="col-md-6">
                                                                                    <p></p>
                                                                                </div>
                                                                            </div>

                                                                            <div class="row">
                                                                                <div class="col-md-6">
                                                                                    <p>Total Amount Allocated:
                                                                                    </p>
                                                                                </div>
                                                                                <div class="col-md-4">
                                                                                    <h5>3,600,000 <strong>TZS</strong>
                                                                                    </h5>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-md-6">

                                                                                    <p>Start Date <span class="badge badge-info">12
                                                                                            Novemer 2020</span>
                                                                                </div>
                                                                                <div class="col-md-4">
                                                                                    <p>Duration <span class="badge badge-warning">12
                                                                                            days</span>
                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-md-6">
                                                                                    <p>End Date <span class="badge badge-info">24
                                                                                            Novemer 2020</span>
                                                                                    </p>
                                                                                </div>

                                                                                <div class="col-md-4">
                                                                                    <p> Status <span class="badge badge-success">Active</span>
                                                                                    </p>
                                                                                </div>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">

                                                            {{-- Cost analysis content tab --}}
                                                            <div class="row">
                                                                <div class="col-lg-12">
                                                                    <div class="card rounded">
                                                                        <div class="card-content table-responsive">
                                                                            <div class="row">
                                                                                <div class="col-md-8">
                                                                                    <h2 class="cardhdthreesuccess float-left">
                                                                                        Data Science Pillar
                                                                                    </h2>
                                                                                    <br />
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-md-8">
                                                                                    <h4>Initial Allocated Balance <span class="badge badge-secondary">12,000,000</span>
                                                                                        <strong>TZS</strong>
                                                                                    </h4>
                                                                                </div>
                                                                                <div class="col-md-6">
                                                                                    <p></p>
                                                                                </div>
                                                                            </div>

                                                                            <div class="row">
                                                                                <div class="col-md-6">
                                                                                    <p>Pillar Activities Total Cost:
                                                                                    </p>
                                                                                </div>
                                                                                <div class="col-md-4">
                                                                                    <h3><span class="badge badge-success">
                                                                                            11,600,000
                                                                                            <strong>TZS</strong> </span>
                                                                                    </h3>
                                                                                </div>
                                                                            </div>

                                                                            <div class="row">
                                                                                <div class="col-md-6">
                                                                                    <p> Total Retired Costs:
                                                                                    </p>
                                                                                </div>
                                                                                <div class="col-md-4">
                                                                                    <h5><span class="badge badge-warning">
                                                                                            11,600,000
                                                                                            <strong>TZS</strong> </span>
                                                                                    </h5>
                                                                                </div>
                                                                            </div>

                                                                            <div class="row">
                                                                                <div class="col-md-6">
                                                                                    <p> Pillar Allocated fund Balance:
                                                                                    </p>
                                                                                </div>
                                                                                <div class="col-md-4">
                                                                                    <h3><span class="badge badge-info">
                                                                                            400,000 <strong>TZS</strong>
                                                                                        </span>
                                                                                    </h3>
                                                                                </div>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">

                                                            <div class="row">
                                                                <div class="col-lg-12">
                                                                    <p>Number of impacted youth:
                                                                    </p>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <h3 class="cardhdthreesuccess"><strong>+ 3000
                                                                        </strong></h3>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-lg-12">
                                                                    <p>Number of impacted Women:
                                                                    </p>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <h3 class="cardhdthreesuccess"><strong>+
                                                                            2200</strong></h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                                            <br />
                                            <br />

                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <p>Annual goal current status <span class="badge badge-success">89
                                                            %</span></p>

                                                    <div class="progress" style="height: 2px;">
                                                        <div class="progress-bar" role="progressbar" style="width: 89%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <br />
                                            <br />
                                            <h5>All On-going projects</h5>
                                            <br />
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <p>Sauti Mpya <span class="badge badge-success">45 %</span></p>
                                                    <div class="progress" style="height: 20px;">
                                                        <div class="progress-bar" role="progressbar" style="width: 45%; background-color: #56dc34ba;" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <p>Data Zetu <span class="badge badge-success">85 %</span></p>
                                                    <div class="progress" style="height: 20px;">
                                                        <div class="progress-bar" role="progressbar" style="width: 85%; background-color: #56dc34ba;" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <br />
                                            <br />
                                            <br />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



        </div>


        <!--  start of imprest-retirements data-->
        <div class="tab-pane fade" id="data-science-request-md" role="tabpanel" aria-labelledby="data-science-request-tab-md">
            <!-- line chart -->
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#dataScienceRequestTypeModal">
                create a new request
            </button>
            <br />
            <br />

            <!-- Modal -->
            <div class="modal fade" id="dataScienceRequestTypeModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
                                    <a href="{{ route('create-new-training-advance-request') }}" class="list-group-item list-group-item-action">
                                        Training Advance Request
                                    </a>

                                </li>
                                <li class="list-group-item">
                                    <a href="{{ route('create-new-training-advance-request') }}" class="list-group-item list-group-item-action">
                                        Travel Advance request
                                    </a>

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

                    <nav>
                        <div class="nav nav-tabs" id="dsreq-nav-tab" role="tablist">
                            <a class="nav-item nav-link active" id="nav-my-requests-tab" data-toggle="tab" href="#dsreq-nav-my-requests" role="tab" aria-controls="nav-my-requests" aria-selected="true">My
                                Requests</a>
                            <a class="nav-item nav-link" id="nav-staff-requests-tab" data-toggle="tab" href="#dsreq-nav-staff-requests" role="tab" aria-controls="nav-staff-requests" aria-selected="false">Staff Requests</a>
                            <a class="nav-item nav-link" id="nav-res-lm-requests-tab" data-toggle="tab" href="#dsreq-nav-res-lm-requests" role="tab" aria-controls="nav-contact" aria-selected="false">Response from Line Manager</a>
                        </div>
                    </nav>
                    <div class="tab-content" id="dsreq-tabContent">
                        <div class="tab-pane fade show active" id="dsreq-nav-my-requests" role="tabpanel" aria-labelledby="nav-home-tab">
                            {{-- my ds requests --}}
                            <br />
                            <br />
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="nav flex-column nav-pills" id="vdsreqs-pills-tab" role="tablist" aria-orientation="vertical">
                                        <a class="nav-link active" id="vdsreqs-pills-my-req-onreview-tab" data-toggle="pill" href="#vdsreqs-pillsmy-req-onreview" role="tab" aria-controls="vdsreqs-pills-my-req-onreview" aria-selected="true">My reviewed requests</a>
                                        <a class="nav-link" id="vdsreqs-pills-my-approved-req-tab" data-toggle="pill" href="#vdsreqs-pills-my-approved-req" role="tab" aria-controls="vdsreqs-pills-my-approved-req" aria-selected="false">My Approved
                                            request</a>
                                        <a class="nav-link" id="vdsreqs-pills-my-req-retirements-tab" data-toggle="pill" href="#vdsreqs-pills-my-req-retirements" role="tab" aria-controls="vdsreqs-pills-my-req-retirements" aria-selected="false">My
                                            Requests retirements</a>
                                        <a class="nav-link" id="vdsreqs-pills-all-my-req-tab" data-toggle="pill" href="#vdsreqs-pills-all-my-req" role="tab" aria-controls="vdsreqs-pills-all-my-req" aria-selected="false">All My
                                            requests</a>
                                        <a class="nav-link" id="vdsreqs-pills-all-pillar-request-tab" data-toggle="pill" href="#vdsreqs-pills-all-pillar-request" role="tab" aria-controls="vdsreqs-pills-all-pillar-request" aria-selected="false">All
                                            Pillar requests</a>
                                    </div>
                                </div>
                                <div class="col-md-10">
                                    <div class="tab-content" id="v-pills-tabContent">
                                        <div class="tab-pane fade show active" id="vdsreqs-pillsmy-req-onreview" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                            {{-- My reviewed requests --}}
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <table class="table table-bordered table-hover">
                                                        <p>My requests that are on <strong>review</strong></p>
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
                                                            @foreach($imprests as $imps)
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
                                                                    <a href="{{route('imprest-detail',$imps->id)}}" class="btn btn-outline-success">view
                                                                        request</a>
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
                                                    <!-- end of SECOND column -->
                                                </div>

                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="vdsreqs-pills-my-approved-req" role="tabpanel" aria-labelledby="vdsreqs-pills-profile-tab">

                                            {{-- my approved requests --}}
                                            <div class="row">
                                                <div class="col-lg-12">

                                                    <table class="table table-bordered table-hover">
                                                        <p>My requests that have been approved </p>
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
                                                                <td>2</td>
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
                                                                <td>4</td>
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
                                                                <td>1</td>
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

                                                    <!-- end of SECOND column -->
                                                </div>

                                            </div>

                                        </div>
                                        <div class="tab-pane fade" id="vdsreqs-pills-my-req-retirements" role="tabpanel" aria-labelledby="vdsreqs-pills-messages-tab">
                                            {{-- my request retirements --}}
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <table class="table table-bordered table-hover">
                                                        <p>My request <strong>Retirements</strong></p>
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
                                                                <td>4</td>
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
                                                                <td>4</td>
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
                                                                <td>4</td>
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

                                                    <!-- end of SECOND column -->
                                                </div>

                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="vdsreqs-pills-all-my-req" role="tabpanel" aria-labelledby="vdsreqs-pills-settings-tab">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <table class="table table-bordered table-hover">
                                                        <p>All my created <strong>Requests</strong></p>
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

                                                    <!-- end of SECOND column -->
                                                </div>

                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="vdsreqs-pills-all-pillar-request" role="tabpanel" aria-labelledby="vdsreqs-pills-settings-tab">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <table class="table table-bordered table-hover">
                                                        <p>All created <strong>Requests</strong> in the Pillar</p>
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

                                                    <!-- end of SECOND column -->
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="dsreq-nav-staff-requests" role="tabpanel" aria-labelledby="nav-profile-tab">
                            {{-- my ds requests --}}
                            <br />
                            <br />
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="nav flex-column nav-pills" id="vds-staff-reqs-pills-tab" role="tablist" aria-orientation="vertical">
                                        <a class="nav-link active" id="vds-staff-reqs-pills-need-review-tab" data-toggle="pill" href="#vds-staff-reqs-pills-need-review" role="tab" aria-controls="vds-staff-reqs-pills-need-review" aria-selected="true">Request need
                                            your review</a>
                                        <a class="nav-link" id="vds-staff-reqs-pills-staff-req-onreview-tab" data-toggle="pill" href="#vds-staff-reqs-pills-staff-req-onreview" role="tab" aria-controls="vds-staff-reqs-pills-home" aria-selected="true">Staff request on
                                            review</a>
                                        <a class="nav-link" id="vds-staff-reqs-pills-approved-reqs-tab" data-toggle="pill" href="#vds-staff-reqs-pills-approved-reqs-content" role="tab" aria-controls="vds-staff-reqs-pills-approved-reqs" aria-selected="false">Staff
                                            Approved requests</a>
                                        <a class="nav-link" id="vds-staff-reqs-pills-staff-retirements-tab" data-toggle="pill" href="#vds-staff-reqs-pills-staff-retirements" role="tab" aria-controls="vds-staff-reqs-pills-staff-retirements-content" aria-selected="false">Staff
                                            request retirements</a>
                                        <a class="nav-link" id="vds-staff-reqs-pills-all-req-request-tab" data-toggle="pill" href="#vds-staff-reqs-pills-all-req-request-content" role="tab" aria-controls="vds-staff-reqs-pills-all-req-request" aria-selected="false">All
                                            Staff request</a>
                                    </div>
                                </div>
                                <div class="col-md-10">

                                    <div class="tab-content" id="vds-staff-pills-tabContent">
                                        <div class="tab-pane fade show active" id="vds-staff-reqs-pills-need-review" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                            {{-- staff requests tab -reviewed--}}

                                            <br />
                                            <table class="table table-bordered table-hover">
                                                <p>Requests that need your <strong>Review</strong></p>
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
                                                        <td>2</td>
                                                        <td>2,300,000 <span class="badge badge-success">TZS</span></td>
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
                                                        <td>4</td>
                                                        <td>6,600,000 <span class="badge badge-success">TZS</span></td>
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
                                                        <td>1</td>
                                                        <td>8,700,000 <span class="badge badge-success">TZS</span></td>
                                                        <td>2019-09-11</td>
                                                        <td>
                                                            <button type="button" class="btn btn-outline-success">view
                                                                request</button>
                                                        </td>
                                                    </tr>
                                                </tbody>

                                            </table>
                                            <br />

                                        </div>

                                        <div class="tab-pane fade" id="vds-staff-reqs-pills-staff-req-onreview" role="tabpanel" aria-labelledby="vdsreqs-pills-profile-tab">

                                            <br />
                                            <table class="table table-bordered table-hover">
                                                <p>Staff requests <strong>On Review</strong></p>
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
                                                        <td>2</td>
                                                        <td>2,300,000 <span class="badge badge-success">TZS</span></td>
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
                                                        <td>4</td>
                                                        <td>6,600,000 <span class="badge badge-success">TZS</span></td>
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
                                                        <td>1</td>
                                                        <td>8,700,000 <span class="badge badge-success">TZS</span></td>
                                                        <td>2019-09-11</td>
                                                        <td>
                                                            <button type="button" class="btn btn-outline-success">view
                                                                request</button>
                                                        </td>
                                                    </tr>
                                                </tbody>

                                            </table>
                                            <br />
                                        </div>
                                        <div class="tab-pane fade" id="vds-staff-reqs-pills-approved-reqs-content" role="tabpanel" aria-labelledby="vdsreqs-pills-profile-tab">

                                            <br />
                                            <table class="table table-bordered table-hover">
                                                <p>Staff request Approved by Adminstration <strong></strong></p>
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
                                                        <td>2</td>
                                                        <td>2,300,000 <span class="badge badge-success">TZS</span></td>
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
                                                        <td>4</td>
                                                        <td>6,600,000 <span class="badge badge-success">TZS</span></td>
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
                                                        <td>1</td>
                                                        <td>8,700,000 <span class="badge badge-success">TZS</span></td>
                                                        <td>2019-09-11</td>
                                                        <td>
                                                            <button type="button" class="btn btn-outline-success">view
                                                                request</button>
                                                        </td>
                                                    </tr>
                                                </tbody>

                                            </table>
                                            <br />
                                        </div>
                                        <div class="tab-pane fade" id="vds-staff-reqs-pills-staff-retirements" role="tabpanel" aria-labelledby="vdsreqs-pills-messages-tab">

                                            <br />
                                            <table class="table table-bordered table-hover">
                                                <p>Staff Request <strong>Retirements</strong></p>
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
                                                        <td>2</td>
                                                        <td>2,300,000 <span class="badge badge-success">TZS</span></td>
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
                                                        <td>4</td>
                                                        <td>6,600,000 <span class="badge badge-success">TZS</span></td>
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
                                                        <td>1</td>
                                                        <td>8,700,000 <span class="badge badge-success">TZS</span></td>
                                                        <td>2019-09-11</td>
                                                        <td>
                                                            <button type="button" class="btn btn-outline-success">view
                                                                request</button>
                                                        </td>
                                                    </tr>
                                                </tbody>

                                            </table>
                                            <br />
                                        </div>
                                        <div class="tab-pane fade" id="vds-staff-reqs-pills-all-req-request-content" role="tabpanel" aria-labelledby="vdsreqs-pills-settings-tab">

                                            <br />
                                            <table class="table table-bordered table-hover">
                                                <p>All request from <strong>Staff</strong></p>
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
                                                        <td>2</td>
                                                        <td>2,300,000 <span class="badge badge-success">TZS</span></td>
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
                                                        <td>4</td>
                                                        <td>6,600,000 <span class="badge badge-success">TZS</span></td>
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
                                                        <td>1</td>
                                                        <td>8,700,000 <span class="badge badge-success">TZS</span></td>
                                                        <td>2019-09-11</td>
                                                        <td>
                                                            <button type="button" class="btn btn-outline-success">view
                                                                request</button>
                                                        </td>
                                                    </tr>
                                                </tbody>

                                            </table>
                                            <br />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="dsreq-nav-res-lm-requests" role="tabpanel" aria-labelledby="nav-contact-tab">
                            {{-- my ds requests --}}
                            <br />
                            <br />
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="nav flex-column nav-pills" id="vds-ed-reqs-pills-tab" role="tablist" aria-orientation="vertical">
                                        <a class="nav-link active" id="vds-ed-reqs-pills-home-tab" data-toggle="pill" href="#vds-ed-reqs-pills-home" role="tab" aria-controls="vds-ed-reqs-pills-home" aria-selected="true">Reviewed</a>
                                        <a class="nav-link" id="vds-ed-reqs-pills-profile-tab" data-toggle="pill" href="#vds-ed-reqs-pills-profile" role="tab" aria-controls="vds-ed-reqs-pills-profile" aria-selected="false">Approved</a>
                                        <a class="nav-link" id="vds-ed-reqs-pills-messages-tab" data-toggle="pill" href="#vds-ed-reqs-pills-messages" role="tab" aria-controls="vds-ed-reqs-pills-messages" aria-selected="false">Denied</a>
                                        <a class="nav-link" id="vds-ed-reqs-pills-settings-tab" data-toggle="pill" href="#vds-ed-reqs-pills-settings" role="tab" aria-controls="vds-ed-reqs-pills-settings" aria-selected="false">All</a>
                                    </div>
                                </div>
                                <div class="col-md-10">

                                    <div class="tab-content" id="vds-ed-pills-tabContent">
                                        <div class="tab-pane fade show active" id="vds-ed-reqs-pills-home" role="tabpanel" aria-labelledby="vds-ed-reqs-pills-home-tab">

                                            <br />
                                            <table class="table table-bordered table-hover">
                                                <p>My request on review by <strong>Line Manager</strong></p>
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
                                                        <td>2</td>
                                                        <td>2,300,000 <span class="badge badge-success">TZS</span></td>
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
                                                        <td>4</td>
                                                        <td>6,600,000 <span class="badge badge-success">TZS</span></td>
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
                                                        <td>1</td>
                                                        <td>8,700,000 <span class="badge badge-success">TZS</span></td>
                                                        <td>2019-09-11</td>
                                                        <td>
                                                            <button type="button" class="btn btn-outline-success">view
                                                                request</button>
                                                        </td>
                                                    </tr>
                                                </tbody>

                                            </table>
                                            <br />
                                        </div>
                                        <div class="tab-pane fade" id="vds-ed-reqs-pills-profile" role="tabpanel" aria-labelledby="vdsreqs-pills-profile-tab">

                                            <br />
                                            <table class="table table-bordered table-hover">
                                                <p>My Approved request by <strong>Line Manager</strong></p>
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
                                                        <td>2</td>
                                                        <td>2,300,000 <span class="badge badge-success">TZS</span></td>
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
                                                        <td>4</td>
                                                        <td>6,600,000 <span class="badge badge-success">TZS</span></td>
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
                                                        <td>1</td>
                                                        <td>8,700,000 <span class="badge badge-success">TZS</span></td>
                                                        <td>2019-09-11</td>
                                                        <td>
                                                            <button type="button" class="btn btn-outline-success">view
                                                                request</button>
                                                        </td>
                                                    </tr>
                                                </tbody>

                                            </table>
                                            <br />
                                        </div>
                                        <div class="tab-pane fade" id="vds-ed-reqs-pills-messages" role="tabpanel" aria-labelledby="vdsreqs-pills-messages-tab">

                                            <br />
                                            <table class="table table-bordered table-hover">
                                                <p> <strong>Denied</strong> requests</p>
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
                                                        <td>2</td>
                                                        <td>2,300,000 <span class="badge badge-success">TZS</span></td>
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
                                                        <td>4</td>
                                                        <td>6,600,000 <span class="badge badge-success">TZS</span></td>
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
                                                        <td>1</td>
                                                        <td>8,700,000 <span class="badge badge-success">TZS</span></td>
                                                        <td>2019-09-11</td>
                                                        <td>
                                                            <button type="button" class="btn btn-outline-success">view
                                                                request</button>
                                                        </td>
                                                    </tr>
                                                </tbody>

                                            </table>
                                            <br />
                                        </div>
                                        <div class="tab-pane fade" id="vds-ed-reqs-pills-settings" role="tabpanel" aria-labelledby="vdsreqs-pills-settings-tab">

                                            <br />
                                            <table class="table table-bordered table-hover">
                                                <p>All my request at <strong>Line Manager</strong> level</p>
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
                                                        <td>2</td>
                                                        <td>2,300,000 <span class="badge badge-success">TZS</span></td>
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
                                                        <td>4</td>
                                                        <td>6,600,000 <span class="badge badge-success">TZS</span></td>
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
                                                        <td>1</td>
                                                        <td>8,700,000 <span class="badge badge-success">TZS</span></td>
                                                        <td>2019-09-11</td>
                                                        <td>
                                                            <button type="button" class="btn btn-outline-success">view
                                                                request</button>
                                                        </td>
                                                    </tr>
                                                </tbody>

                                            </table>
                                            <br />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- start of financial reports data panel -->
        <div class="tab-pane fade" id="retirements-md" role="tabpanel" aria-labelledby="retirements-tab-md">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#newFinancialReport">
                create a new Retirement report
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
            <div class="row">
                <div class="col-lg-12">

                    <nav>
                        <div class="nav nav-tabs" id="ds-rtrmt-nav-nav-tab" role="tablist">
                            <a class="nav-item nav-link active" id="ds-my-rtrmt-tab" data-toggle="tab" href="#ds-my-rtrmt-content" role="tab" aria-controls="nav-ds-my-rtrmt-content" aria-selected="true">My
                                Retirements</a>
                            <a class="nav-item nav-link" id="ds-my-rtrmt-tab" data-toggle="tab" href="#ds-staff-rtrmt-content" role="tab" aria-controls="nav-profile" aria-selected="false">Staff Retirements</a>
                            <a class="nav-item nav-link" id="ds-lm-rtrmt-reponse-tab" data-toggle="tab" href="#ds-lm-rtrmt-reponse-content" role="tab" aria-controls="nav-contact" aria-selected="false">Response from Line Manager</a>
                        </div>
                    </nav>
                    <div class="tab-content" id="ds-rtrmt-nav-tabContent">
                        <div class="tab-pane fade show active" id="ds-my-rtrmt-content" role="tabpanel" aria-labelledby="nav-home-tab">
                            <br />
                            <br />
                            {{-- my ds requests --}}
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="nav flex-column nav-pills" id="vds-ds-rtrmt-pills-tab" role="tablist" aria-orientation="vertical">
                                        <a class="nav-link active" id="vds-ds-rtrmt-pills-on-review-tab" data-toggle="pill" href="#vds-ds-rtrmt-pills-on-review" role="tab" aria-controls="vdsreqs-pills-on-review" aria-selected="true">On review</a>

                                        <a class="nav-link" id="vds-ds-rtrmt-pills-approved-tab" data-toggle="pill" href="#vds-ds-rtrmt-pills-approved" role="tab" aria-controls="vdsreqs-pills-approved" aria-selected="false">Approved</a>

                                        <a class="nav-link" id="vds-ds-rtrmt-pills-denied-tab" data-toggle="pill" href="#vds-ds-rtrmt-pills-denied" role="tab" aria-controls="vdsreqs-pills-denied" aria-selected="false">Denied</a>

                                        <a class="nav-link" id="vds-ds-all-my-rtrmt-pills-tab" data-toggle="pill" href="#vds-ds-all-my-rtrmt-pills" role="tab" aria-controls="vdsreqs-all-my-pills-messages" aria-selected="false">All my
                                            retirements</a>

                                        <a class="nav-link" id="vds-ds-all-my-rtrmt-pills-settings-tab" data-toggle="pill" href="#vds-ds-all-pillar-rtrmt-pills" role="tab" aria-controls="vdsreqs-pills-settings" aria-selected="false">All pillar
                                            retirements</a>
                                    </div>
                                </div>
                                <div class="col-md-10">

                                    <div class="tab-content" id="vds-ds-rtrmt-pills-tabContent">
                                        <div class="tab-pane fade show active" id="vds-ds-rtrmt-pills-on-review" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                            {{-- my retirements --}}
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="card">
                                                        <div class="card-content table-responsive">
                                                            <br />
                                                            <table class="table table-bordered table-hover">
                                                                <p>My Retirements that are on
                                                                    <strong>review.</strong>
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
                                        <div class="tab-pane fade" id="vds-ds-rtrmt-pills-approved" role="tabpanel" aria-labelledby="vdsreqs-pills-profile-tab">
                                            {{-- my approved retirements --}}
                                            {{-- my retirements --}}
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="card">
                                                        <div class="card-content table-responsive">
                                                            <br />
                                                            <table class="table table-bordered table-hover">
                                                                <p>My retirements that have been
                                                                    <strong>approved.</strong>
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
                                        <div class="tab-pane fade" id="vds-ds-rtrmt-pills-denied" role="tabpanel" aria-labelledby="vdsreqs-pills-messages-tab">
                                            {{-- my denied retirements  --}}
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="card">
                                                        <div class="card-content table-responsive">
                                                            <br />
                                                            <table class="table table-bordered table-hover">
                                                                <p>My retirements that have been
                                                                    <strong>denied.</strong>
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
                                                                            <button type="button" class="btn btn-outline-danger">view
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
                                                                            <button type="button" class="btn btn-outline-danger">view
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
                                        <div class="tab-pane fade" id="vds-ds-all-my-rtrmt-pills" role="tabpanel" aria-labelledby="vdsreqs-pills-settings-tab">
                                            {{-- all my retirments --}}
                                            {{-- my retirements --}}
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="card">
                                                        <div class="card-content table-responsive">
                                                            <br />
                                                            <table class="table table-bordered table-hover">
                                                                <p>All My retirements. </p>
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
                                        <div class="tab-pane fade" id="vds-ds-all-pillar-rtrmt-pills" role="tabpanel" aria-labelledby="vdsreqs-pills-settings-tab">
                                            {{-- all my retirments --}}
                                            {{-- my retirements --}}
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="card">
                                                        <div class="card-content table-responsive">
                                                            <br />
                                                            <table class="table table-bordered table-hover">
                                                                <p>All pillar retirements. </p>
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
                                                                        <td><button type="button" class="btn btn-outline-success">view request
                                                                            </button>
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
                        <div class="tab-pane fade" id="ds-staff-rtrmt-content" role="tabpanel" aria-labelledby="nav-profile-tab">
                            <br />
                            <br />
                            {{-- my ds requests --}}
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="nav flex-column nav-pills" id="vds-ds-rtrmt-staff-pills-tab" role="tablist" aria-orientation="vertical">
                                        <a class="nav-link active" id="vds-ds-rtrmt-staff-pills-ryr-tab" data-toggle="pill" href="#vds-ds-rtrmt-staff-pills-ryr" role="tab" aria-controls="vds-staff-reqs-pills-ryr" aria-selected="true">Require your
                                            Review</a>

                                        <a class="nav-link" id="vds-ds-rtrmt-staff-pills-oadr-tab" data-toggle="pill" href="#vds-ds-rtrmt-staff-pills-oadr" role="tab" aria-controls="vds-staff-reqs-pills-oadr" aria-selected="false">On
                                            Administrative Review</a>

                                        <a class="nav-link" id="vds-ds-rtrmt-staff-pills-aba-tab" data-toggle="pill" href="#vds-ds-rtrmt-staff-pills-aba" role="tab" aria-controls="vds-staff-reqs-pills-aba" aria-selected="false">Approved
                                            by Administration</a>

                                        <a class="nav-link" id="vds-ds-rtrmt-staff-pills-denied-tab" data-toggle="pill" href="#vds-ds-rtrmt-staff-pills-denied" role="tab" aria-controls="vds-staff-reqs-pills-denied" aria-selected="false">Denied</a>

                                        <a class="nav-link" id="vds-ds-rtrmt-staff-pills-all-staff-rtmtr-tab" data-toggle="pill" href="#vds-ds-rtrmt-staff-pills-all-staff-rtmtr" role="tab" aria-controls="vds-staff-reqs-pills-all-staff-rtmtr" aria-selected="false">All
                                            Retirements</a>
                                    </div>
                                </div>
                                <div class="col-md-10">

                                    <div class="tab-content" id="vds-ds-rtrmt-staff-tabContent">
                                        <div class="tab-pane fade show active" id="vds-ds-rtrmt-staff-pills-ryr" role="tabpanel" aria-labelledby="vds-ds-rtrmt-staff-pills-home-tab">
                                            {{-- my retirements --}}
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="card">
                                                        <div class="card-content table-responsive">
                                                            <br />
                                                            <table class="table table-bordered table-hover">
                                                                <p>My retirements that require your
                                                                    <strong>review.</strong>
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
                                        <div class="tab-pane fade" id="vds-ds-rtrmt-staff-pills-oadr" role="tabpanel" aria-labelledby="vds-ds-rtrmt-staff-pills-profile-tab">
                                            {{-- my retirements --}}
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="card">
                                                        <div class="card-content table-responsive">
                                                            <br />
                                                            <table class="table table-bordered table-hover">
                                                                <p>Staff retirements that on administration
                                                                    <strong>review.</strong>

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
                                        <div class="tab-pane fade" id="vds-ds-rtrmt-staff-pills-aba" role="tabpanel" aria-labelledby="vds-ds-rtrmt-staff-pills-aba-tab">

                                            {{-- my retirements --}}
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="card">
                                                        <div class="card-content table-responsive">
                                                            <br />
                                                            <table class="table table-bordered table-hover">
                                                                <p>Staff retirements that have been
                                                                    <strong>approved by Administration.</strong>
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
                                        <div class="tab-pane fade" id="vds-ds-rtrmt-staff-pills-denied" role="tabpanel" aria-labelledby="vds-ds-rtrmt-staff-pills-settings-tab">
                                            {{-- my retirements --}}
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="card">
                                                        <div class="card-content table-responsive">
                                                            <br />
                                                            <table class="table table-bordered table-hover">
                                                                <p>Staff retirements that have been
                                                                    <strong>denied.</strong>
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

                                        <div class="tab-pane fade" id="vds-ds-rtrmt-staff-pills-all-staff-rtmtr" role="tabpanel" aria-labelledby="vds-ds-rtrmt-staff-pills-settings-tab">
                                            {{-- my retirements --}}
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="card">
                                                        <div class="card-content table-responsive">
                                                            <br />
                                                            <table class="table table-bordered table-hover">
                                                                <p>All retirements that have been created by
                                                                    <strong>Staff.</strong>
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
                        <div class="tab-pane fade" id="ds-lm-rtrmt-reponse-content" role="tabpanel" aria-labelledby="nav-contact-tab">
                            <br />
                            <br />
                            {{-- my ds requests --}}
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="nav flex-column nav-pills" id="vds-ds-rtrmt-ed-pills-tab" role="tablist" aria-orientation="vertical">
                                        <a class="nav-link active" id="vds-ds-rtrmt-ed-pills-reviewed-tab" data-toggle="pill" href="#vds-ds-rtrmt-ed-pills-reviewed" role="tab" aria-controls="vds-ed-reqs-pills-reviewed" aria-selected="true">Reviewed</a>

                                        <a class="nav-link" id="vds-ds-rtrmt-ed-pills-approved-tab" data-toggle="pill" href="#vds-ds-rtrmt-ed-pills-approved" role="tab" aria-controls="vds-ed-reqs-pills-approved" aria-selected="false">Approved</a>

                                        <a class="nav-link" id="vds-ds-rtrmt-ed-pills-all-tab" data-toggle="pill" href="#vds-ds-rtrmt-ed-pills-all" role="tab" aria-controls="vds-ed-reqs-pills-all" aria-selected="false">All</a>
                                    </div>
                                </div>
                                <div class="col-md-10">

                                    <div class="tab-content" id="vds-ds-rtrmt-ed-pills-tabContent">
                                        <div class="tab-pane fade show active" id="vds-ds-rtrmt-ed-pills-reviewed" role="tabpanel" aria-labelledby="vds-ed-reqs-pills-home-tab">


                                            {{-- my retirements --}}
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="card">
                                                        <div class="card-content table-responsive">
                                                            <br />
                                                            <table class="table table-bordered table-hover">
                                                                <p>My retirements that have been
                                                                    <strong>reviewed.</strong>
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
                                        <div class="tab-pane fade" id="vds-ds-rtrmt-ed-pills-approved" role="tabpanel" aria-labelledby="vdsreqs-pills-profile-tab">


                                            {{-- my retirements --}}
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="card">
                                                        <div class="card-content table-responsive">
                                                            <br />
                                                            <table class="table table-bordered table-hover">
                                                                <p>My retirements that have been
                                                                    <strong>Approved</strong> by Line Manager
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
                                        <div class="tab-pane fade" id="vds-ds-rtrmt-ed-pills-all" role="tabpanel" aria-labelledby="vdsreqs-pills-settings-tab">

                                            {{-- my retirements --}}
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="card">
                                                        <div class="card-content table-responsive">
                                                            <br />
                                                            <table class="table table-bordered table-hover">
                                                                <p>All My retirements that have been
                                                                    <strong>reviewed.</strong>
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
                    </div>
                </div>
            </div>
        </div>



        <!-- start of download-forms data panel -->
        <div class="tab-pane fade" id="download-forms-md" role="tabpanel" aria-labelledby="download-forms-tab-md">
            {{-- my ds requests --}}
            <div class="row">
                <div class="col-md-2">
                    <div class="nav flex-column nav-pills" id="vds-ds-pna-ed-pills-tab" role="tablist" aria-orientation="vertical">
                        <a class="nav-link active" id="vds-ds-pna-ed-pills-home-tab" data-toggle="pill" href="#vds-ds-pna-ed-pills-home" role="tab" aria-controls="vds-ed-reqs-pills-home" aria-selected="true">Administration Forms</a>
                        <a class="nav-link" id="vds-ds-pna-ed-pills-profile-tab" data-toggle="pill" href="#vds-ds-pna-ed-pills-profile" role="tab" aria-controls="vds-ed-reqs-pills-profile" aria-selected="false">Finance Forms</a>
                        <a class="nav-link" id="vds-ds-pna-ed-pills-messages-tab" data-toggle="pill" href="#vds-ds-pna-ed-pills-messages" role="tab" aria-controls="vds-ed-reqs-pills-messages" aria-selected="false">Personal official forms</a>
                        <a class="nav-link" id="vds-ds-pna-ed-pills-settings-tab" data-toggle="pill" href="#vds-ds-pna-ed-pills-settings" role="tab" aria-controls="vds-ed-reqs-pills-settings" aria-selected="false">All</a>
                    </div>
                </div>
                <div class="col-md-10">
                    <div class="tab-content" id="vds-ds-pna-ed-pills-tabContent">
                        <div class="tab-pane fade show active" id="vds-ds-pna-ed-pills-home" role="tabpanel" aria-labelledby="vds-ed-reqs-pills-home-tab">
                            <h4>Administration Forms</h4>
                            <br />


                            <div class="row">
                                <div class="col-md-4">
                                    <div class="card" style="width: 20rem;">
                                        <div class="card-body">
                                            <h5 class="card-title">Travel allowance form</h5>
                                            <h6 class="card-subtitle mb-2 text-muted">Finance Category</h6>
                                            <p class="card-text">Some quick example text to build on the card title and
                                                make up the bulk
                                                of the card's content.</p>
                                            <a href="#" class="card-link">Preview Form</a>
                                            <a href="#" class="btn btn-primary">Download Form</a>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-4">
                                    <div class="card" style="width: 20rem;">
                                        <div class="card-body">
                                            <h5 class="card-title">Transport allowance form</h5>
                                            <h6 class="card-subtitle mb-2 text-muted">Finance Category</h6>
                                            <p class="card-text">Some quick example text to build on the card title and
                                                make up the bulk
                                                of the card's content.</p>
                                            <a href="#" class="card-link">Preview Form</a>
                                            <a href="#" class="btn btn-primary">Download Form</a>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-4">
                                    <div class="card" style="width: 20rem;">
                                        <div class="card-body">
                                            <h5 class="card-title">Per diem form</h5>
                                            <h6 class="card-subtitle mb-2 text-muted">Finance Category</h6>
                                            <p class="card-text">Some quick example text to build on the card title and
                                                make up the bulk
                                                of the card's content.</p>
                                            <a href="#" class="card-link">Preview Form</a>
                                            <a href="#" class="btn btn-primary">Download Form</a>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-4">
                                    <div class="card" style="width: 20rem;">
                                        <div class="card-body">
                                            <h5 class="card-title">Imprest request form</h5>
                                            <h6 class="card-subtitle mb-2 text-muted">Finance Category</h6>
                                            <p class="card-text">Some quick example text to build on the card title and
                                                make up the bulk
                                                of the card's content.</p>
                                            <a href="#" class="card-link">Preview Form</a>
                                            <a href="#" class="btn btn-primary">Download Form</a>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-4">
                                    <div class="card" style="width: 20rem;">
                                        <div class="card-body">
                                            <h5 class="card-title"> Daily attendance form</h5>
                                            <h6 class="card-subtitle mb-2 text-muted">Finance Category</h6>
                                            <p class="card-text">Some quick example text to build on the card title and
                                                make up the bulk
                                                of the card's content.</p>
                                            <a href="#" class="card-link">Preview Form</a>
                                            <a href="#" class="btn btn-primary">Download Form</a>
                                        </div>
                                    </div>

                                </div>

                                <div class="col-md-4">
                                    <div class="card" style="width: 20rem;">
                                        <div class="card-body">
                                            <h5 class="card-title"> First time attendance form</h5>
                                            <h6 class="card-subtitle mb-2 text-muted">Finance Category</h6>
                                            <p class="card-text">Some quick example text to build on the card title and
                                                make up the bulk
                                                of the card's content.</p>
                                            <a href="#" class="card-link">Preview Form</a>
                                            <a href="#" class="btn btn-primary">Download Form</a>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                        <div class="tab-pane fade" id="vds-ds-pna-ed-pills-profile" role="tabpanel" aria-labelledby="vdsreqs-pills-profile-tab">
                            <h4> Accounting and Finance forms</h4>
                            <br />

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="card" style="width: 20rem;">
                                        <div class="card-body">
                                            <h5 class="card-title">Travel allowance form</h5>
                                            <h6 class="card-subtitle mb-2 text-muted">Finance Category</h6>
                                            <p class="card-text">Some quick example text to build on the card title and
                                                make up the bulk
                                                of the card's content.</p>
                                            <a href="#" class="card-link">Preview Form</a>
                                            <a href="#" class="btn btn-primary">Download Form</a>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-4">
                                    <div class="card" style="width: 20rem;">
                                        <div class="card-body">
                                            <h5 class="card-title">Transport allowance form</h5>
                                            <h6 class="card-subtitle mb-2 text-muted">Finance Category</h6>
                                            <p class="card-text">Some quick example text to build on the card title and
                                                make up the bulk
                                                of the card's content.</p>
                                            <a href="#" class="card-link">Preview Form</a>
                                            <a href="#" class="btn btn-primary">Download Form</a>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-4">
                                    <div class="card" style="width: 20rem;">
                                        <div class="card-body">
                                            <h5 class="card-title">Per diem form</h5>
                                            <h6 class="card-subtitle mb-2 text-muted">Finance Category</h6>
                                            <p class="card-text">Some quick example text to build on the card title and
                                                make up the bulk
                                                of the card's content.</p>
                                            <a href="#" class="card-link">Preview Form</a>
                                            <a href="#" class="btn btn-primary">Download Form</a>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-4">
                                    <div class="card" style="width: 20rem;">
                                        <div class="card-body">
                                            <h5 class="card-title">Imprest request form</h5>
                                            <h6 class="card-subtitle mb-2 text-muted">Finance Category</h6>
                                            <p class="card-text">Some quick example text to build on the card title and
                                                make up the bulk
                                                of the card's content.</p>
                                            <a href="#" class="card-link">Preview Form</a>
                                            <a href="#" class="btn btn-primary">Download Form</a>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-4">
                                    <div class="card" style="width: 20rem;">
                                        <div class="card-body">
                                            <h5 class="card-title"> Daily attendance form</h5>
                                            <h6 class="card-subtitle mb-2 text-muted">Finance Category</h6>
                                            <p class="card-text">Some quick example text to build on the card title and
                                                make up the bulk
                                                of the card's content.</p>
                                            <a href="#" class="card-link">Preview Form</a>
                                            <a href="#" class="btn btn-primary">Download Form</a>
                                        </div>
                                    </div>

                                </div>

                                <div class="col-md-4">
                                    <div class="card" style="width: 20rem;">
                                        <div class="card-body">
                                            <h5 class="card-title"> First time attendance form</h5>
                                            <h6 class="card-subtitle mb-2 text-muted">Finance Category</h6>
                                            <p class="card-text">Some quick example text to build on the card title and
                                                make up the bulk
                                                of the card's content.</p>
                                            <a href="#" class="card-link">Preview Form</a>
                                            <a href="#" class="btn btn-primary">Download Form</a>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                        <div class="tab-pane fade" id="vds-ds-pna-ed-pills-messages" role="tabpanel" aria-labelledby="vdsreqs-pills-messages-tab">
                            <h4> Personal Official forms</h4>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="card" style="width: 20rem;">
                                        <div class="card-body">
                                            <h5 class="card-title">Travel allowance form</h5>
                                            <h6 class="card-subtitle mb-2 text-muted">Finance Category</h6>
                                            <p class="card-text">Some quick example text to build on the card title and
                                                make up the bulk
                                                of the card's content.</p>
                                            <a href="#" class="card-link">Preview Form</a>
                                            <a href="#" class="btn btn-primary">Download Form</a>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-4">
                                    <div class="card" style="width: 20rem;">
                                        <div class="card-body">
                                            <h5 class="card-title">Transport allowance form</h5>
                                            <h6 class="card-subtitle mb-2 text-muted">Finance Category</h6>
                                            <p class="card-text">Some quick example text to build on the card title and
                                                make up the bulk
                                                of the card's content.</p>
                                            <a href="#" class="card-link">Preview Form</a>
                                            <a href="#" class="btn btn-primary">Download Form</a>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-4">
                                    <div class="card" style="width: 20rem;">
                                        <div class="card-body">
                                            <h5 class="card-title">Per diem form</h5>
                                            <h6 class="card-subtitle mb-2 text-muted">Finance Category</h6>
                                            <p class="card-text">Some quick example text to build on the card title and
                                                make up the bulk
                                                of the card's content.</p>
                                            <a href="#" class="card-link">Preview Form</a>
                                            <a href="#" class="btn btn-primary">Download Form</a>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-4">
                                    <div class="card" style="width: 20rem;">
                                        <div class="card-body">
                                            <h5 class="card-title">Imprest request form</h5>
                                            <h6 class="card-subtitle mb-2 text-muted">Finance Category</h6>
                                            <p class="card-text">Some quick example text to build on the card title and
                                                make up the bulk
                                                of the card's content.</p>
                                            <a href="#" class="card-link">Preview Form</a>
                                            <a href="#" class="btn btn-primary">Download Form</a>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-4">
                                    <div class="card" style="width: 20rem;">
                                        <div class="card-body">
                                            <h5 class="card-title"> Daily attendance form</h5>
                                            <h6 class="card-subtitle mb-2 text-muted">Finance Category</h6>
                                            <p class="card-text">Some quick example text to build on the card title and
                                                make up the bulk
                                                of the card's content.</p>
                                            <a href="#" class="card-link">Preview Form</a>
                                            <a href="#" class="btn btn-primary">Download Form</a>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-4">
                                    <div class="card" style="width: 20rem;">
                                        <div class="card-body">
                                            <h5 class="card-title"> First time attendance form</h5>
                                            <h6 class="card-subtitle mb-2 text-muted">Finance Category</h6>
                                            <p class="card-text">Some quick example text to build on the card title and
                                                make up the bulk
                                                of the card's content.</p>
                                            <a href="#" class="card-link">Preview Form</a>
                                            <a href="#" class="btn btn-primary">Download Form</a>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                        <div class="tab-pane fade" id="vds-ds-pna-ed-pills-settings" role="tabpanel" aria-labelledby="vdsreqs-pills-settings-tab">
                            <h4> All official forms</h4>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="card" style="width: 20rem;">
                                        <div class="card-body">
                                            <h5 class="card-title">Travel allowance form</h5>
                                            <h6 class="card-subtitle mb-2 text-muted">Finance Category</h6>
                                            <p class="card-text">Some quick example text to build on the card title and
                                                make up the bulk
                                                of the card's content.</p>
                                            <a href="#" class="card-link">Preview Form</a>
                                            <a href="#" class="btn btn-primary">Download Form</a>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-4">
                                    <div class="card" style="width: 20rem;">
                                        <div class="card-body">
                                            <h5 class="card-title">Transport allowance form</h5>
                                            <h6 class="card-subtitle mb-2 text-muted">Finance Category</h6>
                                            <p class="card-text">Some quick example text to build on the card title and
                                                make up the bulk
                                                of the card's content.</p>
                                            <a href="#" class="card-link">Preview Form</a>
                                            <a href="#" class="btn btn-primary">Download Form</a>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-4">
                                    <div class="card" style="width: 20rem;">
                                        <div class="card-body">
                                            <h5 class="card-title">Per diem form</h5>
                                            <h6 class="card-subtitle mb-2 text-muted">Finance Category</h6>
                                            <p class="card-text">Some quick example text to build on the card title and
                                                make up the bulk
                                                of the card's content.</p>
                                            <a href="#" class="card-link">Preview Form</a>
                                            <a href="#" class="btn btn-primary">Download Form</a>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-4">
                                    <div class="card" style="width: 20rem;">
                                        <div class="card-body">
                                            <h5 class="card-title">Imprest request form</h5>
                                            <h6 class="card-subtitle mb-2 text-muted">Finance Category</h6>
                                            <p class="card-text">Some quick example text to build on the card title and
                                                make up the bulk
                                                of the card's content.</p>
                                            <a href="#" class="card-link">Preview Form</a>
                                            <a href="#" class="btn btn-primary">Download Form</a>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-4">
                                    <div class="card" style="width: 20rem;">
                                        <div class="card-body">
                                            <h5 class="card-title"> Daily attendance form</h5>
                                            <h6 class="card-subtitle mb-2 text-muted">Finance Category</h6>
                                            <p class="card-text">Some quick example text to build on the card title and
                                                make up the bulk
                                                of the card's content.</p>
                                            <a href="#" class="card-link">Preview Form</a>
                                            <a href="#" class="btn btn-primary">Download Form</a>
                                        </div>
                                    </div>

                                </div>

                                <div class="col-md-4">
                                    <div class="card" style="width: 20rem;">
                                        <div class="card-body">
                                            <h5 class="card-title"> First time attendance form</h5>
                                            <h6 class="card-subtitle mb-2 text-muted">Finance Category</h6>
                                            <p class="card-text">Some quick example text to build on the card title and
                                                make up the bulk
                                                of the card's content.</p>
                                            <a href="#" class="card-link">Preview Form</a>
                                            <a href="#" class="btn btn-primary">Download Form</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade " id="vds-ds-pna-pills-proj" role="tabpanel" aria-labelledby="impr-pills-proj-tab">
            {{-- Projects --}}

            <div class="row">
                <div class="col-lg-12">
                    <nav>
                        <div class="nav nav-tabs" id="ds-pna-proj-nav-tab" role="tablist">
                            <a class="nav-item nav-link active" id="ds-nav-pna-my-proj-tab" data-toggle="tab" href="#ds-pna-my-proj-content" onclick="cplt(event,'#vds-ds-project-ed-pills-reviewed-content')" role="tab" aria-controls="nav-my-proj" aria-selected="false">My
                                Projects</a>
                            <a class="nav-item nav-link" id="ds-nav-pna-staff-proj-tab" data-toggle="tab" href="#ds-pna-staff-proj-content" role="tab" aria-controls="nav-staff-proj-content" aria-selected="false">Staff Projects</a>
                            <a class="nav-item nav-link" id="ds-pna-lm-response-tab" data-toggle="tab" href="#ds-pna-lm-response-content" role="tab" aria-controls="nav-lm-response" aria-selected="false">Response from Line Manager</a>
                        </div>
                    </nav>
                    <div class="tab-content" id="ds-impr-nav-tabContent">

                        <div class="tab-pane fade show active" id="ds-pna-my-proj-content" role="tabpanel" aria-labelledby="nav-ds-pna-my-proj-content-tab">

                            <br />
                            {{-- my ds requests --}}
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="nav flex-column nav-pills" id="vds-ds-project-ed-pills-tab" role="tablist" aria-orientation="vertical">
                                        <a class="nav-link active" id="vds-ds-project-ed-pills-reviewed-tab" data-toggle="pill" href="#vds-ds-project-ed-pills-reviewed-content" role="tab" aria-controls="vds-ed-reqs-pills-reviewed" aria-selected="true">On Review</a>

                                        <a class="nav-link" id="vds-ds-project-ed-pills-approved-tab" data-toggle="pill" href="#vds-ds-project-ed-pills-approved-content" role="tab" aria-controls="vds-ed-reqs-pills-approved" aria-selected="false">Approved</a>

                                        <a class="nav-link" id="vds-ds-project-ed-pills-denied-tab" data-toggle="pill" href="#vds-ds-project-ed-pills-denied-content" role="tab" aria-controls="vds-ed-reqs-pills-denied" aria-selected="false">Denied</a>

                                        <a class="nav-link" id="vds-ds-project-ed-pills-all-tab" data-toggle="pill" href="#vds-ds-project-ed-pills-all-content" role="tab" aria-controls="vds-ed-reqs-pills-all" aria-selected="false">All</a>
                                    </div>
                                </div>
                                <div class="col-md-10">

                                    <div class="tab-content" id="vds-ds-project-ed-pills-tabContent">

                                        <div class="tab-pane fade show active" id="vds-ds-project-ed-pills-reviewed-content" role="tabpanel" aria-labelledby="vds-ed-reqs-pills-home-tab">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="card">
                                                        <div class="card-content table-responsive">
                                                            <br />
                                                            <table class="table table-bordered table-hover">
                                                                <p class="d-flex justify-content-between">
                                                                    <strong>My projects on review</strong>
                                                                    <a class="btn btn-outline-info btn-lg mr-1" href="{{ route('ds-create-new-project') }}" role="button"> create a new project</a>
                                                                </p>
                                                                <thead>
                                                                    <tr>
                                                                        <th scope="col">#</th>
                                                                        <th scope="col">project title</th>
                                                                        <th scope="col-md-4">Total Estimated cost</th>
                                                                        <th scope="col">current stage</th>
                                                                        <th scope="col">status</th>
                                                                        <th scope="col">Date created</th>
                                                                        <th scope="col"></th>

                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    @foreach($myprojects as $myproject)
                                                                    <tr>
                                                                        <th scope="row">{{ $myproject->project_id }}</th>
                                                                        <td class="w-30 p-2">{{ $myproject->project_title }}</td>
                                                                        <td class="w-30 p-2">{{ $myproject->total_project_cost }}</td>
                                                                        <td class="w-30 p-2">{{ $myproject->current_stage }}</td>
                                                                        <td class="w-30 p-2">{{ $myproject->review_status }}</td>
                                                                        <td class="w-10 p-2">{{ $myproject->created_at }}</td>
                                                                        <td class="w-30 p-2">
                                                                            <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#ds-act-actions"> Actions
                                                                            </button>
                                                                            <!-- Modal -->
                                                                            <div class="modal fade" id="ds-act-actions" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" data-proj="{{ $myproject->project_id }}" data-user="{{ Auth::user()->user_id }}">
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
                                                                                                    <a href="{{ route('ds-create-new-activity', $myproject->project_id) }}" class="btn  btn-outline-secondary d-flex justify-content-between">
                                                                                                        <i class="fas fa-chalkboard fa-lg mt-auto mb-auto"></i>
                                                                                                        <p class="m-auto"> New Activity</p>
                                                                                                    </a>
                                                                                                </li>
                                                                                                <li class="list-group-item">
                                                                                                    <a href="{{ route('pillar-project.show',   $myproject->project_id)}}" class="btn btn-outline-success d-flex justify-content-between" data-bs-toggle="tooltip" data-bs-placement="top" title="view project full details">
                                                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                                                                                            <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                                                                                                            <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                                                                                                        </svg>
                                                                                                        <p class="m-auto">Activity Details</p>
                                                                                                    </a>

                                                                                                </li>
                                                                                                <li class="list-group-item">
                                                                                                    <a href="{{ route('edit-project', $myproject->project_id)}}" class="btn btn-outline-info btn-md d-flex justify-content-between" data-bs-toggle="tooltip" data-bs-placement="top" title="view update project details">
                                                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-arrow-up-circle" viewBox="0 0 16 16">
                                                                                                            <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-7.5 3.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V11.5z" />
                                                                                                        </svg>
                                                                                                        <p class="m-auto">Edit Activity </p>
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
                                        <div class="tab-pane fade" id="vds-ds-act-ed-pills-approved-content" role="tabpanel" aria-labelledby="vdsreqs-pills-approved-tab">


                                            {{-- my retirements --}}
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="card">
                                                        <div class="card-content table-responsive">
                                                            <br />
                                                            <table class="table table-bordered table-hover">
                                                                <p>My Activities that have been <strong>Approved by the Adminstration</strong></p>

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
                                                                    @foreach($myactivities as $acts)
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
                                        <div class="tab-pane fade" id="vds-ds-act-ed-pills-denied-content" role="tabpanel" aria-labelledby="vdsreqs-pills-messages-tab">

                                            {{-- my retirements --}}
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="card">
                                                        <div class="card-content table-responsive">
                                                            <br />
                                                            <table class="table table-bordered table-hover">
                                                                <p>My Activities that have been <strong>Denied</strong></p>

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
                                        <div class="tab-pane fade" id="vds-ds-act-ed-pills-all-content" role="tabpanel" aria-labelledby="vdsreqs-pills-settings-tab">
                                            {{-- my retirements --}}
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="card">
                                                        <div class="card-content table-responsive">
                                                            <br />
                                                            <table class="table table-bordered table-hover">
                                                                <p>All My <strong>Activities</strong></p>

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


                                        <div class="tab-pane fade" id="vds-ds-project-ed-pills-approved-content" role="tabpanel" aria-labelledby="vdsreqs-pills-approved-tab">


                                            {{-- my approved projects --}}
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="card">
                                                        <div class="card-content table-responsive">
                                                            <br />

                                                            <table class="table table-bordered table-hover">
                                                                <p><strong>My Approved Projects</strong></p>
                                                                <thead>
                                                                    <tr>
                                                                        <th scope="col">#</th>
                                                                        <th scope="col">project title</th>
                                                                        <th scope="col-md-4">Total Estimated cost</th>
                                                                        <th scope="col">current stage</th>
                                                                        <th scope="col">status</th>
                                                                        <th scope="col">Date created</th>
                                                                        <th scope="col"></th>
                                                                        <th scope="col"></th>
                                                                        <th scope="col"></th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>

                                                                    @foreach($myapprovedprojects as $myapprovedproject)
                                                                    <tr>
                                                                        <th scope="row">{{ $myapprovedproject->project_id }}</th>
                                                                        <td class="w-30 p-2">{{ $myapprovedproject->project_title }}</td>
                                                                        <td class="w-30 p-2">{{ $myapprovedproject->total_project_cost }}</td>
                                                                        <td class="w-30 h-30 p-4">{{ $myapprovedproject->current_stage }}</td>
                                                                        <td class="w-30 h-30 p-4">{{ $myapprovedproject->review_status }}</td>
                                                                        <td class="w-10 p-2">{{ $myapprovedproject->created_at }}</td>

                                                                        <td class="w-10 p-2"><a href="{{ route('pillar-project.show', $myapprovedproject->project_id)}}" class="btn btn-outline-success" data-bs-toggle="tooltip" data-bs-placement="top" title="view project full details">
                                                                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                                                                    <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                                                                                    <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                                                                                </svg></a>
                                                                        </td>
                                                                        <td class="w-30 p-2"><a href="{{ route('pillar-project.edit', $myapprovedproject->project_id)}}" class="btn btn-outline-info btn-md" data-bs-toggle="tooltip" data-bs-placement="top" title="view update project details">
                                                                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-arrow-up-circle" viewBox="0 0 16 16">
                                                                                    <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-7.5 3.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V11.5z" />
                                                                                </svg>
                                                                            </a>
                                                                        </td>
                                                                        <td class="w-30 p-2">
                                                                            {{-- <select class="form-control form-group col-lg-12" aria-label="Large" id="ref_kpi" name="selectProject"
                                                                                                                                            aria-describedby="inputGroup-sizing-sm">
                                                                                                                                            <option value="select">Create new </option>
                                                                                                                                            <option value="indicator1">New Request</option>
                                                                                                                                            <option value="indicator4">New Activity</option>
                                                                     <option value="indicator4">New Sub Activity</option>
                                                                                                                                            </option>
                                                                                                                                        </select> --}}
                                                                            <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#ds-proj-createNewRequest">
                                                                                create a new
                                                                            </button>
                                                                            <!-- Modal -->
                                                                            <div class="modal fade" id="ds-proj-createNewRequest" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" data-proj="{{ $myapprovedproject->project_id }}" data-user="{{ Auth::user()->user_id }}">
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

                                                                                                    {{-- <a href="{{ route('ds-create-new-activity', ['projid' =>  Crypt::encrypt($myapprovedproject->project_id)]) }}"></a> --}}
                                                                                                    <a href="{{ route('ds-create-new-project-activity', $myapprovedproject->project_id) }}" class="list-group-item list-group-item-action">
                                                                                                        New project activity
                                                                                                    </a>

                                                                                                </li>
                                                                                                <li class="list-group-item">
                                                                                                    <a href="{{ route('create-new-training-advance-request', ['projid' => $myapprovedproject->project_id]) }}" class="list-group-item list-group-item-action">
                                                                                                        Training Advance Request
                                                                                                    </a>

                                                                                                </li>
                                                                                                <li class="list-group-item">
                                                                                                    <a href="{{ route('create-new-training-advance-request', ['projid' => $myapprovedproject->project_id]) }}" class="list-group-item list-group-item-action">
                                                                                                        Travel Advance request
                                                                                                    </a>

                                                                                                <li class="list-group-item">
                                                                                                    <a href="{{ route('create-allowance-request', ['projid' => $myapprovedproject->project_id]) }}" class="list-group-item list-group-item-action">
                                                                                                        Allowance Request
                                                                                                    </a>
                                                                                                </li>
                                                                                                <li class="list-group-item">
                                                                                                    <a href="{{ route('create-new-per-diem-claim', ['projid' => $myapprovedproject->project_id]) }}" class="list-group-item list-group-item-action">
                                                                                                        Per Diem claim
                                                                                                    </a>
                                                                                                </li>
                                                                                                <li class="list-group-item">
                                                                                                    <a href="{{ route('create-new-petty-cash', ['projid' => $myapprovedproject->project_id]) }}" class="list-group-item list-group-item-action">
                                                                                                        Petty Cash
                                                                                                    </a>
                                                                                                </li>
                                                                                                <li class="list-group-item">
                                                                                                    <a href="{{ route('create-payment-requisition', ['projid' => $myapprovedproject->project_id]) }}" class="list-group-item list-group-item-action">
                                                                                                        Payment Requisition
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
                                        <div class="tab-pane fade" id="vds-ds-project-ed-pills-denied-content" role="tabpanel" aria-labelledby="vdsreqs-pills-messages-tab">

                                            {{-- my denied projects --}}
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="card">
                                                        <div class="card-content table-responsive">
                                                            <br />

                                                            <table class="table table-bordered table-hover">
                                                                <p><strong>My Denied Projects</strong></p>
                                                                <thead>
                                                                    <tr>
                                                                        <th scope="col">#</th>
                                                                        <th scope="col">project title</th>
                                                                        <th scope="col-md-4">Total Estimated cost</th>
                                                                        <th scope="col">current stage</th>
                                                                        <th scope="col">status</th>
                                                                        <th scope="col">Date created</th>
                                                                        <th scope="col"></th>
                                                                        <th scope="col"></th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>

                                                                    @foreach($mydeniedprojects as $mydeniedproject)
                                                                    <tr>
                                                                        <th scope="row">{{ $mydeniedproject->project_id }}</th>
                                                                        <td class="w-30 p-2">{{ $mydeniedproject->project_title }}</td>
                                                                        <td class="w-30 p-2">{{ $mydeniedproject->total_project_cost }}</td>
                                                                        <td class="w-30 h-30 p-4">{{ $mydeniedproject->current_stage }}</td>
                                                                        <td class="w-30 h-30 p-4">{{ $mydeniedproject->review_status }}</td>
                                                                        <td class="w-10 p-2">{{ $mydeniedproject->created_at }}</td>
                                                                        <td class="w-10 p-2"><a href="{{ route('pillar-project.show', $mydeniedproject->project_id)}}" class="btn btn-outline-success">view details</a>
                                                                        </td>
                                                                        <td class="w-30 p-2"><a href="{{ route('pillar-project.edit', $mydeniedproject->project_id)}}" class="btn btn-outline-info btn-md">update</a>
                                                                        </td>
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
                                        <div class="tab-pane fade" id="vds-ds-project-ed-pills-all-content" role="tabpanel" aria-labelledby="vdsreqs-pills-settings-tab">


                                            {{-- my retirements --}}
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="card">
                                                        <div class="card-content table-responsive">
                                                            <br />
                                                            <table class="table table-bordered table-hover">
                                                                <p><strong>All projects under this pillar</strong></p>
                                                                <thead>
                                                                    <tr>
                                                                        <th scope="col">#</th>
                                                                        <th scope="col">project title</th>
                                                                        <th scope="col-md-4">Total Estimated cost</th>
                                                                        <th scope="col">current stage</th>
                                                                        <th scope="col">status</th>
                                                                        <th scope="col">Date created</th>
                                                                        <th scope="col"></th>
                                                                        <th scope="col"></th>


                                                                    </tr>
                                                                </thead>
                                                                <tbody>

                                                                    @foreach($pillarprojects as $pillarproject)
                                                                    <tr>
                                                                        <th scope="row">{{ $pillarproject->project_id }}</th>
                                                                        <td class="w-30 p-2">{{ $pillarproject->project_title }}</td>

                                                                        <td class="w-30 p-2">{{ $pillarproject->total_project_cost }}</td>
                                                                        <td class="w-30 h-30 p-4">{{ $pillarproject->current_stage }}</td>
                                                                        <td class="w-30 h-30 p-4">{{ $pillarproject->review_status }}</td>
                                                                        <td class="w-10 p-2">{{ $pillarproject->created_at }}</td>
                                                                        <td class="w-10 p-2"><a href="{{ route('pillar-project.show', $pillarproject->project_id)}}" class="btn btn-outline-success">view details</a>
                                                                        </td>
                                                                        <td class="w-30 p-2"><a href="{{ route('pillar-project.edit', $pillarproject->project_id)}}" class="btn btn-outline-info btn-md">update</a>
                                                                        </td>
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

                                        <div class="tab-pane fade" id="ds-pna-staff-proj-content" role="tabpanel" aria-labelledby="nav-profile-tab">
                                            <br />
                                            <br />
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="card">
                                                        <div class="card-content table-responsive">
                                                            <br />
                                                            <div class="alert alert-primary" role="alert">
                                                                No current record for this <a href="#" class="alert-link">section</a>. If pillar staff creates a project request it will show up here.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end of SECOND column -->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="ds-pna-lm-response-content" role="tabpanel" aria-labelledby="nav-contact-tab">
                                            <br />
                                            <br />
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="card">
                                                        <div class="card-content table-responsive">
                                                            <br />
                                                            <div class="alert alert-primary" role="alert">
                                                                No current response from <a href="#" class="alert-link">line manager</a>. If you get a project response it will show up here.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end of SECOND column -->
                                                </div>
                                            </div>
                                        </div>






                                        <!-- start of financial-analytics data panel -->
                                        <div class="tab-pane fade" id="data-science-timesheet-md" role="tabpanel" aria-labelledby="data-science-timesheet-tab-md">
                                            <br />
                                            <p>date:</p>
                                            <h2>01 January 2021</h2>
                                            <br />
                                            <div class="row">
                                                <div class="col-lg-12">

                                                    <nav>
                                                        <div class="nav nav-tabs" id="ds-tms-nav-tab" role="tablist">
                                                            <a class="nav-item nav-link active" id="ds-tms-nav-home-tab" data-toggle="tab" href="#ds-tms-nav-home" role="tab" aria-controls="nav-home" aria-selected="true">My
                                                                Timesheet</a>
                                                            <a class="nav-item nav-link" id="ds-tms-nav-profile-tab" data-toggle="tab" href="#ds-tms-nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Staff Timesheet</a>
                                                            <a class="nav-item nav-link" id="ds-tms-nav-contact-tab" data-toggle="tab" href="#ds-tms-nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Response from Line Manager</a>
                                                        </div>
                                                    </nav>
                                                    <div class="tab-content" id="ds-tms-nav-tabContent">
                                                        <div class="tab-pane fade show active" id="ds-tms-nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                                            <br />
                                                            <br />
                                                            {{-- my ds requests --}}
                                                            <div class="row">
                                                                <div class="col-md-2">
                                                                    <div class="nav flex-column nav-pills" id="vds-ds-impr-pills-tab" role="tablist" aria-orientation="vertical">
                                                                        <a class="nav-link active" id="vds-ds-impr-pills-wk1-tab" data-toggle="pill" href="#vds-ds-impr-pills-wk1-content" role="tab" aria-controls="vdsreqs-pills-home" aria-selected="true">Week 1</a>

                                                                        <a class="nav-link" id="vds-ds-impr-pills-wk2-tab" data-toggle="pill" href="#vds-ds-impr-pills-wk2-content" role="tab" aria-controls="vdsreqs-pills-wk2" aria-selected="false">Week 2</a>

                                                                        <a class="nav-link" id="vds-ds-impr-pills-wk3-tab" data-toggle="pill" href="#vds-ds-impr-pills-wk3-content" role="tab" aria-controls="vdsreqs-pills-wk3" aria-selected="false">Week 3</a>
                                                                        <a class="nav-link" id="vds-ds-impr-pills-wk4-tab" data-toggle="pill" href="#vds-ds-impr-pills-wk4-content" role="tab" aria-controls="vdsreqs-pills-wk4" aria-selected="false">Week 4</a>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-10">

                                                                    <div class="tab-content" id="vds-ds-impr-pills-tabContent">
                                                                        <div class="tab-pane fade show active" id="vds-ds-impr-pills-wk1-content" role="tabpanel" aria-labelledby="impr-pills-home-tab">
                                                                            {{-- my retirements --}}
                                                                            <div class="row">
                                                                                <div class="col-lg-12">
                                                                                    <div class="card">
                                                                                        <div class="card-content table-responsive">
                                                                                            <br />
                                                                                            <table class="table table-bordered table-hover">
                                                                                                <p>My retirements that have been
                                                                                                    <strong>reviewed.</strong>
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
                                                                        <div class="tab-pane fade" id="vds-ds-impr-pills-wk2-content" role="tabpanel" aria-labelledby="vdsreqs-pills-profile-tab">
                                                                            {{-- my retirements --}}
                                                                            <div class="row">
                                                                                <div class="col-lg-12">
                                                                                    <div class="card">
                                                                                        <div class="card-content table-responsive">
                                                                                            <br />
                                                                                            <table class="table table-bordered table-hover">
                                                                                                <p>My retirements that have been
                                                                                                    <strong>reviewed.</strong>
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
                                                                        <div class="tab-pane fade" id="vds-ds-impr-pills-wk3-content" role="tabpanel" aria-labelledby="vdsreqs-pills-messages-tab">
                                                                            {{-- my retirements --}}
                                                                            <div class="row">
                                                                                <div class="col-lg-12">
                                                                                    <div class="card">
                                                                                        <div class="card-content table-responsive">
                                                                                            <br />
                                                                                            <table class="table table-bordered table-hover">
                                                                                                <p>My retirements that have been
                                                                                                    <strong>reviewed.</strong>
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
                                                                        <div class="tab-pane fade" id="vds-ds-impr-pills-wk4-content" role="tabpanel" aria-labelledby="vdsreqs-pills-settings-tab">
                                                                            {{-- my retirements --}}
                                                                            <div class="row">
                                                                                <div class="col-lg-12">
                                                                                    <div class="card">
                                                                                        <div class="card-content table-responsive">
                                                                                            <br />
                                                                                            <table class="table table-bordered table-hover">
                                                                                                <p>My retirements that have been
                                                                                                    <strong>reviewed.</strong>
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
                                                        <div class="tab-pane fade" id="ds-tms-nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                                            <br />
                                                            <br />
                                                            {{-- my ds requests --}}
                                                            <div class="row">
                                                                <div class="col-md-2">
                                                                    <div class="nav flex-column nav-pills" id="vds-ds-impr-staff-pills-tab" role="tablist" aria-orientation="vertical">
                                                                        <a class="nav-link active" id="vds-ds-impr-staff-pills-home-tab" data-toggle="pill" href="#vds-ds-impr-staff-pills-home" role="tab" aria-controls="vds-staff-reqs-pills-home" aria-selected="true">Reviewed</a>
                                                                        <a class="nav-link" id="vds-ds-impr-staff-pills-profile-tab" data-toggle="pill" href="#vds-ds-impr-staff-pills-profile" role="tab" aria-controls="vds-staff-reqs-pills-profile" aria-selected="false">Approved</a>
                                                                        <a class="nav-link" id="vds-ds-impr-staff-pills-messages-tab" data-toggle="pill" href="#vds-ds-impr-staff-pills-messages" role="tab" aria-controls="vds-staff-reqs-pills-messages" aria-selected="false">Retirements</a>
                                                                        <a class="nav-link" id="vds-ds-impr-staff-pills-settings-tab" data-toggle="pill" href="#vds-ds-impr-staff-pills-settings" role="tab" aria-controls="vds-staff-reqs-pills-settings" aria-selected="false">All</a>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-10">

                                                                    <div class="tab-content" id="vds-ds-impr-tabContent">
                                                                        <div class="tab-pane fade show active" id="vds-ds-impr-staff-pills-home" role="tabpanel" aria-labelledby="vds-ds-rtrmt-staff-pills-home-tab">

                                                                            {{-- my retirements --}}
                                                                            <div class="row">
                                                                                <div class="col-lg-12">
                                                                                    <div class="card">
                                                                                        <div class="card-content table-responsive">
                                                                                            <br />
                                                                                            <table class="table table-bordered table-hover">
                                                                                                <p>My retirements that have been
                                                                                                    <strong>reviewed.</strong>
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
                                                                        <div class="tab-pane fade" id="vds-ds-impr-staff-pills-profile" role="tabpanel" aria-labelledby="vds-ds-rtrmt-staff-pills-profile-tab">


                                                                            {{-- my retirements --}}
                                                                            <div class="row">
                                                                                <div class="col-lg-12">
                                                                                    <div class="card">
                                                                                        <div class="card-content table-responsive">
                                                                                            <br />
                                                                                            <table class="table table-bordered table-hover">
                                                                                                <p>My retirements that have been
                                                                                                    <strong>reviewed.</strong>
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
                                                                        <div class="tab-pane fade" id="vds-ds-impr-staff-pills-messages" role="tabpanel" aria-labelledby="vds-ds-rtrmt-staff-pills-messages-tab">

                                                                            {{-- my retirements --}}
                                                                            <div class="row">
                                                                                <div class="col-lg-12">
                                                                                    <div class="card">
                                                                                        <div class="card-content table-responsive">
                                                                                            <br />
                                                                                            <table class="table table-bordered table-hover">
                                                                                                <p>My retirements that have been
                                                                                                    <strong>reviewed.</strong>
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
                                                                        <div class="tab-pane fade" id="vds-ds-impr-staff-pills-settings" role="tabpanel" aria-labelledby="vds-ds-rtrmt-staff-pills-settings-tab">

                                                                            {{-- my retirements --}}
                                                                            <div class="row">
                                                                                <div class="col-lg-12">
                                                                                    <div class="card">
                                                                                        <div class="card-content table-responsive">
                                                                                            <br />
                                                                                            <table class="table table-bordered table-hover">
                                                                                                <p>My retirements that have been
                                                                                                    <strong>reviewed.</strong>
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
                                                        <div class="tab-pane fade" id="ds-tms-nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                                                            <br />
                                                            <br />
                                                            {{-- my ds requests --}}
                                                            <div class="row">
                                                                <div class="col-md-2">
                                                                    <div class="nav flex-column nav-pills" id="vds-ds-impr-ed-pills-tab" role="tablist" aria-orientation="vertical">
                                                                        <a class="nav-link active" id="vds-ds-impr-ed-pills-home-tab" data-toggle="pill" href="#vds-ds-impr-ed-pills-home" role="tab" aria-controls="vds-ed-reqs-pills-home" aria-selected="true">Reviewed</a>
                                                                        <a class="nav-link" id="vds-ds-impr-ed-pills-profile-tab" data-toggle="pill" href="#vds-ds-impr-ed-pills-profile" role="tab" aria-controls="vds-ed-reqs-pills-profile" aria-selected="false">Approved</a>
                                                                        <a class="nav-link" id="vds-ds-impr-ed-pills-messages-tab" data-toggle="pill" href="#vds-ds-impr-ed-pills-messages" role="tab" aria-controls="vds-ed-reqs-pills-messages" aria-selected="false">Retirements</a>
                                                                        <a class="nav-link" id="vds-ds-impr-ed-pills-settings-tab" data-toggle="pill" href="#vds-ds-impr-ed-pills-settings" role="tab" aria-controls="vds-ed-reqs-pills-settings" aria-selected="false">All</a>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-10">

                                                                    <div class="tab-content" id="vds-ds-impr-ed-pills-tabContent">
                                                                        <div class="tab-pane fade show active" id="vds-ds-impr-ed-pills-home" role="tabpanel" aria-labelledby="vds-ed-reqs-pills-home-tab">


                                                                            {{-- my retirements --}}
                                                                            <div class="row">
                                                                                <div class="col-lg-12">
                                                                                    <div class="card">
                                                                                        <div class="card-content table-responsive">
                                                                                            <br />
                                                                                            <table class="table table-bordered table-hover">
                                                                                                <p>My retirements that have been
                                                                                                    <strong>reviewed.</strong>
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
                                                                        <div class="tab-pane fade" id="vds-ds-impr-ed-pills-profile" role="tabpanel" aria-labelledby="vdsreqs-pills-profile-tab">

                                                                            {{-- my retirements --}}
                                                                            <div class="row">
                                                                                <div class="col-lg-12">
                                                                                    <div class="card">
                                                                                        <div class="card-content table-responsive">
                                                                                            <br />
                                                                                            <table class="table table-bordered table-hover">
                                                                                                <p>My retirements that have been
                                                                                                    <strong>reviewed.</strong>
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
                                                                        <div class="tab-pane fade" id="vds-ds-impr-ed-pills-messages" role="tabpanel" aria-labelledby="vdsreqs-pills-messages-tab">


                                                                            {{-- my retirements --}}
                                                                            <div class="row">
                                                                                <div class="col-lg-12">
                                                                                    <div class="card">
                                                                                        <div class="card-content table-responsive">
                                                                                            <br />
                                                                                            <table class="table table-bordered table-hover">
                                                                                                <p>My retirements that have been
                                                                                                    <strong>reviewed.</strong>
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
                                                                        <div class="tab-pane fade" id="vds-ds-impr-ed-pills-settings" role="tabpanel" aria-labelledby="vdsreqs-pills-settings-tab">

                                                                            {{-- my retirements --}}
                                                                            <div class="row">
                                                                                <div class="col-lg-12">
                                                                                    <div class="card">
                                                                                        <div class="card-content table-responsive">
                                                                                            <br />
                                                                                            <table class="table table-bordered table-hover">
                                                                                                <p>My retirements that have been
                                                                                                    <strong>reviewed.</strong>
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
        </div>
        <div class="tab-pane fade" id="vds-ds-pna-pills-activities" role="tabpanel" aria-labelledby="vdsreqs-pills-activities-tab">
            {{-- Activities --}}

            <div class="row">
                <div class="col-lg-12">
                    <nav>
                        <div class="nav nav-tabs" id="ds-pna-activities-nav-tab" role="tablist">
                            <a class="nav-item nav-link active" id="ds-nav-pna-my-activities-tab" data-toggle="tab" href="#ds-pna-my-activities-content" role="tab" aria-controls="nav-my-activities" aria-selected="true">My
                                Activities</a>
                            <a class="nav-item nav-link" id="ds-nav-pna-staff-activities-tab" data-toggle="tab" href="#ds-pna-staff-activities-content" role="tab" aria-controls="nav-staff-proj-content" aria-selected="false">Staff Activities</a>
                            <a class="nav-item nav-link" id="ds-pna-activities-lm-response-tab" data-toggle="tab" href="#ds-pna-lm-activities-response-content" role="tab" aria-controls="nav-lm-response" aria-selected="false">Response from Line Manager</a>
                        </div>
                    </nav>
                    <div class="tab-content" id="ds-impr-nav-tabContent">
                        <div class="tab-pane fade show active" id="ds-pna-my-activities-content" role="tabpanel" aria-labelledby="nav-ds-pna-my-activities-content-tab">
                            <br />
                            <br />
                            {{-- my ds requests --}}
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="nav flex-column nav-pills" id="vds-ds-impr-ed-pills-tab" role="tablist" aria-orientation="vertical">
                                        <a class="nav-link active" id="vds-ds-act-ed-pills-reviewed-tab" data-toggle="pill" href="#vds-ds-act-ed-pills-reviewed-content" role="tab" aria-controls="vds-ed-reqs-pills-reviewed" aria-selected="true">On Review</a>

                                        <a class="nav-link" id="vds-ds-act-ed-pills-approved-tab" data-toggle="pill" href="#vds-ds-act-ed-pills-approved-content" role="tab" aria-controls="vds-ed-reqs-pills-approved" aria-selected="false">Approved</a>

                                        <a class="nav-link" id="vds-ds-act-ed-pills-denied-tab" data-toggle="pill" href="#vds-ds-act-ed-pills-denied-content" role="tab" aria-controls="vds-ed-reqs-pills-denied" aria-selected="false">Denied</a>

                                        <a class="nav-link" id="vds-ds-act-ed-pills-all-tab" data-toggle="pill" href="#vds-ds-act-ed-pills-all-content" role="tab" aria-controls="vds-ed-reqs-pills-all" aria-selected="false">All</a>
                                    </div>
                                </div>
                                <div class="col-md-10">

                                    <div class="tab-content" id="vds-ds-act-ed-pills-tabContent">
                                        <div class="tab-pane fade show active" id="vds-ds-act-ed-pills-reviewed-content" role="tabpanel" aria-labelledby="vds-ed-reqs-pills-home-tab">

                                            {{-- my retirements --}}
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="card">
                                                        <div class="card-content table-responsive">
                                                            <br />


                                                            <table class="table table-bordered table-hover">
                                                                <p class="d-flex justify-content-between"><strong>My Activities that are on Administrative review</strong>

                                                                    <a class="btn btn-outline-info btn-lg" href="{{ route('ds-create-new-activity') }}" role="button"> create a new Activity</a>
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
                                                                    @foreach($myactivities as $myact)
                                                                    <tr>
                                                                        <th scope="row">{{ $myact->pillar_act_id }}</th>
                                                                        <td class="w-30 p-2">{{ $myact->act_title }}</td>
                                                                        <td class="w-30 p-2">{{ $myact->total_act_cost }}</td>
                                                                        <td class="w-30  p-2">{{ $myact->current_stage }}</td>
                                                                        <td class="w-10 p-2">{{ $myact->created_at }}</td>
                                                                        <td class="w-30 p-2">
                                                                            <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#ds-act-createNewRequest"> Actions
                                                                            </button>
                                                                            <!-- Modal -->
                                                                            <div class="modal fade" id="ds-act-createNewRequest" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" data-proj="{{ $myact->pillar_act_id }}" data-user="{{ Auth::user()->user_id }}">
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
                                                                                                    <a href="{{ route('ds-create-new-project-activity', $myact->project_id) }}" class="btn  btn-outline-secondary d-flex justify-content-between">
                                                                                                        <i class="fas fa-chalkboard fa-lg mt-auto mb-auto"></i>
                                                                                                        <p class="m-auto"> New Subactivity</p>
                                                                                                    </a>
                                                                                                </li>
                                                                                                <li class="list-group-item">
                                                                                                    <a href="{{ route('pillar-project.show',   $myact->pillar_act_id)}}" class="btn btn-outline-success d-flex justify-content-between" data-bs-toggle="tooltip" data-bs-placement="top" title="view project full details">
                                                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                                                                                            <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                                                                                                            <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                                                                                                        </svg>
                                                                                                        <p class="m-auto">Activity Details</p>
                                                                                                    </a>

                                                                                                </li>
                                                                                                <li class="list-group-item">
                                                                                                    <a href="{{ route('edit-activity', $myact->pillar_act_id)}}" class="btn btn-outline-info btn-md d-flex justify-content-between" data-bs-toggle="tooltip" data-bs-placement="top" title="view update project details">
                                                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-arrow-up-circle" viewBox="0 0 16 16">
                                                                                                            <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-7.5 3.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V11.5z" />
                                                                                                        </svg>
                                                                                                        <p class="m-auto">Edit Activity </p>
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
                                                        </div>
                                                    </div>
                                                    <!-- end of SECOND column -->
                                                </div>

                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="vds-ds-act-ed-pills-approved-content" role="tabpanel" aria-labelledby="vdsreqs-pills-approved-tab">


                                            {{-- my retirements --}}
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="card">
                                                        <div class="card-content table-responsive">
                                                            <br />
                                                            <table class="table table-bordered table-hover">
                                                                <p>My Activities that have been <strong>Approved by the Adminstration</strong></p>

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
                                                                    @foreach($myactivities as $acts)
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
                                        <div class="tab-pane fade" id="vds-ds-act-ed-pills-denied-content" role="tabpanel" aria-labelledby="vdsreqs-pills-messages-tab">

                                            {{-- my retirements --}}
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="card">
                                                        <div class="card-content table-responsive">
                                                            <br />
                                                            <table class="table table-bordered table-hover">
                                                                <p>My Activities that have been <strong>Denied</strong></p>

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
                                        <div class="tab-pane fade" id="vds-ds-act-ed-pills-all-content" role="tabpanel" aria-labelledby="vdsreqs-pills-settings-tab">


                                            {{-- my retirements --}}
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="card">
                                                        <div class="card-content table-responsive">
                                                            <br />
                                                            <table class="table table-bordered table-hover">
                                                                <p>All My <strong>Activities</strong></p>

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
                        <div class="tab-pane fade" id="ds-pna-staff-activities-content" role="tabpanel" aria-labelledby="nav-profile-tab">
                            <br />
                            <br />
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-content table-responsive">
                                            <br />
                                            <table class="table table-bordered table-hover">
                                                <p class="d-flex justify-content-between">
                                                    Staff Activities that are
                                                    on administration review.
                                                    <a class="btn btn-outline-info btn-lg" href="{{ route('ds-create-new-subactivity') }}" role="button"> create a new SubActivity</a>
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
                        <div class="tab-pane fade" id="ds-pna-lm-activities-response-content" role="tabpanel" aria-labelledby="nav-contact-tab">
                            <br />
                            <br />
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-content table-responsive">
                                            <br />
                                            <table class="table table-bordered table-hover">
                                                <p>My retirements that have been
                                                    <strong>reviewed.</strong>
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
        <div class="tab-pane fade" id="vds-ds-pna-pills-sub-act" role="tabpanel" aria-labelledby="vdsreqs-pills-sub-act-tab">

            {{-- Sub   Activities --}}

            <div class="row">
                <div class="col-lg-12">
                    <nav>
                        <div class="nav nav-tabs" id="ds-pna-sub-activities-nav-tab" role="tablist">
                            <a class="nav-item nav-link active" id="ds-nav-pna-my-sub-activities-tab" data-toggle="tab" href="#ds-pna-my-sub-activities-content" role="tab" aria-controls="nav-my-sub-activities" aria-selected="true">My Sub
                                Activities</a>
                            <a class="nav-item nav-link" id="ds-nav-pna-staff-sub-activities-tab" data-toggle="tab" href="#ds-pna-staff-sub-activities-content" role="tab" aria-controls="nav-staff-proj-content" aria-selected="false">Staff Sub Activities</a>
                            <a class="nav-item nav-link" id="ds-pna-sub-activities-lm-response-tab" data-toggle="tab" href="#ds-pna-lm-sub-activities-response-content" role="tab" aria-controls="nav-lm-response" aria-selected="false">Response from Line Manager</a>
                        </div>
                    </nav>
                    <div class="tab-content" id="ds-impr-nav-tabContent">
                        <div class="tab-pane fade show active" id="ds-pna-my-sub-activities-content" role="tabpanel" aria-labelledby="nav-ds-pna-my-sub-activities-content-tab">
                            <br />
                            <br />
                            {{-- my ds requests --}}
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="nav flex-column nav-pills" id="vds-ds-subact-ed-pills-tab" role="tablist" aria-orientation="vertical">
                                        <a class="nav-link active" id="vds-ds-subact-ed-pills-reviewed-tab" data-toggle="pill" href="#vds-ds-subact-ed-pills-reviewed-content" role="tab" aria-controls="vds-ed-reqs-pills-reviewed" aria-selected="true">Reviewed</a>

                                        <a class="nav-link" id="vds-ds-subact-ed-pills-approved-tab" data-toggle="pill" href="#vds-ds-subact-ed-pills-approved-content" role="tab" aria-controls="vds-ed-reqs-pills-approved" aria-selected="false">Approved</a>

                                        <a class="nav-link" id="vds-ds-subact-ed-pills-denied-tab" data-toggle="pill" href="#vds-ds-subact-ed-pills-denied-content" role="tab" aria-controls="vds-ed-reqs-pills-denied" aria-selected="false">Denied</a>

                                        <a class="nav-link" id="vds-ds-subact-ed-pills-all-tab" data-toggle="pill" href="#vds-ds-subact-ed-pills-all-content" role="tab" aria-controls="vds-ed-reqs-pills-all" aria-selected="false">All</a>
                                    </div>
                                </div>
                                <div class="col-md-10">

                                    <div class="tab-content" id="vds-ds-subact-ed-pills-tabContent">
                                        <div class="tab-pane fade show active" id="vds-ds-subact-ed-pills-reviewed-content" role="tabpanel" aria-labelledby="vds-ed-reqs-pills-home-tab">

                                            {{-- my retirements --}}
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="card">
                                                        <div class="card-content table-responsive">
                                                            <br />
                                                            <table class="table table-bordered table-hover">
                                                                <p class="d-flex justify-content-between"><strong>My SubActivities that are on Administrative review</strong>

                                                                    <a class="btn btn-outline-info btn-lg" href="{{ route('ds-create-new-subactivity') }}" role="button"> create a new SubActivity</a>
                                                                </p>
                                                                <thead>
                                                                    <tr>
                                                                        <th scope="col">#</th>
                                                                        <th scope="col">Activity title</th>
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
                                                                            <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#ds-subact-modal"> Actions
                                                                            </button>
                                                                            <!-- Modal -->
                                                                            <div class="modal fade" id="ds-subact-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" data-proj="{{ $myact->pillar_act_id }}" data-user="{{ Auth::user()->user_id }}">
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
                                                                                                    <a href="{{ route('ds-create-new-project-activity', $myact->project_id) }}" class="btn  btn-outline-secondary d-flex justify-content-between">
                                                                                                        <i class="fas fa-chalkboard fa-lg mt-auto mb-auto"></i>
                                                                                                        <p class="m-auto"> New Subactivity</p>
                                                                                                    </a>
                                                                                                </li>
                                                                                                <li class="list-group-item">
                                                                                                    <a href="{{ route('pillar-project.show',   $myact->id)}}" class="btn btn-outline-success d-flex justify-content-between" data-bs-toggle="tooltip" data-bs-placement="top" title="view project full details">
                                                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                                                                                            <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                                                                                                            <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                                                                                                        </svg>
                                                                                                        <p class="m-auto">Activity Details</p>
                                                                                                    </a>

                                                                                                </li>
                                                                                                <li class="list-group-item">
                                                                                                    <a href="{{ route('pillar-subactivity.edit', $myact->id)}}" class="btn btn-outline-info btn-md d-flex justify-content-between" data-bs-toggle="tooltip" data-bs-placement="top" title="view update project details">
                                                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-arrow-up-circle" viewBox="0 0 16 16">
                                                                                                            <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-7.5 3.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V11.5z" />
                                                                                                        </svg>
                                                                                                        <p class="m-auto">Edit Activity </p>
                                                                                                    </a>
                                                                                                </li>
                                                                                                <li class="list-group-item">
                                                                                                    <a href="{{ route('create-allowance-request', ['projid' => $myact->id]) }}" class="list-group-item list-group-item-action">
                                                                                                        Allowance Request
                                                                                                    </a>
                                                                                                </li>
                                                                                                <li class="list-group-item">
                                                                                                    <a href="{{ route('create-new-per-diem-claim', ['projid' => $myact->id]) }}" class="list-group-item list-group-item-action">
                                                                                                        Per Diem claim
                                                                                                    </a>
                                                                                                </li>
                                                                                                <li class="list-group-item">
                                                                                                    <a href="{{ route('create-new-petty-cash', ['projid' => $myact->activity_ref_id]) }}" class="list-group-item list-group-item-action">
                                                                                                        Petty Cash
                                                                                                    </a>
                                                                                                </li>
                                                                                                <li class="list-group-item">
                                                                                                    <a href="{{ route('create-payment-requisition', ['projid' => $myact->activity_ref_id]) }}" class="list-group-item list-group-item-action"> Payment Requisition
                                                                                                    </a>
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
                                                        </div>
                                                    </div>
                                                    <!-- end of SECOND column -->
                                                </div>

                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="vds-ds-subact-ed-pills-approved-content" role="tabpanel" aria-labelledby="vdsreqs-pills-approved-tab">


                                            {{-- my retirements --}}
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="card">
                                                        <div class="card-content table-responsive">
                                                            <br />
                                                            <table class="table table-bordered table-hover">
                                                                <p>My approved <strong>Sub Activities</strong></p>

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
                                        <div class="tab-pane fade" id="vds-ds-subact-ed-pills-denied-content" role="tabpanel" aria-labelledby="vdsreqs-pills-messages-tab">

                                            {{-- my retirements --}}
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="card">
                                                        <div class="card-content table-responsive">
                                                            <br />
                                                            <table class="table table-bordered table-hover">
                                                                <p>My denied <strong>Sub Activities</strong></p>

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
                                        <div class="tab-pane fade" id="vds-ds-subact-ed-pills-all-content" role="tabpanel" aria-labelledby="vdsreqs-pills-settings-tab">


                                            {{-- my retirements --}}
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="card">
                                                        <div class="card-content table-responsive">
                                                            <br />
                                                            <table class="table table-bordered table-hover">
                                                                <p>All My <strong>Sub Activities</strong></p>

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
                        <div class="tab-pane fade" id="ds-pna-staff-sub-activities-content" role="tabpanel" aria-labelledby="nav-profile-tab">
                            <br />
                            <br />
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-content table-responsive">
                                            <br />
                                            <table class="table table-bordered table-hover">
                                                <p>Staff Sub Activities that are
                                                    <strong>on administration review.</strong>
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
                        <div class="tab-pane fade" id="ds-pna-lm-sub-activities-response-content" role="tabpanel" aria-labelledby="nav-contact-tab">
                            <br />
                            <br />
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-content table-responsive">
                                            <br />
                                            <table class="table table-bordered table-hover">
                                                <p>My Sub Activities that are
                                                    <strong>on Line Manager review.</strong>
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
        <!-- start of financial-analytics data panel -->
        <!-- <div class="tab-pane fade" id="projects-nactivities-md-content" role="tabpanel" aria-labelledby="projects-nactivities-tab-md">

            <div class="row">
                <div class="col-md-2">
                    <div class="nav flex-column nav-pills" id="vds-ds-proj-pills-tab" role="tablist" aria-orientation="vertical">
                        <a class="nav-link active" id="vds-ds-pna-pills-proj-tab" data-toggle="pill" href="#vds-ds-pna-pills-proj" role="tab" aria-controls="vdsreqs-pills-proj" aria-selected="true">Projects</a>

                        <a class="nav-link" id="vds-ds-pna-pills-activities-tab" data-toggle="pill" href="#vds-ds-pna-pills-activities" role="tab" aria-controls="vdsreqs-pills-activities" aria-selected="false">Activities</a>

                        <a class="nav-link" id="vds-ds-pna-pills-sub-act-tab" data-toggle="pill" href="#vds-ds-pna-pills-sub-act" role="tab" aria-controls="vdsreqs-pills-sub-act" aria-selected="false">Sub Activities</a>
                    </div>
                </div>
                <div class="col-md-10">
                    <div class="tab-content" id="vds-ds-pna-pills-tabContent">

                    </div>
                </div>
            </div>
        </div> -->
    </div>
    @endsection
