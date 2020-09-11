@extends('layouts.ladmin')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            @if(session()->has('pillraddsuccess'))
            <div class="alert alert-success">
                {{ session()->get('pillraddsuccess') }}
            </div>

            @elseif (session()->has('pillarupdsuccess'))
            <div class="alert alert-success">
                {{ session()->get('pillarupdsuccess') }}
            </div>
            @elseif (session()->has('pillardltsuccess'))
            <div class="alert alert-success">
                {{ session()->get('pillardltsuccess') }}
            </div>

            {{--
            @elseif (session()->has('pillardltsuccess'))
            <div class="alert alert-success">
                {{ session()->get('pillardltsuccess') }}
        </div>

        @elseif (session()->has('pillraddsuccess'))
        <div class="alert alert-success">
            {{ session()->get('pillraddsuccess') }}
        </div>
        @else --}}
        {{-- <div class="alert alert-success">
                {{ session()->get('pillraddsuccess') }}
    </div> --}}
    @endif


    <div class="card">
        <div class="card-header" data-background-color="orange">
            <h4 class="title text-center">dLab Pillars</h4>
            <p class="category text-center">Dlab fundamental pillars below</p>
        </div>
        <div class="card-content table-responsive">

            <div class="row">
                <div class="col-lg-12">
                    <div class="container-fluid">
                        <div class="col-lg-12">
                            <!-- <button type="button" class="btn btn-outline-primary btn-lg">create a new user</button> -->

                            <a class="btn btn-outline-primary btn-lg" href="{{ route('add-new-pillar') }}"
                                role="button"> Add a New Pillar</a>

                            <br />
                            <br />
                        </div>

                        <div class="row">
                            <div class="col-lg-12">
                                <table class="table">
                                    <caption>List of users</caption>
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Pillar Title</th>
                                            <th scope="col">Description</th>
                                            <th scope="col">status</th>
                                            <th scope="col">date created</th>
                                            <th scope="col">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($pillars as $pillar)
                                        <tr>
                                            <th scope="row">{{ $pillar->id }}</th>
                                            <td class="w-30 p-2"><strong>{{ $pillar->pillar_title }}</strong>
                                            </td>
                                            <td class="w-50 h-25 p-3">{{ $pillar->pillar_desc }}</td>
                                            <td class="w-30 p-2">{{ $pillar->pillar_status }}</td>
                                            <td class="w-30 p-2">{{ $pillar->created_at }}</td>
                                            <td class="w-30 p-2"><a href="{{ route('pillars.edit', $pillar->id)}}"
                                                    class="btn btn-outline-info btn-md">edit</a>
                                            </td>
                                            <td>
                                                <form action="{{ route('pillars.destroy', $pillar->id)}}"
                                                method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-outline-danger btn-md"
                                                    type="submit">Delete</button>
                                                </form>

                                            </td>
                                        </tr>

                                        @endforeach
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
</div>
</div>
<!-- end of first column -->
</div>
</div>
</div>

@endsection
