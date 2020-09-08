@extends('layouts.ladmin')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header" data-background-color="orange">
                    <h4 class="title text-center">Update Pillar</h4>
                    <p class="category text-center">update selected pillar</p>
                </div>
                <div class="card-content table-responsive">
                    <br />
                    <h2>Update Pillar Details</h2>
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

                    <form method="post" action="{{ route('pillars.update', $pillar->id) }}">
                        @method('PATCH')
                        @csrf
                        <input type="hidden" value="{{ Auth::user()->id }}" name="creator_id">

                        <div class="row">
                            <div class="form-group col-md-6 input-group-lg">
                                <label for="forPillarTitle">Pillar Title</label>
                                <input type="text" class="form-control" name="pillar_title"
                                    value="{{ $pillar->pillar_title }}"
                                    placeholder="" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6 input-group-lg">
                                <label for="forpillar_status">Pillar Status</label>
                                <select class="form-control" aria-label="Large" name="pillar_status"
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
                                    <textarea class="form-control" name="pillar_desc" rows="10" required>{{ $pillar->pillar_desc }}</textarea>
                                </div>
                            </div>
                        </div>

                        <div class="row">

                            <div class="form-group offset-md-8 col-md-4 input-group-lg push-right">
                                <button type="submit" class="btn btn-outline-info btn-lg">update</button>
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
