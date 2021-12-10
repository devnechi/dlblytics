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
            <h4 class="title text-center">New project details</h4>
        </div>
    </div>
    <form method="post" enctype="multipart/form-data" action="{{ route('pillar-project.update') }}">
        @csrf
        <input type="hidden" value="{{ Auth::user()->user_id }}" name="created_by">
        <input type="hidden" value="{{ Auth::user()->pillar_id }}" name="pillar_ref_id">
      

        <input type="hidden" value='pending review' name="review_status">
        <input type="hidden" value='submitted' name="current_stage">
        <label for="formGroupExampleInput2">Project Lead.</label>
        <div class="row">
           <div class="col-md-4 input-group-lg">
                            <select class="form-control form-group col-lg-12"                       aria-label="Large" id="selectProject" name="lead"
                                aria-describedby="inputGroup-sizing-sm">
                                <option value="">Select lead</option>
                                @if(isset($lead))
                                @foreach($lead as  $ld)
                                <option value="{{$ld->pillar_act_id}}">{{$ld->act_title}}</option>
                                @endforeach
                                @else

                                @endif

                            </select>
                            </div>
        </div>
        <hr >
        <div class="row">
            <div class="form-group col-md-4 input-group-lg">
                <label for="forDepartmentTitle">Project Title</label>
                <input type="text" class="form-control" name="project_title"
                     placeholder=""
                    required>
            </div>
        </div>

        <p>Project estimated duration</p>
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
        <hr >



        <label for="formGroupExampleInput2">Project objectives.</label>
        <div class="row">
            <div class="form-group col-lg-12">
                <div class="form-group multiple-form-group" data-max=6>
                    <div class="form-group input-group-lg">
                        <div class="row">
                            <div class="col-md-6 input-group-lg">
                                <input type="text" name="project_objectives[]" class="form-control">
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

        <hr >
        <label for="formGroupExampleInput2">Project Funders.</label>
        <div class="row">
            <div class="form-group col-lg-10">
                <div class="form-group multiple-form-group" data-max=6>
                    <div class="form-group input-group-lg">
                        <div class="row">
                            <div class="col-md-6 input-group-lg">
                            <select class="form-control form-group col-lg-12" aria-label="Large" id="selectProject" name="pfunder[]"
                                aria-describedby="inputGroup-sizing-sm">
                                <option value="">Select funder</option>

                                @if(isset($facil))
                                @foreach($facil as  $fac)
                                <option value="{{$fac->name}}">{{$fac->name}}</option>
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
            <div class="col-md-2 input-group-lg">
                                <span class="input-group-btn"><button type="button"
                                        class="btn btn-outline-primary "
                                        data-toggle="modal" data-target="#fundermodal"
                                        > add new founder
                                    </button></span>
                                {{-- <hr style="background-color: aqua;"> --}}
                            </div>
        </div>

        <label for="formGroupExampleInput2">Project Partiners.</label>
        <div class="row">
            <div class="form-group col-lg-10">
                <div class="form-group multiple-form-group" data-max=6>
                    <div class="form-group input-group-lg">
                        <div class="row">
                            <div class="col-md-6 input-group-lg">
                            <select class="form-control form-group col-lg-12" aria-label="Large" id="selectProject" name="ppartiner[]"
                                aria-describedby="inputGroup-sizing-sm">
                                <option value="">Select partiner</option>
                                @if(isset($facil))
                                @foreach($facil as  $fac)
                                <option value="{{$fac->name}}">{{$fac->name}}</option>
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
            <div class="col-md-2 input-group-lg">
                                <span class="input-group-btn"><button type="button"
                                        class="btn btn-outline-primary "
                                        data-toggle="modal" data-target="#partinermodal"
                                        > add new partiner
                                    </button></span>
                                {{-- <hr style="background-color: aqua;"> --}}
                            </div>
        </div>
        <hr >


        <div class="row">
            <div class="form-group col-md-10 input-group-lg">
                <div class="form-group green-border-focus">
                    <label for="fordeptBriefDescription">Brief description
                    </label>
                    <textarea class="form-control" name="project_desc" rows="6" required></textarea>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-4 input-group-lg">
                <label for="forDepartmentTitle">Total Estiamated cost</label>
                <input type="text" class="form-control" name="total_project_cost"
                    value="<?= isset($_POST['total_project_cost']) ? $_POST['total_project_cost'] : ''; ?>"
                    placeholder="" required>
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-6 input-group-lg">
                <div class="form-group">
                    <p>Upload technical proposal  document</p>
                    <p><small>the document should be in either </small></p>
                    <ul>
                        <li>PDF.</li>
                    </ul>
                </small></p>
                    <input type="file" class="form-control-file" name="project_tech" id="project_tech">
                </div>
            </div>
            <div class="form-group col-md-6 input-group-lg">
                <div class="form-group">
                    <p>Upload financial proposal document</p>
                    <p><small>the document should be in either </small></p>
                    <ul>
                        <li>PDF. or</li>
                        <li>XLS.</li>
                    </ul></small></p>
                    <input type="file" class="form-control-file" name="project_busi" id="project_file_title">
                </div>
            </div>
        </div>
        <br />
        <br />

        <div class="row">
            <div class="form-group offset-md-8 col-md-4 input-group-lg push-right">
                <button type="submit" class="btn btn-outline-info btn-lg">add new project</button>

            </div>
            <div class="form-group offset-md-8 col-md-4 input-group-lg pull-right">
                <button type="button" name="btnCancel" class="btn btn-outline-danger btn-lg">cancel</button>
            </div>
        </div>
    </form>
</div>

<!-- Modal -->
<div class="modal fade" id="fundermodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Add funder</h5>
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
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" onclick="ajaxed1()" data-toggle="modal" data-target="#subcategorymodal"  class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal -->
<div class="modal fade" id="partnermodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Add Partiner</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="form-group">
                <label for="subcatgname" class="control-label">Partiner name</label>
                <input type="text" name="facil_name" class="form-control" />
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" onclick="ajaxed1()" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<script>
       function ajaxed1() {
            var form_dat = new FormData();
            form_dat.append('facil_name', $('input[name=facil_name]').val());

            $.ajax({
                type: 'POST',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: "{{route('facilitatorpost') }}",
                data: form_dat,
                processData: false,
                contentType: false,
                success: function(data) {
                    if ((data.errors)) {
                        alert(data.errors);
                    } else {
                        window.location.reload();

                        }
                    },





            });
        };
</script>
@endsection
