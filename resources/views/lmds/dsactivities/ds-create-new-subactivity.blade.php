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
    </div>
    <br />
    @endif

    <div class="row">
        <div class="col-lg-12">
            <h4 class="title text-center">New SubActivity </h4>
        </div>
    </div>
    <form method="post" enctype="multipart/form-data" action="{{ route('pillar-subactivity.store') }}">
        @csrf
        <input type="hidden" value="{{ Auth::user()->user_id }}" name="created_by">
        <input type="hidden" value='submited' name="review_status">
        <input type="hidden" value='finance' name="current_stage">
        <input type="hidden" value="{{Auth::user()->pillar_id}}" name="pillar_ref_id">


        <label for="forDepartmentTitle">project reference</label>
        <div class="row">
            <div class="form-group col-lg-12">
                <div class="form-group multiple-form-group" data-max=6>
                    <div class="form-group input-group-lg">
                        <div class="row">
                            <div class="col-md-6 input-group-lg">
                                <select class="form-control form-group col-lg-12" aria-label="Large" id="activity_ref_id" name="activity_ref_id"
                                {{empty($act_id) ?'':'disabled="true"'}}aria-describedby="inputGroup-sizing-sm">
                                    <option value="">Select Activity </option>

                                    @foreach($acts as $act)
                                    <option value="{{$act->pillar_act_id}}" {{$act_id == $act->pillar_act_id?'selected ':''}}>{{$act->act_title}}</option>
                                    @endforeach
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
                        <div class="row">
                            <div class="col-md-6 input-group-lg">
                                <select class="form-control form-group col-lg-12" aria-label="Large" id="selectProject" name="pinvolved[]" aria-describedby="inputGroup-sizing-sm">
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
                                <span class="input-group-btn"><button type="button" class="btn btn-outline-primary btn-add">+
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
                <label for="forDepartmentTitle">Sub activity Title</label>
                <input type="text" class="form-control" name="subact_title" placeholder="" required>
            </div>
        </div>
        <p>Sub activity estimated duration</p>
        <div class="row">
            <div class="form-group col-md-4 input-group-lg">
                <label for="forDepartmentTitle">Start Date</label>
                <input type="date" class="form-control" name="start_date">
            </div>
            <div class="form-group col-md-4 input-group-lg">
                <label for="forDepartmentTitle">End Date</label>
                <input type="date" class="form-control" name="end_date">
            </div>
        </div>
        <label for="formGroupExampleInput2">Sub activity objectives.</label>
        <div class="row">
            <div class="form-group col-lg-12">
                <div class="form-group multiple-form-group" data-max=6>
                    <div class="form-group input-group-lg">
                        <div class="row">
                            <div class="col-md-6 input-group-lg">
                                <input type="text" name="subact_objectives[]" class="form-control">
                            </div>
                            <div class="col-md-2 input-group-lg">
                                <span class="input-group-btn"><button type="button" class="btn btn-outline-primary btn-add"> add +
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
                <select class="form-control form-group col-lg-12" onchange="countrychange(this)" aria-label="Large" id="selectProject" name="country" aria-describedby="inputGroup-sizing-sm">
                    <option value="">Select country</option>
                    @foreach($countries as $country)
                    <option value="{{$country }}">{{$country }}</option>
                    @endforeach

                </select>
            </div>
            <div class="form-group col-md-4 reg input-group-lg " style="display: none;">
                <label for="forDepartmentTitle">Region</label>
                <select class="form-control form-group col-lg-12" aria-label="Large" id="selectProject" name="region" aria-describedby="inputGroup-sizing-sm">
                    <option value="">Select region</option>
                    @foreach($regions as $region)
                    <option value="{{$region}}">{{$region}}</option>
                    @endforeach


                </select>
            </div>
            <div class="form-group col-md-4 input-group-lg">
                <label for="forDepartmentTitle">Venue</label>
                <input type="Text" class="form-control" placeholder="Enter Venue" name="venue">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-10 input-group-lg">
                <div class="form-group green-border-focus">
                    <label for="fordeptBriefDescription">Brief description
                    </label>
                    <textarea class="form-control" name="subact_desc" rows="6" required></textarea>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-4 input-group-lg">
                <label for="forDepartmentTitle">Total Estiamated cost</label>
                <input type="text" class="form-control" name="total_subactivity_cost" value="" placeholder="" required>
            </div>
        </div>
        <div class="row justify-content-end">
            <div class="form-group col-md-6 input-group-lg ">
                <div class="form-group ">
                    <button type="submit" class="btn btn-outline-success  rounded">Save</button>
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

    function totalcost(e) {
        var f = document.getElementById('tcost');

        f.value = e.target.value * $('#number').val() * $('#qty').val();

    }
</script>
@endsection
