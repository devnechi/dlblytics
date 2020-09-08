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
            <div class="row">

                <div class="card">
                    <div class="card-header" data-background-color="orange">
                        <h4 class="title text-center">Platform Users</h4>
                        <p class="category text-center">Users can be managed from here</p>
                    </div>
                    <div class="card-content table-responsive">
                        <div class="row">
                            <div class="col-lg-12">
                                <!-- <button type="button" class="btn btn-outline-primary btn-lg">create a new user</button> -->

                                <a class="btn btn-outline-primary btn-lg" href="{{ route('create-user') }}"
                                    role="button">create new user</a>

                                <br />
                                <br />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-9 offset-md-3">
                                <form class="form-inline">
                                    <div class="col-md-4">
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" placeholder="Enter user email..."
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
                                    <div class="col-lg-10 col-offset-md-2">
                                        <table class="table">
                                            <caption>List of users</caption>
                                            <thead>
                                                <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">First</th>
                                                    <th scope="col">Last</th>
                                                    <th scope="col">Email</th>
                                                    <th scope="col">status</th>
                                                    <th scope="col">date created</th>
                                                    <th scope="col">Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td>Mark</td>
                                                    <td>Otto</td>
                                                    <td>Mark@Mark.com</td>
                                                    <td>active</td>
                                                    <td>12-03-2020</td>
                                                    <td><button type="button" class="btn btn-outline-info">Edit
                                                            user</button>
                                                        <button type="button"
                                                            class="btn btn-outline-warning">delete</button>
                                                    <td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">2</th>
                                                    <td>Jacob</td>
                                                    <td>Thornton</td>
                                                    <td>Jacob@Jacob.com</td>
                                                    <td>Active</td>
                                                    <td>3-05-2008</td>
                                                    <td><button type="button" class="btn btn-outline-info">Edit
                                                            user</button>
                                                        <button type="button"
                                                            class="btn btn-outline-warning">delete</button>
                                                    <td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">3</th>
                                                    <td>Larry</td>
                                                    <td>the Bird</td>
                                                    <td>Larry@twitter.com</td>
                                                    <td>Pending</td>
                                                    <td>5-08-2016</td>
                                                    <td><button type="button" class="btn btn-outline-info">Edit
                                                            user</button>
                                                        <button type="button"
                                                            class="btn btn-outline-warning">delete</button>
                                                    <td>
                                                </tr>
                                            </tbody>
                                        </table>
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
