@extends('layouts.llmds')

@section('content')
<div class="container-fluid">
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
        <div class="col-lg-12">
            <h4 class="title text-center">Edit Activity</h4>
        </div>
    </div>
    <form method="post" enctype="multipart/form-data" action="{{ route('update-activity') }}">
        @csrf
        <input type="hidden" value="{{ Auth::user()->user_id }}" name="created_by">
        <input type="hidden" value='pending review' name="review_status">
        <input type="hidden" value='submitted' name="current_stage">
        <input type="hidden" value='{{$activ->pillar_act_id}}' name="id">

        <label for="forDepartmentTitle">project reference</label>
        <div class="row">
            <div class="form-group col-lg-12">
                <div class="form-group multiple-form-group" data-max=6>
                    <div class="form-group input-group-lg">
                        <div class="row">
                            <div class="col-md-6 input-group-lg">
                                <select class="form-control form-group col-lg-12" aria-label="Large" id="project_ref_id" name="project_ref_id" aria-describedby="inputGroup-sizing-sm">
                                    @if(isset($proj_id))

                                    @foreach($projs as $prijs)
                                    <option value="{{$prijs->project_id}}" {{ $proj_id==$prijs->project_id?'selected':''}}>{{$prijs->project_title}}</option>
                                    @endforeach
                                    @else
                                    <option value="">Select Project </option>
                                    @foreach($projs as $prijs)
                                    <option value="{{$prijs->project_id}}">{{$prijs->project_title}}</option>
                                    @endforeach
                                    @endif
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <label for="formGroupExampleInput2">Personnel involved.</label>
        <div class="row">
            <div class="form-group col-lg-10">
                <div class="form-group multiple-form-group" data-max=6>
                    <div class="form-group input-group-lg">
                        <div class="d-flex mb-2 listpp">

                            @foreach( $activ->pinvolved as $arriy)
                            @foreach( explode(',', $arriy) as $fnd)
                            <a href="" class="badge badge-light" onclick="remofond(event)">{{$fnd}} <span>&times;</span></a>
                            <input type="hidden" value="{{$fnd}}" name="pinvolved[]">
                            @endforeach
                            @endforeach
                        </div>
                        <div class="row">
                            <div class="col-md-6 input-group-lg">
                                <select class="form-control form-group col-lg-12" aria-label="Large" id="pp"  aria-describedby="inputGroup-sizing-sm">
                                    <option value="">Select individual</option>

                                    @if(isset($users))
                                    @foreach($users as $user)
                                    <option value="{{$user->fname}}">{{$user->fname}} {{$user->lname}}</option>
                                    @endforeach
                                    @else

                                    @endif

                                </select>
                            </div>
                            <div class="col-md-2 input-group-lg">
                                <span class="input-group-btn"><button type="button" class="btn btn-outline-primary " onclick="addpp(this)">+
                                    </button></span>
                                {{-- <hr style="background-color: aqua;"> --}}
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="form-group col-md-6 input-group-lg">
                <label for="forDepartmentTitle">Activity Title</label>
                <input type="text" class="form-control" value="{{$activ->act_title}}" name="act_title" placeholder="" required>
            </div>
        </div>
        <p>Activity estimated duration</p>
        <div class="row">
            <div class="form-group col-md-4 input-group-lg">
                <label for="forDepartmentTitle">Start Date</label>
                <input type="date" class="form-control" value="{{$activ->start_date}}" name="start_date">
            </div>
            <div class="form-group col-md-4 input-group-lg">
                <label for="forDepartmentTitle">End Date</label>
                <input type="date" class="form-control" value="{{$activ->end_date}}" name="end_date">
            </div>
        </div>
        <label for="formGroupExampleInput2">Activity objectives.</label>
               <div class="row">
            <div class="form-group col-lg-12">
                <div class="form-group multiple-form-group" data-max=6>
                    <div class="mb-2 listob">
                        @foreach($activ->act_objectives as $obj)
                        @foreach( explode(',', $obj) as $fnd)
                        <a href="" class="badge badge-light" onclick="remofond(event)">{{$fnd}} <span>&times;</span>
                            <input type="hidden" value="{{$fnd}}" name="act_objectives[]">
                        </a>
                        @endforeach
                        @endforeach
                    </div>

                    <div class="form-group input-group-sm">
                        <div class="row">
                            <div class="col-md-6 input-group-lg">
                                <input type="text" id="pob" class="form-control">
                            </div>

                            <div class="col-md-2 input-group-lg">
                                <span class="input-group-btn">
                                    <button type="button" class="btn btn-outline-primary" onclick="addob(this)"> add +
                                    </button></span>
                                {{-- <hr style="background-color: aqua;"> --}}
                            </div>

                        </div>
                    </div>


                </div>
            </div>
        </div>

        <p>Location</p>
        <div class="row">
            <div class="form-group col-md-4 input-group-lg">
                <label for="Country">Country</label>
                <select class="form-control form-group col-lg-12" onchange="countrychange(this)" aria-label="Large" id="selectProject" name="Country" aria-describedby="inputGroup-sizing-sm">
                    <option value="">Select country</option>
                    @foreach($countries as $country)
                    <option value="{{$country }}"
                     {{$activ->country==$country?'selected':''}}>{{$country }}</option>
                    @endforeach

                </select>
            </div>
            <div class="form-group col-md-4 reg input-group-lg " style="display: none;">
                <label for="forDepartmentTitle">Region</label>
                <select class="form-control form-group col-lg-12" aria-label="Large" id="selectProject" name="Region" aria-describedby="inputGroup-sizing-sm">
                    <option value="">Select region</option>
                    @foreach($regions as $region)
                    <option value="{{$region}}" {{$activ->region==$region?'selected':''}}>{{$region}}</option>
                    @endforeach


                </select>
            </div>
            <div class="form-group col-md-4 input-group-lg">
                <label for="forDepartmentTitle">Venue</label>
                <input type="Text" class="form-control" value="{{$activ->venue}}" placeholder="Enter Venue" name="venue">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-10 input-group-lg">
                <div class="form-group green-border-focus">
                    <label for="fordeptBriefDescription">Brief description
                    </label>
                    <textarea class="form-control" name="act_desc" rows="8" required>
                    {{$activ->act_desc}}
                    </textarea>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-4 input-group-lg">
                <label for="forDepartmentTitle">Total Estiamated cost</label>
                <input type="text" class="form-control" value="{{$activ->total_act_cost}}" name="total_act_cost" value="" placeholder="" required>
            </div>
        </div>
        <div class="row justify-content-end">
            <div class="form-group col-md-6 input-group-lg ">
                <div class="form-group ">
                    <button  class="btn btn-info  rounded"  type="submit">Save</button>
                </div>
            </div>
        </div>

        <br />
        <br />

    </form>
    <!-- Modal -->

</div>

<script>
    function countrychange(event) {

        if (event.value == "Tanzania") {
            $(".reg").toggle()
        } else {
            $(".reg").hide()
        }

    }

    function collps(param) {
        $(param).toggle().style.transition = "all 2s";
    }

    function changedimprest(event) {
        $("#" + event.value).toggle().style.transition = "all 2s";
    }

    function remofond(e) {
            e.preventDefault();
            e.currentTarget.remove();
        }

        function addpp(e) {

            const obv = document.getElementById('pp');
            var n = '<a href="" class="badge badge-light" onclick="remofond(event)">' + obv.value + ' <span>&times;</span><input type="hidden" value="' + obv.value + '" name="pinvolved[]"></a>';
            $('.listpp').append(n)
        }
                function addob(e) {

        const obv = document.getElementById('pob');
        var n = '<a href="" class="badge badge-light" onclick="remofond(event)">' + obv.value + ' <span>&times;</span><input type="hidden" value="' + obv.value + '" name="act_objectives[]"></a>';
        $('.listob').append(n)
        }


</script>
@endsection
