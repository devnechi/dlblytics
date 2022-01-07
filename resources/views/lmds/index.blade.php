@extends('layouts.llmds')
@section('content')
<div class="container-fluid">
    <script>
        $(document).ready(function() {
            $('#nav-tab a[href="#{{old('tab')}}"]').tab('show')
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
                <!-- <div class="col-lg-3">
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
                </div> -->
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="card rounded">
                                <div class="card-content table-responsive d-flex justify-content-between">
                                      <p class=""> projects created </p>
                                    <div class="d-flex justify-content-between">

                                        <div class="m-1">
                                            <h3 class="cardhd">{{count($myprojects)}}</h3>
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
                                <div class="card-content table-responsive d-flex justify-content-between">
                                    <p> Activities created </p>
                                    <div class="d-flex justify-content-between">

                                        <div class="m-1">
                                            <h3 class="cardhd">{{count($myactivities)}}</h3>
                                        </div>
                                        <div class="m-1">
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
                                <div class="card-content table-responsive d-flex justify-content-between">
                                    <p> Sub-Activities recorded </p>
                                    <div class="row justify-content-between">

                                        <div class="m-1">
                                            <h3 class="cardhd">{{count($mysubactivities)}}</h3>
                                        </div>
                                        <div class="m-1">
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
                                <div class="card-content table-responsive d-flex justify-content-between">
                                    <p> other Activities </p>
                                    <div class="row justify-content-between">

                                        <div class="m-1">
                                            <h3 class="cardhd">0</h3>
                                        </div>
                                        <div class="m-1">
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




        <!-- start of financial reports data panel -->



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
