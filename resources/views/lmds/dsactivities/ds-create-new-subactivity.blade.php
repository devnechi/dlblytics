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
            <h4 class="title text-center">New SubActivity </h4>
        </div>
    </div>
    <form method="post" enctype="multipart/form-data" action="{{ route('pillar-subactivity.store') }}">
        @csrf
        <input type="hidden" value="{{ Auth::user()->user_id }}" name="created_by">
        <input type="hidden" value='pending review' name="review_status">
        <input type="hidden" value='submitted' name="current_stage">

        <label for="forDepartmentTitle">Activity reference</label>
        <div class="row">
            <div class="form-group col-lg-12">
                <div class="form-group multiple-form-group" data-max=6>
                    <div class="form-group input-group-lg">
                        <div class="row">
                            <div class="col-md-6 input-group-lg">
                            <select class="form-control form-group col-lg-12" aria-label="Large" id="activity_ref_id" name="activity_ref_id"
                                aria-describedby="inputGroup-sizing-sm">
                                <option value="select">Select Activity </option>
                                @foreach($acties as $actv)
                                <option value="{{$actv->pillar_act_id}}">{{$actv->act_title}}</option>
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
                            <select class="form-control form-group col-lg-12" aria-label="Large" id="selectProject" name="pinvolved[]"
                                aria-describedby="inputGroup-sizing-sm">
                                <option value="select">Select individual</option>

                                @if(isset($users))
                                @foreach($users as  $user)
                                <option value="{{$user->user_id}}">{{$user->fname}} {{$user->lname}}</option>
                                @endforeach
                                @else

                                @endif

                            </select>
                            </div>
                            <div class="col-md-2 input-group-lg">
                                <span class="input-group-btn"><button type="button"
                                        class="btn btn-outline-primary btn-add">+
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
                <input type="text" class="form-control" name="subact_title"
                     placeholder=""
                    required>
            </div>
        </div>
        <p>Activity estimated duration</p>
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
        <label for="formGroupExampleInput2">Activity objectives.</label>
        <div class="row">
            <div class="form-group col-lg-12">
                <div class="form-group multiple-form-group" data-max=6>
                    <div class="form-group input-group-lg">
                        <div class="row">
                            <div class="col-md-6 input-group-lg">
                                <input type="text" name="subact_objectives[]" class="form-control">
                            </div>
                            <div class="col-md-2 input-group-lg">
                                <span class="input-group-btn"><button type="button"
                                        class="btn btn-outline-primary btn-add"> add +
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
                <select class="form-control form-group col-lg-12" onchange="countrychange(this)" aria-label="Large" id="selectProject" name="country"
                                aria-describedby="inputGroup-sizing-sm">
                                <option value="select">Select country</option>

                                @foreach($countries as  $country)
                                <option value="{{$country }}">{{$country }}</option>
                                @endforeach

                            </select>
            </div>
            <div class="form-group col-md-4 reg input-group-lg " style="display: none;">
                <label for="forDepartmentTitle">Region</label>
                <select class="form-control form-group col-lg-12" aria-label="Large" id="selectProject" name="region"
                                aria-describedby="inputGroup-sizing-sm">
                                <option value="select">Select region</option>

                                @foreach($regions as  $region)
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
                <input type="text" class="form-control" name="total_subactivity_cost"
                    value="<?= isset($_POST['total_project_cost']) ? $_POST['total_project_cost'] : ''; ?>"
                    placeholder="" required>
            </div>
        </div>
        <div class="row justify-content-end">
            <div class="form-group col-md-6 input-group-lg ">
                <div class="form-group ">
                <button type="button" class="btn btn-warning btn-lg rounded"
                data-toggle="modal" data-target="#imprest">Attach imprest and Submit form</button>
                </div>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="imprest" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Imprest Form</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <div class="form-group">
                        <label for="subcatgname" class="control-label">Funder name</label>
                        <input type="text" name="facil_name" class="form-control" />
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="submit"  class="btn btn-primary">Submit</button>
            </div>
            </div>
        </div>
        </div>
        <br />
        <br />

    </form>
</div>
<script>
 
    function countrychange(event)
    {

        if(event.value=="Tanzania"){
            $(".reg").toggle()
        }
        else{
            $(".reg").hide()
        }

    }
</script>
@endsection
