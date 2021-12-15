@extends('layouts.llmds')

@section('content')
<div class="container">
    <div class="row">


        <div class="col-md-9">
            <div class="card">
                <div class="card-header">Imprest {{ $imprest->id }}</div>
                <div class="card-body">

                    <a href="{{ route('imprest.index') }}" title="Back">
                        <button class="btn btn-warning btn-sm">
                            <i class="fa fa-arrow-left" aria-hidden="true"></i> Back
                        </button>
                    </a>
                    <a href="{{ route('imprest.edit', $imprest->id) }}" title="Edit Imprest">
                        <button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit
                        </button>
                   </a>

                    <form method="POST" action="{{ route('imprest.destroy', $imprest->id) }}" accept-charset="UTF-8" style="display:inline">
                        {{ method_field('DELETE') }}
                        {{ csrf_field() }}
                        <button type="submit" class="btn btn-danger btn-sm" title="Delete Imprest" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                    </form>
                    <br />
                    <br />

                    <div class="table-responsive">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <th>ID</th>
                                    <td>{{ $imprest->id }}</td>
                                </tr>
                                <tr>
                                    <th> Imp Title </th>
                                    <td> {{ $imprest->imp_title }} </td>
                                </tr>
                                <tr>
                                    <th> Requested By </th>
                                    <td> {{ $imprest->requested_by }} </td>
                                </tr>
                                <tr>
                                    <th> Ref No </th>
                                    <td> {{ $imprest->ref_no }} </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
