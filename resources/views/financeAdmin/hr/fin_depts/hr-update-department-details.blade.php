@extends('layouts.lfinanceadmin')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header" data-background-color="orange">
                    <h4 class="title text-center">Update Department</h4>
                    <p class="category text-center">update selected departments</p>
                </div>
                <div class="card-content table-responsive">
                    <br />
                    <h2>Update Department Details</h2>
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

                    <form method="post" action="{{ route('hrdepts.update', $department->dept_id) }}">
                        @method('PATCH')
                        @csrf
                        <input type="hidden" value="{{ Auth::user()->id }}" name="creator_id">

                        <div class="row">
                            <div class="form-group col-md-6 input-group-lg">
                                <label for="forDeptTitle">Department Title</label>
                                <input type="text" class="form-control" name="dept_title"
                                    value="{{ $department->dept_title }}"
                                    placeholder="" required>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-md-6 input-group-lg">
                                <label for="forpillar_status">Select Manager</label>
                                <select class="form-control" aria-label="Large" name="department_manager"
                                    aria-describedby="inputGroup-sizing-sm">
                                    <option value="select">select</option>
                                    <option value="1">Alex Johns</option>
                                    <option value="2">Chuck norris</option>
                                    <option value="3">John wick</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6 input-group-lg">
                                <label for="forpillar_status">Department Status</label>
                                <select class="form-control" aria-label="Large" name="department_status"
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
                                    <label for="forPillarBriefDescription">Brief description
                                    </label>
                                    <textarea class="form-control" name="dept_description" rows="10" required>{{ $department->dept_description }}</textarea>
                                </div>
                            </div>
                        </div>

                        <div class="row">

                            <div class="form-group offset-md-8 col-md-4 input-group-lg push-right">
                                <button type="submit" class="btn btn-outline-info btn-lg">update department</button>
                            </div>
                            <div class="form-group offset-md-8 col-md-4 input-group-lg pull-right">
                                <a href="{{ route('manage-pillars')}}"
                                class="btn btn-outline-warning btn-lg">cancel</a>
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
