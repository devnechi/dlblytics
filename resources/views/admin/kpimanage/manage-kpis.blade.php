@extends('layouts.ladmin')
@section('content')
<style>
    .form-control {
        border: 1px solid #477bff;
    }

</style>
<div class="container-fluid">

    <div class="row">
        <div class="col-lg-12">
            @if(session()->has('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div>
            @endif
            <div class="row">

                <div class="card">
                    <div class="card-header" data-background-color="orange">
                        <h4 class="title text-center">All Key Perfomance Indicators</h4>
                        <p class="category text-center">KPIs can be managed from here</p>
                    </div>
                    <div class="card-content table-responsive">
                        <div class="row">
                            <div class="col-lg-12">
                                <!-- <button type="button" class="btn btn-outline-primary btn-lg">create a new user</button> -->

                                <a class="btn btn-outline-primary btn-lg" href="{{ route('create-new-kpi') }}"
                                    role="button">create new kpi</a>

                                <br />
                                <br />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-9 offset-md-3">
                                <form class="form-inline">
                                    <div class="col-md-4">
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" placeholder="enter keyword..."
                                                aria-label="User search" aria-describedby="basic-addon2">
                                            <div class="input-group-append">
                                                <button class="btn btn-outline-primary" type="submit">search</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-lg-12">


                                <div class="row">
                                    <div class="col-lg-12 col-offset-md-2">
                                        <table class="table">
                                            <caption>List of key perfomance indicators</caption>
                                            <thead>
                                                <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">KPI Title</th>
                                                    <th scope="col">Description</th>
                                                    <th scope="col">Date created</th>
                                                    <th scope="col">Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                        @foreach($kpis as $kpi)
                                                <tr>
                                                    <th scope="row">{{ $kpi->id }}</th>
                                                    <td class="w-30 p-2">{{ $kpi->kpi_title }}</td>
                                                    <td class="w-30 h-30 p-4">{{ $kpi->kpi_desc }}</td>
                                                    <td class="w-10 p-2">{{ $kpi->created_at }}</td>
                                                    <td class="w-10 p-2"><a href="{{ route('kpis.edit', $kpi->id)}}"
                                                        class="btn btn-outline-info">edit</a>
                                                </td>
                                                <td class="w-20 p-2">
                                                    <form action="{{ route('pillars.destroy', $kpi->id)}}"
                                                    method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-outline-danger"
                                                        type="submit">Delete</button>
                                                    </form>

                                                </td>


                                                </tr>
                                            </tbody>
                                            @endforeach
                                        </table>
                                        {{ $kpis->links() }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
                <!-- end of row -->
            </div>
            <!-- end of first column -->
        </div>
    </div>
</div>
@endsection
