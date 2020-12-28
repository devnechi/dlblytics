@extends('layouts.llmds')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <h4 class="title text-center">New Imprest Details</h4>
        </div>
    </div>
    <form method="post" action="">
        @csrf
        <input type="hidden" value="{{ Auth::user()->id }}" name="creator_id">
        <div class="row">
            <div class="form-group col-md-4 input-group-lg">
                <label for="forKpi_title">Reference Number: </label>
                <input type="text" class="form-control" name="kpi_title"
                    value="<?= isset($_POST['kpi_title']) ? $_POST['kpi_title'] : ''; ?>" placeholder="" required>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-4 input-group-lg">
                <label for="formGroupProductName">Type of Imprest</label>
                <select class="form-control" aria-label="Large" id="selectProject" name="selectProject"
                    aria-describedby="inputGroup-sizing-sm">
                    <option value="select">Type of Imprest</option>
                    <option value="userid1">Product</option>
                    <option value="userid2">Service </option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-8 input-group-lg">
                <div class="form-group green-border-focus">
                    <label for="forPillarBriefDescription">Imprest Title:
                    </label>
                    <textarea class="form-control" name="kpi_desc" rows="6" required></textarea>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-8 input-group-lg">
                <div class="form-group green-border-focus">
                    <label for="forPillarBriefDescription">Imprest Description:
                    </label>
                    <textarea class="form-control" name="kpi_desc" rows="20" required></textarea>
                </div>
            </div>
        </div>
        </div><br />
<br />
<div class="row">
<div class="form-group col-md-6 input-group-lg">
    {{-- <label for="formGroupProductName">to Be reviewed by</label> --}}
    <select class="form-control" aria-label="Large" id="selectProject" name="selectProject"
        aria-describedby="inputGroup-sizing-sm">
        <option value="select">Prepared by</option>
        <option value="userid1">Chacha</option>
        <option value="userid2">Nguza </option>
    </select>
</div>
</div>
<div class="row">
<div class="form-group col-md-6 input-group-lg">
    {{-- <label for="formGroupProductName">to Be reviewed by</label> --}}
    <select class="form-control" aria-label="Large" id="selectProject" name="selectProject"
        aria-describedby="inputGroup-sizing-sm">
        <option value="select">To be reviewed by</option>
        <option value="userid1">Chacha</option>
        <option value="userid2">Nguza </option>
    </select>
</div>
</div>

<div class="row">
<div class="form-group col-md-6 input-group-lg">
    {{-- <label for="formGroupProductName">to Be reviewed by</label> --}}
    <select class="form-control" aria-label="Large" id="selectProject" name="selectProject"
        aria-describedby="inputGroup-sizing-sm">
        <option value="select">To be approved by</option>
        <option value="userid1">Chacha</option>
        <option value="userid2">Nguza </option>
    </select>
</div>
</div>

<br />
<br />

<div class="row">
    <div class="form-group offset-md-8 col-md-4 input-group-lg push-right">
        <button type="submit" class="btn btn-outline-info btn-lg">create imprest</button>
    </div>
    <div class="form-group offset-md-8 col-md-4 input-group-lg pull-right">
        <button type="button" name="btnCancel" class="btn btn-outline-danger btn-lg">cancel</button>
    </div>
</div>
</form>
</div>
@endsection
