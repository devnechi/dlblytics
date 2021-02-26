@extends('layouts.lfinanceadmin')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header" data-background-color="orange">
                    <h4 class="title text-center">Full Pillar Details</h4>
                    <p class="category text-center">full pillar</p>
                </div>
                <div class="card-content table-responsive">
                    <br />
                    <h2> Pillar Details</h2>
                    <br />

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
                                            <h3><strong>{{ $pillar->pillar_title }}</strong></h3>

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
                                            <h3><strong>{{ $pillar->managers_id }}</strong></h3>

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
                                            <h3><strong>{{ $pillar->pillar_status }}</strong></h3>

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
                                            <h3><strong>{{ $pillar->date_created }}</strong></h3>

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
                                            <p><strong>{{ $pillar->pillar_desc }}</strong></p>

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
