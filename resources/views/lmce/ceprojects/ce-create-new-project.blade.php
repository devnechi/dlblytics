@extends('layouts.llmce')

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
    <form method="post" action="{{ route('ce-pillar-project.store') }}">
        @csrf
        <input type="hidden" value="{{ Auth::user()->user_id }}" name="created_by">
        <input type="hidden" value="{{ Auth::user()->pillar_id }}" name="pillar_ref_id">
        <input type="hidden" value="pending review" name="review_status">
        <input type="hidden" value="submitted" name="current_stage">

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
        <label for="formGroupExampleInput2">Project expected outcomes.</label>
        <div class="row">
            <div class="form-group col-lg-12">
                <div class="form-group multiple-form-group" data-max=6>
                    <div class="form-group input-group-lg">
                        <div class="row">
                            <div class="col-md-6 input-group-lg">
                                <input type="text" name="project_expected_outcomes[]" class="form-control">
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


        <div class="row">
            <div class="form-group col-md-10 input-group-lg">
                <div class="form-group green-border-focus">
                    <label for="fordeptBriefDescription">Brief description
                    </label>
                    <textarea class="form-control" name="project_desc" rows="18" required></textarea>
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
            <div class="form-group col-lg-12">
                <div class="form-group multiple-form-group" data-max=6>
                    <div class="form-group input-group-lg">
                        <div class="row">
                            <div class="col-md-6 input-group-lg">
                                <input type="file" class="form-control-file" name="files[]" id="files">
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
        {{-- <div class="row">
            <div class="form-group col-md-6 input-group-lg">
                <div class="form-group">
                    <p>Upload full document</p>
                    <p><small>the document shouldi in either </small></p>
                    <ul>
                        <li>DOC and DOCX.</li>
                        <li> HTML and . HTM.</li>
                        <li>ODT.</li>
                        <li>PDF.</li>
                        <li> XLS and XLSX.</li>
                        <li> ODS.</li>
                        <li>PPT and . PPTX.</li>
                        <li>TXT.</li>
                    </ul></small></p>
                    <input type="file" class="form-control-file" name="project_file_title" id="project_file_title">
                </div>
            </div>
        </div> --}}
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
@endsection
