@extends('layouts.lfinanceadmin')
{{-- @extends('layouts.ladmin') --}}
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                {{-- <div class="card-header" data-background-color="orange">

                </div> --}}
                <div class="card-content table-responsive">
                    <h4 class="title text-center">Add New Department</h4>
                    <p class="category text-center">Add a new department to the list</p>

                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div><br />
                    @endif

                    <form method="post" action="{{ route('hrdepts.store') }}">
                        @csrf
                        <input type="hidden" value="{{ Auth::user()->user_id }}" name="creators_id">

                        <div class="row">
                            <div class="form-group col-md-6 input-group-lg">
                                <label for="forDepartmentTitle">Department Title</label>
                                <input type="text" class="form-control form-group col-lg-12" name="dept_title"
                                    value="<?= isset($_POST['dept_title']) ? $_POST['dept_title'] : ''; ?>"
                                    placeholder="" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6 input-group-lg">
                                <label for="forpillar_status">Department Status</label>
                                <select class="form-control form-group col-lg-12" aria-label="Large" name="pillar_status"
                                    aria-describedby="inputGroup-sizing-sm">
                                    <option value="select">select</option>
                                    <option value="active">active</option>
                                    <option value="coming-soon">coming-soon</option>
                                    <option value="not-active">not-active</option>
                                </select>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-lg-8 input-group-lg">
                                <div class="form-group green-border-focus">
                                    <label for="fordeptBriefDescription">Brief description
                                    </label>
                                    <textarea class="form-control" name="dept_description" rows="10" required></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">

                            <div class="form-group offset-md-8 col-md-4 input-group-lg push-right">
                                <button type="submit" class="btn btn-outline-info btn-lg">ADD DEPARTMENT</button>
                            </div>
                            <div class="form-group offset-md-8 col-md-4 input-group-lg pull-right">
                                <button type="button" name="btnCancel" class="btn btn-outline-danger btn-lg">CANCEL
                                    ENTRY</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
            <!-- end of first column -->
        </div>
    </div>
</div>

@endsection
