@extends('layouts.lfinanceadmin')

@section('content')
<div class="container-fluid">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h4 class="title text-center">Add new company bank <strong>account</strong></h4>
            </div>
        </div>
        @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Error!</strong>
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

{{--
    <div class="pull-right">
        <a class="btn btn-primary" href="" title="Go back"> <i class="fas fa-backward "></i> </a>
    </div> --}}

        <form method="post" action="{{ route('add-co-bnk-kks.store')}}">
            @csrf
            <input type="hidden" value="{{ Auth::user()->user_id }}" name="creator_id">
            {{-- user personal information --}}
            <div class="row">
                <div class="form-group col-md-4 input-group-lg">
                    <label for="forFname">Account Title: </label>
                    <input type="text" class="form-control" name="acctitle"
                        value="<?= isset($_POST['acctitle']) ? $_POST['acctitle'] : ''; ?>" placeholder="" required>
                </div>
                <div class="form-group col-md-4 input-group-lg">
                    <label for="forFname">Name of your Bank: </label>
                    <input type="text" class="form-control" name="bankname"
                        value="<?= isset($_POST['bankname']) ? $_POST['bankname'] : ''; ?>" placeholder="" required>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-4 input-group-lg">
                    <label for="forMname">Bank Account Number: </label>
                    <input type="text" class="form-control" name="bankaccno"
                        value="<?= isset($_POST['bankaccno']) ? $_POST['bankaccno'] : ''; ?>" placeholder="">
                </div>
            </div>
            <br />
            <br />
            <div class="row">
                <div class="form-group col-md-4 input-group-lg">
                    <label for="forMname">Bank Account Balance: </label>
                    <input type="text" class="form-control" name="bankaccountbalance"
                        value="<?= isset($_POST['bankaccountbalance']) ? $_POST['bankaccountbalance'] : ''; ?>" placeholder="">
                </div>

                <div class="form-group col-md-4 input-group-lg">
                    <label for="formGroupProductName">Currency type</label>
                    <select class="form-control" aria-label="Large" id="currencyType" name="currencyType"
                        aria-describedby="inputGroup-sizing-sm">
                        <option value="select">Select</option>
                        <option value="usd">TZS</option>
                        <option value="tzs">USD</option>
                    </select>
                </div>
            </div>


            <div class="row">
                <div class="form-group col-md-4 input-group-lg">
                    <label for="forMname">Bank location: </label>
                    <input type="text" class="form-control" name="banklocation"
                        value="<?= isset($_POST['banklocation']) ? $_POST['banklocation'] : ''; ?>" placeholder="">
                </div>
            </div>
            <div class="row justify-content-end">
                <div class="form-group m-2">
                    <button type="submit" class="btn btn-outline-info btn-lg">add new bank account</button>
                </div>
            </div>
    </div>
    </form>
</div>

</div>
@endsection
