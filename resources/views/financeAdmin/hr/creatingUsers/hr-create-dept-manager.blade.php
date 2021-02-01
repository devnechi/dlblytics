@extends('layouts.lfinanceadmin')

@section('content')
<div class="container-fluid">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h4 class="title text-center">Add new  department manager</h4>
            </div>
        </div>
        @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Error!</strong>
            <ul>
                @foreach ($errors->all() as $error)
                    <li></li>
                @endforeach
            </ul>
        </div>
    @endif
{{--
    <div class="pull-right">
        <a class="btn btn-primary" href="" title="Go back"> <i class="fas fa-backward "></i> </a>
    </div> --}}

        <form method="post" action="">
            @csrf
            <input type="hidden" value="{{ Auth::user()->id }}" name="creator_id">
            {{-- user personal information --}}
            <div class="row">
                <div class="form-group col-md-4 input-group-lg">
                    <label for="forFname">First Name: </label>
                    <input type="text" class="form-control" name="fname"
                        value="<?= isset($_POST['fname']) ? $_POST['fname'] : ''; ?>" placeholder="" required>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-4 input-group-lg">
                    <label for="forMname">Middle Name: </label>
                    <input type="text" class="form-control" name="mname"
                        value="<?= isset($_POST['mname']) ? $_POST['mname'] : ''; ?>" placeholder="">
                </div>
                <div class="form-group col-md-4 input-group-lg">
                    <label for="forLname">Last Name: </label>
                    <input type="text" class="form-control" name="lname"
                        value="<?= isset($_POST['lname']) ? $_POST['lname'] : ''; ?>" placeholder="">
                </div>
            </div>

           <br />
           <br />
            <div class="row">
                <div class="form-group col-md-4 input-group-lg">
                    <label for="fordob">Date of Birth: </label>
                    <input type="date" class="form-control" name="dob"
                        value="<?= isset($_POST['dob']) ? $_POST['dob'] : ''; ?>" placeholder=""
                        required>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-4 input-group-lg">
                    <label for="formGroupProductName">Gender</label>
                    <select class="form-control" aria-label="Large" id="gender" name="gender"
                        aria-describedby="inputGroup-sizing-sm">
                        <option value="select">Select</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-4 input-group-lg">
                    <label for="formartialStatus">Martial Status: </label>
                    <select class="form-control" aria-label="Large" id="martialstatus" name="martialstatus"
                        aria-describedby="inputGroup-sizing-sm">
                        <option value="select">Select</option>
                        <option value="usd">Married</option>
                        <option value="tzs">Widow</option>
                        <option value="tzs">Widower</option>
                        <option value="tzs">Divorced</option>
                        <option value="tzs">Single</option>
                    </select>
                </div>
                <div class="form-group col-md-4 input-group-lg">
                    <label for="fornationality">Nationality: </label>
                    <select class="form-control" aria-label="Large" id="nationality" name="nationality"
                        aria-describedby="inputGroup-sizing-sm">
                        <option value="select">Select</option>
                        <option value="usd">Tanzanian</option>
                        <option value="tzs">Kenyan</option>
                        <option value="tzs">Ugandan</option>
                        <option value="tzs">Rwandan</option>
                        <option value="tzs">Other</option>
                    </select>
                </div>

            </div>

            {{-- user address --}}
            <br />
            <br />
            <br />
            <div class="row">
                <div class="form-group col-md-4 input-group-lg">
                    <label for="forAddress">Address: </label>
                    <input type="text" class="form-control" name="address"
                        value="<?= isset($_POST['address']) ? $_POST['address'] : ''; ?>" placeholder="" required>
                </div>
                <div class="form-group col-md-4 input-group-lg">
                    <label for="forpn">Phone Number: </label>
                    <input type="text" class="form-control" name="phonenumber"
                        value="<?= isset($_POST['phonenumber']) ? $_POST['phonenumber'] : ''; ?>" placeholder="">
                </div>
            </div>
            <div class="row">

                <div class="form-group col-md-4 input-group-lg">
                    <label for="forKpi_dc_timing">Emegency Contact: </label>
                    <input type="text" class="form-control" name="emegency_contact"
                        value="<?= isset($_POST['emegency_contact']) ? $_POST['emegency_contact'] : ''; ?>" placeholder="">
                </div>
            </div>
            {{-- User type and role --}}
            <br />
            <br />
            <br />
            <div class="row">
                <div class="form-group col-md-4 input-group-lg">
                    <label for="forDepartment">Department: </label>
                    <select class="form-control" aria-label="Large" id="selectDepartment" name="role"
                    aria-describedby="inputGroup-sizing-sm">
                    <option value="select">Select</option>
                    <option value="usd">Accounting</option>
                    <option value="tzs">Human resource</option>
                    <option value="tzs">Procument</option>
                    <option value="tzs">IT department</option>
                     </select>
              </div>
            </div>
            <div class="row">
                <div class="form-group col-md-4 input-group-lg">
                    <label for="forposition">position: </label>
                    <input type="text" class="form-control" name="position"
                        value="<?= isset($_POST['position']) ? $_POST['position'] : ''; ?>" placeholder="">
                </div>
                <div class="form-group col-md-4 input-group-lg">
                    <label for="forUserrole">User role: </label>
                    <select class="form-control" aria-label="Large" id="role" name="role"
                    aria-describedby="inputGroup-sizing-sm">
                    <option value="select">User manager role</option>
                    <option value="usd">Accounting Department manager</option>
                    <option value="tzs">Human resource Department manager</option>
                    <option value="tzs">Procument department manager</option>
                    <option value="tzs">IT department manager</option>
                     </select>
              </div>
            </div>


            <div class="row">

                <div class="form-group col-md-4 input-group-lg">
                    <label for="forKpi_dc_timing">Driving Licence Num: </label>
                    <input type="text" class="form-control" name="driving_license"
                        value="<?= isset($_POST['driving_license']) ? $_POST['driving_license'] : ''; ?>" placeholder="">
                </div>

                <div class="form-group col-md-4 input-group-lg">
                    <label for="forKpi_dc_timing">TIN Num: </label>
                    <input type="text" class="form-control" name="tin_number"
                        value="<?= isset($_POST['tin_number']) ? $_POST['tin_number'] : ''; ?>" placeholder="">
                </div>
            </div>

             {{-- user login info --}}


            <div class="row">
                <div class="form-group col-lg-12 input-group-lg">
                    <div class="form-group green-border-focus">
                        <label for="forjobBriefDescription">Staff job description summary:
                        </label>
                        <textarea class="form-control" name="job_description" rows="10" required></textarea>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-6 input-group-lg">
                    <label for="forbankusername">Bank Account User name: </label>
                    <input type="text" class="form-control" name="bankusername"
                        value="<?= isset($_POST['bankusername']) ? $_POST['bankusername'] : ''; ?>" placeholder="">
                </div>

                <div class="form-group col-md-4 input-group-lg">
                    <label for="forbankname">Bank Name: </label>
                    <input type="text" class="form-control" name="bankname"
                        value="<?= isset($_POST['bankname']) ? $_POST['bankname'] : ''; ?>" placeholder="">
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-6 input-group-lg">
                    <label for="forbankaccnumber">Bank Account Number: </label>
                    <input type="text" class="form-control" name="bankaccnumber"
                        value="<?= isset($_POST['bankaccnumber']) ? $_POST['bankaccnumber'] : ''; ?>" placeholder="">
                </div>

                <div class="form-group col-md-4 input-group-lg">
                    <label for="forposition">Currency Type: </label>
                    <select class="form-control" aria-label="Large" id="currencyType" name="currencyType"
                        aria-describedby="inputGroup-sizing-sm">
                        <option value="select">Select</option>
                        <option value="usd">USD</option>
                        <option value="tzs">TZS</option>

                    </select>
                </div>

                <div class="form-group col-md-4 input-group-lg">
                    <label for="fortotalsalary">Total Salary: </label>
                    <input type="text" class="form-control" name="totalsalary"
                        value="<?= isset($_POST['totalsalary']) ? $_POST['totalsalary'] : ''; ?>" placeholder="">
                </div>
            </div>
            <br />
            <br />
            <br />
            <div class="row">
                <div class="form-group col-md-4 input-group-lg">
                <select class="form-control" aria-label="Large" id="working_type" name="working_type"
                aria-describedby="inputGroup-sizing-sm">
                <option value="select">Working Type</option>
                <option value="usd">Full-time</option>
                <option value="tzs">Part-time</option>

            </select>
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-4 input-group-lg">
                <select class="form-control" aria-label="Large" id="useraccStatus" name="useraccStatus"
                        aria-describedby="inputGroup-sizing-sm">
                        <option value="select">User status</option>
                        <option value="usd">Active</option>
                        <option value="tzs">Pending</option>

                    </select>
                </div>
            </div>

            <br />
            <br />
            <br />
            <div class="row">
                <div class="form-group col-md-4 input-group-lg">
                    <label for="fortotalsalary">{{ __('E-Mail Address') }} </label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

            </div>
            <div class="row">
                <div class="form-group col-md-4 input-group-lg">
                    <label for="forKpi_title">Password: </label>
                    <input type="text" class="form-control" name="password"
                    value="<?= isset($_POST['password']) ? $_POST['password'] : ''; ?>"
                    placeholder="" required>
                </div>
            </div>

            <br />
            <br />
            <br />

            <div class="row">
                <div class="form-group col-md-6 input-group-lg">
                    <div class="form-group">
                        <label for="exampleFormControlFile1">Upload User Photo</label>
                        <input type="file" class="form-control-file" id="uploadUserPhoto">
                      </div>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-6 input-group-lg">
                    <div class="form-group">
                        <label for="exampleFormControlFile1">Upload User contract</label>
                        <input type="file" class="form-control-file" id="uploadUserContract">
                      </div>
                </div>
            </div>

            <div class="row">
                <div class="form-group offset-md-6 col-md-6 input-group-lg push-right">
                    <button type="submit" class="btn btn-outline-info btn-lg">Create new user</button>
                </div>
                <div class="form-group offset-md-6 col-md-6 input-group-lg pull-right">
                    <button type="button" name="btnCancel" class="btn btn-outline-danger btn-lg">cancel entry</button>
                </div>
            </div>
        </form>
    </div>

</div>
@endsection
